<?
$subject_val = "Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  7 17:12:09 2011" -->
<!-- isoreceived="20111207221209" -->
<!-- sent="Wed, 07 Dec 2011 23:12:03 +0100" -->
<!-- isosent="20111207221203" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'" -->
<!-- id="4EDFE4B3.8070800_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAHwLALPWBpAEnh3i5opJT6TDPfN+XQH3trMtCX0aKmDXiOje5g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [hwloc-devel] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-07 17:12:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17913.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 07/12/2011 23:00, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; We are using hwloc-1.2.2 for topology binding in Open Grid
</span><br>
<span class="quotelev1">&gt; Scheduler/Grid Engine 2011.11, and a user is encountering similar
</span><br>
<span class="quotelev1">&gt; issues:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://gridengine.org/pipermail/users/2011-December/002126.html">http://gridengine.org/pipermail/users/2011-December/002126.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In Open MPI, there is the configure switch &quot;--without-libnuma&quot; to turn
</span><br>
<span class="quotelev1">&gt; libnuma off. But since Open MPI uses hwloc internally, I think there
</span><br>
<span class="quotelev1">&gt; still is a dependency on libnuma even if &quot;--without-libnuma&quot; is used
</span><br>
<span class="quotelev1">&gt; to build Open MPI. Also, as hwloc does not have a configure switch
</span><br>
<span class="quotelev1">&gt; that disables libnuma, seems like libnuma is always used when the
</span><br>
<span class="quotelev1">&gt; hwloc configure script detects its presence.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So my question is, are there plans to add a configure switch in hwloc
</span><br>
<span class="quotelev1">&gt; to disable libnuma??
</span><br>
<p>Hello,
<br>
There's no plan, but that's certainly possible if multiple people keep
<br>
facing this issue.
<br>
Ideally, I'd rather have configure disable libnuma automagically when
<br>
it's needed statically and only available dynamically. But I don't know
<br>
how to do that.
<br>
We're talking about doing a hwloc 1.3.1 before christmas. I'll see if I
<br>
can work on this, and provide some backport patches for 1.2.2.
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17913.php">John Doe: "Re: [OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<li><strong>In reply to:</strong> <a href="17911.php">Rayson Ho: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and 'get_mempolicy'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/09/17472.php">Brice Goglin: "Re: [OMPI users] EXTERNAL: Re: Unresolved reference 'mbind' and	'get_mempolicy'"</a>
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
