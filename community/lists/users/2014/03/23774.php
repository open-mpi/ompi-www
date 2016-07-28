<?
$subject_val = "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  4 16:06:25 2014" -->
<!-- isoreceived="20140304210625" -->
<!-- sent="Tue, 04 Mar 2014 16:06:24 -0500" -->
<!-- isosent="20140304210624" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5" -->
<!-- id="53164050.2010606_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5314FD01.4090703_at_inria.fr" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-04 16:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23775.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23773.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/03/2014 05:06 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 03/03/2014 23:02, Gus Correa a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; I rebooted the node and ran hwloc-gather-topology again.
</span><br>
<span class="quotelev2">&gt;&gt; This turn it didn't throw any errors on the terminal window,
</span><br>
<span class="quotelev2">&gt;&gt; which may be a good sign.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [root_at_node14 ~]# hwloc-gather-topology /tmp/`date
</span><br>
<span class="quotelev2">&gt;&gt; +&quot;%Y%m%d%H%M&quot;`.$(uname -n)
</span><br>
<span class="quotelev2">&gt;&gt; Hierarchy gathered in /tmp/201403031639.node14.tar.bz2 and kept in
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/tmp.FM97IQCCKc/201403031639.node14/
</span><br>
<span class="quotelev2">&gt;&gt; Expected topology output stored in /tmp/201403031639.node14.output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I attach the diagnostic files.
</span><br>
<span class="quotelev2">&gt;&gt; Was the problem fixed with the processor re-seating, or is it still
</span><br>
<span class="quotelev2">&gt;&gt; there?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Everything looks good now. Looks like the problem is gone. Something bad
</span><br>
<span class="quotelev1">&gt; happened somewhere before you repluged the processor, we'll never know
</span><br>
<span class="quotelev1">&gt; exactly what :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>Hi Brice
<br>
<p>Reporting back to you that I ran the OMPI connectivity_c.c example on
<br>
node14, binding to core, and everything worked fine.
<br>
So, I am moving node14 back to production.
<br>
<p>When I removed one of node14's processors from the socket,
<br>
I saw a sub-millimeter sized bit of dust, which I then blew away.
<br>
I am not sure if it was there already, or made it in when I
<br>
took the processor out.
<br>
In any case, that tubt but if dust is the only suspect
<br>
I have for causing the problem.
<br>
Computer rooms need to be vacuum cleaned.  Occasionally at least.  :)
<br>
<p>Many thanks for your help.
<br>
This nowhere land between HW and SW is always a slippery road,
<br>
and I am glad that you guided me to a solution.
<br>
<p>Regards,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23775.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<li><strong>Previous message:</strong> <a href="23773.php">Saliya Ekanayake: "Re: [OMPI users] bind-to core warning even with numactl"</a>
<li><strong>In reply to:</strong> <a href="23750.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23713.php">Brice Goglin: "Re: [OMPI users] hwloc error in topology.c in OMPI 1.6.5"</a>
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
