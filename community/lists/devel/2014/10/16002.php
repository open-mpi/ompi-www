<?
$subject_val = "[OMPI devel] opal components subject to removal for 1.9 release";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 17:06:49 2014" -->
<!-- isoreceived="20141003210649" -->
<!-- sent="Fri, 03 Oct 2014 15:06:47 -0600" -->
<!-- isosent="20141003210647" -->
<!-- name="Howard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] opal components subject to removal for 1.9 release" -->
<!-- id="542F0FE7.7050203_at_gmail.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] opal components subject to removal for 1.9 release<br>
<strong>From:</strong> Howard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 17:06:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Previous message:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Reply:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OMPI folks,
<br>
<p>As part of the code cleanup for release 1.9/2.0, there are several
<br>
opal components that are on the radar for possible removal.
<br>
<p>These include:
<br>
<p>mca/btl/template (not clear anyone is maintaining this)
<br>
mca/common/ofacm
<br>
mca/crs/dmtcp
<br>
mca/if/solaris_ipv6 (the maintainer is nominally Oracle)
<br>
mca/if/windows
<br>
mca/installdirs/windows
<br>
mca/memory/malloc_solaris (Oracle)
<br>
timer/catamount (this is about to go, SNL verified not using)
<br>
timer/windows
<br>
<p>The tables at the bottom of the following wiki page provide more
<br>
info - <a href="https://github.com/open-mpi/ompi/wiki/Releasev19">https://github.com/open-mpi/ompi/wiki/Releasev19</a>
<br>
<p>If you think any of these components need to be maintained
<br>
going forward, please speak up.
<br>
<p>ORTE and OMPI components will be discussed at next week's
<br>
devel meeting.
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Previous message:</strong> <a href="16001.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: calloc instead of malloc in opal_obj_new()"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
<li><strong>Reply:</strong> <a href="16003.php">George Bosilca: "Re: [OMPI devel] opal components subject to removal for 1.9 release"</a>
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
