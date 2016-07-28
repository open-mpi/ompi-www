<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 11:31:07 2009" -->
<!-- isoreceived="20090625153107" -->
<!-- sent="Thu, 25 Jun 2009 11:30:50 -0400" -->
<!-- isosent="20090625153050" -->
<!-- name="Iain Bason" -->
<!-- email="Iain.Bason_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504" -->
<!-- id="1DE57832-07A8-4152-BB72-0A0A306E22C0_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DB752A3A-6278-4497-B724-3C7303179BF8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504<br>
<strong>From:</strong> Iain Bason (<em>Iain.Bason_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 11:30:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6350.php">Lenny Verkhovsky: "[OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6348.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6348.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2009, at 11:10 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; They do flow along the route at all times. However, without static  
</span><br>
<span class="quotelev1">&gt; ports the orted has to start by directly connecting to the HNP and  
</span><br>
<span class="quotelev1">&gt; sending the orted's contact info to the HNP.
</span><br>
<p>This is the part I don't understand.  Why can't they send the contact  
<br>
info along the route as well?  Don't they have enough information to  
<br>
wire a route to the HNP?  If not, can't they be given it at startup?
<br>
<p><span class="quotelev1">&gt; Then the HNP includes that info in the launch msg, allowing the  
</span><br>
<span class="quotelev1">&gt; orteds to wireup their routes.
</span><br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So the difference is that the static ports allow us to avoid that  
</span><br>
<span class="quotelev1">&gt; initial HNP-direct connection, which is what causes the flood.
</span><br>
<p>I should warn everyone that in my experiments the HNP flood is not the  
<br>
only problem with tree spawning.  In fact, it doesn't even seem to be  
<br>
the limiting problem.  At the moment, it appears that the limiting  
<br>
problem on my cluster has to do with sshd/rshd accessing some name  
<br>
service (e.g., gethostbyname, getpwnam, getdefaultproject, or  
<br>
something like that).
<br>
<p>I am hoping to find that this is just some cluster configuration  
<br>
oddity.  YMMV, of course.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The other thing that hasn't been done yet is to have the &quot;procs- 
</span><br>
<span class="quotelev1">&gt; launched&quot; messages rollup in the collective - the HNP gets one/ 
</span><br>
<span class="quotelev1">&gt; daemon right now, even though it comes down the routed path. Hope to  
</span><br>
<span class="quotelev1">&gt; have that done next week. That will be in operation regardless of  
</span><br>
<span class="quotelev1">&gt; static vs non-static ports.
</span><br>
<p>Great!
<br>
<p>Iain
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6350.php">Lenny Verkhovsky: "[OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>Previous message:</strong> <a href="6348.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6348.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6351.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
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
