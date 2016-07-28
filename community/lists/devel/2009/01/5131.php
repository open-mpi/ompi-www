<?
$subject_val = "Re: [OMPI devel] RFC: Component-izing MPI_Op";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 11:58:46 2009" -->
<!-- isoreceived="20090113165846" -->
<!-- sent="Tue, 13 Jan 2009 11:58:39 -0500" -->
<!-- isosent="20090113165839" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Component-izing MPI_Op" -->
<!-- id="B3FA840D-F61D-400A-A0C4-FC613954F187_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="810EE758-FDA7-488A-8DA3-80C53443C83D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Component-izing MPI_Op<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 11:58:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5132.php">Bogdan Costescu: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On the call today, no one had any objections to bringing this stuff to  
<br>
the trunk.  v1.2.9 and v1.3.0 releases have a higher priority, so I'll  
<br>
bring this stuff over to the trunk when those two releases are done  
<br>
(hopefully tomorrow!).
<br>
<p><p>On Jan 10, 2009, at 2:21 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I've finished a first cut of this stuff.  I'll provide an  
</span><br>
<span class="quotelev1">&gt; overview on next Tuesday's teleconf.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't &quot;fix&quot; MPI_REPLACE yet (it does seem to be a different  
</span><br>
<span class="quotelev1">&gt; issue; I mainly extended what was already there) but I've done most  
</span><br>
<span class="quotelev1">&gt; of the rest of the work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Created a new op framework that was inspired by the coll framework.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Similar to the &quot;coll&quot; framework, the op framework supports:
</span><br>
<span class="quotelev1">&gt;    - Mixing-n-matching op modules on a single MPI_Op
</span><br>
<span class="quotelev1">&gt;    - &quot;Stacking&quot; op modules (e.g., choose at invocation time whether  
</span><br>
<span class="quotelev1">&gt; a module will use its back-end hardware, or whether it should fall  
</span><br>
<span class="quotelev1">&gt; back to a different module's implementation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Unlike the coll framework, all the &quot;basic&quot; functions are in the op  
</span><br>
<span class="quotelev1">&gt; base and are pre-loaded onto the MPI_Op during selection as the 0th  
</span><br>
<span class="quotelev1">&gt; priority (so you can stack them naturally -- base functions even  
</span><br>
<span class="quotelev1">&gt; have a [bogus] module, so you can RETAIN them just like any other  
</span><br>
<span class="quotelev1">&gt; module) -- there's no &quot;basic&quot; component or set of modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Created an &quot;example&quot; op component that has a few sample routines  
</span><br>
<span class="quotelev1">&gt; and shows a bunch of different OMPI concepts, both in the op  
</span><br>
<span class="quotelev1">&gt; framework and utilizing other parts of the OMPI code base (hopefully  
</span><br>
<span class="quotelev1">&gt; helpful to newbie OMPI component authors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==&gt; NOTE: The example op is currently fairly chatty with  
</span><br>
<span class="quotelev1">&gt; opal_output() so that you can see that it is being used.   
</span><br>
<span class="quotelev1">&gt; I'll .ompi_ignore it (or something) when it is brought into the  
</span><br>
<span class="quotelev1">&gt; trunk so that the example component isn't active in production runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Created wiki pages describing autogen, how to create a framework,  
</span><br>
<span class="quotelev1">&gt; and how to create a component (hopefully helpful to newbie OMPI  
</span><br>
<span class="quotelev1">&gt; component authors).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =======================
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that the second phase of this work will be the various  
</span><br>
<span class="quotelev1">&gt; hardware providers providing their components to Open MPI (e.g.,  
</span><br>
<span class="quotelev1">&gt; cuda, opencl, IBM Cell, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If this all proves worthwhile, I think a third phase of this work  
</span><br>
<span class="quotelev1">&gt; could be optimizing the top-level reduction calls based on what  
</span><br>
<span class="quotelev1">&gt; nodes have hardware acceleration and which do not (e.g., if  
</span><br>
<span class="quotelev1">&gt; accelerators are not available in all nodes, that may changes the  
</span><br>
<span class="quotelev1">&gt; collection/reduction communication pattern).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 5, 2009, at 10:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 5, 2009, at 10:09 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think this sounds reasonable, if (and only if) MPI_Accumulate is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; properly handled.  The interface for calling the op functions was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; broken in some fairly obvious way for accumulate when I was  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; writing the one-sided code.  I think I had to call some supposedly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; internal bits of the interface to make accumulate work.  I can't  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; remember what they are now, but I do remember it being a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Coolio; I'll look into it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Of course, unless it makes mpi_allreduce on one double-sized  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; floating point number using sum go faster, I'm not entirely sure a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; change is helpful ;).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From my (admittedly limited) understanding, since there are memory  
</span><br>
<span class="quotelev2">&gt;&gt; registration and/or copy in/out issues with GPUs, the operation has  
</span><br>
<span class="quotelev2">&gt;&gt; to be &quot;big enough&quot; and/or already located in GPU memory for the GPU  
</span><br>
<span class="quotelev2">&gt;&gt; to outperform the CPU.  It is my assumption that the component-ized  
</span><br>
<span class="quotelev2">&gt;&gt; CUDA/OpenCL/whatever code will need to make a decision whether it  
</span><br>
<span class="quotelev2">&gt;&gt; should perform the operation at run-time or pass it back to a  
</span><br>
<span class="quotelev2">&gt;&gt; fallback [probably CPU-based] implementation, analogous to how  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;tuned&quot; picks the right coll algorithm.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm told that there's some researchy middleware working on exactly  
</span><br>
<span class="quotelev2">&gt;&gt; this kind of problem (determining if a given operation is suitable  
</span><br>
<span class="quotelev2">&gt;&gt; to run on the GPU or the main CPU).  So in a best-case scenario,  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI can just link against and use that middleware rather than  
</span><br>
<span class="quotelev2">&gt;&gt; implementing all the logic in the component itself.  We'll see how  
</span><br>
<span class="quotelev2">&gt;&gt; it plays out.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My goal is to give these guys the infrastructure that they need in  
</span><br>
<span class="quotelev2">&gt;&gt; OMPI to play with these kind of concepts and see what they can  
</span><br>
<span class="quotelev2">&gt;&gt; accomplish in terms of real performance.  FWIW: a few SC08  
</span><br>
<span class="quotelev2">&gt;&gt; attendees thought that they could avoid writing much CUDA/CL/ 
</span><br>
<span class="quotelev2">&gt;&gt; whatever code if MPI_REDUCE did the work for them (particularly if  
</span><br>
<span class="quotelev2">&gt;&gt; paired with the proposed MPI_REDUCE_LOCAL function, <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24</a>) 
</span><br>
<span class="quotelev2">&gt;&gt; .  [shrug]  We'll see!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5132.php">Bogdan Costescu: "Re: [OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5130.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5111.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
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
