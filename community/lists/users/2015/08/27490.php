<?
$subject_val = "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 17:35:39 2015" -->
<!-- isoreceived="20150825213539" -->
<!-- sent="Tue, 25 Aug 2015 14:35:35 -0700" -->
<!-- isosent="20150825213535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)" -->
<!-- id="06C0049B-849E-4598-B85C-DAB7AEA6A340_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADEJBEUmiAdqm9zBGna8kOt=SkWXkGbBTgQZ-JKndcb_qkO1fw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-25 17:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to set &#226;&#128;&#148;mca orte_keep_fqdn_hostnames 1 on your mpirun line, or set the equivalent MCA param
<br>
<p><p><span class="quotelev1">&gt; On Aug 25, 2015, at 2:24 PM, Yong Qin &lt;yong.qin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This has been bothering me for a while but I never got a chance to identify the root cause. I know this issue could be due to misconfig of network or ssh in many cases. But I'm pretty sure that we don't fall into that category at all. Proof? This issue doesn't happen in 1.6.x and earlier releases, but only in 1.8+ including the 1.10.0 which was released today.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev1">&gt; n0233.mako0
</span><br>
<span class="quotelev1">&gt; n0189.mako0
</span><br>
<span class="quotelev1">&gt; n0198.mako0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.8.8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev1">&gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;   and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I was running the mpirun from &quot;n0009.scs00&quot;. If I ran it from a native &quot;mako0&quot; node, it would pass as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0198.mako0 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0198.mako0 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev1">&gt; n0189.mako0
</span><br>
<span class="quotelev1">&gt; n0198.mako0
</span><br>
<span class="quotelev1">&gt; n0233.mako0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The network connection between n0009.scs00 and all the &quot;mako0&quot; nodes are clear and no firewall at all, and all on the same subnet. The only thing that I can think of is the hostname itself. From the error message mpirun was trying to resolve n0198, etc., even though the proper hostname that's passed to it was n0198.mako0. &quot;n0198&quot; by itself would not resolve because we have multiple clusters configured within the same subnet and we do need the cluster name suffix as identifier. But this is also not always true, for example, if I only have two nodes involved than it would pass as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H n0189.mako0,n0233.mako0 hostname
</span><br>
<span class="quotelev1">&gt; n0189.mako0
</span><br>
<span class="quotelev1">&gt; n0233.mako0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The issue only exposes itself when more than 2 nodes are involved. Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yong Qin
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27489.php">http://www.open-mpi.org/community/lists/users/2015/08/27489.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27489.php">Yong Qin: "[OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
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
