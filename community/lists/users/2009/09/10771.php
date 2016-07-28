<?
$subject_val = "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 22:48:58 2009" -->
<!-- isoreceived="20090926024858" -->
<!-- sent="Fri, 25 Sep 2009 19:48:53 -0700" -->
<!-- isosent="20090926024853" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?" -->
<!-- id="20090926024853.GA14483_at_stikine.its.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="c615a6650909251912g2b00503ta7475cb6dbb8c349_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in	Fortran?<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-25 22:48:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10776.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Sep 25, 2009 at 10:12:33PM -0400, Greg Fischer wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    It looks like the buffering operations consume about 15% as much time
</span><br>
<span class="quotelev1">&gt;    as the allreduce operations.  Not huge, but not trivial, all the same.
</span><br>
<span class="quotelev1">&gt;    Is there any way to avoid the buffering step?
</span><br>
<p>That depends on how you allocated the array and phim arrays.
<br>
If they are contiguous in memory at least with respect to the
<br>
first two dimensions, i.e., if they are allocated like
<br>
<p>allocate (array(1:im, 1:jm, 1:something, ..., ..., ...)
<br>
<p>and similarly for phim (i.e., the first dimension is exactly 1:im,
<br>
the second 1:jm, and the third starts at 1) then you should be able
<br>
to do
<br>
<p>call MPI_Allreduce(array(1,1,1,nl,0,ng), phim(1,1,1,nl,0,ng),   &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;im*jm*kmloc(coords(2)+1), MPI_REAL, MPI_SUM, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ang_com, ierr)
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Head, Research Computing
WestGrid Site Lead
IT Services                                phone: 778 782-4691
Simon Fraser University                    fax:   778 782-4242
Burnaby, British Columbia                  email: siegert_at_[hidden]
Canada  V5A 1S6
&gt;    On Thu, Sep 24, 2009 at 6:03 PM, Eugene Loh &lt;[1]Eugene.Loh_at_[hidden]&gt;
&gt;    wrote:
&gt; 
&gt;    Greg Fischer wrote:
&gt; 
&gt;      (I apologize in advance for the simplistic/newbie question.)
&gt;      I'm performing an ALLREDUCE operation on a multi-dimensional array.
&gt;      This operation is the biggest bottleneck in the code, and I'm
&gt;      wondering if there's a way to do it more efficiently than what I'm
&gt;      doing now.  Here's a representative example of what's happening:
&gt;         ir=1
&gt;         do ikl=1,km
&gt;           do ij=1,jm
&gt;             do ii=1,im
&gt;               albuf(ir)=array(ii,ij,ikl,nl,0,ng)
&gt;               ir=ir+1
&gt;             enddo
&gt;           enddo
&gt;         enddo
&gt;         agbuf=0.0
&gt;         call
&gt;      mpi_allreduce(albuf,agbuf,im*jm*kmloc(coords(2)+1),mpi_real,mpi_sum,
&gt;      ang_com,ierr)
&gt;         ir=1
&gt;         do ikl=1,km
&gt;           do ij=1,jm
&gt;             do ii=1,im
&gt;               phim(ii,ij,ikl,nl,0,ng)=agbuf(ir)
&gt;               ir=ir+1
&gt;             enddo
&gt;           enddo
&gt;         enddo
&gt;      Is there any way to just do this in one fell swoop, rather than
&gt;      buffering, transmitting, and unbuffering?  This operation is looped
&gt;      over many times.  Are there savings to be had here?
&gt; 
&gt;    There are three steps here:  buffering, transmitting, and unbuffering.
&gt;    Any idea how the run time is distributed among those three steps?
&gt;    E.g., if most time is spent in the MPI call, then combining all three
&gt;    steps into one is unlikely to buy you much... and might even hurt.  If
&gt;    most of the time is spent in the MPI call, then there may be some
&gt;    tuning of collective algorithms to do.  I don't have any experience
&gt;    doing this with OMPI.  I'm just saying it makes some sense to isolate
&gt;    the problem a little bit more.
&gt; 
&gt;      _______________________________________________
&gt;      users mailing list
&gt;      [2]users_at_[hidden]
&gt;      [3]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; References
&gt; 
&gt;    1. mailto:Eugene.Loh_at_[hidden]
&gt;    2. mailto:users_at_[hidden]
&gt;    3. <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10772.php">Jeff Squyres: "Re: [OMPI users] &quot;Failed to find the following executable&quot; problemunder Torque"</a>
<li><strong>Previous message:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<li><strong>In reply to:</strong> <a href="10770.php">Greg Fischer: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10776.php">Eugene Loh: "Re: [OMPI users] best way to ALLREDUCE multi-dimensional arrays in Fortran?"</a>
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
