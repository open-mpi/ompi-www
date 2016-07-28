<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 20 13:09:26 2012" -->
<!-- isoreceived="20120320170926" -->
<!-- sent="Tue, 20 Mar 2012 13:09:16 -0700" -->
<!-- isosent="20120320200916" -->
<!-- name="Tim Prince" -->
<!-- email="n8tm_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?" -->
<!-- id="4F68E3EC.5030607_at_aol.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="166050C7-B16C-4420-909E-ED9335BECBA2_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?<br>
<strong>From:</strong> Tim Prince (<em>n8tm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-20 16:09:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;On 03/20/2012 08:35 AM, Gunter, David O wrote:
<br>
<span class="quotelev1">&gt; I wish it were that easy.  When I go that route, I get error messages like the following when trying to compile the parallel code with Intel:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libmpi.so:  undefined reference to `__intel_sse2_strcpy'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and other messages for every single Intel-implemented standard C-function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
There was a suggestion in the snipped portion which suggested you use 
<br>
gcc/g++ together with ifort; that doesn't appear to be what you mean by 
<br>
&quot;that route.&quot; (unless you forgot to recompile your .c files by gcc) You 
<br>
have built some objects with an Intel compiler (either ifort or 
<br>
icc/icpc) which is referring to this Intel library function, but you 
<br>
apparently didn't link against the library which provides it.  If you 
<br>
use one of those Intel compilers to drive the link, and your environment 
<br>
paths are set accordingly, the Intel libraries would be linked 
<br>
automatically.
<br>
There was a single release of the compiler several years ago (well out 
<br>
of support now) where that sse2 library was omitted, although the sse3 
<br>
version was present.
<br>
<p><pre>
-- 
Tim Prince
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18815.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>Previous message:</strong> <a href="18813.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
<li><strong>In reply to:</strong> <a href="18810.php">Gunter, David O: "Re: [OMPI users] [EXTERNAL] Possible to build ompi-1.4.3 or 1.4.5 without a C++ compiler?"</a>
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
