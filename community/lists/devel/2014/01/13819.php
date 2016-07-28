<?
$subject_val = "Re: [OMPI devel] callback debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 17:10:50 2014" -->
<!-- isoreceived="20140120221050" -->
<!-- sent="Mon, 20 Jan 2014 23:10:48 +0100" -->
<!-- isosent="20140120221048" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] callback debugging" -->
<!-- id="20140120221048.GA30959_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="106C8D08-F492-4AA0-8645-6A6F3A435AD5_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] callback debugging<br>
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 17:10:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>In reply to:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your help. I tried initializing the barrier correctly (see
<br>
attached patch) but now, instead of crashing, it just hangs on the
<br>
barrier while running orte-checkpoint
<br>
<p>[dcbz:20150] [[41665,0],0] grpcomm:bad entering barrier
<br>
[dcbz:20150] [[41665,0],0] ACTIVATING GRCPCOMM OP 0 at ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c:206
<br>
<p>#0  0x00007ffff69befa0 in __nanosleep_nocancel () at ../sysdeps/unix/syscall-template.S:81
<br>
#1  0x00007ffff7b456ba in app_coord_init () at ../../../../../orte/mca/snapc/full/snapc_full_app.c:207
<br>
#2  0x00007ffff7b3a582 in orte_snapc_full_module_init (seed=false, app=true) at ../../../../../orte/mca/snapc/full/snapc_full_module.c:207
<br>
<p>it hangs looping at ORTE_WAIT_FOR_COMPLETION(coll-&gt;active);
<br>
<p>I do not understand on what the barrier here is actually waiting for. Where
<br>
do I need to look to find the place the barrier is waiting for?
<br>
<p>I also tried initializing the collective id's in
<br>
orte/mca/plm/base/plm_base_launch_support.c but that code is never
<br>
used running the orte-checkpoint tool
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p>On Sat, Jan 11, 2014 at 11:46:42AM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; I took a look at this, and I'm afraid you have some work to do in the orte/mca/snapc code base:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. you must use dynamically allocated buffers for rml.send_buffer_nb. See r30261 for an example of the changes that need to be made - I did some, but can't swear to catching them all. It was enough to at least get a proc past the initial snapc registration
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. you are reusing collective id's to execute several orte_grpcomm.barrier calls - those ids are used elsewhere during MPI_Init. This is not allowed - a collective id can only be used *once*. What you need to do is go into orte/mca/plm/base/plm_base_launch_support.c and (when cr is configured) add cr-specific collective id's for this purpose. I don't know how many places in the cr code create their own barriers, but they each need a collective id.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you prefer and have the time, you are welcome to extend the collective code to allow id reuse. This would require that each daemon and app &quot;reset&quot; the collective fields when a collective is declared complete. It isn't that hard to do - just never had a reason to do it. I can take a shot at it when time permits (may have some time this weekend)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. when you post the non-blocking recv in the snapc/full code, it looks to me like you need to block until you get the answer. I don't know where in the code flow this is occurring - if you are not in an event, then it is okay to block using ORTE_WAIT_FOR_COMPLETION. Look in orte/mca/routed/base/routed_base_fns.c starting at line 252 for an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 10, 2014, at 12:45 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Fri, Jan 10, 2014 at 09:48:14AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Jan 10, 2014, at 8:02 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am currently trying to understand how callbacks are working. Right now
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I am looking at orte/mca/rml/base/rml_base_receive.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; orte_rml_base_comm_start() which does 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;   orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           ORTE_RML_TAG_RML_INFO_UPDATE,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           orte_rml_base_recv,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                           NULL);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; As far as I understand it orte_rml_base_recv() is the callback function.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; At which point should this function run? When the data is actually
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; received?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Not precisely. When data is received by the OOB, it pushes the data into an event. When that event gets serviced, it calls the orte_rml_base_receive function which processes the data to find the matching tag, and then uses that to execute the callback to the user code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; The same for send_buffer_nb() functions. I do not see the callback
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; functions actually running. How can I verify that the callback functions
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; are running. Especially for the send case it sounds pretty obvious how
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; it should work but I never see the callback function running. At least
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; in my setup.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The data is not immediately sent. It gets pushed into an event. When that event gets serviced, it calls the orte_oob_base_send function which then passes the data to each active OOB component until one of them says it can send it. The data is then pushed into another event to get it into the event base for that component's active module - when that event gets serviced, the data is sent. Once the data is sent, an event is created that, when serviced, executes the callback to the user code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; If you aren't seeing callbacks, the most likely cause is that the orte progress thread isn't running. Without it, none of this will work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks. Running configure without '--with-ft=cr' I can run a program and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use orte-top. In orterun I can see that the callback is running and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orte-top displays the retrieved information. I can also see in orte-top
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that the callbacks are working.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Actually, I'm rather impressed - I hadn't tested orte-top and didn't honestly know if it would work any more! Glad to hear it does :-)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Doing the same with '--with-ft=cr'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; enabled orte-top crashes as well as orte-checkpoint and both (-top and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -checkpoint) seem to no longer have working callbacks and that is why
</span><br>
<span class="quotelev3">&gt; &gt;&gt; they are probably crashing. So some code which is enabled by '--with-ft=cr'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; seems to break callbacks in orte-top as well as in orte-checkpoint.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; orterun handles callbacks no matter if configured with or without
</span><br>
<span class="quotelev3">&gt; &gt;&gt; '--with-ft=cr'.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can take a look this weekend - probably something silly
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 		Adrian
</span><br>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13819/grpcomm">grpcomm</a>
</ul>
<!-- attachment="grpcomm" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Previous message:</strong> <a href="13818.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>In reply to:</strong> <a href="13747.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
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
