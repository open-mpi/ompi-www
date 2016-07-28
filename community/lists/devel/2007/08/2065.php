<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 22:31:35 2007" -->
<!-- isoreceived="20070802023135" -->
<!-- sent="Thu, 2 Aug 2007 02:31:30 +0000" -->
<!-- isosent="20070802023130" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="[OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]" -->
<!-- id="20070802023130.GA11341_at_master.debian.org" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 22:31:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2067.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers,
<br>
<p>We (as in the Debian maintainer for Open MPI) got this bug report from
<br>
Uwe who sees mpi apps segfault on Debian systems with the FreeBSD
<br>
kernel.  Is there anybody here familiar with any BSD peculiarties that
<br>
may play a role?
<br>
<p>Any input would be greatly appreciated!
<br>
<p>Dirk
<br>
<p><p><pre>
-- 
Three out of two people have difficulties with fractions.

</pre>
<p><strong>attached mail follows:</strong><hr>


<p>
Package: openmpi-bin
<br>
Version: 1.2.3-1
<br>
Severity: important
<br>
Tags: patch
<br>
User: glibc-bsd-devel_at_[hidden]
<br>
Usertags: kfreebsd
<br>
<p>Hi,
<br>
<p>openmpi segfaults on kFreeBSD, I'm not sure where the problem lies.
<br>
<p>My openmpi is built from source on i386 kFreeBSD using the patch from
<br>
<a href="http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435573">http://bugs.debian.org/cgi-bin/bugreport.cgi?bug=435573</a>
<br>
<p>$ cat a.c
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned int rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world, I'm process %d\n&quot;, rank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
$ mpicc a.c
<br>
$ mpirun -np 1 ./a.out 
<br>
[debian:10755] *** Process received signal ***
<br>
[debian:10755] Signal: Segmentation fault (11)
<br>
[debian:10755] Signal code:  (1)
<br>
[debian:10755] Failing at address: (nil)
<br>
[debian:10755] [ 0] /lib/i686/cmov/libpthread.so.0 [0x28170c9c]
<br>
[debian:10755] [ 1] [0xbfbfffb4]
<br>
[debian:10755] [ 2] /lib/ld.so.1 [0x28060aa0]
<br>
[debian:10755] [ 3] /lib/ld.so.1 [0x2805c7ab]
<br>
[debian:10755] [ 4] /lib/ld.so.1 [0x280600ee]
<br>
[debian:10755] [ 5] /lib/i686/cmov/libdl.so.2 [0x28120b99]
<br>
[debian:10755] [ 6] /lib/ld.so.1 [0x2805c7ab]
<br>
[debian:10755] [ 7] /lib/i686/cmov/libdl.so.2 [0x2812124c]
<br>
[debian:10755] [ 8] /lib/i686/cmov/libdl.so.2(dlopen+0x41) [0x28120ad1]
<br>
[debian:10755] [ 9] /usr/lib/libopen-pal.so.0 [0x280daaf2]
<br>
[debian:10755] [10] /usr/lib/libopen-pal.so.0 [0x280d901b]
<br>
[debian:10755] [11] /usr/lib/libopen-pal.so.0 [0x280d924a]
<br>
[debian:10755] [12] /usr/lib/libopen-pal.so.0 [0x280d9a79]
<br>
[debian:10755] [13] /usr/lib/libopen-pal.so.0(lt_dlopenext+0xc6) [0x280d9ed6]
<br>
[debian:10755] [14] /usr/lib/libopen-pal.so.0 [0x280e09e1]
<br>
[debian:10755] [15] /usr/lib/libopen-pal.so.0(mca_base_component_find+0x2fb) [0x280e145b]
<br>
[debian:10755] [16] /usr/lib/libopen-pal.so.0(mca_base_components_open+0x11d) [0x280e1e1d]
<br>
[debian:10755] [17] /usr/lib/libopen-rte.so.0(orte_gpr_base_open+0x64d) [0x28097b6d]
<br>
[debian:10755] [18] /usr/lib/libopen-rte.so.0(orte_init_stage1+0x218) [0x28088d28]
<br>
[debian:10755] [19] /usr/lib/libopen-rte.so.0(orte_system_init+0x1f) [0x2808c2ff]
<br>
[debian:10755] [20] /usr/lib/libopen-rte.so.0(orte_init+0x70) [0x280889c0]
<br>
[debian:10755] [21] mpirun(orterun+0x141) [0x804a185]
<br>
[debian:10755] [22] mpirun(main+0x1e) [0x804a036]
<br>
[debian:10755] [23] /lib/i686/cmov/libc.so.0.1(__libc_start_main+0xab) [0x2819197b]
<br>
[debian:10755] [24] mpirun [0x8049fa1]
<br>
[debian:10755] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><p>Please let me know if/how I can provide more information.
<br>
<p><p>Thanks, Uwe.
<br>
<pre>
-- 
<a href="http://www.hermann-uwe.de">http://www.hermann-uwe.de</a>  | <a href="http://www.holsham-traders.de">http://www.holsham-traders.de</a>
<a href="http://www.crazy-hacks.org">http://www.crazy-hacks.org</a> | <a href="http://www.unmaintained-free-software.org">http://www.unmaintained-free-software.org</a>

</pre>
<p>
<p><p><p>
<br><p>
_______________________________________________
<br>
Pkg-openmpi-maintainers mailing list
<br>
Pkg-openmpi-maintainers_at_[hidden]
<br>
<a href="http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers">http://lists.alioth.debian.org/mailman/listinfo/pkg-openmpi-maintainers</a>
<br>
<p><p><p><p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-2065/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Previous message:</strong> <a href="2064.php">Jeff Squyres: "Re: [OMPI devel] MPI_Win_get_group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2066.php">Adrian Knoth: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers] Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2067.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>Reply:</strong> <a href="2068.php">Bettina Krammer: "Re: [OMPI devel] [uwe@hermann-uwe.de: [Pkg-openmpi-maintainers]	Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
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
