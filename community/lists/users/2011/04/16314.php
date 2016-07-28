<?
$subject_val = "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 06:18:49 2011" -->
<!-- isoreceived="20110422101849" -->
<!-- sent="Fri, 22 Apr 2011 06:18:41 -0400" -->
<!-- isosent="20110422101841" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation" -->
<!-- id="EABBC0A5-309E-4F6B-9531-46252BB75B5E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4DB10C10.9090608_at_rice.edu" -->
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
<strong>Date:</strong> 2011-04-22 06:18:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16315.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>In reply to:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops!  Missed that; thanks.
<br>
<p>I've committed the change to the trunk and filed CMRs to bring the fix to v1.4 and v1.5.  
<br>
<p>Thanks for reporting the issue.
<br>
<p><p>On Apr 22, 2011, at 1:03 AM, Stanislav Sazykin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, the patch did not solve the problem. Looking more,
</span><br>
<span class="quotelev1">&gt; there is another place where the interfaces come up, in
</span><br>
<span class="quotelev1">&gt; mpi-f90-interfaces.h.sh in ompi/mpi/f90/scripts
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I manually change the two arguments to arrays from scalars
</span><br>
<span class="quotelev1">&gt; in both scripts after running configure but before &quot;make&quot;,
</span><br>
<span class="quotelev1">&gt; then it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Stan Sazykin
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 4/21/2011 11:07, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I do believe you found a bona-fide bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could you try the attached patch?  (I think it should only affect f90 &quot;large&quot; builds)  You should be able to check it quickly via:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; cd top_of_ompi_source_tree
</span><br>
<span class="quotelev2">&gt;&gt; patch -p0&lt;  scatterv-f90.patch
</span><br>
<span class="quotelev2">&gt;&gt; cd ompi/mpi/f90
</span><br>
<span class="quotelev2">&gt;&gt; make clean
</span><br>
<span class="quotelev2">&gt;&gt; rm mpi_scatterv_f90.f90
</span><br>
<span class="quotelev2">&gt;&gt; make all install
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 21, 2011, at 10:37 AM, Stanislav Sazykin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I came across what appears to be an error in implementation of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_scatterv Fortran-90 version. I am using OpenMPI 1.4.3 on Linux.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This comes up when OpenMPI was configured with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --with-mpi-f90-size=medium or --with-mpi-f90-size=large
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The standard specifies that the interface is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_SCATTERV(SENDBUF, SENDCOUNTS, DISPLS, SENDTYPE, RECVBUF,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        RECVCOUNT, RECVTYPE, ROOT, COMM, IERROR)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    &lt;type&gt;     SENDBUF(*), RECVBUF(*)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    INTEGER    SENDCOUNTS(*), DISPLS(*), SENDTYPE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so that SENDCOUNTS and DISPLS are integer arrays. However, if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I compile a fortran code with calls to MPI_scatterv and compile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with argument checks, two Fortran compilers (Intel and Lahey)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; produce fatal errors saying there is no matching interface.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Looking in the source code of OpenMPI, I see that  in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi/mpi/f90/scripts, the script mpi_scatterv_f90.f90.sh that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is invoked when running &quot;make&quot; produces Fortran interfaces
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that list both SENDCOUNTS and DISPLS as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integer, intent(in) ::
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This appears to be an error as it would be illegal to pass a scalar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable and receive it as an array in the subroutine. I have not
</span><br>
<span class="quotelev3">&gt;&gt;&gt; figured out what happens in the code at this invocation (the code
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is complicated), but seems like a segfault situation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Stan Sazykin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16315.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>In reply to:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
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
