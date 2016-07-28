<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Jul 16 15:07:54 2006" -->
<!-- isoreceived="20060716190754" -->
<!-- sent="Sun, 16 Jul 2006 13:07:46 -0600" -->
<!-- isosent="20060716190746" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X" -->
<!-- id="040547E6-F0ED-4B83-9A36-525A65FF520B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="958BBF05-C54B-4B9C-A500-47654F1EE997_at_apple.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-16 15:07:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1752.php">Peter Beerli: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 14, 2006, at 10:35 AM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; I'm having trouble compiling Open MPI with Mac OS X v10.4.6 with  
</span><br>
<span class="quotelev1">&gt; the Intel C compiler. Here are some details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I upgraded to the latest versions of Xcode including GCC 4.0.1  
</span><br>
<span class="quotelev1">&gt; build 5341.
</span><br>
<span class="quotelev1">&gt; 2) I installed the latest Intel update (9.1.027) as well.
</span><br>
<span class="quotelev1">&gt; 3) Open MPI compiles fine with using GCC and IFORT.
</span><br>
<span class="quotelev1">&gt; 4) Open MPI fails with ICC and IFORT
</span><br>
<span class="quotelev1">&gt; 5) MPICH-2.1.0.3 compiles fine with ICC and IFORT (I just had to  
</span><br>
<span class="quotelev1">&gt; find out if my compiler worked...sorry!)
</span><br>
<span class="quotelev1">&gt; 6) My Open MPI confguration was using: ./configure --with-rsh=/usr/ 
</span><br>
<span class="quotelev1">&gt; bin/ssh --prefix=/usr/local/ompi11icc
</span><br>
<span class="quotelev1">&gt; 7) Should I have included my config.log?
</span><br>
<p>It looks like there are some problems with GNU libtool's support for  
<br>
the Intel compiler on OS X.  I can't tell if it's a problem with the  
<br>
Intel compiler or libtool.  A quick fix is to build Open MPI with  
<br>
static libraries rather than shared libraries.  You can do this by  
<br>
adding:
<br>
<p>&nbsp;&nbsp;&nbsp;--disable-shared --enable-static
<br>
<p>to the configure line for Open MPI (if you're building in the same  
<br>
directory where you've already run configure, you want to run make  
<br>
clean before building again).
<br>
<p>I unfortunately don't have access to a Intel Mac machines with the  
<br>
Intel compilers installed, so I can't verify this issue.  I believe  
<br>
one of the other developers does have such a configuration, so I'll  
<br>
ask him when he's available (might be a week or two -- I believe he's  
<br>
on vacation).  This issue seems to be unique to your exact  
<br>
configuration -- it doesn't happen with GCC on the Intel Mac nor on  
<br>
Linux with the Intel compilers.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1629.php">Eric Thibodeau: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>Previous message:</strong> <a href="1627.php">Brian Barrett: "Re: [OMPI users] x86_64 head with x86 diskless nodes, Node execution fails with SEGV_MAPERR"</a>
<li><strong>In reply to:</strong> <a href="1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1752.php">Peter Beerli: "Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
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
