<?
$subject_val = "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 22:12:39 2009" -->
<!-- isoreceived="20090926021239" -->
<!-- sent="Fri, 25 Sep 2009 22:12:33 -0400" -->
<!-- isosent="20090926021233" -->
<!-- name="Greg Fischer" -->
<!-- email="greg.a.fischer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?" -->
<!-- id="c615a6650909251912g2b00503ta7475cb6dbb8c349_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4ABBECBF.8030506_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?<br>
<strong>From:</strong> Greg Fischer (<em>greg.a.fischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 22:12:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Reply:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Reply:</strong> <a href="10776.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like the buffering operations consume about 15% as much time as the
<br>
allreduce operations.  Not huge, but not trivial, all the same.  Is there
<br>
any way to avoid the buffering step?
<br>
<p><p><p>On Thu, Sep 24, 2009 at 6:03 PM, Eugene Loh &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Greg Fischer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I apologize in advance for the simplistic/newbie question.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm performing an ALLREDUCE operation on a multi-dimensional array.  This
</span><br>
<span class="quotelev1">&gt; operation is the biggest bottleneck in the code, and I'm wondering if
</span><br>
<span class="quotelev1">&gt; there's a way to do it more efficiently than what I'm doing now.  Here's a
</span><br>
<span class="quotelev1">&gt; representative example of what's happening:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ir=1
</span><br>
<span class="quotelev1">&gt;    do ikl=1,km
</span><br>
<span class="quotelev1">&gt;      do ij=1,jm
</span><br>
<span class="quotelev1">&gt;        do ii=1,im
</span><br>
<span class="quotelev1">&gt;          albuf(ir)=array(ii,ij,ikl,nl,0,ng)
</span><br>
<span class="quotelev1">&gt;          ir=ir+1
</span><br>
<span class="quotelev1">&gt;        enddo
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<span class="quotelev1">&gt;    enddo
</span><br>
<span class="quotelev1">&gt;    agbuf=0.0
</span><br>
<span class="quotelev1">&gt;    call
</span><br>
<span class="quotelev1">&gt; mpi_allreduce(albuf,agbuf,im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,ang_com,ierr)
</span><br>
<span class="quotelev1">&gt;    ir=1
</span><br>
<span class="quotelev1">&gt;    do ikl=1,km
</span><br>
<span class="quotelev1">&gt;      do ij=1,jm
</span><br>
<span class="quotelev1">&gt;        do ii=1,im
</span><br>
<span class="quotelev1">&gt;          phim(ii,ij,ikl,nl,0,ng)=agbuf(ir)
</span><br>
<span class="quotelev1">&gt;          ir=ir+1
</span><br>
<span class="quotelev1">&gt;        enddo
</span><br>
<span class="quotelev1">&gt;      enddo
</span><br>
<span class="quotelev1">&gt;    enddo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any way to just do this in one fell swoop, rather than buffering,
</span><br>
<span class="quotelev1">&gt; transmitting, and unbuffering?  This operation is looped over many times.
</span><br>
<span class="quotelev1">&gt; Are there savings to be had here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are three steps here:  buffering, transmitting, and unbuffering.  Any
</span><br>
<span class="quotelev1">&gt; idea how the run time is distributed among those three steps?  E.g., if most
</span><br>
<span class="quotelev1">&gt; time is spent in the MPI call, then combining all three steps into one is
</span><br>
<span class="quotelev1">&gt; unlikely to buy you much... and might even hurt.  If most of the time is
</span><br>
<span class="quotelev1">&gt; spent in the MPI call, then there may be some tuning of collective
</span><br>
<span class="quotelev1">&gt; algorithms to do.  I don't have any experience doing this with OMPI.  I'm
</span><br>
<span class="quotelev1">&gt; just saying it makes some sense to isolate the problem a little bit more.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10770/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Previous message:</strong> <a href="10769.php">Joshua Hursey: "Re: [OMPI users] error in checkpointing in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10759.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Reply:</strong> <a href="10771.php">Martin Siegert: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?"</a>
<li><strong>Reply:</strong> <a href="10776.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
