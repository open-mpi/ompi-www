<?
$subject_val = "[MTT devel] visual reports for mtt";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 01:02:21 2009" -->
<!-- isoreceived="20090224060221" -->
<!-- sent="Tue, 24 Feb 2009 08:02:15 +0200" -->
<!-- isosent="20090224060215" -->
<!-- name="Mike Dubman" -->
<!-- email="mike.ompi_at_[hidden]" -->
<!-- subject="[MTT devel] visual reports for mtt" -->
<!-- id="b20b52800902232202k7f7595d7h42dfe7ce780ddbbd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [MTT devel] visual reports for mtt<br>
<strong>From:</strong> Mike Dubman (<em>mike.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-24 01:02:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/12/0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello guys,
<br>
<p><p>I`m looking for a way having automatic regression report at the end of mtt
<br>
run which include graph+table for bw/lat/2way-bw for this specific run as
<br>
well as for previous runs on the same configuration.
<br>
<p><p>The way we are doing it, is generating dynamic query for MTT test reporter
<br>
at the end of mtt run, fetching html, extracting .png files with graphs and
<br>
attaching it to the final MTT report.
<br>
<p>During this process we observe the following:
<br>
<p>The MTT database hosted at <a href="http://www.open-mpi.org/mtt/index.php">http://www.open-mpi.org/mtt/index.php</a> behaves in
<br>
very inconsistent way:
<br>
<p>it work very sllllloooowwwwwww, sometimes it takes 5-10min to get query
<br>
results
<br>
We get many SQL errors during querying the performance results
<br>
Sometimes we get no performance graphs for historic searches (queried by
<br>
date range, like &quot;past 6 month&quot;)
<br>
<p>So, I`m wondering if someone else using this feature (generate performance
<br>
results for historic runs) for similar goals and have better experience with
<br>
it or recommendations?
<br>
Will it behave better if we create a local copy of Mtt database?
<br>
Can we connect to MTT database hosted at www.openmpi.org with SQL directly?
<br>
For how long historic results are kept in the MTT database?
<br>
<p><p>10x
<br>
<p>Mike
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/mtt-devel/att-0311/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-devel/2008/12/0310.php">Jeff Squyres: "Re: [MTT devel] MTT static site problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0312.php">Jeff Squyres: "Re: [MTT devel] visual reports for mtt"</a>
<li><strong>Reply:</strong> <a href="0316.php">Ethan Mallove: "Re: [MTT devel] visual reports for mtt"</a>
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
