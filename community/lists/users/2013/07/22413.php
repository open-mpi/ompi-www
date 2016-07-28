<?
$subject_val = "Re: [OMPI users] MPI error in a loop";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 30 10:53:54 2013" -->
<!-- isoreceived="20130730145354" -->
<!-- sent="Tue, 30 Jul 2013 14:53:39 +0000" -->
<!-- isosent="20130730145339" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI error in a loop" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7878D1_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="gb2312" -->
<!-- inreplyto="C6DDE594-5583-4B9E-9A40-FDA4B90EFFEF_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI error in a loop<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-30 10:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22414.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>In reply to:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It sounds like you have some kind of memory error in your application; you should run your code through a memory-checking debugger, such as valgrind.
<br>
<p><p>On Jul 24, 2013, at 2:44 AM, Zhubq &lt;zhubenqiang_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  I got a problem when call MPI subroutines in a loop. For example, I have Fortran codes to randomly 
</span><br>
<span class="quotelev2">&gt;&gt; select 10 points in a 2D space domain and change the values at those points near these 10 points to -10:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  real A( (100*rank+1):(100*rank+100),100 )
</span><br>
<span class="quotelev2">&gt;&gt;  real inmax(2),outmax(2)
</span><br>
<span class="quotelev2">&gt;&gt;  integer maxlocation(2),maxrank
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; call random_number(A)   
</span><br>
<span class="quotelev2">&gt;&gt; maxlocation=maxloc(A);  !!! find the coordinates of the local maximum;
</span><br>
<span class="quotelev2">&gt;&gt; inmax(1)=maxval(A);        !!! get the local maximum value
</span><br>
<span class="quotelev2">&gt;&gt; inmax(2)=myrank;            !!!! put the process rank
</span><br>
<span class="quotelev2">&gt;&gt;   do i=1, 10
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_allreduce(inmax,outmax,1,mpi_2real, mpi_maxloc,MPI_comm_world,error)  !!!get the global maximum and the corresponding rank 
</span><br>
<span class="quotelev2">&gt;&gt;        maxrank=outmax(2&#163;&#169;
</span><br>
<span class="quotelev2">&gt;&gt;        call MPI_Bcast(maxlocation,2,mpi_integer,maxrank,mpi_comm_world,error);
</span><br>
<span class="quotelev2">&gt;&gt;        ...
</span><br>
<span class="quotelev2">&gt;&gt;        let points around maxlocation within distance of 10 equal to -10;
</span><br>
<span class="quotelev2">&gt;&gt;        ....
</span><br>
<span class="quotelev2">&gt;&gt;   enddo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; The problem is there is runtime error like &quot; segmentation fault&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; But If I put the codes within the loop into a subroutine, then write the code as
</span><br>
<span class="quotelev2">&gt;&gt;  do i=1,10
</span><br>
<span class="quotelev2">&gt;&gt;      call subroutine
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  enddo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  there will be no error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Another problem is MPI_allreduce seems not as efficient as the combined use of &quot; MPI_reduce &amp; MPI_Bcast&quot; to realize the same purpose.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ben  
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
<li><strong>Next message:</strong> <a href="22414.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>Previous message:</strong> <a href="22412.php">Jeff Squyres (jsquyres): "Re: [OMPI users] ompi_evesel-&gt;dispatch() failed when running from Java	Process Builder"</a>
<li><strong>In reply to:</strong> <a href="22377.php">Zhubq: "[OMPI users] Fwd: MPI error in a loop"</a>
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
