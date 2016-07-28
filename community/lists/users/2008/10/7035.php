<?
$subject_val = "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 14:21:57 2008" -->
<!-- isoreceived="20081019182157" -->
<!-- sent="Sun, 19 Oct 2008 14:21:53 -0400" -->
<!-- isosent="20081019182153" -->
<!-- name="Eric Thibodeau" -->
<!-- email="kyron_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?" -->
<!-- id="48FB7AC1.5060107_at_neuralbs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7703F586-7A01-4667-9D7A-F8CD37FC590E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?<br>
<strong>From:</strong> Eric Thibodeau (<em>kyron_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 14:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 18, 2008, at 9:19 PM, Mostyn Lewis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can OpenMPI do like Scali and MVAPICH2 and utilize 2 IB HCAs per machine
</span><br>
<span class="quotelev2">&gt;&gt; to approach double the bandwidth on simple tests such as IMB PingPong?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.  OMPI will automatically (and aggressively) use as many active 
</span><br>
<span class="quotelev1">&gt; ports as you have.  So you shouldn't need to list devices+ports -- 
</span><br>
<span class="quotelev1">&gt; OMPI will simply use all ports that it finds in the active state.  If 
</span><br>
<span class="quotelev1">&gt; your ports are on physically separate IB networks, then each IB 
</span><br>
<span class="quotelev1">&gt; network will require a different subnet ID so that OMPI can compute 
</span><br>
<span class="quotelev1">&gt; reachability properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Does this apply to all fabrics, or, at which level is this implemented 
<br>
in ompi? (ie: multiple GigE nics...but I doubt it applies given the 
<br>
restricted intricacies of the IP implementation)
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7036.php">Wen Hao Wang: "[OMPI users] test OpenMPI without Internet access"</a>
<li><strong>Previous message:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>In reply to:</strong> <a href="7034.php">Jeff Squyres: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
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
