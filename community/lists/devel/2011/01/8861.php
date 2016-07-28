<?
$subject_val = "[OMPI devel] Back-porting components from SVN trunk to v1.5 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 15:25:39 2011" -->
<!-- isoreceived="20110112202539" -->
<!-- sent="Wed, 12 Jan 2011 15:25:34 -0500" -->
<!-- isosent="20110112202534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Back-porting components from SVN trunk to v1.5 branch" -->
<!-- id="F897692B-D77B-4CE1-9289-74AF446635C7_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Back-porting components from SVN trunk to v1.5 branch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 15:25:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8862.php">Jeff Squyres: "[OMPI devel] First round of 1.5.2 CMRs are in!"</a>
<li><strong>Previous message:</strong> <a href="8860.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Reply:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I back-ported the trunk's paffinity/hwloc component to the v1.5 branch today.  Here's the things that you need to look out for if you undertake back-porting a component from the trunk to the v1.5 branch...
<br>
<p>Remember: the whole autogen.pl infrastructure was not (and will not be) ported to the v1.5 branch.  So there's some things that you need to change in your component's build system:
<br>
<p>- You need to add a configure.params file
<br>
- In your component's configure.m4 file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Rename your m4 define from MCA_&lt;project&gt;_&lt;fw&gt;_&lt;component&gt;_CONFIG to MCA_&lt;fw&gt;_&lt;component&gt;_CONFIG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Same for _POST_CONFIG
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Remove AC_CONFIG_FILES (they should now be in configure.params)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- We renamed a few m4 macros on the trunk; e.g., it's OPAL_VAR_SCOPE_PUSH on the trunk and OMPI_VAR_SCOPE_PUSH on v1.5.  So if you run &quot;configure&quot; and it says that commands are not found and they're un-expanded m4 names, look to see if they have changed names.
<br>
<p>- In your component's Makefile.am:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Rename any &quot;if&quot; variables from the form MCA_BUILD_&lt;project&gt;_&lt;fw&gt;_&lt;component&gt;_DSO to OMPI_BUILD_&lt;fw&gt;_&lt;COMPONENT&gt;_DSO
<br>
<p>I think those are the main points to watch out for.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8862.php">Jeff Squyres: "[OMPI devel] First round of 1.5.2 CMRs are in!"</a>
<li><strong>Previous message:</strong> <a href="8860.php">Shamis, Pavel: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
<li><strong>Reply:</strong> <a href="8863.php">Ralph Castain: "Re: [OMPI devel] Back-porting components from SVN trunk to v1.5 branch"</a>
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
