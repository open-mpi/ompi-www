<?
$subject_val = "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  5 11:29:56 2007" -->
<!-- isoreceived="20071205162956" -->
<!-- sent="Wed, 5 Dec 2007 10:29:46 -0600 (CST)" -->
<!-- isosent="20071205162946" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks" -->
<!-- id="Pine.LNX.4.64.0712051025180.8890_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4756C52E.5090609_at_cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-05 11:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Previous message:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To me, (a) is dumb and (c) isn't a non-starter.
<br>
<p>The whole point of the component system is to seperate concerns.  Routing 
<br>
topology and collectives operations are two difference concerns.  While 
<br>
there's some overlap (a topology-aware collective doesn't make sense when 
<br>
using the unity routing structure), it's not overlap in the one implies 
<br>
you need the other.  I can think of a couple of different ways of 
<br>
implementing the group communication framework, all of which are totally 
<br>
independent of the particulars of how routing is tracked.
<br>
<p>(b) has a very reasonable track record of working well on the OMPI side 
<br>
(the mpool / btl thing figures itself out fairly well).  Bringing such a 
<br>
setup over to ORTE wouldn't be bad, but a bit hackish.
<br>
<p>Of course, there's at most two routed components built at any time, and 
<br>
the defaults are all most non-debugging people will ever need, so I guess 
<br>
I&quot;m not convinced (c) isn't a non-starter.
<br>
<p>Brian
<br>
<p>On Wed, 5 Dec 2007, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; To me, (c) is a non-starter. I think whenever possible we should be
</span><br>
<span class="quotelev1">&gt; automatically doing the right thing. The user should not need to have
</span><br>
<span class="quotelev1">&gt; any idea how things work inside the library.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Between options (a) and (b), I don't really care.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) would be great if we had a mca component dependency system which has
</span><br>
<span class="quotelev1">&gt; been much talked about. But without such a system it gets messy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (a) has the advantage of making sure there is no problems and allowing
</span><br>
<span class="quotelev1">&gt; the 2 systems to interact very nicely together, but it also might add a
</span><br>
<span class="quotelev1">&gt; large burden to a component writer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On a related, but slightly different topic, one thing that has always
</span><br>
<span class="quotelev1">&gt; bothered me about the grpcomm/routed implementation is that it is not
</span><br>
<span class="quotelev1">&gt; self contained. There is logic for routing algorithms outside of the
</span><br>
<span class="quotelev1">&gt; components (for example, in orte/orted/orted_comm.c). So, if there are
</span><br>
<span class="quotelev1">&gt; any overhauls planned I definitely think this needs to be cleaned up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph H Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; II. Interaction between the ROUTED and GRPCOMM frameworks
</span><br>
<span class="quotelev2">&gt;&gt; When we initially developed these two frameworks within the RTE, we
</span><br>
<span class="quotelev2">&gt;&gt; envisioned them to operate totally independently of each other. Thus, the
</span><br>
<span class="quotelev2">&gt;&gt; grpcomm collectives provide algorithms such as a binomial &quot;xcast&quot; that uses
</span><br>
<span class="quotelev2">&gt;&gt; the daemons to scalably send messages across the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, we recently realized that the efficacy of the current grpcomm
</span><br>
<span class="quotelev2">&gt;&gt; algorithms directly hinge on the daemons being fully connected - which we
</span><br>
<span class="quotelev2">&gt;&gt; were recently told may not be the case as other people introduce different
</span><br>
<span class="quotelev2">&gt;&gt; ROUTED components. For example, using the binomial algorithm in grpcomm's
</span><br>
<span class="quotelev2">&gt;&gt; xcast while having a ring topology selected in ROUTED would likely result in
</span><br>
<span class="quotelev2">&gt;&gt; terrible performance.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This raises the following questions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (a) should the GRPCOMM and ROUTED frameworks be consolidated to ensure that
</span><br>
<span class="quotelev2">&gt;&gt; the group collectives algorithms properly &quot;match&quot; the communication
</span><br>
<span class="quotelev2">&gt;&gt; topology?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (b) should we automatically select the grpcomm/routed pairings based on some
</span><br>
<span class="quotelev2">&gt;&gt; internal logic?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (c) should we leave this &quot;as-is&quot; and the user is responsible for making
</span><br>
<span class="quotelev2">&gt;&gt; intelligent choices (and for detecting when the performance is bad due to
</span><br>
<span class="quotelev2">&gt;&gt; this mismatch)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (d) other suggestions?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2727.php">Jeff Squyres: "Re: [OMPI devel] vt-integration"</a>
<li><strong>Previous message:</strong> <a href="2725.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2720.php">Tim Prins: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
<li><strong>Reply:</strong> <a href="2733.php">Ralph H Castain: "Re: [OMPI devel] RTE Issue II: Interaction between the ROUTED and GRPCOMM frameworks"</a>
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
