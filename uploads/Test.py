import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score, classification_report, confusion_matrix
from sqlalchemy import MetaData, create_engine
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker
from datetime import datetime
# Get the current date and time
current_date_time = datetime.now()
# Extract and print the date
current_date = current_date_time.date()
data = pd.read_excel('uploads/book1.xlsx')
data2 = pd.read_excel('uploads/book2.xlsx')
df = pd.DataFrame(data2)
# Mengambil variabel-variabel yang akan digunakan sebagai fitur
X = data[['c1', 'c2', 'c3', 'c4', 'c5']]
X2 = data2[['c1', 'c2', 'c3', 'c4', 'c5']]
# Mengambil variabel target (label)
y = data['y']
y2 = data2['y']
# Inisialisasi model SVM
model = SVC(kernel='rbf') 
# Melatih model dengan data latih
model.fit(X, y)
# Melakukan prediksi pada data uji
y_pred = model.predict(X2)
y_test = data2['y']
# Melakukan prediksi pada data uji
df['y'] = y_pred
df.to_excel('uploads/hasil_final.xlsx', index=False, header=False, columns=["Kode Penduduk","y"])
results = pd.DataFrame(df, columns=["Kode Penduduk","y"])
# Evaluasi model
accuracy = accuracy_score(y_test, y_pred)
conf_matrix = confusion_matrix(y_test, y_pred)
classification_rep = classification_report(y_test, y_pred)
# Tampilkan hasil evaluasi
print(f'Accuracy: {accuracy}')
print(f'Confusion Matrix:\n{conf_matrix}')
print(f'Classification Report:\n{classification_rep}')
print("Klasifikasi Data Berhasil, Silahkan Lihat Hasil Klasifikasi pada Menu History")


SQLALCHEMY_DATABASE_URL = "mysql+mysqlconnector://root:@localhost:3306/db_svm"

engine = create_engine(
    SQLALCHEMY_DATABASE_URL,
)

SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

meta = MetaData()

conn = engine.connect()


your_dataframe = pd.DataFrame({
'kode':  df['Kode Penduduk'],
 'nilai': y_pred,
 'tanggal': current_date,
 'lat': df['Lat'],
 'lng': df['lng'],
})


your_dataframe.to_sql(name='hasil_klasifikasi', con=engine, if_exists='append', index=False)

