<?
$subject_val = "[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 16:46:31 2009" -->
<!-- isoreceived="20090327204631" -->
<!-- sent="Fri, 27 Mar 2009 15:46:24 -0500" -->
<!-- isosent="20090327204624" -->
<!-- name="Brad Benton" -->
<!-- email="bradford.benton_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: [Open MPI Announce] Critical bug notice" -->
<!-- id="44079e5f0903271346t6104bf28w37196dbc11c59fa7_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="951015C3-0139-4E62-8C89-CCD6B90BA82E_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: [Open MPI Announce] Critical bug notice<br>
<strong>From:</strong> Brad Benton (<em>bradford.benton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-27 16:46:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5720.php">Jeff Squyres: "[OMPI devel] Critical bug notice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In reference to this critical bug, there are implications for the current
<br>
1.3.x release schedule that are alluded to in Jeff's message.  In
<br>
particular, there are two time-critical issues at play:
<br>
&nbsp;&nbsp;1) getting a fix for #1853 in time for inclusion for OFED-1.4.1  2)
<br>
getting in Sun's changes/CMRs in time for their next test/release cycle
<br>
<p>Given those two time-constrained goals, we have decided to proceed as
<br>
follows:
<br>
&nbsp;&nbsp;- Sun's desired changes are either already in the 1.3 branch, or the CMRs
<br>
have already been approved for inclusion
<br>
&nbsp;&nbsp;- hold off non-Sun related CMRs until a fix for #1853 is available,
<br>
hopefully sometime next week
<br>
&nbsp;&nbsp;- release this combination as 1.3.2
<br>
&nbsp;&nbsp;- the windows functionality will then follow as a separate release: 1.3.3
<br>
<p>I know that this, once again, pushes out the windows functionality, but I
<br>
think that this is necessary in order to get this critical fix in.
<br>
<p>Thanks,
<br>
--Brad
<br>
<p><p><p>---------- Forwarded message ----------
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Date: Fri, Mar 27, 2009 at 1:34 PM
<br>
Subject: [Open MPI Announce] Critical bug notice
<br>
To: Open MPI Announcements &lt;announce_at_[hidden]&gt;, Open MPI Developers &lt;
<br>
devel_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>The Open MPI team has uncovered a serious bug in Open MPI v1.3.0 and v1.3.1:
<br>
when running on OpenFabrics-based networks, silent data corruption is
<br>
possible in some cases.  There are two workarounds to avoid the issue --
<br>
please see the bug ticket that has been opened about this issue for further
<br>
details:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/1853">https://svn.open-mpi.org/trac/ompi/ticket/1853</a>
<br>
<p>We strongly encourage all users who are using Open MPI v1.3.0 and/or v1.3.1
<br>
on OpenFabrics-based networks to read this ticket and use one of the
<br>
workarounds described there.
<br>
<p>The Open MPI team is working on a fix; it will be included in the v1.3.2
<br>
release.  Updates will be posted to the ticket.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
_______________________________________________
announce mailing list
announce_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/announce">http://www.open-mpi.org/mailman/listinfo.cgi/announce</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5724.php">George Bosilca: "Re: [OMPI devel] SM init failures"</a>
<li><strong>Previous message:</strong> <a href="5722.php">George Bosilca: "Re: [OMPI devel] Bug in MPI_Request_get_status (1.3.1) [PATCH]"</a>
<li><strong>In reply to:</strong> <a href="5720.php">Jeff Squyres: "[OMPI devel] Critical bug notice"</a>
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
