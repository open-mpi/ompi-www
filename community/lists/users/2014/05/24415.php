<?
$subject_val = "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 09:04:10 2014" -->
<!-- isoreceived="20140516130410" -->
<!-- sent="Fri, 16 May 2014 06:02:18 -0700" -->
<!-- isosent="20140516130218" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742" -->
<!-- id="4B6B21A0-B8CE-4CA5-A37D-48055A3B749E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201405160957.s4G9vt4V021120_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 09:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Done - will be in nightly 1.8.2 tarball generated later today.
<br>
<p><p>On May 16, 2014, at 2:57 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This bug should be fixed in tonight's tarball, BTW.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is an unrelated bug introduced by a different commit -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; causing mpirun to segfault upon termination. The fact that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you got the hostname to run indicates that this original
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fix works, so at least we know the connection logic is now okay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 107 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.9a1r31784
</span><br>
<span class="quotelev1">&gt; tyr fd1026 108 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; tyr fd1026 109 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perfect! Thank you very much for your help. Tonight the current
</span><br>
<span class="quotelev1">&gt; version will be mirrored to my other machines, so that I can do
</span><br>
<span class="quotelev1">&gt; some more tests next week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr fd1026 103 ompi_info | grep &quot;MPI:&quot;
</span><br>
<span class="quotelev1">&gt;                Open MPI: 1.8.2a1r31785
</span><br>
<span class="quotelev1">&gt; tyr fd1026 104 mpiexec -np 3 --host tyr,sunpc1,linpc1 hostname
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21100] [[62538,0],0] CONNECTION
</span><br>
<span class="quotelev1">&gt;  REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev1">&gt; [tyr.informatik.hs-fulda.de:21100] [[62538,0],0] CONNECTION
</span><br>
<span class="quotelev1">&gt;  REQUEST ON UNKNOWN INTERFACE
</span><br>
<span class="quotelev1">&gt; ^CKilled by signal 2.
</span><br>
<span class="quotelev1">&gt; Killed by signal 2.
</span><br>
<span class="quotelev1">&gt; tyr fd1026 105 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you fix the connection logic for 1.8.2 as well? Thank you
</span><br>
<span class="quotelev1">&gt; very much for your help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<li><strong>Next message:</strong> <a href="24416.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
<li><strong>In reply to:</strong> <a href="24414.php">Siegmar Gross: "Re: [OMPI users] unknown interface on openmpi-1.8.2a1r31742"</a>
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
