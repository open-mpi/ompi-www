<?
$subject_val = "Re: [OMPI users] Using hostfile with default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 10:02:36 2010" -->
<!-- isoreceived="20101027140236" -->
<!-- sent="Wed, 27 Oct 2010 08:02:29 -0600" -->
<!-- isosent="20101027140229" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using hostfile with default hostfile" -->
<!-- id="4D23691E-EFA3-4501-AE78-470E22462342_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CC82E59.5000807_at_access.denied" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using hostfile with default hostfile<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 10:02:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14632.php">Reuti: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14631.php">Stefan Kuhne: "[OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Reply:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Specify your hostfile as the default one:
<br>
<p>mpirun --default-hostfile ./Cluster.hosts
<br>
<p>Otherwise, we take the default hostfile and then apply the hostfile as a filter to select hosts from within it. Sounds strange, I suppose, but the idea is that the default hostfile can contain configuration info (#sockets, #cores/socket, etc.) that you might not want to have to put in every hostfile.
<br>
<p><p>On Oct 27, 2010, at 7:51 AM, Stefan Kuhne wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my Cluster has a configured default hostfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i use another hostfile for one job i get:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cluster-admin_at_Head:~/Cluster/hello$ mpirun --hostfile ../Cluster.hosts
</span><br>
<span class="quotelev1">&gt; ./hello
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev1">&gt;  ./hello
</span><br>
<span class="quotelev1">&gt; that match the requested mapping:
</span><br>
<span class="quotelev1">&gt;  ../Cluster.hosts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev1">&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas for it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Stefan Kuhne
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
<li><strong>Next message:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Previous message:</strong> <a href="14632.php">Reuti: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14631.php">Stefan Kuhne: "[OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Reply:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
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
