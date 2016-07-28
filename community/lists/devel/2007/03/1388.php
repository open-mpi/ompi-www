<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 29 21:03:44 2007" -->
<!-- isoreceived="20070330010344" -->
<!-- sent="Thu, 29 Mar 2007 21:03:19 -0400" -->
<!-- isosent="20070330010319" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] . always in the PATH" -->
<!-- id="3FB1579D-045A-405C-8CD2-A41189B7792A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.60.0703282327350.28701_at_baily.cs.ubc.ca" -->
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
<strong>Date:</strong> 2007-03-29 21:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Jeff Squyres: "Re: [OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>In reply to:</strong> <a href="1385.php">Brad Penoff: "[OMPI devel] . always in the PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 29, 2007, at 3:01 AM, Brad Penoff wrote:
<br>
<p><span class="quotelev1">&gt; [description snipped]
</span><br>
<span class="quotelev1">&gt; What should be the expected behavior?  My vague guess is that the  
</span><br>
<span class="quotelev1">&gt; $PATH
</span><br>
<span class="quotelev1">&gt; should be followed strictly (as &quot;which&quot; does) and I should be forced
</span><br>
<span class="quotelev1">&gt; to run with &quot;./testecho&quot;, if I really want this great program to  
</span><br>
<span class="quotelev1">&gt; run...
</span><br>
<span class="quotelev1">&gt; but I could be convinced otherwise.
</span><br>
<p>It actually is expected behavior, meaning that I wrote it this way on  
<br>
purpose, but not for an obvious (or particularly good) reason.  :-\
<br>
<p>The reason for it stems all the way back to LAM/MPI.  I honestly  
<br>
don't remember if we inherited LAM with this behavior (put &quot;.&quot; in  
<br>
your mpirun-PATH, so to speak) or if we added that functionality  
<br>
after we inherited LAM.  The reason that this behavior is there (and  
<br>
therefore got carried forward to Open MPI) is because even though  
<br>
obeying the $PATH is technically the Right Thing to do, it seems to  
<br>
violate the Law of Least Astonishment for many users.
<br>
<p>Specifically: many users will invoke &quot;mpirun -np 4  
<br>
something_in_the_cwd&quot; and expect it to work.
<br>
<p>Users *know* that &quot;.&quot; isn't in their path, but still expect the above  
<br>
command to work about (I have dim recollections of getting bug  
<br>
reports of people asking why that didn't work).  So I think we added  
<br>
that behavior with the following rationale:
<br>
<p>1. Explicitly doing &quot;mpirun -np 4 ./something_in_the_cwd&quot; still works  
<br>
fine.
<br>
2. Users who intentionally (or unintentionally) run &quot;mpirun -np 4  
<br>
something_in_the_cwd&quot; will also have it work.
<br>
3. We *only* do this behavior if a relative pathname is supplied to  
<br>
the executable (to include a naked filename); when absolute  
<br>
executable filenames are specified, PATH searching doesn't come into  
<br>
effect.  So absolute executable filenames also work just as they should.
<br>
4. We put &quot;.&quot; at the end of the $PATH, so if you're expecting a same- 
<br>
named executable to be run via some earlier directory in the PATH, it  
<br>
will.
<br>
<p>So yes, it's not technically the same as running in serial at the  
<br>
shell prompt.  But it seemed to astonish a few less users and  
<br>
therefore decreased our support load.  Only a handful of people over  
<br>
the years have asked the same question you have, so I think it was  
<br>
the Right Thing to do it that way, even though it's somewhat counter- 
<br>
intuitive.  :-\
<br>
<p>Hope that explains the rationale...
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
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/04/1389.php">pooja_at_[hidden]: "[OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<li><strong>Previous message:</strong> <a href="1387.php">Jeff Squyres: "Re: [OMPI devel] Hi!! need to find internal state changes"</a>
<li><strong>In reply to:</strong> <a href="1385.php">Brad Penoff: "[OMPI devel] . always in the PATH"</a>
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
