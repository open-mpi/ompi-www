<?
$subject_val = "Re: [hwloc-devel] signed / unsigned";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 06:33:50 2009" -->
<!-- isoreceived="20091217113350" -->
<!-- sent="Thu, 17 Dec 2009 05:33:45 -0600" -->
<!-- isosent="20091217113345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] signed / unsigned" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA1705665F_at_XMB-RCD-205.cisco.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[hwloc-devel] signed / unsigned" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] signed / unsigned<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-17 06:33:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Maybe in reply to:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I see you added some casts, too. ;)
<br>

<br>
Re make check - I know it exists, but it was difficult to integrate the embedded test in with the existing &quot;check&quot; target because the embedded test effectively needs a full hwloc tarball to compile against. I played with making a sym link from tests/embedded to ../.. And using that as the test's &quot;tarball&quot;, but that runs into problems when you run the test's autogen because it re autogens the entire tree (not just the embedded test). 
<br>
So at least for the moment, it is a separate, manual test. 
<br>

<br>
-jms
<br>
Sent from my PDA.  No type good.
<br>

<br>
----- Original Message -----
<br>
From: hwloc-devel-bounces_at_[hidden] &lt;hwloc-devel-bounces_at_[hidden]&gt;
<br>
To: Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
<br>
Sent: Thu Dec 17 04:57:19 2009
<br>
Subject: Re: [hwloc-devel] signed / unsigned
<br>

<br>
Jeff Squyres, le Wed 16 Dec 2009 21:51:38 -0500, a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; On Dec 16, 2009, at 9:03 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Ok, done.  Please review:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1475">https://svn.open-mpi.org/trac/hwloc/changeset/1475</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I definitely broke something.  :-(
</span><br>

<br>
I've fixed everything.  Please note that these gcc warnings are not for
<br>
the developper to add casts everywhere.  Doing so either adds bugs or
<br>
hides bugs. Here there were both cases.
<br>

<br>
<span class="quotelev2">&gt; &gt;From my embedding test, I make a trivial app that does the following:
</span><br>

<br>
Please note that make check exists.
<br>

<br>
Samuel
<br>
_______________________________________________
<br>
hwloc-devel mailing list
<br>
hwloc-devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-0540/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Previous message:</strong> <a href="0539.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Maybe in reply to:</strong> <a href="0534.php">Jeff Squyres: "[hwloc-devel] signed / unsigned"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
<li><strong>Reply:</strong> <a href="0541.php">Samuel Thibault: "Re: [hwloc-devel] signed / unsigned"</a>
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
