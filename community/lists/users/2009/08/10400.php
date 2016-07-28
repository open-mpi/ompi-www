<?
$subject_val = "Re: [OMPI users] very bad parallel scaling of vasp using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 09:28:11 2009" -->
<!-- isoreceived="20090818132811" -->
<!-- sent="Tue, 18 Aug 2009 09:27:59 -0400" -->
<!-- isosent="20090818132759" -->
<!-- name="jimkress_58" -->
<!-- email="jimkress_58_at_[hidden]" -->
<!-- subject="Re: [OMPI users] very bad parallel scaling of vasp using openmpi" -->
<!-- id="96CA4D98C6DC473082848E839C209939_at_libraryPC" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9ACAED82-0B76-4F78-9A39-CD8AB5B531AE_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] very bad parallel scaling of vasp using openmpi<br>
<strong>From:</strong> jimkress_58 (<em>jimkress_58_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 09:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gbit Ethernet is well known to perform poorly for fine grained code like
<br>
VASP.  The latencies for Gbit Ethernet are much too high.
<br>
<p>If you want good scaling in a cluster for VASP, you'll need to run
<br>
InfiniBand or some other high speed/ low latency network.
<br>
<p>Jim
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Jeff Squyres
<br>
Sent: Monday, August 17, 2009 9:24 PM
<br>
To: Open MPI Users
<br>
Cc: David Hibbitts
<br>
Subject: Re: [OMPI users] very bad parallel scaling of vasp using openmpi
<br>
<p>You might want to run some performance testing of you TCP stacks and  
<br>
the switch -- use a non-MPI application such as NetPIPE (or others --  
<br>
google around) and see what kind of throughput you get.  Try it  
<br>
between individual server peers and then try running it simultaneously  
<br>
between a bunch of peers and see if the results are different, etc.
<br>
<p>On Aug 17, 2009, at 5:51 PM, Craig Plaisance wrote:
<br>
<p><span class="quotelev1">&gt; Hi - I have compiled vasp 4.6.34 using the Intel fortran compiler 11.1
</span><br>
<span class="quotelev1">&gt; with openmpi 1.3.3 on a cluster of 104 nodes running Rocks 5.2 with  
</span><br>
<span class="quotelev1">&gt; two
</span><br>
<span class="quotelev1">&gt; quad core opterons connected by a Gbit ethernet.  Running in  
</span><br>
<span class="quotelev1">&gt; parallel on
</span><br>
<span class="quotelev1">&gt; one node (8 cores) runs very well, faster than any other cluster I  
</span><br>
<span class="quotelev1">&gt; have
</span><br>
<span class="quotelev1">&gt; run it on.  However, running on 2 nodes in parallel only improves the
</span><br>
<span class="quotelev1">&gt; performance by 10% over the one node case while running on 4 and 8  
</span><br>
<span class="quotelev1">&gt; nodes
</span><br>
<span class="quotelev1">&gt; yields no improvement over the two node case.  Furthermore, when  
</span><br>
<span class="quotelev1">&gt; running
</span><br>
<span class="quotelev1">&gt; multiple (3-4) jobs simultaneously, the performance decreases by  
</span><br>
<span class="quotelev1">&gt; around
</span><br>
<span class="quotelev1">&gt; 50% compared to running only a single job on the entire cluster.  The
</span><br>
<span class="quotelev1">&gt; nodes are connected by a Dell Powerconnect 6248 managed switch.  I get
</span><br>
<span class="quotelev1">&gt; the same performance with mpich2, so I don't think it is a problem
</span><br>
<span class="quotelev1">&gt; specific to openmpi.  Other vasp users have reported very good scaling
</span><br>
<span class="quotelev1">&gt; up to 4 nodes on a similar cluster, so I don't think the problem is  
</span><br>
<span class="quotelev1">&gt; vasp
</span><br>
<span class="quotelev1">&gt; either.  Could something be wrong with the way mpi is configured to  
</span><br>
<span class="quotelev1">&gt; work
</span><br>
<span class="quotelev1">&gt; with the switch?  Or the operating system is not configured to work  
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt; the switch properly?  Or the switch itself needs to be configured?   
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10399.php">Ralph Castain: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10401.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
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
