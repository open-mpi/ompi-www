<?
$subject_val = "Re: [OMPI users] Compiling on different servers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  6 22:35:05 2008" -->
<!-- isoreceived="20081107033505" -->
<!-- sent="Thu, 6 Nov 2008 22:33:08 -0500" -->
<!-- isosent="20081107033308" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compiling on different servers" -->
<!-- id="A220C7A7-0E8C-49C3-9CE0-AE4B5150DD23_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="41FF6D4A-325A-49D9-964C-6C39421453CF_at_cisco.com" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-06 22:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7234.php">Andrea Pellegrini: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
Moving one step foreword, server 1, my compile server, has a number  
<br>
of commercial C++ compilers (Pathscale and Intel). I'd like to  
<br>
compile different version of the binary with each compiler and then  
<br>
run these binaries on the Server 2 g++-compiled OMPI environments.
<br>
The FAQ says &quot;not really, you can't do that&quot;: <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a> 
<br>
faq/?category=sysadmin#multiple-installs, but I thought it might be  
<br>
time for an update with some hands-on experience?
<br>
<p>On Nov 6, 2008, at 9:02 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; As long as you compiled OMPI with support for OFED, yes.  You will  
</span><br>
<span class="quotelev1">&gt; need to have OFED installed on server 1 (even if you have no  
</span><br>
<span class="quotelev1">&gt; OpenFabrics-capable devices) to build OMPI's OpenFabrics support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, I do this kind of thing all the time: build OMPI on one  
</span><br>
<span class="quotelev1">&gt; machine and NFS export it to all the machines in my cluster, some  
</span><br>
<span class="quotelev1">&gt; of which are semi-heterogeneous (e.g., some have OFED installed,  
</span><br>
<span class="quotelev1">&gt; some do not, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 6, 2008, at 1:00 AM, Robert Kubrick wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; According to this FAQ, one should be able to compile on a computer  
</span><br>
<span class="quotelev2">&gt;&gt; and then run the OMPI program on different hardware, as far as the  
</span><br>
<span class="quotelev2">&gt;&gt; c++ compiler and OMPI versions are the same: <a href="http://www.open">http://www.open</a>- 
</span><br>
<span class="quotelev2">&gt;&gt; mpi.org/faq/?category=sysadmin#new-openmpi-version
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have the following situation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Server 1
</span><br>
<span class="quotelev2">&gt;&gt; Fabric: Ethernet
</span><br>
<span class="quotelev2">&gt;&gt; Compiler: g++ 4.2
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI: 1.2.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Server 2
</span><br>
<span class="quotelev2">&gt;&gt; Fabric: InfiniBand/Ethernet
</span><br>
<span class="quotelev2">&gt;&gt; Compiler: g++ 4.2
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI: 1.2.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can I compile my program on Server 1 and then run it on Server 2  
</span><br>
<span class="quotelev2">&gt;&gt; on IB (mpirun --mca btl openib,self...) ?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Previous message:</strong> <a href="7234.php">Andrea Pellegrini: "Re: [OMPI users] OpenMPI and OAR issues"</a>
<li><strong>In reply to:</strong> <a href="7220.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
<li><strong>Reply:</strong> <a href="7236.php">Jeff Squyres: "Re: [OMPI users] Compiling on different servers"</a>
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
