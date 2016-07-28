<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 16:19:38 2012" -->
<!-- isoreceived="20120424201938" -->
<!-- sent="Tue, 24 Apr 2012 16:19:31 -0400" -->
<!-- isosent="20120424201931" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="F7CC9094-8D59-45AE-BAB0-5835F462DD34_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5B1A38CD-9704-451D-92CD-CFDDDB8BE105_at_cisco.com" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 16:19:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To throw in my $0.02, though it is worth less.
<br>
<p>Were you running this on verb based infiniband? 
<br>
<p>We see a problem that we have a work around for even with the newest 1.4.5 only on IB, we can reproduce it with IMB.  You can find an old thread from me about it.  Your problem might not be the same.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Apr 24, 2012, at 3:09 PM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Could you repeat your tests with 1.4.5 and/or 1.5.5?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 23, 2012, at 1:32 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am debugging a program that hangs in MPI_Allreduce (openmpi-1.4.3).
</span><br>
<span class="quotelev2">&gt;&gt; An strace of one of the processes shows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Process 10925 attached with 3 threads - interrupt to quit
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10927] poll([{fd=17, events=POLLIN}, {fd=16, events=POLLIN}], 2, -1 &lt;unfini
</span><br>
<span class="quotelev2">&gt;&gt; shed ...&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10926] select(15, [8 14], [], NULL, NULL &lt;unfinished ...&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev2">&gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev2">&gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev2">&gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev2">&gt;&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program is a Fortran program using 64bit integers (compiled with -i8)
</span><br>
<span class="quotelev2">&gt;&gt; and I correspondingly compiled openmpi (version 1.4.3) with -i8 for
</span><br>
<span class="quotelev2">&gt;&gt; the Fortran compiler as well.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The program is somewhat difficult to debug since it takes 3 days to reach
</span><br>
<span class="quotelev2">&gt;&gt; the point where it hangs. This is what I found so far:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Allreduce is called as
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Allreduce(MPI_IN_PLACE, recvbuf, count, MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                  MPI_SUM, MPI_COMM_WORLD, mpierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with count = 455295488. Since the Fortran interface just calls the
</span><br>
<span class="quotelev2">&gt;&gt; C routines in OpenMPI and count variables are 32bit integers in C I started
</span><br>
<span class="quotelev2">&gt;&gt; to wonder what is the largest integer &quot;count&quot; for which a MPI_Allreduce
</span><br>
<span class="quotelev2">&gt;&gt; succeeds. E.g., in MPICH (it has been a while that I looked into this, i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; this may or may not be correct anymore) all send/recv were converted
</span><br>
<span class="quotelev2">&gt;&gt; into send/recv of MPI_BYTE, thus the largest count for doubles was
</span><br>
<span class="quotelev2">&gt;&gt; (2^31-1)/8 = 268435455. Thus, I started to wrap the MPI_Allreduce call
</span><br>
<span class="quotelev2">&gt;&gt; with a myMPI_Allreduce routine that repeatedly calls MPI_Allreduce when
</span><br>
<span class="quotelev2">&gt;&gt; the count is larger than some value maxallreduce (the myMPI_Allreduce.f90
</span><br>
<span class="quotelev2">&gt;&gt; is attached). I have tested the routine with a trivial program that
</span><br>
<span class="quotelev2">&gt;&gt; just fills an array with numbers and calls myMPI_Allreduce and this
</span><br>
<span class="quotelev2">&gt;&gt; test succeeds.
</span><br>
<span class="quotelev2">&gt;&gt; However, with the real program the situations is very strange:
</span><br>
<span class="quotelev2">&gt;&gt; When I set maxallreduce = 268435456, the program hangs at the first call
</span><br>
<span class="quotelev2">&gt;&gt; (iallreduce = 1) to MPI_Allreduce in the do loop
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        do iallreduce = 1, nallreduce - 1
</span><br>
<span class="quotelev2">&gt;&gt;           idx = (iallreduce - 1)*length + 1
</span><br>
<span class="quotelev2">&gt;&gt;           call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;                              datatype, op, comm, mpierr)
</span><br>
<span class="quotelev2">&gt;&gt;           if (mpierr /= MPI_SUCCESS) return
</span><br>
<span class="quotelev2">&gt;&gt;        end do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With maxallreduce = 134217728 the first call succeeds, the second hangs. 
</span><br>
<span class="quotelev2">&gt;&gt; For maxallreduce = 67108864, the first two calls to MPI_Allreduce complete, 
</span><br>
<span class="quotelev2">&gt;&gt; but the third (iallreduce = 3) hangs. For maxallreduce = 8388608 the
</span><br>
<span class="quotelev2">&gt;&gt; 17th call hangs, for 1048576 the 138th call hangs; here is a table 
</span><br>
<span class="quotelev2">&gt;&gt; (values from gdb attached to process 0 when the program hangs):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; maxallreduce iallreduce         idx        length
</span><br>
<span class="quotelev2">&gt;&gt; 268435456             1           1     227647744
</span><br>
<span class="quotelev2">&gt;&gt; 134217728             2   113823873     113823872
</span><br>
<span class="quotelev2">&gt;&gt; 67108864             3   130084427      65042213
</span><br>
<span class="quotelev2">&gt;&gt; 8388608            17   137447697       8590481
</span><br>
<span class="quotelev2">&gt;&gt; 1048576           138   143392010       1046657
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As if there is (are) some element(s) in the middle of the array with 
</span><br>
<span class="quotelev2">&gt;&gt; idx &gt;= 143392010 that cannot be sent or recv'd.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Has anybody seen this kind of behaviour?
</span><br>
<span class="quotelev2">&gt;&gt; Has anybody an idea what could be causing this?
</span><br>
<span class="quotelev2">&gt;&gt; Ideas how to get around this?
</span><br>
<span class="quotelev2">&gt;&gt; Anything that could help would be appreciated ... I already spent a
</span><br>
<span class="quotelev2">&gt;&gt; huge amount of time on this and I am running out of ideas.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Martin
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Martin Siegert
</span><br>
<span class="quotelev2">&gt;&gt; Simon Fraser University
</span><br>
<span class="quotelev2">&gt;&gt; Burnaby, British Columbia
</span><br>
<span class="quotelev2">&gt;&gt; Canada
</span><br>
<span class="quotelev2">&gt;&gt; &lt;myMPI_Allreduce.f90&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19106.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19104.php">Tom Rosmond: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>In reply to:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/05/19181.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
