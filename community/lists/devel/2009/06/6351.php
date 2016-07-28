<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 16:03:17 2009" -->
<!-- isoreceived="20090625200317" -->
<!-- sent="Thu, 25 Jun 2009 14:03:04 -0600" -->
<!-- isosent="20090625200304" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504" -->
<!-- id="D964887E-E448-4D44-954E-49A39FD8896C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1DE57832-07A8-4152-BB72-0A0A306E22C0_at_sun.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-25 16:03:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6350.php">Lenny Verkhovsky: "[OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 25, 2009, at 9:30 AM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 25, 2009, at 11:10 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; They do flow along the route at all times. However, without static  
</span><br>
<span class="quotelev2">&gt;&gt; ports the orted has to start by directly connecting to the HNP and  
</span><br>
<span class="quotelev2">&gt;&gt; sending the orted's contact info to the HNP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the part I don't understand.  Why can't they send the  
</span><br>
<span class="quotelev1">&gt; contact info along the route as well?  Don't they have enough  
</span><br>
<span class="quotelev1">&gt; information to wire a route to the HNP?  If not, can't they be given  
</span><br>
<span class="quotelev1">&gt; it at startup?
</span><br>
<p>If you have a tree oob routing topology, and you launch -all- the  
<br>
daemons with a single command (which all environments except rsh do),  
<br>
how does a child in the tree know the contact info of its parent?? It  
<br>
can't - unless you use static ports (so it can compute the IP/port),  
<br>
or you do an exchange like we currently do.
<br>
<p>If you do a tree-spawn with rsh, then you obviously can do so. We  
<br>
didn't do that in the original tree spawn because we didn't have the  
<br>
required infrastructure at that time to shutdown a job where the  
<br>
orteds didn't have a direct route to the HNP. George et al are working  
<br>
on this because we -do- have the ability to do it now.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then the HNP includes that info in the launch msg, allowing the  
</span><br>
<span class="quotelev2">&gt;&gt; orteds to wireup their routes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So the difference is that the static ports allow us to avoid that  
</span><br>
<span class="quotelev2">&gt;&gt; initial HNP-direct connection, which is what causes the flood.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I should warn everyone that in my experiments the HNP flood is not  
</span><br>
<span class="quotelev1">&gt; the only problem with tree spawning.  In fact, it doesn't even seem  
</span><br>
<span class="quotelev1">&gt; to be the limiting problem.  At the moment, it appears that the  
</span><br>
<span class="quotelev1">&gt; limiting problem on my cluster has to do with sshd/rshd accessing  
</span><br>
<span class="quotelev1">&gt; some name service (e.g., gethostbyname, getpwnam, getdefaultproject,  
</span><br>
<span class="quotelev1">&gt; or something like that).
</span><br>
<p>Quite true - you have a number of things that happen on each node as  
<br>
you launch down the tree. Part of the solution is to cache your DNS  
<br>
lookups so they are all local. If you don't, then things run slow -  
<br>
which is what we were seeing 1+ years ago when playing on Ranger.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am hoping to find that this is just some cluster configuration  
</span><br>
<span class="quotelev1">&gt; oddity.  YMMV, of course.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The other thing that hasn't been done yet is to have the &quot;procs- 
</span><br>
<span class="quotelev2">&gt;&gt; launched&quot; messages rollup in the collective - the HNP gets one/ 
</span><br>
<span class="quotelev2">&gt;&gt; daemon right now, even though it comes down the routed path. Hope  
</span><br>
<span class="quotelev2">&gt;&gt; to have that done next week. That will be in operation regardless  
</span><br>
<span class="quotelev2">&gt;&gt; of static vs non-static ports.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6352.php">Eugene Loh: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Previous message:</strong> <a href="6350.php">Lenny Verkhovsky: "[OMPI devel] rankfile relative host claiming option patch"</a>
<li><strong>In reply to:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6315.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
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
