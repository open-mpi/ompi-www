<?
$subject_val = "Re: [OMPI users] mpirun only works when -np &lt;4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 05:37:51 2009" -->
<!-- isoreceived="20091209103751" -->
<!-- sent="Wed, 09 Dec 2009 10:37:42 +0000" -->
<!-- isosent="20091209103742" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun only works when -np &amp;lt;4" -->
<!-- id="1260355062.21674.21.camel_at_alpha" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A948C182-06DF-4CCB-88DC-955C95C18F59_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun only works when -np &lt;4<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 05:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>In reply to:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-12-08 at 08:30 -0800, Matthew MacManes wrote:
<br>
<span class="quotelev1">&gt; There are 8 physical cores, or 16 with hyperthreading enabled. 
</span><br>
<p>That should be meaty enough.
<br>
<p><span class="quotelev1">&gt; 1st of all, let me say that when I specify that -np is less than 4
</span><br>
<span class="quotelev1">&gt; processors (1, 2, or 3), both programs seem to work as expected. Also,
</span><br>
<span class="quotelev1">&gt; the non-mpi version of each of them works fine.
</span><br>
<p>Presumably the non-mpi version is serial however? this this doesn't mean
<br>
the program is bug-free or that the parallel version isn't broken.
<br>
There are any number of apps that don't work above N processes, in fact
<br>
probably all programs break for some value of N, it's normally a little
<br>
higher then 3 however.
<br>
<p><span class="quotelev1">&gt; Thus, I am pretty sure that this is a problem with MPI rather that
</span><br>
<span class="quotelev1">&gt; with the program code or something else.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens is simply that the program hangs..
</span><br>
<p>I presume you mean here the output stops?  The program continues to use
<br>
CPU cycles but no longer appears to make any progress?
<br>
<p>I'm of the opinion that this is most likely a error in your program, I
<br>
would start by using either valgrind or padb.
<br>
<p>You can run the app under valgrind using the following mpirun options,
<br>
this will give you four files named v.log.0 to v.log.3 which you can
<br>
check for errors in the normal way.  The &quot;--mca btl tcp,self&quot; option
<br>
will disable shared memory which can create false positives.
<br>
<p>mpirun -n 4 --mca btl tcp,self valgrind --log-file=v.log.%
<br>
q{OMPI_COMM_WORLD_RANK} &lt;app&gt;
<br>
<p>Alternatively you can run the application, wait for it to hang and then
<br>
in another window run my tool, padb, which will show you the MPI message
<br>
queues and stack traces which should show you where it's hung,
<br>
instructions and sample output are on this page.
<br>
<p><a href="http://padb.pittman.org.uk/full-report.html">http://padb.pittman.org.uk/full-report.html</a>
<br>
<p><span class="quotelev1">&gt; There are no error messages, and there is no clue from anything else
</span><br>
<span class="quotelev1">&gt; (system working fine otherwise- no RAM issues, etc). It does not hang
</span><br>
<span class="quotelev1">&gt; at the same place everytime, sometimes in the very beginning, sometime
</span><br>
<span class="quotelev1">&gt; near the middle..  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could this an issue with hyperthreading? A conflict with something?
</span><br>
<p>Unlikely, if there was a problem in OMPI running more than 3 processes
<br>
it would have been found by now.  I regularly run 8 process applications
<br>
on my dual-core netbook alongside all my desktop processes without
<br>
issue, it runs fine, a little slowly but fine.
<br>
<p>All this talk about binding and affinity won't help either, process
<br>
binding is about squeezing the last 15% of performance out of a system
<br>
and making performance reproducible, it has no bearing on correctness or
<br>
scalability.  If you're not running on a dedicated machine which with
<br>
firefox running I guess you aren't then there would be a good case for
<br>
leaving it off anyway.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11467.php">Constantinos Makassikis: "[OMPI users] Hanging vs Stopping behaviour in communication failures"</a>
<li><strong>In reply to:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11469.php">Iris Pernille Lohmann: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Reply:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
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
