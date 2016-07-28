<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 16:02:27 2014" -->
<!-- isoreceived="20141017200227" -->
<!-- sent="Fri, 17 Oct 2014 13:02:23 -0700" -->
<!-- isosent="20141017200223" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="B979E7D0-F0B9-499E-B0B9-DE3D50DA8DBF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="544168A9.8030308_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 16:02:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25535.php">Steven Eliuk: "[OMPI users] CuEventCreate Failed..."</a>
<li><strong>Previous message:</strong> <a href="25533.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25532.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Oct 17, 2014, at 12:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks for looking into this and filing a bug report at 11:16PM!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks to Aurelien, Ralph and Nathan for their help and clarifications
</span><br>
<span class="quotelev1">&gt; also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Related suggestion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Add a note to the FAQ explaining that in OMPI 1.8
</span><br>
<span class="quotelev1">&gt; the new (default) btl is vader (and what it is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It was a real surprise to me.
</span><br>
<span class="quotelev1">&gt; If Aurelien Bouteiller didn't tell me about vader,
</span><br>
<span class="quotelev1">&gt; I might have never realized it even existed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That could be part of one of the already existent FAQs
</span><br>
<span class="quotelev1">&gt; explaining how to select the btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doubts (btl in OMPI 1.8):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I still don't understand clearly the meaning and scope of vader
</span><br>
<span class="quotelev1">&gt; being a &quot;default btl&#226;&#128;&#157;.
</span><br>
<p>We mean that it has a higher priority than the other shared memory implementation, and so it will be used for intra-node messaging by default.
<br>
<p><span class="quotelev1">&gt; Which is the scope of this default: intra-node btl only perhaps?
</span><br>
<p>Yes - strictly intra-node
<br>
<p><span class="quotelev1">&gt; Was there a default btl before vader, and which?
</span><br>
<p>The &#226;&#128;&#156;sm&#226;&#128;&#157; btl was the default shared memory transport before vader
<br>
<p><span class="quotelev1">&gt; Is vader the intra-node default only (i.e. replaces sm  by default),
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; or does it somehow extend beyond node boundaries, and replaces (or brings in) network btls (openib,tcp,etc) ?
</span><br>
<p>Nope - just intra-node
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I am running on several nodes, and want to use openib, not tcp,
</span><br>
<span class="quotelev1">&gt; and, say, use vader, what is the right syntax?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * nothing (OMPI will figure it out ... but what if you have IB,Ethernet,Myrinet,OpenGM, altogether?)
</span><br>
<p>If you have higher-speed connections, we will pick the fastest for inter-node messaging as the &#226;&#128;&#156;default&#226;&#128;&#157; since we expect you would want the fastest possible transport.
<br>
<p><span class="quotelev1">&gt; * -mca btl openib (and vader will come along automatically)
</span><br>
<p>Among the ones you show, this would indeed be the likely choices (openib and vader)
<br>
<p><span class="quotelev1">&gt; * -mca btl openib,self (and vader will come along automatically)
</span><br>
<p>The &#226;&#128;&#156;self&#226;&#128;&#157; btl is *always* active as the loopback transport
<br>
<p><span class="quotelev1">&gt; * -mca btl openib,self,vader (because vader is default only for 1-node jobs)
</span><br>
<span class="quotelev1">&gt; * something else (or several alternatives)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whatever happened to the &quot;self&quot; btl in this new context?
</span><br>
<span class="quotelev1">&gt; Gone? Still there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Many thanks,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/16/2014 11:16 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 16, 2014, at 1:35 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and on the MCA parameter file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_sm_use_knem = 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think the logic enforcing this MCA param got broken when we revamped the MCA param system.  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It looks like this MCA param was also dropped when we revamped the MCA system.  Doh!  :-(
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's some deep mojo going on that is somehow causing knem to not be used; I'm too tired to understand the logic right now.  I just opened <a href="https://github.com/open-mpi/ompi/issues/239">https://github.com/open-mpi/ompi/issues/239</a> to track this issue -- feel free to subscribe to the issue to get updates.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25532.php">http://www.open-mpi.org/community/lists/users/2014/10/25532.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2014/10/25532.php">http://www.open-mpi.org/community/lists/users/2014/10/25532.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25534/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25535.php">Steven Eliuk: "[OMPI users] CuEventCreate Failed..."</a>
<li><strong>Previous message:</strong> <a href="25533.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25532.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25647.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
