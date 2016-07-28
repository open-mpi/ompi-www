<?
$subject_val = "Re: [OMPI devel] Communication between entities";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 10:08:32 2008" -->
<!-- isoreceived="20080529140832" -->
<!-- sent="Thu, 29 May 2008 08:08:15 -0600" -->
<!-- isosent="20080529140815" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication between entities" -->
<!-- id="C46414EF.D9C1%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="483EB80B.1040401_at_aomail.uab.es" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Communication between entities<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 10:08:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see, thanks for the explanation!
<br>
<p>I'm afraid you'll have no choice, though, but to relay the message via the
<br>
local daemon. I know that creates a window of vulnerability, but it cannot
<br>
be helped.
<br>
<p>Passing full contact info for all daemons to all procs would take us back a
<br>
few steps and cause a whole lot of sockets to be opened...
<br>
<p><p>On 5/29/08 8:04 AM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to implement a receiver based message log (called RADIC
</span><br>
<span class="quotelev1">&gt; architecture) that stores the log file in another node (than no stable
</span><br>
<span class="quotelev1">&gt; storage is necessary).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I developed a wrapper to PML that manage the messages and then store it
</span><br>
<span class="quotelev1">&gt; locally (or in a stable storage), but now I need to migrate this &quot;log
</span><br>
<span class="quotelev1">&gt; file&quot; to other node. Only PML need this file (to generate and recovery
</span><br>
<span class="quotelev1">&gt; after a fail) but ORTE daemon store and manage the files to launch then
</span><br>
<span class="quotelev1">&gt; when one node dies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this approach ORTE daemon are treated like application &quot;protectors&quot;,
</span><br>
<span class="quotelev1">&gt; and the application are the &quot;protected&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Leonardo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph H Castain escribi&#243;:
</span><br>
<span class="quotelev2">&gt;&gt; There is no way to send a message to a daemon located on another node
</span><br>
<span class="quotelev2">&gt;&gt; without relaying it through the local daemon. The application procs have no
</span><br>
<span class="quotelev2">&gt;&gt; knowledge of the contact info for any daemon other than their own, so even
</span><br>
<span class="quotelev2">&gt;&gt; using the direct routed module would not work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you provide some reason why the normal relay is unacceptable? And why
</span><br>
<span class="quotelev2">&gt;&gt; the PML would want to communicate with a daemon, which, after all, is -not-
</span><br>
<span class="quotelev2">&gt;&gt; an MPI process and has no idea what a PML is?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 5/29/08 7:41 AM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If, inside a PML component I need to send a message to the ORTE daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; located in other node, how can I do it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It&#180;s safe to create a thread to manage this communication independently
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or Open MPI have any service to do it (like RML in ORTE environment)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I saw a socket connection between the application and the local ORTE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon, but I don&#180;t want to send the message to local ORTE daemon an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then it send the same message to que remote ORTE daemon...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4070.php">Roland Dreier: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
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
