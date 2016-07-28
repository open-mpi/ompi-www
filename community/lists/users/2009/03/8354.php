<?
$subject_val = "Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  6 13:06:09 2009" -->
<!-- isoreceived="20090306180609" -->
<!-- sent="Fri, 06 Mar 2009 11:05:54 -0700" -->
<!-- isosent="20090306180554" -->
<!-- name="Ganesh" -->
<!-- email="ganesh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?" -->
<!-- id="49B16602.5080106_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF70CAD125.3D194FA6-ON85257570.005DA642-85257571.0049B224_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Any scientific application	heavily	using	MPI_Barrier?<br>
<strong>From:</strong> Ganesh (<em>ganesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-06 13:05:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<li><strong>Previous message:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dick,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff paraphrased an unnamed source as suggesting that: &quot;any MPI 
</span><br>
<span class="quotelev1">&gt; program that relies on a barrier for correctness is an incorrect MPI 
</span><br>
<span class="quotelev1">&gt; application.&quot; . That is probably too strong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How about this assertion?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *If there are no wildcard receives - every MPI_Barrier call is 
</span><br>
<span class="quotelev1">&gt; semantically irrelevant.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
This depends on what 'semantically irrelevant' means.  It is clear that 
<br>
one can write a wildcard-free program that will deadlock if you insert a 
<br>
barrier incorrectly, but that removing the barrier will avoid the 
<br>
deadlock. (Imagine P1 doing a Send; Barrier and P2 doing a Barrier; 
<br>
Receive(nonwildcard)).
<br>
<p>So a wildcard-free program may still deadlock (semantically noticeable 
<br>
effect) by having barriers. I'm sure you did not mean to include this 
<br>
degenerate nit-pick - but yes otherwise you are right!  The proof exists 
<br>
in a Siegel paper (cited in our EuroPVM'08) for a subset of MPI. Our 
<br>
work takes that idea further and offers a complete checking algorithm  
<br>
for one test harness (data set) as now described.
<br>
<p><p>The exact consideration for locating semantically irrelevant barriers 
<br>
(we call it Functionally Irrelevant Barriers in our paper) is given in 
<br>
our EuroPVM / MPI 2008 paper. The analysis involves ordering paths -- 
<br>
IntraCB and InterCB. CB stands for Completes-before.
<br>
<p>What is IntraCB?  Imagine two MPI sends from P1 to P2 in that order. MPI 
<br>
forces them to complete in program order. Now imagine P1 sending to P2 
<br>
and then P1 sending to P3. These can complete out of program order. Why 
<br>
so? Because MPI guarantees only non-overtaking (point-to-point 
<br>
non-overtaking). It also makes sense practically: the first send may be 
<br>
shipping a gigabyte to P2 and the second shipping a byte to P3.
<br>
<p>IntraCB is a weak relation wrt program order. We have accurately defined 
<br>
IntraCB in our CAV 2008 paper (available on our website). The basic idea 
<br>
is simple: about 6-7 rules capture IntraCB (like in the above example).
<br>
<p>Now in our EuroPVM 2008 paper, we show how to lift IntraCB to InterCB by 
<br>
computing a &quot;closure&quot; thru barriers. This defines MPI ordering paths. 
<br>
This is again a simple idea.
<br>
<p>The gist of FIB is this: if an ordering path is affected by the removal 
<br>
of barriers, then that barrier is functionally relevant; else it is not. 
<br>
FIB does this analysis for all possible ordering paths.
<br>
<p>How are all ordering paths determined? Well for this, FIB needs help 
<br>
from our POE algorithm (CAV 2008) that generates the RELEVANT executions 
<br>
of an MPI program. Basically POE gives you the semantically minimal 
<br>
(close to minimal; slightly bloated is possible) set of interleavings of 
<br>
an MPI program.  Here is the idea: if you write an MPI program with P1 
<br>
sending to P2, P3 sending to P2, and P3 doing a wildcard receive from 
<br>
either P1 or P2, our POE algorithm generates two interleavings. These 
<br>
are sufficient. No need to consider all permutations of posting send1, 
<br>
send2, receive(*) in all orders.  The POE algorithm is essential for FIB 
<br>
to work.
<br>
<p>In fact, thru a few mouse-clicks, you can do all this
<br>
<p>1) download ISP  from  
<br>
<a href="http://www.cs.utah.edu/formal_verification/ISP-release">http://www.cs.utah.edu/formal_verification/ISP-release</a>
<br>
2) fire it up
<br>
3) If running under Linux, use the --fib flag; if running under Windows, 
<br>
the flag is on by default
<br>
4) ISP verifies the program for assert failures, MPI object leaks, and 
<br>
deadlocks
<br>
5) If ISP stops w/o deadlocks found (ie all goes well) it prints the 
<br>
list of FIBs.
<br>
<p>Please try - we will appreciate it greatly! We may have always 
<br>
overlooked something -- we will be very grateful if you could offer 
<br>
feedback to improve our ISP tool that contains the FIB algo implementation.
<br>
<p>As a bonus, if you read our EuroPVM / MPI 2008 paper, you will find, in 
<br>
its first 3-4 pages, some &quot;brain teasers&quot; that you can read, and see if 
<br>
you think those barriers could be removed. Next you can type those 3-4 
<br>
line examples into ISP and see what it says wrt the FIB status.
<br>
<p>I'm not fibbing... :-)
<br>
<p>Cheers,
<br>
<p>Ganesh
<br>
<p>p.s. I said that FIB does the analysis for one data set. As in our 
<br>
paper, we have shown that in many cases, a static analyzer can determine 
<br>
that a program is data independent. In that case, the FIB analysis holds 
<br>
for all inputs (input = test harness = data set).
<br>
<p><pre>
--
&gt;
&gt; It is the exception that tests the rule.
&gt;
&gt; If someone can provide an example of an MPI_Barrier that is required 
&gt; by an application based on MPI communication and that does not use 
&gt; wildcard receive I am interested in seeing it. I do not know of a 
&gt; counter example but also do not have proof of the assertion I place 
&gt; before the group.
&gt;
&gt; No fair using examples with non-MPI interactions among tasks or with 
&gt; job steering by asynchronous triggers from outside the job. I can 
&gt; construct them myself.
&gt;
&gt; MPI_WIN_FENCE is semantically required in some situations and examples 
&gt; that show a semantic need for MPI_WIN_FENCE do not count against the 
&gt; assertion.
&gt;
&gt; I have appreciated the descriptions from Gus, Asjley and others of 
&gt; some non-symantic justifications for an MPI_Barrier.
&gt;
&gt;
&gt; Dick Treumann - MPI Team
&gt; IBM Systems &amp; Technology Group
&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
&gt; Tele (845) 433-7846 Fax (845) 433-8363
&gt;
&gt; ------------------------------------------------------------------------
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8354/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8355.php">Gabriele Fatigati: "Re: [OMPI users] Strange problem"</a>
<li><strong>Previous message:</strong> <a href="8353.php">justin oppenheim: "Re: [OMPI users] Run-time problem"</a>
<li><strong>In reply to:</strong> <a href="8352.php">Richard Treumann: "Re: [OMPI users] Any scientific application heavily	using	MPI_Barrier?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10464.php">Eugene Loh: "Re: [OMPI users] Any scientific	application	heavily	using	MPI_Barrier?"</a>
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
