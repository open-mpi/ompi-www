<?
$subject_val = "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 13:36:33 2014" -->
<!-- isoreceived="20141030173633" -->
<!-- sent="Thu, 30 Oct 2014 18:36:26 +0100" -->
<!-- isosent="20141030173626" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3" -->
<!-- id="ba548d58-00fa-4c81-b3e6-c0e023a750b1_at_HUB1.rwth-ad.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAF1Cqj5R5KotjjLcwEpHN9O0dyJtk8qwPuABDCsq4qCZVbdfCQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 13:36:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(2nd try as the first log package was too big)
<br>
<p>Hello Howard,
<br>
<p>The version 1.8.1 installed on Jun 27 this year run fine, ROMIO is OK.
<br>
<p>Trying ro re-run using the same install script: found out that also 1.8.1 
<br>
version of Open MPI now *cannot* build ROMIO support. Wow.
<br>
<p>That means that the regression is not/not only in the OpenMPI's ROMIO, but 
<br>
depends on our Linux/Kernel/Lustre. Very first look: we've new kernel and new 
<br>
/usr/include/sys/quota.h and we probably update from SL6.4 to SL6.5.
<br>
<p>- which information about our Linux/System do you need?
<br>
- Interest/Need in getting a guest login to get in-deepth feeling?
<br>
<p>Best
<br>
<p>Paul Kapinos
<br>
<p>Attached: some logs from Instalation at 27.05 and today't try, and quota.h 
<br>
(changed at 29.09). Note that also the kernel changed (and maybe the Scientific 
<br>
Linux version from 6.4 to 6.5?)
<br>
<p>pk224850_at_cluster:~[502]$ ls -la /usr/include/sys/quota.h
<br>
-rw-r--r-- 1 root root 7903 Aug 29 21:11 /usr/include/sys/quota.h
<br>
pk224850_at_cluster:~[503]$ uname -a
<br>
Linux cluster.rz.RWTH-Aachen.DE 2.6.32-431.29.2.el6.x86_64 #1 SMP Tue Sep 9 
<br>
13:45:55 CDT 2014 x86_64 x86_64 x86_64 GNU/Linux
<br>
pk224850_at_cluster:~[504]$ cat /etc/issue
<br>
Scientific Linux release 6.5 (Carbon)
<br>
Kernel \r on an \m
<br>
<p><p><p>On 10/29/14 19:06, Howard Pritchard wrote:
<br>
<span class="quotelev1">&gt; Hi Paul,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the forward.  I've opened an issue #255
</span><br>
<span class="quotelev1">&gt; &lt;<a href="https://github.com/open-mpi/ompi/issues/255">https://github.com/open-mpi/ompi/issues/255</a>&gt; to track the ROMIO config regression.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to make sure, older releases of the 1.8 branch still configure and build
</span><br>
<span class="quotelev1">&gt; properly with your
</span><br>
<span class="quotelev1">&gt; current lustre setup?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Howard
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-10-28 5:00 GMT-06:00 Paul Kapinos &lt;kapinos_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:kapinos_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Dear Open MPI and ROMIO developer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     We use Open MPI v.1.6.x and 1.8.x in our cluster.
</span><br>
<span class="quotelev1">&gt;     We have Lustre file system; we wish to use MPI_IO.
</span><br>
<span class="quotelev1">&gt;     So the OpenMPI's are compiled with this flag:
</span><br>
<span class="quotelev2">&gt;      &gt; --with-io-romio-flags='--with-__file-system=testfs+ufs+nfs+__lustre'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In our newest installation openmpi/1.8.3 we found that MPI_IO is *broken*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Short seek for root of the evil bring the following to light:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - the ROMIO component 'MCA io: romio' isn't here at all in the affected
</span><br>
<span class="quotelev1">&gt;     version, because
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     - configure of ROMIO has *failed* (cf. logs (a,b,c).
</span><br>
<span class="quotelev1">&gt;     - because lustre_user.h was found but could not be compiled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In our system, there are two lustre_user.h available:
</span><br>
<span class="quotelev1">&gt;     $ locate lustre_user.h
</span><br>
<span class="quotelev1">&gt;     /usr/include/linux/lustre___user.h
</span><br>
<span class="quotelev1">&gt;     /usr/include/lustre/lustre___user.h
</span><br>
<span class="quotelev1">&gt;     As I'm not very convinient with lustre, I just attach both of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pk224850_at_cluster:~[509]$ uname -a
</span><br>
<span class="quotelev1">&gt;     Linux cluster.rz.RWTH-Aachen.DE &lt;<a href="http://cluster.rz.RWTH-Aachen.DE">http://cluster.rz.RWTH-Aachen.DE</a>&gt;
</span><br>
<span class="quotelev1">&gt;     2.6.32-431.29.2.el6.x86_64 #1 SMP Tue Sep 9 13:45:55 CDT 2014 x86_64 x86_64
</span><br>
<span class="quotelev1">&gt;     x86_64 GNU/Linux
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pk224850_at_cluster:~[510]$ cat /etc/issue
</span><br>
<span class="quotelev1">&gt;     Scientific Linux release 6.5 (Carbon)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Note that openmpi/1.8.1 seem to be fully OK (MPI_IO works) in our environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Paul Kapinos
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     P.S. Is there a confugure flag, which will enforce ROMIO? That is when ROMIO
</span><br>
<span class="quotelev1">&gt;     not available, configure would fail. This would make such hidden errors
</span><br>
<span class="quotelev1">&gt;     publique at installation time..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     a) Log in Open MPI's config.log:
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;     configure:226781: OMPI configuring in ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt;     configure:226866: running /bin/sh './configure'
</span><br>
<span class="quotelev1">&gt;     --with-file-system=testfs+ufs+__nfs+lustre  FROM_OMPI=yes CC=&quot;icc -std=c99&quot;
</span><br>
<span class="quotelev1">&gt;     CFLAGS=&quot;-DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2 -m64
</span><br>
<span class="quotelev1">&gt;     -finline-functions -fno-strict-aliasing -restrict -fexceptions
</span><br>
<span class="quotelev1">&gt;     -Qoption,cpp,--extended_float___types -pthread&quot; CPPFLAGS=&quot;
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/hwloc/hwloc172/__hwloc/include
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent/include&quot;
</span><br>
<span class="quotelev1">&gt;     FFLAGS=&quot;-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64  &quot; LDFLAGS=&quot;-O3
</span><br>
<span class="quotelev1">&gt;     -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   -fexceptions &quot;
</span><br>
<span class="quotelev1">&gt;     --enable-shared --disable-static --with-file-system=testfs+ufs+__nfs+lustre
</span><br>
<span class="quotelev1">&gt;     --prefix=/opt/MPI/openmpi-1.8.__3/linux/intel --disable-aio
</span><br>
<span class="quotelev1">&gt;     --cache-file=/dev/null --srcdir=. --disable-option-checking
</span><br>
<span class="quotelev1">&gt;     configure:226876: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt;     configure:226911: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev1">&gt;     configure:227425: checking if MCA component io:romio can compile
</span><br>
<span class="quotelev1">&gt;     configure:227427: result: no
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     b) dump of Open MPI's 'configure' output to the console:
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;     checking lustre/lustre_user.h usability... no
</span><br>
<span class="quotelev1">&gt;     checking lustre/lustre_user.h presence... yes
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: lustre/lustre_user.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: lustre/lustre_user.h:     check for missing prerequisite
</span><br>
<span class="quotelev1">&gt;     headers?
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: lustre/lustre_user.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: lustre/lustre_user.h:     section &quot;Present But Cannot Be
</span><br>
<span class="quotelev1">&gt;     Compiled&quot;
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: lustre/lustre_user.h: proceeding with the compiler's result
</span><br>
<span class="quotelev1">&gt;     configure: WARNING:     ## ------------------------------__-- ##
</span><br>
<span class="quotelev1">&gt;     configure: WARNING:     ## Report this to discuss_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:discuss_at_[hidden]&gt; ##
</span><br>
<span class="quotelev1">&gt;     configure: WARNING:     ## ------------------------------__-- ##
</span><br>
<span class="quotelev1">&gt;     checking for lustre/lustre_user.h... no
</span><br>
<span class="quotelev1">&gt;     configure: error: LUSTRE support requested but cannot find
</span><br>
<span class="quotelev1">&gt;     lustre/lustre_user.h header file
</span><br>
<span class="quotelev1">&gt;     configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
</span><br>
<span class="quotelev1">&gt;     configure: WARNING: ROMIO distribution did not configure successfully
</span><br>
<span class="quotelev1">&gt;     checking if MCA component io:romio can compile... no
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     c) ompi/mca/io/romio/romio's config.log:
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;     configure:20962: checking lustre/lustre_user.h usability
</span><br>
<span class="quotelev1">&gt;     configure:20962: icc -std=c99 -c -DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1
</span><br>
<span class="quotelev1">&gt;     -fp-model fast=2 -m64 -finline-functions -fno-strict-aliasing -restrict
</span><br>
<span class="quotelev1">&gt;     -fexceptions -Qoption,cpp,--extended_float___types -pthread
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/hwloc/hwloc172/__hwloc/include
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt;     conftest.c &gt;&amp;5
</span><br>
<span class="quotelev1">&gt;     /usr/include/sys/quota.h(221): error: identifier &quot;caddr_t&quot; is undefined
</span><br>
<span class="quotelev1">&gt;                           caddr_t __addr) __THROW;
</span><br>
<span class="quotelev1">&gt;                           ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     compilation aborted for conftest.c (code 2)
</span><br>
<span class="quotelev1">&gt;     configure:20962: $? = 2
</span><br>
<span class="quotelev1">&gt;     configure: failed program was:
</span><br>
<span class="quotelev1">&gt;     | /* confdefs.h */
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_NAME &quot;ROMIO&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_TARNAME &quot;romio&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_VERSION &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_STRING &quot;ROMIO Open MPI&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_BUGREPORT &quot;discuss_at_[hidden] &lt;mailto:discuss_at_[hidden]&gt;&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE_URL &quot;<a href="http://www.mpich.org/">http://www.mpich.org/</a>&quot;
</span><br>
<span class="quotelev1">&gt;     | #define PACKAGE &quot;romio&quot;
</span><br>
<span class="quotelev1">&gt;     | #define VERSION &quot;Open MPI&quot;
</span><br>
<span class="quotelev1">&gt;     | #define STDC_HEADERS 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_SYS_STAT_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_STDLIB_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_STRING_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MEMORY_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_STRINGS_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_INTTYPES_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_STDINT_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_DLFCN_H 1
</span><br>
<span class="quotelev1">&gt;     | #define LT_OBJDIR &quot;.libs/&quot;
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MPI_OFFSET 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MEMALIGN 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_UNISTD_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_FCNTL_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MALLOC_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_STDDEF_H 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_SYS_TYPES_H 1
</span><br>
<span class="quotelev1">&gt;     | #define u_char unsigned char
</span><br>
<span class="quotelev1">&gt;     | #define u_short unsigned short
</span><br>
<span class="quotelev1">&gt;     | #define u_int unsigned int
</span><br>
<span class="quotelev1">&gt;     | #define u_long unsigned long
</span><br>
<span class="quotelev1">&gt;     | #define SIZEOF_INT 4
</span><br>
<span class="quotelev1">&gt;     | #define SIZEOF_VOID_P 8
</span><br>
<span class="quotelev1">&gt;     | #define INT_LT_POINTER 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_INT_LT_POINTER 1
</span><br>
<span class="quotelev1">&gt;     | #define SIZEOF_LONG_LONG 8
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_LONG_LONG_64 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MPI_LONG_LONG_INT 1
</span><br>
<span class="quotelev1">&gt;     | #define HAVE_MPI_INFO 1
</span><br>
<span class="quotelev1">&gt;     | #define ROMIO_NFS 1
</span><br>
<span class="quotelev1">&gt;     | #define ROMIO_UFS 1
</span><br>
<span class="quotelev1">&gt;     | #define ROMIO_TESTFS 1
</span><br>
<span class="quotelev1">&gt;     | /* end confdefs.h.  */
</span><br>
<span class="quotelev1">&gt;     | #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_SYS_STAT_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;sys/stat.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef STDC_HEADERS
</span><br>
<span class="quotelev1">&gt;     | # include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;     | # include &lt;stddef.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #else
</span><br>
<span class="quotelev1">&gt;     | # ifdef HAVE_STDLIB_H
</span><br>
<span class="quotelev1">&gt;     | #  include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;     | # endif
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_STRING_H
</span><br>
<span class="quotelev1">&gt;     | # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
</span><br>
<span class="quotelev1">&gt;     | #  include &lt;memory.h&gt;
</span><br>
<span class="quotelev1">&gt;     | # endif
</span><br>
<span class="quotelev1">&gt;     | # include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_STRINGS_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;strings.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_INTTYPES_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;inttypes.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_STDINT_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;stdint.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #ifdef HAVE_UNISTD_H
</span><br>
<span class="quotelev1">&gt;     | # include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;     | #endif
</span><br>
<span class="quotelev1">&gt;     | #include &lt;lustre/lustre_user.h&gt;
</span><br>
<span class="quotelev1">&gt;     configure:20962: result: no
</span><br>
<span class="quotelev1">&gt;     configure:20962: checking lustre/lustre_user.h presence
</span><br>
<span class="quotelev1">&gt;     configure:20962: icc -std=c99 -E
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/hwloc/hwloc172/__hwloc/include
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent
</span><br>
<span class="quotelev1">&gt;     -I/w0/tmp/pk224850/linuxc2___9713/openmpi-1.8.3_linux64___intel/opal/mca/event/__libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt;     conftest.c
</span><br>
<span class="quotelev1">&gt;     configure:20962: $? = 0
</span><br>
<span class="quotelev1">&gt;     configure:20962: result: yes
</span><br>
<span class="quotelev1">&gt;     configure:20962: WARNING: lustre/lustre_user.h: present but cannot be compiled
</span><br>
<span class="quotelev1">&gt;     configure:20962: WARNING: lustre/lustre_user.h:     check for missing
</span><br>
<span class="quotelev1">&gt;     prerequisite headers?
</span><br>
<span class="quotelev1">&gt;     configure:20962: WARNING: lustre/lustre_user.h: see the Autoconf documentation
</span><br>
<span class="quotelev1">&gt;     configure:20962: WARNING: lustre/lustre_user.h:     section &quot;Present But
</span><br>
<span class="quotelev1">&gt;     Cannot Be Compiled&quot;
</span><br>
<span class="quotelev1">&gt;     configure:20962: WARNING: lustre/lustre_user.h: proceeding with the
</span><br>
<span class="quotelev1">&gt;     compiler's result
</span><br>
<span class="quotelev1">&gt;     configure:20962: checking for lustre/lustre_user.h
</span><br>
<span class="quotelev1">&gt;     configure:20962: result: no
</span><br>
<span class="quotelev1">&gt;     configure:20971: error: LUSTRE support requested but cannot find
</span><br>
<span class="quotelev1">&gt;     lustre/lustre_user.h header file
</span><br>
<span class="quotelev1">&gt;     ------------------------------__------------------------------__------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt;     RWTH Aachen University, IT Center
</span><br>
<span class="quotelev1">&gt;     Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt;     Tel: +49 241/80-24915 &lt;tel:%2B49%20241%2F80-24915&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16106.php">http://www.open-mpi.org/community/lists/devel/2014/10/16106.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/10/16127.php">http://www.open-mpi.org/community/lists/devel/2014/10/16127.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16134/less_moar_logz.tgz">less_moar_logz.tgz</a>
</ul>
<!-- attachment="less_moar_logz.tgz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16134/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>Previous message:</strong> <a href="16133.php">Friedley, Andrew: "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<li><strong>In reply to:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
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
