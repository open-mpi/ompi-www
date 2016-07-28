<?
$subject_val = "Re: [OMPI devel] alps ras patch for SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 12 09:47:59 2010" -->
<!-- isoreceived="20100712134759" -->
<!-- sent="Mon, 12 Jul 2010 07:47:45 -0600" -->
<!-- isosent="20100712134745" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] alps ras patch for SLURM" -->
<!-- id="199D0D77-85D0-462D-8642-E0081E9C287B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6AC0E5BB-6FCE-4698-BE07-A370B210EEB5_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-12 09:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the explanation, Ken! I'll take care of the patch.
<br>
<p><p>On Jul 12, 2010, at 6:40 AM, Matney Sr, Kenneth D. wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think that it would be overstating the case to say that I am re-assuming
</span><br>
<span class="quotelev1">&gt; those duties.  Rather, I am trying to fill the gap in a minimal sense while
</span><br>
<span class="quotelev1">&gt; we locate a replacement for Rainer.  I expect to help our replacement
</span><br>
<span class="quotelev1">&gt; get up to speed on portals and ALPS; but, I have too many other duties
</span><br>
<span class="quotelev1">&gt; to be able to provide full OMPI support.  Here is a plug for my daytime job:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.nccs.gov/user-support/center-projects/">http://www.nccs.gov/user-support/center-projects/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do the Lustre User Toolkit and IOTA.  The web pages will be improved
</span><br>
<span class="quotelev1">&gt; before too long.  The current state reflects my preference for development
</span><br>
<span class="quotelev1">&gt; over writing web pages.  In addition, new versions of these are in development
</span><br>
<span class="quotelev1">&gt; as well as a new parallel tool and another tool for use on Lustre.  Other
</span><br>
<span class="quotelev1">&gt; members, of the group I work in, are developing additional tools for Lustre.
</span><br>
<span class="quotelev1">&gt; The Lustre User Toolkit is compatible with OMPI and runs on our research cluster,
</span><br>
<span class="quotelev1">&gt; as well as the Cray XTs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At the same time, I do not want OMPI to be unsupported on the Cray XT.  
</span><br>
<span class="quotelev1">&gt; There may be a need for ORNL down the road.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree that, in the OMPI context, the &quot;slurm&quot; comment generates confusion.
</span><br>
<span class="quotelev1">&gt; The source of the environmental variable is immaterial to OMPI.  If you feel
</span><br>
<span class="quotelev1">&gt; that I should do the patch for Jerome, just say so.  Thanks.
</span><br>
<span class="quotelev1">&gt; -- Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2010, at 10:37 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sounds good then.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I only got into this thread because (a) the reference to slurm, and (b) with Rainer's departure, I wasn't sure if someone else was going to pickup the alps support. Since you are re-assuming those latter duties (yes?), and since this actually has nothing to do with slurm itself, I'll let you decide when/if to deal with the patch.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I would only suggest that you remove the &quot;slurm&quot; comment from it as it is definitely confusing.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;deleted&gt;
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Previous message:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>In reply to:</strong> <a href="8172.php">Matney Sr, Kenneth D.: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
<li><strong>Reply:</strong> <a href="8174.php">Jerome Soumagne: "Re: [OMPI devel] alps ras patch for SLURM"</a>
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
