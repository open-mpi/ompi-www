<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 30 17:32:40 2006" -->
<!-- isoreceived="20060830213240" -->
<!-- sent="Wed, 30 Aug 2006 15:32:37 -0600" -->
<!-- isosent="20060830213237" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="[OMPI devel] Stack trace printing" -->
<!-- id="1156973557.26820.46.camel_at_boxtop.lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-30 17:32:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1018.php">Jeff Squyres: "[OMPI devel] Change in snapshot tarball generation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Reply:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all-
<br>
<p>A question about stack tracing.  Currently, we have it setup so that,
<br>
say, a segfault results in:
<br>
<p>[0]func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0(opal_backtrace_print+0x2b) [0x2a959166ab]
<br>
[1] func:/u/jjhursey/local/odin/ompi/devel/lib/libopal.so.0 [0x2a959150bb]
<br>
[2] func:/lib64/tls/libpthread.so.0 [0x345cc0c420]
<br>
[3] func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x480) [0x2a95fd6354]
<br>
[4] func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x46) [0x2a957a96a3]
<br>
[5] func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accept+0x1d8) [0x2a955a29dc]
<br>
[6] func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x110) [0x2a955a49e0]
<br>
<p>This seems to result in confusion from some users (not josh, I was just
<br>
reading his latest bug when I thought of this) that the error must be in
<br>
OMPI because that's where it segfaulted.  It would be fairly trivial (at
<br>
least, on Linux and OS X) to not print the last 3 lines such that the
<br>
error looked like:
<br>
<p>[0] func:/san/homedirs/jjhursey/local/odin//ompi/devel/lib/openmpi/mca_oob_tcp.so(mca_oob_tcp_recv+0x480) [0x2a95fd6354]
<br>
[1] func:/u/jjhursey/local/odin/ompi/devel/lib/liborte.so.0(mca_oob_recv_packed+0x46) [0x2a957a96a3]
<br>
[2] func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_connect_accept+0x1d8) [0x2a955a29dc]
<br>
[3] func:/u/jjhursey/local/odin/ompi/devel/lib/libmpi.so.0(ompi_comm_dyn_init+0x110) [0x2a
<br>
<p>Would anyone object to such a change?
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Previous message:</strong> <a href="1018.php">Jeff Squyres: "[OMPI devel] Change in snapshot tarball generation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
<li><strong>Reply:</strong> <a href="1020.php">Jeff Squyres: "Re: [OMPI devel] Stack trace printing"</a>
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
