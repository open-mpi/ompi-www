<?
$subject_val = "[OMPI devel] Consequence of bind-to-core by default";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 19 08:59:56 2013" -->
<!-- isoreceived="20131219135956" -->
<!-- sent="Thu, 19 Dec 2013 13:59:54 +0000" -->
<!-- isosent="20131219135954" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Consequence of bind-to-core by default" -->
<!-- id="97635838-A427-42B0-820D-327517F962D6_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Consequence of bind-to-core by default<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-19 08:59:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I notice Absoft's MTT runs are failing due to the change in bind-to-core-by-default:
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://mtt.open-mpi.org/index.php?do_redir=2136">http://mtt.open-mpi.org/index.php?do_redir=2136</a>
<br>
<p>I asked Tony, who runs the Absoft MTT runs; he confirms that this particular machine has 1 socket with 2 cores (and we're running -np 4 on this machine).
<br>
<p>1. This is an unintended consequence of the bind-to-core-by-default policy: we fail with &quot;oversubscribed!&quot; when running on a single machine for test runs like this.  Do we like this? 
<br>
<p>See #3, below, for more on this.
<br>
<p>2. Also, the error message that is displayed says:
<br>
<p>-----
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:         CORE
<br>
&nbsp;&nbsp;&nbsp;Node:            ltljoe3
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:          1
<br>
-----
<br>
<p>Which is odd, because the command line is &quot;mpirun -np 4 --mca btl sm,tcp,self ./c_hello&quot;.  Any idea what's happening here?
<br>
<p>3. Finally, we're giving a warning saying:
<br>
<p>-----
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
-----
<br>
<p>For both #1 and #3, I wonder if we shouldn't be warning if no binding was explicitly stated (i.e., we're just using the defaults).  Specifically, if no binding is specified:
<br>
<p>- if we oversubscribe, (possibly) warn about the performance loss of oversubscription, and don't bind
<br>
- don't warn about lack of memory binding
<br>
<p>Thoughts?
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
<li><strong>Next message:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Previous message:</strong> <a href="13479.php">Siegmar Gross: "Re: [OMPI devel] Bus error with openmpi-1.7.4rc1 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13481.php">Ashley Pittman: "Re: [OMPI devel] Consequence of bind-to-core by default"</a>
<li><strong>Reply:</strong> <a href="13482.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Consequence of bind-to-core by default"</a>
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
