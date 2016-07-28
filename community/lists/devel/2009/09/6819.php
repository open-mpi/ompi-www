<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 09:18:15 2009" -->
<!-- isoreceived="20090910131815" -->
<!-- sent="Thu, 10 Sep 2009 09:18:11 -0400" -->
<!-- isosent="20090910131811" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="C99612E2-AF83-4B50-BD3A-70882B2225B6_at_computer.org" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 09:18:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>The problem is that I'm not running the command from java (which has  
<br>
it's own issues), but rather the command is started by the ssh shell/ 
<br>
exec service. Unfortunately ssh only provides stdin, stdout, and  
<br>
stderr forwarding on fd's 0-2. There is no mechanism to do anything  
<br>
else. It would be possible to use a socket to tunnel over the ssh  
<br>
connection, but this seems overly complicated. Fortunately I know that  
<br>
the shell is connected to /dev/tty, so sending to this device should  
<br>
work consistently.
<br>
<p>I guess ideally what I need is a -turn-off-all-stdout-and-stderr-but- 
<br>
leave-xml-output-alone option :-)
<br>
<p>Regards,
<br>
Greg
<br>
<p>On Sep 10, 2009, at 8:04 AM, Jeff Squyres wrote:
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
<li><strong>Next message:</strong> <a href="6820.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Previous message:</strong> <a href="6818.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6816.php">Jeff Squyres: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/08/6732.php">Chris Samuel: "Re: [OMPI devel] XML request"</a>
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
