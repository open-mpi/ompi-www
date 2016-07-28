<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 16:00:19 2012" -->
<!-- isoreceived="20120423200019" -->
<!-- sent="Mon, 23 Apr 2012 16:00:03 -0400" -->
<!-- isosent="20120423200003" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="4F95B4C3.1070508_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120423173219.GB17343_at_stikine.sfu.ca" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 16:00:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19078.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.2 (Open MPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19074.php">Martin Siegert: "[OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Martin
<br>
<p>Not sure this solution will help with your problem,
<br>
but a workaround for situations where the count number
<br>
exceeds the maximum 32-bit positive integer
<br>
is to declare a user defined type,
<br>
say MPI_Type_Contiguous or MPI_Type_Vector,
<br>
large enough to aggregate a bunch of your
<br>
original data (MPI_DOUBLE_PRECISION),
<br>
and pass that user defined type to the MPI calls instead.
<br>
This will then require a smaller count, presumably not
<br>
exceeding the 32-bit limit.
<br>
Here are two threads about it, but if you search the list
<br>
you will find others:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/02/8098.php">http://www.open-mpi.org/community/lists/users/2009/02/8098.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/11/14864.php">http://www.open-mpi.org/community/lists/users/2010/11/14864.php</a>
<br>
<p>I hope it helps,
<br>
Gus Correa
<br>
<p>On 04/23/2012 01:32 PM, Martin Siegert wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am debugging a program that hangs in MPI_Allreduce (openmpi-1.4.3).
</span><br>
<span class="quotelev1">&gt; An strace of one of the processes shows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 10925 attached with 3 threads - interrupt to quit
</span><br>
<span class="quotelev1">&gt; [pid 10927] poll([{fd=17, events=POLLIN}, {fd=16, events=POLLIN}], 2, -1&lt;unfini
</span><br>
<span class="quotelev1">&gt; shed ...&gt;
</span><br>
<span class="quotelev1">&gt; [pid 10926] select(15, [8 14], [], NULL, NULL&lt;unfinished ...&gt;
</span><br>
<span class="quotelev1">&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev1">&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev1">&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev1">&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; [pid 10925] poll([{fd=4, events=POLLIN}, {fd=5, events=POLLIN}, {fd=6, events=PO
</span><br>
<span class="quotelev1">&gt; LLIN}, {fd=7, events=POLLIN}, {fd=10, events=POLLIN}], 5, 0) = 0 (Timeout)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is a Fortran program using 64bit integers (compiled with -i8)
</span><br>
<span class="quotelev1">&gt; and I correspondingly compiled openmpi (version 1.4.3) with -i8 for
</span><br>
<span class="quotelev1">&gt; the Fortran compiler as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program is somewhat difficult to debug since it takes 3 days to reach
</span><br>
<span class="quotelev1">&gt; the point where it hangs. This is what I found so far:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Allreduce is called as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; call MPI_Allreduce(MPI_IN_PLACE, recvbuf, count, MPI_DOUBLE_PRECISION,&amp;
</span><br>
<span class="quotelev1">&gt;                     MPI_SUM, MPI_COMM_WORLD, mpierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with count = 455295488. Since the Fortran interface just calls the
</span><br>
<span class="quotelev1">&gt; C routines in OpenMPI and count variables are 32bit integers in C I started
</span><br>
<span class="quotelev1">&gt; to wonder what is the largest integer &quot;count&quot; for which a MPI_Allreduce
</span><br>
<span class="quotelev1">&gt; succeeds. E.g., in MPICH (it has been a while that I looked into this, i.e.,
</span><br>
<span class="quotelev1">&gt; this may or may not be correct anymore) all send/recv were converted
</span><br>
<span class="quotelev1">&gt; into send/recv of MPI_BYTE, thus the largest count for doubles was
</span><br>
<span class="quotelev1">&gt; (2^31-1)/8 = 268435455. Thus, I started to wrap the MPI_Allreduce call
</span><br>
<span class="quotelev1">&gt; with a myMPI_Allreduce routine that repeatedly calls MPI_Allreduce when
</span><br>
<span class="quotelev1">&gt; the count is larger than some value maxallreduce (the myMPI_Allreduce.f90
</span><br>
<span class="quotelev1">&gt; is attached). I have tested the routine with a trivial program that
</span><br>
<span class="quotelev1">&gt; just fills an array with numbers and calls myMPI_Allreduce and this
</span><br>
<span class="quotelev1">&gt; test succeeds.
</span><br>
<span class="quotelev1">&gt; However, with the real program the situations is very strange:
</span><br>
<span class="quotelev1">&gt; When I set maxallreduce = 268435456, the program hangs at the first call
</span><br>
<span class="quotelev1">&gt; (iallreduce = 1) to MPI_Allreduce in the do loop
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           do iallreduce = 1, nallreduce - 1
</span><br>
<span class="quotelev1">&gt;              idx = (iallreduce - 1)*length + 1
</span><br>
<span class="quotelev1">&gt;              call MPI_Allreduce(MPI_IN_PLACE, recvbuf(idx), length,&amp;
</span><br>
<span class="quotelev1">&gt;                                 datatype, op, comm, mpierr)
</span><br>
<span class="quotelev1">&gt;              if (mpierr /= MPI_SUCCESS) return
</span><br>
<span class="quotelev1">&gt;           end do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With maxallreduce = 134217728 the first call succeeds, the second hangs.
</span><br>
<span class="quotelev1">&gt; For maxallreduce = 67108864, the first two calls to MPI_Allreduce complete,
</span><br>
<span class="quotelev1">&gt; but the third (iallreduce = 3) hangs. For maxallreduce = 8388608 the
</span><br>
<span class="quotelev1">&gt; 17th call hangs, for 1048576 the 138th call hangs; here is a table
</span><br>
<span class="quotelev1">&gt; (values from gdb attached to process 0 when the program hangs):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maxallreduce iallreduce         idx        length
</span><br>
<span class="quotelev1">&gt; 268435456             1           1     227647744
</span><br>
<span class="quotelev1">&gt; 134217728             2   113823873     113823872
</span><br>
<span class="quotelev1">&gt;   67108864             3   130084427      65042213
</span><br>
<span class="quotelev1">&gt;    8388608            17   137447697       8590481
</span><br>
<span class="quotelev1">&gt;    1048576           138   143392010       1046657
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As if there is (are) some element(s) in the middle of the array with
</span><br>
<span class="quotelev1">&gt; idx&gt;= 143392010 that cannot be sent or recv'd.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anybody seen this kind of behaviour?
</span><br>
<span class="quotelev1">&gt; Has anybody an idea what could be causing this?
</span><br>
<span class="quotelev1">&gt; Ideas how to get around this?
</span><br>
<span class="quotelev1">&gt; Anything that could help would be appreciated ... I already spent a
</span><br>
<span class="quotelev1">&gt; huge amount of time on this and I am running out of ideas.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Martin
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19078.php">Barnet Wagman: "[OMPI users] ppe-ompi 1.2 (Open MPI on EC2)"</a>
<li><strong>Previous message:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19074.php">Martin Siegert: "[OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
