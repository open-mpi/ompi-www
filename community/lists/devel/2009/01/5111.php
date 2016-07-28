<?
$subject_val = "Re: [OMPI devel] RFC: Component-izing MPI_Op";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 10 14:21:11 2009" -->
<!-- isoreceived="20090110192111" -->
<!-- sent="Sat, 10 Jan 2009 14:21:04 -0500" -->
<!-- isosent="20090110192104" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Component-izing MPI_Op" -->
<!-- id="810EE758-FDA7-488A-8DA3-80C53443C83D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="84B0C67E-CD7F-4AEC-A7D9-53F47905ECD5_at_cisco.com" -->
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
<strong>Date:</strong> 2009-01-10 14:21:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5110.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5131.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5131.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I've finished a first cut of this stuff.  I'll provide an  
<br>
overview on next Tuesday's teleconf.
<br>
<p>I didn't &quot;fix&quot; MPI_REPLACE yet (it does seem to be a different issue;  
<br>
I mainly extended what was already there) but I've done most of the  
<br>
rest of the work:
<br>
<p>- Created a new op framework that was inspired by the coll framework.
<br>
<p>- Similar to the &quot;coll&quot; framework, the op framework supports:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- Mixing-n-matching op modules on a single MPI_Op
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- &quot;Stacking&quot; op modules (e.g., choose at invocation time whether  
<br>
a module will use its back-end hardware, or whether it should fall  
<br>
back to a different module's implementation)
<br>
<p>- Unlike the coll framework, all the &quot;basic&quot; functions are in the op  
<br>
base and are pre-loaded onto the MPI_Op during selection as the 0th  
<br>
priority (so you can stack them naturally -- base functions even have  
<br>
a [bogus] module, so you can RETAIN them just like any other module)  
<br>
-- there's no &quot;basic&quot; component or set of modules.
<br>
<p>- Created an &quot;example&quot; op component that has a few sample routines and  
<br>
shows a bunch of different OMPI concepts, both in the op framework and  
<br>
utilizing other parts of the OMPI code base (hopefully helpful to  
<br>
newbie OMPI component authors).
<br>
<p>==&gt; NOTE: The example op is currently fairly chatty with opal_output()  
<br>
so that you can see that it is being used.  I'll .ompi_ignore it (or  
<br>
something) when it is brought into the trunk so that the example  
<br>
component isn't active in production runs.
<br>
<p>- Created wiki pages describing autogen, how to create a framework,  
<br>
and how to create a component (hopefully helpful to newbie OMPI  
<br>
component authors).
<br>
<p>=======================
<br>
<p>I think that the second phase of this work will be the various  
<br>
hardware providers providing their components to Open MPI (e.g., cuda,  
<br>
opencl, IBM Cell, ...etc.).
<br>
<p>If this all proves worthwhile, I think a third phase of this work  
<br>
could be optimizing the top-level reduction calls based on what nodes  
<br>
have hardware acceleration and which do not (e.g., if accelerators are  
<br>
not available in all nodes, that may changes the collection/reduction  
<br>
communication pattern).
<br>
<p><p><p>On Jan 5, 2009, at 10:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jan 5, 2009, at 10:09 AM, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think this sounds reasonable, if (and only if) MPI_Accumulate is  
</span><br>
<span class="quotelev2">&gt;&gt; properly handled.  The interface for calling the op functions was  
</span><br>
<span class="quotelev2">&gt;&gt; broken in some fairly obvious way for accumulate when I was writing  
</span><br>
<span class="quotelev2">&gt;&gt; the one-sided code.  I think I had to call some supposedly internal  
</span><br>
<span class="quotelev2">&gt;&gt; bits of the interface to make accumulate work.  I can't remember  
</span><br>
<span class="quotelev2">&gt;&gt; what they are now, but I do remember it being a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Coolio; I'll look into it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, unless it makes mpi_allreduce on one double-sized  
</span><br>
<span class="quotelev2">&gt;&gt; floating point number using sum go faster, I'm not entirely sure a  
</span><br>
<span class="quotelev2">&gt;&gt; change is helpful ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my (admittedly limited) understanding, since there are memory  
</span><br>
<span class="quotelev1">&gt; registration and/or copy in/out issues with GPUs, the operation has  
</span><br>
<span class="quotelev1">&gt; to be &quot;big enough&quot; and/or already located in GPU memory for the GPU  
</span><br>
<span class="quotelev1">&gt; to outperform the CPU.  It is my assumption that the component-ized  
</span><br>
<span class="quotelev1">&gt; CUDA/OpenCL/whatever code will need to make a decision whether it  
</span><br>
<span class="quotelev1">&gt; should perform the operation at run-time or pass it back to a  
</span><br>
<span class="quotelev1">&gt; fallback [probably CPU-based] implementation, analogous to how  
</span><br>
<span class="quotelev1">&gt; &quot;tuned&quot; picks the right coll algorithm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm told that there's some researchy middleware working on exactly  
</span><br>
<span class="quotelev1">&gt; this kind of problem (determining if a given operation is suitable  
</span><br>
<span class="quotelev1">&gt; to run on the GPU or the main CPU).  So in a best-case scenario,  
</span><br>
<span class="quotelev1">&gt; OMPI can just link against and use that middleware rather than  
</span><br>
<span class="quotelev1">&gt; implementing all the logic in the component itself.  We'll see how  
</span><br>
<span class="quotelev1">&gt; it plays out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My goal is to give these guys the infrastructure that they need in  
</span><br>
<span class="quotelev1">&gt; OMPI to play with these kind of concepts and see what they can  
</span><br>
<span class="quotelev1">&gt; accomplish in terms of real performance.  FWIW: a few SC08 attendees  
</span><br>
<span class="quotelev1">&gt; thought that they could avoid writing much CUDA/CL/whatever code if  
</span><br>
<span class="quotelev1">&gt; MPI_REDUCE did the work for them (particularly if paired with the  
</span><br>
<span class="quotelev1">&gt; proposed MPI_REDUCE_LOCAL function, <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/24</a>) 
</span><br>
<span class="quotelev1">&gt; .  [shrug]  We'll see!
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
<li><strong>Next message:</strong> <a href="5112.php">Lenny Verkhovsky: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>Previous message:</strong> <a href="5110.php">Tim Mattox: "[OMPI devel] Open MPI v1.3rc3 has been posted"</a>
<li><strong>In reply to:</strong> <a href="5093.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5131.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
<li><strong>Reply:</strong> <a href="5131.php">Jeff Squyres: "Re: [OMPI devel] RFC: Component-izing MPI_Op"</a>
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
