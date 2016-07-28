<?
$subject_val = "Re: [OMPI users] MPI and C++ (Boost)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 00:58:57 2009" -->
<!-- isoreceived="20090710045857" -->
<!-- sent="Fri, 10 Jul 2009 00:58:36 -0400" -->
<!-- isosent="20090710045836" -->
<!-- name="John Phillips" -->
<!-- email="phillips_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++ (Boost)" -->
<!-- id="h36hq0$j78$1_at_ger.gmane.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA99BDCD-3B4D-4026-9EAA-BD8958F82AF3_at_gmail.com" -->
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
<strong>From:</strong> John Phillips (<em>phillips_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 00:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>Previous message:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9857.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Luis Vitorio Cargnini wrote:
<br>
<span class="quotelev1">&gt; Ok, after all the considerations, I'll try Boost, today, make some 
</span><br>
<span class="quotelev1">&gt; experiments and see if I can use it or if I'll avoid it yet.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But as said by Raimond I think, the problem is been dependent of a 
</span><br>
<span class="quotelev1">&gt; rich-incredible-amazing-toolset .... but still implementing only MPI-1, 
</span><br>
<span class="quotelev1">&gt; and do not implement all the MPI functions main drawbacks of boost, but 
</span><br>
<span class="quotelev1">&gt; the set of functions implemented do not compromise the functionality, i 
</span><br>
<span class="quotelev1">&gt; don't know about the MPI-1, MPI-2 and future MPI-3 specifications, how 
</span><br>
<span class="quotelev1">&gt; this specifications implementations affect boost and the developer using 
</span><br>
<span class="quotelev1">&gt; Boost, with OpenMPI of course.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Continuing if something change in the boost how can I guarantee it won't 
</span><br>
<span class="quotelev1">&gt; affect my code in the future ? It is impossible.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway I'll test it today and without it and choose my direction, thanks 
</span><br>
<span class="quotelev1">&gt; for all the replies, suggestions, solutions, that you all pointed to me 
</span><br>
<span class="quotelev1">&gt; I really appreciate all your help and comments about boost or not my code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks and Regards.
</span><br>
<span class="quotelev1">&gt; Vitorio.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p>&nbsp;&nbsp;&nbsp;Vitorio,
<br>
<p>&nbsp;&nbsp;&nbsp;If there is some MPI capability that is not currently provided in 
<br>
Boost.MPI, then just call it the normal MPI way. Using Boost.MPI doesn't 
<br>
interfere with any use of the C bindings, even in the same function.
<br>
<p>&nbsp;&nbsp;&nbsp;As for future changes, if something happens to a boost library that 
<br>
you don't like, just keep using the older version. Past releases of 
<br>
boost remain available after new releases arrive.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;John
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9905.php">Lisandro Dalcin: "Re: [OMPI users] Using openmpi within python and crashes"</a>
<li><strong>Previous message:</strong> <a href="9903.php">Yin Feng: "[OMPI users] Problems in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="9869.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++ (Boost)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9857.php">Raymond Wan: "Re: [OMPI users] MPI and C++ (Boost)"</a>
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
