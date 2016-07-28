<?
$subject_val = "[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 07:00:19 2014" -->
<!-- isoreceived="20141028110019" -->
<!-- sent="Tue, 28 Oct 2014 12:00:15 +0100" -->
<!-- isosent="20141028110015" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3" -->
<!-- id="a3f35c08-55ee-45fc-a4e2-07e2703733c4_at_HUB2.rwth-ad.de" -->
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
<strong>Subject:</strong> [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-28 07:00:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Previous message:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI and ROMIO developer,
<br>
<p>We use Open MPI v.1.6.x and 1.8.x in our cluster.
<br>
We have Lustre file system; we wish to use MPI_IO.
<br>
So the OpenMPI's are compiled with this flag:
<br>
<span class="quotelev1"> &gt; --with-io-romio-flags='--with-file-system=testfs+ufs+nfs+lustre'
</span><br>
<p>In our newest installation openmpi/1.8.3 we found that MPI_IO is *broken*.
<br>
<p>Short seek for root of the evil bring the following to light:
<br>
<p>- the ROMIO component 'MCA io: romio' isn't here at all in the affected version, 
<br>
because
<br>
<p>- configure of ROMIO has *failed* (cf. logs (a,b,c).
<br>
- because lustre_user.h was found but could not be compiled.
<br>
<p><p>In our system, there are two lustre_user.h available:
<br>
$ locate lustre_user.h
<br>
/usr/include/linux/lustre_user.h
<br>
/usr/include/lustre/lustre_user.h
<br>
As I'm not very convinient with lustre, I just attach both of them.
<br>
<p>pk224850_at_cluster:~[509]$ uname -a
<br>
Linux cluster.rz.RWTH-Aachen.DE 2.6.32-431.29.2.el6.x86_64 #1 SMP Tue Sep 9 
<br>
13:45:55 CDT 2014 x86_64 x86_64 x86_64 GNU/Linux
<br>
<p>pk224850_at_cluster:~[510]$ cat /etc/issue
<br>
Scientific Linux release 6.5 (Carbon)
<br>
<p>Note that openmpi/1.8.1 seem to be fully OK (MPI_IO works) in our environment.
<br>
<p>Best
<br>
<p>Paul Kapinos
<br>
<p>P.S. Is there a confugure flag, which will enforce ROMIO? That is when ROMIO not 
<br>
available, configure would fail. This would make such hidden errors publique at 
<br>
installation time..
<br>
<p><p><p><p><p><p>a) Log in Open MPI's config.log:
<br>
------------------------------------------------------------------------------
<br>
configure:226781: OMPI configuring in ompi/mca/io/romio/romio
<br>
configure:226866: running /bin/sh './configure' 
<br>
--with-file-system=testfs+ufs+nfs+lustre  FROM_OMPI=yes CC=&quot;icc -std=c99&quot; 
<br>
CFLAGS=&quot;-DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2 -m64 
<br>
-finline-functions -fno-strict-aliasing -restrict -fexceptions 
<br>
-Qoption,cpp,--extended_float_types -pthread&quot; CPPFLAGS=&quot; 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include&quot; 
<br>
FFLAGS=&quot;-O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64  &quot; LDFLAGS=&quot;-O3 -ip 
<br>
-axAVX,SSE4.2,SSE4.1 -fp-model fast=2   -m64   -fexceptions &quot; --enable-shared 
<br>
--disable-static --with-file-system=testfs+ufs+nfs+lustre 
<br>
--prefix=/opt/MPI/openmpi-1.8.3/linux/intel --disable-aio --cache-file=/dev/null 
<br>
--srcdir=. --disable-option-checking
<br>
configure:226876: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
<br>
configure:226911: WARNING: ROMIO distribution did not configure successfully
<br>
configure:227425: checking if MCA component io:romio can compile
<br>
configure:227427: result: no
<br>
------------------------------------------------------------------------------
<br>
<p><p><p>b) dump of Open MPI's 'configure' output to the console:
<br>
------------------------------------------------------------------------------
<br>
checking lustre/lustre_user.h usability... no
<br>
checking lustre/lustre_user.h presence... yes
<br>
configure: WARNING: lustre/lustre_user.h: present but cannot be compiled
<br>
configure: WARNING: lustre/lustre_user.h:     check for missing prerequisite 
<br>
headers?
<br>
configure: WARNING: lustre/lustre_user.h: see the Autoconf documentation
<br>
configure: WARNING: lustre/lustre_user.h:     section &quot;Present But Cannot Be 
<br>
Compiled&quot;
<br>
configure: WARNING: lustre/lustre_user.h: proceeding with the compiler's result
<br>
configure: WARNING:     ## -------------------------------- ##
<br>
configure: WARNING:     ## Report this to discuss_at_[hidden] ##
<br>
configure: WARNING:     ## -------------------------------- ##
<br>
checking for lustre/lustre_user.h... no
<br>
configure: error: LUSTRE support requested but cannot find lustre/lustre_user.h 
<br>
header file
<br>
configure: /bin/sh './configure' *failed* for ompi/mca/io/romio/romio
<br>
configure: WARNING: ROMIO distribution did not configure successfully
<br>
checking if MCA component io:romio can compile... no
<br>
------------------------------------------------------------------------------
<br>
<p>c) ompi/mca/io/romio/romio's config.log:
<br>
------------------------------------------------------------------------------
<br>
configure:20962: checking lustre/lustre_user.h usability
<br>
configure:20962: icc -std=c99 -c -DNDEBUG -O3 -ip -axAVX,SSE4.2,SSE4.1 -fp-model 
<br>
fast=2 -m64 -finline-functions -fno-strict-aliasing -restrict -fexceptions 
<br>
-Qoption,cpp,--extended_float_types -pthread 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include 
<br>
conftest.c &gt;&amp;5
<br>
/usr/include/sys/quota.h(221): error: identifier &quot;caddr_t&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;caddr_t __addr) __THROW;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for conftest.c (code 2)
<br>
configure:20962: $? = 2
<br>
configure: failed program was:
<br>
| /* confdefs.h */
<br>
| #define PACKAGE_NAME &quot;ROMIO&quot;
<br>
| #define PACKAGE_TARNAME &quot;romio&quot;
<br>
| #define PACKAGE_VERSION &quot;Open MPI&quot;
<br>
| #define PACKAGE_STRING &quot;ROMIO Open MPI&quot;
<br>
| #define PACKAGE_BUGREPORT &quot;discuss_at_[hidden]&quot;
<br>
| #define PACKAGE_URL &quot;<a href="http://www.mpich.org/">http://www.mpich.org/</a>&quot;
<br>
| #define PACKAGE &quot;romio&quot;
<br>
| #define VERSION &quot;Open MPI&quot;
<br>
| #define STDC_HEADERS 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define HAVE_SYS_STAT_H 1
<br>
| #define HAVE_STDLIB_H 1
<br>
| #define HAVE_STRING_H 1
<br>
| #define HAVE_MEMORY_H 1
<br>
| #define HAVE_STRINGS_H 1
<br>
| #define HAVE_INTTYPES_H 1
<br>
| #define HAVE_STDINT_H 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_DLFCN_H 1
<br>
| #define LT_OBJDIR &quot;.libs/&quot;
<br>
| #define HAVE_MPI_OFFSET 1
<br>
| #define HAVE_MEMALIGN 1
<br>
| #define HAVE_UNISTD_H 1
<br>
| #define HAVE_FCNTL_H 1
<br>
| #define HAVE_MALLOC_H 1
<br>
| #define HAVE_STDDEF_H 1
<br>
| #define HAVE_SYS_TYPES_H 1
<br>
| #define u_char unsigned char
<br>
| #define u_short unsigned short
<br>
| #define u_int unsigned int
<br>
| #define u_long unsigned long
<br>
| #define SIZEOF_INT 4
<br>
| #define SIZEOF_VOID_P 8
<br>
| #define INT_LT_POINTER 1
<br>
| #define HAVE_INT_LT_POINTER 1
<br>
| #define SIZEOF_LONG_LONG 8
<br>
| #define HAVE_LONG_LONG_64 1
<br>
| #define HAVE_MPI_LONG_LONG_INT 1
<br>
| #define HAVE_MPI_INFO 1
<br>
| #define ROMIO_NFS 1
<br>
| #define ROMIO_UFS 1
<br>
| #define ROMIO_TESTFS 1
<br>
| /* end confdefs.h.  */
<br>
| #include &lt;stdio.h&gt;
<br>
| #ifdef HAVE_SYS_TYPES_H
<br>
| # include &lt;sys/types.h&gt;
<br>
| #endif
<br>
| #ifdef HAVE_SYS_STAT_H
<br>
| # include &lt;sys/stat.h&gt;
<br>
| #endif
<br>
| #ifdef STDC_HEADERS
<br>
| # include &lt;stdlib.h&gt;
<br>
| # include &lt;stddef.h&gt;
<br>
| #else
<br>
| # ifdef HAVE_STDLIB_H
<br>
| #  include &lt;stdlib.h&gt;
<br>
| # endif
<br>
| #endif
<br>
| #ifdef HAVE_STRING_H
<br>
| # if !defined STDC_HEADERS &amp;&amp; defined HAVE_MEMORY_H
<br>
| #  include &lt;memory.h&gt;
<br>
| # endif
<br>
| # include &lt;string.h&gt;
<br>
| #endif
<br>
| #ifdef HAVE_STRINGS_H
<br>
| # include &lt;strings.h&gt;
<br>
| #endif
<br>
| #ifdef HAVE_INTTYPES_H
<br>
| # include &lt;inttypes.h&gt;
<br>
| #endif
<br>
| #ifdef HAVE_STDINT_H
<br>
| # include &lt;stdint.h&gt;
<br>
| #endif
<br>
| #ifdef HAVE_UNISTD_H
<br>
| # include &lt;unistd.h&gt;
<br>
| #endif
<br>
| #include &lt;lustre/lustre_user.h&gt;
<br>
configure:20962: result: no
<br>
configure:20962: checking lustre/lustre_user.h presence
<br>
configure:20962: icc -std=c99 -E 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/hwloc/hwloc172/hwloc/include 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent 
<br>
-I/w0/tmp/pk224850/linuxc2_9713/openmpi-1.8.3_linux64_intel/opal/mca/event/libevent2021/libevent/include 
<br>
conftest.c
<br>
configure:20962: $? = 0
<br>
configure:20962: result: yes
<br>
configure:20962: WARNING: lustre/lustre_user.h: present but cannot be compiled
<br>
configure:20962: WARNING: lustre/lustre_user.h:     check for missing 
<br>
prerequisite headers?
<br>
configure:20962: WARNING: lustre/lustre_user.h: see the Autoconf documentation
<br>
configure:20962: WARNING: lustre/lustre_user.h:     section &quot;Present But Cannot 
<br>
Be Compiled&quot;
<br>
configure:20962: WARNING: lustre/lustre_user.h: proceeding with the compiler's 
<br>
result
<br>
configure:20962: checking for lustre/lustre_user.h
<br>
configure:20962: result: no
<br>
configure:20971: error: LUSTRE support requested but cannot find 
<br>
lustre/lustre_user.h header file
<br>
------------------------------------------------------------------------------
<br>
<p><p><p><p><pre>
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
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16106/lustre_user.h.tgz">lustre_user.h.tgz</a>
</ul>
<!-- attachment="lustre_user.h.tgz" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16106/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16107.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<li><strong>Previous message:</strong> <a href="16105.php">Ralph Castain: "Re: [OMPI devel] fixing a bug in 1.8 that's not in master"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="16127.php">Howard Pritchard: "Re: [OMPI devel] ROMIO+Lustre problems in OpenMPI 1.8.3"</a>
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
