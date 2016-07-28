<?
$subject_val = "[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  1 07:15:45 2010" -->
<!-- isoreceived="20100901111545" -->
<!-- sent="Wed, 1 Sep 2010 21:15:37 +1000" -->
<!-- isosent="20100901111537" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH" -->
<!-- id="201009012115.37768.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH<br>
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-01 07:15:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>Looking at the code for the Twitter notifier in OMPI 1.5
<br>
and seeing its use of HTTP basic authentication I would
<br>
suggest that it may be non-functional due to Twitters
<br>
switch to purely OAUTH based authentication for their API.
<br>
<p>I'm trying to test it out here but I'm at a bit of a loss
<br>
to find a trivial command line to trigger a notifier, even
<br>
the syslog one!  I've Googled and grep'd with no joy..
<br>
<p>For instance:
<br>
<p>chris_at_quad:/tmp/ompi$ ./bin/mpirun --mca notifier syslog --mca notifier_threshold_severity 99 --mca 
<br>
notifier_base_verbose 99  /bin/doesnotexist
<br>
[quad:18429] mca: base: components_open: Looking for notifier components
<br>
[quad:18429] mca: base: components_open: opening notifier components
<br>
[quad:18429] mca: base: components_open: found loaded component syslog
<br>
[quad:18429] mca: base: components_open: component syslog has no register function
<br>
[quad:18429] mca: base: components_open: component syslog open function successful
<br>
[quad:18429] mca:base:select: Auto-selecting notifier components
<br>
[quad:18429] mca:base:select:(notifier) Querying component [syslog]
<br>
[quad:18429] mca:base:select:(notifier) Query of component [syslog] set priority to 1
<br>
[quad:18429] mca:base:select:(notifier) Selected component [syslog]
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: /bin/doesnotexist
<br>
Node: quad
<br>
<p>while attempting to start process rank 0.
<br>
--------------------------------------------------------------------------
<br>
[quad:18429] mca: base: close: component syslog closed
<br>
[quad:18429] mca: base: close: unloading component syslog
<br>
<p>But nothing appears in the syslog.
<br>
<p>Ideas ?
<br>
<p>cheers!
<br>
Chris
<br>
<pre>
-- 
Christopher Samuel          Senior Systems Administrator
VLSCI - Victorian Life Sciences Computational Initiative
Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
          <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8436.php">ananda.mudar_at_[hidden]: "Re: [OMPI devel] Possible memory leak"</a>
<li><strong>Previous message:</strong> <a href="8434.php">Sylvain Jeaugey: "Re: [OMPI devel] Possible memory leak"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8440.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8444.php">Ralph Castain: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
<li><strong>Reply:</strong> <a href="8448.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.5 twitter notification plugin probably broken by switch to OAUTH"</a>
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
