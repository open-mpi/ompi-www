<?
$subject_val = "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 25 09:10:26 2012" -->
<!-- isoreceived="20120925131026" -->
<!-- sent="Tue, 25 Sep 2012 15:10:24 +0200" -->
<!-- isosent="20120925131024" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi test program &amp;quot;ring&amp;quot; failed: blocked at MPI_Send" -->
<!-- id="9A28D233-588E-4038-BE4D-4B1512E9D6F2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="d03887d.4ec9.139fd7fa2e8.Coremail.codemonkee_at_163.com" -->
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
<strong>Date:</strong> 2012-09-25 09:10:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 25, 2012, at 2:56 PM, Richard wrote:
<br>
<p><span class="quotelev1">&gt; thanks a lot ! 
</span><br>
<span class="quotelev1">&gt;  using &quot;--mca btl_if_exclude virbr0&quot; does not work, but you have pointed out the
</span><br>
<p>Ya, sorry -- see my second mail, it should be &quot;btl_tcp_if_exclude&quot;.
<br>
<p><span class="quotelev1">&gt; problem, so i fixed it using &quot;--mca btl_tcp_if_include bond0&quot; because I know this is the high speed network interface I should use on each node.
</span><br>
<p>Glad it works for you!
<br>
<p>If you're not using those interfaces (they might be related to Xen, or something like that?), you might want to disable them.
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
<li><strong>Next message:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Previous message:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="20303.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20305.php">Tom Bryan (tombry): "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
<li><strong>Reply:</strong> <a href="20322.php">Richard : "Re: [OMPI users] mpi test program &quot;ring&quot; failed: blocked at MPI_Send"</a>
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
