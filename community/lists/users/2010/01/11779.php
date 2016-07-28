<?
$subject_val = "Re: [OMPI users] Setting MCA parameter from within program";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 17:51:13 2010" -->
<!-- isoreceived="20100114225113" -->
<!-- sent="Thu, 14 Jan 2010 17:51:07 -0500" -->
<!-- isosent="20100114225107" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting MCA parameter from within program" -->
<!-- id="3FF22F8D-1B24-4D3E-997B-FA0825C8B753_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c93c21391001141208t2eff60dcu3a90cd76adaa7b12_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting MCA parameter from within program<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-14 17:51:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11780.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection resetby peer (104)"</a>
<li><strong>Previous message:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11776.php">Roland Schulz: "[OMPI users] Setting MCA parameter from within program"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 14, 2010, at 3:08 PM, Roland Schulz wrote:
<br>
<p><span class="quotelev1">&gt; is it possible to set MCA parameters from within the MPI program itself? The FAQ only mentions how to set them through files or environment variables.
</span><br>
<p>Not really (other than setenv()).  Most MCA parameters are read during MPI_INIT and not examined again afterwards.
<br>
<p><span class="quotelev1">&gt; I would like to set coll_tuned_use_dynamic_rules and coll_tuned_alltoall_algorithm.
</span><br>
<p>I'm not sure offhand if the coll tuned module re-examines these values after MPI_INIT?  It *might* look at them as each communicator is created, but I don't know.
<br>
<p>George?  (if George doesn't answer here, go knock on his door -- I assume you're close by ;-) )
<br>
<p><span class="quotelev1">&gt; I assume there is a function to do this  in include/opal/mca but I'm not sure which one. And I couldn't find any documentation explaining it.
</span><br>
<span class="quotelev1">&gt; I'm aware that this will only work with OpenMPI and is probably not part of the public api thus the interface might change between version.
</span><br>
<p>Yep -- we do have some internal functions to do this, but they are not public functions.
<br>
<p><span class="quotelev1">&gt; My plan is to benchmark all alltoall algorithms at start up and then use this algorithm for all later AllToAll calls. I have benchmarked that manually choosing the algorithm can make a large  difference. Also all my alltoall communication is of the same data size thus tuning is easy.
</span><br>
<p>It might actually be easier to write up a shell/perl/whatever script to iterate over all the values that you want to run -- setenv the values you want and then mpirun (or set the appropriate mpirun command line params, etc.).  I have done this kind of thing in the past and it's worked out easier than I thought it would.
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
<li><strong>Next message:</strong> <a href="11780.php">Jeff Squyres: "Re: [OMPI users] mca_btl_tcp_frag_recv: readv failed: Connection resetby peer (104)"</a>
<li><strong>Previous message:</strong> <a href="11778.php">Jeff Squyres: "Re: [OMPI users] More NetBSD fixes"</a>
<li><strong>In reply to:</strong> <a href="11776.php">Roland Schulz: "[OMPI users] Setting MCA parameter from within program"</a>
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
