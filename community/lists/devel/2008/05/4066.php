<?
$subject_val = "Re: [OMPI devel] Communication between entities";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 09:45:40 2008" -->
<!-- isoreceived="20080529134540" -->
<!-- sent="Thu, 29 May 2008 07:45:27 -0600" -->
<!-- isosent="20080529134527" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication between entities" -->
<!-- id="C4640F97.D9BA%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="483EB29C.9010801_at_aomail.uab.es" -->
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
<strong>Date:</strong> 2008-05-29 09:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4067.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4065.php">Leonardo Fialho: "[OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4065.php">Leonardo Fialho: "[OMPI devel] Communication between entities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Reply:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no way to send a message to a daemon located on another node
<br>
without relaying it through the local daemon. The application procs have no
<br>
knowledge of the contact info for any daemon other than their own, so even
<br>
using the direct routed module would not work.
<br>
<p>Can you provide some reason why the normal relay is unacceptable? And why
<br>
the PML would want to communicate with a daemon, which, after all, is -not-
<br>
an MPI process and has no idea what a PML is?
<br>
<p><p>On 5/29/08 7:41 AM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If, inside a PML component I need to send a message to the ORTE daemon
</span><br>
<span class="quotelev1">&gt; located in other node, how can I do it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It&#180;s safe to create a thread to manage this communication independently
</span><br>
<span class="quotelev1">&gt; or Open MPI have any service to do it (like RML in ORTE environment)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I saw a socket connection between the application and the local ORTE
</span><br>
<span class="quotelev1">&gt; daemon, but I don&#180;t want to send the message to local ORTE daemon an
</span><br>
<span class="quotelev1">&gt; then it send the same message to que remote ORTE daemon...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4067.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>Previous message:</strong> <a href="4065.php">Leonardo Fialho: "[OMPI devel] Communication between entities"</a>
<li><strong>In reply to:</strong> <a href="4065.php">Leonardo Fialho: "[OMPI devel] Communication between entities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Reply:</strong> <a href="4068.php">Leonardo Fialho: "Re: [OMPI devel] Communication between entities"</a>
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
