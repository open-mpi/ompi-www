<?
$subject_val = "Re: [OMPI users] Problem using mpifort(Intel)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 02:02:49 2015" -->
<!-- isoreceived="20151001060249" -->
<!-- sent="Thu, 1 Oct 2015 08:02:46 +0200" -->
<!-- isosent="20151001060246" -->
<!-- name="Julien Bodart" -->
<!-- email="julien.bodart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem using mpifort(Intel)" -->
<!-- id="CACWXmz4a4YRBUwU9OERxgTMtAFGrBW+N5SsQU_+SDZ9f-PFykA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="[OMPI users] Problem using mpifort(Intel)" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem using mpifort(Intel)<br>
<strong>From:</strong> Julien Bodart (<em>julien.bodart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-01 02:02:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27758.php">Emyr James: "[OMPI users] Problem starting jobs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Reply:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have tried the last nightly build and it seems that nobody is complaining now.
<br>
Thanks a lot,
<br>
<p>Julien
<br>
<p><span class="quotelev1">&gt; Date: Fri, 25 Sep 2015 17:55:38 +0000
</span><br>
<span class="quotelev1">&gt; From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI User's List&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Problem using mpifort(Intel)
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;66EFD306-64C3-4121-A952-D3CA7F062A42_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This problem was literally reported just the other day; it was partially fixed earlier today, the rest of the fix will be committed shortly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Intel 2016 compiler suite changed something in how they handle the !GCC pragma (i.e., they didn't handle it at all before, and now they only partially handle it).  See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/09/27676.php">http://www.open-mpi.org/community/lists/users/2015/09/27676.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue affects the &quot;use mpi&quot; and &quot;use mpi_f08&quot; modules for the Intel 2016 Parallel Studio compiler suite.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 25, 2015, at 7:36 PM, Julien Bodart &lt;julien.bodart_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This problem has probably been discussed already but I could not find it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I a m trying to compile openmpi with intel-16 compilers mpicc,mpicxx
</span><br>
<span class="quotelev2">&gt;&gt; work, but I have trouble with mpifort:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Trying to compile one of example programs I get the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ring_usempi.f90(35): error #6285: There is no matching specific
</span><br>
<span class="quotelev2">&gt;&gt; subroutine for this generic subroutine call.   [MPI_SEND]
</span><br>
<span class="quotelev2">&gt;&gt;       call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; -----------^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wether I use openmpi 1.8 or openmpi 1.10
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I cannot find the right configure options to get the correct fortran bindings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27681.php">http://www.open-mpi.org/community/lists/users/2015/09/27681.php</a>
</span><br>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27758.php">Emyr James: "[OMPI users] Problem starting jobs"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27756.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/09/27681.php">Julien Bodart: "[OMPI users] Problem using mpifort(Intel)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Reply:</strong> <a href="27767.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
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
