<?
$subject_val = "Re: [OMPI devel] Howto pause BTL's sending at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  8 15:22:28 2010" -->
<!-- isoreceived="20100108202228" -->
<!-- sent="Fri, 08 Jan 2010 10:19:02 +0100" -->
<!-- isosent="20100108091902" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Howto pause BTL's sending at runtime" -->
<!-- id="4B46F886.7010101_at_upb.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15357_1262699882_1NS9v6-0004YB-3m_4B434514.3070605_at_upb.de" -->
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
<strong>Date:</strong> 2010-01-08 04:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7296.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - sorry for spamming"</a>
<li><strong>Previous message:</strong> <a href="7294.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="7277.php">Christoph Konersmann: "[OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, but somehow the mailscanner doesn't like the sourcecode...
<br>
Changed now.
<br>
<p>Hi again,
<br>
<p>Maybe I should give more specific information with some code snippets...
<br>
Currently I added the definition ORTE_DAEMON_BTL_CTL_CMD 
<br>
(orte_daemon_cmd_flag_t) 26 to odls_types.h to identify if I want to 
<br>
trigger the BTL pause.
<br>
<p>In process_commands() of orted/orted_comm.c this flag is processed first 
<br>
by broadcasting to all orteds with xcast of the grpcomm framework. At 
<br>
second it's forwarded with orte_odls.deliver_message to the local procs. 
<br>
&nbsp;&nbsp;So every process should get the trigger. Or is there another possibly 
<br>
easier way of spawning the trigger?
<br>
<p>I expanded the mca_btl_base_module_t in btl/btl.h simply with an 
<br>
indicator (btl_paused) if pause is set.
<br>
<p>I then added a line to the initial values in every BTL component that 
<br>
btl_paused should be false by default. E.g. in self/btl_self.c.
<br>
Or did I forget something?
<br>
<p>So my problem is now, when every process gets the trigger in the ORTE 
<br>
project, how could I set btl-&gt;paused to true in OMPI project? ORTE has 
<br>
not (and I know it should not) have access to the OMPI components. Is 
<br>
there a way of implementing a libevent callback function in the BTL 
<br>
modules? Or is there another way? I already read the documentation at 
<br>
your wiki-site, but for me it's not really trivial as I'm relatively new 
<br>
to this.
<br>
<p>An idea to get the connection to the OMPI project would be to use the 
<br>
ft_event framework. Therefore I added another opal_crs_state_type_t 
<br>
OPAL_CRS_PAUSE in crs/crs.h and tried to trigger the event in 
<br>
orted_comm.c with orte_ess.ft_event(OPAL_CRS_PAUSE), but the ft_event() 
<br>
is NULL and therefore isn't executed...
<br>
<p>Any ideas? Any advices?
<br>
<p>For me the performance impact of a solution is of no interest.
<br>
<p>Thanks, and please excuse me if I bother you with this.
<br>
<p>Christoph
<br>
<p>Christoph Konersmann schrieb:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to implement a method to pause all BTL's sending packets to 
</span><br>
<span class="quotelev1">&gt; their destinations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently I added a state variable to orte_process_info which will be 
</span><br>
<span class="quotelev1">&gt; changed with an external program through process_commands() in 
</span><br>
<span class="quotelev1">&gt; orte/orted/orted_comm.c (I hope it's processed globaly not locally). 
</span><br>
<span class="quotelev1">&gt; While this state is changed to something defined as PAUSE, I want the 
</span><br>
<span class="quotelev1">&gt; send_methods in PML-Layer to be halted omitting any network traffic. By 
</span><br>
<span class="quotelev1">&gt; now it's not working, cause the PML-Layer does not see the state change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another way would be to use a libevent thread on the bml/pml-level. I've 
</span><br>
<span class="quotelev1">&gt; read that this library is already supported/implemented, or am I wrong? 
</span><br>
<span class="quotelev1">&gt; How would I use libevent in this context? Does somebody have an example 
</span><br>
<span class="quotelev1">&gt; or hint? Or should I use the fault tolerance framework for this purpose?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help would be appreciated. thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Paderborn Center for Parallel Computing - PC2
University of Paderborn - Germany
<a href="http://www.pc2.de">http://www.pc2.de</a>
Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7296.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime - sorry for spamming"</a>
<li><strong>Previous message:</strong> <a href="7294.php">Christoph Konersmann: "Re: [OMPI devel] Howto pause BTL's sending at runtime"</a>
<li><strong>Maybe in reply to:</strong> <a href="7277.php">Christoph Konersmann: "[OMPI devel] Howto pause BTL's sending at runtime"</a>
<!-- nextthread="start" -->
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
