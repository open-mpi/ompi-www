<?
$subject_val = "Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 23 08:20:52 2009" -->
<!-- isoreceived="20090723122052" -->
<!-- sent="Thu, 23 Jul 2009 08:20:43 -0400" -->
<!-- isosent="20090723122043" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Warning: declaration &amp;#145;struct MPI::Grequest_intercept_t&amp;#146; does not declare anything" -->
<!-- id="89938180-64BF-499B-B10D-D775DEA75567_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1248247074.3707.28.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] Warning: declaration &#145;struct MPI::Grequest_intercept_t&#146; does not declare anything<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-23 08:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 22, 2009, at 3:17 AM, Alexey Sokolov wrote:
<br>
<p><span class="quotelev1">&gt;         from /home/user/NetBeansProjects/Correlation_orig/ 
</span><br>
<span class="quotelev1">&gt; Correlation/Correlation.cpp:2:
</span><br>
<span class="quotelev1">&gt;         /usr/include/openmpi/1.2.4-gcc/openmpi/ompi/mpi/cxx/ 
</span><br>
<span class="quotelev1">&gt; request_inln.h:347: warning: declaration &#145;struct  
</span><br>
<span class="quotelev1">&gt; MPI::Grequest_intercept_t&#146; does not declare anything
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>That's fairly odd, but if your program is not using the C++ bindings  
<br>
for MPI generalized requests, it won't matter.
<br>
<p>But as Jody noted, updating to Open MPI v1.3.3 is a better bet,  
<br>
anyway.  Distro-default packages are great and convenient, but Open  
<br>
MPI releases at a faster pace than distros.  It's annoying, but  
<br>
sometimes necessary to upgrade (especially if you're starting new and  
<br>
have no legacy reasons to stick with older software).
<br>
<p>FWIW: we slightly changed the routine that was issuing the warning to  
<br>
you in 1.3.3.
<br>
<p>Also, be aware that the MPI Forum is likely to deprecate the C++  
<br>
bindings in MPI-2.2.  They won't go away in MPI-2.2, but they may well  
<br>
go away in MPI-3.  Open MPI (and others) will likely still include C++  
<br>
binding functionality for a long time (to keep legacy codes still  
<br>
running), but they will become relegated to a minor subsystem.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10058.php">jody: "Re: [OMPI users] Network connection check"</a>
<li><strong>Previous message:</strong> <a href="10056.php">Igor Kozin: "Re: [OMPI users] Tuned collectives: How to choose them dynamically? (-mca coll_tuned_dynamic_rules_filename dyn_rules)&quot;"</a>
<li><strong>In reply to:</strong> <a href="10032.php">Alexey Sokolov: "[OMPI users] Warning: declaration &#226;&#128;&#152;struct MPI::Grequest_intercept_t&#226;&#128;&#153; does not declare anything"</a>
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
