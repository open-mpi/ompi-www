<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 10:24:34 2013" -->
<!-- isoreceived="20130123152434" -->
<!-- sent="Wed, 23 Jan 2013 15:24:09 +0000" -->
<!-- isosent="20130123152409" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317D28BA_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F7CF48F3-A622-41CA-AF6F-0AEB06A719DA_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 10:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11970.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's not entirely true; there's some state that's required to be held by
<br>
the RTE framework (the ompi_process_info structure), but it's minimal and
<br>
does not scale with number of peers in a job.
<br>
<p>In terms of interface, there's now three MPI frameworks which encompass
<br>
the set of functionality the MPI layer needs: rte, pubsub, and dpm (the
<br>
last two are the dynamic process stuff).  The RTE framework is a fairly
<br>
small set of functions, probably 20?  I'm hoping we can shrink it slightly
<br>
over time, but it's going to require some thought and changes to the OMPI
<br>
layer, so I didn't want to do it all in one go.
<br>
<p>Brian
<br>
<p>On 1/23/13 8:03 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;I'm not entirely sure what you're asking here. There is no state at all
</span><br>
<span class="quotelev1">&gt;in the MPI layer - just a set of function calls. Each component in the
</span><br>
<span class="quotelev1">&gt;ompi/mca/rte framework is required to map those function calls to their
</span><br>
<span class="quotelev1">&gt;own implementation. The function calls themselves are just a rename of
</span><br>
<span class="quotelev1">&gt;the current ORTE calls, so the implementations must provide the same
</span><br>
<span class="quotelev1">&gt;functionality - they are simply free to do so however they choose.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Jan 22, 2013, at 11:31 PM, Richard Graham &lt;richardg_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian,
</span><br>
<span class="quotelev2">&gt;&gt;  First - thanks.  I am very happy this is proceeding.
</span><br>
<span class="quotelev2">&gt;&gt;  General question here - do you have any idea how much global state
</span><br>
<span class="quotelev2">&gt;&gt;sits behind the current implementation ?  What I am trying to gauge at
</span><br>
<span class="quotelev2">&gt;&gt;what level of granularity one can bring in additional capabilities.
</span><br>
<span class="quotelev2">&gt;&gt;  I have not looked in detail yet, but will in the near future.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt;Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, January 21, 2013 9:31 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] RFC: RTE Framework
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi all -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As discussed at the December developer's meeting, a number of us have
</span><br>
<span class="quotelev2">&gt;&gt;been working on a framework in OMPI to encompass the RTE resources
</span><br>
<span class="quotelev2">&gt;&gt;(typically provided by ORTE).  This follows on work Oak Ridge did on the
</span><br>
<span class="quotelev2">&gt;&gt;ORCA layer, which ended up having a number of technical challenges and
</span><br>
<span class="quotelev2">&gt;&gt;was dropped for a simpler approach.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The interface is still a work in process and designed around the
</span><br>
<span class="quotelev2">&gt;&gt;concept that the ORTE component is a thin renaming around ORTE itself
</span><br>
<span class="quotelev2">&gt;&gt;(this was one of the points the ORTE developers felt strongly about).
</span><br>
<span class="quotelev2">&gt;&gt;We think it's ready for comments and coming into the trunk, so are
</span><br>
<span class="quotelev2">&gt;&gt;trying to get it looked at by a broader community.  The Mercurial
</span><br>
<span class="quotelev2">&gt;&gt;repository is available
</span><br>
<span class="quotelev2">&gt;&gt; at:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="https://bitbucket.org/rhc/ompi-trunk">https://bitbucket.org/rhc/ompi-trunk</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This work is focussed only on the creation of a framework to encompass
</span><br>
<span class="quotelev2">&gt;&gt;the RTE interface between OMPI and ORTE.  There are currently two
</span><br>
<span class="quotelev2">&gt;&gt;components:
</span><br>
<span class="quotelev2">&gt;&gt; the ORTE component and a test component implemented over PMI.  The PMI
</span><br>
<span class="quotelev2">&gt;&gt;component is only really useful if ORTE is disabled at autogen time with
</span><br>
<span class="quotelev2">&gt;&gt;the --no-orte option to autogen.  Future work to build against an
</span><br>
<span class="quotelev2">&gt;&gt;external OMPI (in progress, on a different branch) will make using
</span><br>
<span class="quotelev2">&gt;&gt;non-orte components slightly more useful.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, if there aren't any major comments, I'll plan on bringing this
</span><br>
<span class="quotelev2">&gt;&gt;work to the trunk this weekend (Jan 26/27).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;  Brian W. Barrett
</span><br>
<span class="quotelev2">&gt;&gt;  Scalable System Software Group
</span><br>
<span class="quotelev2">&gt;&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11969/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11970.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<li><strong>In reply to:</strong> <a href="11968.php">Ralph Castain: "Re: [OMPI devel] RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11971.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<li><strong>Reply:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
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
