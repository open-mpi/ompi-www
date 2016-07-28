Index: Makefile
===================================================================
--- Makefile	(revision 25980)
+++ Makefile	(working copy)
@@ -25,8 +25,8 @@
 CC = mpicc
 CXX = mpic++
 CCC = mpic++
+FC = mpif90
 F77 = mpif77
-FC = mpif90
 JAVAC = mpijavac
 
 # Using -g is not necessary, but it is helpful for example programs,
@@ -49,19 +49,19 @@
 # if Open MPI was build with the relevant language bindings.
 
 all: hello_c ring_c connectivity_c
-	@ if test "`ompi_info --parsable | grep bindings:cxx:yes`" != ""; then \
+	@ if ompi_info --parsable | grep bindings:cxx:yes >/dev/null; then \
 	    $(MAKE) hello_cxx ring_cxx; \
 	fi
-	@ if test "`ompi_info --parsable | grep bindings:f77:yes`" != ""; then \
+	@ if ompi_info --parsable | grep bindings:f77:yes >/dev/null; then \
 	    $(MAKE) hello_f77 ring_f77; \
 	fi
-	@ if test "`ompi_info --parsable | grep bindings:f90:yes`" != ""; then \
+	@ if ompi_info --parsable | grep bindings:f90:yes >/dev/null; then \
 	    $(MAKE) hello_f90 ring_f90; \
 	fi
-	@ if test "`ompi_info --parsable | grep bindings:java:yes`" != ""; then \
+	@ if ompi_info --parsable | grep bindings:java:yes >/dev/null; then \
 	    $(MAKE) Hello.class; \
 	fi
-	@ if test "`ompi_info --parsable | grep bindings:java:yes`" != ""; then \
+	@ if ompi_info --parsable | grep bindings:java:yes >/dev/null ; then \
 	    $(MAKE) Ring.class; \
 	fi
 
