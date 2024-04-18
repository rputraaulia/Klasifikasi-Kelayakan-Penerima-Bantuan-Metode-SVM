import numpy as np

# Data
X = np.array([[4,4,4,4,3],
[4,4,4,4,1],	
[4,2,4,4,2],
[4,2,4,4,2],
[4,1,4,4,3]])

y = np.array([1, 1, -1, -1, -1])  # Kelas target: -1 (tidak layak), 1 (layak)
w = np.zeros(X.shape[1])  # bobot
b = 0  # bias
learning_rate = 0.01
epochs = 1000
for epoch in range(epochs):
    for i, x in enumerate(X):
        if y[i] * (np.dot(w, x) - b) <= 1:
            w = w + learning_rate * (y[i] * x - 2 * (1/epochs) * w)
            b = b + learning_rate * y[i]
            
print("Bobot (weights):", w)
print("Bias:", b)
def predict(x):
    return np.sign(np.dot(w, x) - b)

sample_to_predict = np.array([4,1,4,4,3])
prediction = predict(sample_to_predict)

print(f"Prediksi untuk {sample_to_predict}: {prediction}")


