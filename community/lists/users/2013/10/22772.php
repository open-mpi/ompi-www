<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  7 16:17:07 2013" -->
<!-- isoreceived="20131007201707" -->
<!-- sent="Mon, 7 Oct 2013 20:16:51 +0000" -->
<!-- isosent="20131007201651" -->
<!-- name="Hammond, Simon David (-EXP)" -->
<!-- email="sdhammo_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11" -->
<!-- id="CE787377.20378%sdhammo_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F36007BE92F4_at_HQMAIL02.nvidia.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11<br>
<strong>From:</strong> Hammond, Simon David (-EXP) (<em>sdhammo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-07 16:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Rolf, that seems to have made the code compile and make
<br>
successfully. 
<br>
<p>S.
<br>
<p><pre>
-- 
Simon Hammond
Scalable Computer Architectures (CSRI/146, 01422)
Sandia National Laboratories, NM, USA
On 10/7/13 1:47 PM, &quot;Rolf vandeVaart&quot; &lt;rvandevaart_at_[hidden]&gt; wrote:
&gt;That might be a bug.  While I am checking, you could try configuring with
&gt;this additional flag:
&gt;
&gt;--enable-mca-no-build=pml-bfo
&gt;
&gt;Rolf
&gt;
&gt;&gt;-----Original Message-----
&gt;&gt;From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Hammond,
&gt;&gt;Simon David (-EXP)
&gt;&gt;Sent: Monday, October 07, 2013 3:30 PM
&gt;&gt;To: users_at_[hidden]
&gt;&gt;Subject: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11
&gt;&gt;
&gt;&gt;Hey everyone,
&gt;&gt;
&gt;&gt;I am trying to build OpenMPI 1.7.2 with CUDA enabled, OpenMPI will
&gt;&gt;configure successfully but I am seeing a build error relating to the
&gt;&gt;inclusion of
&gt;&gt;the CUDA options (at least I think so). Do you guys know if this is a
&gt;&gt;bug or
&gt;&gt;whether something is wrong with how we are configuring OpenMPI for our
&gt;&gt;cluster.
&gt;&gt;
&gt;&gt;Configure Line: ./configure
&gt;&gt;--prefix=/home/projects/openmpi/1.7.2/gnu/4.7.2 --enable-shared --enable-
&gt;&gt;static --disable-vt --with-cuda=/home/projects/cuda/5.5.11
&gt;&gt;CC=`which gcc` CXX=`which g++` FC=`which gfortran`
&gt;&gt;
&gt;&gt;Running make V=1 gives:
&gt;&gt;
&gt;&gt;make[2]: Entering directory `/tmp/openmpi-1.7.2/ompi/tools/ompi_info'
&gt;&gt;/bin/sh ../../../libtool  --tag=CC   --mode=link
&gt;&gt;/home/projects/gcc/4.7.2/bin/gcc -std=gnu99 -
&gt;&gt;DOPAL_CONFIGURE_USER=&quot;\&quot;&lt;REMOVED&gt;\&quot;&quot; -
&gt;&gt;DOPAL_CONFIGURE_HOST=&quot;\&quot;k20-0007\&quot;&quot;
&gt;&gt;-DOPAL_CONFIGURE_DATE=&quot;\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
&gt;&gt;-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
&gt;&gt;-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -
&gt;&gt;DNDEBUG -finline-functions -fno-strict-aliasing -pthread\&quot;&quot;
&gt;&gt;-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
&gt;&gt;-I/usr/include/infiniband -I/usr/include/infiniband
&gt;&gt;-I/usr/include/infiniband -
&gt;&gt;I/usr/include/infiniband -I/usr/include/infiniband\&quot;&quot; -
&gt;&gt;DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; -
&gt;&gt;DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  \&quot;&quot;
&gt;&gt;-DOMPI_BUILD_FFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot;
&gt;&gt;-DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic  \&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-
&gt;&gt;lrt -lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=&quot;\&quot;\&quot;&quot;
&gt;&gt;-DOMPI_CXX_ABSOLUTE=&quot;\&quot;none\&quot;&quot; -O3 -DNDEBUG -finline-functions
&gt;&gt;-fno-strict-aliasing -pthread  -export-dynamic   -o ompi_info ompi_info.o
&gt;&gt;param.o components.o version.o ../../../ompi/libmpi.la -lrt -lnsl
&gt;&gt;-lutil -lm
&gt;&gt;libtool: link: /home/projects/gcc/4.7.2/bin/gcc -std=gnu99 -
&gt;&gt;DOPAL_CONFIGURE_USER=\&quot;&lt;REMOVED&gt;\&quot; -
&gt;&gt;DOPAL_CONFIGURE_HOST=\&quot;k20-0007\&quot;
&gt;&gt;&quot;-DOPAL_CONFIGURE_DATE=\&quot;Mon Oct  7 13:16:12 MDT 2013\&quot;&quot;
&gt;&gt;-DOMPI_BUILD_USER=\&quot;&lt;REMOVED&gt;\&quot; -DOMPI_BUILD_HOST=\&quot;k20-0007\&quot;
&gt;&gt;&quot;-DOMPI_BUILD_DATE=\&quot;Mon Oct  7 13:26:23 MDT 2013\&quot;&quot;
&gt;&gt;&quot;-DOMPI_BUILD_CFLAGS=\&quot;-O3 -DNDEBUG -finline-functions -fno-strict-
&gt;&gt;aliasing -pthread\&quot;&quot; &quot;-DOMPI_BUILD_CPPFLAGS=\&quot;-I../../..
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/hwloc/hwloc152/hwloc/include
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent
&gt;&gt;-I/tmp/openmpi-1.7.2/opal/mca/event/libevent2019/libevent/include
&gt;&gt;-I/usr/include/infiniband -I/usr/include/infiniband
&gt;&gt;-I/usr/include/infiniband -
&gt;&gt;I/usr/include/infiniband -I/usr/include/infiniband\&quot;&quot; &quot;-
&gt;&gt;DOMPI_BUILD_CXXFLAGS=\&quot;-O3 -DNDEBUG -finline-functions -pthread\&quot;&quot; &quot;-
&gt;&gt;DOMPI_BUILD_CXXCPPFLAGS=\&quot;-I../../..  \&quot;&quot;
&gt;&gt;-DOMPI_BUILD_FFLAGS=\&quot;\&quot; -DOMPI_BUILD_FCFLAGS=\&quot;\&quot;
&gt;&gt;&quot;-DOMPI_BUILD_LDFLAGS=\&quot;-export-dynamic  \&quot;&quot; &quot;-DOMPI_BUILD_LIBS=\&quot;-
&gt;&gt;lrt -lnsl  -lutil -lm \&quot;&quot; -DOPAL_CC_ABSOLUTE=\&quot;\&quot; -
&gt;&gt;DOMPI_CXX_ABSOLUTE=\&quot;none\&quot;
&gt;&gt;-O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
&gt;&gt;.libs/ompi_info ompi_info.o param.o components.o version.o -Wl,--export-
&gt;&gt;dynamic  ../../../ompi/.libs/libmpi.so -L/usr/lib64 -lrdmacm -losmcomp -
&gt;&gt;libverbs /tmp/openmpi-1.7.2/orte/.libs/libopen-rte.so
&gt;&gt;/tmp/openmpi-1.7.2/opal/.libs/libopen-pal.so -lcuda -lnuma -ldl -lrt
&gt;&gt;-lnsl -lutil -
&gt;&gt;lm -pthread -Wl,-rpath -Wl,/home/projects/openmpi/1.7.2/gnu/4.7.2/lib
&gt;&gt;../../../ompi/.libs/libmpi.so: undefined reference to
&gt;&gt;`mca_pml_bfo_send_request_start_cuda'
&gt;&gt;../../../ompi/.libs/libmpi.so: undefined reference to
&gt;&gt;`mca_pml_bfo_cuda_need_buffers'
&gt;&gt;collect2: error: ld returned 1 exit status
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;Thanks.
&gt;&gt;
&gt;&gt;S.
&gt;&gt;
&gt;&gt;--
&gt;&gt;Simon Hammond
&gt;&gt;Scalable Computer Architectures (CSRI/146, 01422) Sandia National
&gt;&gt;Laboratories, NM, USA
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;_______________________________________________
&gt;&gt;users mailing list
&gt;&gt;users_at_[hidden]
&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;--------------------------------------------------------------------------
&gt;---------
&gt;This email message is for the sole use of the intended recipient(s) and
&gt;may contain
&gt;confidential information.  Any unauthorized review, use, disclosure or
&gt;distribution
&gt;is prohibited.  If you are not the intended recipient, please contact the
&gt;sender by
&gt;reply email and destroy all copies of the original message.
&gt;--------------------------------------------------------------------------
&gt;---------
&gt;_______________________________________________
&gt;users mailing list
&gt;users_at_[hidden]
&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Previous message:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>In reply to:</strong> <a href="22771.php">Rolf vandeVaart: "Re: [OMPI users] Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
<li><strong>Reply:</strong> <a href="22773.php">Rolf vandeVaart: "Re: [OMPI users] [EXTERNAL] Re: Build Failing for OpenMPI 1.7.2 and CUDA 5.5.11"</a>
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
