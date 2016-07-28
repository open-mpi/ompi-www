# Makefile for quadruple MPI communications test.
#

NEED_VERSION := 3.80 3.81
$(if $(filter $(MAKE_VERSION),$(NEED_VERSION)),,        \
 $(error This makefile requires one of GNU make version $(NEED_VERSION).))

            IFORT ?= on
          OPENMPI ?= on

ifdef IFORT
 ifdef OPENMPI
               FC := /opt/intelsoft/openmpi/bin/mpif90
#          FFLAGS := -ip -O3
           FFLAGS := -g -check uninit -ftrapuv -traceback
 else
#              FC := /opt/intelsoft/mpich/bin/mpif90
               FC := /opt/intelsoft/mpich2/mpich2-1.1/bin/mpif90
#          FFLAGS := -ip -O3
           FFLAGS := -g -check uninit -ftrapuv -traceback
 endif
else
 ifdef OPENMPI
               FC := /opt/pgisoft/openmpi/bin/mpif90
#          FFLAGS := -O3 -tp k8-64
           FFLAGS := -g -C
 else
               FC := /opt/pgisoft/mpich/bin/mpif90
#              FC := /opt/pgisoft/mpich2/bin/mpif90
#          FFLAGS := -O3 -tp k8-64
           FFLAGS := -g -C
 endif
endif
               LD := $(FC)
          LDFLAGS :=
               AR := ar
          ARFLAGS := r
              CPP := /usr/bin/cpp
         CPPFLAGS := -P -traditional
            CLEAN := $(HOME)/bin/cpp_clean
               RM := rm -f
             PERL := perl
             TEST := test

       clean_list := core *.o *.oo *.inc *.mod *.f90 lib*.a *.bak

              BIN := quad_test

#  Set Pattern rules.

%.o: %.F
	$(FC) -c $(FFLAGS) $(notdir $<)


vpath %.F $(CURDIR)
vpath %.o $(CURDIR)


OBJS := quad_test.o

#  Build targets.


.PHONY: all

all: $(BIN)

$(BIN): $(OBJS)
	$(FC) $(LDFLAGS) $(OBJS) -o $(BIN)

#  Clean target.


.PHONY: clean

clean:
	$(RM) -r $(clean_list) $(BIN)
