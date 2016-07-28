<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 04:47:29 2009" -->
<!-- isoreceived="20091030084729" -->
<!-- sent="Fri, 30 Oct 2009 09:47:21 +0100" -->
<!-- isosent="20091030084721" -->
<!-- name="Luigi Scorzato" -->
<!-- email="luigi.scorzato_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="96C5428B-016B-45CF-A280-20BB30166E3D_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="293A5EAA-5BFE-4237-9CCC-27841641752C_at_cisco.com" -->
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
<strong>From:</strong> Luigi Scorzato (<em>luigi.scorzato_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 04:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am very interested in this, but let me explain in more details my  
<br>
present situation and goals.
<br>
<p>I am working in a group who is testing a system under development  
<br>
which is connected with both:
<br>
- an ordinary all to all standard interface (where open-mpi is  
<br>
already available) but with limited performances and scalability.
<br>
- a custom 3D torus network, with no mpi available, custom low-level  
<br>
communication primitives (under development), from which we expect  
<br>
higher performance and scalability.
<br>
<p><p>I have two approaches in mind:
<br>
<p>1st approach.
<br>
Use the standard network interface to setup MPI. However, through a  
<br>
precompilation step, redefine a few MPI_ functions (MPI_Send()  
<br>
MPI_Recv() and others) such that they call the torus primitives, if  
<br>
the communication is between nearest neighbors, and fall back into  
<br>
standard MPI through the standard interface if not. This can only  
<br>
work if I can choose the mpi-ranks of my system in a way that  
<br>
MPI_Cart_create() will generate coordinates consistent with the  
<br>
physical topology.
<br>
***There must be a place - somewhere in the open-mpi code - where the  
<br>
cartesian coordinates are chosen, presumably as a deterministic  
<br>
function of the mpi-ranks and the dimensions (as given by  
<br>
MPI_Dims_create). I expected it to be in MPI_Cart_create(). But I  
<br>
could not find it. Can anyone help?***
<br>
This approach has obvious limitations of portability, besides  
<br>
requiring the availability of a fallback network, but it gives me  
<br>
full control of what I need to do, which is essential since my  
<br>
primary goal is to get a few important codes working in the new  
<br>
system asap.
<br>
<p><p>2nd approach.
<br>
Develop a new &quot;torus&quot; topo component, as explained by Jeff. This is  
<br>
certainly the *right* solution, but there are two problems:
<br>
- because of my poor familiarity with the open-mpi source code, I am  
<br>
not able to estimate how long it will take me.
<br>
- in a first phase, the torus primitives will not support all to all  
<br>
communications but only nearest neighbors ones. Hence, full  
<br>
portability is excluded anyway and/or a fallback network still  
<br>
needed. In other words, the topo component should be able to deal  
<br>
with two networks, and I have no idea of how much this will  
<br>
complicate things.
<br>
<p><p>I necessarily have to push the 1st approach, for the moment, but I am  
<br>
very much interested in studying the 2nd and if I see that it is  
<br>
realistic (given the limitations above) and safe, I may turn to it  
<br>
completely.
<br>
<p>thanks for your feedback and best regards, Luigi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Previous message:</strong> <a href="7051.php">David Gunter: "Re: [OMPI devel] NEWS file for 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="7043.php">Jeff Squyres: "[OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7053.php">Kenneth Lloyd: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<li><strong>Reply:</strong> <a href="7054.php">George Bosilca: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
