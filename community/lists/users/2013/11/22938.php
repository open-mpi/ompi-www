<?
$subject_val = "Re: [OMPI users] Problem running on multiple nodes with Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 05:45:11 2013" -->
<!-- isoreceived="20131111104511" -->
<!-- sent="Mon, 11 Nov 2013 11:44:59 +0100" -->
<!-- isosent="20131111104459" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running on multiple nodes with Java bindings" -->
<!-- id="35B6752B-C45E-4CE3-A2C3-3C31500FE799_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAK2RZyx4wVJWdsd7HycEJLF5ywCGJArhpY3xeEUEQn19nF-GxA_at_mail.gmail.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 05:44:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 11.11.2013 um 10:04 schrieb Christoffer Hamberg:
<br>
<p><span class="quotelev1">&gt; (Correction; I mixed up the output of the two first examples in my first mail, so it fails on the first one)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun --leave-session-attached -mca plm_base_verbose 5 -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev1">&gt; [node0:01486] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [node0:01486] mca:base:select:(  plm) Skipping component [slurm]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [node0:01486] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [node0:01486] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node0:01486] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [node2:26962] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [node2:26962] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node2:26962] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; [node1:11477] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev1">&gt; [node1:11477] mca:base:select:(  plm) Query of component [rsh] set priority to 10
</span><br>
<span class="quotelev1">&gt; [node1:11477] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev1">&gt; Host key verification failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ubuntu_at_node0:~$ mpirun -mca plm_rsh_no_tree_spawn 1 -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev1">&gt; node0
</span><br>
<span class="quotelev1">&gt; node1
</span><br>
<span class="quotelev1">&gt; node2
</span><br>
<span class="quotelev1">&gt; node3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it definetely looks like a problem with the tree spawn. Any clue how I could proceed?
</span><br>
<p>The passphraseless ssh is also possible between the nodes? Using hostbased authentication it's also possible to enable it for all users without the necessity to prepare the ssh keys.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; /Christoffer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2013/11/11 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Add --enable-debug to your configure and run it with the following additional options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --leave-session-attached -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's see where it fails during the launch phase. Offhand, the only thing that message means to me is that the ssh keys are botched on at least one node. Keep in mind that we use a tree-based launch, and so when you have more than two nodes, one or more of the intermediate nodes are executing an ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One way to see if that's the problem is to launch without the tree spawn: add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca plm_rsh_no_tree_spawn 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your cmd line and see if it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2013, at 9:24 AM, Christoffer Hamberg &lt;christoffer.hamberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having some strange problems running Open MPI(1.9a1r29559) with Java bindings on a Calxeda highbank ARM Server running Ubuntu 12.10 (GNU/Linux 3.5.0-43-highbank armv7l).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem arises when I try to run a job on more than 3 nodes (I have a total of 8).
</span><br>
<span class="quotelev2">&gt;&gt; Note: It's the same error for any of the node[0-7].
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2 hostname
</span><br>
<span class="quotelev2">&gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; node0
</span><br>
<span class="quotelev2">&gt;&gt; node0
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; and not running the job on the current node also gives Host key verification failed for only 3 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3,node5 hostname
</span><br>
<span class="quotelev2">&gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But not on 2 nodes:
</span><br>
<span class="quotelev2">&gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3 hostname
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node1
</span><br>
<span class="quotelev2">&gt;&gt; node3
</span><br>
<span class="quotelev2">&gt;&gt; node3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've configured it with the following:
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib --enable-static --with-threads=posix --enable-mpi-thread-multiple --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have Open MPI 1.6.5 (without Java-binding) installed and it runs without any problems on all nodes, so there should be no problem with SSH that the error points to.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Christoffer
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
<li><strong>Next message:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22937.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22939.php">Christoffer Hamberg: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
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
