<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug  2 08:24:40 2007" -->
<!-- isoreceived="20070802122440" -->
<!-- sent="Thu, 02 Aug 2007 14:13:22 +0200" -->
<!-- isosent="20070802121322" -->
<!-- name="Bettina Krammer" -->
<!-- email="krammer_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="46B1CA62.7060004_at_hlrs.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070802023130.GA11341_at_master.debian.org" -->
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
<strong>From:</strong> Bettina Krammer (<em>krammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-02 08:13:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>Previous message:</strong> <a href="2067.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2065.php">Dirk Eddelbuettel: "[OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
my send finger was too fast, I wanted to add that according to the MPI 
<br>
standard, MPI_Comm_rank is defined as
<br>
int MPI_Comm_rank ( MPI_Comm comm, int *rank )
<br>
therefore I wouldn't recommend to use anything else than an int for rank...
<br>
<p>regards, Bettina
<br>
<p><p>Dirk Eddelbuettel schrieb:
<br>
<p><span class="quotelev1">&gt;Dear Open MPI developers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;We (as in the Debian maintainer for Open MPI) got this bug report from
</span><br>
<span class="quotelev1">&gt;Uwe who sees mpi apps segfault on Debian systems with the FreeBSD
</span><br>
<span class="quotelev1">&gt;kernel.  Is there anybody here familiar with any BSD peculiarties that
</span><br>
<span class="quotelev1">&gt;may play a role?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Any input would be greatly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
Hi Dirk
<br>
<p>have you tried using an int instead of unsigned int for rank?
<br>
<p>regards, Bettina
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Dirk
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Betreff:
</span><br>
<span class="quotelev1">&gt; [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian 
</span><br>
<span class="quotelev1">&gt; GNU/kFreeBSD
</span><br>
<span class="quotelev1">&gt; Von:
</span><br>
<span class="quotelev1">&gt; Uwe Hermann &lt;uwe_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Datum:
</span><br>
<span class="quotelev1">&gt; Wed, 1 Aug 2007 21:15:17 +0200
</span><br>
<span class="quotelev1">&gt; An:
</span><br>
<span class="quotelev1">&gt; Debian Bug Tracking System &lt;submit_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Package: openmpi-bin
</span><br>
<span class="quotelev1">&gt;Version: 1.2.3-1
</span><br>
<span class="quotelev1">&gt;Severity: important
</span><br>
<span class="quotelev1">&gt;Tags: patch
</span><br>
<span class="quotelev1">&gt;User: glibc-bsd-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;Usertags: kfreebsd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;openmpi segfaults on kFreeBSD, I'm not sure where the problem lies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;My openmpi is built from source on i386 kFreeBSD using the patch from
</span><br>
<span class="quotelev1">&gt;<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435573">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435573</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;$ cat a.c
</span><br>
<span class="quotelev1">&gt;#include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;#include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;{
</span><br>
<span class="quotelev1">&gt;        unsigned int rank;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;        MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Hello world, I'm process %d\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;        MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;}
</span><br>
<span class="quotelev1">&gt;$ mpicc a.c
</span><br>
<span class="quotelev1">&gt;$ mpirun -np 1 ./a.out 
</span><br>
<span class="quotelev1">&gt;[debian:10755] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt;[debian:10755] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt;[debian:10755] Signal code:  (1)
</span><br>
<span class="quotelev1">&gt;[debian:10755] Failing at address: (nil)
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 0] /lib/i686/cmov/libpthread.so.0 [0x28170c9c]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 1] [0xbfbfffb4]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 2] /lib/ld.so.1 [0x28060aa0]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 3] /lib/ld.so.1 [0x2805c7ab]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 4] /lib/ld.so.1 [0x280600ee]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 5] /lib/i686/cmov/libdl.so.2 [0x28120b99]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 6] /lib/ld.so.1 [0x2805c7ab]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 7] /lib/i686/cmov/libdl.so.2 [0x2812124c]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 8] /lib/i686/cmov/libdl.so.2(dlopen+0x41) [0x28120ad1]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [ 9] /usr/lib/libopen-pal.so.0 [0x280daaf2]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [10] /usr/lib/libopen-pal.so.0 [0x280d901b]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [11] /usr/lib/libopen-pal.so.0 [0x280d924a]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [12] /usr/lib/libopen-pal.so.0 [0x280d9a79]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [13] /usr/lib/libopen-pal.so.0(lt_dlopenext+0xc6) [0x280d9ed6]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [14] /usr/lib/libopen-pal.so.0 [0x280e09e1]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [15] /usr/lib/libopen-pal.so.0(mca_base_component_find+0x2fb) [0x280e145b]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [16] /usr/lib/libopen-pal.so.0(mca_base_components_open+0x11d) [0x280e1e1d]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [17] /usr/lib/libopen-rte.so.0(orte_gpr_base_open+0x64d) [0x28097b6d]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [18] /usr/lib/libopen-rte.so.0(orte_init_stage1+0x218) [0x28088d28]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [19] /usr/lib/libopen-rte.so.0(orte_system_init+0x1f) [0x2808c2ff]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [20] /usr/lib/libopen-rte.so.0(orte_init+0x70) [0x280889c0]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [21] mpirun(orterun+0x141) [0x804a185]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [22] mpirun(main+0x1e) [0x804a036]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [23] /lib/i686/cmov/libc.so.0.1(__libc_start_main+0xab) [0x2819197b]
</span><br>
<span class="quotelev1">&gt;[debian:10755] [24] mpirun [0x8049fa1]
</span><br>
<span class="quotelev1">&gt;[debian:10755] *** End of error message ***
</span><br>
<span class="quotelev1">&gt;Segmentation fault (core dumped)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Please let me know if/how I can provide more information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks, Uwe.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;Pkg-openmpi-maintainers mailing list
</span><br>
<span class="quotelev1">&gt;Pkg-openmpi-maintainers_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
---------------------------------------------
* NEW PHONE AND FAX-NUMBERS *
---------------------------------------------
Dipl.-Math. Bettina Krammer
High Performance Computing Center (HLRS)
University of Stuttgart
Nobelstrasse 19
D-70569 Stuttgart
Phone: ++49 (0)711-685-65890
Fax: ++49 (0)711-685-65832
email: krammer_at_[hidden]
URL: <a href="http://www.hlrs.de">http://www.hlrs.de</a>
---------------------------------------------
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2069.php">Andreas Knüpfer: "Re: [OMPI devel] vampir trace"</a>
<li><strong>Previous message:</strong> <a href="2067.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2065.php">Dirk Eddelbuettel: "[OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2070.php">Uwe Hermann: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
