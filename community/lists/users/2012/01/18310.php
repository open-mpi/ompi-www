<?
$subject_val = "Re: [OMPI users] Running osu benchmark test suite with open-mpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 08:08:34 2012" -->
<!-- isoreceived="20120128130834" -->
<!-- sent="Sat, 28 Jan 2012 08:08:30 -0500" -->
<!-- isosent="20120128130830" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running osu benchmark test suite with open-mpi" -->
<!-- id="0AE90E0A-12B5-4A42-854B-3C265AE5C6A8_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CACiOAOBtHu49m5QKno+T26=ers1cU-kYNq+xMTst0vbctkmgHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running osu benchmark test suite with open-mpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 08:08:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Previous message:</strong> <a href="18309.php">Jeff Squyres: "Re: [OMPI users] unknown af_family recieved errors..."</a>
<li><strong>In reply to:</strong> <a href="18243.php">Venkateswara Rao Dokku: "[OMPI users] Running osu benchmark test suite with open-mpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, you should be able to run the OSU tests with Open MPI -- they are not specific to any MPI implementation.
<br>
<p>That being said, the MPI-2 one-sided functionality (which is being tested by the osu_get* and osu_put* tests) is notoriously difficult to get right.  I don't know offhand if their tests are correct or not (or whether OMPI has bugs in this area).
<br>
<p>FWIW, there are very very few real-world MPI applications that use the MPI-2 one-sided functionality.  So I wouldn't worry about these tests.
<br>
<p>MPI-3 just revamped the one-sided support, and fixed many problems and subtleties in the MPI-2 one-sided specifications.  I suspect that when MPI implementations have MPI-3 implementations, hopefully the one-sided applications and implementations will be a bit more robust.  See <a href="http://blogs.cisco.com/performance/recently-voted-into-mpi-3/">http://blogs.cisco.com/performance/recently-voted-into-mpi-3/</a>.
<br>
<p><p>On Jan 23, 2012, at 1:26 AM, Venkateswara Rao Dokku wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;     I am trying to run the osu bench-mark suite with the open-mpi on our customized OFED, and i was able to run 10 out of the 14 tests in the osu bench-mark suite. The tests are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. osu_acc_latency
</span><br>
<span class="quotelev1">&gt; 2. osu_alltoall
</span><br>
<span class="quotelev1">&gt; 3. osu_bcast
</span><br>
<span class="quotelev1">&gt; 4.osu_bibw
</span><br>
<span class="quotelev1">&gt; 5.osu_bw
</span><br>
<span class="quotelev1">&gt; 6.osu_get_latency
</span><br>
<span class="quotelev1">&gt; 7.osu_latency
</span><br>
<span class="quotelev1">&gt; 8.osu_mbw_mr
</span><br>
<span class="quotelev1">&gt; 9.osu_multi_lat
</span><br>
<span class="quotelev1">&gt; 10.osu_put_latency
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; While trying to run the remaining 4 tests viz. osu_get_bw,osu_latency_mt,osu_put_bi_bw,osu_put_bw the test is starting fine and the test is hanging there in the middle at message size 524288... can we run those osu tests with open mpi or do we need to use mvapich2 inorder to run these tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for the reply...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards,
</span><br>
<span class="quotelev1">&gt; D.Venkateswara Rao,
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Previous message:</strong> <a href="18309.php">Jeff Squyres: "Re: [OMPI users] unknown af_family recieved errors..."</a>
<li><strong>In reply to:</strong> <a href="18243.php">Venkateswara Rao Dokku: "[OMPI users] Running osu benchmark test suite with open-mpi"</a>
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
