<?
$subject_val = "Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 30 08:27:51 2014" -->
<!-- isoreceived="20140530122751" -->
<!-- sent="Fri, 30 May 2014 14:27:46 +0200" -->
<!-- isosent="20140530122746" -->
<!-- name="Marco Atzeri" -->
<!-- email="marco.atzeri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5" -->
<!-- id="53887942.5000400_at_gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHaow_8=Q3rs=9tCezdTb6dJ7yOqVqmWV9DzZLN98yB-yDmdZQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5<br>
<strong>From:</strong> Marco Atzeri (<em>marco.atzeri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-30 08:27:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24517.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI installation problem"</a>
<li><strong>Previous message:</strong> <a href="24515.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>In reply to:</strong> <a href="24514.php">Sergii Veremieiev: "[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 30/05/2014 13:45, Sergii Veremieiev wrote:
<br>
<span class="quotelev1">&gt; Dear Sir/Madam,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to compile and run a simple &quot;Hello World&quot; C++/MPI code on my
</span><br>
<span class="quotelev1">&gt; personal desktop machine (6-core Intel Core i7-3930K CPU with Windows 7
</span><br>
<span class="quotelev1">&gt; SP1 and Cygwin with the default built-in Open MPI 1.7.5 and GCC 4.8.2).
</span><br>
<span class="quotelev1">&gt; I'm beginner with this, never run parallel codes on desktops, only on a
</span><br>
<span class="quotelev1">&gt; cluster. Here is the code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     int noprocs, nid;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI::Init(argc,argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     nid = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     noprocs = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if (nid==0) cout &lt;&lt; &quot;Hello from processor &quot; &lt;&lt; nid &lt;&lt; &quot; of &quot; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; noprocs &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using &#147;mpicxx -o Hello Hello.cpp&#148; the code compiles without any problems
</span><br>
<span class="quotelev1">&gt; and generates an executable. However when I try to run the code using
</span><br>
<span class="quotelev1">&gt; &#147;mpirun -np 1 Hello&#148; or &#147;mpiexec -n 1 Hello&#148; the following error message
</span><br>
<span class="quotelev1">&gt; is returned:
</span><br>
<p>Hi Sergii
<br>
<p>mpirun -np 1 ./Hello
<br>
&nbsp;&nbsp;works fine for me : &quot;Hello from processor 0 of 1&quot;
<br>
<p>As the message is
<br>
&quot;opal_os_dirpath_create: Error: Unable to create the sub-directory
<br>
/tmp/openmpi-sessions-enrsvere_at_byenr502b-01f_0/11302&quot;
<br>
<p>you need to check the location and permission of /tmp
<br>
<p>You can also follows guidelines on <a href="https://cygwin.com/problems.html">https://cygwin.com/problems.html</a>
<br>
and follow up on cygwin mailing list <a href="https://cygwin.com/lists.html">https://cygwin.com/lists.html</a>
<br>
<p><p>Not relevant, but please note your code is missing something as
<br>
<p>$ mpirun -np 4 ./Hello
<br>
Hello from processor 0 of 4
<br>
<p><p>While the standard hello_cxx.cc
<br>
----------------------------
<br>
#include &quot;mpi.h&quot;
<br>
#include &lt;iostream&gt;
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank, size, len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char version[MPI_MAX_LIBRARY_VERSION_STRING];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rank = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;size = MPI::COMM_WORLD.Get_size();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_library_version(version, &amp;len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;std::cout &lt;&lt; &quot;Hello, world!  I am &quot; &lt;&lt; rank &lt;&lt; &quot; of &quot; &lt;&lt; size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot;(&quot; &lt;&lt; version &lt;&lt; &quot;, &quot; &lt;&lt; len &lt;&lt; &quot;)&quot; &lt;&lt; std::endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
-------------------------------
<br>
<p>produces
<br>
<p>&nbsp;&nbsp;$ mpirun -np 4 ./hello_cxx
<br>
Hello, world!  I am 1 of 4 ...
<br>
Hello, world!  I am 0 of 4 ...
<br>
Hello, world!  I am 2 of 4 ...
<br>
Hello, world!  I am 3 of 4 ...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24517.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI installation problem"</a>
<li><strong>Previous message:</strong> <a href="24515.php">&#208;&#162;&#208;&#184;&#208;&#188;&#209;&#131;&#209;&#128; &#208;&#152;&#209;&#129;&#208;&#188;&#208;&#176;&#208;&#179;&#208;&#184;&#208;&#187;&#208;&#190;&#208;&#178;: "[OMPI users] [warn] Epoll ADD(1) on fd 0 failed"</a>
<li><strong>In reply to:</strong> <a href="24514.php">Sergii Veremieiev: "[OMPI users] Problem to Run Hello World on a desktop with Cygwin and OpenMPI 1.7.5"</a>
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
