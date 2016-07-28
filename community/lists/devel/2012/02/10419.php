<?
$subject_val = "[OMPI devel] VT build failure with Clang++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 03:56:45 2012" -->
<!-- isoreceived="20120215085645" -->
<!-- sent="Wed, 15 Feb 2012 00:56:40 -0800" -->
<!-- isosent="20120215085640" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] VT build failure with Clang++" -->
<!-- id="CAAvDA15nVNqV3_0tKtF4Ct970-C84j3gQr0q58VFz6vriYCFTA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] VT build failure with Clang++<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 03:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When trying to build the OMPI trunk or the 1.5 branch with clang-3.0, I
<br>
cannot build VT.
<br>
If have tried both MacOS 10.7 and FreeBSD-9.0-RELEASE.
<br>
In all four builds (2 branches X 2 OSes) the failure appears to be &quot;deep&quot;
<br>
in the C++ STL.
<br>
<p>I strongly suspect that this is a Clang++ bug.
<br>
However, I am reporting it here in the hope that somebody more familiar
<br>
with STL and/or the VT code can take a closer look to rule out the
<br>
possibility that the STL *usage* might be &quot;border-line&quot;.
<br>
<p>The failure portion of the make output (nightly trunk tarball 1.7a1r25903)
<br>
is attached.
<br>
<p>-Paul
<br>
<p><pre>
--
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10419/clang-vt-make.log">clang-vt-make.log</a>
</ul>
<!-- attachment="clang-vt-make.log" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10420.php">Matthias Jurenz: "Re: [OMPI devel] 1.5.5rc1 tested: MacOS/ppc (w/ 1 failure and a &quot;CMR&quot;)"</a>
<li><strong>Previous message:</strong> <a href="10418.php">Paul Hargrove: "[OMPI devel] trunk build failure on Altix"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Reply:</strong> <a href="10426.php">Dmitri Gribenko: "Re: [OMPI devel] VT build failure with Clang++"</a>
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
