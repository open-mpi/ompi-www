<?
$subject_val = "Re: [hwloc-devel] hwloc 0.9.2 autogen issue";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 14:56:34 2009" -->
<!-- isoreceived="20091105195634" -->
<!-- sent="Thu, 5 Nov 2009 14:56:30 -0500" -->
<!-- isosent="20091105195630" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc 0.9.2 autogen issue" -->
<!-- id="403A0272-A73E-4B77-9FB5-2AD0F0822328_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="13436E2A-8987-4AFF-BB97-0EB1143F2929_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 14:56:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, I see the issue.  Apply the attached patch and see if that works  
<br>
for you.
<br>
<p>I'd prefer not to do another release today, if possible.  ;-)
<br>
<p><p>On Nov 5, 2009, at 2:50 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; (re-subjected to be accurate)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice that my autogen.sh outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal -I m4 --force -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but yours outputs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; autoreconf: running: aclocal --force -I config
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where's the &quot;-I m4&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ....ah, I see you're running AC 2.63.  I'm running AC 2.64.  I just
</span><br>
<span class="quotelev1">&gt; tried with AC 2.63 and I see the same problem.  Lemme see if I can get
</span><br>
<span class="quotelev1">&gt; a workaround.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0346/ac263.patch">ac263.patch</a>
</ul>
<!-- attachment="ac263.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Previous message:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>In reply to:</strong> <a href="0345.php">Jeff Squyres: "[hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
<li><strong>Reply:</strong> <a href="0347.php">Pavan Balaji: "Re: [hwloc-devel] hwloc 0.9.2 autogen issue"</a>
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
