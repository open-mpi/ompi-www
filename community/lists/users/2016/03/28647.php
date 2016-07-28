<?
$subject_val = "Re: [OMPI users] Sending string causes memory errors";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar  6 21:59:09 2016" -->
<!-- isoreceived="20160307025909" -->
<!-- sent="Mon, 7 Mar 2016 11:59:08 +0900" -->
<!-- isosent="20160307025908" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sending string causes memory errors" -->
<!-- id="56DCEE7C.8080004_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkV2GTfJrhNjmJtOtikBbbCr2Oxcv_fFZR2t+hDQ0fBiBA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-03-06 21:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28646.php">George Bosilca: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>In reply to:</strong> <a href="28646.php">George Bosilca: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George,
<br>
<p>is valgrind able to mark memory as read only ?
<br>
<p>i checked quickly but could not find such a feature
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 3/7/2016 11:40 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; memchecker is intended to be used together with some suppression rules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the receive the rationale of making the buffer unaccessible after 
</span><br>
<span class="quotelev1">&gt; the unpack was to ensure that nobody is touching the memory until we 
</span><br>
<span class="quotelev1">&gt; return from the receive. The buffer was supposed to be made available 
</span><br>
<span class="quotelev1">&gt; during the request completion function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the send, the rationale is now obsolete as the MPI Forum removed 
</span><br>
<span class="quotelev1">&gt; the access restriction on send buffer. We should instead mark it in 
</span><br>
<span class="quotelev1">&gt; read-only mode to make sure it is never modified.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Mar 6, 2016 at 9:28 PM, Gilles Gouaillardet &lt;gilles_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gilles_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Here is attached a simplified C only version of the test program.
</span><br>
<span class="quotelev1">&gt;     it can be ran with two or one task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     on rhel7, valgrind complains about an invalid read when accessing
</span><br>
<span class="quotelev1">&gt;     the recv buffer after MPI_Recv.
</span><br>
<span class="quotelev1">&gt;     this is pretty odd since :
</span><br>
<span class="quotelev1">&gt;     - the buffer is initialized *before* MPI_Recv is invoked
</span><br>
<span class="quotelev1">&gt;     - MPI_Recv *do* write the buffer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     i added some trace, and OpenMPI told valgrind to mark the buffer
</span><br>
<span class="quotelev1">&gt;     as non accessible
</span><br>
<span class="quotelev1">&gt;     (e.g. VALGRIND_MAKE_MEM_NOACCESS) *after* it marked it as defined
</span><br>
<span class="quotelev1">&gt;     (e.g. VALGRIND_MAKE_MEM_DEFINED)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     the issue can be seen on both master and v1.10 when OpenMPI is
</span><br>
<span class="quotelev1">&gt;     configure'd with
</span><br>
<span class="quotelev1">&gt;     --enable-memchecker --with-valgrind
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     in mca_pml_ob1_recv_request_progress_match() from
</span><br>
<span class="quotelev1">&gt;     ompi/mca/pml/ob1/pml_ob1_recvreq.c,
</span><br>
<span class="quotelev1">&gt;     what is the rationale for marking the buffer an unaccessable after
</span><br>
<span class="quotelev1">&gt;     the unpack ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         /*
</span><br>
<span class="quotelev1">&gt;          *  Unpacking finished, make the user buffer unaccessable again.
</span><br>
<span class="quotelev1">&gt;          */
</span><br>
<span class="quotelev1">&gt;         MEMCHECKER(
</span><br>
<span class="quotelev1">&gt;     memchecker_call(&amp;opal_memchecker_base_mem_noaccess,
</span><br>
<span class="quotelev1">&gt;     recvreq-&gt;req_recv.req_base.req_addr,
</span><br>
<span class="quotelev1">&gt;     recvreq-&gt;req_recv.req_base.req_count,
</span><br>
<span class="quotelev1">&gt;     recvreq-&gt;req_recv.req_base.req_datatype);
</span><br>
<span class="quotelev1">&gt;                    );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     also, in MPI_Send (ompi/mpi/c/isend.c) what is the rationale for
</span><br>
<span class="quotelev1">&gt;     marking the buffer as non accessible before calling the PML isend ?
</span><br>
<span class="quotelev1">&gt;     if this is an attempt to track users modifying the buffer after
</span><br>
<span class="quotelev1">&gt;     MPI_Isend(), should valgrind be invoked *after* the PML is invoked ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if i #if out these two calls, then the test program runs just fine
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     fwiw :
</span><br>
<span class="quotelev1">&gt;     - MPI_Sendrecv do not issue any warning
</span><br>
<span class="quotelev1">&gt;     - MPI_Send/MPI_Recv issues one warning in the test code
</span><br>
<span class="quotelev1">&gt;     - MPI_Isend/MPI_Recv issues three warning, one in the test, and
</span><br>
<span class="quotelev1">&gt;     two in OpenMPI
</span><br>
<span class="quotelev1">&gt;     i previously reported a very weird behaviour ... and the root
</span><br>
<span class="quotelev1">&gt;     cause is one subroutine in
</span><br>
<span class="quotelev1">&gt;     the test program was called &quot;send&quot;, which conflicts with the send
</span><br>
<span class="quotelev1">&gt;     libc function ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 3/3/2016 9:43 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         All of those valgrind reports below are from within your code
</span><br>
<span class="quotelev1">&gt;         -- not from within Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         All Open MPI can do is pass the contents of your message
</span><br>
<span class="quotelev1">&gt;         properly; you can verify that it is being sent and received
</span><br>
<span class="quotelev1">&gt;         properly by checking the byte contents of your received array
</span><br>
<span class="quotelev1">&gt;         (e.g., assert that the string is there correctly and is
</span><br>
<span class="quotelev1">&gt;         \0-terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         If cout or some other std:: thing is going beyond the end of
</span><br>
<span class="quotelev1">&gt;         your allocated buffer, that's a different problem -- perhaps
</span><br>
<span class="quotelev1">&gt;         you have a busted std:: implementation...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On Mar 3, 2016, at 2:47 AM, Florian Lindner
</span><br>
<span class="quotelev1">&gt;             &lt;mailinglists_at_[hidden] &lt;mailto:mailinglists_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I am still getting errors, even with your script.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I will also try to modified build of openmpi that Jeff
</span><br>
<span class="quotelev1">&gt;             suggested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Best,
</span><br>
<span class="quotelev1">&gt;             Florian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             % mpicxx -std=c++11 -g -O0 -Wall -Wextra
</span><br>
<span class="quotelev1">&gt;             -fno-builtin-strlen mpi_gilles.cpp &amp;&amp; mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt;             Stringlength = 64
</span><br>
<span class="quotelev1">&gt;             123456789012345678901234567890123456789012345678901234567890123
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             % LD_PRELOAD=/usr/lib/valgrind/libmpiwrap-amd64-linux.so
</span><br>
<span class="quotelev1">&gt;             mpirun -n 2 valgrind ./a.out
</span><br>
<span class="quotelev1">&gt;             ==5324== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt;             ==5324== Copyright (C) 2002-2015, and GNU GPL'd, by Julian
</span><br>
<span class="quotelev1">&gt;             Seward et al.
</span><br>
<span class="quotelev1">&gt;             ==5324== Using Valgrind-3.12.0.SVN and LibVEX; rerun with
</span><br>
<span class="quotelev1">&gt;             -h for copyright info
</span><br>
<span class="quotelev1">&gt;             ==5324== Command: ./a.out
</span><br>
<span class="quotelev1">&gt;             ==5324==
</span><br>
<span class="quotelev1">&gt;             ==5325== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt;             ==5325== Copyright (C) 2002-2015, and GNU GPL'd, by Julian
</span><br>
<span class="quotelev1">&gt;             Seward et al.
</span><br>
<span class="quotelev1">&gt;             ==5325== Using Valgrind-3.12.0.SVN and LibVEX; rerun with
</span><br>
<span class="quotelev1">&gt;             -h for copyright info
</span><br>
<span class="quotelev1">&gt;             ==5325== Command: ./a.out
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             valgrind MPI wrappers  5324: Active for pid 5324
</span><br>
<span class="quotelev1">&gt;             valgrind MPI wrappers  5324: Try MPIWRAP_DEBUG=help for
</span><br>
<span class="quotelev1">&gt;             possible options
</span><br>
<span class="quotelev1">&gt;             valgrind MPI wrappers  5325: Active for pid 5325
</span><br>
<span class="quotelev1">&gt;             valgrind MPI wrappers  5325: Try MPIWRAP_DEBUG=help for
</span><br>
<span class="quotelev1">&gt;             possible options
</span><br>
<span class="quotelev1">&gt;             Stringlength = 64
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2D992: strlen (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852D8: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff800 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #2, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2D9A4: strlen (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852D8: length (char_traits.h:267)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852D8: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff801 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #2, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x60A0FF1: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff83e is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #4, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x60A100D: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff83d is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #4, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2F758: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff800 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2F766: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff810 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2F7B0: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff838 is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2F7BE: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff83c is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;             ==5325==    at 0x4C2F7E8: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in
</span><br>
<span class="quotelev1">&gt;             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so
</span><br>
<span class="quotelev1">&gt;             &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: sputn (streambuf:451)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: __ostream_write&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x5684F75: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*, long)
</span><br>
<span class="quotelev1">&gt;             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x56852E6: std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;             &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;             std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408A45: receive() (mpi_gilles.cpp:22)
</span><br>
<span class="quotelev1">&gt;             ==5325==    by 0x408B88: main (mpi_gilles.cpp:44)
</span><br>
<span class="quotelev1">&gt;             ==5325==  Address 0xffefff83e is on thread 1's stack
</span><br>
<span class="quotelev1">&gt;             ==5325==  in frame #5, created by receive() (mpi_gilles.cpp:8)
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             123456789012345678901234567890123456789012345678901234567890123
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt;             ==5325==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325==   total heap usage: 15,007 allocs, 14,760 frees,
</span><br>
<span class="quotelev1">&gt;             13,362,050 bytes allocated
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt;             ==5325==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt;             ==5325== Rerun with --leak-check=full to see details of
</span><br>
<span class="quotelev1">&gt;             leaked memory
</span><br>
<span class="quotelev1">&gt;             ==5325==
</span><br>
<span class="quotelev1">&gt;             ==5325== For counts of detected and suppressed errors,
</span><br>
<span class="quotelev1">&gt;             rerun with: -v
</span><br>
<span class="quotelev1">&gt;             ==5325== ERROR SUMMARY: 138 errors from 9 contexts
</span><br>
<span class="quotelev1">&gt;             (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt;             ==5324==
</span><br>
<span class="quotelev1">&gt;             ==5324== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt;             ==5324==     in use at exit: 96,351 bytes in 247 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324==   total heap usage: 15,028 allocs, 14,781 frees,
</span><br>
<span class="quotelev1">&gt;             13,370,286 bytes allocated
</span><br>
<span class="quotelev1">&gt;             ==5324==
</span><br>
<span class="quotelev1">&gt;             ==5324== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt;             ==5324==    definitely lost: 9,154 bytes in 39 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324==    indirectly lost: 4,008 bytes in 22 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324==      possibly lost: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324==    still reachable: 83,189 bytes in 186 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324==         suppressed: 0 bytes in 0 blocks
</span><br>
<span class="quotelev1">&gt;             ==5324== Rerun with --leak-check=full to see details of
</span><br>
<span class="quotelev1">&gt;             leaked memory
</span><br>
<span class="quotelev1">&gt;             ==5324==
</span><br>
<span class="quotelev1">&gt;             ==5324== For counts of detected and suppressed errors,
</span><br>
<span class="quotelev1">&gt;             rerun with: -v
</span><br>
<span class="quotelev1">&gt;             ==5324== ERROR SUMMARY: 0 errors from 0 contexts
</span><br>
<span class="quotelev1">&gt;             (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Am Donnerstag, 3. M&#228;rz 2016, 14:53:24 CET schrieb Gilles
</span><br>
<span class="quotelev1">&gt;             Gouaillardet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 I was unable to reproduce this in my environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 here is a slightly modified version of your test program.
</span><br>
<span class="quotelev1">&gt;                 buffers are 64 bytes aligned and the string (including
</span><br>
<span class="quotelev1">&gt;                 the null
</span><br>
<span class="quotelev1">&gt;                 terminator) is 64 bytes long,
</span><br>
<span class="quotelev1">&gt;                 hopefully, strlen will not complain any more.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 On 3/3/2016 12:51 AM, Florian Lindner wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Hello Gilles,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Am Mittwoch, 2. M&#228;rz 2016, 23:36:56 CET schrieb
</span><br>
<span class="quotelev1">&gt;                     Gilles Gouaillardet:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Florian,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         under the hood, strlen() can use vector
</span><br>
<span class="quotelev1">&gt;                         instructions, and then read memory
</span><br>
<span class="quotelev1">&gt;                         above the end of the string. valgrind is
</span><br>
<span class="quotelev1">&gt;                         extremely picky and does warn
</span><br>
<span class="quotelev1">&gt;                         about that.
</span><br>
<span class="quotelev1">&gt;                         iirc, there are some filter options not to
</span><br>
<span class="quotelev1">&gt;                         issue these warnings, but I
</span><br>
<span class="quotelev1">&gt;                         forgot the details.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Ok, i'll try to research in that direction.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         can you try to send &quot;Bonjour&quot; instead of
</span><br>
<span class="quotelev1">&gt;                         &quot;Halo&quot; and see if the warning
</span><br>
<span class="quotelev1">&gt;                         disappear ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     They are still there. But, was this meant as a
</span><br>
<span class="quotelev1">&gt;                     joke or didn't I understand?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     Best,
</span><br>
<span class="quotelev1">&gt;                     Florian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         PS if it works, do not jump to the erroneous
</span><br>
<span class="quotelev1">&gt;                         conclusion valgrind likes
</span><br>
<span class="quotelev1">&gt;                         French and dislikes German ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                         On Wednesday, March 2, 2016, Florian Lindner
</span><br>
<span class="quotelev1">&gt;                         &lt;mailinglists_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                         &lt;mailto:mailinglists_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             using OpenMPI 1.10.2 and valgrind 3.11.0 I
</span><br>
<span class="quotelev1">&gt;                             try to use the code below to
</span><br>
<span class="quotelev1">&gt;                             send a c++ string.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             It works fine, but running through
</span><br>
<span class="quotelev1">&gt;                             valgrind gives a lot of memory errors,
</span><br>
<span class="quotelev1">&gt;                             invalid read of size...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             What is going wrong there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Valgrind output, see below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             Thanks!
</span><br>
<span class="quotelev1">&gt;                             Florian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             // Compile with: mpicxx -std=c++11 -g -O0
</span><br>
<span class="quotelev1">&gt;                             -Wall -Wextra mpi.cpp
</span><br>
<span class="quotelev1">&gt;                             #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;                             #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;                             #include &lt;string&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             void receive() {
</span><br>
<span class="quotelev1">&gt;                                int length = 0;
</span><br>
<span class="quotelev1">&gt;                                MPI_Status status;
</span><br>
<span class="quotelev1">&gt;                                MPI_Probe(MPI_ANY_SOURCE, 0,
</span><br>
<span class="quotelev1">&gt;                             MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;                                MPI_Get_count(&amp;status, MPI_CHAR, &amp;length);
</span><br>
<span class="quotelev1">&gt;                                cout &lt;&lt; &quot;Stringlength = &quot; &lt;&lt; length &lt;&lt;
</span><br>
<span class="quotelev1">&gt;                             endl;
</span><br>
<span class="quotelev1">&gt;                                char cstr[length];
</span><br>
<span class="quotelev1">&gt;                                MPI_Recv(cstr,
</span><br>
<span class="quotelev1">&gt;                                         length,
</span><br>
<span class="quotelev1">&gt;                                         MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                                         MPI_ANY_SOURCE,
</span><br>
<span class="quotelev1">&gt;                                         MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt;                                         MPI_COMM_WORLD,
</span><br>
<span class="quotelev1">&gt;                                         MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;                                cout &lt;&lt; cstr &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;                             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             void send(int rankReceiver) {
</span><br>
<span class="quotelev1">&gt;                                std::string s = &quot;Hallo&quot;;
</span><br>
<span class="quotelev1">&gt;                                MPI_Send(s.c_str(),
</span><br>
<span class="quotelev1">&gt;                                         s.size()+1,
</span><br>
<span class="quotelev1">&gt;                                         MPI_CHAR,
</span><br>
<span class="quotelev1">&gt;                                         rankReceiver,
</span><br>
<span class="quotelev1">&gt;                                         0,
</span><br>
<span class="quotelev1">&gt;                                         MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;                             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             int main(int argc, char* argv[])
</span><br>
<span class="quotelev1">&gt;                             {
</span><br>
<span class="quotelev1">&gt;                                int rank;
</span><br>
<span class="quotelev1">&gt;                                MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;                                if (rank == 0)
</span><br>
<span class="quotelev1">&gt;                                  send(1);
</span><br>
<span class="quotelev1">&gt;                                else {
</span><br>
<span class="quotelev1">&gt;                                  receive();
</span><br>
<span class="quotelev1">&gt;                                }
</span><br>
<span class="quotelev1">&gt;                                MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;                                return 0;
</span><br>
<span class="quotelev1">&gt;                             }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             VALGRIND OUTPUT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             % mpicxx -std=c++11 -g -O0 -Wall -Wextra
</span><br>
<span class="quotelev1">&gt;                             mpi.cpp &amp;&amp; mpirun -n 2 ./a.out
</span><br>
<span class="quotelev1">&gt;                             Stringlength = 6
</span><br>
<span class="quotelev1">&gt;                             Hallo
</span><br>
<span class="quotelev1">&gt;                             florian_at_asaru ~/scratch (git)-[master] %
</span><br>
<span class="quotelev1">&gt;                             LD_PRELOAD=/usr/lib/valgrind/libmpiwrap-amd64-linux.so
</span><br>
<span class="quotelev1">&gt;                             mpirun -n 2 valgrind
</span><br>
<span class="quotelev1">&gt;                             ./a.out
</span><br>
<span class="quotelev1">&gt;                             ==9290== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt;                             ==9290== Copyright (C) 2002-2015, and GNU
</span><br>
<span class="quotelev1">&gt;                             GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt;                             ==9290== Using Valgrind-3.11.0 and LibVEX;
</span><br>
<span class="quotelev1">&gt;                             rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt;                             ==9290== Command: ./a.out
</span><br>
<span class="quotelev1">&gt;                             ==9290==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Memcheck, a memory error detector
</span><br>
<span class="quotelev1">&gt;                             ==9291== Copyright (C) 2002-2015, and GNU
</span><br>
<span class="quotelev1">&gt;                             GPL'd, by Julian Seward et al.
</span><br>
<span class="quotelev1">&gt;                             ==9291== Using Valgrind-3.11.0 and LibVEX;
</span><br>
<span class="quotelev1">&gt;                             rerun with -h for copyright info
</span><br>
<span class="quotelev1">&gt;                             ==9291== Command: ./a.out
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             valgrind MPI wrappers  9290: Active for
</span><br>
<span class="quotelev1">&gt;                             pid 9290
</span><br>
<span class="quotelev1">&gt;                             valgrind MPI wrappers  9291: Active for
</span><br>
<span class="quotelev1">&gt;                             pid 9291
</span><br>
<span class="quotelev1">&gt;                             valgrind MPI wrappers  9290: Try
</span><br>
<span class="quotelev1">&gt;                             MPIWRAP_DEBUG=help for possible options
</span><br>
<span class="quotelev1">&gt;                             valgrind MPI wrappers  9291: Try
</span><br>
<span class="quotelev1">&gt;                             MPIWRAP_DEBUG=help for possible options
</span><br>
<span class="quotelev1">&gt;                             Stringlength = 6
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x4C2DBA2: strlen (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852D8: length
</span><br>
<span class="quotelev1">&gt;                             (char_traits.h:267)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852D8:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:562)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff870 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #2, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x4C2DBB4: strlen (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852D8: length
</span><br>
<span class="quotelev1">&gt;                             (char_traits.h:267)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852D8:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:562)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff871 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #2, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x60A0FF1:
</span><br>
<span class="quotelev1">&gt;                             _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev1">&gt;                             libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x6096D1A: fwrite (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75: sputn
</span><br>
<span class="quotelev1">&gt;                             (streambuf:451)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;                                 (std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt; &gt;&amp;, char
</span><br>
<span class="quotelev1">&gt;                                 const*, long)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852E6:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:561)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff874 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #4, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x60A100D:
</span><br>
<span class="quotelev1">&gt;                             _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev1">&gt;                             libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x6096D1A: fwrite (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75: sputn
</span><br>
<span class="quotelev1">&gt;                             (streambuf:451)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;                                 (std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt; &gt;&amp;, char
</span><br>
<span class="quotelev1">&gt;                                 const*, long)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852E6:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:561)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff873 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #4, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 2
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x4C2F9C0: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x60A0F3A:
</span><br>
<span class="quotelev1">&gt;                             _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev1">&gt;                             libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x6096D1A: fwrite (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75: sputn
</span><br>
<span class="quotelev1">&gt;                             (streambuf:451)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;                                 (std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt; &gt;&amp;, char
</span><br>
<span class="quotelev1">&gt;                                 const*, long)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852E6:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:561)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff870 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #5, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== Invalid read of size 1
</span><br>
<span class="quotelev1">&gt;                             ==9291==    at 0x4C2F9F8: __GI_memcpy (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x60A0F3A:
</span><br>
<span class="quotelev1">&gt;                             _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/
</span><br>
<span class="quotelev1">&gt;                             libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x6096D1A: fwrite (in
</span><br>
<span class="quotelev1">&gt;                             /usr/lib/libc-2.23.so &lt;<a href="http://libc-2.23.so">http://libc-2.23.so</a>&gt;)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75: sputn
</span><br>
<span class="quotelev1">&gt;                             (streambuf:451)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:50)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x5684F75:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::__ostream_insert&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;                                 (std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                                 std::char_traits&lt;char&gt; &gt;&amp;, char
</span><br>
<span class="quotelev1">&gt;                                 const*, long)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             (ostream_insert.h:101)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x56852E6:
</span><br>
<span class="quotelev1">&gt;                             std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                                 &amp; std::operator&lt;&lt;
</span><br>
<span class="quotelev1">&gt;                                 &lt;std::char_traits&lt;char&gt;
</span><br>
<span class="quotelev2">&gt;                                 &gt;(std::basic_ostream&lt;char,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             std::char_traits&lt;char&gt; &gt;&amp;, char const*)
</span><br>
<span class="quotelev1">&gt;                             (ostream:561)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408A39: receive()
</span><br>
<span class="quotelev1">&gt;                             (mpi.cpp:22)
</span><br>
<span class="quotelev1">&gt;                             ==9291==    by 0x408B61: main (mpi.cpp:46)
</span><br>
<span class="quotelev1">&gt;                             ==9291==  Address 0xffefff874 is on thread
</span><br>
<span class="quotelev1">&gt;                             1's stack
</span><br>
<span class="quotelev1">&gt;                             ==9291==  in frame #5, created by
</span><br>
<span class="quotelev1">&gt;                             receive() (mpi.cpp:8)
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             Hallo
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt;                             ==9291==     in use at exit: 96,351 bytes
</span><br>
<span class="quotelev1">&gt;                             in 247 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291==   total heap usage: 15,020
</span><br>
<span class="quotelev1">&gt;                             allocs, 14,773 frees, 13,362,383 bytes
</span><br>
<span class="quotelev1">&gt;                             allocated
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt;                             ==9291==    definitely lost: 9,154 bytes
</span><br>
<span class="quotelev1">&gt;                             in 39 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291==    indirectly lost: 4,008 bytes
</span><br>
<span class="quotelev1">&gt;                             in 22 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291==      possibly lost: 0 bytes in 0
</span><br>
<span class="quotelev1">&gt;                             blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291==    still reachable: 83,189 bytes
</span><br>
<span class="quotelev1">&gt;                             in 186 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291==         suppressed: 0 bytes in 0
</span><br>
<span class="quotelev1">&gt;                             blocks
</span><br>
<span class="quotelev1">&gt;                             ==9291== Rerun with --leak-check=full to
</span><br>
<span class="quotelev1">&gt;                             see details of leaked memory
</span><br>
<span class="quotelev1">&gt;                             ==9291==
</span><br>
<span class="quotelev1">&gt;                             ==9291== For counts of detected and
</span><br>
<span class="quotelev1">&gt;                             suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt;                             ==9291== ERROR SUMMARY: 14 errors from 6
</span><br>
<span class="quotelev1">&gt;                             contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt;                             ==9290==
</span><br>
<span class="quotelev1">&gt;                             ==9290== HEAP SUMMARY:
</span><br>
<span class="quotelev1">&gt;                             ==9290==     in use at exit: 96,351 bytes
</span><br>
<span class="quotelev1">&gt;                             in 247 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290==   total heap usage: 15,018
</span><br>
<span class="quotelev1">&gt;                             allocs, 14,771 frees, 13,370,045 bytes
</span><br>
<span class="quotelev1">&gt;                             allocated
</span><br>
<span class="quotelev1">&gt;                             ==9290==
</span><br>
<span class="quotelev1">&gt;                             ==9290== LEAK SUMMARY:
</span><br>
<span class="quotelev1">&gt;                             ==9290==    definitely lost: 9,154 bytes
</span><br>
<span class="quotelev1">&gt;                             in 39 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290==    indirectly lost: 4,008 bytes
</span><br>
<span class="quotelev1">&gt;                             in 22 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290==      possibly lost: 0 bytes in 0
</span><br>
<span class="quotelev1">&gt;                             blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290==    still reachable: 83,189 bytes
</span><br>
<span class="quotelev1">&gt;                             in 186 blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290==         suppressed: 0 bytes in 0
</span><br>
<span class="quotelev1">&gt;                             blocks
</span><br>
<span class="quotelev1">&gt;                             ==9290== Rerun with --leak-check=full to
</span><br>
<span class="quotelev1">&gt;                             see details of leaked memory
</span><br>
<span class="quotelev1">&gt;                             ==9290==
</span><br>
<span class="quotelev1">&gt;                             ==9290== For counts of detected and
</span><br>
<span class="quotelev1">&gt;                             suppressed errors, rerun with: -v
</span><br>
<span class="quotelev1">&gt;                             ==9290== ERROR SUMMARY: 0 errors from 0
</span><br>
<span class="quotelev1">&gt;                             contexts (suppressed: 0 from 0)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                             _______________________________________________
</span><br>
<span class="quotelev1">&gt;                             users mailing list
</span><br>
<span class="quotelev1">&gt;                             users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                             &lt;mailto:users_at_[hidden]&gt; &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt;                             Subscription:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                             Link to this post:
</span><br>
<span class="quotelev1">&gt;                             <a href="http://www.open-mpi.org/community/lists/users/2016/03/28617.php">http://www.open-mpi.org/community/lists/users/2016/03/28617.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                     _______________________________________________
</span><br>
<span class="quotelev1">&gt;                     users mailing list
</span><br>
<span class="quotelev1">&gt;                     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;                     Subscription:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;                     Link to this post:
</span><br>
<span class="quotelev1">&gt;                     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28619.php">http://www.open-mpi.org/community/lists/users/2016/03/28619.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/03/28623.php">http://www.open-mpi.org/community/lists/users/2016/03/28623.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/03/28645.php">http://www.open-mpi.org/community/lists/users/2016/03/28645.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28646.php">http://www.open-mpi.org/community/lists/users/2016/03/28646.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28647/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28648.php">Jordan Willis: "[OMPI users] Troubles with linking C++ standard library with openmpi 1.10"</a>
<li><strong>Previous message:</strong> <a href="28646.php">George Bosilca: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>In reply to:</strong> <a href="28646.php">George Bosilca: "Re: [OMPI users] Sending string causes memory errors"</a>
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
