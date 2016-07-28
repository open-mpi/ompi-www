<?
$subject_val = "Re: [OMPI users] could oversubscription clobber an executable?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 14 15:20:50 2009" -->
<!-- isoreceived="20090514192050" -->
<!-- sent="Thu, 14 May 2009 15:20:26 -0400" -->
<!-- isosent="20090514192026" -->
<!-- name="Valmor de Almeida" -->
<!-- email="val.lists_at_[hidden]" -->
<!-- subject="Re: [OMPI users] could oversubscription clobber an executable?" -->
<!-- id="4A0C6EFA.8090706_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BA4E2974-D51F-4111-83DB-1CFD8D3BDBB9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] could oversubscription clobber an executable?<br>
<strong>From:</strong> Valmor de Almeida (<em>val.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-14 15:20:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9345.php">Gilliland, Spenser D: "[OMPI users] Cross-Compile MPI Programs"</a>
<li><strong>Previous message:</strong> <a href="9343.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This sounds like memory badness is occurring somewhere in your
</span><br>
<span class="quotelev1">&gt; application which eventually corrupts things to make them stop working
</span><br>
<span class="quotelev1">&gt; (e.g., writing beyond the end of arrays, etc.).  Have you run your app
</span><br>
<span class="quotelev1">&gt; through a memory-checking debugger, perchance?
</span><br>
<p>A related question. In this particular code fortran char arrays are sent
<br>
&nbsp;around as follows; say
<br>
<p>character*37 A(MAX), B(MAX)
<br>
<p>on sender
<br>
call MPI_Send(A, MAX*37, MPI_CHARACTER, dest, tag, MPI_COMM_WORLD ...
<br>
<p>on dest
<br>
call MPI_Recv(B, MAX*37, MPI_CHARACTER, sender, tag, MPI_COMM_WORLD ...
<br>
<p>Up to a certain point in the code if I compile with optimization -O3 it
<br>
runs without the system calls problems I mentioned. If no optimization
<br>
is used I run into the system calls problems. Does this mean that the
<br>
when optimized the A and B are allocated contiguously but not when
<br>
non-optimized thus a possible reason for memory corruption?
<br>
<p>I guess another way to ask is: is it guaranteed that A and B are
<br>
contiguous? and the MPI communication correctly sends the data?
<br>
<p>Thanks,
<br>
<p><pre>
--
Valmor
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9345.php">Gilliland, Spenser D: "[OMPI users] Cross-Compile MPI Programs"</a>
<li><strong>Previous message:</strong> <a href="9343.php">Valmor de Almeida: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>In reply to:</strong> <a href="9336.php">Jeff Squyres: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
<li><strong>Reply:</strong> <a href="9364.php">Iain Bason: "Re: [OMPI users] could oversubscription clobber an executable?"</a>
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
