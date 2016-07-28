<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 15:06:24 2014" -->
<!-- isoreceived="20141017190624" -->
<!-- sent="Fri, 17 Oct 2014 15:06:17 -0400" -->
<!-- isosent="20141017190617" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="544168A9.8030308_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FEBA3487-317A-47D6-93AA-43F90DC9A277_at_cisco.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-17 15:06:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25533.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Many thanks for looking into this and filing a bug report at 11:16PM!
<br>
<p>Thanks to Aurelien, Ralph and Nathan for their help and clarifications
<br>
also.
<br>
<p>**
<br>
<p>Related suggestion:
<br>
<p>Add a note to the FAQ explaining that in OMPI 1.8
<br>
the new (default) btl is vader (and what it is).
<br>
<p>It was a real surprise to me.
<br>
If Aurelien Bouteiller didn't tell me about vader,
<br>
I might have never realized it even existed.
<br>
<p>That could be part of one of the already existent FAQs
<br>
explaining how to select the btl.
<br>
<p>**
<br>
<p>Doubts (btl in OMPI 1.8):
<br>
<p>I still don't understand clearly the meaning and scope of vader
<br>
being a &quot;default btl&quot;.
<br>
Which is the scope of this default: intra-node btl only perhaps?
<br>
Was there a default btl before vader, and which?
<br>
Is vader the intra-node default only (i.e. replaces sm  by default),
<br>
or does it somehow extend beyond node boundaries, and replaces (or 
<br>
brings in) network btls (openib,tcp,etc) ?
<br>
<p>If I am running on several nodes, and want to use openib, not tcp,
<br>
and, say, use vader, what is the right syntax?
<br>
<p>* nothing (OMPI will figure it out ... but what if you have 
<br>
IB,Ethernet,Myrinet,OpenGM, altogether?)
<br>
* -mca btl openib (and vader will come along automatically)
<br>
* -mca btl openib,self (and vader will come along automatically)
<br>
* -mca btl openib,self,vader (because vader is default only for 1-node jobs)
<br>
* something else (or several alternatives)
<br>
<p>Whatever happened to the &quot;self&quot; btl in this new context?
<br>
Gone? Still there?
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<p>On 10/16/2014 11:16 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Oct 16, 2014, at 1:35 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and on the MCA parameter file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; btl_sm_use_knem = 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the logic enforcing this MCA param got broken when we revamped the MCA param system.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev2">&gt;&gt; suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev2">&gt;&gt; so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev2">&gt;&gt; somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like this MCA param was also dropped when we revamped the MCA system.  Doh!  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's some deep mojo going on that is somehow causing knem to not be used; I'm too tired to understand the logic right now.  I just opened <a href="https://github.com/open-mpi/ompi/issues/239">https://github.com/open-mpi/ompi/issues/239</a> to track this issue -- feel free to subscribe to the issue to get updates.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25533.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>Previous message:</strong> <a href="25531.php">Gus Correa: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<li><strong>In reply to:</strong> <a href="25525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25534.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
