<?
$subject_val = "Re: [OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 12:14:29 2009" -->
<!-- isoreceived="20091209171429" -->
<!-- sent="Wed, 09 Dec 2009 12:14:19 -0500" -->
<!-- isosent="20091209171419" -->
<!-- name="Jonathan Ferland" -->
<!-- email="jonathan.ferland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart using different nodes" -->
<!-- id="4B1FDAEB.4060406_at_rqchp.qc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7646A944-E45B-4713-ACF9-B4128B80CE01_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] ompi-restart using different nodes<br>
<strong>From:</strong> Jonathan Ferland (<em>jonathan.ferland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 12:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Josh,
<br>
<p>Thanks for helping. That solved the problem!!!
<br>
<p>cheers,
<br>
<p>Jonathan
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; So I tried to reproduce this problem today, and everything worked fine 
</span><br>
<span class="quotelev1">&gt; for me using the trunk. I haven't tested v1.3/v1.4 yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried checkpointing with one hostfile then restarting with each of 
</span><br>
<span class="quotelev1">&gt; the following:
</span><br>
<span class="quotelev1">&gt;  - No hostfile
</span><br>
<span class="quotelev1">&gt;  - a hostfile with completely different machines
</span><br>
<span class="quotelev1">&gt;  - a hostfile with the same machines in the opposite order
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect that the problem is not with Open MPI, but your system 
</span><br>
<span class="quotelev1">&gt; interacting with BLCR. Usually when people cannot restart on a 
</span><br>
<span class="quotelev1">&gt; different node they have problems with the 'prelink' feature on Linux. 
</span><br>
<span class="quotelev1">&gt; BLCR has a FAQ item on this:
</span><br>
<span class="quotelev1">&gt;   <a href="https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink">https://upc-bugs.lbl.gov//blcr/doc/html/FAQ.html#prelink</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if this is your problem then you will probably not be able to 
</span><br>
<span class="quotelev1">&gt; checkpoint a single process (non-MPI) application on one node and 
</span><br>
<span class="quotelev1">&gt; restart on another. Sorry I didn't mention it before, must have 
</span><br>
<span class="quotelev1">&gt; slipped my mind.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this turns out to not be the problem, let me know and I'll take 
</span><br>
<span class="quotelev1">&gt; another look. Also send me any error messages that are displayed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 8, 2009, at 1:39 PM, Jonathan Ferland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did the same test using 1.3.4 and still the same issue....  I also 
</span><br>
<span class="quotelev2">&gt;&gt; tried to use the tm interface instead of specifying the hostfile, 
</span><br>
<span class="quotelev2">&gt;&gt; same result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jonathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though I do not test this scenario (using hostfiles) very often, it 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used to work. The ompi-restart command takes a --hostfile (or 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --machinefile) argument that is passed directly to the mpirun 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command. I wonder if something broke recently with this handoff. I 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can certainly checkpoint with one set of nodes/allocation and 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart with another, but most/all of my testing occurs in a SLURM 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment, so no need for an explicit hostfile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll take a look to see if I can reproduce, but probably will not be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; until next week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 2, 2009, at 9:54 AM, Jonathan Ferland wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to use BLCR checkpointing in mpi. I am currently able 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to run my application using some hostfile, checkpoint the run, and 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; then restart the application using the same hostfile. The thing I 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would like to do is to restart the application with a different 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile. But this leads to a segfault using 1.3.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it possible to restart the application using a different 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hostfile (we are using pbs to create the hostfile, so each new 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; restart might be on different nodes), how can we do that? If no, do 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you plan to include this in a future release?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Jonathan Ferland, analyste en calcul scientifique
</span><br>
<span class="quotelev2">&gt;&gt; RQCHP (R&#233;seau qu&#233;b&#233;cois de calcul de haute performance)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; bureau S-252, pavillon Roger-Gaudry, Universit&#233; de Montr&#233;al
</span><br>
<span class="quotelev2">&gt;&gt; t&#233;l&#233;phone   : 514 343-6111 poste 8852
</span><br>
<span class="quotelev2">&gt;&gt; t&#233;l&#233;copieur : 514 343-2155
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
--------------------------------------------------------------
Jonathan Ferland, analyste en calcul scientifique
RQCHP (R&#233;seau qu&#233;b&#233;cois de calcul de haute performance)
bureau S-252, pavillon Roger-Gaudry, Universit&#233; de Montr&#233;al
t&#233;l&#233;phone   : 514 343-6111 poste 8852
t&#233;l&#233;copieur : 514 343-2155
--------------------------------------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>Previous message:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>In reply to:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
