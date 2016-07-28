<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 14 20:01:11 2008" -->
<!-- isoreceived="20080315000111" -->
<!-- sent="Fri, 14 Mar 2008 20:01:01 -0400" -->
<!-- isosent="20080315000101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="CEBF020F-7653-4193-8B78-E8BBD9A136DF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1205451427.4212.69.camel_at_livia" -->
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
<strong>Subject:</strong> Re: [OMPI users] RPM build errors when creating multiple rpms<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-14 20:01:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5202.php">Jeff Squyres: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you try this version of the specfile (there's a download link at  
<br>
the bottom):
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec</a>
<br>
<p>This is the specfile on the OMPI trunk, which hasn't made it over to  
<br>
the v1.2 branch yet.  Here's the diff between the two (I think I fixed  
<br>
all the problems you noted):
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset?old_path=trunk%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;old=HEAD&amp;new_path=branches%2Fv1.2%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;new=HEAD">https://svn.open-mpi.org/trac/ompi/changeset?old_path=trunk%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;old=HEAD&amp;new_path=branches%2Fv1.2%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;new=HEAD</a>
<br>
<p>And FYI, the mpi.mod file goes in the devel RPM; it's the Fortran 90  
<br>
MPI API module.  Think of it as basically a precompiled header for  
<br>
Fortran 90.
<br>
<p>Let me know if that fixes the problems for you.
<br>
<p><p><p>On Mar 13, 2008, at 7:37 PM, Christopher Irving wrote:
<br>
<p><span class="quotelev1">&gt; I ran into the following problem when trying to build multiple rpms  
</span><br>
<span class="quotelev1">&gt; from
</span><br>
<span class="quotelev1">&gt; the SRPM for 1.2.5.  Everything compiled fine and building a single  
</span><br>
<span class="quotelev1">&gt; rpm
</span><br>
<span class="quotelev1">&gt; had no errors.  However, trying to build multiple packages errored out
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.5-1-root
</span><br>
<span class="quotelev1">&gt; error: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;   /usr/lib64/mpi.mod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;    File listed twice: /etc
</span><br>
<span class="quotelev1">&gt;    File listed twice: /etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt;    File listed twice: /etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt;    File listed twice: /etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt;    Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev1">&gt;   /usr/lib64/mpi.mod
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My rpmbuild command line was:
</span><br>
<span class="quotelev1">&gt; rpmbuild -bb --define 'build_all_in_one_rpm 0' --define
</span><br>
<span class="quotelev1">&gt; 'configure_options / --with-mip-f90-size=medium
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/local/lib64' openmpi-1.2.5.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The multiple files problem was cause by %{_sysconfdir} getting  
</span><br>
<span class="quotelev1">&gt; included
</span><br>
<span class="quotelev1">&gt; twice in the %files section for the runtime package in the spec file.
</span><br>
<span class="quotelev1">&gt; Once on line 660 and once on line 675 .  I removed the second instance
</span><br>
<span class="quotelev1">&gt; but I'm not sure if that was the correct one.  It might cause problems
</span><br>
<span class="quotelev1">&gt; if you were installing to /opt.  Maybe the else statement on line 659
</span><br>
<span class="quotelev1">&gt; and line 660 should be removed since %{_sysconfdir} needs to be  
</span><br>
<span class="quotelev1">&gt; included
</span><br>
<span class="quotelev1">&gt; no matter where you are installing and should be already be defined
</span><br>
<span class="quotelev1">&gt; correctly for both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other problem was a little trickier because I don't know which
</span><br>
<span class="quotelev1">&gt; package mpi.mod should go in.  As a quick fix I just added the line
</span><br>
<span class="quotelev1">&gt; %{_libdir}/mpi.mod to the runtime package %files.  It probably  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; added to either runtime.files or devel.files when they are created.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After making these changes rpmbuild worked just fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I doubt that it's needed but here's a diff just for the hell of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.2.5.spec  2008-01-08 11:08:57.000000000 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.2.5.spec.new      2008-03-13 15:43:19.000000000 -0700
</span><br>
<span class="quotelev1">&gt; @@ -672,7 +672,7 @@
</span><br>
<span class="quotelev1">&gt; %dir %{_libdir}
</span><br>
<span class="quotelev1">&gt; %dir %{_libdir}/openmpi
</span><br>
<span class="quotelev1">&gt; %doc README INSTALL LICENSE
</span><br>
<span class="quotelev1">&gt; -%{_sysconfdir}
</span><br>
<span class="quotelev1">&gt; +%{_libdir}/mpi.mod
</span><br>
<span class="quotelev1">&gt; %{_pkgdatadir}
</span><br>
<span class="quotelev1">&gt; %{_bindir}/mpirun
</span><br>
<span class="quotelev1">&gt; %{_bindir}/mpiexec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Christopher
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5204.php">Ralph Castain: "Re: [OMPI users] openmpi-1.2.5 and globus-4.0.5"</a>
<li><strong>Previous message:</strong> <a href="5202.php">Jeff Squyres: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>In reply to:</strong> <a href="5197.php">Christopher Irving: "[OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5212.php">Christopher Irving: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
