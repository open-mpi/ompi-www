<?
$subject_val = "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 24 17:34:02 2009" -->
<!-- isoreceived="20091124223402" -->
<!-- sent="Tue, 24 Nov 2009 16:33:58 -0600" -->
<!-- isosent="20091124223358" -->
<!-- name="Natarajan CS" -->
<!-- email="csnataraj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend" -->
<!-- id="c4b5a27c0911241433q6c73a6b3ja0ff2560562ae94_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DFF8EE07-439C-4416-AD77-AEF3F1A6288E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend<br>
<strong>From:</strong> Natarajan CS (<em>csnataraj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-24 17:33:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks everyone for the reply and happy Turkey day!
<br>
Cheers!
<br>
<p><p>On Tue, Nov 24, 2009 at 10:46 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 23, 2009, at 4:49 PM, Natarajan CS wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Oh okay that explains the behaviour of MPI_SHORT, guess sizeof is going to
</span><br>
<span class="quotelev2">&gt;&gt; give me the same value no matter what MPI_Datatype I use? Thanks for the
</span><br>
<span class="quotelev2">&gt;&gt; quick response!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Correct.  MPI_&lt;datatype_name&gt; is just a handle to an internal MPI data
</span><br>
<span class="quotelev1">&gt; structure.  Its size (as reported by sizeof()) is unrelated to the actual
</span><br>
<span class="quotelev1">&gt; datatype size.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11275/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11276.php">Scott Beardsley: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>Previous message:</strong> <a href="11274.php">Reuti: "Re: [OMPI users] PGI 10.0 configure fails (OMPI 1.3.3)"</a>
<li><strong>In reply to:</strong> <a href="11268.php">Jeff Squyres: "Re: [OMPI users] Q regarding MPI_SHORT and MPI_Isend"</a>
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
