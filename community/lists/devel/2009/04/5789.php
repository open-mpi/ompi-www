<?
$subject_val = "Re: [OMPI devel] event library";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 09:10:34 2009" -->
<!-- isoreceived="20090403131034" -->
<!-- sent="Fri, 3 Apr 2009 09:10:27 -0400" -->
<!-- isosent="20090403131027" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] event library" -->
<!-- id="24B7BE18-CCF9-4792-818B-0D7E95B12765_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f6ed2720904030336u6e53cfd5k3fc2184bca7ec564_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] event library<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 09:10:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5790.php">Eugene Loh: "[OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5788.php">Timothy Hayes: "Re: [OMPI devel] event library"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Timothy Hayes: "Re: [OMPI devel] event library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correct.  We use the event library (a customized drop of libevent) for  
<br>
three main things:
<br>
<p>1. monitoring file descriptors
<br>
2. scheduling timed callbacks (i.e., you can set a callback to fire at  
<br>
some point in the future)
<br>
3. monitoring signals
<br>
<p>You can register a callback to occur when these events happen.  For  
<br>
signals, your callback will be called in regular context, not signal  
<br>
context.
<br>
<p>Orte uses #2 heavily, for example, to &quot;schedule&quot; things to happen  
<br>
outside of the current context.  E.g., a message just arrived.  But we  
<br>
don't want to process it in the middle of a callback from the fd read  
<br>
event, so ORTE will schedule an event 0 seconds from now.  That  
<br>
callback will then occur from the &quot;top level&quot; and not create a nasty  
<br>
daisy chain of callbacks invoking callbacks.  And so on.
<br>
<p>Make sense?
<br>
<p><p>On Apr 3, 2009, at 6:36 AM, Timothy Hayes wrote:
<br>
<p><span class="quotelev1">&gt; Do you mean the code in OPAL/event? If so, it's a customised  
</span><br>
<span class="quotelev1">&gt; libevent. I've seen it used in OpenMPI to poll/select open sockets,  
</span><br>
<span class="quotelev1">&gt; it allows the programmer register their own callback functions for  
</span><br>
<span class="quotelev1">&gt; when this happens. Just ignore me if this wasn't what you were  
</span><br>
<span class="quotelev1">&gt; asking about though :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/4/3 Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; What is the purpose of the event library?  I'd happily RTFM if  
</span><br>
<span class="quotelev1">&gt; someone could point me in that direction!  :^)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm guessing it's to check occasionally for &quot;unexpected events&quot;, but  
</span><br>
<span class="quotelev1">&gt; if someone could confirm/deny and flesh that picture out a little,  
</span><br>
<span class="quotelev1">&gt; I'd appreciate it.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="5790.php">Eugene Loh: "[OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5788.php">Timothy Hayes: "Re: [OMPI devel] event library"</a>
<li><strong>In reply to:</strong> <a href="5788.php">Timothy Hayes: "Re: [OMPI devel] event library"</a>
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
