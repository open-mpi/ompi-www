<?
$subject_val = "[OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 19:38:03 2008" -->
<!-- isoreceived="20080313233803" -->
<!-- sent="Thu, 13 Mar 2008 16:37:06 -0700" -->
<!-- isosent="20080313233706" -->
<!-- name="Christopher Irving" -->
<!-- email="cirving_at_[hidden]" -->
<!-- subject="[OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="1205451427.4212.69.camel_at_livia" -->
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
<strong>Subject:</strong> [OMPI users] RPM build errors when creating multiple rpms<br>
<strong>From:</strong> Christopher Irving (<em>cirving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 19:37:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I ran into the following problem when trying to build multiple rpms from
<br>
the SRPM for 1.2.5.  Everything compiled fine and building a single rpm
<br>
had no errors.  However, trying to build multiple packages errored out
<br>
with: 
<br>
<p>openmpi-1.2.5-1-root
<br>
error: Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/usr/lib64/mpi.mod
<br>
<p>RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File listed twice: /etc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File listed twice: /etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File listed twice: /etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;&nbsp;File listed twice: /etc/openmpi-totalview.tcl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/usr/lib64/mpi.mod
<br>
<p>My rpmbuild command line was:
<br>
rpmbuild -bb --define 'build_all_in_one_rpm 0' --define
<br>
'configure_options / --with-mip-f90-size=medium
<br>
--with-tm=/usr/local/lib64' openmpi-1.2.5.spec
<br>
<p>The multiple files problem was cause by %{_sysconfdir} getting included
<br>
twice in the %files section for the runtime package in the spec file.
<br>
Once on line 660 and once on line 675 .  I removed the second instance
<br>
but I'm not sure if that was the correct one.  It might cause problems
<br>
if you were installing to /opt.  Maybe the else statement on line 659
<br>
and line 660 should be removed since %{_sysconfdir} needs to be included
<br>
no matter where you are installing and should be already be defined
<br>
correctly for both.
<br>
<p>The other problem was a little trickier because I don't know which
<br>
package mpi.mod should go in.  As a quick fix I just added the line
<br>
%{_libdir}/mpi.mod to the runtime package %files.  It probably should be
<br>
added to either runtime.files or devel.files when they are created.
<br>
<p>After making these changes rpmbuild worked just fine.   
<br>
<p>I doubt that it's needed but here's a diff just for the hell of it.
<br>
<p>--- openmpi-1.2.5.spec  2008-01-08 11:08:57.000000000 -0800
<br>
+++ openmpi-1.2.5.spec.new      2008-03-13 15:43:19.000000000 -0700
<br>
@@ -672,7 +672,7 @@
<br>
&nbsp;%dir %{_libdir}
<br>
&nbsp;%dir %{_libdir}/openmpi
<br>
&nbsp;%doc README INSTALL LICENSE
<br>
-%{_sysconfdir}
<br>
+%{_libdir}/mpi.mod
<br>
&nbsp;%{_pkgdatadir}
<br>
&nbsp;%{_bindir}/mpirun
<br>
&nbsp;%{_bindir}/mpiexec
<br>
<p>-Christopher
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5198.php">Brian Barrett: "Re: [OMPI users] What architecture?  X86_64, that's what architecture!"</a>
<li><strong>Previous message:</strong> <a href="5196.php">Giovani: "Re: [OMPI users] Receive operations hanging forever"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
