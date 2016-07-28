<?
$subject_val = "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 12:33:00 2015" -->
<!-- isoreceived="20150226173300" -->
<!-- sent="Thu, 26 Feb 2015 11:34:20 -0600" -->
<!-- isosent="20150226173420" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3" -->
<!-- id="54EF591C.8020405_at_mcs.anl.gov" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F78CA3BA-2DDF-4338-8481-5A00F0E33570_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 12:34:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17059.php">Jeff Squyres (jsquyres): "[OMPI devel] Using the Github ompi-release bot"</a>
<li><strong>Previous message:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/07/2014 06:26 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Hi Rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Following up on this: I cannot find any reference to XOPEN_SOURCE in our included ROMIO source for Lustre. I only found one reference anywhere in ROMIO:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; romio/adio/ad_xfs/ad_xfs.h:11:#define _XOPEN_SOURCE 500
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any other suggestions on what could be causing the problem?
</span><br>
<p>I've fixed this in ROMIO by not mucking around with XOPEN_SOURCE at all, 
<br>
in either lustre or xfs or anywhere.
<br>
<p><a href="http://git.mpich.org/mpich.git/commit/4e80e1d2b">http://git.mpich.org/mpich.git/commit/4e80e1d2b</a>
<br>
and
<br>
<a href="http://git.mpich.org/mpich.git/commit/5a10283bf7">http://git.mpich.org/mpich.git/commit/5a10283bf7</a>
<br>
==rob
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 28, 2014, at 7:32 AM, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/28/2014 06:00 AM, Paul Kapinos wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Open MPI and ROMIO developer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We use Open MPI v.1.6.x and 1.8.x in our cluster.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have Lustre file system; we wish to use MPI_IO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So the OpenMPI's are compiled with this flag:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In our newest installation openmpi/1.8.3 we found that MPI_IO is *broken*.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Short seek for root of the evil bring the following to light:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - the ROMIO component 'MCA io: romio' isn't here at all in the affected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; version, because
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - configure of ROMIO has *failed* (cf. logs (a,b,c).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - because lustre_user.h was found but could not be compiled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; lustre_user.h cannot be compiled because quota defines won't compile. Ugh, what a mess.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A while back I noticed this and fixed it by removing an XOPEN_SOURCE feature test macro:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/1973">http://trac.mpich.org/projects/mpich/ticket/1973</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then, on solaris with --enable-strict we needed to put *back* the XOPEN_SOURCE macro or else pread and pwrite would be undefined.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So what I really need to to is delete XOPEN_SOURCE since it causes such headaches, and on the rare platforms that only have pread/pwrite defined if you take extraordinary measures, if at all, I'll have a ROMIO pread and pwrite that simply do seek + write (or read).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For now, please delete the XOPEN_SOURCE line at the very beginning of src/mpi/romio/adio/ad_lustre/ad_lustre_rwcontig.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In our system, there are two lustre_user.h available:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $ locate lustre_user.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/linux/lustre_user.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/lustre/lustre_user.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As I'm not very convinient with lustre, I just attach both of them.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[509]$ uname -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux cluster.rz.RWTH-Aachen.DE 2.6.32-431.29.2.el6.x86_64 #1 SMP Tue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sep 9 13:45:55 CDT 2014 x86_64 x86_64 x86_64 GNU/Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pk224850_at_cluster:~[510]$ cat /etc/issue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scientific Linux release 6.5 (Carbon)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that openmpi/1.8.1 seem to be fully OK (MPI_IO works) in our
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul Kapinos
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.S. Is there a confugure flag, which will enforce ROMIO? That is when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROMIO not available, configure would fail. This would make such hidden
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors publique at installation time..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a) Log in Open MPI's config.log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:226781: OMPI configuring in ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:226866: running /bin/sh './configure'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-file-system=testfs+ufs+nfs+lustre  FROM_OMPI=yes CC=&quot;icc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -std=c99&quot; CFLAGS=&quot;-DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -m64 -finline-functions -fno-strict-aliasing -restrict -fexceptions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Qoption,cpp,--extended_float_types -pthread&quot; CPPFLAGS=&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FFLAGS=&quot;-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64  &quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LDFLAGS=&quot;-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fexceptions &quot; --enable-shared --disable-static
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-file-system=testfs+ufs+nfs+lustre
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --prefix=/opt/MPI/openmpi-1.8.3/linux/intel --disable-aio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:226876: /bin/sh './configure' *failed* for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:226911: WARNING: ROMIO distribution did not configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:227425: checking if MCA component io:romio can compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:227427: result: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b) dump of Open MPI's 'configure' output to the console:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking lustre/lustre_user.h usability... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking lustre/lustre_user.h presence... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: lustre/lustre_user.h: present but cannot be compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: lustre/lustre_user.h:     check for missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prerequisite headers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: lustre/lustre_user.h: see the Autoconf documentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: lustre/lustre_user.h:     section &quot;Present But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot Be Compiled&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: lustre/lustre_user.h: proceeding with the compiler's
</span><br>
<span class="quotelev3">&gt;&gt;&gt; result
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:     ## -------------------------------- ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:     ## Report this to discuss_at_[hidden] ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING:     ## -------------------------------- ##
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking for lustre/lustre_user.h... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: LUSTRE support requested but cannot find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lustre/lustre_user.h header file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c) ompi/mca/io/romio/romio's config.log:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: checking lustre/lustre_user.h usability
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: icc -std=c99 -c -DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fp-model fast=2 -m64 -finline-functions -fno-strict-aliasing -restrict
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -fexceptions -Qoption,cpp,--extended_float_types -pthread
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.c &gt;&amp;5
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/include/sys/quota.h(221): error: identifier &quot;caddr_t&quot; is undefined
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 caddr_t __addr) __THROW;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ^
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: $? = 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: failed program was:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | /* confdefs.h */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_NAME &quot;ROMIO&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_TARNAME &quot;romio&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_VERSION &quot;Open MPI&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_STRING &quot;ROMIO Open MPI&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_BUGREPORT &quot;discuss_at_[hidden]&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE_URL &quot;<a href="http://www.mpich.org/">http://www.mpich.org/</a>&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define PACKAGE &quot;romio&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define VERSION &quot;Open MPI&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define STDC_HEADERS 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_DLFCN_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define LT_OBJDIR &quot;.libs/&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MPI_OFFSET 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MEMALIGN 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_FCNTL_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MALLOC_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_STDDEF_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define u_char unsigned char
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define u_short unsigned short
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define u_int unsigned int
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define u_long unsigned long
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define SIZEOF_INT 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define INT_LT_POINTER 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_INT_LT_POINTER 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_LONG_LONG_64 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MPI_LONG_LONG_INT 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define HAVE_MPI_INFO 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ROMIO_NFS 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ROMIO_UFS 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #define ROMIO_TESTFS 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | /* end confdefs.h.  */
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef STDC_HEADERS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #else
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;string.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_STRINGS_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_STDINT_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;stdint.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #endif
</span><br>
<span class="quotelev3">&gt;&gt;&gt; | #include &lt;lustre/lustre_user.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: result: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: checking lustre/lustre_user.h presence
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: icc -std=c99 -E
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; conftest.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: $? = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: result: yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: WARNING: lustre/lustre_user.h: present but cannot be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiled
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: WARNING: lustre/lustre_user.h:     check for missing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; prerequisite headers?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: WARNING: lustre/lustre_user.h: see the Autoconf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; documentation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: WARNING: lustre/lustre_user.h:     section &quot;Present But
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cannot Be Compiled&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: WARNING: lustre/lustre_user.h: proceeding with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compiler's result
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: checking for lustre/lustre_user.h
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20962: result: no
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure:20971: error: LUSTRE support requested but cannot find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lustre/lustre_user.h header file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; discuss mailing list     discuss_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To manage subscription options or unsubscribe:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://lists.mpich.org/mailman/listinfo/discuss">https://lists.mpich.org/mailman/listinfo/discuss</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Rob Latham
</span><br>
<span class="quotelev2">&gt;&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev2">&gt;&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16109.php">http://www.open-mpi.org/community/lists/devel/2014/10/16109.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17059.php">Jeff Squyres (jsquyres): "[OMPI devel] Using the Github ompi-release bot"</a>
<li><strong>Previous message:</strong> <a href="17057.php">Nathan Hjelm: "Re: [OMPI devel] Free list warning"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16267.php">Ralph Castain: "Re: [OMPI devel] [mpich-discuss] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
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
