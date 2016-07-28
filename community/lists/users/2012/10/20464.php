<?
$subject_val = "[OMPI users] windows + threads";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 11 02:52:52 2012" -->
<!-- isoreceived="20121011065252" -->
<!-- sent="Thu, 11 Oct 2012 06:52:45 +0000" -->
<!-- isosent="20121011065245" -->
<!-- name="Biddiscombe, John A." -->
<!-- email="biddisco_at_[hidden]" -->
<!-- subject="[OMPI users] windows + threads" -->
<!-- id="50320452A334BD42A5EC72BAD2145099080C7077_at_MBX10.d.ethz.ch" -->
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
<strong>Subject:</strong> [OMPI users] windows + threads<br>
<strong>From:</strong> Biddiscombe, John A. (<em>biddisco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-11 02:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<li><strong>Reply:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>I searched the archives, but didn't turn anything up...
<br>
<p>I have a new machine which I've installed windows 8 x64 + MSVC 2012 (MSVC 11) and have compiled openmpi from the git svn clone(on branch origin/v1.6)  using these settings ...
<br>
cmake -DOMPI_ENABLE_THREAD_MULTIPLE=true -DOPAL_ENABLE_MULTI_THREADS=true -DOMPI_WANT_CXX_BINDINGS=false -DCMAKE_C_FLAGS:STRING=/MP -DCMAKE_CXX_FLAGS:STRING=/MP -DCMAKE_INSTALL_PREFIX=&quot;%MPI_DIR%&quot; D:\Code\ompi-svn-mirror -DCMAKE_GENERATOR=&quot;Visual Studio 11 Win64&quot;
<br>
<p>The compilation succeeds, but when I run my app, I see that THREADS_MULTIPLE is not set. So I tried running ompi_info and I see that it outputs the following (at bottom of post), but locks up.
<br>
The stack trace when it locks up is as follows...
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!opal_atomic_cmpset_ptr(volatile void * addr, void * oldval, void * newval) Line 198   C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!opal_atomic_lifo_push(opal_atomic_lifo_t * lifo, opal_list_item_t * item) Line 77 C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!ompi_free_list_grow(ompi_free_list_t * flist, unsigned __int64 num_elements) Line 237     C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!ompi_rb_tree_init(ompi_rb_tree_t * tree, int (void *, void *) * comp) Line 77   C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!mca_mpool_base_tree_init() Line 88  C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpid.dll!mca_mpool_base_open() Line 86  C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!ompi_info_open_components() Line 515   C++
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!main(int argc, char * * argv) Line 285 C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!__tmainCRTStartup() Line 536 C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ompi_info.exe!mainCRTStartup() Line 377    C
<br>
&nbsp;&nbsp;&nbsp;&nbsp;kernel32.dll!000007feac87167e() Unknown
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ntdll.dll!000007feae4cc3f1()    Unknown
<br>
<p>My question is : has anyone tested msvc 12 and openmpi and can they recommend a source version I can use to compile and enable threads. If this combination of compilers etc is not yet supported, how can I help fix this. The fact that ompi_info reports &quot;Thread support: no&quot; indicates to me that either the cmake config is failing, or I've messed up with options. I tried the v1.7 branch, but the cmake support appears flaky. I'm willing to either fix the 1.7 cmake or the 1.6 thread lock, if necessary, but I don't want to waste my time if it isn't going to work within a reasonable amount of debugging. I welcome any advice on how to get this compiling and working and offer cmake related help if you need it to work on this platform.
<br>
NB. I think I said my program runs, but actually, with threads enabled it bombs out during  MPI_Init_thread(&amp;argc, &amp;argv, MPI_THREAD_MULTIPLE, &amp;provided); - it runs without threads, but I need them.
<br>
<p>Thanks
<br>
<p>JB
<br>
<p>output of ompi_info
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package: Open MPI biddisco_at_CRUSCA Distribution
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.6.3a1-1
<br>
&nbsp;&nbsp;&nbsp;Open MPI SVN revision: -1
<br>
&nbsp;&nbsp;&nbsp;Open MPI release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.6.3a1-1
<br>
&nbsp;&nbsp;&nbsp;Open RTE SVN revision: -1
<br>
&nbsp;&nbsp;&nbsp;Open RTE release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.6.3a1-1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: -1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Unreleased developer copy
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI API: 2.1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.6.3a1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Prefix: D:\build\openmpi\Debug/..
<br>
Configured architecture: Windows-6.2 64 bit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: CRUSCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured by: biddisco
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configured on: 07:52 11/10/2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Configure host: CRUSCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built by: biddisco
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built on: 07:52 11/10/2012
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Built host: CRUSCA
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ bindings: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 bindings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 bindings: no
<br>
Fortran90 bindings size: na
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler: cl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler absolute: C:/Program Files (x86)/Microsoft Visual Studio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.0/VC/bin/x86_amd64/cl.exe
<br>
&nbsp;&nbsp;C compiler family name: MICROSOFT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C compiler version: 1700
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ compiler: cl
<br>
&nbsp;&nbsp;C++ compiler absolute: C:/Program Files (x86)/Microsoft Visual Studio
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11.0/VC/bin/x86_amd64/cl.exe
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 compiler: none
<br>
&nbsp;&nbsp;Fortran77 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 compiler: none
<br>
&nbsp;&nbsp;Fortran90 compiler abs: none
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ profiling: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran77 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fortran90 profiling: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;C++ exceptions: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thread support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sparse Groups: no
<br>
&nbsp;&nbsp;Internal debug support: no
<br>
&nbsp;&nbsp;MPI interface warnings: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI parameter check: never
<br>
Memory profiling support: no
<br>
Memory debugging support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libltdl support: no
<br>
&nbsp;&nbsp;&nbsp;Heterogeneous support: no
<br>
mpirun default --prefix: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI I/O support: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_WTIME support: gettimeofday
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Symbol vis. support: yes
<br>
&nbsp;&nbsp;&nbsp;Host topology support: no
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI extensions: none
<br>
&nbsp;&nbsp;&nbsp;FT Checkpoint support: yes (checkpoint thread: no)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VampirTrace support: no
<br>
&nbsp;&nbsp;MPI_MAX_PROCESSOR_NAME: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_ERROR_STRING: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_OBJECT_NAME: 64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_KEY: 36
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_INFO_VAL: 256
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MAX_PORT_NAME: 1024
<br>
&nbsp;&nbsp;MPI_MAX_DATAREP_STRING: 128
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20464/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20465.php">Siegmar Gross: "Re: [OMPI users] internal error with mpiJava in openmpi-1.9a1r27380"</a>
<li><strong>Previous message:</strong> <a href="20463.php">Ralph Castain: "Re: [OMPI users] Open MPI on Cray XE6 / Gemini"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
<li><strong>Reply:</strong> <a href="20467.php">Biddiscombe, John A.: "Re: [OMPI users] windows + threads"</a>
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
