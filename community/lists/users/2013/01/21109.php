<?
$subject_val = "Re: [OMPI users] some comments on derived datatypes in mpiJava";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 11 11:05:10 2013" -->
<!-- isoreceived="20130111160510" -->
<!-- sent="Fri, 11 Jan 2013 16:05:03 +0000" -->
<!-- isosent="20130111160503" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] some comments on derived datatypes in mpiJava" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC380B3359_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201301081456.r08EuthD018199_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] some comments on derived datatypes in mpiJava<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-11 11:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 8, 2013, at 9:56 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff suggested some possible solutions in the last
</span><br>
<span class="quotelev1">&gt; weeks which I will now discuss.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Simulate a 2-dimensional (m,n)-array in one 1-dimensional array
</span><br>
<span class="quotelev1">&gt;   with m*n elements and perform all necessary index computations
</span><br>
<span class="quotelev1">&gt;   yourself. This solution works and with the new method
</span><br>
<span class="quotelev1">&gt;   Datatype.Resized you can scatter all columns of a matrix to
</span><br>
<span class="quotelev1">&gt;   different processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   The problem is that you don't use a multi-dimensional array
</span><br>
<span class="quotelev1">&gt;   from Java. I'm not a Java expert, but I suppose that it even
</span><br>
<span class="quotelev1">&gt;   contradicts the philosophy of object-oriented programming.
</span><br>
<span class="quotelev1">&gt;   In my opinion this solution will also add new sources of errors
</span><br>
<span class="quotelev1">&gt;   if you must implement complicated algorithms (bugs with index
</span><br>
<span class="quotelev1">&gt;   computations, unreadable source code, etc.).
</span><br>
<p>+1
<br>
<p><span class="quotelev1">&gt; 2) Implement a wrapper class in Java so that you don't have to deal
</span><br>
<span class="quotelev1">&gt;   with index computations in your normal program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   As far as I know, it would have been necessary to use set- and
</span><br>
<span class="quotelev1">&gt;   get-methods to write and read matrix elements in that case,
</span><br>
<span class="quotelev1">&gt;   because Java doesn't allow operator overloading (I'm not even
</span><br>
<span class="quotelev1">&gt;   sure, if it would have been possible to overload &quot;[][]&quot; in the
</span><br>
<span class="quotelev1">&gt;   case that overloading would have been supported).
</span><br>
<p>Oh!  Bummer; I didn't realize you couldn't overload [] in Java.
<br>
<p><span class="quotelev1">&gt; 3) Implement a wrapper class which possibly needs to be written in C.
</span><br>
<p>Some other options I just sent to you in an off-list mail (sorry, I'm still slogging through all my vacation-accumulated mail...):
<br>
<p>4. Have the Java language gods make a standardized way to pass buffers to C (like Fortran did for MPI-3).  That would obviate the problem.
<br>
<p>5. Make the Java MPI interface just magically do the Right Thing to make MPI_Type_vector &quot;just work&quot; behind the scenes.  I'm not 100% sure this is possible, but perhaps someone could figure out a way.
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
<li><strong>Next message:</strong> <a href="21110.php">Gus Correa: "Re: [OMPI users] Initializing OMPI with invoking the array constructor on Fortran derived types causes the executable to crash"</a>
<li><strong>Previous message:</strong> <a href="21108.php">Jeff Squyres (jsquyres): "Re: [OMPI users] [Open MPI] #3351: JAVA scatter error"</a>
<li><strong>In reply to:</strong> <a href="21089.php">Siegmar Gross: "[OMPI users] some comments on derived datatypes in mpiJava"</a>
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
