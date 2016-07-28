<?
$subject_val = "Re: [OMPI users] MPI and C++";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  4 08:24:38 2009" -->
<!-- isoreceived="20090704122438" -->
<!-- sent="Sat, 4 Jul 2009 08:24:33 -0400" -->
<!-- isosent="20090704122433" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI and C++" -->
<!-- id="6948BEA8-E49A-424E-83D8-564A05797BC2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4E9748.9030808_at_web.de" -->
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
<strong>Date:</strong> 2009-07-04 08:24:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
<li><strong>Previous message:</strong> <a href="9821.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<li><strong>In reply to:</strong> <a href="9819.php">Dorian Krause: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Reply:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Reply:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 3, 2009, at 7:42 PM, Dorian Krause wrote:
<br>
<p><span class="quotelev1">&gt; I would discourage you to use the C++ bindings, since (to my  
</span><br>
<span class="quotelev1">&gt; knowledge)
</span><br>
<span class="quotelev1">&gt; they might be removed from MPI 3.0 (there is such a proposal).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>There is a proposal that has passed one vote so far to deprecate the C+ 
<br>
+ bindings in MPI-2.2 (meaning: still have them, but advise against  
<br>
using them).  This opens the door for potentially removing the C++  
<br>
bindings in MPI-3.0.
<br>
<p>As has been mentioned on this thread already, the official MPI C++  
<br>
bindings are fairly simplistic -- they take advantage of a few  
<br>
language features, but not a lot.  They are effectively a 1-to-1  
<br>
mapping to the C bindings.  The Boost.MPI library added quite a few  
<br>
nice C++-friendly abstractions on top of MPI.  But if Boost is  
<br>
unattractive for you, then your best bet is probably just to use the C  
<br>
bindings.
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
<li><strong>Next message:</strong> <a href="9823.php">Jeff Squyres: "Re: [OMPI users] Network Problem?"</a>
<li><strong>Previous message:</strong> <a href="9821.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
<li><strong>In reply to:</strong> <a href="9819.php">Dorian Krause: "Re: [OMPI users] MPI and C++"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Reply:</strong> <a href="9824.php">Robert Kubrick: "Re: [OMPI users] MPI and C++"</a>
<li><strong>Reply:</strong> <a href="9825.php">Luis Vitorio Cargnini: "Re: [OMPI users] MPI and C++"</a>
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
