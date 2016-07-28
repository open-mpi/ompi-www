<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 15:34:47 2011" -->
<!-- isoreceived="20110301203447" -->
<!-- sent="Tue, 01 Mar 2011 15:34:35 -0500" -->
<!-- isosent="20110301203435" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="4D6D585B.1020206_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Mac OS X Static PGI" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mac OS X Static PGI<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 15:34:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe in reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1"> &gt; Error means OMPI didn't find a network interface - do you have your
</span><br>
<span class="quotelev1"> &gt; networks turned off? Sometimes people travel with Airport turned off.
</span><br>
<span class="quotelev1"> &gt; If you haven wire connected, then no interfaces exist.
</span><br>
<p>I am logged in to the machine remotely through the wired interface. The 
<br>
Airport is always off. I have Open MPI built and running fine with 
<br>
gcc/ifort and gcc/gfortran using shared libraries. I have compiled and 
<br>
run successfully with both shared and static libraries with gcc/ifort. I 
<br>
have not tried the static libraries with gfortran/gcc.
<br>
<p>ifconfig gives me:
<br>
<p>lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 ::1 prefixlen 128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 127.0.0.1 netmask 0xff000000
<br>
gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
<br>
stf0: flags=0&lt;&gt; mtu 1280
<br>
en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 10:9a:dd:55:bb:52
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet6 fe80::129a:ddff:fe55:bb52%en0 prefixlen 64 scopeid 0x4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 192.168.30.13 netmask 0xffffc000 broadcast 192.168.63.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (1000baseT &lt;full-duplex&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: active
<br>
fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lladdr 70:cd:60:ff:fe:2f:01:8e
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect &lt;full-duplex&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: inactive
<br>
en1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether c8:bc:c8:c9:fc:a9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect (&lt;unknown type&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: inactive
<br>
vnic0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1c:42:00:00:08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 10.211.55.2 netmask 0xffffff00 broadcast 10.211.55.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: active
<br>
vnic1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 00:1c:42:00:00:09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;inet 10.37.129.2 netmask 0xffffff00 broadcast 10.37.129.255
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;media: autoselect
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status: active
<br>
vboxnet0: flags=8842&lt;BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ether 0a:00:27:00:00:00
<br>
<p>Are you saying that Open MPI is only looking for the Airport (en1) card 
<br>
and not en0? Why would it do that for PGI only?
<br>
<p>Thanks,
<br>
Dave
<br>
<p><p>On Mar 1, 2011, at 11:50 AM, David Robertson &lt;robertson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1"> &gt; Hi all,
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I am having trouble with PGI on Mac OS X 10.6.6. PGI's support staff 
</span><br>
has informed me that PGI does not &quot;support 64-bit shared library 
<br>
creation&quot; on the Mac. Therefore, I have built Open MPI in static only 
<br>
mode (--disable-shared --enable-static).
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I have to do some manipulation to get my application to pass the 
</span><br>
final linking stage (more on that at the bottom) but I get an immediate 
<br>
crash at runtime:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; start of output
</span><br>
<span class="quotelev1"> &gt; bash-3.2$ mpirun -np 4 oceanG ocean_upwelling.in
</span><br>
<span class="quotelev1"> &gt; [flask.marine.rutgers.edu:14186] opal_ifinit: unable to find network 
</span><br>
interfaces.
<br>
<span class="quotelev1"> &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error 
</span><br>
in file ess_hnp_module.c at line 181
<br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1"> &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1"> &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1"> &gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1"> &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1"> &gt; Open MPI developer):
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; orte_rml_base_select failed
</span><br>
<span class="quotelev1"> &gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error 
</span><br>
in file runtime/orte_init.c at line 132
<br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1"> &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev1"> &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1"> &gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev1"> &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1"> &gt; Open MPI developer):
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; orte_ess_set_name failed
</span><br>
<span class="quotelev1"> &gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1"> &gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev1"> &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error 
</span><br>
in file orterun.c at line 543
<br>
<span class="quotelev1"> &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end of output
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; When I google for this error the only result I find is for a patch to 
</span><br>
version 1.1.2 which doesn't even resemble the current state of the Open 
<br>
MPI code.
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; iMac info:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; ProductName: Mac OS X
</span><br>
<span class="quotelev1"> &gt; ProductVersion: 10.6.6
</span><br>
<span class="quotelev1"> &gt; BuildVersion: 10J567
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Has anyone seen this before or have an idea what to try?
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Thanks,
</span><br>
<span class="quotelev1"> &gt; Dave
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; P.S. I get the same results with Open MPI configured with:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc 
</span><br>
CXX=pgcpp F77=pgf77 FC=pgf90 --enable-mpirun-prefix-by-default 
<br>
--disable-shared --enable-static --without-memory-manager 
<br>
--without-libnuma --disable-ipv6 --disable-io-romio 
<br>
--disable-heterogeneous --enable-mpi-f77 --enable-mpi-f90 
<br>
--enable-mpi-profile
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; and
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc 
</span><br>
CXX=pgcpp F77=pgf77 FC=pgf90 --disable-shared --enable-static
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; P.P.S. Linking workarounds:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Snow Leopard ships with Open MPI libraries that interfere when 
</span><br>
linking programs built with my compiled mpif90. The problem is that 'ld' 
<br>
searches every directory in the search path for shared objects before it 
<br>
will look for static archives. That means a line like:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; pgf90 x.o -o a.out -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; will use the .a file in /opt/openmpi/lib because Snow Leopard doesn't 
</span><br>
ship with Fortran bindings but when it gets to -lmpi it picks up the 
<br>
libmpi.dylib from /usr/lib and causes undefined references. Note the 
<br>
line above is inferred using the -show:link option to mpif90.
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I have found two workarounds to this. Edit the 
</span><br>
share/openmpi/mpif90-wrapper-data.txt file to have full paths to the 
<br>
static libraries (this is what the PGI shipped version of Open MPI 
<br>
does). The other option is to add the line:
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; switch -search_paths_first is replace(-search_paths_first) 
</span><br>
positional(linker);
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; to the /path/to/pgi/bin/siterc file and set LDFLAGS to 
</span><br>
-search_paths_first in my application.
<br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; from the ld manpage:
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; -search_paths_first
</span><br>
<span class="quotelev1"> &gt; By default the -lx and -weak-lx options first search for a file
</span><br>
<span class="quotelev1"> &gt; of the form `libx.dylib' in each directory in the library search
</span><br>
<span class="quotelev1"> &gt; path, then a file of the form `libx.a' is searched for in the
</span><br>
<span class="quotelev1"> &gt; library search paths. This option changes it so that in each
</span><br>
<span class="quotelev1"> &gt; path `libx.dylib' is searched for then `libx.a' before the next
</span><br>
<span class="quotelev1"> &gt; path in the library search path is searched.
</span><br>
<span class="quotelev1"> &gt; _______________________________________________
</span><br>
<span class="quotelev1"> &gt; users mailing list
</span><br>
<span class="quotelev1"> &gt; users_at_[hidden]
</span><br>
<span class="quotelev1"> &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>Previous message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe in reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15779.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
