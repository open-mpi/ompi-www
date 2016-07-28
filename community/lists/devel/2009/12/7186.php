<?
$subject_val = "Re: [OMPI devel] Crash when using MPI_REAL8";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 14:24:43 2009" -->
<!-- isoreceived="20091204192443" -->
<!-- sent="Fri, 4 Dec 2009 20:27:22 +0100 (CET)" -->
<!-- isosent="20091204192722" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Crash when using MPI_REAL8" -->
<!-- id="alpine.DEB.2.00.0912042003020.3715_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0912041749140.3715_at_jeaugeys.frec.bull.fr" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Crash when using MPI_REAL8<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 14:27:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Previous message:</strong> <a href="7185.php">Jeff Squyres: "[OMPI devel] MPI_Request teleconf next week"</a>
<li><strong>In reply to:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is definetly something wrong in types.
<br>
<p>OMPI_DATATYPE_MAX_PREDEFINED is set to 45, while there are 55 predefined 
<br>
types. When accessing ompi_op_ddt_map[ddt-&gt;id] with MPI_REAL8 
<br>
(ddt-&gt;id=54), we're reading the ompi_mpi_op_bxor struct.
<br>
<p>Depending on various things (padding, uninitialized memory), we may get 0 
<br>
and not crash. If you're not lucky, you get a random value and crash soon 
<br>
afterwards.
<br>
<p>So, I extended things a bit and it seems to fix my problem. I'm not sure 
<br>
all types are now handled, I just added some that are not defined.
<br>
<p>Sylvain
<br>
<p>diff -r e82b914000bd -r 1a40aee2925c ompi/datatype/ompi_datatype.h
<br>
--- a/ompi/datatype/ompi_datatype.h     Thu Dec 03 04:46:31 2009 +0000
<br>
+++ b/ompi/datatype/ompi_datatype.h     Fri Dec 04 19:59:26 2009 +0100
<br>
@@ -57,7 +57,7 @@
<br>
&nbsp;&nbsp;#define OMPI_DATATYPE_FLAG_DATA_FORTRAN  0xC000
<br>
&nbsp;&nbsp;#define OMPI_DATATYPE_FLAG_DATA_LANGUAGE 0xC000
<br>
<p>-#define OMPI_DATATYPE_MAX_PREDEFINED 45
<br>
+#define OMPI_DATATYPE_MAX_PREDEFINED 55
<br>
<p>&nbsp;&nbsp;#if OMPI_DATATYPE_MAX_PREDEFINED &gt; OPAL_DATATYPE_MAX_SUPPORTED
<br>
&nbsp;&nbsp;#error Need to increase the number of supported dataypes by OPAL (value OPAL_DATATYPE_MAX_SUPPORTED).
<br>
diff -r e82b914000bd -r 1a40aee2925c ompi/op/op.c
<br>
--- a/ompi/op/op.c      Thu Dec 03 04:46:31 2009 +0000
<br>
+++ b/ompi/op/op.c      Fri Dec 04 19:59:26 2009 +0100
<br>
@@ -137,6 +137,14 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_ddt_map[OMPI_DATATYPE_MPI_2INTEGER] = OMPI_OP_BASE_TYPE_2INTEGER;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_ddt_map[OMPI_DATATYPE_MPI_LONG_DOUBLE_INT] = OMPI_OP_BASE_TYPE_LONG_DOUBLE_INT;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_op_ddt_map[OMPI_DATATYPE_MPI_WCHAR] = OMPI_OP_BASE_TYPE_WCHAR;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_INTEGER2] = OMPI_OP_BASE_TYPE_INTEGER2;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_INTEGER4] = OMPI_OP_BASE_TYPE_INTEGER4;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_INTEGER8] = OMPI_OP_BASE_TYPE_INTEGER8;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_INTEGER16] = OMPI_OP_BASE_TYPE_INTEGER16;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_REAL2] = OMPI_OP_BASE_TYPE_REAL2;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_REAL4] = OMPI_OP_BASE_TYPE_REAL4;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_REAL8] = OMPI_OP_BASE_TYPE_REAL8;
<br>
+    ompi_op_ddt_map[OMPI_DATATYPE_MPI_REAL16] = OMPI_OP_BASE_TYPE_REAL16;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Create the intrinsic ops */
<br>
<p>diff -r e82b914000bd -r 1a40aee2925c opal/datatype/opal_datatype.h
<br>
--- a/opal/datatype/opal_datatype.h     Thu Dec 03 04:46:31 2009 +0000
<br>
+++ b/opal/datatype/opal_datatype.h     Fri Dec 04 19:59:26 2009 +0100
<br>
@@ -56,7 +56,7 @@
<br>
&nbsp;&nbsp;&nbsp;*
<br>
&nbsp;&nbsp;&nbsp;* XXX TODO Adapt to whatever the OMPI-layer needs
<br>
&nbsp;&nbsp;&nbsp;*/
<br>
-#define OPAL_DATATYPE_MAX_SUPPORTED  46
<br>
+#define OPAL_DATATYPE_MAX_SUPPORTED  56
<br>
<p><p>&nbsp;&nbsp;/* flags for the datatypes. */
<br>
<p>On Fri, 4 Dec 2009, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; For the record, and to try to explain why all MTT tests may have missed this 
</span><br>
<span class="quotelev1">&gt; &quot;bug&quot;, configuring without --enable-debug makes the bug disappear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still trying to figure out why.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 3 Dec 2009, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope this time I won't be the only one to suffer this bug :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is very simple indeed, just perform an allreduce with MPI_REAL8 
</span><br>
<span class="quotelev2">&gt;&gt; (fortran) and you should get a crash in ompi/op/op.h:411. Tested with trunk 
</span><br>
<span class="quotelev2">&gt;&gt; and v1.5, working fine on v1.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From what I understand, in the trunk, MPI_REAL8 has now a fixed id (in 
</span><br>
<span class="quotelev2">&gt;&gt; ompi/datatype/ompi_datatype_internal.h), but operations do not have an 
</span><br>
<span class="quotelev2">&gt;&gt; index going as far as 54 (0x36), leading to a crash when looking for 
</span><br>
<span class="quotelev2">&gt;&gt; op-&gt;o_func.intrinsic.fns[ompi_op_ddt_map[ddt-&gt;id]] in ompi_op_is_valid() 
</span><br>
<span class="quotelev2">&gt;&gt; (or, if I disable mpi_param_check, in ompi_op_reduce()).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is a reproducer, just in case :
</span><br>
<span class="quotelev2">&gt;&gt; program main
</span><br>
<span class="quotelev2">&gt;&gt; use mpi
</span><br>
<span class="quotelev2">&gt;&gt; integer ierr
</span><br>
<span class="quotelev2">&gt;&gt; real(8) myreal, realsum
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_INIT(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_ALLREDUCE(myreal, realsum, 1, MPI_REAL8, MPI_SUM, MPI_COMM_WORLD, 
</span><br>
<span class="quotelev2">&gt;&gt; ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_FINALIZE(ierr)
</span><br>
<span class="quotelev2">&gt;&gt; stop
</span><br>
<span class="quotelev2">&gt;&gt; end
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone an idea on how to fix this ? Or am I doing something wrong ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7187.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Not optimal SRQ resource allocation"</a>
<li><strong>Previous message:</strong> <a href="7185.php">Jeff Squyres: "[OMPI devel] MPI_Request teleconf next week"</a>
<li><strong>In reply to:</strong> <a href="7184.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<li><strong>Reply:</strong> <a href="7193.php">Rainer Keller: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
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
