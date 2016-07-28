<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 09:36:37 2008" -->
<!-- isoreceived="20080128143637" -->
<!-- sent="Mon, 28 Jan 2008 15:36:23 +0100" -->
<!-- isosent="20080128143623" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="20080128143623.GD11368_at_ltw.loris.tv" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C3C33440.BF49%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk borked<br>
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-28 09:36:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jan 28, 2008 at 07:26:56AM -0700, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; We seem to have a problem on the trunk this morning. I am building on a
</span><br>
<p>There are more errors:
<br>
<p>/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
<br>
`fsetpos':
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
<br>
for member `__pos' in something not a structure or union
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
<br>
`fsetpos64':
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
<br>
for member `__pos' in something not a structure or union
<br>
gmake[5]: *** [vt_iowrap.o] Error 1
<br>
gmake[5]: Leaving directory
<br>
`/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
<br>
`fsetpos':
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:850: error: request
<br>
for member `__pos' in something not a structure or union
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c: In function
<br>
`fsetpos64':
<br>
/tmp/ompi/src/ompi/contrib/vt/vt/vtlib/vt_iowrap.c:876: error: request
<br>
for member `__pos' in something not a structure or union
<br>
gmake[5]: *** [vt_iowrap.o] Error 1
<br>
gmake[5]: Leaving directory
<br>
`/tmp/ompi/build/SunOS-i86pc/ompi/ompi/contrib/vt/vt/vtlib'
<br>
<p><p>Just my $0.02
<br>
<p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Previous message:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3057.php">Ralph H Castain: "[OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3060.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
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
