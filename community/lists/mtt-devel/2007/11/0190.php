<?
$subject_val = "[MTT devel] prepend_path propogating through phases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 11:39:22 2007" -->
<!-- isoreceived="20071102153922" -->
<!-- sent="Fri, 2 Nov 2007 11:39:17 -0400" -->
<!-- isosent="20071102153917" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] prepend_path propogating through phases" -->
<!-- id="20071102153917.GB10950_at_sun.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-02 11:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Ethan Mallove: "Re: [MTT devel] Fwd: MTT server error (user: sun)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It came as a bit of a surprise that &quot;prepend_path&quot; INI
<br>
settings propagate through the phase lineage (see below). I
<br>
didn't realize that setting &quot;prepend_path&quot; in MPI get would
<br>
set it from MPI Get through to Test run.
<br>
<p>Code snippet from Run.pm:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::ProcessEnvKeys($mpi_get, \@save_env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::ProcessEnvKeys($mpi_install, \@save_env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::ProcessEnvKeys($test_build, \@save_env);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;%$config = %$MTT::Defaults::Test_specify;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{setenv} = MTT::Values::Value($ini, $section, &quot;setenv&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{unsetenv} = MTT::Values::Value($ini, $section, &quot;unsetenv&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{prepend_path} = 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::Value($ini, $section, &quot;prepend_path&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;$config-&gt;{append_path} = MTT::Values::Value($ini, $section, &quot;append_path&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MTT::Values::ProcessEnvKeys($config, \@save_env);
<br>
<p>I can see how this is both handy, but could also throw a
<br>
monkey wrench into compatiblity testing (e.g., building
<br>
tests in one environment, and running in another).
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0191.php">Josh Hursey: "Re: [MTT devel] [MTT svn] svn:mtt-svn r1094 (for review)"</a>
<li><strong>Previous message:</strong> <a href="0189.php">Ethan Mallove: "Re: [MTT devel] Fwd: MTT server error (user: sun)"</a>
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
