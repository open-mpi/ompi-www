<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 16 14:28:53 2014" -->
<!-- isoreceived="20140716182853" -->
<!-- sent="Wed, 16 Jul 2014 18:28:52 +0000" -->
<!-- isosent="20140716182852" -->
<!-- name="Dave Goodell (dgoodell)" -->
<!-- email="dgoodell_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun" -->
<!-- id="F951FADC-02BF-40A3-84FC-63E5B5A92D4F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAG4F6z_T5OFW+Ej_pQ4WH+LY1njQDNGdSeKKcVsUimv7pQor=w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun<br>
<strong>From:</strong> Dave Goodell (dgoodell) (<em>dgoodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-16 14:28:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 16, 2014, at 12:27 PM, Joshua Ladd &lt;jladd.mlnx_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dave,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your example will error out. If someone tries to set envars with both mechanism, the job fails. The decision to do so was also made at the Dev meeting and is so that we don't have to do this kind of checking. 
</span><br>
<p>Hmm, indeed it does.  I had mis-installed my OMPI build when I first tested this.  I also didn't expect that setting &quot;-mca mca_base_env_list foo=quux&quot; on the command line also would cause the environment to be updated for the code I previously quoted.
<br>
<p>Apologies for the false bug alarm.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15181.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>Previous message:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
<li><strong>In reply to:</strong> <a href="15179.php">Joshua Ladd: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32163 - in trunk: opal/mca/base orte/tools/orterun"</a>
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
