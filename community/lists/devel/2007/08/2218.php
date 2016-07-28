<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 24 20:20:13 2007" -->
<!-- isoreceived="20070825002013" -->
<!-- sent="Fri, 24 Aug 2007 20:19:57 -0400" -->
<!-- isosent="20070825001957" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More memory troubles with vapi" -->
<!-- id="62DF75D1-CDDB-469E-87C5-DFBA3EAD49EA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="98a233180708241318y3f3063d7gb3a25afc2c0dc4f4_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-24 20:19:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<li><strong>In reply to:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2007, at 4:18 PM, Josh Aune wrote:
<br>
<p><span class="quotelev1">&gt; We are using open-mpi on several 1000+ node clusters.  We received
</span><br>
<span class="quotelev1">&gt; several new clusters using the Infiniserve 3.X software stack recently
</span><br>
<span class="quotelev1">&gt; and are having several problems with the vapi btl (yes, I know, it is
</span><br>
<span class="quotelev1">&gt; very very old and shouldn't be used.  I couldn't agree with you more
</span><br>
<span class="quotelev1">&gt; but those are my marching orders).
</span><br>
<p>Thankfully, Infiniserve is not within my prevue.  But -- FWIW -- you  
<br>
should be using OFED.  :-)  (I know you know)
<br>
<p><span class="quotelev1">&gt; I have a new application that is running into swap for an unknown
</span><br>
<span class="quotelev1">&gt; reason.  If I run and force it to use the tcp btl I don't seem to run
</span><br>
<span class="quotelev1">&gt; into swap (the job just takes a very very long time).  I have tried
</span><br>
<span class="quotelev1">&gt; restricting the size of the free lists, forcing to use send mode, and
</span><br>
<span class="quotelev1">&gt; use an open-mpi compiled w/ no memory manager but nothing seems to
</span><br>
<span class="quotelev1">&gt; help.  I've profiled with valgrind --tool=massif and the memtrace
</span><br>
<span class="quotelev1">&gt; capabilities of ptmalloc but I don't have any smoking guns yet.  It is
</span><br>
<span class="quotelev1">&gt; a fortran app an I don't know anything about debugging fortran memory
</span><br>
<span class="quotelev1">&gt; problems, can someone point me in the proper direction?
</span><br>
<p>Hmm.  If you compile Open MPI with no memory manager, then it  
<br>
*shouldn't* be Open MPI's fault (unless there's a leak in the mvapi  
<br>
BTL...?).  Verify that you did not actually compile Open MPI with a  
<br>
memory manager by running &quot;ompi_info| grep ptmalloc2&quot; -- it should  
<br>
come up empty.
<br>
<p>The fact that you can run this under TCP without memory leaking would  
<br>
seem to indicate that it's not the app that's leaking memory, but  
<br>
rather either the MPI or the network stack.
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
<li><strong>Next message:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Previous message:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<li><strong>In reply to:</strong> <a href="2217.php">Josh Aune: "[OMPI devel] More memory troubles with vapi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
<li><strong>Reply:</strong> <a href="2219.php">Josh Aune: "Re: [OMPI devel] More memory troubles with vapi"</a>
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
