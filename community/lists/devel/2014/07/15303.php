<?
$subject_val = "[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 23:44:59 2014" -->
<!-- isoreceived="20140729034459" -->
<!-- sent="Tue, 29 Jul 2014 12:43:51 +0900" -->
<!-- isosent="20140729034351" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="[OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error" -->
<!-- id="OF85E44503.AC585A78-ON49257D24.00142D50-49257D24.001496D2_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with%20PGI-14.7%20causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-28 23:43:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15304.php">KAWASHIMA Takahiro: "[OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15302.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample
<br>
program. Then, it causes linking error:
<br>
<p>[mishima_at_manage work]$ cat test.f
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program hello_world
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use mpi_f08
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;implicit none
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;type(MPI_Comm) :: comm
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: myid, npes, ierror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;integer :: name_length
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call mpi_init(ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = MPI_COMM_WORLD
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_rank(comm, myid, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Comm_size(comm, npes, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Get_processor_name(processor_name, name_length, ierror)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;+&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Finalize(ierror)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;end program hello_world
<br>
<p>[mishima_at_manage work]$ mpif90 test.f -o test.ex
<br>
/tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
<br>
test.f:(.data+0x6c): undefined reference to `mpi_f08_interfaces_callbacks_'
<br>
test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
<br>
test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
<br>
test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
<br>
<p>So, I did some more tests with previous version of PGI and
<br>
openmpi-1.8. The results are summarized as follows:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PGI13.10                       PGI14.7
<br>
openmpi-1.8       OK                             OK
<br>
openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15304.php">KAWASHIMA Takahiro: "[OMPI devel] MPI_T SEGV on DSO"</a>
<li><strong>Previous message:</strong> <a href="15302.php">Ralph Castain: "Re: [OMPI devel] === CREATE FAILURE (trunk) ==="</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<li><strong>Reply:</strong> <a href="15377.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
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
