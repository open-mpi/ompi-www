<?
$subject_val = "Re: [OMPI devel] Common initialization code for IB.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 09:27:21 2008" -->
<!-- isoreceived="20080103142721" -->
<!-- sent="Thu, 3 Jan 2008 09:27:14 -0500" -->
<!-- isosent="20080103142714" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Common initialization code for IB." -->
<!-- id="2649E29B-D592-407B-B6B8-2A268EC75654_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080103140356.GH22604_at_minantech.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Common initialization code for IB.<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 09:27:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Previous message:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<li><strong>In reply to:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Reply:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 3, 2008, at 9:03 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;  In Paris we've talked about putting HCA discovery and  
</span><br>
<span class="quotelev1">&gt; initialization code
</span><br>
<span class="quotelev1">&gt; outside of openib BTL so other components that want to use IB will  
</span><br>
<span class="quotelev1">&gt; be able
</span><br>
<span class="quotelev1">&gt; to share common code, data and registration cache. Other components  
</span><br>
<span class="quotelev1">&gt; I am
</span><br>
<span class="quotelev1">&gt; thinking about are ofud and multicast collectives. I started to look  
</span><br>
<span class="quotelev1">&gt; at
</span><br>
<span class="quotelev1">&gt; this and I have a couple of problems with this approach. Currently  
</span><br>
<span class="quotelev1">&gt; openib
</span><br>
<span class="quotelev1">&gt; BTL has if_include/if_exclude parameters to control which HCAs  
</span><br>
<span class="quotelev1">&gt; should be
</span><br>
<span class="quotelev1">&gt; used. Should we make those parameters global and initialize only HCAs
</span><br>
<span class="quotelev1">&gt; that are not exulted by those filters, or should we initialize all  
</span><br>
<span class="quotelev1">&gt; HCAs
</span><br>
<span class="quotelev1">&gt; and each component will have its own include/exclude filters?
</span><br>
<p>Good question.  I think the optimal solution would be to have one set  
<br>
of globals (common_of_if_include or somesuch?) with optional per- 
<br>
component overrides.  E.g., tell all of OMPI to if_include mthca0, but  
<br>
then tell just the multicast collectives to if_include ipath1 (for  
<br>
whatever reason).  This would allow fine-grained selection of which  
<br>
communication types use which devices.
<br>
<p>To minimize the repetition of code, this could be effected by having a  
<br>
function in the common/of area that does all the work for the include/ 
<br>
exclude behavior.  You can simply call it with any of the MCA param  
<br>
values, such as: common_of_if_in/exclude, btl_openib_if_in/exclude,  
<br>
coll_of_if_in/exclude, ... and it can return a list of ports to use.
<br>
<p><span class="quotelev1">&gt; Another
</span><br>
<span class="quotelev1">&gt; problem is how multicast collective knows that all processes in a
</span><br>
<span class="quotelev1">&gt; communicator are reachable via the same network, do we have a  
</span><br>
<span class="quotelev1">&gt; mechanism
</span><br>
<span class="quotelev1">&gt; in ompi to check this?
</span><br>
<p><p>Good question.
<br>
<p>Perhaps the common_of stuff could hang some data off the ompi_proc_t  
<br>
that can be read by any of-like component (btl openib, coll of  
<br>
multicast, etc.)...?  This could contain a subnet ID, or perhaps a  
<br>
reachable flag, or somesuch.
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
<li><strong>Next message:</strong> <a href="2929.php">Rolf vandeVaart: "[OMPI devel] Fixing SPARC bus errors"</a>
<li><strong>Previous message:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<li><strong>In reply to:</strong> <a href="2927.php">Gleb Natapov: "[OMPI devel] Common initialization code for IB."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
<li><strong>Reply:</strong> <a href="2936.php">Gleb Natapov: "Re: [OMPI devel] Common initialization code for IB."</a>
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
