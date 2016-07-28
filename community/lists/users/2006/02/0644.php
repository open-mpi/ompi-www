<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 12 16:01:12 2006" -->
<!-- isoreceived="20060212210112" -->
<!-- sent="Sun, 12 Feb 2006 16:01:01 -0500" -->
<!-- isosent="20060212210101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] Strange errors when using open-mpi" -->
<!-- id="6529A214-8C14-4422-94BB-2E705576489D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43EC8C82.2060902_at_chalmers.se" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-12 16:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0628.php">Berend van Wachem: "[O-MPI users] Strange errors when using open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 10, 2006, at 7:52 AM, Berend van Wachem wrote:
<br>
<p><span class="quotelev1">&gt; I downgraded gcc and have succesfully compiled open-mpi. However,  
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev1">&gt; run my project with 6 processors, I get the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** glibc detected *** malloc(): memory corruption:  
</span><br>
<span class="quotelev1">&gt; 0x0000000000f09190 ***
</span><br>
<p>Can you run your application through a memory-checking debugger such  
<br>
as valgrind?  It may provide insight as to what is happening (and  
<br>
where).
<br>
<p><span class="quotelev1">&gt; I am using openmpi-1.0.2a1, gcc (GCC) 3.4.4 om amd64 linux.
</span><br>
<p>Can you upgrade to 1.0.2a4?  Several bugs have been fixed since a1.
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0645.php">Jeff Squyres: "Re: [OMPI users] Cannonical ring program and Mac OSX 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0643.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0628.php">Berend van Wachem: "[O-MPI users] Strange errors when using open-mpi"</a>
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
