<?
$subject_val = "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 13 08:31:39 2008" -->
<!-- isoreceived="20081013123139" -->
<!-- sent="Mon, 13 Oct 2008 08:31:30 -0400" -->
<!-- isosent="20081013123130" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful" -->
<!-- id="3A64DB59-ACB1-4951-811A-0361A0733816_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="87ljwvkyb9.fsf_at_inbox.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-13 08:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 11, 2008, at 10:20 AM, Aleksej Saushev wrote:
<br>
<p><span class="quotelev1">&gt; $ ompi_info | grep oob
</span><br>
<span class="quotelev1">&gt;                 MCA oob: tcp (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                 MCA rml: oob (MCA v1.0, API v1.0, Component v1.2.7)
</span><br>
<p>Good!
<br>
<p><span class="quotelev2">&gt;&gt; Is there a chance that there's some dependent library of oob_rml
</span><br>
<span class="quotelev2">&gt;&gt; that  is available on your head/build node, but not available on
</span><br>
<span class="quotelev2">&gt;&gt; your back-
</span><br>
<span class="quotelev2">&gt;&gt; end nodes?  (that would be pretty odd, though)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Very unlikely. Unless you don't install it at &quot;make install&quot; time,
</span><br>
<span class="quotelev1">&gt; it is there. Host and target are the same (identical).
</span><br>
<span class="quotelev1">&gt; Any particular library (set of libraries) to check?
</span><br>
<p>Actually, the output below seems to indicate that the modules are  
<br>
being *loaded* ok, but they're declining to run for some reason.  So I  
<br>
think we can rule out the dependent libraries issue.
<br>
<p><span class="quotelev2">&gt;&gt; $ mpirun --mca rml_base_debug 100 -np 2 skosfile
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: Looking for rml  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: distilling rml  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: accepting all rml  
</span><br>
<span class="quotelev1">&gt; components
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: opening rml components
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: found loaded  
</span><br>
<span class="quotelev1">&gt; component oob
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] mca: base: components_open: component oob open  
</span><br>
<span class="quotelev1">&gt; function successful
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] orte_rml_base_select: initializing rml component  
</span><br>
<span class="quotelev1">&gt; oob
</span><br>
<span class="quotelev1">&gt; [asau.local:09060] orte_rml_base_select: init returned failure
</span><br>
<p>Ah ha -- this is progress.  For some reason, your &quot;oob&quot; RML plugin is  
<br>
declining to run.  I see that its query/initialization function is  
<br>
actually quite short:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(mca_oob_base_init() != ORTE_SUCCESS)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*priority = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return &amp;orte_rml_oob_module;
<br>
<p>So it must be failing the mca_oob_base_init() function -- this is what  
<br>
initializes the underling &quot;OOB&quot; (out of band) communications subsystem.
<br>
<p>Of course, this doesn't fail often, so we don't have any run-time  
<br>
switches to enable the debugging output.  :-(  Edit orte/mca/oob/base/ 
<br>
oob_base_open.c line 43 and change the value of mca_oob_base_output  
<br>
from -1 to 0.  Let's see that output -- I'm particularly interested in  
<br>
the output from querying the tcp oob component.  I suspect that it's  
<br>
declining to run as well.
<br>
<p>I wonder if this is going to end up being an opal_if() issue -- where  
<br>
we are traversing all the IP network interfaces from the kernel...   
<br>
I'll bet even money that it is.
<br>
<p>Specifically: I predict that the tcp oob component is declining to run  
<br>
(which then causes the greater OOB init to fail, because no OOB  
<br>
components will be able to be found, which then causes the RML OOB  
<br>
init to fail, and therefore RML init fails because no RML components  
<br>
can be found).  My guess is that orte/mca/oob/tcp/ 
<br>
oob_tcp.c:oob_tcp_component_init() is failing to find any valid/UP IP  
<br>
interfaces.  It starts traversing the list of interfaces at line 864  
<br>
with the call to opal_ifbegin() (&quot;OPAL&quot; is our underlying portability  
<br>
layer).  If this was the first time opal_ifbegin() was invoked, it'll  
<br>
scan the kernel for all the interfaces; otherwise it'll just traverse  
<br>
the list that it already has.  Either way, you might want to run this  
<br>
section through a debugger and see if it's not finding anything.
<br>
<p>Just an offhand question: do you have non-localhost IPv4 interfaces  
<br>
enabled on your machines?
<br>
<p><span class="quotelev3">&gt;&gt;&gt; That's also odd.  I don't see any problems in the source code in
</span><br>
<span class="quotelev2">&gt;&gt; this  particular area.  What is the output of this area of the
</span><br>
<span class="quotelev2">&gt;&gt; code when  compiled with -E?  It should show some obvious
</span><br>
<span class="quotelev2">&gt;&gt; problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll check this a bit later, if you don't object.
</span><br>
<p><p>No problem.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6964.php">Sean Davis: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>Previous message:</strong> <a href="6962.php">Jeff Squyres: "Re: [OMPI users] Rmpi installation issues"</a>
<li><strong>In reply to:</strong> <a href="6953.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
<li><strong>Reply:</strong> <a href="7004.php">Aleksej Saushev: "Re: [OMPI users] OpenMPI portability problems: debug info isn't helpful"</a>
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
