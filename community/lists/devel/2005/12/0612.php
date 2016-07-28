<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Dec 12 10:32:26 2005" -->
<!-- isoreceived="20051212153226" -->
<!-- sent="Mon, 12 Dec 2005 16:32:20 +0100 (CET)" -->
<!-- isosent="20051212153220" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="Pine.LNX.4.63.0512121526460.19677_at_dingo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4399E298.9080109_at_lbl.gov" -->
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
<strong>Date:</strong> 2005-12-12 10:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 9 Dec 2005, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; If one looks though enough kernel versions,
</span><br>
<p>In the meantime, I've gotten a copy of kernel/sched.c from a SGI Prism 
<br>
kernel - I assume that it is the same used on Altix; this one has in 
<br>
the Makefile EXTRAVERSION = -sgi306rp31. So again, all prototypes of 
<br>
the sys_sched_setaffinity function that I've seen so far have 3 
<br>
args... which means that no compiler tricks are needed to keep 3 
<br>
different copies of the function.
<br>
<p><span class="quotelev1">&gt; one finds that some of them differ in what they will accept for the 
</span><br>
<span class="quotelev1">&gt; len.
</span><br>
<p>OK, so this is a different problem...
<br>
<p><span class="quotelev1">&gt; Some produce EINVAL if len!=sizeof(long),
</span><br>
<p>I beg to disagree. All the codes that I looked at test for
<br>
<p>len &lt; sizeof(new_mask)
<br>
<p>and copy user data based on the size of new_mask, so if &quot;len&quot; is 
<br>
larger than sizeof(new_mask), no error occurs.
<br>
<p><span class="quotelev1">&gt; others (especially Altix) produce EINVAL if len is too short to 
</span><br>
<span class="quotelev1">&gt; cover all the machine's CPUs.
</span><br>
<p>...so IMHO this test should be used instead to separate a long from a 
<br>
(larger) cpumask_t.
<br>
<p>In the message that described your implementation you also wrote:
<br>
<p><span class="quotelev1">&gt; while on other kernels I find that a too-short mask is padded w/ 
</span><br>
<span class="quotelev1">&gt; zeros and no error results. So, we want a big value for len
</span><br>
<p>Indeed some (more recent) kernels pad with zeros if &quot;len&quot; is too 
<br>
short. But a &quot;big value for len&quot; is again wrong.
<br>
<p>I can see 4 cases, again by looking at the kernel code and not dealing 
<br>
with 2 vs. 3 args:
<br>
<p>1. tests for len &lt; sizeof(long) and copies only sizeof(len) if larger 
<br>
(backported 2.4 in RHEL3); this can be identified by passing &quot;len&quot; 
<br>
smaller than sizeof(long) which returns -EINVAL and then passing &quot;len&quot; 
<br>
of (or larger than) sizeof(long) which should not return error.
<br>
<p>2. tests for len &lt; sizeof(cpumask_t) and copies only sizeof(len) if 
<br>
larger (backported 2.4 from SGI, 2.6.3 from Mandrake 10.0); this can 
<br>
be identified by passing &quot;len&quot; shorter than sizeof(cpumask_t) which 
<br>
returns -EINVAL and then passing &quot;len&quot; of (or larger than) 
<br>
sizeof(cpu_size_t) which should not return error.
<br>
<p>3. tests for len &lt; sizeof(cpumask_t) and pads with zeros if true, 
<br>
otherwise copies only sizeof(cpumask_t) (2.6.9 in RHEL4 and 2.6.14). 
<br>
This can't really be identified as it doesn't return -EINVAL in any 
<br>
situation.
<br>
<p>As you can see your suggestion to set &quot;big value for len&quot; would 
<br>
successfully pass _all_ of the above conditions and would therefore 
<br>
not offer any separation between the cases.
<br>
<p>The stuff above applies to the _set function; the _get function is a 
<br>
bit different:
<br>
<p>1. tests for len &lt; sizeof(long) and returns -EINVAL if true. 
<br>
(backported 2.4 in RHEL3). This can be identified by passing &quot;len&quot; 
<br>
smaller than sizeof(long) which returns -EINVAL and then passing &quot;len&quot; 
<br>
of (or larger than) sizeof(long) which should not return error.
<br>
<p>2. tests for len &lt; sizeof(cpumask_t) and returns -EINVAL if true. 
<br>
(backported 2.4 from SGI, 2.6.3 from Mandraks 10.0, 2.6.9 from RHEL4, 
<br>
2.6.14). This can be identified by passing &quot;len&quot; smaller than 
<br>
sizeof(cpumask_t) which returns -EINVAL and then passing &quot;len&quot; of (or 
<br>
larger than) sizeof(cpumask_t) which should not return error.
<br>
<p>Case 1. of _set is associated to case 1. of _get.
<br>
Cases 2. and 3. of _set are both associated to case 2. of _get.
<br>
<p>So IMHO the test should be made with the _get function (as explained 
<br>
in a previous message), by setting len=sizeof(long) which would allow 
<br>
the case 1. to work fine, while case 2. would return -EINVAL, exactly 
<br>
opposite from the code that you proposed.
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
<li><strong>Next message:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0611.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<li><strong>In reply to:</strong> <a href="0608.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0613.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
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
