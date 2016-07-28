<?
$subject_val = "[OMPI devel] trace the openmpi internal function calls in MPI user program";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  2 14:24:55 2015" -->
<!-- isoreceived="20151002182455" -->
<!-- sent="Fri, 2 Oct 2015 18:21:53 +0000 (UTC)" -->
<!-- isosent="20151002182153" -->
<!-- name="Dahai Guo" -->
<!-- email="dahaiguo2004_at_[hidden]" -->
<!-- subject="[OMPI devel] trace the openmpi internal function calls in MPI user program" -->
<!-- id="1766148516.423889.1443810113529.JavaMail.yahoo_at_mail.yahoo.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] trace the openmpi internal function calls in MPI user program<br>
<strong>From:</strong> Dahai Guo (<em>dahaiguo2004_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-02 14:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Previous message:</strong> <a href="18124.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Access to old users@ and devel@ Open MPI mails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Reply:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
Is there any way to trace open mpi internal function calls in a MPI user program? If so, can any one explain it with an example? such as helloworld? &#194;&#160;I build open MPI with the VampirTrace options, and compile the following program with&#194;&#160;picc-vt,. but I didn't get any tracing info.&#194;&#160;
<br>
Thanks
<br>
D. G.
<br>
#include &lt;stdio.h&gt;#include &lt;mpi.h&gt;
<br>
<p>int main (int argc, char **argv){&#194;&#160; int rank, size;
<br>
&#194;&#160; MPI_Init (&amp;argc, &amp;argv);&#194;&#160; MPI_Comm_rank (MPI_COMM_WORLD, &amp;rank);&#194;&#160; MPI_Comm_size (MPI_COMM_WORLD, &amp;size);&#194;&#160; printf( &quot;Hello world from process %d of %d\n&quot;, rank, size );&#194;&#160; MPI_Barrier(MPI_COMM_WORLD);&#194;&#160; MPI_Finalize();&#194;&#160; return 0;}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18125/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Previous message:</strong> <a href="18124.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Access to old users@ and devel@ Open MPI mails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
<li><strong>Reply:</strong> <a href="18126.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trace the openmpi internal function calls in MPI user	program"</a>
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
