################################################################################
#  Copyright (C) 2016 Lightfleet Corporation.   All rights reserved.
#
#  This software is provided on an "as is" basis.  The copyright holder
#  disclaims any and all warrantees, whether express, implied, or statutory,
#  including, but not limited to, the implied warranties of merchantability
#  and fitness for a particular purpose.  In no event shall the copyright
#  holder be liable for any incidental, punitive, or consequential damages
#  of any kind whatsoever arising from the use of this software.  This
#  disclaimer of warranty extends to the user of this software and user's
#  customer, agents, transferees, successors and assigns.
#
#################################################################################

amca_paramdir = $(AMCA_PARAM_SETS_DIR)
dist_amca_param_DATA = netpipe-btl-lf.txt

sources = \
    btl_lf.c \
    btl_lf.h \
    btl_lf_component.c \
    btl_lf_endpoint.c \
    btl_lf_endpoint.h \
    btl_lf_frag.c \
    btl_lf_frag.h \
    btl_lf_proc.c \
    btl_lf_proc.h

# Make the output library in this directory, and name it either
# mca_<type>_<name>.la (for DSO builds) or libmca_<type>_<name>.la
# (for static builds).

if MCA_BUILD_opal_btl_lf_DSO
lib =
lib_sources =
component = mca_btl_lf.la
component_sources = $(sources)
else
lib = libmca_btl_lf.la
lib_sources = $(sources)
component =
component_sources =
endif

mcacomponentdir = $(opallibdir)
mcacomponent_LTLIBRARIES = $(component)
mca_btl_lf_la_SOURCES = $(component_sources)
mca_btl_lf_la_LDFLAGS = -module -avoid-version

noinst_LTLIBRARIES = $(lib)
libmca_btl_lf_la_SOURCES = $(lib_sources)
libmca_btl_lf_la_LDFLAGS = -module -avoid-version

