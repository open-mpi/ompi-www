<?
$subject_val = "Re: [OMPI users] Communication problem (on one node) when network interface is down";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 12 09:34:53 2016" -->
<!-- isoreceived="20160312143453" -->
<!-- sent="Sat, 12 Mar 2016 23:34:51 +0900" -->
<!-- isosent="20160312143451" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Communication problem (on one node) when network interface is down" -->
<!-- id="CAAkFZ5tGSpLJm4H4dvhTTxVsoNMDKaZCpqjRpFynjrxY5pZPBQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53D48F74-810C-4A98-B4FE-96BFCF77520C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Communication problem (on one node) when network interface is down<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-12 09:34:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28691.php">Gilles Gouaillardet: "Re: [OMPI users] IB question (slightly off topic)"</a>
<li><strong>In reply to:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also, loop back interface is somehow special.
<br>
though all nodes do have the same ip 127.0.0.1, this interface cannot be
<br>
used for inter node communication.
<br>
<p>On Saturday, March 12, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; It's set by default in btl_tcp_if_exclude (because in most cases, you *do*
</span><br>
<span class="quotelev1">&gt; want to exclude the loopback interface -- it's much slower than other
</span><br>
<span class="quotelev1">&gt; shared memory types of scenarios).  But this value can certainly be
</span><br>
<span class="quotelev1">&gt; overridden:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl_tcp_if_exclude '' ....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 11, 2016, at 11:15 AM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; From a user standpoint, that does not seem right to me. Why should one
</span><br>
<span class="quotelev1">&gt; need any kind of network at all if one is entirely dealing with a single
</span><br>
<span class="quotelev1">&gt; node? Is there any particular reason OpenMPI does not/cannot use the lo
</span><br>
<span class="quotelev1">&gt; (loopback) interface? I'd think it is there for exactly this kind of
</span><br>
<span class="quotelev1">&gt; situation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Durga
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Mar 11, 2016 at 6:08 AM, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev1">&gt; gilles.gouaillardet_at_[hidden] &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Spawned tasks cannot use the sm nor vader btl so you need an other one
</span><br>
<span class="quotelev1">&gt; (tcp, openib, ...)
</span><br>
<span class="quotelev2">&gt; &gt; self btl is only to send/recvcount with oneself (e.g. it does not work
</span><br>
<span class="quotelev1">&gt; for inter process and intra node communications.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am pretty sure the lo interface is always discarded by openmpi, so I
</span><br>
<span class="quotelev1">&gt; have no solution on top of my head that involves openmpi.
</span><br>
<span class="quotelev2">&gt; &gt; maybe your bed bet is to use a &quot;dummy&quot; interface, for example tan or tun
</span><br>
<span class="quotelev1">&gt; or even a bridge.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cheers,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gilles
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Friday, March 11, 2016, R&#195;&#169;my Gr&#195;&#188;nblatt &lt;remy.grunblatt_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt; I'm having communications problem between two processes (with one being
</span><br>
<span class="quotelev2">&gt; &gt; spawned by the other, on the *same* physical machine). Everything works
</span><br>
<span class="quotelev2">&gt; &gt; as expected when I have network interface such as eth0 or wlo1 up, but
</span><br>
<span class="quotelev2">&gt; &gt; as soon as they are down, I get errors (such as &#194;&#171; At least one pair of
</span><br>
<span class="quotelev2">&gt; &gt; MPI processes are unable to reach each other for MPI communications [&#226;&#128;&#166;]
</span><br>
<span class="quotelev1">&gt; &#194;&#187;).
</span><br>
<span class="quotelev2">&gt; &gt; I tried to specify a set of mca parameters including the btl &quot;self&quot;
</span><br>
<span class="quotelev2">&gt; &gt; parameter and including the lo interface in btl_tcp_if_include list, as
</span><br>
<span class="quotelev2">&gt; &gt; advised by <a href="https://www.open-mpi.org/faq/?category=tcp">https://www.open-mpi.org/faq/?category=tcp</a> but I didn't reach
</span><br>
<span class="quotelev2">&gt; &gt; any working state for this code with &quot;external&quot; network interface down.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Got any idea about what I might do wrong ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Example code that triggers the problem: <a href="https://ptpb.pw/YOjr.tar.gz">https://ptpb.pw/YOjr.tar.gz</a>
</span><br>
<span class="quotelev2">&gt; &gt; Ompi_info:  <a href="https://ptpb.pw/Vt_V.txt">https://ptpb.pw/Vt_V.txt</a>
</span><br>
<span class="quotelev2">&gt; &gt; Full log: <a href="https://ptpb.pw/JCXn.txt">https://ptpb.pw/JCXn.txt</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; R&#195;&#169;my
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28684.php">http://www.open-mpi.org/community/lists/users/2016/03/28684.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28687.php">http://www.open-mpi.org/community/lists/users/2016/03/28687.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28689.php">http://www.open-mpi.org/community/lists/users/2016/03/28689.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28692/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28693.php">Éric Chamberland: "Re: [OMPI users] Error with MPI_Register_datarep"</a>
<li><strong>Previous message:</strong> <a href="28691.php">Gilles Gouaillardet: "Re: [OMPI users] IB question (slightly off topic)"</a>
<li><strong>In reply to:</strong> <a href="28689.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Communication problem (on one node) when network interface is down"</a>
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
