<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 11:03:43 2014" -->
<!-- isoreceived="20141003150343" -->
<!-- sent="Fri, 3 Oct 2014 15:03:22 +0000" -->
<!-- isosent="20141003150322" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc6fp5iYXGnNhi2Z7U_Kw4C9uXxK9Bv6PVnE_MaVpb-Tcw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y7Bw5S7S01ja5vCw-zOEjzc61oXApSsQLCbW9+CtrrU3A_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 11:03:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Might I chip in and ask &quot;why in the name of fortran are you using -r8&quot;?
<br>
It seems like you do not really need it, more that it is a convenience flag
<br>
for you (so that you have to type less?)?
<br>
Again as I stated in my previous mail, I would never do that (and would
<br>
discourage the use of it for almost all causes), especially as linking
<br>
against libraries might, as in this case, be limiting your capabilities
<br>
(unless you of course compile everything with r8).
<br>
<p>Instead do:
<br>
integer, parameter :: dp = selected_real_kind(p=14)
<br>
real(dp) :: RR(2), QQ(4)
<br>
<p>then compile with &quot;mpif90 -c *.f90&quot;
<br>
<p>Put the dp variable in some global module :
<br>
module precision
<br>
public
<br>
integer, parameter :: dp = selected_real_kind(p=14)
<br>
end module
<br>
<p>2014-10-03 14:55 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear Jeff,
</span><br>
<span class="quotelev1">&gt; how can I do that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I need to re-install OMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 16:47, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2014, at 10:38 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear all, Dear Jeff,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when I use
</span><br>
<span class="quotelev3">&gt;&gt; &gt; use MPI, I get
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; /tmp/ifortiW8IBH.i90: catastrophic error: **Internal compiler error:
</span><br>
<span class="quotelev2">&gt;&gt; segmentation violation signal raised** Please report this error along with
</span><br>
<span class="quotelev2">&gt;&gt; the circumstances in which it occurred in a Software Problem Report.  Note:
</span><br>
<span class="quotelev2">&gt;&gt; File and line given may not be explicit cause of this error.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; compilation aborted for SPH_MPI.f90 (code 1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you need to upgrade your compiler to get the latest
</span><br>
<span class="quotelev2">&gt;&gt; updates/bug fixes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; If i use &quot;use mpi_f08&quot;, I get
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; SPH_MPI.f90(43): error #6285: There is no matching specific subroutine
</span><br>
<span class="quotelev2">&gt;&gt; for this generic subroutine call.   [MPI_CART_CREATE]
</span><br>
<span class="quotelev3">&gt;&gt; &gt;    CALL MPI_CART_CREATE
</span><br>
<span class="quotelev2">&gt;&gt; (MPI_COMM_WORLD,ndims,dims,periods,.TRUE.,COMM_CART,MPI%iErr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt; --------^
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sounds like you might have mistakes in this part of the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But note that mpi_f08 involves *changes* to your code, compared to the
</span><br>
<span class="quotelev2">&gt;&gt; mpif.h and mpi interfaces -- all MPI handles, for example, have distinct
</span><br>
<span class="quotelev2">&gt;&gt; types now -- they're not integers.  For example, you'll need something like
</span><br>
<span class="quotelev2">&gt;&gt; this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   type(MPI_Comm) :: COMM_CART
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; about mpif90 -r8 *.f90
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when I istalled open MPI I run
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; ./configure --prefix/opt/openmpi cc=icc cxx=icpc f77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; F77 is ignored these days; FC is the only one that matters.  And I assume
</span><br>
<span class="quotelev2">&gt;&gt; &quot;cc&quot; and &quot;cxx&quot; were typos; I assume you actually used &quot;CC&quot; and &quot;CXX&quot;, right?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you're going to compile your application with -r8, then you need to
</span><br>
<span class="quotelev2">&gt;&gt; configure OMPI with -r8, e.g., add &quot;FCFLAGS=-r8&quot; in there.  I don't
</span><br>
<span class="quotelev2">&gt;&gt; remember what that other flag was you specified offhand, but if it's
</span><br>
<span class="quotelev2">&gt;&gt; important, then you need to specify it on the configure command line, for
</span><br>
<span class="quotelev2">&gt;&gt; whichever compiler flags are relevant.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25446.php">http://www.open-mpi.org/community/lists/users/2014/10/25446.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25447.php">http://www.open-mpi.org/community/lists/users/2014/10/25447.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25448/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25447.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25449.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
