<?
$subject_val = "[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 18:48:33 2014" -->
<!-- isoreceived="20140108234833" -->
<!-- sent="Wed, 8 Jan 2014 15:48:31 -0800" -->
<!-- isosent="20140108234831" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output" -->
<!-- id="CAAvDA16D400OJmcZYtHSv-FbeKsd1PnE3oEekisdJGACGCp7gg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 18:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13595.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13593.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Reply:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note the following still indicates that &quot;--bind-to none&quot; is the default:
<br>
<p>-bash-4.2$ mpirun --help | grep -A2 'bind-to '
<br>
&nbsp;&nbsp;&nbsp;--bind-to &lt;arg0&gt;      Policy for binding processes [none (default) |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwthread | core | socket | numa | board] (supported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;qualifiers: overload-allowed,if-supported)
<br>
<p>However, Jeff has clearly stated (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2013/12/13456.php">http://www.open-mpi.org/community/lists/devel/2013/12/13456.php</a>) that
<br>
bind-to-core is to be the default in 1.7.4.
<br>
<p>The --map-by and --rank-by outputs are similarly out-dated:
<br>
<p>-bash-4.2$ mpirun --help | grep -A1 'map-by '
<br>
&nbsp;&nbsp;&nbsp;--map-by &lt;arg0&gt;       Mapping Policy [slot (default) | hwthread | core |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;socket | numa | board | node]
<br>
-bash-4.2$ mpirun --help | grep -A1 'rank-by '
<br>
&nbsp;&nbsp;&nbsp;--rank-by &lt;arg0&gt;      Ranking Policy [slot (default) | hwthread | core |
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;socket | numa | board | node]
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13594/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13595.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13593.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 run failure NetBSD6-x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
<li><strong>Reply:</strong> <a href="13607.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - out-of-date mpirun usage output"</a>
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
