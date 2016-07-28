<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 23 10:35:42 2013" -->
<!-- isoreceived="20130123153542" -->
<!-- sent="Wed, 23 Jan 2013 07:35:35 -0800" -->
<!-- isosent="20130123153535" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework" -->
<!-- id="6A238869-D96E-42C3-A90D-D933ECDF3506_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD317D28BA_at_EXMB01.srn.sandia.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-23 10:35:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11970.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11969.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 23, 2013, at 7:24 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's not entirely true; there's some state that's required to be held by
</span><br>
<span class="quotelev1">&gt; the RTE framework (the ompi_process_info structure), but it's minimal and
</span><br>
<span class="quotelev1">&gt; does not scale with number of peers in a job.
</span><br>
<p>Sorry - guess I don't consider that &quot;state&quot; information as it doesn't change over the app's lifecycle. However, it is true that there is some amount of info that is required - a review of the orte/util/proc_info.h will show what that is.
<br>
<p>Again, the primary point is that this is a thin wrapper over ORTE, so the components have to provide the same functionality but are free to do so however they choose.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In terms of interface, there's now three MPI frameworks which encompass
</span><br>
<span class="quotelev1">&gt; the set of functionality the MPI layer needs: rte, pubsub, and dpm (the
</span><br>
<span class="quotelev1">&gt; last two are the dynamic process stuff).  The RTE framework is a fairly
</span><br>
<span class="quotelev1">&gt; small set of functions, probably 20?  I'm hoping we can shrink it slightly
</span><br>
<span class="quotelev1">&gt; over time, but it's going to require some thought and changes to the OMPI
</span><br>
<span class="quotelev1">&gt; layer, so I didn't want to do it all in one go.
</span><br>
<p>FWIW: we know those interfaces are going to change (a) when the BTLs move to the OPAL layer, and (b) as we reduce/remove the modex requirement. As we discussed on the call yesterday, the trunk is going to undergo a LOT of change over the (roughly) next six months, so these interfaces aren't locked in concrete by any means.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/23/13 8:03 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure what you're asking here. There is no state at all
</span><br>
<span class="quotelev2">&gt;&gt; in the MPI layer - just a set of function calls. Each component in the
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/rte framework is required to map those function calls to their
</span><br>
<span class="quotelev2">&gt;&gt; own implementation. The function calls themselves are just a rename of
</span><br>
<span class="quotelev2">&gt;&gt; the current ORTE calls, so the implementations must provide the same
</span><br>
<span class="quotelev2">&gt;&gt; functionality - they are simply free to do so however they choose.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2013, at 11:31 PM, Richard Graham &lt;richardg_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; First - thanks.  I am very happy this is proceeding.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; General question here - do you have any idea how much global state
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sits behind the current implementation ?  What I am trying to gauge at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what level of granularity one can bring in additional capabilities.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have not looked in detail yet, but will in the near future.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of Barrett, Brian W
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, January 21, 2013 9:31 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] RFC: RTE Framework
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As discussed at the December developer's meeting, a number of us have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; been working on a framework in OMPI to encompass the RTE resources
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (typically provided by ORTE).  This follows on work Oak Ridge did on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ORCA layer, which ended up having a number of technical challenges and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; was dropped for a simpler approach.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The interface is still a work in process and designed around the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; concept that the ORTE component is a thin renaming around ORTE itself
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (this was one of the points the ORTE developers felt strongly about).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We think it's ready for comments and coming into the trunk, so are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trying to get it looked at by a broader community.  The Mercurial
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repository is available
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://bitbucket.org/rhc/ompi-trunk">https://bitbucket.org/rhc/ompi-trunk</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This work is focussed only on the creation of a framework to encompass
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the RTE interface between OMPI and ORTE.  There are currently two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; components:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the ORTE component and a test component implemented over PMI.  The PMI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; component is only really useful if ORTE is disabled at autogen time with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the --no-orte option to autogen.  Future work to build against an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; external OMPI (in progress, on a different branch) will make using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-orte components slightly more useful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, if there aren't any major comments, I'll plan on bringing this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work to the trunk this weekend (Jan 26/27).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian W. Barrett
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Scalable System Software Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="11972.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 -	trunk/ompi/mca/btl/tcp"</a>
<li><strong>Previous message:</strong> <a href="11970.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27881 - trunk/ompi/mca/btl/tcp"</a>
<li><strong>In reply to:</strong> <a href="11969.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11980.php">Richard Graham: "Re: [OMPI devel] [EXTERNAL] Re:  RTE Framework"</a>
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
