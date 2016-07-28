<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 25 09:33:43 2007" -->
<!-- isoreceived="20071025133343" -->
<!-- sent="Thu, 25 Oct 2007 08:33:28 -0500" -->
<!-- isosent="20071025133328" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot suppress openib error message" -->
<!-- id="18208.39720.260319.245294_at_ron.nulle.part" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5007A9F8-1406-44D4-95DE-0CA7EB64CBB9_at_cisco.com" -->
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
<strong>Date:</strong> 2007-10-25 09:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<li><strong>Previous message:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 25 October 2007 at 07:54, Jeff Squyres wrote:
<br>
| We will not dlopen libibverbs.so directly -- we will only dlopen the  
<br>
| mca_btl_openib.so file.  The dynamic linker will automatically open  
<br>
| all of its dependencies.  If those dependencies cannot be found /  
<br>
| symbols cannot be resolved, the dynamic linker will fail the dlopen  
<br>
| of libibverbs.
<br>
| 
<br>
| Can you run &quot;ldd mca_btl_openib.so&quot; on your head node and your  
<br>
| compute nodes?  See if there's a difference in the output.  I think  
<br>
| this is the next step in this troubleshooting process...
<br>
<p>Sure, good idea.
<br>
<p>head and build machine:
<br>
<p>$ ldd /usr/lib/openmpi/mca_btl_openib.so
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xffffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib/libibverbs.so.1 (0xb7f42000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/libpthread.so.0 (0xb7f2b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0xb7ea6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0xb7e52000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0xb7dfb000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/libdl.so.2 (0xb7df7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/libnsl.so.1 (0xb7de1000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/libutil.so.1 (0xb7ddd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/libm.so.6 (0xb7db7000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/libc.so.6 (0xb7c8a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x80000000)
<br>
<p>compute node:
<br>
$ ldd /usr/lib/openmpi/mca_btl_openib.so
<br>
/usr/lib/openmpi/mca_btl_openib.so: /usr/lib/libibverbs.so.1: version `IBVERBS_1.1' not found (required by /usr/lib/openmpi/mca_btl_openib.so)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-gate.so.1 =&gt;  (0xffffe000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libibverbs.so.1 =&gt; /usr/lib/libibverbs.so.1 (0xb7ee6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib/tls/i686/cmov/libpthread.so.0 (0xb7ecf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /usr/lib/libmpi.so.0 (0xb7e4a000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /usr/lib/libopen-rte.so.0 (0xb7df6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /usr/lib/libopen-pal.so.0 (0xb7d9f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib/tls/i686/cmov/libdl.so.2 (0xb7d9b000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib/tls/i686/cmov/libnsl.so.1 (0xb7d84000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib/tls/i686/cmov/libutil.so.1 (0xb7d80000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib/tls/i686/cmov/libm.so.6 (0xb7d58000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib/tls/i686/cmov/libc.so.6 (0xb7c17000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsysfs.so.2 =&gt; /lib/libsysfs.so.2 (0xb7c0c000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib/ld-linux.so.2 (0x80000000)
<br>
<p>Bingo!!  And I am being found with my package install being inconsistent. Tst tst.
<br>
I *think* this may be due to the fact that at one point before &quot;we&quot; (as in
<br>
the few folks looking after the .deb for Open MPI) had learned about the 'btl
<br>
^openib' option and I had become so disenchanted with the 'noisy' message
<br>
that I hacked libibverbs.  That may explain the head-node.  Let me get that
<br>
one back to the pristine Ubuntu / Debian package, and then to possibly
<br>
rebuild the Open MPI package there to correct depends going.
<br>
<p>Thanks so much for your help and patience on this.
<br>
<p>Dirk
<br>
<p><pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
<li><strong>Previous message:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<li><strong>In reply to:</strong> <a href="4322.php">Jeff Squyres: "Re: [OMPI users] Cannot suppress openib error message"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4324.php">Dirk Eddelbuettel: "[OMPI users] Solved! (Was:  Cannot suppress openib error message)"</a>
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
