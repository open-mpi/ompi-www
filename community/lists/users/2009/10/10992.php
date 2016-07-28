<?
$subject_val = "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 19:26:01 2009" -->
<!-- isoreceived="20091028232601" -->
<!-- sent="Wed, 28 Oct 2009 16:25:57 -0700" -->
<!-- isosent="20091028232557" -->
<!-- name="nam kim" -->
<!-- email="namkkim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards." -->
<!-- id="c2994f0f0910281625h26b49d19s5d0997f5422ad7c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CCEA0425-1C00-41C8-8BA5-320ACE17714D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards.<br>
<strong>From:</strong> nam kim (<em>namkkim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 19:25:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10991.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Oct 28, 2009 at 1:09 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 28, 2009, at 1:08 PM, nam kim wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Head node and other computing nodes have topspin-ib-rhel4-3.2.0-118
</span><br>
<span class="quotelev2">&gt;&gt; installed with CISCO IB card (HCA-320-A1).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a reason you're not using OFED? &#160;OFED is *much* more modern and has
</span><br>
<span class="quotelev1">&gt; many more features than the old Cisco/Topspin IB driver stack. &#160;I don't
</span><br>
<span class="quotelev1">&gt; remember when the last Cisco IB stack release was, but I think it was
</span><br>
<span class="quotelev1">&gt; (literally) years ago. &#160;We put all of our development effort into OFED quite
</span><br>
<span class="quotelev1">&gt; a while ago.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Additionally, Open MPI removed support for the old MVAPI-style IB stacks
</span><br>
<span class="quotelev1">&gt; (including the Cisco/Topspin stack) starting with Open MPI v1.3. &#160;So if you
</span><br>
<span class="quotelev1">&gt; stick with the old stack, you're pretty much limited to Open MPI v1.2.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our new nodes has mellanox IB card (MHRH19-XTC). &#160;My question is how
</span><br>
<span class="quotelev2">&gt;&gt; to compile openmpi with heterogenous IB cards?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm afraid I don't know the subtle differences between those two cards.
</span><br>
<span class="quotelev1">&gt; &#160;Most of Open MPI's HCA determination and adjusting is done at run time, not
</span><br>
<span class="quotelev1">&gt; compile time. &#160;My advice would be to upgrade to the latest stable OFED
</span><br>
<span class="quotelev1">&gt; release and the latest stable Open MPI release. &#160;Then try running it and see
</span><br>
<span class="quotelev1">&gt; what happens. &#160;It will &quot;probably&quot; work just fine. &#160;If not, we can tweak some
</span><br>
<span class="quotelev1">&gt; run-time parameters to force Open MPI to use the same settings on all your
</span><br>
<span class="quotelev1">&gt; HCAs and then it will work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that make sense?
</span><br>
<p>It makes sense.
<br>
<p>Thanks
<br>
<p><span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Previous message:</strong> <a href="10991.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10988.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10993.php">Jeff Squyres: "Re: [OMPI users] compiling openmpi with mixed CISCOinfiniband.cardand Mellanox infiniband cards."</a>
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
