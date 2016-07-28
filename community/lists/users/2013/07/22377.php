<?
$subject_val = "[OMPI users] Fwd: MPI error in a loop";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 24 02:44:22 2013" -->
<!-- isoreceived="20130724064422" -->
<!-- sent="Tue, 23 Jul 2013 23:44:17 -0700" -->
<!-- isosent="20130724064417" -->
<!-- name="Zhubq" -->
<!-- email="zhubenqiang_at_[hidden]" -->
<!-- subject="[OMPI users] Fwd: MPI error in a loop" -->
<!-- id="C6DDE594-5583-4B9E-9A40-FDA4B90EFFEF_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CABomCWHRNtF7+zW780ZysUsP5L7bvjKoKucZd7nXiMuAH-DzaQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Fwd: MPI error in a loop<br>
<strong>From:</strong> Zhubq (<em>zhubenqiang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-24 02:44:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>Reply:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I got a problem when call MPI subroutines in a loop. For example, I have Fortran codes to randomly 
</span><br>
<span class="quotelev1">&gt; select 10 points in a 2D space domain and change the values at those points near these 10 points to -10:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  real A( (100*rank+1):(100*rank+100),100 )
</span><br>
<span class="quotelev1">&gt;  real inmax(2),outmax(2)
</span><br>
<span class="quotelev1">&gt;  integer maxlocation(2),maxrank
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call random_number(A)   
</span><br>
<span class="quotelev1">&gt; maxlocation=maxloc(A);  !!! find the coordinates of the local maximum;
</span><br>
<span class="quotelev1">&gt; inmax(1)=maxval(A);        !!! get the local maximum value
</span><br>
<span class="quotelev1">&gt; inmax(2)=myrank;            !!!! put the process rank
</span><br>
<span class="quotelev1">&gt;   do i=1, 10
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev1">&gt;        call MPI_allreduce(inmax,outmax,1,mpi_2real, mpi_maxloc,MPI_comm_world,error)  !!!get the global maximum and the corresponding rank 
</span><br>
<span class="quotelev1">&gt;        maxrank=outmax(2&#163;&#169;
</span><br>
<span class="quotelev1">&gt;        call MPI_Bcast(maxlocation,2,mpi_integer,maxrank,mpi_comm_world,error);
</span><br>
<span class="quotelev1">&gt;        ...
</span><br>
<span class="quotelev1">&gt;        let points around maxlocation within distance of 10 equal to -10;
</span><br>
<span class="quotelev1">&gt;        ....
</span><br>
<span class="quotelev1">&gt;   enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt; The problem is there is runtime error like &quot; segmentation fault&quot;.
</span><br>
<span class="quotelev1">&gt; But If I put the codes within the loop into a subroutine, then write the code as
</span><br>
<span class="quotelev1">&gt;  do i=1,10
</span><br>
<span class="quotelev1">&gt;      call subroutine
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  enddo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  there will be no error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   Another problem is MPI_allreduce seems not as efficient as the combined use of &quot; MPI_reduce &amp; MPI_Bcast&quot; to realize the same purpose.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ben  
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22378.php">Yuping Sun: "[OMPI users] errors testing openmpi1.6.5 ----"</a>
<li><strong>Previous message:</strong> <a href="22376.php">David Stuebe: "[OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java Process Builder"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
<li><strong>Reply:</strong> <a href="22413.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI error in a loop"</a>
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
