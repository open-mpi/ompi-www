<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  9 14:55:37 2005" -->
<!-- isoreceived="20051209195537" -->
<!-- sent="Fri, 9 Dec 2005 20:55:31 +0100 (CET)" -->
<!-- isosent="20051209195531" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="Pine.LNX.4.63.0512092036530.3612_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D8447DD-9E9E-4160-B7AC-B860652F00A4_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-12-09 14:55:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 8 Dec 2005, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Check out <a href="http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/">http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/</a> 
</span><br>
<span class="quotelev1">&gt; linux/paffinity_linux.h -- there's a big comment in that file about 
</span><br>
<span class="quotelev1">&gt; the problem, to include descriptions of the 3 APIs.
</span><br>
<p>I'm sorry, but that is not quite what I wrote about in my message. The 
<br>
comments refer to the _glibc_ view of the functions, at least I 
<br>
couldn't see how they map to my reading of the _kernel_ source code.
<br>
Let's take one that is specifically mentioned there: Mandrake 10.0, 
<br>
kernel based on 2.6.3, in file kernel/sched.c there is the function:
<br>
<p>/**
<br>
&nbsp;&nbsp;* sys_sched_setaffinity - set the cpu affinity of a process
<br>
&nbsp;&nbsp;* @pid: pid of the process
<br>
&nbsp;&nbsp;* @len: length in bytes of the bitmask pointed to by user_mask_ptr
<br>
&nbsp;&nbsp;* @user_mask_ptr: user-space pointer to the new cpu mask
<br>
&nbsp;&nbsp;*/
<br>
asmlinkage long sys_sched_setaffinity(pid_t pid, unsigned int len,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long __user *user_mask_ptr)
<br>
<p>which again has 3 arguments that look exactly like the ones that I 
<br>
mentioned previously. I don't have access to the source code of 
<br>
the SGI Altix kernel, so I can't check the other one mentioned there 
<br>
as a 2-args function. But so far all _kernel_ prototypes of the 
<br>
function that I have looked at are exactly the same with 3 arguments.
<br>
<p>The solution that I proposed works much like a statically linked 
<br>
binary - it calls via a syscall the _kernel_ function that has a 
<br>
constant (so far) prototype. It doesn't call the _glibc_ function that 
<br>
changes prototype.
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
<li><strong>Next message:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
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
