<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 28 11:27:55 2006" -->
<!-- isoreceived="20060328162755" -->
<!-- sent="Tue, 28 Mar 2006 09:27:49 -0700" -->
<!-- isosent="20060328162749" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI users] Connecting multiple applications" -->
<!-- id="44296405.7000106_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-28 11:27:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Michael Kluskens: "Re: [OMPI users] Best MPI implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Reply:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Maybe reply:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
There has been some discussion on this list about connecting multiple
applications so that their processes can inter-communicate and/or
inter-operate. I thought it might be of help if I briefly described the
mechanisms within Open MPI for doing this - in doing so, I will not
limit myself to the MPI interface, but will discuss the more general
capabilities of the Open MPI/OpenRTE system.<br>
<br>
Note: I apologize if I confuse people by using "OpenRTE" explicitly
here. However, the OpenRTE layer underneath Open MPI is where this
functionality is actually implemented, and - in one option below - it
provides some functionality that lies outside the MPI standard but
might be of interest to the community. <br>
<br>
Let me start by describing the design for Open MPI/OpenRTE, and then
I'll briefly explain what part of that is in the current release.<br>
<br>
Design<br>
There are three ways for interconnecting applications with Open
MPI/OpenRTE:<br>
<br>
1. Dynamic process spawning using the MPI "comm_spawn" methodology.
Open MPI includes support for dynamic process spawning as defined in
the MPI standard. For the purposes of this discussion, note that this
requires the application developer to incorporate the path name of the
application to be spawned into the source code. Thus, connecting to
another application - or another (differently named) version of the
application - requires a change to the source code.<br>
<br>
2. Run-time connection using the "connect" command-line option. The
benefit of this approach is that you don't have to directly code the
applications that are being connected - i.e., you don't have to put
anything in your source code that stipulates the precise application to
which you want to be connected. Instead, this option simply connects
all the processes from one instance of "mpirun" to another. Of course,
your code still has to know what to do with the communication channel.<br>
<br>
As a (probably bizarre) example, consider the case where I have built a
model that uses a utility code to generate some information (e.g., a
mesh). The utility code does this whenever my model transmits a set of
parameters to all the processes in the utility code, and the utility
code communicates its output back via an MPI transmission. Using this
option for connecting applications, I can experiment with different
versions of my utility code by simply: (a) executing my model via an
mpirun command, and then (b) executing a version of the utility with
another mpirun, and connecting it to the model via the "connect'
option. No change to source code (e.g., to embed the name of the
alternative version) is required, nor do I have to recompile the model
- everything is handled at run-time.<br>
<br>
3. Direct synchronization using the OpenRTE General Purpose Registry
(GPR). The prior two options only provide a means for exchanging
communication connection information between processes of different
applications. There are times, though, when multi-application
integration requires more - for example, two applications might need to
synchronize their computations so that one knows when the other has
completed its work. One such case could be in climate models, where an
atmospheric propagation model might want to "pause" until a sea-ice
model has completed the latest epoch calculation, and then use the
output of that model as input to its own computation of the next epoch.<br>
<br>
This could be accomplished via option 1 (dynamic spawning), coupled
with the transmission of messages to coordinate action. However, we
have built another option into the system that makes this a little more
transparent and (perhaps) easier to accomplish. In addition, it
automatically supports asynchronous operations so that applications can
use event-driven logic to guide their operations.<br>
<br>
This mode requires that the developer(s) of the applications do a
little planning as they must agree on the definition of registry
locations for synchronizing information (for more on the registry's
data representation scheme, see the OpenRTE design document at
<a class="moz-txt-link-freetext" href="http://www.open-rte.org/documentation/design.php">http://www.open-rte.org/documentation/design.php</a>). With that done, each
application would "subscribe" to the location where other applications
will be writing synchronizing flags. In the case of the climate model,
for example, the sea-ice model could write the time stamp for the
completed epoch in a location. The climate model would subscribe to
that location and request notification whenever the value in that
location is changed - the model might also stipulate that another
registry location containing the name of the sea-ice model's output
file for that epoch be returned to it whenever the subscription fires.<br>
<br>
Clearly, given the exchange of communication ports in options 1 or 2,
an application developer could implement this degree of synchronization
themselves. The advantage of this approach, however, is that it
relieves the application programmer from having to implement such
protocols themselves in every application - the complexities of
identifying trigger events, notifying other applications, etc. is all
handled for them "under the covers".<br>
<br>
My guess is that we'll find more ways to take advantage of this
capability as people begin to experiment with it.<br>
<br>
Current Release<br>
The current release supports options 1 and 3 at this time, although the
interface for option 3 has not yet been exposed through the MPI layer.
Users desiring to use and/or experiment with direct synchronization
will need to configure Open MPI with the "--with-devel-headers" option
so that the OpenRTE include files will be copied to the install
directory tree. Once this has been done, you will have full access to
the GPR's API, which is described in the gpr.h header. Further
documentation on option 3 will be released in upcoming weeks.<br>
<br>
<br>
I hope that helps answer some of your questions - and also that it
stimulates some thought on how you might explore these capabilities as
they are released!<br>
Ralph<br>
<br>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0924.php">Brian Barrett: "Re: [OMPI users] Absoft fortran detected as g77?"</a>
<li><strong>Previous message:</strong> <a href="0922.php">Michael Kluskens: "Re: [OMPI users] Best MPI implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Reply:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>Maybe reply:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
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
