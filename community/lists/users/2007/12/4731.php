<?
$subject_val = "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 09:30:49 2007" -->
<!-- isoreceived="20071219143049" -->
<!-- sent="Wed, 19 Dec 2007 09:30:44 -0500" -->
<!-- isosent="20071219143044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing" -->
<!-- id="B545F99C-8FE1-47D8-BCD2-A8755F80B6C1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="547db2260712182210s79dcb388ibc111921a657982a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 09:30:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4724.php">Amit Kumar Saha: "[OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4735.php">Aurelien Bouteiller: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4735.php">Aurelien Bouteiller: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4737.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's a pretty hazy difference; I don't think there are formal  
<br>
definitions for each.
<br>
<p>Cluster computing *usually* (but not always) implies a bit more  
<br>
tightly coupled set of computing: the app communicates and coordinates  
<br>
between itself more than your standard manager/worker computation  
<br>
model.  Distributed computing *usually* focuses on the manager/worker  
<br>
model -- send some work to anyone who asks for it and then eventually  
<br>
get some results back from them (or not -- then you have to send the  
<br>
same work out to someone else).
<br>
<p>But you can certainly use the manager/worker model in cluster  
<br>
computing, too.  Not all cluster computing is tightly coupled.
<br>
<p>Probably the easiest distinction is that &quot;cluster computing&quot; occurs on  
<br>
a cluster; distributed computing [usually] occurs in a larger-than-a- 
<br>
SAN area.
<br>
<p><p>On Dec 19, 2007, at 1:10 AM, Amit Kumar Saha wrote:
<br>
<p><span class="quotelev1">&gt; Hi all!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a bit hazy about the differences between Distributed Computing
</span><br>
<span class="quotelev1">&gt; and Cluster Computing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This document here
</span><br>
<span class="quotelev1">&gt; <a href="http://www.ibm.com/developerworks/grid/library/gr-heritage/">http://www.ibm.com/developerworks/grid/library/gr-heritage/</a> is a nice
</span><br>
<span class="quotelev1">&gt; read on Grid Computing and it also has few lines about important
</span><br>
<span class="quotelev1">&gt; differences from Cluster Computing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hints will be duly appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Amit
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Amit Kumar Saha
</span><br>
<span class="quotelev1">&gt; Writer, Programmer, Researcher
</span><br>
<span class="quotelev1">&gt; <a href="http://amitsaha.in.googlepages.com">http://amitsaha.in.googlepages.com</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://amitksaha.blogspot.com">http://amitksaha.blogspot.com</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4732.php">pat.o'bryant_at_[hidden]: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>Previous message:</strong> <a href="4730.php">Caird, Andrew J: "Re: [OMPI users] Torque and OpenMPI 1.2"</a>
<li><strong>In reply to:</strong> <a href="4724.php">Amit Kumar Saha: "[OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4735.php">Aurelien Bouteiller: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4735.php">Aurelien Bouteiller: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
<li><strong>Reply:</strong> <a href="4737.php">Amit Kumar Saha: "Re: [OMPI users] Theoretical Differences: Cluster Computing, Distributed Computing, Grid Computing"</a>
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
