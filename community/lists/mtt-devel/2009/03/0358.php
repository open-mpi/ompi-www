<?
$subject_val = "Re: [MTT devel] mtt text report oddity";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 07:45:15 2009" -->
<!-- isoreceived="20090319114515" -->
<!-- sent="Thu, 19 Mar 2009 07:45:06 -0400" -->
<!-- isosent="20090319114506" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] mtt text report oddity" -->
<!-- id="EE6F49D4-EB05-46D9-A1EF-D3D0D7F4CD96_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800903190019p31c5a8a2gff5bf3f6e99475f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [MTT devel] mtt text report oddity<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 07:45:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Mike Dubman: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Mike Dubman: "Re: [MTT devel] mtt text report oddity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2009, at 3:19 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt; because the results are rendered in chunks during reporting phase.  
</span><br>
<span class="quotelev1">&gt; (100 pieces every flush)
</span><br>
<span class="quotelev1">&gt; This caused same benchmark line to appear more then once in the  
</span><br>
<span class="quotelev1">&gt; final report.
</span><br>
<p>Ahhh... right.
<br>
<p><span class="quotelev1">&gt; You can configure the reporter to issue results not by number, but  
</span><br>
<span class="quotelev1">&gt; for same benchmark at once:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; put this in the ini file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [MTT]
</span><br>
<span class="quotelev1">&gt; submit_group_results=1
</span><br>
<p>Perfect.  Thanks!
<br>
<p><span class="quotelev1">&gt; Also, html report is nicer and allows you easy navigation to the  
</span><br>
<span class="quotelev1">&gt; errors
</span><br>
<p>True, but my HTML files kept getting overwritten by successive submits  
<br>
in this case.
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
<li><strong>Next message:</strong> <a href="0359.php">Jeff Squyres: "Re: [MTT devel] GSOC application"</a>
<li><strong>Previous message:</strong> <a href="0357.php">Mike Dubman: "Re: [MTT devel] mtt text report oddity"</a>
<li><strong>In reply to:</strong> <a href="0357.php">Mike Dubman: "Re: [MTT devel] mtt text report oddity"</a>
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
