<?
$subject_val = "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 15 09:06:39 2014" -->
<!-- isoreceived="20140815130639" -->
<!-- sent="Fri, 15 Aug 2014 15:06:37 +0200" -->
<!-- isosent="20140815130637" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error" -->
<!-- id="53EE05DD.2070405_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20140815135943.215a86e2_at_antares" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-15 09:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 15/08/2014 14:59, Andrej Prsa a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Your kernel looks recent enough, can you try upgrading your BIOS ? You
</span><br>
<span class="quotelev2">&gt;&gt; have version 3.0b and there's a 3.5 version at
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.supermicro.com/aplus/motherboard/opteron6000/sr56x0/h8qg6-f.cfm">http://www.supermicro.com/aplus/motherboard/opteron6000/sr56x0/h8qg6-f.cfm</a>
</span><br>
<span class="quotelev1">&gt; Flashing bios is not the easiest option for us since I'd need to bring
</span><br>
<span class="quotelev1">&gt; down the whole cluster that is in heavy use. Also, we're running only
</span><br>
<span class="quotelev1">&gt; linux and the bios file on the Supermicro website seems to be for
</span><br>
<span class="quotelev1">&gt; windows only. I might be able to get around that using biosdisk,
</span><br>
<span class="quotelev1">&gt; though. Are there any adverse side-effects from this bios bug on
</span><br>
<span class="quotelev1">&gt; hwloc/mpi operation? I can certainly try and schedule the bios flash
</span><br>
<span class="quotelev1">&gt; if you think it's worth it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Andrej
</span><br>
<p>Most people don't care about cache when binding with MPI, so you may
<br>
just ignore the issue and hide the message by setting
<br>
HWLOC_HIDE_ERRORS=1 in the environment. It may work fine (assuming MPIs
<br>
don't have troubles with asymmetric topologies where there are some
<br>
missing L3).
<br>
<p>Otherwise, hwloc can load the topology from XML. So we'll just need to
<br>
generate a fixed topology, export it to XML and set an environment
<br>
variable to have hwloc load from there. A single file may even be enough
<br>
for all similar nodes assuming your MPI and/or applications don't look
<br>
in deep details of hwloc topologies.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Previous message:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>In reply to:</strong> <a href="1050.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
<li><strong>Reply:</strong> <a href="1052.php">Andrej Prsa: "Re: [hwloc-users] [WARNING: A/V UNSCANNABLE] hwloc error"</a>
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
