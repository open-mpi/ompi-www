<?
$subject_val = "Re: [hwloc-devel] hwloc-distrib --among";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 16 16:18:33 2010" -->
<!-- isoreceived="20101116211833" -->
<!-- sent="Tue, 16 Nov 2010 22:18:26 +0100" -->
<!-- isosent="20101116211826" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-distrib --among" -->
<!-- id="20101116211826.GL5862_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1033080836.210059.1289939821281.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-distrib --among<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-16 16:18:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jirka Hladky, le Tue 16 Nov 2010 21:37:01 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; There was some discussion about hwloc-distrib --among
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I understand it correctly, --among accepts one of 
</span><br>
<span class="quotelev1">&gt; {pu,core,socket,node,machine}
</span><br>
<p>I actually didn't know about the --among option. It seems a bit
<br>
difficult to comprehend without reading the source code...  Actually I'm
<br>
not even sure about the cases where it is useful. In my understanding
<br>
of the english word, &quot;among&quot; designates the set of objects to be picked
<br>
from, i.e. an horizontal selection in the case of the hwloc tree, while
<br>
in hwloc-distrib it's currently a vertical selection: where to start
<br>
distributing from. That's probably why you do not understand the
<br>
results:
<br>
<p><span class="quotelev1">&gt; $ hwloc-calc --po --proclist $(hwloc-distrib --single --among core 4)
</span><br>
<span class="quotelev1">&gt; 0,2,4,6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Among Socket:1 ??
</span><br>
<p>Yes, because here &quot;--among core&quot; requests to distribute 4 elements
<br>
between cores, thus selecting the first 4 cores hwloc finds.
<br>
<p><span class="quotelev1">&gt; $ hwloc-calc --po --proclist $(hwloc-distrib --single --among pu 4)
</span><br>
<span class="quotelev1">&gt; 0,8,2,10
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Among Core:0 and Core:1 ??
</span><br>
<p>Same here, distributing 4 elements between the PUs, thus selecting the
<br>
first 4 PUs.
<br>
<p>I'd say that --among should indeed be the horizontal portion of the
<br>
machine to distribute on, and the existing --among option should be
<br>
renamed into --from, and a --to option could be added to stop the
<br>
hierarchical distribution to a given object type.
<br>
<p><span class="quotelev1">&gt; I have tried to use various --among and --ignore options to distribute 8 
</span><br>
<span class="quotelev1">&gt; parallel jobs on a box so that each job is running on one socket.
</span><br>
<p>That would then be
<br>
<p>hwloc-distrib --to socket
<br>
<p>to make jobs distributed down from the top machine object to sockets,
<br>
but no further. --among (as I described above) would be useful if you
<br>
wanted to restrict the distribution to some part of the machine.
<br>
<p><span class="quotelev1">&gt; I was not able to achieve this.
</span><br>
<p>Yes, currently the distribution function will always continue
<br>
distributing recursively as long as there are more elements to
<br>
distribute than architecture elements in the machine.
<br>
<p>Also note that currently the hwloc_distribute() function doesn't take
<br>
e.g. the number of PUs into account when splitting elements over the
<br>
hierarchy. It was more a demonstration example than something to be used
<br>
as is. We can however extend it, we just need to know what's desired.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1483.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Previous message:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Maybe in reply to:</strong> <a href="1481.php">Jirka Hladky: "[hwloc-devel] hwloc-distrib --among"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
<li><strong>Reply:</strong> <a href="1484.php">Brice Goglin: "Re: [hwloc-devel] hwloc-distrib --among"</a>
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
