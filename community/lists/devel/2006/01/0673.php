<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 09:48:27 2006" -->
<!-- isoreceived="20060113144827" -->
<!-- sent="Fri, 13 Jan 2006 15:48:20 +0100" -->
<!-- isosent="20060113144820" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  f77_check.m4 changes" -->
<!-- id="20060113144820.GC27830_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060113142809.GB27830_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 09:48:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
* Ralf Wildenhues wrote on Fri, Jan 13, 2006 at 03:28:09PM CET:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you mean this in your recent changes to the trunk?
</span><br>
<span class="quotelev1">&gt; I'm not quite sure, I don't really understand the code
</span><br>
<span class="quotelev1">&gt; at a glance.
</span><br>
<p>Hmm, another thing that fails here is that ompi_fortran_integer16_t gets
<br>
set to &quot;not found&quot; on GNU/Linux/x86_64, which causes a compile failure.
<br>
<p>It goes away with the patch below, but that patch is not right,
<br>
it just moves the error further to when the preprocessor gets
<br>
to mpi.h:
<br>
| #if OMPI_HAVE_FORTRAN_INTEGER16
<br>
<p>and barfs (while compiling pabort.c):
<br>
| ../../../../include/mpi.h:574:32: #if with no expression
<br>
| ../../../../include/mpi.h:676:32: #if with no expression
<br>
<p>Hope that helps a bit,
<br>
Ralf
<br>
<p>Index: config/ompi_find_type.m4
<br>
===================================================================
<br>
--- config/ompi_find_type.m4	(revision 8684)
<br>
+++ config/ompi_find_type.m4	(working copy)
<br>
@@ -38,7 +38,7 @@
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fi
<br>
&nbsp;])])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test -z &quot;$oft_real_type&quot;],
<br>
-               [AS_VAR_SET(type_var, &quot;not found&quot;)],
<br>
+               [AS_VAR_SET(type_var, &quot;&quot;)],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_VAR_SET(type_var, &quot;$oft_real_type&quot;)])])
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;AS_VAR_GET(type_var)&quot; == &quot;not found&quot;],
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0671.php">Ralf Wildenhues: "f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0674.php">Brian Barrett: "Re:  f77_check.m4 changes"</a>
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
