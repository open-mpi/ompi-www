<?
$subject_val = "[OMPI users] MPI_Op_reduce()";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  1 10:54:01 2006" -->
<!-- isoreceived="20060701145401" -->
<!-- sent="Sat, 01 Jul 2006 16:53:46 +0200" -->
<!-- isosent="20060701145346" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Op_reduce()" -->
<!-- id="44A68C7A.30205_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-01 10:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1518.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>I was searching for the ability to call any predefined mpi ops on
<br>
arbitrary user buffers, without any communications, espacialy collective
<br>
communications. but found nothing. so I 'invented' this function to
<br>
perform this. it is just a wrapper around the internal ompi_op_reduce()
<br>
function from ompi/op/op.h:573. so it isn't any magic behind this.
<br>
<p>the only thing i didn't do, is marking this function as OMPI special!
<br>
maybe another prefix should be used.
<br>
<p>also there are only C bindings.
<br>
<p>Hope this is helpful for other users too.
<br>
<p>greetings
<br>
Bert Wesarg
<br>
<p>
<p>
diff -urN openmpi-1.1/ompi/include/mpi.h.in openmpi-1.1-mpi_op_reduce/ompi/include/mpi.h.in
<br>
--- openmpi-1.1/ompi/include/mpi.h.in	2006-05-30 22:41:47.000000000 +0200
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/include/mpi.h.in	2006-07-01 11:59:23.893437057 +0200
<br>
@@ -1230,6 +1230,8 @@
<br>
&nbsp;OMPI_DECLSPEC  int MPI_Win_wait(MPI_Win win);
<br>
&nbsp;OMPI_DECLSPEC  double MPI_Wtick(void);
<br>
&nbsp;OMPI_DECLSPEC  double MPI_Wtime(void);
<br>
+OMPI_DECLSPEC  int MPI_Op_reduce(void *source, void *target, int count,
<br>
+                                 MPI_Datatype datatype, MPI_Op op);
<br>
&nbsp;
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;/*
<br>
@@ -1738,6 +1740,8 @@
<br>
&nbsp;OMPI_DECLSPEC  int PMPI_Win_wait(MPI_Win win);
<br>
&nbsp;OMPI_DECLSPEC  double PMPI_Wtick(void);
<br>
&nbsp;OMPI_DECLSPEC  double PMPI_Wtime(void);
<br>
+OMPI_DECLSPEC  int PMPI_Op_reduce(void *source, void *target, int count,
<br>
+                                  MPI_Datatype datatype, MPI_Op op);
<br>
&nbsp;
<br>
&nbsp;#if defined(c_plusplus) || defined(__cplusplus)
<br>
&nbsp;}
<br>
diff -urN openmpi-1.1/ompi/mca/io/romio/romio/adio/include/mpipr.h openmpi-1.1-mpi_op_reduce/ompi/mca/io/romio/romio/adio/include/mpipr.h
<br>
--- openmpi-1.1/ompi/mca/io/romio/romio/adio/include/mpipr.h	2006-05-30 22:42:01.000000000 +0200
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/mca/io/romio/romio/adio/include/mpipr.h	2006-07-01 15:28:32.453154536 +0200
<br>
@@ -200,6 +200,8 @@
<br>
&nbsp;#define MPI_Op_create PMPI_Op_create
<br>
&nbsp;#undef MPI_Op_free
<br>
&nbsp;#define MPI_Op_free PMPI_Op_free
<br>
+#undef MPI_Op_reduce
<br>
+#define MPI_Op_reduce PMPI_Op_reduce
<br>
&nbsp;#undef MPI_Pack
<br>
&nbsp;#define MPI_Pack PMPI_Pack
<br>
&nbsp;#undef MPI_Pack_size
<br>
diff -urN openmpi-1.1/ompi/mpi/c/Makefile.am openmpi-1.1-mpi_op_reduce/ompi/mpi/c/Makefile.am
<br>
--- openmpi-1.1/ompi/mpi/c/Makefile.am	2006-05-30 22:41:50.000000000 +0200
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/mpi/c/Makefile.am	2006-07-01 11:58:40.884442991 +0200
<br>
@@ -252,6 +252,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;op_create.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;op_f2c.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;op_free.c \
<br>
+        op_reduce.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;open_port.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pack_external.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pack_external_size.c \
<br>
diff -urN openmpi-1.1/ompi/mpi/c/op_reduce.c openmpi-1.1-mpi_op_reduce/ompi/mpi/c/op_reduce.c
<br>
--- openmpi-1.1/ompi/mpi/c/op_reduce.c	1970-01-01 01:00:00.000000000 +0100
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/mpi/c/op_reduce.c	2006-07-01 15:22:16.222229672 +0200
<br>
@@ -0,0 +1,68 @@
<br>
+/*
<br>
+ * Copyright (c) 2004-2005 The Trustees of Indiana University and Indiana
<br>
+ *                         University Research and Technology
<br>
+ *                         Corporation.  All rights reserved.
<br>
+ * Copyright (c) 2004-2005 The University of Tennessee and The University
<br>
+ *                         of Tennessee Research Foundation.  All rights
<br>
+ *                         reserved.
<br>
+ * Copyright (c) 2004-2005 High Performance Computing Center Stuttgart, 
<br>
+ *                         University of Stuttgart.  All rights reserved.
<br>
+ * Copyright (c) 2004-2005 The Regents of the University of California.
<br>
+ *                         All rights reserved.
<br>
+ * $COPYRIGHT$
<br>
+ * 
<br>
+ * Additional copyrights may follow
<br>
+ * 
<br>
+ * $HEADER$
<br>
+ */
<br>
+#include &quot;ompi_config.h&quot;
<br>
+#include &lt;stdio.h&gt;
<br>
+
<br>
+#include &quot;ompi/mpi/c/bindings.h&quot;
<br>
+#include &quot;ompi/op/op.h&quot;
<br>
+
<br>
+#if OMPI_HAVE_WEAK_SYMBOLS &amp;&amp; OMPI_PROFILING_DEFINES
<br>
+#pragma weak MPI_Op_reduce = PMPI_Op_reduce
<br>
+#endif
<br>
+
<br>
+#if OMPI_PROFILING_DEFINES
<br>
+#include &quot;ompi/mpi/c/profile/defines.h&quot;
<br>
+#endif
<br>
+
<br>
+static const char FUNC_NAME[] = &quot;MPI_Op_reduce&quot;;
<br>
+
<br>
+
<br>
+int MPI_Op_reduce(void *source, void *target, int count,
<br>
+                  MPI_Datatype datatype, MPI_Op op)
<br>
+{
<br>
+  int err = MPI_SUCCESS;
<br>
+
<br>
+  /* Error checking */
<br>
+
<br>
+  if (MPI_PARAM_CHECK) {
<br>
+    char *msg;
<br>
+    OMPI_ERR_INIT_FINALIZE(FUNC_NAME);
<br>
+    if (MPI_OP_NULL == op) {
<br>
+      err = MPI_ERR_OP;
<br>
+    } else if (!ompi_op_is_valid(op, datatype, &amp;msg, FUNC_NAME)) {
<br>
+        int ret = OMPI_ERRHANDLER_INVOKE(MPI_COMM_WORLD, MPI_ERR_OP, msg);
<br>
+        free(msg);
<br>
+        return ret;
<br>
+    } else {
<br>
+      OMPI_CHECK_DATATYPE_FOR_SEND(err, datatype, count);
<br>
+      OMPI_CHECK_USER_BUFFER(err, source, datatype, count);
<br>
+      OMPI_CHECK_USER_BUFFER(err, target, datatype, count);
<br>
+    }
<br>
+    OMPI_ERRHANDLER_CHECK(err, MPI_COMM_WORLD, err, FUNC_NAME);
<br>
+  }
<br>
+
<br>
+  if (0 == count) {
<br>
+    return MPI_SUCCESS;
<br>
+  }
<br>
+
<br>
+  OBJ_RETAIN(op);
<br>
+  ompi_op_reduce(op, source, target, count, datatype);
<br>
+  OBJ_RELEASE(op);
<br>
+
<br>
+  OMPI_ERRHANDLER_RETURN(err, MPI_COMM_WORLD, MPI_ERR_INTERN, FUNC_NAME);
<br>
+}
<br>
diff -urN openmpi-1.1/ompi/mpi/c/profile/defines.h openmpi-1.1-mpi_op_reduce/ompi/mpi/c/profile/defines.h
<br>
--- openmpi-1.1/ompi/mpi/c/profile/defines.h	2006-05-30 22:41:49.000000000 +0200
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/mpi/c/profile/defines.h	2006-07-01 16:13:39.975281511 +0200
<br>
@@ -218,6 +218,7 @@
<br>
&nbsp;#define MPI_Op_create PMPI_Op_create 
<br>
&nbsp;#define MPI_Op_f2c PMPI_Op_f2c 
<br>
&nbsp;#define MPI_Op_free PMPI_Op_free
<br>
+#define MPI_Op_reduce PMPI_Op_reduce
<br>
&nbsp;#define MPI_Open_port PMPI_Open_port
<br>
&nbsp;#define MPI_Pack_external PMPI_Pack_external 
<br>
&nbsp;#define MPI_Pack_external_size PMPI_Pack_external_size 
<br>
diff -urN openmpi-1.1/ompi/mpi/c/profile/Makefile.am openmpi-1.1-mpi_op_reduce/ompi/mpi/c/profile/Makefile.am
<br>
--- openmpi-1.1/ompi/mpi/c/profile/Makefile.am	2006-05-30 22:41:49.000000000 +0200
<br>
+++ openmpi-1.1-mpi_op_reduce/ompi/mpi/c/profile/Makefile.am	2006-07-01 12:24:31.918874731 +0200
<br>
@@ -234,6 +234,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pop_create.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pop_f2c.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pop_free.c \
<br>
+        pop_reduce.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;popen_port.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ppack_external.c \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ppack_external_size.c \
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1520.php">Brian Barrett: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1518.php">openmpi-user: "Re: [OMPI users] OpenMPI 1.1: Signal:10 info.si_errno:0(Unknown, error:	0), si_code:1(BUS_ADRALN) (Terry D. Dontje)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
