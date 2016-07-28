<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 12 16:40:56 2005" -->
<!-- isoreceived="20051212214056" -->
<!-- sent="Mon, 12 Dec 2005 16:40:34 -0500" -->
<!-- isosent="20051212214034" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="5EC88387-4517-4972-A8E6-61583FA439E0_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.63.0512121526460.19677_at_dingo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-12 16:40:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To make this significantly easier, I called Paul and we discussed  
<br>
this at length.
<br>
<p>In short -- we ended up agreeing with you.  :-)
<br>
<p>As a personal sidenote -- it sucks that we all had to do this much  
<br>
research to figure this out.  In particular, we missed the fact that  
<br>
all the kernel versions take 3 arguments (we thought that some took  
<br>
2), and that's where some of the reasons for the initial approach  
<br>
came from.
<br>
<p>So we'll implement this as a syscall() and use the getaffinity  
<br>
syscall to probe for the correct length (some kernels require &lt;=  
<br>
sizeof(long), some require == sizeof(long), and some are ok with &gt;=  
<br>
sizeof(long)).  Using syscall() cuts out the potentially-buggy  
<br>
middleman (glibc), and removes a layer of indirection that is  
<br>
*usually* able to be deduced, but there's little reason not to use  
<br>
syscall directly.
<br>
<p>There are some older systems out there that do not have syscall(),  
<br>
but I don't think we care about them (i.e., we can check for that in  
<br>
configure).  Plus, those systems won't have processor affinity, anyway.
<br>
<p>Behind the scenes, Paul and I have been working on a standalone  
<br>
library to handle all this junk called Portable Linux Processor  
<br>
Affinity (PLPA).  The SVN is hosted on svn.open-mpi.org -- we'll open  
<br>
it up in a few days (i.e., after we adjust to the syscall()  
<br>
interface).  This library will be released under the BSD license and  
<br>
a) is really pretty small, b) but most importantly, allows other  
<br>
developers using Linux processor affinity to not worry about any of  
<br>
these horrid details.  The PLPA will have its own web page and  
<br>
mailing list, too.
<br>
<p>Thanks for your diligence in pestering us about this!  :-)
<br>
<p><p>On Dec 12, 2005, at 10:32 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 9 Dec 2005, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If one looks though enough kernel versions,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime, I've gotten a copy of kernel/sched.c from a SGI Prism
</span><br>
<span class="quotelev1">&gt; kernel - I assume that it is the same used on Altix; this one has in
</span><br>
<span class="quotelev1">&gt; the Makefile EXTRAVERSION = -sgi306rp31. So again, all prototypes of
</span><br>
<span class="quotelev1">&gt; the sys_sched_setaffinity function that I've seen so far have 3
</span><br>
<span class="quotelev1">&gt; args... which means that no compiler tricks are needed to keep 3
</span><br>
<span class="quotelev1">&gt; different copies of the function.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; one finds that some of them differ in what they will accept for the
</span><br>
<span class="quotelev2">&gt;&gt; len.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK, so this is a different problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some produce EINVAL if len!=sizeof(long),
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I beg to disagree. All the codes that I looked at test for
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; len &lt; sizeof(new_mask)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and copy user data based on the size of new_mask, so if &quot;len&quot; is
</span><br>
<span class="quotelev1">&gt; larger than sizeof(new_mask), no error occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; others (especially Altix) produce EINVAL if len is too short to
</span><br>
<span class="quotelev2">&gt;&gt; cover all the machine's CPUs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...so IMHO this test should be used instead to separate a long from a
</span><br>
<span class="quotelev1">&gt; (larger) cpumask_t.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the message that described your implementation you also wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while on other kernels I find that a too-short mask is padded w/
</span><br>
<span class="quotelev2">&gt;&gt; zeros and no error results. So, we want a big value for len
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Indeed some (more recent) kernels pad with zeros if &quot;len&quot; is too
</span><br>
<span class="quotelev1">&gt; short. But a &quot;big value for len&quot; is again wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can see 4 cases, again by looking at the kernel code and not dealing
</span><br>
<span class="quotelev1">&gt; with 2 vs. 3 args:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. tests for len &lt; sizeof(long) and copies only sizeof(len) if larger
</span><br>
<span class="quotelev1">&gt; (backported 2.4 in RHEL3); this can be identified by passing &quot;len&quot;
</span><br>
<span class="quotelev1">&gt; smaller than sizeof(long) which returns -EINVAL and then passing &quot;len&quot;
</span><br>
<span class="quotelev1">&gt; of (or larger than) sizeof(long) which should not return error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. tests for len &lt; sizeof(cpumask_t) and copies only sizeof(len) if
</span><br>
<span class="quotelev1">&gt; larger (backported 2.4 from SGI, 2.6.3 from Mandrake 10.0); this can
</span><br>
<span class="quotelev1">&gt; be identified by passing &quot;len&quot; shorter than sizeof(cpumask_t) which
</span><br>
<span class="quotelev1">&gt; returns -EINVAL and then passing &quot;len&quot; of (or larger than)
</span><br>
<span class="quotelev1">&gt; sizeof(cpu_size_t) which should not return error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3. tests for len &lt; sizeof(cpumask_t) and pads with zeros if true,
</span><br>
<span class="quotelev1">&gt; otherwise copies only sizeof(cpumask_t) (2.6.9 in RHEL4 and 2.6.14).
</span><br>
<span class="quotelev1">&gt; This can't really be identified as it doesn't return -EINVAL in any
</span><br>
<span class="quotelev1">&gt; situation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see your suggestion to set &quot;big value for len&quot; would
</span><br>
<span class="quotelev1">&gt; successfully pass _all_ of the above conditions and would therefore
</span><br>
<span class="quotelev1">&gt; not offer any separation between the cases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The stuff above applies to the _set function; the _get function is a
</span><br>
<span class="quotelev1">&gt; bit different:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. tests for len &lt; sizeof(long) and returns -EINVAL if true.
</span><br>
<span class="quotelev1">&gt; (backported 2.4 in RHEL3). This can be identified by passing &quot;len&quot;
</span><br>
<span class="quotelev1">&gt; smaller than sizeof(long) which returns -EINVAL and then passing &quot;len&quot;
</span><br>
<span class="quotelev1">&gt; of (or larger than) sizeof(long) which should not return error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. tests for len &lt; sizeof(cpumask_t) and returns -EINVAL if true.
</span><br>
<span class="quotelev1">&gt; (backported 2.4 from SGI, 2.6.3 from Mandraks 10.0, 2.6.9 from RHEL4,
</span><br>
<span class="quotelev1">&gt; 2.6.14). This can be identified by passing &quot;len&quot; smaller than
</span><br>
<span class="quotelev1">&gt; sizeof(cpumask_t) which returns -EINVAL and then passing &quot;len&quot; of (or
</span><br>
<span class="quotelev1">&gt; larger than) sizeof(cpumask_t) which should not return error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Case 1. of _set is associated to case 1. of _get.
</span><br>
<span class="quotelev1">&gt; Cases 2. and 3. of _set are both associated to case 2. of _get.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So IMHO the test should be made with the _get function (as explained
</span><br>
<span class="quotelev1">&gt; in a previous message), by setting len=sizeof(long) which would allow
</span><br>
<span class="quotelev1">&gt; the case 1. to work fine, while case 2. would return -EINVAL, exactly
</span><br>
<span class="quotelev1">&gt; opposite from the code that you proposed.
</span><br>
<p><pre>
--
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0612.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0614.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
