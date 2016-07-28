<?
$subject_val = "[OMPI devel] MCA base changes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 09:58:18 2008" -->
<!-- isoreceived="20080728135818" -->
<!-- sent="Mon, 28 Jul 2008 09:58:06 -0400" -->
<!-- isosent="20080728135806" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] MCA base changes" -->
<!-- id="FE69FFFC-DA8D-401A-804C-F91010C0F16C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] MCA base changes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 09:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With the update on #1400, I think we're ready to push the MCA base  
<br>
changes to the SVN trunk.  Speak now if you object, or forever hold  
<br>
your peace.  The most notable parts of this commit:
<br>
<p>- add &quot;register&quot; function to mca_base_component_t
<br>
&nbsp;&nbsp;&nbsp;- converted coll:basic and paffinity:linux and paffinity:solaris to  
<br>
use this function
<br>
&nbsp;&nbsp;&nbsp;--&gt; we'll convert the rest over time (I'll file a ticket once all  
<br>
this is committed)
<br>
<p>- add 32 bytes of &quot;reserved&quot; space to the end of mca_base_component_t  
<br>
and mca_base_component_data_2_0_0_t to make future upgrades [slightly]  
<br>
easier
<br>
&nbsp;&nbsp;&nbsp;- new mca_base_component_t size: 196 bytes
<br>
&nbsp;&nbsp;&nbsp;- new mca_base_component_data_2_0_0_t size: 36 bytes
<br>
<p>- MCA base version bumped to v2.0
<br>
&nbsp;&nbsp;&nbsp;- **We now refuse to load components that are not MCA v2.0.x**
<br>
<p>- all MCA frameworks versions bumped to v2.0
<br>
<p>- be a little more explicit about version numbers in the MCA base
<br>
&nbsp;&nbsp;&nbsp;- add big comment in mca.h about versioning philosophy
<br>
<p>It's a pretty big commit because it touches a lot of files (although  
<br>
most are just changing the version number); I'll commit it this evening.
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
<li><strong>Next message:</strong> <a href="4451.php">Ralph Castain: "Re: [OMPI devel] trunk hangs since r19010"</a>
<li><strong>Previous message:</strong> <a href="4449.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
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
