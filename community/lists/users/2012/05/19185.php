<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 06:55:08 2012" -->
<!-- isoreceived="20120504105508" -->
<!-- sent="Fri, 04 May 2012 12:52:53 +0200" -->
<!-- isosent="20120504105253" -->
<!-- name="Jorge Chiva Segura" -->
<!-- email="jordic_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="1336128773.8607.2439.camel_at_hokuto" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20120504060130.GA855_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Jorge Chiva Segura (<em>jordic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 06:52:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I think that my problem:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/05/19182.php">http://www.open-mpi.org/community/lists/users/2012/05/19182.php</a>
<br>
is similar to yours. Following the advice in the thread that you posted:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2011/07/16996.php">http://www.open-mpi.org/community/lists/users/2011/07/16996.php</a>
<br>
I have tried to run my program adding:
<br>
-mca btl_openib_flags 305
<br>
to the mpirun command and... it passes the point where it hanged all the
<br>
other times :D !!!!
<br>
<p>Now I will try to understand why it is happening and what those flags
<br>
means but before I wanted to share this with you, just in case it could
<br>
help you too.
<br>
<p>Good luck and thank you and Brock for your help,
<br>
Jorge
<br>
<p><p>On Thu, 2012-05-03 at 23:01 -0700, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 04:19:31PM -0400, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt; &gt; To throw in my $0.02, though it is worth less.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Were you running this on verb based infiniband? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We see a problem that we have a work around for even with the newest 1.4.5
</span><br>
<span class="quotelev2">&gt; &gt; only on IB, we can reproduce it with IMB.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can now confirm that the program hangs with 1.4.5 as well at exactly the same
</span><br>
<span class="quotelev1">&gt; point.
</span><br>
<span class="quotelev1">&gt; Any chance that this has to do with the default settings for the
</span><br>
<span class="quotelev1">&gt; btl_openib_max_eager_rdma and mpi_leave_pinned mca parameters? I.e.,
</span><br>
<span class="quotelev1">&gt; should I try to run the program with
</span><br>
<span class="quotelev1">&gt; --mca btl_openib_max_eager_rdma 0 --mca mpi_leave_pinned 0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; You can find an old thread from me about it.  Your problem might not be the same.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brock Palen
</span><br>
<span class="quotelev2">&gt; &gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt; &gt; CAEN Advanced Computing
</span><br>
<span class="quotelev2">&gt; &gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This one?
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2011/07/16996.php">http://www.open-mpi.org/community/lists/users/2011/07/16996.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Martin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 24, 2012, at 3:09 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Could you repeat your tests with 1.4.5 and/or 1.5.5?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Apr 23, 2012, at 1:32 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am debugging a program that hangs in MPI_Allreduce (openmpi-1.4.3).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; An strace of one of the processes shows:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Process 10925 attached with 3 threads - interrupt to quit
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10927] poll([{fd=17, events=POLLIN}, {fd=16, events=POLLIN}], 2, -1 &lt;unfini
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; shed ...&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10926] select(15, [8 14], [], NULL, NULL &lt;unfinished ...&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ...
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The program is a Fortran program using 64bit integers (compiled with -i8)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and I correspondingly compiled openmpi (version 1.4.3) with -i8 for
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the Fortran compiler as well.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The program is somewhat difficult to debug since it takes 3 days to reach
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the point where it hangs. This is what I found so far:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Allreduce is called as
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; call MPI_Allreduce(MPI_IN_PLACE, recvbuf, count, MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                  MPI_SUM, MPI_COMM_WORLD, mpierr)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with count = 455295488. Since the Fortran interface just calls the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; C routines in OpenMPI and count variables are 32bit integers in C I started
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; to wonder what is the largest integer &quot;count&quot; for which a MPI_Allreduce
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; succeeds. E.g., in MPICH (it has been a while that I looked into this, i.e.,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; this may or may not be correct anymore) all send/recv were converted
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; into send/recv of MPI_BYTE, thus the largest count for doubles was
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (2^31-1)/8 = 268435455. Thus, I started to wrap the MPI_Allreduce call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with a myMPI_Allreduce routine that repeatedly calls MPI_Allreduce when
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the count is larger than some value maxallreduce (the myMPI_Allreduce.f90
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; is attached). I have tested the routine with a trivial program that
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; just fills an array with numbers and calls myMPI_Allreduce and this
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; test succeeds.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; However, with the real program the situations is very strange:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; When I set maxallreduce = 268435456, the program hangs at the first call
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (iallreduce = 1) to MPI_Allreduce in the do loop
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        do iallreduce = 1, nallreduce - 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;           idx = (iallreduce - 1)*length + 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;           call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length, &amp;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;                              datatype, op, comm, mpierr)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;           if (mpierr /= MPI_SUCCESS) return
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;        end do
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; With maxallreduce = 134217728 the first call succeeds, the second hangs. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; For maxallreduce = 67108864, the first two calls to MPI_Allreduce complete, 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; but the third (iallreduce = 3) hangs. For maxallreduce = 8388608 the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 17th call hangs, for 1048576 the 138th call hangs; here is a table 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (values from gdb attached to process 0 when the program hangs):
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; maxallreduce iallreduce         idx        length
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 268435456             1           1     227647744
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 134217728             2   113823873     113823872
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 67108864             3   130084427      65042213
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 8388608            17   137447697       8590481
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1048576           138   143392010       1046657
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; As if there is (are) some element(s) in the middle of the array with 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; idx &gt;= 143392010 that cannot be sent or recv'd.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Has anybody seen this kind of behaviour?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Has anybody an idea what could be causing this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Ideas how to get around this?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Anything that could help would be appreciated ... I already spent a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; huge amount of time on this and I am running out of ideas.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Martin
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Martin Siegert
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Simon Fraser University
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Burnaby, British Columbia
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Canada
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; &lt;myMPI_Allreduce.f90&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Martin Siegert
</span><br>
<span class="quotelev1">&gt; Head, Research Computing
</span><br>
<span class="quotelev1">&gt; WestGrid/ComputeCanada Site Lead
</span><br>
<span class="quotelev1">&gt; IT Services                                phone: 778 782-4691
</span><br>
<span class="quotelev1">&gt; Simon Fraser University                    fax:   778 782-4242
</span><br>
<span class="quotelev1">&gt; Burnaby, British Columbia                  email: siegert_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Canada  V5A 1S6
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
<p><p><p><pre>
-- 
Aquest missatge ha estat analitzat per MailScanner
a la cerca de virus i d'altres continguts perillosos,
i es considera que est&#224; net.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19186.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>Previous message:</strong> <a href="19184.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time calculation"</a>
<li><strong>In reply to:</strong> <a href="19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
