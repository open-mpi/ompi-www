<?
$subject_val = "Re: [OMPI users] openmpi-1.6 undefined reference";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 17:20:16 2012" -->
<!-- isoreceived="20120523212016" -->
<!-- sent="Wed, 23 May 2012 17:20:10 -0400" -->
<!-- isosent="20120523212010" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.6 undefined reference" -->
<!-- id="8B0DF9F4-617B-4DB3-ABEF-0FF38D8028B7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4FBCEBE5.5080905_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.6 undefined reference<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 17:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2012, at 9:53 AM, marco atzeri wrote:
<br>
<p><span class="quotelev1">&gt; experience says that autoreconf is a good approach on cygwin,
</span><br>
<span class="quotelev1">&gt; it is almost standard on our package build procedure.
</span><br>
<p>I'm still curious: why?  (I'm *assuming* that you're building from an official Open MPI tarball -- is that incorrect?)
<br>
<p>I ask because we've already run autoreconf, meaning that official Open MPI tarballs are fully bootstrapped and do not need to have autogen (i.e., ultimately autoreconf) re-run on them.
<br>
<p>Specifically: I'm unaware of a reason why you should need to re-run autogen (autoreconf) on an otherwise-unaltered Open MPI that was freshly extracted from a tarball.  Does something happen differently if you *don't* re-run autogen (autoreconf)?
<br>
<p>Re-running autogen shouldn't be causing you any problems, of course -- this is just my curiosity asserting itself...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19346.php">Ralph Castain: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19341.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>Reply:</strong> <a href="19352.php">marco atzeri: "Re: [OMPI users] openmpi-1.6 undefined reference"</a>
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
