<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 10:12:25 2012" -->
<!-- isoreceived="20120515141225" -->
<!-- sent="Tue, 15 May 2012 10:12:20 -0400" -->
<!-- isosent="20120515141220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="F245D7B5-3103-4361-A337-8CAFF1A8CCB2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0DA854E5D5F4C8428ABC1701AE2621CD0297AF8B8840_at_INRSEXCH02.AD.INRS.CA" -->
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
<strong>Date:</strong> 2012-05-15 10:12:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 15, 2012, at 9:30 AM, Secretan Yves wrote:
<br>
<p><span class="quotelev1">&gt; If, by any bad luck, you use any of the following FORTRAN function 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI_FILE_GET_POSITION
</span><br>
<span class="quotelev1">&gt; MPI_FILE_GET_SIZE 
</span><br>
<span class="quotelev1">&gt; MPI_FILE_GET_VIEW
</span><br>
<p>Ouch!  Looking at the thread you cited, it looks like George never followed up on this.  :-(
<br>
<p>I'll file a bug and get this fixed in 1.6.1.
<br>
<p><span class="quotelev1">&gt; MPI_TYPE_EXTENT 
</span><br>
<p>You're correct in this one -- MPI defines this function with an MPI_Fint parameter.  This function was therefore deprecated and replaced with MPI_TYPE_GET_EXTENT, which used parameters of type MPI_Aint.
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
<li><strong>Next message:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19274.php">Secretan Yves: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19276.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
