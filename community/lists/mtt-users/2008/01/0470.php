<?
$subject_val = "[MTT users] mtt multiple mpi install and non open mpi instal issues";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  7 12:24:04 2008" -->
<!-- isoreceived="20080107172404" -->
<!-- sent="Mon, 7 Jan 2008 19:23:55 +0200" -->
<!-- isosent="20080107172355" -->
<!-- name="Oleg Kats" -->
<!-- email="oleg_at_[hidden]" -->
<!-- subject="[MTT users] mtt multiple mpi install and non open mpi instal issues" -->
<!-- id="6C2C79E72C305246B504CBA17B5500C9030F0445_at_mtlexch01.mtl.com" -->
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
<strong>Subject:</strong> [MTT users] mtt multiple mpi install and non open mpi instal issues<br>
<strong>From:</strong> Oleg Kats (<em>oleg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-07 12:23:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/12/0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Reply:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All
<br>
<p>Here is list of issues that we figure out during ourMTT usage:
<br>
<p>&nbsp;
<br>
<p>1.       Installation of multiple MPIs failed. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT successfully installed the first mpi installation but the all
<br>
other installations were installed under ~user directory. For solution
<br>
please see mttlib.patch
<br>
<p>2.       Build of MPIs other than Open-mpi failed. 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PrepareForInstall function in MTT/MPI/Get/Download.pm client was
<br>
stay in install/src dir and not in install/src/&lt;mpi vesion&gt;.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;please see mttlib_download.patch
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0470/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0470/mttlib.patch">mttlib.patch</a>
</ul>
<!-- attachment="mttlib.patch" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/mtt-users/att-0470/mttlib_download.patch">mttlib_download.patch</a>
</ul>
<!-- attachment="mttlib_download.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2007/12/0469.php">Jeff Squyres: "Re: [MTT users] SVN URLs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
<li><strong>Reply:</strong> <a href="0471.php">Ethan Mallove: "Re: [MTT users] mtt multiple mpi install and non open mpi instal	issues"</a>
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
