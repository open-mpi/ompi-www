<?
$subject_val = "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 15:04:53 2008" -->
<!-- isoreceived="20081103200453" -->
<!-- sent="Mon, 3 Nov 2008 15:04:47 -0500" -->
<!-- isosent="20081103200447" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="8E364B51-6726-4533-ADE2-AEA266380DCC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60811031153l5591e0f8j49a7e4d9fb02eea3_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 15:04:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7190.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 3, 2008, at 2:53 PM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; Finally, I was *almost* able to compile OpenMPI in Cygwin using the
</span><br>
<span class="quotelev1">&gt; following configure command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
</span><br>
<span class="quotelev1">&gt;                --with-mpi-param_check=always --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                --enable-mpi-threads --disable-io-romio \
</span><br>
<span class="quotelev1">&gt;                --enable-mca-no- 
</span><br>
<span class="quotelev1">&gt; build=memory_mallopt,maffinity,paffinity \
</span><br>
<span class="quotelev1">&gt;                --enable-contrib-no-build=vt \
</span><br>
<span class="quotelev1">&gt;                FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
</span><br>
<p>For your fortran issue, the Fortran 90 interface needs the Fortran 77  
<br>
interface.  So you need to supply an F77 as well (the output from  
<br>
configure should indicate that the F90 interface was disabled because  
<br>
the F77 interface was disabled).
<br>
<p><span class="quotelev1">&gt; I then had a very weird error during compilation of
</span><br>
<span class="quotelev1">&gt; ompi/tools/ompi_info/params.cc. (See below).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lines causing the compilation errors are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; vector.tcc:307:      const size_type __len = __old_size +
</span><br>
<span class="quotelev1">&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev1">&gt; vector.tcc:384:      const size_type __len = __old_size +
</span><br>
<span class="quotelev1">&gt; std::max(__old_size, __n);
</span><br>
<span class="quotelev1">&gt; stl_bvector.h:522:  const size_type __len = size() +  
</span><br>
<span class="quotelev1">&gt; std::max(size(), __n);
</span><br>
<span class="quotelev1">&gt; stl_bvector.h:823:  const size_type __len = size() +  
</span><br>
<span class="quotelev1">&gt; std::max(size(), __n);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (Notice that those are from the standard gcc libraries.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After googling it for a while, I could find that this error is caused
</span><br>
<span class="quotelev1">&gt; because, at come point, the source code being compiled redefined the
</span><br>
<span class="quotelev1">&gt; &quot;max&quot; function with a macro, g++ cannot recognize the &quot;std::max&quot; that
</span><br>
<span class="quotelev1">&gt; happens in those lines and only &quot;sees&quot; a (...), thus printing that
</span><br>
<span class="quotelev1">&gt; cryptic complaint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I looked in some places in the OpenMPI code, but I couldn't find
</span><br>
<span class="quotelev1">&gt; &quot;max&quot; being redefined anywhere, but I may be looking in the wrong
</span><br>
<span class="quotelev1">&gt; places. Anyways, the only way of found of compiling OpenMPI was a very
</span><br>
<span class="quotelev1">&gt; ugly hack: I have to go into those files and remove the &quot;std::&quot; before
</span><br>
<span class="quotelev1">&gt; the &quot;max&quot;. With that, it all compiled cleanly.
</span><br>
<p>I'm not sure I follow -- I don't see anywhere in OMPI where we use  
<br>
std::max.  What areas did you find that you needed to change?
<br>
<p><span class="quotelev1">&gt; I did try running the tests in the 'tests' directory (with 'make
</span><br>
<span class="quotelev1">&gt; check'), and I didn't get any alarming message, except that in some
</span><br>
<span class="quotelev1">&gt; cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I got
</span><br>
<span class="quotelev1">&gt; and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anybody comment on the meaning of those test results? Should I be
</span><br>
<span class="quotelev1">&gt; alarmed with the &quot;All 0 tests passed&quot; messages?
</span><br>
<p>No.  We don't really maintain the &quot;make check&quot; stuff too well.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Previous message:</strong> <a href="7190.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7189.php">Gustavo Seabra: "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7192.php">Gustavo Seabra: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
