<?
$subject_val = "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  7 15:30:04 2013" -->
<!-- isoreceived="20131007193004" -->
<!-- sent="Mon, 7 Oct 2013 19:29:45 +0000" -->
<!-- isosent="20131007192945" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11" -->
<!-- id="CE786886.20361%sdhammo_at_sandia.gov" -->
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
<strong>Subject:</strong> [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11<br>
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-07 15:29:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey everyone,
<br>
<p>I am trying to build OpenMPI 1.7.2 with CUDA enabled, OpenMPI will
<br>
configure successfully but I am seeing a build error relating to the
<br>
inclusion of the CUDA options (at least I think so). Do you guys know if
<br>
this is a bug or whether something is wrong with how we are configuring
<br>
OpenMPI for our cluster.
<br>
<p>Configure Line: ./configure
<br>
--prefix=/home/projects/openmpi/1.7.2/gnu/4.7.2 --enable-shared
<br>
--enable-static --disable-vt --with-cuda=/home/projects/cuda/5.5.11
<br>
CC=`which gcc` CXX=`which g++` FC=`which gfortran`
<br>
<p>Running make V=1 gives:
<br>
<p>make[2]: Entering directory `/tmp/openmpi-1.7.2/ompi/tools/ompi_info'
<br>
/bin/sh ../../../libtool  --tag=CC   --mode=link
<br>
/home/projects/gcc/4.7.2/bin/gcc -std=gnu99
<br>
-DOPAL_CONFIGURE_USER=&quot;\&quot;&lt;REMOVED&gt;\&quot;&quot; -DOPAL_CONFIGURE_HOST=&quot;\&quot;k20-0007\&quot;&quot;
<br>
-DOPAL_CONFIGURE_DATE=&quot;\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
<br>
-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
<br>
-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing -pthread\&quot;&quot;
<br>
-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..
<br>
-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
<br>
-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
<br>
-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband\&quot;&quot; -DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG
<br>
-finline-functions -pthread\&quot;&quot; -DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot;
<br>
-DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot;
<br>
-DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lrt
<br>
-lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=&quot;\&quot;\&quot;&quot;
<br>
-DOMPI_CXX_ABSOLUTE=&quot;\&quot;none\&quot;&quot; -O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread  -export-dynamic   -o ompi_info ompi_info.o
<br>
param.o components.o version.o ../../../ompi/libmpi.la -lrt -lnsl  -lutil
<br>
-lm
<br>
libtool: link: /home/projects/gcc/4.7.2/bin/gcc -std=gnu99
<br>
-DOPAL_CONFIGURE_USER=\&quot;&lt;REMOVED&gt;\&quot; -DOPAL_CONFIGURE_HOST=\&quot;k20-0007\&quot;
<br>
&quot;-DOPAL_CONFIGURE_DATE=\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
<br>
-DOMPI_BUILD_USER=\&quot;&lt;REMOVED&gt;\&quot; -DOMPI_BUILD_HOST=\&quot;k20-0007\&quot;
<br>
&quot;-DOMPI_BUILD_DATE=\&quot;Mon Oct  7 13:26:23 MDT 2013\&quot;&quot;
<br>
&quot;-DOMPI_BUILD_CFLAGS=\&quot;-O3 -DNDEBUG -finline-functions
<br>
-fno-strict-aliasing -pthread\&quot;&quot; &quot;-DOMPI_BUILD_CPPFLAGS=\&quot;-I../../..
<br>
-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
<br>
-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
<br>
-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband -I/usr/include/infiniband
<br>
-I/usr/include/infiniband\&quot;&quot; &quot;-DOMPI_BUILD_CXXFLAGS=\&quot;-O3 -DNDEBUG
<br>
-finline-functions -pthread\&quot;&quot; &quot;-DOMPI_BUILD_CXXCPPFLAGS=\&quot;-I../../..  \&quot;&quot;
<br>
-DOMPI_BUILD_FFLAGS=\&quot;\&quot; -DOMPI_BUILD_FCFLAGS=\&quot;\&quot;
<br>
&quot;-DOMPI_BUILD_LDFLAGS=\&quot;-export-dynamic  \&quot;&quot; &quot;-DOMPI_BUILD_LIBS=\&quot;-lrt
<br>
-lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=\&quot;\&quot; -DOMPI_CXX_ABSOLUTE=\&quot;none\&quot;
<br>
-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
<br>
.libs/ompi_info ompi_info.o param.o components.o version.o
<br>
-Wl,--export-dynamic  ../../../ompi/.libs/libmpi.so -L/usr/lib64 -lrdmacm
<br>
-losmcomp -libverbs /tmp/openmpi-1.7.2/orte/.libs/libopen-rte.so
<br>
/tmp/openmpi-1.7.2/opal/.libs/libopen-pal.so -lcuda -lnuma -ldl -lrt -lnsl
<br>
-lutil -lm -pthread -Wl,-rpath
<br>
-Wl,/home/projects/openmpi/1.7.2/gnu/4.7.2/lib
<br>
../../../ompi/.libs/libmpi.so: undefined reference to
<br>
`mca_pml_bfo_send_request_start_cuda'
<br>
../../../ompi/.libs/libmpi.so: undefined reference to
<br>
`mca_pml_bfo_cuda_need_buffers'
<br>
collect2: error: ld returned 1 exit status
<br>
<p><p><p>Thanks.
<br>
<p>S.
<br>
<p><pre>
-- 
Simon Hammond
Scalable Computer Architectures (CSRI/146, 01422)
Sandia National Laboratories, NM, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22769.php">Reuti: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
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
