<?
$subject_val = "Re: [OMPI devel] [RFC] Low pressure OPAL progress";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 17 09:01:29 2009" -->
<!-- isoreceived="20090617130129" -->
<!-- sent="Wed, 17 Jun 2009 14:01:21 +0100" -->
<!-- isosent="20090617130121" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Low pressure OPAL progress" -->
<!-- id="1245243681.4075.110.camel_at_localhost.localdomain" -->
<!-- inreplyto="4A2E4762.4090304_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Low pressure OPAL progress<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-17 09:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6254.php">刚 王: "[OMPI devel] Fault Tolerant OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6252.php">Brice Goglin: "[OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6200.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-06-09 at 07:28 -0400, Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; The biggest issue is coming up with a 
</span><br>
<span class="quotelev1">&gt; way to have blocks on the SM btl converted to the system poll call 
</span><br>
<span class="quotelev1">&gt; without requiring a socket write for every packet.
</span><br>
<p>For what it's worth you don't need a socket write every (local) packet,
<br>
all you need to send your local peers a message when you are about to
<br>
sleep.  This can be implemented with a shared memory word so no implicit
<br>
comms is required.  The sender can then send a message using whatever
<br>
means it does currently, check if the bit is set send a &quot;wakeup&quot; message
<br>
via a socket if the remote process is sleeping.
<br>
<p>You need to be careful to get the ordering right or you end up with
<br>
deadlocks and you need to establish a &quot;remote wakeup&quot; mechanism although
<br>
this is easily done with sockets.  You don't even need to communicate
<br>
over the socket, all it's for is to cause your peer to return from
<br>
poll/select so it can query the shared memory state.  Signals would also
<br>
likely work however they tend to present other problems in my
<br>
experience.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6254.php">刚 王: "[OMPI devel] Fault Tolerant OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6252.php">Brice Goglin: "[OMPI devel] connect management for multirail (Open-)MX"</a>
<li><strong>In reply to:</strong> <a href="6195.php">Terry Dontje: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6200.php">Ashley Pittman: "Re: [OMPI devel] [RFC] Low pressure OPAL progress"</a>
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
