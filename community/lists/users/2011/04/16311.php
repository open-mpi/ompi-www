<?
$subject_val = "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 01:03:20 2011" -->
<!-- isoreceived="20110422050320" -->
<!-- sent="Fri, 22 Apr 2011 00:03:12 -0500" -->
<!-- isosent="20110422050312" -->
<!-- name="Stanislav Sazykin" -->
<!-- email="sazykin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation" -->
<!-- id="4DB10C10.9090608_at_rice.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3B7CF5E-4ED6-49A3-A875-748F3B721B0D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation<br>
<strong>From:</strong> Stanislav Sazykin (<em>sazykin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-22 01:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16310.php">Zhangping Wei: "[OMPI users] MPI_Gatherv error"</a>
<li><strong>In reply to:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>No, the patch did not solve the problem. Looking more,
<br>
there is another place where the interfaces come up, in
<br>
mpi-f90-interfaces.h.sh in ompi/mpi/f90/scripts
<br>
<p>If I manually change the two arguments to arrays from scalars
<br>
in both scripts after running configure but before &quot;make&quot;,
<br>
then it works.
<br>
<p>Stan Sazykin
<br>
<p><p>On 4/21/2011 11:07, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I do believe you found a bona-fide bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you try the attached patch?  (I think it should only affect f90 &quot;large&quot; builds)  You should be able to check it quickly via:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cd top_of_ompi_source_tree
</span><br>
<span class="quotelev1">&gt; patch -p0&lt;  scatterv-f90.patch
</span><br>
<span class="quotelev1">&gt; cd ompi/mpi/f90
</span><br>
<span class="quotelev1">&gt; make clean
</span><br>
<span class="quotelev1">&gt; rm mpi_scatterv_f90.f90
</span><br>
<span class="quotelev1">&gt; make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 21, 2011, at 10:37 AM, Stanislav Sazykin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I came across what appears to be an error in implementation of
</span><br>
<span class="quotelev2">&gt;&gt; MPI_scatterv Fortran-90 version. I am using OpenMPI 1.4.3 on Linux.
</span><br>
<span class="quotelev2">&gt;&gt; This comes up when OpenMPI was configured with
</span><br>
<span class="quotelev2">&gt;&gt; --with-mpi-f90-size=medium or --with-mpi-f90-size=large
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The standard specifies that the interface is
</span><br>
<span class="quotelev2">&gt;&gt; MPI_SCATTERV(SENDBUF, SENDCOUNTS, DISPLS, SENDTYPE, RECVBUF,
</span><br>
<span class="quotelev2">&gt;&gt;         RECVCOUNT, RECVTYPE, ROOT, COMM, IERROR)
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;type&gt;     SENDBUF(*), RECVBUF(*)
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER    SENDCOUNTS(*), DISPLS(*), SENDTYPE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so that SENDCOUNTS and DISPLS are integer arrays. However, if
</span><br>
<span class="quotelev2">&gt;&gt; I compile a fortran code with calls to MPI_scatterv and compile
</span><br>
<span class="quotelev2">&gt;&gt; with argument checks, two Fortran compilers (Intel and Lahey)
</span><br>
<span class="quotelev2">&gt;&gt; produce fatal errors saying there is no matching interface.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Looking in the source code of OpenMPI, I see that  in
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mpi/f90/scripts, the script mpi_scatterv_f90.f90.sh that
</span><br>
<span class="quotelev2">&gt;&gt; is invoked when running &quot;make&quot; produces Fortran interfaces
</span><br>
<span class="quotelev2">&gt;&gt; that list both SENDCOUNTS and DISPLS as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; integer, intent(in) ::
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This appears to be an error as it would be illegal to pass a scalar
</span><br>
<span class="quotelev2">&gt;&gt; variable and receive it as an array in the subroutine. I have not
</span><br>
<span class="quotelev2">&gt;&gt; figured out what happens in the code at this invocation (the code
</span><br>
<span class="quotelev2">&gt;&gt; is complicated), but seems like a segfault situation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Stan Sazykin
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>Previous message:</strong> <a href="16310.php">Zhangping Wei: "[OMPI users] MPI_Gatherv error"</a>
<li><strong>In reply to:</strong> <a href="16301.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
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
