<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 11:50:49 2011" -->
<!-- isoreceived="20110120165049" -->
<!-- sent="Thu, 20 Jan 2011 17:50:37 +0100" -->
<!-- isosent="20110120165037" -->
<!-- name="Olivier SANNIER" -->
<!-- email="Olivier.SANNIER_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="CACA1C4D94C3374F81C530763A09DBF036A85DFB0D_at_ex-adg-01.addinggroup.lan" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D385D6E.7010201_at_informatik.tu-chemnitz.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with some fundamentals<br>
<strong>From:</strong> Olivier SANNIER (<em>Olivier.SANNIER_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 11:50:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First of all, thank you for answers.
<br>
I have a bit more questions, added below.
<br>
<p>What is the behavior in case a node dies or becomes unreachable?
<br>
Your run will be aborted. However there is checkpoint/restart support for Linux <a href="http://www.open-mpi.org/faq/?category=ft">http://www.open-mpi.org/faq/?category=ft</a>
<br>
<p>As this is a Win32 program, I'll have to take into account that there is only the &lt; abort &gt; behavior.
<br>
<p>What makes any given machine become a node available for tasks?
<br>
You define it in a host file or a batch system tells it OpenMPI.
<br>
<p>So there is no dynamic discovery of nodes available on the network. Unless, of course, if I was to write a tool that would do it before the actual run is started.
<br>
<p><p>Is there a monitoring tool that would give me indications of the status and health of the nodes?
<br>
This has nothing to do with MPI. Nagios or Ganglia can do that.
<br>
<p>I was more thinking of a tool that would tell me a node is already performing a task, so that I can avoid having it oversubscribed.
<br>
<p><p>I'm quite sure all these are trivial questions for those with more experience, but I'm having a hard time finding resources that would answer those.
<br>
Read an introduction on programming with MPI and another one on Beowulf clusters (batch systems, monitoring, shared file systems). This should give you enough information on the topic. If you don't mind spending more money on software you can also take a look at Microsofts HPC Server.
<br>
I've started looking at beowulf clusters, and that lead me to PBS. Am I right in assuming that PBS (PBSPro or TORQUE) could be used to do the monitoring and the load balancing I thought of?
<br>
<p>Thanks
<br>
Olivier
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15381/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15380.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15382.php">David Zhang: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15384.php">Nico Mittenzwey: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15388.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15389.php">John Hearns: "Re: [OMPI users] Help with some fundamentals"</a>
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
