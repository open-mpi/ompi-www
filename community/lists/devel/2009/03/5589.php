<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar  5 16:26:21 2009" -->
<!-- isoreceived="20090305212621" -->
<!-- sent="Thu, 05 Mar 2009 16:25:27 -0500" -->
<!-- isosent="20090305212527" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739" -->
<!-- id="200903051625.27794.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="82895739-44D3-4D4E-B98E-679AE1673E8C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-05 16:25:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Previous message:</strong> <a href="5588.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>In reply to:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
On Thursday 05 March 2009 04:06:53 pm Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you please explain this change?  It seems like a very large code
</span><br>
<span class="quotelev1">&gt; change for such a trivial name change.  Why was it necessary to change
</span><br>
<span class="quotelev1">&gt; orte_process_info to orte_proc_info and change all these files?
</span><br>
Yes, I know, as the previous patches, this touches a lot of files, as was the 
<br>
second one, as we discussed in Louisville.
<br>
<p><span class="quotelev1">&gt; It feels like we're getting into &quot;I like this name better than that
</span><br>
<span class="quotelev1">&gt; name&quot; kinds of changes...  :-(
</span><br>
That's not what it is supposed to be about ;-)
<br>
<p>This patch was to ease the handling within redefinition files and scripts that 
<br>
we need to do to handle the transition.
<br>
<p>Of course, I can revert the change.
<br>
<p>With best regards,
<br>
Rainer
<br>
<pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5590.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>Previous message:</strong> <a href="5588.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r20740"</a>
<li><strong>In reply to:</strong> <a href="5587.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r20739"</a>
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
