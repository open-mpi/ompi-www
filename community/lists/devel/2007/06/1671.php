<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 20:58:26 2007" -->
<!-- isoreceived="20070613005826" -->
<!-- sent="Tue, 12 Jun 2007 18:58:20 -0600" -->
<!-- isosent="20070613005820" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Fast ORTE" -->
<!-- id="C2949D4C.3032%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-06-12 20:58:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1672.php">Daniel Spångberg: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>Over the last 12-18 months, several of us (both inside and outside the Open
<br>
MPI community) have discussed a variety of methods for making OpenRTE
<br>
considerably faster - i.e., changes that would decrease launch times by at
<br>
least one order of magnitude. While we documented the results, our general
<br>
feeling has been to hold off from any implementation as the required changes
<br>
would have compromised some features that users outside the Open MPI
<br>
community might have wished to exploit.
<br>
<p>In recent months, however, the non-Open MPI users have largely decided to
<br>
pursue other options. There are a couple of reasons for this, but they are
<br>
irrelevant to this discussion. What is relevant is that with the departure
<br>
of those interests, there no longer is a valid reason for not streamlining
<br>
the system. I have discussed this situation with several members of the Open
<br>
MPI community, and the strong consensus was to go ahead with the necessary
<br>
implementation.
<br>
<p>The changes will cost us a slight decrease in flexibility and programmer
<br>
friendliness, but preliminary estimates show a potential decrease in launch
<br>
time of roughly 20x at scale. The cost, therefore, seems worth the gain.
<br>
<p>The changes primarily revolve around the use of the GPR. Let me make
<br>
something clear right away - it is *not* the GPR itself that is the cause of
<br>
the slowdown, but rather the way we utilize it and the secondary impacts
<br>
that result from those choices. Yes, the GPR *will* also see a major
<br>
increase in the speed with which it processes requests, but the primary
<br>
benefits will come from other areas in the code.
<br>
<p>The primary change involves replacement of the character string keys used to
<br>
label data with uint8_t's. The immediate impact of this change is to reduce
<br>
the size of the STG1 stage gate message - the primary rate limiting factor
<br>
in today's launch procedure - by a factor of approximately 15-20x. It means,
<br>
however, that keys will now have to be defined in a central location (you
<br>
won't just be able to declare a new string in your component and use it). We
<br>
will retain some flexibility by extending the name service to support
<br>
dynamic key definition ala the current RML tag service. We expect, though,
<br>
that all ORTE standard keys will be defined in a new orte_schema.h file to
<br>
avoid speed impacts of registering dynamic keys (especially on remote
<br>
nodes).
<br>
<p>This change also allows us to eliminate all dictionary functions from the
<br>
GPR, replacing them by simply using the key as a direct index into the GPR
<br>
storage arrays. This has the immediate benefit of greatly simplifying the
<br>
GPR internal code (e.g., the search code becomes a simple array index) and
<br>
provides a corresponding increase in speed. Similarly, GPR segments will
<br>
also become simple numeric indices. Tokens that were used to identify
<br>
containers on a given segment will be replaced by numeric indices as well -
<br>
for job segments, the index will simply be the vpid of each process. On the
<br>
job-master segment, the container index will be the jobid.
<br>
<p>On the node segment, the container index will be the nodeid - a numeric
<br>
equivalent to each node's character string name. We will assign a numeric id
<br>
to every node as we allocate it, and use that id in place of the current
<br>
string nodenames. For those of you that want the string nodename in the proc
<br>
structures for debugging and user-friendly error messages, we will provide
<br>
that info based on an MCA param (either the current one or a slight variant
<br>
- remains TBD). This will allow you to assess the performance impact of
<br>
retaining those nodenames. Meantime, ORTE itself will be converted to use
<br>
the node id for reduced communications and more efficient interface to the
<br>
GPR.
<br>
<p>Finally, we will further reduce the size of the STG1 message (and any other
<br>
stage gate messages) by compressing the data stream. First, we will remove
<br>
the current system of indexing data using process names - the GPR will
<br>
ensure that data is returned in a container-ordered array. Thus, we can know
<br>
for certain that the data from each container is being provided to us in
<br>
sequential order without having to include some index such as a process or
<br>
node name.
<br>
<p>Second, we will remove duplication of data across subscriptions going to a
<br>
specific process. The current system simply sends the data requested by each
<br>
subscription without worrying about any duplications between subscriptions.
<br>
Hence, we send multiple copies of node names, process names, and other
<br>
information across the wire as part of the STG1 message. As part of a later
<br>
stage to this planned change, we will compress that information by dealing
<br>
with duplication at the local level - i.e., the GPR proxy will maintain a
<br>
record of duplicate data requests, a single copy of each data element will
<br>
be sent, and the GPR proxy will deal with the duplication at its end.
<br>
<p><p>These changes will be implemented in several phases on a tmp branch. Each
<br>
phase will be tested across several environments and then brought over to
<br>
the trunk. The first phase will be the most intrusive as it will involve the
<br>
conversion from string to numeric keys, along with the corresponding changes
<br>
to the GPR. I hope to complete this phase sometime in early July.
<br>
<p>Please feel free to offer comments, suggestions, or - if so inclined -
<br>
assistance. I'll keep the community updated on progress as we go.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1672.php">Daniel Spångberg: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
<li><strong>Previous message:</strong> <a href="1670.php">Rainer Keller: "Re: [OMPI devel] Bug with MPI_TYPE_CREATE_STRUCT, MPI_BOTTOM and MPI_BCAST in fortran"</a>
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
