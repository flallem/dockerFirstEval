#!/bin/bash

echo "-------------------------------------------------------------"
echo "Generate a private RSA key for certificate authority ... "
openssl genrsa -aes256 -out ca-key.pem 4096

echo "-------------------------------------------------------------\n\n"
echo "Create a Certificate "
echo ""
openssl req -new -x509 -days 365 -key ca-key.pem -sha256 -out ca.pem
