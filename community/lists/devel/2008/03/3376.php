<?
$subject_val = "Re: [OMPI devel] Vprotocol warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 11:10:48 2008" -->
<!-- isoreceived="20080305161048" -->
<!-- sent="Wed, 5 Mar 2008 11:10:41 -0500" -->
<!-- isosent="20080305161041" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Vprotocol warnings" -->
<!-- id="3E63A30E-15C6-454A-8926-6273B322D059_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E82C7B07-FA45-4134-B079-EB6096530BE2_at_cisco.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 11:10:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Lenny Verkhovsky: "[OMPI devel] rankfile RMAPS component"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, I'm working on it right now :]
<br>
<p>Aurelien
<br>
Le 5 mars 08 &#224; 09:58, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; I just mailed those to Aurelien from the MTT output as well.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 5, 2008, at 9:51 AM, Ralph H Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure who is handling vprotocol, but here are some warnings I'm
</span><br>
<span class="quotelev2">&gt;&gt; seeing on
</span><br>
<span class="quotelev2">&gt;&gt; the trunk:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_request.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_vprotocol_pessimist_request_free':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_request.c:41: warning: format '%u' expects type
</span><br>
<span class="quotelev2">&gt;&gt; 'unsigned int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_recv.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_vprotocol_pessimist_irecv':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_recv.c:31: warning: format '%u' expects type
</span><br>
<span class="quotelev2">&gt;&gt; 'unsigned
</span><br>
<span class="quotelev2">&gt;&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_recv.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_vprotocol_pessimist_recv':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_recv.c:58: warning: format '%u' expects type
</span><br>
<span class="quotelev2">&gt;&gt; 'unsigned
</span><br>
<span class="quotelev2">&gt;&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_send.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_vprotocol_pessimist_isend':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_send.c:27: warning: format '%u' expects type
</span><br>
<span class="quotelev2">&gt;&gt; 'unsigned
</span><br>
<span class="quotelev2">&gt;&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_send.c: In function
</span><br>
<span class="quotelev2">&gt;&gt; 'mca_vprotocol_pessimist_send':
</span><br>
<span class="quotelev2">&gt;&gt; vprotocol_pessimist_send.c:49: warning: format '%u' expects type
</span><br>
<span class="quotelev2">&gt;&gt; 'unsigned
</span><br>
<span class="quotelev2">&gt;&gt; int', but argument 6 has type 'size_t'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just an FYI
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3377.php">Lenny Verkhovsky: "[OMPI devel] rankfile RMAPS component"</a>
<li><strong>Previous message:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>In reply to:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
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
