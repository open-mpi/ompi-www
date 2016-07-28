<?
$subject_val = "Re: [OMPI users] OpenMPI hangs across multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 18:22:08 2009" -->
<!-- isoreceived="20090203232208" -->
<!-- sent="Tue, 3 Feb 2009 16:21:54 -0700" -->
<!-- isosent="20090203232154" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI hangs across multiple nodes." -->
<!-- id="ABA1F762-D656-4192-AE34-123FF36FD4C3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498963F0.1AFE.00C7.0_at_newcastle.edu.au" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 18:21:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7956.php">Robertson Burgess: "[OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7956.php">Robertson Burgess: "[OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Could you tell us which version of OpenMPI you are using, and how it  
<br>
was configured?
<br>
<p>Did you install the OMPI libraries and binaries on both nodes? Are  
<br>
they in the same absolute path locations?
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p>On Feb 3, 2009, at 3:46 PM, Robertson Burgess wrote:
<br>
<p><span class="quotelev1">&gt; Dear users,
</span><br>
<span class="quotelev1">&gt; I am quite new to OpenMPI, I have compiled it on two nodes, each  
</span><br>
<span class="quotelev1">&gt; node with 8 CPU cores. The two nodes are identical. The code I am  
</span><br>
<span class="quotelev1">&gt; using works in parallel across the 8 cores on a single node.  
</span><br>
<span class="quotelev1">&gt; However, whenever I try to run across both nodes, OpenMPI simply  
</span><br>
<span class="quotelev1">&gt; hangs. There is no output whatsoever, when I run it in background,  
</span><br>
<span class="quotelev1">&gt; outputting to a log file, the log file is always empty. The cores do  
</span><br>
<span class="quotelev1">&gt; not appear to be doing anything at all, either on the host node or  
</span><br>
<span class="quotelev1">&gt; on the remote node. This happens whether I am running my code, or  
</span><br>
<span class="quotelev1">&gt; even if I when I tell it to run a process that doesn't even exist,  
</span><br>
<span class="quotelev1">&gt; for instance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host node1,node2 random
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Simply results in the terminal hanging, so all I can do is close the  
</span><br>
<span class="quotelev1">&gt; terminal and open up a new one.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -host node1,node2 random &gt;&amp; log.log &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; simply produces and empty log.log file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running Redhat Linux on the systems, and compiled OpenMPI with  
</span><br>
<span class="quotelev1">&gt; the Intel Compilers 10.1. As I've said, it works fine on one node. I  
</span><br>
<span class="quotelev1">&gt; have set up both nodes such that they can log into each other via  
</span><br>
<span class="quotelev1">&gt; ssh without the need for a password, and I have altered my .bashrc  
</span><br>
<span class="quotelev1">&gt; file so the PATH and LD_LIBRARY_PATH include the appropriate folders.
</span><br>
<span class="quotelev1">&gt; I have looked through the FAQ and mailing lists, but I was unable to  
</span><br>
<span class="quotelev1">&gt; find anything that really matched my problem. Any help would be  
</span><br>
<span class="quotelev1">&gt; greatly appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Robertson Burgess
</span><br>
<span class="quotelev1">&gt; University of Newcastle
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
<li><strong>Next message:</strong> <a href="7958.php">Hana Milani: "Re: [OMPI users] signal 15 (terminated)"</a>
<li><strong>Previous message:</strong> <a href="7956.php">Robertson Burgess: "[OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>In reply to:</strong> <a href="7956.php">Robertson Burgess: "[OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7962.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
