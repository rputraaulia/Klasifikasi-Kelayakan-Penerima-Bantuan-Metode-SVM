import pandas as pd
from sklearn.model_selection import train_test_split
from sklearn.svm import SVC
from sklearn.metrics import accuracy_score,precision_score, recall_score
from sqlalchemy import MetaData, create_engine
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker
from pyodide.http import open_url
from flask import Flask

app = Flask(__name__)

@app.route('/')
def hello():
    return 'Hello from Python!'

if __name__ == '__main__':
    app.run(debug=True)
    
url_content = open_url("http://localhost/svm/assets/book1.csv")
data = pd.read_csv(url_content,sep=',')
data = data.dropna()
url_content2 = open_url("http://localhost/svm/assets/book2.csv")
data2 = pd.read_csv(url_content2,sep=',')
data2 = data2.dropna()
                   

df = pd.DataFrame(data2)

# Mengambil variabel-variabel yang akan digunakan sebagai fitur
X = data[['c1', 'c2', 'c3', 'c4', 'c5']]
X2 = data2[['c1', 'c2', 'c3', 'c4', 'c5']]

# Mengambil variabel target (label)
y = data['y']
y2 = data2['y']

# Membagi dataset menjadi data latih dan data uji (80% data latih, 20% data uji)
X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)

# Inisialisasi model SVM
model = SVC(kernel='rbf')  # Anda dapat mengganti 'linear' dengan 'rbf' atau jenis kernel lainnya sesuai kebutuhan

# Melatih model dengan data latih
model.fit(X_train, y_train)

# Melakukan prediksi pada data uji
y_pred = model.predict(X2)

y_test = data2['y']

# Melakukan prediksi pada data uji
df['y'] = y_pred

df.to_excel('final.xlsx', index=False, header=False, columns=["Kode Penduduk","y"])

results = pd.DataFrame(df, columns=["Kode Penduduk","y"])
csv = Element('csv')
csv.write(results)
                

