<?
$subject_val = "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 04:22:15 2010" -->
<!-- isoreceived="20100126092215" -->
<!-- sent="Tue, 26 Jan 2010 10:22:31 +0100" -->
<!-- isosent="20100126092231" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mg.mailing-list_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3" -->
<!-- id="4B5EB457.4090007_at_laposte.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C7F4E09A-2E6D-4F12-8417-63DAEB6FE7F8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3<br>
<strong>From:</strong> Mathieu Gontier (<em>mg.mailing-list_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-26 04:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=us-ascii" http-equiv="Content-Type">
</head>
<body bgcolor="#ffffff" text="#000000">
Hello, <br>
<br>
1/ I rebuilt without --enable-dist (more secured indeed) and with
explicit --without-openib/--with-openib : behaviors are better. Great.<br>
2/ Yes, my PATH and LD_LIBRARY_PATH are correctly set<br>
3/ There certainly were previous installations of OpenMPI on this
machine, but not in the same directory; before rebuilt, I correctly
uninstall the previous installations (thank you for the tip)<br>
4/ Is there a way to have the list of the plugins in OFED?<br>
5/ Yes, good messages about the device will be welcome, but with 1/ it
is really better now<br>
6/ The message is really more explicit explained like that (thanks)<br>
7/ I built both my small test and OpenMPI-1.4.1 directly on my cluster
with gcc-3.4 and I still have this error. Do you have any idea where
the problem could come from? <br>
<br>
<font face="Courier 10 Pitch"><small><small>==== begin
===================================================================<br>
/home/numeca/tmp/gontier/bcast/exe_ompi_cluster<br>
/home/numeca/tmp/gontier/openmpi-1.4.1/LINUX_GCC_3_4_openib_cluster<br>
--mca btl&nbsp;&nbsp;&nbsp; tcp,sm,self<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libmpi.so.0 =&gt;
/home/numeca/tmp/gontier/openmpi-1.4.1/LINUX_GCC_3_4_openib_cluster/lib/libmpi.so.0
(0x00002b1e280f8000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libopen-rte.so.0 =&gt;
/home/numeca/tmp/gontier/openmpi-1.4.1/LINUX_GCC_3_4_openib_cluster/lib/libopen-rte.so.0
(0x00002b1e28429000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libopen-pal.so.0 =&gt;
/home/numeca/tmp/gontier/openmpi-1.4.1/LINUX_GCC_3_4_openib_cluster/lib/libopen-pal.so.0
(0x00002b1e285ae000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libibverbs.so.1 =&gt;
/cvos/shared/apps/ofed/1.2.5/lib64/libibverbs.so.1 (0x00002b1e28728000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x000000357de00000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00002b1e2883b000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x000000357e800000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000357ec00000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libm.so.6 =&gt; /lib64/tls/libm.so.6 (0x000000357e000000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libpthread.so.0 =&gt; /lib64/tls/libpthread.so.0
(0x000000357f200000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; libc.so.6 =&gt; /lib64/tls/libc.so.6 (0x000000357db00000)<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; /lib64/ld-linux-x86-64.so.2 (0x000000357d900000)<br>
==============================================================================<br>
mpirun -np 12 -hostfile /tmp/72962.1.64.q/machines --mca btl&nbsp;&nbsp;&nbsp;
tcp,sm,self /home/numeca/tmp/gontier/bcast/exe_ompi_cluster -nloop 2
-nbuff 100<br>
--------------------------------------------------------------------------<br>
It looks like opal_init failed for some reason; your parallel process is<br>
likely to abort.&nbsp; There are many reasons that a parallel process can<br>
fail during opal_init; some of which are due to configuration or<br>
environment problems.&nbsp; This failure appears to be an internal failure;<br>
here's some additional information (which may only be relevant to an<br>
Open MPI developer):<br>
<br>
&nbsp; opal_memchecker_base_select failed<br>
&nbsp; --&gt; Returned value -13 instead of OPAL_SUCCESS<br>
--------------------------------------------------------------------------<br>
[node015:12413] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
/develop/libs/OpenMPI/_compile/openmpi-1.4.1/orte/runtime/orte_init.c
at line 77<br>
[node015:12413] [[INVALID],INVALID] ORTE_ERROR_LOG: Not found in file
/develop/libs/OpenMPI/_compile/openmpi-1.4.1/orte/tools/orterun/orterun.c
at line 541<br>
==== end
======================================================================<br>
<br>
</small></small></font><br>
Many thank Jeff: the previous answers were really useful. <br>
<br>
Jeff Squyres wrote:
<blockquote cite="mid:C7F4E09A-2E6D-4F12-8417-63DAEB6FE7F8@cisco.com"
 type="cite">
  <pre wrap="">On Jan 25, 2010, at 11:58 AM, Mathieu Gontier wrote:

  </pre>
  <blockquote type="cite">
    <pre wrap="">I built OpenMPI-1.4.1 without openib support with the following configuration options:

./configure --prefix=/develop/libs/OpenMPI/openmpi-1.4.1/LINUX_GCC_4_1_tcp_mach --enable-static --enable-shared --enable-cxx-exceptions --enable-mpi-f77 --disable-mpi-f90 --enable-mpi-cxx --disable-mpi-cxx-seek --enable-dist --enable-mpi-profile --enable-binaries --enable-mpi-threads --enable-memchecker --disable-debug --with-pic --with-threads   --with-sge
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Note that you should not use --enable-dist.  --enable-dist is used by the OMPI maintainers ONLY when generating official downloadable tarballs.  It is *NOT* guaranteed to make sane / correct builds for general purpose runs.  Here's what ./configure --help says about --enable-dist:

  --enable-dist           guarantee that that the "dist" make target will be
                          functional, although may not guarantee that any
                          other make target will be functional.

Specifically: --enable-dist allows some configure tests to "pass" even though they shouldn't.  For example, I don't have MX installed on my systems.  But with --enable-dist, the MX tests in OMPI's configure script will "pass" just enough so that I can "make dist" to generate a tarball and still include all the MX plugin source code.  

  </pre>
  <blockquote type="cite">
    <pre wrap="">On my cluster, I run a small test (a broadcast on a 100 integer array) on 12 processes balanced on 3 nodes, but I asked for using openib. It works with the following messages:

mpirun -np 12 -hostfile /tmp/72936.1.64.q/machines --mca btl openib,sm,self /home/numeca/tmp/gontier/bcast/exe_ompi_cluster -nloop 2 -nbuff 100
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Is your PATH and LD_LIBRARY_PATH set correctly such that you'll find the "right" ones (i.e., the ones that you just built/installed in /develop/libs/OpenMPI/openmpi-1.4.1/LINUX_GCC_4_1_tcp_mach)?  I.e., is it possible that you're finding some other OMPI install that has OpenFabrics support?

Further, did you ever previously install Open MPI into that prefix and include OpenFabrics support?  I ask because OMPI's OpenFabrics support is in the form of a plugin -- if you simply installed another copy of OMPI into the same prefix without uninstalling first, the OpenFabrics plugin could still have been left in the tree, and therefore used at run time.

Finally, note that you didn't tell Open MPI to *NOT* build OpenFabrics support.  In this case, OMPI's configure script looks for OpenFabrics support, and if it finds it, builds it.  But if it doesn't find OpenFabrics support (and you didn't specifically ask for it), it just skips it and keeps going.  You might want to look through the output of OMPI's configure and see if it found OpenFabrics support and therefore decided to build it.

  </pre>
  <blockquote type="cite">
    <pre wrap="">I finally run ompi_info:

./ompi_info | grep openib
                 MCA btl: openib (MCA v2.0, API v2.0, Component v1.4.1)

Openib seems to be supported. That is weird because I did not ask for...
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Yep; see above.

  </pre>
  <blockquote type="cite">
    <pre wrap="">So, assuming the compilation of OpenMPI which does not support openib here, what happened? Was tcp selected? How can I check which device has been used (or force an explicit message)?
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Unfortunately, OMPI currently lacks a good message indicating which device is used at run-time (because it's actually a surprisingly complex issue, since OMPI chooses a communication device based on which peer it's talking to, among other reasons).  We hope to have a good message in sometime in the OMPI 1.5 series.

  </pre>
  <blockquote type="cite">
    <pre wrap="">By the way, what is the meaning of this message in my case?
    </pre>
  </blockquote>
  <pre wrap=""><!---->
Do you mean this message?

-----
WARNING: There was an error initializing an OpenFabrics device.

  Local host:   node005
  Local device: mthca0
-----

If so, it means that Open MPI was unable to initialize the InfiniBand HCA known as "mthca0" on the server known as node005.  

The RLIMIT messages are likely symptoms of the issue; you likely need to set your registered memory limits to "unlimited".  See the OMPI FAQ in the OpenFabrics section for questions about registered memory limits for instructions how.

  </pre>
  <blockquote type="cite">
    <pre wrap="">By the way, another different think: does OpenMPI must be compiled with gcc-4.1 or later, or gcc-3.4 (for example) can be used? 
    </pre>
  </blockquote>
  <pre wrap=""><!---->
gcc 3.4 should be fine.

  </pre>
</blockquote>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11888.php">Dave Love: "Re: [OMPI users] ABI stabilization/versioning"</a>
<li><strong>Previous message:</strong> <a href="11886.php">cjohnson_at_[hidden]: "Re: [OMPI users] Windows CMake build problems ..."</a>
<li><strong>In reply to:</strong> <a href="11876.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
<li><strong>Reply:</strong> <a href="11893.php">Jeff Squyres: "Re: [OMPI users] [ompi-1.4.1] compiling without openib, running with openib + ompi141 and gcc3"</a>
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
