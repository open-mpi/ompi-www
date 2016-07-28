<?
$subject_val = "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 03:34:54 2012" -->
<!-- isoreceived="20120201083454" -->
<!-- sent="Wed, 1 Feb 2012 09:34:50 +0100" -->
<!-- isosent="20120201083450" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..." -->
<!-- id="CACd6u-rzS4E05f2aje3Qkb-JLqLvOgVZVOfozp=p2Vkp_-YcqA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="762096C11C5A044A9D92961C2E1A7CE8475455F3_at_mbox2.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ...<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 03:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18353.php">Götz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jan 31, 2012 at 5:20 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; in the malloc.c routine in 1.5.5. &#160;Perhaps you should lower the optimization
</span><br>
<span class="quotelev1">&gt; level to zero and see what you get.
</span><br>
Hi Richard,
<br>
<p>thanks for the suggestion. I was able to solve the problem by
<br>
upgrading the Intel Compiler to version 12.1.2 and recompiling the
<br>
openmpi runtime with unchanged options. Now I cannot reproduce that
<br>
crash. I'll have to test some more, but I think the problem is solved.
<br>
<p>Thanks, G&#246;tz
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18353.php">Götz Waschk: "Re: [OMPI users] Segfault on mpirun with OpenMPI 1.4.5rc2"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18351.php">Jeff Squyres: "Re: [OMPI users] core binding failure on Interlagos (and possibly Magny-Cours)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18340.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Reply:</strong> <a href="18368.php">Jeff Squyres: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
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
