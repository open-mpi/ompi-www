<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 16:38:00 2008" -->
<!-- isoreceived="20080306213800" -->
<!-- sent="Thu, 06 Mar 2008 14:37:47 -0700" -->
<!-- isosent="20080306213747" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766" -->
<!-- id="C3F5B23B.C904%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ea86ce220803061234u40ad789cm3bbaae30db2e5e92_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 16:37:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3401.php">Jeff Squyres: "[OMPI devel] libevent vs. libev"</a>
<li><strong>Previous message:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>In reply to:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Tim - good suggestion! Had to modify your proposed code a tad to get
<br>
it to compile and work, but it is definitely a cleaner solution.
<br>
<p>Ralph
<br>
<p><p>On 3/6/08 1:34 PM, &quot;Tim Mattox&quot; &lt;timattox_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This still has a race condition... which can be dealt with using
</span><br>
<span class="quotelev1">&gt; opal_atomic stuff.
</span><br>
<span class="quotelev1">&gt; See below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Mar 6, 2008 at 2:35 PM,  &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt;  Date: 2008-03-06 14:35:57 EST (Thu, 06 Mar 2008)
</span><br>
<span class="quotelev2">&gt;&gt;  New Revision: 17766
</span><br>
<span class="quotelev2">&gt;&gt;  URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17766">https://svn.open-mpi.org/trac/ompi/changeset/17766</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  Log:
</span><br>
<span class="quotelev2">&gt;&gt;  Fix a race condition - ensure we don't call terminate in orterun more than
</span><br>
<span class="quotelev2">&gt;&gt; once, even if the timeout fires while we are doing so
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt;  Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
=============================================================================&gt;&gt;
<br>
=
<br>
<span class="quotelev2">&gt;&gt;  --- trunk/orte/tools/orterun/orterun.c  (original)
</span><br>
<span class="quotelev2">&gt;&gt;  +++ trunk/orte/tools/orterun/orterun.c  2008-03-06 14:35:57 EST (Thu, 06 Mar
</span><br>
<span class="quotelev2">&gt;&gt; 2008)
</span><br>
<span class="quotelev2">&gt;&gt;  @@ -112,14 +112,15 @@
</span><br>
<span class="quotelev2">&gt;&gt;   static bool want_prefix_by_default = (bool)
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT;
</span><br>
<span class="quotelev2">&gt;&gt;   static opal_event_t *orterun_event, *orteds_exit_event;
</span><br>
<span class="quotelev2">&gt;&gt;   static char *ompi_server=NULL;
</span><br>
<span class="quotelev2">&gt;&gt;  +static bool terminating=false;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt;  @@ -644,6 +638,12 @@
</span><br>
<span class="quotelev2">&gt;&gt;      orte_proc_t **procs;
</span><br>
<span class="quotelev2">&gt;&gt;      orte_vpid_t i;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  +    /* flag that we are here to avoid doing it twice */
</span><br>
<span class="quotelev2">&gt;&gt;  +    if (terminating) {
</span><br>
<span class="quotelev2">&gt;&gt;  +        return;
</span><br>
<span class="quotelev2">&gt;&gt;  +    }
</span><br>
<span class="quotelev2">&gt;&gt;  +    terminating = true;
</span><br>
<span class="quotelev2">&gt;&gt;  +
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think this race condition should be dealt with like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/sys/atomic.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; static opal_atomic_lock_t terminating = OPAL_ATOMIC_UNLOCKED;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; if (opal_atomic_trylock(&amp;terminating)) { /* returns 1 if already locked */
</span><br>
<span class="quotelev1">&gt;     return;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3401.php">Jeff Squyres: "[OMPI devel] libevent vs. libev"</a>
<li><strong>Previous message:</strong> <a href="3399.php">Ralf Wildenhues: "[OMPI devel] use of AC_CACHE_CHECK in otf"</a>
<li><strong>In reply to:</strong> <a href="3397.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<!-- nextthread="start" -->
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
