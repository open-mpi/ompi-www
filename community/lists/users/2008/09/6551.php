<?
$subject_val = "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 15 16:54:57 2008" -->
<!-- isoreceived="20080915205457" -->
<!-- sent="Mon, 15 Sep 2008 16:54:51 -0400" -->
<!-- isosent="20080915205451" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2" -->
<!-- id="6D2E677E-E49D-4D03-B440-70C1F95B8A1B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4F415DE.32DA%prasanna_at_searchme.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-15 16:54:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent!
<br>
<p>We developers have talked about creating an FAQ entry for running at  
<br>
large scale for a long time, but have never gotten a round tuit.  I  
<br>
finally filed a ticket to do this (<a href="https://svn.open-mpi.org/trac/ompi/ticket/1503">https://svn.open-mpi.org/trac/ompi/ticket/1503</a> 
<br>
) -- these pending documentation tickets will likely be handled as we  
<br>
get very close to the v1.3 release.
<br>
<p><p>On Sep 15, 2008, at 4:38 PM, Prasanna Ranganathan wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am happy to state that I believe I have finally found the fix for  
</span><br>
<span class="quotelev1">&gt; the No
</span><br>
<span class="quotelev1">&gt; route to host error!!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The solution was to increase the ARP cache in the head node and also  
</span><br>
<span class="quotelev1">&gt; add a
</span><br>
<span class="quotelev1">&gt; few static ARP entries. The cache was running out sometime during the
</span><br>
<span class="quotelev1">&gt; program execution leading to connection disruption and the error  
</span><br>
<span class="quotelev1">&gt; messages. I
</span><br>
<span class="quotelev1">&gt; am not too sure though as to how the program did successfully run on  
</span><br>
<span class="quotelev1">&gt; certain
</span><br>
<span class="quotelev1">&gt; occasions previously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to thank everyone who helped me with this - particularly Eric  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; Jeff - for sharing their thoughts and also for their time and  
</span><br>
<span class="quotelev1">&gt; effort. Thanks
</span><br>
<span class="quotelev1">&gt; a lot guys.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a side note, the other issue I noticed with the trivial execution  
</span><br>
<span class="quotelev1">&gt; of my
</span><br>
<span class="quotelev1">&gt; helloWorld program with 1 process failing when run in debug mode,  
</span><br>
<span class="quotelev1">&gt; that is
</span><br>
<span class="quotelev1">&gt; something I have not resolved and will take a bit longer since, as  
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; mentioned, I need to upgrade the GCC version and also fix the  
</span><br>
<span class="quotelev1">&gt; optimization
</span><br>
<span class="quotelev1">&gt; flags and update all the nodes. This is something I intend to follow  
</span><br>
<span class="quotelev1">&gt; up on
</span><br>
<span class="quotelev1">&gt; and fix but I ll be doing it a bit later. I ll update the mailing  
</span><br>
<span class="quotelev1">&gt; list once
</span><br>
<span class="quotelev1">&gt; I make any progress on the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, thanks a lot guys for your invaluable help.
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
<span class="quotelev1">&gt; On 9/15/08 11:08 AM, &quot;users-request_at_[hidden]&quot;
</span><br>
<span class="quotelev1">&gt; &lt;users-request_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 15 Sep 2008 12:42:50 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Eric Thibodeau &lt;kyron_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Need help resolving No route to host error
</span><br>
<span class="quotelev2">&gt;&gt; with OpenMPI 1.1.2
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;48CE908A.9080902_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;; Format=&quot;flowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simply to keep track of what's going on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I checked the build environment for openmpi and the system's setting,
</span><br>
<span class="quotelev2">&gt;&gt; they were built using gcc 3.4.4 with -Os, which was reputed  
</span><br>
<span class="quotelev2">&gt;&gt; unstable and
</span><br>
<span class="quotelev2">&gt;&gt; problematic with this compiler version. I've asked Prasanna to  
</span><br>
<span class="quotelev2">&gt;&gt; rebuild
</span><br>
<span class="quotelev2">&gt;&gt; using -O2 but this could be a bit lengthy since the entire system  
</span><br>
<span class="quotelev2">&gt;&gt; (or at
</span><br>
<span class="quotelev2">&gt;&gt; least all libs openmpi links to) needs to be rebuilt.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Eric Thibodeau wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prasanna,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Please send me your /etc/make.conf and the contents of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /var/db/pkg/sys-cluster/openmpi-1.2.7/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You can package this with the following command line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tar -cjf data.tbz /etc/make.conf /var/db/pkg/sys-cluster/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi-1.2.7/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And simply send me the data.tbz file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Prasanna Ranganathan wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I did make sure at the beginning that only eth0 was activated on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes. Nevertheless, I am currently verifying the NIC  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; configuration on all
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the nodes and making sure things are as expected.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While trying different things, I did come across this peculiar  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error which I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; had detailed in one of my previous mails in this thread.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am testing the helloWorld program in the following trivial case:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 -host localhost /main/mpiHelloWorld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Which works fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 1 -host localhost --debug-daemons /main/mpiHelloWorld
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; always fails as follows:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Daemon [0,0,1] checking in as pid 2059 on host localhost
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [0,0,1] orted: received launch callback
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; idx1 is node 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ranks sum to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received message from [0,0,0]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [0,0,1] orted_recv_pls: received exit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] *** Process received signal ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] Signal code:  (128)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] Failing at address: (nil)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [ 0] /lib/libpthread.so.0 [0x2afa8c597f30]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [ 1] /usr/lib64/libopen-rte.so.0(orte_pls_base_close 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x18)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2afa8be8e2a2]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [ 2] /usr/lib64/libopen-rte.so.0(orte_system_finalize 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +0x70)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2afa8be795ac]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [ 3] /usr/lib64/libopen-rte.so.0(orte_finalize+0x20)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [0x2afa8be7675c]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] [ 4] orted(main+0x8a6) [0x4024ae]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [idx1:02059] *** End of error message ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The failure happens with more verbose output when using the -d  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; flag.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does this point to some bug in OpenMPI or am I missing something  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have attached ompi_info output on this node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Prasanna.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6552.php">Shafagh Jafer: "Re: [OMPI users] errors returned from openmpi-1.2.7 source code"</a>
<li><strong>Previous message:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
<li><strong>In reply to:</strong> <a href="6550.php">Prasanna Ranganathan: "Re: [OMPI users] Need help resolving No route to host error with OpenMPI 1.1.2"</a>
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
