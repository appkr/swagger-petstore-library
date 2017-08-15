#-------------------------------------------------------------------------------
# Location of "swagger-codegen" executable.
#
#   swagger-codegen
#   OR
#   java -jar /path/to/modules/swagger-codegen-cli/target/swagger-codegen-cli.jar
#-------------------------------------------------------------------------------
EXECUTABLE=swagger-codegen

#-------------------------------------------------------------------------------
# Github info where generated code will be published onto.
#-------------------------------------------------------------------------------
GITHUB_USER_ID=appkr
GITHUB_PROJECT_NAME=swagger-petstore-library

all: clean generate dist-php dist-docs

generate:
	$(EXECUTABLE) generate \
    --lang php \
    --config ./config-php.json \
    --input-spec http://petstore.swagger.io/v2/swagger.json \
    --output ./dist-php \
    --git-user-id $(GITHUB_USER_ID) \
    --git-repo-id $(GITHUB_PROJECT_NAME)

dist-php:
	git subtree push --prefix dist-php/$(GITHUB_USER_ID)/$(GITHUB_PROJECT_NAME) origin dist-php

dist-docs:
	mkdir dist-docs
	cp dist-php/$(GITHUB_USER_ID)/$(GITHUB_PROJECT_NAME)/README.md ./dist-docs/
	cp -r dist-php/$(GITHUB_USER_ID)/$(GITHUB_PROJECT_NAME)/docs ./dist-docs/
	git subtree push --prefix dist-docs origin gh-pages

clean:
	rm -rf dist-php dist-docs
