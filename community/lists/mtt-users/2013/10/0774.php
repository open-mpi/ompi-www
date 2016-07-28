<?
$subject_val = "[MTT users] Not working &amp;env_max_procs() function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  2 06:42:21 2013" -->
<!-- isoreceived="20131002104221" -->
<!-- sent="Wed, 2 Oct 2013 12:42:19 +0200 (CEST)" -->
<!-- isosent="20131002104219" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[MTT users] Not working &amp;amp;env_max_procs() function" -->
<!-- id="974377995.1319.1380710539701.JavaMail.root_at_zimbra" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2101197407.343.1380700859699.JavaMail.root_at_zimbra" -->
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
<strong>Subject:</strong> [MTT users] Not working &amp;env_max_procs() function<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-02 06:42:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Wen Hao Wang: "[MTT users] AUTO: Wen Hao Wang is out of the office (returning 2013/10/14)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Reply:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello.
<br>
<p>The &amp;env_max_procs() does not seem to work in my setup.
<br>
MTT is run from within a PBS job which should be supported.
<br>
If I set np in the configuration to a fixed value, tests run propperly. :/
<br>
<p>Here the config section:
<br>
<p>[Test run]
<br>
pass = &amp;and(&amp;cmd_wifexited(), &amp;eq(&amp;cmd_wexitstatus(), 0))
<br>
timeout = &amp;max(30, &amp;multiply(10, &amp;test_np()))
<br>
save_stdout_on_pass = 1
<br>
merge_stdout_stderr = 1
<br>
stdout_save_lines = 1000
<br>
np = &amp;env_max_procs()
<br>
#np = 64
<br>
specify_module = Simple
<br>
<p>[Test run: mpi_test_suite  ]
<br>
test_build = hlrs_mpi_test_suite
<br>
include_section = Test run
<br>
specify_module = Simple
<br>
simple_pass:tests = mpi_test_suite
<br>
<p>And here the error message where np is empty during execution:
<br>
<p>Running with [ompi-nightly-v1.6] / [1.6.6a1r29300] / [gcc warnings]
<br>
&nbsp;&nbsp;&nbsp;Using MPI Details [open mpi] with MPI Install [gcc warnings]
<br>
<span class="quotelev3">&gt;&gt;&gt; Using group_reports
</span><br>
&nbsp;&nbsp;&nbsp;###
<br>
&nbsp;&nbsp;&nbsp;### Total tests to run in this section:
<br>
&nbsp;&nbsp;&nbsp;###              1 test executable(s)
<br>
&nbsp;&nbsp;&nbsp;###              1 np value(s)
<br>
&nbsp;&nbsp;&nbsp;###              1 argv value(s)
<br>
&nbsp;&nbsp;&nbsp;###              1 test variant(s)
<br>
&nbsp;&nbsp;&nbsp;###              1 total mpirun command(s) to run
<br>
&nbsp;&nbsp;&nbsp;###
<br>
*** WARNING: Test: mpi_test_suite -t &quot;All,^io,^one-sided&quot;, np=, variant=1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;FAILED
<br>
<p>Any idea where this problem comes from?
<br>
<p><p>Best regards
<br>
Christoph Niethammer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0775.php">Wen Hao Wang: "[MTT users] AUTO: Wen Hao Wang is out of the office (returning 2013/10/14)"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/mtt-users/2013/09/0773.php">Christoph Niethammer: "[MTT users] mtt-relay requirements"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
<li><strong>Reply:</strong> <a href="0778.php">Jeff Squyres (jsquyres): "Re: [MTT users] Not working &amp;env_max_procs() function"</a>
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
