<?
$subject_val = "Re: [OMPI devel] modex receive";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 23:37:20 2016" -->
<!-- isoreceived="20160429033720" -->
<!-- sent="Thu, 28 Apr 2016 20:37:16 -0700" -->
<!-- isosent="20160429033716" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] modex receive" -->
<!-- id="4EFBAF0C-C96A-445A-9F31-446323259F7C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDjOBJpOdqiReK7wf0+TsZr09zJm7f7VQcYdiiE9W_p-jQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] modex receive<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-28 23:37:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18835.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<li><strong>In reply to:</strong> <a href="18835.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
CM is not being selected for TCP - you specified TCP for the BTLs, but that assumes that a BTL will be selected. You obviously have something in your system that is supported by an MTL, and that will always be selected before a BTL.
<br>
<p><p><span class="quotelev1">&gt; On Apr 28, 2016, at 8:22 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are absolutely right:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Adding --mca pml_base_verbose 100 does show that it is the cm PML that is being picked by default (even for TCP)
</span><br>
<span class="quotelev1">&gt; 2. Adding --mca pml ob1 does cause add_procs() and related BTL friends to be invoked.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With a command line of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp  -mca btl_base_verbose 100 -mca pml_base_verbose 100 ./mpitest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output shows (among many other lines) the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: init returned priority 30
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: initializing pml component ob1
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: init returned priority 20
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: component v not in the include list
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] selected cm best priority 30
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: component ob1 not selected / finalized
</span><br>
<span class="quotelev1">&gt; [smallMPI:49178] select: component cm selected
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which shows that the cm PML was selected. Replacing 'tcp' above with 'openib' shows very similar results. (The openib BTL methods are not invoked, either)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I was under the impression that the CM PML can only handle MTLs (and ob1 can only handle BTLs). So why is cm being selected for TCP?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Apr 28, 2016 at 2:34 AM, Gilles Gouaillardet &lt;gilles_at_[hidden] &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; the add_procs subroutine of the btl should be called.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* i added a printf in mca_btl_tcp_add_procs and it *is* invoked */
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; can you try again with --mca pml ob1 --mca pml_base_verbose 100 ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; maybe the add_procs subroutine is not invoked because openmpi uses cm instead of ob1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/28/2016 3:07 PM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am struggling with this issue for last few days and thought it would be prudent to ask for help from people who have way more experience than I do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There are two questions, interrelated in my mind, but may not be so in reality. Question 2 is the issue I am struggling with, and question 1 sort of leads to it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I see that both in openib and tcp BTL (the two kind of hardware I have access to) a modex send happens, but a matching modex receive never happens. Is it because of some           kind of optimization? (In my case, both IP NICs are in the same IP subnet and both IB NICs are in the same IB subnet) Or am I not understanding something? How do the processes figure out their peer information without a modex receive?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The place in code where the modex receive is called is in btl_add_procs(). However, it looks like in both the above BTLs, this method is never called. Is that expected?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. This is the real question is this:
</span><br>
<span class="quotelev2">&gt;&gt; I am writing a BTL for a proprietary RDMA NIC (named 'lf' in the code) that has no routing capability in protocol, and hence no concept of subnets. An HCA simply needs to be plugged in to the switch and it can see the whole network. However, there is a VLAN like partition (similar to IB partitions)
</span><br>
<span class="quotelev2">&gt;&gt; Given this (and as a first cut, every node is in the same partition, so even this complexity is eliminated), there is not much use for a modex exchange, but I added one anyway just with the partition key.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What I see is that the component open, register and init are all successful, but r2 bml still does not choose this network and thus OMPI aborts because of lack of full reachability.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is my command line:
</span><br>
<span class="quotelev2">&gt;&gt; sudo /usr/local/bin/mpirun --allow-run-as-root -hostfile ~/hostfile -np 2 -mca btl self,lf -mca btl_base_verbose 100 -mca bml_base_verbose 100 ./mpitest
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ('mpitest' is a trivial 'hello world' program plus ONE MPI_Send()/MPI_Recv() to test in-band communication. The sudo is required because currently the driver requires root permission; I was told that this will be fixed. The hostfile has 2 hosts, named b-2 and b-3, with back-to-back connection on this 'lf' HCA)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The output of this command is as follows; I have added my comments to explain it a bit.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from OMPI logging mechanism&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: registering framework bml components
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: found loaded component r2
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: component r2 register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: opening bml components
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: found loaded component r2
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: component r2 open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: registering framework btl components
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: component self register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: found loaded component lf
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_register: component lf register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: found loaded component lf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: base: components_open: component lf open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] select: initializing btl component lf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Created group on b-2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] select: init of component lf returned success
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: registering framework bml components
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: found loaded component r2
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: component r2 register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: opening bml components
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: found loaded component r2
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: component r2 open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: registering framework btl components
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: component self register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: found loaded component lf
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_register: component lf register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: found loaded component lf
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: base: components_open: component lf open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] select: initializing btl component self
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] select: init of component self returned success
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] select: initializing btl component lf
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
</span><br>
<span class="quotelev2">&gt;&gt; Created group on b-3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] select: init of component lf returned success
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] mca: bml: Using self btl for send to [[6866,1],0] on node b-2
</span><br>
<span class="quotelev2">&gt;&gt; [b-3:07672] mca: bml: Using self btl for send to [[6866,1],1] on node b-3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from the 'mpitest' MPI program: out-of-band-I/O&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello from b-2
</span><br>
<span class="quotelev2">&gt;&gt; The world has 2 nodes
</span><br>
<span class="quotelev2">&gt;&gt; My rank is 0
</span><br>
<span class="quotelev2">&gt;&gt; Hello from b-3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output frm OMPI&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev2">&gt;&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev2">&gt;&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev2">&gt;&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev2">&gt;&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev2">&gt;&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Process 1 ([[6866,1],0]) is on host: b-2
</span><br>
<span class="quotelev2">&gt;&gt;   Process 2 ([[6866,1],1]) is on host: 10.4.70.12
</span><br>
<span class="quotelev2">&gt;&gt;   BTLs attempted: self
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from the 'mpitest' MPI program: out-of-band-I/O, continued&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The world has 2 nodes
</span><br>
<span class="quotelev2">&gt;&gt; My rank is 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] *** reported by process [140385751007233,21474836480]
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev2">&gt;&gt; [b-2:21062] ***    and potentially your MPI job)
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_b-2 ~]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you can see, the lf network is not being chosen for communication. Without a modex exchange, how can that happen? Or, in a nutshell, what do I need to do?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev2">&gt;&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18827.php">http://www.open-mpi.org/community/lists/devel/2016/04/18827.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18827.php">http://www.open-mpi.org/community/lists/devel/2016/04/18827.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18828.php">http://www.open-mpi.org/community/lists/devel/2016/04/18828.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2016/04/18828.php">http://www.open-mpi.org/community/lists/devel/2016/04/18828.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18835.php">http://www.open-mpi.org/community/lists/devel/2016/04/18835.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18836/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18835.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<li><strong>In reply to:</strong> <a href="18835.php">dpchoudh .: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
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
