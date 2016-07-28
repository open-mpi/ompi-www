<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec  4 08:26:36 2006" -->
<!-- isoreceived="20061204132636" -->
<!-- sent="Mon, 04 Dec 2006 06:26:26 -0700" -->
<!-- isosent="20061204132626" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Major revision to the RML/OOB" -->
<!-- id="C1997012.B86%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-04 08:26:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/11/1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Maybe reply:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>If you are interested in the ongoing scalability work, or in the RML/OOB in
<br>
ORTE, please read on - otherwise, feel free to hit &quot;delete&quot;.
<br>
<p>As many of you know, we have been working towards solving several problems
<br>
that affect our ability to operate at large scale. Some of the required
<br>
modifications to the code base have recently been applied to the trunk.
<br>
<p>We have known since it was originally written over two years ago that the
<br>
OOB contained some inherent scalability limits. For example, the system
<br>
immediately upon opening obtains contact info for all daemons in the
<br>
universe, opens sockets to them, and sends an initial message to them. It
<br>
then does the same with all the application processes in its job.
<br>
<p>As a result, for a 2000 process job running on 500 nodes, each application
<br>
process will immediately open and communicate across 2501 sockets (2000
<br>
procs + 500 daemons [one per node] + the HNP) during the startup phase.
<br>
<p>If you really want to imagine some fun, now have that job comm_spawn 500
<br>
processes across the 500 nodes, and *don't* reuse daemons. As each new
<br>
daemon is spawned, every process in the original job (including the original
<br>
daemons) is notified, loads the new contact info for that daemon, opens a
<br>
socket to it, and does an &quot;ack&quot; comm. After all 500 new daemons are running,
<br>
they now launch the 500 new procs, each of which gets the info on 1000
<br>
daemons plus the info for 2000 parents and 500 peers, and immediately opens
<br>
1000 daemons + 2000 parents + 500 peers + 1 HNP = 3501 sockets!
<br>
<p>This was acceptable for small jobs, but causes considerable delay during
<br>
startup for large jobs. A few other OOB operational characteristics further
<br>
exacerbate the problem - I will detail those in a document on the wiki to
<br>
help foster greater understanding.
<br>
<p>Jeff Squyres and I are about to begin a major revision of the RML/OOB code
<br>
to resolve these problems. We will be using a staged approach to the effort:
<br>
<p>1. separate the OOB's actions for loading contact info from actually opening
<br>
a socket to a process. Currently, the OOB immediately opens a socket and
<br>
performs an &quot;ack&quot; communication whenever contact info for another process is
<br>
loaded into it. In addition, the OOB immediately subscribes to the job
<br>
segment of the provided process, requesting that this process be alerted to
<br>
*any* change in OOB contact info to any process in that job. These actions
<br>
need to be separated out.
<br>
<p>2. revise the RML/OOB init/open procedure. These are currently interwoven in
<br>
a manner that causes the OOB to execute registry operations that are not
<br>
needed (and actually cause headaches) during orte_init. The procedure will
<br>
be revised so that connections to the HNP and to the process' local orted
<br>
are opened, but all other contact info (e.g., for the other procs in the
<br>
job) is simply loaded into the OOB's contact tables, but no sockets opened
<br>
until first communication.
<br>
<p>3. revise the xcast procedure so that it relays via the daemons and not the
<br>
application processes. For systems that do not use our daemons, alternative
<br>
mechanisms will be developed.
<br>
<p>At some point in the future, a fully routable OOB will be developed to
<br>
remove the need for so many sockets on each application process. For now,
<br>
these steps should improve our startup time considerably.
<br>
<p>With some luck and (hopefully) not too many conflicting priorities, Jeff and
<br>
I may complete this work by Christmas - more likely, though, is sometime
<br>
early in Jan. We will be working on a tmp branch, but you may see some
<br>
transfer of code to the trunk as we progress.
<br>
<p>As always, feel free to comment and/or make suggestions!
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/11/1217.php">Jeff Squyres: "Re: [OMPI devel] pfile_read_at_f.c:99: error: invalid lvalue in unary '&amp;'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Maybe reply:</strong> <a href="1219.php">Jonathan Day: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1220.php">Adrian Knoth: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
