<?
$subject_val = "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  8 19:34:59 2011" -->
<!-- isoreceived="20110708233459" -->
<!-- sent="Fri, 8 Jul 2011 16:34:54 -0700" -->
<!-- isosent="20110708233454" -->
<!-- name="Steve Kargl" -->
<!-- email="sgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD" -->
<!-- id="20110708233454.GA84132_at_troutmask.apl.washington.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="41467B9A-4188-418D-B959-6E8194619624_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD<br>
<strong>From:</strong> Steve Kargl (<em>sgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-08 19:34:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jul 08, 2011 at 07:03:13PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Sorry -- I got distracted all afternoon...
</span><br>
<p>No problem.  We all have obligations that we prioritize.
<br>
<p><span class="quotelev1">&gt; In addition to what Ralph said (i.e., I'm not sure if the
</span><br>
<span class="quotelev1">&gt; CIDR notation stuff made it over to the v1.5 branch or not,
</span><br>
<span class="quotelev1">&gt; but it is available from the nightly SVN trunk tarballs:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/nightly/trunk/">http://www.open-mpi.org/nightly/trunk/</a>), here's a few points
</span><br>
<span class="quotelev1">&gt; from other mails in this thread...
</span><br>
<p>I try this out sometime next week.
<br>
<p><span class="quotelev1">&gt; 1. Gus is correct that OMPI is complaining that bge1 doesn't
</span><br>
<span class="quotelev1">&gt; exist on all nodes.  The MCA parameters that you pass on the
</span><br>
<span class="quotelev1">&gt; command line get shipped to *all* MPI processes, and therefore
</span><br>
<span class="quotelev1">&gt; generally need to work on all of them.  If you have per-host
</span><br>
<span class="quotelev1">&gt; MCA parameter values, you can set them a few different ways:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - have a per-host MCA param file, usually in
</span><br>
<span class="quotelev1">&gt; $prefix/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; - have your shell startup files intelligently determine which
</span><br>
<span class="quotelev1">&gt; host you're on and set the corresponding MCA environment variable
</span><br>
<span class="quotelev1">&gt; as appropriate (e.g., on the head node, set the env variable
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl_tcp_if_include to bge1, and set it to bge0 on the others)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Those are a little klunky, but having a heterogeneous setup like this
</span><br>
<span class="quotelev1">&gt; is not common, so we haven't really optimized the ability to set
</span><br>
<span class="quotelev1">&gt; different MCA params on different servers.
</span><br>
<p>There is no compelling reason for me to keep bge0 on the 10.208.
<br>
subnet and bge1 on the 192.168 subnet on node10.  If I switch
<br>
the two, so all bge0 nics are on 192.168., then I suppose
<br>
that --mca btl_tcp_if_include bge0 should work.  I'll try
<br>
this next weekr; if I can kick everyone off the cluster for
<br>
a few minutes. 
<br>
<p><span class="quotelev1">&gt; 2. I am curious to figure out why the automatic reachability
</span><br>
<span class="quotelev1">&gt; computations isn't working for you.  Unfortunately, the code
</span><br>
<span class="quotelev1">&gt; to compute the reachability is pretty gnarly.  :-\  The code
</span><br>
<span class="quotelev1">&gt; to find the IP interfaces on your machines is in opal/util/if.c.
</span><br>
<span class="quotelev1">&gt; That *should* be working -- there's *BSD-specific code in there
</span><br>
<span class="quotelev1">&gt; that has been verified by others in the past... but who knows?
</span><br>
<span class="quotelev1">&gt; Perhaps it has bit-rotted...?
</span><br>
<p>I'm running a Feb 2011 version of the bleeding edge FreeBSD,
<br>
which will become FreeBSD 9.0 is a few months.  Perhaps, 
<br>
something has changed in FreeBSD's networking code.  I'll
<br>
see if I can understand opal/util/if.c sufficiently to see
<br>
what's happening.
<br>
<p><span class="quotelev1">&gt; The code to take these IP interfaces
</span><br>
<span class="quotelev1">&gt; and figure out if a given peer is reachable is in
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp/btl_tcp_proc.c:mca_btl_tcp_proc_insert().
</span><br>
<span class="quotelev1">&gt; This requires a little explanation...
</span><br>
<p>(snip to keep this short)
<br>
<p><span class="quotelev1">&gt; This was a long explanation -- I hope it helps...
</span><br>
<span class="quotelev1">&gt; Is there any chance you could dig into this to see what's going on?
</span><br>
<p>Thanks, I'll see what I can ferret out of the syste
<br>
<p><span class="quotelev1">&gt; We unfortunately don't have access to any BSD machines to test this
</span><br>
<span class="quotelev1">&gt; on, ourselves.  It works on other OS's, so I'm curious as to why it
</span><br>
<span class="quotelev1">&gt; doesn't seem to work for you.  :-(
</span><br>
<p>I can arrange access on the cluster in question. ;-)
<br>
<p><pre>
-- 
Steve
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Previous message:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>In reply to:</strong> <a href="16872.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
<li><strong>Reply:</strong> <a href="16874.php">Jeff Squyres: "Re: [OMPI users] tcp communication problems with 1.4.3 and 1.4.4 rc2 on FreeBSD"</a>
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
