<?
$subject_val = "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 12:54:13 2010" -->
<!-- isoreceived="20100120175413" -->
<!-- sent="Wed, 20 Jan 2010 12:54:06 -0500" -->
<!-- isosent="20100120175406" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] building the 1.4.1 rpm under RHEL 5" -->
<!-- id="D71801B4-FAF3-472E-8AB9-388829FF76DB_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87zl48d5q4.fsf_at_liv.ac.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 12:54:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is it related to FORTIFY_SOURCE?
<br>
<p>On Jan 20, 2010, at 12:52 PM, Dave Love wrote:
<br>
<p><span class="quotelev1">&gt; Matthias Jurenz &lt;matthias.jurenz_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello Dave,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; unfortunately, we have no such platform for trying to reproduce this error, 
</span><br>
<span class="quotelev2">&gt;&gt; but we would be pleased, if you could help us to identify the problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We guess that the following will fix the problem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you please insert the line
</span><br>
<span class="quotelev2">&gt;&gt; 	#undef fprintf
</span><br>
<span class="quotelev2">&gt;&gt; in the file ompi/contrib/vt/vt/vtlib/vt_iowrap.c at line 1241 (right before the 
</span><br>
<span class="quotelev2">&gt;&gt; function definition of fprintf) and try building again?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is that this is specific to the RPM for reasons I can't
</span><br>
<span class="quotelev1">&gt; immediately spot, as I should probably have said.  If I do a normal
</span><br>
<span class="quotelev1">&gt; configure &amp;&amp; make, it builds.  I was just hoping not to have to debug
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11834.php">Daniel Spångberg: "Re: [OMPI users] dynamic rules"</a>
<li><strong>Previous message:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Reply:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
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
