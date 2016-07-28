<?
$subject_val = "Re: [OMPI users] --bynode vs --byslot";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 13:08:06 2008" -->
<!-- isoreceived="20080604170806" -->
<!-- sent="Wed, 4 Jun 2008 13:07:46 -0400" -->
<!-- isosent="20080604170746" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --bynode vs --byslot" -->
<!-- id="8B69C2C7-FAC5-4453-8024-52059FE129BD_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b05971d10805231807u1820c954i98f90c37b0c63f0_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] --bynode vs --byslot<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 13:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Previous message:</strong> <a href="5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5729.php">Cally K: "[OMPI users] --bynode vs --byslot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Reply:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2008, at 9:07 PM, Cally K wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I have a question about --bynode and --byslot that i would like  
</span><br>
<span class="quotelev1">&gt; to clarify
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Say, for example, I have a hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #Hostfile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; __________________________
</span><br>
<span class="quotelev1">&gt; node0
</span><br>
<span class="quotelev1">&gt; node1 slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt; node2 slots=2 max_slots=2
</span><br>
<span class="quotelev1">&gt; node3 slots=4 max_slots=4
</span><br>
<span class="quotelev1">&gt; ___________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are 4 nodes and 9 slots, how do I run my mpirun, for now I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a) mpirun -np --bynode 4 ./abcd
</span><br>
<p>I assume you mean &quot;... -np 4 --bynode ...&quot;
<br>
<p><span class="quotelev1">&gt; I know that the slot thingy is for SMPs, and I have tried running  
</span><br>
<span class="quotelev1">&gt; mpirun -np --byslot 9 ./abcd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and I noticed that its longer when I do --byslot when compared to -- 
</span><br>
<span class="quotelev1">&gt; bynode
</span><br>
<p>According to your text, you're running 9 processes when using --byslot  
<br>
and 4 when using --bynode.  Is that a typo?  I'll assume that it is --  
<br>
that you meant to use 9 in both cases.
<br>
<p><span class="quotelev1">&gt; and I just read the faq that said, by defauly the byslot option is  
</span><br>
<span class="quotelev1">&gt; used, so I dun have to use it rite,,,
</span><br>
<p>I'm not sure what your question is.  The actual performance may depend  
<br>
on your application and what its communication and computation  
<br>
patterns are.  It gets more difficult to model when you have a  
<br>
heterogeneous setup (like it looks like you have, per your hostfile).
<br>
<p>Let's take your example of 9 processes.
<br>
<p>- With --bynode, the MPI_COMM_WORLD ranks will be laid out as follows  
<br>
(MCRW = &quot;MPI_COMM_WORLD rank&quot;)
<br>
<p>node0: MCWR 0
<br>
node1: MCWR 1, MCWR 4
<br>
node2: MCWR 2, MCWR 5
<br>
node3: MCRW 3, MCRW 6, MCWR 7, MCWR 8
<br>
<p>- With --byslot, it'll look like this:
<br>
<p>node0: MCWR 0
<br>
node1: MCWR 1, MCWR 2
<br>
node2: MCWR 3, MCWR 4
<br>
node3: MCRW 5, MCRW 6, MCWR 7, MCWR 8
<br>
<p>In short, OMPI is doing round-robin placement of your processes; the  
<br>
only difference is in which dimension is traversed first: by node or  
<br>
by slot.
<br>
<p>As to why there's such a performance difference, it could depend on a  
<br>
lot of things: the difference in computational speed and/or RAM on  
<br>
your 4 nodes, the changing communication patterns between the two  
<br>
(shared memory is usually used for on-node communication, which is  
<br>
usually faster than most networks), etc.  It really depends on what  
<br>
your application is *doing*.
<br>
<p>Sorry I can't be of more help...
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
<li><strong>Next message:</strong> <a href="5803.php">Jeff Squyres: "Re: [OMPI users] Infinite loop when tcp free list max reached"</a>
<li><strong>Previous message:</strong> <a href="5801.php">Jeff Squyres: "Re: [OMPI users] ORTE_ERROR_LOG Timeout"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/05/5729.php">Cally K: "[OMPI users] --bynode vs --byslot"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
<li><strong>Reply:</strong> <a href="5819.php">Cally K: "Re: [OMPI users] --bynode vs --byslot"</a>
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
