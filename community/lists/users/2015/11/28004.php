<?
$subject_val = "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 12:42:52 2015" -->
<!-- isoreceived="20151105174252" -->
<!-- sent="Thu, 05 Nov 2015 17:42:47 +0000" -->
<!-- isosent="20151105174247" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel" -->
<!-- id="877flwny08.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="5639429F.6080202_at_fau.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-05 12:42:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>In reply to:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fabian Wein &lt;fabian.wein_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev2">&gt;&gt;    # hwloc-bind node1:1 hwloc-ps | grep hwloc
</span><br>
<span class="quotelev2">&gt;&gt;    13425	NUMANode:1		hwloc-ps
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what you mean:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opt/hwloc-1.11.1/bin/hwloc-bind
</span><br>
<span class="quotelev1">&gt; /opt/hwloc-1.11.1/bin/hwloc-bind: nothing to do!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/hwloc-1.11.1/bin/hwloc-bind node1:1
</span><br>
<span class="quotelev1">&gt; /opt/hwloc-1.11.1/bin/hwloc-bind: nothing to do!
</span><br>
<p>Yes, because it's meant to run a program.
<br>
<p><span class="quotelev1">&gt; /opt/hwloc-1.11.1/bin/hwloc-bind node1:1 hwloc-ps
</span><br>
<span class="quotelev1">&gt; -&gt; no output
</span><br>
<p>That's expected if you only have one numanode.  Otherwise you have a
<br>
broken hwloc.
<br>
<p><span class="quotelev1">&gt; therefore nothing to grep. I have no idea what hwloc-ps does. There is
</span><br>
<span class="quotelev1">&gt; no man page and --help doesn't help.
</span><br>
<p>There would be a man page if it was installed properly.  The Ubuntu
<br>
package includes one.  There is plenty of information on the hwloc site
<br>
I referred to.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    # grep -m1 model\ name /proc/cpuinfo
</span><br>
<span class="quotelev2">&gt;&gt;    model name	: AMD Opteron(TM) Processor 6276
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running hwloc-ps under mpirun should show the default binding anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't understand what you man with tha.
</span><br>
<p>&nbsp;&nbsp;$ mpirun -n 1 hwloc-ps28689	Core:0		hwloc-ps
<br>
<p>You really should consult a local expert.  I'd, shall we say, ask
<br>
questions about users running random MPI versions on our systems.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28005.php">Dave Love: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="28003.php">Jason Cook: "[OMPI users] Open MPI CPU Binding Related Questions."</a>
<li><strong>In reply to:</strong> <a href="27984.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27971.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
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
