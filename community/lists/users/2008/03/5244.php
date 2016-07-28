<?
$subject_val = "Re: [OMPI users] parallel molecular Dynamic simulations: All to All Comunication";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 19 20:59:49 2008" -->
<!-- isoreceived="20080320005949" -->
<!-- sent="Wed, 19 Mar 2008 20:59:24 -0400" -->
<!-- isosent="20080320005924" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] parallel molecular Dynamic simulations: All to All Comunication" -->
<!-- id="1219E96B-067C-4788-AEC2-3BAB615C89FF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3142CF519A6B204896E248FD59CB7FB20E1A1B_at_MST-VMAIL3.srv.mst.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] parallel molecular Dynamic simulations: All to All Comunication<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-19 20:59:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<li><strong>Previous message:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Chembeti, Ramesh (S&amp;T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<li><strong>Reply:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2008, at 5:52 PM, Chembeti, Ramesh (S&amp;T-Student) wrote:
<br>
<p><span class="quotelev1">&gt; MY question is : when I printed the results,accelerations on  
</span><br>
<span class="quotelev1">&gt; processor 0( ie from 1 to nmol/2) are same as the results for serial  
</span><br>
<span class="quotelev1">&gt; code, where as they arent same for processor 1(nmol/2+1 to nmol). As  
</span><br>
<span class="quotelev1">&gt; I am learning MPI I couldnt find where it went wrong in doing an all  
</span><br>
<span class="quotelev1">&gt; to all operation for accleration part ax(i,m),ay(i,m),az(i,m).
</span><br>
<p><p>I can't really parse your question, and I unfortunately don't have  
<br>
time to parse your code.  I see that you're doing 3 bcasts (they're  
<br>
not all-to-all, as your comment claims), but I don't know how big they  
<br>
are.
<br>
<p>The big issue here is how much work each process is doing compared to  
<br>
the whole.  If your problem is not &quot;big enough&quot;, the communication  
<br>
costs can outweigh the computation costs and any benefits you might  
<br>
have gained from parallelization will be lost.  In short: you usually  
<br>
need a big computational problem before you'll see benefits from  
<br>
parallelization.  (yes, there's lots of corner cases; find a textbook  
<br>
on parallel computation to see the finer details)
<br>
<p>Here's a writeup I did on basic parallel computing many years ago that  
<br>
might be helpful:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.osl.iu.edu/~jsquyres/bladeenc/details.php">http://www.osl.iu.edu/~jsquyres/bladeenc/details.php</a>
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
<li><strong>Next message:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<li><strong>Previous message:</strong> <a href="5243.php">Michael Jennings: "Re: [OMPI users] RPM build errors when creating multiple rpms"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Chembeti, Ramesh (S&amp;T-Student): "[OMPI users] parallel molecular Dynamic simulations: All to All Comunication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
<li><strong>Reply:</strong> <a href="5245.php">Chembeti, Ramesh (S&T-Student): "Re: [OMPI users] parallel molecular Dynamic simulations: All to AllComunication"</a>
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
