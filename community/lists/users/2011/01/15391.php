<?
$subject_val = "Re: [OMPI users] OpenMPI does not see other nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 21 08:58:07 2011" -->
<!-- isoreceived="20110121135807" -->
<!-- sent="Fri, 21 Jan 2011 14:58:02 +0100" -->
<!-- isosent="20110121135802" -->
<!-- name="Nico Mittenzwey" -->
<!-- email="nico.mittenzwey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI does not see other nodes" -->
<!-- id="4D3990EA.5020907_at_informatik.tu-chemnitz.de" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="11257436.15973.1295609195802.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI does not see other nodes<br>
<strong>From:</strong> Nico Mittenzwey (<em>nico.mittenzwey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-21 08:58:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/21/2011 12:26 PM, Steffen Brinkmann wrote:
<br>
<span class="quotelev1">&gt; /home_dir/openmpi-1.4.3_installation/bin/mpirun -n 32 hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; returns 32 times the same node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did I do wrong???
</span><br>
<p>You need to tell OpenMPI on which hosts to run - for example by suppling 
<br>
a host file:
<br>
<p>/home_dir/openmpi-1.4.3_installation/bin/mpirun -n 32 --hostfile 
<br>
./myhosts hostname
<br>
<p>But you should have courses on that in Stuttgart.... ;) SCNR
<br>
<p>Nico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15392.php">Olivier SANNIER: "Re: [OMPI users] Help with some fundamentals"</a>
<li><strong>Previous message:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
<li><strong>In reply to:</strong> <a href="15390.php">Steffen Brinkmann: "[OMPI users] OpenMPI does not see other nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15396.php">Gus Correa: "Re: [OMPI users] OpenMPI does not see other nodes"</a>
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
