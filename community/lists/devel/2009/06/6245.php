<?
$subject_val = "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 16 13:08:58 2009" -->
<!-- isoreceived="20090616170858" -->
<!-- sent="Tue, 16 Jun 2009 10:08:49 -0700" -->
<!-- isosent="20090616170849" -->
<!-- name="Nifty Tom Mitchell" -->
<!-- email="niftyompi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option" -->
<!-- id="20090616170849.GA3179_at_compegg.wr.niftyegg.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="633137.81642.qm_at_web8707.mail.in.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option<br>
<strong>From:</strong> Nifty Tom Mitchell (<em>niftyompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-16 13:08:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Jun 16, 2009 at 12:49:52AM +0530, Leo P. wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Hi Eugene,
</span><br>
<span class="quotelev1">&gt;    Thanks for the information.  And i had already clicked on the &quot;Show
</span><br>
<span class="quotelev1">&gt;    All&quot; button in the profiler before i send an email to the group.  But
</span><br>
<span class="quotelev1">&gt;    it did not work :(
</span><br>
<span class="quotelev1">&gt;    Also Eugene, can you please help me understand what does turning on -g
</span><br>
<span class="quotelev1">&gt;    option mean. 
</span><br>
<p>The -g compiler flag instructs the compiler to keep or add symbolic debugging
<br>
information to the objects that it generates.   These symbols permit a debugger
<br>
(like gdb) to look up the address of a function's or data object by name.
<br>
<p>This symbolic information can exist both in your program's a.out file 
<br>
and also in the shared libs that it links to at run time.  The shared
<br>
lib topic is why a debugger can walk through your program (compiled -g) then
<br>
be no help when it branches into the shared library.  In the world
<br>
of MPI the mpilibrary in addition to your mpiprogram need to be compiled -g
<br>
if you wish to understand actions inside the mpilibrary.  Further the 
<br>
program runs on a system that can be different than the one on which it
<br>
was compiled which is important because many users forget that each rank
<br>
needs to link to symbol rich objects for symbolic debugging.
<br>
<p><span class="quotelev1">&gt;    Currently i am building the system with the following
</span><br>
<span class="quotelev1">&gt;    option
</span><br>
<span class="quotelev1">&gt;    ./configure --with-devel-headers --enable-trace --enable-mpi-profile
</span><br>
<span class="quotelev1">&gt;    --enable-mem-debug --enable-debug
</span><br>
<span class="quotelev1">&gt;    Do i need to add something additional here ?
</span><br>
<span class="quotelev1">&gt;    Also i don't understand what you mean by tool ecosystem.  [I am a
</span><br>
<span class="quotelev1">&gt;    complete newbie ]
</span><br>
<p>Tools can prove interesting.   It is possible to have a compiler,
<br>
symbol rich shared objects and more on your desktop were you compile
<br>
your program and only have the bare minimum of objects on the hosts
<br>
that you are running on.    You can have gdb on your desktop but
<br>
to debug rank-99 you need gdb and symbol rich objects on the remote 
<br>
node that rank-99 gets launched on...   To this end it can make a
<br>
lot of sense to debug a minimum number of ranks on a local system
<br>
with all the tools at hand.
<br>
<p>I should note that gdb is only one possible debugger.   gcc is only
<br>
one possible compiler.... You ecosystem is the list of tools used
<br>
and tools that can be used on each node/ rank.
<br>
<p>Do keep it simple... clustermonkey (<a href="http://clustermonkey.net/">http://clustermonkey.net/</a>)
<br>
has numerous beginner pages.  Also look for simple benchmark
<br>
and other simple MPI programs to explore.  If you cannot compile
<br>
and debug MPI's helloworld there is little hope in getting
<br>
larger programs running.  <a href="http://www.clustermonkey.net//content/view/48/32/">http://www.clustermonkey.net//content/view/48/32/</a>
<br>
<p>Debugging MPI jobs has a serious learning curve for a beginner.   Keep good notes...
<br>
<p>N.B. clusermonkey is a &quot;.net&quot; site.
<br>
<p><p><pre>
-- 
	T o m  M i t c h e l l 
	Found me a new hat, now what?
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6246.php">Bryan Lally: "Re: [OMPI devel] Hang in collectives involving shared memory"</a>
<li><strong>Previous message:</strong> <a href="6244.php">Eugene Loh: "Re: [OMPI devel] complete newbie question regarding	--enable-mpi-profile option"</a>
<li><strong>In reply to:</strong> <a href="6243.php">Leo P.: "Re: [OMPI devel] complete newbie question regarding --enable-mpi-profile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6249.php">Jeff Squyres: "Re: [OMPI devel] Enabling debugging and profiling in openMPI (make&quot;CFLAGS=-pg -g&quot;)"</a>
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
