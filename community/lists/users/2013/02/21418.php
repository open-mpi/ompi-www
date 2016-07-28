<?
$subject_val = "Re: [OMPI users] All_to_allv algorithm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb 16 09:38:10 2013" -->
<!-- isoreceived="20130216143810" -->
<!-- sent="Sat, 16 Feb 2013 14:38:04 +0000" -->
<!-- isosent="20130216143804" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] All_to_allv algorithm patch" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC43F43C6E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903CE0EF9_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] All_to_allv algorithm patch<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-16 09:38:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>In reply to:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Agreed on all of Hristo's points.  
<br>
<p>Can you post this over on the devel list?  We've been too sloppy in the past about mixing what goes on the users list vs. the devel list.
<br>
<p><p><p>On Feb 5, 2013, at 4:46 AM, &quot;Iliev, Hristo&quot; &lt;iliev_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the users mailing list. There is a separate one for questions
</span><br>
<span class="quotelev1">&gt; related to Open MPI development - devel_at_open-mpi.org.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides, why don't you open a ticket in the Open MPI Trac at
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> and post there patches against trunk? My
</span><br>
<span class="quotelev1">&gt; experience shows that even simple changes to the collective framework are of
</span><br>
<span class="quotelev1">&gt; low importance to the OMPI development team and chances of such changes
</span><br>
<span class="quotelev1">&gt; entering the 1.6.x branch are practically zero. By the way, the off-by-one
</span><br>
<span class="quotelev1">&gt; issue was reported almost an year ago and is already fixed in trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe that the rationale behind the algorithm switch was given by either
</span><br>
<span class="quotelev1">&gt; Jeff or George some time ago and it was that the linear code does not scale
</span><br>
<span class="quotelev1">&gt; to a large number of processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, February 04, 2013 5:19 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] All_to_allv algorithm patch
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll try running this by the mailing list again, before resigning myself
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; maintaining this privately....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've looked in detail at the current two MPI_Alltoallv algorithms and
</span><br>
<span class="quotelev1">&gt; wanted
</span><br>
<span class="quotelev2">&gt;&gt; to raise a couple of ideas.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Firstly, the new default &quot;pairwise&quot; algorithm.
</span><br>
<span class="quotelev2">&gt;&gt; * There is no optimisation for sparse/empty messages, compare to the old
</span><br>
<span class="quotelev2">&gt;&gt; basic &quot;linear&quot; algorithm.
</span><br>
<span class="quotelev2">&gt;&gt; * The attached &quot;pairwise-nop&quot; patch adds this optimisation and on the test
</span><br>
<span class="quotelev2">&gt;&gt; case I first described in this thread (1000's of small, sparse,
</span><br>
<span class="quotelev1">&gt; all-to-all), this cuts
</span><br>
<span class="quotelev2">&gt;&gt; runtime by approximately 30%
</span><br>
<span class="quotelev2">&gt;&gt; * I think the upper bound on the loop counter for pairwise exchange is
</span><br>
<span class="quotelev1">&gt; off-
</span><br>
<span class="quotelev2">&gt;&gt; by-one. As the comment notes &quot;starting from 1 since local exhange [sic] is
</span><br>
<span class="quotelev2">&gt;&gt; done&quot;; but when step = (size + 1), the sendto/recvfrom both reduce to rank
</span><br>
<span class="quotelev2">&gt;&gt; (self-exchange is already handled in earlier code)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The pairwise algorithm still kills performance on my gigabit ethernet
</span><br>
<span class="quotelev1">&gt; network.
</span><br>
<span class="quotelev2">&gt;&gt; My message transmission time must be small compared to latency, and the
</span><br>
<span class="quotelev2">&gt;&gt; forced MPI_Comm_size() synchronisation steps introduce a minimum delay
</span><br>
<span class="quotelev2">&gt;&gt; (single_link_latency * comm_size), i.e. latency scale linearly with
</span><br>
<span class="quotelev1">&gt; comm_size.
</span><br>
<span class="quotelev2">&gt;&gt; The linear algorithm doesn't wait for each exchange, so its minimum
</span><br>
<span class="quotelev1">&gt; latency
</span><br>
<span class="quotelev2">&gt;&gt; is just a single transmit/receive.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which brings me to the second idea. The problem with the existing
</span><br>
<span class="quotelev2">&gt;&gt; implementation of the linear algorithm is that the irecv/isend pattern was
</span><br>
<span class="quotelev2">&gt;&gt; identical on all processes, meaning that every process starts by having to
</span><br>
<span class="quotelev1">&gt; wait
</span><br>
<span class="quotelev2">&gt;&gt; for process 0 to send to everyone and every process can finish waiting for
</span><br>
<span class="quotelev2">&gt;&gt; rank (size-1) to send to everyone.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems preferable to at least post the send/recv requests in the same
</span><br>
<span class="quotelev1">&gt; order
</span><br>
<span class="quotelev2">&gt;&gt; as the pairwise algorithm. The attached &quot;linear-alltoallv&quot; patch
</span><br>
<span class="quotelev1">&gt; implements
</span><br>
<span class="quotelev2">&gt;&gt; this and, on my test case, shows some modest 5% improvement.
</span><br>
<span class="quotelev2">&gt;&gt; I was wondering if it would address the concerns which led to the switch
</span><br>
<span class="quotelev1">&gt; of
</span><br>
<span class="quotelev2">&gt;&gt; default algorithm.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Simon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21419.php">Erik Nelson: "Re: [OMPI users] qsub error"</a>
<li><strong>Previous message:</strong> <a href="21417.php">Jeff Squyres (jsquyres): "Re: [OMPI users] qsub error"</a>
<li><strong>In reply to:</strong> <a href="21298.php">Iliev, Hristo: "Re: [OMPI users] All_to_allv algorithm patch"</a>
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
