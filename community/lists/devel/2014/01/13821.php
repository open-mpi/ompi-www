<?
$subject_val = "Re: [OMPI devel] callback debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 20 18:34:00 2014" -->
<!-- isoreceived="20140120233400" -->
<!-- sent="Mon, 20 Jan 2014 17:33:59 -0600" -->
<!-- isosent="20140120233359" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] callback debugging" -->
<!-- id="CAANzjEn+gAhV3=2Fs00sx_aKD4hqSh1w+Y3SmA3MRgYWLYzpdw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9C401617-ACD8-4A3B-925D-61BEFDCA11B5_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-20 18:33:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13822.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Previous message:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13824.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13824.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If it is the application, then there is probably a barrier in the
<br>
app_coord_init() to make sure all the applications are up and running.
<br>
After this point then the global coordinator knows that the application can
<br>
be checkpointed.
<br>
<p>I don't think orte-checkpoint should be calling a barrier - from what I
<br>
recall.
<br>
<p><p>On Mon, Jan 20, 2014 at 4:46 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is it orte-checkpoint that is hanging, or the app you are trying to
</span><br>
<span class="quotelev1">&gt; checkpoint?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2014, at 2:10 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help. I tried initializing the barrier correctly (see
</span><br>
<span class="quotelev1">&gt; attached patch) but now, instead of crashing, it just hangs on the
</span><br>
<span class="quotelev1">&gt; barrier while running orte-checkpoint
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [dcbz:20150] [[41665,0],0] grpcomm:bad entering barrier
</span><br>
<span class="quotelev1">&gt; [dcbz:20150] [[41665,0],0] ACTIVATING GRCPCOMM OP 0 at
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/grpcomm/bad/grpcomm_bad_module.c:206
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007ffff69befa0 in __nanosleep_nocancel () at
</span><br>
<span class="quotelev1">&gt; ../sysdeps/unix/syscall-template.S:81
</span><br>
<span class="quotelev1">&gt; #1  0x00007ffff7b456ba in app_coord_init () at
</span><br>
<span class="quotelev1">&gt; ../../../../../orte/mca/snapc/full/snapc_full_app.c:207
</span><br>
<span class="quotelev1">&gt; #2  0x00007ffff7b3a582 in orte_snapc_full_module_init (seed=false,
</span><br>
<span class="quotelev1">&gt; app=true) at ../../../../../orte/mca/snapc/full/snapc_full_module.c:207
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it hangs looping at ORTE_WAIT_FOR_COMPLETION(coll-&gt;active);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not understand on what the barrier here is actually waiting for. Where
</span><br>
<span class="quotelev1">&gt; do I need to look to find the place the barrier is waiting for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried initializing the collective id's in
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/plm_base_launch_support.c but that code is never
</span><br>
<span class="quotelev1">&gt; used running the orte-checkpoint tool
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Jan 11, 2014 at 11:46:42AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took a look at this, and I'm afraid you have some work to do in the
</span><br>
<span class="quotelev1">&gt; orte/mca/snapc code base:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you must use dynamically allocated buffers for rml.send_buffer_nb. See
</span><br>
<span class="quotelev1">&gt; r30261 for an example of the changes that need to be made - I did some, but
</span><br>
<span class="quotelev1">&gt; can't swear to catching them all. It was enough to at least get a proc past
</span><br>
<span class="quotelev1">&gt; the initial snapc registration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. you are reusing collective id's to execute several orte_grpcomm.barrier
</span><br>
<span class="quotelev1">&gt; calls - those ids are used elsewhere during MPI_Init. This is not allowed -
</span><br>
<span class="quotelev1">&gt; a collective id can only be used *once*. What you need to do is go into
</span><br>
<span class="quotelev1">&gt; orte/mca/plm/base/plm_base_launch_support.c and (when cr is configured) add
</span><br>
<span class="quotelev1">&gt; cr-specific collective id's for this purpose. I don't know how many places
</span><br>
<span class="quotelev1">&gt; in the cr code create their own barriers, but they each need a collective
</span><br>
<span class="quotelev1">&gt; id.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you prefer and have the time, you are welcome to extend the collective
</span><br>
<span class="quotelev1">&gt; code to allow id reuse. This would require that each daemon and app &quot;reset&quot;
</span><br>
<span class="quotelev1">&gt; the collective fields when a collective is declared complete. It isn't that
</span><br>
<span class="quotelev1">&gt; hard to do - just never had a reason to do it. I can take a shot at it when
</span><br>
<span class="quotelev1">&gt; time permits (may have some time this weekend)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. when you post the non-blocking recv in the snapc/full code, it looks to
</span><br>
<span class="quotelev1">&gt; me like you need to block until you get the answer. I don't know where in
</span><br>
<span class="quotelev1">&gt; the code flow this is occurring - if you are not in an event, then it is
</span><br>
<span class="quotelev1">&gt; okay to block using ORTE_WAIT_FOR_COMPLETION. Look in
</span><br>
<span class="quotelev1">&gt; orte/mca/routed/base/routed_base_fns.c starting at line 252 for an example.
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 12:45 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Jan 10, 2014 at 09:48:14AM -0800, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 10, 2014, at 8:02 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently trying to understand how callbacks are working. Right now
</span><br>
<span class="quotelev1">&gt; I am looking at orte/mca/rml/base/rml_base_receive.c
</span><br>
<span class="quotelev1">&gt; orte_rml_base_comm_start() which does
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  orte_rml.recv_buffer_nb(ORTE_NAME_WILDCARD,
</span><br>
<span class="quotelev1">&gt;                          ORTE_RML_TAG_RML_INFO_UPDATE,
</span><br>
<span class="quotelev1">&gt;                          ORTE_RML_PERSISTENT,
</span><br>
<span class="quotelev1">&gt;                          orte_rml_base_recv,
</span><br>
<span class="quotelev1">&gt;                          NULL);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As far as I understand it orte_rml_base_recv() is the callback function.
</span><br>
<span class="quotelev1">&gt; At which point should this function run? When the data is actually
</span><br>
<span class="quotelev1">&gt; received?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not precisely. When data is received by the OOB, it pushes the data into
</span><br>
<span class="quotelev1">&gt; an event. When that event gets serviced, it calls the orte_rml_base_receive
</span><br>
<span class="quotelev1">&gt; function which processes the data to find the matching tag, and then uses
</span><br>
<span class="quotelev1">&gt; that to execute the callback to the user code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same for send_buffer_nb() functions. I do not see the callback
</span><br>
<span class="quotelev1">&gt; functions actually running. How can I verify that the callback functions
</span><br>
<span class="quotelev1">&gt; are running. Especially for the send case it sounds pretty obvious how
</span><br>
<span class="quotelev1">&gt; it should work but I never see the callback function running. At least
</span><br>
<span class="quotelev1">&gt; in my setup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The data is not immediately sent. It gets pushed into an event. When that
</span><br>
<span class="quotelev1">&gt; event gets serviced, it calls the orte_oob_base_send function which then
</span><br>
<span class="quotelev1">&gt; passes the data to each active OOB component until one of them says it can
</span><br>
<span class="quotelev1">&gt; send it. The data is then pushed into another event to get it into the
</span><br>
<span class="quotelev1">&gt; event base for that component's active module - when that event gets
</span><br>
<span class="quotelev1">&gt; serviced, the data is sent. Once the data is sent, an event is created
</span><br>
<span class="quotelev1">&gt; that, when serviced, executes the callback to the user code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you aren't seeing callbacks, the most likely cause is that the orte
</span><br>
<span class="quotelev1">&gt; progress thread isn't running. Without it, none of this will work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks. Running configure without '--with-ft=cr' I can run a program and
</span><br>
<span class="quotelev1">&gt; use orte-top. In orterun I can see that the callback is running and
</span><br>
<span class="quotelev1">&gt; orte-top displays the retrieved information. I can also see in orte-top
</span><br>
<span class="quotelev1">&gt; that the callbacks are working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I'm rather impressed - I hadn't tested orte-top and didn't
</span><br>
<span class="quotelev1">&gt; honestly know if it would work any more! Glad to hear it does :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing the same with '--with-ft=cr'
</span><br>
<span class="quotelev1">&gt; enabled orte-top crashes as well as orte-checkpoint and both (-top and
</span><br>
<span class="quotelev1">&gt; -checkpoint) seem to no longer have working callbacks and that is why
</span><br>
<span class="quotelev1">&gt; they are probably crashing. So some code which is enabled by '--with-ft=cr'
</span><br>
<span class="quotelev1">&gt; seems to break callbacks in orte-top as well as in orte-checkpoint.
</span><br>
<span class="quotelev1">&gt; orterun handles callbacks no matter if configured with or without
</span><br>
<span class="quotelev1">&gt; '--with-ft=cr'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can take a look this weekend - probably something silly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Adrian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;grpcomm.txt&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13821/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13822.php">Paul Hargrove: "[OMPI devel] 1.7.4rc: MIPS64 atomics tests fail"</a>
<li><strong>Previous message:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<li><strong>In reply to:</strong> <a href="13820.php">Ralph Castain: "Re: [OMPI devel] callback debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13824.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
<li><strong>Reply:</strong> <a href="13824.php">Adrian Reber: "Re: [OMPI devel] callback debugging"</a>
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
