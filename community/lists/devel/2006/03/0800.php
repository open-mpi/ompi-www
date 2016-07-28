<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 15:07:23 2006" -->
<!-- isoreceived="20060331200723" -->
<!-- sent="Fri, 31 Mar 2006 13:07:20 -0700" -->
<!-- isosent="20060331200720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="442D8BF8.8070003_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060331195550.GB28286_at_cluster.inf-ra.uni-jena.de" -->
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
<strong>Date:</strong> 2006-03-31 15:07:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Actually, we have some sensor network folks that are interested in
using OpenRTE for their applications. Their platforms can be small
microprocessors, many with custom mini-operating systems. Almost none
support IPv6 nor have any knowledge of that protocol.<br>
<br>
Ralph<br>
<br>
<br>
Christian Kauhaus wrote:
<blockquote cite="mid20060331195550.GB28286@cluster.inf-ra.uni-jena.de"
 type="cite">
  <pre wrap="">Ralph Castain <a class="moz-txt-link-rfc2396E" href="mailto:rhc@lanl.gov">&lt;rhc@lanl.gov&gt;</a>:
&gt;From the run-time perspective, whatever you do *must* support heterogeneous
  </pre>
  <blockquote type="cite">
    <pre wrap="">networks of computers that may and may not support IPv6, and may and may not
support IPv6-mapped IPv4 addresses. In other words, the solution must support
systems including computers that only know IPv4.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
It is clear to me that we cannot entirely rely on the availability of
IPv6-mapped IPv4 addresses. Getting the IPv6-enabled sources to compile
on systems without sockaddr_in6 or getaddrinfo() is sort of nasty, but
should be possible. For example, we could extend the configure script to
test this and provide some drop-in replacements in case these
structures/call are missing on the system.

Are there some reference platforms which are really old, but need to
be supported? The information on slide 101 on
<a class="moz-txt-link-freetext" href="http://www.open-rte.org/documentation/march-2006-orte/March-2006-ORTE.pdf">http://www.open-rte.org/documentation/march-2006-orte/March-2006-ORTE.pdf</a>
is fairly generic...

  Christian

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0801.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/04/0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
