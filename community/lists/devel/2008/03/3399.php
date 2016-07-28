<?
$subject_val = "[OMPI devel] use of AC_CACHE_CHECK in otf";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 16:23:54 2008" -->
<!-- isoreceived="20080306212354" -->
<!-- sent="Thu, 6 Mar 2008 22:23:41 +0100" -->
<!-- isosent="20080306212341" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="[OMPI devel] use of AC_CACHE_CHECK in otf" -->
<!-- id="20080306212341.GE25893_at_ins.uni-bonn.de" -->
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
<strong>Subject:</strong> [OMPI devel] use of AC_CACHE_CHECK in otf<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 16:23:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Previous message:</strong> <a href="3398.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>Reply:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In ompi/contrib/vt/vt/extlib/otf/acinclude.m4, in the macros WITH_DEBUG
<br>
and WITH_VERBOSE, dubious constructs such as
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_CACHE_CHECK([debug],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[debug],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[debug=])
<br>
<p>are used.  These have the following problems:
<br>
<p>* Cache variables need to match *_cv_* in order to actually be saved
<br>
(where the bit before _cv_ is preferably a package or author prefix,
<br>
for namespace cleanliness; see
<br>
&lt;<a href="http://www.gnu.org/software/autoconf/manual/html_node/Cache-Variable-Names.html">http://www.gnu.org/software/autoconf/manual/html_node/Cache-Variable-Names.html</a>&gt;.
<br>
The next Autoconf version will warn about this.
<br>
<p>* There is little need to cache information that the user provided on
<br>
the configure command line.  If configure is rerun by './config.status
<br>
--recheck', it remembers the original configure command line.  Only if
<br>
the user manually reruns configure (and keeps config.cache) does this
<br>
make a difference.
<br>
<p>So I suggest you remove those two instances of AC_CACHE_CHECK usage,
<br>
or forward this information to the author of oft.
<br>
<p>Thanks,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Previous message:</strong> <a href="3398.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>Reply:</strong> <a href="3414.php">Matthias Jurenz: "Re: [OMPI devel] use of AC_CACHE_CHECK in otf"</a>
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
