<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Aug  5 19:59:13 2006" -->
<!-- isoreceived="20060805235913" -->
<!-- sent="Sat, 5 Aug 2006 16:59:09 -0700" -->
<!-- isosent="20060805235909" -->
<!-- name="Manav Bhatia" -->
<!-- email="manav_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error in c++ debug mode" -->
<!-- id="ADEF6B78-C371-4306-BAAA-D15961151FD6_at_u.washington.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BC033C6F-72BE-4AFF-8810-3B7B795E63CB_at_u.washington.edu" -->
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
<strong>From:</strong> Manav Bhatia (<em>manav_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-05 19:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<li><strong>In reply to:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am replying to my own posting here (see below).
<br>
<p>The -pedantic option was leading to this error. The code works fine  
<br>
without this option.
<br>
However, I am wondering if this should be an issue or not.
<br>
<p>Thanks
<br>
Manav
<br>
<p><p><p>On Aug 5, 2006, at 3:35 PM, Manav Bhatia wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am using OpenMPI 1.1 on Mac OS 10.4.7 with intel processors.  
</span><br>
<span class="quotelev1">&gt; I compiled and installed using the following options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /configure --prefix=/usr/local/openmpi --disable-mpi-f77 --disable- 
</span><br>
<span class="quotelev1">&gt; mpi-f90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything compiles and runs fine in optimized mode using mpic++,   
</span><br>
<span class="quotelev1">&gt; however, I get the following compilation error message when  
</span><br>
<span class="quotelev1">&gt; compiling in debug mode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/include/mpi.h:147: error: ISO C++ does not  
</span><br>
<span class="quotelev1">&gt; support 'long long'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using the following compiler options in optimized mode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -fno-common -O2 -felide-constructors -funroll-loops - 
</span><br>
<span class="quotelev1">&gt; fstrict-aliasing -Wdisabled-optimization
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the following in debug mode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -DDEBUG -fno-common -O0 -felide-constructors -g -ansi -pedantic -W - 
</span><br>
<span class="quotelev1">&gt; Wall -Wunused -Wpointer-arith -Wimplicit -Wformat -Wparentheses - 
</span><br>
<span class="quotelev1">&gt; Woverloaded-virtual -D_GLIBCXX_DEBUG -D_GLIBCXX_DEBUG_PEDANTIC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kindly help me understand what is happening here, and how I could  
</span><br>
<span class="quotelev1">&gt; resolve this error. Please let me know if I could help you with  
</span><br>
<span class="quotelev1">&gt; more information about this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Manav
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<li><strong>In reply to:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
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
