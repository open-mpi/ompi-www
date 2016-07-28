<?
$subject_val = "Re: [OMPI users] Compiling for portability to non-mpi systems.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 07:57:10 2008" -->
<!-- isoreceived="20080925115710" -->
<!-- sent="Thu, 25 Sep 2008 13:57:05 +0200" -->
<!-- isosent="20080925115705" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling for portability to non-mpi systems." -->
<!-- id="9b0da5ce0809250457j25ac6989j8d38b2c355d1243c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="104686.79337.qm_at_web54301.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling for portability to non-mpi systems.<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-25 07:57:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>Previous message:</strong> <a href="6737.php">Ali Copey: "[OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>In reply to:</strong> <a href="6737.php">Ali Copey: "[OMPI users] Compiling for portability to non-mpi systems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>Reply:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think there is an Open-MPI based solution for this.
<br>
<p>I would probably to the following:
<br>
<p>- place all functions using MPI calls into a separate module and
<br>
create a shared-object dynamic library (so file).
<br>
- create another .so file which contains the non-MPI equivalents of
<br>
those functions
<br>
<p>At runtime, determine whether MPI is present. If yes, dynamically load the
<br>
MPI-functions .so, and otherwise load the Non-MPI-functions .so
<br>
<p>However beware that you will have problems if you will use this
<br>
application on a system
<br>
whose Open-MPI has a different version than the one you compiled your
<br>
application with.
<br>
<p>Jody
<br>
<p><p>On Thu, Sep 25, 2008 at 1:26 PM, Ali Copey &lt;alicopey158_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have created a piece of software that is designed to work under a variety
</span><br>
<span class="quotelev1">&gt; of conditions, one of which is using MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This application will preferably us a single executable and then load the
</span><br>
<span class="quotelev1">&gt; mpi communications interface as a library at runtime, however adding this
</span><br>
<span class="quotelev1">&gt; functionality by compiling using the mpi compile wrappers creates an
</span><br>
<span class="quotelev1">&gt; executable that will not run on a system without mpi installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible to have the main executable not dependent upon the presence
</span><br>
<span class="quotelev1">&gt; of mpi but still able to load the mpi dependent library if mpi is required,
</span><br>
<span class="quotelev1">&gt; and how would this be achieved?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>Previous message:</strong> <a href="6737.php">Ali Copey: "[OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>In reply to:</strong> <a href="6737.php">Ali Copey: "[OMPI users] Compiling for portability to non-mpi systems."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
<li><strong>Reply:</strong> <a href="6739.php">Jeff Squyres: "Re: [OMPI users] Compiling for portability to non-mpi systems."</a>
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
