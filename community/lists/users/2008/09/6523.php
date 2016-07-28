<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 12 18:25:34 2008" -->
<!-- isoreceived="20080912222534" -->
<!-- sent="Fri, 12 Sep 2008 15:25:26 -0700" -->
<!-- isosent="20080912222526" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4F03A67.31F0%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4F01AB9.31C2%prasanna_at_searchme.com" -->
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
<strong>From:</strong> Prasanna Ranganathan (<em>prasanna_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-12 18:25:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;I did make sure at the beginning that only eth0 was activated on all the
<br>
nodes. Nevertheless, I am currently verifying the NIC configuration on all
<br>
the nodes and making sure things are as expected.
<br>
<p>While trying different things, I did come across this peculiar error which I
<br>
had detailed in one of my previous mails in this thread.
<br>
<p>I am testing the helloWorld program in the following trivial case:
<br>
<p>mpirun -np 1 -host localhost /main/mpiHelloWorld
<br>
<p>Which works fine.
<br>
<p>But,
<br>
<p>mpirun -np 1 -host localhost --debug-daemons /main/mpiHelloWorld
<br>
<p>always fails as follows:
<br>
<p>Daemon [0,0,1] checking in as pid 2059 on host localhost
<br>
[idx1:02059] [0,0,1] orted: received launch callback
<br>
idx1 is node 0 of 1
<br>
ranks sum to 0
<br>
[idx1:02059] [0,0,1] orted_recv_pls: received message from [0,0,0]
<br>
[idx1:02059] [0,0,1] orted_recv_pls: received exit
<br>
[idx1:02059] *** Process received signal ***
<br>
[idx1:02059] Signal: Segmentation fault (11)
<br>
[idx1:02059] Signal code:  (128)
<br>
[idx1:02059] Failing at address: (nil)
<br>
[idx1:02059] [ 0] /lib/libpthread.so.0 [0x2afa8c597f30]
<br>
[idx1:02059] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
<br>
[0x2afa8be8e2a2]
<br>
[idx1:02059] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
<br>
[0x2afa8be795ac]
<br>
[idx1:02059] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
<br>
[0x2afa8be7675c]
<br>
[idx1:02059] [ 4] orted(main+0x8a6) [0x4024ae]
<br>
[idx1:02059] *** End of error message ***
<br>
<p>The failure happens with more verbose output when using the -d flag.
<br>
<p>Does this point to some bug in OpenMPI or am I missing something here?
<br>
<p>I have attached ompi_info output on this node.
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<p><p>
<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6523/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6522.php">Matt Hughes: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6521.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6524.php">Eric Thibodeau: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
