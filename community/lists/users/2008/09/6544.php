<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 12:42:54 2008" -->
<!-- isoreceived="20080915164254" -->
<!-- sent="Mon, 15 Sep 2008 12:42:50 -0400" -->
<!-- isosent="20080915164250" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48CE908A.9080902_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48CAF94A.1000109_at_neuralbs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 12:42:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6545.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simply to keep track of what's going on:
<br>
<p>I checked the build environment for openmpi and the system's setting, 
<br>
they were built using gcc 3.4.4 with -Os, which was reputed unstable and 
<br>
problematic with this compiler version. I've asked Prasanna to rebuild 
<br>
using -O2 but this could be a bit lengthy since the entire system (or at 
<br>
least all libs openmpi links to) needs to be rebuilt.
<br>
<p>Eric
<br>
<p>Eric Thibodeau wrote:
<br>
<span class="quotelev1">&gt; Prasanna,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Please send me your /etc/make.conf and the contents of 
</span><br>
<span class="quotelev1">&gt; /var/db/pkg/sys-cluster/openmpi-1.2.7/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can package this with the following command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tar -cjf data.tbz /etc/make.conf /var/db/pkg/sys-cluster/openmpi-1.2.7/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And simply send me the data.tbz file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I did make sure at the beginning that only eth0 was activated on all the
</span><br>
<span class="quotelev2">&gt;&gt; nodes. Nevertheless, I am currently verifying the NIC configuration on all
</span><br>
<span class="quotelev2">&gt;&gt; the nodes and making sure things are as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While trying different things, I did come across this peculiar error which I
</span><br>
<span class="quotelev2">&gt;&gt; had detailed in one of my previous mails in this thread.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am testing the helloWorld program in the following trivial case:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 -host localhost /main/mpiHelloWorld
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 -host localhost --debug-daemons /main/mpiHelloWorld
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; always fails as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Daemon [0,0,1] checking in as pid 2059 on host localhost
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev2">&gt;&gt; idx1 is node 0 of 1
</span><br>
<span class="quotelev2">&gt;&gt; ranks sum to 0
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] Signal code:  (128)
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] Failing at address: (nil)
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [ 0] /lib/libpthread.so.0 [0x2afa8c597f30]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2afa8be8e2a2]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2afa8be795ac]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
</span><br>
<span class="quotelev2">&gt;&gt; [0x2afa8be7675c]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] [ 4] orted(main+0x8a6) [0x4024ae]
</span><br>
<span class="quotelev2">&gt;&gt; [idx1:02059] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The failure happens with more verbose output when using the -d flag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does this point to some bug in OpenMPI or am I missing something here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have attached ompi_info output on this node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Prasanna.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6545.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6543.php">Enrico Barausse: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>In reply to:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
