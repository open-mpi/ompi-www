<?
$subject_val = "Re: [OMPI users] MPI_COMPLEX16";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 05:50:14 2012" -->
<!-- isoreceived="20120523095014" -->
<!-- sent="Wed, 23 May 2012 09:30:25 +0000 (UTC)" -->
<!-- isosent="20120523093025" -->
<!-- name="Patrick Le Dot" -->
<!-- email="Patrick.Le-Dot_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMPLEX16" -->
<!-- id="loom.20120523T112659-982_at_post.gmane.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F99D208.1080900_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_COMPLEX16<br>
<strong>From:</strong> Patrick Le Dot (<em>Patrick.Le-Dot_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 05:30:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Singleton &lt;David.Singleton &lt;at&gt; anu.edu.au&gt; writes:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should have checked earlier - same for MPI_COMPLEX and MPI_COMPLEX8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 04/27/2012 08:43 AM, David Singleton wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Apologies if this has already been covered somewhere. One of our users
</span><br>
<span class="quotelev2">&gt; &gt; has noticed that MPI_COMPLEX16 is flagged as an invalid type in 1.5.4
</span><br>
<span class="quotelev2">&gt; &gt; but not in 1.4.3 while MPI_DOUBLE_COMPLEX is accepted for both. This is
</span><br>
<span class="quotelev2">&gt; &gt; with either gfortran or intel-fc.
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<p>Hi,
<br>
<p>I hit the same problem : MPI_COMPLEX8 and MPI_COMPLEX16 were available
<br>
in v1.4 but were removes in v1.5 and I don't understand why, except that
<br>
this types are not into the standard...
<br>
<p>I have a patch to reintroduce them again so let me know what you think.
<br>
<p>Thanks,
<br>
Patrick
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19334.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Previous message:</strong> <a href="19332.php">marco atzeri: "[OMPI users] openmpi-1.6 undefined reference"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/04/19148.php">David Singleton: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="19376.php">Jeff Squyres: "Re: [OMPI users] MPI_COMPLEX16"</a>
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
