<?
$subject_val = "Re: [OMPI users] Problem running on multiple nodes with Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 04:04:41 2013" -->
<!-- isoreceived="20131111090441" -->
<!-- sent="Mon, 11 Nov 2013 10:04:20 +0100" -->
<!-- isosent="20131111090420" -->
<!-- name="Christoffer Hamberg" -->
<!-- email="christoffer.hamberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running on multiple nodes with Java bindings" -->
<!-- id="CAK2RZyx4wVJWdsd7HycEJLF5ywCGJArhpY3xeEUEQn19nF-GxA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F9FC3208-11C3-49A2-B9A4-6A7D02CFA272_at_open-mpi.org" -->
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
<strong>From:</strong> Christoffer Hamberg (<em>christoffer.hamberg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 04:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(Correction; I mixed up the output of the two first examples in my first
<br>
mail, so it fails on the first one)
<br>
<p>ubuntu_at_node0:~$ mpirun --leave-session-attached -mca plm_base_verbose 5 -np
<br>
4 -host node0,node1,node2,node3 hostname
<br>
[node0:01486] mca:base:select:(  plm) Querying component [slurm]
<br>
[node0:01486] mca:base:select:(  plm) Skipping component [slurm]. Query
<br>
failed to return a module
<br>
[node0:01486] mca:base:select:(  plm) Querying component [rsh]
<br>
[node0:01486] mca:base:select:(  plm) Query of component [rsh] set priority
<br>
to 10
<br>
[node0:01486] mca:base:select:(  plm) Selected component [rsh]
<br>
[node2:26962] mca:base:select:(  plm) Querying component [rsh]
<br>
[node2:26962] mca:base:select:(  plm) Query of component [rsh] set priority
<br>
to 10
<br>
[node2:26962] mca:base:select:(  plm) Selected component [rsh]
<br>
[node1:11477] mca:base:select:(  plm) Querying component [rsh]
<br>
[node1:11477] mca:base:select:(  plm) Query of component [rsh] set priority
<br>
to 10
<br>
[node1:11477] mca:base:select:(  plm) Selected component [rsh]
<br>
Host key verification failed.
<br>
<p><p>ubuntu_at_node0:~$ mpirun -mca plm_rsh_no_tree_spawn 1 -np 4 -host
<br>
node0,node1,node2,node3 hostname
<br>
node0
<br>
node1
<br>
node2
<br>
node3
<br>
<p>So it definetely looks like a problem with the tree spawn. Any clue how I
<br>
could proceed?
<br>
<p>/Christoffer
<br>
<p><p>2013/11/11 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Add --enable-debug to your configure and run it with the following
</span><br>
<span class="quotelev1">&gt; additional options
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --leave-session-attached -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's see where it fails during the launch phase. Offhand, the only thing
</span><br>
<span class="quotelev1">&gt; that message means to me is that the ssh keys are botched on at least one
</span><br>
<span class="quotelev1">&gt; node. Keep in mind that we use a tree-based launch, and so when you have
</span><br>
<span class="quotelev1">&gt; more than two nodes, one or more of the intermediate nodes are executing an
</span><br>
<span class="quotelev1">&gt; ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One way to see if that's the problem is to launch without the tree spawn:
</span><br>
<span class="quotelev1">&gt; add
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
<span class="quotelev1">&gt; On Nov 10, 2013, at 9:24 AM, Christoffer Hamberg &lt;
</span><br>
<span class="quotelev1">&gt; christoffer.hamberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having some strange problems running Open MPI(1.9a1r29559) with Java
</span><br>
<span class="quotelev1">&gt; bindings on a Calxeda highbank ARM Server running Ubuntu 12.10 (GNU/Linux
</span><br>
<span class="quotelev1">&gt; 3.5.0-43-highbank armv7l).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem arises when I try to run a job on more than 3 nodes (I have a
</span><br>
<span class="quotelev1">&gt; total of 8).
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
<span class="quotelev1">&gt; and not running the job on the current node also gives Host key
</span><br>
<span class="quotelev1">&gt; verification failed for only 3 nodes.
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
<span class="quotelev1">&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib
</span><br>
<span class="quotelev1">&gt; --enable-static --with-threads=posix --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin
</span><br>
<span class="quotelev1">&gt; --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have Open MPI 1.6.5 (without Java-binding) installed and it runs without
</span><br>
<span class="quotelev1">&gt; any problems on all nodes, so there should be no problem with SSH that the
</span><br>
<span class="quotelev1">&gt; error points to.
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
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22937/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22936.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
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
