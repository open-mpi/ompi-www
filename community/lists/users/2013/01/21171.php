<?
$subject_val = "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 06:50:09 2013" -->
<!-- isoreceived="20130121115009" -->
<!-- sent="Mon, 21 Jan 2013 12:50:01 +0100" -->
<!-- isosent="20130121115001" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi" -->
<!-- id="0EA2BFEB-8E1B-4B4F-B80F-C4DA627DEBBF_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOJJ1Zqan+6sHgeu2MxTeNiDX0GxVT1ipDt_EHMg194oyNMttg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 06:50:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21172.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21170.php">Siegmar Gross: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>In reply to:</strong> <a href="21169.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, I pushed everything upstream:
<br>
&nbsp;- trunk (r27882)
<br>
&nbsp;- prepared a patch for the 1.6 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3469">https://svn.open-mpi.org/trac/ompi/ticket/3469</a>)
<br>
&nbsp;- requested a CMR for the 1.7 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3470">https://svn.open-mpi.org/trac/ompi/ticket/3470</a>)
<br>
<p>Thanks for your help,
<br>
&nbsp;&nbsp;George.
<br>
<p><p>On Jan 21, 2013, at 07:56 , Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you mate. This patch works quite well on my Raspberry Pi w/o any
</span><br>
<span class="quotelev1">&gt; error. Can we put them in the upstream?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Jan 21, 2013 at 12:07 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Eric,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What do you think about the patch attached to ticket #3469 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/3469">https://svn.open-mpi.org/trac/ompi/ticket/3469</a>). We might blend the two patches together, and have all the different ARM versions covered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 20, 2013, at 05:55 , Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The above issue fixed w/ this patch I used:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://raw.github.com/sebhtml/patches/master/openmpi/Raspberry-Pi-openmpi-1.6.2.patch">https://raw.github.com/sebhtml/patches/master/openmpi/Raspberry-Pi-openmpi-1.6.2.patch</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that possible OpenMPI can contain this patch in the future?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sun, Jan 20, 2013 at 3:13 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just use --disable-mpif77 and --disable-mpif90 to let configure run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well. However, I know it's only tough workround. After configured
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; well, I encounter following error when run make:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in config
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/config'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/config'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in contrib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/contrib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Nothing to be done for `all'.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/contrib'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/include'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make  all-am
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -c -o dlopen.lo `test -f 'loaders/dlopen.c' || echo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; './'`loaders/dlopen.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-preopen.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-preopen.Tpo -c -o libltdlc_la-preopen.lo `test -f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'loaders/preopen.c' || echo './'`loaders/preopen.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt__alloc.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt__alloc.Tpo -c -o libltdlc_la-lt__alloc.lo `test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -f 'lt__alloc.c' || echo './'`lt__alloc.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt_dlloader.Tpo -c -o libltdlc_la-lt_dlloader.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; `test -f 'lt_dlloader.c' || echo './'`lt_dlloader.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-lt_error.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt_error.Tpo -c -o libltdlc_la-lt_error.lo `test -f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'lt_error.c' || echo './'`lt_error.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-ltdl.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-ltdl.Tpo -c -o libltdlc_la-ltdl.lo `test -f 'ltdl.c'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; || echo './'`ltdl.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool  --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.  -DLTDLOPEN=libltdlc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT libltdlc_la-slist.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-slist.Tpo -c -o libltdlc_la-slist.lo `test -f
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'slist.c' || echo './'`slist.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool --tag=CC   --mode=compile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLT_CONFIG_H='&lt;config.h&gt;' -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband   -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -MT lt__strl.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/lt__strl.Tpo -c -o lt__strl.lo lt__strl.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-lt__alloc.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt__alloc.Tpo -c lt__alloc.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-lt__alloc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-preopen.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-preopen.Tpo -c loaders/preopen.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-preopen.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-lt_error.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt_error.Tpo -c lt_error.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-lt_error.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT lt__strl.lo -MD -MP -MF .deps/lt__strl.Tpo -c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lt__strl.c  -fPIC -DPIC -o .libs/lt__strl.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I. -Ilibltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I./libltdl -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT dlopen.lo -MD -MP -MF .deps/dlopen.Tpo -c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; loaders/dlopen.c  -fPIC -DPIC -o .libs/dlopen.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-lt_dlloader.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-lt_dlloader.Tpo -c lt_dlloader.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-lt_dlloader.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-ltdl.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-ltdl.Tpo -c ltdl.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-ltdl.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: compile:  armv6-rpi-linux-gnueabi-gcc -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -DLTDLOPEN=libltdlc &quot;-DLT_CONFIG_H=&lt;config.h&gt;&quot; -DLTDL -I. -I.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ilibltdl -I./libltdl -I./libltdl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/home/huli/Projects/openmpi-1.6.3/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -I/usr/include/infiniband -I/usr/include/infiniband -Ofast -mfpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfloat-abi=hard -MT libltdlc_la-slist.lo -MD -MP -MF
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .deps/libltdlc_la-slist.Tpo -c slist.c  -fPIC -DPIC -o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-slist.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/dlopen.Tpo .deps/dlopen.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool --tag=CC   --mode=link armv6-rpi-linux-gnueabi-gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ofast -mfpu=vfp -mfloat-abi=hard -module -avoid-version  -o dlopen.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dlopen.lo -ldl -ldl -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-lt__alloc.Tpo .deps/libltdlc_la-lt__alloc.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/lt__strl.Tpo .deps/lt__strl.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-lt_error.Tpo .deps/libltdlc_la-lt_error.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-preopen.Tpo .deps/libltdlc_la-preopen.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-lt_dlloader.Tpo .deps/libltdlc_la-lt_dlloader.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: armv6-rpi-linux-gnueabi-ar cru .libs/dlopen.a .libs/dlopen.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: armv6-rpi-linux-gnueabi-ranlib .libs/dlopen.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-slist.Tpo .deps/libltdlc_la-slist.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;dlopen.la&quot; &amp;&amp; ln -s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../dlopen.la&quot; &quot;dlopen.la&quot; )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mv -f .deps/libltdlc_la-ltdl.Tpo .deps/libltdlc_la-ltdl.Plo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /bin/sh ./libtool --tag=CC   --mode=link armv6-rpi-linux-gnueabi-gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Ofast -mfpu=vfp -mfloat-abi=hard -no-undefined -dlpreopen dlopen.la
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -o libltdlc.la  libltdlc_la-preopen.lo libltdlc_la-lt__alloc.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libltdlc_la-lt_dlloader.lo libltdlc_la-lt_error.lo libltdlc_la-ltdl.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libltdlc_la-slist.lo lt__strl.lo -ldl -lrt -lnsl  -lutil -lm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: rm -f .libs/libltdlc.nm .libs/libltdlc.nmS .libs/libltdlc.nmT
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: (cd .libs &amp;&amp; armv6-rpi-linux-gnueabi-gcc -Ofast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mfpu=vfp -mfloat-abi=hard -c -fno-builtin  -fPIC -DPIC &quot;libltdlcS.c&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: rm -f &quot;.libs/libltdlcS.c&quot; &quot;.libs/libltdlc.nm&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;.libs/libltdlc.nmS&quot; &quot;.libs/libltdlc.nmT&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: (cd .libs/libltdlc.lax/dlopen.a &amp;&amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-ar x
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/home/huli/Projects/openmpi-1.6.3/opal/libltdl/./.libs/dlopen.a&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: armv6-rpi-linux-gnueabi-ar cru .libs/libltdlc.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-preopen.o .libs/libltdlc_la-lt__alloc.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-lt_dlloader.o .libs/libltdlc_la-lt_error.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlc_la-ltdl.o .libs/libltdlc_la-slist.o .libs/lt__strl.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; .libs/libltdlcS.o  .libs/libltdlc.lax/dlopen.a/dlopen.o
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: armv6-rpi-linux-gnueabi-ranlib .libs/libltdlc.a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: rm -fr .libs/libltdlc.lax
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: link: ( cd &quot;.libs&quot; &amp;&amp; rm -f &quot;libltdlc.la&quot; &amp;&amp; ln -s
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;../libltdlc.la&quot; &quot;libltdlc.la&quot; )
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[3]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/libltdl'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Making all in asm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Entering directory `/home/huli/Projects/openmpi-1.6.3/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CC     asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CPPAS  atomic-asm.lo
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S: Assembler messages:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:7: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:15: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:23: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:55: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; atomic-asm.S:70: Error: selected processor does not support ARM mode `dmb'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** [atomic-asm.lo] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[2]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal/asm'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make[1]: Leaving directory `/home/huli/Projects/openmpi-1.6.3/opal'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's my toolchain's gcc details.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [huli_at_localhost openmpi-1.6.3]$ armv6-rpi-linux-gnueabi-gcc -v
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using built-in specs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COLLECT_GCC=armv6-rpi-linux-gnueabi-gcc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; COLLECT_LTO_WRAPPER=/home/huli/Projects/arm-devel-rpi/libexec/gcc/arm-rpi-linux-gnueabi/4.7.3/lto-wrapper
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Target: arm-rpi-linux-gnueabi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Configured with:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /home/huli/Projects/ct-rpi/.build/src/gcc-linaro-4.7-2012.10/configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --build=x86_64-build_unknown-linux-gnu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --host=x86_64-build_unknown-linux-gnu --target=arm-rpi-linux-gnueabi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --prefix=/home/huli/Projects/arm-devel-rpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-sysroot=/home/huli/Projects/arm-devel-rpi/arm-rpi-linux-gnueabi/sysroot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-languages=c,c++,fortran --with-arch=armv6zk
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-cpu=arm1176jzf-s --with-tune=arm1176jzf-s --with-fpu=vfp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-float=hard --with-pkgversion='crosstool-NG 1.17.0'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-__cxa_atexit --disable-libmudflap --disable-libgomp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-libssp --disable-libquadmath --disable-libquadmath-support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-gmp=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-mpfr=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-mpc=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-ppl=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-cloog=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-libelf=/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-host-libstdcxx='-static-libgcc -Wl,-Bstatic,-lstdc++,-Bdynamic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lm -L/home/huli/Projects/ct-rpi/.build/arm-rpi-linux-gnueabi/buildtools/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -lpwl' --enable-threads=posix --enable-target-optspace --disable-nls
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --disable-multilib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-local-prefix=/home/huli/Projects/arm-devel-rpi/arm-rpi-linux-gnueabi/sysroot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-c99 --enable-long-long --with-float=hard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thread model: posix
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc version 4.7.3 20121001 (prerelease) (crosstool-NG 1.17.0)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyone have idea?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sun, Jan 20, 2013 at 2:05 AM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The cross-compile issue I fixed. Check following source code:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; opal_config_asm.m4:897: [AC_MSG_ERROR([No atomic primitives available
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for $host])])
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; It seems that checks the toolchain's tuple is one of: armv7* or armv6*
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or armv5*. I have recompiled my toolchain and no such error occurred.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; However, I hit another issue about fortran as configure running.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** Fortran 90/95 compiler
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking for armv6-rpi-linux-gnueabi-gfortran...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; armv6-rpi-linux-gnueabi-gfortran
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking whether armv6-rpi-linux-gnueabi-gfortran accepts -g... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking if Fortran 77 compiler works... links (cross compiling)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking armv6-rpi-linux-gnueabi-gfortran external symbol
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; convention... single underscore
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking if C and Fortran 77 are link compatible... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking to see if F77 compiler likes the C++ exception flags...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; skipped (no C++ exceptions flags)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking to see if mpif77/mpif90 compilers need additional linker flags... none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking if Fortran 77 compiler supports CHARACTER... yes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checking size of Fortran 77 CHARACTER... configure: error: Can not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; determine size of CHARACTER when cross-compiling
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any hint? Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eric
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sat, Jan 19, 2013 at 10:08 PM, Lee Eric &lt;openlinuxsource_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any heads up? Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Fri, Jan 18, 2013 at 5:28 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 16, 2013, at 6:41 AM, Leif Lindholm &lt;Leif.Lindholm_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That isn't, technically speaking, correct for the Raspberry Pi - but it is a workaround if you know you will never actually use the asm implementations of the atomics, but only the inline C ones..
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; This sort of hides the problem that the dedicated barrier instructions were not available in ARMv6 (it used &quot;system control coprocessor operations&quot; instead.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you ever executed the asm implementation, you would trigger an undefined instruction exception on the Pi.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hah; sweet.  Ok.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So what's the right answer?  Would it be acceptable to use a no-op for this operation on such architectures?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="21172.php">Victor Vysotskiy: "[OMPI users] Possible memory leak(s) in OpenMPI 1.6.3?"</a>
<li><strong>Previous message:</strong> <a href="21170.php">Siegmar Gross: "Re: [OMPI users] problem with groups and communicators in openmpi-1.6.4rc2"</a>
<li><strong>In reply to:</strong> <a href="21169.php">Lee Eric: "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
<li><strong>Reply:</strong> <a href="21185.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Help: OpenMPI Compilation in Raspberry Pi"</a>
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
