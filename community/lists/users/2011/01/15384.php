<?
$subject_val = "Re: [OMPI users] Help with some fundamentals";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 12:57:59 2011" -->
<!-- isoreceived="20110120175759" -->
<!-- sent="Thu, 20 Jan 2011 18:57:54 +0100" -->
<!-- isosent="20110120175754" -->
<!-- name="Nico Mittenzwey" -->
<!-- email="nico.mittenzwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help with some fundamentals" -->
<!-- id="4D3877A2.1000507_at_informatik.tu-chemnitz.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CACA1C4D94C3374F81C530763A09DBF036A85DFB0D_at_ex-adg-01.addinggroup.lan" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help with some fundamentals<br>
<strong>From:</strong> Nico Mittenzwey (<em>nico.mittenzwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 12:57:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15383.php">dj M: "[OMPI users] FW: Open MPI on HPUX"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/20/2011 05:50 PM, Olivier SANNIER wrote:
<br>
<span class="quotelev1">&gt; What is the behavior in case a node dies or becomes unreachable?
</span><br>
<span class="quotelev1">&gt; Your run will be aborted. However there is checkpoint/restart support for Linux <a href="http://www.open-mpi.org/faq/?category=ft">http://www.open-mpi.org/faq/?category=ft</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As this is a Win32 program, I'll have to take into account that there is only the&lt;  abort&gt;  behavior.
</span><br>
AFAIK yes
<br>
<span class="quotelev1">&gt; So there is no dynamic discovery of nodes available on the network. Unless, of course, if I was to write a tool that would do it before the actual run is started.
</span><br>
This is done by a batch system like PBS (torque) or SGE
<br>
<p><span class="quotelev1">&gt; Is there a monitoring tool that would give me indications of the status and health of the nodes?
</span><br>
<span class="quotelev1">&gt; This has nothing to do with MPI. Nagios or Ganglia can do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I was more thinking of a tool that would tell me a node is already performing a task, so that I can avoid having it oversubscribed.
</span><br>
This is also done by a batch system
<br>
<span class="quotelev1">&gt; I've started looking at beowulf clusters, and that lead me to PBS. Am I right in assuming that PBS (PBSPro or TORQUE) could be used to do the monitoring and the load balancing I thought of?
</span><br>
Yes, however the terms &quot;monitoring&quot; and &quot;load balancing&quot; are usually 
<br>
used in other contexts.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15385.php">David Mathog: "[OMPI users] Hair depleting issue with Ompi143 and one program"</a>
<li><strong>Previous message:</strong> <a href="15383.php">dj M: "[OMPI users] FW: Open MPI on HPUX"</a>
<li><strong>In reply to:</strong> <a href="15381.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Reply:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
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
