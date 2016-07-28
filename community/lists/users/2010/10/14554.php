<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 10:06:24 2010" -->
<!-- isoreceived="20101022140624" -->
<!-- sent="Fri, 22 Oct 2010 18:06:19 +0400" -->
<!-- isosent="20101022140619" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="1287756379.9030.36.camel_at_vase" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D3C56F13-2D6C-4C2E-A08D-2335FA579395_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2010-10-22 10:06:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14555.php">Siegmar Gross: "[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9"</a>
<li><strong>Previous message:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-10-22 at 16:04 +0200, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 22.10.2010 um 14:09 schrieb Vasiliy G Tolstov:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2010-10-22 at 14:07 +0200, Reuti wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Am 22.10.2010 um 10:58 schrieb Vasiliy G Tolstov:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello. May be this question already answered, but i can't see it in list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; archive.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm running about 60 Xen nodes with about 7-20 virtual machines under
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it. I want to gather disk,cpu,memory,network utilisation from virtual
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; machines and get it into database for later processing.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; As i see, my architecture like this - One or two master servers with mpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; process with rank 0, that can insert data into database. This master
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; servers spawns on each Xen node mpi process, that gather statistics from
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; virtual machines on that node and send it to masters (may be with
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; multicast request). On each virtual machine i have process (mpi) that
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; can get and send data to mpi process on each Xen node. Virtual machine
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; have ability to migrate on other Xen node....
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; do you want just to monitor the physical and virtual machines by an application running under MPI? It sounds like it could be done by Ganglia or Nagios then.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; No.. I want to get realtime data to decide what virtual machine i need
</span><br>
<span class="quotelev2">&gt; &gt; to migrate to other Xen, becouse it need more resources.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is indeed an interesting field, as it was a couple of times also on the SGE Gridengine mailing list: how to handle jobs with varying resource requests over their lifetime, and how should they signal it (or provide it already in the `qsub` command) to the queuing system, that they now have to move to another bigger node (or could be moved to a smaller node with less resources).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<p>Very interesting. Thank You for suggestion.
<br>
<pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14555.php">Siegmar Gross: "[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9"</a>
<li><strong>Previous message:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>In reply to:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
