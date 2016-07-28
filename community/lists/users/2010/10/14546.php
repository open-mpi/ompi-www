<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 08:10:00 2010" -->
<!-- isoreceived="20101022121000" -->
<!-- sent="Fri, 22 Oct 2010 16:09:54 +0400" -->
<!-- isosent="20101022120954" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="1287749394.9030.20.camel_at_vase" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="07D91083-6439-4B88-87A3-995DF92D5DD7_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] dinamic spawn process on remote node<br>
<strong>From:</strong> Vasiliy G Tolstov (<em>v.tolstov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 08:09:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14547.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-10-22 at 14:07 +0200, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 22.10.2010 um 10:58 schrieb Vasiliy G Tolstov:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello. May be this question already answered, but i can't see it in list
</span><br>
<span class="quotelev2">&gt; &gt; archive.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm running about 60 Xen nodes with about 7-20 virtual machines under
</span><br>
<span class="quotelev2">&gt; &gt; it. I want to gather disk,cpu,memory,network utilisation from virtual
</span><br>
<span class="quotelev2">&gt; &gt; machines and get it into database for later processing.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; As i see, my architecture like this - One or two master servers with mpi
</span><br>
<span class="quotelev2">&gt; &gt; process with rank 0, that can insert data into database. This master
</span><br>
<span class="quotelev2">&gt; &gt; servers spawns on each Xen node mpi process, that gather statistics from
</span><br>
<span class="quotelev2">&gt; &gt; virtual machines on that node and send it to masters (may be with
</span><br>
<span class="quotelev2">&gt; &gt; multicast request). On each virtual machine i have process (mpi) that
</span><br>
<span class="quotelev2">&gt; &gt; can get and send data to mpi process on each Xen node. Virtual machine
</span><br>
<span class="quotelev2">&gt; &gt; have ability to migrate on other Xen node....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do you want just to monitor the physical and virtual machines by an application running under MPI? It sounds like it could be done by Ganglia or Nagios then.
</span><br>
<p>No.. I want to get realtime data to decide what virtual machine i need
<br>
to migrate to other Xen, becouse it need more resources.
<br>
<p><p><pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14547.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14545.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
