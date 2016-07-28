Index: ompi/mpi/c/add_error_string.c
===================================================================
--- ompi/mpi/c/add_error_string.c	(revision 25763)
+++ ompi/mpi/c/add_error_string.c	(working copy)
@@ -31,7 +31,7 @@
 #include "ompi/mpi/c/profile/defines.h"
 #endif
 
-static const char FUNC_NAME[] = "MPI_Add_error_code";
+static const char FUNC_NAME[] = "MPI_Add_error_string";
 
 
 int MPI_Add_error_string(int errorcode, char *string)
Index: ompi/mpi/c/accumulate.c
===================================================================
--- ompi/mpi/c/accumulate.c	(revision 25763)
+++ ompi/mpi/c/accumulate.c	(working copy)
@@ -35,7 +35,7 @@
 #include "ompi/mpi/c/profile/defines.h"
 #endif
 
-static const char FUNC_NAME[] = "MPI_Accumlate";
+static const char FUNC_NAME[] = "MPI_Accumulate";
 
 
 int MPI_Accumulate(void *origin_addr, int origin_count, MPI_Datatype origin_datatype,