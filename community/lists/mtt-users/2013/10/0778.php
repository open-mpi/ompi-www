<?
$subject_val = "Re: [MTT users] Not working &amp;env_max_procs() function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 10:35:21 2013" -->
<!-- isoreceived="20131002143521" -->
<!-- sent="Wed, 2 Oct 2013 14:35:19 +0000" -->
<!-- isosent="20131002143519" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT users] Not working &amp;amp;env_max_procs() function" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F9164C2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="974377995.1319.1380710539701.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> Re: [MTT users] Not working &amp;env_max_procs() function<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 10:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/11/0779.php">C. Bergström: "[MTT users] Requesting svn access to ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Christoph Niethammer: "[MTT users] Not working &amp;env_max_procs() function"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's possible that our PBS max_procs function has bit-rotted...?
<br>
<p>Have a look in lib/MTT/Values/Functions.pm:pbs_max_procs().  See if it calculates the wrong thing under your PBS jobs...
<br>
<p><p>On Oct 2, 2013, at 6:42 AM, Christoph Niethammer &lt;niethammer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The &amp;env_max_procs() does not seem to work in my setup.
</span><br>
<span class="quotelev1">&gt; MTT is run from within a PBS job which should be supported.
</span><br>
<span class="quotelev1">&gt; If I set np in the configuration to a fixed value, tests run propperly. :/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here the config section:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run]
</span><br>
<span class="quotelev1">&gt; pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
</span><br>
<span class="quotelev1">&gt; timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
</span><br>
<span class="quotelev1">&gt; save_stdout_on_pass = 1
</span><br>
<span class="quotelev1">&gt; merge_stdout_stderr = 1
</span><br>
<span class="quotelev1">&gt; stdout_save_lines = 1000
</span><br>
<span class="quotelev1">&gt; np = &amp;env_max_procs()
</span><br>
<span class="quotelev1">&gt; #np = 64
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [Test run: mpi_test_suite  ]
</span><br>
<span class="quotelev1">&gt; test_build = hlrs_mpi_test_suite
</span><br>
<span class="quotelev1">&gt; include_section = Test run
</span><br>
<span class="quotelev1">&gt; specify_module = Simple
</span><br>
<span class="quotelev1">&gt; simple_pass:tests = mpi_test_suite
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And here the error message where np is empty during execution:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running with [ompi-nightly-v1.6] / [1.6.6a1r29300] / [gcc warnings]
</span><br>
<span class="quotelev1">&gt;   Using MPI Details [open mpi] with MPI Install [gcc warnings]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Using group_reports
</span><br>
<span class="quotelev1">&gt;   ###
</span><br>
<span class="quotelev1">&gt;   ### Total tests to run in this section:
</span><br>
<span class="quotelev1">&gt;   ###              1 test executable(s)
</span><br>
<span class="quotelev1">&gt;   ###              1 np value(s)
</span><br>
<span class="quotelev1">&gt;   ###              1 argv value(s)
</span><br>
<span class="quotelev1">&gt;   ###              1 test variant(s)
</span><br>
<span class="quotelev1">&gt;   ###              1 total mpirun command(s) to run
</span><br>
<span class="quotelev1">&gt;   ###
</span><br>
<span class="quotelev1">&gt; *** WARNING: Test: mpi_test_suite -t &quot;All,^io,^one-sided&quot;, np=, variant=1:
</span><br>
<span class="quotelev1">&gt;    FAILED
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea where this problem comes from?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Christoph Niethammer
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; mtt-users mailing list
</span><br>
<span class="quotelev1">&gt; mtt-users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users">http://www.open-mpi.org/mailman/listinfo.cgi/mtt-users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/11/0779.php">C. Bergström: "[MTT users] Requesting svn access to ompi-tests"</a>
<li><strong>Previous message:</strong> <a href="0777.php">Jeff Squyres (jsquyres): "Re: [MTT users] mtt-relay requirements"</a>
<li><strong>In reply to:</strong> <a href="0774.php">Christoph Niethammer: "[MTT users] Not working &amp;env_max_procs() function"</a>
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
