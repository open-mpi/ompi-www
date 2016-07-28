<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 05:58:29 2014" -->
<!-- isoreceived="20140516095829" -->
<!-- sent="Fri, 16 May 2014 11:57:55 +0200 (CEST)" -->
<!-- isosent="20140516095755" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="201405160957.s4G9vt4V021120_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
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
<strong>Subject:</strong> Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 05:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24413.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; This bug should be fixed in tonight's tarball, BTW.
</span><br>
...
<br>
<span class="quotelev2">&gt; &gt; It is an unrelated bug introduced by a different commit -
</span><br>
<span class="quotelev2">&gt; &gt; causing mpirun to segfault upon termination. The fact that
</span><br>
<span class="quotelev2">&gt; &gt; you got the hostname to run indicates that this original
</span><br>
<span class="quotelev2">&gt; &gt; fix works, so at least we know the connection logic is now okay.
</span><br>
<p>tyr fd1026 107 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.9a1r31784
<br>
tyr fd1026 108 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
tyr.informatik.hs-fulda.de
<br>
linpc1
<br>
sunpc1
<br>
tyr fd1026 109 
<br>
<p>Perfect! Thank you very much for your help. Tonight the current
<br>
version will be mirrored to my other machines, so that I can do
<br>
some more tests next week.
<br>
<p><p>tyr fd1026 103 ompi_info | grep &quot;MPI:&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI: 1.8.2a1r31785
<br>
tyr fd1026 104 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
<br>
[tyr.informatik.hs-fulda.de:21100] [[62538,0],0] CONNECTION
<br>
&nbsp;&nbsp;REQUEST ON UNKNOWN INTERFACE
<br>
[tyr.informatik.hs-fulda.de:21100] [[62538,0],0] CONNECTION
<br>
&nbsp;&nbsp;REQUEST ON UNKNOWN INTERFACE
<br>
^CKilled by signal 2.
<br>
Killed by signal 2.
<br>
tyr fd1026 105 
<br>
<p>Can you fix the connection logic for 1.8.2 as well? Thank you
<br>
very much for your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Previous message:</strong> <a href="24413.php">Ralph Castain: "Re: [OMPI users] Using PMI as RTE component"</a>
<li><strong>Maybe in reply to:</strong> <a href="24351.php">Siegmar Gross: "[OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>Reply:</strong> <a href="24415.php">Ralph Castain: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
