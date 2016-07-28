<?
$subject_val = "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 14:47:40 2013" -->
<!-- isoreceived="20130903184740" -->
<!-- sent="Tue, 3 Sep 2013 18:47:38 +0000" -->
<!-- isosent="20130903184738" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F863110_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5224357B.90700_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 14:47:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12843.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12841.php">Rolf vandeVaart: "[OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm.  Are you building Open MPI in a special way?  I ask because I'm unable to replicate the issue -- I've run your test (and a C equivalent) a few hundred times now:
<br>
<p><pre>
----
[jsquyres_at_savbu-usnic-a mpi]$ which gfortran
/usr/bin/gfortran
[jsquyres_at_savbu-usnic-a mpi]$ gfortran --version
GNU Fortran (GCC) 4.4.6 20110731 (Red Hat 4.4.6-3)
Copyright (C) 2010 Free Software Foundation, Inc.
GNU Fortran comes with NO WARRANTY, to the extent permitted by law.
You may redistribute copies of GNU Fortran
under the terms of the GNU General Public License.
For more information about these matters, see the file named COPYING
[jsquyres_at_savbu-usnic-a mpi]$ mpifort gnumyhello_f90.f90 -o gnumyhello_f90
[jsquyres_at_savbu-usnic-a mpi]$ mpicc gnumyhello.c -o gnumyhello
[jsquyres_at_savbu-usnic-a mpi]$ ulimit -v 1048576
[jsquyres_at_savbu-usnic-a mpi]$ ./gnumyhello
Hello, world, I am 0 of 1
Failed to allocate
[jsquyres_at_savbu-usnic-a mpi]$ ./gnumyhello_f90
 Hello, world, I am            0  of            1
 Task            0  failed to allocate    7.9721212387084961      GB
[jsquyres_at_savbu-usnic-a mpi]$
-----
No segvs, no core files, etc.
On Sep 2, 2013, at 2:51 AM, Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
&gt; -----BEGIN PGP SIGNED MESSAGE-----
&gt; Hash: SHA1
&gt; 
&gt; On 02/09/13 16:32, Christopher Samuel wrote:
&gt; 
&gt;&gt; I cannot duplicate this under valgrind or gdb and given that this
&gt;&gt; doesn't happen every time I run it and gdb indicates there are at
&gt;&gt; least 2 threads running then we're wondering if this is a race condition.
&gt; 
&gt; I have also duplicated this problem with 1.7.3a1r29103.
&gt; 
&gt; Hello, world, I am            0  of            1
&gt; [barcoo:03306] *** Process received signal ***
&gt; [barcoo:03306] Signal: Segmentation fault (11)
&gt; [barcoo:03306] Signal code: Address not mapped (1)
&gt; [barcoo:03306] Failing at address: 0x2009b4298
&gt; [barcoo:03306] [ 0] /lib64/libpthread.so.0() [0x3f7b60f500]
&gt; [barcoo:03306] [ 1] /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5(opal_memory_ptmalloc2_int_malloc+0x96a) [0x7f47de6935aa]
&gt; [barcoo:03306] [ 2] /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5(opal_memory_ptmalloc2_malloc+0x52) [0x7f47de694612]
&gt; [barcoo:03306] [ 3] ./1.7-gnumyhello_f90() [0x400dca]
&gt; [barcoo:03306] [ 4] ./1.7-gnumyhello_f90() [0x40104a]
&gt; [barcoo:03306] [ 5] /lib64/libc.so.6(__libc_start_main+0xfd) [0x3f7b21ecdd]
&gt; [barcoo:03306] [ 6] ./1.7-gnumyhello_f90() [0x400bc9]
&gt; [barcoo:03306] *** End of error message ***
&gt; 
&gt; The backtrace I get from the core file isn't as useful though:
&gt; 
&gt; (gdb) bt full
&gt; #0  0x00007fd9c4c255aa in opal_memory_ptmalloc2_int_malloc () from /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5
&gt; No symbol table info available.
&gt; #1  0x00007fd9c4c26612 in opal_memory_ptmalloc2_malloc () from /usr/local/openmpi/1.7.3a1r29103/lib/libopen-pal.so.5
&gt; No symbol table info available.
&gt; #2  0x0000000000400dca in main () at gnumyhello_f90.f90:26
&gt;        ierr = 0
&gt;        rank = 0
&gt;        size = 1
&gt;        work = &lt;object is not allocated&gt;
&gt; #3  0x000000000040104a in main ()
&gt; No symbol table info available.
&gt; 
&gt; OMPI 1.7 is built with exactly the same configure options as 1.6
&gt; and the executable is built with -g -O0.
&gt; 
&gt; cheers,
&gt; Chris
&gt; - -- 
&gt; Christopher Samuel        Senior Systems Administrator
&gt; VLSCI - Victorian Life Sciences Computation Initiative
&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
&gt; <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
&gt; 
&gt; -----BEGIN PGP SIGNATURE-----
&gt; Version: GnuPG v1.4.11 (GNU/Linux)
&gt; Comment: Using GnuPG with Thunderbird - <a href="http://www.enigmail.net/">http://www.enigmail.net/</a>
&gt; 
&gt; iEYEARECAAYFAlIkNXsACgkQO2KABBYQAh9fhQCdHUrlsl3ftY8VyDNRa8E8jKBx
&gt; BZkAnjJJIXgUzRV8T+VBmrS0MQjXS8zO
&gt; =B7GU
&gt; -----END PGP SIGNATURE-----
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12843.php">Ralph Castain: "Re: [OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>Previous message:</strong> <a href="12841.php">Rolf vandeVaart: "[OMPI devel] openib BTL problems with ORTE async changes"</a>
<li><strong>In reply to:</strong> <a href="12835.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
<li><strong>Reply:</strong> <a href="12857.php">Christopher Samuel: "Re: [OMPI devel] Possible OMPI 1.6.5 bug?  SEGV in malloc.c"</a>
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
