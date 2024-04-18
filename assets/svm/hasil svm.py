import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score,precision_score, recall_score
from sqlalchemy import MetaData, create_engine
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker
from datetime import datetime

# Get the current date and time
current_date_time = datetime.now()

# Extract and print the date
current_date = current_date_time.date()


# Gantilah 'nama_file.csv' dengan nama file dataset
data = pd.read_excel('uploads/book1.xlsx')
data2 = pd.read_excel('uploads/book2.xlsx')
df = pd.DataFrame(data2)

# Mengambil variabel-variabel yang akan digunakan sebagai fitur
X = data[['c1', 'c2', 'c3', 'c4', 'c5']]
X2 = data2[['c1', 'c2', 'c3', 'c4', 'c5']]

# Mengambil variabel target (label)
y = data['y']
y2 = data2['y']

# Membagi dataset menjadi data latih dan data uji (80% data latih, 20% data uji), data training digunakan untuk melatih model yang telah dibuat
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

# Inisialisasi model SVM
model = SVC(kernel='rbf')

# Melatih model dengan data latih
model.fit(X_train, y_train)
# Model (train) yang terbentuk dilakukan uji, dengan melakukan prediksi pada data uji
y_pred = model.predict(X2)
y_test = data2['y']
# Hasil melakukan prediksi pada data uji disimpan di y_pred
df['y'] = y_pred

# Hasil dari data test perhitungan svm disimpan di excel
df.to_excel('hasil_final.xlsx', index=False, header=False, columns=["Kode Penduduk","y"])
results = pd.DataFrame(df, columns=["Kode Penduduk", "c1","c2", "c3", "c4", "c5", "y"])        
print(results)


SQLALCHEMY_DATABASE_URL = "mysql+mysqlconnector://root:@localhost:3306/db_svm"

engine = create_engine(
    SQLALCHEMY_DATABASE_URL,
)

SessionLocal = sessionmaker(autocommit=False, autoflush=False, bind=engine)

meta = MetaData()

conn = engine.connect()


your_dataframe = pd.DataFrame({
'kode':  df['Kode Penduduk'],
 'nilai':  df['y'],
 'tanggal': current_date,
})


your_dataframe.to_sql(name='hasil_klasifikasi', con=engine, if_exists='append', index=False)

