<?
$subject_val = "[OMPI users] open-mpi_1.3, intel  ompi_info compiling errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 15:44:34 2009" -->
<!-- isoreceived="20090126204434" -->
<!-- sent="Mon, 26 Jan 2009 14:44:30 -0600" -->
<!-- isosent="20090126204430" -->
<!-- name="Scot Breitenfeld" -->
<!-- email="brtnfld_at_[hidden]" -->
<!-- subject="[OMPI users] open-mpi_1.3, intel  ompi_info compiling errors" -->
<!-- id="497E20AE.9030200_at_hdfgroup.org" -->
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
<strong>Subject:</strong> [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors<br>
<strong>From:</strong> Scot Breitenfeld (<em>brtnfld_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 15:44:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<li><strong>Reply:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm trying to compile from source open-mpi-1.3r20295 on a suse linux
<br>
64-bit system (I also tried a 32-bit linux system, same problem). I'm
<br>
using Intel compilers version 11.0 (and 10.1) for fortran, C/C++
<br>
(ifort, icc, icpc). The configure script completes with no errors, but
<br>
when I do make it fails when trying to compile output.cc with the error:
<br>
<p>make[2]: Entering directory 
<br>
`/mnt/hdf/brtnfld/packages/jam/build_intel/ompi/tools/ompi_info'
<br>
depbase=`echo components.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/hdf/bin/icpc -DHAVE_CONFIG_H -I. 
<br>
-I../../../../openmpi-1.3/ompi/tools/ompi_info -I../../../opal/include 
<br>
-I../../../orte/include -I../../../ompi/include 
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa  
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;brtnfld\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;jam\&quot;&quot; 
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Mon Jan 26 14:12:54 CST 2009\&quot;&quot; 
<br>
-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; 
<br>
-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG 
<br>
-finline-functions -fno-strict-aliasing -restrict -pthread 
<br>
-fvisibility=hidden\&quot;&quot; 
<br>
-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.3 -I../../.. 
<br>
-I../../../../openmpi-1.3/opal/include 
<br>
-I../../../../openmpi-1.3/orte/include 
<br>
-I../../../../openmpi-1.3/ompi/include  \&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 
<br>
-DNDEBUG -finline-functions -pthread\&quot;&quot; 
<br>
-DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.3 -I../../.. 
<br>
-I../../../../openmpi-1.3/opal/include 
<br>
-I../../../../openmpi-1.3/orte/include 
<br>
-I../../../../openmpi-1.3/ompi/include  \&quot;&quot; -DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; 
<br>
-DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; 
<br>
-DOMPI_BUILD_LIBS=&quot;\&quot;-lnsl -lutil  \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;\&quot;&quot; 
<br>
-DOMPI_CXX_ABSOLUTE=&quot;\&quot;\&quot;&quot; -DOMPI_F77_ABSOLUTE=&quot;\&quot;\&quot;&quot; 
<br>
-DOMPI_F90_ABSOLUTE=&quot;\&quot;\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; 
<br>
-I../../../../openmpi-1.3 -I../../.. 
<br>
-I../../../../openmpi-1.3/opal/include 
<br>
-I../../../../openmpi-1.3/orte/include 
<br>
-I../../../../openmpi-1.3/ompi/include    -O3 -DNDEBUG 
<br>
-finline-functions -pthread -MT components.o -MD -MP -MF $depbase.Tpo -c 
<br>
-o components.o 
<br>
../../../../openmpi-1.3/ompi/tools/ompi_info/components.cc &amp;&amp;\
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mv -f $depbase.Tpo $depbase.Po
<br>
icpc: command line error: invalid argument for option '-fvisibility'
<br>
make[2]: *** [components.o] Error 1
<br>
make[2]: Leaving directory 
<br>
`/mnt/hdf/brtnfld/packages/jam/build_intel/ompi/tools/ompi_info'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/mnt/hdf/brtnfld/packages/jam/build_intel/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7848.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7846.php">jody: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<li><strong>Reply:</strong> <a href="7850.php">Ralph Castain: "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
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
