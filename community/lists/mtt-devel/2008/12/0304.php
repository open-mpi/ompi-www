<?
$subject_val = "[MTT devel] Time to make the 2009 mtt database partitions?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  1 10:07:20 2008" -->
<!-- isoreceived="20081201150720" -->
<!-- sent="Mon, 1 Dec 2008 10:07:14 -0500" -->
<!-- isosent="20081201150714" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Time to make the 2009 mtt database partitions?" -->
<!-- id="20081201150714.GC228_at_sun.com" -->
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
<strong>Subject:</strong> [MTT devel] Time to make the 2009 mtt database partitions?<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-01 10:07:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/11/0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>\dt doesn't show any 2009 tables in the &quot;mtt&quot; Postgres database. Will
<br>
the following commands (using 0-11) set us up for 2009?
<br>
<p>&nbsp;&nbsp;$ server/sql/support/create-partitions-mpi-install.pl 2009 00
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-mpi-install.pl 2009 01
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-mpi-install.pl 2009 02
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-build.pl 2009 00
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-build.pl 2009 01
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-build.pl 2009 02
<br>
&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-run.pl 2009 00
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-run.pl 2009 01
<br>
&nbsp;&nbsp;$ server/sql/support/create-partitions-test-run.pl 2009 02
<br>
&nbsp;&nbsp;...
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/11/0303.php">Ethan Mallove: "Re: [MTT devel] [MTT bugs] [MTT] #258: Compare non-contiguous date	ranges"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
<li><strong>Reply:</strong> <a href="0305.php">Josh Hursey: "Re: [MTT devel] Time to make the 2009 mtt database partitions?"</a>
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
