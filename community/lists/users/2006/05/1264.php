<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 02:15:50 2006" -->
<!-- isoreceived="20060524061550" -->
<!-- sent="Wed, 24 May 2006 08:15:18 +0200 (MEST)" -->
<!-- isosent="20060524061518" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong predefined MPI_PROD" -->
<!-- id="Pine.GSO.4.56.0605240812430.16575_at_turing" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="596F0993-5B8C-4535-A927-3E5BCFD3DF33_at_open-mpi.org" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 02:15:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1265.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Previous message:</strong> <a href="1263.php">Benjamin Allan: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>In reply to:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello,
<br>
<p>i see the fix, but why isn't line 339 changed?
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/op/op_predefined.c?rev=10023#L339">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/op/op_predefined.c?rev=10023#L339</a>
<br>
<p>bert
<br>
<p>On Tue, 23 May 2006, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On May 23, 2006, at 11:49 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the predfined mpi op MPI_PROD is apparently wrong:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; from openmpi-1.2a1r10020/ompi/op/op_predefined.c:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OP_FUNC(prod, long_long_int, long long int, +=)
</span><br>
<span class="quotelev2">&gt; &gt; OP_FUNC(prod, unsigned_long_long, unsigned long long, +=)
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; OP_FUNC(prod, fortran_integer1, ompi_fortran_integer1_t, +=)
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; OP_FUNC(prod, fortran_integer2, ompi_fortran_integer2_t, +=)
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; OP_FUNC(prod, fortran_integer4, ompi_fortran_integer4_t, +=)
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt; :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doh!  Thanks for finding that.  We'll have a fix in shortly,
</span><br>
<span class="quotelev1">&gt; definitely before 1.1 releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've filed a bug report in our tracker, and you should get e-mail
</span><br>
<span class="quotelev1">&gt; updates when the bug is fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
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
<li><strong>Next message:</strong> <a href="1265.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Previous message:</strong> <a href="1263.php">Benjamin Allan: "Re: [OMPI users] Python, Perl and Java bindings"</a>
<li><strong>In reply to:</strong> <a href="1262.php">Brian Barrett: "Re: [OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1266.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] wrong predefined MPI_PROD"</a>
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
