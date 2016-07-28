<?
$subject_val = "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 25 19:39:43 2015" -->
<!-- isoreceived="20150825233943" -->
<!-- sent="Tue, 25 Aug 2015 16:39:39 -0700" -->
<!-- isosent="20150825233939" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)" -->
<!-- id="3774C0CD-E516-4721-BA9D-8CFA96427E75_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CADEJBEU+LoJYvLiFMTsKe8juk3QFxyQdgsZSY5YrFXcDbJ=XCA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-08-25 19:39:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does make run autoconfig?"</a>
<li><strong>Previous message:</strong> <a href="27492.php">Bryan Flynt: "[OMPI users] Why does make run autoconfig?"</a>
<li><strong>In reply to:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Your earlier message indicates that it works fine so long as the DN was the same, regardless of number of nodes. It only failed when the DN&#226;&#128;&#153;s of the nodes differed.
<br>
<p><p><span class="quotelev1">&gt; On Aug 25, 2015, at 3:31 PM, Yong Qin &lt;yong.qin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course! I blame that two-node test distracted me from checking all the FQDN relevant parameters. :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So why would the two-node test pass in this case without allowing the FQDN then?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Aug 25, 2015 at 2:35 PM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You need to set &#226;&#128;&#148;mca orte_keep_fqdn_hostnames 1 on your mpirun line, or set the equivalent MCA param
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 25, 2015, at 2:24 PM, Yong Qin &lt;yong.qin_at_[hidden] &lt;mailto:yong.qin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This has been bothering me for a while but I never got a chance to identify the root cause. I know this issue could be due to misconfig of network or ssh in many cases. But I'm pretty sure that we don't fall into that category at all. Proof? This issue doesn't happen in 1.6.x and earlier releases, but only in 1.8+ including the 1.10.0 which was released today.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.6.5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev2">&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev2">&gt; &gt; n0198.mako0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.8.8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev2">&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev2">&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev2">&gt; &gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev2">&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev2">&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev2">&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev2">&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev2">&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev2">&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev2">&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev2">&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev2">&gt; &gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev2">&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev2">&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev2">&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev2">&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev2">&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Note that I was running the mpirun from &quot;n0009.scs00&quot;. If I ran it from a native &quot;mako0&quot; node, it would pass as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0198.mako0 ~]$ mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0198.mako0 ~]$ mpirun -np 3 -H n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev2">&gt; &gt; n0198.mako0
</span><br>
<span class="quotelev2">&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The network connection between n0009.scs00 and all the &quot;mako0&quot; nodes are clear and no firewall at all, and all on the same subnet. The only thing that I can think of is the hostname itself. From the error message mpirun was trying to resolve n0198, etc., even though the proper hostname that's passed to it was n0198.mako0. &quot;n0198&quot; by itself would not resolve because we have multiple clusters configured within the same subnet and we do need the cluster name suffix as identifier. But this is also not always true, for example, if I only have two nodes involved than it would pass as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H n0189.mako0,n0233.mako0 hostname
</span><br>
<span class="quotelev2">&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev2">&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The issue only exposes itself when more than 2 nodes are involved. Any thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yong Qin
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27489.php">http://www.open-mpi.org/community/lists/users/2015/08/27489.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/08/27489.php">http://www.open-mpi.org/community/lists/users/2015/08/27489.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27490.php">http://www.open-mpi.org/community/lists/users/2015/08/27490.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/08/27490.php">http://www.open-mpi.org/community/lists/users/2015/08/27490.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27491.php">http://www.open-mpi.org/community/lists/users/2015/08/27491.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27493/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27494.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why does make run autoconfig?"</a>
<li><strong>Previous message:</strong> <a href="27492.php">Bryan Flynt: "[OMPI users] Why does make run autoconfig?"</a>
<li><strong>In reply to:</strong> <a href="27491.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
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
