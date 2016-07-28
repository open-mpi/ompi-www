<?
$subject_val = "[OMPI devel] Call for Testing of the upcoming v1.3 release candidate";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 23:33:58 2008" -->
<!-- isoreceived="20081111043358" -->
<!-- sent="Mon, 10 Nov 2008 22:33:53 -0600" -->
<!-- isosent="20081111043353" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="[OMPI devel] Call for Testing of the upcoming v1.3 release candidate" -->
<!-- id="44079e5f0811102033x4dd9600ak808a47ff052c70f7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Call for Testing of the upcoming v1.3 release candidate<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 23:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All:
<br>
We are close to being ready to post the first release candidate for v1.3.  I
<br>
think that it is important
<br>
to get a significant amount of testing on it; and not just with MTT but also
<br>
people taking the time
<br>
to ensure the installation works in their environment, man pages and READMEs
<br>
are
<br>
accurate and the like.
<br>
<p>So, I would like
<br>
&nbsp;&nbsp;1) send out a call for specific testing of the upcoming 1.3 release
<br>
candidates, and
<br>
&nbsp;&nbsp;2) would like to get some feedback on what testing, in addition to MTT,
<br>
people will
<br>
be able to do.  This doesn't have to be a detailed list, but just enough to
<br>
get a better
<br>
idea of the coverage the 1.3 release candidates will be getting.
<br>
<p>I'll start the ball rolling by sharing my test environment for 1.3rc1.  I
<br>
don't have
<br>
any large clusters, but I do have quite a bit of variety, so will be doing
<br>
functional
<br>
testing in the following environment:
<br>
- heterogeneous 64-bit IB cluster
<br>
&nbsp;&nbsp;&nbsp;&nbsp;8-way ppc64 systems with IBM 12x eHCAs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;x86_64 systems with Mellanox 4x SDR HCAs
<br>
- 64-bit x86_64 IB cluster
<br>
&nbsp;&nbsp;&nbsp;&nbsp;multi-core x86_64 Opteron nodes with Mellanox 4x DDR HCAs
<br>
- 32-bit x86 IB cluster
<br>
&nbsp;&nbsp;&nbsp;&nbsp;vanilla x86 IB cluster with Mellanox SDR HCAs
<br>
<p>Please let us know via this list what you can commit to testing.  This will
<br>
help us all
<br>
release a better and more stable product.
<br>
<p>thanks,
<br>
--brad
<br>
<p>Brad Benton
<br>
v1.3 co-release manager
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-4881/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4882.php">Ralph Castain: "[OMPI devel] SM backing file size"</a>
<li><strong>Previous message:</strong> <a href="4880.php">Nifty niftyompi Mitch: "Re: [OMPI devel] Progress of the asynchronous messages"</a>
<!-- nextthread="start" -->
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
