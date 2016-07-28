<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 21:20:31 2011" -->
<!-- isoreceived="20110302022031" -->
<!-- sent="Tue, 1 Mar 2011 19:20:21 -0700" -->
<!-- isosent="20110302022021" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="8E52EEF0-AF59-43CB-A47B-A7A0EC78FADB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6D585B.1020206_at_marine.rutgers.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 21:20:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15780.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>In reply to:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 1, 2011, at 1:34 PM, David Robertson wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Error means OMPI didn't find a network interface - do you have your
</span><br>
<span class="quotelev2">&gt; &gt; networks turned off? Sometimes people travel with Airport turned off.
</span><br>
<span class="quotelev2">&gt; &gt; If you haven wire connected, then no interfaces exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am logged in to the machine remotely through the wired interface. The Airport is always off. I have Open MPI built and running fine with gcc/ifort and gcc/gfortran using shared libraries. I have compiled and run successfully with both shared and static libraries with gcc/ifort. I have not tried the static libraries with gfortran/gcc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ifconfig gives me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lo0: flags=8049&lt;UP,LOOPBACK,RUNNING,MULTICAST&gt; mtu 16384
</span><br>
<span class="quotelev1">&gt;        inet6 ::1 prefixlen 128
</span><br>
<span class="quotelev1">&gt;        inet6 fe80::1%lo0 prefixlen 64 scopeid 0x1
</span><br>
<span class="quotelev1">&gt;        inet 127.0.0.1 netmask 0xff000000
</span><br>
<span class="quotelev1">&gt; gif0: flags=8010&lt;POINTOPOINT,MULTICAST&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; stf0: flags=0&lt;&gt; mtu 1280
</span><br>
<span class="quotelev1">&gt; en0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;        ether 10:9a:dd:55:bb:52
</span><br>
<span class="quotelev1">&gt;        inet6 fe80::129a:ddff:fe55:bb52%en0 prefixlen 64 scopeid 0x4
</span><br>
<span class="quotelev1">&gt;        inet 192.168.30.13 netmask 0xffffc000 broadcast 192.168.63.255
</span><br>
<span class="quotelev1">&gt;        media: autoselect (1000baseT &lt;full-duplex&gt;)
</span><br>
<span class="quotelev1">&gt;        status: active
</span><br>
<span class="quotelev1">&gt; fw0: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 4078
</span><br>
<span class="quotelev1">&gt;        lladdr 70:cd:60:ff:fe:2f:01:8e
</span><br>
<span class="quotelev1">&gt;        media: autoselect &lt;full-duplex&gt;
</span><br>
<span class="quotelev1">&gt;        status: inactive
</span><br>
<span class="quotelev1">&gt; en1: flags=8863&lt;UP,BROADCAST,SMART,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;        ether c8:bc:c8:c9:fc:a9
</span><br>
<span class="quotelev1">&gt;        media: autoselect (&lt;unknown type&gt;)
</span><br>
<span class="quotelev1">&gt;        status: inactive
</span><br>
<span class="quotelev1">&gt; vnic0: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;        ether 00:1c:42:00:00:08
</span><br>
<span class="quotelev1">&gt;        inet 10.211.55.2 netmask 0xffffff00 broadcast 10.211.55.255
</span><br>
<span class="quotelev1">&gt;        media: autoselect
</span><br>
<span class="quotelev1">&gt;        status: active
</span><br>
<span class="quotelev1">&gt; vnic1: flags=8843&lt;UP,BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;        ether 00:1c:42:00:00:09
</span><br>
<span class="quotelev1">&gt;        inet 10.37.129.2 netmask 0xffffff00 broadcast 10.37.129.255
</span><br>
<span class="quotelev1">&gt;        media: autoselect
</span><br>
<span class="quotelev1">&gt;        status: active
</span><br>
<span class="quotelev1">&gt; vboxnet0: flags=8842&lt;BROADCAST,RUNNING,SIMPLEX,MULTICAST&gt; mtu 1500
</span><br>
<span class="quotelev1">&gt;        ether 0a:00:27:00:00:00
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you saying that Open MPI is only looking for the Airport (en1) card and not en0?
</span><br>
<p>No, it isn't. However, what the error message says is as I indicated - it is failing because it is getting an error when trying to open a port on an available network. I can't debug your network to find out why. I know that Mac doesn't really like (nor does Apple really support) static builds, and it has been a long time since I have built it that way on my Mac. Looking at my old static config file, I don't see anything special in it.
<br>
<p>That said, I know we had some early problems with static builds on the Mac (like I said, Apple doesn't really support it). Those were solved, though, and none of those problems had this symptom.
<br>
<p>Could be something strange about PGI and socket libs when running static, but I wouldn't know - I don't use PGI.
<br>
<p>Sorry I can't be of help - I suggest asking PGI about issues re socket support with their compiler on the Mac, or not using PGI if they only support static builds given Apple's lack of support for that mode of operation on the Mac (seems bizarre that PGI would demand it).
<br>
<p><p><span class="quotelev1">&gt; Why would it do that for PGI only?
</span><br>
<p><p>It doesn't, nor does it care what compiler is used.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 1, 2011, at 11:50 AM, David Robertson &lt;robertson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi all,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am having trouble with PGI on Mac OS X 10.6.6. PGI's support staff has informed me that PGI does not &quot;support 64-bit shared library creation&quot; on the Mac. Therefore, I have built Open MPI in static only mode (--disable-shared --enable-static).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have to do some manipulation to get my application to pass the final linking stage (more on that at the bottom) but I get an immediate crash at runtime:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; start of output
</span><br>
<span class="quotelev2">&gt; &gt; bash-3.2$ mpirun -np 4 oceanG ocean_upwelling.in
</span><br>
<span class="quotelev2">&gt; &gt; [flask.marine.rutgers.edu:14186] opal_ifinit: unable to find network interfaces.
</span><br>
<span class="quotelev2">&gt; &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 181
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; orte_rml_base_select failed
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev2">&gt; &gt; likely to abort. There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt; &gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt; &gt; environment problems. This failure appears to be an internal failure;
</span><br>
<span class="quotelev2">&gt; &gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI developer):
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; orte_ess_set_name failed
</span><br>
<span class="quotelev2">&gt; &gt; --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev2">&gt; &gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file orterun.c at line 543
</span><br>
<span class="quotelev2">&gt; &gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end of output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I google for this error the only result I find is for a patch to version 1.1.2 which doesn't even resemble the current state of the Open MPI code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; iMac info:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ProductName: Mac OS X
</span><br>
<span class="quotelev2">&gt; &gt; ProductVersion: 10.6.6
</span><br>
<span class="quotelev2">&gt; &gt; BuildVersion: 10J567
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Has anyone seen this before or have an idea what to try?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Dave
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.S. I get the same results with Open MPI configured with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc CXX=pgcpp F77=pgf77 FC=pgf90 --enable-mpirun-prefix-by-default --disable-shared --enable-static --without-memory-manager --without-libnuma --disable-ipv6 --disable-io-romio --disable-heterogeneous --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-profile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc CXX=pgcpp F77=pgf77 FC=pgf90 --disable-shared --enable-static
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; P.P.S. Linking workarounds:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Snow Leopard ships with Open MPI libraries that interfere when linking programs built with my compiled mpif90. The problem is that 'ld' searches every directory in the search path for shared objects before it will look for static archives. That means a line like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; pgf90 x.o -o a.out -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; will use the .a file in /opt/openmpi/lib because Snow Leopard doesn't ship with Fortran bindings but when it gets to -lmpi it picks up the libmpi.dylib from /usr/lib and causes undefined references. Note the line above is inferred using the -show:link option to mpif90.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have found two workarounds to this. Edit the share/openmpi/mpif90-wrapper-data.txt file to have full paths to the static libraries (this is what the PGI shipped version of Open MPI does). The other option is to add the line:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; switch -search_paths_first is replace(-search_paths_first) positional(linker);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to the /path/to/pgi/bin/siterc file and set LDFLAGS to -search_paths_first in my application.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from the ld manpage:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -search_paths_first
</span><br>
<span class="quotelev2">&gt; &gt; By default the -lx and -weak-lx options first search for a file
</span><br>
<span class="quotelev2">&gt; &gt; of the form `libx.dylib' in each directory in the library search
</span><br>
<span class="quotelev2">&gt; &gt; path, then a file of the form `libx.a' is searched for in the
</span><br>
<span class="quotelev2">&gt; &gt; library search paths. This option changes it so that in each
</span><br>
<span class="quotelev2">&gt; &gt; path `libx.dylib' is searched for then `libx.a' before the next
</span><br>
<span class="quotelev2">&gt; &gt; path in the library search path is searched.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15780.php">Eye RCS 51: "Re: [OMPI users] using MPI through Qt"</a>
<li><strong>Previous message:</strong> <a href="15778.php">Harald Anlauf: "[OMPI users] MPI_ALLREDUCE bug with 1.5.2rc3r24441"</a>
<li><strong>In reply to:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
