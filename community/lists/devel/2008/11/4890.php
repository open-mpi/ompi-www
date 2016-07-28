<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19991";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 13 11:54:13 2008" -->
<!-- isoreceived="20081113165413" -->
<!-- sent="Thu, 13 Nov 2008 11:54:09 -0500" -->
<!-- isosent="20081113165409" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19991" -->
<!-- id="ea86ce220811130854o14faf6bfo5734910886c8dac4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200811122332.mACNW2vK022681_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r19991<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-13 11:54:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not 100% sure, but this looks like the changeset that caused all
<br>
of IU's trunk MTT
<br>
runs last night to segfault... yes, all. :-(
<br>
<p>Here's the magnitude of the problem:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=883">http://www.open-mpi.org/mtt/index.php?do_redir=883</a>
<br>
<p>Note how pretty much everything was passing for 1.4a1r19979,
<br>
and everything failing for 1.4a1r19991.
<br>
<p>I am not sure why there are only results from absoft and IU.  Maybe the
<br>
sun MTT runs just haven't finished yet from last night.
<br>
<p>Take a look at these MTT results for a manageable sample where you could
<br>
click on the &quot;details&quot; button to see the various segfaults:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=884">http://www.open-mpi.org/mtt/index.php?do_redir=884</a>
<br>
<p>Most of the segfaults look something like this that involve the mca_iof_hnp.so:
<br>
<p>======================
<br>
[odin093:06882] *** Process received signal ***
<br>
[odin093:06882] Signal: Segmentation fault (11)
<br>
[odin093:06882] Signal code: Address not mapped (1)
<br>
[odin093:06882] Failing at address: 0x8
<br>
[odin093:06882] [ 0] /lib64/libpthread.so.0 [0x2aaaaba4ee70]
<br>
[odin093:06882] [ 1]
<br>
/nfs/rinfs/san/homedirs/mpiteam/mtt-runs/odin/20081112-Nightly/pb_3/installs/TqMo/install/lib/openmpi/mca_iof_hnp.so
<br>
[0x2aaaadc1c3fd]
<br>
[odin093:06882] [ 2]
<br>
/nfs/rinfs/san/homedirs/mpiteam/mtt-runs/odin/20081112-Nightly/pb_3/installs/TqMo/install/lib/libopen-pal.so.0
<br>
[0x2aaaaaf29b0b]
<br>
[odin093:06882] [ 3] mpirun [0x4033e3]
<br>
[odin093:06882] [ 4] mpirun [0x402b13]
<br>
[odin093:06882] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x2aaaabc788b4]
<br>
[odin093:06882] [ 6] mpirun [0x402a49]
<br>
[odin093:06882] *** End of error message ***
<br>
======================
<br>
<p>But there are a few that don't have mca_iof_hnp.so in the stacktrace, so
<br>
I could be wrong about which changeset caused this:
<br>
<p>======================
<br>
[odin090:12437] *** Process received signal ***
<br>
[odin090:12437] Signal: Segmentation fault (11)
<br>
[odin090:12437] Signal code: Address not mapped (1)
<br>
[odin090:12437] Failing at address: 0x4
<br>
[odin090:12437] [ 0] [0xffffe600]
<br>
[odin090:12437] [ 1]
<br>
/nfs/rinfs/san/homedirs/mpiteam/mtt-runs/odin/20081112-Nightly/pb_2/installs/U_ro/install/lib/libopen-pal.so.0
<br>
[0xf7f5b118]
<br>
[odin090:12437] [ 2]
<br>
/nfs/rinfs/san/homedirs/mpiteam/mtt-runs/odin/20081112-Nightly/pb_2/installs/U_ro/install/lib/libopen-pal.so.0(opal_event_loop+0x27)
<br>
[0xf7f5b367]
<br>
[odin090:12437] [ 3]
<br>
/nfs/rinfs/san/homedirs/mpiteam/mtt-runs/odin/20081112-Nightly/pb_2/installs/U_ro/install/lib/libopen-pal.so.0(opal_event_dispatch+0x1e)
<br>
[0xf7f5b38e]
<br>
[odin090:12437] [ 4] mpirun [0x804a8f8]
<br>
[odin090:12437] [ 5] mpirun [0x8049f36]
<br>
[odin090:12437] [ 6] /lib/libc.so.6(__libc_start_main+0xdc) [0xf7d8ddec]
<br>
[odin090:12437] [ 7] mpirun [0x8049e61]
<br>
[odin090:12437] *** End of error message ***
<br>
======================
<br>
<p>On Wed, Nov 12, 2008 at 6:32 PM,  &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2008-11-12 18:32:01 EST (Wed, 12 Nov 2008)
</span><br>
<span class="quotelev1">&gt; New Revision: 19991
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/19991">https://svn.open-mpi.org/trac/ompi/changeset/19991</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix the iof race conditions wrt proc termination. This is comprised of two sections:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. modify the iof to track when a proc actually closes all of its open iof output pipes. When this occurs, notify the odls that the proc's iof is complete. This is done via a zero-time event so that we can step out of the read event before processing the notification.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. in the odls, modify the waitpid callback so it only flags that it was called. Add a function to receive the iof-complete notification, and a function that checks for both iof complete and waitpid callback before declaring a proc fully terminated. This ensures that we read and deliver -all- of the IO prior to declaring the job complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also modified the odls call to orte_iof.close (and the component's implementation) so it only closes stdin, leaving the other io channels alone. This fixes the other half of the known problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This should fix the ticket on this subject, but I'll wait to close it pending further testing in the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/base.h                   |    30 +++-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/base/iof_base_open.c          |    32 ++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp.c                 |    98 +++++++------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp.h                 |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp_component.c       |    14 -
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/hnp/iof_hnp_read.c            |    62 +++++++-
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted.c             |    85 +++++++----
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted.h             |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted_component.c   |     6
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/iof/orted/iof_orted_read.c        |    39 +++++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/base.h                  |     5
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_default_fns.c |   280 +++++++++++++++++++++++++--------------
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_base_open.c        |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/base/odls_private.h          |     2
</span><br>
<span class="quotelev1">&gt;   trunk/orte/mca/odls/odls_types.h                 |     3
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_wait.c                   |    17 ++
</span><br>
<span class="quotelev1">&gt;   trunk/orte/runtime/orte_wait.h                   |    33 ++++
</span><br>
<span class="quotelev1">&gt;   17 files changed, 491 insertions(+), 221 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/orte/mca/iof/base/base.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4891.php">Leonardo Fialho: "Re: [OMPI devel] Modex and others"</a>
<li><strong>Previous message:</strong> <a href="4889.php">Ralph Castain: "Re: [OMPI devel] Modex and others"</a>
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
