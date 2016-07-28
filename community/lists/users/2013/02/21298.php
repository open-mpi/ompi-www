<?
$subject_val = "Re: [OMPI users] All_to_allv algorithm patch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  5 04:46:51 2013" -->
<!-- isoreceived="20130205094651" -->
<!-- sent="Tue, 05 Feb 2013 09:46:44 +0000" -->
<!-- isosent="20130205094644" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] All_to_allv algorithm patch" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903CE0EF9_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="510FDF91.4080404_at_ntlworld.com" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-05 04:46:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Reply:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This is the users mailing list. There is a separate one for questions
<br>
related to Open MPI development - devel_at_open-mpi.org.
<br>
<p>Besides, why don't you open a ticket in the Open MPI Trac at
<br>
<a href="https://svn.open-mpi.org/trac/ompi/">https://svn.open-mpi.org/trac/ompi/</a> and post there patches against trunk? My
<br>
experience shows that even simple changes to the collective framework are of
<br>
low importance to the OMPI development team and chances of such changes
<br>
entering the 1.6.x branch are practically zero. By the way, the off-by-one
<br>
issue was reported almost an year ago and is already fixed in trunk.
<br>
<p>I believe that the rationale behind the algorithm switch was given by either
<br>
Jeff or George some time ago and it was that the linear code does not scale
<br>
to a large number of processes.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Number Cruncher
</span><br>
<span class="quotelev1">&gt; Sent: Monday, February 04, 2013 5:19 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] All_to_allv algorithm patch
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'll try running this by the mailing list again, before resigning myself
</span><br>
to
<br>
<span class="quotelev1">&gt; maintaining this privately....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've looked in detail at the current two MPI_Alltoallv algorithms and
</span><br>
wanted
<br>
<span class="quotelev1">&gt; to raise a couple of ideas.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Firstly, the new default &quot;pairwise&quot; algorithm.
</span><br>
<span class="quotelev1">&gt; * There is no optimisation for sparse/empty messages, compare to the old
</span><br>
<span class="quotelev1">&gt; basic &quot;linear&quot; algorithm.
</span><br>
<span class="quotelev1">&gt; * The attached &quot;pairwise-nop&quot; patch adds this optimisation and on the test
</span><br>
<span class="quotelev1">&gt; case I first described in this thread (1000's of small, sparse,
</span><br>
all-to-all), this cuts
<br>
<span class="quotelev1">&gt; runtime by approximately 30%
</span><br>
<span class="quotelev1">&gt; * I think the upper bound on the loop counter for pairwise exchange is
</span><br>
off-
<br>
<span class="quotelev1">&gt; by-one. As the comment notes &quot;starting from 1 since local exhange [sic] is
</span><br>
<span class="quotelev1">&gt; done&quot;; but when step = (size + 1), the sendto/recvfrom both reduce to rank
</span><br>
<span class="quotelev1">&gt; (self-exchange is already handled in earlier code)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The pairwise algorithm still kills performance on my gigabit ethernet
</span><br>
network.
<br>
<span class="quotelev1">&gt; My message transmission time must be small compared to latency, and the
</span><br>
<span class="quotelev1">&gt; forced MPI_Comm_size() synchronisation steps introduce a minimum delay
</span><br>
<span class="quotelev1">&gt; (single_link_latency * comm_size), i.e. latency scale linearly with
</span><br>
comm_size.
<br>
<span class="quotelev1">&gt; The linear algorithm doesn't wait for each exchange, so its minimum
</span><br>
latency
<br>
<span class="quotelev1">&gt; is just a single transmit/receive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which brings me to the second idea. The problem with the existing
</span><br>
<span class="quotelev1">&gt; implementation of the linear algorithm is that the irecv/isend pattern was
</span><br>
<span class="quotelev1">&gt; identical on all processes, meaning that every process starts by having to
</span><br>
wait
<br>
<span class="quotelev1">&gt; for process 0 to send to everyone and every process can finish waiting for
</span><br>
<span class="quotelev1">&gt; rank (size-1) to send to everyone.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems preferable to at least post the send/recv requests in the same
</span><br>
order
<br>
<span class="quotelev1">&gt; as the pairwise algorithm. The attached &quot;linear-alltoallv&quot; patch
</span><br>
implements
<br>
<span class="quotelev1">&gt; this and, on my test case, shows some modest 5% improvement.
</span><br>
<span class="quotelev1">&gt; I was wondering if it would address the concerns which led to the switch
</span><br>
of
<br>
<span class="quotelev1">&gt; default algorithm.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Simon
</span><br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21298/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21299.php">Matthias Jurenz: "Re: [OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<li><strong>Previous message:</strong> <a href="21297.php">Siegmar Gross: "Re: [OMPI users] I have still a problem with rankfiles in openmpi-1.6.4rc3"</a>
<li><strong>In reply to:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Reply:</strong> <a href="21418.php">Jeff Squyres (jsquyres): "Re: [OMPI users] All_to_allv algorithm patch"</a>
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
