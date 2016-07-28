<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 24 06:30:55 2006" -->
<!-- isoreceived="20060524103055" -->
<!-- sent="Wed, 24 May 2006 06:30:48 -0400" -->
<!-- isosent="20060524103048" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] wrong predefined MPI_PROD" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C3CB8_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] wrong predefined MPI_PROD" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-24 06:30:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1265.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Maybe in reply to:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Blast!  How embarrassing.  I missed that one last night in my haste to
<br>
fix the problem.  
<br>
<p>Thanks... 
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Bert Wesarg
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, May 24, 2006 2:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] wrong predefined MPI_PROD
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i see the fix, but why isn't line 339 changed?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/op/op_pr">https://svn.open-mpi.org/trac/ompi/browser/trunk/ompi/op/op_pr</a>
</span><br>
<span class="quotelev1">&gt; edefined.c?rev=10023#L339
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; bert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 23 May 2006, Brian Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On May 23, 2006, at 11:49 AM, Bert Wesarg wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the predfined mpi op MPI_PROD is apparently wrong:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; from openmpi-1.2a1r10020/ompi/op/op_predefined.c:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OP_FUNC(prod, long_long_int, long long int, +=)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OP_FUNC(prod, unsigned_long_long, unsigned long long, +=)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OP_FUNC(prod, fortran_integer1, ompi_fortran_integer1_t, +=)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OP_FUNC(prod, fortran_integer2, ompi_fortran_integer2_t, +=)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OP_FUNC(prod, fortran_integer4, ompi_fortran_integer4_t, +=)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; :
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Doh!  Thanks for finding that.  We'll have a fix in shortly,
</span><br>
<span class="quotelev2">&gt; &gt; definitely before 1.1 releases.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I've filed a bug report in our tracker, and you should get e-mail
</span><br>
<span class="quotelev2">&gt; &gt; updates when the bug is fixed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="1267.php">Terry Reeves: "[OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1265.php">Mykael BOUQUEY: "[OMPI users] mca_btl_sm_send: write fifo failed:,errno=9"</a>
<li><strong>Maybe in reply to:</strong> <a href="1261.php">Bert Wesarg: "[OMPI users] wrong predefined MPI_PROD"</a>
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
