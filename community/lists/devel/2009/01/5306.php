<?
$subject_val = "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 14:11:59 2009" -->
<!-- isoreceived="20090126191159" -->
<!-- sent="Mon, 26 Jan 2009 14:11:53 -0500" -->
<!-- isosent="20090126191153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols" -->
<!-- id="D4498808-8843-4133-906A-3ADA5217C288_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="692B042C-CB13-4526-924A-2D98D32087FE_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 14:11:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5305.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of milliways on Jan 27th, 2009"</a>
<li><strong>In reply to:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 26, 2009, at 9:09 AM, George Bosilca wrote:
<br>
<p><span class="quotelev2">&gt;&gt; By the way, is there a way to get more details from OMPI when it  
</span><br>
<span class="quotelev2">&gt;&gt; fails
</span><br>
<span class="quotelev2">&gt;&gt; to load a component because of missing symbols like this?
</span><br>
<span class="quotelev2">&gt;&gt; LD_DEBUG=verbose isn't very convenient :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mca_component_show_load_errors is what you need there. Set it to  
</span><br>
<span class="quotelev1">&gt; something high depending on the level of verbosity you want to have.
</span><br>
<p><p>FWIW, we have a pending bug into Libtool (libltdl maintainers) right  
<br>
now:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2008-10/msg00017.html">http://lists.gnu.org/archive/html/bug-libtool/2008-10/msg00017.html</a>
<br>
<p>The thread continues here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://lists.gnu.org/archive/html/bug-libtool/2009-01/msg00012.html">http://lists.gnu.org/archive/html/bug-libtool/2009-01/msg00012.html</a>
<br>
<p>AFAIK, it's not fixed yet.
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
<li><strong>Next message:</strong> <a href="5307.php">Jeff Squyres: "[OMPI devel] Heterogeneous OpenFabrics hardware"</a>
<li><strong>Previous message:</strong> <a href="5305.php">Jeff Squyres: "[OMPI devel] Fwd: [all-osl-users] Outage of milliways on Jan 27th, 2009"</a>
<li><strong>In reply to:</strong> <a href="5300.php">George Bosilca: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal symbols"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5309.php">Brice Goglin: "Re: [OMPI devel] Open-MX vs OMPI 1.3 using MX internal	symbols"</a>
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
