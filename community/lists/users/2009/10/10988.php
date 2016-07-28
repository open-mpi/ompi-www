<?
$subject_val = "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 28 16:09:16 2009" -->
<!-- isoreceived="20091028200916" -->
<!-- sent="Wed, 28 Oct 2009 16:09:10 -0400" -->
<!-- isosent="20091028200910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards." -->
<!-- id="CCEA0425-1C00-41C8-8BA5-320ACE17714D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="c2994f0f0910281008h4fbefa08n32b467b284f6fe38_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-28 16:09:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10992.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10992.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2009, at 1:08 PM, nam kim wrote:
<br>
<p><span class="quotelev1">&gt; Head node and other computing nodes have topspin-ib-rhel4-3.2.0-118
</span><br>
<span class="quotelev1">&gt; installed with CISCO IB card (HCA-320-A1).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Is there a reason you're not using OFED?  OFED is *much* more modern  
<br>
and has many more features than the old Cisco/Topspin IB driver  
<br>
stack.  I don't remember when the last Cisco IB stack release was, but  
<br>
I think it was (literally) years ago.  We put all of our development  
<br>
effort into OFED quite a while ago.
<br>
<p>Additionally, Open MPI removed support for the old MVAPI-style IB  
<br>
stacks (including the Cisco/Topspin stack) starting with Open MPI  
<br>
v1.3.  So if you stick with the old stack, you're pretty much limited  
<br>
to Open MPI v1.2.x.
<br>
<p><span class="quotelev1">&gt; Our new nodes has mellanox IB card (MHRH19-XTC).  My question is how
</span><br>
<span class="quotelev1">&gt; to compile openmpi with heterogenous IB cards?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'm afraid I don't know the subtle differences between those two  
<br>
cards.  Most of Open MPI's HCA determination and adjusting is done at  
<br>
run time, not compile time.  My advice would be to upgrade to the  
<br>
latest stable OFED release and the latest stable Open MPI release.   
<br>
Then try running it and see what happens.  It will &quot;probably&quot; work  
<br>
just fine.  If not, we can tweak some run-time parameters to force  
<br>
Open MPI to use the same settings on all your HCAs and then it will  
<br>
work.
<br>
<p>Does that make sense?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10989.php">Luke Shulenburger: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>Previous message:</strong> <a href="10987.php">Ralph Castain: "Re: [OMPI users] problem calling mpirun from script invoked with mpirun"</a>
<li><strong>In reply to:</strong> <a href="10983.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband. cardand Mellanox infiniband cards."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10992.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
<li><strong>Reply:</strong> <a href="10992.php">nam kim: "Re: [OMPI users] compiling openmpi with mixed CISCO infiniband.cardand Mellanox infiniband cards."</a>
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
