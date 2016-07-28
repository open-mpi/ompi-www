<?
$subject_val = "[OMPI devel] Thread/Process affinity for Mac OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:21:22 2008" -->
<!-- isoreceived="20081212162122" -->
<!-- sent="Fri, 12 Dec 2008 11:21:17 -0500" -->
<!-- isosent="20081212162117" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="[OMPI devel] Thread/Process affinity for Mac OS X" -->
<!-- id="ea86ce220812120821n62051893pfd3424011bd3b18a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Thread/Process affinity for Mac OS X<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-12 11:21:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Reply:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I just ran across this document from Apple that describes
<br>
the Thread affinity scheme that was added in Leopard.
<br>
<a href="http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/">http://developer.apple.com/releasenotes/Performance/RN-AffinityAPI/</a>
<br>
<p>In its current form, and how orteds start the MPI ranks with exec,
<br>
we can't use this, AFAIK.  However, if someone cares, there
<br>
might be a path for doing MPI process affinity on Mac OS X
<br>
with quite a bit of work.  Let me know if you have the
<br>
time &amp; interest, and I can explain my idea on how to do it.
<br>
<p>For the curious, here is the key text extracted from that document:
<br>
&quot;Generally, the affinity tag namespace is private to one task
<br>
(process). However, a child process forked after its parent has made a
<br>
THREAD_AFFINITY_POLICY call will share the affinity namespace of the
<br>
parent process. This enables a family of forked processes to share an
<br>
affinity namespace despite comprising separate tasks. Moreover, the
<br>
forked child inherits the affinity tag of its parent. Hence, a parent
<br>
can seed a number of child processes within an arbitrary organization
<br>
of shared affinity sets. Note: affinity namespace inheritance is
<br>
destroyed by the exec(3) system call, however.&quot;
<br>
<p>It's that last sentence about exec(3) that makes things (very) difficult
<br>
for us.
<br>
<pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Previous message:</strong> <a href="5050.php">Greg Watson: "Re: [OMPI devel] orte_default_hostfile"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
<li><strong>Reply:</strong> <a href="5052.php">Ralph Castain: "Re: [OMPI devel] Thread/Process affinity for Mac OS X"</a>
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
