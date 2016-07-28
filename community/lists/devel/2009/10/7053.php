<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 09:48:48 2009" -->
<!-- isoreceived="20091030134848" -->
<!-- sent="Fri, 30 Oct 2009 07:48:44 -0600" -->
<!-- isosent="20091030134844" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="7D9AD654DAA74550A987355E76CC9900_at_wattp4" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="96C5428B-016B-45CF-A280-20BB30166E3D_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: revamp topo framework<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 09:48:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luigi,
<br>
<p>I tried a configuration on a small test cluster similar to your Approach 1,
<br>
with interesting (promising) results. While the topology is deterministic, I
<br>
found the actual performance is under-determined in practice - depending on
<br>
the symmetry and partitioning of the tasks and the data.  
<br>
<p>Your second approach is understandable, as a generalized (sub-optimal)
<br>
solution, but I ended up abandoning hard-coded/hard-wired topologies in
<br>
favor of a more dynamical approach in order to improve efficiency and
<br>
effectiveness of our compute fabric. This approach is dependent upon a
<br>
context of several factors, such as concurrent schedules, priorities,
<br>
existing configurations, specific task and data partitions, etc.  I'm afraid
<br>
I cannot be more specific at this time.
<br>
<p>There are myriad resulting topologies - some patterns already identified,
<br>
some almost indescribable (at this time). The determining factor is usually
<br>
the structure of the existing codes and particular data reduction/partition
<br>
of the job. I found the hardware and topologies closely coupled with the
<br>
existing software and data, which provides the constraint.
<br>
<p>Ken
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Luigi Scorzato
</span><br>
<span class="quotelev1">&gt; Sent: Friday, October 30, 2009 2:47 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: revamp topo framework
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am very interested in this, but let me explain in more 
</span><br>
<span class="quotelev1">&gt; details my present situation and goals.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working in a group who is testing a system under 
</span><br>
<span class="quotelev1">&gt; development which is connected with both:
</span><br>
<span class="quotelev1">&gt; - an ordinary all to all standard interface (where open-mpi 
</span><br>
<span class="quotelev1">&gt; is already available) but with limited performances and scalability.
</span><br>
<span class="quotelev1">&gt; - a custom 3D torus network, with no mpi available, custom 
</span><br>
<span class="quotelev1">&gt; low-level communication primitives (under development), from 
</span><br>
<span class="quotelev1">&gt; which we expect higher performance and scalability.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two approaches in mind:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1st approach.
</span><br>
<span class="quotelev1">&gt; Use the standard network interface to setup MPI. However, 
</span><br>
<span class="quotelev1">&gt; through a precompilation step, redefine a few MPI_ functions 
</span><br>
<span class="quotelev1">&gt; (MPI_Send()
</span><br>
<span class="quotelev1">&gt; MPI_Recv() and others) such that they call the torus 
</span><br>
<span class="quotelev1">&gt; primitives, if the communication is between nearest 
</span><br>
<span class="quotelev1">&gt; neighbors, and fall back into standard MPI through the 
</span><br>
<span class="quotelev1">&gt; standard interface if not. This can only work if I can choose 
</span><br>
<span class="quotelev1">&gt; the mpi-ranks of my system in a way that
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create() will generate coordinates consistent with 
</span><br>
<span class="quotelev1">&gt; the physical topology.
</span><br>
<span class="quotelev1">&gt; ***There must be a place - somewhere in the open-mpi code - 
</span><br>
<span class="quotelev1">&gt; where the cartesian coordinates are chosen, presumably as a 
</span><br>
<span class="quotelev1">&gt; deterministic function of the mpi-ranks and the dimensions 
</span><br>
<span class="quotelev1">&gt; (as given by MPI_Dims_create). I expected it to be in 
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create(). But I could not find it. Can anyone 
</span><br>
<span class="quotelev1">&gt; help?*** This approach has obvious limitations of 
</span><br>
<span class="quotelev1">&gt; portability, besides requiring the availability of a fallback 
</span><br>
<span class="quotelev1">&gt; network, but it gives me full control of what I need to do, 
</span><br>
<span class="quotelev1">&gt; which is essential since my primary goal is to get a few 
</span><br>
<span class="quotelev1">&gt; important codes working in the new system asap.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2nd approach.
</span><br>
<span class="quotelev1">&gt; Develop a new &quot;torus&quot; topo component, as explained by Jeff. 
</span><br>
<span class="quotelev1">&gt; This is certainly the *right* solution, but there are two problems:
</span><br>
<span class="quotelev1">&gt; - because of my poor familiarity with the open-mpi source 
</span><br>
<span class="quotelev1">&gt; code, I am not able to estimate how long it will take me.
</span><br>
<span class="quotelev1">&gt; - in a first phase, the torus primitives will not support all 
</span><br>
<span class="quotelev1">&gt; to all communications but only nearest neighbors ones. Hence, 
</span><br>
<span class="quotelev1">&gt; full portability is excluded anyway and/or a fallback network 
</span><br>
<span class="quotelev1">&gt; still needed. In other words, the topo component should be 
</span><br>
<span class="quotelev1">&gt; able to deal with two networks, and I have no idea of how 
</span><br>
<span class="quotelev1">&gt; much this will complicate things.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I necessarily have to push the 1st approach, for the moment, 
</span><br>
<span class="quotelev1">&gt; but I am very much interested in studying the 2nd and if I 
</span><br>
<span class="quotelev1">&gt; see that it is realistic (given the limitations above) and 
</span><br>
<span class="quotelev1">&gt; safe, I may turn to it completely.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for your feedback and best regards, Luigi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
