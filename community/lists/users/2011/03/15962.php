<?
$subject_val = "[OMPI users] &quot;Re:  RoCE (IBoE) &amp; OpenMPI&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 22 10:08:17 2011" -->
<!-- isoreceived="20110322140817" -->
<!-- sent="Tue, 22 Mar 2011 16:07:25 +0200" -->
<!-- isosent="20110322140725" -->
<!-- name="Eli Cohen" -->
<!-- email="eli_at_[hidden]" -->
<!-- subject="[OMPI users] &amp;quot;Re:  RoCE (IBoE) &amp;amp; OpenMPI&amp;quot;" -->
<!-- id="AANLkTik=zWNZQ5u45LciGQNm8VzwqgJyviCeN2why8Ka_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] &quot;Re:  RoCE (IBoE) &amp; OpenMPI&quot;<br>
<strong>From:</strong> Eli Cohen (<em>eli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-22 10:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15963.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Previous message:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
this discussion has been brought to my attention so I joined this
<br>
mailing list to try to help.
<br>
As you already stated that the SL maps correctly to PCP when using
<br>
ibv_rc_pingpong, I assume OpenMPI works over rdma_cm. In that cases
<br>
please note the following:
<br>
1. If you're using OFED-1.5.2, than if if the rdma_cm socket is bound
<br>
to VLAN net device, all egress traffic will bear a default priority of
<br>
3.
<br>
2. The default priority is controlled by a module parameter to
<br>
rdma_cm.ko named def_prec2sl.
<br>
3. You may change the priority on a per socket basis (overriding the
<br>
module parameter) by using setsockopt() to set the option
<br>
RDMA_OPTION_ID_TOS to the required value of the TOS.
<br>
4. The TOS is mapped to SL according to the following formula: SL = TOS &gt;&gt; 5
<br>
<p>I hope that clears things.
<br>
<p><span class="quotelev1">&gt; Late yesterday I did have a chance to test the patch Jeff provided
</span><br>
<span class="quotelev1">&gt; (against 1.4.3 - testing 1.5.x is on the docket for today). While it
</span><br>
<span class="quotelev1">&gt; works, in that I can specify a gid_index, it doesn't do everything
</span><br>
<span class="quotelev1">&gt; required - my traffic won't match a lossless CoS on the ethernet
</span><br>
<span class="quotelev1">&gt; switch. Specifying a GID is only half of it; I really need to also
</span><br>
<span class="quotelev1">&gt; specify a service level.
</span><br>
<span class="quotelev1">&gt; The bottom 3 bits of the IB SL are mapped to ethernet's PCP bits in
</span><br>
<span class="quotelev1">&gt; the VLAN tag. With a non-default gid, I can select an available VLAN
</span><br>
<span class="quotelev1">&gt; (so RoCE's packets will include the PCP bits), but the only way to
</span><br>
<span class="quotelev1">&gt; specify a priority is to use an SL. So far, the only RoCE-enabled app
</span><br>
<span class="quotelev1">&gt; I've been able to make work correctly (such that traffic matches a
</span><br>
<span class="quotelev1">&gt; lossless CoS on the switch) is ibv_rc_pingpong - and then, I need to
</span><br>
<span class="quotelev1">&gt; use both a specific GID and a specific SL.
</span><br>
<span class="quotelev1">&gt; The slides Pavel found seem a little misleading to me. The VLAN isn't
</span><br>
<span class="quotelev1">&gt; determined by bound netdev; all VLAN netdevs map to the same IB
</span><br>
<span class="quotelev1">&gt; adapter for RoCE. VLAN is determined by gid index. Also, the SL
</span><br>
<span class="quotelev1">&gt; isn't determined by a set kernel policy; it's provided via the IB
</span><br>
<span class="quotelev1">&gt; interfaces. As near as I can tell from Mellanox's documentation, OFED
</span><br>
<span class="quotelev1">&gt; test apps, and the driver source, a RoCE adapter is an Infiniband card
</span><br>
<span class="quotelev1">&gt; in almost all respects (even more so than an iWARP adapter).
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15963.php">Jeff Squyres: "Re: [OMPI users] Displaying MAIN in Totalview"</a>
<li><strong>Previous message:</strong> <a href="15961.php">Ralph Castain: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3 (Tim Prince)"</a>
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
