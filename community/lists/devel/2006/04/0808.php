<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr  3 09:26:17 2006" -->
<!-- isoreceived="20060403132617" -->
<!-- sent="Mon, 03 Apr 2006 07:26:09 -0600" -->
<!-- isosent="20060403132609" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="44312271.3040704_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20060403123148.GB27967_at_ipc256.inf.uni-jena.de" -->
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
<strong>Date:</strong> 2006-04-03 09:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
I think that would be okay - certainly&nbsp; makes a good starting point! If
it becomes an issue later, we can revisit at that time.<br>
<br>
Thanks<br>
Ralph<br>
<br>
<br>
Christian Kauhaus wrote:
<blockquote cite="mid20060403123148.GB27967@ipc256.inf.uni-jena.de"
 type="cite">
  <pre wrap="">Ralph Castain <a class="moz-txt-link-rfc2396E" href="mailto:rhc@lanl.gov">&lt;rhc@lanl.gov&gt;</a>:
  </pre>
  <blockquote type="cite">
    <pre wrap="">  Actually, we have some sensor network folks that are interested in
  using OpenRTE for their applications. Their platforms can be small
  microprocessors, many with custom mini-operating systems. Almost
  none support IPv6 nor have any knowledge of that protocol.
    </pre>
  </blockquote>
  <pre wrap=""><!---->
I see. Do you think that SUSv2[1] would be a good starting point? This
means that we can rely on getaddrinfo() but not on sockaddr_in6 and
friends. Is this ok?

Christian

[1] <a class="moz-txt-link-freetext" href="http://www.opengroup.org/onlinepubs/007908799/">http://www.opengroup.org/onlinepubs/007908799/</a>
  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0809.php">Bogdan Costescu: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0807.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/03/0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
