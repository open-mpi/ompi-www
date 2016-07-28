<?
$subject_val = "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  6 10:00:22 2007" -->
<!-- isoreceived="20071206150022" -->
<!-- sent="Thu, 6 Dec 2007 10:00:08 -0500" -->
<!-- isosent="20071206150008" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities" -->
<!-- id="A58F244A-2AB4-402C-A3A3-D8DFBAA17D9E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C37C1EAF.B7DC%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-06 10:00:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 5, 2007, at 11:23 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Well, I think it is pretty obvious that I am a fan of a attribute  
</span><br>
<span class="quotelev2">&gt;&gt; system :)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For completeness, I will point out that we also exchange architecture
</span><br>
<span class="quotelev2">&gt;&gt; and hostname info in the modex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; True - except we should note that hostname info is only exchanged if  
</span><br>
<span class="quotelev1">&gt; someone
</span><br>
<span class="quotelev1">&gt; specifically requests it.
</span><br>
<p>Note that I am a fan of *always* exchanging the hostname information.
<br>
<p>I say this because multiple Cisco customers have told us that this is  
<br>
invaluable debugging information: when a BTL fails to send a message,  
<br>
for example, we specifically put in the error message &quot;hostA tried to  
<br>
send to hostB and failed&quot; (vs. &quot;communicator X rank Y tried to send to  
<br>
rank Z&quot;).  System administrators want/need the actual hostnames in  
<br>
order to [greatly] simplify  the process of troubleshooting if there  
<br>
is a problem in the fabric, and if so, where it is.
<br>
<p>This is especially important for very large fabrics.
<br>
<p><span class="quotelev2">&gt;&gt; Do we really need a complete node map? A far as I can tell, it looks
</span><br>
<span class="quotelev2">&gt;&gt; like the MPI layer only needs a list of local processes. So maybe it
</span><br>
<span class="quotelev2">&gt;&gt; would be better to forget about the node ids at the mpi layer and  
</span><br>
<span class="quotelev2">&gt;&gt; just
</span><br>
<span class="quotelev2">&gt;&gt; return the local procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree, though I don't think we want a parallel list of procs. We  
</span><br>
<span class="quotelev1">&gt; just need
</span><br>
<span class="quotelev1">&gt; to set the &quot;local&quot; flag in the existing ompi_proc_t structures.
</span><br>
<p>I agree that the desired end result is that we need that &quot;local&quot; flag  
<br>
set in the relevant ompi_proc_t's.
<br>
<p>As previously implied: strcmp'ing hostnames is not always sufficient  
<br>
(e.g., on the cray).  Hence, sending hostnames around is useful for  
<br>
the reasons I cited above, but it may not be sufficient for what is  
<br>
needed.
<br>
<p><span class="quotelev2">&gt;&gt; So my vote would be to leave the modex alone, but remove the node id,
</span><br>
<span class="quotelev2">&gt;&gt; and add a function to get the list of local procs. It doesn't  
</span><br>
<span class="quotelev2">&gt;&gt; matter to
</span><br>
<span class="quotelev2">&gt;&gt; me how the RTE implements that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we would need to be careful here that we don't create a need  
</span><br>
<span class="quotelev1">&gt; for
</span><br>
<span class="quotelev1">&gt; more communication. We have two functions currently in the modex:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. how to exchange the info required to populate the ompi_proc_t  
</span><br>
<span class="quotelev1">&gt; structures;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. how to identify which of those procs are &quot;local&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem with leaving the modex as it currently sits is that some
</span><br>
<span class="quotelev1">&gt; environments require a different mechanism for exchanging the  
</span><br>
<span class="quotelev1">&gt; ompi_proc_t
</span><br>
<span class="quotelev1">&gt; info. While most can use the RML, some can't. The same division of
</span><br>
<span class="quotelev1">&gt; capabilities applies to getting the &quot;local&quot; info, so it makes sense  
</span><br>
<span class="quotelev1">&gt; to me to
</span><br>
<span class="quotelev1">&gt; put the modex in a framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, we wind up with a bunch of #if's in the code to support
</span><br>
<span class="quotelev1">&gt; environments like the Cray. I believe the mca system was put in place
</span><br>
<span class="quotelev1">&gt; precisely to avoid those kind of practices, so it makes sense to me  
</span><br>
<span class="quotelev1">&gt; to take
</span><br>
<span class="quotelev1">&gt; advantage of it.
</span><br>
<p>FWIW, I'm very against putting #if's in the code for specific  
<br>
architectures / RTE's.  Such differences is what the MCA is for.
<br>
<p><span class="quotelev2">&gt;&gt; Alternatively, if we did a process attribute system we could just use
</span><br>
<span class="quotelev2">&gt;&gt; predefined attributes, and the runtime can get each process's node id
</span><br>
<span class="quotelev2">&gt;&gt; however it wants.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same problem as above, isn't it? Probably ignorance on my part, but  
</span><br>
<span class="quotelev1">&gt; it seems
</span><br>
<span class="quotelev1">&gt; to me that we simply exchange a modex framework for an attribute  
</span><br>
<span class="quotelev1">&gt; framework
</span><br>
<span class="quotelev1">&gt; (since each environment would have to get the attribute values in a
</span><br>
<span class="quotelev1">&gt; different manner) - don't we?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no problem with using attributes instead of the modex, but  
</span><br>
<span class="quotelev1">&gt; the issue
</span><br>
<span class="quotelev1">&gt; appears to be the same either way - you still need a framework to  
</span><br>
<span class="quotelev1">&gt; handle the
</span><br>
<span class="quotelev1">&gt; different methods.
</span><br>
<p>I agree -- I don't see the difference.  Tim -- can you explain?  (I  
<br>
also didn't quite understand your statement about being a fan of  
<br>
attribute systems; other than it being an ASCII system with a flat  
<br>
namespace [why is a flat namespace good, btw?], I don't really see how  
<br>
it's significantly different than the modex principle...?)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>Previous message:</strong> <a href="2743.php">Tim Prins: "[OMPI devel] opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2745.php">Shipman, Galen M.: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
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
