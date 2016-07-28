<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  9 16:13:21 2006" -->
<!-- isoreceived="20060109211321" -->
<!-- sent="Mon, 9 Jan 2006 14:13:19 -0700" -->
<!-- isosent="20060109211319" -->
<!-- name="Daryl W. Grunau" -->
<!-- email="dwg_at_[hidden]" -->
<!-- subject="[O-MPI users] ompi spec file" -->
<!-- id="20060109211319.GA29222_at_lanl.gov" -->
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
<strong>From:</strong> Daryl W. Grunau (<em>dwg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-09 16:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Maybe reply:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Maybe reply:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I realize there exists an RPM spec file distributed with OMPI tarball
<br>
but I've found it to be broken on several counts (e.g. a not-so-advertized
<br>
'feature' of spec files is that nested %if statements are unpredictable at
<br>
best) so I'm inlining one that I've been using successfully for quite some
<br>
time.  This one permits you to enable/disable many of the config options on
<br>
your rpmbuild command line with --with &lt;option&gt; semantics, e.g:
<br>
<p>&nbsp;&nbsp;&nbsp;rpmbuild --with openib=/opt/IB/ibgd-2.0.1-rc6
<br>
<p>will build your pkg against OpenIB rooted at the specified directory.
<br>
Another handy feature is that your build arguments are kept in the info
<br>
section of your installed RPM so you can simply 'rpm -qi openmpi' to see
<br>
what options were used to build it.  Enjoy,
<br>
<p>Daryl
<br>
<p><pre>
---
Summary: A High Performance Message Passing Library
Name: openmpi
Version: 1.0.2a3
Release: 1
Source: <a href="http://www.open-mpi.org/software/ompi/v1.0/downloads/%{name}-%{version}.tar.bz2">http://www.open-mpi.org/software/ompi/v1.0/downloads/%{name}-%{version}.tar.bz2</a>
License: BSD
Group: Development/Libraries
BuildRoot: %{_tmppath}/%{name}-%{version}-root
Packager: %{?_packager:%{_packager}}%{!?_packager:%{_vendor}}
Vendor: %{?_vendorinfo:%{_vendorinfo}}%{!?_vendorinfo:%{_vendor}}
Distribution: %{?_distribution:%{_distribution}}%{!?_distribution:%{_vendor}}
Prefix: %{_prefix}
URL: <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
Provides: mpi
# don't strip *anything*, fools
%global	__strip			/bin/true
%global	__os_install_post	%{nil}
# don't build a debug RPM
%define debug_package %nil
# rpmbuild --with root=&lt;prefix&gt;
%if %{?_with_root:1}%{!?_with_root:0}
%global	rootdir		%(perl -e '$_ = &quot;%{_with_root}&quot;; if (s/^.*--with-root=(\\S+)$/$1/) { print;}')
%else
%global	rootdir		/opt/OpenMPI
%endif
# Implement *some* OMPI config options that take values
# default device
%global	dev		p4
# rpmbuild --with gm or --with gm=GM_DIR
%if %{?_with_gm:1}%{!?_with_gm:0}
%global	dev		gm
%global _GM_DIR		%(perl -e '$_ = &quot;%{_with_gm}&quot;; if (s/^.*--with-gm=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with mx or --with mx=MX_DIR
%if %{?_with_mx:1}%{!?_with_mx:0}
%global	dev		mx
%global _MX_DIR		%(perl -e '$_ = &quot;%{_with_mx}&quot;; if (s/^.*--with-mx=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with mvapi or --with mvapi=MVAPI_DIR
%if %{?_with_mvapi:1}%{!?_with_mvapi:0}
%global	dev		ib
%global _MVAPI_DIR	%(perl -e '$_ = &quot;%{_with_mvapi}&quot;; if (s/^.*--with-mvapi=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with openib or --with openib=OPENIB_DIR
%if %{?_with_openib:1}%{!?_with_openib:0}
%global	dev		ib
%global _OPENIB_DIR	%(perl -e '$_ = &quot;%{_with_openib}&quot;; if (s/^.*--with-openib=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_cflags=CFLAGS
%if %{?_with_wrapper_cflags:1}%{!?_with_wrapper_cflags:0}
%global _CFLAGS		%(perl -e '$_ = &quot;%{_with_wrapper_cflags}&quot;; if (s/^.*--with-wrapper-cflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_cxxflags=CXXFLAGS
%if %{?_with_wrapper_cxxflags:1}%{!?_with_wrapper_cxxflags:0}
%global _CXXFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_cxxflags}&quot;; if (s/^.*--with-wrapper-cxxflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_fflags=FFLAGS
%if %{?_with_wrapper_fflags:1}%{!?_with_wrapper_fflags:0}
%global _FFLAGS		%(perl -e '$_ = &quot;%{_with_wrapper_fflags}&quot;; if (s/^.*--with-wrapper-fflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_fcflags=FCFLAGS
%if %{?_with_wrapper_fcflags:1}%{!?_with_wrapper_fcflags:0}
%global _FCFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_fcflags}&quot;; if (s/^.*--with-wrapper-fcflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_ldflags=LDFLAGS
%if %{?_with_wrapper_ldflags:1}%{!?_with_wrapper_ldflags:0}
%global _LDFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_ldflags}&quot;; if (s/^.*--with-wrapper-ldflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with wrapper_libs=LIBS
%if %{?_with_wrapper_libs:1}%{!?_with_wrapper_libs:0}
%global _LIBS		%(perl -e '$_ = &quot;%{_with_wrapper_libs}&quot;; if (s/^.*--with-wrapper-libs=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with exflags=EXFLAGS
%if %{?_with_exflags:1}%{!?_with_exflags:0}
%global _EXFLAGS	%(perl -e '$_ = &quot;%{_with_exflags}&quot;; if (s/^.*--with-exflags=(\\S+)$/$1/) { print;}')
%endif
# rpmbuild --with io_romio_flags=_ROMIOFLAGS
%if %{?_with_io_romio_flags:1}%{!?_with_io_romio_flags:0}
%global _ROMIOFLAGS	%(perl -e '$_ = &quot;%{_with_io_romio_flags}&quot;; if (s/^.*--with-io-romio-flags=(\\S+)$/$1/) { print;}')
%endif
%description 
Open MPI is a project combining technologies and resources from several
other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in order to build
the best MPI library available. A completely new MPI-2 compliant
implementation, Open MPI offers advantages for system and software vendors,
application developers and computer science researchers. 
%package %{dev}
Summary: Open MPI - %{dev} device
Group: System Environment/Libraries
%description %{dev}
Open MPI is a project combining technologies and resources from several
other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in order to build
the best MPI library available. A completely new MPI-2 compliant
implementation, Open MPI offers advantages for system and software vendors,
application developers and computer science researchers. 
The following options have been enabled/disabled by --with/--without processing
on the command line:
rpmbuild option				Open MPI config option
---------------				----------------------
 --with root=%{rootdir}		--prefix=%{rootdir}/openmpi-%{version}/%{dev}
%{?_with_dist: --with dist				--enable-dist}
%{?_without_dist: --without dist				--disable-dist}
%{?_with_coverage: --with coverage			--enable-coverage}
%{?_without_coverage: --without coverage			--disable-coverage}
%{?_with_mem_debug: --with mem_debug			--enable-mem-debug}
%{?_without_mem_debug: --without mem_debug			--disable-mem-debug}
%{?_with_mem_profile: --with mem_profile			--enable-mem-profile}
%{?_without_mem_profile: --without mem_profile			--disable-mem-profile}
%{?_with_picky: --with picky				--enable-picky}
%{?_without_picky: --without picky			--disable-picky}
%{?_with_debug: --with debug				--enable-debug}
%{?_without_debug: --without debug			--disable-debug}
%{?_with_mpi_f77: --with mpi_f77				--enable-mpi-f77}
%{?_without_mpi_f77: --without mpi_f77				--disable-mpi-f77}
%{?_with_mpi_f90: --with mpi_f90				--enable-mpi-f90}
%{?_without_mpi_f90: --without mpi_f90				--disable-mpi-f90}
%{?_with_mpi_profile: --with mpi_profile			--enable-mpi-profile}
%{?_without_mpi_profile: --without mpi_profile			--disable-mpi-profile}
%{?_with_mpi_cxx: --with mpi_cxx				--enable-mpi-cxx}
%{?_without_mpi_cxx: --without mpi_cxx				--disable-mpi-cxx}
%{?_with_weak_symbols: --with weak_symbols			--enable-weak-symbols}
%{?_without_weak_symbols: --without weak_symbols			--disable-weak-symbols}
%{?_with_pretty_print_stacktrace: --with pretty_print_stacktrace		--enable-pretty-print-stacktrace}
%{?_without_pretty_print_stacktrace: --without pretty_print_stacktrace	--disable-pretty-print-stacktrace}
%{?_with_deprecated_executable_names: --with deprecated_executable_names	--enable-deprecated-executable-names}
%{?_without_deprecated_executable_names: --without deprecated_executable_names	--disable-deprecated-executable-names}
%{?_with_mpi2_one_sided: --with mpi2_one_sided			--enable-mpi2-one-sided}
%{?_without_mpi2_one_sided: --without mpi2_one_sided		--disable-mpi2-one-sided}
%{?_with_pty_support: --with pty_support			--enable-pty-support}
%{?_without_pty_support: --without pty_support			--disable-pty-support}
%{?_with_dlopen: --with dlopen				--enable-dlopen}
%{?_without_dlopen: --without dlopen			--disable-dlopen}
%{?_with_heterogeneous: --with heterogeneous			--enable-heterogeneous}
%{?_without_heterogeneous: --without heterogeneous		--disable-heterogeneous}
%{?_with_trace: --with trace 				--enable-trace}
%{?_without_trace: --without trace			--disable-trace}
%{?_with_shared: --with shared				--enable-shared}
%{?_without_shared: --without shared			--disable-shared}
%{?_with_static: --with static				--enable-static}
%{?_without_static: --without static			--disable-static}
%{?_with_dependency_tracking: --with dependency_tracking		--enable-dependency-tracking}
%{?_without_dependency_tracking: --without dependency_tracking		--disable-dependency-tracking}
%{?_with_cxx_exceptions: --with cxx_exceptions			--enable-cxx-exceptions}
%{?_without_cxx_exceptions: --without cxx_exceptions		--disable-cxx-exceptions}
%{?_with_smp_locks: --with smp_locks			--enable-smp-locks}
%{?_without_smp_locks: --without smp_locks			--disable-smp-locks}
%{?_with_mpi_threads: --with mpi_threads			--enable-mpi-threads}
%{?_without_mpi_threads: --without mpi_threads			--disable-mpi-threads}
%{?_with_progress_threads: --with progress_threads		--enable-progress-threads}
%{?_without_progress_threads: --without progress_threads		--disable-progress-threads}
%{?_with_io_romio: --with io_romio			--enable-io-romio}
%{?_without_io_romio: --without io_romio			--disable-io-romio}
%{?_with_fast_install: --with fast_install			--enable-fast-install}
%{?_without_fast_install: --without fast_install			--disable-fast-install}
%{?_with_libtool_lock: --with libtool_lock			--enable-libtool-lock}
%{?_without_libtool_lock: --without libtool_lock			--disable-libtool-lock}
%{?_with_mpi_param_check: --with mpi_param_check			--with-mpi-param-check}
%{?_without_mpi_param_check: --without mpi_param_check		--without-mpi-param-check}
%{?_with_devel_headers: --with devel_headers			--with-devel-headers}
%{?_without_devel_headers: --without devel_headers		--without-devel-headers}
%{?_with_wrapper_cflags: --with wrapper_cflags=%{_CFLAGS}			--with-wrapper-cflags=%{_CFLAGS}}
%{?_without_wrapper_cflags: --without wrapper_cflags			--without-wrapper-cflags}
%{?_with_wrapper_cxxflags: --with wrapper_cxxflags=%{_CXXFLAGS}			--with-wrapper-cxxflags=%{_CXXFLAGS}}
%{?_without_wrapper_cxxflags: --without wrapper_cxxflags			--without-wrapper-cxxflags}
%{?_with_wrapper_fflags: --with wrapper_fflags=%{_FFLAGS}			--with-wrapper-fflags=%{_FFLAGS}}
%{?_without_wrapper_fflags: --without wrapper_fflags			--without-wrapper-fflags}
%{?_with_wrapper_fcflags: --with wrapper_fcflags=%{_FCFLAGS}			--with-wrapper-fcflags=%{_FCFLAGS}}
%{?_without_wrapper_fcflags: --without wrapper_fcflags			--without-wrapper-fcflags}
%{?_with_wrapper_ldflags: --with wrapper_ldflags=%{_LDFLAGS}			--with-wrapper-ldflags=%{_LDFLAGS}}
%{?_without_wrapper_ldflags: --without wrapper_ldflags			--without-wrapper-ldflags}
%{?_with_wrapper_libs: --with wrapper_libs=%{_LIBS}			--with-wrapper-libs=%{_LIBS}}
%{?_without_wrapper_libs: --without wrapper_libs			--without-wrapper-libs}
%{?_with_exflags: --with exflags=%{_EXFLAGS}			--with-exflags=%{_EXFLAGS}}
%{?_without_exflags: --without exflags			--without-exflags}
%{?_with_threads: --with threads				--with-threads}
%{?_without_threads: --without threads			--without-threads}
%{?_with_cs_fs: --with cs_fs				--with-cs-fs}
%{?_without_cs_fs: --without cs_fs			--without-cs-fs}
%{?_with_libnuma: --with libnuma				--with-libnuma}
%{?_without_libnuma: --without libnuma			--without-libnuma}
%{?_with_bproc: --with bproc				--with-bproc}
%{?_without_bproc: --without bproc			--without-bproc}
%{?_with_slurm: --with slurm				--with-slurm}
%{?_without_slurm: --without slurm			--without-slurm}
%{?_with_tm: --with tm				--with-tm}
%{?_without_tm: --without tm				--without-tm}
%{?_with_xgrid: --with xgrid				--with-xgrid}
%{?_without_xgrid: --without xgrid			--without-xgrid}
%{?_with_portals: --with portals			--with-portals}
%{?_without_portals: --without portals			--without-portals}
%{?_with_gm: --with gm=%{_GM_DIR}			--with-gm=%{_GM_DIR}}
%{?_without_gm: --without gm				--without-gm}
%{?_with_mvapi: --with mvapi=%{_MVAPI_DIR}		--with-mvapi=%{_MVAPI_DIR}}
%{?_without_mvapi: --without mvapi			--without-mvapi}
%{?_with_mx: --with mx=%{_MX_DIR}			--with-mx=%{_MX_DIR}}
%{?_without_mx: --without mx				--without-mx}
%{?_with_openib: --with openib=%{_OPENIB_DIR}		--with-openib=%{_OPENIB_DIR}}
%{?_without_openib: --without openib			--without-openib}
%{?_with_io_romio_flags: --with io_romio_flags=%{_ROMIOFLAGS}			--with-io-romio-flags=%{_ROMIOFLAGS}}
%{?_without_io_romio_flags: --without io_romio_flags			--without-io_romio_flags}
%{?_with_event_rtsig: --with event_rtsig			--with-event-rtsig}
%{?_without_event_rtsig: --without event_rtsig			--without-event-rtsig}
%{?_with_gnu_ld: --with gnu_ld				--with-gnu-ld}
%{?_without_gnu_ld: --without gnu_ld			--without-gnu-ld}
%{?_with_pic: --with pic				--with-pic}
%{?_without_pic: --without pic				--without-pic}
%prep
%setup -q
%build
CFLAGS=&quot;%{?cflags:%{cflags}}%{!?cflags:$RPM_OPT_FLAGS}&quot;
CXXFLAGS=&quot;%{?cxxflags:%{cxxflags}}%{!?cflags:$RPM_OPT_FLAGS}&quot;
export CFLAGS CXXFLAGS
%global _prefix		%{rootdir}/openmpi-%{version}/%{dev}
%configure %{?acflags}	--prefix=%{_prefix} --sysconfdir=%{_prefix}/etc \
%{?_with_dist:		--enable-dist} \
%{?_without_dist:	--disable-dist} \
%{?_with_coverage:	--enable-coverage} \
%{?_without_coverage:	--disable-coverage} \
%{?_with_mem_debug:	--enable-mem-debug} \
%{?_without_mem_debug:	--disable-mem-debug} \
%{?_with_mem_profile:	--enable-mem-profile} \
%{?_without_mem_profile:--disable-mem-profile} \
%{?_with_picky:		--enable-picky} \
%{?_without_picky:	--disable-picky} \
%{?_with_debug:		--enable-debug} \
%{?_without_debug:	--disable-debug} \
%{?_with_mpi_f77:	--enable-mpi-f77} \
%{?_without_mpi_f77:	--disable-mpi-f77} \
%{?_with_mpi_f90:	--enable-mpi-f90} \
%{?_without_mpi_f90:	--disable-mpi-f90} \
%{?_with_mpi_profile:	--enable-mpi-profile} \
%{?_without_mpi_profile:--disable-mpi-profile} \
%{?_with_mpi_cxx:	--enable-mpi-cxx} \
%{?_without_mpi_cxx:	--disable-mpi-cxx} \
%{?_with_weak_symbols:	--enable-weak-symbols} \
%{?_without_weak_symbols:	--disable-weak-symbols} \
%{?_with_pretty_print_stacktrace:	--enable-pretty-print-stacktrace} \
%{?_without_pretty_print_stacktrace:	--disable-pretty-print-stacktrace} \
%{?_with_deprecated_executable_names:	--enable-deprecated-executable-names} \
%{?_without_deprecated_executable_names:--disable-deprecated-executable-names} \
%{?_with_mpi2_one_sided:	--enable-mpi2-one-sided} \
%{?_without_mpi2_one_sided:	--disable-mpi2-one-sided} \
%{?_with_pty_support:	--enable-pty-support} \
%{?_without_pty_support:--disable-pty-support} \
%{?_with_dlopen:	--enable-dlopen} \
%{?_without_dlopen:	--disable-dlopen} \
%{?_with_heterogeneous:	--enable-heterogeneous} \
%{?_without_heterogeneous:	--disable-heterogeneous} \
%{?_with_trace:		--enable-trace} \
%{?_without_trace:	--disable-trace} \
%{?_with_shared:	--enable-shared} \
%{?_without_shared:	--disable-shared} \
%{?_with_static:	--enable-static} \
%{?_without_static:	--disable-static} \
%{?_with_dependency_tracking:	--enable-dependency-tracking} \
%{?_without_dependency_tracking:--disable-dependency-tracking} \
%{?_with_cxx_exceptions:	--enable-cxx-exceptions} \
%{?_without_cxx_exceptions:	--disable-cxx-exceptions} \
%{?_with_smp_locks:	--enable-smp-locks} \
%{?_without_smp_locks:	--disable-smp-locks} \
%{?_with_mpi_threads:	--enable-mpi-threads} \
%{?_without_mpi_threads:--disable-mpi-threads} \
%{?_with_progress_threads:	--enable-progress-threads} \
%{?_without_progress_threads:	--disable-progress-threads} \
%{?_with_io_romio:	--enable-io-romio} \
%{?_without_io_romio:	--disable-io-romio} \
%{?_with_fast_install:	--enable-fast-install} \
%{?_without_fast_install:	--disable-fast-install} \
%{?_with_libtool_lock:	--enable-libtool-lock} \
%{?_without_libtool_lock:	--disable-libtool-lock} \
%{?_with_mpi_param_check:	--with-mpi-param-check} \
%{?_without_mpi_param_check:	--without-mpi-param-check} \
%{?_with_devel_headers:	--with-devel-headers} \
%{?_without_devel_headers:	--without-devel-headers} \
%{?_with_wrapper_cflags: --with-wrapper-cflags=%{_CFLAGS}} \
%{?_without_wrapper_cflags: --without-wrapper-cflags} \
%{?_with_wrapper_cxxflags: --with-wrapper-cxxflags=%{_CXXFLAGS}} \
%{?_without_wrapper_cxxflags: --without-wrapper-cxxflags} \
%{?_with_wrapper_fflags: --with-wrapper-fflags=%{_FFLAGS}} \
%{?_without_wrapper_fflags: --without-wrapper-fflags} \
%{?_with_wrapper_fcflags: --with-wrapper-fcflags=%{_FCFLAGS}} \
%{?_without_wrapper_fcflags: --without-wrapper-fcflags} \
%{?_with_wrapper_ldflags: --with-wrapper-ldflags=%{_LDFLAGS}} \
%{?_without_wrapper_ldflags: --without-wrapper-ldflags} \
%{?_with_wrapper_libs: --with-wrapper-libs=%{_LIBS}} \
%{?_without_wrapper_libs: --without-wrapper-libs} \
%{?_with_exflags:	--with-exflags=%{_EXFLAGS}} \
%{?_without_exflags:	--without-exflags} \
%{?_with_threads:	--with-threads} \
%{?_without_threads:	--without-threads} \
%{?_with_cs_fs:		--with-cs-fs} \
%{?_without_cs_fs:	--without-cs-fs} \
%{?_with_libnuma:	--with-libnuma} \
%{?_without_libnuma:	--without-libnuma} \
%{?_with_bproc:		--with-bproc} \
%{?_without_bproc:	--without-bproc} \
%{?_with_slurm:		--with-slurm} \
%{?_without_slurm:	--without-slurm} \
%{?_with_tm:		--with-tm} \
%{?_without_tm:		--without-tm} \
%{?_with_xgrid:		--with-xgrid} \
%{?_without_xgrid:	--without-xgrid} \
%{?_with_portals:	--with-portals} \
%{?_without_portals:	--without-portals} \
%{?_with_gm:		--with-gm=&quot;%{_GM_DIR}&quot;} \
%{?_without_gm:		--without-gm} \
%{?_with_mvapi:		--with-mvapi=&quot;%{_MVAPI_DIR}&quot;} \
%{?_without_mvapi:	--without-mvapi} \
%{?_with_mx:		--with-mx=&quot;%{_MX_DIR}&quot;} \
%{?_without_mx:		--without-mx} \
%{?_with_openib:	--with-openib=&quot;%{_OPENIB_DIR}&quot;} \
%{?_without_openib:	--without-openib} \
%{?_with_io_romio_flags:--with-io-romio-flags=%{_ROMIOFLAGS}} \
%{?_without_io_romio_flags:--without-io_romio_flags} \
%{?_with_event_rtsig:	--with-event-rtsig} \
%{?_without_event_rtsig:--without-event-rtsig} \
%{?_with_gnu_ld:	--with-gnu-ld} \
%{?_without_gnu_ld:	--without-gnu-ld} \
%{?_with_pic:		--with-pic} \
%{?_without_pic:	--without-pic}
%{__make} %{?mflags}
%install
umask 022
%{__rm} -rf %{buildroot}
DESTDIR=$RPM_BUILD_ROOT %makeinstall %{?mflags_install} sysconfdir=%{buildroot}%{_prefix}/etc
%clean
%{__rm} -rf %{buildroot}
%files %{dev}
%defattr(0644,root,root,0755)
%doc README INSTALL LICENSE config.log
%attr(0755,root,root) %dir %{rootdir}/openmpi-%{version}
%attr(0755,root,root) %dir %{rootdir}/openmpi-%{version}/%{dev}
%attr(0755,root,root) %dir %{_bindir}
%attr(0755,root,root) %dir %{_prefix}/etc
%attr(0755,root,root) %dir %{_includedir}
%attr(0755,root,root) %dir %{_includedir}/openmpi
%attr(0755,root,root) %dir %{_includedir}/openmpi/ompi
%attr(0755,root,root) %dir %{_includedir}/openmpi/ompi/mpi
%attr(0755,root,root) %dir %{_includedir}/openmpi/ompi/mpi/cxx
%attr(0755,root,root) %dir %{_libdir}
%attr(0755,root,root) %dir %{_libdir}/openmpi
%attr(0755,root,root) %dir %{_datadir}
%attr(0755,root,root) %dir %{_datadir}/openmpi
%attr(0755,root,root) %{_bindir}/*
%attr(0644,root,root) %config %{_prefix}/etc/openmpi-default-hostfile
%attr(0644,root,root) %config %{_prefix}/etc/openmpi-mca-params.conf
%attr(0644,root,root) %config %{_prefix}/etc/openmpi-totalview.tcl
%attr(0644,root,root) %{_includedir}/mpi.h
%attr(0644,root,root) %{_includedir}/mpif.h
%attr(0644,root,root) %{_includedir}/openmpi/ompi/mpi/cxx/*
%attr(0644,root,root) %{_libdir}/lib*
%attr(0644,root,root) %{_libdir}/mpi*
%if %{?_with_static:1}%{!?_with_static:0} &amp;&amp; %{?_without_shared:1}%{!?_without_shared:0}
%else
%attr(0644,root,root) %{_libdir}/openmpi/*
%endif
%attr(0644,root,root) %{_datadir}/openmpi/*
%changelog
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0496.php">Jeff Squyres: "Re: [O-MPI users] building  openmpi1.0.1 on cygwin"</a>
<li><strong>Previous message:</strong> <a href="0494.php">Graham E Fagg: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Reply:</strong> <a href="0515.php">Jeff Squyres: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Maybe reply:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<li><strong>Maybe reply:</strong> <a href="0527.php">Jonathan Day: "Re: [O-MPI users] ompi spec file"</a>
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
