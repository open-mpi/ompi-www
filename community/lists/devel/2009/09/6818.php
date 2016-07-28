<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 08:45:31 2009" -->
<!-- isoreceived="20090910124531" -->
<!-- sent="Thu, 10 Sep 2009 08:45:26 -0400" -->
<!-- isosent="20090910124526" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="090B7E18-340C-4F14-9E1A-84757BA5439F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B1227FA0-B12D-48A2-8C30-27FB6308AB59_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 08:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6817.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thinking about this a little more ...
<br>
<p>This all seems like Open MPI-specific functionality for Eclipse.  If  
<br>
that's the case, don't we have an ORTE tools communication library  
<br>
that could be used?  IIRC, it pretty much does exactly what you want  
<br>
and would be far less clumsy than trying to jury-rig sending XML down  
<br>
files/fd's/whatever.  I have dim recollections of the ORTE tools  
<br>
communication library API returning the data that you have asked for  
<br>
in data structures -- no parsing of XML at all (and, more importantly  
<br>
to us, no need to add all kinds of special code paths for wrapping our  
<br>
output in XML).
<br>
<p>If I'm right (and that's a big &quot;if&quot;!), is there a reason that this  
<br>
library is not attractive to you?
<br>
<p><p><p><p>On Sep 10, 2009, at 8:04 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 9, 2009, at 12:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmmm....I never considered the possibility of output-filename being
</span><br>
<span class="quotelev2">&gt;&gt; used that way. Interesting idea!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That feels way weird to me -- for example, how do you know that  
</span><br>
<span class="quotelev1">&gt; you're actually outputting to a tty?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: +1 on the idea of writing to numbered fd's passed on the  
</span><br>
<span class="quotelev1">&gt; command line.  It just &quot;feels&quot; like a more POSIX-ish way of doing  
</span><br>
<span class="quotelev1">&gt; things...?  I guess I'm surprised that that would be difficult to do  
</span><br>
<span class="quotelev1">&gt; from Java.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6817.php">Thomas Ropars: "Re: [OMPI devel] application hangs with multiple dup"</a>
<li><strong>In reply to:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
