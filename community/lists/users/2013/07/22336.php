<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 09:57:13 2013" -->
<!-- isoreceived="20130718135713" -->
<!-- sent="Thu, 18 Jul 2013 13:57:08 +0000" -->
<!-- isosent="20130718135708" -->
<!-- name="Iliev, Hristo" -->
<!-- email="Iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="5A5117ABD18DE547BB3D3FE3D0CB3188385C5F_at_MBX1.rwth-ad.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87r4ewf702.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Iliev, Hristo (<em>Iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 09:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22337.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22331.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; On Behalf Of Dave Love
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, July 18, 2013 1:22 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] knem/openmpi performance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos &lt;kapinos_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff, I would turn the question the other way around:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - are there any penalties when using KNEM?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bull should be able to comment on that -- they turn it on by default in
</span><br>
their
<br>
<span class="quotelev1">&gt; proprietary OMPI derivative -- but I doubt I can get much of a story on
</span><br>
it.
<br>
<span class="quotelev1">&gt; Mellanox ship it now too, but I don't know if their distribution defaults
</span><br>
to
<br>
<span class="quotelev1">&gt; using it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expect to use knem on hardware that's essentially the same as Mark's.
</span><br>
<span class="quotelev1">&gt; If any issues appear in production, I'll be surprised and will report
</span><br>
them.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We have a couple of Really Big Nodes (128 cores) with non-huge memory
</span><br>
<span class="quotelev2">&gt; &gt; bandwidth (because coupled of 4x standalone nodes with 4 sockets
</span><br>
<span class="quotelev2">&gt; &gt; each).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was hoping to have some results for just such a setup, but haven't been
</span><br>
<span class="quotelev1">&gt; able to spend any time on it this week.  If there are any suggestions for
</span><br>
OMPI
<br>
<span class="quotelev1">&gt; tuning on it I'd be interested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Detailed results are coming in the near future, but the benchmarks done up
<br>
to now indicate that collectives that use bulk (non-segmented) transfers,
<br>
e.g. MPI_Alltoall with large chunks, receive quite a decent speed bump with
<br>
KNEM transfers - e.g. 1.5x speed-up for 128 processes and 4 MiB data chunks
<br>
- while those that use pipelines, e.g. MPI_Bcast with large messages and
<br>
many processes, suffer big time since the default algorithm selection
<br>
heuristics are inadequate - e.g. an 8 MiB message is pipelined to 127 other
<br>
processes using segment size of 8 KiB and with KNEM it takes forever = more
<br>
than 10x longer than with the user-space double-copy method - and therefore
<br>
one has to override the heuristics by providing a proper set of dynamic
<br>
rules in a largely undocumented file format.
<br>
<p><span class="quotelev2">&gt; &gt; So cutting the bandwidth in halves on these nodes sound like Very Good
</span><br>
<span class="quotelev2">&gt; &gt; Thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But otherwise we've 1500+ nodes with 2 sockets and 24GB memory only
</span><br>
<span class="quotelev2">&gt; &gt; and we do not wanna to disturb the production on these nodes.... (and
</span><br>
<span class="quotelev2">&gt; &gt; different MPI versions for different nodes are doofy).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Why would you need that?  Our horribly heterogeneous cluster just has a
</span><br>
<span class="quotelev1">&gt; node group-specific openmpi-mca-params.conf, and SGE parallel
</span><br>
<span class="quotelev1">&gt; environments keep jobs in specific host groups with basically the same CPU
</span><br>
<span class="quotelev1">&gt; speed and interconnect.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>MPI_Alltoall(v) with large chunks seems to benefit on those machines too.
<br>
And we have a number of applications that perform lots of single-node
<br>
all-to-all operations.
<br>
<p><span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Best
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>Regards,
<br>
Hristo
<br>
<p><pre>
--
Hristo Iliev, PhD - High Performance Computing Team
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23, D 52074 Aachen (Germany)

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22336/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22337.php">Elken, Tom: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22335.php">Jeff Squyres (jsquyres): "Re: [OMPI users] max. message size"</a>
<li><strong>In reply to:</strong> <a href="22331.php">Dave Love: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22406.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
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
