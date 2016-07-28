<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec  9 15:03:44 2005" -->
<!-- isoreceived="20051209200344" -->
<!-- sent="Fri, 09 Dec 2005 12:01:28 -0800" -->
<!-- isosent="20051209200128" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="4399E298.9080109_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.LNX.4.63.0512092036530.3612_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-09 15:01:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If one looks though enough kernel versions, one finds that some of them 
<br>
differ in what they will accept for the len.  Some produce EINVAL if 
<br>
len!=sizeof(long), others (especially Altix) produce EINVAL if len is 
<br>
too short to cover all the machine's CPUs.  I think I recall finding one 
<br>
that was even happy w/ len==0.  So, even if one ignores the 2-argument 
<br>
version in some 2.5.x kernels, the caller needs to know if the len to 
<br>
pass should always be sizeof(long), or if it should reflect the true 
<br>
number of CPUs present (as one must on an Altix).
<br>
<p>-Paul
<br>
<p>Bogdan Costescu wrote:
<br>
<span class="quotelev1">&gt; On Thu, 8 Dec 2005, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Check out <a href="http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/">http://svn.open-mpi.org/svn/ompi/trunk/opal/mca/paffinity/</a> 
</span><br>
<span class="quotelev2">&gt;&gt; linux/paffinity_linux.h -- there's a big comment in that file about 
</span><br>
<span class="quotelev2">&gt;&gt; the problem, to include descriptions of the 3 APIs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm sorry, but that is not quite what I wrote about in my message. The 
</span><br>
<span class="quotelev1">&gt; comments refer to the _glibc_ view of the functions, at least I 
</span><br>
<span class="quotelev1">&gt; couldn't see how they map to my reading of the _kernel_ source code.
</span><br>
<span class="quotelev1">&gt; Let's take one that is specifically mentioned there: Mandrake 10.0, 
</span><br>
<span class="quotelev1">&gt; kernel based on 2.6.3, in file kernel/sched.c there is the function:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /**
</span><br>
<span class="quotelev1">&gt;   * sys_sched_setaffinity - set the cpu affinity of a process
</span><br>
<span class="quotelev1">&gt;   * @pid: pid of the process
</span><br>
<span class="quotelev1">&gt;   * @len: length in bytes of the bitmask pointed to by user_mask_ptr
</span><br>
<span class="quotelev1">&gt;   * @user_mask_ptr: user-space pointer to the new cpu mask
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt; asmlinkage long sys_sched_setaffinity(pid_t pid, unsigned int len,
</span><br>
<span class="quotelev1">&gt;                                        unsigned long __user *user_mask_ptr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which again has 3 arguments that look exactly like the ones that I 
</span><br>
<span class="quotelev1">&gt; mentioned previously. I don't have access to the source code of 
</span><br>
<span class="quotelev1">&gt; the SGI Altix kernel, so I can't check the other one mentioned there 
</span><br>
<span class="quotelev1">&gt; as a 2-args function. But so far all _kernel_ prototypes of the 
</span><br>
<span class="quotelev1">&gt; function that I have looked at are exactly the same with 3 arguments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The solution that I proposed works much like a statically linked 
</span><br>
<span class="quotelev1">&gt; binary - it calls via a syscall the _kernel_ function that has a 
</span><br>
<span class="quotelev1">&gt; constant (so far) prototype. It doesn't call the _glibc_ function that 
</span><br>
<span class="quotelev1">&gt; changes prototype.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0607.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
