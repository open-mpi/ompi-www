<?
$subject_val = "[hwloc-devel] RHEL 5/6 SRPM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 13:55:27 2010" -->
<!-- isoreceived="20101104175527" -->
<!-- sent="Thu, 4 Nov 2010 13:55:18 -0400" -->
<!-- isosent="20101104175518" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] RHEL 5/6 SRPM" -->
<!-- id="71A7454E-E014-4417-8A28-55E14D0CC84A_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-devel] RHEL 5/6 SRPM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 13:55:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2702)"</a>
<li><strong>Previous message:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka --
<br>
<p>Question for you.  In making the hwloc 1.1rc tarball, I updated the GNU Autotools that hwloc is using.  It didn't occur to me until after the fact that this might be problematic for the RPM %configure macro that ships in RHEL5 and RHEL6 -- see this Open MPI ticket for details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2611">https://svn.open-mpi.org/trac/ompi/ticket/2611</a>
<br>
<p>I've been trying to engage the Red Hat Open MPI SRPM maintainer on this issue (Jay Fenlanson), but I haven't been able to elicit much of a reply.
<br>
<p>Hwloc doesn't ship an SRPM, but the same issue will occur because it's a what-version-of-autoconf-is-used-to-bootstrap-the-tarball issue.  Do you have any advice on what to do?  It would be somewhat surprising if Open MPI and/or hwloc are the only packages that have upgraded to Autoconf 2.68.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1420.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.2a1r2702)"</a>
<li><strong>Previous message:</strong> <a href="1418.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
