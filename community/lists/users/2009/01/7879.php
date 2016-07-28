<?
$subject_val = "Re: [OMPI users] openmpi over tcp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 29 14:26:08 2009" -->
<!-- isoreceived="20090129192608" -->
<!-- sent="Thu, 29 Jan 2009 12:25:56 -0700" -->
<!-- isosent="20090129192556" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi over tcp" -->
<!-- id="C98133A5-02B9-47AF-89DE-541E276CFCD8_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20090129192002.GA17955_at_yakko.bartol.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi over tcp<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-29 14:25:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7877.php">Daniel De Marco: "[OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is quite likely that you have IPoIB on your system. In that case,  
<br>
the TCP BTL will pickup that interface and use it.
<br>
<p>If you have a specific interface you want to use, try -mca  
<br>
btl_tcp_if_include eth0 (or whatever that interface is). This tell the  
<br>
TCP BTL to only use the specified interface, so it will either fail  
<br>
(if that interface isn't available or doesn't exist) or use only that  
<br>
one.
<br>
<p><p>On Jan 29, 2009, at 12:20 PM, Daniel De Marco wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm doing some tests on a small cluster with gigabit and infiniband
</span><br>
<span class="quotelev1">&gt; interconnects with openmpi and I'm running into the same problem as
</span><br>
<span class="quotelev1">&gt; described in the following thread:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/04/3082.php">http://www.open-mpi.org/community/lists/users/2007/04/3082.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically even if I run my test with:
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl tcp,self --prefix /share/apps/openmpi-1.3/gcc_ifort/
</span><br>
<span class="quotelev1">&gt; --machinefile machines -np 2 ./osu_latency
</span><br>
<span class="quotelev1">&gt; I seem to be getting infiniband transport:
</span><br>
<span class="quotelev1">&gt; # OSU MPI Latency Test v3.1.1
</span><br>
<span class="quotelev1">&gt; # Size            Latency (us)
</span><br>
<span class="quotelev1">&gt; 0                         2.41
</span><br>
<span class="quotelev1">&gt; 1                         2.66
</span><br>
<span class="quotelev1">&gt; 2                         2.85
</span><br>
<span class="quotelev1">&gt; 4                         2.85
</span><br>
<span class="quotelev1">&gt; 8                         2.88
</span><br>
<span class="quotelev1">&gt; 16                        3.52
</span><br>
<span class="quotelev1">&gt; 32                        3.61
</span><br>
<span class="quotelev1">&gt; 64                        3.62
</span><br>
<span class="quotelev1">&gt; 128                       3.95
</span><br>
<span class="quotelev1">&gt; 256                       4.19
</span><br>
<span class="quotelev1">&gt; 512                       4.96
</span><br>
<span class="quotelev1">&gt; 1024                      6.31
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried running it with --mca btl ^openib but the result is the same.
</span><br>
<span class="quotelev1">&gt; I even tried, as suggested in the thread above, to remove the *openib*
</span><br>
<span class="quotelev1">&gt; files from the lib/openmpi directory, but without any change.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with 1.2.8 and with 1.3.0 with the same results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there anything else I can try in order to be able to use gigabit
</span><br>
<span class="quotelev1">&gt; transport?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, Daniel.
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
<li><strong>Next message:</strong> <a href="7880.php">Joe Griffin: "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on LinuxItanium	system&quot;"</a>
<li><strong>Previous message:</strong> <a href="7878.php">Iannetti, Anthony C. (GRC-RTB0): "Re: [OMPI users] Joe Griffin: &quot;Re: Cannot compile on Linux Itanium	system&quot;"</a>
<li><strong>In reply to:</strong> <a href="7877.php">Daniel De Marco: "[OMPI users] openmpi over tcp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7883.php">Daniel De Marco: "Re: [OMPI users] openmpi over tcp"</a>
<li><strong>Reply:</strong> <a href="7891.php">Peter Kjellstrom: "Re: [OMPI users] openmpi over tcp"</a>
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
