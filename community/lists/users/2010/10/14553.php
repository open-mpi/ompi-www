<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 10:04:33 2010" -->
<!-- isoreceived="20101022140433" -->
<!-- sent="Fri, 22 Oct 2010 16:04:14 +0200" -->
<!-- isosent="20101022140414" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="D3C56F13-2D6C-4C2E-A08D-2335FA579395_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1287749394.9030.20.camel_at_vase" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 10:04:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 22.10.2010 um 14:09 schrieb Vasiliy G Tolstov:
<br>
<p><span class="quotelev1">&gt; On Fri, 2010-10-22 at 14:07 +0200, Reuti wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 22.10.2010 um 10:58 schrieb Vasiliy G Tolstov:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello. May be this question already answered, but i can't see it in list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; archive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running about 60 Xen nodes with about 7-20 virtual machines under
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it. I want to gather disk,cpu,memory,network utilisation from virtual
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines and get it into database for later processing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As i see, my architecture like this - One or two master servers with mpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process with rank 0, that can insert data into database. This master
</span><br>
<span class="quotelev3">&gt;&gt;&gt; servers spawns on each Xen node mpi process, that gather statistics from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual machines on that node and send it to masters (may be with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multicast request). On each virtual machine i have process (mpi) that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can get and send data to mpi process on each Xen node. Virtual machine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have ability to migrate on other Xen node....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; do you want just to monitor the physical and virtual machines by an application running under MPI? It sounds like it could be done by Ganglia or Nagios then.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No.. I want to get realtime data to decide what virtual machine i need
</span><br>
<span class="quotelev1">&gt; to migrate to other Xen, becouse it need more resources.
</span><br>
<p>This is indeed an interesting field, as it was a couple of times also on the SGE Gridengine mailing list: how to handle jobs with varying resource requests over their lifetime, and how should they signal it (or provide it already in the `qsub` command) to the queuing system, that they now have to move to another bigger node (or could be moved to a smaller node with less resources).
<br>
<p>-- Reuti
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14554.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
