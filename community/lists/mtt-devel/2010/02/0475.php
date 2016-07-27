<?
$subject_val = "[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 14:05:24 2010" -->
<!-- isoreceived="20100211190524" -->
<!-- sent="Thu, 11 Feb 2010 14:05:19 -0500" -->
<!-- isosent="20100211190519" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com" -->
<!-- id="20100211190518.GB18474_at_sun.com" -->
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
<strong>Subject:</strong> [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-11 14:05:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm getting a 500 Internal Server Error using bquery.pl.  I can --ping
<br>
successfully:
<br>
<p>&nbsp;&nbsp;$ client/bquery.pl --ping --server=<a href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun 
<br>
&nbsp;&nbsp;Ping is successful.
<br>
<p>But an actual query gets an error:
<br>
<p>&nbsp;&nbsp;$ client/bquery.pl --server=<a href="http://open-mpi-mtt.appspot.com/">http://open-mpi-mtt.appspot.com/</a> --password=xxxxx --username=sun --query --gqls=&quot;select * from TestRunPhase where status=1&quot; --dir=&quot;bquery-test&quot;
<br>
&nbsp;&nbsp;Error at <a href="http://open-mpi-mtt.appspot.com//client">http://open-mpi-mtt.appspot.com//client</a>
<br>
&nbsp;&nbsp;500 Internal Server Error
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Previous message:</strong> <a href="0474.php">Jeff Squyres: "[MTT devel] MTTGDS issues"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0476.php">Jeff Squyres: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
<li><strong>Reply:</strong> <a href="0480.php">Igor Ivanov: "Re: [MTT devel] 500 Internal Server Error from open-mpi-mtt.appspot.com"</a>
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
