<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 08:17:02 2011" -->
<!-- isoreceived="20110615121702" -->
<!-- sent="Wed, 15 Jun 2011 08:16:56 -0400" -->
<!-- isosent="20110615121656" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="C969D515-093D-4452-8FE9-5865AE5046EC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3BC8DDD00649494F820C8561A7E306B319E21CDA85_at_ESESSCMS0362.eemea.ericsson.se" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open-MPI on TIPC<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 08:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9374.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Xin / Lawrence --
<br>
<p>Both of you asked about writing new BTLs within days of each other.  Good timing.  :-)
<br>
<p>Do you want to have a teleconference / webex with me in the near future?  I can orient you to the OMPI code base, give an overview of the BTL, etc. Email is great for discussing the finer details, but we've found that direct conversation is a good way to jump-start getting into the OMPI code base.  
<br>
<p>If so, ping me off list and we'll find a time that all 3 of us can get together.
<br>
<p><p><p>On Jun 15, 2011, at 6:17 AM, Xin He I wrote:
<br>
<p><span class="quotelev1">&gt; Thank your for replying. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I have read through the documents mentioned and created the component &quot;tipc&quot; and successfully built a library of it (the content is empty, of course).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So to advance the work, I will need to actually implement the library. And I notice btl.h and a &quot;template&quot; folder, which seems to demonstrate the structure of 
</span><br>
<span class="quotelev1">&gt; a typical btl component. However, I find myself not understand the code quite well. Would you please explain the structure a little bit, like what the files are for?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Like I understand that btl_template.h is to define interfaces for export, but what other files(endpoint, pro, frag) for? And why such structure? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance for your kind explanation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Xin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Probably the best docs to check would be what were referred to in that thread, and <a href="http://www.open-mpi.org/papers/ppam-2005/">http://www.open-mpi.org/papers/ppam-2005/</a> for an overview.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Read through ompi/mca/pml/pml.h.  It's the interface for the MPI &quot;engine&quot; behind OMPI's point-to-point functions, like MPI_SEND and MPI_RECV and friends.  The PML uses BTLs to perform all the transport-level operations (E.g., over a specific type of network and/or protocol).  BTLs are dumb byte-pushers; they have no concept of MPI semantics -- all the MPI semantics are handled in the upper-level PML.  BTLs are also not allowed to block; the PML will poll them when necessary.  Look though ompi/mca/btl/btl.h for a description of the BTL interface that BTLs are expected to export.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also have a look at the following wiki pages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/NewDeveloper">https://svn.open-mpi.org/trac/ompi/wiki/NewDeveloper</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a> (same principles apply to git or any other DVCS)
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics">https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 13, 2011, at 4:39 AM, Xin He I wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I just started working on adding a BTL module of TIPC (Transparent Inter-process Communication) for Open-mpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My coworker post this topic a year ago : <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7914.php">http://www.open-mpi.org/community/lists/devel/2010/05/7914.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I read the thread. I am wondering if someone could provide the documents mentioned. A few unofficial documents or explanation
</span><br>
<span class="quotelev2">&gt;&gt; of how to add a BTL module will be of great help to me :)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Xin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9374.php">Josh Hursey: "Re: [OMPI devel] RFC: Fix missing code in MPI_Abort functionality"</a>
<li><strong>Previous message:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>In reply to:</strong> <a href="9372.php">Xin He I: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="9375.php">Lawrence Stewart: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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
