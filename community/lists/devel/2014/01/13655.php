<?
$subject_val = "[OMPI devel] 1.7.4rc2r30168 - odd run failure";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 20:04:01 2014" -->
<!-- isoreceived="20140110010401" -->
<!-- sent="Thu, 9 Jan 2014 17:03:58 -0800" -->
<!-- isosent="20140110010358" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30168 - odd run failure" -->
<!-- id="CAAvDA16uAdJwMJtHUb5gQfDURSXzrKf0O8u_NAxt9ooQJSS7zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30168 - odd run failure<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 20:03:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trying to run on the front-end of one of our production Linux systems I see
<br>
the following:
<br>
<p>$ mpirun -mca btl sm,self -np 2 examples/ring_c'
<br>
[cvrsvc01:17692] [[42051,1],0] ORTE_ERROR_LOG: Data for specified key not
<br>
found in file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
<br>
at line 505
<br>
[cvrsvc01:17693] [[42051,1],1] ORTE_ERROR_LOG: Data for specified key not
<br>
found in file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.7-latest-linux-x86_64-pgi-12.8/openmpi-1.7.4rc2r30168/orte/runtime/orte_globals.c
<br>
at line 505
<br>
<p>The &quot;ompi_info --all&quot; output is attached.
<br>
<p>Please let me know what MCA param(s) to set to collect any additional info
<br>
needed to track down the problem.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13655/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13655/ompi_info-cvrsvc01.txt.bz2">ompi_info-cvrsvc01.txt.bz2</a>
</ul>
<!-- attachment="ompi_info-cvrsvc01.txt.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13656.php">Larry Baker: "Re: [OMPI devel] 1.7.4rc2r30168 - PGI F08 failure"</a>
<li><strong>Previous message:</strong> <a href="13654.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - configure failure on Mac OSX 10.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
<li><strong>Reply:</strong> <a href="13662.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30168 - odd run failure"</a>
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
