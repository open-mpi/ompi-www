<?
$subject_val = "Re: [OMPI users] MPI and C++";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  5 08:22:41 2009" -->
<!-- isoreceived="20090705122241" -->
<!-- sent="Sun, 5 Jul 2009 08:22:36 -0400" -->
<!-- isosent="20090705122236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++" -->
<!-- id="9238A0AC-AB5B-4A04-831F-18EB4434383A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DE71EE10-C6E8-4F06-A9E5-7338020D8845_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI and C++<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-05 08:22:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9826.php">rahmani: "[OMPI users] build-rpm"</a>
<li><strong>In reply to:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 4, 2009, at 9:20 AM, Robert Kubrick wrote:
<br>
<p><span class="quotelev2">&gt; &gt; There is a proposal that has passed one vote so far to deprecate
</span><br>
<span class="quotelev2">&gt; &gt; the C++ bindings in MPI-2.2 (meaning: still have them, but advise
</span><br>
<span class="quotelev2">&gt; &gt; against using them).  This opens the door for potentially removing
</span><br>
<span class="quotelev2">&gt; &gt; the C++ bindings in MPI-3.0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it the reason for this to boost the 'boost' library adoption?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It is one reason, yes.
<br>
<p>Another reason is that the C++ bindings haven't really delivered what  
<br>
was expected.  They were intended to be the baseline for implementing  
<br>
higher-level C++ abstraction (such as boost.MPI).  But that didn't  
<br>
really happen -- the C++ bindings don't give enough extra  
<br>
functionality to be useful to a C++ programmer in this regard.  This  
<br>
is the key reason that the Forum is voting to deprecate the C++  
<br>
bindings: people are simply using the C bindings instead of the C++  
<br>
bindings.  That Boost.MPI is implemented on the C bindings instead of  
<br>
the C++ bindings speaks volumes to this effect.  :-)
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
<li><strong>Next message:</strong> <a href="9828.php">Luis Vitorio Cargnini: "[OMPI users] MPI and C++ - now Send and Receive of Classes and STL containers"</a>
<li><strong>Previous message:</strong> <a href="9826.php">rahmani: "[OMPI users] build-rpm"</a>
<li><strong>In reply to:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
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
