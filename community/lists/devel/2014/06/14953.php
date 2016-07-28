<?
$subject_val = "Re: [OMPI devel] Intermittent hangs when exiting with error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  2 10:58:38 2014" -->
<!-- isoreceived="20140602145838" -->
<!-- sent="Mon, 2 Jun 2014 23:58:36 +0900" -->
<!-- isosent="20140602145836" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Intermittent hangs when exiting with error" -->
<!-- id="CAAkFZ5sr21oVE0TYxhN_BLKdfmMheTe6+eX+OLwndtT_fEg+5g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CF872D54-5625-4EA9-A073-D0213FE092CA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Intermittent hangs when exiting with error<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-02 10:58:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14946.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Jeff,
<br>
<p>from the FAQ, openmpi should work on nodes who have different number of IB
<br>
ports (at least since v1.2)
<br>
<p>about IB ports on the same subnet, all i was able to find is explanation
<br>
about why i get this warning :
<br>
<p>WARNING: There are more than one active ports on host '%s', but the
<br>
default subnet GID prefix was detected on more than one of these
<br>
ports.  If these ports are connected to different physical OFA
<br>
networks, this configuration will fail in Open MPI.  This version of
<br>
Open MPI requires that every physically separate OFA subnet that is
<br>
used between connected MPI processes must have different subnet ID
<br>
values.
<br>
<p><p>i really had to read between the lines (and thanks to your email) in order
<br>
to figure out IB ports on the same subnet is not the most optimal way.
<br>
<p>the following sentence is even more confusing :
<br>
<p>&quot;All this being said, note that there are valid network configurations
<br>
where multiple ports on the same host can share the same subnet ID value.
<br>
For example, two ports from a single host can be connected to the
<br>
*same* network
<br>
as a bandwidth multiplier or a high-availability configuration.&quot;
<br>
<p><p>from a pragmatic approach, and this is not OpenMPI specific, the two IB
<br>
ports of the servers are physically connected to the same IB switch.
<br>
<p>/* i would guess the NVIDIA Ivy cluster is similar in that sense */
<br>
<p>a few years ago (e.g. last time i checked), using different subnets was
<br>
possible by partitionning the switch via OpenSM. IMHO this was not an easy
<br>
to maintain solution (e.g. if a switch is replaced, the opensm config had
<br>
to be changed as well).
<br>
<p>is there a simple and free way today to put ports physically connected to
<br>
the same switch in different subnets ?
<br>
<p>/* such as tagged vlan in Ethernet =&gt; simple switch configuration, and the
<br>
host can decide by itself in which vlan a port must be */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Mon, Jun 2, 2014 at 8:50 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  I'm AFK but let me reply about the IB thing: double ports/multi rail is
</span><br>
<span class="quotelev1">&gt; a good thing. It's not a good thing if they're on the same subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Check the FAQ - <a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a> - I
</span><br>
<span class="quotelev1">&gt; can't see it well enough on the small screen of my phone, but I think
</span><br>
<span class="quotelev1">&gt; there's a q on there about how multi rail destinations are chosen.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Spoiler: put your ports in different subnets so that OMPI makes
</span><br>
<span class="quotelev1">&gt; deterministic choices.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent from my phone. No type good.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14953/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14954.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>In reply to:</strong> <a href="14946.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14952.php">Ralph Castain: "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
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
