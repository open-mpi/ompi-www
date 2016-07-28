<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 16:38:47 2008" -->
<!-- isoreceived="20080915203847" -->
<!-- sent="Mon, 15 Sep 2008 13:38:38 -0700" -->
<!-- isosent="20080915203838" -->
<!-- name="Prasanna Ranganathan" -->
<!-- email="prasanna_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="C4F415DE.32DA%prasanna_at_searchme.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.1506.1221502112.16379.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2008-09-15 16:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am happy to state that I believe I have finally found the fix for the No
<br>
route to host error!!!!
<br>
<p>The solution was to increase the ARP cache in the head node and also add a
<br>
few static ARP entries. The cache was running out sometime during the
<br>
program execution leading to connection disruption and the error messages. I
<br>
am not too sure though as to how the program did successfully run on certain
<br>
occasions previously.
<br>
<p>I want to thank everyone who helped me with this - particularly Eric and
<br>
Jeff - for sharing their thoughts and also for their time and effort. Thanks
<br>
a lot guys.
<br>
<p>On a side note, the other issue I noticed with the trivial execution of my
<br>
helloWorld program with 1 process failing when run in debug mode, that is
<br>
something I have not resolved and will take a bit longer since, as Eric
<br>
mentioned, I need to upgrade the GCC version and also fix the optimization
<br>
flags and update all the nodes. This is something I intend to follow up on
<br>
and fix but I ll be doing it a bit later. I ll update the mailing list once
<br>
I make any progress on the same.
<br>
<p>Again, thanks a lot guys for your invaluable help.
<br>
<p>Regards,
<br>
<p>Prasanna.
<br>
<p>On 9/15/08 11:08 AM, &quot;users-request_at_[hidden]&quot;
<br>
&lt;users-request_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Mon, 15 Sep 2008 12:42:50 -0400
</span><br>
<span class="quotelev1">&gt; From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Need help resolving No route to host error
</span><br>
<span class="quotelev1">&gt; with OpenMPI 1.1.2
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;48CE908A.9080902_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simply to keep track of what's going on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I checked the build environment for openmpi and the system's setting,
</span><br>
<span class="quotelev1">&gt; they were built using gcc 3.4.4 with -Os, which was reputed unstable and
</span><br>
<span class="quotelev1">&gt; problematic with this compiler version. I've asked Prasanna to rebuild
</span><br>
<span class="quotelev1">&gt; using -O2 but this could be a bit lengthy since the entire system (or at
</span><br>
<span class="quotelev1">&gt; least all libs openmpi links to) needs to be rebuilt.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Prasanna,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     Please send me your /etc/make.conf and the contents of
</span><br>
<span class="quotelev2">&gt;&gt; /var/db/pkg/sys-cluster/openmpi-1.2.7/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You can package this with the following command line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tar -cjf data.tbz /etc/make.conf /var/db/pkg/sys-cluster/openmpi-1.2.7/
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; And simply send me the data.tbz file.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I did make sure at the beginning that only eth0 was activated on all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes. Nevertheless, I am currently verifying the NIC configuration on all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nodes and making sure things are as expected.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While trying different things, I did come across this peculiar error which I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; had detailed in one of my previous mails in this thread.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am testing the helloWorld program in the following trivial case:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 -host localhost /main/mpiHelloWorld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which works fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 1 -host localhost --debug-daemons /main/mpiHelloWorld
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always fails as follows:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 2059 on host localhost
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev3">&gt;&gt;&gt; idx1 is node 0 of 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ranks sum to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] Signal code:  (128)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] Failing at address: (nil)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [ 0] /lib/libpthread.so.0 [0x2afa8c597f30]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close+0x18)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2afa8be8e2a2]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize+0x70)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2afa8be795ac]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [0x2afa8be7675c]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] [ 4] orted(main+0x8a6) [0x4024ae]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [idx1:02059] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The failure happens with more verbose output when using the -d flag.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does this point to some bug in OpenMPI or am I missing something here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have attached ompi_info output on this node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prasanna.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Previous message:</strong> <a href="6549.php">Jeff Squyres: "Re: [OMPI users] MPI_sendrecv = MPI_Send+ MPI_RECV ?"</a>
<li><strong>Maybe in reply to:</strong> <a href="6478.php">Prasanna Ranganathan: "[OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>Reply:</strong> <a href="6551.php">Jeff Squyres: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
