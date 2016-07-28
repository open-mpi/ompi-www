<?
$subject_val = "Re: [OMPI users] round-robin scheduling question [hostfile]";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 10:19:58 2009" -->
<!-- isoreceived="20090220151958" -->
<!-- sent="Fri, 20 Feb 2009 08:19:48 -0700" -->
<!-- isosent="20090220151948" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] round-robin scheduling question [hostfile]" -->
<!-- id="E5E80B40-28BD-4D43-9A12-A94D45D3A3A3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="499E68E0.2020205_at_kuicr.kyoto-u.ac.jp" -->
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
<strong>Subject:</strong> Re: [OMPI users] round-robin scheduling question [hostfile]<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 10:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
<li><strong>In reply to:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It is a little bit of both:
<br>
<p>* historical, because most MPI's default to mapping by slot, and
<br>
<p>* performance, because procs that share a node can communicate via  
<br>
shared memory, which is faster than sending messages over an  
<br>
interconnect, and most apps are communication-bound
<br>
<p>If your app is disk-intensive, then mapping it -bynode may be a better  
<br>
option for you. That's why we provide it. Note, however, that you can  
<br>
still wind up with multiple procs on a node. All &quot;bynode&quot; means is  
<br>
that the ranks are numbered consecutively bynode - it doesn't mean  
<br>
that there is only one proc/node.
<br>
<p>If you truly want one proc/node, then you should use the -pernode  
<br>
option. This maps one proc on each node up to either the number of  
<br>
procs you specified or the number of available nodes. If you don't  
<br>
specify -np, we just put one proc on each node in your allocation/ 
<br>
hostfile.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Feb 20, 2009, at 1:25 AM, Raymond Wan wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; According to FAQ 14 (How do I control how my processes are scheduled  
</span><br>
<span class="quotelev1">&gt; across nodes?) [<a href="http://www.open-mpi.org/faq/?category=running#mpirun-scheduling">http://www.open-mpi.org/faq/?category=running#mpirun-scheduling</a> 
</span><br>
<span class="quotelev1">&gt; ], it says that the default scheduling policy is by slot and not by  
</span><br>
<span class="quotelev1">&gt; node.  I'm curious why the default is &quot;by slot&quot; since I am thinking  
</span><br>
<span class="quotelev1">&gt; of explicitly specifying by node but I'm wondering if there is an  
</span><br>
<span class="quotelev1">&gt; issue which I haven't considered.
</span><br>
<span class="quotelev1">&gt; I would think that one reason for &quot;by node&quot; is to distribute HDD  
</span><br>
<span class="quotelev1">&gt; access across machines [as is the case for me since my program is  
</span><br>
<span class="quotelev1">&gt; HDD access intensive].  Or perhaps I am mistaken?  I'm now thinking  
</span><br>
<span class="quotelev1">&gt; that &quot;by slot&quot; is the default because processes with ranks that are  
</span><br>
<span class="quotelev1">&gt; close together might do similar tasks and you would want them on the  
</span><br>
<span class="quotelev1">&gt; same node?  Is that the reason?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, at the end of this FAQ, it says &quot;NOTE:  This is the scheduling  
</span><br>
<span class="quotelev1">&gt; policy in Open MPI because of a long historical precendent...&quot; --   
</span><br>
<span class="quotelev1">&gt; does this &quot;This&quot; refer to &quot;the fact that there are two scheduling  
</span><br>
<span class="quotelev1">&gt; policies&quot; or &quot;the fact that 'by slot' is the default&quot;?  If the  
</span><br>
<span class="quotelev1">&gt; latter, then that explains why &quot;by slot&quot; is the default, I guess...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ray
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="8140.php">Gus Correa: "Re: [OMPI users] WRF, OpenMPI and PGI 7.2"</a>
<li><strong>Previous message:</strong> <a href="8138.php">Ralph Castain: "Re: [OMPI users] Strange problem"</a>
<li><strong>In reply to:</strong> <a href="8130.php">Raymond Wan: "[OMPI users] round-robin scheduling question [hostfile]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
<li><strong>Reply:</strong> <a href="8151.php">Raymond Wan: "Re: [OMPI users] round-robin scheduling question [hostfile]"</a>
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
