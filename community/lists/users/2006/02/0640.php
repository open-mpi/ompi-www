<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb 10 18:14:11 2006" -->
<!-- isoreceived="20060210231411" -->
<!-- sent="Fri, 10 Feb 2006 18:14:02 -0500" -->
<!-- isosent="20060210231402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [O-MPI users] mpirun with make" -->
<!-- id="224BF451-45C3-4A7C-8A68-487AC593623D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43E9ABFF.5080600_at_ecofinance.com" -->
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
<strong>Date:</strong> 2006-02-10 18:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Previous message:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2006, at 3:29 AM, Andreas Fladischer wrote:
<br>
<p><span class="quotelev1">&gt; I tested this example with hostname before and it worked well:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the hostfile contains only 2 lines
</span><br>
<span class="quotelev1">&gt; pc86
</span><br>
<span class="quotelev1">&gt; pc92
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the user wolf doesn't need a password when linking to the other
</span><br>
<span class="quotelev1">&gt; pc.the user wolf have the same uid and gui on both pc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i have also another question: is it possible to use mpi to compile  
</span><br>
<span class="quotelev1">&gt; some
</span><br>
<span class="quotelev1">&gt; programms without changing the source code of the program?
</span><br>
<p>I'm guessing that you're seeing problems because you're trying to use  
<br>
a serial application in parallel improperly.  &quot;make&quot; was not designed  
<br>
to be invoked in parallel via MPI -- trying to do so can probably  
<br>
result in several different errors.
<br>
<p>MPI is designed for explicit parallelism -- applications that are  
<br>
written specifically to use MPI (i.e., by invoking the MPI API).  So  
<br>
if you have a non-MPI application and try to &quot;parallelize&quot; it by  
<br>
running it via MPI, you'll likely either get errors, unexpected  
<br>
results, or simply N copies of your application running.
<br>
<p>If you want to use a parallel software building tool, MPI is probably  
<br>
not what you are looking for.  Andrew suggested distcc and ccache --  
<br>
you might want to look into them.
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
<li><strong>Next message:</strong> <a href="0641.php">George Bosilca: "Re: [OMPI users] [O-MPI users] &quot;alltoall&quot; vs &quot;alltoallv&quot;"</a>
<li><strong>Previous message:</strong> <a href="0639.php">George Bosilca: "Re: [OMPI users] Bug in OMPI 1.0.1 using MPI_Recv with indexed datatypes"</a>
<li><strong>In reply to:</strong> <a href="0600.php">Andreas Fladischer: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0593.php">Rainer Keller: "Re: [O-MPI users] mpirun with make"</a>
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
