<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 15:36:12 2008" -->
<!-- isoreceived="20081103203612" -->
<!-- sent="Mon, 3 Nov 2008 15:36:08 -0500" -->
<!-- isosent="20081103203608" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="f79359b60811031236l32581986t5f8f87928d199a37_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8E364B51-6726-4533-ADE2-AEA266380DCC_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 15:36:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 3, 2008 at 3:04 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Nov 3, 2008, at 2:53 PM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev2">&gt;&gt; following configure command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev2">&gt;&gt;               --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-mca-no-build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev2">&gt;&gt;               --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev2">&gt;&gt;               FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For your fortran issue, the Fortran 90 interface needs the Fortran 77
</span><br>
<span class="quotelev1">&gt; interface.  So you need to supply an F77 as well (the output from configure
</span><br>
<span class="quotelev1">&gt; should indicate that the F90 interface was disabled because the F77
</span><br>
<span class="quotelev1">&gt; interface was disabled).
</span><br>
<p>Is that what you mean (see below)? I thought the g95 compiler could
<br>
deal with F77 as well as F95... If so, could I just pass F77='g95'?
<br>
<p>(From the configure output)
<br>
*** Fortran 90/95 compiler
<br>
checking whether we are using the GNU Fortran compiler... yes
<br>
checking whether g95 accepts -g... yes
<br>
checking if Fortran compiler works... yes
<br>
checking whether g77 and g95 compilers are compatible... no
<br>
configure: WARNING: *** Fortran 77 and Fortran 90 compilers are not
<br>
link compatible
<br>
configure: WARNING: *** Disabling MPI Fortran 90/95 bindings
<br>
checking for extra arguments to build a shard library... none needed
<br>
checking to see if F90 compiler likes the C++ exception flags...
<br>
skipped (no F90 bindings)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev2">&gt;&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt;&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev2">&gt;&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev2">&gt;&gt; stl_bvector.h:522:  const size_type __len = size() + std::max(size(),
</span><br>
<span class="quotelev2">&gt;&gt; __n);
</span><br>
<span class="quotelev2">&gt;&gt; stl_bvector.h:823:  const size_type __len = size() + std::max(size(),
</span><br>
<span class="quotelev2">&gt;&gt; __n);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After googling it for a while, I could find that this error is caused
</span><br>
<span class="quotelev2">&gt;&gt; because, at come point, the source code being compiled redefined the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;max&quot; function with a macro, g++ cannot recognize the &quot;std::max&quot; that
</span><br>
<span class="quotelev2">&gt;&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that
</span><br>
<span class="quotelev2">&gt;&gt; cryptic complaint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev2">&gt;&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev2">&gt;&gt; places. Anyways, the only way of found of compiling OpenMPI was a very
</span><br>
<span class="quotelev2">&gt;&gt; ugly hack: I have to go into those files and remove the &quot;std::&quot; before
</span><br>
<span class="quotelev2">&gt;&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure I follow -- I don't see anywhere in OMPI where we use std::max.
</span><br>
<span class="quotelev1">&gt;  What areas did you find that you needed to change?
</span><br>
<p>These files are part of the standard C++ headers. In my case, they sit in:
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits
<br>
<p>In principle, the problems that comes from those files would mean that
<br>
the OpenMPI source has some macro redefining max, but that's what I
<br>
could not find :-(
<br>
<p><span class="quotelev2">&gt;&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev2">&gt;&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev2">&gt;&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I got
</span><br>
<span class="quotelev2">&gt;&gt; and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody comment on the meaning of those test results? Should I be
</span><br>
<span class="quotelev2">&gt;&gt; alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.  We don't really maintain the &quot;make check&quot; stuff too well.
</span><br>
<p>Oh well... What do you use for testing the implementation?
<br>
<p>Thanks a lot!
<br>
Gustavo.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7193.php">Rima Chaudhuri: "Re: [OMPI users] users Digest, Vol 1055, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>In reply to:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7194.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
