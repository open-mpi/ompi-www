<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 15:33:02 2007" -->
<!-- isoreceived="20070416193302" -->
<!-- sent="Mon, 16 Apr 2007 13:32:57 -0600" -->
<!-- isosent="20070416193257" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE scalability issues" -->
<!-- id="C2492B89.8B08%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-04-16 15:32:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1422.php">Ralph H Castain: "[OMPI devel] OpenRTE and &quot;malloc&quot;"</a>
<li><strong>Previous message:</strong> <a href="1420.php">Brian Barrett: "Re: [OMPI devel] SOS!! Run-time error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Reply:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I understand that several people are interested in the OpenRTE scalability
<br>
issues - this is great! However, it appears we haven't done a very good job
<br>
of circulating information about the identified causes of the current
<br>
issues. In the hope of helping people to be productive in their
<br>
contributions, I thought it might be useful if we circulated both the info
<br>
and diagnoses to-date, as well as current remediation plans that have been
<br>
developed by those of us working on the issues so far and the status of
<br>
those efforts.
<br>
<p>First, a quick recap so everyone starts from a common knowledge base. We
<br>
have performed roughly 4 scalability tests on OpenRTE/Open MPI over the last
<br>
two years. In each case, we had exclusive use of a large cluster so that we
<br>
could run large scale jobs - typically consisting of 500+ nodes and up to 8K
<br>
processes, operating under either SLURM or TM environments. We have also
<br>
received some scaling data from efforts at Sun involving Solaris-based
<br>
systems running under N1GE. The tests showed we could reliably launch to
<br>
about the 1K process level, but we encountered difficulties when extending
<br>
significantly beyond that point.
<br>
<p>The scalability issues generally breakdown into two categories:
<br>
<p>1. Memory consumption. We see a &quot;spike&quot; in memory usage by the HNP early in
<br>
the launch process that can be quite large. In the earliest tests, we saw
<br>
GBytes consumed during the launch of ~2K processes, with a steady-state
<br>
usage of ~20MBytes. The spike was caused by the copying of buffers during
<br>
transmission of OOB messages, combined with the large size of the STG1 xcast
<br>
message. This was corrected at the time (courtesy of Tim W) by having the
<br>
OOB *not* copy message buffers. Follow-on tests showed that the memory
<br>
&quot;spike&quot; had essentially disappeared.
<br>
<p>However, recent tests indicate that this &quot;fix&quot; may have been lost, or we may
<br>
now be using a code path that bypasses it (we used to send the xcast
<br>
messages via blocking sends, but now use non-blocking sends, which do follow
<br>
a slightly different code path). Regardless of the reason, it appears that
<br>
the copying of buffers has returned, and OpenRTE once again exhibits the
<br>
GByte memory &quot;spike&quot; on large jobs.
<br>
<p>Steady-state memory usage is driven by two things. First, we made a design
<br>
decision at the beginning of the project to provide maximum system
<br>
flexibility. Hence, there is no overarching control over the data being
<br>
stored within the system (specifically, within the GPR framework), and each
<br>
component/framework is free to store whatever its author wants. Given the
<br>
free-lance nature of the development of these components, there is some
<br>
non-trivial duplication of information on the GPR. However, if you add all
<br>
that up, it doesn't amount to a very large number (on the order of a few
<br>
megabytes for large scales). On machines of interest to those of us working
<br>
on the code at the time, the steady-state memory footprint was not a
<br>
priority issue - hence, little has been done to reduce it.
<br>
<p><p>2. OOB communications. There are two primary issues in this category, both
<br>
of which lead back to the same core problem. First, the number of TCP socket
<br>
connections back to the HNP grows linearly with the number of processes. In
<br>
the most recent tests, Galen reported ~20K sockets being opened on the HNP
<br>
for an 8K process job running on 4K nodes. If you look at the code, you will
<br>
find that (a) 8K of those sockets are due to each MPI process connecting
<br>
directly back to the HNP, and (b) 4K of those sockets are due to the orteds
<br>
on each node connecting back to the HNP. The other 8K sockets appear to be
<br>
due to a &quot;bug&quot; in the code: from what I can tell so far, it appears that
<br>
either the MPI layer's BTL/TCP component is opening a socket to the HNP,
<br>
even though the HNP isn't actually part of the MPI job itself, or the
<br>
processes are opening duplicate OOB sockets back to the HNP. I am not
<br>
certain which (or either) of these is the root cause, however - it needs
<br>
further investigation to identify the source of the extra sockets.
<br>
<p>The large number of sockets on the HNP causes timeout problems during the
<br>
initial &quot;connection storm&quot; as processes start up, which subsequently causes
<br>
the MPI job to go into &quot;retry hell&quot;. To help relieve that problem, a
<br>
&quot;listener thread&quot; was introduced on the HNP (courtesy of Brian) that could
<br>
absorb the connections at a much higher rate. This has now been debugged in
<br>
the current OMPI trunk (and I believe was just moved to 1.2.1 for release).
<br>
<p>The second issue is the time it takes to transmit the various stage gate
<br>
messages from the HNP to each MPI process. The only stage gate of concern
<br>
here is STG1 since that is where substantial data is involved (we send info
<br>
required to inform each process of its peers for interconnect purposes). The
<br>
current OMPI trunk uses a &quot;direct&quot; method - i.e., the HNP sends the stage
<br>
gate messages directly to each MPI process.
<br>
<p>We have already implemented two measures to help reduce this part of the
<br>
problem. First, late last year we revised the GPR notification message
<br>
system to allow subscribers to eliminate (or at least drastically reduce)
<br>
descriptive information sent with the message. We also changed the buffer
<br>
packing system to likewise eliminate data type descriptions. This succeeded
<br>
in significantly reducing the *size* of the message itself.
<br>
<p>Second, we implemented a routed xcast messaging system that sends the stage
<br>
gate messages through the local orted. Thus, the *number* of messages being
<br>
sent dropped by a factor equal to the number of processes/node.
<br>
<p>These two measures (reducing the message size and routing it through the
<br>
orted) had the effect of chopping the stage gate time in more than half (for
<br>
our 2ppn test machines). The message size changes are in the OMPI trunk and
<br>
in 1.2 - however, the xcast routing code remains solely in the ORTE trunk.
<br>
In addition, the ORTE trunk contains code for each MPI process to create a
<br>
connection to its local orted - this does not currently exist within the
<br>
OMPI trunk or 1.2 release.
<br>
<p><p>The remediation plans currently underway primarily focus on the OOB as this
<br>
appears to be the central figure in both observed issues. The primary effort
<br>
is aimed at creating a general message routing capability for the OOB.
<br>
Several of us have discussed various design options - as things stand, I owe
<br>
that group of people a draft design document (which I'm late in delivering).
<br>
<p>A routable OOB would yield several immediate benefits. First, it would
<br>
significantly reduce the connection storm problem and provide a more
<br>
scalable connection plan for the HNP. Second, it would reduce the memory
<br>
&quot;spike&quot; since the HNP would be generating far fewer messages. And finally,
<br>
it would reduce the xcast transmission (assuming the routing algorithm
<br>
includes some type of tree-like structure).
<br>
<p>The secondary effort is aimed at removing the copying of message buffers
<br>
within the OOB. We have two issues inside this area. First, Tim W originally
<br>
copied the buffers for protective purposes - e.g., since the OOB queues
<br>
messages, a non-blocking caller could release the buffer prior to the OOB
<br>
actually sending it. The simplest method of protection was to have the OOB
<br>
retain its own copy, thus ensuring it was always there when transmission
<br>
actually occurred. Of course, at the time we were only worrying about
<br>
launching jobs of a few hundred processes - not thousands. ;-) This practice
<br>
probably needs to be reviewed in terms of future requirements, although we
<br>
have to be careful since portions of the code may *rely* now on this
<br>
behavior.
<br>
<p>One possible alternative that has been discussed is to create a new
<br>
&quot;send_multiple&quot; API that allows us to pass a single buffer along with an
<br>
array of recipients to the OOB. In this case, even though the buffer is
<br>
being copied, it would only be copied one time since the OOB would control
<br>
that memory copy while cycling through all the recipients. I'm not sure if
<br>
this is the correct approach, but it may merit some thought.
<br>
<p><p>My expectation is that the current ORTE trunk's xcast routing and
<br>
orted-to-local-proc connection codes will move over to the OMPI trunk at
<br>
some time in the near future (awaiting release of the current OMPI trunk
<br>
&quot;freeze&quot; called to last until 1.2.1 gets out). The OOB revisions have no
<br>
real schedule at this time - however, both code changes were targeted for
<br>
the 1.3 release (and specifically were *not* to be released in the 1.2
<br>
series, per the Dec decision).
<br>
<p>I hope that helps provide some food for thought. Feel free to ask questions
<br>
- so far, the discussions have involved several people, so you are welcome
<br>
to just hit the mailing lists.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1422.php">Ralph H Castain: "[OMPI devel] OpenRTE and &quot;malloc&quot;"</a>
<li><strong>Previous message:</strong> <a href="1420.php">Brian Barrett: "Re: [OMPI devel] SOS!! Run-time error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Reply:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
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
