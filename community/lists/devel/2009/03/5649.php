<?
$subject_val = "[OMPI devel] RFC: Final cleanup of included headers";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 17 18:43:25 2009" -->
<!-- isoreceived="20090317224325" -->
<!-- sent="Tue, 17 Mar 2009 18:41:44 -0400" -->
<!-- isosent="20090317224144" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Final cleanup of included headers" -->
<!-- id="200903171841.45123.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Final cleanup of included headers<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-17 18:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5648.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What:     Delete unused headers (intrusive)
<br>
<p>Why:      Get rid of needlessly included headers
<br>
<p>Where:    On trunk -- but I am playing safe -- hence this RFC
<br>
<p>When:     Apply on trunk on 20.3. (in the evening before MTT tar ball, but 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not to disturb other people's work)
<br>
<p>Timeout:  Afternoon of 20.03.2009 (for comments or hold-off notice)
<br>
------------------------------------------------------------------------
<br>
<p>In the frame of the BTL-move work a libopen-net library is created, several 
<br>
dependencies have been resolved.
<br>
<p>Some still remain: we include headers all over the place, which is technically 
<br>
not an error. However, it's not nice in order to resolve some problems and not 
<br>
the Right Thing(tm).
<br>
<p>We'd propose to apply the following script (with the diff file showing a 
<br>
preliminary example of what's submitted modulo the stuff in ompi/mpi/c/*), 
<br>
which then would only remove headers, which are _not_ needed (as figured by 
<br>
below script), as said in today's telcon.
<br>
Todays patches at first _add_ some of the required headers, which later are 
<br>
needed anyway (iff the deletion of headers in included-files is done).
<br>
<p>As this deletion is _intrusive_ (touching ~800 files, mostly just single-
<br>
liners), I would like to get feedback and comments, whether it breaks anything 
<br>
in any branches or has other negative effects in any branches of partners or 
<br>
is considered to be overly intrusive / should be split...
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink


</pre>
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5649/check_unnecessary_headers.sh.bz2">check_unnecessary_headers.sh.bz2</a>
</ul>
<!-- attachment="check_unnecessary_headers.sh.bz2" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5649/ompi_cleanup_header-2009.03.17.diff.bz2">ompi_cleanup_header-2009.03.17.diff.bz2</a>
</ul>
<!-- attachment="ompi_cleanup_header-2009.03.17.diff.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5650.php">Eugene Loh: "[OMPI devel] OMPI vs Scali performance comparisons"</a>
<li><strong>Previous message:</strong> <a href="5648.php">Jeff Squyres: "Re: [OMPI devel] Next week: WebEx remote attendance of OpenFabricsSonoma conference"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Reply:</strong> <a href="5658.php">Ralph Castain: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
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
