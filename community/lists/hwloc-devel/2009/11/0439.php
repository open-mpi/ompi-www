<?
$subject_val = "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 26 00:14:11 2009" -->
<!-- isoreceived="20091126051411" -->
<!-- sent="Thu, 26 Nov 2009 16:14:05 +1100" -->
<!-- isosent="20091126051405" -->
<!-- name="Tony Breeds" -->
<!-- email="tony_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?" -->
<!-- id="20091126051405.GD17726_at_ozlabs.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1ACD3F45-D4B1-42ED-9EA9-736183228382_at_cisco.com" -->
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
<strong>From:</strong> Tony Breeds (<em>tony_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-26 00:14:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0445.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Nov 24, 2009 at 07:01:30AM -0500, Jeff Squyres wrote:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; True.  We googled around to try to find a fairly unique name before
</span><br>
<span class="quotelev1">&gt; we re-branded from libtopology (because there *was* a name collision
</span><br>
<span class="quotelev1">&gt; with that project).  Hopefully it'll stay unique and/or we'll gain
</span><br>
<span class="quotelev1">&gt; enough of a following that it'll be unambiguously &quot;claimed&quot; for this
</span><br>
<span class="quotelev1">&gt; project.  :-)
</span><br>
<p>Sorry I was thinking more in tersm of package dependacies that the name of
<br>
hwloc itself.  It's easy enough to work around if we hit it.
<br>
<p><span class="quotelev1">&gt; Awesome -- thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you want to commit that?  If we keep the analog to the OMPI
</span><br>
<span class="quotelev1">&gt; project, we'd put it under contrib/dist/linux/hwloc.spec.
</span><br>
<p>Sure.  I was thinking of the following patch:
<br>
<p>Essentailly rather than hardcoding the hwloc version track it from the VERSION
<br>
file and generate the .spec file at ./configure time.
<br>
<p>Does that look okay?
<br>
<p>Index: contrib/dist/linux/hwloc.spec.in
<br>
===================================================================
<br>
--- contrib/dist/linux/hwloc.spec.in	(revision 0)
<br>
+++ contrib/dist/linux/hwloc.spec.in	(revision 0)
<br>
@@ -0,0 +1,93 @@
<br>
+%define	ver_major	@HWLOC_MAJOR_VERSION@
<br>
+%define	ver_minor	@HWLOC_MINOR_VERSION@
<br>
+%define	ver_release	@HWLOC_RELEASE_VERSION@
<br>
+%define	ver_majmin	%{ver_major}.%{ver_minor}
<br>
+
<br>
+Name:		hwloc
<br>
+Version:	%{ver_majmin}.%{ver_release}
<br>
+Release:	1%{?dist}
<br>
+Summary:	Hardware Locality Library
<br>
+
<br>
+Group:		System Environment/Libraries
<br>
+License:	BSD
<br>
+URL:		<a href="http://www.open-mpi.org/projects/hwloc/">http://www.open-mpi.org/projects/hwloc/</a>
<br>
+Source0:	%{url}/software/%{name}/v%{ver_majmin}/downloads/%{name}-%{version}.tar.bz2
<br>
+BuildRoot:	%(mktemp -ud %{_tmppath}/%{name}-%{version}-%{release}-XXXXXX)
<br>
+
<br>
+BuildRequires:	libxml2-devel, ncurses-devel
<br>
+
<br>
+%description
<br>
+The Portable Hardware Locality (hwloc) software package provides a portable
<br>
+abstraction (across OS, versions, architectures, ...) of the hierarchical
<br>
+topology of modern architectures, including NUMA memory nodes, sockets, shared
<br>
+caches, cores and simultaneous multithreading. It also gathers various system
<br>
+attributes such as cache and memory information. It primarily aims at helping
<br>
+applications with gathering information about modern computing hardware so as
<br>
+to exploit it accordingly and efficiently.
<br>
+
<br>
+%package devel
<br>
+Summary:	Hardware Locality development package
<br>
+Group:		Development/Libraries
<br>
+Requires:	%{name} = %{version}-%{release}
<br>
+
<br>
+%description devel
<br>
+Development package for hwloc.
<br>
+
<br>
+%prep
<br>
+%setup -q
<br>
+
<br>
+%build
<br>
+%configure --disable-static
<br>
+make %{?_smp_mflags}
<br>
+
<br>
+%install
<br>
+rm -rf %{buildroot}
<br>
+make install DESTDIR=%{buildroot}
<br>
+rm %{buildroot}/%{_libdir}/libhwloc.la
<br>
+
<br>
+
<br>
+%clean
<br>
+rm -rf %{buildroot}
<br>
+
<br>
+%post -p /sbin/ldconfig
<br>
+
<br>
+%postun -p /sbin/ldconfig
<br>
+
<br>
+%files
<br>
+%defattr(-,root,root,-)
<br>
+%doc README AUTHORS COPYING NEWS
<br>
+%{_bindir}/hwloc-bind
<br>
+%{_bindir}/hwloc-distrib
<br>
+%{_bindir}/hwloc-info
<br>
+%{_bindir}/hwloc-ls
<br>
+%{_bindir}/hwloc-mask
<br>
+%{_bindir}/lstopo
<br>
+%{_libdir}/libhwloc.so.0
<br>
+%{_libdir}/libhwloc.so.0.0.0
<br>
+%dir %{_datarootdir}/%{name}
<br>
+%{_datarootdir}/%{name}/hwloc.dtd
<br>
+%{_mandir}/man1/hwloc-bind.1.gz
<br>
+%{_mandir}/man1/hwloc-distrib.1.gz
<br>
+%{_mandir}/man1/hwloc-info.1.gz
<br>
+%{_mandir}/man1/hwloc-ls.1.gz
<br>
+%{_mandir}/man1/hwloc-mask.1.gz
<br>
+%{_mandir}/man1/lstopo.1.gz
<br>
+
<br>
+%files devel
<br>
+%defattr(-,root,root,-)
<br>
+%doc VERSION
<br>
+%{_includedir}/hwloc.h
<br>
+%dir %{_includedir}/hwloc
<br>
+%{_includedir}/hwloc/config.h
<br>
+%{_includedir}/hwloc/cpuset.h
<br>
+%{_includedir}/hwloc/glibc-sched.h
<br>
+%{_includedir}/hwloc/helper.h
<br>
+%{_includedir}/hwloc/linux-libnuma.h
<br>
+%{_includedir}/hwloc/linux.h
<br>
+%{_includedir}/hwloc/openfabrics-verbs.h
<br>
+%{_libdir}/pkgconfig/hwloc.pc
<br>
+%{_libdir}/libhwloc.so
<br>
+
<br>
+%changelog
<br>
+* Thu Nov 19 2009 tony_at_[hidden] - 0.9.2-1
<br>
+ - Initial packaging
<br>
Index: configure.ac
<br>
===================================================================
<br>
--- configure.ac	(revision 1405)
<br>
+++ configure.ac	(working copy)
<br>
@@ -35,6 +35,9 @@
<br>
&nbsp;HWLOC_RELEASE_VERSION=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/VERSION --release`&quot;
<br>
&nbsp;HWLOC_SVN_R=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/VERSION --svn`&quot;
<br>
&nbsp;HWLOC_RELEASE_DATE=&quot;`$srcdir/config/hwloc_get_version.sh $srcdir/VERSION --release-date`&quot;
<br>
+AC_SUBST(HWLOC_MAJOR_VERSION)
<br>
+AC_SUBST(HWLOC_MINOR_VERSION)
<br>
+AC_SUBST(HWLOC_RELEASE_VERSION)
<br>
&nbsp;AC_SUBST(HWLOC_VERSION)
<br>
&nbsp;AC_SUBST(HWLOC_SVN_R)
<br>
&nbsp;AC_SUBST(HWLOC_RELEASE_DATE)
<br>
@@ -524,6 +527,7 @@
<br>
&nbsp;
<br>
&nbsp;AC_CONFIG_FILES([hwloc.pc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;doc/doxygen-config.cfg
<br>
+		 contrib/dist/linux/hwloc.spec
<br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Makefile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;doc/Makefile
<br>
<p>Yours Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0440.php">Michael Raymond: "Re: [hwloc-devel] Crash with ignoring HWLOC_OBJ_NODE in 0.9.2"</a>
<li><strong>Previous message:</strong> <a href="0438.php">Chris Samuel: "Re: [hwloc-devel] 0.9.3rc2 out"</a>
<li><strong>In reply to:</strong> <a href="0423.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0445.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
<li><strong>Reply:</strong> <a href="0445.php">Jeff Squyres: "Re: [hwloc-devel] hwloc in Debian, anybody working on RPMs?"</a>
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
