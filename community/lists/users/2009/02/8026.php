<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1142, Issue 1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 11 21:14:34 2009" -->
<!-- isoreceived="20090212021434" -->
<!-- sent="Thu, 12 Feb 2009 13:13:56 +1100" -->
<!-- isosent="20090212021356" -->
<!-- name="Robertson Burgess" -->
<!-- email="Robertson.Burgess_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1142, Issue 1" -->
<!-- id="49942093.1AFE.00C7.0_at_newcastle.edu.au" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="mailman.15.1234026024.23358.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1142, Issue 1<br>
<strong>From:</strong> Robertson Burgess (<em>Robertson.Burgess_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-11 21:13:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thankyou for that. I have not yet been able to get the IT department to help me with disabling the firewalls, but hopefully that is the problem. Sorry for the late response, I was hoping the IT department would be faster.
<br>
<p>Robertson
<br>
<p>Message: 2
<br>
Date: Fri, 6 Feb 2009 17:27:34 -0500
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] OpenMPI hangs across multiple nodes.
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;8BA0E4A5-FA7C-430B-8731-231ED6E672BE_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
<br>
<p>Open MPI requires that there be no TCP firewall between hosts that are  
<br>
used in a single parallel job -- it uses random TCP ports between peers.
<br>
<p><p>On Feb 5, 2009, at 2:39 AM, Robertson Burgess wrote:
<br>
<p><span class="quotelev1">&gt; I have checked with IT. It is TCP. I have been told that there's a  
</span><br>
<span class="quotelev1">&gt; firewall on the nodes. Should I open some ports on the firewall, and  
</span><br>
<span class="quotelev1">&gt; if so, which ones?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robertson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Robertson Burgess 5/02/2009 5:09 pm &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Thankyou for your help.
</span><br>
<span class="quotelev1">&gt; I tried the command
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host node1,node2 -mca btl tcp,self random
</span><br>
<span class="quotelev1">&gt; but still got the same result.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm pretty sure that the communication between the nodes is TCP but  
</span><br>
<span class="quotelev1">&gt; I'm not sure, I've emailedIT support to ask them, but am yet to hear  
</span><br>
<span class="quotelev1">&gt; back from them.
</span><br>
<span class="quotelev1">&gt; Other than that I'm running the latest release of OMPI (1.3) and I  
</span><br>
<span class="quotelev1">&gt; installed it on both nodes. And yes they are in the same absolute  
</span><br>
<span class="quotelev1">&gt; paths.
</span><br>
<span class="quotelev1">&gt; My configuration was very standard:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; shell$ gunzip -c openmpi-1.3.tar.gz | tar xf -
</span><br>
<span class="quotelev1">&gt; shell$ cd openmpi-1.3
</span><br>
<span class="quotelev1">&gt; shell$  ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/ 
</span><br>
<span class="quotelev1">&gt; home/bburgess/bin/bin
</span><br>
<span class="quotelev1">&gt; shell$ make all install
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again thankyou for your help, I'll have to investigate whether my  
</span><br>
<span class="quotelev1">&gt; assumption about my connections being TCP are correct. When I was  
</span><br>
<span class="quotelev1">&gt; setting it up at first, and before I'd configured the nodes to log  
</span><br>
<span class="quotelev1">&gt; into each other without a password, I did get the message
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; user@ node.newcastle.edu.au's password:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my log files, so it did at least seem to be reaching the other  
</span><br>
<span class="quotelev1">&gt; node. Does that mean that my connections are working, or could it be  
</span><br>
<span class="quotelev1">&gt; more to it than that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robertson Burgess
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Wed, 4 Feb 2009 15:37:44 +0200
</span><br>
<span class="quotelev1">&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI hangs across multiple nodes.
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;453d39990902040537o45137abbh2f12db423d971eb4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what kind of communication between nodes do you have - tcp, openib (
</span><br>
<span class="quotelev1">&gt; IB/IWARP ) ?
</span><br>
<span class="quotelev1">&gt; you can try
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host node1,node2 -mca btl tcp,self random
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 4, 2009 at 1:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Could you tell us which version of OpenMPI you are using, and how  
</span><br>
<span class="quotelev2">&gt;&gt; it was
</span><br>
<span class="quotelev2">&gt;&gt; configured?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Did you install the OMPI libraries and binaries on both nodes? Are  
</span><br>
<span class="quotelev2">&gt;&gt; they in
</span><br>
<span class="quotelev2">&gt;&gt; the same absolute path locations?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 3, 2009, at 3:46 PM, Robertson Burgess wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear users,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am quite new to OpenMPI, I have compiled it on two nodes, each  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 CPU cores. The two nodes are identical. The code I am using  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parallel across the 8 cores on a single node. However, whenever I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try to run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; across both nodes, OpenMPI simply hangs. There is no output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; whatsoever, when
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run it in background, outputting to a log file, the log file is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; empty. The cores do not appear to be doing anything at all, either  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; host node or on the remote node. This happens whether I am running  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my code,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or even if I when I tell it to run a process that doesn't even  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exist, for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; instance
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 -host node1,node2 random
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Simply results in the terminal hanging, so all I can do is close the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminal and open up a new one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 -host node1,node2 random &gt;&amp; log.log &amp;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; simply produces and empty log.log file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am running Redhat Linux on the systems, and compiled OpenMPI  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel Compilers 10.1. As I've said, it works fine on one node. I  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have set up
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both nodes such that they can log into each other via ssh without  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for a password, and I have altered my .bashrc file so the PATH and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH include the appropriate folders.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have looked through the FAQ and mailing lists, but I was unable  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anything that really matched my problem. Any help would be greatly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Robertson Burgess
</span><br>
<span class="quotelev3">&gt;&gt;&gt; University of Newcastle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; **************************************
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
------------------------------
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="8025.php">Ralph Castain: "Re: [OMPI users] openmpi/ib noob question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
