.PHONY: help

# Help message
help:
	@cat $(MAKEFILE_LIST) | docker run --rm -i xanders/make-help

