<?
$subject_val = "Re: [OMPI devel] Communication between entities";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 10:03:00 2008" -->
<!-- isoreceived="20080529140300" -->
<!-- sent="Thu, 29 May 2008 16:04:59 +0200" -->
<!-- isosent="20080529140459" -->
<!-- name="Leonardo Fialho" -->
<!-- email="lfialho_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Communication between entities" -->
<!-- id="483EB80B.1040401_at_aomail.uab.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4640F97.D9BA%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Leonardo Fialho (<em>lfialho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 10:04:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Previous message:</strong> <a href="4067.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4066.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Reply:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I want to implement a receiver based message log (called RADIC 
<br>
architecture) that stores the log file in another node (than no stable 
<br>
storage is necessary).
<br>
<p>I developed a wrapper to PML that manage the messages and then store it 
<br>
locally (or in a stable storage), but now I need to migrate this &quot;log 
<br>
file&quot; to other node. Only PML need this file (to generate and recovery 
<br>
after a fail) but ORTE daemon store and manage the files to launch then 
<br>
when one node dies.
<br>
<p>In this approach ORTE daemon are treated like application &quot;protectors&quot;, 
<br>
and the application are the &quot;protected&quot;.
<br>
<p>Thanks,
<br>
Leonardo
<br>
<p><p>Ralph H Castain escribi&#243;:
<br>
<span class="quotelev1">&gt; There is no way to send a message to a daemon located on another node
</span><br>
<span class="quotelev1">&gt; without relaying it through the local daemon. The application procs have no
</span><br>
<span class="quotelev1">&gt; knowledge of the contact info for any daemon other than their own, so even
</span><br>
<span class="quotelev1">&gt; using the direct routed module would not work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you provide some reason why the normal relay is unacceptable? And why
</span><br>
<span class="quotelev1">&gt; the PML would want to communicate with a daemon, which, after all, is -not-
</span><br>
<span class="quotelev1">&gt; an MPI process and has no idea what a PML is?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/29/08 7:41 AM, &quot;Leonardo Fialho&quot; &lt;lfialho_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If, inside a PML component I need to send a message to the ORTE daemon
</span><br>
<span class="quotelev2">&gt;&gt; located in other node, how can I do it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It&#180;s safe to create a thread to manage this communication independently
</span><br>
<span class="quotelev2">&gt;&gt; or Open MPI have any service to do it (like RML in ORTE environment)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I saw a socket connection between the application and the local ORTE
</span><br>
<span class="quotelev2">&gt;&gt; daemon, but I don&#180;t want to send the message to local ORTE daemon an
</span><br>
<span class="quotelev2">&gt;&gt; then it send the same message to que remote ORTE daemon...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;     
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
<p><p><pre>
-- 
Leonardo Fialho
Computer Architecture and Operating Systems Department - CAOS
Universidad Autonoma de Barcelona - UAB
ETSE, Edifcio Q, QC/3088
<a href="http://www.caos.uab.es">http://www.caos.uab.es</a>
Phone: +34-93-581-2888
Fax: +34-93-581-2478
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Previous message:</strong> <a href="4067.php">Jeff Squyres: "Re: [OMPI devel] RFC: Linuxes shipping libibverbs"</a>
<li><strong>In reply to:</strong> <a href="4066.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
<li><strong>Reply:</strong> <a href="4069.php">Ralph H Castain: "Re: [OMPI devel] Communication between entities"</a>
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
