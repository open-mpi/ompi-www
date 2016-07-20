Summary:   Portable Hardware Locality - portable abstraction of hierarchical architectures
Name:      hwloc
Version:   1.0a1r1944
Release:   1.0%{?dist}
License:   GPL
Group:     Applications/System
URL:	   http://www.open-mpi.org/projects/hwloc/
Source0:   %{name}-%{version}.tar.gz
BuildRoot: %{_tmppath}/%{name}-%{version}-%{release}-root-%(%{__id_u} -n)
Provides:  hwloc
Requires:  ,/bin/sh

%description
The Portable Hardware Locality (hwloc) software package provides 
a portable abstraction (across OS, versions, architectures, ...) 
of the hierarchical topology of modern architectures, including 
NUMA memory nodes, sockets, shared caches, cores and simultaneous
multithreading. It also gathers various system attributes such as
cache and memory information. It primarily aims at helping applications
with gathering information about modern computing hardware so as 
to exploit it accordingly and efficiently.

hwloc may display the topology in multiple convenient formats. 
It also offers a powerful programming interface to gather information 
about the hardware, bind processes, and much more.
%package devel
Summary: hwloc headers and shared development libraries
Group:   Development/Libraries
Requires: hwloc = %{version}-%{release}
Provides: hwloc-devel = %{version}-%{release}

%description devel
Headers and shared object symlinks for the hwloc.

%prep
%setup -q

%build
%configure
%{__make} %{?_smp_mflags}

%install
%{__rm} -rf %{buildroot}

%{__make} install DESTDIR=%{buildroot} INSTALL="%{__install} -p"

%clean
%{__rm} -rf %{buildroot}

%files
%defattr(-, root, root, -)
%{_bindir}/%{name}*
%{_bindir}/lstopo
%{_mandir}/man7/%{name}*
%{_mandir}/man1/%{name}*
%{_mandir}/man1/lstopo*
%{_prefix}/share/%{name}/%{name}.dtd
%docdir %{_defaultdocdir}/%{name}
%doc %{_defaultdocdir}/%{name}/*
%doc AUTHORS COPYING NEWS README VERSION
%files devel
%defattr(-, root, root, -)
%{_libdir}/libhwloc*
%dir %{_libdir}/pkgconfig/
%{_libdir}/pkgconfig/hwloc.pc
%{_mandir}/man3/%{name}*
%{_mandir}/man3/HWLOC*
%dir %{_includedir}/%{name}
%{_includedir}/%{name}/*
%{_includedir}/%{name}.h



