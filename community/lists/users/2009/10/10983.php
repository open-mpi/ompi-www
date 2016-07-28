<?
$subject_val = "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 13:08:13 2009" -->
<!-- isoreceived="20091028170813" -->
<!-- sent="Wed, 28 Oct 2009 10:08:07 -0700" -->
<!-- isosent="20091028170807" -->
<!-- name="nam kim" -->
<!-- email="namkkim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards." -->
<!-- id="c2994f0f0910281008h4fbefa08n32b467b284f6fe38_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F97D2A3F-92BF-45B5-96F6-61B1F0278342_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards.<br>
<strong>From:</strong> nam kim (<em>namkkim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 13:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Previous message:</strong> <a href="10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thank you for your reply!
<br>
<p>Further question,
<br>
<p>Head node and other computing nodes have topspin-ib-rhel4-3.2.0-118
<br>
installed with CISCO IB card (HCA-320-A1).
<br>
Our new nodes has mellanox IB card (MHRH19-XTC).  My question is how
<br>
to compile openmpi with heterogenous IB cards?
<br>
<p>I used to compile with --with-mvapi=/usr/local/topspin
<br>
<p>Thanks
<br>
-Nam
<br>
<p><p>On Mon, Oct 26, 2009 at 12:27 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2009, at 1:55 PM, nam kim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our school has a cluster running over CISCO based Infiniband cards and
</span><br>
<span class="quotelev2">&gt;&gt; switch.
</span><br>
<span class="quotelev2">&gt;&gt; Recently, we purchased more computing nods with Mellanox card since
</span><br>
<span class="quotelev2">&gt;&gt; CISCO stops making IB card anymore.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay in replying; my INBOX has grown totally out of hand
</span><br>
<span class="quotelev1">&gt; recently. &#160;:-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, Cisco never made IB HCAs; we simply resold Mellanox HCAs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Currently, I use openmpi 1.2.8 compiled with CISCO IB card
</span><br>
<span class="quotelev2">&gt;&gt; (SFS-HCA-320-A1) with topspin driver. My questions are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Is it possible to compile 1.3 version with mixed cisco IB and mellanox
</span><br>
<span class="quotelev2">&gt;&gt; IB (MHRH19-XTC) with open infiniband libries?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you mean: is it possible to use Open MPI 1.3.x with a recent OFED
</span><br>
<span class="quotelev1">&gt; distribution across multiple nodes, some of which include Cisco-branded HCAs
</span><br>
<span class="quotelev1">&gt; and some of which include Mellanox HCAs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The answer is: most likely, yes. &#160;Open MPI doesn't fully support
</span><br>
<span class="quotelev1">&gt; &quot;heterogeneous&quot; HCAs (e.g., HCAs that would require different MTUs). &#160;But I
</span><br>
<span class="quotelev1">&gt; suspect that your HCAs are all &quot;close enough&quot; that it won't matter. &#160;FWIW,
</span><br>
<span class="quotelev1">&gt; on my 64-node MPI testing cluster at Cisco, I do similar things -- I have
</span><br>
<span class="quotelev1">&gt; various Cisco and Mellanox HCAs of different generations and specific
</span><br>
<span class="quotelev1">&gt; capabilities, and Open MPI runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Is is possible to compile 1.2.8 with mixed cisco IB and mellanox IB,
</span><br>
<span class="quotelev2">&gt;&gt; then how?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you can, I'd highly suggest upgrading to the Open MPI v1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10984.php">Sangamesh B: "[OMPI users] With IMPI works fine,With OMPI fails"</a>
<li><strong>Previous message:</strong> <a href="10982.php">Sergio D&#237;az: "[OMPI users]  checkpoint opempi-1.3.3+sge62"</a>
<li><strong>In reply to:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
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
