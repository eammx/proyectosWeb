from flask import Flask
from flask import render_template

app = Flask(__name__)

@app.route('/')
def holamundo():
    usuario ='ernesto'
    return render_template('index.html',usuario = usuario)

if __name__ == '__main__':
    app.run(debug = True,port=9000)