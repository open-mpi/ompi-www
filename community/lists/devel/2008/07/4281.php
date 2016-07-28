<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 09:27:59 2008" -->
<!-- isoreceived="20080707132759" -->
<!-- sent="Mon, 7 Jul 2008 15:27:46 +0200 (CEST)" -->
<!-- isosent="20080707132746" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="Pine.LNX.4.64.0807071520490.31059_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4870F574.5060806_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] open ib dependency question<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 09:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, 6 Jul 2008, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I added patch to the ticked, please review.
</span><br>
<p>The patch works for me when applied to 1.3a1r18769. After running 
<br>
configure with '--disable-openib-ibcm' linking to libibcm.so was 
<br>
disabled, so no more error messages appear at job start-up. The RDMACM 
<br>
components are missing in my setup, so I can't test that part of the 
<br>
patch.
<br>
<p>Thanks !
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pasha.
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Ok:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      <a href="https://svn.open-mpi.org/trac/ompi/ticket/1375">https://svn.open-mpi.org/trac/ompi/ticket/1375</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I think any of us could do this -- it's pretty straightforward.  No
</span><br>
<span class="quotelev2">&gt;&gt;  guarantees on when I can get to it; my 1.3 list is already pretty long...
</span><br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8869/8240, Fax: +49 6221 54 8868/8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4282.php">Ralph H Castain: "[OMPI devel] Ticket #1267 - thread locks in ompi_proc_t code"</a>
<li><strong>Previous message:</strong> <a href="4280.php">Jeff Squyres: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>In reply to:</strong> <a href="4278.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4276.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
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
