<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 17:44:37 2012" -->
<!-- isoreceived="20120515214437" -->
<!-- sent="Tue, 15 May 2012 17:44:34 -0400" -->
<!-- isosent="20120515214434" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="5AA1B52D-7E5B-4F56-949F-0A879FC0344A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.DEB.2.00.1205152009190.18531_at_serodio" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 17:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Previous message:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2012, at 4:13 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; printing the result of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bit_size(offset)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; does give the value of 64
</span><br>
<p>Ok, good.
<br>
<p><span class="quotelev1">&gt; I reckon I had an error in my debug code, I was truncating the output format, that explains why I'm chasing a gambuzino with this point.
</span><br>
<p>Or the OMPI bug was biting you.
<br>
<p><span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff">https://svn.open-mpi.org/trac/ompi/raw-attachment/ticket/3095/fortran-file-int-cast-fix.diff</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hmmm... I downloaded the tarball of 1.6, cd to the openmpi-1.6 directory and tried to apply the patch with
</span><br>
<p>I made a tarball for you:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/~jsquyres/unofficial/">http://www.open-mpi.org/~jsquyres/unofficial/</a>
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
<li><strong>Next message:</strong> <a href="19288.php">David Turner: "Re: [OMPI users] problems with 1.6"</a>
<li><strong>Previous message:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19290.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
