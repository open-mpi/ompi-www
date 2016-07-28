<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 16 11:23:37 2007" -->
<!-- isoreceived="20071016152337" -->
<!-- sent="Tue, 16 Oct 2007 11:23:32 -0400" -->
<!-- isosent="20071016152332" -->
<!-- name="Ethan Mallove" -->
<!-- email="ethan.mallove_at_[hidden]" -->
<!-- subject="[MTT devel] Handling &amp;quot;Interrupted system call&amp;quot; with MTT" -->
<!-- id="20071016152331.GB9693_at_sun.com" -->
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
<strong>Date:</strong> 2007-10-16 11:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On certain NFS servers, I run into the error message
<br>
&quot;Interrupted system call&quot; when executing long running
<br>
commands such as &quot;make all&quot;. One solution I've been able to
<br>
use is to setup an NFS mount point solely for the cluster
<br>
I'm using, but this is not always an option. The below link
<br>
advises to restart the build on &quot;Interrupted system call&quot;:
<br>
<p>&nbsp;&nbsp;<a href="http://developers.sun.com/solaris/articles/parallel_make.html">http://developers.sun.com/solaris/articles/parallel_make.html</a>
<br>
<p>I wrapped the GNU_Install.pm make commands in a do-while to
<br>
effect the build restarts. E.g.,
<br>
<p>&nbsp;&nbsp;do {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$x = MTT::DoCommand::Cmd(&quot;make install&quot;)
<br>
&nbsp;&nbsp;} while (!MTT::DoCommand::wsuccess($x-&gt;{exit_status}) and ($x-&gt;{result_stderr} =~ /interrupted system call/i));
<br>
<p>As long as make emits &quot;interrupted system call&quot; and fails,
<br>
MTT will keep restarting make.
<br>
<p>I realize this is ugly, but is it acceptable?
<br>
<p>-Ethan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Previous message:</strong> <a href="0162.php">Jeff Squyres: "Re: [MTT devel] MTT server error (user: uh)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
<li><strong>Reply:</strong> <a href="0164.php">Jeff Squyres: "Re: [MTT devel] Handling &quot;Interrupted system call&quot; with MTT"</a>
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
