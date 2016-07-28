<?
$subject_val = "Re: [OMPI users] Missing F90 modules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 30 17:07:38 2008" -->
<!-- isoreceived="20080730210738" -->
<!-- sent="Wed, 30 Jul 2008 14:07:23 -0700" -->
<!-- isosent="20080730210723" -->
<!-- name="Scott Beardsley" -->
<!-- email="scott_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Missing F90 modules" -->
<!-- id="4890D80B.7000100_at_cse.ucdavis.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6FCC6626-9181-4874-A5C0-DB3B5ABDD930_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Missing F90 modules<br>
<strong>From:</strong> Scott Beardsley (<em>scott_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-30 17:07:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; The real problem is that it looks like we have a bug in our F90 
</span><br>
<span class="quotelev1">&gt; bindings.  :-(  We have the &quot;periods&quot; argument typed as an integer 
</span><br>
<span class="quotelev1">&gt; array, when it really should be a logical array.  Doh!
</span><br>
<p>Ahhh ha! I checked the manpage vs the user's code but I didn't check the 
<br>
OpenMPI code. I can confirm that the patch you sent fixes the problem 
<br>
for me (v1.2.6). Thanks all!
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6230.php">Ashley Pittman: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>Previous message:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<li><strong>In reply to:</strong> <a href="6228.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6224.php">Jeff Squyres: "Re: [OMPI users] Missing F90 modules"</a>
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
