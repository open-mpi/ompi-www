<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 14:53:41 2005" -->
<!-- isoreceived="20051129195341" -->
<!-- sent="Tue, 29 Nov 2005 11:51:20 -0800" -->
<!-- isosent="20051129195120" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="438CB138.4040001_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 14:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eureka!
<br>
<p>Operationally the 3-argument variants are ALMOST identical.  The older 
<br>
version required len == sizeof(long), while the later version allowed 
<br>
the len to vary (so an Altix could have more than 64 cpus).  However, in 
<br>
the kernel both effectively treat the 3rd argument as an array of 
<br>
unsigned longs.  It appears that with the later kernel interface, both 
<br>
&quot;cpu_set_t*&quot; and &quot;unsigned long *&quot; have been used by glibc.  So, as long 
<br>
as the kernel isn't enforcing len==sizeof(long), the cpu_set_t can be 
<br>
used w/ any 3-argument kernel regardless of what the library headers say.
<br>
<p>Looking at the kernel code for various implementations of the 3-arg 
<br>
version shows that it can be tough to know which from a static test.  On 
<br>
the Altix (using cpu_set_t) one gets errno=EFAULT if the len is too 
<br>
short to cover all the online cpus, while on other kernels I find that a 
<br>
too-short mask is padded w/ zeros and no error results.  So, we want a 
<br>
big value for len.  However, since the 2-arg version treats the 2nd arg 
<br>
as an address rather than a len, we can use a len&lt;4096 to ensure an 
<br>
invalid address will result in errno=EFAULT.
<br>
<p>The result is the following, which I've tried in limited testing:
<br>
<p><p>enum {
<br>
&nbsp;&nbsp;&nbsp;SCHED_SETAFFINITY_TAKES_2_ARGS,
<br>
&nbsp;&nbsp;&nbsp;SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_LONG,
<br>
&nbsp;&nbsp;&nbsp;SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_CPU_SET,
<br>
&nbsp;&nbsp;&nbsp;SCHED_SETAFFINITY_UNKNOWN
<br>
};
<br>
<p>/* We want to call by this prototype, even if it is not the real one */
<br>
extern sched_setaffinity(int pid, unsigned int len, void *mask);
<br>
<p>int probe_setaffinity(void) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long mask[511];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rc;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;memset(mask, 0, sizeof(mask));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mask[0] = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rc = sched_setaffinity(0, sizeof(mask), mask);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rc &gt;= 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Kernel truncates over-length masks -&gt; successful call */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_CPU_SET;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (errno == EINVAL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Kernel returns EINVAL when len != sizeof(long) */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_LONG;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (errno == EFAULT) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* Kernel returns EFAULT having rejected len as an address */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SCHED_SETAFFINITY_TAKES_2_ARGS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return SCHED_SETAFFINITY_UNKNOWN;
<br>
};
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Greetings all.  I'm writing this to ask for help from the general 
</span><br>
<span class="quotelev1">&gt; development community.  We've run into a problem with Linux processor 
</span><br>
<span class="quotelev1">&gt; affinity, and although I've individually talked to a lot of people 
</span><br>
<span class="quotelev1">&gt; about this, no one has been able to come up with a solution.  So I 
</span><br>
<span class="quotelev1">&gt; thought I'd open this to a wider audience.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is a long-ish e-mail; bear with me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you may or may not know, Open MPI includes support for processor and 
</span><br>
<span class="quotelev1">&gt; memory affinity.  There are a number of benefits, but I'll skip that 
</span><br>
<span class="quotelev1">&gt; discussion for now.  For more information, see the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-paffinity">http://www.open-mpi.org/faq/?category=building#build-paffinity</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=building#build-maffinity">http://www.open-mpi.org/faq/?category=building#build-maffinity</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#paffinity-defs">http://www.open-mpi.org/faq/?category=tuning#paffinity-defs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#maffinity-defs">http://www.open-mpi.org/faq/?category=tuning#maffinity-defs</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#using-paffinity">http://www.open-mpi.org/faq/?category=tuning#using-paffinity</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the problem: there are 3 different APIs for processor affinity 
</span><br>
<span class="quotelev1">&gt; in Linux.  I have not done exhaustive research on this, but which API 
</span><br>
<span class="quotelev1">&gt; you have seems to depend on your version of kernel, glibc, and/or Linux 
</span><br>
<span class="quotelev1">&gt; vendor (i.e., some vendors appear to port different versions of the API 
</span><br>
<span class="quotelev1">&gt; to their particular kernel/glibc).  The issue is that all 3 versions of 
</span><br>
<span class="quotelev1">&gt; the API use the same function names (sched_setaffinity() and 
</span><br>
<span class="quotelev1">&gt; sched_getaffinity()), but they change the number and types of the 
</span><br>
<span class="quotelev1">&gt; parameters to these functions.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is not a big problem for source distributions of Open MPI -- our 
</span><br>
<span class="quotelev1">&gt; configure script figures out which one you have and uses preprocessor 
</span><br>
<span class="quotelev1">&gt; directives to select the Right stuff in our code base for your 
</span><br>
<span class="quotelev1">&gt; platform.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What *is* a big problem, however, is that ISVs can therefore not ship a 
</span><br>
<span class="quotelev1">&gt; binary Open MPI installation and reasonably expect the processor 
</span><br>
<span class="quotelev1">&gt; affinity aspects of it to work on multiple Linux platforms.  That is, 
</span><br>
<span class="quotelev1">&gt; if the ISV compiles for API #X and ships a binary to a system that has 
</span><br>
<span class="quotelev1">&gt; API #Y, there are two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Processor affinity is disabled.  This means that the benefits of 
</span><br>
<span class="quotelev1">&gt; processor affinity won't be visible (not hugely important on 2-way 
</span><br>
<span class="quotelev1">&gt; SMPs, but as the number of processors/cores increases, this is going to 
</span><br>
<span class="quotelev1">&gt; become more important), and Open MPI's NUMA-aware collectives won't be 
</span><br>
<span class="quotelev1">&gt; able to be used (because memory affinity may not be useful without 
</span><br>
<span class="quotelev1">&gt; processor affinity guarantees).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Processor affinity is enabled, but the code invokes API #X on a 
</span><br>
<span class="quotelev1">&gt; system with API #Y.  This will have unpredictable results, the best 
</span><br>
<span class="quotelev1">&gt; case of which will be that processor affinity is simply [effectively] 
</span><br>
<span class="quotelev1">&gt; ignored; the worst case of which will be that the application will fail 
</span><br>
<span class="quotelev1">&gt; (e.g., seg fault).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clearly, neither of these solutions are attractive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question to the developer crowd out there -- can you think of a way 
</span><br>
<span class="quotelev1">&gt; around this?  More specifically, is there a way to know -- at run time 
</span><br>
<span class="quotelev1">&gt; -- which API to use?  We can do some compiler trickery to compile all 
</span><br>
<span class="quotelev1">&gt; three APIs into a single Open MPI installation and then run-time 
</span><br>
<span class="quotelev1">&gt; dispatch to the Right one, but this is contingent upon being able to 
</span><br>
<span class="quotelev1">&gt; determine which API to dispatch to.  A bunch of us have poked around 
</span><br>
<span class="quotelev1">&gt; and not found anything on the system that indicates which API you have 
</span><br>
<span class="quotelev1">&gt; (e.g., looked in /proc and /sys), but not found anything.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any suggestions here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for your time.
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
<li><strong>Next message:</strong> <a href="0563.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0561.php">Galen M. Shipman: "Re:  MPI_Probe_tag_c mvapi hand"</a>
<li><strong>In reply to:</strong> <a href="0558.php">Jeff Squyres: "Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/12/0605.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
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
