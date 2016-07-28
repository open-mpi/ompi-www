<?
$subject_val = "[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 09:04:14 2009" -->
<!-- isoreceived="20090123140414" -->
<!-- sent="Fri, 23 Jan 2009 15:04:20 +0100" -->
<!-- isosent="20090123140420" -->
<!-- name="Roy Dragseth" -->
<!-- email="roy.dragseth_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5" -->
<!-- id="200901231504.20477.roy.dragseth_at_uit.no" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5<br>
<strong>From:</strong> Roy Dragseth (<em>roy.dragseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-23 09:04:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7794.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, all.
<br>
<p>I do not know if this is to be considered a real bug or not, I'm just 
<br>
reporting it here so people can find it if they google around for the error 
<br>
message this produces.  There is a backtrace at the end of this mail. 
<br>
<p>Problem description:
<br>
<p>Openmpi 1.3 seems to be nonfunctional when used with libltdl in libtool v1.5  
<br>
that is installed on CentOS (aka RH EL) 4 and 5.   Upgrading to libtool 
<br>
v2.2.6a (and maybe earlier versions) solves the problem.  We saw this problem 
<br>
with both gcc and icc.
<br>
<p>Here is a code snippet that is extracted from the real application.
<br>
<p>nestcrash.c:
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;ltdl.h&gt;
<br>
<p>int main(int argc,char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
<p>&nbsp;&nbsp;char *dummy=&quot;dummy&quot;;
<br>
&nbsp;&nbsp;const lt_dlhandle hModule = lt_dlopenext(dummy);
<br>
<p>}
<br>
<p>This will crash in MPI_Init when using libtool 1.5.X, if you comment out 
<br>
lt_dlopenext it will run normally.
<br>
<p>I can provide a complete example if neccessary.
<br>
<p>As I said earlier, upgrading to libtool 2.2.6a solved the problem for us.
<br>
<p>Here is the backtrace:
<br>
<p>*** Process received signal ***
<br>
Signal: Segmentation fault (11)
<br>
Signal code:  (128)
<br>
Failing at address: (nil)
<br>
[ 0] /lib64/tls/libpthread.so.0 [0x3ffce0c4f0]
<br>
[ 1] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0 [0x2a95d4bce5]
<br>
[ 2] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0(lt_dlopenadvise
<br>
+0xf0) [0x2a95d4b470]
<br>
[ 3] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0 [0x2a95d56e1f]
<br>
[ 4] /global/apps/openmpi/1.3rc2/lib/libopen-
<br>
pal.so.0(mca_base_component_find+0x58d) [0x2a95d5657d]
<br>
[ 5] /global/apps/openmpi/1.3rc2/lib/libopen-
<br>
pal.so.0(mca_base_components_open+0x1ae) [0x2a95d581be]
<br>
[ 6] /global/apps/openmpi/1.3rc2/lib/libopen-
<br>
pal.so.0(opal_paffinity_base_open+0xad) [0x2a95d73ddd]
<br>
[ 7] /global/apps/openmpi/1.3rc2/lib/libopen-pal.so.0(opal_init+0x64)
<br>
[0x2a95d43e64]
<br>
[ 8] /global/apps/openmpi/1.3rc2/lib/libopen-rte.so.0(orte_init+0x1e)
<br>
[0x2a95bdeb8e]
<br>
[ 9] /global/apps/openmpi/1.3rc2/lib/libmpi.so.0 [0x2a95a38fee]
<br>
[10] /global/apps/openmpi/1.3rc2/lib/libmpi.so.0(PMPI_Init_thread+0x72)
<br>
[0x2a95a5b9c2]
<br>
[11] nest-ompi_1.3rc2/bin/nest(_ZN4nest12Communicator4initEPiPPPc+0x11f)
<br>
[0x55440f]
<br>
[12] nest-ompi_1.3rc2/bin/nest(main+0x74) [0x4a7674]
<br>
[13] /lib64/tls/libc.so.6(__libc_start_main+0xdb) [0x339271c3fb]
<br>
[14] nest-ompi_1.3rc2/bin/nest(_ZNSt8ios_base4InitD1Ev+0x5a) [0x4a756a]
<br>
*** End of error message ***
<br>
<p><p><p><pre>
-- 
  The Computer Center, University of Troms&#248;, N-9037 TROMS&#216; Norway.
	      phone:+47 77 64 41 07, fax:+47 77 64 41 00
        Roy Dragseth, Team Leader, High Performance Computing
	 Direct call: +47 77 64 62 56. email: roy.dragseth_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7794.php">Gabriele Fatigati: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="7792.php">Jeff Squyres: "Re: [OMPI users] Asynchronous behaviour of MPI Collectives"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
<li><strong>Reply:</strong> <a href="7797.php">Jeff Squyres: "Re: [OMPI users] Openmpi 1.3 problems with libtool-ltdl on CentOS 4 and 5"</a>
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
