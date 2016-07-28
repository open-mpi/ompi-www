<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 19:20:47 2008" -->
<!-- isoreceived="20080912232047" -->
<!-- sent="Fri, 12 Sep 2008 19:20:42 -0400" -->
<!-- isosent="20080912232042" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="48CAF94A.1000109_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4F03A67.31F0%prasanna_at_searchme.com" -->
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
<strong>Date:</strong> 2008-09-12 19:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prasanna,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Please send me your /etc/make.conf and the contents of 
<br>
/var/db/pkg/sys-cluster/openmpi-1.2.7/
<br>
<p>You can package this with the following command line:
<br>
<p>tar -cjf data.tbz /etc/make.conf /var/db/pkg/sys-cluster/openmpi-1.2.7/
<br>
<p>And simply send me the data.tbz file.
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p>Prasanna Ranganathan wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I did make sure at the beginning that only eth0 was activated on all the
</span><br>
<span class="quotelev1">&gt; nodes. Nevertheless, I am currently verifying the NIC configuration on all
</span><br>
<span class="quotelev1">&gt; the nodes and making sure things are as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While trying different things, I did come across this peculiar error which I
</span><br>
<span class="quotelev1">&gt; had detailed in one of my previous mails in this thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am testing the helloWorld program in the following trivial case:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host localhost /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 -host localhost --debug-daemons /main/mpiHelloWorld
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; always fails as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daemon [0,0,1] checking in as pid 2059 on host localhost
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev1">&gt; idx1 is node 0 of 1
</span><br>
<span class="quotelev1">&gt; ranks sum to 0
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev1">&gt; [idx1:02059] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [idx1:02059] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [idx1:02059] Signal code:  (128)
</span><br>
<span class="quotelev1">&gt; [idx1:02059] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [ 0] /lib/libpthread.so.0 [0x2afa8c597f30]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
</span><br>
<span class="quotelev1">&gt; [0x2afa8be8e2a2]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
</span><br>
<span class="quotelev1">&gt; [0x2afa8be795ac]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
</span><br>
<span class="quotelev1">&gt; [0x2afa8be7675c]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] [ 4] orted(main+0x8a6) [0x4024ae]
</span><br>
<span class="quotelev1">&gt; [idx1:02059] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The failure happens with more verbose output when using the -d flag.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does this point to some bug in OpenMPI or am I missing something here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have attached ompi_info output on this node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prasanna.
</span><br>
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6525.php">Enrico Barausse: "[OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Previous message:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6523.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6544.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
