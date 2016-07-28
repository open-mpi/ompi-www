<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  6 16:40:04 2006" -->
<!-- isoreceived="20060806204004" -->
<!-- sent="Sun, 6 Aug 2006 13:39:49 -0700" -->
<!-- isosent="20060806203949" -->
<!-- name="Benjamin Allan" -->
<!-- email="baallan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation error in c++ debug mode" -->
<!-- id="20060806133949.A14916_at_ca.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0FB5E10.175B1%jsquyres_at_cisco.com" -->
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
<strong>From:</strong> Benjamin Allan (<em>baallan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-06 16:39:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Previous message:</strong> <a href="1723.php">Borenstein, Bernard S: "Re: [OMPI users] users Digest, Vol 346, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Manav,
<br>
<p>You may also wish to consult the man or info pages for your
<br>
particular flavor of gcc regarding the interpretation of
<br>
-ansi. There may be more specific alternatives that check
<br>
whatever flavor of ISO compliance is important to you.
<br>
<p>Unfortunately, the mpi specification was written before
<br>
int32/int64 made it into the C specification.
<br>
<p>Ben
<br>
<p>On Sun, Aug 06, 2006 at 08:51:28AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Open MPI was not designed to handle all of those flags.  We do have an
</span><br>
<span class="quotelev1">&gt; &quot;--enable-debug&quot; mode that adds a bunch of compiler flags, but not all of
</span><br>
<span class="quotelev1">&gt; the ones that you specified.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In particular, however, -pedantic works for me (it's automatically added
</span><br>
<span class="quotelev1">&gt; with --enable-debug).  Running configure on my macbook with 10.4.7 with
</span><br>
<span class="quotelev1">&gt; --enable-debug shows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking for long long... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking size of long long... 8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking alignment of long long... 4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need more information, please send the data listed here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 8/5/06 6:35 PM, &quot;Manav Bhatia&quot; &lt;manav_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;      I am using OpenMPI 1.1 on Mac OS 10.4.7 with intel processors. I
</span><br>
<span class="quotelev2">&gt; &gt; compiled and installed using the following options:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /configure --prefix=/usr/local/openmpi --disable-mpi-f77 --disable-
</span><br>
<span class="quotelev2">&gt; &gt; mpi-f90
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Everything compiles and runs fine in optimized mode using mpic++,
</span><br>
<span class="quotelev2">&gt; &gt; however, I get the following compilation error message when compiling
</span><br>
<span class="quotelev2">&gt; &gt; in debug mode
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /usr/local/openmpi/include/mpi.h:147: error: ISO C++ does not support
</span><br>
<span class="quotelev2">&gt; &gt; 'long long'
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using the following compiler options in optimized mode
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -DNDEBUG -fno-common -O2 -felide-constructors -funroll-loops -fstrict-
</span><br>
<span class="quotelev2">&gt; &gt; aliasing -Wdisabled-optimization
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; and the following in debug mode
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -DDEBUG -fno-common -O0 -felide-constructors -g -ansi -pedantic -W -
</span><br>
<span class="quotelev2">&gt; &gt; Wall -Wunused -Wpointer-arith -Wimplicit -Wformat -Wparentheses -
</span><br>
<span class="quotelev2">&gt; &gt; Woverloaded-virtual -D_GLIBCXX_DEBUG -D_GLIBCXX_DEBUG_PEDANTIC
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kindly help me understand what is happening here, and how I could
</span><br>
<span class="quotelev2">&gt; &gt; resolve this error. Please let me know if I could help you with more
</span><br>
<span class="quotelev2">&gt; &gt; information about this.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Manav 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Server Virtualization Business Unit
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1725.php">Durga Choudhury: "[OMPI users] Proprieatary transport layer for openMPI..."</a>
<li><strong>Previous message:</strong> <a href="1723.php">Borenstein, Bernard S: "Re: [OMPI users] users Digest, Vol 346, Issue 1"</a>
<li><strong>In reply to:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
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
