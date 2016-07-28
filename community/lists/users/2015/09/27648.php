<?
$subject_val = "Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 22 17:11:44 2015" -->
<!-- isoreceived="20150922211144" -->
<!-- sent="Tue, 22 Sep 2015 14:11:40 -0700" -->
<!-- isosent="20150922211140" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn" -->
<!-- id="90650046-313F-4FB3-BF4F-2E7589C5C681_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1442950847.88037.YahooMailAndroidMobile_at_web171202.mail.ir2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Specifying nodes and cores when using mpi_comm_spawn<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-22 17:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you specify &#151;slot-list 0,2,4,&#133;  on the original mpirun cmd line, we will use only those cpus for both jobs. However, we will error out if more than one proc gets bound to a given core, so you&#146;d have to also add &#151;bind-to core:overload
<br>
<p><p><span class="quotelev1">&gt; On Sep 22, 2015, at 12:40 PM, Glynn Hosking &lt;glynnhosking_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using mpi_comm_spawn to launch one mpi-enabled executable from another. The jobs are running on clusters using SGE and PBS schedulers. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can see that it's possible to specify the nodes on which to run the spawned executable (using the info argument list). However, is it also possible to specify the cores on which to run the spawned executable?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd like the spawned executable to run on the same nodes and cores as the master executable, to minimise the resources used on the cluster. The master process would otherwise be doing &quot;nothing&quot; whilst waiting for the spawned executable to complete its work. 
</span><br>
<span class="quotelev1">&gt; Sent from Yahoo Mail on Android &lt;<a href="https://overview.mail.yahoo.com/mobile/?.src=Android">https://overview.mail.yahoo.com/mobile/?.src=Android</a>&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27647.php">http://www.open-mpi.org/community/lists/users/2015/09/27647.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27649.php">Nathan Hjelm: "Re: [OMPI users] possible GATS bug in osc/sm"</a>
<li><strong>Previous message:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="27647.php">Glynn Hosking: "[OMPI users] Specifying nodes and cores when using mpi_comm_spawn"</a>
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
