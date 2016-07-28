<?
$subject_val = "Re: [OMPI users] RPM build errors when creating multiple rpms";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 14:35:59 2008" -->
<!-- isoreceived="20080317183559" -->
<!-- sent="Mon, 17 Mar 2008 11:34:23 -0700" -->
<!-- isosent="20080317183423" -->
<!-- name="Christopher Irving" -->
<!-- email="cirving_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RPM build errors when creating multiple rpms" -->
<!-- id="1205778863.21502.22.camel_at_livia" -->
<!-- inreplyto="CEBF020F-7653-4193-8B78-E8BBD9A136DF_at_cisco.com" -->
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
<strong>From:</strong> Christopher Irving (<em>cirving_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 14:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5213.php">Audet, Martin: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that fixed the errors for the case prefix=/usr but after looking at
<br>
the spec file I suspected it would cause a problem if you used the
<br>
install_in_opt option.  So I tried it and got the following errors:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;RPM build errors:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Installed (but unpackaged) file(s) found:
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.2.5/etc/openmpi-default-hostfile
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.2.5/etc/openmpi-mca-params.conf
<br>
&nbsp;&nbsp;&nbsp;/opt/openmpi/1.2.5/etc/openmpi-totalview.tcl
<br>
<p>I just don't think the inclusion of  _sysconfdir needs to be wrapped in
<br>
a condition statement.  It needs to be included in either case,
<br>
installing to /opt or to /usr, and will already be correctly defined for
<br>
both.  So in the new spec file if you get rid of line 651 - %if !
<br>
%{sysconfdir_in_prefix} - and the closing endif on 653 it will work for
<br>
both cases.
<br>
<p>-Christopher
<br>
<p><p>On Fri, 2008-03-14 at 20:01 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Could you try this version of the specfile (there's a download link at  
</span><br>
<span class="quotelev1">&gt; the bottom):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/openmpi.spec</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the specfile on the OMPI trunk, which hasn't made it over to  
</span><br>
<span class="quotelev1">&gt; the v1.2 branch yet.  Here's the diff between the two (I think I fixed  
</span><br>
<span class="quotelev1">&gt; all the problems you noted):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset?old_path=trunk%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;old=HEAD&amp;new_path=branches%2Fv1.2%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;new=HEAD">https://svn.open-mpi.org/trac/ompi/changeset?old_path=trunk%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;old=HEAD&amp;new_path=branches%2Fv1.2%2Fcontrib%2Fdist%2Flinux%2Fopenmpi.spec&amp;new=HEAD</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And FYI, the mpi.mod file goes in the devel RPM; it's the Fortran 90  
</span><br>
<span class="quotelev1">&gt; MPI API module.  Think of it as basically a precompiled header for  
</span><br>
<span class="quotelev1">&gt; Fortran 90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me know if that fixes the problems for you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 13, 2008, at 7:37 PM, Christopher Irving wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I ran into the following problem when trying to build multiple rpms  
</span><br>
<span class="quotelev2">&gt; &gt; from
</span><br>
<span class="quotelev2">&gt; &gt; the SRPM for 1.2.5.  Everything compiled fine and building a single  
</span><br>
<span class="quotelev2">&gt; &gt; rpm
</span><br>
<span class="quotelev2">&gt; &gt; had no errors.  However, trying to build multiple packages errored out
</span><br>
<span class="quotelev2">&gt; &gt; with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.5-1-root
</span><br>
<span class="quotelev2">&gt; &gt; error: Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt; &gt;   /usr/lib64/mpi.mod
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; RPM build errors:
</span><br>
<span class="quotelev2">&gt; &gt;    File listed twice: /etc
</span><br>
<span class="quotelev2">&gt; &gt;    File listed twice: /etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt; &gt;    File listed twice: /etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev2">&gt; &gt;    File listed twice: /etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev2">&gt; &gt;    Installed (but unpackaged) file(s) found:
</span><br>
<span class="quotelev2">&gt; &gt;   /usr/lib64/mpi.mod
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; My rpmbuild command line was:
</span><br>
<span class="quotelev2">&gt; &gt; rpmbuild -bb --define 'build_all_in_one_rpm 0' --define
</span><br>
<span class="quotelev2">&gt; &gt; 'configure_options / --with-mip-f90-size=medium
</span><br>
<span class="quotelev2">&gt; &gt; --with-tm=/usr/local/lib64' openmpi-1.2.5.spec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The multiple files problem was cause by %{_sysconfdir} getting  
</span><br>
<span class="quotelev2">&gt; &gt; included
</span><br>
<span class="quotelev2">&gt; &gt; twice in the %files section for the runtime package in the spec file.
</span><br>
<span class="quotelev2">&gt; &gt; Once on line 660 and once on line 675 .  I removed the second instance
</span><br>
<span class="quotelev2">&gt; &gt; but I'm not sure if that was the correct one.  It might cause problems
</span><br>
<span class="quotelev2">&gt; &gt; if you were installing to /opt.  Maybe the else statement on line 659
</span><br>
<span class="quotelev2">&gt; &gt; and line 660 should be removed since %{_sysconfdir} needs to be  
</span><br>
<span class="quotelev2">&gt; &gt; included
</span><br>
<span class="quotelev2">&gt; &gt; no matter where you are installing and should be already be defined
</span><br>
<span class="quotelev2">&gt; &gt; correctly for both.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The other problem was a little trickier because I don't know which
</span><br>
<span class="quotelev2">&gt; &gt; package mpi.mod should go in.  As a quick fix I just added the line
</span><br>
<span class="quotelev2">&gt; &gt; %{_libdir}/mpi.mod to the runtime package %files.  It probably  
</span><br>
<span class="quotelev2">&gt; &gt; should be
</span><br>
<span class="quotelev2">&gt; &gt; added to either runtime.files or devel.files when they are created.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; After making these changes rpmbuild worked just fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I doubt that it's needed but here's a diff just for the hell of it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- openmpi-1.2.5.spec  2008-01-08 11:08:57.000000000 -0800
</span><br>
<span class="quotelev2">&gt; &gt; +++ openmpi-1.2.5.spec.new      2008-03-13 15:43:19.000000000 -0700
</span><br>
<span class="quotelev2">&gt; &gt; @@ -672,7 +672,7 @@
</span><br>
<span class="quotelev2">&gt; &gt; %dir %{_libdir}
</span><br>
<span class="quotelev2">&gt; &gt; %dir %{_libdir}/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; %doc README INSTALL LICENSE
</span><br>
<span class="quotelev2">&gt; &gt; -%{_sysconfdir}
</span><br>
<span class="quotelev2">&gt; &gt; +%{_libdir}/mpi.mod
</span><br>
<span class="quotelev2">&gt; &gt; %{_pkgdatadir}
</span><br>
<span class="quotelev2">&gt; &gt; %{_bindir}/mpirun
</span><br>
<span class="quotelev2">&gt; &gt; %{_bindir}/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Christopher
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5213.php">Audet, Martin: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5211.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAC: "Re: [OMPI users] Bug with 1.2.5?"</a>
<li><strong>In reply to:</strong> <a href="5203.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>Reply:</strong> <a href="5230.php">Jeff Squyres: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
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
