<?
$subject_val = "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 12:07:40 2011" -->
<!-- isoreceived="20110421160740" -->
<!-- sent="Thu, 21 Apr 2011 12:07:31 -0400" -->
<!-- isosent="20110421160731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation" -->
<!-- id="C3B7CF5E-4ED6-49A3-A875-748F3B721B0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB04119.1020609_at_rice.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 12:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
<li><strong>Previous message:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I do believe you found a bona-fide bug.
<br>
<p>Could you try the attached patch?  (I think it should only affect f90 &quot;large&quot; builds)  You should be able to check it quickly via:
<br>
<p>cd top_of_ompi_source_tree
<br>
patch -p0 &lt; scatterv-f90.patch
<br>
cd ompi/mpi/f90
<br>
make clean
<br>
rm mpi_scatterv_f90.f90
<br>
make all install
<br>
<p><p><p>On Apr 21, 2011, at 10:37 AM, Stanislav Sazykin wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I came across what appears to be an error in implementation of
</span><br>
<span class="quotelev1">&gt; MPI_scatterv Fortran-90 version. I am using OpenMPI 1.4.3 on Linux.
</span><br>
<span class="quotelev1">&gt; This comes up when OpenMPI was configured with
</span><br>
<span class="quotelev1">&gt; --with-mpi-f90-size=medium or --with-mpi-f90-size=large
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The standard specifies that the interface is
</span><br>
<span class="quotelev1">&gt; MPI_SCATTERV(SENDBUF, SENDCOUNTS, DISPLS, SENDTYPE, RECVBUF,
</span><br>
<span class="quotelev1">&gt;        RECVCOUNT, RECVTYPE, ROOT, COMM, IERROR)
</span><br>
<span class="quotelev1">&gt;    &lt;type&gt;    SENDBUF(*), RECVBUF(*)
</span><br>
<span class="quotelev1">&gt;    INTEGER    SENDCOUNTS(*), DISPLS(*), SENDTYPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; so that SENDCOUNTS and DISPLS are integer arrays. However, if
</span><br>
<span class="quotelev1">&gt; I compile a fortran code with calls to MPI_scatterv and compile
</span><br>
<span class="quotelev1">&gt; with argument checks, two Fortran compilers (Intel and Lahey)
</span><br>
<span class="quotelev1">&gt; produce fatal errors saying there is no matching interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking in the source code of OpenMPI, I see that  in
</span><br>
<span class="quotelev1">&gt; ompi/mpi/f90/scripts, the script mpi_scatterv_f90.f90.sh that
</span><br>
<span class="quotelev1">&gt; is invoked when running &quot;make&quot; produces Fortran interfaces
</span><br>
<span class="quotelev1">&gt; that list both SENDCOUNTS and DISPLS as
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; integer, intent(in) ::
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This appears to be an error as it would be illegal to pass a scalar
</span><br>
<span class="quotelev1">&gt; variable and receive it as an array in the subroutine. I have not
</span><br>
<span class="quotelev1">&gt; figured out what happens in the code at this invocation (the code
</span><br>
<span class="quotelev1">&gt; is complicated), but seems like a segfault situation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Stan Sazykin
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16301/scatterv-f90.patch">scatterv-f90.patch</a>
</ul>
<!-- attachment="scatterv-f90.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16302.php">Paul Monday: "[OMPI users] Removing Portals BTLs"</a>
<li><strong>Previous message:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>In reply to:</strong> <a href="16300.php">Stanislav Sazykin: "[OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Reply:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
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
