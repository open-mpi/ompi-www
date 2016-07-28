<?
$subject_val = "Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 11 11:36:34 2012" -->
<!-- isoreceived="20120611153634" -->
<!-- sent="Mon, 11 Jun 2012 11:36:29 -0400" -->
<!-- isosent="20120611153629" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6" -->
<!-- id="9FCF1845-7902-4D8E-9890-0BB726502940_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="26002_1339427707_4FD60B7B_26002_1949_1_49CF97100DDD4B4A9C4DC89905CA59A310187E5E23_at_THSONEA01CMS07P.one.grp" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-11 11:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 11, 2012, at 11:15 AM, BOUVIER Benjamin wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your hints Jeff.
</span><br>
<span class="quotelev1">&gt; I've just tried without any firewalls on involved machines, but the issue remains.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # /etc/init.d/ip6tables status
</span><br>
<span class="quotelev1">&gt; ip6tables: Firewall is not running.
</span><br>
<span class="quotelev1">&gt; # /etc/init.d/iptables status
</span><br>
<span class="quotelev1">&gt; iptables: Firewall is not running.
</span><br>
<p>Ok.
<br>
<p><span class="quotelev1">&gt; The machines have the host names &quot;node1&quot;, &quot;node2&quot; and &quot;node3&quot;.
</span><br>
<span class="quotelev1">&gt; I launch the basic program on one machine, asking node1 and node2 to be hosts. Typing `netstat -a | grep node1` from node2 shows me that node1 and node2 are connected by tcp, as the connection is marked as ESTABLISHED. I have the same thing when I do `netstat -a | grep node2` from node1. However, the program keeps blocking.
</span><br>
<p>I'm not entirely clear which combinations are working and which are not.  Can you specify which ones are working?  You might want to try the ring_c.c program in the OMPI examples/ directory -- it's a trivial &quot;send a message around in a ring&quot; program that will scale up to &gt;=2 processes.
<br>
<p>- on node1, &quot;mpirun --host node1,node2 ring_c&quot;
<br>
<p>- on node1, &quot;mpirun --host node1,node3 ring_c&quot;
<br>
<p>- on node1, &quot;mpirun --host node2,node3 ring_c&quot;
<br>
<p>- on node1, &quot;mpirun --host node1,node2,node3 ring_c&quot;
<br>
<p>Repeat all 4 from node2.
<br>
<p><p><span class="quotelev1">&gt; What else could provoke that failure ?
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Benjamin BOUVIER 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; To start, I would ensure that all firewalling  (e.g., iptables) is disabled on all machines involved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 11, 2012, at 10:16 AM, BOUVIER Benjamin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd guess that running net pipe with 3 procs may be undefined.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is indeed undefined. Running the net pipe program locally with 3 processors blocks, on my computer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This issue is especially weird as there is no problem for running the example program on network with MPICH2 implementation, for 2 processes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, with MPICH2, it fails with 3 processes and blocks also on connect (&quot;Connection refused&quot;), which could indicate that it's actually a network issue, with both MPICH2 and OMPI. I don't know how many connections OMPI use to send the data in the example program, but with the assumption that it tries to open 2 connections (while for the same program, MPICH2 only uses one connection, which is another hypothesis), maybe the number of connections is the right way to look for. I'll ask MPICH2 users on their mailing list, so as to get their opinion about it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Now that I know the program doesn't work both with OMPI and MPICH2 implementations, I guess it's not dependant of MPI implementation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you have any ideas or comments, I would be pleased to hear them.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Benjamin Bouvier
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Previous message:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<li><strong>In reply to:</strong> <a href="19493.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : Bug when mixing sent types in version 1.6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
<li><strong>Reply:</strong> <a href="19495.php">BOUVIER Benjamin: "[OMPI users] RE : RE : RE : RE : Bug when mixing sent types in	version 1.6"</a>
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
