<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 14:55:56 2006" -->
<!-- isoreceived="20060331195556" -->
<!-- sent="Fri, 31 Mar 2006 21:55:51 +0200" -->
<!-- isosent="20060331195551" -->
<!-- name="Christian Kauhaus" -->
<!-- email="ckauhaus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="20060331195550.GB28286_at_cluster.inf-ra.uni-jena.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="442D7902.8070209_at_lanl.gov" -->
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
<strong>From:</strong> Christian Kauhaus (<em>ckauhaus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-31 14:55:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;From the run-time perspective, whatever you do *must* support heterogeneous
</span><br>
<span class="quotelev1">&gt;networks of computers that may and may not support IPv6, and may and may not
</span><br>
<span class="quotelev1">&gt;support IPv6-mapped IPv4 addresses. In other words, the solution must support
</span><br>
<span class="quotelev1">&gt;systems including computers that only know IPv4.
</span><br>
<p>It is clear to me that we cannot entirely rely on the availability of
<br>
IPv6-mapped IPv4 addresses. Getting the IPv6-enabled sources to compile
<br>
on systems without sockaddr_in6 or getaddrinfo() is sort of nasty, but
<br>
should be possible. For example, we could extend the configure script to
<br>
test this and provide some drop-in replacements in case these
<br>
structures/call are missing on the system.
<br>
<p>Are there some reference platforms which are really old, but need to
<br>
be supported? The information on slide 101 on
<br>
<a href="http://www.open-rte.org/documentation/march-2006-orte/March-2006-ORTE.pdf">http://www.open-rte.org/documentation/march-2006-orte/March-2006-ORTE.pdf</a>
<br>
is fairly generic...
<br>
<p>&nbsp;&nbsp;Christian
<br>
<p><pre>
-- 
Dipl.-Inf. Christian Kauhaus                               &lt;&gt;&lt;
Lehrstuhl fuer Rechnerarchitektur und -kommunikation 
Institut fuer Informatik * Ernst-Abbe-Platz 1-2 * D-07743 Jena
Tel: +49 3641 9 46376  *  Fax: +49 3641 9 46372   *  Raum 3217
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0798.php">Brooks Davis: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>In reply to:</strong> <a href="0797.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0800.php">Ralph Castain: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
