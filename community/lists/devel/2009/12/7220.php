<?
$subject_val = "Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 11 10:42:17 2009" -->
<!-- isoreceived="20091211154217" -->
<!-- sent="Fri, 11 Dec 2009 08:42:07 -0700" -->
<!-- isosent="20091211154207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5" -->
<!-- id="77A60112-4CBB-4B0B-9922-D61FD48BF11D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200912100855.39105.keller_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-11 10:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7219.php">Christoph Konersmann: "[OMPI devel] Changing BTL configs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7214.php">Rainer Keller: "[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great - thanks guys!!!
<br>
<p>On Dec 10, 2009, at 6:55 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt; Indiana University has created more SVN goodness for us: CMRs can be created 
</span><br>
<span class="quotelev1">&gt; and/or amended via magic strings in SVN commit messages.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will help save a lot of time by:
</span><br>
<span class="quotelev1">&gt; 1.) not manually having to create CMRs
</span><br>
<span class="quotelev1">&gt; 2.) allow the original developer decide what is required
</span><br>
<span class="quotelev1">&gt; 3.) not require the RMs to &quot;nag&quot; people, asking whether rXXX is worthwhile,
</span><br>
<span class="quotelev1">&gt; 4.) etc....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If You want to create a CMR to patch from the trunk to one of the branches, 
</span><br>
<span class="quotelev1">&gt; add the following text somewhere into your SVN commit message.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    cmr:MILESTONE[:#CMR-TICKET]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Valid MILESTONE values include &quot;v1.4&quot;, &quot;v1.4.1&quot;, ..., &quot;v1.5&quot;, &quot;v1.5.1&quot;, 
</span><br>
<span class="quotelev1">&gt; ...etc. (note that there must be a corresponding Trac milestone).  For 
</span><br>
<span class="quotelev1">&gt; example, to close ticket #42 and create a CMR for v1.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    svn ci -m &quot;This fixes #42 and should cmr:v1.5 to the branch as well&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you need to amend an existing CMR, use the &quot;:CMR-TICKET&quot; notation to 
</span><br>
<span class="quotelev1">&gt; specify which existing Trac ticket to amend.  For example (assuming the prior 
</span><br>
<span class="quotelev1">&gt; commit created a v1.5 CMR #4711):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    svn ci -m &quot;This really fixes #42, and should be added to cmr:v1.5#4711&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can also create multiple CMRs from a single commit:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    svn ci -m &quot;Big Important fix.  Needs to go to both cmr:v1.4 and cmr:v1.5&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you know the v1.5 series will be feature driven, therefore you may create a 
</span><br>
<span class="quotelev1">&gt; CMR for a feature to enter at a later milestone (e.g., v1.5.2) and later refer 
</span><br>
<span class="quotelev1">&gt; to the very same CMR to move over when it is ready to be included (as long as 
</span><br>
<span class="quotelev1">&gt; a corresponding Trac milestone exists for it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *PLEASE NOTE* If the cmr:-parsing script is unable to understand your SVN 
</span><br>
<span class="quotelev1">&gt; commit message (e.g., you get the syntax wrong, you specify a milestone that 
</span><br>
<span class="quotelev1">&gt; doesn't exist, you try to amend a ticket that is not a matching CMR, etc.), 
</span><br>
<span class="quotelev1">&gt; the commit will abort *WITHOUT WRITING TO THE SVN REPOSITORY* and show you a 
</span><br>
<span class="quotelev1">&gt; brief error message indicating what you did wrong.  You can just fix what you 
</span><br>
<span class="quotelev1">&gt; did wrong and then re-commit.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With best regards,
</span><br>
<span class="quotelev1">&gt; Jeff and Rainer
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<li><strong>Next message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add extra_state field to ompi_request_t"</a>
<li><strong>Previous message:</strong> <a href="7219.php">Christoph Konersmann: "[OMPI devel] Changing BTL configs at runtime"</a>
<li><strong>In reply to:</strong> <a href="7214.php">Rainer Keller: "[OMPI devel] Automatic CMRs for ompi-v1.4 / v1.5"</a>
<!-- nextthread="start" -->
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
