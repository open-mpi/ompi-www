<?
$subject_val = "Re: [OMPI users] sync problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 19:15:07 2009" -->
<!-- isoreceived="20090602231507" -->
<!-- sent="Wed, 03 Jun 2009 01:14:59 +0200" -->
<!-- isosent="20090602231459" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="Re: [OMPI users] sync problem" -->
<!-- id="4A25B273.4030802_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A23DB66.6060204_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] sync problem<br>
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 19:14:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thank you so much. Well, the memory is enough. As I said, the jobs run
<br>
and the whole process is actually done without complaining about memory,
<br>
but they are not ended up correctly. I first tries to solve this using
<br>
this algorithm:
<br>
<p>1. all processes except root will wait before MPI_Finalize routine is
<br>
called for a message from root
<br>
2. when root arrives this point, starts sending message to all processes
<br>
to make them out of blocking mode
<br>
<p>This is actually a barrier. The solution didn't work initially, but when
<br>
I added some &quot;cout&quot; lines to write if operation is done successfully, it
<br>
worked perfectly. I think writing to output makes some delay that is
<br>
useful here. However, I did need to write these messages, so the problem
<br>
solved in a correct way. ;) Now it works anyway and I think it will work
<br>
in the future too since the problem that I tested with is gigantic!
<br>
<p>Thanks for your help again,
<br>
<p>Danesh
<br>
<p><p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Danesh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you have 700GB of RAM on the sum of all nodes you are using.
</span><br>
<span class="quotelev1">&gt; Otherwise context switching and memory swapping may be the problem.
</span><br>
<span class="quotelev1">&gt; MPI doesn't perform well in this conditions (and may break, particularly
</span><br>
<span class="quotelev1">&gt; on large problems, I suppose).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A good way to go about it is to look at the physical
</span><br>
<span class="quotelev1">&gt; &quot;RAM per core&quot; if those are multi-core machines,
</span><br>
<span class="quotelev1">&gt; and compare to the actual memory per core your program requires.
</span><br>
<span class="quotelev1">&gt; You need to give the system some RAM also, and use no more than 80% or
</span><br>
<span class="quotelev1">&gt; so of the memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you or a system administrator has access to the nodes,
</span><br>
<span class="quotelev1">&gt; you can monitor the memory use with &quot;top&quot;.
</span><br>
<span class="quotelev1">&gt; If you have Ganglia on this cluster, you can use the memory report
</span><br>
<span class="quotelev1">&gt; metric also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another possibility is a memory leak, which may be in your program,
</span><br>
<span class="quotelev1">&gt; or (less likely) in MPI.
</span><br>
<span class="quotelev1">&gt; Note, however, that OpenMPI 1.3.0 and 1.3.1 had this problem (with
</span><br>
<span class="quotelev1">&gt; Infinband only), which was fixed in  1.3.2:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/announce/2009/04/0030.php">http://www.open-mpi.org/community/lists/announce/2009/04/0030.php</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are using 1.3.0 or 1.3.1, upgrade to 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Danesh Daroui wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure if this the right forum to ask this question, so sorry if
</span><br>
<span class="quotelev2">&gt;&gt; I am wrong. I am using ScaLAPACK in my code and MPI of course (OMPI) in
</span><br>
<span class="quotelev2">&gt;&gt; a electromagnetic solver program, running on a cluster. I get very
</span><br>
<span class="quotelev2">&gt;&gt; strange behavior when I use a large number of processors to run my code
</span><br>
<span class="quotelev2">&gt;&gt; for very large problems. In these cases, however, the program finishes
</span><br>
<span class="quotelev2">&gt;&gt; successfully, but it stays until the wall time exceeds the limit and the
</span><br>
<span class="quotelev2">&gt;&gt; job is terminated by queue manager (I use qsub ti submit a job). This
</span><br>
<span class="quotelev2">&gt;&gt; happens when, for example I use more than 80 processors for a problem
</span><br>
<span class="quotelev2">&gt;&gt; which needs more than 700 GB memory. For smaller problem, everything is
</span><br>
<span class="quotelev2">&gt;&gt; OK and all output files are generated correctly, while when this
</span><br>
<span class="quotelev2">&gt;&gt; happens, the output files are empty. I am almost sure that there is a
</span><br>
<span class="quotelev2">&gt;&gt; synchronization problem and some processes fail to reach the
</span><br>
<span class="quotelev2">&gt;&gt; finalization point while others are done.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My code is written in C++ and in &quot;main&quot; function I call a routine called
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Solver&quot;. My Solver function looks like below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Solver()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;         for (std::vector&lt;double&gt;::iterator ti=times.begin();
</span><br>
<span class="quotelev2">&gt;&gt; ti!=times.end(); ++ti)
</span><br>
<span class="quotelev2">&gt;&gt;         {
</span><br>
<span class="quotelev2">&gt;&gt;                 Stopwatch iwatch, dwatch, twatch;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 // some ScaLAPACK operations
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                 if (iamroot())
</span><br>
<span class="quotelev2">&gt;&gt;                 {
</span><br>
<span class="quotelev2">&gt;&gt;                          // some operation only for root process
</span><br>
<span class="quotelev2">&gt;&gt;                 }
</span><br>
<span class="quotelev2">&gt;&gt;           }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         blacs::gridexit(ictxt);
</span><br>
<span class="quotelev2">&gt;&gt;         blacs::exit(1);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and my &quot;main&quot; function which calls &quot;Solver&quot; looks like below:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main()
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        // some preparing operations
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Solver();
</span><br>
<span class="quotelev2">&gt;&gt;         if (rank==0)
</span><br>
<span class="quotelev2">&gt;&gt;                 std::cout &lt;&lt; &quot;Total execution time: &quot; &lt;&lt; time.tick() &lt;&lt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot; s\n&quot; &lt;&lt; std::flush;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       err=MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       if (MPI_SUCCESS!=err)
</span><br>
<span class="quotelev2">&gt;&gt;       {
</span><br>
<span class="quotelev2">&gt;&gt;               std::cerr &lt;&lt; &quot;MPI_Finalize failed: &quot; &lt;&lt; err &lt;&lt; &quot;\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;               return err;
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did put a &quot;blacs::barrier(ictxt, 'A')&quot; at the and of &quot;Solver&quot; routine,
</span><br>
<span class="quotelev2">&gt;&gt; before calling &quot;blacs::exit(1)&quot; to make sure that all processes arrive
</span><br>
<span class="quotelev2">&gt;&gt; here before MPI_Finalize, but the problem didn't solve. Do you have any
</span><br>
<span class="quotelev2">&gt;&gt; idea where the problem is?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Danesh Daroui
Ph.D Student
Lulea University of Technology
<a href="http://www.ltu.se">http://www.ltu.se</a>
danesh.daroui_at_[hidden]
+46-704-399847
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9500.php">Iftikhar Rathore: "[OMPI users] Openmpi and processor affinity"</a>
<li><strong>Previous message:</strong> <a href="9498.php">Allen Barnett: "Re: [OMPI users] Spawn and OpenFabrics"</a>
<li><strong>In reply to:</strong> <a href="9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
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
