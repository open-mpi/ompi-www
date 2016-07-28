<?
$subject_val = "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 23 05:22:00 2011" -->
<!-- isoreceived="20111223102200" -->
<!-- sent="Fri, 23 Dec 2011 11:21:11 +0100" -->
<!-- isosent="20111223102111" -->
<!-- name="Beat Rubischon" -->
<!-- email="beat_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?" -->
<!-- id="4EF45617.1080300_at_0x1b.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4EF37A39.4020106_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?<br>
<strong>From:</strong> Beat Rubischon (<em>beat_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-23 05:21:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>In reply to:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Paul!
<br>
<p>On 22.12.11 19:43, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; Well. Any suggestions? Does OpenMPI ever able to use DAPL 2.0 on Linux?
</span><br>
<p>I don't think so. Even Intel dropped the need for DAPL in their 4.x
<br>
release. It's an extra layer between the IB stack and the MPI which
<br>
basically adds additional complexity and latency. According to the
<br>
marketing numbers the 4.x releases using verbs are performing
<br>
significantly better then the 3.x releases using DAPL.
<br>
<p>In my experience Intel's MPI (and IBM aka Platform aka HP-MPI) performs
<br>
often better then OpenMPI on top of Infiniband. Similar in flexibility
<br>
and with a wide range for optimizations to your specific code. Of course
<br>
it's expensive to use a commercial MPI and it's a blackbox. The main
<br>
reason why I usually use OpenMPI when preparing installations for my
<br>
customers.
<br>
<p>My recommendation for you: Use OpenMPI with verbs to have a clean and
<br>
free MPI on your cluster with easy interfaces to your job scheduler. Or
<br>
buy a commercial MPI, invest a lot of manpower for a tight integration
<br>
and win an improved latency and/or throughput.
<br>
<p>Beat
<br>
<p><pre>
-- 
     \|/                           Beat Rubischon &lt;beat_at_[hidden]&gt;
   ( 0-0 )                             <a href="http://www.0x1b.ch/~beat/">http://www.0x1b.ch/~beat/</a>
oOO--(_)--OOo---------------------------------------------------
Meine Erlebnisse, Gedanken und Traeume: <a href="http://www.0x1b.ch/blog/">http://www.0x1b.ch/blog/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18047.php">Eric Feng: "[OMPI users] Openmpi performance issue"</a>
<li><strong>Previous message:</strong> <a href="18045.php">Jed Brown: "Re: [OMPI users] One-sided bugs"</a>
<li><strong>In reply to:</strong> <a href="18043.php">Paul Kapinos: "Re: [OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
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
