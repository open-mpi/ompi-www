<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 29 09:31:48 2006" -->
<!-- isoreceived="20060929133148" -->
<!-- sent="Fri, 29 Sep 2006 07:31:41 -0600" -->
<!-- isosent="20060929133141" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE Timing" -->
<!-- id="C1427C5D.4BC6%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-09-29 09:31:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Previous message:</strong> <a href="1090.php">Ralph Castain: "[OMPI devel] ORTE Tutorial: Final slides"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>There was some discussion at yesterday's tutorial about ORTE scalability and
<br>
where bottlenecks might be occurring. I spent some time last night
<br>
identifying key information required to answer those questions. I'll be
<br>
presenting a slide today showing the key timing points that we would need
<br>
first.
<br>
<p>I have also begun (this morning) to instrument the trunk to measure those
<br>
times. Some really quick results, all done on a Mac G5:
<br>
<p>1. It takes about 3 milliseconds to setup a job (i.e., go through the RDS,
<br>
RAS, and RMAPS frameworks, setup the stage gate triggers, prep io
<br>
forwarding, etc. - everything before we actually launch). This bounces
<br>
around a lot (I'm just using gettimeofday), but seems to have at most a
<br>
slight dependence on the number of processes being launched.
<br>
<p>2. It takes roughly 1-3 milliseconds to execute the compound command that
<br>
registers all of the data from an MPI process (i.e., the data sent at the
<br>
STG1 stage gate). This is the time required on the HNP to process the
<br>
command - it doesn't include any time spent actually communicating. It does,
<br>
however, include time spent packing/unpacking buffers. My tests were all
<br>
done on a local node for now, so the OOB just passes the buffer across from
<br>
send to receive. As you would expect, since the info being stored is only
<br>
from one process, there is no observable scaling dependence here.
<br>
<p>3. The time from start of MPI_Init until we do the registry command is
<br>
taking about 12-20 milliseconds - again, as expected, no observable scaling
<br>
dependence.
<br>
<p>There will have to be quite a few tests, of course, but I don't expect the
<br>
first two values to change very much (obviously, they will depend on the
<br>
hardware on the head node). I'll keep you posted as we learn more.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1092.php">Lisandro Dalcin: "[OMPI devel] problem with MPI_[Pack|Unpack]_external"</a>
<li><strong>Previous message:</strong> <a href="1090.php">Ralph Castain: "[OMPI devel] ORTE Tutorial: Final slides"</a>
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
