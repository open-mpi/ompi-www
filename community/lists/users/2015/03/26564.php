<?
$subject_val = "Re: [OMPI users] Connection problem on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 16:36:37 2015" -->
<!-- isoreceived="20150328203637" -->
<!-- sent="Sat, 28 Mar 2015 20:36:15 +0000" -->
<!-- isosent="20150328203615" -->
<!-- name="LOTFIFAR F." -->
<!-- email="foad.lotfifar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection problem on Linux cluster" -->
<!-- id="F28A112937E208429BD09C805E9A1945090E9DEF_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="D0450BAD-C876-4ED4-8CA3-702082676806_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Connection problem on Linux cluster<br>
<strong>From:</strong> LOTFIFAR F. (<em>foad.lotfifar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-28 16:36:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26563.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26563.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
surprisingly,  it is all that I get!! nothing else come after.  This is the same for openmpi-1.6.5.
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: 28 March 2015 20:12
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Connection problem on Linux cluster
<br>
<p>Did you configure &#151;enable-debug? We aren&#146;t seeing any of the debug output, so I suspect not.
<br>
<p><p>On Mar 28, 2015, at 12:56 PM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&lt;mailto:foad.lotfifar_at_[hidden]&gt;&gt; wrote:
<br>
<p>I have done it and it is the results:
<br>
<p>ubuntu_at_fehg-node-0:~$ mpirun -host fehg-node-7 -mca oob_base_verbose 100 -mca state_base_verbose 10 hostname
<br>
[fehg-node-0:30034] mca: base: components_open: Looking for oob components
<br>
[fehg-node-0:30034] mca: base: components_open: opening oob components
<br>
[fehg-node-0:30034] mca: base: components_open: found loaded component tcp
<br>
[fehg-node-0:30034] mca: base: components_open: component tcp register function successful
<br>
[fehg-node-0:30034] mca: base: components_open: component tcp open function successful
<br>
[fehg-node-7:31138] mca: base: components_open: Looking for oob components
<br>
[fehg-node-7:31138] mca: base: components_open: opening oob components
<br>
[fehg-node-7:31138] mca: base: components_open: found loaded component tcp
<br>
[fehg-node-7:31138] mca: base: components_open: component tcp register function successful
<br>
[fehg-node-7:31138] mca: base: components_open: component tcp open function successful
<br>
<p>freeze ...
<br>
<p>Regards
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of LOTFIFAR F. [foad.lotfifar_at_[hidden]&lt;mailto:foad.lotfifar_at_[hidden]&gt;]
<br>
Sent: 28 March 2015 18:49
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Connection problem on Linux cluster
<br>
<p>fehg_node_1 and fehg-node-7 are the same. it is just a typo.
<br>
<p>Correction: VM names are fehg-node-0 and fehg-node-7.
<br>
<p><p>Regards,
<br>
<p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: 28 March 2015 18:23
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Connection problem on Linux cluster
<br>
<p>Just to be clear: do you have two physical nodes? Or just one physical node and you are running two VMs on it?
<br>
<p>On Mar 28, 2015, at 10:51 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&lt;mailto:foad.lotfifar_at_[hidden]&gt;&gt; wrote:
<br>
<p>I have a floating IP for accessing nodes from outside of the cluster and internal ip addresses. I tried to run the jobs with both of them (both ip addresses) but it makes no difference.
<br>
I have just installed openmpi 1.6.5 to see how does this version works. In this case I get nothing and I have to press Crtl+c. not output or error is shown.
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]&lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden]&lt;mailto:rhc_at_[hidden]&gt;]
<br>
Sent: 28 March 2015 17:03
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Connection problem on Linux cluster
<br>
<p>You mentioned running this in a VM - is that IP address correct for getting across the VMs?
<br>
<p><p>On Mar 28, 2015, at 8:38 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&lt;mailto:foad.lotfifar_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hi ,
<br>
<p>I am wondering how can I solve this problem.
<br>
System Spec:
<br>
1- Linux cluster with two nodes (master and slave) with Ubuntu 12.04 LTS 32bit.
<br>
2- openmpi 1.8.4
<br>
<p>I do a simple test running on fehg_node_0:
<br>
<span class="quotelev1">&gt; mpirun -host fehg_node_0,fehg_node_1 hello_world -mca oob_base_verbose 20
</span><br>
<p>and I get the following error:
<br>
<p>A process or daemon was unable to complete a TCP connection
<br>
to another process:
<br>
&nbsp;&nbsp;Local host:    fehg-node-0
<br>
&nbsp;&nbsp;Remote host:   10.104.5.40
<br>
This is usually caused by a firewall on the remote host. Please
<br>
check that any firewall (e.g., iptables) has been disabled and
<br>
try again.
<br>
------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
ORTE was unable to reliably start one or more daemons.
<br>
This usually is caused by:
<br>
<p>* not finding the required libraries and/or binaries on
<br>
&nbsp;&nbsp;one or more nodes. Please check your PATH and LD_LIBRARY_PATH
<br>
&nbsp;&nbsp;settings, or configure OMPI with --enable-orterun-prefix-by-default
<br>
<p>* lack of authority to execute on one or more specified nodes.
<br>
&nbsp;&nbsp;Please verify your allocation and authorities.
<br>
<p>* the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
<br>
&nbsp;&nbsp;Please check with your sys admin to determine the correct location to use.
<br>
<p>*  compilation of the orted with dynamic libraries when static are required
<br>
&nbsp;&nbsp;(e.g., on Cray). Please check your configure cmd line and consider using
<br>
&nbsp;&nbsp;one of the contrib/platform definitions for your system type.
<br>
<p>* an inability to create a connection back to mpirun due to a
<br>
&nbsp;&nbsp;lack of common network interfaces and/or no route found between
<br>
&nbsp;&nbsp;them. Please check network connectivity (including firewalls
<br>
&nbsp;&nbsp;and network routing requirements).
<br>
<p>Verbose:
<br>
1- I have full access to the VMs on the cluster and setup everything myself
<br>
2- Firewall and iptables are all disabled on the nodes
<br>
3- nodes can ssh to each other with  no problem
<br>
4- non-interactive bash calls works fine i.e. when I run ssh othernode env | grep PATH from both nodes, both PATH and LD_LIBRARY_PATH are set correctly
<br>
5- I have checked the posts, a similar problem reported for Solaris but I could not find a clue about mine.
<br>
6- run with --enable-orterun-prefix-by-default does not make any changes.
<br>
7-  I see orte is running on the other node when I check processes, but nothing happens after that and the error happens.
<br>
<p>Regards,
<br>
Karos
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26555.php">http://www.open-mpi.org/community/lists/users/2015/03/26555.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26557.php">http://www.open-mpi.org/community/lists/users/2015/03/26557.php</a>
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26562.php">http://www.open-mpi.org/community/lists/users/2015/03/26562.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26564/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26563.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26563.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Reply:</strong> <a href="26565.php">Ralph Castain: "Re: [OMPI users] Connection problem on Linux cluster"</a>
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
