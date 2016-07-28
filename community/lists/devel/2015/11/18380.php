<?
$subject_val = "[OMPI devel] RFC: PMIx release update";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 21 13:25:15 2015" -->
<!-- isoreceived="20151121182515" -->
<!-- sent="Sat, 21 Nov 2015 10:25:09 -0800" -->
<!-- isosent="20151121182509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: PMIx release update" -->
<!-- id="1DB6F831-61D6-43A5-A8E5-AF3362622F15_at_open-mpi.org" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: PMIx release update<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-21 13:25:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18381.php">Ralph Castain: "[OMPI devel] PMIx Birds-of-a-Feather meeting"</a>
<li><strong>Previous message:</strong> <a href="18379.php">Ralph Castain: "[OMPI devel] Proposal on RFCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18382.php">Ralph Castain: "Re: [OMPI devel] RFC: PMIx release update"</a>
<li><strong>Reply:</strong> <a href="18382.php">Ralph Castain: "Re: [OMPI devel] RFC: PMIx release update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks
<br>
<p>I&#226;&#128;&#153;ll be the first to eat my own cooking :-)
<br>
<p>Now that PMIx has been officially announced and released, I&#226;&#128;&#153;d like to begin treating PMIx in the OMPI code base in a manner similar to how we deal with hwloc and libevent - i.e., we take a release tarball (plus any relevant bug fixes since that release), create a directory named for that release version, and install the tarball there. This then becomes the &#226;&#128;&#156;fixed&#226;&#128;&#157; default, only modified if a critical upstream patch appears.
<br>
<p>PMIx is a tad different in that it is a dynamic (as opposed to static) framework, and so we have the ability to maintain a second PMIx component for more &#226;&#128;&#156;advanced&#226;&#128;&#157; versions that would not be selected unless specifically requested. This allows us a little flexibility to support testing/exposure of upcoming PMIx features prior to their official release. I&#226;&#128;&#153;m not proposing to install this just yet, but might do so when PMIx 1.2 and 2.0 begin to solidify.
<br>
<p>What I propose to do is rename the current &#226;&#128;&#156;pmix1xx&#226;&#128;&#157; directory to be &#226;&#128;&#156;pmix1.1.1&#226;&#128;&#157;, and install the PMIx 1.1.1 tarball there. Note that I&#226;&#128;&#153;ll be including one upstream patch beyond the official tarball release to fix a bug that was discovered since the official release.
<br>
<p>I&#226;&#128;&#153;ll generate a PR for this purpose and amend this note with a link to it, but wanted to give people a &#226;&#128;&#156;heads up&#226;&#128;&#157; about it. There is no hurry to do this, so I propose to wait until after the US Thanksgiving holiday to give people time to mull it over. Eventually, this would be desirable to bring across to the 2.x branch prior to release of 2.0.0.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18381.php">Ralph Castain: "[OMPI devel] PMIx Birds-of-a-Feather meeting"</a>
<li><strong>Previous message:</strong> <a href="18379.php">Ralph Castain: "[OMPI devel] Proposal on RFCs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18382.php">Ralph Castain: "Re: [OMPI devel] RFC: PMIx release update"</a>
<li><strong>Reply:</strong> <a href="18382.php">Ralph Castain: "Re: [OMPI devel] RFC: PMIx release update"</a>
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
