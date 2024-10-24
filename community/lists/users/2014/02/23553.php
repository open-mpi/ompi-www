<?
$subject_val = "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  4 09:11:34 2014" -->
<!-- isoreceived="20140204141134" -->
<!-- sent="Tue, 4 Feb 2014 14:11:33 +0000" -->
<!-- isosent="20140204141133" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory" -->
<!-- id="54A8FA61-E5E1-4616-8A2C-E0A3207880CF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CAC945E-7221-4863-AA0C-F3DD546092D7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-04 09:11:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23554.php">Javier Garcia Blas: "[OMPI users] CFP: Int. Workshop on Cloud for Bio (CBIO'14) at CCGrid 2014 - Deadline Extended"</a>
<li><strong>Previous message:</strong> <a href="23552.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23552.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 3, 2014, at 6:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; If I may suggest to test the behavior of 1.7.x... what about this: Have a test case that creates a bunch of files (from 0 to 65536) in /tmp/openmpi-sessions-${USER}... before launching an executable without mpirun... &gt;:)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ick - it will actually only conflict if/when the pid's wrap, so it's a pretty rare issue.
</span><br>
<p><p>Ralph: what do you think about modifying this for 1.7.5?  I.e., if the pid dir already exists in the session directory, remove it.  This is always safe to do (assuming /tmp is a local filesystem) because the OS will never use the same PID for 2 concurrent processes.
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
<li><strong>Next message:</strong> <a href="23554.php">Javier Garcia Blas: "[OMPI users] CFP: Int. Workshop on Cloud for Bio (CBIO'14) at CCGrid 2014 - Deadline Extended"</a>
<li><strong>Previous message:</strong> <a href="23552.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<li><strong>In reply to:</strong> <a href="23552.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create the, sub-directory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
<li><strong>Reply:</strong> <a href="23555.php">Ralph Castain: "Re: [OMPI users] opal_os_dirpath_create: Error: Unable to create	the, sub-directory"</a>
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
