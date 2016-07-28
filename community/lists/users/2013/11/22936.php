<?
$subject_val = "Re: [OMPI users] Problem running on multiple nodes with Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 10 23:58:56 2013" -->
<!-- isoreceived="20131111045856" -->
<!-- sent="Sun, 10 Nov 2013 20:58:21 -0800" -->
<!-- isosent="20131111045821" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running on multiple nodes with Java bindings" -->
<!-- id="F9FC3208-11C3-49A2-B9A4-6A7D02CFA272_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAK2RZyyOB56+4qszohh32eS9Sj-ELKswcgGL3amMiM_yGZWDoQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem running on multiple nodes with Java bindings<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-10 23:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --enable-debug to your configure and run it with the following additional options
<br>
<p>--leave-session-attached -mca plm_base_verbose 5
<br>
<p>Let's see where it fails during the launch phase. Offhand, the only thing that message means to me is that the ssh keys are botched on at least one node. Keep in mind that we use a tree-based launch, and so when you have more than two nodes, one or more of the intermediate nodes are executing an ssh.
<br>
<p>One way to see if that's the problem is to launch without the tree spawn: add
<br>
<p>-mca plm_rsh_no_tree_spawn 1
<br>
<p>to your cmd line and see if it works.
<br>
<p><p><p>On Nov 10, 2013, at 9:24 AM, Christoffer Hamberg &lt;christoffer.hamberg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm having some strange problems running Open MPI(1.9a1r29559) with Java bindings on a Calxeda highbank ARM Server running Ubuntu 12.10 (GNU/Linux 3.5.0-43-highbank armv7l).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem arises when I try to run a job on more than 3 nodes (I have a total of 8).
</span><br>
<span class="quotelev1">&gt; Note: It's the same error for any of the node[0-7].
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2 hostname
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev1">&gt; node0
</span><br>
<span class="quotelev1">&gt; node0
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and not running the job on the current node also gives Host key verification failed for only 3 nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3,node5 hostname
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But not on 2 nodes:
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3 hostname
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node3
</span><br>
<span class="quotelev1">&gt; node3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've configured it with the following:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static --with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have Open MPI 1.6.5 (without Java-binding) installed and it runs without any problems on all nodes, so there should be no problem with SSH that the error points to.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Christoffer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22936/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22935.php">Christoffer Hamberg: "[OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
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
