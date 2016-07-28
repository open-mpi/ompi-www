<?
$subject_val = "Re: [OMPI users] Sending string causes memory errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  3 20:07:04 2016" -->
<!-- isoreceived="20160304010704" -->
<!-- sent="Fri, 4 Mar 2016 10:07:03 +0900" -->
<!-- isosent="20160304010703" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending string causes memory errors" -->
<!-- id="56D8DFB7.9030202_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5168472.3FjYIxPfg0_at_asaru" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sending string causes memory errors<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-03 20:07:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28626.php">Florian Lindner: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Something is really weird here ...
<br>
<p>right after MPI_Recv, if i
<br>
if (cstr[0] != 'H') cout &lt;&lt; &quot;bad first character&quot; &lt;&lt; endl;
<br>
then valgrind complains !
<br>
<p>i rewrote the program in C, but if i use subroutines for send(), then 
<br>
MPI_Send fail because of a NULL communicator ... if i manually inline 
<br>
send(), then i get the same valgrind error.
<br>
<p>i will build ompi from now and see if it helps
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p>On 3/3/2016 6:00 PM, Florian Lindner wrote:
<br>
<span class="quotelev1">&gt; Hey,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am Donnerstag, 3. M&#228;rz 2016, 17:50:59 CET schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt; Florian,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which distro are you running on ?
</span><br>
<span class="quotelev1">&gt; I'm running Arch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you are not using stock gcc and valgrind, can you tell which version you
</span><br>
<span class="quotelev2">&gt;&gt; are running ?
</span><br>
<span class="quotelev2">&gt;&gt; last but not least, how did you configure openmpi ?
</span><br>
<span class="quotelev1">&gt; openmpi 1.10.2
</span><br>
<span class="quotelev1">&gt; <a href="https://www.archlinux.org/packages/extra/x86_64/openmpi/">https://www.archlinux.org/packages/extra/x86_64/openmpi/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/openmpi">https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/openmpi</a>
</span><br>
<span class="quotelev1">&gt;     ./configure --prefix=/usr \
</span><br>
<span class="quotelev1">&gt;                 --sysconfdir=/etc/${pkgname} \
</span><br>
<span class="quotelev1">&gt;                 --enable-mpi-fortran=all \
</span><br>
<span class="quotelev1">&gt;                 --libdir=/usr/lib/${pkgname} \
</span><br>
<span class="quotelev1">&gt;                 --with-threads=posix \
</span><br>
<span class="quotelev1">&gt;                 --enable-smp-locks \
</span><br>
<span class="quotelev1">&gt;                 --with-valgrind \
</span><br>
<span class="quotelev1">&gt;                 --enable-memchecker \
</span><br>
<span class="quotelev1">&gt;                 --enable-pretty-print-stacktrace \
</span><br>
<span class="quotelev1">&gt;                 --without-slurm \
</span><br>
<span class="quotelev1">&gt;                 --with-hwloc=/usr \
</span><br>
<span class="quotelev1">&gt;                 --with-libltdl=/usr  \
</span><br>
<span class="quotelev1">&gt;                 FC=/usr/bin/gfortran \
</span><br>
<span class="quotelev1">&gt;                 LDFLAGS=&quot;$LDFLAGS -Wl,-z,noexecstack&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is also a patch applied:
</span><br>
<span class="quotelev1">&gt; <a href="https://projects.archlinux.org/svntogit/packages.git/tree/trunk/system_ltdl.patch?h=packages/openmpi">https://projects.archlinux.org/svntogit/packages.git/tree/trunk/system_ltdl.patch?h=packages/openmpi</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind 3.11.0
</span><br>
<span class="quotelev1">&gt; <a href="https://www.archlinux.org/packages/extra/x86_64/valgrind/">https://www.archlinux.org/packages/extra/x86_64/valgrind/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/valgrind">https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/valgrind</a>
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr --mandir=/usr/share/man --with-mpicc=mpic
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc 5.3.0
</span><br>
<span class="quotelev1">&gt; <a href="https://www.archlinux.org/packages/core/x86_64/gcc/">https://www.archlinux.org/packages/core/x86_64/gcc/</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/gcc">https://projects.archlinux.org/svntogit/packages.git/tree/trunk/PKGBUILD?h=packages/gcc</a>
</span><br>
<span class="quotelev1">&gt;    ${srcdir}/${_basedir}/configure --prefix=/usr \
</span><br>
<span class="quotelev1">&gt;        --libdir=/usr/lib --libexecdir=/usr/lib \
</span><br>
<span class="quotelev1">&gt;        --mandir=/usr/share/man --infodir=/usr/share/info \
</span><br>
<span class="quotelev1">&gt;        --with-bugurl=<a href="https://bugs.archlinux.org/">https://bugs.archlinux.org/</a> \
</span><br>
<span class="quotelev1">&gt;        --enable-languages=c,c++,ada,fortran,go,lto,objc,obj-c++ \
</span><br>
<span class="quotelev1">&gt;        --enable-shared --enable-threads=posix --enable-libmpx \
</span><br>
<span class="quotelev1">&gt;        --with-system-zlib --with-isl --enable-__cxa_atexit \
</span><br>
<span class="quotelev1">&gt;        --disable-libunwind-exceptions --enable-clocale=gnu \
</span><br>
<span class="quotelev1">&gt;        --disable-libstdcxx-pch --disable-libssp \
</span><br>
<span class="quotelev1">&gt;        --enable-gnu-unique-object --enable-linker-build-id \
</span><br>
<span class="quotelev1">&gt;        --enable-lto --enable-plugin --enable-install-libiberty \
</span><br>
<span class="quotelev1">&gt;        --with-linker-hash-style=gnu --enable-gnu-indirect-function \
</span><br>
<span class="quotelev1">&gt;        --disable-multilib --disable-werror \
</span><br>
<span class="quotelev1">&gt;        --enable-checking=release
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    make
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PKGBUILD files I linked to contain the build recipe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best and thanks!
</span><br>
<span class="quotelev1">&gt; Florian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, March 3, 2016, Florian Lindner &lt;mailinglists_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am still getting errors, even with your script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will also try to modified build of openmpi that Jeff suggested.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Florian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpicxx -std=c++11 -g -O0 -Wall -Wextra -fno-builtin-strlen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpi_gilles.cpp &amp;&amp; mpirun -n 2 ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stringlength = 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 123456789012345678901234567890123456789012345678901234567890123
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % LD_PRELOAD=/usr/lib/valgrind/libmpiwrap-amd64-linux.so mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== Memcheck, a memory error detector
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== Using Valgrind-3.12.0.SVN and LibVEX; rerun with -h for copyright
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== Command: ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Memcheck, a memory error detector
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Using Valgrind-3.12.0.SVN and LibVEX; rerun with -h for copyright
</span><br>
<span class="quotelev3">&gt;&gt;&gt; info
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Command: ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind MPI wrappers  5324: Active for pid 5324
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind MPI wrappers  5324: Try MPIWRAP_DEBUG=help for possible options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind MPI wrappers  5325: Active for pid 5325
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind MPI wrappers  5325: Try MPIWRAP_DEBUG=help for possible options
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stringlength = 64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2D992: strlen (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852D8: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff800 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #2, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2D9A4: strlen (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852D8: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff801 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #2, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x60A0FF1: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff83e is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #4, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x60A100D: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff83d is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #4, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2F758: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff800 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2F766: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff810 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2F7B0: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff838 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2F7BE: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff83c is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    at 0x4C2F7E8: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  Address 0xffefff83e is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 123456789012345678901234567890123456789012345678901234567890123
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== HEAP SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==   total heap usage: 15,007 allocs, 14,760 frees, 13,362,050 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== LEAK SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5325== ERROR SUMMARY: 138 errors from 9 contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== HEAP SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==   total heap usage: 15,028 allocs, 14,781 frees, 13,370,286 bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== LEAK SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324==
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ==5324== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am Donnerstag, 3. M&#228;rz 2016, 14:53:24 CET schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I was unable to reproduce this in my environment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; here is a slightly modified version of your test program.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffers are 64 bytes aligned and the string (including the null
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminator) is 64 bytes long,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hopefully, strlen will not complain any more.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/3/2016 12:51 AM, Florian Lindner wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello Gilles,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Am Mittwoch, 2. M&#228;rz 2016, 23:36:56 CET schrieb Gilles Gouaillardet:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Florian,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; under the hood, strlen() can use vector instructions, and then read
</span><br>
<span class="quotelev3">&gt;&gt;&gt; memory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; above the end of the string. valgrind is extremely picky and does warn
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; about that.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; iirc, there are some filter options not to issue these warnings, but I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; forgot the details.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ok, i'll try to research in that direction.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can you try to send &quot;Bonjour&quot; instead of &quot;Halo&quot; and see if the warning
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; disappear ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; They are still there. But, was this meant as a joke or didn't I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; understand?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Florian
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PS if it works, do not jump to the erroneous conclusion valgrind likes
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; French and dislikes German ;-)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wednesday, March 2, 2016, Florian Lindner &lt;mailinglists_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; using OpenMPI 1.10.2 and valgrind 3.11.0 I try to use the code below
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; send a c++ string.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It works fine, but running through valgrind gives a lot of memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; errors,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; invalid read of size...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; What is going wrong there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Valgrind output, see below.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Florian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; // Compile with: mpicxx -std=c++11 -g -O0 -Wall -Wextra mpi.cpp
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #include &lt;string&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; using namespace std;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void receive() {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     int length = 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Status status;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Probe(MPI_ANY_SOURCE, 0, MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Get_count(&amp;status, MPI_CHAR, &amp;length);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cout &lt;&lt; &quot;Stringlength = &quot; &lt;&lt; length &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     char cstr[length];
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Recv(cstr,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              length,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_CHAR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_ANY_SOURCE,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_ANY_TAG,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_COMM_WORLD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     cout &lt;&lt; cstr &lt;&lt; endl;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; void send(int rankReceiver) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     std::string s = &quot;Hallo&quot;;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Send(s.c_str(),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              s.size()+1,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_CHAR,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              rankReceiver,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;              MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; int main(int argc, char* argv[])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     int rank;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     if (rank == 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       send(1);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     else {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;       receive();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;     return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; VALGRIND OUTPUT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; % mpicxx -std=c++11 -g -O0 -Wall -Wextra mpi.cpp &amp;&amp; mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stringlength = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; florian_at_asaru ~/scratch (git)-[master] %
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; LD_PRELOAD=/usr/lib/valgrind/libmpiwrap-amd64-linux.so mpirun -n 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; valgrind
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== Memcheck, a memory error detector
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et
</span><br>
<span class="quotelev3">&gt;&gt;&gt; al.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== Using Valgrind-3.11.0 and LibVEX; rerun with -h for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copyright info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== Command: ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Memcheck, a memory error detector
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et
</span><br>
<span class="quotelev3">&gt;&gt;&gt; al.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Using Valgrind-3.11.0 and LibVEX; rerun with -h for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; copyright info
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Command: ./a.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; valgrind MPI wrappers  9290: Active for pid 9290
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; valgrind MPI wrappers  9291: Active for pid 9291
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; valgrind MPI wrappers  9290: Try MPIWRAP_DEBUG=help for possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; valgrind MPI wrappers  9291: Try MPIWRAP_DEBUG=help for possible
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Stringlength = 6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x4C2DBA2: strlen (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852D8: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff870 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #2, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x4C2DBB4: strlen (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852D8: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff871 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #2, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x60A0FF1: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff874 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #4, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x60A100D: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff873 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #4, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x4C2F9C0: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff870 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #5, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Invalid read of size 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    at 0x4C2F9F8: __GI_memcpy (in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (ostream_insert.h:101)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408A39: receive() (mpi.cpp:22)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  Address 0xffefff874 is on thread 1's stack
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==  in frame #5, created by receive() (mpi.cpp:8)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hallo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== HEAP SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==   total heap usage: 15,020 allocs, 14,773 frees, 13,362,383
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== LEAK SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9291== ERROR SUMMARY: 14 errors from 6 contexts (suppressed: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== HEAP SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==   total heap usage: 15,018 allocs, 14,771 frees, 13,370,045
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bytes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== LEAK SUMMARY:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== Rerun with --leak-check=full to see details of leaked memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290==
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== For counts of detected and suppressed errors, rerun with: -v
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ==9290== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28617.php">http://www.open-mpi.org/community/lists/users/2016/03/28617.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28619.php">http://www.open-mpi.org/community/lists/users/2016/03/28619.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28623.php">http://www.open-mpi.org/community/lists/users/2016/03/28623.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28626.php">http://www.open-mpi.org/community/lists/users/2016/03/28626.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28634.php">RYAN RAY: "Re: [OMPI users] Open SHMEM Error"</a>
<li><strong>Previous message:</strong> <a href="28632.php">Gilles Gouaillardet: "Re: [OMPI users] Orted path with module manager on cluster"</a>
<li><strong>In reply to:</strong> <a href="28626.php">Florian Lindner: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Sending string causes memory errors"</a>
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
