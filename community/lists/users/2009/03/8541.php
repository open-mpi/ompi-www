<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:25:01 2009" -->
<!-- isoreceived="20090320182501" -->
<!-- sent="Fri, 20 Mar 2009 14:24:57 -0400" -->
<!-- isosent="20090320182457" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode" -->
<!-- id="49C3DF79.9050400_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20090320181546.GB26932_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:24:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ethan Mallove wrote:
<br>
<span class="quotelev1">&gt; On Fri, Mar/20/2009 11:06:00AM, Doug Reeder wrote:
</span><br>
<span class="quotelev2">&gt;&gt;    Ethan,
</span><br>
<span class="quotelev2">&gt;&gt;    It looks likesome of the object files that you are trying to link to the
</span><br>
<span class="quotelev2">&gt;&gt;    malloc.o and malloc-stats.o were compiled as 64 bit objects. Are you using
</span><br>
<span class="quotelev2">&gt;&gt;    the 32 bit compiler flag for the compile step as well as the link step.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like I'm in 32-bit mode for the compile:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../opal/include -I../../orte/include -I../../ompi/include -I../../opal/mca/paffinity/linux/plpa/src/libplpa -I../.. -D_REENTRANT -O -DNDEBUG -tp=k8-32 -c malloc.c  -fpic -DPIC -o .libs/malloc.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   libtool: compile:  pgcc -DHAVE_CONFIG_H -I. -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../opal/mca/paffinity/linux/plpa/src/libplpa -DMALLOC_DEBUG=0 -D_GNU_SOURCE=1 -DUSE_TSD_DATA_HACK=1 -DMALLOC_HOOKS=1 -I./sysdeps/pthread -I./sysdeps/generic -I../../../.. -D_REENTRANT -O -DNDEBUG -tp=k8-32 -c malloc-stats.c  -fpic -DPIC -o .libs/malloc-stats.o
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can't I ignore those warnings for now?  It seems PGI allows me to
</span><br>
<span class="quotelev1">&gt; create a working executable, even if I mix &quot;i386&quot; with &quot;i386:x86-64&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   $ pgcc -c -tp=k8-32 bar.c -o bar_32.o
</span><br>
<span class="quotelev1">&gt;   $ pgcc -tp=k8-64 foo.c bar_32.o -o foo_mix
</span><br>
<span class="quotelev1">&gt;   /home/em162155/tmp/foo.c:
</span><br>
<span class="quotelev1">&gt;   /usr/bin/ld: warning: i386 architecture of input file `bar_32.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;   $ ./foo_mix
</span><br>
<span class="quotelev1">&gt;   foo
</span><br>
<p>What's the output of 'file bar_32.o'?
<br>
What's the search path for your linker?
<br>
<p>Normally when I see ld errors like that but the program still works, it
<br>
means one thing: Both 32-bit and 64-bit versions of the library are in
<br>
the ld search path (set in either /etc/ld.so.conf, or LD_LIBRARY_PATH)
<br>
and the wrong version is found earlier in the path than the correct
<br>
version. ld complains when it finds the wrong version, but finds the
<br>
correct version and completes the linking correctly and silently.
<br>
<p><p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8542.php">Michael Jennings: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8540.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8539.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8537.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
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
