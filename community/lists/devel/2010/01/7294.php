<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 15:22:27 2010" -->
<!-- isoreceived="20100108202227" -->
<!-- sent="Fri, 08 Jan 2010 10:14:15 +0100" -->
<!-- isosent="20100108091415" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime" -->
<!-- id="4B46F767.4040305_at_sysckon.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B46F52A.7010806_at_upb.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Howto pause BTL's sending at runtime<br>
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-08 04:14:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>In reply to:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, but the mailscanner somehow doesn't like the sourcecode...
<br>
Changed now.
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
<span class="quotelev1">&gt; In process_commands() of orted/orted_comm.c this flag is processed first 
</span><br>
<span class="quotelev1">&gt; by broadcasting to all orteds with xcast of the grpcomm framework. At 
</span><br>
<span class="quotelev1">&gt; second it's forwarded with orte_odls.deliver_message to the local procs. 
</span><br>
<span class="quotelev1">&gt;  So every process should get the trigger. Or is there another possibly 
</span><br>
<span class="quotelev1">&gt; easier way of spawning the trigger?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expanded the mca_btl_base_module_t in btl/btl.h simply with an 
</span><br>
<span class="quotelev1">&gt; indicator (btl_paused) if pause is set.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I then added a line to the initial values in every BTL component that 
</span><br>
<span class="quotelev1">&gt; btl_paused should be false by default. E.g. in self/btl_self.c.
</span><br>
<span class="quotelev1">&gt; Or did I forget something?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my problem is now, when every process gets the trigger in the ORTE 
</span><br>
<span class="quotelev1">&gt; project, how could I set btl-&gt;paused to true in OMPI project? ORTE has 
</span><br>
<span class="quotelev1">&gt; not (and I know it should not) have access to the OMPI components. Is 
</span><br>
<span class="quotelev1">&gt; there a way of implementing a libevent callback function in the BTL 
</span><br>
<span class="quotelev1">&gt; modules? Or is there another way? I already read the documentation at 
</span><br>
<span class="quotelev1">&gt; your wiki-site, but for me it's not really trivial as I'm relatively new 
</span><br>
<span class="quotelev1">&gt; to this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; An idea to get the connection to the OMPI project would be to use the 
</span><br>
<span class="quotelev1">&gt; ft_event framework. Therefore I added another opal_crs_state_type_t 
</span><br>
<span class="quotelev1">&gt; OPAL_CRS_PAUSE in crs/crs.h and tried to trigger the event in 
</span><br>
<span class="quotelev1">&gt; orted_comm.c with:
</span><br>
<p><span class="quotelev1">&gt; if( NULL != orte_ess.ft_event ) {
</span><br>
<span class="quotelev1">&gt;     if( ORTE_SUCCESS != (ret = orte_ess.ft_event(OPAL_CRS_PAUSE))) {
</span><br>
<span class="quotelev1">&gt;         goto CLEANUP;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<p><span class="quotelev1">&gt; But the ft_event() is NULL and therefore isn't executed...
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Previous message:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>In reply to:</strong> <a href="7293.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7295.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
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
