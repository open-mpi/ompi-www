<?
$subject_val = "Re: [OMPI devel] New binding warnings in master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 11:21:02 2015" -->
<!-- isoreceived="20150320152102" -->
<!-- sent="Fri, 20 Mar 2015 08:20:58 -0700" -->
<!-- isosent="20150320152058" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New binding warnings in master" -->
<!-- id="7528EF21-AD92-40FA-B8EF-5DF29DDE022D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="54776244e2c24ebe95c301814a937fe3_at_HQMAIL102.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New binding warnings in master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-20 11:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
<li><strong>In reply to:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In fixing a problem for Mellanox, I noted that we had somehow lost our default binding policy intentions - i.e., we were no longer automatically binding by default. I fixed that, and so you&#226;&#128;&#153;d get this if the numactl and numactl-devel libs are missing.
<br>
<p>I suspect we should eliminate those warnings if we bind by default?
<br>
<p>On the other matter: that has been the agreed-upon behavior for some time now. If you don&#226;&#128;&#153;t specify anything, we launch the number of procs equal to the number of slots, with the slots auto-detected using hwloc and equating slots to number of discovered cores.
<br>
<p>However, if you use -host, then we assume you are telling us the number of slots=1 for every time you mention the host name. This overrides any auto-discovery.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><span class="quotelev1">&gt; On Mar 20, 2015, at 8:16 AM, Rolf vandeVaart &lt;rvandevaart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am now seeing the following message for all my calls to mpirun on ompi master.  This started with last night&#226;&#128;&#153;s MTT run.  Is this intentional?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_ivy0 ~]$ mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt; supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt; support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Node:  ivy0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt; on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt; contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt; This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On another note, I noticed on both 1.8 and master that we get different number of nodes if we specify the hostname.  This is not too big a deal, but surprised me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_ivy0 ~]$ /opt/openmpi/v1.8.4/bin/mpirun hostname
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_ivy0 ~]$ /opt/openmpi/v1.8.4/bin/mpirun -host ivy0 hostname
</span><br>
<span class="quotelev1">&gt; ivy0.nvidia.com &lt;<a href="http://ivy0.nvidia.com/">http://ivy0.nvidia.com/</a>&gt;
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_ivy0 ~]$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain confidential information.  Any unauthorized review, use, disclosure or distribution is prohibited.  If you are not the intended recipient, please contact the sender by reply email and destroy all copies of the original message. 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/03/17140.php">http://www.open-mpi.org/community/lists/devel/2015/03/17140.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/03/17140.php">http://www.open-mpi.org/community/lists/devel/2015/03/17140.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17141/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17142.php">Paul Hargrove: "Re: [OMPI devel] Master failure of oob_tcp on Solaris"</a>
<li><strong>Previous message:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
<li><strong>In reply to:</strong> <a href="17140.php">Rolf vandeVaart: "[OMPI devel] New binding warnings in master"</a>
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
