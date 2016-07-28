<?
$subject_val = "Re: [OMPI users] dinamic spawn process on remote node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 09:55:55 2010" -->
<!-- isoreceived="20101022135555" -->
<!-- sent="Fri, 22 Oct 2010 17:55:50 +0400" -->
<!-- isosent="20101022135550" -->
<!-- name="Vasiliy G Tolstov" -->
<!-- email="v.tolstov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dinamic spawn process on remote node" -->
<!-- id="1287755750.9030.33.camel_at_vase" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="11AA9FCA-D5CA-476B-A009-69712A31BB77_at_open-mpi.org" -->
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
<strong>Date:</strong> 2010-10-22 09:55:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>In reply to:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-10-22 at 07:36 -0600, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; MPI won't do this - if a node dies, the entire MPI job is terminated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Take a look at OpenRCM, a subproject of Open MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/projects/orcm/">http://www.open-mpi.org/projects/orcm/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is designed to do what you describe as we have a similar (open
</span><br>
<span class="quotelev1">&gt; source) project underway at Cisco. If I were writing your system, I
</span><br>
<span class="quotelev1">&gt; would:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (a) add my sensors to the orte/mca/sensor framework. You'll find that
</span><br>
<span class="quotelev1">&gt; we already monitor memory usage, for example. Use the orte/mca/db
</span><br>
<span class="quotelev1">&gt; framework to store your data in a database. Several different
</span><br>
<span class="quotelev1">&gt; databases are already supported, though it is easy to add another if
</span><br>
<span class="quotelev1">&gt; you want (e.g., sqlite support).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (b) add my desired error response to the src/orte/mca/errmgr/orcm
</span><br>
<span class="quotelev1">&gt; module. The ability to migrate processes is already implemented, but
</span><br>
<span class="quotelev1">&gt; you may need to do something additional to migrate a VM. If you
</span><br>
<span class="quotelev1">&gt; prefer, you can create your own module in that area and use one of the
</span><br>
<span class="quotelev1">&gt; other components as an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then let orcm start its daemons across your nodes. Orcm daemons will
</span><br>
<span class="quotelev1">&gt; do the monitoring and reporting for you, and will start and monitor
</span><br>
<span class="quotelev1">&gt; the virtual machines. If you set the max local restarts to 0, and max
</span><br>
<span class="quotelev1">&gt; global restarts to some number, the system will automatically migrate
</span><br>
<span class="quotelev1">&gt; any failures to other nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the June 2010 presentation under &quot;Publications&quot; on the web page
</span><br>
<span class="quotelev1">&gt; above for an overview of how it all works. If you decide to go this
</span><br>
<span class="quotelev1">&gt; route, I'll be happy to provide advice and further explanation. And of
</span><br>
<span class="quotelev1">&gt; course, you are welcome to participate in ORCM if you choose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>Thank You very much. I think this is very useful for me. Can You provide
<br>
me link to presentation (i can't see it under
<br>
<a href="http://www.open-mpi.org/papers/">http://www.open-mpi.org/papers/</a>)
<br>
<p>And can You send me very simple example, how can i use ORCM.. (may be i
<br>
can get some useful information by reading
<br>
<a href="http://svn.open-mpi.org/svn/orcm/trunk/test">http://svn.open-mpi.org/svn/orcm/trunk/test</a>...)
<br>
<p>Does ORCM have man pages for functions like openmpi?
<br>
<p><pre>
-- 
Vasiliy G Tolstov &lt;v.tolstov_at_[hidden]&gt;
Selfip.Ru
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<li><strong>Previous message:</strong> <a href="14551.php">Ralph Castain: "Re: [OMPI users] Fix the use of hostfiles when a username is supplied in v1.5 ?"</a>
<li><strong>In reply to:</strong> <a href="14550.php">Ralph Castain: "Re: [OMPI users] dinamic spawn process on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14553.php">Reuti: "Re: [OMPI users] dinamic spawn process on remote node"</a>
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
