<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 09:36:36 2010" -->
<!-- isoreceived="20101022133636" -->
<!-- sent="Fri, 22 Oct 2010 07:36:23 -0600" -->
<!-- isosent="20101022133623" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="11AA9FCA-D5CA-476B-A009-69712A31BB77_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 09:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Previous message:</strong> <a href="14549.php">Olivier Riff: "[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>In reply to:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI won't do this - if a node dies, the entire MPI job is terminated.
<br>
<p>Take a look at OpenRCM, a subproject of Open MPI:
<br>
<p><a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
<br>
<p>This is designed to do what you describe as we have a similar (open source) project underway at Cisco. If I were writing your system, I would:
<br>
<p>(a) add my sensors to the orte/mca/sensor framework. You'll find that we already monitor memory usage, for example. Use the orte/mca/db framework to store your data in a database. Several different databases are already supported, though it is easy to add another if you want (e.g., sqlite support).
<br>
<p>(b) add my desired error response to the src/orte/mca/errmgr/orcm module. The ability to migrate processes is already implemented, but you may need to do something additional to migrate a VM. If you prefer, you can create your own module in that area and use one of the other components as an example.
<br>
<p>Then let orcm start its daemons across your nodes. Orcm daemons will do the monitoring and reporting for you, and will start and monitor the virtual machines. If you set the max local restarts to 0, and max global restarts to some number, the system will automatically migrate any failures to other nodes.
<br>
<p>See the June 2010 presentation under &quot;Publications&quot; on the web page above for an overview of how it all works. If you decide to go this route, I'll be happy to provide advice and further explanation. And of course, you are welcome to participate in ORCM if you choose.
<br>
<p>Ralph
<br>
<p>On Oct 22, 2010, at 6:09 AM, Vasiliy G Tolstov wrote:
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
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14550/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>Previous message:</strong> <a href="14549.php">Olivier Riff: "[OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>In reply to:</strong> <a href="14546.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Reply:</strong> <a href="14552.php">Vasiliy G Tolstov: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
