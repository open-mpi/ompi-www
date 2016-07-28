<?
$subject_val = "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 10:42:03 2009" -->
<!-- isoreceived="20090730144203" -->
<!-- sent="Thu, 30 Jul 2009 15:41:54 +0100" -->
<!-- isosent="20090730144154" -->
<!-- name="Ricardo Fonseca" -->
<!-- email="ricardo.fonseca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE" -->
<!-- id="5F76734D-5DB4-4766-BC5F-C765EBCEBA63_at_ist.utl.pt" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.21.1248883203.12956.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE<br>
<strong>From:</strong> Ricardo Fonseca (<em>ricardo.fonseca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 10:41:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10164.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10164.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
(I just realized I had the wrong subject line, here it goes again)
<br>
<p>Hi Jeff
<br>
<p>Yes, I am using the right one. I've installed the freshly compiled  
<br>
openmpi into /opt/openmpi/1.3.3-g95-32. If I edit the mpif.h file by  
<br>
hand and put &quot;error!&quot; in the first line I get:
<br>
<p>zamblap:sandbox zamb$ edit /opt/openmpi/1.3.3-g95-32/include/mpif.h
<br>
<p>zamblap:sandbox zamb$ mpif77 inplace_test.f90
<br>
<p>In file mpif.h:1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Included at inplace_test.f90:7
<br>
<p>error!
<br>
<p>1
<br>
<p>Error: Unclassifiable statement at (1)
<br>
<p>(btw, if I use the F90 bindings instead I get a similar problem,  
<br>
except the address for the MPI_IN_PLACE fortran constant is slightly  
<br>
different from the F77 binding, i.e. instead of 0x50920 I get 0x508e0)
<br>
<p>Thanks for your help,
<br>
<p>Ricardo
<br>
<p><p>On Jul 29, 2009, at 17:00 , users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 29 Jul 2009 07:54:38 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran
</span><br>
<span class="quotelev1">&gt; 	withMPI_REDUCE	/ MPI_ALLREDUCE
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;986510B6-7103-4D7B-B7D6-9D8AFDC19E71_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you confirm that you're using the right mpif.h?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Keep in mind that each MPI implementation's mpif.h is different --
</span><br>
<span class="quotelev1">&gt; it's a common mistake to assume that the mpif.h from one MPI
</span><br>
<span class="quotelev1">&gt; implementation should work with another implementation (e.g., someone
</span><br>
<span class="quotelev1">&gt; copied mpif.h from one MPI to your software's source tree, so the
</span><br>
<span class="quotelev1">&gt; compiler always finds that one instead of the MPI-implementation-
</span><br>
<span class="quotelev1">&gt; provided mpif.h.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2009, at 1:17 PM, Ricardo Fonseca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi George
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I did some extra digging and found that (for some reason) the
</span><br>
<span class="quotelev2">&gt;&gt; MPI_IN_PLACE parameter is not being recognized as such by
</span><br>
<span class="quotelev2">&gt;&gt; mpi_reduce_f (reduce_f.c:61). I added a couple of printfs:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot; sendbuf = %p \n&quot;, sendbuf );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot; MPI_FORTRAN_IN_PLACE = %p \n&quot;, &amp;MPI_FORTRAN_IN_PLACE );
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot; mpi_fortran_in_place = %p \n&quot;, &amp;mpi_fortran_in_place );
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot; mpi_fortran_in_place_ = %p \n&quot;, &amp;mpi_fortran_in_place_ );
</span><br>
<span class="quotelev2">&gt;&gt;    printf(&quot; mpi_fortran_in_place__ = %p \n&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &amp;mpi_fortran_in_place__ );
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And this is what I get on node 0:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sendbuf = 0x50920
</span><br>
<span class="quotelev2">&gt;&gt; MPI_FORTRAN_IN_PLACE = 0x17cd30
</span><br>
<span class="quotelev2">&gt;&gt; mpi_fortran_in_place = 0x17cd34
</span><br>
<span class="quotelev2">&gt;&gt; mpi_fortran_in_place_ = 0x17cd38
</span><br>
<span class="quotelev2">&gt;&gt; mpi_fortran_in_place__ = 0x17cd3c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This makes OMPI_F2C_IN_PLACE(sendbuf) fail. If I replace the line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sendbuf = OMPI_F2C_IN_PLACE(sendbuf);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    if ( sendbuf == 0x50920 ) {
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;sendbuf is MPI_IN_PLACE!\n&quot;);
</span><br>
<span class="quotelev2">&gt;&gt;      sendbuf = MPI_IN_PLACE;
</span><br>
<span class="quotelev2">&gt;&gt;    }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the code works and gives the correct result:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sendbuf is MPI_IN_PLACE!
</span><br>
<span class="quotelev2">&gt;&gt; Result:
</span><br>
<span class="quotelev2">&gt;&gt; 3. 3. 3. 3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So my guess is that somehow the MPI_IN_PLACE constant for fortran is
</span><br>
<span class="quotelev2">&gt;&gt; getting the wrong address. Could this be related to the fortran
</span><br>
<span class="quotelev2">&gt;&gt; compilers I'm using (ifort / g95)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ricardo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10145.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<li><strong>Previous message:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10164.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10164.php">Jeff Squyres: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10198.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
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
