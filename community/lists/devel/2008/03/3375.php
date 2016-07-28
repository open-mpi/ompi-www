<?
$subject_val = "Re: [OMPI devel] Vprotocol warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 09:58:31 2008" -->
<!-- isoreceived="20080305145831" -->
<!-- sent="Wed, 5 Mar 2008 09:58:22 -0500" -->
<!-- isosent="20080305145822" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Vprotocol warnings" -->
<!-- id="E82C7B07-FA45-4134-B079-EB6096530BE2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3F40185.C867%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Vprotocol warnings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 09:58:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<li><strong>In reply to:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Reply:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just mailed those to Aurelien from the MTT output as well.  :-)
<br>
<p><p>On Mar 5, 2008, at 9:51 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Not sure who is handling vprotocol, but here are some warnings I'm  
</span><br>
<span class="quotelev1">&gt; seeing on
</span><br>
<span class="quotelev1">&gt; the trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_request.c: In function
</span><br>
<span class="quotelev1">&gt; 'mca_vprotocol_pessimist_request_free':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_request.c:41: warning: format '%u' expects type
</span><br>
<span class="quotelev1">&gt; 'unsigned int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_recv.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_vprotocol_pessimist_irecv':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_recv.c:31: warning: format '%u' expects type  
</span><br>
<span class="quotelev1">&gt; 'unsigned
</span><br>
<span class="quotelev1">&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_recv.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_vprotocol_pessimist_recv':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_recv.c:58: warning: format '%u' expects type  
</span><br>
<span class="quotelev1">&gt; 'unsigned
</span><br>
<span class="quotelev1">&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_send.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_vprotocol_pessimist_isend':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_send.c:27: warning: format '%u' expects type  
</span><br>
<span class="quotelev1">&gt; 'unsigned
</span><br>
<span class="quotelev1">&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_send.c: In function  
</span><br>
<span class="quotelev1">&gt; 'mca_vprotocol_pessimist_send':
</span><br>
<span class="quotelev1">&gt; vprotocol_pessimist_send.c:49: warning: format '%u' expects type  
</span><br>
<span class="quotelev1">&gt; 'unsigned
</span><br>
<span class="quotelev1">&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just an FYI
</span><br>
<span class="quotelev1">&gt; Ralph
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<li><strong>In reply to:</strong> <a href="3374.php">Ralph H Castain: "[OMPI devel] Vprotocol warnings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Reply:</strong> <a href="3376.php">Aurélien Bouteiller: "Re: [OMPI devel] Vprotocol warnings"</a>
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
