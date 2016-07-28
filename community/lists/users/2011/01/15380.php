<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 11:06:18 2011" -->
<!-- isoreceived="20110120160618" -->
<!-- sent="Thu, 20 Jan 2011 17:06:06 +0100" -->
<!-- isosent="20110120160606" -->
<!-- name="Nico Mittenzwey" -->
<!-- email="nico.mittenzwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="4D385D6E.7010201_at_informatik.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACA1C4D94C3374F81C530763A09DBF036A85DFAA9_at_ex-adg-01.addinggroup.lan" -->
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
<strong>From:</strong> Nico Mittenzwey (<em>nico.mittenzwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 11:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15379.php">Olivier SANNIER: "[OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15379.php">Olivier SANNIER: "[OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; What communication layer is used? How do I choose it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
The fastest available. You can choose the network by parameters given to 
<br>
mpirun see
<br>
<a href="http://www.open-mpi.org/faq/?category=tuning#mca-def">http://www.open-mpi.org/faq/?category=tuning#mca-def</a>
<br>
<p><span class="quotelev1">&gt; What is the behavior in case a node dies or becomes unreachable?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Your run will be aborted. However there is checkpoint/restart support 
<br>
for Linux <a href="http://www.open-mpi.org/faq/?category=ft">http://www.open-mpi.org/faq/?category=ft</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What makes any given machine become a node available for tasks?
</span><br>
<span class="quotelev1">&gt;
</span><br>
You define it in a host file or a batch system tells it OpenMPI.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there some sort of load balancing ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
No, you have to do that yourself.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a monitoring tool that would give me indications of the 
</span><br>
<span class="quotelev1">&gt; status and health of the nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
This has nothing to do with MPI. Nagios or Ganglia can do that.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How does the &quot;MPI enabled&quot; code gets transferred to the nodes? If I 
</span><br>
<span class="quotelev1">&gt; understand things correctly, I would have to write a separate command 
</span><br>
<span class="quotelev1">&gt; line exe that takes care of the tasks and this would be the exe that 
</span><br>
<span class="quotelev1">&gt; gets sent over to node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Usually you use a shared file system.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm quite sure all these are trivial questions for those with more 
</span><br>
<span class="quotelev1">&gt; experience, but I'm having a hard time finding resources that would 
</span><br>
<span class="quotelev1">&gt; answer those.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Read an introduction on programming with MPI and another one on Beowulf 
<br>
clusters (batch systems, monitoring, shared file systems). This should 
<br>
give you enough information on the topic. If you don't mind spending 
<br>
more money on software you can also take a look at Microsofts HPC Server.
<br>
<p>Nico
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15380/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15379.php">Olivier SANNIER: "[OMPI users] Help with some fundamentals"</a>
<li><strong>In reply to:</strong> <a href="15379.php">Olivier SANNIER: "[OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
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
