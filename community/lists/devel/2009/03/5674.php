<?
$subject_val = "Re: [OMPI devel] opal_util_register_stackhandlers()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 09:13:04 2009" -->
<!-- isoreceived="20090320131304" -->
<!-- sent="Fri, 20 Mar 2009 14:12:58 +0100" -->
<!-- isosent="20090320131258" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_util_register_stackhandlers()" -->
<!-- id="49C3965A.8090001_at_cs.vu.nl" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2194.1237553135.6040.devel_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] opal_util_register_stackhandlers()<br>
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 09:12:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Maybe in reply to:</strong> <a href="5668.php">Kees Verstoep: "[OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Reply:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the quick feedback and fix!  This should work.  I will
<br>
test it out when the next release candidate becomes available.
<br>
<p>Cheers,
<br>
Kees Verstoep
<br>
<p>Jeff Squyres wrote:
<br>
<p><span class="quotelev1"> &gt; Thanks for the bug report!
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I've just changed the behavior to emit a warning and *not* intercept a signal 
</span><br>
<span class="quotelev1"> &gt; if the old signal action is neither SIG_DFL nor SIG_IGN. The opal_signal MCA
</span><br>
<span class="quotelev1"> &gt; parameter can be set to determine which signals you want to intercept; it
</span><br>
<span class="quotelev1"> &gt; defaults to the integer values of SIGABRT, SIGBUS, SIGFPE, SIGSEGV on your
</span><br>
<span class="quotelev1"> &gt; system.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; We can probably get this in OMPI v1.3.2.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; On Mar 19, 2009, at 11:13 AM, Kees Verstoep wrote:
</span><br>
<span class="quotelev1"> &gt; [..]
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Previous message:</strong> <a href="5673.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Maybe in reply to:</strong> <a href="5668.php">Kees Verstoep: "[OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Reply:</strong> <a href="5675.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
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
