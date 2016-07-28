<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:55:05 2010" -->
<!-- isoreceived="20100305195505" -->
<!-- sent="Fri, 5 Mar 2010 14:55:00 -0500" -->
<!-- isosent="20100305195500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="F7381161-CDF2-431C-BEAC-B6401C6D3A01_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D3BB793C-A20E-4353-A743-A0D51C5C20E1_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Adding error/verbose messages to the TCP BTL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:55:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7549.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 2:34 PM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Being user friendly is good, being way too user friendly is less (but I guess this is the price we have to pay for a production-quality code isn't it).
</span><br>
<p>Agreed.  None of these messages appear except in error cases or if you crank up the verbosity.  The use case for this was a user (more than one, actually) who had problems with the TCP BTL deciding not to connect to peers for some reason.  But there was no way to know exactly what the BTL was *trying* to do -- all you got was (effectively), &quot;Sorry, I couldn't connect.&quot;  So the main impetus for this was to give some visibility into what the TCP BTL is doing when it tries to connect -- you can see if it's trying to use private IP addresses by mistake, or somesuch.
<br>
<p><span class="quotelev1">&gt; I have few comments:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - In several places you replaced the BTL_ERROR (which was the way BTLs are supposed to complaints) by a call directly to orte_show_help. This presents several inconveniences: drifting away from something more or less consistent across all BTLs, adding more dependencies between the BTLs and ORTE.
</span><br>
<p>I have never found BTL_ERROR to be terribly helpful.  All it is is essentially an fprintf -- it doesn't propagate errors upward or anything.  I tend to prefer show_help because then you can provide a meaningful error message that way -- and duplicate messages are not displayed (which many people have told me that they love that feature).  BTL_ERROR just guarantees that the user will have to email us to figure out what's going on because the messages aren't meaningful to anyone other than an OMPI developer.
<br>
<p><span class="quotelev1">&gt; - There are a lot of places where you just indented the code or split a medium-sized line into several lines. I find the code more difficult to read.
</span><br>
<p>Ja; I did re-intent some code because I found it hard to read the super-long lines while trying to figure out the TCP BTL code.  Sorry about that.  
<br>
<p>You do the same thing sometimes, too.  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7549.php">Terry Dontje: "Re: [OMPI devel] Missing Symbol"</a>
<li><strong>In reply to:</strong> <a href="7546.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7551.php">Ralph Castain: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
