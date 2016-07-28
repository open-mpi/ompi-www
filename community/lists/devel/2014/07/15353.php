<?
$subject_val = "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 29 23:59:03 2014" -->
<!-- isoreceived="20140730035903" -->
<!-- sent="Wed, 30 Jul 2014 12:57:55 +0900" -->
<!-- isosent="20140730035755" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error" -->
<!-- id="OFF4DA4897.C3B20C9B-ON49257D25.00155B3B-49257D25.0015E101_at_jcity.maeda.co.jp" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9245C217-D07E-4C58-94D1-D30409504BB8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error<br>
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20openmpi-1.8.2rc2%20and%20f08%20interface%20built%20with%20PGI-14.7	causes%20link%20error"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-07-29 23:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15352.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15452.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for poor information. I attached compile-output and configure-log.
<br>
I hope you could find the problem.
<br>
<p>(See attached file: openmpi-pgi14.7.tar.gz)
<br>
<p>Regards,
<br>
Tetsuya Mishima
<br>
<p><span class="quotelev1">&gt; Tetsuya --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am unable to test with the PGI compiler -- I don't have a license.  I
</span><br>
was hoping that LANL would be able to test today, but I don't think they
<br>
got to it.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you send more details?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; E.g., can you send the all the stuff listed on
</span><br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a> for 1.8 and 1.8.2rc2 for the 14.7
<br>
compiler?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm *guessing* that we've done something new in the changes since 1.8
</span><br>
that PGI doesn't support, and we need to disable that something (hopefully
<br>
while not needing to disable the entire mpi_f08
<br>
<span class="quotelev1">&gt; bindings...).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 28, 2014, at 11:43 PM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi folks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried to build openmpi-1.8.2rc2 with PGI-14.7 and execute a sample
</span><br>
<span class="quotelev2">&gt; &gt; program. Then, it causes linking error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ cat test.f
</span><br>
<span class="quotelev2">&gt; &gt;      program hello_world
</span><br>
<span class="quotelev2">&gt; &gt;      use mpi_f08
</span><br>
<span class="quotelev2">&gt; &gt;      implicit none
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      type(MPI_Comm) :: comm
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: myid, npes, ierror
</span><br>
<span class="quotelev2">&gt; &gt;      integer :: name_length
</span><br>
<span class="quotelev2">&gt; &gt;      character(len=MPI_MAX_PROCESSOR_NAME) :: processor_name
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      call mpi_init(ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      comm = MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Comm_rank(comm, myid, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Comm_size(comm, npes, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Get_processor_name(processor_name, name_length, ierror)
</span><br>
<span class="quotelev2">&gt; &gt;      write (*,'(A,X,I4,X,A,X,I4,X,A,X,A)')
</span><br>
<span class="quotelev2">&gt; &gt;     +&quot;Process&quot;, myid, &quot;of&quot;, npes, &quot;is on&quot;, trim(processor_name)
</span><br>
<span class="quotelev2">&gt; &gt;      call MPI_Finalize(ierror)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;      end program hello_world
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [mishima_at_manage work]$ mpif90 test.f -o test.ex
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/pgfortran65ZcUeoncoqT.o: In function `.C1_283':
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x6c): undefined reference to
</span><br>
`mpi_f08_interfaces_callbacks_'
<br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x74): undefined reference to `mpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x7c): undefined reference to `pmpi_f08_interfaces_'
</span><br>
<span class="quotelev2">&gt; &gt; test.f:(.data+0x84): undefined reference to `mpi_f08_sizeof_'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So, I did some more tests with previous version of PGI and
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8. The results are summarized as follows:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;                  PGI13.10                       PGI14.7
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8       OK                             OK
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.8.2rc2  configure sets use_f08_mpi:no  link error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Tetsuya Mishima
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15303.php">http://www.open-mpi.org/community/lists/devel/2014/07/15303.php</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/07/15335.php">http://www.open-mpi.org/community/lists/devel/2014/07/15335.php</a>
<br>

<br><p>
<p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15353/openmpi-pgi14.7.tar.gz">openmpi-pgi14.7.tar.gz</a>
</ul>
<!-- attachment="openmpi-pgi14.7.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15354.php">Rolf vandeVaart: "Re: [OMPI devel] trunk compilation errors in jenkins"</a>
<li><strong>Previous message:</strong> <a href="15352.php">Gilles Gouaillardet: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7 causes link error"</a>
<li><strong>In reply to:</strong> <a href="15335.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15452.php">Pritchard Jr., Howard: "Re: [OMPI devel] openmpi-1.8.2rc2 and f08 interface built with PGI-14.7	causes link error"</a>
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
