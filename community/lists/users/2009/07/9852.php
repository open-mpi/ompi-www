<?
$subject_val = "Re: [OMPI users] MPI and C++ (Boost)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 23:28:05 2009" -->
<!-- isoreceived="20090707032805" -->
<!-- sent="Tue, 07 Jul 2009 13:27:54 +1000" -->
<!-- isosent="20090707032754" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ (Boost)" -->
<!-- id="1246937274.5781.15.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="h2ue9k$q8o$1_at_ger.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++ (Boost)<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 23:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9856.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9856.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2009-07-06 at 23:09 -0400, John Phillips wrote:
<br>
<span class="quotelev1">&gt; Luis Vitorio Cargnini wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Your suggestion is a great and interesting idea. I only have the fear to 
</span><br>
<span class="quotelev2">&gt; &gt; get used to the Boost and could not get rid of Boost anymore, because 
</span><br>
<span class="quotelev2">&gt; &gt; one thing is sure the abstraction added by Boost is impressive, it turn 
</span><br>
<span class="quotelev2">&gt; &gt; the things much less painful like MPI to be implemented using C++, also 
</span><br>
<span class="quotelev2">&gt; &gt; the serialization inside Boost::MPI already made by Boost to use MPI is 
</span><br>
<span class="quotelev2">&gt; &gt; astonishing attractive, and of course the possibility to add new types 
</span><br>
<span class="quotelev2">&gt; &gt; like classes to be able to send objects through MPI_Send of Boost, this 
</span><br>
<span class="quotelev2">&gt; &gt; is certainly attractive, but again I do not want to get dependent of a 
</span><br>
<span class="quotelev2">&gt; &gt; library as I said, this is my major concern.
</span><br>
<span class="quotelev2">&gt; &gt; .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I'm having problems understanding your base argument here. It seems 
</span><br>
<span class="quotelev1">&gt; to be that you are afraid that Boost.MPI will make your prototype 
</span><br>
<span class="quotelev1">&gt; program so much better and easier to write that you won't want to remove 
</span><br>
<span class="quotelev1">&gt; it. Wouldn't this be exactly the reason why keeping it would be good?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I like and use Boost.MPI. I voted for inclusion during the review in 
</span><br>
<span class="quotelev1">&gt; the Boost developer community. However, what you should do in your 
</span><br>
<span class="quotelev1">&gt; program is use those tools that produce the right trade off between the 
</span><br>
<span class="quotelev1">&gt; best performance, easiest to develop correctly, and most maintainable 
</span><br>
<span class="quotelev1">&gt; program you can. If that means using Boost.MPI, then remember that 
</span><br>
<span class="quotelev1">&gt; questions about it are answered at the Boost Users mailing list. If your 
</span><br>
<span class="quotelev1">&gt; decision is that that does not include Boost.MPI then you will have some 
</span><br>
<span class="quotelev1">&gt; other challenges to face but experience shows that you can still produce 
</span><br>
<span class="quotelev1">&gt; a very high quality program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Choose as you see fit, just be sure to understand your own reasons. 
</span><br>
<span class="quotelev1">&gt; (Whether any of the rest of us on this list understand them or not.)
</span><br>
<p>I understand Luis' position completely.  He wants an MPI program, not a
<br>
program that's written in some other environment, no matter how
<br>
attractive that may be.  It's like the difference between writing a
<br>
numerical program in standard-conforming Fortran and writing it in the
<br>
latest flavour of the month interpreted language calling highly
<br>
optimised libraries behind the scenes.
<br>
<p>IF boost is attached to MPI 3 (or whatever), AND it becomes part of the
<br>
mainstream MPI implementations, THEN you can have the discussion again.
<br>
<p>Ciao
<br>
Terry
<br>
<p><pre>
-- 
Dr. Terry Frankcombe
Research School of Chemistry, Australian National University
Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9853.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>In reply to:</strong> <a href="9851.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9856.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9856.php">John Phillips: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<li><strong>Reply:</strong> <a href="9858.php">Matthieu Brucher: "Re: [OMPI users] MPI and C++ (Boost)"</a>
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
