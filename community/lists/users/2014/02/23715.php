<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 28 10:11:45 2014" -->
<!-- isoreceived="20140228151145" -->
<!-- sent="Fri, 28 Feb 2014 07:11:40 -0800" -->
<!-- isosent="20140228151140" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="EF7B73B1-6473-4B97-A57C-3485704D3C5C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="531049A6.7090405_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-28 10:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 28, 2014, at 12:32 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Le 28/02/2014 02:48, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Remember, hwloc doesn't actually &quot;sense&quot; hardware - it just parses files in the /proc area. So if something is garbled in those files, hwloc will report errors. Doesn't mean anything is wrong with the hardware at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record, that's not really true:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc looks at /sys (and a bit /proc files), but it also uses cpuid
</span><br>
<span class="quotelev1">&gt; instructions. 90% of the times, the former is better because the kernel
</span><br>
<span class="quotelev1">&gt; already took care of cleaning up the hardware mess and reporting
</span><br>
<span class="quotelev1">&gt; useful/correct info in /proc and /sys. Sometimes the kernel is too old
</span><br>
<span class="quotelev1">&gt; and it misses some hardware quirks (like L1i sharing on Gus' machine)
</span><br>
<span class="quotelev1">&gt; causing /sys files to be incompatible.
</span><br>
<p>Fair enough - but how do you know when to probe the BIOS and when to trust what is in the file?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the end, the vast majority of problems come from buggy BIOS, and
</span><br>
<span class="quotelev1">&gt; these cause both cpuid and kernel to report invalid info. Aside of
</span><br>
<span class="quotelev1">&gt; upgrading the BIOS, the only solution there is to replace the topology
</span><br>
<span class="quotelev1">&gt; with a correct XML one.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23716.php">Beichuan Yan: "[OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="23714.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23723.php">Gus Correa: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
