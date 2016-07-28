<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 12 09:54:13 2007" -->
<!-- isoreceived="20070612135413" -->
<!-- sent="Tue, 12 Jun 2007 07:54:08 -0600" -->
<!-- isosent="20070612135408" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Major commit to trunk" -->
<!-- id="C29401A0.9823%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-06-12 09:54:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<li><strong>Reply:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>I made a major commit to the trunk this morning (r15007) that merits general
<br>
notification and some explanation.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;*** IMPORTANT NOTE ***
<br>
One major impact of the commit you *may* notice is that support for several
<br>
environments will be broken. This commit is known to break support for the
<br>
following environments: POE, Xgrid, Xcpu, Windows - these environments will
<br>
not compile at this time. It has been tested on rsh, SLURM, and Bproc.
<br>
Modifications for TM support have been made but could not be verified due to
<br>
machine problems at LANL. Modifications for SGE have been made but could not
<br>
be verified. I will send out a separate note to developers of the borked
<br>
environments with suggestions on how to fix the problems. These should be
<br>
relatively minor, mostly involving a minor change to a couple of function
<br>
calls and the addition of one function call in their respective launch
<br>
functions.
<br>
<p><p>As many of you have noted, the ORTE launch procedure relies heavily on the
<br>
orte_rml.xcast function to communicate occasionally large messages to every
<br>
process in a job. This procedure has - until now - been a linear
<br>
communication that sent the messages directly to every process. Obviously,
<br>
as many of you have pointed out, this was a very inefficient methodology.
<br>
<p>This commit repairs that problem, but it comes with a few side effects. You
<br>
shouldn't notice anything different (except hopefully for faster starts),
<br>
but I will note the differences here.
<br>
<p>First, orte_rml.xcast has become a general broadcast-like messaging system.
<br>
Messages can now be sent to any tag on the daemons or processes. Note that
<br>
any message sent via xcast will be delivered to ALL processes in the
<br>
specified job - you don't get to pick and choose. At a later date, we will
<br>
introduce an augmented capability that will use the daemons as relays, but
<br>
will allow you to send to a specified array of process names.
<br>
<p>We also modified orte_rml.xcast so it supports more scalable message routing
<br>
methodologies. At the moment, we support three:
<br>
<p>(a) direct, which sends the message directly to all recipients. By default,
<br>
this mode is used whenever we have less than 10 daemons. You can adjust that
<br>
crossover point via the oob_xcast_linear_xover param - set this param to the
<br>
number of daemons where you want direct to give way to linear. Obviously, if
<br>
you set this to something very large, then we will only use direct xcast
<br>
mode - set it to zero, and we won't use direct at all. Alternatively, you
<br>
can force the use of direct at all scales by setting oob_xcast_mode to
<br>
&quot;direct&quot;.
<br>
<p>(b) linear, which sends the message to the local daemon on each node. The
<br>
daemon then relays it to its own local procs. Note that the daemons in this
<br>
mode do not relay the message between themselves, but only to their local
<br>
procs. As per a prior message, I have set linear to be the default mode on
<br>
all jobs involving more than 10 daemons. Again, you can adjust this by
<br>
setting a lower bound on where linear kicks in (as described above). You can
<br>
also set an upper bound where linear gives way to binomial by setting the
<br>
oob_xcast_binomial_xover param. Alternatively, you can force the use of
<br>
linear at all scales by setting oob_xcast_mode to &quot;linear&quot;.
<br>
<p>(c) binomial, which sends the message via a binomial algo across all the
<br>
daemons, each of which then relays to its own local procs. This is just a
<br>
typical binomial algorithm across the daemons. At this time, I have set the
<br>
default on this mode to be &quot;off&quot; so it will never kick on. If you want to
<br>
try it out, you will need to either adjust the xover param (as described
<br>
above), or set oob_xcast_mode to &quot;binomial&quot;.
<br>
<p>Please note that we *do* use the direct messaging mode whenever there is
<br>
only one daemon in the system. This is non-negotiable - it is mandated for
<br>
singletons and for getting mpirun up and running. Besides, if there is only
<br>
one daemon in the system, every message goes &quot;direct&quot; no matter which mode
<br>
you pick, so you shouldn't care. ;-)
<br>
<p>Also note that the current crossover points were totally arbitrary. I have
<br>
no data to base those crossovers on, so I simply picked something for now.
<br>
If those of you with access to larger systems and with some free time could
<br>
try various values, then we could come up with something more intelligent.
<br>
Any data would be most appreciated!
<br>
<p>This commit also involved a significant change to the orteds themselves. The
<br>
requirement that orteds *always* be available to relay messages mandated a
<br>
change in the way they come alive. In the past, orteds bootstrapped
<br>
themselves in two totally different code paths: bootproxy or VM. This is no
<br>
longer supported. Orteds now always behave like they are part of a virtual
<br>
machine - they simply launch a job if mpirun tells them to do so. This is
<br>
another step towards creating an &quot;orteboot&quot; functionality, but also provided
<br>
a clean system for supporting message relaying.
<br>
<p>Note one major impact of this commit: multiple daemons on a node cannot be
<br>
supported any longer! Only a single daemon/node is now allowed. You
<br>
shouldn't notice any difference as this was always transparent. However, if
<br>
you are working in an environment where daemons occupied job slots, you
<br>
should see some benefit.
<br>
<p>Please let me know of any problems. I did my best to test this, but there
<br>
will undoubtedly be some problems that crop up, and some code paths that are
<br>
borked that I didn't see on any of my available machines or in my
<br>
configurations.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<li><strong>Previous message:</strong> <a href="1665.php">Richard Graham: "Re: [OMPI devel] threaded builds"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
<li><strong>Reply:</strong> <a href="1667.php">Jeff Squyres: "Re: [OMPI devel] Major commit to trunk"</a>
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
