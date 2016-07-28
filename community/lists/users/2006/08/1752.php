<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 17 11:09:37 2006" -->
<!-- isoreceived="20060817150937" -->
<!-- sent="Thu, 17 Aug 2006 11:09:08 -0400" -->
<!-- isosent="20060817150908" -->
<!-- name="Peter Beerli" -->
<!-- email="beerli_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X" -->
<!-- id="327B7DC5-EB8A-4437-B1E0-8C69120CE197_at_scs.fsu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.1564.1155775677.4352.users_at_open-mpi.org" -->
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
<strong>From:</strong> Peter Beerli (<em>beerli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-17 11:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Previous message:</strong> <a href="1751.php">Allan Menezes: "[OMPI users] OPEN MPI and Intel dual core cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Today I ran into the same problem as Warner Yuen (see thread below),
<br>
<p>openmpi does not compile with icc and fails with an error where  
<br>
libtool ask for --tag. The error is macosx specific.
<br>
<p>It occurs in the compile for xgrid
<br>
<p>in
<br>
<p>openmpi-1.1/orte/mca/pls/xgrid
<br>
<p>the Makefile fails; xgrid uses some objective-C stuff that needs to  
<br>
be compiled with gcc [I guess]
<br>
<p>after adjusting the Makefile.in
<br>
<p>from
<br>
<p>xgrid&gt;grep -n &quot;\-\-tag=OBJC&quot; Makefile.in
<br>
216:LTOBJCCOMPILE = $(LIBTOOL)  --mode=compile $(OBJC) $(DEFS) \
<br>
220:OBJCLINK = $(LIBTOOL)  --mode=link $(OBJCLD) $(AM_OBJCFLAGS) \
<br>
to
<br>
<p>xgrid&gt;grep -n &quot;\-\-tag=OBJC&quot; Makefile.in
<br>
216:LTOBJCCOMPILE = $(LIBTOOL) --tag=OBJC --mode=compile $(OBJC) $ 
<br>
(DEFS) \
<br>
220:OBJCLINK = $(LIBTOOL)  --tag=OBJC --mode=link $(OBJCLD) $ 
<br>
(AM_OBJCFLAGS)
<br>
<p>the change elicits a warning that OBJC is not a known tag, but it  
<br>
keeps going and compiles fine.
<br>
I do not use the xgrid portion so I do not now whether this is  
<br>
clobbered or not. Standard runs using orterun
<br>
work fine.
<br>
<p><p>Peter
<br>
<p>Brian Barrett wrote in July:
<br>
<span class="quotelev1">&gt; On Jul 14, 2006, at 10:35 AM, Warner Yuen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having trouble compiling Open MPI with Mac OS X v10.4.6 with
</span><br>
<span class="quotelev2">&gt; &gt; the Intel C compiler. Here are some details:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) I upgraded to the latest versions of Xcode including GCC 4.0.1
</span><br>
<span class="quotelev2">&gt; &gt; build 5341.
</span><br>
<span class="quotelev2">&gt; &gt; 2) I installed the latest Intel update (9.1.027) as well.
</span><br>
<span class="quotelev2">&gt; &gt; 3) Open MPI compiles fine with using GCC and IFORT.
</span><br>
<span class="quotelev2">&gt; &gt; 4) Open MPI fails with ICC and IFORT
</span><br>
<span class="quotelev2">&gt; &gt; 5) MPICH-2.1.0.3 compiles fine with ICC and IFORT (I just had to
</span><br>
<span class="quotelev2">&gt; &gt; find out if my compiler worked...sorry!)
</span><br>
<span class="quotelev2">&gt; &gt; 6) My Open MPI confguration was using: ./configure --with-rsh=/usr/
</span><br>
<span class="quotelev2">&gt; &gt; bin/ssh --prefix=/usr/local/ompi11icc
</span><br>
<span class="quotelev2">&gt; &gt; 7) Should I have included my config.log?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like there are some problems with GNU libtool's support for
</span><br>
<span class="quotelev1">&gt; the Intel compiler on OS X. I can't tell if it's a problem with the
</span><br>
<span class="quotelev1">&gt; Intel compiler or libtool. A quick fix is to build Open MPI with
</span><br>
<span class="quotelev1">&gt; static libraries rather than shared libraries. You can do this by
</span><br>
<span class="quotelev1">&gt; adding:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --disable-shared --enable-static
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to the configure line for Open MPI (if you're building in the same
</span><br>
<span class="quotelev1">&gt; directory where you've already run configure, you want to run make
</span><br>
<span class="quotelev1">&gt; clean before building again).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I unfortunately don't have access to a Intel Mac machines with the
</span><br>
<span class="quotelev1">&gt; Intel compilers installed, so I can't verify this issue. I believe
</span><br>
<span class="quotelev1">&gt; one of the other developers does have such a configuration, so I'll
</span><br>
<span class="quotelev1">&gt; ask him when he's available (might be a week or two -- I believe he's
</span><br>
<span class="quotelev1">&gt; on vacation). This issue seems to be unique to your exact
</span><br>
<span class="quotelev1">&gt; configuration -- it doesn't happen with GCC on the Intel Mac nor on
</span><br>
<span class="quotelev1">&gt; Linux with the Intel compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1753.php">Jonathan Underwood: "[OMPI users] mpi.h - not conforming to C90 spec"</a>
<li><strong>Previous message:</strong> <a href="1751.php">Allan Menezes: "[OMPI users] OPEN MPI and Intel dual core cpu"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1623.php">Warner Yuen: "[OMPI users] Problem compiling OMPI with Intel C compiler on Mac OS X"</a>
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
