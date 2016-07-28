<?
$subject_val = "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  5 14:59:23 2010" -->
<!-- isoreceived="20100305195923" -->
<!-- sent="Fri, 5 Mar 2010 12:59:13 -0700" -->
<!-- isosent="20100305195913" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Adding error/verbose messages to the TCP BTL" -->
<!-- id="91479305-EB12-4E19-B9F0-18F88D56DAB3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F7381161-CDF2-431C-BEAC-B6401C6D3A01_at_cisco.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-05 14:59:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 5, 2010, at 12:55 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 5, 2010, at 2:34 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Being user friendly is good, being way too user friendly is less (but I guess this is the price we have to pay for a production-quality code isn't it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Agreed.  None of these messages appear except in error cases or if you crank up the verbosity.  The use case for this was a user (more than one, actually) who had problems with the TCP BTL deciding not to connect to peers for some reason.  But there was no way to know exactly what the BTL was *trying* to do -- all you got was (effectively), &quot;Sorry, I couldn't connect.&quot;  So the main impetus for this was to give some visibility into what the TCP BTL is doing when it tries to connect -- you can see if it's trying to use private IP addresses by mistake, or somesuch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have few comments:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - In several places you replaced the BTL_ERROR (which was the way BTLs are supposed to complaints) by a call directly to orte_show_help. This presents several inconveniences: drifting away from something more or less consistent across all BTLs, adding more dependencies between the BTLs and ORTE.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have never found BTL_ERROR to be terribly helpful.  All it is is essentially an fprintf -- it doesn't propagate errors upward or anything.  I tend to prefer show_help because then you can provide a meaningful error message that way -- and duplicate messages are not displayed (which many people have told me that they love that feature).  BTL_ERROR just guarantees that the user will have to email us to figure out what's going on because the messages aren't meaningful to anyone other than an OMPI developer.
</span><br>
<p>I'm not sure I understand this concern either, especially the latter one about orte dependency. There already are 5 calls to orte_show_help in this btl, along with several references to orte_process_info and other orte elements. What harm is done by adding more calls to orte_show_help?
<br>
<p>I better understand the BTL_ERROR issue, but it raises the question as to whether BTL_ERROR should be defined as an orte_show_help call. That might help reduce the flood of duplicate messages when an error occurs.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - There are a lot of places where you just indented the code or split a medium-sized line into several lines. I find the code more difficult to read.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ja; I did re-intent some code because I found it hard to read the super-long lines while trying to figure out the TCP BTL code.  Sorry about that.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You do the same thing sometimes, too.  ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Previous message:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>In reply to:</strong> <a href="7550.php">Jeff Squyres: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
<li><strong>Reply:</strong> <a href="7552.php">George Bosilca: "Re: [OMPI devel] Adding error/verbose messages to the TCP BTL"</a>
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
