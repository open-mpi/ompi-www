<?
$subject_val = "Re: [OMPI users] Problem with linking on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 18:57:17 2009" -->
<!-- isoreceived="20090819225717" -->
<!-- sent="Thu, 20 Aug 2009 00:57:09 +0200" -->
<!-- isosent="20090819225709" -->
<!-- name="tomek" -->
<!-- email="t.koziara_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with linking on OS X" -->
<!-- id="D6846880-50C4-4C0E-916F-F855B7529831_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="846B5410-F1F7-45FF-9B36-897E6F8ED401_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with linking on OS X<br>
<strong>From:</strong> tomek (<em>t.koziara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 18:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>Previous message:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10443.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10443.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK - I have fixed it by including -L/opt/openmpi/lib at the very  
<br>
beginning of mpicc ... -L/opt/openmpi/lib -o app.exe the rest ...
<br>
<p>But something is wrong with dyld anyhow.
<br>
<p>On 19 Aug 2009, at 21:04, Jody Klymak wrote:
<br>
<p><span class="quotelev1">&gt; Hi Tomek,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using 10.5.7, and just went through a painful process that we  
</span><br>
<span class="quotelev1">&gt; thought was library related (but it wasn't), so I'll give my less- 
</span><br>
<span class="quotelev1">&gt; than-learned response, and if you sill have difficulties hopefully  
</span><br>
<span class="quotelev1">&gt; others will chime in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What is the result of &quot;which mpicc&quot; (or whatever you are using for  
</span><br>
<span class="quotelev1">&gt; your compiling/linking?  I'm pretty sure that's where the library  
</span><br>
<span class="quotelev1">&gt; paths get set, and if you are calling /usr/bin/mpicc you will get  
</span><br>
<span class="quotelev1">&gt; the wrong library paths in the executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 19, 2009, at  10:57 AM, tomek wrote:
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10442.php">tomek: "[OMPI users] OpenMPI extremely slow with progress threads"</a>
<li><strong>Previous message:</strong> <a href="10440.php">Allen Barnett: "Re: [OMPI users] OpenMPI 1.3 Infiniband Hang"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10443.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
<li><strong>Reply:</strong> <a href="10443.php">Jody Klymak: "Re: [OMPI users] Problem with linking on OS X"</a>
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
