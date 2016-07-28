<?
$subject_val = "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 15 10:00:36 2013" -->
<!-- isoreceived="20131115150036" -->
<!-- sent="Fri, 15 Nov 2013 15:00:33 +0000" -->
<!-- isosent="20131115150033" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme" -->
<!-- id="89F0872D-37D3-47E9-8574-55A05E5B929C_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="6C5DC0DD-ED4D-498F-8456-781F3068BEC2_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-15 10:00:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13307.php">Christopher Samuel: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13307.php">Christopher Samuel: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 15, 2013, at 5:21 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; There is no need to ensure global consistency unless you declare the pvar to
</span><br>
<span class="quotelev2">&gt;&gt; have a global scope (MCA_BASE_VAR_SCOPE_GROUP, MCA_BASE_VAR_SCOPE_GROUP_EQ,
</span><br>
<span class="quotelev2">&gt;&gt; MCA_BASE_VAR_SCOPE_ALL, or MCA_BASE_VAR_SCOPE_ALL_EQ.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; They clearly can&#146;t be of any _EQ scope. After reading the entire chapter in the MPI 3.1 I&#146;m not sure how the defined scope applies to the naming
</span><br>
<p>Correct -- there is no relationship between the pvar name and the scope.
<br>
<p><span class="quotelev1">&gt; or to the relationship between their values.
</span><br>
<p>Correct -- just like above, there's no standardized relationship between the scope and a pvar's values.
<br>
<p>Keep in mind: all I'm proposing is a *convention*; I assume it won't actually go into the standard.  
<br>
<p>Specifically: there's no way in the current standard to express the relationship that I want to express.  So I'm proposing a convention that tools can look for.  That's all.
<br>
<p><span class="quotelev1">&gt; That being said, the consistency I was looking for is somehow different. What I really wanted is a way, not based on the physical naming but based on some logical naming, that will allow a tool to &#147;globally&#148; make sense of the information exposed. Having separate (on each node) local information about the local usnic0 provide little information about any communication inconsistencies. Knowing the fact that there are many pending sends on my local usnic0 is interesting, but being able to link this information with a number of pending receives/other MPI_T on the peers sharing the same network layer will be much more valuable knowledge, providing better insight on what is going on each network layer.
</span><br>
<p><p>Agreed.  All I've done is the former (just exposing underlying network stats).
<br>
<p>Got any ideas about how to link such underlying stats to MPI layer stuff?
<br>
<p>This actually raises a point that MPI_T makes you read individual pvars separately -- there's no &quot;atomically read this array of pvars&quot; functionality.  That could lead to inconsistent results (e.g., first you read a network stat, and then you read an MPI layer stat -- but under the covers, the network stat could have changed by the time you read the MPI layer stat).  Hmm.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13287.php">Sylvestre Ledru: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<li><strong>Previous message:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>In reply to:</strong> <a href="13285.php">George Bosilca: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13307.php">Christopher Samuel: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
<li><strong>Reply:</strong> <a href="13307.php">Christopher Samuel: "Re: [OMPI devel] RFC: usnic BTL MPI_T pvar scheme"</a>
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
