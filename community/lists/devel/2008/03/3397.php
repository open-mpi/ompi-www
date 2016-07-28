<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  6 15:34:56 2008" -->
<!-- isoreceived="20080306203456" -->
<!-- sent="Thu, 6 Mar 2008 15:34:50 -0500" -->
<!-- isosent="20080306203450" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766" -->
<!-- id="ea86ce220803061234u40ad789cm3bbaae30db2e5e92_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200803061935.m26JZvUm032664_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-06 15:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3398.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3396.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Reply:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This still has a race condition... which can be dealt with using
<br>
opal_atomic stuff.
<br>
See below.
<br>
<p>On Thu, Mar 6, 2008 at 2:35 PM,  &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt;  Date: 2008-03-06 14:35:57 EST (Thu, 06 Mar 2008)
</span><br>
<span class="quotelev1">&gt;  New Revision: 17766
</span><br>
<span class="quotelev1">&gt;  URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/17766">https://svn.open-mpi.org/trac/ompi/changeset/17766</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Log:
</span><br>
<span class="quotelev1">&gt;  Fix a race condition - ensure we don't call terminate in orterun more than once, even if the timeout fires while we are doing so
</span><br>
[snip]
<br>
<span class="quotelev1">&gt;  Modified: trunk/orte/tools/orterun/orterun.c
</span><br>
<span class="quotelev1">&gt;  ==============================================================================
</span><br>
<span class="quotelev1">&gt;  --- trunk/orte/tools/orterun/orterun.c  (original)
</span><br>
<span class="quotelev1">&gt;  +++ trunk/orte/tools/orterun/orterun.c  2008-03-06 14:35:57 EST (Thu, 06 Mar 2008)
</span><br>
<span class="quotelev1">&gt;  @@ -112,14 +112,15 @@
</span><br>
<span class="quotelev1">&gt;   static bool want_prefix_by_default = (bool) ORTE_WANT_ORTERUN_PREFIX_BY_DEFAULT;
</span><br>
<span class="quotelev1">&gt;   static opal_event_t *orterun_event, *orteds_exit_event;
</span><br>
<span class="quotelev1">&gt;   static char *ompi_server=NULL;
</span><br>
<span class="quotelev1">&gt;  +static bool terminating=false;
</span><br>
<span class="quotelev1">&gt;
</span><br>
[snip]
<br>
<span class="quotelev1">&gt;  @@ -644,6 +638,12 @@
</span><br>
<span class="quotelev1">&gt;      orte_proc_t **procs;
</span><br>
<span class="quotelev1">&gt;      orte_vpid_t i;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  +    /* flag that we are here to avoid doing it twice */
</span><br>
<span class="quotelev1">&gt;  +    if (terminating) {
</span><br>
<span class="quotelev1">&gt;  +        return;
</span><br>
<span class="quotelev1">&gt;  +    }
</span><br>
<span class="quotelev1">&gt;  +    terminating = true;
</span><br>
<span class="quotelev1">&gt;  +
</span><br>
[snip]
<br>
<p>I think this race condition should be dealt with like this:
<br>
<p>#include &quot;opal/sys/atomic.h&quot;
<br>
<p>static opal_atomic_lock_t terminating = OPAL_ATOMIC_UNLOCKED;
<br>
<p>...
<br>
<p>if (opal_atomic_trylock(&amp;terminating)) { /* returns 1 if already locked */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return;
<br>
}
<br>
<p><p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3398.php">Jeff Squyres: "Re: [OMPI devel] Fwd: OpenMPI changes"</a>
<li><strong>Previous message:</strong> <a href="3396.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] Fault tolerance"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
<li><strong>Reply:</strong> <a href="3400.php">Ralph H Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r17766"</a>
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
