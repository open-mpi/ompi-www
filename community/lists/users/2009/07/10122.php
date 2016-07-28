<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 28 14:18:05 2009" -->
<!-- isoreceived="20090728181805" -->
<!-- sent="Tue, 28 Jul 2009 19:17:57 +0100" -->
<!-- isosent="20090728181757" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE" -->
<!-- id="71A8750B-BA2A-42B7-8235-199DD8CD1E6F_at_ist.utl.pt" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.9.1248796811.26563.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-28 14:17:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10123.php">Mallikarjuna Shastry: "Re: [OMPI users] users Digest, Vol 1296, Issue 6"</a>
<li><strong>Previous message:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Maybe in reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10125.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10125.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George
<br>
<p>I did some extra digging and found that (for some reason) the  
<br>
MPI_IN_PLACE parameter is not being recognized as such by mpi_reduce_f  
<br>
(reduce_f.c:61). I added a couple of printfs:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; sendbuf = %p \n&quot;, sendbuf );
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; MPI_FORTRAN_IN_PLACE = %p \n&quot;, &amp;MPI_FORTRAN_IN_PLACE );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; mpi_fortran_in_place = %p \n&quot;, &amp;mpi_fortran_in_place );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; mpi_fortran_in_place_ = %p \n&quot;, &amp;mpi_fortran_in_place_ );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot; mpi_fortran_in_place__ = %p \n&quot;,  
<br>
&amp;mpi_fortran_in_place__ );
<br>
<p>And this is what I get on node 0:
<br>
<p>&nbsp;&nbsp;sendbuf = 0x50920
<br>
&nbsp;&nbsp;MPI_FORTRAN_IN_PLACE = 0x17cd30
<br>
&nbsp;&nbsp;mpi_fortran_in_place = 0x17cd34
<br>
&nbsp;&nbsp;mpi_fortran_in_place_ = 0x17cd38
<br>
&nbsp;&nbsp;mpi_fortran_in_place__ = 0x17cd3c
<br>
<p>This makes OMPI_F2C_IN_PLACE(sendbuf) fail. If I replace the line:
<br>
<p>sendbuf = OMPI_F2C_IN_PLACE(sendbuf);
<br>
<p>with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( sendbuf == 0x50920 ) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;sendbuf is MPI_IN_PLACE!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sendbuf = MPI_IN_PLACE;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Then the code works and gives the correct result:
<br>
<p>sendbuf is MPI_IN_PLACE!
<br>
&nbsp;&nbsp;Result:
<br>
&nbsp;&nbsp;3. 3. 3. 3.
<br>
<p>So my guess is that somehow the MPI_IN_PLACE constant for fortran is  
<br>
getting the wrong address. Could this be related to the fortran  
<br>
compilers I'm using (ifort / g95)?
<br>
<p>Ricardo
<br>
<p><pre>
---
Prof. Ricardo Fonseca
GoLP - Grupo de Lasers e Plasmas
Instituto de Plasmas e Fus&#227;o Nuclear
Instituto Superior T&#233;cnico
Av. Rovisco Pais
1049-001 Lisboa
Portugal
tel: +351 21 8419202
fax: +351 21 8464455
web: <a href="http://cfp.ist.utl.pt/golp/">http://cfp.ist.utl.pt/golp/</a>
On Jul 28, 2009, at 17:00 , users-request_at_[hidden] wrote:
&gt; Message: 1
&gt; Date: Tue, 28 Jul 2009 11:16:34 -0400
&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with
&gt; 	MPI_REDUCE / MPI_ALLREDUCE
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;C0F59401-0A63-4EB8-804B-51D29071295E_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed; delsp=yes
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10122/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10123.php">Mallikarjuna Shastry: "Re: [OMPI users] users Digest, Vol 1296, Issue 6"</a>
<li><strong>Previous message:</strong> <a href="10121.php">Richard Treumann: "Re: [OMPI users] Interaction of MPI_Send and MPI_Barrier"</a>
<li><strong>Maybe in reply to:</strong> <a href="10118.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran with MPI_REDUCE / MPI_ALLREDUCE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10125.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="10125.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE / MPI_ALLREDUCE"</a>
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
