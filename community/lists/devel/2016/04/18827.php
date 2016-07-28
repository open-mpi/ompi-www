<?
$subject_val = "[OMPI devel] modex receive";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 28 02:09:15 2016" -->
<!-- isoreceived="20160428060915" -->
<!-- sent="Thu, 28 Apr 2016 02:07:36 -0400" -->
<!-- isosent="20160428060736" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI devel] modex receive" -->
<!-- id="CAHXxYDj9E2+qJ5Ymz+DPPBOqO9iahB2dYdCb2_aPMp1PpejnNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] modex receive<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-28 02:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18826.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18829.php">George Bosilca: "Re: [OMPI devel] modex receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I am struggling with this issue for last few days and thought it would be
<br>
prudent to ask for help from people who have way more experience than I do.
<br>
<p>There are two questions, interrelated in my mind, but may not be so in
<br>
reality. Question 2 is the issue I am struggling with, and question 1 sort
<br>
of leads to it.
<br>
<p>1. I see that both in openib and tcp BTL (the two kind of hardware I have
<br>
access to) a modex send happens, but a matching modex receive never
<br>
happens. Is it because of some kind of optimization? (In my case, both IP
<br>
NICs are in the same IP subnet and both IB NICs are in the same IB subnet)
<br>
Or am I not understanding something? How do the processes figure out their
<br>
peer information without a modex receive?
<br>
<p>The place in code where the modex receive is called is in btl_add_procs().
<br>
However, it looks like in both the above BTLs, this method is never called.
<br>
Is that expected?
<br>
<p>2. This is the real question is this:
<br>
I am writing a BTL for a proprietary RDMA NIC (named 'lf' in the code) that
<br>
has no routing capability in protocol, and hence no concept of subnets. An
<br>
HCA simply needs to be plugged in to the switch and it can see the whole
<br>
network. However, there is a VLAN like partition (similar to IB partitions)
<br>
Given this (and as a first cut, every node is in the same partition, so
<br>
even this complexity is eliminated), there is not much use for a modex
<br>
exchange, but I added one anyway just with the partition key.
<br>
<p>What I see is that the component open, register and init are all
<br>
successful, but r2 bml still does not choose this network and thus OMPI
<br>
aborts because of lack of full reachability.
<br>
<p>This is my command line:
<br>
sudo /usr/local/bin/mpirun --allow-run-as-root -hostfile ~/hostfile -np 2
<br>
-mca btl self,lf -mca btl_base_verbose 100 -mca bml_base_verbose 100
<br>
./mpitest
<br>
<p>('mpitest' is a trivial 'hello world' program plus ONE
<br>
MPI_Send()/MPI_Recv() to test in-band communication. The sudo is required
<br>
because currently the driver requires root permission; I was told that this
<br>
will be fixed. The hostfile has 2 hosts, named b-2 and b-3, with
<br>
back-to-back connection on this 'lf' HCA)
<br>
<p>The output of this command is as follows; I have added my comments to
<br>
explain it a bit.
<br>
<p>&lt;Output from OMPI logging mechanism&gt;
<br>
[b-2:21062] mca: base: components_register: registering framework bml
<br>
components
<br>
[b-2:21062] mca: base: components_register: found loaded component r2
<br>
[b-2:21062] mca: base: components_register: component r2 register function
<br>
successful
<br>
[b-2:21062] mca: base: components_open: opening bml components
<br>
[b-2:21062] mca: base: components_open: found loaded component r2
<br>
[b-2:21062] mca: base: components_open: component r2 open function
<br>
successful
<br>
[b-2:21062] mca: base: components_register: registering framework btl
<br>
components
<br>
[b-2:21062] mca: base: components_register: found loaded component self
<br>
[b-2:21062] mca: base: components_register: component self register
<br>
function successful
<br>
[b-2:21062] mca: base: components_register: found loaded component lf
<br>
[b-2:21062] mca: base: components_register: component lf register function
<br>
successful
<br>
[b-2:21062] mca: base: components_open: opening btl components
<br>
[b-2:21062] mca: base: components_open: found loaded component self
<br>
[b-2:21062] mca: base: components_open: component self open function
<br>
successful
<br>
[b-2:21062] mca: base: components_open: found loaded component lf
<br>
<p>&lt;Debugging output from the HCA driver&gt;
<br>
lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
<br>
<p>&lt;Output from OMPI logging mechanism, continued&gt;
<br>
[b-2:21062] mca: base: components_open: component lf open function
<br>
successful
<br>
[b-2:21062] select: initializing btl component self
<br>
[b-2:21062] select: init of component self returned success
<br>
[b-2:21062] select: initializing btl component lf
<br>
<p>&lt;Debugging output from the HCA driver&gt;
<br>
Created group on b-2
<br>
<p>&lt;Output from OMPI logging mechanism, continued&gt;
<br>
[b-2:21062] select: init of component lf returned success
<br>
[b-3:07672] mca: base: components_register: registering framework bml
<br>
components
<br>
[b-3:07672] mca: base: components_register: found loaded component r2
<br>
[b-3:07672] mca: base: components_register: component r2 register function
<br>
successful
<br>
[b-3:07672] mca: base: components_open: opening bml components
<br>
[b-3:07672] mca: base: components_open: found loaded component r2
<br>
[b-3:07672] mca: base: components_open: component r2 open function
<br>
successful
<br>
[b-3:07672] mca: base: components_register: registering framework btl
<br>
components
<br>
[b-3:07672] mca: base: components_register: found loaded component self
<br>
[b-3:07672] mca: base: components_register: component self register
<br>
function successful
<br>
[b-3:07672] mca: base: components_register: found loaded component lf
<br>
[b-3:07672] mca: base: components_register: component lf register function
<br>
successful
<br>
[b-3:07672] mca: base: components_open: opening btl components
<br>
[b-3:07672] mca: base: components_open: found loaded component self
<br>
[b-3:07672] mca: base: components_open: component self open function
<br>
successful
<br>
[b-3:07672] mca: base: components_open: found loaded component lf
<br>
[b-3:07672] mca: base: components_open: component lf open function
<br>
successful
<br>
[b-3:07672] select: initializing btl component self
<br>
[b-3:07672] select: init of component self returned success
<br>
[b-3:07672] select: initializing btl component lf
<br>
<p>&lt;Debugging output from the HCA driver&gt;
<br>
lf_group_lib.c:442: _lf_open: _lf_open(&quot;MPI_0&quot;,0x842,0x1b6,4096,0)
<br>
Created group on b-3
<br>
<p>&lt;Output from OMPI logging mechanism, continued&gt;
<br>
[b-3:07672] select: init of component lf returned success
<br>
[b-2:21062] mca: bml: Using self btl for send to [[6866,1],0] on node b-2
<br>
[b-3:07672] mca: bml: Using self btl for send to [[6866,1],1] on node b-3
<br>
<p>&lt;Output from the 'mpitest' MPI program: out-of-band-I/O&gt;
<br>
Hello from b-2
<br>
The world has 2 nodes
<br>
My rank is 0
<br>
Hello from b-3
<br>
<p>&lt;Output frm OMPI&gt;
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[6866,1],0]) is on host: b-2
<br>
&nbsp;&nbsp;Process 2 ([[6866,1],1]) is on host: 10.4.70.12
<br>
&nbsp;&nbsp;BTLs attempted: self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
<p>&lt;Output from the 'mpitest' MPI program: out-of-band-I/O, continued&gt;
<br>
The world has 2 nodes
<br>
My rank is 1
<br>
<p>&lt;Output from OMPI logging mechanism, continued&gt;
<br>
[b-2:21062] *** An error occurred in MPI_Send
<br>
[b-2:21062] *** reported by process [140385751007233,21474836480]
<br>
[b-2:21062] *** on communicator MPI_COMM_WORLD
<br>
[b-2:21062] *** MPI_ERR_INTERN: internal error
<br>
[b-2:21062] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will
<br>
now abort,
<br>
[b-2:21062] ***    and potentially your MPI job)
<br>
[durga_at_b-2 ~]$
<br>
<p>As you can see, the lf network is not being chosen for communication.
<br>
Without a modex exchange, how can that happen? Or, in a nutshell, what do I
<br>
need to do?
<br>
<p>Thanks a lot in advance
<br>
Durga
<br>
<p><p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18827/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Previous message:</strong> <a href="18826.php">Ralph Castain: "Re: [OMPI devel] Process affinity detection"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18828.php">Gilles Gouaillardet: "Re: [OMPI devel] modex receive"</a>
<li><strong>Reply:</strong> <a href="18829.php">George Bosilca: "Re: [OMPI devel] modex receive"</a>
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
