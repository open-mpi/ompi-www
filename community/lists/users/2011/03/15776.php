<?
$subject_val = "Re: [OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 15:06:21 2011" -->
<!-- isoreceived="20110301200621" -->
<!-- sent="Tue, 1 Mar 2011 12:06:55 -0800" -->
<!-- isosent="20110301200655" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc.openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X Static PGI" -->
<!-- id="407FAD17-9937-4E28-8DDF-3478BF3D5BE2_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D6D4DF7.6070901_at_marine.rutgers.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc.openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 15:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Error means OMPI didn't find a network interface - do you have your networks turned off? Sometimes people travel with Airport turned off. If you haven wire connected, then no interfaces exist.
<br>
<p>Sent from my iPad
<br>
<p>On Mar 1, 2011, at 11:50 AM, David Robertson &lt;robertson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am having trouble with PGI on Mac OS X 10.6.6. PGI's support staff has informed me that PGI does not &quot;support 64-bit shared library creation&quot; on the Mac. Therefore, I have built Open MPI in static only mode (--disable-shared --enable-static).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to do some manipulation to get my application to pass the final linking stage (more on that at the bottom) but I get an immediate crash at runtime:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; start of output
</span><br>
<span class="quotelev1">&gt; bash-3.2$ mpirun -np 4 oceanG ocean_upwelling.in
</span><br>
<span class="quotelev1">&gt; [flask.marine.rutgers.edu:14186] opal_ifinit: unable to find network interfaces.
</span><br>
<span class="quotelev1">&gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file ess_hnp_module.c at line 181
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_rml_base_select failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file runtime/orte_init.c at line 132
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like orte_init failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during orte_init; some of which are due to configuration or
</span><br>
<span class="quotelev1">&gt; environment problems.  This failure appears to be an internal failure;
</span><br>
<span class="quotelev1">&gt; here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev1">&gt; Open MPI developer):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  orte_ess_set_name failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned value Error (-1) instead of ORTE_SUCCESS
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in file orterun.c at line 543
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end of output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I google for this error the only result I find is for a patch to version 1.1.2 which doesn't even resemble the current state of the Open MPI code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; iMac info:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ProductName:    Mac OS X
</span><br>
<span class="quotelev1">&gt; ProductVersion: 10.6.6
</span><br>
<span class="quotelev1">&gt; BuildVersion:   10J567
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Has anyone seen this before or have an idea what to try?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dave
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. I get the same results with Open MPI configured with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc CXX=pgcpp F77=pgf77 FC=pgf90 --enable-mpirun-prefix-by-default --disable-shared --enable-static --without-memory-manager --without-libnuma --disable-ipv6 --disable-io-romio --disable-heterogeneous --enable-mpi-f77 --enable-mpi-f90 --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc CXX=pgcpp F77=pgf77 FC=pgf90 --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.P.S. Linking workarounds:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Snow Leopard ships with Open MPI libraries that interfere when linking programs built with my compiled mpif90. The problem is that 'ld' searches every directory in the search path for shared objects before it will look for static archives. That means a line like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; pgf90 x.o -o a.out -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; will use the .a file in /opt/openmpi/lib because Snow Leopard doesn't ship with Fortran bindings but when it gets to -lmpi it picks up the libmpi.dylib from /usr/lib and causes undefined references. Note the line above is inferred using the -show:link option to mpif90.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have found two workarounds to this. Edit the share/openmpi/mpif90-wrapper-data.txt file to have full paths to the static libraries (this is what the PGI shipped version of Open MPI does). The other option is to add the line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; switch -search_paths_first is replace(-search_paths_first) positional(linker);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to the /path/to/pgi/bin/siterc file and set LDFLAGS to -search_paths_first in my application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; from the ld manpage:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -search_paths_first
</span><br>
<span class="quotelev1">&gt;      By default the -lx and -weak-lx options first search for a file
</span><br>
<span class="quotelev1">&gt;      of the form `libx.dylib' in each directory in the library search
</span><br>
<span class="quotelev1">&gt;      path, then a file of the form `libx.a' is searched for in the
</span><br>
<span class="quotelev1">&gt;      library search paths.  This option changes it so that in each
</span><br>
<span class="quotelev1">&gt;      path `libx.dylib' is searched for then `libx.a' before the next
</span><br>
<span class="quotelev1">&gt;      path in the library search path is searched.
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
<li><strong>Next message:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<li><strong>In reply to:</strong> <a href="15775.php">David Robertson: "[OMPI users] Mac OS X Static PGI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
