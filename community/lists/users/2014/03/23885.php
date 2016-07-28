<?
$subject_val = "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 08:50:02 2014" -->
<!-- isoreceived="20140318125002" -->
<!-- sent="Tue, 18 Mar 2014 12:50:00 +0000" -->
<!-- isosent="20140318125000" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error" -->
<!-- id="C6E1E13B-7032-4996-9D50-020F2F8D9E8F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140318033312.53732tfw44vpv888_at_webmail.uu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-18 08:50:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Technically, no -- your code was pretty much ok.
<br>
<p>Yes, you're right that MPI_CHARACTER is for Fortran types.  But in your case, a char is probably equivalent to a CHARACTER, and therefore using MPI_CHAR vs. MPI_CHARACTER should have been ok.
<br>
<p>More specifically: it is ok to use MPI_CHARACTER when calling MPI functions from C, because you may have an opaque buffer that contains fortran data.
<br>
<p>So this is a bug in OMPI -- we need to fix this.  As you noted, it only happens when OMPI is configured/built with --enable-mpi-thread-multiple, which is a bit suspicious.
<br>
<p>I'll file a bug for this; thanks for identifying the issue.
<br>
<p><p>On Mar 17, 2014, at 10:33 PM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gustavo Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I guess you need to provide buffers of char type to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send and MPI_Recv, not NULL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That was not the problem, I was anyway using message size 0, so then it should be OK to give NULL as the buffer pointer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did find the problem now; it turns out that this was not at all due to any bug in Open MPI, it was my program that had a bug; I used wrong constant specifying the datatype. I used MPI_CHARACTER which I thought would correspond to a char or unsigned char in C/C++. But now when I checked the MPI standard it says that MPI_CHARACTER is for the Fortran CHARACTER type. Since I am using C, not Fortran, I should use MPI_CHAR or MPI_SIGNED_CHAR or MPI_UNSIGNED_CHAR. Now I have corrected my program by changing MPI_CHARACTER to MPI_UNSIGNED_CHAR, and then it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for reporting this as a bug in Open MPI, it was really a bug in my own code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; / Elias
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Quoting Gustavo Correa &lt;gus_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess you need to provide buffers of char type to
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send and MPI_Recv, not NULL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 16, 2014, at 8:04 PM, Elias Rudberg wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the quick answer!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try running the &quot;ring&quot; program in our example directory and see if that works
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just did this, and it works. (I ran ring_c.c)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking in your ring_c.c code, I see that it is quite similar to my test program but one thing that differs is the datatype: the ring program uses MPI_INT but my test uses MPI_CHARACTER.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried changing from MPI_INT to MPI_CHARACTER in ring_c.c (and the type of the variable &quot;message&quot; from int to char), and then ring_c.c fails in the same way as my test code. And my code works if changing from MPI_CHARACTER to MPI_INT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it looks like the there is a bug that is triggered when using MPI_CHARACTER, but it works with MPI_INT.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; / Elias
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Quoting Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Try running the &quot;ring&quot; program in our example directory and see if that works
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 16, 2014, at 4:26 PM, Elias Rudberg &lt;elias.rudberg_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I would like to report a bug in Open MPI 1.7.4 when compiled with --enable-mpi-thread-multiple.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The bug can be reproduced with the following test program (mpi-send-recv.c):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main() {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init(NULL, NULL);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int rank;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;Rank %d at start\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; if (rank)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Send(NULL, 0, MPI_CHARACTER, 0, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;  MPI_Recv(NULL, 0, MPI_CHARACTER, 1, 0, MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; printf(&quot;Rank %d at end\n&quot;, rank);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ===========================================
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; With Open MPI 1.7.4 compiled with --enable-mpi-thread-multiple, the test program above fails like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rank 0 at start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Rank 1 at start
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] *** reported by process [140733606985729,140256452018176]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] *** MPI_ERR_TYPE: invalid datatype
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [elias-p6-2022scm:2743] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Steps I use to reproduce this in Ubuntu:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (1) Download openmpi-1.7.4.tar.gz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (2) Configure like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (3) make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (4) Compile test program like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpicc mpi-send-recv.c
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (5) Run like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 ./a.out
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This gives the error above.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Of course, in my actual application I will want to call MPI_Init_thread with MPI_THREAD_MULTIPLE instead of just MPI_Init, but that does not seem to matter for this error; the same error comes regardless of the way I call MPI_Init/MPI_Init_thread. So I just put MPI_Init in the test code above to make it as short as possible.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Do you agree that this is a bug, or am I doing something wrong?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Any ideas for workarounds to make things work with --enable-mpi-thread-multiple? (I do need threads, so skipping --enable-mpi-thread-multiple is probably not an option for me.)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Elias
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23886.php">Nathan Hjelm: "Re: [OMPI users] Usage of MPI_Win_create with MPI_Comm_Spawn"</a>
<li><strong>Previous message:</strong> <a href="23884.php">Ralph Castain: "Re: [OMPI users] another corner case hangup in openmpi-1.7.5rc3"</a>
<li><strong>In reply to:</strong> <a href="23883.php">Elias Rudberg: "Re: [OMPI users] Open MPI 1.7.4 with --enable-mpi-thread-multiple gives MPI_Recv error"</a>
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
