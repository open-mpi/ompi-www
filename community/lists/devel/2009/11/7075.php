<?
$subject_val = "Re: [OMPI devel] RFC: revamp topo framework";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  3 06:17:35 2009" -->
<!-- isoreceived="20091103111735" -->
<!-- sent="Tue, 3 Nov 2009 06:17:32 -0500" -->
<!-- isosent="20091103111732" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: revamp topo framework" -->
<!-- id="5EE463C8-7640-43D7-9803-2E7C21CC18AB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CF9FE27E-ACB0-46D9-B6C3-3A80F1986067_at_gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-03 06:17:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>In reply to:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2009, at 3:40 AM, Luigi Scorzato wrote:
<br>
<p><span class="quotelev1">&gt; This defines the precise relation between ranks and coordinates. Once
</span><br>
<span class="quotelev1">&gt; I know this, I do not even need to write a topo component, because I
</span><br>
<span class="quotelev1">&gt; can define the ranks of my computing nodes in a rankfile in order
</span><br>
<span class="quotelev1">&gt; that they get the coordinates that they need physically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Fair enough.  A topo component would make it unnecessary to lay out  
<br>
your processes in a specific order because it could (hypothetically)  
<br>
understand your physical topology and re-order the ranks accordingly.
<br>
<p><span class="quotelev1">&gt; A different issue is the BTL component. This is actually where my
</span><br>
<span class="quotelev1">&gt; approach 1 and 2 differ (my previous distinction was confusing, due
</span><br>
<span class="quotelev1">&gt; to my lack of understanding of the distinction between topo and btl
</span><br>
<span class="quotelev1">&gt; components).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the 1st approach I would redefine some crucial (for my code) MPI
</span><br>
<span class="quotelev1">&gt; functions in a way that they call the low level torus primitives,
</span><br>
<span class="quotelev1">&gt; when the communication occurs between nearest neighbors, and fall
</span><br>
<span class="quotelev1">&gt; back to open-mpi functions otherwise.
</span><br>
<span class="quotelev1">&gt; The 2nd approach would be to develop our torus-btl. The fact that one
</span><br>
<span class="quotelev1">&gt; can choose a &quot;priority list of networks&quot; is definitely great and
</span><br>
<span class="quotelev1">&gt; dissipates my worries about the feasibility of the 2nd approach in my
</span><br>
<span class="quotelev1">&gt; case. The only remaining question is whether I can get familiar with
</span><br>
<span class="quotelev1">&gt; btl stuff fast enough. What do you suggest me to read in order to
</span><br>
<span class="quotelev1">&gt; learn quickly how to create a BTL component?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>The BTL is a bit more complicated than topo -- topo is actually pretty  
<br>
straightforward.  BTL is a dumb byte-pusher that is controlled by an  
<br>
upper-level framework: the Point-to-point Messaging Layer (PML).  The  
<br>
PML effects the semantics of the MPI point-to-point communications;  
<br>
PML components are the back-ends to MPI_SEND and friends.  The PML  
<br>
initializes BTLs during MPI_INIT and builds up the priority lists of  
<br>
networks, etc.  Then during MPI_SEND (etc.), the PML uses this  
<br>
information to decide what to do with messages -- fragment them over  
<br>
multiple BTLs, etc.  It then calls the BTL modules in question to  
<br>
actually do the send.  On receive, the BTLs make upcalls to the PML  
<br>
saying &quot;here's a fragment; you handle it&quot;.
<br>
<p>Hence, in this way, the BTLs are dumb byte pushers -- they simply send  
<br>
and receive to individual peers (without any MPI semantics at all) and  
<br>
give all the fragments they receive to the PML, who then effects all  
<br>
the MPI semantics.
<br>
<p>Read ompi/mca/btl/btl.h and ompi/mca/pml/pml.h for the details of the  
<br>
interfaces.
<br>
<p>Are the network primitives of your network like TCP (reads and writes  
<br>
can partially complete), or are they like Myrinet / IB (messages are  
<br>
read and written discretely, potentially also starting reads and  
<br>
writes and later receiving completion calls indicating that they  
<br>
finished)?
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
<li><strong>Next message:</strong> <a href="7076.php">Amit Sharma: "[OMPI devel] orte_rml_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="7074.php">Christian Bendele: "[OMPI devel] Adding (3rd party?) MCA modules to the build system"</a>
<li><strong>In reply to:</strong> <a href="7073.php">Luigi Scorzato: "Re: [OMPI devel] RFC: revamp topo framework"</a>
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
