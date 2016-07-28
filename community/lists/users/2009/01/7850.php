<?
$subject_val = "Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 16:07:27 2009" -->
<!-- isoreceived="20090126210727" -->
<!-- sent="Mon, 26 Jan 2009 14:07:10 -0700" -->
<!-- isosent="20090126210710" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors" -->
<!-- id="598D57B5-2377-4BDE-9B9D-78534D2E5C83_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="497E20AE.9030200_at_hdfgroup.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] open-mpi_1.3, intel  ompi_info compiling errors<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 16:07:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Scot Breitenfeld: "[OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange. We have successfully built 1.3 using Intel 11.0 and earlier  
<br>
versions on RHEL5 and Fedora 9 (only 11.0, of course).
<br>
<p>Can you send your configure? Perhaps there is something different there.
<br>
<p><p>On Jan 26, 2009, at 1:44 PM, Scot Breitenfeld wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm trying to compile from source open-mpi-1.3r20295 on a suse  
</span><br>
<span class="quotelev1">&gt; linux
</span><br>
<span class="quotelev1">&gt; 64-bit system (I also tried a 32-bit linux system, same problem). I'm
</span><br>
<span class="quotelev1">&gt; using Intel compilers version 11.0 (and 10.1) for fortran, C/C++
</span><br>
<span class="quotelev1">&gt; (ifort, icc, icpc). The configure script completes with no errors, but
</span><br>
<span class="quotelev1">&gt; when I do make it fails when trying to compile output.cc with the  
</span><br>
<span class="quotelev1">&gt; error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory `/mnt/hdf/brtnfld/packages/jam/ 
</span><br>
<span class="quotelev1">&gt; build_intel/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; depbase=`echo components.o | sed 's|[^/]*$|.deps/&amp;|;s|\.o$||'`;\
</span><br>
<span class="quotelev1">&gt;       /usr/hdf/bin/icpc -DHAVE_CONFIG_H -I. -I../../../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/ompi/tools/ompi_info -I../../../opal/include -I../../../ 
</span><br>
<span class="quotelev1">&gt; orte/include -I../../../ompi/include -I../../../opal/mca/paffinity/ 
</span><br>
<span class="quotelev1">&gt; linux/plpa/src/libplpa  -DOMPI_CONFIGURE_USER=&quot;\&quot;brtnfld\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CONFIGURE_HOST=&quot;\&quot;jam\&quot;&quot; -DOMPI_CONFIGURE_DATE=&quot;\&quot;Mon Jan 26  
</span><br>
<span class="quotelev1">&gt; 14:12:54 CST 2009\&quot;&quot; -DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot; -DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -fno-strict- 
</span><br>
<span class="quotelev1">&gt; aliasing -restrict -pthread -fvisibility=hidden\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.3 -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../openmpi-1.3/opal/include -I../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../openmpi-1.3/ompi/include  \&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../../../openmpi-1.3 -I../../.. - 
</span><br>
<span class="quotelev1">&gt; I../../../../openmpi-1.3/opal/include -I../../../../openmpi-1.3/orte/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../openmpi-1.3/ompi/include  \&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;- 
</span><br>
<span class="quotelev1">&gt; lnsl -lutil  \&quot;&quot; -DOMPI_CC_ABSOLUTE=&quot;\&quot;\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_CXX_ABSOLUTE=&quot;\&quot;\&quot;&quot; -DOMPI_F77_ABSOLUTE=&quot;\&quot;\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; DOMPI_F90_ABSOLUTE=&quot;\&quot;\&quot;&quot; -DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; - 
</span><br>
<span class="quotelev1">&gt; I../../../../openmpi-1.3 -I../../.. -I../../../../openmpi-1.3/opal/ 
</span><br>
<span class="quotelev1">&gt; include -I../../../../openmpi-1.3/orte/include -I../../../../ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.3/ompi/include    -O3 -DNDEBUG -finline-functions -pthread  
</span><br>
<span class="quotelev1">&gt; -MT components.o -MD -MP -MF $depbase.Tpo -c -o  
</span><br>
<span class="quotelev1">&gt; components.o ../../../../openmpi-1.3/ompi/tools/ompi_info/ 
</span><br>
<span class="quotelev1">&gt; components.cc &amp;&amp;\
</span><br>
<span class="quotelev1">&gt;       mv -f $depbase.Tpo $depbase.Po
</span><br>
<span class="quotelev1">&gt; icpc: command line error: invalid argument for option '-fvisibility'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [components.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/mnt/hdf/brtnfld/packages/jam/ 
</span><br>
<span class="quotelev1">&gt; build_intel/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/mnt/hdf/brtnfld/packages/jam/ 
</span><br>
<span class="quotelev1">&gt; build_intel/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="7851.php">Joe Griffin: "Re: [OMPI users] Cannot compile on Linux Itanium system"</a>
<li><strong>Previous message:</strong> <a href="7849.php">Hartzman, Leslie D (MS): "Re: [OMPI users] Newbie needs help! MPI_Wait/MPI_Start/MPI_Issend"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Scot Breitenfeld: "[OMPI users] open-mpi_1.3, intel  ompi_info compiling errors"</a>
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
