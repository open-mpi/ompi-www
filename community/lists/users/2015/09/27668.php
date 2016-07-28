<?
$subject_val = "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 10:55:48 2015" -->
<!-- isoreceived="20150924145548" -->
<!-- sent="Thu, 24 Sep 2015 14:55:44 +0000" -->
<!-- isosent="20150924145544" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="48B5AD15-A6DB-4A23-B3DD-C4B7B2964AB0_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="56040E00.8090104_at_obspm.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 10:55:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27667.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27667.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Intel apparently changed something in their 2016 compiler (compared to the 2015 compiler); the Open MPI configure script decided to use a different pragma.  Per the issue I opened up on Github, I need to look at the configure script and see what's going wrong.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 24, 2015, at 4:51 PM, Fabrice Roy &lt;Fabrice.Roy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have made some other tests. I don't know if it can help you but here is what I observed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Using the array contructor [] solves the problem for a scalar, as someone wrote on the Intel forum.
</span><br>
<span class="quotelev1">&gt; The same code with tok declared as an integer and
</span><br>
<span class="quotelev1">&gt; call mpi_bcast([tok],1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt; works fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But I get the same compilation error (no matching specific subroutine) if tok is a 2d array:
</span><br>
<span class="quotelev1">&gt; integer, dimension(2:2) :: tok
</span><br>
<span class="quotelev1">&gt; call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt; does not compile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case, I can also solve the problem with the array constructor but I don't understand why I have to use this.
</span><br>
<span class="quotelev1">&gt; And if I try to send only a part of my 2d array, it doesn't work.
</span><br>
<span class="quotelev1">&gt; call mpi_bcast([tok(1,2)],1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt; compiles but I don't get the good result.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fabrice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 24/09/2015 16:32, Jeff Squyres (jsquyres) a &#195;&#169;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Yes -- typo -- it's not a problem with mpi_f08, it's a problem with the mpi module using the &quot;ignore TKR&quot; implementation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See <a href="https://github.com/open-mpi/ompi/issues/937.">https://github.com/open-mpi/ompi/issues/937.</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2015, at 4:30 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure whether you made a typo or not ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the issue only occuex with f90 bindings (aka use mpi)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; f08 bindings (aka use mpi_f08) works fine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thursday, September 24, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I looked into the MPI_BCAST problem -- I think we (Open MPI) have a problem with the mpi_f08 bindings and the Intel 2016 compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like configure is choosing to generate a different pragma for Intel 2016 vs. Intel 2015 compilers, and that's causing a problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me look into this a little more...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 24, 2015, at 11:09 AM, Fabrice Roy &lt;Fabrice.Roy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for the quick answer.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I think I cannot use mpi_f08 in my code because I am also using parallel HDF5 which does not seem to be compatible with the Fortran 2008 module.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I will ask Intel what they think about this problem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fabrice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 24/09/2015 02:18, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fabrice,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; i do not fully understand the root cause of this error, and you might want to ask Intel folks to comment on that.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that being said, and since this compiler does support fortran 2008, i strongly encourage you to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use mpi_f08
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; instead of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; use mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a happy feature/side effect is that your program compiles and runs just fine if you use mpi_f08 module (!)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 9/24/2015 1:00 AM, Fabrice Roy wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; program testmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    use mpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    implicit none
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    integer :: pid
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    integer :: tok
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    call mpi_comm_rank(mpi_comm_world, pid,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    if(pid==0) then
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       tok = 1
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    else
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;       tok = 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    end if
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;    call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;  end program testmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27657.php">http://www.open-mpi.org/community/lists/users/2015/09/27657.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fabrice Roy
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ing&#195;&#169;nieur en calcul scientifique
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LUTH - CNRS / Observatoire de Paris
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 5 place Jules Janssen
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 92190 Meudon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel. : 01 45 07 71 20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27660.php">http://www.open-mpi.org/community/lists/users/2015/09/27660.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27663.php">http://www.open-mpi.org/community/lists/users/2015/09/27663.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27664.php">http://www.open-mpi.org/community/lists/users/2015/09/27664.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Fabrice Roy
</span><br>
<span class="quotelev1">&gt; Ing&#195;&#169;nieur en calcul scientifique
</span><br>
<span class="quotelev1">&gt; LUTH - CNRS / Observatoire de Paris
</span><br>
<span class="quotelev1">&gt; 5 place Jules Janssen
</span><br>
<span class="quotelev1">&gt; 92190 Meudon
</span><br>
<span class="quotelev1">&gt; Tel. : 01 45 07 71 20
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27667.php">http://www.open-mpi.org/community/lists/users/2015/09/27667.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27669.php">Matt Thompson: "[OMPI users] Open MPI 1.10.0: Works on one Sandybridge Node, not on another: tcp_peer_send_blocking"</a>
<li><strong>Previous message:</strong> <a href="27667.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27667.php">Fabrice Roy: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27676.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
