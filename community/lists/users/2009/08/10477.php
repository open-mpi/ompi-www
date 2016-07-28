<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 24 17:35:30 2009" -->
<!-- isoreceived="20090824213530" -->
<!-- sent="Mon, 24 Aug 2009 17:34:54 -0400" -->
<!-- isosent="20090824213454" -->
<!-- name="jimkress_58" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="287B486BAA3043568C99DAEBBD5F156A_at_libraryPC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A8B2E83.2020904_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> jimkress_58 (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-24 17:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gus,
<br>
<p>You hit the nail on the head.  CPMD and VASP are both fine grained parallel
<br>
Quantum Mechanics Molecular Dynamics Codes.  I believe CPMD has implemented
<br>
the domain decomposition methodology found in gromacs (a classical fine
<br>
grained molecular dynamics code) which significantly diminishes the scaling
<br>
problem).  I do not believe VASP has done the same.
<br>
<p>Jim
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Gus Correa
<br>
Sent: Tuesday, August 18, 2009 6:43 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] very bad parallel scaling of vasp using openmpi
<br>
<p>Hi Craig, list
<br>
<p>Independent of any issues with your GigE switch,
<br>
which you may need to address,
<br>
you may want to take a look at the performance of the default
<br>
OpenMPI MPI_Alltoall algorithm, which you say is a cornerstone of VASP.
<br>
You can perhaps try alternative algorithms for different message
<br>
sizes, using OpenMPI tuned collectives.
<br>
<p>Please, see this long thread from last May,
<br>
where it was reported that the CPMD code (seems to be another
<br>
molecular dynamics code, like VASP, right?),
<br>
which also uses MPI_Alltoall,
<br>
didn't perform well for not-so-large messages,
<br>
and the scaling was poor.
<br>
I suppose your messages also get smaller
<br>
when you increase the number of processors,
<br>
assuming the problem size is kept constant, right?
<br>
The thread suggests diagnostics and solutions,
<br>
and I found it quite helpful:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2009/05/9355.php">http://www.open-mpi.org/community/lists/users/2009/05/9355.php</a>
<br>
<p>Sorry, we're not computational chemists here,
<br>
but our programs also use MPI collectives.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Craig Plaisance wrote:
<br>
<span class="quotelev1">&gt; I ran a test of tcp using NetPIPE and got throughput of 850 Mb/s at 
</span><br>
<span class="quotelev1">&gt; message sizes of 128 Kb.  The latency was 50 us.  At message sizes above 
</span><br>
<span class="quotelev1">&gt; 1000 Kb, the throughput oscillated wildly between 850 Mb/s and values as 
</span><br>
<span class="quotelev1">&gt; low as 200 Mb/s.  This test was done with no other network traffic.  I 
</span><br>
<span class="quotelev1">&gt; then ran four tests simultaneously between different pairs of compute 
</span><br>
<span class="quotelev1">&gt; nodes and saw a drastic decrease in performance.  The highest stable 
</span><br>
<span class="quotelev1">&gt; (non-oscillating) throughput was about 500 Mb/s at a message size of 16 
</span><br>
<span class="quotelev1">&gt; Kb.  The throughput then oscillated wildly, with the maximum value 
</span><br>
<span class="quotelev1">&gt; climbing to 850 Mb/s at a message size greater than 128 Kb and dropping 
</span><br>
<span class="quotelev1">&gt; to values as low as 100 Mb/s.  The code I am using (VASP) has 100 to 
</span><br>
<span class="quotelev1">&gt; 1000 double complex (16 byte) arrays containing 100,000 to 1,000,000 
</span><br>
<span class="quotelev1">&gt; elements each.  Typically, the arrays are distributed among the nodes.  
</span><br>
<span class="quotelev1">&gt; The most communication intensive part involves executing an MPI_alltoall 
</span><br>
<span class="quotelev1">&gt; to redistribute the arrays so that node i contains the ith block of each 
</span><br>
<span class="quotelev1">&gt; array.  The default message size is 1000 elements (128 Kb), so according 
</span><br>
<span class="quotelev1">&gt; to the NetPIPE test, I should be getting very good throughput when there 
</span><br>
<span class="quotelev1">&gt; is no other network traffic.  I will run a NetPIPE test with openmpi and 
</span><br>
<span class="quotelev1">&gt; mpich2 now and post the results.  So, does anyone know what causes the 
</span><br>
<span class="quotelev1">&gt; wild oscillations in the throughput at larger message sizes and higher 
</span><br>
<span class="quotelev1">&gt; network traffic?  Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10478.php">Eugene Loh: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Previous message:</strong> <a href="10476.php">Richard Treumann: "Re: [OMPI users] Anyscientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>In reply to:</strong> <a href="10426.php">Gus Correa: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
