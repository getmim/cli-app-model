# cli-app-model

Adalah module yang memungkinkan tools cli memanggil perintah migrate pada
aplikasi.

## Instalasi

Jalankan perintah di bawah di folder aplikasi:

```
mim app install cli-app-model
```

## Penggunaan

Jalankan perintah-perintah berikut pada folder aplikasi:

```
mim [--table=..,..] app migrate test
mim [--table=..,..] app migrate start
mim [--table=..,..] app migrate schema (:dirname)
```