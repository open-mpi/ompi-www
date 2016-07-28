<?
$subject_val = "Re: [OMPI devel] v1.8 - compile/dist problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 09:42:45 2014" -->
<!-- isoreceived="20140724134245" -->
<!-- sent="Thu, 24 Jul 2014 13:42:44 +0000" -->
<!-- isosent="20140724134244" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.8 - compile/dist problem" -->
<!-- id="74D7B32D-A1ED-47DD-BFF0-50E10BCC78D1_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="53D10242.9060604_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.8 - compile/dist problem<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 09:42:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15249.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 24, 2014, at 8:55 AM, Bert Wesarg &lt;bert.wesarg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; But the dep rules should already ensure this, as it creates the .deps directory at the end of configure. Though if this is not guaranteed to happen (maybe it depends on the used compiler) than we would need to ensure it in the makefile itself.
</span><br>
<p>FWIW, if I:
<br>
<p>- expand last night's v1.8 nightly tarball on a RHEL 6.5 machine
<br>
- look in ompi/contrib/vt/vt/tools/vtunify/mpi,
<br>
&nbsp;&nbsp;*** the hooks subdirectory is NOT there ***
<br>
- run configure
<br>
- look in ompi/contrib/vt/vt/tools/vtunify/mpi,
<br>
&nbsp;&nbsp;*** the hooks subdirectory IS there ***
<br>
<p>So at least for AC 2.69, AM 1.12.2, LT 2.4.2, M4 1.4.16 (which is what is used to make the 1.8 tarball) on RHEL 6.x, it works as expected.
<br>
<p>Is this not true on a RHEL 7 or SLES 12 (beta) machine?
<br>
<p>Or is this not true for some different set of gnu autotools to bootstrap the tarball?
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
<li><strong>Next message:</strong> <a href="15249.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc2 ready for test"</a>
<li><strong>Previous message:</strong> <a href="15247.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>In reply to:</strong> <a href="15246.php">Bert Wesarg: "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
<li><strong>Reply:</strong> <a href="15250.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v1.8 - compile/dist problem"</a>
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
