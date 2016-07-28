<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 27 22:19:51 2011" -->
<!-- isoreceived="20111128031951" -->
<!-- sent="Mon, 28 Nov 2011 11:19:28 +0800" -->
<!-- isosent="20111128031928" -->
<!-- name="Pavan Balaji" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="4ED2FDC0.2030802_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AF3340F.3080802_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc 0.9.2 autogen issue<br>
<strong>From:</strong> Pavan Balaji (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-27 22:19:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2548.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3990)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
[reviving an ancient email thread]
<br>
<p>I was poking around with hwloc-1.3 on an old machine I had, and I ran 
<br>
into the below problem again. I remembered sending an email about it, so 
<br>
I dug in my archives to find this email; again the problem was 
<br>
autoconf-2.63. The Makefile.am patch that Jeff provided below seems to 
<br>
have been reverted in the current version of hwloc.
<br>
<p>You should consider either updating hwloc's autoconf prereq to 2.64 or 
<br>
fixing this. Btw, updating the prereq won't really help in this case 
<br>
(the error happens at autogen.sh time), but the prereq should still be 
<br>
accurate, IMO.
<br>
<p>&nbsp;&nbsp;-- Pavan
<br>
<p>On 11/06/2009 04:22 AM, Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks. That worked.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/05/2009 01:56 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I see the issue.  Apply the attached patch and see if that works for
</span><br>
<span class="quotelev2">&gt;&gt; you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd prefer not to do another release today, if possible.  ;-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 5, 2009, at 2:50 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (re-subjected to be accurate)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I notice that my autogen.sh outputs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: aclocal -I m4 --force -I config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but yours outputs:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoreconf: running: aclocal --force -I config
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where's the &quot;-I m4&quot;?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....ah, I see you're running AC 2.63.  I'm running AC 2.64.  I just
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tried with AC 2.63 and I see the same problem.  Lemme see if I can get
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Pavan Balaji
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="2548.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3990)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2009/11/0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="2550.php">Brice Goglin: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
