<?
$subject_val = "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 10:34:04 2016" -->
<!-- isoreceived="20160321143404" -->
<!-- sent="Mon, 21 Mar 2016 14:33:53 +0000" -->
<!-- isosent="20160321143353" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?" -->
<!-- id="D6F44CB9-A534-4144-B3A0-EA3BA14AA8E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDiW0biGwrGUAAo1hw3-6iVcxOC63ZLDcmpMBGXp2HcA-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-21 10:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28769.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>In reply to:</strong> <a href="28758.php">dpchoudh .: "[OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Reply:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 19, 2016, at 11:53 AM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Why 'self' needs to be explicitly mentioned when using the BTL communication? Since it must always be there for MPI communication to work, should it not be implicit? I am sure there is some architectural rationale behind this; could someone please elaborate?
</span><br>
<p>The original intent: it's actually meant to be a BTL, just like any other.  In that sense, if you list an &quot;include&quot; list of BTLs, it needs to be listed -- just like any other.
<br>
<p>That being said, you're right -- it *is* a little silly these days to have to explicitly list &quot;self&quot; because no other component has ever replaced it for process-loopback communication.  It might not be too hard to update mca_btl_base_select() to automatically add &quot;self&quot; to the &quot;include&quot; list, if it wasn't explicitly mentioned...?
<br>
<p>Want to submit a PR? :-)
<br>
<p><span class="quotelev1">&gt; 2. Why is this (using 'self') not needed when using MTL communication?
</span><br>
<p>BTLs and MTLs are exclusive.  Specifically, see <a href="https://github.com/open-mpi/ompi/blob/master/README#L590-L628">https://github.com/open-mpi/ompi/blob/master/README#L590-L628</a>.
<br>
<p><span class="quotelev1">&gt; 3. Is it possible to mix BTL and MTL on a single OMPI job?
</span><br>
<p>By design, no.
<br>
<p>The cm PML was designed to select exactly one MTL for use, as opposed to the ob1 PML, which was designed to select multiple BTLs for use.
<br>
<p><span class="quotelev1">&gt; For example, if I have a card, let's say Texas Instruments Hyperlink, that is only available as BTL, and I also have Qlogic cards on the same nodes, can I use something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 -H h1,h2,h3 -mca MTL psm -mca BTL self,hlink
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 4. If the above answer is yes, then would OpenMPI use both cards *simultaneously* (and stripe messages) or would it use the one with higher exclusivity and put the other as standby for failure recovery?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Life is complex. It has real and imaginary parts.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/03/28758.php">http://www.open-mpi.org/community/lists/users/2016/03/28758.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28771.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why do I need a C++ linker while linking in MPI C code with CUDA?"</a>
<li><strong>Previous message:</strong> <a href="28769.php">Gilles Gouaillardet: "Re: [OMPI users] Existing and emerging interconnects for commodity PCs"</a>
<li><strong>In reply to:</strong> <a href="28758.php">dpchoudh .: "[OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
<li><strong>Reply:</strong> <a href="28774.php">Nathan Hjelm: "Re: [OMPI users] Why does 'self' needs to be explicitly mentioned?"</a>
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
