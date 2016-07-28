<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 17:44:30 2014" -->
<!-- isoreceived="20141030214430" -->
<!-- sent="Thu, 30 Oct 2014 15:44:29 -0600" -->
<!-- isosent="20141030214429" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="20141030214429.GI7441_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B979E7D0-F0B9-499E-B0B9-DE3D50DA8DBF_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 17:44:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25648.php">Brock Palen: "[OMPI users] orte-ps and orte-top behavior"</a>
<li><strong>Previous message:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I want to close the loop on this issue. 1.8.5 will address it in several
<br>
ways:
<br>
<p>&nbsp;- knem support in btl/sm has been fixed. A sanity check was disabling
<br>
&nbsp;&nbsp;&nbsp;knem during component registration. I wrote the sanity check before
<br>
&nbsp;&nbsp;&nbsp;the 1.7 release and didn't intend this side-effect.
<br>
<p>&nbsp;- vader now supports xpmem, cma, and knem. The best available
<br>
&nbsp;&nbsp;&nbsp;single-copy mechanism will be used. If multiple single-copy
<br>
&nbsp;&nbsp;&nbsp;mechanisms are available you can select which one you want to use are
<br>
&nbsp;&nbsp;&nbsp;runtime.
<br>
<p>More about the vader btl can be found here:
<br>
<a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/</a>
<br>
<p>-Nathan Hjelm
<br>
HPC-5, LANL
<br>
<p>On Fri, Oct 17, 2014 at 01:02:23PM -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt;      On Oct 17, 2014, at 12:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;      Hi Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Many thanks for looking into this and filing a bug report at 11:16PM!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Thanks to Aurelien, Ralph and Nathan for their help and clarifications
</span><br>
<span class="quotelev1">&gt;      also.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Related suggestion:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Add a note to the FAQ explaining that in OMPI 1.8
</span><br>
<span class="quotelev1">&gt;      the new (default) btl is vader (and what it is).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      It was a real surprise to me.
</span><br>
<span class="quotelev1">&gt;      If Aurelien Bouteiller didn't tell me about vader,
</span><br>
<span class="quotelev1">&gt;      I might have never realized it even existed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      That could be part of one of the already existent FAQs
</span><br>
<span class="quotelev1">&gt;      explaining how to select the btl.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Doubts (btl in OMPI 1.8):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      I still don't understand clearly the meaning and scope of vader
</span><br>
<span class="quotelev1">&gt;      being a &quot;default btl&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    We mean that it has a higher priority than the other shared memory
</span><br>
<span class="quotelev1">&gt;    implementation, and so it will be used for intra-node messaging by
</span><br>
<span class="quotelev1">&gt;    default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Which is the scope of this default: intra-node btl only perhaps?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Yes - strictly intra-node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Was there a default btl before vader, and which?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The &quot;sm&quot; btl was the default shared memory transport before vader
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Is vader the intra-node default only (i.e. replaces sm  by default),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      or does it somehow extend beyond node boundaries, and replaces (or
</span><br>
<span class="quotelev1">&gt;      brings in) network btls (openib,tcp,etc) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Nope - just intra-node
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      If I am running on several nodes, and want to use openib, not tcp,
</span><br>
<span class="quotelev1">&gt;      and, say, use vader, what is the right syntax?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      * nothing (OMPI will figure it out ... but what if you have
</span><br>
<span class="quotelev1">&gt;      IB,Ethernet,Myrinet,OpenGM, altogether?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    If you have higher-speed connections, we will pick the fastest for
</span><br>
<span class="quotelev1">&gt;    inter-node messaging as the &quot;default&quot; since we expect you would want the
</span><br>
<span class="quotelev1">&gt;    fastest possible transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      * -mca btl openib (and vader will come along automatically)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Among the ones you show, this would indeed be the likely choices (openib
</span><br>
<span class="quotelev1">&gt;    and vader)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      * -mca btl openib,self (and vader will come along automatically)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The &quot;self&quot; btl is *always* active as the loopback transport
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      * -mca btl openib,self,vader (because vader is default only for 1-node
</span><br>
<span class="quotelev1">&gt;      jobs)
</span><br>
<span class="quotelev1">&gt;      * something else (or several alternatives)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Whatever happened to the &quot;self&quot; btl in this new context?
</span><br>
<span class="quotelev1">&gt;      Gone? Still there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      Many thanks,
</span><br>
<span class="quotelev1">&gt;      Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      On 10/16/2014 11:16 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        On Oct 16, 2014, at 1:35 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          and on the MCA parameter file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          btl_sm_use_knem = 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        I think the logic enforcing this MCA param got broken when we revamped
</span><br>
<span class="quotelev1">&gt;        the MCA param system.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;          I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev1">&gt;          suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev1">&gt;          so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev1">&gt;          somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        It looks like this MCA param was also dropped when we revamped the MCA
</span><br>
<span class="quotelev1">&gt;        system.  Doh!  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        There's some deep mojo going on that is somehow causing knem to not be
</span><br>
<span class="quotelev1">&gt;        used; I'm too tired to understand the logic right now.  I just opened
</span><br>
<span class="quotelev1">&gt;        <a href="https://github.com/open-mpi/ompi/issues/239">https://github.com/open-mpi/ompi/issues/239</a> to track this issue --
</span><br>
<span class="quotelev1">&gt;        feel free to subscribe to the issue to get updates.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      _______________________________________________
</span><br>
<span class="quotelev1">&gt;      users mailing list
</span><br>
<span class="quotelev1">&gt;      users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;      Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;      Link to this
</span><br>
<span class="quotelev1">&gt;      post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25532.php">http://www.open-mpi.org/community/lists/users/2014/10/25532.php</a>
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25534.php">http://www.open-mpi.org/community/lists/users/2014/10/25534.php</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25647/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25648.php">Brock Palen: "[OMPI users] orte-ps and orte-top behavior"</a>
<li><strong>Previous message:</strong> <a href="25646.php">Sebastian Rettenberger: "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25649.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25655.php">Roland Fehrenbacher: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
