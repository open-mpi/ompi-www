<?
$subject_val = "[OMPI devel] Fwd: mtt-submit, etc.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 12:23:46 2015" -->
<!-- isoreceived="20151022162346" -->
<!-- sent="Thu, 22 Oct 2015 10:23:42 -0600" -->
<!-- isosent="20151022162342" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="[OMPI devel] Fwd: mtt-submit, etc." -->
<!-- id="CAF1Cqj7f0mOqz8t3jq3znxPEmbdh3DC8ybcQcrf19hK9M2evXw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAF1Cqj5Esg-hHQ7RcvfTXcR7J+2bjtKho2sHRqVjOw4vN7QWcQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Fwd: mtt-submit, etc.<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 12:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<li><strong>Previous message:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Reply:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>I don't seem to have gotten subscribed yet to mtt-users mail list so
<br>
forwarding to the dev team.
<br>
<p>Howard
<br>
<p>---------- Forwarded message ----------
<br>
From: Howard Pritchard &lt;hppritcha_at_[hidden]&gt;
<br>
Date: 2015-10-22 10:18 GMT-06:00
<br>
Subject: mtt-submit, etc.
<br>
To: mtt-users_at_[hidden]
<br>
<p><p>HI Folks,
<br>
<p>I have the following issue with a cluster I would like to use for
<br>
submitting MTT results
<br>
for Open MPI, namely, that the nodes on which I have to submit batch jobs
<br>
to run
<br>
the tests don't have external internet connectivity, so if my mtt ini file
<br>
has a IU database reporter
<br>
section, the run dies in the &quot;ping the mtt server&quot; test.
<br>
<p>What I have right now is a two-stage process where I checkout and
<br>
compile/build
<br>
Open MPI and the tests on a front end which does have access to the mtt
<br>
server.
<br>
This part works and gets reported back to IU database.
<br>
<p>I can run the tests using mtt, but have to disable all the mtt server
<br>
reporter stuff.
<br>
<p>I thought I could use mtt-submit to submit some kind of mttdatabase debug
<br>
file
<br>
back to IU once the batch job has completed, but I can't figure out a way
<br>
to generate this file without enable the mtt server reporter section in the
<br>
ini file,
<br>
and so back to the ping failure issue.
<br>
<p>Would anyone have suggestions on how to work around this problem?
<br>
<p>Thanks,
<br>
<p>Howard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18245.php">Justin Cinkelj: "[OMPI devel] How is session dir used?"</a>
<li><strong>Previous message:</strong> <a href="18243.php">Ralph Castain: "[OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
<li><strong>Reply:</strong> <a href="18249.php">Ralph Castain: "Re: [OMPI devel] mtt-submit, etc."</a>
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
