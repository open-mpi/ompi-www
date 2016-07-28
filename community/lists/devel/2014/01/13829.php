<?
$subject_val = "Re: [OMPI devel] callback debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 21 16:06:50 2014" -->
<!-- isoreceived="20140121210650" -->
<!-- sent="Tue, 21 Jan 2014 22:06:49 +0100" -->
<!-- isosent="20140121210649" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] callback debugging" -->
<!-- id="20140121210649.GI30959_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6E3F2DA1-8EEE-4340-84F9-340DE64572F3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-01-21 16:06:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13828.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13828.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13823.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that helps. Now it actually starts to communicate with the
<br>
orterun process. This still fails but I will try to fix it.
<br>
<p>On Tue, Jan 21, 2014 at 12:27:55PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; That second argument is incorrect - it should be ORTE_PROC_IS_APP (note no !). The problem is that orte-checkpoint is a tool, and so it isn't a daemon - but it is also not an app.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 21, 2014, at 11:56 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Good to know that it does not make any sense. So it not just me.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Looking at the call chain I can see
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; orte_snapc_base_select(ORTE_PROC_IS_HNP, !ORTE_PROC_IS_DAEMON);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and the second parameter is used to decide if it is an app or not:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int orte_snapc_base_select(bool seed, bool app) in orte/mca/snapc/base/snapc_base_select.c
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and if it is true the code with the barrier is used.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; In orte/mca/snapc/base/snapc_base_select.c there is also following
</span><br>
<span class="quotelev2">&gt; &gt; comment:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /* XXX -- TODO -- framework_subsytem -- this shouldn't be necessary once the framework system is in place */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is this something which needs to be changed and which might be the cause
</span><br>
<span class="quotelev2">&gt; &gt; for this problem?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Tue, Jan 21, 2014 at 07:27:32AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That doesn't make any sense - I can't imagine a reason for orte-checkpoint itself to be running a barrier. I wonder if it is selecting the wrong component in snapc?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; As for the patch, that isn't going to work. The collective id has to be *globally* unique, which means that only orterun can issue a new one. So you have to get thru orte_init before you can request one as it requires a communication.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, like I said, it makes no sense for orte-checkpoint to do a barrier as it is a singleton - there is nothing for it to &quot;barrier&quot; with.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jan 21, 2014, at 7:24 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I think I still do not really understand how it works.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The barrier on which orte-checkpoint is currently hanging is in
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; app_coord_init(). You are also saying that orte-checkpoint
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; should not be calling a barrier. The backtrace of the point where it
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; is hanging now looks like:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #0  0x00007ffff69befa0 in __nanosleep_nocancel () at ../sysdeps/unix/syscall-template.S:81
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #1  0x00007ffff7b45712 in app_coord_init () at ../../../../../orte/mca/snapc/full/snapc_full_app.c:208
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #2  0x00007ffff7b3a5ce in orte_snapc_full_module_init (seed=false, app=true) at ../../../../../orte/mca/snapc/full/snapc_full_module.c:207
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #3  0x00007ffff7b375de in orte_snapc_base_select (seed=false, app=true) at ../../../../orte/mca/snapc/base/snapc_base_select.c:96
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #4  0x00007ffff7a9884a in orte_ess_base_tool_setup () at ../../../../orte/mca/ess/base/ess_base_std_tool.c:192
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #5  0x00007ffff7a9fe85 in rte_init () at ../../../../../orte/mca/ess/tool/ess_tool_module.c:83
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #6  0x00007ffff7a4647f in orte_init (pargc=0x7fffffffd94c, pargv=0x7fffffffd940, flags=8) at ../../orte/runtime/orte_init.c:158
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #7  0x0000000000402859 in ckpt_init (argc=51, argv=0x7fffffffda78) at ../../../../orte/tools/orte-checkpoint/orte-checkpoint.c:610
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; #8  0x0000000000401d7a in main (argc=51, argv=0x7fffffffda78) at ../../../../orte/tools/orte-checkpoint/orte-checkpoint.c:245
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Maybe I am doing something completely wrong. I am currently
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; running 'orterun -np 2 test-programm'.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In another terminal I am starting orte-checkpoint with the PID of
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; orterun and the barrier in app_coord_init() is just before it tries
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; to communicate with orterun. Is this the correct setup?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Mon, Jan 20, 2014 at 05:33:59PM -0600, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; If it is the application, then there is probably a barrier in the
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; app_coord_init() to make sure all the applications are up and running.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; After this point then the global coordinator knows that the application can
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; be checkpointed.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I don't think orte-checkpoint should be calling a barrier - from what I
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; recall.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On Mon, Jan 20, 2014 at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Is it orte-checkpoint that is hanging, or the app you are trying to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; checkpoint?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jan 20, 2014, at 2:10 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks for your help. I tried initializing the barrier correctly (see
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; attached patch) but now, instead of crashing, it just hangs on the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; barrier while running orte-checkpoint
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [dcbz:20150] [[41665,0],0] grpcomm:bad entering barrier
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; [dcbz:20150] [[41665,0],0] ACTIVATING GRCPCOMM OP 0 at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c:206
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #0  0x00007ffff69befa0 in __nanosleep_nocancel () at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ../sysdeps/unix/syscall-template.S:81
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #1  0x00007ffff7b456ba in app_coord_init () at
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; ../../../../../orte/mca/snapc/full/snapc_full_app.c:207
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; #2  0x00007ffff7b3a582 in orte_snapc_full_module_init (seed=false,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; app=true) at ../../../../../orte/mca/snapc/full/snapc_full_module.c:207
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; it hangs looping at ORTE_WAIT_FOR_COMPLETION(coll-&gt;active);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I do not understand on what the barrier here is actually waiting for. Where
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; do I need to look to find the place the barrier is waiting for?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I also tried initializing the collective id's in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte/mca/plm/base/plm_base_launch_support.c but that code is never
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; used running the orte-checkpoint tool
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Adrian
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Sat, Jan 11, 2014 at 11:46:42AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I took a look at this, and I'm afraid you have some work to do in the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte/mca/snapc code base:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 1. you must use dynamically allocated buffers for rml.send_buffer_nb. See
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; r30261 for an example of the changes that need to be made - I did some, but
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; can't swear to catching them all. It was enough to at least get a proc past
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the initial snapc registration
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 2. you are reusing collective id's to execute several orte_grpcomm.barrier
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; calls - those ids are used elsewhere during MPI_Init. This is not allowed -
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; a collective id can only be used *once*. What you need to do is go into
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte/mca/plm/base/plm_base_launch_support.c and (when cr is configured) add
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; cr-specific collective id's for this purpose. I don't know how many places
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in the cr code create their own barriers, but they each need a collective
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; id.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you prefer and have the time, you are welcome to extend the collective
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; code to allow id reuse. This would require that each daemon and app &quot;reset&quot;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the collective fields when a collective is declared complete. It isn't that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; hard to do - just never had a reason to do it. I can take a shot at it when
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; time permits (may have some time this weekend)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 3. when you post the non-blocking recv in the snapc/full code, it looks to
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; me like you need to block until you get the answer. I don't know where in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; the code flow this is occurring - if you are not in an event, then it is
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; okay to block using ORTE_WAIT_FOR_COMPLETION. Look in
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte/mca/routed/base/routed_base_fns.c starting at line 252 for an example.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jan 10, 2014, at 12:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jan 10, 2014, at 12:45 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Fri, Jan 10, 2014 at 09:48:14AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; On Jan 10, 2014, at 8:02 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am currently trying to understand how callbacks are working. Right now
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I am looking at orte/mca/rml/base/rml_base_receive.c
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_rml_base_comm_start() which does
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                        ORTE_RML_TAG_RML_INFO_UPDATE,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                        ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                        orte_rml_base_recv,
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;                        NULL);
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; As far as I understand it orte_rml_base_recv() is the callback function.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; At which point should this function run? When the data is actually
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; received?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Not precisely. When data is received by the OOB, it pushes the data into
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; an event. When that event gets serviced, it calls the orte_rml_base_receive
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; function which processes the data to find the matching tag, and then uses
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that to execute the callback to the user code.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The same for send_buffer_nb() functions. I do not see the callback
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; functions actually running. How can I verify that the callback functions
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; are running. Especially for the send case it sounds pretty obvious how
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; it should work but I never see the callback function running. At least
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; in my setup.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; The data is not immediately sent. It gets pushed into an event. When that
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; event gets serviced, it calls the orte_oob_base_send function which then
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; passes the data to each active OOB component until one of them says it can
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; send it. The data is then pushed into another event to get it into the
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; event base for that component's active module - when that event gets
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; serviced, the data is sent. Once the data is sent, an event is created
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that, when serviced, executes the callback to the user code.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; If you aren't seeing callbacks, the most likely cause is that the orte
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; progress thread isn't running. Without it, none of this will work.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thanks. Running configure without '--with-ft=cr' I can run a program and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; use orte-top. In orterun I can see that the callback is running and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orte-top displays the retrieved information. I can also see in orte-top
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; that the callbacks are working.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Actually, I'm rather impressed - I hadn't tested orte-top and didn't
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; honestly know if it would work any more! Glad to hear it does :-)
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Doing the same with '--with-ft=cr'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; enabled orte-top crashes as well as orte-checkpoint and both (-top and
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; -checkpoint) seem to no longer have working callbacks and that is why
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; they are probably crashing. So some code which is enabled by '--with-ft=cr'
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; seems to break callbacks in orte-top as well as in orte-checkpoint.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; orterun handles callbacks no matter if configured with or without
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; '--with-ft=cr'.
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; I can take a look this weekend - probably something silly
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Adrian
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; &lt;grpcomm.txt&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Assistant Professor of Computer Science
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; University of Wisconsin-La Crosse
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; QOTD:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	&quot;I tried buying a goat instead of a lawn tractor; had to return
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 	it though.  Couldn't figure out a way to connect the snow blower.&quot;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 		Adrian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
</span><br>
<span class="quotelev2">&gt; &gt; Hempstone's Question:
</span><br>
<span class="quotelev2">&gt; &gt; 	If you have to travel on the Titanic, why not go first class?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<p><pre>
-- 
Adrian Reber &lt;adrian_at_[hidden]&gt;            <a href="http://lisas.de/~adrian/">http://lisas.de/~adrian/</a>
Ummm, well, OK.  The network's the network, the computer's the computer.
Sorry for the confusion.
		-- Sun Microsystems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13830.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4rc: MPI_F08_TYPE build failure with AMD's Open64"</a>
<li><strong>Previous message:</strong> <a href="13828.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13828.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13823.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
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
