<?
$subject_val = "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 08:49:05 2011" -->
<!-- isoreceived="20110317124905" -->
<!-- sent="Thu, 17 Mar 2011 08:49:00 -0400" -->
<!-- isosent="20110317124900" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536" -->
<!-- id="AANLkTi=7UZ5aEdw4JcKr=kY308DCks7ZRRc6MOWrjqhF_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201103170222.p2H2MOod019502_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-17 08:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>Previous message:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>Reply:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
I love how this bugfix results in a net reduction of almost 200 lines
<br>
of code!  Very nice.
<br>
(I now return to deep lurking mode...)
<br>
<p>On Wed, Mar 16, 2011 at 10:22 PM,  &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: rhc
</span><br>
<span class="quotelev1">&gt; Date: 2011-03-16 22:22:23 EDT (Wed, 16 Mar 2011)
</span><br>
<span class="quotelev1">&gt; New Revision: 24536
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/ompi/changeset/24536">https://svn.open-mpi.org/trac/ompi/changeset/24536</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Fix the hier grpcomm module so modex results in correct data. The prior implementation stored the modex data as node-based attributes. This worked fine for BTL's such as openib where the interfaces were associated with the node. However, BTL's such as TCP have interfaces associated with a specific process, not a node. Thus, store the data in the modex database so it is correctly indexed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#160; trunk/orte/mca/grpcomm/hier/grpcomm_hier_module.c | &#160; 209 +--------------------------------------
</span><br>
<span class="quotelev1">&gt; &#160; 1 files changed, 7 insertions(+), 202 deletions(-)
</span><br>
<p><pre>
-- 
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
&#160;timattox_at_[hidden] || tmattox_at_[hidden]
&#160; &#160; I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>Previous message:</strong> <a href="9096.php">Ralph Castain: "Re: [OMPI devel] Bug btl:tcp with grpcomm:hier"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
<li><strong>Reply:</strong> <a href="9098.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r24536"</a>
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
