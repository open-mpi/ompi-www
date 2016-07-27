<?
$subject_val = "[MTT devel] MTT email timeout notification feature";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 19 14:48:04 2009" -->
<!-- isoreceived="20090619184804" -->
<!-- sent="Fri, 19 Jun 2009 14:47:58 -0400" -->
<!-- isosent="20090619184758" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] MTT email timeout notification feature" -->
<!-- id="20090619184758.GD30874_at_sun.com" -->
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
<strong>Subject:</strong> [MTT devel] MTT email timeout notification feature<br>
<strong>From:</strong> Ethan Mallove (<em>ethan.mallove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-19 14:47:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Ethan Mallove: "Re: [MTT devel] Noop Test::Get module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Reply:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I came up with a feature, which does not seem quite appropriate to go
<br>
into the MTT trunk, but is still possibly useful for someone other
<br>
than me. I have posted a note about it on the MTT wiki:
<br>
<p>&nbsp;&nbsp;<a href="http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification">http://svn.open-mpi.org/trac/mtt/wiki/EmailTimeoutNotification</a>
<br>
<p>Here's the text of the Wiki page:
<br>
<p>We (Sun) were trying to track down a hang in an MPI test that we were
<br>
seeing in our MTT runs which was difficult to reproduce manually. The
<br>
problem is that MTT kills the hanging process before a developer has a
<br>
chance to investigate the issue. To address this, I patched an MTT
<br>
client (see attached patch file) to send out a notification email
<br>
containing an mpirun command line and GDB back trace for the hanging
<br>
test. A predefined sentinel file is touched, which can later be
<br>
removed to force MTT to move on and continue testing. Here are the INI
<br>
parameters to activate the timeout email notification:
<br>
<p>&nbsp;* {{{docommand_timeout_sentinel_file}}}
<br>
&nbsp;* {{{docommand_timeout_email_recipient}}}
<br>
<p>Example usage:
<br>
<p>{{{
<br>
$ client/mtt --scratch /foo/bar --file foo.ini
<br>
&nbsp;&nbsp;docommand_timeout_sentinel_file=/tmp/mtt-timeout-sentinel-file-\&amp;random_string\(10\)
<br>
&nbsp;&nbsp;docommand_timeout_email_recipient=fred.flintsone_at_[hidden],barney.rubble_at_[hidden]
<br>
}}}
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Previous message:</strong> <a href="0412.php">Ethan Mallove: "Re: [MTT devel] Noop Test::Get module"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
<li><strong>Reply:</strong> <a href="0414.php">Jeff Squyres: "Re: [MTT devel] MTT email timeout notification feature"</a>
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
