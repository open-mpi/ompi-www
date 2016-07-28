<?
$subject_val = "Re: [OMPI devel] Memchecker: breaks trunk again";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 09:52:03 2008" -->
<!-- isoreceived="20080421135203" -->
<!-- sent="Mon, 21 Apr 2008 07:51:51 -0600" -->
<!-- isosent="20080421135151" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Memchecker: breaks trunk again" -->
<!-- id="C431F817.D2A1%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C431F298.D29C%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Memchecker: breaks trunk again<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 09:51:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<li><strong>Previous message:</strong> <a href="3726.php">Ralph H Castain: "[OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3726.php">Ralph H Castain: "[OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As an FYI for anyone similarly afflicted:
<br>
<p>The only solution I have found is to gut the file
<br>
opal/mca/memchecker/valgrind/configure.m4:
<br>
<p># MCA_memchecker_valgrind_CONFIG([action-if-found], [action-if-not-found])
<br>
# -----------------------------------------------------------
<br>
AC_DEFUN([MCA_memchecker_valgrind_CONFIG],[
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;happy=0                      # none_needed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;happy_value=0                # none_needed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memchecker_valgrind_happy=0  # This should suffice to get rid of the
<br>
component
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;should_build=2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;want_component=0
<br>
])dnl
<br>
<p>Nothing else will allow you to build unless you have the valgrind headers
<br>
installed on your machine.
<br>
<p>Ralph
<br>
<p><p><p>On 4/21/08 7:28 AM, &quot;Ralph H Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am finding that the memchecker code is again breaking the trunk,
</span><br>
<span class="quotelev1">&gt; specifically on any machine that does not have valgrind installed.
</span><br>
<span class="quotelev1">&gt; Apparently, memchecker now forces a requirement for valgrind?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component memchecker:valgrind (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component memchecker:valgrind compile mode... static
</span><br>
<span class="quotelev1">&gt; checking checking for the valgrind include directory ... none needed
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h usability... no
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h presence... no
</span><br>
<span class="quotelev1">&gt; checking for valgrind/valgrind.h... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** Could not find valgrind header files, as valgrind
</span><br>
<span class="quotelev1">&gt; support was requested
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could somebody please fix this? I thought we had decided many moons ago that
</span><br>
<span class="quotelev1">&gt; we would not require specific debuggers in default build configurations - I
</span><br>
<span class="quotelev1">&gt; am somewhat surprised, therefore, to find that memchecker is &quot;on&quot; by
</span><br>
<span class="quotelev1">&gt; default, and now requires valgrind!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried --disable-memchecker, but nothing will allow me to get past
</span><br>
<span class="quotelev1">&gt; this error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="3728.php">Ralph H Castain: "[OMPI devel] Vprotocol build problem"</a>
<li><strong>Previous message:</strong> <a href="3726.php">Ralph H Castain: "[OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>In reply to:</strong> <a href="3726.php">Ralph H Castain: "[OMPI devel] Memchecker: breaks trunk again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
<li><strong>Reply:</strong> <a href="3729.php">Jeff Squyres: "Re: [OMPI devel] Memchecker: breaks trunk again"</a>
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
