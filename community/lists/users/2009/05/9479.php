<?
$subject_val = "[OMPI users] sync problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 31 17:12:45 2009" -->
<!-- isoreceived="20090531211245" -->
<!-- sent="Sun, 31 May 2009 23:12:17 +0200" -->
<!-- isosent="20090531211217" -->
<!-- name="Danesh Daroui" -->
<!-- email="Danesh.D_at_[hidden]" -->
<!-- subject="[OMPI users] sync problem" -->
<!-- id="4A22F2B1.8090103_at_bredband.net" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] sync problem<br>
<strong>From:</strong> Danesh Daroui (<em>Danesh.D_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-31 17:12:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<li><strong>Previous message:</strong> <a href="9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I am not sure if this the right forum to ask this question, so sorry if
<br>
I am wrong. I am using ScaLAPACK in my code and MPI of course (OMPI) in
<br>
a electromagnetic solver program, running on a cluster. I get very
<br>
strange behavior when I use a large number of processors to run my code
<br>
for very large problems. In these cases, however, the program finishes
<br>
successfully, but it stays until the wall time exceeds the limit and the
<br>
job is terminated by queue manager (I use qsub ti submit a job). This
<br>
happens when, for example I use more than 80 processors for a problem
<br>
which needs more than 700 GB memory. For smaller problem, everything is
<br>
OK and all output files are generated correctly, while when this
<br>
happens, the output files are empty. I am almost sure that there is a
<br>
synchronization problem and some processes fail to reach the
<br>
finalization point while others are done.
<br>
<p>My code is written in C++ and in &quot;main&quot; function I call a routine called
<br>
&quot;Solver&quot;. My Solver function looks like below:
<br>
<p>Solver()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (std::vector&lt;double&gt;::iterator ti=times.begin();
<br>
ti!=times.end(); ++ti)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Stopwatch iwatch, dwatch, twatch;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some ScaLAPACK operations
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (iamroot())
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some operation only for root process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blacs::gridexit(ictxt);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;blacs::exit(1);
<br>
}
<br>
<p>and my &quot;main&quot; function which calls &quot;Solver&quot; looks like below:
<br>
<p><p>int main()
<br>
{
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;// some preparing operations
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Solver();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank==0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Total execution time: &quot; &lt;&lt; time.tick() &lt;&lt;
<br>
&quot; s\n&quot; &lt;&lt; std::flush;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;err=MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (MPI_SUCCESS!=err)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cerr &lt;&lt; &quot;MPI_Finalize failed: &quot; &lt;&lt; err &lt;&lt; &quot;\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I did put a &quot;blacs::barrier(ictxt, 'A')&quot; at the and of &quot;Solver&quot; routine,
<br>
before calling &quot;blacs::exit(1)&quot; to make sure that all processes arrive
<br>
here before MPI_Finalize, but the problem didn't solve. Do you have any
<br>
idea where the problem is?
<br>
<p>Thanks in advance,
<br>
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<li><strong>Previous message:</strong> <a href="9478.php">Gus Correa: "Re: [OMPI users] Performance testing software?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/06/9480.php">Gus Correa: "Re: [OMPI users] sync problem"</a>
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
