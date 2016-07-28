<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 25 11:10:46 2009" -->
<!-- isoreceived="20090625151046" -->
<!-- sent="Thu, 25 Jun 2009 09:10:31 -0600" -->
<!-- isosent="20090625151031" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504" -->
<!-- id="DB752A3A-6278-4497-B724-3C7303179BF8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="95BABB19-54A3-45E1-BFA0-2199ABC60F7E_at_sun.com" -->
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
<strong>Date:</strong> 2009-06-25 11:10:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6347.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6347.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
They do flow along the route at all times. However, without static  
<br>
ports the orted has to start by directly connecting to the HNP and  
<br>
sending the orted's contact info to the HNP. Then the HNP includes  
<br>
that info in the launch msg, allowing the orteds to wireup their routes.
<br>
<p>So the difference is that the static ports allow us to avoid that  
<br>
initial HNP-direct connection, which is what causes the flood.
<br>
<p>The other thing that hasn't been done yet is to have the &quot;procs- 
<br>
launched&quot; messages rollup in the collective - the HNP gets one/daemon  
<br>
right now, even though it comes down the routed path. Hope to have  
<br>
that done next week. That will be in operation regardless of static vs  
<br>
non-static ports.
<br>
<p><p><p>On Jun 25, 2009, at 8:44 AM, Iain Bason wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2009, at 7:17 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not any more, when using regex - the only message that comes back  
</span><br>
<span class="quotelev2">&gt;&gt; is one/node telling the HNP that the procs have been launched.  
</span><br>
<span class="quotelev2">&gt;&gt; These messages flow along the route, not direct to the HNP -  
</span><br>
<span class="quotelev2">&gt;&gt; assuming you use the static port option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any prospect of doing the same without requiring the static  
</span><br>
<span class="quotelev1">&gt; port option?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Iain
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
<li><strong>Next message:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Previous message:</strong> <a href="6347.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>In reply to:</strong> <a href="6347.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
<li><strong>Reply:</strong> <a href="6349.php">Iain Bason: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r21504"</a>
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
