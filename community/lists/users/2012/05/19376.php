<?
$subject_val = "Re: [OMPI users] MPI_COMPLEX16";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 24 20:49:25 2012" -->
<!-- isoreceived="20120525004925" -->
<!-- sent="Thu, 24 May 2012 20:49:20 -0400" -->
<!-- isosent="20120525004920" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_COMPLEX16" -->
<!-- id="A244475A-0CB2-4F1D-AFB3-990347C05072_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20120523T112659-982_at_post.gmane.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-24 20:49:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for taking so long to respond to this.  :-(
<br>
<p>Patrick -- I just created <a href="https://svn.open-mpi.org/trac/ompi/ticket/3109">https://svn.open-mpi.org/trac/ompi/ticket/3109</a> to track this issue.  Could you attach your patch to that ticket?
<br>
<p><p>On May 23, 2012, at 5:30 AM, Patrick Le Dot wrote:
<br>
<p><span class="quotelev1">&gt; David Singleton &lt;David.Singleton &lt;at&gt; anu.edu.au&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should have checked earlier - same for MPI_COMPLEX and MPI_COMPLEX8.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 04/27/2012 08:43 AM, David Singleton wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Apologies if this has already been covered somewhere. One of our users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has noticed that MPI_COMPLEX16 is flagged as an invalid type in 1.5.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but not in 1.4.3 while MPI_DOUBLE_COMPLEX is accepted for both. This is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with either gfortran or intel-fc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hit the same problem : MPI_COMPLEX8 and MPI_COMPLEX16 were available
</span><br>
<span class="quotelev1">&gt; in v1.4 but were removes in v1.5 and I don't understand why, except that
</span><br>
<span class="quotelev1">&gt; this types are not into the standard...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a patch to reintroduce them again so let me know what you think.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19377.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19375.php">Jeff Squyres: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19333.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
<li><strong>Reply:</strong> <a href="19383.php">Patrick Le Dot: "Re: [OMPI users] MPI_COMPLEX16"</a>
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
