<?
$subject_val = "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 24 05:09:41 2015" -->
<!-- isoreceived="20150924090941" -->
<!-- sent="Thu, 24 Sep 2015 11:09:39 +0200" -->
<!-- isosent="20150924090939" -->
<!-- name="Fabrice Roy" -->
<!-- email="Fabrice.Roy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0" -->
<!-- id="5603BDD3.70107_at_obspm.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="56034155.1010401_at_rist.or.jp" -->
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
<strong>Date:</strong> 2015-09-24 05:09:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thanks for the quick answer.
<br>
I think I cannot use mpi_f08 in my code because I am also using parallel 
<br>
HDF5 which does not seem to be compatible with the Fortran 2008 module.
<br>
I will ask Intel what they think about this problem.
<br>
Thanks,
<br>
<p>Fabrice
<br>
<p><p>Le 24/09/2015 02:18, Gilles Gouaillardet a &#233;crit :
<br>
<span class="quotelev1">&gt; Fabrice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i do not fully understand the root cause of this error, and you might 
</span><br>
<span class="quotelev1">&gt; want to ask Intel folks to comment on that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; that being said, and since this compiler does support fortran 2008, i 
</span><br>
<span class="quotelev1">&gt; strongly encourage you to
</span><br>
<span class="quotelev1">&gt; use mpi_f08
</span><br>
<span class="quotelev1">&gt; instead of
</span><br>
<span class="quotelev1">&gt; use mpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; a happy feature/side effect is that your program compiles and runs 
</span><br>
<span class="quotelev1">&gt; just fine if you use mpi_f08 module (!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 9/24/2015 1:00 AM, Fabrice Roy wrote:
</span><br>
<span class="quotelev2">&gt;&gt; program testmpi
</span><br>
<span class="quotelev2">&gt;&gt;     use mpi
</span><br>
<span class="quotelev2">&gt;&gt;     implicit none
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     integer :: pid
</span><br>
<span class="quotelev2">&gt;&gt;     integer :: ierr
</span><br>
<span class="quotelev2">&gt;&gt;     integer :: tok
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     call mpi_init(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;     call mpi_comm_rank(mpi_comm_world, pid,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;     if(pid==0) then
</span><br>
<span class="quotelev2">&gt;&gt;        tok = 1
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;        tok = 0
</span><br>
<span class="quotelev2">&gt;&gt;     end if
</span><br>
<span class="quotelev2">&gt;&gt;     call mpi_bcast(tok,1,mpi_integer,0,mpi_comm_world,ierr)
</span><br>
<span class="quotelev2">&gt;&gt;     call mpi_finalize(ierr)
</span><br>
<span class="quotelev2">&gt;&gt;   end program testmpi 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27657.php">http://www.open-mpi.org/community/lists/users/2015/09/27657.php</a>
</span><br>
<p><pre>
-- 
Fabrice Roy
Ing&#233;nieur en calcul scientifique
LUTH - CNRS / Observatoire de Paris
5 place Jules Janssen
92190 Meudon
Tel. : 01 45 07 71 20

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27660/smime.p7s">Signature cryptographique S/MIME</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27661.php">Surivinta Surivinta: "Re: [OMPI users] Problem with implementation of Foxa algorithm"</a>
<li><strong>Previous message:</strong> <a href="27659.php">Patrick Begou: "Re: [OMPI users] OpenMPI-1.10.0 bind-to core error"</a>
<li><strong>In reply to:</strong> <a href="27657.php">Gilles Gouaillardet: "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
<li><strong>Reply:</strong> <a href="27663.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using Open MPI 1.10.0 built with Intel compilers 16.0.0"</a>
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
