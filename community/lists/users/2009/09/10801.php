<?
$subject_val = "Re: [OMPI users] Debugging OpenMPI calls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 14:28:59 2009" -->
<!-- isoreceived="20090928182859" -->
<!-- sent="Mon, 28 Sep 2009 11:28:35 -0700" -->
<!-- isosent="20090928182835" -->
<!-- name="Aniruddha Marathe" -->
<!-- email="marathe.aniruddha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging OpenMPI calls" -->
<!-- id="f93233e90909281128q228bf0b9sf172e54eadb1f36e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8B0DB540-57AF-4D76-9600-8B62667A39F2_at_cisco.com" -->
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
<strong>From:</strong> Aniruddha Marathe (<em>marathe.aniruddha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 14:28:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for the pointers. I tried with both CFLAGS=-g3 and --enable-debug
<br>
(separately), however, I am still unable to jump into the MPI source. It
<br>
seems I am missing a small step(s) somewhere.
<br>
<p>I compiled my MPI application with the new library built with above flags,
<br>
ran it and attached gdb to one of the processes. Following are the steps
<br>
that I performed with gdb:
<br>
<p>...
<br>
...
<br>
0x00110416 in __kernel_vsyscall ()
<br>
Missing separate debuginfos, use: debuginfo-install glibc.i686
<br>
(gdb) dir /home/amarathe/mpi/svn_openmpi/ompi-trunk/ompi/mpi/c
<br>
Source directories searched:
<br>
/home/amarathe/mpi/svn_openmpi/ompi-trunk/ompi/mpi/c:$cdir:$cwd
<br>
(gdb) break MPI_Barrier
<br>
Breakpoint 1 at 0x155596
<br>
<p><p>When gdb hits breakpoint 1, it jumps at the address but cannot find the
<br>
source file for 'MPI_Barrier' definition.
<br>
<p><p>Breakpoint 1, 0x00155596 in PMPI_Barrier () from
<br>
/home/amarathe/mpi/openmpi/openmpi-1.3.3_install/lib/libmpi.so.0
<br>
(gdb) s
<br>
Single stepping until exit from function PMPI_Barrier,
<br>
which has no line number information.
<br>
main (argc=1, argv=0xbf9a1484) at smg2000.c:114
<br>
114       P  = num_procs;
<br>
(gdb)
<br>
<p><p>Is this the right approach?
<br>
<p>Thanks,
<br>
Aniruddha
<br>
<p>On Mon, Sep 28, 2009 at 8:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; You might want to just configure Open MPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ./configure CFLAGS=-g3 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That will pass &quot;-g3&quot; to every Makefile in Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW: I do variants on this technique and gdb is always able to jump to the
</span><br>
<span class="quotelev1">&gt; right source location if I &quot;break MPI_Barrier&quot; (for example).  We actually
</span><br>
<span class="quotelev1">&gt; have a &quot;--enable-debug&quot; option to OMPI's configure, but it does turn on a
</span><br>
<span class="quotelev1">&gt; bunch of other debugging code that will definitely result in performance
</span><br>
<span class="quotelev1">&gt; degradation at run-time (one of its side effects is to add &quot;-g&quot; to every
</span><br>
<span class="quotelev1">&gt; Makefile).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 28, 2009, at 5:57 AM, Aniruddha Marathe wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am new to OpenMPI library and I am trying to step through common MPI
</span><br>
<span class="quotelev2">&gt;&gt; communication calls using gdb. I attach gdb to one of the processes
</span><br>
<span class="quotelev2">&gt;&gt; (using the steps mentioned on the OpenMPI Debugging FAQ page) and set
</span><br>
<span class="quotelev2">&gt;&gt; a breakpoint on 'MPI_Barrier' and expect gdb to jump into the
</span><br>
<span class="quotelev2">&gt;&gt; definition of MPI_Barrier function.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've manually added -g3 compilation flag to the Makefiles in some of
</span><br>
<span class="quotelev2">&gt;&gt; the directories that I thought relevant ({ROOT}/ompi/mpi/c etc). I
</span><br>
<span class="quotelev2">&gt;&gt; also specified the source file paths in gdb using the 'dir' command.
</span><br>
<span class="quotelev2">&gt;&gt; However, gdb is unable to jump into the appropriate source location
</span><br>
<span class="quotelev2">&gt;&gt; when it hits the breakpoint.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could anyone please let me know if I am missing something here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for looking into my post.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Aniruddha
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10801/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<li><strong>Previous message:</strong> <a href="10800.php">Charles Wright: "Re: [OMPI users] [btl_openib_component.c:1373:btl_openib_component_progress] error polling HP CQ with -2 errno says Success"</a>
<li><strong>In reply to:</strong> <a href="10794.php">Jeff Squyres: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<li><strong>Reply:</strong> <a href="10807.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
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
