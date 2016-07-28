<?
$subject_val = "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  6 00:17:49 2010" -->
<!-- isoreceived="20100706041749" -->
<!-- sent="Tue, 6 Jul 2010 16:17:33 +1200" -->
<!-- isosent="20100706041733" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down" -->
<!-- id="5ed8fb5c14460386167693f0561b2f8f.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7EB300B7-27B6-4F7B-86AD-5914559F69F7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down<br>
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v1.5:%20thumbs%20up%20or%20down?%20-%20Thumbs%20Down"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2010-07-06 00:17:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something I have just noticed on the NetBSD platform build
<br>
that I think goes further than just that platform.
<br>
<p><p>There is a NetBSD packaging clash between the
<br>
<p>libtrace.la
<br>
<p>from
<br>
<p>ompi/contrib/libtrace/
<br>
<p>and that from an already existing package
<br>
<p>libtrace-3.0.6
<br>
<p>(Homepage:<a href="http://research.wand.net.nz/software/libtrace.php">http://research.wand.net.nz/software/libtrace.php</a>)
<br>
<p><p>As the OpenMPI is just a contribution, I've tried turning off the
<br>
building the OpenMPI libtrace using the time-honoured
<br>
<p>&nbsp;--enable-contrib-no-build=libtrace
<br>
<p>but it still builds.
<br>
<p>Is this a new contribution (was not in 1.4x ?) that is not
<br>
controlled by the
<br>
<p>&nbsp;--enable-contrib-no-build=
<br>
<p>mechanism.
<br>
<p>The &quot;configure --help&quot; output only mentions &quot;libnbc&quot; and &quot;vt&quot;
<br>
though there doesn't seem to be a &quot;libnbc&quot; to control anymore.
<br>
<p>Indeed a top-level,
<br>
<p>&nbsp;find . -name \*nbc\* -print
<br>
<p>returns empty handed.
<br>
<p>That contribution needs to be
<br>
<p>a) brought under the control of --enable-contrib-no-build=
<br>
<p>b) possibly renamed (it would seem to be an MPI specific thing)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;so maybe, libmpitrace ?
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Previous message:</strong> <a href="8141.php">Ralph Castain: "Re: [OMPI devel] How to disable paffinity"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/06/8122.php">Jeff Squyres: "[OMPI devel] v1.5: thumbs up or down?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
<li><strong>Reply:</strong> <a href="8143.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] v1.5: thumbs up or down? - Thumbs Down"</a>
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
