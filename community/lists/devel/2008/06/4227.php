<?
$subject_val = "[OMPI devel] openib btl: HCA -&gt; device";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 25 06:57:22 2008" -->
<!-- isoreceived="20080625105722" -->
<!-- sent="Wed, 25 Jun 2008 06:57:16 -0400" -->
<!-- isosent="20080625105716" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] openib btl: HCA -&amp;gt; device" -->
<!-- id="C8FA3EEC-4252-4AAA-8F43-9D1FA19D9751_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] openib btl: HCA -&gt; device<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-25 06:57:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4228.php">Jeff Squyres: "Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>Previous message:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In working on ticket 1295 (&quot;Make &quot;IB&quot;-specific language be  
<br>
&quot;OpenFabrics&quot; / IB/iWARP neutral&quot;), while I did have to manually  
<br>
update a bunch of individual help*txt messages, it seemed much easier  
<br>
to s/hca/device/gi throughout the openib BTL vs. editing a million  
<br>
code places manually.
<br>
<p>This changed a lot of variables and field names as well (e.g.,  
<br>
openib_btl-&gt;hca is now openib_btl-&gt;device).
<br>
<p>Does anyone care if I commit this?
<br>
<p>Here's the ticket: <a href="https://svn.open-mpi.org/trac/ompi/ticket/1295">https://svn.open-mpi.org/trac/ompi/ticket/1295</a>
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
<li><strong>Next message:</strong> <a href="4228.php">Jeff Squyres: "Re: [OMPI devel] Branching the trunk for 1.3, and branch update policy"</a>
<li><strong>Previous message:</strong> <a href="4226.php">Lenny Verkhovsky: "[OMPI devel] Trunk problems"</a>
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
