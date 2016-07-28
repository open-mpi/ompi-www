<?
$subject_val = "Re: [OMPI devel] patch for building gm btl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 08:52:18 2008" -->
<!-- isoreceived="20080102135218" -->
<!-- sent="Wed, 2 Jan 2008 08:52:08 -0500" -->
<!-- isosent="20080102135208" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] patch for building gm btl" -->
<!-- id="C73863DD-6AC0-4D4C-82B7-1AE40CAB9D39_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4779C4BC.5010102_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] patch for building gm btl<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 08:52:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 31, 2007, at 11:42 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I tried today to build the OMPI trunk on a system w/ GM libs installed
</span><br>
<span class="quotelev1">&gt; (I tried both GM-2.0.16 and GM-1.6.4) and found that the GM BTL won't
</span><br>
<span class="quotelev1">&gt; even compile, due to unbalanced parens.  The patch below reintroduces
</span><br>
<span class="quotelev1">&gt; the parens that were apparently lost in r16633:
</span><br>
<p>Fixed (<a href="https://svn.open-mpi.org/trac/ompi/changeset/17029">https://svn.open-mpi.org/trac/ompi/changeset/17029</a>); thanks for  
<br>
the patch.
<br>
<p><span class="quotelev1">&gt; The fact that this has gone unfixed for 2 months suggests to me that
</span><br>
<span class="quotelev1">&gt; nobody is building the GM BTL.  So, how would I go about checking ...
</span><br>
<span class="quotelev1">&gt; a) ...if there exists any periodic build of the GM BTL via MTT?
</span><br>
<p>I thought that Indiana was doing GM builds, but perhaps they've  
<br>
upgraded to MX these days...?
<br>
<p>UTK -- do you still have any GM clusters around?
<br>
<p><span class="quotelev1">&gt; b) ...if such builds, if any, experience the same error(s) as I
</span><br>
<span class="quotelev1">&gt; c) ...which GM library versions such builds, if any, compile against
</span><br>
<p>Given the typos you found, I don't see how they could.
<br>
<p><span class="quotelev1">&gt; d) ...if anybody wants to help setup an MTT for GM on my system (NOTE:
</span><br>
<span class="quotelev1">&gt; Jeff Squyres, Brian Barrett and George Bosilca all have existing
</span><br>
<span class="quotelev1">&gt; accounts on my cluster, though possibly expired/disabled).
</span><br>
<p><p>I always like to see more OMPI testing.  :-)
<br>
<p>I'd be happy to help setup MTT for your cluster.  Is it easy to re- 
<br>
activate my accounts?  What kind of testing would you be willing to do  
<br>
on your cluster, and how often?  What queueing system do you  
<br>
use?  ...etc. (this might be worth a phone call)
<br>
<p>I have a somewhat-complex setup for MTT on my Cisco development  
<br>
cluster; I submit a whole pile of compilation MTT jobs via SLURM and  
<br>
wait for them to complete (individually).  Each compile that completes  
<br>
successfully will end up generating another pile of SLURM jobs for  
<br>
testing.  I have a [somewhat ugly] top-level script that submits all  
<br>
these jobs according to a schedule set by day-of-week.
<br>
<p>Sidenote: one of the interesting things about MTT that we've found is  
<br>
that everyone tends to use it differently -- IU, Sun, IBM, and Cisco  
<br>
all use MTT quite differently in our nightly regression testing.  So  
<br>
our top-level scripting to invoke MTT is not uniform at all.  We've  
<br>
long-since talked about adding a uniform upper layer for large-scale  
<br>
MTT automation that can handle full parallelism, generic batch queue  
<br>
system support, etc., but haven't found the cycles to get together and  
<br>
try to map out what it would look like.  Plus, all of our individual  
<br>
setups are working / ain't broken, so there's not a lot of incentive  
<br>
to &quot;fix&quot; them...  It might be an interesting software engineering  
<br>
research project, though, if anyone's got the cycles.  This has [much]  
<br>
larger implications than just MPI testing.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Previous message:</strong> <a href="2922.php">Jeff Squyres: "Re: [OMPI devel] SDP support for OPEN-MPI"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/12/2915.php">Paul H. Hargrove: "[OMPI devel] patch for building gm btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
<li><strong>Reply:</strong> <a href="2924.php">Tim Prins: "Re: [OMPI devel] patch for building gm btl"</a>
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
