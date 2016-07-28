<?
$subject_val = "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 20 14:36:37 2009" -->
<!-- isoreceived="20090320183637" -->
<!-- sent="Fri, 20 Mar 2009 11:36:29 -0700" -->
<!-- isosent="20090320183629" -->
<!-- name="Michael Jennings" -->
<!-- email="mej_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode" -->
<!-- id="20090320183629.GF11930_at_lbl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20090320174906.GB26929_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode<br>
<strong>From:</strong> Michael Jennings (<em>mej_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-20 14:36:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday, 20 March 2009, at 12:49:06 (-0500),
<br>
Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone successfully compiled Open MPI with the PGI compilers in
</span><br>
<span class="quotelev1">&gt; 32-bit mode (e.g., using -tp=k8-32 flag)?  I am getting the following
</span><br>
<span class="quotelev1">&gt; error with 32-bit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    $ cd opal/mca/memory/ptmalloc2
</span><br>
<span class="quotelev1">&gt;    $ make
</span><br>
<span class="quotelev1">&gt;    /bin/sh ../../../../libtool --tag=CC --mode=link pgcc -O -DNDEBUG -tp=k8-32 -export-dynamic -o libopenmpi-malloc.la -rpath /opt/SUNWhpc/HPC8.2/pgi/lib malloc.lo malloc-stats.lo -lnsl -lutil -lpthread
</span><br>
<span class="quotelev1">&gt;    libtool: link: pgcc -shared -fpic -DPIC .libs/malloc.o .libs/malloc-stats.o -lnsl -lutil -lpthread -lc -Wl,-soname -Wl,libopenmpi-malloc.so.0 -o .libs/libopenmpi-malloc.so.0.0.0
</span><br>
<p>I see &quot;-tp=k8-32&quot; in your libtool line but not in the actual link
<br>
command.  Have you tried adding that flag to your LDFLAGS in addition
<br>
to your CFLAGS?
<br>
<p><span class="quotelev1">&gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc.o' is incompatible with i386:x86-64 output
</span><br>
<span class="quotelev1">&gt;   /usr/bin/ld: warning: i386 architecture of input file `.libs/malloc-stats.o' is incompatible with i386:x86-64 output
</span><br>
<p>This indicates to me that the linker is trying to generate 64-bit
<br>
output, which would make sense if the flag to generate 32-bit output
<br>
never made it to the linker.
<br>
<p>Michael
<br>
<p><pre>
-- 
Michael Jennings &lt;mej_at_[hidden]&gt;
Linux Systems and Cluster Admin
UNIX and Cluster Computing Group
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8543.php">Ethan Mallove: "Re: [OMPI users] Compiling Open MPI with PGI compilers in 32-bit	mode"</a>
<li><strong>Previous message:</strong> <a href="8541.php">Prentice Bisbal: "Re: [OMPI users] Compiling Open MPI with PGI compilers in	32-bit mode"</a>
<li><strong>In reply to:</strong> <a href="8535.php">Ethan Mallove: "[OMPI users] Compiling Open MPI with PGI compilers in 32-bit mode"</a>
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
