<?
$subject_val = "Re: [MTT devel] mtt reporter popups broken";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 12:53:30 2008" -->
<!-- isoreceived="20080110175330" -->
<!-- sent="Thu, 10 Jan 2008 12:53:26 -0500" -->
<!-- isosent="20080110175326" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt reporter popups broken" -->
<!-- id="142875F6-CF47-4D5A-B8AB-CCCC9CFD6810_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="256C4BFC-F5A4-47B1-AF4D-19E41FEE9BC8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt reporter popups broken<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 12:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed. This was a latent bug that my commit highlighted, but I didn't  
<br>
check for (Sorry). If mtt_body_html_suffix was non-null then the  
<br>
popups would not work. I just fixed this in r1133.
<br>
<p>-- Josh
<br>
<p>On Jan 10, 2008, at 12:26 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I notice that I can no longer get the MTT preferences/advanced popups
</span><br>
<span class="quotelev1">&gt; anymore in Safari.  They were working earlier this morning -- did
</span><br>
<span class="quotelev1">&gt; Josh's commit break something, perchance?
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
<span class="quotelev1">&gt; mtt-devel mailing list
</span><br>
<span class="quotelev1">&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<li><strong>Previous message:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<li><strong>In reply to:</strong> <a href="0215.php">Jeff Squyres: "[MTT devel] mtt reporter popups broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
<li><strong>Reply:</strong> <a href="0217.php">Jeff Squyres: "Re: [MTT devel] mtt reporter popups broken"</a>
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
