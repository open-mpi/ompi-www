<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 08:07:37 2010" -->
<!-- isoreceived="20101022120737" -->
<!-- sent="Fri, 22 Oct 2010 14:07:19 +0200" -->
<!-- isosent="20101022120719" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="07D91083-6439-4B88-87A3-995DF92D5DD7_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1287737909.9030.13.camel_at_vase" -->
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
<strong>Date:</strong> 2010-10-22 08:07:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14544.php">Jeff Squyres: "Re: [OMPI users] Some problems"</a>
<li><strong>In reply to:</strong> <a href="14543.php">Vasiliy G Tolstov: "[OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 22.10.2010 um 10:58 schrieb Vasiliy G Tolstov:
<br>
<p><span class="quotelev1">&gt; Hello. May be this question already answered, but i can't see it in list
</span><br>
<span class="quotelev1">&gt; archive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm running about 60 Xen nodes with about 7-20 virtual machines under
</span><br>
<span class="quotelev1">&gt; it. I want to gather disk,cpu,memory,network utilisation from virtual
</span><br>
<span class="quotelev1">&gt; machines and get it into database for later processing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As i see, my architecture like this - One or two master servers with mpi
</span><br>
<span class="quotelev1">&gt; process with rank 0, that can insert data into database. This master
</span><br>
<span class="quotelev1">&gt; servers spawns on each Xen node mpi process, that gather statistics from
</span><br>
<span class="quotelev1">&gt; virtual machines on that node and send it to masters (may be with
</span><br>
<span class="quotelev1">&gt; multicast request). On each virtual machine i have process (mpi) that
</span><br>
<span class="quotelev1">&gt; can get and send data to mpi process on each Xen node. Virtual machine
</span><br>
<span class="quotelev1">&gt; have ability to migrate on other Xen node....
</span><br>
<p>do you want just to monitor the physical and virtual machines by an application running under MPI? It sounds like it could be done by Ganglia or Nagios then.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Please, Can You help me with architecture of this system (is my thoughts
</span><br>
<span class="quotelev1">&gt; right) ?
</span><br>
<span class="quotelev1">&gt; And one more qeustion - that is the best way, to attach mpi process to
</span><br>
<span class="quotelev1">&gt; already running group? (for example, virtual machine is rebooted, or may
</span><br>
<span class="quotelev1">&gt; be Xen node rebooted)....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Than You for any answers...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Selfip.Ru
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14544.php">Jeff Squyres: "Re: [OMPI users] Some problems"</a>
<li><strong>In reply to:</strong> <a href="14543.php">Vasiliy G Tolstov: "[OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
