<?
$subject_val = "[OMPI devel] PMIx 2.0: seeking input";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 22 11:54:31 2015" -->
<!-- isoreceived="20150622155431" -->
<!-- sent="Mon, 22 Jun 2015 08:54:28 -0700" -->
<!-- isosent="20150622155428" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] PMIx 2.0: seeking input" -->
<!-- id="CAMD57odmLPDwoh+Vc4vA3s9JOH7ap175Yx4Ubf09M_Ci_cc-SQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] PMIx 2.0: seeking input<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-22 11:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Sorry to &quot;spam&quot; the list, but we'd really like to get as wide a range of
<br>
input as possible on features for the next release of PMIx (see below). I
<br>
haven't attached
<br>
<p>Ralph
<br>
==========
<br>
<p>PMIx 1.0 has now been released. If you haven&#226;&#128;&#153;t looked at it, I invite you
<br>
to please do so. I&#226;&#128;&#153;ve attached the API definitions, and you&#226;&#128;&#153;ll find more
<br>
(slightly outdated, I&#226;&#128;&#153;m afraid) here:
<br>
<p><a href="https://github.com/open-mpi/pmix/wiki">https://github.com/open-mpi/pmix/wiki</a>
<br>
<p>As a reminder, the intent behind PMIx is to transparently provide backward
<br>
compatibility for PMI-1 and PMI-2, while extending the APIs to support
<br>
advanced capabilities and providing exascale performance. Support by SLURM,
<br>
ORCM, and other RMs will be coming later this year. I am working right now
<br>
on completing the embedded support for OpenMPI, and hope to release that in
<br>
the next week or two - at that time, any job executed via mpirun will have
<br>
full support for PMIx functions.
<br>
<p>I&#226;&#128;&#153;d like to invite your input for the upcoming v2.0 APIs. Our initial plan
<br>
is to release 2.0 in time for SC15, with the expectation that we may not
<br>
have all the features implemented yet - whether we add them during the 2.0
<br>
series, or delay some to 3.0 remains TBD.
<br>
<p>The initial thought is to focus 2.0 in the following areas - please note
<br>
that we would deeply appreciate the involvement of each relevant community,
<br>
so please feel free to forward this note and/or reach out to relevant
<br>
representatives:
<br>
<p>1. Performance improvements
<br>
&nbsp;&nbsp;&nbsp;* dynamic spawn/reap of listening threads to achieve target performance
<br>
of completing 1000 client connections in &lt; 1 sec
<br>
&nbsp;&nbsp;&nbsp;* shared memory use to reduce memory footprint (Elena has already sent
<br>
out some thoughts on this)
<br>
<p>2. Fault response support
<br>
We currently provide application notification of faults (existing and
<br>
impending) that includes information on the impacted processes. However,
<br>
the response is currently limited to calling PMIx_Abort - i.e., the app can
<br>
take internal action, but the only request it can make of the RM is to
<br>
abort. We do allow for abort of specific procs as opposed to the entire
<br>
job, but we&#226;&#128;&#153;d like to support a broader set of options. For example, the
<br>
app might request a coordinated checkpoint, ask for replacement nodes to be
<br>
allocated, or request immediate restart at a reduced size.
<br>
<p>3. File system support
<br>
We would like to begin supporting file positioning directives - e.g.,
<br>
hot/warm/cold data movement, persistence requests to maintain files and/or
<br>
shared memory regions across job steps, and burst buffer management.
<br>
<p>4. Network/fabric support
<br>
The existing notification capability can be used to notify of network
<br>
issues. However, there has been interest expressed in further interactions
<br>
that would allow an application to specify quality of service and security
<br>
requirements, request information on network topology, etc.
<br>
<p>5. Power directives
<br>
On very large scale systems, it is expected that some form of power
<br>
management will be required or desired. Most of that happens at allocation
<br>
request time, but there may be some possible directives an app could want
<br>
to pass during execution. We&#226;&#128;&#153;re open to suggestion.
<br>
<p>6. Workflow support
<br>
We have the &quot;spawn&quot; support in PMIx 1.0, but that was designed expressly
<br>
for support of MPI applications. Other programming models may require
<br>
different or additional support. PMIx is intended to support a wide range
<br>
of models, and we'd welcome input on how workflows can be better supported.
<br>
<p>Any other topics of interest are always welcome!
<br>
Ralph
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17519/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17520.php">Gilles Gouaillardet: "Re: [OMPI devel] Bug"</a>
<li><strong>Previous message:</strong> <a href="17518.php">Lisandro Dalcin: "[OMPI devel] Regressions: MPI_Win_{start|post}() with MPI_GROUP_EMPTY"</a>
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
