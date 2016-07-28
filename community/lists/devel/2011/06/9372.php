<?
$subject_val = "Re: [OMPI devel] Open-MPI on TIPC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 06:17:43 2011" -->
<!-- isoreceived="20110615101743" -->
<!-- sent="Wed, 15 Jun 2011 12:17:35 +0200" -->
<!-- isosent="20110615101735" -->
<!-- name="Xin He I" -->
<!-- email="xin.i.he_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open-MPI on TIPC" -->
<!-- id="3BC8DDD00649494F820C8561A7E306B319E21CDA85_at_ESESSCMS0362.eemea.ericsson.se" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Open-MPI on TIPC" -->
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
<strong>From:</strong> Xin He I (<em>xin.i.he_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 06:17:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9371.php">Jeff Squyres: "Re: [OMPI devel] new btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank your for replying. 
<br>
<p>Now I have read through the documents mentioned and created the component &quot;tipc&quot; and successfully built a library of it (the content is empty, of course).
<br>
<p>So to advance the work, I will need to actually implement the library. And I notice btl.h and a &quot;template&quot; folder, which seems to demonstrate the structure of 
<br>
a typical btl component. However, I find myself not understand the code quite well. Would you please explain the structure a little bit, like what the files are for?
<br>
<p>Like I understand that btl_template.h is to define interfaces for export, but what other files(endpoint, pro, frag) for? And why such structure? 
<br>
<p>Thank you in advance for your kind explanation.
<br>
<p>Regards,
<br>
Xin
<br>
<p><p><p>________________________________________
<br>
<p>Probably the best docs to check would be what were referred to in that thread, and <a href="http://www.open-mpi.org/papers/ppam-2005/">http://www.open-mpi.org/papers/ppam-2005/</a> for an overview.
<br>
<p>Read through ompi/mca/pml/pml.h.  It's the interface for the MPI &quot;engine&quot; behind OMPI's point-to-point functions, like MPI_SEND and MPI_RECV and friends.  The PML uses BTLs to perform all the transport-level operations (E.g., over a specific type of network and/or protocol).  BTLs are dumb byte-pushers; they have no concept of MPI semantics -- all the MPI semantics are handled in the upper-level PML.  BTLs are also not allowed to block; the PML will poll them when necessary.  Look though ompi/mca/btl/btl.h for a description of the BTL interface that BTLs are expected to export.
<br>
<p>Also have a look at the following wiki pages:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/NewDeveloper">https://svn.open-mpi.org/trac/ompi/wiki/NewDeveloper</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial">https://svn.open-mpi.org/trac/ompi/wiki/UsingMercurial</a> (same principles apply to git or any other DVCS)
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen">https://svn.open-mpi.org/trac/ompi/wiki/devel/Autogen</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent">https://svn.open-mpi.org/trac/ompi/wiki/devel/CreateComponent</a>
<br>
<a href="https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics">https://svn.open-mpi.org/trac/ompi/wiki/BTLSemantics</a>
<br>
<p><p>On Jun 13, 2011, at 4:39 AM, Xin He I wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just started working on adding a BTL module of TIPC (Transparent Inter-process Communication) for Open-mpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My coworker post this topic a year ago : <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7914.php">http://www.open-mpi.org/community/lists/devel/2010/05/7914.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read the thread. I am wondering if someone could provide the documents mentioned. A few unofficial documents or explanation
</span><br>
<span class="quotelev1">&gt; of how to add a BTL module will be of great help to me :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Xin
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
<li><strong>Next message:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Previous message:</strong> <a href="9371.php">Jeff Squyres: "Re: [OMPI devel] new btl"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/05/7914.php">Nils Carlson: "[OMPI devel] Open-MPI on TIPC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
<li><strong>Reply:</strong> <a href="9373.php">Jeff Squyres: "Re: [OMPI devel] Open-MPI on TIPC"</a>
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
