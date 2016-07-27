<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 30 19:32:49 2009" -->
<!-- isoreceived="20091201003249" -->
<!-- sent="Mon, 30 Nov 2009 19:32:44 -0500" -->
<!-- isosent="20091201003244" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="19ED7236-A651-42C8-A961-46BFFAC6FD1B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20091126051405.GD17726_at_ozlabs.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-30 19:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1406)"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Chris Samuel: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks great to me -- you appear to be a specfile wizard.  :-)
<br>
<p>Minor comments:
<br>
<p>- Do you want to use a wildcard here instead of the specific .so  
<br>
version number?  That .so version number may change over time:
<br>
<p>%{_libdir}/libhwloc.so.0
<br>
%{_libdir}/libhwloc.so.0.0.0
<br>
<p>- In OMPI, I have a &quot;buildrpm.sh&quot; script that substitutes in the  
<br>
version number and then builds the RPM/SRPM.  I personally found that  
<br>
slightly easier than getting the .bz2, expanding it, configuring it,  
<br>
and then using the generated specfile to make the RPM/SRPM.  FWIW, if  
<br>
you care:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/buildrpm.sh">https://svn.open-mpi.org/trac/ompi/browser/trunk/contrib/dist/linux/buildrpm.sh</a>
<br>
<p>That script is a little more complicated than it needs to be these  
<br>
days -- it originally had to deal with multiple different versions of  
<br>
the &quot;rpmbuild&quot; command, etc.  But you get the idea.
<br>
<p>Is that approach appealing at all?
<br>
<p><p>On Nov 26, 2009, at 12:14 AM, Tony Breeds wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Nov 24, 2009 at 07:01:30AM -0500, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; True.  We googled around to try to find a fairly unique name before
</span><br>
<span class="quotelev2">&gt; &gt; we re-branded from libtopology (because there *was* a name collision
</span><br>
<span class="quotelev2">&gt; &gt; with that project).  Hopefully it'll stay unique and/or we'll gain
</span><br>
<span class="quotelev2">&gt; &gt; enough of a following that it'll be unambiguously &quot;claimed&quot; for this
</span><br>
<span class="quotelev2">&gt; &gt; project.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I was thinking more in tersm of package dependacies that the  
</span><br>
<span class="quotelev1">&gt; name of
</span><br>
<span class="quotelev1">&gt; hwloc itself.  It's easy enough to work around if we hit it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Awesome -- thanks!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Do you want to commit that?  If we keep the analog to the OMPI
</span><br>
<span class="quotelev2">&gt; &gt; project, we'd put it under contrib/dist/linux/hwloc.spec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure.  I was thinking of the following patch:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Essentailly rather than hardcoding the hwloc version track it from  
</span><br>
<span class="quotelev1">&gt; the VERSION
</span><br>
<span class="quotelev1">&gt; file and generate the .spec file at ./configure time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that look okay?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Index: contrib/dist/linux/hwloc.spec.in
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- contrib/dist/linux/hwloc.spec.in    (revision 0)
</span><br>
<span class="quotelev1">&gt; +++ contrib/dist/linux/hwloc.spec.in    (revision 0)
</span><br>
<span class="quotelev1">&gt; @@ -0,0 +1,93 @@
</span><br>
<span class="quotelev1">&gt; +%define        ver_major       @HWLOC_MAJOR_VERSION@
</span><br>
<span class="quotelev1">&gt; +%define        ver_minor       @HWLOC_MINOR_VERSION@
</span><br>
<span class="quotelev1">&gt; +%define        ver_release     @HWLOC_RELEASE_VERSION@
</span><br>
<span class="quotelev1">&gt; +%define        ver_majmin      %{ver_major}.%{ver_minor}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Name:          hwloc
</span><br>
<span class="quotelev1">&gt; +Version:       %{ver_majmin}.%{ver_release}
</span><br>
<span class="quotelev1">&gt; +Release:       1%{?dist}
</span><br>
<span class="quotelev1">&gt; +Summary:       Hardware Locality Library
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +Group:         System Environment/Libraries
</span><br>
<span class="quotelev1">&gt; +License:       BSD
</span><br>
<span class="quotelev1">&gt; +URL:           <a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
</span><br>
<span class="quotelev1">&gt; +Source0:       %{url}/software/%{name}/v%{ver_majmin}/downloads/% 
</span><br>
<span class="quotelev1">&gt; {name}-%{version}.tar.bz2
</span><br>
<span class="quotelev1">&gt; +BuildRoot:     %(mktemp -ud %{_tmppath}/%{name}-%{version}-% 
</span><br>
<span class="quotelev1">&gt; {release}-XXXXXX)
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +BuildRequires: libxml2-devel, ncurses-devel
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%description
</span><br>
<span class="quotelev1">&gt; +The Portable Hardware Locality (hwloc) software package provides a  
</span><br>
<span class="quotelev1">&gt; portable
</span><br>
<span class="quotelev1">&gt; +abstraction (across OS, versions, architectures, ...) of the  
</span><br>
<span class="quotelev1">&gt; hierarchical
</span><br>
<span class="quotelev1">&gt; +topology of modern architectures, including NUMA memory nodes,  
</span><br>
<span class="quotelev1">&gt; sockets, shared
</span><br>
<span class="quotelev1">&gt; +caches, cores and simultaneous multithreading. It also gathers  
</span><br>
<span class="quotelev1">&gt; various system
</span><br>
<span class="quotelev1">&gt; +attributes such as cache and memory information. It primarily aims  
</span><br>
<span class="quotelev1">&gt; at helping
</span><br>
<span class="quotelev1">&gt; +applications with gathering information about modern computing  
</span><br>
<span class="quotelev1">&gt; hardware so as
</span><br>
<span class="quotelev1">&gt; +to exploit it accordingly and efficiently.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%package devel
</span><br>
<span class="quotelev1">&gt; +Summary:       Hardware Locality development package
</span><br>
<span class="quotelev1">&gt; +Group:         Development/Libraries
</span><br>
<span class="quotelev1">&gt; +Requires:      %{name} = %{version}-%{release}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%description devel
</span><br>
<span class="quotelev1">&gt; +Development package for hwloc.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%prep
</span><br>
<span class="quotelev1">&gt; +%setup -q
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%build
</span><br>
<span class="quotelev1">&gt; +%configure --disable-static
</span><br>
<span class="quotelev1">&gt; +make %{?_smp_mflags}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%install
</span><br>
<span class="quotelev1">&gt; +rm -rf %{buildroot}
</span><br>
<span class="quotelev1">&gt; +make install DESTDIR=%{buildroot}
</span><br>
<span class="quotelev1">&gt; +rm %{buildroot}/%{_libdir}/libhwloc.la
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%clean
</span><br>
<span class="quotelev1">&gt; +rm -rf %{buildroot}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%post -p /sbin/ldconfig
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%postun -p /sbin/ldconfig
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%files
</span><br>
<span class="quotelev1">&gt; +%defattr(-,root,root,-)
</span><br>
<span class="quotelev1">&gt; +%doc README AUTHORS COPYING NEWS
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/hwloc-bind
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/hwloc-distrib
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/hwloc-info
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/hwloc-ls
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/hwloc-mask
</span><br>
<span class="quotelev1">&gt; +%{_bindir}/lstopo
</span><br>
<span class="quotelev1">&gt; +%{_libdir}/libhwloc.so.0
</span><br>
<span class="quotelev1">&gt; +%{_libdir}/libhwloc.so.0.0.0
</span><br>
<span class="quotelev1">&gt; +%dir %{_datarootdir}/%{name}
</span><br>
<span class="quotelev1">&gt; +%{_datarootdir}/%{name}/hwloc.dtd
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/hwloc-bind.1.gz
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/hwloc-distrib.1.gz
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/hwloc-info.1.gz
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/hwloc-ls.1.gz
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/hwloc-mask.1.gz
</span><br>
<span class="quotelev1">&gt; +%{_mandir}/man1/lstopo.1.gz
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%files devel
</span><br>
<span class="quotelev1">&gt; +%defattr(-,root,root,-)
</span><br>
<span class="quotelev1">&gt; +%doc VERSION
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc.h
</span><br>
<span class="quotelev1">&gt; +%dir %{_includedir}/hwloc
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/config.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/cpuset.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/glibc-sched.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/helper.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/linux-libnuma.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/linux.h
</span><br>
<span class="quotelev1">&gt; +%{_includedir}/hwloc/openfabrics-verbs.h
</span><br>
<span class="quotelev1">&gt; +%{_libdir}/pkgconfig/hwloc.pc
</span><br>
<span class="quotelev1">&gt; +%{_libdir}/libhwloc.so
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +%changelog
</span><br>
<span class="quotelev1">&gt; +* Thu Nov 19 2009 tony_at_[hidden] - 0.9.2-1
</span><br>
<span class="quotelev1">&gt; + - Initial packaging
</span><br>
<span class="quotelev1">&gt; Index: configure.ac
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- configure.ac        (revision 1405)
</span><br>
<span class="quotelev1">&gt; +++ configure.ac        (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -35,6 +35,9 @@
</span><br>
<span class="quotelev1">&gt;  HWLOC_RELEASE_VERSION=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/ 
</span><br>
<span class="quotelev1">&gt; VERSION --release`&quot;
</span><br>
<span class="quotelev1">&gt;  HWLOC_SVN_R=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/VERSION -- 
</span><br>
<span class="quotelev1">&gt; svn`&quot;
</span><br>
<span class="quotelev1">&gt;  HWLOC_RELEASE_DATE=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/ 
</span><br>
<span class="quotelev1">&gt; VERSION --release-date`&quot;
</span><br>
<span class="quotelev1">&gt; +AC_SUBST(HWLOC_MAJOR_VERSION)
</span><br>
<span class="quotelev1">&gt; +AC_SUBST(HWLOC_MINOR_VERSION)
</span><br>
<span class="quotelev1">&gt; +AC_SUBST(HWLOC_RELEASE_VERSION)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(HWLOC_VERSION)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(HWLOC_SVN_R)
</span><br>
<span class="quotelev1">&gt;  AC_SUBST(HWLOC_RELEASE_DATE)
</span><br>
<span class="quotelev1">&gt; @@ -524,6 +527,7 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  AC_CONFIG_FILES([hwloc.pc
</span><br>
<span class="quotelev1">&gt;                  doc/doxygen-config.cfg
</span><br>
<span class="quotelev1">&gt; +                contrib/dist/linux/hwloc.spec
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                  Makefile
</span><br>
<span class="quotelev1">&gt;                  doc/Makefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yours Tony
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0446.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1406)"</a>
<li><strong>Previous message:</strong> <a href="0444.php">Chris Samuel: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>In reply to:</strong> <a href="0439.php">Tony Breeds: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
