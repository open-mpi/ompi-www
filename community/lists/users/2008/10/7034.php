<?
$subject_val = "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 19 06:27:11 2008" -->
<!-- isoreceived="20081019102711" -->
<!-- sent="Sun, 19 Oct 2008 06:27:05 -0400" -->
<!-- isosent="20081019102705" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?" -->
<!-- id="7703F586-7A01-4667-9D7A-F8CD37FC590E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.GSO.4.64.0810181817430.66_at_aragorn.brc.West.Sun.COM" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-19 06:27:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 18, 2008, at 9:19 PM, Mostyn Lewis wrote:
<br>
<p><span class="quotelev1">&gt; Can OpenMPI do like Scali and MVAPICH2 and utilize 2 IB HCAs per  
</span><br>
<span class="quotelev1">&gt; machine
</span><br>
<span class="quotelev1">&gt; to approach double the bandwidth on simple tests such as IMB PingPong?
</span><br>
<p><p>Yes.  OMPI will automatically (and aggressively) use as many active  
<br>
ports as you have.  So you shouldn't need to list devices+ports --  
<br>
OMPI will simply use all ports that it finds in the active state.  If  
<br>
your ports are on physically separate IB networks, then each IB  
<br>
network will require a different subnet ID so that OMPI can compute  
<br>
reachability properly.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Previous message:</strong> <a href="7033.php">Jeff Squyres: "Re: [OMPI users] --mca btl_openib_if_include"</a>
<li><strong>In reply to:</strong> <a href="7031.php">Mostyn Lewis: "[OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7035.php">Eric Thibodeau: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
<li><strong>Reply:</strong> <a href="7038.php">Mostyn Lewis: "Re: [OMPI users] Can 2 IB HCAs give twice the bandwidth?"</a>
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
