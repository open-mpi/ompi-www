<?
$subject_val = "Re: [OMPI users] OpenMPI hangs across multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 02:39:51 2009" -->
<!-- isoreceived="20090205073951" -->
<!-- sent="Thu, 05 Feb 2009 18:39:11 +1100" -->
<!-- isosent="20090205073911" -->
<!-- name="Robertson Burgess" -->
<!-- email="Robertson.Burgess_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI hangs across multiple nodes." -->
<!-- id="498B324A.1AFE.00C7.0_at_newcastle.edu.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498B1D52.1AFE.00C7.0_at_newcastle.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI hangs across multiple nodes.<br>
<strong>From:</strong> Robertson Burgess (<em>Robertson.Burgess_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 02:39:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have checked with IT. It is TCP. I have been told that there's a firewall on the nodes. Should I open some ports on the firewall, and if so, which ones?
<br>
<p>Robertson
<br>
<p><span class="quotelev3">&gt;&gt;&gt; Robertson Burgess 5/02/2009 5:09 pm &gt;&gt;&gt;
</span><br>
Thankyou for your help.
<br>
I tried the command 
<br>
mpirun -np 4 -host node1,node2 -mca btl tcp,self random
<br>
but still got the same result.
<br>
<p>I'm pretty sure that the communication between the nodes is TCP but I'm not sure, I've emailedIT support to ask them, but am yet to hear back from them.
<br>
Other than that I'm running the latest release of OMPI (1.3) and I installed it on both nodes. And yes they are in the same absolute paths.
<br>
My configuration was very standard:
<br>
<p>shell$ gunzip -c openmpi-1.3.tar.gz | tar xf -
<br>
shell$ cd openmpi-1.3
<br>
shell$  ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/home/bburgess/bin/bin
<br>
shell$ make all install
<br>
<p>Again thankyou for your help, I'll have to investigate whether my assumption about my connections being TCP are correct. When I was setting it up at first, and before I'd configured the nodes to log into each other without a password, I did get the message
<br>
<p>user@ node.newcastle.edu.au's password:
<br>
<p>In my log files, so it did at least seem to be reaching the other node. Does that mean that my connections are working, or could it be more to it than that?
<br>
<p>Robertson Burgess
<br>
<p><p>Message: 2
<br>
Date: Wed, 4 Feb 2009 15:37:44 +0200
<br>
From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI hangs across multiple nodes.
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;453d39990902040537o45137abbh2f12db423d971eb4_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=ISO-8859-1
<br>
<p>what kind of communication between nodes do you have - tcp, openib (
<br>
IB/IWARP ) ?
<br>
you can try
<br>
<p>mpirun -np 4 -host node1,node2 -mca btl tcp,self random
<br>
<p><p><p>On Wed, Feb 4, 2009 at 1:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Could you tell us which version of OpenMPI you are using, and how it was
</span><br>
<span class="quotelev1">&gt; configured?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Did you install the OMPI libraries and binaries on both nodes? Are they in
</span><br>
<span class="quotelev1">&gt; the same absolute path locations?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 3, 2009, at 3:46 PM, Robertson Burgess wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear users,
</span><br>
<span class="quotelev2">&gt;&gt; I am quite new to OpenMPI, I have compiled it on two nodes, each node with
</span><br>
<span class="quotelev2">&gt;&gt; 8 CPU cores. The two nodes are identical. The code I am using works in
</span><br>
<span class="quotelev2">&gt;&gt; parallel across the 8 cores on a single node. However, whenever I try to run
</span><br>
<span class="quotelev2">&gt;&gt; across both nodes, OpenMPI simply hangs. There is no output whatsoever, when
</span><br>
<span class="quotelev2">&gt;&gt; I run it in background, outputting to a log file, the log file is always
</span><br>
<span class="quotelev2">&gt;&gt; empty. The cores do not appear to be doing anything at all, either on the
</span><br>
<span class="quotelev2">&gt;&gt; host node or on the remote node. This happens whether I am running my code,
</span><br>
<span class="quotelev2">&gt;&gt; or even if I when I tell it to run a process that doesn't even exist, for
</span><br>
<span class="quotelev2">&gt;&gt; instance
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -host node1,node2 random
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Simply results in the terminal hanging, so all I can do is close the
</span><br>
<span class="quotelev2">&gt;&gt; terminal and open up a new one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -host node1,node2 random &gt;&amp; log.log &amp;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; simply produces and empty log.log file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running Redhat Linux on the systems, and compiled OpenMPI with the
</span><br>
<span class="quotelev2">&gt;&gt; Intel Compilers 10.1. As I've said, it works fine on one node. I have set up
</span><br>
<span class="quotelev2">&gt;&gt; both nodes such that they can log into each other via ssh without the need
</span><br>
<span class="quotelev2">&gt;&gt; for a password, and I have altered my .bashrc file so the PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH include the appropriate folders.
</span><br>
<span class="quotelev2">&gt;&gt; I have looked through the FAQ and mailing lists, but I was unable to find
</span><br>
<span class="quotelev2">&gt;&gt; anything that really matched my problem. Any help would be greatly
</span><br>
<span class="quotelev2">&gt;&gt; appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sincerely,
</span><br>
<span class="quotelev2">&gt;&gt; Robertson Burgess
</span><br>
<span class="quotelev2">&gt;&gt; University of Newcastle
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p>**************************************
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7971.php">Gabriele Fatigati: "[OMPI users] MPI_Test bug?"</a>
<li><strong>Previous message:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7986.php">Jeff Squyres: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
