<?
$subject_val = "[OMPI users] Sending string causes memory errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  2 09:13:03 2016" -->
<!-- isoreceived="20160302141303" -->
<!-- sent="Wed, 02 Mar 2016 15:13:02 +0100" -->
<!-- isosent="20160302141302" -->
<!-- name="Florian Lindner" -->
<!-- email="mailinglists_at_[hidden]" -->
<!-- subject="[OMPI users] Sending string causes memory errors" -->
<!-- id="1633429.ckKFcgWBDf_at_asaru" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Sending string causes memory errors<br>
<strong>From:</strong> Florian Lindner (<em>mailinglists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-02 09:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Reply:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>using OpenMPI 1.10.2 and valgrind 3.11.0 I try to use the code below to
<br>
send a c++ string.
<br>
<p>It works fine, but running through valgrind gives a lot of memory errors, invalid read of size...
<br>
<p>What is going wrong there?
<br>
<p>Valgrind output, see below.
<br>
<p>Thanks!
<br>
Florian
<br>
<p><p>// Compile with: mpicxx -std=c++11 -g -O0 -Wall -Wextra mpi.cpp
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &lt;string&gt;
<br>
<p>using namespace std;
<br>
<p><p>void receive() {
<br>
&nbsp;&nbsp;int length = 0;
<br>
&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;MPI_Probe(MPI_ANY_SOURCE, 0, MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_CHAR, &amp;length);
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;Stringlength = &quot; &lt;&lt; length &lt;&lt; endl;
<br>
&nbsp;&nbsp;char cstr[length];
<br>
&nbsp;&nbsp;MPI_Recv(cstr,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;length,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ANY_SOURCE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_ANY_TAG,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;cout &lt;&lt; cstr &lt;&lt; endl;
<br>
}
<br>
<p>void send(int rankReceiver) {
<br>
&nbsp;&nbsp;std::string s = &quot;Hallo&quot;;
<br>
&nbsp;&nbsp;MPI_Send(s.c_str(),
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;s.size()+1,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_CHAR,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rankReceiver,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD);
<br>
}
<br>
<p>int main(int argc, char* argv[])
<br>
{
<br>
&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;if (rank == 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;send(1);
<br>
&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;receive();
<br>
&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p>VALGRIND OUTPUT
<br>
<p>% mpicxx -std=c++11 -g -O0 -Wall -Wextra mpi.cpp &amp;&amp; mpirun -n 2 ./a.out                   
<br>
Stringlength = 6
<br>
Hallo
<br>
florian_at_asaru ~/scratch (git)-[master] % LD_PRELOAD=/usr/lib/valgrind/libmpiwrap-amd64-linux.so mpirun -n 2 valgrind ./a.out
<br>
==9290== Memcheck, a memory error detector
<br>
==9290== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
<br>
==9290== Using Valgrind-3.11.0 and LibVEX; rerun with -h for copyright info
<br>
==9290== Command: ./a.out
<br>
==9290== 
<br>
==9291== Memcheck, a memory error detector
<br>
==9291== Copyright (C) 2002-2015, and GNU GPL'd, by Julian Seward et al.
<br>
==9291== Using Valgrind-3.11.0 and LibVEX; rerun with -h for copyright info
<br>
==9291== Command: ./a.out
<br>
==9291== 
<br>
valgrind MPI wrappers  9290: Active for pid 9290
<br>
valgrind MPI wrappers  9291: Active for pid 9291
<br>
valgrind MPI wrappers  9290: Try MPIWRAP_DEBUG=help for possible options
<br>
valgrind MPI wrappers  9291: Try MPIWRAP_DEBUG=help for possible options
<br>
Stringlength = 6
<br>
==9291== Invalid read of size 1
<br>
==9291==    at 0x4C2DBA2: strlen (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==9291==    by 0x56852D8: length (char_traits.h:267)
<br>
==9291==    by 0x56852D8: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff870 is on thread 1's stack
<br>
==9291==  in frame #2, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
==9291== Invalid read of size 1
<br>
==9291==    at 0x4C2DBB4: strlen (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==9291==    by 0x56852D8: length (char_traits.h:267)
<br>
==9291==    by 0x56852D8: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:562)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff871 is on thread 1's stack
<br>
==9291==  in frame #2, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
==9291== Invalid read of size 1
<br>
==9291==    at 0x60A0FF1: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x5684F75: sputn (streambuf:451)
<br>
==9291==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
<br>
==9291==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long) (ostream_insert.h:101)
<br>
==9291==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff874 is on thread 1's stack
<br>
==9291==  in frame #4, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
==9291== Invalid read of size 1
<br>
==9291==    at 0x60A100D: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x5684F75: sputn (streambuf:451)
<br>
==9291==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
<br>
==9291==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long) (ostream_insert.h:101)
<br>
==9291==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff873 is on thread 1's stack
<br>
==9291==  in frame #4, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
==9291== Invalid read of size 2
<br>
==9291==    at 0x4C2F9C0: __GI_memcpy (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==9291==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x5684F75: sputn (streambuf:451)
<br>
==9291==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
<br>
==9291==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long) (ostream_insert.h:101)
<br>
==9291==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff870 is on thread 1's stack
<br>
==9291==  in frame #5, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
==9291== Invalid read of size 1
<br>
==9291==    at 0x4C2F9F8: __GI_memcpy (in /usr/lib/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==9291==    by 0x60A0F3A: _IO_file_xsputn@@GLIBC_2.2.5 (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x6096D1A: fwrite (in /usr/lib/libc-2.23.so)
<br>
==9291==    by 0x5684F75: sputn (streambuf:451)
<br>
==9291==    by 0x5684F75: __ostream_write&lt;char, std::char_traits&lt;char&gt; &gt; (ostream_insert.h:50)
<br>
==9291==    by 0x5684F75: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::__ostream_insert&lt;char, std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*, long) (ostream_insert.h:101)
<br>
==9291==    by 0x56852E6: std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp; std::operator&lt;&lt; &lt;std::char_traits&lt;char&gt; &gt;(std::basic_ostream&lt;char, std::char_traits&lt;char&gt; &gt;&amp;, char const*) (ostream:561)
<br>
==9291==    by 0x408A39: receive() (mpi.cpp:22)
<br>
==9291==    by 0x408B61: main (mpi.cpp:46)
<br>
==9291==  Address 0xffefff874 is on thread 1's stack
<br>
==9291==  in frame #5, created by receive() (mpi.cpp:8)
<br>
==9291== 
<br>
Hallo
<br>
==9291== 
<br>
==9291== HEAP SUMMARY:
<br>
==9291==     in use at exit: 96,351 bytes in 247 blocks
<br>
==9291==   total heap usage: 15,020 allocs, 14,773 frees, 13,362,383 bytes allocated
<br>
==9291== 
<br>
==9291== LEAK SUMMARY:
<br>
==9291==    definitely lost: 9,154 bytes in 39 blocks
<br>
==9291==    indirectly lost: 4,008 bytes in 22 blocks
<br>
==9291==      possibly lost: 0 bytes in 0 blocks
<br>
==9291==    still reachable: 83,189 bytes in 186 blocks
<br>
==9291==         suppressed: 0 bytes in 0 blocks
<br>
==9291== Rerun with --leak-check=full to see details of leaked memory
<br>
==9291== 
<br>
==9291== For counts of detected and suppressed errors, rerun with: -v
<br>
==9291== ERROR SUMMARY: 14 errors from 6 contexts (suppressed: 0 from 0)
<br>
==9290== 
<br>
==9290== HEAP SUMMARY:
<br>
==9290==     in use at exit: 96,351 bytes in 247 blocks
<br>
==9290==   total heap usage: 15,018 allocs, 14,771 frees, 13,370,045 bytes allocated
<br>
==9290== 
<br>
==9290== LEAK SUMMARY:
<br>
==9290==    definitely lost: 9,154 bytes in 39 blocks
<br>
==9290==    indirectly lost: 4,008 bytes in 22 blocks
<br>
==9290==      possibly lost: 0 bytes in 0 blocks
<br>
==9290==    still reachable: 83,189 bytes in 186 blocks
<br>
==9290==         suppressed: 0 bytes in 0 blocks
<br>
==9290== Rerun with --leak-check=full to see details of leaked memory
<br>
==9290== 
<br>
==9290== For counts of detected and suppressed errors, rerun with: -v
<br>
==9290== ERROR SUMMARY: 0 errors from 0 contexts (suppressed: 0 from 0)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Previous message:</strong> <a href="28616.php">Jeff Squyres (jsquyres): "Re: [OMPI users] General Questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
<li><strong>Reply:</strong> <a href="28618.php">Gilles Gouaillardet: "Re: [OMPI users] Sending string causes memory errors"</a>
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
