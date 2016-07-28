<?
$subject_val = "Re: [OMPI users] Using hostfile with default hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 11:03:17 2010" -->
<!-- isoreceived="20101027150317" -->
<!-- sent="Wed, 27 Oct 2010 17:03:12 +0200" -->
<!-- isosent="20101027150312" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using hostfile with default hostfile" -->
<!-- id="AANLkTimzGBG9GxeqjhbiMDK3WbUhp-989G=mar3CeK_A_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D23691E-EFA3-4501-AE78-470E22462342_at_open-mpi.org" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 11:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14635.php">Shiqing Fan: "Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows"</a>
<li><strong>Previous message:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Reply:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Where is the option 'default-hostfile' described?
<br>
It does not appear in mpirun's man page (for v. 1.4.2)
<br>
and i couldn't find anything like that with googling.
<br>
<p>Jody
<br>
<p>On Wed, Oct 27, 2010 at 4:02 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Specify your hostfile as the default one:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --default-hostfile ./Cluster.hosts
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, we take the default hostfile and then apply the hostfile as a filter to select hosts from within it. Sounds strange, I suppose, but the idea is that the default hostfile can contain configuration info (#sockets, #cores/socket, etc.) that you might not want to have to put in every hostfile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 27, 2010, at 7:51 AM, Stefan Kuhne wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; my Cluster has a configured default hostfile.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When i use another hostfile for one job i get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cluster-admin_at_Head:~/Cluster/hello$ mpirun --hostfile ../Cluster.hosts
</span><br>
<span class="quotelev2">&gt;&gt; ./hello
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; There are no allocated resources for the application
</span><br>
<span class="quotelev2">&gt;&gt; &#160;./hello
</span><br>
<span class="quotelev2">&gt;&gt; that match the requested mapping:
</span><br>
<span class="quotelev2">&gt;&gt; &#160;../Cluster.hosts
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Verify that you have mapped the allocated resources properly using the
</span><br>
<span class="quotelev2">&gt;&gt; --host or --hostfile specification.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas for it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Stefan Kuhne
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14635.php">Shiqing Fan: "Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows"</a>
<li><strong>Previous message:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14633.php">Ralph Castain: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>Reply:</strong> <a href="14637.php">Eugene Loh: "Re: [OMPI users] Using hostfile with default hostfile"</a>
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
