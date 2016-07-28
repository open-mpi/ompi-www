<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 13:46:30 2006" -->
<!-- isoreceived="20060331184630" -->
<!-- sent="Fri, 31 Mar 2006 11:46:26 -0700" -->
<!-- isosent="20060331184626" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="442D7902.8070209_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060331165305.GD1642_at_ipc256.inf.uni-jena.de" -->
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
<strong>Date:</strong> 2006-03-31 13:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
Hi folks<br>
<br>
Sorry to be coming late to the discussion - I'm on travel, so my
comments will likely have long time delays in them.<br>
<br>
Only one contribution I would like to make. You are welcome to do
whatever you like (subject to the usual approval procedure) in the MPI
layer (the btl's for example) - my
comments only apply to the OpenRTE layer (specifically, the oob tcp
component).<br>
<br>
>From the run-time perspective, whatever you do *must* support
heterogeneous networks of computers that may and may not support IPv6,
and may and may not support IPv6-mapped IPv4 addresses. In other words,
the solution must support systems including computers that only know
IPv4.<br>
<br>
I know this may make things more difficult, but OpenRTE has additional
requirements on it for other applications as well. We cannot lock
ourselves into IPv6-supported systems.<br>
<br>
Thanks<br>
Ralph<br>
<br>
<br>
Christian Kauhaus wrote:
<blockquote cite="mid20060331165305.GD1642@ipc256.inf.uni-jena.de"
 type="cite">
  <pre wrap="">Adrian Knoth <a class="moz-txt-link-rfc2396E" href="mailto:adi@drcomp.erfurt.thur.de">&lt;adi@drcomp.erfurt.thur.de&gt;</a>:
  </pre>
  <blockquote type="cite">
    <pre wrap="">(I really prefer the v6-mapped-v4 solution with a single
socket, thus eliminating this problem)
    </pre>
  </blockquote>
  <pre wrap=""><!---->
One little problem here is that it is possible to disable the
IPv6-mapped IPv4 addresses at least under Linux and some BSD variants.
For Linux, have a look at sys.net.ipv6.bindv6only.  Some authors even
recommend to do so for security considerations (for example, Murphy &amp;
Malone in IPv6 Network Administration, O'Reilly 2005). 

So the approach that maximizes the environments where it works out of
the box is this: Call getaddrinfo with PF_UNSPEC and open a socket for
each IP version it returns (usually this means two sockets on
IPv6-enabled hosts, but this may change in the future... who knows?)

If the connection handling code already makes use of one big select
loop, this should not be *too* hard...

  Christian

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0796.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0799.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
