<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar  3 18:42:25 2006" -->
<!-- isoreceived="20060303234225" -->
<!-- sent="Fri, 03 Mar 2006 16:42:20 -0700" -->
<!-- isosent="20060303234220" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="C02E226C.906E%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="11A691D6-D391-406F-9622-DCF00BAD591C_at_open-mpi.org" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-03 18:42:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>In reply to:</strong> <a href="0776.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>Thanks.
<br>
<p>Here is a simple code from the book &quot;Using MPI&quot; that I want to modify to use
<br>
MPI_IN_PLACE.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program main
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;include &quot;mpif.h&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision  PI25DT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameter        (PI25DT = 3.141592653589793238462643d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision  mypi, pi, h, sum, x, f, a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;double precision starttime, endtime
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer n, myid, numprocs, i, ierr
<br>
c                                 function to integrate
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f(a) = 4.d0 / (1.d0 + a*a)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_INIT(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_RANK(MPI_COMM_WORLD, myid, ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_COMM_SIZE(MPI_COMM_WORLD, numprocs, ierr)
<br>
<p>&nbsp;10   if ( myid .eq. 0 ) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'Enter the number of intervals: (0 quits) '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;read(*,*) n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;starttime = MPI_WTIME()
<br>
c                                 broadcast n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_BCAST(n,1,MPI_INTEGER,0,MPI_COMM_WORLD,ierr)
<br>
c                                 check for quit signal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( n .le. 0 ) goto 30
<br>
c                                 calculate the interval size
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;h = 1.0d0/n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum  = 0.0d0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do 20 i = myid+1, n, numprocs
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;x = h * (dble(i) - 0.5d0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sum = sum + f(x)
<br>
&nbsp;20   continue
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mypi = h * sum
<br>
c                                 collect all the partial sums
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_REDUCE(mypi,pi,1,MPI_DOUBLE_PRECISION,MPI_SUM,0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                  MPI_COMM_WORLD,ierr)
<br>
c                                 node 0 prints the answer.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endtime = MPI_WTIME()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myid .eq. 0) then
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'pi is ', pi, ' Error is', abs(pi - PI25DT)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print *, 'time is ', endtime-starttime, ' seconds'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;goto 10
<br>
&nbsp;30   call MPI_FINALIZE(ierr)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;stop
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end
<br>
<p><p>Can I use MPI_IN_PLACE in the MPI_REDUCE call? If I can, how? Thanks for any
<br>
help!
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Fri, 3 Mar 2006 18:04:28 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 3, 2006, at 4:40 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does Open MPI supports MPI_IN_PLACE? Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Jeff Squyres: "Re: [OMPI users] mpif90 problem."</a>
<li><strong>In reply to:</strong> <a href="0776.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0779.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
