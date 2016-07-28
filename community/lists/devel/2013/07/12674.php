<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 22 15:31:53 2013" -->
<!-- isoreceived="20130722193153" -->
<!-- sent="Mon, 22 Jul 2013 15:31:48 -0400" -->
<!-- isosent="20130722193148" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk" -->
<!-- id="CALwSR2VsAvBZBvLmv29TU9BtbUMUfZuXLEx8QvwKw6DOJvn-Ew_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130722191700.01BF5160614_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28911 - trunk<br>
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-22 15:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12673.php">Barrett, Brian W: "[OMPI devel] v1.7 RTE testing / changes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Should that now read &quot;There are two network models available&quot;, not
<br>
&quot;three&quot;?  :-)
<br>
<p>On Mon, Jul 22, 2013 at 3:16 PM, &lt;svn-commit-mailer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Author: hjelmn (Nathan Hjelm)
</span><br>
<span class="quotelev1">&gt; Date: 2013-07-22 15:16:59 EDT (Mon, 22 Jul 2013)
</span><br>
<span class="quotelev1">&gt; New Revision: 28911
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/28911">https://svn.open-mpi.org/trac/ompi/changeset/28911</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Update README with information about uGNI and vader BTLs. Also remove
</span><br>
<span class="quotelev1">&gt; references to the csum pml.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cmr=v1.7.3:reviewer=jsquyres
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt;    trunk/README |    34 ++++++++++++++++++----------------
</span><br>
<span class="quotelev1">&gt;    1 files changed, 18 insertions(+), 16 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/README
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/README        Mon Jul 22 13:53:58 2013        (r28910)
</span><br>
<span class="quotelev1">&gt; +++ trunk/README        2013-07-22 15:16:59 EDT (Mon, 22 Jul 2013)
</span><br>
<span class="quotelev1">&gt;  (r28911)
</span><br>
<span class="quotelev1">&gt; @@ -484,10 +484,10 @@
</span><br>
<span class="quotelev1">&gt;  Network Support
</span><br>
<span class="quotelev1">&gt;  ---------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- There are three MPI network models available: &quot;ob1&quot;, &quot;csum&quot;, and
</span><br>
<span class="quotelev1">&gt; -  &quot;cm&quot;.  &quot;ob1&quot; and &quot;csum&quot; use BTL (&quot;Byte Transfer Layer&quot;) components
</span><br>
<span class="quotelev1">&gt; -  for each supported network.  &quot;cm&quot; uses MTL (&quot;Matching Tranport
</span><br>
<span class="quotelev1">&gt; -  Layer&quot;) components for each supported network.
</span><br>
<span class="quotelev1">&gt; +- There are three MPI network models available: &quot;ob1&quot;, and &quot;cm&quot;. &quot;ob1&quot;
</span><br>
<span class="quotelev1">&gt; +  uses BTL (&quot;Byte Transfer Layer&quot;) components for each supported network.
</span><br>
<span class="quotelev1">&gt; +  &quot;cm&quot; uses MTL (&quot;Matching Tranport Layer&quot;) components for each supported
</span><br>
<span class="quotelev1">&gt; +  network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - &quot;ob1&quot; supports a variety of networks that can be used in
</span><br>
<span class="quotelev1">&gt;      combination with each other (per OS constraints; e.g., there are
</span><br>
<span class="quotelev1">&gt; @@ -503,12 +503,8 @@
</span><br>
<span class="quotelev1">&gt;      - SCTP
</span><br>
<span class="quotelev1">&gt;      - uDAPL
</span><br>
<span class="quotelev1">&gt;      - Cisco usNIC
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; -  - &quot;csum&quot; is exactly the same as &quot;ob1&quot;, except that it performs
</span><br>
<span class="quotelev1">&gt; -    additional data integrity checks to ensure that the received data
</span><br>
<span class="quotelev1">&gt; -    is intact (vs. trusting the underlying network to deliver the data
</span><br>
<span class="quotelev1">&gt; -    correctly).  csum supports all the same networks as ob1, but there
</span><br>
<span class="quotelev1">&gt; -    is a performance penalty for the additional integrity checks.
</span><br>
<span class="quotelev1">&gt; +    - uGNI (Cray Gemini, Ares)
</span><br>
<span class="quotelev1">&gt; +    - vader (xpmem)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - &quot;cm&quot; supports a smaller number of networks (and they cannot be
</span><br>
<span class="quotelev1">&gt;      used together), but may provide better better overall MPI
</span><br>
<span class="quotelev1">&gt; @@ -521,14 +517,12 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Open MPI will, by default, choose to use &quot;cm&quot; when the InfiniPath
</span><br>
<span class="quotelev1">&gt;      PSM or the Mellanox MXM MTL can be used.  Otherwise, &quot;ob1&quot; will be
</span><br>
<span class="quotelev1">&gt; -    used and the corresponding BTLs will be selected.  &quot;csum&quot; will never
</span><br>
<span class="quotelev1">&gt; -    be selected by default.  Users can force the use of ob1 or cm if
</span><br>
<span class="quotelev1">&gt; -    desired by setting the &quot;pml&quot; MCA parameter at run-time:
</span><br>
<span class="quotelev1">&gt; +    used and the corresponding BTLs will be selected. Users can force
</span><br>
<span class="quotelev1">&gt; +    the use of ob1 or cm if desired by setting the &quot;pml&quot; MCA parameter
</span><br>
<span class="quotelev1">&gt; +    at run-time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        shell$ mpirun --mca pml ob1 ...
</span><br>
<span class="quotelev1">&gt;        or
</span><br>
<span class="quotelev1">&gt; -      shell$ mpirun --mca pml csum ...
</span><br>
<span class="quotelev1">&gt; -      or
</span><br>
<span class="quotelev1">&gt;        shell$ mpirun --mca pml cm ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - MXM is a MellanoX Messaging library utilizing full range of IB
</span><br>
<span class="quotelev1">&gt; @@ -546,6 +540,9 @@
</span><br>
<span class="quotelev1">&gt;    Although the usNIC is accessed via the OpenFabrics / Verbs API
</span><br>
<span class="quotelev1">&gt;    stack, this BTL is specific to the Cisco usNIC device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +- uGNI is a Cray library for communicating over the Gemini and Ares
</span><br>
<span class="quotelev1">&gt; +  interconnects.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt;  - The OpenFabrics Enterprise Distribution (OFED) software package v1.0
</span><br>
<span class="quotelev1">&gt;    will not work properly with Open MPI v1.2 (and later) due to how its
</span><br>
<span class="quotelev1">&gt;    Mellanox InfiniBand plugin driver is created.  The problem is fixed
</span><br>
<span class="quotelev1">&gt; @@ -598,7 +595,7 @@
</span><br>
<span class="quotelev1">&gt;    resulting in lower performances in case of non-contiguous
</span><br>
<span class="quotelev1">&gt;    data-types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -  The &quot;ob1&quot; and &quot;csum&quot; PMLs and BTL components use Open MPI's internal
</span><br>
<span class="quotelev1">&gt; +  The &quot;ob1&quot; PML and BTL components use Open MPI's internal
</span><br>
<span class="quotelev1">&gt;    on-node shared memory and process loopback devices for high
</span><br>
<span class="quotelev1">&gt;    performance.  The BTL interface allows multiple devices to be used
</span><br>
<span class="quotelev1">&gt;    simultaneously.  For the MX BTL it is recommended that the first
</span><br>
<span class="quotelev1">&gt; @@ -624,6 +621,11 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    See <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a> for details on Knem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +- XPMEM is used by the vader shared-memory BTL when the XPMEM
</span><br>
<span class="quotelev1">&gt; +  libraries are installed. XPMEM allows Open MPI to map pages from
</span><br>
<span class="quotelev1">&gt; +  other processes into the current process' memory space. This
</span><br>
<span class="quotelev1">&gt; +  allows single-copy semantics for shared memory without the need
</span><br>
<span class="quotelev1">&gt; +  for a system call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Open MPI Extensions
</span><br>
<span class="quotelev1">&gt;  -------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; svn-full mailing list
</span><br>
<span class="quotelev1">&gt; svn-full_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/svn-full">http://www.open-mpi.org/mailman/listinfo.cgi/svn-full</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Tim Mattox, Ph.D. - I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
 timattox_at_[hidden] || tmattox_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12675.php">Christopher Samuel: "[OMPI devel] Open-MPI build of NAMD launched from srun over 20% slowed than with mpirun"</a>
<li><strong>Previous message:</strong> <a href="12673.php">Barrett, Brian W: "[OMPI devel] v1.7 RTE testing / changes"</a>
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
