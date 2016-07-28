<?
$subject_val = "[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  8 21:59:26 2014" -->
<!-- isoreceived="20140109025926" -->
<!-- sent="Wed, 8 Jan 2014 18:59:24 -0800" -->
<!-- isosent="20140109025924" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86" -->
<!-- id="CAAvDA16N1PQSO9202_8FzLMa40HacAv=iZkNgwYMrm3R9wqd4A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-08 21:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am still testing the current 1.7.4rc tarball on my various systems.  The
<br>
latest failure (shown below) is a SEGV somewhere below MPI_Init on a old,
<br>
but otherwise fairly normal, Linux/x86 (32-bit) system.
<br>
<p>$ /home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/bin/mpirun -np
<br>
1 examples/ring_c
<br>
[pcp-j-6:29031] *** Process received signal ***
<br>
[pcp-j-6:29031] Signal: Segmentation fault (11)
<br>
[pcp-j-6:29031] Signal code: Address not mapped (1)
<br>
[pcp-j-6:29031] Failing at address: 0x6c6c6f63
<br>
[pcp-j-6:29031] [ 0] [0xbe4440]
<br>
[pcp-j-6:29031] [ 1]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
<br>
[0x2b11ed]
<br>
[pcp-j-6:29031] [ 2]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
<br>
[0x440909]
<br>
[pcp-j-6:29031] [ 3]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
<br>
[0x2b2cce]
<br>
[pcp-j-6:29031] [ 4]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
<br>
[0x2b32a5]
<br>
[pcp-j-6:29031] [ 5]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_open+0x4e)
<br>
[0x2b333e]
<br>
[pcp-j-6:29031] [ 6]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_mpi_init+0x53d)
<br>
[0xaf359d]
<br>
[pcp-j-6:29031] [ 7]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(MPI_Init+0x13d)
<br>
[0xb10d6d]
<br>
[pcp-j-6:29031] [ 8] examples/ring_c [0x80486e9]
<br>
[pcp-j-6:29031] [ 9] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
<br>
[pcp-j-6:29031] [10] examples/ring_c [0x8048631]
<br>
[pcp-j-6:29031] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 29031 on node pcp-j-6 exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>The failure shown is for a singleton run, but np=2 fails as well.
<br>
<p>System info:
<br>
$ uname -a
<br>
Linux pcp-j-6 2.6.18-238.1.1.el5PAE #1 SMP Tue Jan 18 19:28:42 EST 2011
<br>
i686 athlon i386 GNU/Linux
<br>
$ gcc --version
<br>
gcc (GCC) 4.0.0
<br>
Copyright (C) 2005 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p>The only configure argument used was --prefix.
<br>
<p>I was going to attach output from &quot;ompi_info --all&quot;, but it SEGV's too!
<br>
<p>$ ompi_info --all
<br>
[pcp-j-6:29092] *** Process received signal ***
<br>
[pcp-j-6:29092] Signal: Segmentation fault (11)
<br>
[pcp-j-6:29092] Signal code: Address not mapped (1)
<br>
[pcp-j-6:29092] Failing at address: 0x6c6c6f63
<br>
[pcp-j-6:29092] [ 0] [0xd8a440]
<br>
[pcp-j-6:29092] [ 1]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_var_enum_create+0x15d)
<br>
[0x2db1ed]
<br>
[pcp-j-6:29092] [ 2]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/openmpi/mca_coll_ml.so(mca_coll_ml_register_params+0x639)
<br>
[0x48d909]
<br>
[pcp-j-6:29092] [ 3]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_components_register+0x14e)
<br>
[0x2dccce]
<br>
[pcp-j-6:29092] [ 4]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(mca_base_framework_register+0x1b5)
<br>
[0x2dd2a5]
<br>
[pcp-j-6:29092] [ 5]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libopen-pal.so.6(opal_info_register_project_frameworks+0x57)
<br>
[0x2b83d7]
<br>
[pcp-j-6:29092] [ 6]
<br>
/home/pcp1/phargrov/OMPI/openmpi-1.7-latest-linux-x86/INST/lib/libmpi.so.1(ompi_info_register_framework_params+0x81)
<br>
[0xa69251]
<br>
[pcp-j-6:29092] [ 7] ompi_info(main+0x2ba) [0x8049a2a]
<br>
[pcp-j-6:29092] [ 8] /lib/libc.so.6(__libc_start_main+0xdc) [0x125ebc]
<br>
[pcp-j-6:29092] [ 9] ompi_info [0x80496e1]
<br>
[pcp-j-6:29092] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p>I will try again with a newer gcc and report back.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13600/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13601.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<li><strong>Previous message:</strong> <a href="13599.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30148 - implicit decl of bzero on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
<li><strong>Reply:</strong> <a href="13602.php">Ralph Castain: "Re: [OMPI devel] 1.7.4rc2r30148 - crash in MPI_Init on Linux/x86"</a>
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
