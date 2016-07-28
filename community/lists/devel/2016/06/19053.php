<?
$subject_val = "[OMPI devel] Seldom deadlock in mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  1 22:37:49 2016" -->
<!-- isoreceived="20160602023749" -->
<!-- sent="Wed, 1 Jun 2016 22:37:48 -0400" -->
<!-- isosent="20160602023748" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Seldom deadlock in mpirun" -->
<!-- id="CAMJJpkUzpwOsWSb4KXPJJ9xqVn0e33n9-Jd0Gri_9ZGz7JFW1A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Seldom deadlock in mpirun<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-01 22:37:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19052.php">Jeff Squyres (jsquyres): "[OMPI devel] Git mail cap and AUTHORS update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a seldomly occurring deadlock on a OS X laptop if I use more than 2
<br>
processes). It is coming up once every 200 runs or so.
<br>
<p>Here is what I could gather from my experiments: All the MPI processes seem
<br>
to have correctly completed (I get all the expected output and the MPI
<br>
processes are in a waiting state), but somehow the mpirun does not detect
<br>
their completion. As a result, mpirun never returns.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-19053/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2016/05/19052.php">Jeff Squyres (jsquyres): "[OMPI devel] Git mail cap and AUTHORS update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
<li><strong>Reply:</strong> <a href="19054.php">Ralph Castain: "Re: [OMPI devel] Seldom deadlock in mpirun"</a>
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
