<?
$subject_val = "Re: [OMPI users] OpenMPI hangs across multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  4 08:37:52 2009" -->
<!-- isoreceived="20090204133752" -->
<!-- sent="Wed, 4 Feb 2009 15:37:44 +0200" -->
<!-- isosent="20090204133744" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI hangs across multiple nodes." -->
<!-- id="453d39990902040537o45137abbh2f12db423d971eb4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ABA1F762-D656-4192-AE34-123FF36FD4C3_at_lanl.gov" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-04 08:37:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7961.php">Hana Milani: "[OMPI users] signal 15 (terminated) (Hana Milani)"</a>
<li><strong>In reply to:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what kind of communication between nodes do you have - tcp, openib (
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7963.php">Jeff Squyres: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7961.php">Hana Milani: "[OMPI users] signal 15 (terminated) (Hana Milani)"</a>
<li><strong>In reply to:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
