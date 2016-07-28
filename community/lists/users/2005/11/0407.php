<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 14:31:24 2005" -->
<!-- isoreceived="20051129193124" -->
<!-- sent="Tue, 29 Nov 2005 14:31:17 -0500" -->
<!-- isosent="20051129193117" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] MPI_Offset and C++ interface" -->
<!-- id="b9ba8c1eee147c76e9dbce39fa5031f7_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CEECA3BE5A1E334EBB71ADD1B9ABEF820E4CFA_at_webmail.imi.nrc.ca" -->
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
<strong>Date:</strong> 2005-11-29 14:31:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0408.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 25, 2005, at 5:37 PM, Audet, Martin wrote:
<br>
<p><span class="quotelev1">&gt;  First the MPI_Offset datatype is defined as a preprocessor macro as 
</span><br>
<span class="quotelev1">&gt; follow in mpi.h:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &#160;&#160; /* Type of MPI_Offset */
</span><br>
<span class="quotelev1">&gt;  &#160;&#160; #define MPI_Offset long long
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This generate a syntax error when MPI_Offset is used in C++ for what 
</span><br>
<span class="quotelev1">&gt; Stroustrup call a value construction (e.g. type ( expr_list ) c.f. 
</span><br>
<span class="quotelev1">&gt; section 6.2 in The C++ programming language).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The obvious solution is to define MPI_Offset as a typedef as follow:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &#160;&#160; /* Type of MPI_Offset */
</span><br>
<span class="quotelev1">&gt;  &#160;&#160; typedef long long MPI_Offset;
</span><br>
<p>It's currently a #define right now for convenience in our configure 
<br>
script (we just AC_DEFINE it).  We can certainly change it over to a 
<br>
typedef; it takes a little trickery on the Autoconf side of things 
<br>
because we can't AC_SUBST in there, but there's a workaround for that.
<br>
<p>I'll put this in tonight so that it will be in tomorrow's trunk nightly 
<br>
snapshot.
<br>
<p><span class="quotelev1">&gt;  The seccond problem is related to the C++ interface: it uses direct 
</span><br>
<span class="quotelev1">&gt; C-style type cast that remove constness. Since ISO/C++ have the 
</span><br>
<span class="quotelev1">&gt; const_cast operator especially for this situation, the compiler 
</span><br>
<span class="quotelev1">&gt; generates TONS of warnings (I use to compile my code with -Wall and 
</span><br>
<span class="quotelev1">&gt; many other warning activated) and this is really annoying.
</span><br>
<p>Excellent catch.  We didn't explicitly test for this case with -Wall 
<br>
for compiling C++ codes.  I'll put this in tonight as well (be sure to 
<br>
let me know if I miss any).
<br>
<p>Many thanks!
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0408.php">Dries Kimpe: "Re: [O-MPI users] pathscale 2.1/2.3 build problem"</a>
<li><strong>Previous message:</strong> <a href="0406.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0391.php">Audet, Martin: "[O-MPI users] MPI_Offset and C++ interface"</a>
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
