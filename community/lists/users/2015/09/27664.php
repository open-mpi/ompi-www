<?
$subject_val = "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 10:30:18 2015" -->
<!-- isoreceived="20150924143018" -->
<!-- sent="Thu, 24 Sep 2015 23:30:16 +0900" -->
<!-- isosent="20150924143016" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="CAAkFZ5s7R78OnzgVxvS0-MjQziGh4aN-LzPbns0XLyywibsK1Q_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5AF396A8-4C5B-4C8C-BF0E-C1A0FD5039EF_at_cisco.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 10:30:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>I am not sure whether you made a typo or not ...
<br>
<p>the issue only occuex with f90 bindings (aka use mpi)
<br>
f08 bindings (aka use mpi_f08) works fine
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, September 24, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I looked into the MPI_BCAST problem -- I think we (Open MPI) have a
</span><br>
<span class="quotelev1">&gt; problem with the mpi_f08 bindings and the Intel 2016 compilers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like configure is choosing to generate a different pragma for
</span><br>
<span class="quotelev1">&gt; Intel 2016 vs. Intel 2015 compilers, and that's causing a problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me look into this a little more...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Sep 24, 2015, at 11:09 AM, Fabrice Roy &lt;Fabrice.Roy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the quick answer.
</span><br>
<span class="quotelev2">&gt; &gt; I think I cannot use mpi_f08 in my code because I am also using parallel
</span><br>
<span class="quotelev1">&gt; HDF5 which does not seem to be compatible with the Fortran 2008 module.
</span><br>
<span class="quotelev2">&gt; &gt; I will ask Intel what they think about this problem.
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Fabrice
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le 24/09/2015 02:18, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Fabrice,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; i do not fully understand the root cause of this error, and you might
</span><br>
<span class="quotelev1">&gt; want to ask Intel folks to comment on that.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that being said, and since this compiler does support fortran 2008, i
</span><br>
<span class="quotelev1">&gt; strongly encourage you to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use mpi_f08
</span><br>
<span class="quotelev3">&gt; &gt;&gt; instead of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; use mpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; a happy feature/side effect is that your program compiles and runs just
</span><br>
<span class="quotelev1">&gt; fine if you use mpi_f08 module (!)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Gilles
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 9/24/2015 1:00 AM, Fabrice Roy wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; program testmpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    use mpi
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    implicit none
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    integer :: pid
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    integer :: ierr
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    integer :: tok
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    call mpi_init(ierr)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    call mpi_comm_rank(mpi_comm_world, pid,ierr)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    if(pid==0) then
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       tok = 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    else
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       tok = 0
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    end if
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;    call mpi_finalize(ierr)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;  end program testmpi
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27657.php">http://www.open-mpi.org/community/lists/users/2015/09/27657.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Fabrice Roy
</span><br>
<span class="quotelev2">&gt; &gt; Ing&#195;&#169;nieur en calcul scientifique
</span><br>
<span class="quotelev2">&gt; &gt; LUTH - CNRS / Observatoire de Paris
</span><br>
<span class="quotelev2">&gt; &gt; 5 place Jules Janssen
</span><br>
<span class="quotelev2">&gt; &gt; 92190 Meudon
</span><br>
<span class="quotelev2">&gt; &gt; Tel. : 01 45 07 71 20
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27660.php">http://www.open-mpi.org/community/lists/users/2015/09/27660.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27663.php">http://www.open-mpi.org/community/lists/users/2015/09/27663.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27664/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27665.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
