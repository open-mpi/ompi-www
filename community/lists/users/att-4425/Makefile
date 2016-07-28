# Meta-Makefile to build OpenMPI.
#
# (c) Christian Kauhaus <kauhaus@inf.uni-jena.de>
# -- $Id: Makefile 3640 2007-10-09 14:23:11Z ckauhaus $

SHELL = bash

# 
# Configuration section
#
ARCH := $(shell uname -m -s | tr ' ' '-')
# but compile as 32bit even on amd64
ifeq ($(ARCH),Linux-x86_64)
    OMPI_CFLAGS = -m32
    OMPI_LDFLAGS = -Wl,-melf_i386
endif
# BuildBot does not set PWD on directory changes
PWD := $(shell pwd | tr -d '\n')
OMPI = $(PWD)/ompi
# *_INSTALL_PREFIX are initially set to the same default, but may be overridden
# individually.
OMPI_INSTALL_PREFIX = $(PWD)/$(ARCH)
TOOLS_INSTALL_PREFIX = $(PWD)/$(ARCH)
BUILD_DIR = $(PWD)/build/$(ARCH)
OMPI_BUILD_DIR = $(BUILD_DIR)/ompi
TOOLS_BUILD_DIR = $(BUILD_DIR)/autotools
TOOLS = $(TOOLS_INSTALL_PREFIX)/bin/autoconf \
  $(TOOLS_INSTALL_PREFIX)/bin/automake \
  $(TOOLS_INSTALL_PREFIX)/bin/libtool
# CONFIGURE_FLAGS are appended to OMPI's ./configure (besides ignore-Fortran)
CONFIGURE_FLAGS = --enable-debug --enable-trace --enable-static --disable-dlopen
#CONFIGURE_FLAGS = --with-platform=optimized --enable-static --disable-dlopen
CONFIGURE_FLAGS := $(CONFIGURE_FLAGS) CFLAGS=$(OMPI_CFLAGS) CXXFLAGS=$(OMPI_CFLAGS) LDFLAGS=$(OMPI_LDFLAGS)

# use our own auto* tools
PATH := $(DESTDIR)$(OMPI_INSTALL_PREFIX)/bin:$(TOOLS_INSTALL_PREFIX)/bin:$(PATH)

ifeq ($(findstring curl, $(shell which curl)),curl)
WGET = curl
else
WGET = wget -q --output-document=- 
endif


#
# Get required versions from distribution script
#
GETVERSION = $(shell grep "^$(1)_" $(OMPI)/contrib/dist/make_dist_tarball | sed -e 's/.*=//g')
LT_VERSION = $(call GETVERSION,LT)
AM_VERSION = $(call GETVERSION,AM)
AC_VERSION = $(call GETVERSION,AC)


#
# main targets
#
all: openmpi

.PHONY: test
test: openmpi
	ulimit -u unlimited; umask 022; rake test


#
# Toolchain
#
.PHONY: tools
tools: $(TOOLS_BUILD_DIR) $(TOOLS)

$(TOOLS_BUILD_DIR):
	mkdir -p $@

# build GNU libtool
$(TOOLS_INSTALL_PREFIX)/bin/libtool: $(TOOLS_BUILD_DIR)/libtool/Makefile \
  $(TOOLS_INSTALL_PREFIX)/bin/automake
	cd $(dir $<) && umask 022 && $(MAKE) && $(MAKE) install

$(TOOLS_BUILD_DIR)/libtool/Makefile: $(TOOLS_BUILD_DIR)/libtool-$(LT_VERSION)/*
	mkdir -p $(dir $@)
	cd $(dir $@) && $(dir $<)configure --prefix=$(TOOLS_INSTALL_PREFIX) 

# build GNU automake
$(TOOLS_INSTALL_PREFIX)/bin/automake: $(TOOLS_BUILD_DIR)/automake/Makefile \
  $(TOOLS_INSTALL_PREFIX)/bin/autoconf
	cd $(dir $<) && umask 022 && $(MAKE) && $(MAKE) install

$(TOOLS_BUILD_DIR)/automake/Makefile: $(TOOLS_BUILD_DIR)/automake-$(AM_VERSION)/*
	mkdir -p $(dir $@)
	cd $(dir $@) && $(dir $<)configure --prefix=$(TOOLS_INSTALL_PREFIX) 

# build GNU autoconf
$(TOOLS_INSTALL_PREFIX)/bin/autoconf: $(TOOLS_BUILD_DIR)/autoconf/Makefile
	cd $(dir $<) && umask 022 && $(MAKE) && $(MAKE) install

$(TOOLS_BUILD_DIR)/autoconf/Makefile: $(TOOLS_BUILD_DIR)/autoconf-$(AC_VERSION)/*
	mkdir -p $(dir $@)
	cd $(dir $@) && $(dir $<)configure --prefix=$(TOOLS_INSTALL_PREFIX) 

# the download magic
$(TOOLS_BUILD_DIR)/autoconf-$(AC_VERSION)/*:
	$(WGET) \
           ftp://ftp.gnu.org/pub/gnu/autoconf/autoconf-$(AC_VERSION).tar.gz |\
           (cd $(TOOLS_BUILD_DIR) && gzip -dc | tar xf -)

$(TOOLS_BUILD_DIR)/automake-$(AM_VERSION)/*:
	$(WGET) \
           ftp://ftp.gnu.org/pub/gnu/automake/automake-$(AM_VERSION).tar.gz |\
           (cd $(TOOLS_BUILD_DIR) && gzip -dc | tar xf -)

LT_URL=$(if $(findstring 2.1a, $(LT_VERSION)), \
		 http://www.open-mpi.org/svn/libtool.tar.gz, \
		 ftp://ftp.gnu.org/pub/gnu/libtool/libtool-$(LT_VERSION).tar.gz)

$(TOOLS_BUILD_DIR)/libtool-$(LT_VERSION)/*:
	$(WGET) \
           $(LT_URL) |\
           (cd $(TOOLS_BUILD_DIR) && gzip -dc | tar xf -)


# 
# build OpenMPI
#
.PHONY: openmpi compile install reinstall delete_install
openmpi: install
compile: $(OMPI_BUILD_DIR)
install: $(DESTDIR)$(OMPI_INSTALL_PREFIX)
reinstall: compile delete_install install

delete_install:
	rm -rf $(DESTDIR)$(OMPI_INSTALL_PREFIX)

$(DESTDIR)$(OMPI_INSTALL_PREFIX): $(OMPI_BUILD_DIR)
	umask 022 && $(MAKE) -C $(OMPI_BUILD_DIR) DESTDIR=$(DESTDIR) install
	chmod a+rx $(DESTDIR)$(OMPI_INSTALL_PREFIX)
	touch $@

# rerun make iff an source file has changed; this check is much faster than
# running make on the tree
OMPI_BUILD_DEPS := $(shell find $(OMPI) -name "*.[ch]")

$(OMPI_BUILD_DIR): $(OMPI_BUILD_DIR)/Makefile $(OMPI_BUILD_DEPS) 
	umask 022 && $(MAKE) -C $(OMPI_BUILD_DIR)
	touch $@

# rebuild the build tree iff one Makefile.in has changed
OMPI_CONFIGURE_DEPS := $(shell find $(OMPI) -name Makefile.in)
$(OMPI_BUILD_DIR)/Makefile: $(OMPI_CONFIGURE_DEPS) $(OMPI)/configure
	mkdir -p $(dir $@)
	cd $(dir $@) && $(OMPI)/configure --prefix=$(OMPI_INSTALL_PREFIX) \
             --enable-orterun-prefix-by-default \
             --disable-mpi-f77 --disable-mpi-f90 $(CONFIGURE_FLAGS)

# generate configure from configure.ac
$(OMPI)/configure: $(OMPI)/configure.ac $(TOOLS_BUILD_DIR) $(TOOLS)
	cd $(OMPI) && ./autogen.sh

# prevent make from fiddling around with lex files
%.c: %.l
	# write 100 times: I ain't mess up my lex files


# 
# cleanup routines
#
.PHONY: clean clean-ompi distclean
clean: clean-ompi
	rm -f *~ test/*~
	rake clean

clean-ompi:
	-$(MAKE) -C $(OMPI_BUILD_DIR) clean
	rm -f $(OMPI)/*~

clean-prefix:
	rm -f $(OMPI)/configure

distclean: clean 
	rm -rf $(OMPI_BUILD_DIR) $(TOOLS_BUILD_DIR) \
		$(TOOLS_INSTALL_PREFIX) $(DESTDIR)$(OMPI_INSTALL_PREFIX)
	rake distclean

