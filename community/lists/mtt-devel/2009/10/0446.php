<?
$subject_val = "[MTT devel] Analysis of hung jobs.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  6 05:23:40 2009" -->
<!-- isoreceived="20091006092340" -->
<!-- sent="Tue, 06 Oct 2009 10:23:48 +0100" -->
<!-- isosent="20091006092348" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[MTT devel] Analysis of hung jobs." -->
<!-- id="1254821028.8491.71.camel_at_alpha" -->
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
<strong>Subject:</strong> [MTT devel] Analysis of hung jobs.<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-06 05:23:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Further to the mail linked below, padb is able to perform diagnostics,
<br>
including backtraces on hung jobs and integrates well into automated
<br>
testing environments.
<br>
<p>The attached patch is a minimal change which should enable the
<br>
functionality.  I don't however have access to a working MTT
<br>
installation to test this however.
<br>
<p><a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php">http://www.open-mpi.org/community/lists/mtt-devel/2009/06/0415.php</a>
<br>
<p>This will require a HEAD version of padb, at least r273 to allow it to
<br>
accept the pid of mpirun rather than a jobid assigned by the underlying
<br>
resource manager.
<br>
<p>Yours,
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0446/mtt-padb.patch">mtt-padb.patch</a>
</ul>
<!-- attachment="mtt-padb.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2009/09/0445.php">Jeff Squyres: "Re: [MTT devel] MTToGDS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
<li><strong>Reply:</strong> <a href="0447.php">Ethan Mallove: "Re: [MTT devel] Analysis of hung jobs."</a>
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
