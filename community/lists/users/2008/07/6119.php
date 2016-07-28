<?
$subject_val = "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 17:24:06 2008" -->
<!-- isoreceived="20080723212406" -->
<!-- sent="Wed, 23 Jul 2008 17:24:00 -0400" -->
<!-- isosent="20080723212400" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks" -->
<!-- id="8D035DD6-C6D4-44E9-B988-C8105EBC8066_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48835FEB.6070605_at_scalableinformatics.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 17:24:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>In reply to:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 20, 2008, at 11:55 AM, Joe Landman wrote:
<br>
<p><span class="quotelev1">&gt; update 2:  (its like I am talking to myself ... :) must start using  
</span><br>
<span class="quotelev1">&gt; decaf ...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Joe Landman wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Joe Landman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ok, fixed this.  Turns out we have ipoib going, and one adapter  
</span><br>
<span class="quotelev2">&gt;&gt; needed to be brought down and back up.  Now the tcp version appears  
</span><br>
<span class="quotelev2">&gt;&gt; to be running, though I do get the strange hangs after a random  
</span><br>
<span class="quotelev2">&gt;&gt; (never the same) number of iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ok, turned off ipoib (OFED 1.2 on this cluster), and disabled ib0 as  
</span><br>
<span class="quotelev1">&gt; a tcp port.  Now, the --mca btl ^openib,sm setting results in a  
</span><br>
<span class="quotelev1">&gt; working code.
</span><br>
<p>Sorry for the delay in replying -- I was in an OMPI engineering  
<br>
meeting all last week, and such things tend to make me fall waaaay  
<br>
behind on INBOX traffic...
<br>
<p>Yes, we unfortunately have some fairly cryptic error messages there,  
<br>
sorry about that.  :-(
<br>
<p>As you guessed, OMPI is aggressively trying to use all possible TCP- 
<br>
providing interfaces. So once you either explicitly disable/enable the  
<br>
interfaces that you want to use (e.g., mca_btl_tcp_if_include and  
<br>
mca_btl_tcp_if_exclude -- but actually, OMPI has 2 separate systems  
<br>
that use TCP, so you'll also need to use mca_oob_tcp_if_include or  
<br>
mca_oob_tcp_of_include; BTL = MPI traffic, OOB = &quot;out of band&quot;  
<br>
traffic, that OMPI uses to setup jobs, exchange information during  
<br>
MPI_INIT, etc.).
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network">http://www.open-mpi.org/faq/?category=tcp#tcp-multi-network</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-selection">http://www.open-mpi.org/faq/?category=tcp#tcp-selection</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=tcp#tcp-routability">http://www.open-mpi.org/faq/?category=tcp#tcp-routability</a>
<br>
<p>I just updated the tcp-multi-network entry to mention the oob MCA  
<br>
params as well.
<br>
<p><span class="quotelev1">&gt; This said, we have had no issues in the past with other codes on  
</span><br>
<span class="quotelev1">&gt; this cluster running them with OpenMPI on infiniband, over ipoib, or  
</span><br>
<span class="quotelev1">&gt; tcp, or shared memory.  It appears that this code's use of  
</span><br>
<span class="quotelev1">&gt; MPI_Waitsome when using openib simply fails.  When we use the same  
</span><br>
<span class="quotelev1">&gt; thing with two tcp ports (ipoib and gigabit), it fails at random  
</span><br>
<span class="quotelev1">&gt; iterations.  Yet when we turn off ipoib, it works (as long as we  
</span><br>
<span class="quotelev1">&gt; turn off openib as well).
</span><br>
<p>We added an option in 1.2.7 to disable one of OMPI's optimizations;  
<br>
this optimization was called &quot;early completion&quot; and could result in  
<br>
some applications hanging.  Check out this FAQ entry and see if this  
<br>
helps you out:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion">http://www.open-mpi.org/faq/?category=openfabrics#v1.2-use-early-completion</a>
<br>
<p>Note that this option won't be necessary with the upcoming v1.3  
<br>
series; we changed how our progression engine works so that OMPI can  
<br>
handle these kinds of situations better.
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
<li><strong>Next message:</strong> <a href="6120.php">Jeff Squyres: "Re: [OMPI users] runtime warnings with MPI_File_write_ordered"</a>
<li><strong>Previous message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>In reply to:</strong> <a href="6096.php">Joe Landman: "Re: [OMPI users] problems with MPI_Waitsome/MPI_Allstart and OpenMPI on gigabit and IB networks"</a>
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
