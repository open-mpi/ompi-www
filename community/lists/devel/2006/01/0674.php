<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 13 09:53:39 2006" -->
<!-- isoreceived="20060113145339" -->
<!-- sent="Fri, 13 Jan 2006 09:53:33 -0500" -->
<!-- isosent="20060113145333" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  f77_check.m4 changes" -->
<!-- id="7DEEDB40-7E13-490C-A5B2-396CB6268109_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060113144820.GC27830_at_iam.uni-bonn.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-13 09:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yup - Jeff found this one this morning.  Stupid me testing on x86  
<br>
only :(.  Anyway, this and your other one were just fixed in SVN.
<br>
<p>Brian
<br>
<p>On Jan 13, 2006, at 9:48 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; * Ralf Wildenhues wrote on Fri, Jan 13, 2006 at 03:28:09PM CET:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you mean this in your recent changes to the trunk?
</span><br>
<span class="quotelev2">&gt;&gt; I'm not quite sure, I don't really understand the code
</span><br>
<span class="quotelev2">&gt;&gt; at a glance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm, another thing that fails here is that ompi_fortran_integer16_t  
</span><br>
<span class="quotelev1">&gt; gets
</span><br>
<span class="quotelev1">&gt; set to &quot;not found&quot; on GNU/Linux/x86_64, which causes a compile  
</span><br>
<span class="quotelev1">&gt; failure.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It goes away with the patch below, but that patch is not right,
</span><br>
<span class="quotelev1">&gt; it just moves the error further to when the preprocessor gets
</span><br>
<span class="quotelev1">&gt; to mpi.h:
</span><br>
<span class="quotelev1">&gt; | #if OMPI_HAVE_FORTRAN_INTEGER16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and barfs (while compiling pabort.c):
</span><br>
<span class="quotelev1">&gt; | ../../../../include/mpi.h:574:32: #if with no expression
</span><br>
<span class="quotelev1">&gt; | ../../../../include/mpi.h:676:32: #if with no expression
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps a bit,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: config/ompi_find_type.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- config/ompi_find_type.m4	(revision 8684)
</span><br>
<span class="quotelev1">&gt; +++ config/ompi_find_type.m4	(working copy)
</span><br>
<span class="quotelev1">&gt; @@ -38,7 +38,7 @@
</span><br>
<span class="quotelev1">&gt;                     fi
</span><br>
<span class="quotelev1">&gt;  ])])
</span><br>
<span class="quotelev1">&gt;           AS_IF([test -z &quot;$oft_real_type&quot;],
</span><br>
<span class="quotelev1">&gt; -               [AS_VAR_SET(type_var, &quot;not found&quot;)],
</span><br>
<span class="quotelev1">&gt; +               [AS_VAR_SET(type_var, &quot;&quot;)],
</span><br>
<span class="quotelev1">&gt;                 [AS_VAR_SET(type_var, &quot;$oft_real_type&quot;)])])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      AS_IF([test &quot;AS_VAR_GET(type_var)&quot; == &quot;not found&quot;],
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Previous message:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>In reply to:</strong> <a href="0673.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
<li><strong>Reply:</strong> <a href="0675.php">Ralf Wildenhues: "Re:  f77_check.m4 changes"</a>
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
