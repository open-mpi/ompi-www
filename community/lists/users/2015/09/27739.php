<?
$subject_val = "Re: [OMPI users] understanding mpi_gather-mpi_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:51:56 2015" -->
<!-- isoreceived="20150930145156" -->
<!-- sent="Wed, 30 Sep 2015 14:51:54 +0000" -->
<!-- isosent="20150930145154" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] understanding mpi_gather-mpi_gatherv" -->
<!-- id="157C0AA8-7144-408E-AED9-0193CB16EA1A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG8o1y4hRneOjVtt2Ypv3LRfR6V=P6bharFysTDPjx408LeHAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] understanding mpi_gather-mpi_gatherv<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:51:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27738.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gather requires that all processes contribute the same size message.  Gatherv allows the root to specify a different size that will be supplied by each peer process.
<br>
<p>Note, too, that X1(iStart:iEnd) may well invoke a copy to copy just that portion of the array; that might hurt your performance (depending on how large the range is).
<br>
<p><p><span class="quotelev1">&gt; On Sep 30, 2015, at 10:43 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; I am not sure if I have understood correctly  mpi_gather and mpi_gatherv.
</span><br>
<span class="quotelev1">&gt; This is my problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a complex vector, let's say: X1, where X1 is (1:625).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Each CPU work only with some element of X1, let say:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPU 0 --&gt; X1(iEnd-iStart)  150 elements
</span><br>
<span class="quotelev1">&gt; CPU 1 --&gt; X1(iEnd-iStart)  150 elements
</span><br>
<span class="quotelev1">&gt; CPU 2 --&gt; X1(iEnd-iStart)  150 elements
</span><br>
<span class="quotelev1">&gt; CPU 3 --&gt; X1(iEnd-iStart)  175 elements
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to collect all the data in only one vector, let's say PP(1:625)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; is it correct to write?
</span><br>
<span class="quotelev1">&gt; CALL MPI_Gather(X1(iStart:iEnd), iEnd-iStart+1, MPI_DOUBLE_COMPLEX, PHIH(1:625), 625, MPI_DOUBLE_COMPLEX, 0, MPI_COMM_WORLD,MPIdata%iErr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my case I get an error:
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Gather 
</span><br>
<span class="quotelev1">&gt; [diedroLap:3995] *** reported by process [140052855128065,0] 
</span><br>
<span class="quotelev1">&gt; [diedroLap:3995] *** on communicator MPI_COMM_WORLD 
</span><br>
<span class="quotelev1">&gt; [diedroLap:3995] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this because each SubVector X1 has a different size?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; really really thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27737.php">http://www.open-mpi.org/community/lists/users/2015/09/27737.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>Previous message:</strong> <a href="27738.php">Jeff Squyres (jsquyres): "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>In reply to:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27740.php">Nick Papior: "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
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
