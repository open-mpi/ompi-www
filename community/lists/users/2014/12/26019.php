<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 19:29:39 2014" -->
<!-- isoreceived="20141218002939" -->
<!-- sent="Thu, 18 Dec 2014 00:29:37 +0000" -->
<!-- isosent="20141218002937" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?" -->
<!-- id="34A24AD4-70BA-4D90-BD38-CDEF25DA7018_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMJJpkUcyPaRP1QWHg5=5MevE+Chnu6y6y6-qKMBC7ifPsibZw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 19:29:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="26018.php">Ben Menadue: "[OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Returning to a super-old thread that was never finished...
<br>
<p><p>On Dec 2, 2014, at 6:49 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's not enough. They will have to check for the right version of Open MPI and then for the availability of the OMPI_&lt;something&gt; functions. That looks as having the sabe cost as checking for the MPIX_&lt;something&gt; function without looking for a specific MPI library.
</span><br>
<p>I don't understand how MPIX_&lt;something&gt; is better.
<br>
<p>Given that there is *zero* commonality between any MPI extension implemented between MPI implementations, how exactly is having the same prefix any less confusing?
<br>
<p>My point is that using an extension is inherently non-portable.  The chances for &lt;something&gt; to collide between different MPI implementations is actually quite high.  Indeed, if everyone uses MPIX_&lt;something&gt;, then there's a very real possibility that MPIX_Foo != MPIX_Foo != MPIX_Foo.  That's *horrible*.
<br>
<p>This is at least slightly more readable, and more clear that you're using an Open MPI-specific extension:
<br>
<p>-----
<br>
#if defined(OPEN_MPI) &amp;&amp; OPEN_MPI
<br>
&nbsp;&nbsp;OMPI_Foo(a,b,c);
<br>
#endif
<br>
<p>...
<br>
<p>#if defined(MPICH) &amp;&amp; MPICH
<br>
&nbsp;&nbsp;MPIX_Foo(f,e,d,c,b,a);
<br>
#endif
<br>
-----
<br>
<p>I guess my fundamental question is: why impose commonality of names where there is no commonality of function signature and behavior?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26020.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Operators for MPI handles not correctly overloaded	with Intel Fortran"</a>
<li><strong>Previous message:</strong> <a href="26018.php">Ben Menadue: "[OMPI users] Deadlock in OpenMPI 1.8.3 and PETSc 3.4.5"</a>
<li><strong>In reply to:</strong> <a href="25912.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
<li><strong>Reply:</strong> <a href="26024.php">George Bosilca: "Re: [OMPI users] [EXTERNAL] Re: How to find MPI ranks located in remote nodes?"</a>
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
