<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 11:54:09 2009" -->
<!-- isoreceived="20091030155409" -->
<!-- sent="Fri, 30 Oct 2009 11:53:59 -0400" -->
<!-- isosent="20091030155359" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="3A61E753-007E-4D50-9FD7-B25291564D79_at_eecs.utk.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 11:53:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7055.php">Jeff Squyres: "[OMPI devel] 1.3.4 pending CMR"</a>
<li><strong>Previous message:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luigi,
<br>
<p>The current way Open MPI is selecting the network to be used between  
<br>
processes, match very well the first approach you proposed. As we  
<br>
support multiple networks simultaneously, a BTL (the low level network  
<br>
driver) can service only a subset of peers. All other communications  
<br>
will automatically be redirected through another BTL (which has to be  
<br>
available). In the past there were some attempts to route messages but  
<br>
this code is not in the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 30, 2009, at 04:47 , Luigi Scorzato wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am very interested in this, but let me explain in more details my  
</span><br>
<span class="quotelev1">&gt; present situation and goals.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am working in a group who is testing a system under development  
</span><br>
<span class="quotelev1">&gt; which is connected with both:
</span><br>
<span class="quotelev1">&gt; - an ordinary all to all standard interface (where open-mpi is  
</span><br>
<span class="quotelev1">&gt; already available) but with limited performances and scalability.
</span><br>
<span class="quotelev1">&gt; - a custom 3D torus network, with no mpi available, custom low-level  
</span><br>
<span class="quotelev1">&gt; communication primitives (under development), from which we expect  
</span><br>
<span class="quotelev1">&gt; higher performance and scalability.
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
<span class="quotelev1">&gt; Use the standard network interface to setup MPI. However, through a  
</span><br>
<span class="quotelev1">&gt; precompilation step, redefine a few MPI_ functions (MPI_Send()  
</span><br>
<span class="quotelev1">&gt; MPI_Recv() and others) such that they call the torus primitives, if  
</span><br>
<span class="quotelev1">&gt; the communication is between nearest neighbors, and fall back into  
</span><br>
<span class="quotelev1">&gt; standard MPI through the standard interface if not. This can only  
</span><br>
<span class="quotelev1">&gt; work if I can choose the mpi-ranks of my system in a way that  
</span><br>
<span class="quotelev1">&gt; MPI_Cart_create() will generate coordinates consistent with the  
</span><br>
<span class="quotelev1">&gt; physical topology.
</span><br>
<span class="quotelev1">&gt; ***There must be a place - somewhere in the open-mpi code - where  
</span><br>
<span class="quotelev1">&gt; the cartesian coordinates are chosen, presumably as a deterministic  
</span><br>
<span class="quotelev1">&gt; function of the mpi-ranks and the dimensions (as given by  
</span><br>
<span class="quotelev1">&gt; MPI_Dims_create). I expected it to be in MPI_Cart_create(). But I  
</span><br>
<span class="quotelev1">&gt; could not find it. Can anyone help?***
</span><br>
<span class="quotelev1">&gt; This approach has obvious limitations of portability, besides  
</span><br>
<span class="quotelev1">&gt; requiring the availability of a fallback network, but it gives me  
</span><br>
<span class="quotelev1">&gt; full control of what I need to do, which is essential since my  
</span><br>
<span class="quotelev1">&gt; primary goal is to get a few important codes working in the new  
</span><br>
<span class="quotelev1">&gt; system asap.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2nd approach.
</span><br>
<span class="quotelev1">&gt; Develop a new &quot;torus&quot; topo component, as explained by Jeff. This is  
</span><br>
<span class="quotelev1">&gt; certainly the *right* solution, but there are two problems:
</span><br>
<span class="quotelev1">&gt; - because of my poor familiarity with the open-mpi source code, I am  
</span><br>
<span class="quotelev1">&gt; not able to estimate how long it will take me.
</span><br>
<span class="quotelev1">&gt; - in a first phase, the torus primitives will not support all to all  
</span><br>
<span class="quotelev1">&gt; communications but only nearest neighbors ones. Hence, full  
</span><br>
<span class="quotelev1">&gt; portability is excluded anyway and/or a fallback network still  
</span><br>
<span class="quotelev1">&gt; needed. In other words, the topo component should be able to deal  
</span><br>
<span class="quotelev1">&gt; with two networks, and I have no idea of how much this will  
</span><br>
<span class="quotelev1">&gt; complicate things.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I necessarily have to push the 1st approach, for the moment, but I  
</span><br>
<span class="quotelev1">&gt; am very much interested in studying the 2nd and if I see that it is  
</span><br>
<span class="quotelev1">&gt; realistic (given the limitations above) and safe, I may turn to it  
</span><br>
<span class="quotelev1">&gt; completely.
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
<li><strong>Next message:</strong> <a href="7055.php">Jeff Squyres: "[OMPI devel] 1.3.4 pending CMR"</a>
<li><strong>Previous message:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>In reply to:</strong> <a href="7052.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7057.php">Jeff Squyres: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
