<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 09:23:38 2009" -->
<!-- isoreceived="20090910132338" -->
<!-- sent="Thu, 10 Sep 2009 09:23:34 -0400" -->
<!-- isosent="20090910132334" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="E19DC185-7DBD-4E21-B109-338023D4AD24_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="090B7E18-340C-4F14-9E1A-84757BA5439F_at_cisco.com" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 09:23:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6821.php">Markus Wittmann: "[OMPI devel] Error while writing more than 2GB data at once to file"</a>
<li><strong>Previous message:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The most appealing thing about the XML option is that it just works  
<br>
&quot;out of the box.&quot; Using a library API invariably requires compiling an  
<br>
agent or distributing pre-compiled binaries with all the associated  
<br>
complications. We tried that in the dim past and it was pretty  
<br>
unworkable. The other problem was that the API headers were not  
<br>
installed by default, so users were forced to install local copies of  
<br>
OMPI with development headers enabled. It was not a great end-user  
<br>
experience.
<br>
<p>Greg
<br>
<p>On Sep 10, 2009, at 8:45 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thinking about this a little more ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This all seems like Open MPI-specific functionality for Eclipse.  If  
</span><br>
<span class="quotelev1">&gt; that's the case, don't we have an ORTE tools communication library  
</span><br>
<span class="quotelev1">&gt; that could be used?  IIRC, it pretty much does exactly what you want  
</span><br>
<span class="quotelev1">&gt; and would be far less clumsy than trying to jury-rig sending XML  
</span><br>
<span class="quotelev1">&gt; down files/fd's/whatever.  I have dim recollections of the ORTE  
</span><br>
<span class="quotelev1">&gt; tools communication library API returning the data that you have  
</span><br>
<span class="quotelev1">&gt; asked for in data structures -- no parsing of XML at all (and, more  
</span><br>
<span class="quotelev1">&gt; importantly to us, no need to add all kinds of special code paths  
</span><br>
<span class="quotelev1">&gt; for wrapping our output in XML).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I'm right (and that's a big &quot;if&quot;!), is there a reason that this  
</span><br>
<span class="quotelev1">&gt; library is not attractive to you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 10, 2009, at 8:04 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2009, at 12:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm....I never considered the possibility of output-filename being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used that way. Interesting idea!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That feels way weird to me -- for example, how do you know that  
</span><br>
<span class="quotelev2">&gt;&gt; you're actually outputting to a tty?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: +1 on the idea of writing to numbered fd's passed on the  
</span><br>
<span class="quotelev2">&gt;&gt; command line.  It just &quot;feels&quot; like a more POSIX-ish way of doing  
</span><br>
<span class="quotelev2">&gt;&gt; things...?  I guess I'm surprised that that would be difficult to  
</span><br>
<span class="quotelev2">&gt;&gt; do from Java.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6821.php">Markus Wittmann: "[OMPI devel] Error while writing more than 2GB data at once to file"</a>
<li><strong>Previous message:</strong> <a href="6819.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6823.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
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
