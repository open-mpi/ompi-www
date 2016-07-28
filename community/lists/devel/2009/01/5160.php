<?
$subject_val = "Re: [OMPI devel] 1.3 PML default choice";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:18:22 2009" -->
<!-- isoreceived="20090114011822" -->
<!-- sent="Tue, 13 Jan 2009 18:18:01 -0700" -->
<!-- isosent="20090114011801" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.3 PML default choice" -->
<!-- id="4B7E567A-A331-46DA-8618-37C8CB997DB8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496D3672.3010600_at_myri.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.3 PML default choice<br>
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:18:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 13, 2009, at 5:48 PM, Patrick Geoffray wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Gaah!  I specifically asked Patrick and George about this and they  
</span><br>
<span class="quotelev2">&gt;&gt; said that the README text was fine.  Grr...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I looked at that time, I vaguely remember that _both_ PMLs were  
</span><br>
<span class="quotelev1">&gt; initialized but CM was eventually used because it was the last one.  
</span><br>
<span class="quotelev1">&gt; It looked broken, but it worked in the end (MTL was used with CM  
</span><br>
<span class="quotelev1">&gt; PML). I don't know if that behavior changed since.
</span><br>
<p>I just tested 1.3rc4 with MX and it uses the btl by default.  The  
<br>
reason is the cm init lowers the priority to 1 unless the MTL that  
<br>
loaded is psm, in which case it stays at the higher default of 30.   
<br>
It's a fairly easy fix, I think.  But the last time this was discussed  
<br>
people in the group had objections to using the MTL by default with MX.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Previous message:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>In reply to:</strong> <a href="5156.php">Patrick Geoffray: "Re: [OMPI devel] 1.3 PML default choice"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5161.php">Jeff Squyres: "Re: [OMPI devel] 1.3 PML default choice"</a>
<li><strong>Reply:</strong> <a href="5162.php">George Bosilca: "Re: [OMPI devel] 1.3 PML default choice"</a>
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
