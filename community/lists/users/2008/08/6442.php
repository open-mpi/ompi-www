<?
$subject_val = "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 07:14:13 2008" -->
<!-- isoreceived="20080828111413" -->
<!-- sent="Thu, 28 Aug 2008 04:14:07 -0700" -->
<!-- isosent="20080828111407" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv" -->
<!-- id="EF151DF0-E6F3-49B6-A24E-CACEACEC4A8D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A52B3DC5-459D-409A-BAB8-36FB7EB7710F_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-28 07:14:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6443.php">Tim Mattox: "[OMPI users] Open MPI v1.2.7 released"</a>
<li><strong>Previous message:</strong> <a href="6441.php">Mehdi Bozzo-Rey: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?"</a>
<li><strong>In reply to:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 27, 2008, at 8:55 AM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; However from an application point of view I see an odd result here.  
</span><br>
<span class="quotelev1">&gt; On the sender side I can use a buffered send to &quot;queue&quot; messages for  
</span><br>
<span class="quotelev1">&gt; delivery and decide how many messages my buffer should contain  
</span><br>
<span class="quotelev1">&gt; before the MPI_Bsend blocks if it's running out of space.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the receiving side I have no control over the number of messages  
</span><br>
<span class="quotelev1">&gt; that MPI can buffer. This is basically left to the implementation  
</span><br>
<span class="quotelev1">&gt; details as you very well described. Shouldn't the user be allowed to  
</span><br>
<span class="quotelev1">&gt; specify a memory space to buffer messages on the receiving side,  
</span><br>
<span class="quotelev1">&gt; just like on the send?
</span><br>
<p><p>It's worth pointing out that the MPI Forum is again meeting to work on  
<br>
MPI-2.1 (small bug fixes over MPI-2.0), MPI-2.1 (bigger bug fixes over  
<br>
MPI 2.0/2.1) and MPI-3.0 (entirely new stuff).
<br>
<p>If you'd like to make a proposal to the Forum (e.g., to allow the  
<br>
receive side to control buffering), I encourage you to do so.  The  
<br>
more specific your proposal, the better.  It strikes me that such a  
<br>
proposal fits within the scope of MPI-3.0.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6443.php">Tim Mattox: "[OMPI users] Open MPI v1.2.7 released"</a>
<li><strong>Previous message:</strong> <a href="6441.php">Mehdi Bozzo-Rey: "Re: [OMPI users] configure script: Fortran 77-90: $LDFLAGS nothonored when checking whether gfortran and gfortran compilersare compatible: bug ?"</a>
<li><strong>In reply to:</strong> <a href="6438.php">Robert Kubrick: "Re: [OMPI users] MPI_Brecv vs multiple MPI_Irecv"</a>
<!-- nextthread="start" -->
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
