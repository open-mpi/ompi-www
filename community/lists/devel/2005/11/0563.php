<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 15:04:20 2005" -->
<!-- isoreceived="20051129200420" -->
<!-- sent="Tue, 29 Nov 2005 21:04:12 +0100 (CET)" -->
<!-- isosent="20051129200412" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="Pine.LNX.4.63.0511292040560.2439_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47a7d5e91c5e5c352d1f4c8f6f144391_at_open-mpi.org" -->
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
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 15:04:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 29 Nov 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Here's the problem: there are 3 different APIs for processor affinity
</span><br>
<span class="quotelev1">&gt; in Linux.
</span><br>
<p>Could you please list them (at least the ones that you know about) ?
<br>
<p>In the kernel source, in kernel/sched.c, the sys_sched_setaffinity 
<br>
function appears only in 2.6.0 (talking about stable kernels only). I 
<br>
can also see it back-ported by Red Hat in their RHEL3 (2.4.21-based) 
<br>
kernels, so I would like to know if others have back-ported it as 
<br>
well and if their functions differ.
<br>
<p>Both the official 2.6.x and the Red Hat back-ported definition of this 
<br>
function is:
<br>
<p>asmlinkage long sys_sched_setaffinity(pid_t pid, unsigned int len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long __user *user_mask_ptr)
<br>
<p>(the back-ported RHEL3 doesn't have the __user attribute to the last 
<br>
parameter, but that's cosmetic)
<br>
<p>The glibc definitions of sched_setaffinity seem to change, I already 
<br>
found 2 of them in RHEL3 and RHEL4, but they both call the same 
<br>
underlying kernel function. So Open MPI could just bypass glibc and 
<br>
call the kernel function directly, for example:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;errno.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;linux/unistd.h&gt;
<br>
<p>_syscall3(int, sched_setaffinity, pid_t, pid, unsigned int, len, unsigned long *, user_mask_ptr)
<br>
<p>int main(int argc, char **argv){
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long cpus = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int r;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;r = sched_setaffinity(0, sizeof(cpus), &amp;cpus);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (r == -1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;perror(&quot;sched_setaffinity:&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><pre>
-- 
Bogdan Costescu
IWR - Interdisziplinaeres Zentrum fuer Wissenschaftliches Rechnen
Universitaet Heidelberg, INF 368, D-69120 Heidelberg, GERMANY
Telephone: +49 6221 54 8869, Telefax: +49 6221 54 8868
E-mail: Bogdan.Costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0564.php">George Bosilca: "Re:  TCP performance"</a>
<li><strong>Previous message:</strong> <a href="0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
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
