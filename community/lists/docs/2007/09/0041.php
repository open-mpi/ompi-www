<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 20:23:42 2007" -->
<!-- isoreceived="20070921002342" -->
<!-- sent="Thu, 20 Sep 2007 20:23:30 -0400" -->
<!-- isosent="20070921002330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] So what's the plan?" -->
<!-- id="A0A35EF0-6486-4BB3-A980-C1B81CE361A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46F2F1C3.7020303_at_sun.com" -->
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
<strong>Date:</strong> 2007-09-20 20:23:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Amit Kumar Saha: "Re: [OMPI docs] Open MPI Docs Structure - My thoughts"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 20, 2007, at 6:18 PM, Richard.Friedman_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Ok. This really helps. As you can see, my understanding about  
</span><br>
<span class="quotelev1">&gt; what's going on with Open MPI needs refining. I wasn't sure if the  
</span><br>
<span class="quotelev1">&gt; MPI world in general was moving towards Open MPI as being the one- 
</span><br>
<span class="quotelev1">&gt; and-only MPI, or if this was a parallel development (no pun intended).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I need to mull all this over some more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My hope is that the MPI Forum folks will come out with a stand- 
</span><br>
<span class="quotelev1">&gt; alone MPI spec that doesn't rely on any previous versions.
</span><br>
<p>FWIW, there is a meeting at the Euro PVM/MPI conference in about 2  
<br>
weeks to discuss the MPI forum update.  I think it may eventually  
<br>
result in a MPI 2.1 document and an MPI 1.3 document (i.e.,  
<br>
consolidate the errata documents into single documents for MPI-1 and  
<br>
MPI-2).  I doubt it will get any better than that (E.g., MPI-1 and  
<br>
MPI-2 in a single document).
<br>
<p>MPI-1 and MPI-2 are fairly distinct and separate -- so that's not  
<br>
really a huge loss.  Think of it as MPI volume 1 and MPI volume 2  
<br>
(some people are under the misconception that MPI-2 replaced MPI-1 --  
<br>
it didn't.  MPI-2 [mostly] augmented MPI-1).
<br>
<p><span class="quotelev1">&gt; I did have a meeting with our local DITA expert here at Sun, and  
</span><br>
<span class="quotelev1">&gt; I'm now re-thinking this as a possible publication environment.  
</span><br>
<span class="quotelev1">&gt; It's too early in the development of DITA for us to rely on, and  
</span><br>
<span class="quotelev1">&gt; truly usable tools are not quite there yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My next stop is to look at what the folks at OpenSolaris.org are  
</span><br>
<span class="quotelev1">&gt; using and report back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More later. Thanks.
</span><br>
<p>Sounds good -- thanks.
<br>
<p><span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ah -- I think that there are 3 main topics here:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Knowledge of the MPI spec itself (&quot;book knowledge&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 2. Knowledge of how to write MPI applications (&quot;practical knowledge&quot;)
</span><br>
<span class="quotelev2">&gt;&gt; 3. Knowledge of how to use a particular MPI implementation, such  
</span><br>
<span class="quotelev2">&gt;&gt; as Open MPI (&quot;applied knowledge&quot;)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I assumed we were only talking about #3.  Per your discussion  
</span><br>
<span class="quotelev2">&gt;&gt; above, I'm thinking that you also want to document #1 and #2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think we don't want to replicate #1.  www.mpi-forum.org is The  
</span><br>
<span class="quotelev2">&gt;&gt; Bible and there is a larger group working on an update (MPI 2.1,  
</span><br>
<span class="quotelev2">&gt;&gt; etc.).  I think that those documents should stand alone by  
</span><br>
<span class="quotelev2">&gt;&gt; themselves.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2 is usually covered by existing books and various tutorials on  
</span><br>
<span class="quotelev2">&gt;&gt; the net.  Someone cited the NCSA tutorial, which is one of my  
</span><br>
<span class="quotelev2">&gt;&gt; favorite to point newbies to, as well.  My $0.02 is that we can  
</span><br>
<span class="quotelev2">&gt;&gt; include some basic examples of MPI programming in this project,  
</span><br>
<span class="quotelev2">&gt;&gt; but the real focus should be #3: how do you use Open MPI itself.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;rchrd.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0042.php">Amit Kumar Saha: "Re: [OMPI docs] Open MPI Docs Structure - My thoughts"</a>
<li><strong>Previous message:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
<li><strong>In reply to:</strong> <a href="0040.php">Richard.Friedman_at_[hidden]: "Re: [OMPI docs] So what's the plan?"</a>
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
