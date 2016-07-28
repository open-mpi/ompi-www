<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 23 13:55:15 2006" -->
<!-- isoreceived="20060523175515" -->
<!-- sent="Tue, 23 May 2006 11:54:52 -0600" -->
<!-- isosent="20060523175452" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong predefined MPI_PROD" -->
<!-- id="596F0993-5B8C-4535-A927-3E5BCFD3DF33_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44734B21.3000504_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-23 13:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Benjamin Allan: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>In reply to:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Reply:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 23, 2006, at 11:49 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the predfined mpi op MPI_PROD is apparently wrong:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; from openmpi-1.2a1r10020/ompi/op/op_predefined.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OP_FUNC(prod, long_long_int, long long int, +=)
</span><br>
<span class="quotelev1">&gt; OP_FUNC(prod, unsigned_long_long, unsigned long long, +=)
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; OP_FUNC(prod, fortran_integer1, ompi_fortran_integer1_t, +=)
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; OP_FUNC(prod, fortran_integer2, ompi_fortran_integer2_t, +=)
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; OP_FUNC(prod, fortran_integer4, ompi_fortran_integer4_t, +=)
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<span class="quotelev1">&gt; :
</span><br>
<p>Doh!  Thanks for finding that.  We'll have a fix in shortly,  
<br>
definitely before 1.1 releases.
<br>
<p>I've filed a bug report in our tracker, and you should get e-mail  
<br>
updates when the bug is fixed.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1263.php">Benjamin Allan: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>Previous message:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>In reply to:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<li><strong>Reply:</strong> <a href="1264.php">Bert Wesarg: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
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
