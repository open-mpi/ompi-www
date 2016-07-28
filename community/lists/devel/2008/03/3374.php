<?
$subject_val = "[OMPI devel] Vprotocol warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 09:51:45 2008" -->
<!-- isoreceived="20080305145145" -->
<!-- sent="Wed, 05 Mar 2008 07:51:33 -0700" -->
<!-- isosent="20080305145133" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Vprotocol warnings" -->
<!-- id="C3F40185.C867%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] Vprotocol warnings<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-05 09:51:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3373.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Reply:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure who is handling vprotocol, but here are some warnings I'm seeing on
<br>
the trunk:
<br>
<p>vprotocol_pessimist_request.c: In function
<br>
'mca_vprotocol_pessimist_request_free':
<br>
vprotocol_pessimist_request.c:41: warning: format '%u' expects type
<br>
'unsigned int', but argument 6 has type 'size_t'
<br>
vprotocol_pessimist_recv.c: In function 'mca_vprotocol_pessimist_irecv':
<br>
vprotocol_pessimist_recv.c:31: warning: format '%u' expects type 'unsigned
<br>
int', but argument 6 has type 'size_t'
<br>
vprotocol_pessimist_recv.c: In function 'mca_vprotocol_pessimist_recv':
<br>
vprotocol_pessimist_recv.c:58: warning: format '%u' expects type 'unsigned
<br>
int', but argument 6 has type 'size_t'
<br>
vprotocol_pessimist_send.c: In function 'mca_vprotocol_pessimist_isend':
<br>
vprotocol_pessimist_send.c:27: warning: format '%u' expects type 'unsigned
<br>
int', but argument 6 has type 'size_t'
<br>
vprotocol_pessimist_send.c: In function 'mca_vprotocol_pessimist_send':
<br>
vprotocol_pessimist_send.c:49: warning: format '%u' expects type 'unsigned
<br>
int', but argument 6 has type 'size_t'
<br>
<p><p>Just an FYI
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Previous message:</strong> <a href="3373.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Orte cleanup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
<li><strong>Reply:</strong> <a href="3375.php">Jeff Squyres: "Re: [OMPI devel] Vprotocol warnings"</a>
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
