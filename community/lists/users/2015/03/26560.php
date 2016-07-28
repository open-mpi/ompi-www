<?
$subject_val = "Re: [OMPI users] Connection problem on Linux cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 28 14:48:05 2015" -->
<!-- isoreceived="20150328184805" -->
<!-- sent="Sat, 28 Mar 2015 11:48:01 -0700" -->
<!-- isosent="20150328184801" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connection problem on Linux cluster" -->
<!-- id="4DD68120-85AE-4422-BEFB-A93F40C46E04_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F28A112937E208429BD09C805E9A1945090E9CF7_at_CISAMRMBS02.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-28 14:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26561.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26559.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26559.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26561.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#133;I don&#146;t know of anyone trying this with OpenStack before, so this may be uncharted territory. I assume you configured OMPI with &#151;enable-debug? If not, please do so.
<br>
<p>Then, add &#147;&#151;mca oob_base_verbose 100 &#151;mca state_base_verbose 10&#148; to your command line
<br>
<p><span class="quotelev1">&gt; On Mar 28, 2015, at 11:38 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More precisely,  I create VMs using OpenStack web interface. I have been assigned some resources by the administrator. I created VM instances, each with 2 VPCU using OpenStack dashboard. So I do not know whether VMs  are assigned on the same/different physical nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI: testing with the following command  on fehg_node_0 gives me this output.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --mca plm_base_verbose 20 --host fehg_node_1 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: found loaded component slurm
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: component slurm has no register function
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: components_open: component slurm open function successful
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: close: component slurm closed
</span><br>
<span class="quotelev1">&gt; [fehg-node-0:02057] mca: base: close: unloading component slurm
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca: base: components_open: Looking for plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca: base: components_open: opening plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca: base: components_open: found loaded component rsh
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca: base: components_open: component rsh has no register function
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca: base: components_open: component rsh open function successful
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca:base:select: Auto-selecting plm components
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [fehg-node-7:02660] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it freezes here. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Karos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: 28 March 2015 18:23
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to be clear: do you have two physical nodes? Or just one physical node and you are running two VMs on it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 28, 2015, at 10:51 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden] &lt;mailto:foad.lotfifar_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a floating IP for accessing nodes from outside of the cluster and internal ip addresses. I tried to run the jobs with both of them (both ip addresses) but it makes no difference. 
</span><br>
<span class="quotelev2">&gt;&gt; I have just installed openmpi 1.6.5 to see how does this version works. In this case I get nothing and I have to press Crtl+c. not output or error is shown.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: 28 March 2015 17:03
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Connection problem on Linux cluster
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You mentioned running this in a VM - is that IP address correct for getting across the VMs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 28, 2015, at 8:38 AM, LOTFIFAR F. &lt;foad.lotfifar_at_[hidden] &lt;mailto:foad.lotfifar_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi , 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am wondering how can I solve this problem. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; System Spec:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1- Linux cluster with two nodes (master and slave) with Ubuntu 12.04 LTS 32bit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2- openmpi 1.8.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I do a simple test running on fehg_node_0:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpirun -host fehg_node_0,fehg_node_1 hello_world -mca oob_base_verbose 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and I get the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A process or daemon was unable to complete a TCP connection
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to another process:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Local host:    fehg-node-0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Remote host:   10.104.5.40
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is usually caused by a firewall on the remote host. Please
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check that any firewall (e.g., iptables) has been disabled and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try again.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This usually is caused by:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Please verify your allocation and authorities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   and network routing requirements).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Verbose:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1- I have full access to the VMs on the cluster and setup everything myself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2- Firewall and iptables are all disabled on the nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3- nodes can ssh to each other with  no problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4- non-interactive bash calls works fine i.e. when I run ssh othernode env | grep PATH from both nodes, both PATH and LD_LIBRARY_PATH are set correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5- I have checked the posts, a similar problem reported for Solaris but I could not find a clue about mine. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 6- run with --enable-orterun-prefix-by-default does not make any changes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 7-  I see orte is running on the other node when I check processes, but nothing happens after that and the error happens.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Karos
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26555.php">http://www.open-mpi.org/community/lists/users/2015/03/26555.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26555.php">http://www.open-mpi.org/community/lists/users/2015/03/26555.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26557.php">http://www.open-mpi.org/community/lists/users/2015/03/26557.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26557.php">http://www.open-mpi.org/community/lists/users/2015/03/26557.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26559.php">http://www.open-mpi.org/community/lists/users/2015/03/26559.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/03/26559.php">http://www.open-mpi.org/community/lists/users/2015/03/26559.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26560/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26561.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>Previous message:</strong> <a href="26559.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<li><strong>In reply to:</strong> <a href="26559.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26561.php">LOTFIFAR F.: "Re: [OMPI users] Connection problem on Linux cluster"</a>
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
