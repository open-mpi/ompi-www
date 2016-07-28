<?
$subject_val = "Re: [OMPI users] Debugging OpenMPI calls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 11:40:25 2009" -->
<!-- isoreceived="20090928154025" -->
<!-- sent="Mon, 28 Sep 2009 11:40:20 -0400" -->
<!-- isosent="20090928154020" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging OpenMPI calls" -->
<!-- id="8B0DB540-57AF-4D76-9600-8B62667A39F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f93233e90909280257y22c680bax5f93c02daa8c54e2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging OpenMPI calls<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 11:40:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to just configure Open MPI with:
<br>
<p>&nbsp;&nbsp;&nbsp;./configure CFLAGS=-g3 ...
<br>
<p>That will pass &quot;-g3&quot; to every Makefile in Open MPI.
<br>
<p>FWIW: I do variants on this technique and gdb is always able to jump  
<br>
to the right source location if I &quot;break MPI_Barrier&quot; (for example).   
<br>
We actually have a &quot;--enable-debug&quot; option to OMPI's configure, but it  
<br>
does turn on a bunch of other debugging code that will definitely  
<br>
result in performance degradation at run-time (one of its side effects  
<br>
is to add &quot;-g&quot; to every Makefile).
<br>
<p><p>On Sep 28, 2009, at 5:57 AM, Aniruddha Marathe wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to OpenMPI library and I am trying to step through common MPI
</span><br>
<span class="quotelev1">&gt; communication calls using gdb. I attach gdb to one of the processes
</span><br>
<span class="quotelev1">&gt; (using the steps mentioned on the OpenMPI Debugging FAQ page) and set
</span><br>
<span class="quotelev1">&gt; a breakpoint on 'MPI_Barrier' and expect gdb to jump into the
</span><br>
<span class="quotelev1">&gt; definition of MPI_Barrier function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've manually added -g3 compilation flag to the Makefiles in some of
</span><br>
<span class="quotelev1">&gt; the directories that I thought relevant ({ROOT}/ompi/mpi/c etc). I
</span><br>
<span class="quotelev1">&gt; also specified the source file paths in gdb using the 'dir' command.
</span><br>
<span class="quotelev1">&gt; However, gdb is unable to jump into the appropriate source location
</span><br>
<span class="quotelev1">&gt; when it hits the breakpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone please let me know if I am missing something here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for looking into my post.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Aniruddha
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10795.php">guosong: "Re: [OMPI users] How to create multi-thread parallel program using	thread-safe send and recv?"</a>
<li><strong>Previous message:</strong> <a href="10793.php">Jeff Squyres: "Re: [OMPI users] How to create multi-thread parallel program using thread-safe send and recv?"</a>
<li><strong>In reply to:</strong> <a href="10791.php">Aniruddha Marathe: "[OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
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
