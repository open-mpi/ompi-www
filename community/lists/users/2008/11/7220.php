<?
$subject_val = "Re: [OMPI users] Compiling on different servers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 09:02:26 2008" -->
<!-- isoreceived="20081106140226" -->
<!-- sent="Thu, 6 Nov 2008 09:02:20 -0500" -->
<!-- isosent="20081106140220" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling on different servers" -->
<!-- id="41FF6D4A-325A-49D9-964C-6C39421453CF_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="628928FF-561C-4751-9ED4-72EFBAE8C35B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Compiling on different servers<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 09:02:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7219.php">Ralph Castain: "Re: [OMPI users] program stalls in __write_nocancel()"</a>
<li><strong>In reply to:</strong> <a href="7217.php">Robert Kubrick: "[OMPI users] Compiling on different servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As long as you compiled OMPI with support for OFED, yes.  You will  
<br>
need to have OFED installed on server 1 (even if you have no  
<br>
OpenFabrics-capable devices) to build OMPI's OpenFabrics support.
<br>
<p>FWIW, I do this kind of thing all the time: build OMPI on one machine  
<br>
and NFS export it to all the machines in my cluster, some of which are  
<br>
semi-heterogeneous (e.g., some have OFED installed, some do not, etc.).
<br>
<p><p>On Nov 6, 2008, at 1:00 AM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; According to this FAQ, one should be able to compile on a computer  
</span><br>
<span class="quotelev1">&gt; and then run the OMPI program on different hardware, as far as the c+ 
</span><br>
<span class="quotelev1">&gt; + compiler and OMPI versions are the same: <a href="http://www.open-mpi.org/faq/?category=sysadmin#new-openmpi-version">http://www.open-mpi.org/faq/?category=sysadmin#new-openmpi-version</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following situation:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Server 1
</span><br>
<span class="quotelev1">&gt; Fabric: Ethernet
</span><br>
<span class="quotelev1">&gt; Compiler: g++ 4.2
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Server 2
</span><br>
<span class="quotelev1">&gt; Fabric: InfiniBand/Ethernet
</span><br>
<span class="quotelev1">&gt; Compiler: g++ 4.2
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.2.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I compile my program on Server 1 and then run it on Server 2 on  
</span><br>
<span class="quotelev1">&gt; IB (mpirun --mca btl openib,self...) ?
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
<li><strong>Next message:</strong> <a href="7221.php">Jeff Squyres: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Previous message:</strong> <a href="7219.php">Ralph Castain: "Re: [OMPI users] program stalls in __write_nocancel()"</a>
<li><strong>In reply to:</strong> <a href="7217.php">Robert Kubrick: "[OMPI users] Compiling on different servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7235.php">Robert Kubrick: "Re: [OMPI users] Compiling on different servers"</a>
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
