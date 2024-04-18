
import numpy as np


from sklearn.linear_model import LinearRegression
X = np.array([0.5, 0.5, 0.5, 0.5, 0.5])
y = np.array([1, -1, 1, -1, -1])

# Mengubah bentuk matriks X agar sesuai dengan format yang dibutuhkan oleh LinearRegression
X = X.reshape(-1, 1)

# Inisialisasi model regresi linear
model = LinearRegression()

# Melatih model dengan data latih
model.fit(X, y)

# Mencetak koefisien weight (w) dan bias (b)
w = model.coef_[0]
b = model.intercept_

print(f"Weight (w): {w}")
print(f"Bias (b): {b}")
