<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 09:32:29 2011" -->
<!-- isoreceived="20110317133229" -->
<!-- sent="Thu, 17 Mar 2011 07:32:20 -0600" -->
<!-- isosent="20110317133220" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536" -->
<!-- id="454DE827-EDDA-47D8-82ED-7DDB1C54A5F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=7UZ5aEdw4JcKr=kY308DCks7ZRRc6MOWrjqhF_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 09:32:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9099.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9097.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>In reply to:</strong> <a href="9097.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I could have fixed it without removing anything. All that was required was to change the flag passed to a function from false to true.
<br>
<p>But I figured I would go ahead and remove some code (support for ompi-profiler) that nobody is using. Will probably remove it from the rest of the codebase over time.
<br>
<p>:-)
<br>
<p><p>On Mar 17, 2011, at 6:49 AM, Tim Mattox wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; I love how this bugfix results in a net reduction of almost 200 lines
</span><br>
<span class="quotelev1">&gt; of code!  Very nice.
</span><br>
<span class="quotelev1">&gt; (I now return to deep lurking mode...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 16, 2011 at 10:22 PM,  &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Author: rhc
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2011-03-16 22:22:23 EDT (Wed, 16 Mar 2011)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 24536
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24536">https://svn.open-mpi.org/trac/ompi/changeset/24536</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; Fix the hier grpcomm module so modex results in correct data. The prior implementation stored the modex data as node-based attributes. This worked fine for BTL's such as openib where the interfaces were associated with the node. However, BTL's such as TCP have interfaces associated with a specific process, not a node. Thus, store the data in the modex database so it is correctly indexed.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Text files modified:
</span><br>
<span class="quotelev2">&gt;&gt;   trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c |   209 +--------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;   1 files changed, 7 insertions(+), 202 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev1">&gt;  timattox_at_[hidden] || tmattox_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
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
<li><strong>Next message:</strong> <a href="9099.php">Jeff Squyres: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<li><strong>Previous message:</strong> <a href="9097.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>In reply to:</strong> <a href="9097.php">Tim Mattox: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
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
