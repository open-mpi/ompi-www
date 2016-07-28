<?
$subject_val = "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 27 09:12:12 2013" -->
<!-- isoreceived="20130927131212" -->
<!-- sent="Fri, 27 Sep 2013 13:12:06 +0000" -->
<!-- isosent="20130927131206" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compilation aborted for Handler.cpp (code 2)" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8E3B1E_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsJg5m_mj=npsXDDroBEBWN=8=TH4AWwmV0sqU3TULZcKA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] compilation aborted for Handler.cpp (code 2)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-27 09:12:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22727.php">Siegmar Gross: "[OMPI users] openmpi-1.7.3rc2r29276 doesn't honour --with-wrapper-libs"</a>
<li><strong>Previous message:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 27, 2013, at 6:53 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you very much Jeff. It worked now.
</span><br>
<p>Good.
<br>
<p><span class="quotelev1">&gt; But I got error when I ran make check
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1 of 5 tests failed
</span><br>
<span class="quotelev1">&gt; Please report to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; ========================================================
</span><br>
<span class="quotelev1">&gt; make[3]: *** [check-TESTS] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/home/openmpi-1.6.5/test/datatype'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [check-am] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/home/openmpi-1.6.5/test/datatype'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/home/openmpi-1.6.5/test'
</span><br>
<span class="quotelev1">&gt; make: *** [check-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; [root_at_r720 openmpi-1.6.5]#
</span><br>
<p>Can you send more info than that?  It's not showing which test failed, for example.
<br>
<p><span class="quotelev1">&gt; But I find openmpi installed. Will it work fine?
</span><br>
<p>Probably...?  But I can't say without seeing which test failed.
<br>
<p>Keep in mind that &quot;make check&quot; is run after &quot;make install&quot;, so, yes, it's expected that OMPI is fully *installed*.  But whether OMPI is *functional* depends on the test(s) that failed...
<br>
<p><span class="quotelev1">&gt; Secondly missing the
</span><br>
<span class="quotelev1">&gt; optional package VT will effect functionality of openmpi or it will
</span><br>
<span class="quotelev1">&gt; work fine.
</span><br>
<p>VT = VampirTrace, which is a tracing/logging tool that is technically not part of MPI.  That is, it's a 3rd party tool that provides *additional* functionality over MPI.  Hence, it's totally optional.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22727.php">Siegmar Gross: "[OMPI users] openmpi-1.7.3rc2r29276 doesn't honour --with-wrapper-libs"</a>
<li><strong>Previous message:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>In reply to:</strong> <a href="22725.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/10/22759.php">Syed Ahsan Ali: "Re: [OMPI users] compilation aborted for Handler.cpp (code 2)"</a>
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
