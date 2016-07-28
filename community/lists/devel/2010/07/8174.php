<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 10:13:34 2010" -->
<!-- isoreceived="20100712141334" -->
<!-- sent="Mon, 12 Jul 2010 16:13:28 +0200" -->
<!-- isosent="20100712141328" -->
<!-- name="Jerome Soumagne" -->
<!-- email="soumagne_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="4C3B2308.90807_at_cscs.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="199D0D77-85D0-462D-8642-E0081E9C287B_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] alps ras patch for SLURM<br>
<strong>From:</strong> Jerome Soumagne (<em>soumagne_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 10:13:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8175.php">nadia.derbey: "[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8173.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8173.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for accepting this patch.
<br>
<p>Jerome
<br>
<p>On 07/12/2010 03:47 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks for the explanation, Ken! I'll take care of the patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 12, 2010, at 6:40 AM, Matney Sr, Kenneth D. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I think that it would be overstating the case to say that I am re-assuming
</span><br>
<span class="quotelev2">&gt;&gt; those duties.  Rather, I am trying to fill the gap in a minimal sense while
</span><br>
<span class="quotelev2">&gt;&gt; we locate a replacement for Rainer.  I expect to help our replacement
</span><br>
<span class="quotelev2">&gt;&gt; get up to speed on portals and ALPS; but, I have too many other duties
</span><br>
<span class="quotelev2">&gt;&gt; to be able to provide full OMPI support.  Here is a plug for my daytime job:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.nccs.gov/user-support/center-projects/">http://www.nccs.gov/user-support/center-projects/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do the Lustre User Toolkit and IOTA.  The web pages will be improved
</span><br>
<span class="quotelev2">&gt;&gt; before too long.  The current state reflects my preference for development
</span><br>
<span class="quotelev2">&gt;&gt; over writing web pages.  In addition, new versions of these are in development
</span><br>
<span class="quotelev2">&gt;&gt; as well as a new parallel tool and another tool for use on Lustre.  Other
</span><br>
<span class="quotelev2">&gt;&gt; members, of the group I work in, are developing additional tools for Lustre.
</span><br>
<span class="quotelev2">&gt;&gt; The Lustre User Toolkit is compatible with OMPI and runs on our research cluster,
</span><br>
<span class="quotelev2">&gt;&gt; as well as the Cray XTs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At the same time, I do not want OMPI to be unsupported on the Cray XT.
</span><br>
<span class="quotelev2">&gt;&gt; There may be a need for ORNL down the road.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I agree that, in the OMPI context, the &quot;slurm&quot; comment generates confusion.
</span><br>
<span class="quotelev2">&gt;&gt; The source of the environmental variable is immaterial to OMPI.  If you feel
</span><br>
<span class="quotelev2">&gt;&gt; that I should do the patch for Jerome, just say so.  Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; -- Ken
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 10, 2010, at 10:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sounds good then.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I only got into this thread because (a) the reference to slurm, and (b) with Rainer's departure, I wasn't sure if someone else was going to pickup the alps support. Since you are re-assuming those latter duties (yes?), and since this actually has nothing to do with slurm itself, I'll let you decide when/if to deal with the patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would only suggest that you remove the &quot;slurm&quot; comment from it as it is definitely confusing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; &lt;deleted&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
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
<span class="quotelev2">&gt;&gt;      
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8175.php">nadia.derbey: "[OMPI devel] PATCH: Wrong event_type value passed in to show_help when getting xrc async events"</a>
<li><strong>Previous message:</strong> <a href="8173.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8173.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8159.php">Ralph Castain: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
