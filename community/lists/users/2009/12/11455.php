<?
$subject_val = "Re: [OMPI users] ompi-restart using different nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:39:54 2009" -->
<!-- isoreceived="20091208183954" -->
<!-- sent="Tue, 08 Dec 2009 13:39:43 -0500" -->
<!-- isosent="20091208183943" -->
<!-- name="Jonathan Ferland" -->
<!-- email="jonathan.ferland_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ompi-restart using different nodes" -->
<!-- id="4B1E9D6F.2010707_at_rqchp.qc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D4C2CFB2-A917-44C8-8960-1BA4D9DB959E_at_open-mpi.org" -->
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
<strong>Date:</strong> 2009-12-08 13:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<li><strong>Previous message:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I did the same test using 1.3.4 and still the same issue....  I also 
<br>
tried to use the tm interface instead of specifying the hostfile, same 
<br>
result.
<br>
<p>thanks,
<br>
<p>Jonathan
<br>
<p>Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; Though I do not test this scenario (using hostfiles) very often, it 
</span><br>
<span class="quotelev1">&gt; used to work. The ompi-restart command takes a --hostfile (or 
</span><br>
<span class="quotelev1">&gt; --machinefile) argument that is passed directly to the mpirun command. 
</span><br>
<span class="quotelev1">&gt; I wonder if something broke recently with this handoff. I can 
</span><br>
<span class="quotelev1">&gt; certainly checkpoint with one set of nodes/allocation and restart with 
</span><br>
<span class="quotelev1">&gt; another, but most/all of my testing occurs in a SLURM environment, so 
</span><br>
<span class="quotelev1">&gt; no need for an explicit hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll take a look to see if I can reproduce, but probably will not be 
</span><br>
<span class="quotelev1">&gt; until next week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 2, 2009, at 9:54 AM, Jonathan Ferland wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to use BLCR checkpointing in mpi. I am currently able to 
</span><br>
<span class="quotelev2">&gt;&gt; run my application using some hostfile, checkpoint the run, and then 
</span><br>
<span class="quotelev2">&gt;&gt; restart the application using the same hostfile. The thing I would 
</span><br>
<span class="quotelev2">&gt;&gt; like to do is to restart the application with a different hostfile. 
</span><br>
<span class="quotelev2">&gt;&gt; But this leads to a segfault using 1.3.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it possible to restart the application using a different hostfile 
</span><br>
<span class="quotelev2">&gt;&gt; (we are using pbs to create the hostfile, so each new restart might 
</span><br>
<span class="quotelev2">&gt;&gt; be on different nodes), how can we do that? If no, do you plan to 
</span><br>
<span class="quotelev2">&gt;&gt; include this in a future release?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
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
<li><strong>Next message:</strong> <a href="11456.php">Ross Boylan: "[OMPI users] OMPI as a batch system"</a>
<li><strong>Previous message:</strong> <a href="11454.php">Matthew MacManes: "[OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>In reply to:</strong> <a href="11370.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
<li><strong>Reply:</strong> <a href="11476.php">Josh Hursey: "Re: [OMPI users] ompi-restart using different nodes"</a>
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
