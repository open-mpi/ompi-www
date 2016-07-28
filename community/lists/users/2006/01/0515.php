<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 13:19:52 2006" -->
<!-- isoreceived="20060119181952" -->
<!-- sent="Thu, 19 Jan 2006 13:19:42 -0500" -->
<!-- isosent="20060119181942" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] ompi spec file" -->
<!-- id="23849E6B-B0FF-4EEB-84DC-4A01D72F8541_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20060109211319.GA29222_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 13:19:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David --
<br>
<p>Many thanks for this; I learned some new RPM tricks in here.  :-)
<br>
<p>I love the &quot;--with ...&quot; interface.  The only thing that concerns me  
<br>
is the scalability -- we have to add two things for each --with/-- 
<br>
enable option that we have for configure.  Granted, we probably won't  
<br>
be adding too many more, but some change over time is going to be  
<br>
inevitable.  It would be great if we didn't have to also remember to  
<br>
edit the specfile when we add a feature to configure.
<br>
<p>Is there a more scalable way to do this, perchance?
<br>
<p><p>On Jan 9, 2006, at 4:13 PM, Daryl W. Grunau wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I realize there exists an RPM spec file distributed with OMPI  
</span><br>
<span class="quotelev1">&gt; tarball
</span><br>
<span class="quotelev1">&gt; but I've found it to be broken on several counts (e.g. a not-so- 
</span><br>
<span class="quotelev1">&gt; advertized
</span><br>
<span class="quotelev1">&gt; 'feature' of spec files is that nested %if statements are  
</span><br>
<span class="quotelev1">&gt; unpredictable at
</span><br>
<span class="quotelev1">&gt; best) so I'm inlining one that I've been using successfully for  
</span><br>
<span class="quotelev1">&gt; quite some
</span><br>
<span class="quotelev1">&gt; time.  This one permits you to enable/disable many of the config  
</span><br>
<span class="quotelev1">&gt; options on
</span><br>
<span class="quotelev1">&gt; your rpmbuild command line with --with &lt;option&gt; semantics, e.g:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    rpmbuild --with openib=/opt/IB/ibgd-2.0.1-rc6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; will build your pkg against OpenIB rooted at the specified directory.
</span><br>
<span class="quotelev1">&gt; Another handy feature is that your build arguments are kept in the  
</span><br>
<span class="quotelev1">&gt; info
</span><br>
<span class="quotelev1">&gt; section of your installed RPM so you can simply 'rpm -qi openmpi'  
</span><br>
<span class="quotelev1">&gt; to see
</span><br>
<span class="quotelev1">&gt; what options were used to build it.  Enjoy,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Daryl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary: A High Performance Message Passing Library
</span><br>
<span class="quotelev1">&gt; Name: openmpi
</span><br>
<span class="quotelev1">&gt; Version: 1.0.2a3
</span><br>
<span class="quotelev1">&gt; Release: 1
</span><br>
<span class="quotelev1">&gt; Source: <a href="http://www.open-mpi.org/software/ompi/v1.0/downloads/">http://www.open-mpi.org/software/ompi/v1.0/downloads/</a>% 
</span><br>
<span class="quotelev1">&gt; {name}-%{version}.tar.bz2
</span><br>
<span class="quotelev1">&gt; License: BSD
</span><br>
<span class="quotelev1">&gt; Group: Development/Libraries
</span><br>
<span class="quotelev1">&gt; BuildRoot: %{_tmppath}/%{name}-%{version}-root
</span><br>
<span class="quotelev1">&gt; Packager: %{?_packager:%{_packager}}%{!?_packager:%{_vendor}}
</span><br>
<span class="quotelev1">&gt; Vendor: %{?_vendorinfo:%{_vendorinfo}}%{!?_vendorinfo:%{_vendor}}
</span><br>
<span class="quotelev1">&gt; Distribution: %{?_distribution:%{_distribution}}%{!?_distribution:% 
</span><br>
<span class="quotelev1">&gt; {_vendor}}
</span><br>
<span class="quotelev1">&gt; Prefix: %{_prefix}
</span><br>
<span class="quotelev1">&gt; URL: <a href="http://www.open-mpi.org">http://www.open-mpi.org</a>
</span><br>
<span class="quotelev1">&gt; Provides: mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # don't strip *anything*, fools
</span><br>
<span class="quotelev1">&gt; %global	__strip			/bin/true
</span><br>
<span class="quotelev1">&gt; %global	__os_install_post	%{nil}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # don't build a debug RPM
</span><br>
<span class="quotelev1">&gt; %define debug_package %nil
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with root=&lt;prefix&gt;
</span><br>
<span class="quotelev1">&gt; %if %{?_with_root:1}%{!?_with_root:0}
</span><br>
<span class="quotelev1">&gt; %global	rootdir		%(perl -e '$_ = &quot;%{_with_root}&quot;; if (s/^.*--with- 
</span><br>
<span class="quotelev1">&gt; root=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %else
</span><br>
<span class="quotelev1">&gt; %global	rootdir		/opt/OpenMPI
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # Implement *some* OMPI config options that take values
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # default device
</span><br>
<span class="quotelev1">&gt; %global	dev		p4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with gm or --with gm=GM_DIR
</span><br>
<span class="quotelev1">&gt; %if %{?_with_gm:1}%{!?_with_gm:0}
</span><br>
<span class="quotelev1">&gt; %global	dev		gm
</span><br>
<span class="quotelev1">&gt; %global _GM_DIR		%(perl -e '$_ = &quot;%{_with_gm}&quot;; if (s/^.*--with-gm= 
</span><br>
<span class="quotelev1">&gt; (\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with mx or --with mx=MX_DIR
</span><br>
<span class="quotelev1">&gt; %if %{?_with_mx:1}%{!?_with_mx:0}
</span><br>
<span class="quotelev1">&gt; %global	dev		mx
</span><br>
<span class="quotelev1">&gt; %global _MX_DIR		%(perl -e '$_ = &quot;%{_with_mx}&quot;; if (s/^.*--with-mx= 
</span><br>
<span class="quotelev1">&gt; (\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with mvapi or --with mvapi=MVAPI_DIR
</span><br>
<span class="quotelev1">&gt; %if %{?_with_mvapi:1}%{!?_with_mvapi:0}
</span><br>
<span class="quotelev1">&gt; %global	dev		ib
</span><br>
<span class="quotelev1">&gt; %global _MVAPI_DIR	%(perl -e '$_ = &quot;%{_with_mvapi}&quot;; if (s/^.*-- 
</span><br>
<span class="quotelev1">&gt; with-mvapi=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with openib or --with openib=OPENIB_DIR
</span><br>
<span class="quotelev1">&gt; %if %{?_with_openib:1}%{!?_with_openib:0}
</span><br>
<span class="quotelev1">&gt; %global	dev		ib
</span><br>
<span class="quotelev1">&gt; %global _OPENIB_DIR	%(perl -e '$_ = &quot;%{_with_openib}&quot;; if (s/^.*-- 
</span><br>
<span class="quotelev1">&gt; with-openib=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_cflags=CFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_cflags:1}%{!?_with_wrapper_cflags:0}
</span><br>
<span class="quotelev1">&gt; %global _CFLAGS		%(perl -e '$_ = &quot;%{_with_wrapper_cflags}&quot;; if (s/ 
</span><br>
<span class="quotelev1">&gt; ^.*--with-wrapper-cflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_cxxflags=CXXFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_cxxflags:1}%{!?_with_wrapper_cxxflags:0}
</span><br>
<span class="quotelev1">&gt; %global _CXXFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_cxxflags}&quot;; if  
</span><br>
<span class="quotelev1">&gt; (s/^.*--with-wrapper-cxxflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_fflags=FFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_fflags:1}%{!?_with_wrapper_fflags:0}
</span><br>
<span class="quotelev1">&gt; %global _FFLAGS		%(perl -e '$_ = &quot;%{_with_wrapper_fflags}&quot;; if (s/ 
</span><br>
<span class="quotelev1">&gt; ^.*--with-wrapper-fflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_fcflags=FCFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_fcflags:1}%{!?_with_wrapper_fcflags:0}
</span><br>
<span class="quotelev1">&gt; %global _FCFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_fcflags}&quot;; if (s/ 
</span><br>
<span class="quotelev1">&gt; ^.*--with-wrapper-fcflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_ldflags=LDFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_ldflags:1}%{!?_with_wrapper_ldflags:0}
</span><br>
<span class="quotelev1">&gt; %global _LDFLAGS	%(perl -e '$_ = &quot;%{_with_wrapper_ldflags}&quot;; if (s/ 
</span><br>
<span class="quotelev1">&gt; ^.*--with-wrapper-ldflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with wrapper_libs=LIBS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_wrapper_libs:1}%{!?_with_wrapper_libs:0}
</span><br>
<span class="quotelev1">&gt; %global _LIBS		%(perl -e '$_ = &quot;%{_with_wrapper_libs}&quot;; if (s/^.*-- 
</span><br>
<span class="quotelev1">&gt; with-wrapper-libs=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with exflags=EXFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_exflags:1}%{!?_with_exflags:0}
</span><br>
<span class="quotelev1">&gt; %global _EXFLAGS	%(perl -e '$_ = &quot;%{_with_exflags}&quot;; if (s/^.*-- 
</span><br>
<span class="quotelev1">&gt; with-exflags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # rpmbuild --with io_romio_flags=_ROMIOFLAGS
</span><br>
<span class="quotelev1">&gt; %if %{?_with_io_romio_flags:1}%{!?_with_io_romio_flags:0}
</span><br>
<span class="quotelev1">&gt; %global _ROMIOFLAGS	%(perl -e '$_ = &quot;%{_with_io_romio_flags}&quot;; if  
</span><br>
<span class="quotelev1">&gt; (s/^.*--with-io-romio-flags=(\\S+)$/$1/) { print;}')
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %description
</span><br>
<span class="quotelev1">&gt; Open MPI is a project combining technologies and resources from  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in order to  
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; the best MPI library available. A completely new MPI-2 compliant
</span><br>
<span class="quotelev1">&gt; implementation, Open MPI offers advantages for system and software  
</span><br>
<span class="quotelev1">&gt; vendors,
</span><br>
<span class="quotelev1">&gt; application developers and computer science researchers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %package %{dev}
</span><br>
<span class="quotelev1">&gt; Summary: Open MPI - %{dev} device
</span><br>
<span class="quotelev1">&gt; Group: System Environment/Libraries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %description %{dev}
</span><br>
<span class="quotelev1">&gt; Open MPI is a project combining technologies and resources from  
</span><br>
<span class="quotelev1">&gt; several
</span><br>
<span class="quotelev1">&gt; other projects (FT-MPI, LA-MPI, LAM/MPI, and PACX-MPI) in order to  
</span><br>
<span class="quotelev1">&gt; build
</span><br>
<span class="quotelev1">&gt; the best MPI library available. A completely new MPI-2 compliant
</span><br>
<span class="quotelev1">&gt; implementation, Open MPI offers advantages for system and software  
</span><br>
<span class="quotelev1">&gt; vendors,
</span><br>
<span class="quotelev1">&gt; application developers and computer science researchers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following options have been enabled/disabled by --with/-- 
</span><br>
<span class="quotelev1">&gt; without processing
</span><br>
<span class="quotelev1">&gt; on the command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rpmbuild option				Open MPI config option
</span><br>
<span class="quotelev1">&gt; ---------------				----------------------
</span><br>
<span class="quotelev1">&gt;  --with root=%{rootdir}		--prefix=%{rootdir}/openmpi-%{version}/%{dev}
</span><br>
<span class="quotelev1">&gt; %{?_with_dist: --with dist				--enable-dist}
</span><br>
<span class="quotelev1">&gt; %{?_without_dist: --without dist				--disable-dist}
</span><br>
<span class="quotelev1">&gt; %{?_with_coverage: --with coverage			--enable-coverage}
</span><br>
<span class="quotelev1">&gt; %{?_without_coverage: --without coverage			--disable-coverage}
</span><br>
<span class="quotelev1">&gt; %{?_with_mem_debug: --with mem_debug			--enable-mem-debug}
</span><br>
<span class="quotelev1">&gt; %{?_without_mem_debug: --without mem_debug			--disable-mem-debug}
</span><br>
<span class="quotelev1">&gt; %{?_with_mem_profile: --with mem_profile			--enable-mem-profile}
</span><br>
<span class="quotelev1">&gt; %{?_without_mem_profile: --without mem_profile			--disable-mem- 
</span><br>
<span class="quotelev1">&gt; profile}
</span><br>
<span class="quotelev1">&gt; %{?_with_picky: --with picky				--enable-picky}
</span><br>
<span class="quotelev1">&gt; %{?_without_picky: --without picky			--disable-picky}
</span><br>
<span class="quotelev1">&gt; %{?_with_debug: --with debug				--enable-debug}
</span><br>
<span class="quotelev1">&gt; %{?_without_debug: --without debug			--disable-debug}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_f77: --with mpi_f77				--enable-mpi-f77}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_f77: --without mpi_f77				--disable-mpi-f77}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_f90: --with mpi_f90				--enable-mpi-f90}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_f90: --without mpi_f90				--disable-mpi-f90}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_profile: --with mpi_profile			--enable-mpi-profile}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_profile: --without mpi_profile			--disable-mpi- 
</span><br>
<span class="quotelev1">&gt; profile}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_cxx: --with mpi_cxx				--enable-mpi-cxx}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_cxx: --without mpi_cxx				--disable-mpi-cxx}
</span><br>
<span class="quotelev1">&gt; %{?_with_weak_symbols: --with weak_symbols			--enable-weak-symbols}
</span><br>
<span class="quotelev1">&gt; %{?_without_weak_symbols: --without weak_symbols			--disable-weak- 
</span><br>
<span class="quotelev1">&gt; symbols}
</span><br>
<span class="quotelev1">&gt; %{?_with_pretty_print_stacktrace: --with pretty_print_stacktrace		-- 
</span><br>
<span class="quotelev1">&gt; enable-pretty-print-stacktrace}
</span><br>
<span class="quotelev1">&gt; %{?_without_pretty_print_stacktrace: --without  
</span><br>
<span class="quotelev1">&gt; pretty_print_stacktrace	--disable-pretty-print-stacktrace}
</span><br>
<span class="quotelev1">&gt; %{?_with_deprecated_executable_names: --with  
</span><br>
<span class="quotelev1">&gt; deprecated_executable_names	--enable-deprecated-executable-names}
</span><br>
<span class="quotelev1">&gt; %{?_without_deprecated_executable_names: --without  
</span><br>
<span class="quotelev1">&gt; deprecated_executable_names	--disable-deprecated-executable-names}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi2_one_sided: --with mpi2_one_sided			--enable-mpi2-one- 
</span><br>
<span class="quotelev1">&gt; sided}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi2_one_sided: --without mpi2_one_sided		--disable- 
</span><br>
<span class="quotelev1">&gt; mpi2-one-sided}
</span><br>
<span class="quotelev1">&gt; %{?_with_pty_support: --with pty_support			--enable-pty-support}
</span><br>
<span class="quotelev1">&gt; %{?_without_pty_support: --without pty_support			--disable-pty- 
</span><br>
<span class="quotelev1">&gt; support}
</span><br>
<span class="quotelev1">&gt; %{?_with_dlopen: --with dlopen				--enable-dlopen}
</span><br>
<span class="quotelev1">&gt; %{?_without_dlopen: --without dlopen			--disable-dlopen}
</span><br>
<span class="quotelev1">&gt; %{?_with_heterogeneous: --with heterogeneous			--enable-heterogeneous}
</span><br>
<span class="quotelev1">&gt; %{?_without_heterogeneous: --without heterogeneous		--disable- 
</span><br>
<span class="quotelev1">&gt; heterogeneous}
</span><br>
<span class="quotelev1">&gt; %{?_with_trace: --with trace 				--enable-trace}
</span><br>
<span class="quotelev1">&gt; %{?_without_trace: --without trace			--disable-trace}
</span><br>
<span class="quotelev1">&gt; %{?_with_shared: --with shared				--enable-shared}
</span><br>
<span class="quotelev1">&gt; %{?_without_shared: --without shared			--disable-shared}
</span><br>
<span class="quotelev1">&gt; %{?_with_static: --with static				--enable-static}
</span><br>
<span class="quotelev1">&gt; %{?_without_static: --without static			--disable-static}
</span><br>
<span class="quotelev1">&gt; %{?_with_dependency_tracking: --with dependency_tracking		--enable- 
</span><br>
<span class="quotelev1">&gt; dependency-tracking}
</span><br>
<span class="quotelev1">&gt; %{?_without_dependency_tracking: --without dependency_tracking		-- 
</span><br>
<span class="quotelev1">&gt; disable-dependency-tracking}
</span><br>
<span class="quotelev1">&gt; %{?_with_cxx_exceptions: --with cxx_exceptions			--enable-cxx- 
</span><br>
<span class="quotelev1">&gt; exceptions}
</span><br>
<span class="quotelev1">&gt; %{?_without_cxx_exceptions: --without cxx_exceptions		--disable-cxx- 
</span><br>
<span class="quotelev1">&gt; exceptions}
</span><br>
<span class="quotelev1">&gt; %{?_with_smp_locks: --with smp_locks			--enable-smp-locks}
</span><br>
<span class="quotelev1">&gt; %{?_without_smp_locks: --without smp_locks			--disable-smp-locks}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_threads: --with mpi_threads			--enable-mpi-threads}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_threads: --without mpi_threads			--disable-mpi- 
</span><br>
<span class="quotelev1">&gt; threads}
</span><br>
<span class="quotelev1">&gt; %{?_with_progress_threads: --with progress_threads		--enable- 
</span><br>
<span class="quotelev1">&gt; progress-threads}
</span><br>
<span class="quotelev1">&gt; %{?_without_progress_threads: --without progress_threads		--disable- 
</span><br>
<span class="quotelev1">&gt; progress-threads}
</span><br>
<span class="quotelev1">&gt; %{?_with_io_romio: --with io_romio			--enable-io-romio}
</span><br>
<span class="quotelev1">&gt; %{?_without_io_romio: --without io_romio			--disable-io-romio}
</span><br>
<span class="quotelev1">&gt; %{?_with_fast_install: --with fast_install			--enable-fast-install}
</span><br>
<span class="quotelev1">&gt; %{?_without_fast_install: --without fast_install			--disable-fast- 
</span><br>
<span class="quotelev1">&gt; install}
</span><br>
<span class="quotelev1">&gt; %{?_with_libtool_lock: --with libtool_lock			--enable-libtool-lock}
</span><br>
<span class="quotelev1">&gt; %{?_without_libtool_lock: --without libtool_lock			--disable- 
</span><br>
<span class="quotelev1">&gt; libtool-lock}
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_param_check: --with mpi_param_check			--with-mpi-param- 
</span><br>
<span class="quotelev1">&gt; check}
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_param_check: --without mpi_param_check		--without- 
</span><br>
<span class="quotelev1">&gt; mpi-param-check}
</span><br>
<span class="quotelev1">&gt; %{?_with_devel_headers: --with devel_headers			--with-devel-headers}
</span><br>
<span class="quotelev1">&gt; %{?_without_devel_headers: --without devel_headers		--without-devel- 
</span><br>
<span class="quotelev1">&gt; headers}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_cflags: --with wrapper_cflags=%{_CFLAGS}			--with- 
</span><br>
<span class="quotelev1">&gt; wrapper-cflags=%{_CFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_cflags: --without wrapper_cflags			--without- 
</span><br>
<span class="quotelev1">&gt; wrapper-cflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_cxxflags: --with wrapper_cxxflags=%{_CXXFLAGS}			-- 
</span><br>
<span class="quotelev1">&gt; with-wrapper-cxxflags=%{_CXXFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_cxxflags: --without wrapper_cxxflags			-- 
</span><br>
<span class="quotelev1">&gt; without-wrapper-cxxflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_fflags: --with wrapper_fflags=%{_FFLAGS}			--with- 
</span><br>
<span class="quotelev1">&gt; wrapper-fflags=%{_FFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_fflags: --without wrapper_fflags			--without- 
</span><br>
<span class="quotelev1">&gt; wrapper-fflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_fcflags: --with wrapper_fcflags=%{_FCFLAGS}			-- 
</span><br>
<span class="quotelev1">&gt; with-wrapper-fcflags=%{_FCFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_fcflags: --without wrapper_fcflags			--without- 
</span><br>
<span class="quotelev1">&gt; wrapper-fcflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_ldflags: --with wrapper_ldflags=%{_LDFLAGS}			-- 
</span><br>
<span class="quotelev1">&gt; with-wrapper-ldflags=%{_LDFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_ldflags: --without wrapper_ldflags			--without- 
</span><br>
<span class="quotelev1">&gt; wrapper-ldflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_libs: --with wrapper_libs=%{_LIBS}			--with- 
</span><br>
<span class="quotelev1">&gt; wrapper-libs=%{_LIBS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_libs: --without wrapper_libs			--without- 
</span><br>
<span class="quotelev1">&gt; wrapper-libs}
</span><br>
<span class="quotelev1">&gt; %{?_with_exflags: --with exflags=%{_EXFLAGS}			--with-exflags=% 
</span><br>
<span class="quotelev1">&gt; {_EXFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_exflags: --without exflags			--without-exflags}
</span><br>
<span class="quotelev1">&gt; %{?_with_threads: --with threads				--with-threads}
</span><br>
<span class="quotelev1">&gt; %{?_without_threads: --without threads			--without-threads}
</span><br>
<span class="quotelev1">&gt; %{?_with_cs_fs: --with cs_fs				--with-cs-fs}
</span><br>
<span class="quotelev1">&gt; %{?_without_cs_fs: --without cs_fs			--without-cs-fs}
</span><br>
<span class="quotelev1">&gt; %{?_with_libnuma: --with libnuma				--with-libnuma}
</span><br>
<span class="quotelev1">&gt; %{?_without_libnuma: --without libnuma			--without-libnuma}
</span><br>
<span class="quotelev1">&gt; %{?_with_bproc: --with bproc				--with-bproc}
</span><br>
<span class="quotelev1">&gt; %{?_without_bproc: --without bproc			--without-bproc}
</span><br>
<span class="quotelev1">&gt; %{?_with_slurm: --with slurm				--with-slurm}
</span><br>
<span class="quotelev1">&gt; %{?_without_slurm: --without slurm			--without-slurm}
</span><br>
<span class="quotelev1">&gt; %{?_with_tm: --with tm				--with-tm}
</span><br>
<span class="quotelev1">&gt; %{?_without_tm: --without tm				--without-tm}
</span><br>
<span class="quotelev1">&gt; %{?_with_xgrid: --with xgrid				--with-xgrid}
</span><br>
<span class="quotelev1">&gt; %{?_without_xgrid: --without xgrid			--without-xgrid}
</span><br>
<span class="quotelev1">&gt; %{?_with_portals: --with portals			--with-portals}
</span><br>
<span class="quotelev1">&gt; %{?_without_portals: --without portals			--without-portals}
</span><br>
<span class="quotelev1">&gt; %{?_with_gm: --with gm=%{_GM_DIR}			--with-gm=%{_GM_DIR}}
</span><br>
<span class="quotelev1">&gt; %{?_without_gm: --without gm				--without-gm}
</span><br>
<span class="quotelev1">&gt; %{?_with_mvapi: --with mvapi=%{_MVAPI_DIR}		--with-mvapi=% 
</span><br>
<span class="quotelev1">&gt; {_MVAPI_DIR}}
</span><br>
<span class="quotelev1">&gt; %{?_without_mvapi: --without mvapi			--without-mvapi}
</span><br>
<span class="quotelev1">&gt; %{?_with_mx: --with mx=%{_MX_DIR}			--with-mx=%{_MX_DIR}}
</span><br>
<span class="quotelev1">&gt; %{?_without_mx: --without mx				--without-mx}
</span><br>
<span class="quotelev1">&gt; %{?_with_openib: --with openib=%{_OPENIB_DIR}		--with-openib=% 
</span><br>
<span class="quotelev1">&gt; {_OPENIB_DIR}}
</span><br>
<span class="quotelev1">&gt; %{?_without_openib: --without openib			--without-openib}
</span><br>
<span class="quotelev1">&gt; %{?_with_io_romio_flags: --with io_romio_flags=%{_ROMIOFLAGS}			-- 
</span><br>
<span class="quotelev1">&gt; with-io-romio-flags=%{_ROMIOFLAGS}}
</span><br>
<span class="quotelev1">&gt; %{?_without_io_romio_flags: --without io_romio_flags			--without- 
</span><br>
<span class="quotelev1">&gt; io_romio_flags}
</span><br>
<span class="quotelev1">&gt; %{?_with_event_rtsig: --with event_rtsig			--with-event-rtsig}
</span><br>
<span class="quotelev1">&gt; %{?_without_event_rtsig: --without event_rtsig			--without-event- 
</span><br>
<span class="quotelev1">&gt; rtsig}
</span><br>
<span class="quotelev1">&gt; %{?_with_gnu_ld: --with gnu_ld				--with-gnu-ld}
</span><br>
<span class="quotelev1">&gt; %{?_without_gnu_ld: --without gnu_ld			--without-gnu-ld}
</span><br>
<span class="quotelev1">&gt; %{?_with_pic: --with pic				--with-pic}
</span><br>
<span class="quotelev1">&gt; %{?_without_pic: --without pic				--without-pic}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %prep
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %setup -q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %build
</span><br>
<span class="quotelev1">&gt; CFLAGS=&quot;%{?cflags:%{cflags}}%{!?cflags:$RPM_OPT_FLAGS}&quot;
</span><br>
<span class="quotelev1">&gt; CXXFLAGS=&quot;%{?cxxflags:%{cxxflags}}%{!?cflags:$RPM_OPT_FLAGS}&quot;
</span><br>
<span class="quotelev1">&gt; export CFLAGS CXXFLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %global _prefix		%{rootdir}/openmpi-%{version}/%{dev}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %configure %{?acflags}	--prefix=%{_prefix} --sysconfdir=%{_prefix}/ 
</span><br>
<span class="quotelev1">&gt; etc \
</span><br>
<span class="quotelev1">&gt; %{?_with_dist:		--enable-dist} \
</span><br>
<span class="quotelev1">&gt; %{?_without_dist:	--disable-dist} \
</span><br>
<span class="quotelev1">&gt; %{?_with_coverage:	--enable-coverage} \
</span><br>
<span class="quotelev1">&gt; %{?_without_coverage:	--disable-coverage} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mem_debug:	--enable-mem-debug} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mem_debug:	--disable-mem-debug} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mem_profile:	--enable-mem-profile} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mem_profile:--disable-mem-profile} \
</span><br>
<span class="quotelev1">&gt; %{?_with_picky:		--enable-picky} \
</span><br>
<span class="quotelev1">&gt; %{?_without_picky:	--disable-picky} \
</span><br>
<span class="quotelev1">&gt; %{?_with_debug:		--enable-debug} \
</span><br>
<span class="quotelev1">&gt; %{?_without_debug:	--disable-debug} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_f77:	--enable-mpi-f77} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_f77:	--disable-mpi-f77} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_f90:	--enable-mpi-f90} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_f90:	--disable-mpi-f90} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_profile:	--enable-mpi-profile} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_profile:--disable-mpi-profile} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_cxx:	--enable-mpi-cxx} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_cxx:	--disable-mpi-cxx} \
</span><br>
<span class="quotelev1">&gt; %{?_with_weak_symbols:	--enable-weak-symbols} \
</span><br>
<span class="quotelev1">&gt; %{?_without_weak_symbols:	--disable-weak-symbols} \
</span><br>
<span class="quotelev1">&gt; %{?_with_pretty_print_stacktrace:	--enable-pretty-print-stacktrace} \
</span><br>
<span class="quotelev1">&gt; %{?_without_pretty_print_stacktrace:	--disable-pretty-print- 
</span><br>
<span class="quotelev1">&gt; stacktrace} \
</span><br>
<span class="quotelev1">&gt; %{?_with_deprecated_executable_names:	--enable-deprecated- 
</span><br>
<span class="quotelev1">&gt; executable-names} \
</span><br>
<span class="quotelev1">&gt; %{?_without_deprecated_executable_names:--disable-deprecated- 
</span><br>
<span class="quotelev1">&gt; executable-names} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi2_one_sided:	--enable-mpi2-one-sided} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi2_one_sided:	--disable-mpi2-one-sided} \
</span><br>
<span class="quotelev1">&gt; %{?_with_pty_support:	--enable-pty-support} \
</span><br>
<span class="quotelev1">&gt; %{?_without_pty_support:--disable-pty-support} \
</span><br>
<span class="quotelev1">&gt; %{?_with_dlopen:	--enable-dlopen} \
</span><br>
<span class="quotelev1">&gt; %{?_without_dlopen:	--disable-dlopen} \
</span><br>
<span class="quotelev1">&gt; %{?_with_heterogeneous:	--enable-heterogeneous} \
</span><br>
<span class="quotelev1">&gt; %{?_without_heterogeneous:	--disable-heterogeneous} \
</span><br>
<span class="quotelev1">&gt; %{?_with_trace:		--enable-trace} \
</span><br>
<span class="quotelev1">&gt; %{?_without_trace:	--disable-trace} \
</span><br>
<span class="quotelev1">&gt; %{?_with_shared:	--enable-shared} \
</span><br>
<span class="quotelev1">&gt; %{?_without_shared:	--disable-shared} \
</span><br>
<span class="quotelev1">&gt; %{?_with_static:	--enable-static} \
</span><br>
<span class="quotelev1">&gt; %{?_without_static:	--disable-static} \
</span><br>
<span class="quotelev1">&gt; %{?_with_dependency_tracking:	--enable-dependency-tracking} \
</span><br>
<span class="quotelev1">&gt; %{?_without_dependency_tracking:--disable-dependency-tracking} \
</span><br>
<span class="quotelev1">&gt; %{?_with_cxx_exceptions:	--enable-cxx-exceptions} \
</span><br>
<span class="quotelev1">&gt; %{?_without_cxx_exceptions:	--disable-cxx-exceptions} \
</span><br>
<span class="quotelev1">&gt; %{?_with_smp_locks:	--enable-smp-locks} \
</span><br>
<span class="quotelev1">&gt; %{?_without_smp_locks:	--disable-smp-locks} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_threads:	--enable-mpi-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_threads:--disable-mpi-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_with_progress_threads:	--enable-progress-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_without_progress_threads:	--disable-progress-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_with_io_romio:	--enable-io-romio} \
</span><br>
<span class="quotelev1">&gt; %{?_without_io_romio:	--disable-io-romio} \
</span><br>
<span class="quotelev1">&gt; %{?_with_fast_install:	--enable-fast-install} \
</span><br>
<span class="quotelev1">&gt; %{?_without_fast_install:	--disable-fast-install} \
</span><br>
<span class="quotelev1">&gt; %{?_with_libtool_lock:	--enable-libtool-lock} \
</span><br>
<span class="quotelev1">&gt; %{?_without_libtool_lock:	--disable-libtool-lock} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mpi_param_check:	--with-mpi-param-check} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mpi_param_check:	--without-mpi-param-check} \
</span><br>
<span class="quotelev1">&gt; %{?_with_devel_headers:	--with-devel-headers} \
</span><br>
<span class="quotelev1">&gt; %{?_without_devel_headers:	--without-devel-headers} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_cflags: --with-wrapper-cflags=%{_CFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_cflags: --without-wrapper-cflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_cxxflags: --with-wrapper-cxxflags=%{_CXXFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_cxxflags: --without-wrapper-cxxflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_fflags: --with-wrapper-fflags=%{_FFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_fflags: --without-wrapper-fflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_fcflags: --with-wrapper-fcflags=%{_FCFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_fcflags: --without-wrapper-fcflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_ldflags: --with-wrapper-ldflags=%{_LDFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_ldflags: --without-wrapper-ldflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_wrapper_libs: --with-wrapper-libs=%{_LIBS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_wrapper_libs: --without-wrapper-libs} \
</span><br>
<span class="quotelev1">&gt; %{?_with_exflags:	--with-exflags=%{_EXFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_exflags:	--without-exflags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_threads:	--with-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_without_threads:	--without-threads} \
</span><br>
<span class="quotelev1">&gt; %{?_with_cs_fs:		--with-cs-fs} \
</span><br>
<span class="quotelev1">&gt; %{?_without_cs_fs:	--without-cs-fs} \
</span><br>
<span class="quotelev1">&gt; %{?_with_libnuma:	--with-libnuma} \
</span><br>
<span class="quotelev1">&gt; %{?_without_libnuma:	--without-libnuma} \
</span><br>
<span class="quotelev1">&gt; %{?_with_bproc:		--with-bproc} \
</span><br>
<span class="quotelev1">&gt; %{?_without_bproc:	--without-bproc} \
</span><br>
<span class="quotelev1">&gt; %{?_with_slurm:		--with-slurm} \
</span><br>
<span class="quotelev1">&gt; %{?_without_slurm:	--without-slurm} \
</span><br>
<span class="quotelev1">&gt; %{?_with_tm:		--with-tm} \
</span><br>
<span class="quotelev1">&gt; %{?_without_tm:		--without-tm} \
</span><br>
<span class="quotelev1">&gt; %{?_with_xgrid:		--with-xgrid} \
</span><br>
<span class="quotelev1">&gt; %{?_without_xgrid:	--without-xgrid} \
</span><br>
<span class="quotelev1">&gt; %{?_with_portals:	--with-portals} \
</span><br>
<span class="quotelev1">&gt; %{?_without_portals:	--without-portals} \
</span><br>
<span class="quotelev1">&gt; %{?_with_gm:		--with-gm=&quot;%{_GM_DIR}&quot;} \
</span><br>
<span class="quotelev1">&gt; %{?_without_gm:		--without-gm} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mvapi:		--with-mvapi=&quot;%{_MVAPI_DIR}&quot;} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mvapi:	--without-mvapi} \
</span><br>
<span class="quotelev1">&gt; %{?_with_mx:		--with-mx=&quot;%{_MX_DIR}&quot;} \
</span><br>
<span class="quotelev1">&gt; %{?_without_mx:		--without-mx} \
</span><br>
<span class="quotelev1">&gt; %{?_with_openib:	--with-openib=&quot;%{_OPENIB_DIR}&quot;} \
</span><br>
<span class="quotelev1">&gt; %{?_without_openib:	--without-openib} \
</span><br>
<span class="quotelev1">&gt; %{?_with_io_romio_flags:--with-io-romio-flags=%{_ROMIOFLAGS}} \
</span><br>
<span class="quotelev1">&gt; %{?_without_io_romio_flags:--without-io_romio_flags} \
</span><br>
<span class="quotelev1">&gt; %{?_with_event_rtsig:	--with-event-rtsig} \
</span><br>
<span class="quotelev1">&gt; %{?_without_event_rtsig:--without-event-rtsig} \
</span><br>
<span class="quotelev1">&gt; %{?_with_gnu_ld:	--with-gnu-ld} \
</span><br>
<span class="quotelev1">&gt; %{?_without_gnu_ld:	--without-gnu-ld} \
</span><br>
<span class="quotelev1">&gt; %{?_with_pic:		--with-pic} \
</span><br>
<span class="quotelev1">&gt; %{?_without_pic:	--without-pic}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %{__make} %{?mflags}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; umask 022
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %{__rm} -rf %{buildroot}
</span><br>
<span class="quotelev1">&gt; DESTDIR=$RPM_BUILD_ROOT %makeinstall %{?mflags_install} sysconfdir=% 
</span><br>
<span class="quotelev1">&gt; {buildroot}%{_prefix}/etc
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %clean
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %{__rm} -rf %{buildroot}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %files %{dev}
</span><br>
<span class="quotelev1">&gt; %defattr(0644,root,root,0755)
</span><br>
<span class="quotelev1">&gt; %doc README INSTALL LICENSE config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{rootdir}/openmpi-%{version}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{rootdir}/openmpi-%{version}/%{dev}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_bindir}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_prefix}/etc
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_includedir}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_includedir}/openmpi
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_includedir}/openmpi/ompi
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_includedir}/openmpi/ompi/mpi
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_includedir}/openmpi/ompi/mpi/cxx
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_libdir}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_libdir}/openmpi
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_datadir}
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %dir %{_datadir}/openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0755,root,root) %{_bindir}/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %config %{_prefix}/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %config %{_prefix}/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %config %{_prefix}/etc/openmpi-totalview.tcl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_includedir}/mpi.h
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_includedir}/mpif.h
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_includedir}/openmpi/ompi/mpi/cxx/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_libdir}/lib*
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_libdir}/mpi*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %if %{?_with_static:1}%{!?_with_static:0} &amp;&amp; %{?_without_shared:1}% 
</span><br>
<span class="quotelev1">&gt; {!?_without_shared:0}
</span><br>
<span class="quotelev1">&gt; %else
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_libdir}/openmpi/*
</span><br>
<span class="quotelev1">&gt; %endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %attr(0644,root,root) %{_datadir}/openmpi/*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %changelog
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0516.php">Brian Barrett: "Re: [O-MPI users] OMPI_WANT_CXX_BINDINGS"</a>
<li><strong>Previous message:</strong> <a href="0514.php">Kraig Winters: "Re: [O-MPI users] configuration problems OS X 10.4.3, OpenMPI 1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0495.php">Daryl W. Grunau: "[O-MPI users] ompi spec file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0520.php">Daryl W. Grunau: "Re: [O-MPI users] ompi spec file"</a>
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
