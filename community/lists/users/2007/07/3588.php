<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 19:45:52 2007" -->
<!-- isoreceived="20070705234552" -->
<!-- sent="Thu, 5 Jul 2007 19:45:48 -0400" -->
<!-- isosent="20070705234548" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI 1.2.3 spec file" -->
<!-- id="2453e2900707051645t2a5a7fdchcb8abbff989b9f51_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 19:45:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3587.php">Jeff Squyres: "Re: [OMPI users] Exclude/Include HCA with OpenIB BTL ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Greetings,
<br>
<p>The spec file provided in the latest stable src RPM makes it possible
<br>
to change the name of the resulting RPM. I tried to make use of that,
<br>
but ran into some issues. Specifically, the resulting RPM does not
<br>
have the etc directory (and sample config files in it). rpmbuild
<br>
complained about that when it checked for left-over/unpackaged files,
<br>
and it seems that, despite the name change, the etc config files were
<br>
still installed under openmpi subdirectory, i.e. the new name I have
<br>
provided was not honoured by this part of the build.
<br>
<p>Here are my compilation options:
<br>
<p>rpmbuild --rebuild --define=&quot;configure_options \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib=/usr/include/infiniband \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-openib-libdir=/usr/lib64&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--define=&quot;install_in_opt 1&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--define=&quot;_name openmpi_mine&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-D &quot;_defaultdocdir /opt/openmpi_mine/1.2.3/share&quot; \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--define=&quot;mflags all&quot; openmpi-1.2.3-1.src.rpm
<br>
<p>Platform: RHEL4U5, arch=x86-64
<br>
<p>Has anybody seen the same problem when attempting to change the RPMs
<br>
name? How can I solve/work around this issue?
<br>
<p>Adjacent to this, I also noticed that the doc file path remains
<br>
unchanged when I request install_in_opt. I get around this by making
<br>
an explicit definition for %_defaultdocdir macro on the command line,
<br>
but I think this would make sense to include into the spec file
<br>
itself. Below would be a simple proposed fix for this:
<br>
<p>--- openmpi-1.2.3.spec  2007-07-05 17:00:54.000000000 -0400
<br>
+++ openmpi-1.2.3.spec.new      2007-07-05 19:39:49.000000000 -0400
<br>
@@ -180,6 +180,7 @@
<br>
&nbsp;%define _includedir /opt/%{name}/%{version}/include
<br>
&nbsp;%define _mandir /opt/%{name}/%{version}/man
<br>
&nbsp;%define _pkgdatadir /opt/%{name}/%{version}/share/%{name}
<br>
+%define _defaultdocdir /opt/%{name}/%{version}/share
<br>
&nbsp;%endif
<br>
<p><p>Thanks,
<br>
Alex.
<br>
<p>P.S. BTW, I would like to commend the author of the Open MPI spec file
<br>
- it's the most feature-rich spec file I've ever seen. One can learn
<br>
from it by example...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Previous message:</strong> <a href="3587.php">Jeff Squyres: "Re: [OMPI users] Exclude/Include HCA with OpenIB BTL ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
<li><strong>Reply:</strong> <a href="3589.php">Alex Tumanov: "Re: [OMPI users] Open MPI 1.2.3 spec file"</a>
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
