# Petstore PHP library compile example

Intall swagger-codegen binary.

```bash
# Mac OS X
~ $ brew install swagger-codegen
```

Fork this project to yours and Clone the forked project.

```bash
~ $ git clone git@github.com:GITHUB_USER_ID/swagger-petstore-library.git
~ $ cd swagger-petstore-library
```

Edit `Makefile` and `config-php.json`.

```bash
# Makefile
GITHUB_USER_ID=???
GITHUB_PROJECT_NAME=???
```

```json
// config-php.json
{
  "variableNamingConvention": "camelCase",
  "packagePath": "GITHUB_USER_ID/GITHUB_PROJECT_NAME",
  "invokerPackage": "ROOT_NAMESPACE\\SUB_NAMESPACE???",
  "modelPackage": "Model",
  "apiPackage": "Service",
  "srcBasePath": "src/"
}
```

Run `Makefile`.

```bash
~/swagger-petstore-library $ make clean && make generate
```

Commit all changes to master.

```bash
~/swagger-petstore-library $ git add . && git commit -m 'message' && git push
~/swagger-petstore-library $ make dist-php dist-docs
```

---

Pull the library from a PHP project via composer.
Ex) https://github.com/appkr/swagger-petstore-project

```json
// composer.json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GITHUB_USER_ID/GITHUB_PROJECT_NAME.git"
    }
  ],
  "require": {
    "GITHUB_USER_ID/GITHUB_PROJECT_NAME": "dev-dist-php",
  }
}
```

---

Read the docs via github.
Ex) https://appkr.github.io/swagger-petstore-library/
