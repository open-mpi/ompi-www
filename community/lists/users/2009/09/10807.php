<?
$subject_val = "Re: [OMPI users] Debugging OpenMPI calls";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 23:12:35 2009" -->
<!-- isoreceived="20090929031235" -->
<!-- sent="Mon, 28 Sep 2009 20:12:10 -0700" -->
<!-- isosent="20090929031210" -->
<!-- name="Aniruddha Marathe" -->
<!-- email="marathe.aniruddha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging OpenMPI calls" -->
<!-- id="f93233e90909282012pd5f11e8x9ea413ec7a285c40_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f93233e90909281128q228bf0b9sf172e54eadb1f36e_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-09-28 23:12:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, it turned out to be a really stupid mistake.
<br>
<p>Sorry for spamming and thanks for the help!
<br>
<p>Regards,
<br>
Aniruddha
<br>
<p>On Mon, Sep 28, 2009 at 11:28 AM, Aniruddha Marathe &lt;
<br>
marathe.aniruddha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the pointers. I tried with both CFLAGS=-g3 and --enable-debug
</span><br>
<span class="quotelev1">&gt; (separately), however, I am still unable to jump into the MPI source. It
</span><br>
<span class="quotelev1">&gt; seems I am missing a small step(s) somewhere.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I compiled my MPI application with the new library built with above flags,
</span><br>
<span class="quotelev1">&gt; ran it and attached gdb to one of the processes. Following are the steps
</span><br>
<span class="quotelev1">&gt; that I performed with gdb:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 0x00110416 in __kernel_vsyscall ()
</span><br>
<span class="quotelev1">&gt; Missing separate debuginfos, use: debuginfo-install glibc.i686
</span><br>
<span class="quotelev1">&gt; (gdb) dir /home/amarathe/mpi/svn_openmpi/ompi-trunk/ompi/mpi/c
</span><br>
<span class="quotelev1">&gt; Source directories searched:
</span><br>
<span class="quotelev1">&gt; /home/amarathe/mpi/svn_openmpi/ompi-trunk/ompi/mpi/c:$cdir:$cwd
</span><br>
<span class="quotelev1">&gt; (gdb) break MPI_Barrier
</span><br>
<span class="quotelev1">&gt; Breakpoint 1 at 0x155596
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When gdb hits breakpoint 1, it jumps at the address but cannot find the
</span><br>
<span class="quotelev1">&gt; source file for 'MPI_Barrier' definition.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Breakpoint 1, 0x00155596 in PMPI_Barrier () from
</span><br>
<span class="quotelev1">&gt; /home/amarathe/mpi/openmpi/openmpi-1.3.3_install/lib/libmpi.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) s
</span><br>
<span class="quotelev1">&gt; Single stepping until exit from function PMPI_Barrier,
</span><br>
<span class="quotelev1">&gt; which has no line number information.
</span><br>
<span class="quotelev1">&gt; main (argc=1, argv=0xbf9a1484) at smg2000.c:114
</span><br>
<span class="quotelev1">&gt; 114       P  = num_procs;
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the right approach?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Aniruddha
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 28, 2009 at 8:40 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to just configure Open MPI with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure CFLAGS=-g3 ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That will pass &quot;-g3&quot; to every Makefile in Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: I do variants on this technique and gdb is always able to jump to
</span><br>
<span class="quotelev2">&gt;&gt; the right source location if I &quot;break MPI_Barrier&quot; (for example).  We
</span><br>
<span class="quotelev2">&gt;&gt; actually have a &quot;--enable-debug&quot; option to OMPI's configure, but it does
</span><br>
<span class="quotelev2">&gt;&gt; turn on a bunch of other debugging code that will definitely result in
</span><br>
<span class="quotelev2">&gt;&gt; performance degradation at run-time (one of its side effects is to add &quot;-g&quot;
</span><br>
<span class="quotelev2">&gt;&gt; to every Makefile).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 28, 2009, at 5:57 AM, Aniruddha Marathe wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am new to OpenMPI library and I am trying to step through common MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communication calls using gdb. I attach gdb to one of the processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (using the steps mentioned on the OpenMPI Debugging FAQ page) and set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a breakpoint on 'MPI_Barrier' and expect gdb to jump into the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; definition of MPI_Barrier function.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've manually added -g3 compilation flag to the Makefiles in some of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the directories that I thought relevant ({ROOT}/ompi/mpi/c etc). I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; also specified the source file paths in gdb using the 'dir' command.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, gdb is unable to jump into the appropriate source location
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when it hits the breakpoint.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could anyone please let me know if I am missing something here?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for looking into my post.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aniruddha
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10807/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10808.php">Rahul Nabar: "[OMPI users] profile the performance of a MPI code: how much traffic is being generated?"</a>
<li><strong>Previous message:</strong> <a href="10806.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>In reply to:</strong> <a href="10801.php">Aniruddha Marathe: "Re: [OMPI users] Debugging OpenMPI calls"</a>
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
