<?
$subject_val = "[OMPI users] make check with external libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 19:17:22 2014" -->
<!-- isoreceived="20140618231722" -->
<!-- sent="Wed, 18 Jun 2014 23:17:21 +0000" -->
<!-- isosent="20140618231721" -->
<!-- name="Pascal Paschos" -->
<!-- email="pascal.paschos_at_[hidden]" -->
<!-- subject="[OMPI users] make check with external libltdl" -->
<!-- id="D82CEFEF59832A49A611F4DAC794D9D538C6CB17_at_CHCSPMBX1.ads.northwestern.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] make check with external libltdl<br>
<strong>From:</strong> Pascal Paschos (<em>pascal.paschos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-18 19:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24670.php">Florian Hahner: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
make check fails when the 1.8.1 is built with an external libltdl. The system libtool did not have those headers so we provided an external installation of libtool. The source compiles and builds but fails this test:
<br>
make[3]: *** No rule to make target `../../opal/libltdl/libltdlc.la', needed by `dlopen_test'.  Stop.
<br>
<p>When building with  --disable-dlopen which disables libltdl anyway or the internal make check returns no errors. Just curious for an explanation... if there is any.
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24671/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24672.php">Brock Palen: "[OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Previous message:</strong> <a href="24670.php">Florian Hahner: "Re: [OMPI users] Program abortion at a simple MPI_Get Programm"</a>
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
