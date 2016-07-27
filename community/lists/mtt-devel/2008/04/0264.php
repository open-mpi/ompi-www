<?
$subject_val = "Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 15:01:20 2008" -->
<!-- isoreceived="20080421190120" -->
<!-- sent="Mon, 21 Apr 2008 15:01:05 -0400" -->
<!-- isosent="20080421190105" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter" -->
<!-- id="1733C4F2-DC74-4AA9-B73C-BD06BA02DA86_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F924F65B-6F1A-4B7E-B724-69F1758E2814_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-21 15:01:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Josh Hursey: "[MTT devel] Tracking process stats"</a>
<li><strong>Previous message:</strong> <a href="0263.php">Josh Hursey: "Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter"</a>
<li><strong>In reply to:</strong> <a href="0263.php">Josh Hursey: "Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We tried that (along with the &quot;title&quot; attribute, too), but neither  
<br>
seemed to work.
<br>
<p>I suspect it's a security &quot;feature&quot; that Mail.app is showing you the  
<br>
URL.
<br>
<p>On Apr 21, 2008, at 2:57 PM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Isn't this just setting the 'alt' field of the &lt;a href&gt; tag? Even
</span><br>
<span class="quotelev1">&gt; without javascript this is just an HTML tooltip trick. I suspect that
</span><br>
<span class="quotelev1">&gt; Mail would know how to deal with this even if it has javascript turned
</span><br>
<span class="quotelev1">&gt; off.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would that be enough?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2008, at 2:50 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ethan and I played with this a bit more and it might not be workable.
</span><br>
<span class="quotelev2">&gt;&gt; See #355 for more details.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2008, at 2:06 PM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do these work for you?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://tinyurl.com/49m2n4">http://tinyurl.com/49m2n4</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; They work for me in IE (Windows) and Mozilla (Solaris), but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not in Firefox and Opera. The joys of JavaScript :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Apr/21/2008 01:32:49PM, MTT wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #355: tooltips for reporter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +--------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reporter:  jsquyres     |       Owner:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Type:  enhancement  |      Status:  new
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Priority:  major        |   Milestone:  v3.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Component:  Server side  |     Version:  trunk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Keywords:               |
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; +--------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Currently, when browsing the reporter, if you hover over a link in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reporter, the browser (or mail client) may show the entire URL of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hyperlink as a tooltip (see attached screenshot).  Is there a way
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to show
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something nicer / smaller?  In the attached screenshot, either no
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tooltip
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or a tooltip showing &quot;Drill down to all 1.2.7a.... results&quot; would
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be nice.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ticket URL: &lt;<a href="https://svn.open-mpi.org/trac/mtt/ticket/355">https://svn.open-mpi.org/trac/mtt/ticket/355</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MTT &lt;<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Issue tracking for the MPI Testing Tool.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; mtt-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-devel</a>
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0265.php">Josh Hursey: "[MTT devel] Tracking process stats"</a>
<li><strong>Previous message:</strong> <a href="0263.php">Josh Hursey: "Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter"</a>
<li><strong>In reply to:</strong> <a href="0263.php">Josh Hursey: "Re: [MTT devel] [MTT bugs] [MTT] #355: tooltips for reporter"</a>
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
