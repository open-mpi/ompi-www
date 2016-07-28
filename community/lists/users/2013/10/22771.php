<?
$subject_val = "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  7 15:47:19 2013" -->
<!-- isoreceived="20131007194719" -->
<!-- sent="Mon, 7 Oct 2013 12:47:16 -0700" -->
<!-- isosent="20131007194716" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11" -->
<!-- id="3AF945EBF4D3EC41AFE44EED9B0585F36007BE92F4_at_HQMAIL02.nvidia.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE786886.20361%sdhammo_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-07 15:47:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That might be a bug.  While I am checking, you could try configuring with this additional flag:
<br>
<p>--enable-mca-no-build=pml-bfo
<br>
<p>Rolf
<br>
<p><span class="quotelev1">&gt;-----Original Message-----
</span><br>
<span class="quotelev1">&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Hammond,
</span><br>
<span class="quotelev1">&gt;Simon David (-EXP)
</span><br>
<span class="quotelev1">&gt;Sent: Monday, October 07, 2013 3:30 PM
</span><br>
<span class="quotelev1">&gt;To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Subject: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hey everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I am trying to build OpenMPI 1.7.2 with CUDA enabled, OpenMPI will
</span><br>
<span class="quotelev1">&gt;configure successfully but I am seeing a build error relating to the inclusion of
</span><br>
<span class="quotelev1">&gt;the CUDA options (at least I think so). Do you guys know if this is a bug or
</span><br>
<span class="quotelev1">&gt;whether something is wrong with how we are configuring OpenMPI for our
</span><br>
<span class="quotelev1">&gt;cluster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Configure Line: ./configure
</span><br>
<span class="quotelev1">&gt;--prefix=/home/projects/openmpi/1.7.2/gnu/4.7.2 --enable-shared --enable-
</span><br>
<span class="quotelev1">&gt;static --disable-vt --with-cuda=/home/projects/cuda/5.5.11
</span><br>
<span class="quotelev1">&gt;CC=`which gcc` CXX=`which g++` FC=`which gfortran`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Running make V=1 gives:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;make[2]: Entering directory `/tmp/openmpi-1.7.2/ompi/tools/ompi_info'
</span><br>
<span class="quotelev1">&gt;/bin/sh ../../../libtool  --tag=CC   --mode=link
</span><br>
<span class="quotelev1">&gt;/home/projects/gcc/4.7.2/bin/gcc -std=gnu99 -
</span><br>
<span class="quotelev1">&gt;DOPAL_CONFIGURE_USER=&quot;\&quot;&lt;REMOVED&gt;\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt;DOPAL_CONFIGURE_HOST=&quot;\&quot;k20-0007\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOPAL_CONFIGURE_DATE=&quot;\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -
</span><br>
<span class="quotelev1">&gt;DNDEBUG -finline-functions -fno-strict-aliasing -pthread\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt;-I/usr/include/infiniband -I/usr/include/infiniband -I/usr/include/infiniband -
</span><br>
<span class="quotelev1">&gt;I/usr/include/infiniband -I/usr/include/infiniband\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt;DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; -
</span><br>
<span class="quotelev1">&gt;DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-
</span><br>
<span class="quotelev1">&gt;lrt -lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=&quot;\&quot;\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_CXX_ABSOLUTE=&quot;\&quot;none\&quot;&quot; -O3 -DNDEBUG -finline-functions
</span><br>
<span class="quotelev1">&gt;-fno-strict-aliasing -pthread  -export-dynamic   -o ompi_info ompi_info.o
</span><br>
<span class="quotelev1">&gt;param.o components.o version.o ../../../ompi/libmpi.la -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev1">&gt;libtool: link: /home/projects/gcc/4.7.2/bin/gcc -std=gnu99 -
</span><br>
<span class="quotelev1">&gt;DOPAL_CONFIGURE_USER=\&quot;&lt;REMOVED&gt;\&quot; -
</span><br>
<span class="quotelev1">&gt;DOPAL_CONFIGURE_HOST=\&quot;k20-0007\&quot;
</span><br>
<span class="quotelev1">&gt;&quot;-DOPAL_CONFIGURE_DATE=\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_USER=\&quot;&lt;REMOVED&gt;\&quot; -DOMPI_BUILD_HOST=\&quot;k20-0007\&quot;
</span><br>
<span class="quotelev1">&gt;&quot;-DOMPI_BUILD_DATE=\&quot;Mon Oct  7 13:26:23 MDT 2013\&quot;&quot;
</span><br>
<span class="quotelev1">&gt;&quot;-DOMPI_BUILD_CFLAGS=\&quot;-O3 -DNDEBUG -finline-functions -fno-strict-
</span><br>
<span class="quotelev1">&gt;aliasing -pthread\&quot;&quot; &quot;-DOMPI_BUILD_CPPFLAGS=\&quot;-I../../..
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
</span><br>
<span class="quotelev1">&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
</span><br>
<span class="quotelev1">&gt;-I/usr/include/infiniband -I/usr/include/infiniband -I/usr/include/infiniband -
</span><br>
<span class="quotelev1">&gt;I/usr/include/infiniband -I/usr/include/infiniband\&quot;&quot; &quot;-
</span><br>
<span class="quotelev1">&gt;DOMPI_BUILD_CXXFLAGS=\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; &quot;-
</span><br>
<span class="quotelev1">&gt;DOMPI_BUILD_CXXCPPFLAGS=\&quot;-I../../..  \&quot;&quot;
</span><br>
<span class="quotelev1">&gt;-DOMPI_BUILD_FFLAGS=\&quot;\&quot; -DOMPI_BUILD_FCFLAGS=\&quot;\&quot;
</span><br>
<span class="quotelev1">&gt;&quot;-DOMPI_BUILD_LDFLAGS=\&quot;-export-dynamic  \&quot;&quot; &quot;-DOMPI_BUILD_LIBS=\&quot;-
</span><br>
<span class="quotelev1">&gt;lrt -lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=\&quot;\&quot; -
</span><br>
<span class="quotelev1">&gt;DOMPI_CXX_ABSOLUTE=\&quot;none\&quot;
</span><br>
<span class="quotelev1">&gt;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
</span><br>
<span class="quotelev1">&gt;.libs/ompi_info ompi_info.o param.o components.o version.o -Wl,--export-
</span><br>
<span class="quotelev1">&gt;dynamic  ../../../ompi/.libs/libmpi.so -L/usr/lib64 -lrdmacm -losmcomp -
</span><br>
<span class="quotelev1">&gt;libverbs /tmp/openmpi-1.7.2/orte/.libs/libopen-rte.so
</span><br>
<span class="quotelev1">&gt;/tmp/openmpi-1.7.2/opal/.libs/libopen-pal.so -lcuda -lnuma -ldl -lrt -lnsl -lutil -
</span><br>
<span class="quotelev1">&gt;lm -pthread -Wl,-rpath -Wl,/home/projects/openmpi/1.7.2/gnu/4.7.2/lib
</span><br>
<span class="quotelev1">&gt;../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;`mca_pml_bfo_send_request_start_cuda'
</span><br>
<span class="quotelev1">&gt;../../../ompi/.libs/libmpi.so: undefined reference to
</span><br>
<span class="quotelev1">&gt;`mca_pml_bfo_cuda_need_buffers'
</span><br>
<span class="quotelev1">&gt;collect2: error: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;S.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;Simon Hammond
</span><br>
<span class="quotelev1">&gt;Scalable Computer Architectures (CSRI/146, 01422) Sandia National
</span><br>
<span class="quotelev1">&gt;Laboratories, NM, USA
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22770.php">Hammond, Simon David (-EXP): "[OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22772.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
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
