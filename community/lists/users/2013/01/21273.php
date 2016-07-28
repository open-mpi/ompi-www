<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 30 17:49:17 2013" -->
<!-- isoreceived="20130130224917" -->
<!-- sent="Wed, 30 Jan 2013 17:49:11 -0500" -->
<!-- isosent="20130130224911" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C" -->
<!-- id="CAMJJpkXt9QBO8oLQU=D5_kJ4a+_D8L=rpaha1ZMPYvMapUdJNQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317DAD1B_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-30 17:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21274.php">Wesley Emeneker: "[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Jan 30, 2013 at 2:01 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; As for the warnings about anachronisms, that I can't help on.
</span><br>
<p>This one is actually really funny. The function MPI_Register_datarep
<br>
is defined in the mpi.c as  {extern &quot;C&quot;}. As some of the arguments are
<br>
pointers to function, they automatically become typed as {extern &quot;C&quot;}.
<br>
But in the Cxx interface, the arguments are not types as {extern &quot;C&quot;}
<br>
which trigger the compiler warning.
<br>
<p>I don't think it is necessary to fix this, as the callback functions
<br>
should not be types as {extern &quot;C&quot;}. The compiler is a little too
<br>
cautious.
<br>
<p>&nbsp;&nbsp;George.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21274.php">Wesley Emeneker: "[OMPI users] unknown BTL transport in openmpi 1.5.4 and 1.6.2"</a>
<li><strong>Previous message:</strong> <a href="21272.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
<li><strong>In reply to:</strong> <a href="21271.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: problem building 32-bit openmpi-1.9a1r27979 with Sun C"</a>
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
