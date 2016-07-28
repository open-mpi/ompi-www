<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 29 08:54:45 2009" -->
<!-- isoreceived="20090729125445" -->
<!-- sent="Wed, 29 Jul 2009 07:54:38 -0500" -->
<!-- isosent="20090729125438" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="986510B6-7103-4D7B-B7D6-9D8AFDC19E71_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71A8750B-BA2A-42B7-8235-199DD8CD1E6F_at_ist.utl.pt" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-29 08:54:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10126.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>Previous message:</strong> <a href="10124.php">Josh Hursey: "Re: [OMPI users] users Digest, Vol 1296, Issue 6"</a>
<li><strong>In reply to:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you confirm that you're using the right mpif.h?
<br>
<p>Keep in mind that each MPI implementation's mpif.h is different --  
<br>
it's a common mistake to assume that the mpif.h from one MPI  
<br>
implementation should work with another implementation (e.g., someone  
<br>
copied mpif.h from one MPI to your software's source tree, so the  
<br>
compiler always finds that one instead of the MPI-implementation- 
<br>
provided mpif.h.).
<br>
<p><p>On Jul 28, 2009, at 1:17 PM, Ricardo Fonseca wrote:
<br>
<p><span class="quotelev1">&gt; Hi George
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did some extra digging and found that (for some reason) the  
</span><br>
<span class="quotelev1">&gt; MPI_IN_PLACE parameter is not being recognized as such by  
</span><br>
<span class="quotelev1">&gt; mpi_reduce_f (reduce_f.c:61). I added a couple of printfs:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot; sendbuf = %p \n&quot;, sendbuf );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     printf(&quot; MPI_FORTRAN_IN_PLACE = %p \n&quot;, &amp;MPI_FORTRAN_IN_PLACE );
</span><br>
<span class="quotelev1">&gt;     printf(&quot; mpi_fortran_in_place = %p \n&quot;, &amp;mpi_fortran_in_place );
</span><br>
<span class="quotelev1">&gt;     printf(&quot; mpi_fortran_in_place_ = %p \n&quot;, &amp;mpi_fortran_in_place_ );
</span><br>
<span class="quotelev1">&gt;     printf(&quot; mpi_fortran_in_place__ = %p \n&quot;,  
</span><br>
<span class="quotelev1">&gt; &amp;mpi_fortran_in_place__ );
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And this is what I get on node 0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  sendbuf = 0x50920
</span><br>
<span class="quotelev1">&gt;  MPI_FORTRAN_IN_PLACE = 0x17cd30
</span><br>
<span class="quotelev1">&gt;  mpi_fortran_in_place = 0x17cd34
</span><br>
<span class="quotelev1">&gt;  mpi_fortran_in_place_ = 0x17cd38
</span><br>
<span class="quotelev1">&gt;  mpi_fortran_in_place__ = 0x17cd3c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This makes OMPI_F2C_IN_PLACE(sendbuf) fail. If I replace the line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sendbuf = OMPI_F2C_IN_PLACE(sendbuf);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     if ( sendbuf == 0x50920 ) {
</span><br>
<span class="quotelev1">&gt;       printf(&quot;sendbuf is MPI_IN_PLACE!\n&quot;);
</span><br>
<span class="quotelev1">&gt;       sendbuf = MPI_IN_PLACE;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then the code works and gives the correct result:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; sendbuf is MPI_IN_PLACE!
</span><br>
<span class="quotelev1">&gt;  Result:
</span><br>
<span class="quotelev1">&gt;  3. 3. 3. 3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my guess is that somehow the MPI_IN_PLACE constant for fortran is  
</span><br>
<span class="quotelev1">&gt; getting the wrong address. Could this be related to the fortran  
</span><br>
<span class="quotelev1">&gt; compilers I'm using (ifort / g95)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Prof. Ricardo Fonseca
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GoLP - Grupo de Lasers e Plasmas
</span><br>
<span class="quotelev1">&gt; Instituto de Plasmas e Fus&#227;o Nuclear
</span><br>
<span class="quotelev1">&gt; Instituto Superior T&#233;cnico
</span><br>
<span class="quotelev1">&gt; Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt; 1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt; Portugal
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tel: +351 21 8419202
</span><br>
<span class="quotelev1">&gt; fax: +351 21 8464455
</span><br>
<span class="quotelev1">&gt; web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 17:00 , users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 28 Jul 2009 11:16:34 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with
</span><br>
<span class="quotelev2">&gt;&gt; 	MPI_REDUCE / MPI_ALLREDUCE
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;C0F59401-0A63-4EB8-804B-51D29071295E_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed;  
</span><br>
<span class="quotelev2">&gt;&gt; delsp=yes
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10126.php">Jeffrey M Ceason: "[OMPI users] Jeffrey M Ceason is out of the office."</a>
<li><strong>Previous message:</strong> <a href="10124.php">Josh Hursey: "Re: [OMPI users] users Digest, Vol 1296, Issue 6"</a>
<li><strong>In reply to:</strong> <a href="10122.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
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
