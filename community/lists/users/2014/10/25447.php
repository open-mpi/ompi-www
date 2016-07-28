<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 10:55:47 2014" -->
<!-- isoreceived="20141003145547" -->
<!-- sent="Fri, 3 Oct 2014 16:55:46 +0200" -->
<!-- isosent="20141003145546" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAG8o1y7Bw5S7S01ja5vCw-zOEjzc61oXApSsQLCbW9+CtrrU3A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="E57D1643-3AB8-4BE7-93D5-34890C976378_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 10:55:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff,
<br>
how can I do that?
<br>
<p>Do I need to re-install OMPI?
<br>
<p>Thanks again
<br>
<p><p><p><p><p>Diego
<br>
<p><p>On 3 October 2014 16:47, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 3, 2014, at 10:38 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all, Dear Jeff,
</span><br>
<span class="quotelev2">&gt; &gt; when I use
</span><br>
<span class="quotelev2">&gt; &gt; use MPI, I get
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; /tmp/ifortiW8IBH.i90: catastrophic error: **Internal compiler error:
</span><br>
<span class="quotelev1">&gt; segmentation violation signal raised** Please report this error along with
</span><br>
<span class="quotelev1">&gt; the circumstances in which it occurred in a Software Problem Report.  Note:
</span><br>
<span class="quotelev1">&gt; File and line given may not be explicit cause of this error.
</span><br>
<span class="quotelev2">&gt; &gt; compilation aborted for SPH_MPI.f90 (code 1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like you need to upgrade your compiler to get the latest
</span><br>
<span class="quotelev1">&gt; updates/bug fixes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If i use &quot;use mpi_f08&quot;, I get
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; SPH_MPI.f90(43): error #6285: There is no matching specific subroutine
</span><br>
<span class="quotelev1">&gt; for this generic subroutine call.   [MPI_CART_CREATE]
</span><br>
<span class="quotelev2">&gt; &gt;    CALL MPI_CART_CREATE
</span><br>
<span class="quotelev1">&gt; (MPI_COMM_WORLD,ndims,dims,periods,.TRUE.,COMM_CART,MPI%iErr)
</span><br>
<span class="quotelev2">&gt; &gt; --------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds like you might have mistakes in this part of the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But note that mpi_f08 involves *changes* to your code, compared to the
</span><br>
<span class="quotelev1">&gt; mpif.h and mpi interfaces -- all MPI handles, for example, have distinct
</span><br>
<span class="quotelev1">&gt; types now -- they're not integers.  For example, you'll need something like
</span><br>
<span class="quotelev1">&gt; this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   type(MPI_Comm) :: COMM_CART
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; about mpif90 -r8 *.f90
</span><br>
<span class="quotelev2">&gt; &gt; when I istalled open MPI I run
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix/opt/openmpi cc=icc cxx=icpc f77=ifort FC=ifort
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F77 is ignored these days; FC is the only one that matters.  And I assume
</span><br>
<span class="quotelev1">&gt; &quot;cc&quot; and &quot;cxx&quot; were typos; I assume you actually used &quot;CC&quot; and &quot;CXX&quot;, right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're going to compile your application with -r8, then you need to
</span><br>
<span class="quotelev1">&gt; configure OMPI with -r8, e.g., add &quot;FCFLAGS=-r8&quot; in there.  I don't
</span><br>
<span class="quotelev1">&gt; remember what that other flag was you specified offhand, but if it's
</span><br>
<span class="quotelev1">&gt; important, then you need to specify it on the configure command line, for
</span><br>
<span class="quotelev1">&gt; whichever compiler flags are relevant.
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25446.php">http://www.open-mpi.org/community/lists/users/2014/10/25446.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25446.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25448.php">Nick Papior Andersen: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25450.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
