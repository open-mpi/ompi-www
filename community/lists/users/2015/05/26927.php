<?
$subject_val = "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 25 23:51:06 2015" -->
<!-- isoreceived="20150526035106" -->
<!-- sent="Mon, 25 May 2015 20:51:02 -0700" -->
<!-- isosent="20150526035102" -->
<!-- name="Rahul Yadav" -->
<!-- email="roborahul_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="CAEB3Xu78hZWFiT=V5-Wy8bzYsjWGGsfVj3hrPMRi+fkOX=azqA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="26ACAE6F-E77B-42F4-AE1B-B54C2BB6B164_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;<br>
<strong>From:</strong> Rahul Yadav (<em>roborahul_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-25 23:51:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26926.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We were able to solve ssh problem.
<br>
<p>But now MPI is not able to use component yalla. We are running following
<br>
command
<br>
<p>mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1
<br>
/root/app2 : -n 1 --hostfile /root/host2 /root/backend
<br>
<p>command is run in chroot environment on JARVICENAE27 and other node is
<br>
JARVICENAE125. JARVICENAE125 is able to select yalla since that is a remote
<br>
node and thus is not trying to run the job in chroot environment. But
<br>
JARVICENAE27
<br>
is throwing few MXM related errors and yalla is not selected.
<br>
<p>Following are the logs of the command with verbose.
<br>
<p>Any idea what might be wrong ?
<br>
<p>[1432283901.548917]         sys.c:719  MXM  WARN  Conflicting CPU
<br>
frequencies detected, using: 2601.00
<br>
[JARVICENAE125:00909] mca: base: components_register: registering pml
<br>
components
<br>
[JARVICENAE125:00909] mca: base: components_register: found loaded
<br>
component v
<br>
[JARVICENAE125:00909] mca: base: components_register: component v register
<br>
function successful
<br>
[JARVICENAE125:00909] mca: base: components_register: found loaded
<br>
component bfo
<br>
[JARVICENAE125:00909] mca: base: components_register: component bfo
<br>
register function successful
<br>
[JARVICENAE125:00909] mca: base: components_register: found loaded
<br>
component cm
<br>
[JARVICENAE125:00909] mca: base: components_register: component cm register
<br>
function successful
<br>
[JARVICENAE125:00909] mca: base: components_register: found loaded
<br>
component ob1
<br>
[JARVICENAE125:00909] mca: base: components_register: component ob1
<br>
register function successful
<br>
[JARVICENAE125:00909] mca: base: components_register: found loaded
<br>
component yalla
<br>
[JARVICENAE125:00909] mca: base: components_register: component yalla
<br>
register function successful
<br>
[JARVICENAE125:00909] mca: base: components_open: opening pml components
<br>
[JARVICENAE125:00909] mca: base: components_open: found loaded component v
<br>
[JARVICENAE125:00909] mca: base: components_open: component v open function
<br>
successful
<br>
[JARVICENAE125:00909] mca: base: components_open: found loaded component bfo
<br>
[JARVICENAE125:00909] mca: base: components_open: component bfo open
<br>
function successful
<br>
[JARVICENAE125:00909] mca: base: components_open: found loaded component cm
<br>
[JARVICENAE125:00909] mca: base: components_open: component cm open
<br>
function successful
<br>
[JARVICENAE125:00909] mca: base: components_open: found loaded component ob1
<br>
[JARVICENAE125:00909] mca: base: components_open: component ob1 open
<br>
function successful
<br>
[JARVICENAE125:00909] mca: base: components_open: found loaded component
<br>
yalla
<br>
[JARVICENAE125:00909] mca: base: components_open: component yalla open
<br>
function successful
<br>
[JARVICENAE125:00909] select: component v not in the include list
<br>
[JARVICENAE125:00909] select: component bfo not in the include list
<br>
[JARVICENAE125:00909] select: initializing pml component cm
<br>
[JARVICENAE27:06474] mca: base: components_register: registering pml
<br>
components
<br>
[JARVICENAE27:06474] mca: base: components_register: found loaded component
<br>
v
<br>
[JARVICENAE27:06474] mca: base: components_register: component v register
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_register: found loaded component
<br>
bfo
<br>
[JARVICENAE27:06474] mca: base: components_register: component bfo register
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_register: found loaded component
<br>
cm
<br>
[JARVICENAE27:06474] mca: base: components_register: component cm register
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_register: found loaded component
<br>
ob1
<br>
[JARVICENAE27:06474] mca: base: components_register: component ob1 register
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_register: found loaded component
<br>
yalla
<br>
[JARVICENAE27:06474] mca: base: components_register: component yalla
<br>
register function successful
<br>
[JARVICENAE27:06474] mca: base: components_open: opening pml components
<br>
[JARVICENAE27:06474] mca: base: components_open: found loaded component v
<br>
[JARVICENAE27:06474] mca: base: components_open: component v open function
<br>
successful
<br>
[JARVICENAE27:06474] mca: base: components_open: found loaded component bfo
<br>
[JARVICENAE27:06474] mca: base: components_open: component bfo open
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_open: found loaded component cm
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs0
<br>
[1432283901.559929]         sys.c:719  MXM  WARN  Conflicting CPU
<br>
frequencies detected, using: 2601.00
<br>
[1432283901.561294] [JARVICENAE27:6474 :0]      ib_dev.c:573  MXM  ERROR
<br>
There are no Mellanox cards detected.
<br>
[JARVICENAE27:06474] mca: base: close: component cm closed
<br>
[JARVICENAE27:06474] mca: base: close: unloading component cm
<br>
[JARVICENAE27:06474] mca: base: components_open: found loaded component ob1
<br>
[JARVICENAE27:06474] mca: base: components_open: component ob1 open
<br>
function successful
<br>
[JARVICENAE27:06474] mca: base: components_open: found loaded component
<br>
yalla
<br>
[1432283901.561732] [JARVICENAE27:6474 :0]      ib_dev.c:573  MXM  ERROR
<br>
There are no Mellanox cards detected.
<br>
[JARVICENAE27:06474] mca: base: components_open: component yalla open
<br>
function failed
<br>
[JARVICENAE27:06474] mca: base: close: component yalla closed
<br>
[JARVICENAE27:06474] mca: base: close: unloading component yalla
<br>
[JARVICENAE27:06474] select: component v not in the include list
<br>
[JARVICENAE27:06474] select: component bfo not in the include list
<br>
[JARVICENAE27:06474] select: initializing pml component ob1
<br>
[JARVICENAE27:06474] select: init returned priority 20
<br>
[JARVICENAE27:06474] selected ob1 best priority 20
<br>
[JARVICENAE27:06474] select: component ob1 selected
<br>
[JARVICENAE27:06474] mca: base: close: component v closed
<br>
[JARVICENAE27:06474] mca: base: close: unloading component v
<br>
[JARVICENAE27:06474] mca: base: close: component bfo closed
<br>
[JARVICENAE27:06474] mca: base: close: unloading component bfo
<br>
[JARVICENAE125:00909] select: init returned priority 30
<br>
[JARVICENAE125:00909] select: initializing pml component ob1
<br>
[JARVICENAE125:00909] select: init returned failure for component ob1
<br>
[JARVICENAE125:00909] select: initializing pml component yalla
<br>
[JARVICENAE125:00909] select: init returned priority 50
<br>
[JARVICENAE125:00909] selected yalla best priority 50
<br>
[JARVICENAE125:00909] select: component cm not selected / finalized
<br>
[JARVICENAE125:00909] select: component yalla selected
<br>
[JARVICENAE125:00909] mca: base: close: component v closed
<br>
[JARVICENAE125:00909] mca: base: close: unloading component v
<br>
[JARVICENAE125:00909] mca: base: close: component bfo closed
<br>
[JARVICENAE125:00909] mca: base: close: unloading component bfo
<br>
[JARVICENAE125:00909] mca: base: close: component cm closed
<br>
[JARVICENAE125:00909] mca: base: close: unloading component cm
<br>
[JARVICENAE125:00909] mca: base: close: component ob1 closed
<br>
[JARVICENAE125:00909] mca: base: close: unloading component ob1
<br>
[JARVICENAE27:06474] check:select: modex not reqd
<br>
<p><p>On Wed, May 13, 2015 at 8:02 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, so we see two nodes have been allocated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. JARVICENAE27 - appears to be the node where mpirun is running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. 10.3.0.176
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that match what you expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you cannot ssh (without a password) between machines, then we will not
</span><br>
<span class="quotelev1">&gt; be able to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 13, 2015, at 12:21 AM, Rahul Yadav &lt;roborahul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get following output with verbose
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: registering ras
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component loadleveler
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component loadleveler
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component simulator
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component simulator
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev1">&gt; component slurm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_register: component slurm
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: opening ras components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; loadleveler
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: component loadleveler
</span><br>
<span class="quotelev1">&gt; open function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; simulator
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: found loaded component
</span><br>
<span class="quotelev1">&gt; slurm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca: base: components_open: component slurm open
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev1">&gt; [loadleveler]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component [simulator]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev1">&gt; [simulator]. Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Querying component [slurm]
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component [slurm].
</span><br>
<span class="quotelev1">&gt; Query failed to return a module
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:00654] mca:base:select:(  ras) No component selected!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ======================   ALLOCATED NODES   ======================
</span><br>
<span class="quotelev1">&gt;        JARVICENAE27: slots=1 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev1">&gt;        10.3.0.176: slots=1 max_slots=0 slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, I am not able to ssh to other machine from one machine in chroot
</span><br>
<span class="quotelev1">&gt; environment. Can that be a problem ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Rahul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 7, 2015 at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try adding &#226;&#128;&#148;mca ras_base_verbose 10 to your cmd line and let&#226;&#128;&#153;s see what
</span><br>
<span class="quotelev2">&gt;&gt; it thinks it is doing. Which OMPI version are you using - master?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2015, at 11:24 PM, Rahul Yadav &lt;roborahul_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have been trying to run MPI jobs (consisting of two different
</span><br>
<span class="quotelev2">&gt;&gt; binaries, one each ) in two nodes,  using hostfile option as following
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1
</span><br>
<span class="quotelev2">&gt;&gt; /root/app2 : -n 1 --hostfile /root/host2 /root/backend
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are doing this in chroot environment. We have set the HPCX env in
</span><br>
<span class="quotelev2">&gt;&gt; chroot'ed environment itself. /root/host1 and /root/host2 (inside chroot
</span><br>
<span class="quotelev2">&gt;&gt; env) contains IPs of two nodes respectively.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are getting following error
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot; all nodes which are allocated for this job are already filled &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However when we use chroot but don't use hostfile option (both processes
</span><br>
<span class="quotelev2">&gt;&gt; run in same node) OR we use hostfile option but outside chroot, it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyone has any idea if chroot can cause above error and how to solve it ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Rahul
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26847.php">http://www.open-mpi.org/community/lists/users/2015/05/26847.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26860.php">http://www.open-mpi.org/community/lists/users/2015/05/26860.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26861.php">http://www.open-mpi.org/community/lists/users/2015/05/26861.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26927/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26926.php">Timur Ismagilov: "[OMPI users] Fwd: Re[4]:  MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26861.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26928.php">Gilles Gouaillardet: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Reply:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
