<?
$subject_val = "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 14 10:14:31 2014" -->
<!-- isoreceived="20140414141431" -->
<!-- sent="Mon, 14 Apr 2014 07:13:11 -0700" -->
<!-- isosent="20140414141311" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8" -->
<!-- id="F1634119-4336-4E76-980E-24051CA29063_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAHT6FhOiu4KUt6ORf6xsMek5BWw+okyWr28ukgSK_ovFEjPhgw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-14 10:13:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 13, 2014, at 11:42 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, Ralph!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Adding MAC parameter 'plm_rsh_no_tree_spawn' solves the problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand correctly, the first layer of daemons are three nodes, and when there are more than three nodes the second layer of daemons are spawn. So my problem is happened when MPI processes are launched by the second layer of daemons, is that correct?
</span><br>
<p>Yes, that is correct
<br>
<p><span class="quotelev1">&gt; I think that is very likely, the second layer of daemons may be missing some environmental settings. 
</span><br>
<span class="quotelev1">&gt; I would be really helpful if I can solve the problem though, is there any documents I can find on the way the daemons work? Do you have any suggestions on the way I can debug the issue?
</span><br>
<p>Easiest way to debug the issue is to add &quot;-mca plm_base_verbose 5 --debug-daemons&quot; to your command line. This will show the commands being used in the launch, and allow ssh errors to reach the screen.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allan 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 12, 2014 at 9:00 AM, &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem is with the tree-spawn nature of the rsh/ssh launcher. For scalability, mpirun only launches a first &quot;layer&quot; of daemons. Each of those daemons then launches another layer in a tree-like fanout. The default pattern is such that you first notice it when you have four nodes in your allocation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have two choices:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you can just add the MCA param plm_rsh_no_tree_spawn=1 to your environment/cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * you can resolve the tree spawn issue so that a daemon on one of your nodes is capable of ssh-ing a daemon on another node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Either way will work.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 11, 2014, at 11:17 AM, Allan Wu &lt;allwu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hello everyone,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am running a simple helloworld program on several nodes using OpenMPI 1.8. Running commands on single node or small number of nodes are successful, but when I tried to run the same binary on four different nodes, problems occurred.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using 'mpirun' command line like the following:
</span><br>
<span class="quotelev2">&gt; &gt; # mpirun --prefix /mnt/embedded_root/openmpi -np 4 --map-by node -hostfile hostfile ./helloworld
</span><br>
<span class="quotelev2">&gt; &gt; And my hostfile looks something like these:
</span><br>
<span class="quotelev2">&gt; &gt; 10.0.0.16
</span><br>
<span class="quotelev2">&gt; &gt; 10.0.0.17
</span><br>
<span class="quotelev2">&gt; &gt; 10.0.0.18
</span><br>
<span class="quotelev2">&gt; &gt; 10.0.0.19
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When executing this command, it will result in an error message &quot;sh: syntax error: unexpected word&quot;, and the program will deadlock. When I added &quot;--debug-devel&quot; the output is in the attachment &quot;err_msg_0.txt&quot;. In the log, &quot;fpga0&quot; is the hostname of &quot;10.0.0.16&quot; and &quot;fpga1&quot; is for &quot;10.0.0.17&quot; and so on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, the weird part is that after I remove one line in the hostfile, the problem goes away. It does not matter which host I remove, as long as there is less than four hosts, the program can execute without any problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also tried using hostname in the hostfile, as:
</span><br>
<span class="quotelev2">&gt; &gt; fpga0
</span><br>
<span class="quotelev2">&gt; &gt; fpga1
</span><br>
<span class="quotelev2">&gt; &gt; fpga2
</span><br>
<span class="quotelev2">&gt; &gt; fpga3
</span><br>
<span class="quotelev2">&gt; &gt; And the same problem occurs, and the error message becomes &quot;Host key verification failed.&quot;. I have setup public/private key pairs on all nodes, and each node can ssh to any node without problems. I also attached the message of --debug-devel as &quot;err_msg_1.txt&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm running MPI programs on embedded ARM processors. I have previously posted questions on cross-compilation on the develop mailing list, which contains the setup I used. If you need the information please refer to <a href="http://www.open-mpi.org/community/lists/devel/2014/04/14440.php">http://www.open-mpi.org/community/lists/devel/2014/04/14440.php</a>, and the output of 'ompi-info --all' is also attached with this email.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Please let me know if I need to provide more information. Thanks in advance!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Di Wu (Allan)
</span><br>
<span class="quotelev2">&gt; &gt; PhD student, VAST Laboratory,
</span><br>
<span class="quotelev2">&gt; &gt; Department of Computer Science, UC Los Angeles
</span><br>
<span class="quotelev2">&gt; &gt; Email: allwu_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; &lt;err_msg_0.txt&gt;&lt;err_msg_1.txt&gt;&lt;log.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24176/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24177.php">Ralph Castain: "Re: [OMPI users] Performance issue of mpirun/mpi_init"</a>
<li><strong>Previous message:</strong> <a href="24175.php">Ralph Castain: "Re: [OMPI users] can't run mpi-jobs on remote host"</a>
<li><strong>In reply to:</strong> <a href="24167.php">Allan Wu: "Re: [OMPI users] mpirun problem when running on more than three hosts with OpenMPI 1.8"</a>
<!-- nextthread="start" -->
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
