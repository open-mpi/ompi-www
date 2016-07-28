<?
$subject_val = "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 08:30:34 2012" -->
<!-- isoreceived="20120925123034" -->
<!-- sent="Tue, 25 Sep 2012 14:30:16 +0200" -->
<!-- isosent="20120925123016" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="A031068A-9F39-43BC-A349-D78CFCCBC24E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9C30F4D0-EF78-4883-B148-15EA1093F2F2_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-25 08:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2012, at 2:28 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;  mpirun --mca btl_if_exclude virbr0 ...
</span><br>
<p><p>Gah; sorry, that should be:
<br>
<p>&nbsp;&nbsp;mpirun --mca btl_tcp_if_exclude virbr0 ...
<br>
<p>I forgot the &quot;tcp&quot; there in the middle.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20301.php">Jeff Squyres: "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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
