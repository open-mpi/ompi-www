<?
$subject_val = "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 00:00:33 2015" -->
<!-- isoreceived="20150526040033" -->
<!-- sent="Tue, 26 May 2015 13:00:24 +0900" -->
<!-- isosent="20150526040024" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error: &amp;quot;all nodes which are allocated for this job are already filled&amp;quot;" -->
<!-- id="5563EFD8.30600_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAEB3Xu78hZWFiT=V5-Wy8bzYsjWGGsfVj3hrPMRi+fkOX=azqA_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 00:00:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rahul,
<br>
<p>per the logs, it seems the /sys pseudo filesystem is not mounted in your 
<br>
chroot.
<br>
<p>at first, can you make sure this is mounted and try again ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/26/2015 12:51 PM, Rahul Yadav wrote:
<br>
<span class="quotelev1">&gt; We were able to solve ssh problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But now MPI is not able to use component yalla. We are running 
</span><br>
<span class="quotelev1">&gt; following command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile /root/host1 
</span><br>
<span class="quotelev1">&gt; /root/app2 : -n 1 --hostfile /root/host2 /root/backend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; command is run in chroot environment on JARVICENAE27 and other node is 
</span><br>
<span class="quotelev1">&gt; JARVICENAE125. JARVICENAE125 is able to select yalla since that is a 
</span><br>
<span class="quotelev1">&gt; remote node and thus is not trying to run the job in chroot 
</span><br>
<span class="quotelev1">&gt; environment. But JARVICENAE27 is throwing few MXM related errors and 
</span><br>
<span class="quotelev1">&gt; yalla is not selected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following are the logs of the command with verbose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what might be wrong ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1432283901.548917]         sys.c:719  MXM  WARN  Conflicting CPU 
</span><br>
<span class="quotelev1">&gt; frequencies detected, using: 2601.00
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: registering pml 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: component v 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: component bfo 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: component cm 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: component ob1 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component yalla
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_register: component yalla 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: opening pml components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: found loaded component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: component v open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: component bfo open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: component cm open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: component ob1 open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component yalla
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: components_open: component yalla open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: component v not in the include list
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: component bfo not in the include list
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: initializing pml component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: registering pml 
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: component v 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: component bfo 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: component cm 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: component ob1 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: found loaded 
</span><br>
<span class="quotelev1">&gt; component yalla
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_register: component yalla 
</span><br>
<span class="quotelev1">&gt; register function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: opening pml components
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: found loaded component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: component v open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: component bfo open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: found loaded component cm
</span><br>
<span class="quotelev1">&gt; libibverbs: Warning: no userspace device-specific driver found for 
</span><br>
<span class="quotelev1">&gt; /sys/class/infiniband_verbs/uverbs0
</span><br>
<span class="quotelev1">&gt; [1432283901.559929]         sys.c:719  MXM  WARN  Conflicting CPU 
</span><br>
<span class="quotelev1">&gt; frequencies detected, using: 2601.00
</span><br>
<span class="quotelev1">&gt; [1432283901.561294] [JARVICENAE27:6474 :0]      ib_dev.c:573  MXM 
</span><br>
<span class="quotelev1">&gt;  ERROR There are no Mellanox cards detected.
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: component cm closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: unloading component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: component ob1 open 
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: found loaded 
</span><br>
<span class="quotelev1">&gt; component yalla
</span><br>
<span class="quotelev1">&gt; [1432283901.561732] [JARVICENAE27:6474 :0]      ib_dev.c:573  MXM 
</span><br>
<span class="quotelev1">&gt;  ERROR There are no Mellanox cards detected.
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: components_open: component yalla open 
</span><br>
<span class="quotelev1">&gt; function failed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: component yalla closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: unloading component yalla
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] select: component v not in the include list
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] select: component bfo not in the include list
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] select: initializing pml component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] select: init returned priority 20
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] selected ob1 best priority 20
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] select: component ob1 selected
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: component v closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: unloading component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: component bfo closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: init returned priority 30
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: initializing pml component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: init returned failure for component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: initializing pml component yalla
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: init returned priority 50
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] selected yalla best priority 50
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: component cm not selected / finalized
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] select: component yalla selected
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: component v closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: unloading component v
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: component bfo closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: unloading component bfo
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: component cm closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: unloading component cm
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: component ob1 closed
</span><br>
<span class="quotelev1">&gt; [JARVICENAE125:00909] mca: base: close: unloading component ob1
</span><br>
<span class="quotelev1">&gt; [JARVICENAE27:06474] check:select: modex not reqd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, May 13, 2015 at 8:02 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Okay, so we see two nodes have been allocated:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     1. JARVICENAE27 - appears to be the node where mpirun is running
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     2. 10.3.0.176
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Does that match what you expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If you cannot ssh (without a password) between machines, then we
</span><br>
<span class="quotelev1">&gt;     will not be able to run.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On May 13, 2015, at 12:21 AM, Rahul Yadav &lt;roborahul_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:roborahul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     I get following output with verbose
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: registering
</span><br>
<span class="quotelev2">&gt;&gt;     ras components
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: component
</span><br>
<span class="quotelev2">&gt;&gt;     loadleveler register function successful
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component simulator
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: component
</span><br>
<span class="quotelev2">&gt;&gt;     simulator register function successful
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component slurm
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_register: component
</span><br>
<span class="quotelev2">&gt;&gt;     slurm register function successful
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: opening ras
</span><br>
<span class="quotelev2">&gt;&gt;     components
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component loadleveler
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: component
</span><br>
<span class="quotelev2">&gt;&gt;     loadleveler open function successful
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component simulator
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: found loaded
</span><br>
<span class="quotelev2">&gt;&gt;     component slurm
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca: base: components_open: component slurm
</span><br>
<span class="quotelev2">&gt;&gt;     open function successful
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select: Auto-selecting ras components
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev2">&gt;&gt;     [loadleveler]
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev2">&gt;&gt;     [loadleveler]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev2">&gt;&gt;     [simulator]
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev2">&gt;&gt;     [simulator]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Querying component
</span><br>
<span class="quotelev2">&gt;&gt;     [slurm]
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) Skipping component
</span><br>
<span class="quotelev2">&gt;&gt;     [slurm]. Query failed to return a module
</span><br>
<span class="quotelev2">&gt;&gt;     [JARVICENAE27:00654] mca:base:select:(  ras) No component selected!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     ======================   ALLOCATED NODES ======================
</span><br>
<span class="quotelev2">&gt;&gt;          JARVICENAE27: slots=1 max_slots=0 slots_inuse=0 state=UP
</span><br>
<span class="quotelev2">&gt;&gt;     10.3.0.176 &lt;<a href="http://10.3.0.176/">http://10.3.0.176/</a>&gt;: slots=1 max_slots=0
</span><br>
<span class="quotelev2">&gt;&gt;     slots_inuse=0 state=UNKNOWN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Also, I am not able to ssh to other machine from one machine in
</span><br>
<span class="quotelev2">&gt;&gt;     chroot environment. Can that be a problem ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Thanks
</span><br>
<span class="quotelev2">&gt;&gt;     Rahul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Thu, May 7, 2015 at 8:06 AM, Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Try adding &#151;mca ras_base_verbose 10 to your cmd line and
</span><br>
<span class="quotelev2">&gt;&gt;         let&#146;s see what it thinks it is doing. Which OMPI version are
</span><br>
<span class="quotelev2">&gt;&gt;         you using - master?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On May 6, 2015, at 11:24 PM, Rahul Yadav
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;roborahul_at_[hidden] &lt;mailto:roborahul_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         We have been trying to run MPI jobs (consisting of two
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         different binaries, one each ) in two nodes,  using hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         option as following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         mpirun --allow-run-as-root --mca pml yalla -n 1 --hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /root/host1 /root/app2 : -n 1 --hostfile /root/host2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /root/backend
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         We are doing this in chroot environment. We have set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         HPCX env in chroot'ed environment itself. /root/host1 and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         /root/host2 (inside chroot env) contains IPs of two nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         respectively.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         We are getting following error
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &quot; all nodes which are allocated for this job are already
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         filled &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         However when we use chroot but don't use hostfile option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         (both processes run in same node) OR we use hostfile option
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         but outside chroot, it works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Anyone has any idea if chroot can cause above error and how
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         to solve it ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Rahul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26845.php">http://www.open-mpi.org/community/lists/users/2015/05/26845.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26847.php">http://www.open-mpi.org/community/lists/users/2015/05/26847.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26860.php">http://www.open-mpi.org/community/lists/users/2015/05/26860.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/05/26861.php">http://www.open-mpi.org/community/lists/users/2015/05/26861.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26927.php">http://www.open-mpi.org/community/lists/users/2015/05/26927.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26928/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>Previous message:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<li><strong>In reply to:</strong> <a href="26927.php">Rahul Yadav: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26929.php">Ralph Castain: "Re: [OMPI users] Error: &quot;all nodes which are allocated for this job are already filled&quot;"</a>
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
