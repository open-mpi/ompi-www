<?
$subject_val = "Re: [OMPI users] OpenMPI hangs across multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 12 10:46:58 2009" -->
<!-- isoreceived="20090212154658" -->
<!-- sent="Thu, 12 Feb 2009 10:46:52 -0500" -->
<!-- isosent="20090212154652" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI hangs across multiple nodes." -->
<!-- id="C54F94AD-AFE3-4E77-A4ED-9BB437DA0797_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499428FD.1AFE.00C7.0_at_newcastle.edu.au" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-12 10:46:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8039.php">George Bosilca: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You don't necessarily have to open all ports. Open MPI can use a range  
<br>
of ports if specified.
<br>
<p>The intervals used can be twitched using [btl_tcp_port_min_v4,  
<br>
btl_tcp_port_range_v4] for the MPI layer and there should be something  
<br>
similar for our daemons.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 11, 2009, at 21:49 , Robertson Burgess wrote:
<br>
<p><span class="quotelev1">&gt; My apologies for not changing the subject to something suitable just  
</span><br>
<span class="quotelev1">&gt; then.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thankyou for that. I have not yet been able to get the IT department  
</span><br>
<span class="quotelev1">&gt; to help me with disabling the firewalls, but hopefully that is the  
</span><br>
<span class="quotelev1">&gt; problem. Sorry for the late response, I was hoping the IT department  
</span><br>
<span class="quotelev1">&gt; would be faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robertson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Message: 2
</span><br>
<span class="quotelev1">&gt; Date: Fri, 6 Feb 2009 17:27:34 -0500
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI hangs across multiple nodes.
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;8BA0E4A5-FA7C-430B-8731-231ED6E672BE_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI requires that there be no TCP firewall between hosts that are
</span><br>
<span class="quotelev1">&gt; used in a single parallel job -- it uses random TCP ports between  
</span><br>
<span class="quotelev1">&gt; peers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2009, at 2:39 AM, Robertson Burgess wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have checked with IT. It is TCP. I have been told that there's a
</span><br>
<span class="quotelev2">&gt;&gt; firewall on the nodes. Should I open some ports on the firewall, and
</span><br>
<span class="quotelev2">&gt;&gt; if so, which ones?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Robertson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Robertson Burgess 5/02/2009 5:09 pm &gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thankyou for your help.
</span><br>
<span class="quotelev2">&gt;&gt; I tried the command
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -host node1,node2 -mca btl tcp,self random
</span><br>
<span class="quotelev2">&gt;&gt; but still got the same result.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm pretty sure that the communication between the nodes is TCP but
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure, I've emailedIT support to ask them, but am yet to hear
</span><br>
<span class="quotelev2">&gt;&gt; back from them.
</span><br>
<span class="quotelev2">&gt;&gt; Other than that I'm running the latest release of OMPI (1.3) and I
</span><br>
<span class="quotelev2">&gt;&gt; installed it on both nodes. And yes they are in the same absolute
</span><br>
<span class="quotelev2">&gt;&gt; paths.
</span><br>
<span class="quotelev2">&gt;&gt; My configuration was very standard:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; shell$ gunzip -c openmpi-1.3.tar.gz | tar xf -
</span><br>
<span class="quotelev2">&gt;&gt; shell$ cd openmpi-1.3
</span><br>
<span class="quotelev2">&gt;&gt; shell$  ./configure CC=icc CXX=icpc F77=ifort FC=ifort --prefix=/
</span><br>
<span class="quotelev2">&gt;&gt; home/bburgess/bin/bin
</span><br>
<span class="quotelev2">&gt;&gt; shell$ make all install
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again thankyou for your help, I'll have to investigate whether my
</span><br>
<span class="quotelev2">&gt;&gt; assumption about my connections being TCP are correct. When I was
</span><br>
<span class="quotelev2">&gt;&gt; setting it up at first, and before I'd configured the nodes to log
</span><br>
<span class="quotelev2">&gt;&gt; into each other without a password, I did get the message
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; user@ node.newcastle.edu.au's password:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my log files, so it did at least seem to be reaching the other
</span><br>
<span class="quotelev2">&gt;&gt; node. Does that mean that my connections are working, or could it be
</span><br>
<span class="quotelev2">&gt;&gt; more to it than that?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Robertson Burgess
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 4 Feb 2009 15:37:44 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: Lenny Verkhovsky &lt;lenny.verkhovsky_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI hangs across multiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;453d39990902040537o45137abbh2f12db423d971eb4_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what kind of communication between nodes do you have - tcp, openib (
</span><br>
<span class="quotelev2">&gt;&gt; IB/IWARP ) ?
</span><br>
<span class="quotelev2">&gt;&gt; you can try
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 4 -host node1,node2 -mca btl tcp,self random
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 4, 2009 at 1:21 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Could you tell us which version of OpenMPI you are using, and how
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configured?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did you install the OMPI libraries and binaries on both nodes? Are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the same absolute path locations?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 3, 2009, at 3:46 PM, Robertson Burgess wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear users,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am quite new to OpenMPI, I have compiled it on two nodes, each
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 CPU cores. The two nodes are identical. The code I am using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; works in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parallel across the 8 cores on a single node. However, whenever I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; try to run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; across both nodes, OpenMPI simply hangs. There is no output
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; whatsoever, when
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I run it in background, outputting to a log file, the log file is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; always
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; empty. The cores do not appear to be doing anything at all, either
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; host node or on the remote node. This happens whether I am running
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; my code,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or even if I when I tell it to run a process that doesn't even
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exist, for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; instance
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 -host node1,node2 random
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Simply results in the terminal hanging, so all I can do is close  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminal and open up a new one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 4 -host node1,node2 random &gt;&amp; log.log &amp;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; simply produces and empty log.log file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running Redhat Linux on the systems, and compiled OpenMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Intel Compilers 10.1. As I've said, it works fine on one node. I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; have set up
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; both nodes such that they can log into each other via ssh without
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the need
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for a password, and I have altered my .bashrc file so the PATH and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH include the appropriate folders.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have looked through the FAQ and mailing lists, but I was unable
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; anything that really matched my problem. Any help would be greatly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sincerely,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Robertson Burgess
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; University of Newcastle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; **************************************
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8041.php">Reuben D. Budiardja: "[OMPI users] OpenMPI and Valgrind"</a>
<li><strong>Previous message:</strong> <a href="8039.php">George Bosilca: "Re: [OMPI users] openmpi-1.3: segmentation fault using Cygwin-1.5 and gcc-3.4.4"</a>
<li><strong>In reply to:</strong> <a href="8027.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
