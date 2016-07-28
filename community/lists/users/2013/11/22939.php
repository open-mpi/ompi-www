<?
$subject_val = "Re: [OMPI users] Problem running on multiple nodes with Java bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 11:23:16 2013" -->
<!-- isoreceived="20131111162316" -->
<!-- sent="Mon, 11 Nov 2013 17:22:55 +0100" -->
<!-- isosent="20131111162255" -->
<!-- name="Christoffer Hamberg" -->
<!-- email="christoffer.hamberg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running on multiple nodes with Java bindings" -->
<!-- id="CAK2RZywYfcMHHSE84t=wj=u_oCJ2OF7NVDh-28ZjqagU6X2Waw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="35B6752B-C45E-4CE3-A2C3-3C31500FE799_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2013-11-11 11:22:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I re-configured the ssh keys now and for some reason it seems to work. But
<br>
what baffles me is that the same ssh configuration worked for the other
<br>
installation (1.6.5) but not for this one.
<br>
<p>Thanks for the help!
<br>
<p><p>2013/11/11 Reuti &lt;reuti_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Am 11.11.2013 um 10:04 schrieb Christoffer Hamberg:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; (Correction; I mixed up the output of the two first examples in my first
</span><br>
<span class="quotelev1">&gt; mail, so it fails on the first one)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ubuntu_at_node0:~$ mpirun --leave-session-attached -mca plm_base_verbose 5
</span><br>
<span class="quotelev1">&gt; -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev2">&gt; &gt; [node0:01486] mca:base:select:(  plm) Querying component [slurm]
</span><br>
<span class="quotelev2">&gt; &gt; [node0:01486] mca:base:select:(  plm) Skipping component [slurm]. Query
</span><br>
<span class="quotelev1">&gt; failed to return a module
</span><br>
<span class="quotelev2">&gt; &gt; [node0:01486] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; [node0:01486] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev2">&gt; &gt; [node0:01486] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; [node2:26962] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; [node2:26962] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev2">&gt; &gt; [node2:26962] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; [node1:11477] mca:base:select:(  plm) Querying component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; [node1:11477] mca:base:select:(  plm) Query of component [rsh] set
</span><br>
<span class="quotelev1">&gt; priority to 10
</span><br>
<span class="quotelev2">&gt; &gt; [node1:11477] mca:base:select:(  plm) Selected component [rsh]
</span><br>
<span class="quotelev2">&gt; &gt; Host key verification failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ubuntu_at_node0:~$ mpirun -mca plm_rsh_no_tree_spawn 1 -np 4 -host
</span><br>
<span class="quotelev1">&gt; node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev2">&gt; &gt; node0
</span><br>
<span class="quotelev2">&gt; &gt; node1
</span><br>
<span class="quotelev2">&gt; &gt; node2
</span><br>
<span class="quotelev2">&gt; &gt; node3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So it definetely looks like a problem with the tree spawn. Any clue how
</span><br>
<span class="quotelev1">&gt; I could proceed?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The passphraseless ssh is also possible between the nodes? Using hostbased
</span><br>
<span class="quotelev1">&gt; authentication it's also possible to enable it for all users without the
</span><br>
<span class="quotelev1">&gt; necessity to prepare the ssh keys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; /Christoffer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2013/11/11 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Add --enable-debug to your configure and run it with the following
</span><br>
<span class="quotelev1">&gt; additional options
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --leave-session-attached -mca plm_base_verbose 5
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let's see where it fails during the launch phase. Offhand, the only
</span><br>
<span class="quotelev1">&gt; thing that message means to me is that the ssh keys are botched on at least
</span><br>
<span class="quotelev1">&gt; one node. Keep in mind that we use a tree-based launch, and so when you
</span><br>
<span class="quotelev1">&gt; have more than two nodes, one or more of the intermediate nodes are
</span><br>
<span class="quotelev1">&gt; executing an ssh.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; One way to see if that's the problem is to launch without the tree
</span><br>
<span class="quotelev1">&gt; spawn: add
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -mca plm_rsh_no_tree_spawn 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to your cmd line and see if it works.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 10, 2013, at 9:24 AM, Christoffer Hamberg &lt;
</span><br>
<span class="quotelev1">&gt; christoffer.hamberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm having some strange problems running Open MPI(1.9a1r29559) with
</span><br>
<span class="quotelev1">&gt; Java bindings on a Calxeda highbank ARM Server running Ubuntu 12.10
</span><br>
<span class="quotelev1">&gt; (GNU/Linux 3.5.0-43-highbank armv7l).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem arises when I try to run a job on more than 3 nodes (I have
</span><br>
<span class="quotelev1">&gt; a total of 8).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note: It's the same error for any of the node[0-7].
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node0,node1,node2,node3 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node0
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node2
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and not running the job on the current node also gives Host key
</span><br>
<span class="quotelev1">&gt; verification failed for only 3 nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3,node5 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Host key verification failed.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But not on 2 nodes:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ubuntu_at_node0:~$ mpirun -np 4 -host node1,node3 hostname
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node3
</span><br>
<span class="quotelev3">&gt; &gt;&gt; node3
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I've configured it with the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ./configure --prefix=/opt/openmpi-1.9-java --without-openib
</span><br>
<span class="quotelev1">&gt; --enable-static --with-threads=posix --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt; --enable-mpi-java --with-jdk-bindir=/usr/lib/jvm/java-7-openjdk-armhf/bin
</span><br>
<span class="quotelev1">&gt; --with-jdk-headers=/usr/lib/jvm/java-7-openjdk-armhf/include
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have Open MPI 1.6.5 (without Java-binding) installed and it runs
</span><br>
<span class="quotelev1">&gt; without any problems on all nodes, so there should be no problem with SSH
</span><br>
<span class="quotelev1">&gt; that the error points to.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Any ideas?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Christoffer
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Previous message:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>In reply to:</strong> <a href="22938.php">Reuti: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
<li><strong>Reply:</strong> <a href="22940.php">Ralph Castain: "Re: [OMPI users] Problem running on multiple nodes with Java bindings"</a>
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
