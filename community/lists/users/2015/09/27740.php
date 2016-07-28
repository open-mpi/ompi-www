<?
$subject_val = "Re: [OMPI users] understanding mpi_gather-mpi_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 10:53:28 2015" -->
<!-- isoreceived="20150930145328" -->
<!-- sent="Wed, 30 Sep 2015 14:52:58 +0000" -->
<!-- isosent="20150930145258" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] understanding mpi_gather-mpi_gatherv" -->
<!-- id="CAAbhqc4kzMi9y4qC11zc9-Mjet-v7LaBQfu_k0omoCGo+41bBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 10:52:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>In reply to:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gather receives messages of _one_ length. Hence all arrays has to be of
<br>
same length (not exactly see below). Hence 625 should be 175.
<br>
See the example on the documentation site:
<br>
<a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Gather.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Gather.3.php</a>
<br>
<p>You should use gatherv for varying length of messages, or use gather with
<br>
the largest receive size and take into account the empty padding in the
<br>
receive buffer.
<br>
<p>2015-09-30 14:43 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; dear all,
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
<span class="quotelev1">&gt; I would like to collect all the data in only one vector, let's say
</span><br>
<span class="quotelev1">&gt; PP(1:625)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is it correct to write?
</span><br>
<span class="quotelev1">&gt; CALL MPI_Gather(X1(iStart:iEnd), iEnd-iStart+1, MPI_DOUBLE_COMPLEX,
</span><br>
<span class="quotelev1">&gt; PHIH(1:625), 625, MPI_DOUBLE_COMPLEX, 0, MPI_COMM_WORLD,MPIdata%iErr)
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27737.php">http://www.open-mpi.org/community/lists/users/2015/09/27737.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27740/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27741.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27739.php">Jeff Squyres (jsquyres): "Re: [OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<li><strong>In reply to:</strong> <a href="27737.php">Diego Avesani: "[OMPI users] understanding mpi_gather-mpi_gatherv"</a>
<!-- nextthread="start" -->
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
