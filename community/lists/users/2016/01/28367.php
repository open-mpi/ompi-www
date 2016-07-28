<?
$subject_val = "Re: [OMPI users] Strange behaviour OpenMPI in Fortran";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 25 08:02:30 2016" -->
<!-- isoreceived="20160125130230" -->
<!-- sent="Mon, 25 Jan 2016 22:02:27 +0900" -->
<!-- isosent="20160125130227" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour OpenMPI in Fortran" -->
<!-- id="CAAkFZ5uc_cBzZmg+m1EPGEHNz1rkkdtQr_wC6mW4ujTf4ijE6g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87wpqxetnk.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour OpenMPI in Fortran<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-25 08:02:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28368.php">Kuhl, Spencer J: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
in this case, stat is an integer (scalar) but an array of integer is
<br>
expected.
<br>
I guess a fortran 90 can detect that.
<br>
I also guess it can detect ptr was used unitialized in rank 0.
<br>
<p>my 0.02 US$
<br>
<p>Gilles
<br>
<p><p>On Monday, January 25, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Hammond &lt;jeff.science_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; You will find the MPI Fortran 2008 bindings to be significantly better
</span><br>
<span class="quotelev2">&gt; &gt; w.r.t. MPI types.  See e.g. MPI 3.1 section 17.2.5 where it describes
</span><br>
<span class="quotelev2">&gt; &gt; TYPE(MPI_Status), which means that the status object is a first-class
</span><br>
<span class="quotelev1">&gt; type
</span><br>
<span class="quotelev2">&gt; &gt; in the Fortran 2008 interface, rather than being an error prone INTEGER
</span><br>
<span class="quotelev2">&gt; &gt; array.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might expect the f90 module to reveal the error anyway.
</span><br>
<span class="quotelev1">&gt; Unfortunately which routines it covers depends on the compiler and OMPI
</span><br>
<span class="quotelev1">&gt; versions in a way I don't understand -- can someone explain?  For
</span><br>
<span class="quotelev1">&gt; instance, it won't work with the RHEL6 system compiler (GCC 4.4), but
</span><br>
<span class="quotelev1">&gt; OMPI 1.8 using GCC 4.9 will report the error with &quot;use mpi&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I haven't used Fortran 2008 bindings in a nontrivial way yet, but it is
</span><br>
<span class="quotelev1">&gt; my
</span><br>
<span class="quotelev2">&gt; &gt; understanding that Open-MPI has a good implementation of them and has
</span><br>
<span class="quotelev1">&gt; for a
</span><br>
<span class="quotelev2">&gt; &gt; relatively long time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately they won't be built if you use the system compiler on
</span><br>
<span class="quotelev1">&gt; RHEL6 (which I'd guess is still be the most common HPC platform).
</span><br>
<span class="quotelev1">&gt; Aren't they meant to address different problems with the subroutine
</span><br>
<span class="quotelev1">&gt; signatures anyway?  But strong typing is definitely good.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/01/28365.php">http://www.open-mpi.org/community/lists/users/2016/01/28365.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28367/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28368.php">Kuhl, Spencer J: "Re: [OMPI users] Raspberry Pi 2 Beowulf Cluster for OpenFOAM"</a>
<li><strong>Previous message:</strong> <a href="28366.php">Dave Love: "Re: [OMPI users] MPI, Fortran, and GET_ENVIRONMENT_VARIABLE"</a>
<li><strong>In reply to:</strong> <a href="28365.php">Dave Love: "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28369.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Strange behaviour OpenMPI in Fortran"</a>
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
