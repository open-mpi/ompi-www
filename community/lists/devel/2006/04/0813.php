<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  4 06:26:31 2006" -->
<!-- isoreceived="20060404102631" -->
<!-- sent="Tue, 04 Apr 2006 04:26:27 -0600" -->
<!-- isosent="20060404102627" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] IPv6 in OpenRTE" -->
<!-- id="443249D3.9000509_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-04 06:26:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Reply:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe reply:</strong> <a href="0817.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
There has been a lot of discussion about IPv6 in Open MPI and OpenRTE
recently. My comments here relate solely to OpenRTE and are intended to
help provide some clarity to the discussion.<br>
<br>
OpenRTE communications are done via the Runtime Messaging Library (RML)
API. The RML is really a strategy layer - it determines which transport
will be used for the given message, and handles routing where required
(e.g., between cells). In our component architecture, the RML is
implemented as a framework - only one RML component can be selected and
active in a process.<br>
<br>
Sitting under the RML is one or more transport systems - these are
known as Out-Of-Band (OOB) components and reside in the oob framework.
Because the OpenRTE messaging system must work in a heterogeneous
environment, multiple OOB components can be selected and active at one
time. The RML is responsible for picking the correct OOB to use to
communicate to a specific process in the most efficient manner possible.<br>
<br>
Message destinations are specified in terms of OpenRTE process names -
*not* IP addresses. Thus, a message is sent to a particular OpenRTE
process name - it is the shared responsibility of the RML and its
underlying OOB components to translate that into a network address. The
exact role of the RML versus the OOB in that translation process has
not yet been determined.<br>
<br>
Communication contact information for each process is provided to a
process during startup in the form of URI's that contain the OpenRTE
process name, IP address, and socket. A process is first given the URI
for the head node process (HNP) of that cell. This is done so that the
process can obtain subsequent information from the registry such as
contact info for all other processes in the job, MPI-layer contact
information, etc. The URI for each process clearly indicates whether
IPv6 or IPv4 is to be used for contacting that process name. The system
allows for multiple URI's to be provided for the same process name -
selection of which one to use for a given message is done by the RML
based on (a) interface availability (e.g., if only IPv4 is available,
then that is the one used) and (b) network congestion. Hence, there is
no ambiguity over which transport to use.<br>
<br>
In the case of IPv6 versus IPv4, the expectation was that there would
be two OOB components, one each for these two protocols. The OOB
components are selected based on local support - i.e., if the local
system supports IPv6, then that component would be selected and
available. Likewise, if the local system can support IPv4, that
component would be selected too.<br>
<br>
I hope that helps clarify OpenRTE's operation. I truly believe that
including IPv6 and IPv4 components in the OOB will be fairly simple to
accomplish. Yes, there may be some duplicate code - if there is enough
duplication, we can move the duplicate code into the OOB's base and let
the two components share it. Otherwise, a little duplication isn't that
big a deal.<br>
<br>
I'd be happy to answer further questions. I believe you will find that
the Open MPI transport layer operates in a very similar manner, though
I leave that to Tim and Galen to clarify.<br>
<br>
Ralph<br>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0814.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0812.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Reply:</strong> <a href="0815.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe reply:</strong> <a href="0817.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] IPv6 in OpenRTE"</a>
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
