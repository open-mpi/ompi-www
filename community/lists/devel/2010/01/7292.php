<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 11:35:43 2010" -->
<!-- isoreceived="20100108163543" -->
<!-- sent="Fri, 8 Jan 2010 09:35:34 -0700" -->
<!-- isosent="20100108163534" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again" -->
<!-- id="7FC62AB3-051A-4296-9C56-635D092FB3C4_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B47573C.2040800_at_upb.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 11:35:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7291.php">Joshua Hursey: "[OMPI devel] Fwd: Update on CS mail problem"</a>
<li><strong>In reply to:</strong> <a href="7290.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You've got this a tad wrong, but that's okay - let me try to clarify a couple of things that may help.
<br>
<p>First, you don't want to add this as a separate orted command. As you noted, orte has no direct way to tell the OMPI layer to do anything. Instead, you want to pass a message to the process that is received in the OMPI layer. That is easy to do.
<br>
<p>1. add a message tag in ompi/mca/dpm/dpm.h - perhaps something like OMPI_RML_TAG_BTL_CTL
<br>
<p>2. in the btl, add a call to orte_rml.recv_nb() that identifies the above tag and specifies a callback function to use when such a message arrives
<br>
<p>3. in that callback function, toggle your &quot;paused&quot; flag - or you can unpack the buffer to get a flag telling you what value to set. Your choice.
<br>
<p>Now, when you want to pause the BTL, you do an orte_grpcomm.xcast() to the above message tag. ORTE will deliver that message to every process, which will then have its callback function called.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Jan 8, 2010, at 9:03 AM, Christoph Konersmann wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe I should give more specific information with some code snippets...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently I added
</span><br>
<span class="quotelev1">&gt; #define ORTE_DAEMON_BTL_CTL_CMD (orte_daemon_cmd_flag_t) 26
</span><br>
<span class="quotelev1">&gt; to odls_types.h to identify if I want to trigger the BTL pause.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In process_commands() of orted/orted_comm.c this flag is processed first by broadcasting to all orteds with xcast of the grpcomm framework. At second it's forwarded with orte_odls.deliver_message to the local procs.  So every process should get the trigger. Or is there another possibly easier way of spawning the trigger?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expanded the mca_btl_base_module_t in btl/btl.h simply with an indicator if pause is set.
</span><br>
<span class="quotelev1">&gt; struct mca_btl_base_module_t {
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;    bool        btl_paused;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then added a line to the initial values in every BTL component that btl_paused should be false by default. E.g. in self/btl_self.c:
</span><br>
<span class="quotelev1">&gt; mca_btl_base_module_t mca_btl_self = {
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;    false, /* btl_paused */
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; Or did I forget something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my problem is now, when every process gets the trigger in the ORTE project, how could I set btl-&gt;paused to true in OMPI project? ORTE has not (and I know it should not) have access to the OMPI components. Is there a way of implementing a libevent callback function in the BTL modules? Or is there another way? I already read the documentation at your wiki-site, but for me it's not really trivial as I'm relatively new to this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An idea to get the connection to the OMPI project would be to use the ft_event framework. Therefore I added another opal_crs_state_type_t OPAL_CRS_PAUSE in crs/crs.h and tried to trigger the event in orted_comm.c with:
</span><br>
<span class="quotelev1">&gt; if( NULL != orte_ess.ft_event ) {
</span><br>
<span class="quotelev1">&gt;    if( ORTE_SUCCESS != (ret = orte_ess.ft_event(OPAL_CRS_PAUSE))) {
</span><br>
<span class="quotelev1">&gt;        goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; But the ft_event() is NULL and therefore isn't executed...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas? Any advices?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For me the performance impact of a solution is of no interest.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, and please excuse me if I bother you with this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Konersmann schrieb:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to implement a method to pause all BTL's sending packets to their destinations.
</span><br>
<span class="quotelev2">&gt;&gt; Currently I added a state variable to orte_process_info which will be changed with an external program through process_commands() in orte/orted/orted_comm.c (I hope it's processed globaly not locally). While this state is changed to something defined as PAUSE, I want the send_methods in PML-Layer to be halted omitting any network traffic. By now it's not working, cause the PML-Layer does not see the state change.
</span><br>
<span class="quotelev2">&gt;&gt; Another way would be to use a libevent thread on the bml/pml-level. I've read that this library is already supported/implemented, or am I wrong? How would I use libevent in this context? Does somebody have an example or hint? Or should I use the fault tolerance framework for this purpose?
</span><br>
<span class="quotelev2">&gt;&gt; Any help would be appreciated. thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paderborn Center for Parallel Computing - PC2
</span><br>
<span class="quotelev1">&gt; University of Paderborn - Germany
</span><br>
<span class="quotelev1">&gt; <a href="http://www.pc2.de">http://www.pc2.de</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7291.php">Joshua Hursey: "[OMPI devel] Fwd: Update on CS mail problem"</a>
<li><strong>In reply to:</strong> <a href="7290.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
<li><strong>Reply:</strong> <a href="7304.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - hope mail is working again"</a>
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
