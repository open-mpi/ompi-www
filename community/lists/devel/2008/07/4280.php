<?
$subject_val = "Re: [OMPI devel] open ib dependency question";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  7 08:26:58 2008" -->
<!-- isoreceived="20080707122658" -->
<!-- sent="Mon, 7 Jul 2008 08:26:48 -0400" -->
<!-- isosent="20080707122648" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] open ib dependency question" -->
<!-- id="9158A315-C47E-4B59-8BA8-7F4F21816C5B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4870F372.9040405_at_dev.mellanox.co.il" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-07 08:26:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4281.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>In reply to:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2008, at 12:31 PM, Pavel Shamis (Pasha) wrote:
<br>
<p><span class="quotelev1">&gt; I see the same issue on my Mellanox OFED 1.3. IBCM module is loaded  
</span><br>
<span class="quotelev1">&gt; but is no such device in system.
</span><br>
<span class="quotelev1">&gt; Jeff, looks like some bug in IBCM stuff... (not ompi)
</span><br>
<p>This is likely related to:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://bugs.openfabrics.org/show_bug.cgi?id=963">https://bugs.openfabrics.org/show_bug.cgi?id=963</a>
<br>
<p><span class="quotelev1">&gt; I think we should print the error only if  ibcm  was  explicitly  
</span><br>
<span class="quotelev1">&gt; selected by user. But from the cpc level it is no way to know
</span><br>
<span class="quotelev1">&gt; about explicit selection....Maybe just hide the print ?
</span><br>
<p>Yes, this is unfortunately a good idea.  I'll slightly amend the idea  
<br>
-- how about only printing that warning if the ibcm cpc was explicitly  
<br>
requested?  Specifically, pseudocode can be like this:
<br>
<p>&nbsp;&nbsp;&nbsp;if (device_does_not_exist) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (ibcm_was_specifically_requested) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BTL_ERROR((...));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return NULL;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
<p>Pasha -- do you want to open a ticket?
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
<li><strong>Next message:</strong> <a href="4281.php">Bogdan Costescu: "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Previous message:</strong> <a href="4279.php">Patrick Geoffray: "Re: [OMPI devel] RFC: make mpi_leave_pinned=1 the default"</a>
<li><strong>In reply to:</strong> <a href="4277.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
<li><strong>Reply:</strong> <a href="4289.php">Pavel Shamis (Pasha): "Re: [OMPI devel] open ib dependency question"</a>
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
