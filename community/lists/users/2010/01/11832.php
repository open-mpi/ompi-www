<?
$subject_val = "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 12:52:25 2010" -->
<!-- isoreceived="20100120175225" -->
<!-- sent="Wed, 20 Jan 2010 17:52:03 +0000" -->
<!-- isosent="20100120175203" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building the 1.4.1 rpm under RHEL 5" -->
<!-- id="87zl48d5q4.fsf_at_liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201001201700.45769.matthias.jurenz_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] building the 1.4.1 rpm under RHEL 5<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 12:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; Hello Dave,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unfortunately, we have no such platform for trying to reproduce this error, 
</span><br>
<span class="quotelev1">&gt; but we would be pleased, if you could help us to identify the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We guess that the following will fix the problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you please insert the line
</span><br>
<span class="quotelev1">&gt; 	#undef fprintf
</span><br>
<span class="quotelev1">&gt; in the file ompi/contrib/vt/vt/vtlib/vt_iowrap.c at line 1241 (right before the 
</span><br>
<span class="quotelev1">&gt; function definition of fprintf) and try building again?
</span><br>
<p>The problem is that this is specific to the RPM for reasons I can't
<br>
immediately spot, as I should probably have said.  If I do a normal
<br>
configure &amp;&amp; make, it builds.  I was just hoping not to have to debug
<br>
it.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
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
