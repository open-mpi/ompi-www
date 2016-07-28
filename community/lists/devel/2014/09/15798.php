<?
$subject_val = "[OMPI devel] clang alignment warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 10 16:23:47 2014" -->
<!-- isoreceived="20140910202347" -->
<!-- sent="Wed, 10 Sep 2014 20:23:45 +0000" -->
<!-- isosent="20140910202345" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] clang alignment warnings" -->
<!-- id="8540D495-35DA-4176-BDA3-16FEF368C37C_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] clang alignment warnings<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-10 16:23:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With our newfound clang options, I'm seeing alignment errors in this block of code:
<br>
<p><a href="https://github.com/open-mpi/ompi-svn-mirror/blob/master/opal/mca/base/mca_base_var.c#L662-L673">https://github.com/open-mpi/ompi-svn-mirror/blob/master/opal/mca/base/mca_base_var.c#L662-L673</a>
<br>
<p>Specifically, it's warning on lines 664 (type INT) and 672 (type BOOL).  The complaint is:
<br>
<p>-----
<br>
mca_base_var.c:664:13: runtime error: member access within misaligned address 0x2aaaab1b1ed9 for type 'mca_base_var_storage_t', which requires 8 byte alignment
<br>
-----
<br>
<p>I *think* this is a false warning.  I *think* it is saying that dst, which is of type (mca_base_var_storage_t *), which is a union of all the possible storage types, requires an alignment of 8.  But it's *not* actually a (mca_base_var_storage_t); it's actually an int or a bool, and therefore its alignment can be less than 8.
<br>
<p>I verified that the alignment of &amp;dst-&gt;intval and &amp;dst-&gt;boolval is always aligned properly (i.e., for every MCA var that comes through this block).  And clang is specifically citing that the access on line 664 and 672 require an alignment of 8.
<br>
<p>Is this analysis correct?
<br>
<p>Regardless, what do we do about this?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Previous message:</strong> <a href="15797.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Need to know your Github ID"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
<li><strong>Reply:</strong> <a href="15799.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] clang alignment warnings"</a>
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
