<?
$subject_val = "Re: [OMPI devel] build problem, autogen";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 30 23:22:34 2009" -->
<!-- isoreceived="20090831032234" -->
<!-- sent="Sun, 30 Aug 2009 20:22:21 -0700" -->
<!-- isosent="20090831032221" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] build problem, autogen" -->
<!-- id="20090831032221.GA3233_at_tosh2egg.ca.sanfran.comcast.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4A9736A3.8090101_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] build problem, autogen<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-30 23:22:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
<li><strong>Previous message:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Aug 27, 2009 at 06:45:07PM -0700, Eugene Loh wrote:
<br>
<span class="quotelev1">&gt; Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Don't forget to also install a recent gnu libtool.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Lemme see:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-tools">http://www.open-mpi.org/faq/?category=building#build-tools</a> says: &quot;If you  
</span><br>
<span class="quotelev1">&gt; are building Open MPI from a tarball, you need a C compiler, a C++  
</span><br>
<span class="quotelev1">&gt; compiler, and make... You do not need any special version of the GNU  
</span><br>
<span class="quotelev1">&gt; &quot;Auto&quot; tools (Autoconf, Automake, Libtool).&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, that presumably means I *should* be okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
.....
<br>
<span class="quotelev3">&gt;&gt;&gt; setenv CFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv CXXFLAGS    &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FFLAGS      &quot;-O -m64 -g&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; setenv FCFLAGS     &quot;-O -m64 -g&quot;
</span><br>
.....
<br>
<p>What applications. What programming language and compiler will be used to code
<br>
and build applications?
<br>
<p>If Fortran then a Fortran compiler is needed in addition to a compatible C compiler.
<br>
If the users wish to use the Intel compiler suite then the Intel compiler suite is needed.
<br>
If the users wish to use the GCC compiler suite then the GCC compiler suite is needed.
<br>
If the users wish to use the PGI compiler suite then the PGI compiler suite is needed.
<br>
If the users wish to use the Pathscale compiler suite then the Pathscale compiler suite is needed (RIP).
<br>
If the users wish to use the Open64 compiler suite then the Open64 compiler suite is needed.
<br>
If the users wish to use the a fft lib then that lib needs to be compiled in a compatible way (see Goto)
<br>
If the users wish to explore Python with MPI .... in a compatible way.
<br>
If hardware drivers are being built a compiler compatible with the kernel is needed.
<br>
etc...
<br>
<p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6741.php">Lisandro Dalcin: "[OMPI devel] Cannot Free() a datatype created with Dup() or Create_resized()"</a>
<li><strong>Previous message:</strong> <a href="6739.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<li><strong>In reply to:</strong> <a href="6729.php">Eugene Loh: "Re: [OMPI devel] build problem, autogen"</a>
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
