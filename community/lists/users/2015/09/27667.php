<?
$subject_val = "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 10:51:46 2015" -->
<!-- isoreceived="20150924145146" -->
<!-- sent="Thu, 24 Sep 2015 16:51:44 +0200" -->
<!-- isosent="20150924145144" -->
<!-- name="Fabrice Roy" -->
<!-- email="Fabrice.Roy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="56040E00.8090104_at_obspm.fr" -->
<!-- charset="utf-8" -->
<!-- inreplyto="B59E302F-9390-4667-A103-C68DC3FB3189_at_cisco.com" -->
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
<strong>From:</strong> Fabrice Roy (<em>Fabrice.Roy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-24 10:51:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have made some other tests. I don't know if it can help you but here 
<br>
is what I observed.
<br>
<p>Using the array contructor [] solves the problem for a scalar, as 
<br>
someone wrote on the Intel forum.
<br>
The same code with tok declared as an integer and
<br>
call mpi_bcast([tok],1,mpi_integer,0,mpi_comm_world,ierr)
<br>
works fine.
<br>
<p>But I get the same compilation error (no matching specific subroutine) 
<br>
if tok is a 2d array:
<br>
integer, dimension(2:2) :: tok
<br>
call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
<br>
does not compile.
<br>
<p>In this case, I can also solve the problem with the array constructor 
<br>
but I don't understand why I have to use this.
<br>
And if I try to send only a part of my 2d array, it doesn't work.
<br>
call mpi_bcast([tok(1,2)],1,mpi_integer,0,mpi_comm_world,ierr)
<br>
compiles but I don't get the good result.
<br>
<p>Thanks for your help,
<br>
<p>Fabrice
<br>
<p><p>Le 24/09/2015 16:32, Jeff Squyres (jsquyres) a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; Yes -- typo -- it's not a problem with mpi_f08, it's a problem with the mpi module using the &quot;ignore TKR&quot; implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="https://github.com/open-mpi/ompi/issues/937">https://github.com/open-mpi/ompi/issues/937</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2015, at 4:30 PM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am not sure whether you made a typo or not ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the issue only occuex with f90 bindings (aka use mpi)
</span><br>
<span class="quotelev2">&gt;&gt; f08 bindings (aka use mpi_f08) works fine
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, September 24, 2015, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I looked into the MPI_BCAST problem -- I think we (Open MPI) have a problem with the mpi_f08 bindings and the Intel 2016 compilers.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like configure is choosing to generate a different pragma for Intel 2016 vs. Intel 2015 compilers, and that's causing a problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me look into this a little more...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 24, 2015, at 11:09 AM, Fabrice Roy &lt;Fabrice.Roy_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for the quick answer.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think I cannot use mpi_f08 in my code because I am also using parallel HDF5 which does not seem to be compatible with the Fortran 2008 module.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will ask Intel what they think about this problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabrice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 24/09/2015 02:18, Gilles Gouaillardet a &#195;&#169;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fabrice,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; i do not fully understand the root cause of this error, and you might want to ask Intel folks to comment on that.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that being said, and since this compiler does support fortran 2008, i strongly encourage you to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use mpi_f08
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; use mpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a happy feature/side effect is that your program compiles and runs just fine if you use mpi_f08 module (!)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gilles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 9/24/2015 1:00 AM, Fabrice Roy wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; program testmpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     use mpi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     implicit none
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     integer :: pid
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     integer :: ierr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     integer :: tok
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     call mpi_init(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     call mpi_comm_rank(mpi_comm_world, pid,ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     if(pid==0) then
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        tok = 1
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     else
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        tok = 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     end if
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     call mpi_finalize(ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;   end program testmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27657.php">http://www.open-mpi.org/community/lists/users/2015/09/27657.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fabrice Roy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ing&#195;&#169;nieur en calcul scientifique
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LUTH - CNRS / Observatoire de Paris
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 5 place Jules Janssen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 92190 Meudon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel. : 01 45 07 71 20
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27660.php">http://www.open-mpi.org/community/lists/users/2015/09/27660.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27663.php">http://www.open-mpi.org/community/lists/users/2015/09/27663.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27664.php">http://www.open-mpi.org/community/lists/users/2015/09/27664.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Fabrice Roy
Ing&#195;&#169;nieur en calcul scientifique
LUTH - CNRS / Observatoire de Paris
5 place Jules Janssen
92190 Meudon
Tel. : 01 45 07 71 20

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27667/smime.p7s">Signature cryptographique S/MIME</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Previous message:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>In reply to:</strong> <a href="27666.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27668.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
