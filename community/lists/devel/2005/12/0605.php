<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Dec  8 17:33:39 2005" -->
<!-- isoreceived="20051208223339" -->
<!-- sent="Thu, 8 Dec 2005 17:33:26 -0500" -->
<!-- isosent="20051208223326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Linux processor affinity" -->
<!-- id="2C8A6E46-3211-4F81-83DA-30C37B67A950_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="438CB138.4040001_at_lbl.gov" -->
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
<strong>Date:</strong> 2005-12-08 17:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 29, 2005, at 2:51 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The result is the following, which I've tried in limited testing:
</span><br>
<p>Holy Crimminey, Batman -- this message slipped by me in my INBOX.
<br>
<p>This is friggen' amazing.
<br>
<p>Many thanks, Paul!
<br>
<p><span class="quotelev1">&gt; enum {
</span><br>
<span class="quotelev1">&gt;    SCHED_SETAFFINITY_TAKES_2_ARGS,
</span><br>
<span class="quotelev1">&gt;    SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_LONG,
</span><br>
<span class="quotelev1">&gt;    SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_CPU_SET,
</span><br>
<span class="quotelev1">&gt;    SCHED_SETAFFINITY_UNKNOWN
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /* We want to call by this prototype, even if it is not the real  
</span><br>
<span class="quotelev1">&gt; one */
</span><br>
<span class="quotelev1">&gt; extern sched_setaffinity(int pid, unsigned int len, void *mask);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int probe_setaffinity(void) {
</span><br>
<span class="quotelev1">&gt;      unsigned long mask[511];
</span><br>
<span class="quotelev1">&gt;      int rc;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      memset(mask, 0, sizeof(mask));
</span><br>
<span class="quotelev1">&gt;      mask[0] = 1;
</span><br>
<span class="quotelev1">&gt;      rc = sched_setaffinity(0, sizeof(mask), mask);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (rc &gt;= 0) {
</span><br>
<span class="quotelev1">&gt;          /* Kernel truncates over-length masks -&gt; successful call */
</span><br>
<span class="quotelev1">&gt;          return SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_CPU_SET;
</span><br>
<span class="quotelev1">&gt;      } else if (errno == EINVAL) {
</span><br>
<span class="quotelev1">&gt;          /* Kernel returns EINVAL when len != sizeof(long) */
</span><br>
<span class="quotelev1">&gt;          return SCHED_SETAFFINITY_TAKES_3_ARGS_THIRD_IS_LONG;
</span><br>
<span class="quotelev1">&gt;      } else if (errno == EFAULT) {
</span><br>
<span class="quotelev1">&gt;          /* Kernel returns EFAULT having rejected len as an address */
</span><br>
<span class="quotelev1">&gt;          return SCHED_SETAFFINITY_TAKES_2_ARGS;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      return SCHED_SETAFFINITY_UNKNOWN;
</span><br>
<span class="quotelev1">&gt; };
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
<li><strong>Next message:</strong> <a href="0606.php">Jeff Squyres: "Re:  Linux processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0604.php">Brian Barrett: "Re:  [PATH] ompi_info doesn't show use_mem_hooks flag"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2005/11/0562.php">Paul H. Hargrove: "Re:  Linux processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
<li><strong>Reply:</strong> <a href="0609.php">Bogdan Costescu: "Re:  Linux processor affinity"</a>
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
