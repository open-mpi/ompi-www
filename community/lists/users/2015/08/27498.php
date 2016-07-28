<?
$subject_val = "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 26 18:48:32 2015" -->
<!-- isoreceived="20150826224832" -->
<!-- sent="Thu, 27 Aug 2015 07:48:30 +0900" -->
<!-- isosent="20150826224830" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)" -->
<!-- id="CAAkFZ5vAu-vFighGSww_oWfD9B=CMwaDxOy8ma2EvmgR1M5zMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CADEJBEVpFbF9-OTzQjULZkT5uQ+FPNKDFGSYRCgzcPRCVCjvug_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-26 18:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
is name resolution working on *all* the nodes ?
<br>
orted might be ssh'ed in a tree fashion.
<br>
that means orted can either be ssh'ed by the node running mpirun or any
<br>
other node.
<br>
from n0009.scs00, can you make sure
<br>
ssh n0189.mako0 ssh n0198.mako0 echo ok
<br>
ssh n0233.mako0 ssh n0198.mako0 echo ok
<br>
both work ?
<br>
<p>per your log, mpirun might remove the domain name from the ssh command
<br>
under the hood.
<br>
e.g.
<br>
ssh n0189.mako0 ssh n0198 echo ok
<br>
or
<br>
ssh n0198 ssh n0198.mako0 echo ok
<br>
if that is the case, then I have no idea why we are doing this ...
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, August 27, 2015, Yong Qin &lt;yong.qin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt; &gt; regardless of number of nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, this is not true. I was referring to this specific test, which was the
</span><br>
<span class="quotelev1">&gt; one that preventing me from thinking about FQDN, and the DN is different in
</span><br>
<span class="quotelev1">&gt; this case. As I clearly stated in my original question - &quot;The issue only
</span><br>
<span class="quotelev1">&gt; exposes itself when more than 2 nodes are involved.&quot;
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
<span class="quotelev1">&gt; On Tue, Aug 25, 2015 at 4:39 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your earlier message indicates that it works fine so long as the DN was
</span><br>
<span class="quotelev2">&gt;&gt; the same, regardless of number of nodes. It only failed when the DN&#226;&#128;&#153;s of
</span><br>
<span class="quotelev2">&gt;&gt; the nodes differed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 25, 2015, at 3:31 PM, Yong Qin &lt;yong.qin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','yong.qin_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course! I blame that two-node test distracted me from checking all the
</span><br>
<span class="quotelev2">&gt;&gt; FQDN relevant parameters. :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So why would the two-node test pass in this case without allowing the
</span><br>
<span class="quotelev2">&gt;&gt; FQDN then?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Aug 25, 2015 at 2:35 PM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to set &#226;&#128;&#148;mca orte_keep_fqdn_hostnames 1 on your mpirun line, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; set the equivalent MCA param
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Aug 25, 2015, at 2:24 PM, Yong Qin &lt;yong.qin_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','yong.qin_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This has been bothering me for a while but I never got a chance to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; identify the root cause. I know this issue could be due to misconfig of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network or ssh in many cases. But I'm pretty sure that we don't fall into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that category at all. Proof? This issue doesn't happen in 1.6.x and earlier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; releases, but only in 1.8+ including the 1.10.0 which was released today.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun (Open MPI) 1.6.5
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0198.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun (Open MPI) 1.8.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   Please check with your sys admin to determine the correct location
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ssh: Could not resolve hostname n0198: Name or service not known
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; This usually is caused by:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * the inability to write startup files into /tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   Please check with your sys admin to determine the correct location
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; *  compilation of the orted with dynamic libraries when static are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; required
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   (e.g., on Cray). Please check your configure cmd line and consider
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;   and network routing requirements).
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Note that I was running the mpirun from &quot;n0009.scs00&quot;. If I ran it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from a native &quot;mako0&quot; node, it would pass as well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0198.mako0 ~]$ mpirun -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0198.mako0 ~]$ mpirun -np 3 -H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n0189.mako0,n0233.mako0,n0198.mako0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0198.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The network connection between n0009.scs00 and all the &quot;mako0&quot; nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are clear and no firewall at all, and all on the same subnet. The only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thing that I can think of is the hostname itself. From the error message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was trying to resolve n0198, etc., even though the proper hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that's passed to it was n0198.mako0. &quot;n0198&quot; by itself would not resolve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because we have multiple clusters configured within the same subnet and we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do need the cluster name suffix as identifier. But this is also not always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; true, for example, if I only have two nodes involved than it would pass as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; well.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -V
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun (Open MPI) 1.10.0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; [yqin_at_n0009.scs00 ~]$ mpirun -np 2 -H n0189.mako0,n0233.mako0 hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0189.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; n0233.mako0
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; The issue only exposes itself when more than 2 nodes are involved. Any
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thoughts?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Yong Qin
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27489.php">http://www.open-mpi.org/community/lists/users/2015/08/27489.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27490.php">http://www.open-mpi.org/community/lists/users/2015/08/27490.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27491.php">http://www.open-mpi.org/community/lists/users/2015/08/27491.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/08/27493.php">http://www.open-mpi.org/community/lists/users/2015/08/27493.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27498/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Previous message:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>In reply to:</strong> <a href="27497.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
<li><strong>Reply:</strong> <a href="27499.php">Yong Qin: "Re: [OMPI users] ssh: Could not resolve hostname xxxx: Name or service not known (v1.8+)"</a>
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
