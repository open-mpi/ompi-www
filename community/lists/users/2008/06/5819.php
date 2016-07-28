<?
$subject_val = "Re: [OMPI users] --bynode vs --byslot";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 20:39:44 2008" -->
<!-- isoreceived="20080605003944" -->
<!-- sent="Thu, 5 Jun 2008 08:39:33 +0800" -->
<!-- isosent="20080605003933" -->
<!-- name="Cally K" -->
<!-- email="kalpana0611_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --bynode vs --byslot" -->
<!-- id="b05971d10806041739q239af35ds67ef1338ebc85a36_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B69C2C7-FAC5-4453-8024-52059FE129BD_at_cisco.com" -->
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
<strong>From:</strong> Cally K (<em>kalpana0611_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 20:39:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
<li><strong>Previous message:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, that was actually a lot of help, I had very little understanding of
<br>
the bynode and byslot thingy, thanks
<br>
<p>On 6/5/08, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 23, 2008, at 9:07 PM, Cally K wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi, I have a question about --bynode and --byslot that i would like
</span><br>
<span class="quotelev2">&gt; &gt; to clarify
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Say, for example, I have a hostfile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; #Hostfile
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; __________________________
</span><br>
<span class="quotelev2">&gt; &gt; node0
</span><br>
<span class="quotelev2">&gt; &gt; node1 slots=2 max_slots=2
</span><br>
<span class="quotelev2">&gt; &gt; node2 slots=2 max_slots=2
</span><br>
<span class="quotelev2">&gt; &gt; node3 slots=4 max_slots=4
</span><br>
<span class="quotelev2">&gt; &gt; ___________________________
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There are 4 nodes and 9 slots, how do I run my mpirun, for now I use
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a) mpirun -np --bynode 4 ./abcd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I assume you mean &quot;... -np 4 --bynode ...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I know that the slot thingy is for SMPs, and I have tried running
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np --byslot 9 ./abcd
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and I noticed that its longer when I do --byslot when compared to --
</span><br>
<span class="quotelev2">&gt; &gt; bynode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to your text, you're running 9 processes when using --byslot
</span><br>
<span class="quotelev1">&gt; and 4 when using --bynode.  Is that a typo?  I'll assume that it is --
</span><br>
<span class="quotelev1">&gt; that you meant to use 9 in both cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; and I just read the faq that said, by defauly the byslot option is
</span><br>
<span class="quotelev2">&gt; &gt; used, so I dun have to use it rite,,,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what your question is.  The actual performance may depend
</span><br>
<span class="quotelev1">&gt; on your application and what its communication and computation
</span><br>
<span class="quotelev1">&gt; patterns are.  It gets more difficult to model when you have a
</span><br>
<span class="quotelev1">&gt; heterogeneous setup (like it looks like you have, per your hostfile).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's take your example of 9 processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - With --bynode, the MPI_COMM_WORLD ranks will be laid out as follows
</span><br>
<span class="quotelev1">&gt; (MCRW = &quot;MPI_COMM_WORLD rank&quot;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node0: MCWR 0
</span><br>
<span class="quotelev1">&gt; node1: MCWR 1, MCWR 4
</span><br>
<span class="quotelev1">&gt; node2: MCWR 2, MCWR 5
</span><br>
<span class="quotelev1">&gt; node3: MCRW 3, MCRW 6, MCWR 7, MCWR 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - With --byslot, it'll look like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node0: MCWR 0
</span><br>
<span class="quotelev1">&gt; node1: MCWR 1, MCWR 2
</span><br>
<span class="quotelev1">&gt; node2: MCWR 3, MCWR 4
</span><br>
<span class="quotelev1">&gt; node3: MCRW 5, MCRW 6, MCWR 7, MCWR 8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In short, OMPI is doing round-robin placement of your processes; the
</span><br>
<span class="quotelev1">&gt; only difference is in which dimension is traversed first: by node or
</span><br>
<span class="quotelev1">&gt; by slot.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As to why there's such a performance difference, it could depend on a
</span><br>
<span class="quotelev1">&gt; lot of things: the difference in computational speed and/or RAM on
</span><br>
<span class="quotelev1">&gt; your 4 nodes, the changing communication patterns between the two
</span><br>
<span class="quotelev1">&gt; (shared memory is usually used for on-node communication, which is
</span><br>
<span class="quotelev1">&gt; usually faster than most networks), etc.  It really depends on what
</span><br>
<span class="quotelev1">&gt; your application is *doing*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry I can't be of more help...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5819/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5820.php">Samuel Sarholz: "[OMPI users] Communicators in Fortran and C"</a>
<li><strong>Previous message:</strong> <a href="5818.php">Pavel Shamis (Pasha): "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5802.php">Jeff Squyres: "Re: [OMPI users] --bynode vs --byslot"</a>
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
