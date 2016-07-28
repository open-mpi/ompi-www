<?
$subject_val = "Re: [OMPI users] sync problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 09:45:22 2009" -->
<!-- isoreceived="20090601134522" -->
<!-- sent="Mon, 01 Jun 2009 09:45:10 -0400" -->
<!-- isosent="20090601134510" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sync problem" -->
<!-- id="4A23DB66.6060204_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A22F2B1.8090103_at_bredband.net" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-01 09:45:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9476.php">tsilva_at_[hidden]: "[OMPI users] overlapping communicators?"</a>
<li><strong>Previous message:</strong> <a href="../../2009/05/9474.php">Danesh Daroui: "[OMPI users] sync problem"</a>
<li><strong>In reply to:</strong> <a href="../../2009/05/9474.php">Danesh Daroui: "[OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<li><strong>Reply:</strong> <a href="9494.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Danesh
<br>
<p>Make sure you have 700GB of RAM on the sum of all nodes you are using.
<br>
Otherwise context switching and memory swapping may be the problem.
<br>
MPI doesn't perform well in this conditions (and may break, particularly
<br>
on large problems, I suppose).
<br>
<p>A good way to go about it is to look at the physical
<br>
&quot;RAM per core&quot; if those are multi-core machines,
<br>
and compare to the actual memory per core your program requires.
<br>
You need to give the system some RAM also, and use no more than 80% or
<br>
so of the memory.
<br>
<p>If you or a system administrator has access to the nodes,
<br>
you can monitor the memory use with &quot;top&quot;.
<br>
If you have Ganglia on this cluster, you can use the memory report
<br>
metric also.
<br>
<p>Another possibility is a memory leak, which may be in your program,
<br>
or (less likely) in MPI.
<br>
Note, however, that OpenMPI 1.3.0 and 1.3.1 had this problem (with 
<br>
Infinband only), which was fixed in  1.3.2:
<br>
<p><a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">http://www.open-mpi.org/community/lists/announce/2009/04/0030.php</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
<br>
<p>If you are using 1.3.0 or 1.3.1, upgrade to 1.3.2.
<br>
<p>I hope this helps.
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
<p>Danesh Daroui wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure if this the right forum to ask this question, so sorry if
</span><br>
<span class="quotelev1">&gt; I am wrong. I am using ScaLAPACK in my code and MPI of course (OMPI) in
</span><br>
<span class="quotelev1">&gt; a electromagnetic solver program, running on a cluster. I get very
</span><br>
<span class="quotelev1">&gt; strange behavior when I use a large number of processors to run my code
</span><br>
<span class="quotelev1">&gt; for very large problems. In these cases, however, the program finishes
</span><br>
<span class="quotelev1">&gt; successfully, but it stays until the wall time exceeds the limit and the
</span><br>
<span class="quotelev1">&gt; job is terminated by queue manager (I use qsub ti submit a job). This
</span><br>
<span class="quotelev1">&gt; happens when, for example I use more than 80 processors for a problem
</span><br>
<span class="quotelev1">&gt; which needs more than 700 GB memory. For smaller problem, everything is
</span><br>
<span class="quotelev1">&gt; OK and all output files are generated correctly, while when this
</span><br>
<span class="quotelev1">&gt; happens, the output files are empty. I am almost sure that there is a
</span><br>
<span class="quotelev1">&gt; synchronization problem and some processes fail to reach the
</span><br>
<span class="quotelev1">&gt; finalization point while others are done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My code is written in C++ and in &quot;main&quot; function I call a routine called
</span><br>
<span class="quotelev1">&gt; &quot;Solver&quot;. My Solver function looks like below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Solver()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;         for (std::vector&lt;double&gt;::iterator ti=times.begin();
</span><br>
<span class="quotelev1">&gt; ti!=times.end(); ++ti)
</span><br>
<span class="quotelev1">&gt;         {
</span><br>
<span class="quotelev1">&gt;                 Stopwatch iwatch, dwatch, twatch;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 // some ScaLAPACK operations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                 if (iamroot())
</span><br>
<span class="quotelev1">&gt;                 {
</span><br>
<span class="quotelev1">&gt;                          // some operation only for root process
</span><br>
<span class="quotelev1">&gt;                 }
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         blacs::gridexit(ictxt);
</span><br>
<span class="quotelev1">&gt;         blacs::exit(1);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and my &quot;main&quot; function which calls &quot;Solver&quot; looks like below:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        // some preparing operations
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Solver();
</span><br>
<span class="quotelev1">&gt;         if (rank==0)
</span><br>
<span class="quotelev1">&gt;                 std::cout &lt;&lt; &quot;Total execution time: &quot; &lt;&lt; time.tick() &lt;&lt;
</span><br>
<span class="quotelev1">&gt; &quot; s\n&quot; &lt;&lt; std::flush;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       err=MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       if (MPI_SUCCESS!=err)
</span><br>
<span class="quotelev1">&gt;       {
</span><br>
<span class="quotelev1">&gt;               std::cerr &lt;&lt; &quot;MPI_Finalize failed: &quot; &lt;&lt; err &lt;&lt; &quot;\n&quot;;
</span><br>
<span class="quotelev1">&gt;               return err;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did put a &quot;blacs::barrier(ictxt, 'A')&quot; at the and of &quot;Solver&quot; routine,
</span><br>
<span class="quotelev1">&gt; before calling &quot;blacs::exit(1)&quot; to make sure that all processes arrive
</span><br>
<span class="quotelev1">&gt; here before MPI_Finalize, but the problem didn't solve. Do you have any
</span><br>
<span class="quotelev1">&gt; idea where the problem is?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9476.php">tsilva_at_[hidden]: "[OMPI users] overlapping communicators?"</a>
<li><strong>Previous message:</strong> <a href="../../2009/05/9474.php">Danesh Daroui: "[OMPI users] sync problem"</a>
<li><strong>In reply to:</strong> <a href="../../2009/05/9474.php">Danesh Daroui: "[OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9494.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
<li><strong>Reply:</strong> <a href="9494.php">Danesh Daroui: "Re: [OMPI users] sync problem"</a>
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
