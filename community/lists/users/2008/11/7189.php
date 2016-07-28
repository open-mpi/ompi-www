<?
$subject_val = "[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  3 14:53:59 2008" -->
<!-- isoreceived="20081103195359" -->
<!-- sent="Mon, 3 Nov 2008 14:53:55 -0500" -->
<!-- isosent="20081103195355" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="[OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4" -->
<!-- id="f79359b60811031153l5591e0f8j49a7e4d9fb02eea3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-03 14:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7190.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>Here's a &quot;progress report&quot;... more questions in the end :-)
<br>
<p>Finally, I was *almost* able to compile OpenMPI in Cygwin using the
<br>
following configure command:
<br>
<p>./configure --prefix=/home/seabra/local/openmpi-1.3b1 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-mpi-param_check=always --with-threads=posix \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mpi-threads --disable-io-romio \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-mca-no-build=memory_mallopt,maffinity,paffinity \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-contrib-no-build=vt \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=g95 'FFLAGS=-O0  -fno-second-underscore' CXX=g++
<br>
<p>I then had a very weird error during compilation of
<br>
ompi/tools/ompi_info/params.cc. (See below).
<br>
<p>The lines causing the compilation errors are:
<br>
<p>vector.tcc:307:      const size_type __len = __old_size +
<br>
std::max(__old_size, __n);
<br>
vector.tcc:384:      const size_type __len = __old_size +
<br>
std::max(__old_size, __n);
<br>
stl_bvector.h:522:  const size_type __len = size() + std::max(size(), __n);
<br>
stl_bvector.h:823:  const size_type __len = size() + std::max(size(), __n);
<br>
<p>(Notice that those are from the standard gcc libraries.)
<br>
<p>After googling it for a while, I could find that this error is caused
<br>
because, at come point, the source code being compiled redefined the
<br>
&quot;max&quot; function with a macro, g++ cannot recognize the &quot;std::max&quot; that
<br>
happens in those lines and only &quot;sees&quot; a (...), thus printing that
<br>
cryptic complaint.
<br>
<p>I looked in some places in the OpenMPI code, but I couldn't find
<br>
&quot;max&quot; being redefined anywhere, but I may be looking in the wrong
<br>
places. Anyways, the only way of found of compiling OpenMPI was a very
<br>
ugly hack: I have to go into those files and remove the &quot;std::&quot; before
<br>
the &quot;max&quot;. With that, it all compiled cleanly.
<br>
<p>I did try running the tests in the 'tests' directory (with 'make
<br>
check'), and I didn't get any alarming message, except that in some
<br>
cases (class, threads, peruse) it printed &quot;All 0 tests passed&quot;. I got
<br>
and &quot;All (n) tests passed&quot; (n&gt;0) for asm and datatype.
<br>
<p>Can anybody comment on the meaning of those test results? Should I be
<br>
alarmed with the &quot;All 0 tests passed&quot; messages?
<br>
<p>Finally, in the absence of big red flags (that I noticed), I went
<br>
ahead and tried to compile my program. However, as soon as compilation
<br>
starts, I get the following:
<br>
<p>/local/openmpi/openmpi-1.3b1/bin/mpif90 -c -O3  -fno-second-underscore
<br>
-ffree-form  -o constants.o _constants.f
<br>
--------------------------------------------------------------------------
<br>
Unfortunately, this installation of Open MPI was not compiled with
<br>
Fortran 90 support.  As such, the mpif90 compiler is non-functional.
<br>
--------------------------------------------------------------------------
<br>
make[1]: *** [constants.o] Error 1
<br>
make[1]: Leaving directory `/home/seabra/local/amber11/src/sander'
<br>
make: *** [parallel] Error 2
<br>
<p>Notice that I compiled OpenMPI with g95, so there *should* be
<br>
Fortran95 support... Any ideas on what could be going wrong?
<br>
<p>Thank you very much,
<br>
Gustavo.
<br>
<p>======================================
<br>
Error in the compilation of params.cc
<br>
======================================
<br>
$ g++ -DHAVE_CONFIG_H -I. -I../../../opal/include
<br>
-I../../../orte/include -I../../../ompi/include
<br>
-I../../../opal/mca/paffinity/linux/plpa/src/libplpa
<br>
-DOMPI_CONFIGURE_USER=&quot;\&quot;seabra\&quot;&quot; -DOMPI_CONFIGURE_HOST=&quot;\&quot;ACS02\&quot;&quot;
<br>
-DOMPI_CONFIGURE_DATE=&quot;\&quot;Sat Nov  1 20:44:32 EDT 2008\&quot;&quot;
<br>
-DOMPI_BUILD_USER=&quot;\&quot;$USER\&quot;&quot; -DOMPI_BUILD_HOST=&quot;\&quot;`hostname`\&quot;&quot;
<br>
-DOMPI_BUILD_DATE=&quot;\&quot;`date`\&quot;&quot; -DOMPI_BUILD_CFLAGS=&quot;\&quot;-O3 -DNDEBUG
<br>
-finline-functions -fno-strict-aliasing \&quot;&quot;
<br>
-DOMPI_BUILD_CPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
<br>
-DOMPI_BUILD_CXXFLAGS=&quot;\&quot;-O3 -DNDEBUG -finline-functions \&quot;&quot;
<br>
-DOMPI_BUILD_CXXCPPFLAGS=&quot;\&quot;-I../../..  -D_REENTRANT\&quot;&quot;
<br>
-DOMPI_BUILD_FFLAGS=&quot;\&quot;-O0  -fno-second-underscore\&quot;&quot;
<br>
-DOMPI_BUILD_FCFLAGS=&quot;\&quot;\&quot;&quot; -DOMPI_BUILD_LDFLAGS=&quot;\&quot;-export-dynamic
<br>
\&quot;&quot; -DOMPI_BUILD_LIBS=&quot;\&quot;-lutil  \&quot;&quot;
<br>
-DOMPI_CC_ABSOLUTE=&quot;\&quot;/usr/bin/gcc\&quot;&quot;
<br>
-DOMPI_CXX_ABSOLUTE=&quot;\&quot;/usr/bin/g++\&quot;&quot;
<br>
-DOMPI_F77_ABSOLUTE=&quot;\&quot;/usr/bin/g77\&quot;&quot;
<br>
-DOMPI_F90_ABSOLUTE=&quot;\&quot;/usr/local/bin/g95\&quot;&quot;
<br>
-DOMPI_F90_BUILD_SIZE=&quot;\&quot;small\&quot;&quot; -I../../..  -D_REENTRANT  -O3
<br>
-DNDEBUG -finline-functions  -MT param.o -MD -MP -MF $depbase.Tpo -c
<br>
-o param.o param.cc
<br>
In file included from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/vector:72,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../ompi/tools/ompi_info/ompi_info.h:24,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from param.cc:43:
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
<br>
member function `void std::vector&lt;bool,
<br>
_Alloc&gt;::_M_insert_range(std::_Bit_iterator, _ForwardIterator,
<br>
_ForwardIterator, std::forward_iterator_tag)':
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:522:
<br>
error: expected unqualified-id before '(' token
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h: In
<br>
member function `void std::vector&lt;bool,
<br>
_Alloc&gt;::_M_fill_insert(std::_Bit_iterator, size_t, bool)':
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/stl_bvector.h:823:
<br>
error: expected unqualified-id before '(' token
<br>
In file included from /usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/vector:75,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../ompi/tools/ompi_info/ompi_info.h:24,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from param.cc:43:
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
<br>
member function `void std::vector&lt;_Tp,
<br>
_Alloc&gt;::_M_fill_insert(__gnu_cxx::__normal_iterator&lt;typename
<br>
_Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, size_t, const _Tp&amp;)':
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:307:
<br>
error: expected unqualified-id before '(' token
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc: In
<br>
member function `void std::vector&lt;_Tp,
<br>
_Alloc&gt;::_M_range_insert(__gnu_cxx::__normal_iterator&lt;typename
<br>
_Alloc::pointer, std::vector&lt;_Tp, _Alloc&gt; &gt;, _ForwardIterator,
<br>
_ForwardIterator, std::forward_iterator_tag)':
<br>
/usr/lib/gcc/i686-pc-cygwin/3.4.4/include/c++/bits/vector.tcc:384:
<br>
error: expected unqualified-id before '(' token
<br>
<p><p><pre>
-- 
Gustavo Seabra
Postdoctoral Associate
Quantum Theory Project - University of Florida
Gainesville - Florida - USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7190.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7188.php">Ralph Castain: "Re: [OMPI users] Scyld Beowulf and openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
<li><strong>Reply:</strong> <a href="7191.php">Jeff Squyres: "Re: [OMPI users] Problems installing in Cygwin - Problem with GCC 3.4.4"</a>
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
