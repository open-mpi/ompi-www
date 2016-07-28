<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  6 08:51:51 2006" -->
<!-- isoreceived="20060806125151" -->
<!-- sent="Sun, 06 Aug 2006 08:51:28 -0400" -->
<!-- isosent="20060806125128" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error in c++ debug mode" -->
<!-- id="C0FB5E10.175B1%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-06 08:51:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1723.php">Borenstein, Bernard S: "Re: [OMPI users] users Digest, Vol 346, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>In reply to:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI was not designed to handle all of those flags.  We do have an
<br>
&quot;--enable-debug&quot; mode that adds a bunch of compiler flags, but not all of
<br>
the ones that you specified.
<br>
<p>In particular, however, -pedantic works for me (it's automatically added
<br>
with --enable-debug).  Running configure on my macbook with 10.4.7 with
<br>
--enable-debug shows:
<br>
<p>checking for long long... yes
<br>
<p>and
<br>
<p>checking size of long long... 8
<br>
<p>and
<br>
<p>checking alignment of long long... 4
<br>
<p>If you need more information, please send the data listed here:
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><p>On 8/5/06 6:35 PM, &quot;Manav Bhatia&quot; &lt;manav_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I am using OpenMPI 1.1 on Mac OS 10.4.7 with intel processors. I
</span><br>
<span class="quotelev1">&gt; compiled and installed using the following options:
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
<span class="quotelev1">&gt; however, I get the following compilation error message when compiling
</span><br>
<span class="quotelev1">&gt; in debug mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/include/mpi.h:147: error: ISO C++ does not support
</span><br>
<span class="quotelev1">&gt; 'long long'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the following compiler options in optimized mode
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -DNDEBUG -fno-common -O2 -felide-constructors -funroll-loops -fstrict-
</span><br>
<span class="quotelev1">&gt; aliasing -Wdisabled-optimization
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
<span class="quotelev1">&gt; resolve this error. Please let me know if I could help you with more
</span><br>
<span class="quotelev1">&gt; information about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Manav 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1723.php">Borenstein, Bernard S: "Re: [OMPI users] users Digest, Vol 346, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="1721.php">Manav Bhatia: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>In reply to:</strong> <a href="1720.php">Manav Bhatia: "[OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Reply:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
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
