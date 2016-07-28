<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 27 15:07:00 2007" -->
<!-- isoreceived="20070827190700" -->
<!-- sent="Mon, 27 Aug 2007 15:10:39 -0400" -->
<!-- isosent="20070827191039" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="[OMPI devel] Maximum Shared Memory Segment - OK to increase?" -->
<!-- id="46D321AF.7010400_at_sun.com" -->
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
<strong>From:</strong> Rolf vandeVaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-27 15:10:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2232.php">Greg Watson: "[OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are running into a problem when running on one of our larger SMPs
<br>
using the latest Open MPI v1.2 branch.  We are trying to run a job
<br>
with np=128 within a single node.  We are seeing the following error:
<br>
<p>&quot;SM failed to send message due to shortage of shared memory.&quot;
<br>
<p>We then increased the allowable maximum size of the shared segment to
<br>
2Gigabytes-1 which is the maximum allowed on 32-bit application.  We
<br>
used the mca parameter to increase it as shown here.
<br>
<p>-mca mpool_sm_max_size 2147483647
<br>
<p>This allowed the program to run to completion.  Therefore, we would
<br>
like to increase the default maximum from 512Mbytes to 2G-1 Gigabytes.
<br>
Does anyone have an objection to this change?  Soon we are going to
<br>
have larger CPU counts and would like to increase the odds that things
<br>
work &quot;out of the box&quot; on these large SMPs.
<br>
<p>On a side note, I did a quick comparison of the shared memory needs of
<br>
the old Sun ClusterTools to Open MPI and came up with this table.
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI
<br>
np      Sun ClusterTools 6        current   suggested
<br>
-----------------------------------------------------------------
<br>
&nbsp;&nbsp;2         20M                      128M        128M
<br>
&nbsp;&nbsp;4         20M                      128M        128M
<br>
&nbsp;&nbsp;8         22M                      256M        256M
<br>
&nbsp;16         27M                      512M        512M
<br>
&nbsp;32         48M                      512M          1G
<br>
&nbsp;64        133M                      512M        2G-1
<br>
128        476M                      512M        2G-1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Previous message:</strong> <a href="2232.php">Greg Watson: "[OMPI devel] thread model"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2234.php">Richard Graham: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2240.php">Markus Daene: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
<li><strong>Reply:</strong> <a href="2243.php">Li-Ta Lo: "Re: [OMPI devel] Maximum Shared Memory Segment - OK to increase?"</a>
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
