<?
$subject_val = "[OMPI users] Mac OS X Static PGI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  1 14:50:33 2011" -->
<!-- isoreceived="20110301195033" -->
<!-- sent="Tue, 01 Mar 2011 14:50:15 -0500" -->
<!-- isosent="20110301195015" -->
<!-- name="David Robertson" -->
<!-- email="robertson_at_[hidden]" -->
<!-- subject="[OMPI users] Mac OS X Static PGI" -->
<!-- id="4D6D4DF7.6070901_at_marine.rutgers.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Mac OS X Static PGI<br>
<strong>From:</strong> David Robertson (<em>robertson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-01 14:50:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe reply:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe reply:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I am having trouble with PGI on Mac OS X 10.6.6. PGI's support staff has 
<br>
informed me that PGI does not &quot;support 64-bit shared library creation&quot; 
<br>
on the Mac. Therefore, I have built Open MPI in static only mode 
<br>
(--disable-shared --enable-static).
<br>
<p>I have to do some manipulation to get my application to pass the final 
<br>
linking stage (more on that at the bottom) but I get an immediate crash 
<br>
at runtime:
<br>
<p><p>&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt;&lt; start of output
<br>
bash-3.2$ mpirun -np 4 oceanG ocean_upwelling.in
<br>
[flask.marine.rutgers.edu:14186] opal_ifinit: unable to find network 
<br>
interfaces.
<br>
[flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in 
<br>
file ess_hnp_module.c at line 181
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_rml_base_select failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in 
<br>
file runtime/orte_init.c at line 132
<br>
--------------------------------------------------------------------------
<br>
It looks like orte_init failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during orte_init; some of which are due to configuration or
<br>
environment problems.  This failure appears to be an internal failure;
<br>
here's some additional information (which may only be relevant to an
<br>
Open MPI developer):
<br>
<p>&nbsp;&nbsp;&nbsp;orte_ess_set_name failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned value Error (-1) instead of ORTE_SUCCESS
<br>
--------------------------------------------------------------------------
<br>
[flask.marine.rutgers.edu:14186] [[65522,0],0] ORTE_ERROR_LOG: Error in 
<br>
file orterun.c at line 543
<br>
<span class="quotelev4"> &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; end of output
</span><br>
<p><p>When I google for this error the only result I find is for a patch to 
<br>
version 1.1.2 which doesn't even resemble the current state of the Open 
<br>
MPI code.
<br>
<p>iMac info:
<br>
<p>ProductName:    Mac OS X
<br>
ProductVersion: 10.6.6
<br>
BuildVersion:   10J567
<br>
<p>Has anyone seen this before or have an idea what to try?
<br>
<p>Thanks,
<br>
Dave
<br>
<p>P.S. I get the same results with Open MPI configured with:
<br>
<p>./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc 
<br>
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
<p>and
<br>
<p>./configure --prefix=/opt/pgisoft/openmpi/openmpi-1.4.3 CC=pgcc 
<br>
CXX=pgcpp F77=pgf77 FC=pgf90 --disable-shared --enable-static
<br>
<p><p><p>P.P.S. Linking workarounds:
<br>
<p>Snow Leopard ships with Open MPI libraries that interfere when linking 
<br>
programs built with my compiled mpif90. The problem is that 'ld' 
<br>
searches every directory in the search path for shared objects before it 
<br>
will look for static archives. That means a line like:
<br>
<p>pgf90 x.o -o a.out -L/opt/openmpi/lib -lmpi_f90 -lmpi_f77 -lmpi
<br>
<p>will use the .a file in /opt/openmpi/lib because Snow Leopard doesn't 
<br>
ship with Fortran bindings but when it gets to -lmpi it picks up the 
<br>
libmpi.dylib from /usr/lib and causes undefined references. Note the 
<br>
line above is inferred using the -show:link option to mpif90.
<br>
<p>I have found two workarounds to this. Edit the 
<br>
share/openmpi/mpif90-wrapper-data.txt file to have full paths to the 
<br>
static libraries (this is what the PGI shipped version of Open MPI 
<br>
does). The other option is to add the line:
<br>
<p>switch -search_paths_first is replace(-search_paths_first) 
<br>
positional(linker);
<br>
<p>to the /path/to/pgi/bin/siterc file and set LDFLAGS to 
<br>
-search_paths_first in my application.
<br>
<p>from the ld manpage:
<br>
<p>-search_paths_first
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By default the -lx and -weak-lx options first search for a file
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of the form `libx.dylib' in each directory in the library search
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path, then a file of the form `libx.a' is searched for in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;library search paths.  This option changes it so that in each
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path `libx.dylib' is searched for then `libx.a' before the next
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;path in the library search path is searched.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Previous message:</strong> <a href="15774.php">Jeff Squyres: "Re: [OMPI users] RDMACM Differences"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Reply:</strong> <a href="15776.php">Ralph Castain: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe reply:</strong> <a href="15777.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
<li><strong>Maybe reply:</strong> <a href="15791.php">David Robertson: "Re: [OMPI users] Mac OS X Static PGI"</a>
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
