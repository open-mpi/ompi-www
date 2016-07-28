<?
$subject_val = "Re: [OMPI devel] modex receive";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 23:22:54 2016" -->
<!-- isoreceived="20160429032254" -->
<!-- sent="Thu, 28 Apr 2016 23:22:52 -0400" -->
<!-- isosent="20160429032252" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] modex receive" -->
<!-- id="CAHXxYDjOBJpOdqiReK7wf0+TsZr09zJm7f7VQcYdiiE9W_p-jQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="b64f5a8b-1400-ae45-1d1f-98d9bc370399_at_rist.or.jp" -->
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
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-28 23:22:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18834.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Gilles
<br>
<p>You are absolutely right:
<br>
<p>1. Adding --mca pml_base_verbose 100 does show that it is the cm PML that
<br>
is being picked by default (even for TCP)
<br>
2. Adding --mca pml ob1 does cause add_procs() and related BTL friends to
<br>
be invoked.
<br>
<p><p>With a command line of
<br>
<p>mpirun -np 2 -hostfile ~/hostfile -mca btl self,tcp  -mca btl_base_verbose
<br>
100 -mca pml_base_verbose 100 ./mpitest
<br>
<p>The output shows (among many other lines) the following:
<br>
<p>[smallMPI:49178] select: init returned priority 30
<br>
[smallMPI:49178] select: initializing pml component ob1
<br>
[smallMPI:49178] select: init returned priority 20
<br>
[smallMPI:49178] select: component v not in the include list
<br>
[smallMPI:49178] selected cm best priority 30
<br>
<p>*[smallMPI:49178] select: component ob1 not selected /
<br>
finalized[smallMPI:49178] select: component cm selected*
<br>
<p>Which shows that the cm PML was selected. Replacing 'tcp' above with
<br>
'openib' shows very similar results. (The openib BTL methods are not
<br>
invoked, either)
<br>
<p>However, I was under the impression that the CM PML can only handle MTLs
<br>
(and ob1 can only handle BTLs). So why is cm being selected for TCP?
<br>
<p>Thank you
<br>
Durga
<br>
<p><p><p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Thu, Apr 28, 2016 at 2:34 AM, Gilles Gouaillardet &lt;gilles_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; the add_procs subroutine of the btl should be called.
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
<span class="quotelev1">&gt; maybe the add_procs subroutine is not invoked because openmpi uses cm
</span><br>
<span class="quotelev1">&gt; instead of ob1
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am struggling with this issue for last few days and thought it would be
</span><br>
<span class="quotelev1">&gt; prudent to ask for help from people who have way more experience than I do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are two questions, interrelated in my mind, but may not be so in
</span><br>
<span class="quotelev1">&gt; reality. Question 2 is the issue I am struggling with, and question 1 sort
</span><br>
<span class="quotelev1">&gt; of leads to it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I see that both in openib and tcp BTL (the two kind of hardware I have
</span><br>
<span class="quotelev1">&gt; access to) a modex send happens, but a matching modex receive never
</span><br>
<span class="quotelev1">&gt; happens. Is it because of some kind of optimization? (In my case, both IP
</span><br>
<span class="quotelev1">&gt; NICs are in the same IP subnet and both IB NICs are in the same IB subnet)
</span><br>
<span class="quotelev1">&gt; Or am I not understanding something? How do the processes figure out their
</span><br>
<span class="quotelev1">&gt; peer information without a modex receive?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The place in code where the modex receive is called is in btl_add_procs().
</span><br>
<span class="quotelev1">&gt; However, it looks like in both the above BTLs, this method is never called.
</span><br>
<span class="quotelev1">&gt; Is that expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. This is the real question is this:
</span><br>
<span class="quotelev1">&gt; I am writing a BTL for a proprietary RDMA NIC (named 'lf' in the code)
</span><br>
<span class="quotelev1">&gt; that has no routing capability in protocol, and hence no concept of
</span><br>
<span class="quotelev1">&gt; subnets. An HCA simply needs to be plugged in to the switch and it can see
</span><br>
<span class="quotelev1">&gt; the whole network. However, there is a VLAN like partition (similar to IB
</span><br>
<span class="quotelev1">&gt; partitions)
</span><br>
<span class="quotelev1">&gt; Given this (and as a first cut, every node is in the same partition, so
</span><br>
<span class="quotelev1">&gt; even this complexity is eliminated), there is not much use for a modex
</span><br>
<span class="quotelev1">&gt; exchange, but I added one anyway just with the partition key.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I see is that the component open, register and init are all
</span><br>
<span class="quotelev1">&gt; successful, but r2 bml still does not choose this network and thus OMPI
</span><br>
<span class="quotelev1">&gt; aborts because of lack of full reachability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is my command line:
</span><br>
<span class="quotelev1">&gt; sudo /usr/local/bin/mpirun --allow-run-as-root -hostfile ~/hostfile -np 2
</span><br>
<span class="quotelev1">&gt; -mca btl self,lf -mca btl_base_verbose 100 -mca bml_base_verbose 100
</span><br>
<span class="quotelev1">&gt; ./mpitest
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ('mpitest' is a trivial 'hello world' program plus ONE
</span><br>
<span class="quotelev1">&gt; MPI_Send()/MPI_Recv() to test in-band communication. The sudo is required
</span><br>
<span class="quotelev1">&gt; because currently the driver requires root permission; I was told that this
</span><br>
<span class="quotelev1">&gt; will be fixed. The hostfile has 2 hosts, named b-2 and b-3, with
</span><br>
<span class="quotelev1">&gt; back-to-back connection on this 'lf' HCA)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The output of this command is as follows; I have added my comments to
</span><br>
<span class="quotelev1">&gt; explain it a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from OMPI logging mechanism&gt;
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: registering framework bml
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: found loaded component r2
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: component r2 register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: opening bml components
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: found loaded component r2
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: component r2 open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: registering framework btl
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: component self register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: found loaded component lf
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_register: component lf register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: component self open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: found loaded component lf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev1">&gt; lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: base: components_open: component lf open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-2:21062] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [b-2:21062] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [b-2:21062] select: initializing btl component lf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev1">&gt; Created group on b-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev1">&gt; [b-2:21062] select: init of component lf returned success
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: registering framework bml
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: found loaded component r2
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: component r2 register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: opening bml components
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: found loaded component r2
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: component r2 open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: registering framework btl
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: found loaded component self
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: component self register
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: found loaded component lf
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_register: component lf register function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: component self open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: found loaded component lf
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: base: components_open: component lf open function
</span><br>
<span class="quotelev1">&gt; successful
</span><br>
<span class="quotelev1">&gt; [b-3:07672] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [b-3:07672] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [b-3:07672] select: initializing btl component lf
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Debugging output from the HCA driver&gt;
</span><br>
<span class="quotelev1">&gt; lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
</span><br>
<span class="quotelev1">&gt; Created group on b-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev1">&gt; [b-3:07672] select: init of component lf returned success
</span><br>
<span class="quotelev1">&gt; [b-2:21062] mca: bml: Using self btl for send to [[6866,1],0] on node b-2
</span><br>
<span class="quotelev1">&gt; [b-3:07672] mca: bml: Using self btl for send to [[6866,1],1] on node b-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from the 'mpitest' MPI program: out-of-band-I/O&gt;
</span><br>
<span class="quotelev1">&gt; Hello from b-2
</span><br>
<span class="quotelev1">&gt; The world has 2 nodes
</span><br>
<span class="quotelev1">&gt; My rank is 0
</span><br>
<span class="quotelev1">&gt; Hello from b-3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output frm OMPI&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[6866,1],0]) is on host: b-2
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[6866,1],1]) is on host: 10.4.70.12
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from the 'mpitest' MPI program: out-of-band-I/O, continued&gt;
</span><br>
<span class="quotelev1">&gt; The world has 2 nodes
</span><br>
<span class="quotelev1">&gt; My rank is 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;Output from OMPI logging mechanism, continued&gt;
</span><br>
<span class="quotelev1">&gt; [b-2:21062] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [b-2:21062] *** reported by process [140385751007233,21474836480]
</span><br>
<span class="quotelev1">&gt; [b-2:21062] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [b-2:21062] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [b-2:21062] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
</span><br>
<span class="quotelev1">&gt; now abort,
</span><br>
<span class="quotelev1">&gt; [b-2:21062] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; [durga_at_b-2 ~]$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, the lf network is not being chosen for communication.
</span><br>
<span class="quotelev1">&gt; Without a modex exchange, how can that happen? Or, in a nutshell, what do I
</span><br>
<span class="quotelev1">&gt; need to do?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing listdevel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18827.php">http://www.open-mpi.org/community/lists/devel/2016/04/18827.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18828.php">http://www.open-mpi.org/community/lists/devel/2016/04/18828.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18835/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18834.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc2"</a>
<li><strong>In reply to:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18836.php">Ralph Castain: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18837.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
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
