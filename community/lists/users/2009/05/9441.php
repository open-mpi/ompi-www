<?
$subject_val = "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 10:44:14 2009" -->
<!-- isoreceived="20090527144414" -->
<!-- sent="Wed, 27 May 2009 10:28:42 -0400" -->
<!-- isosent="20090527142842" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????" -->
<!-- id="8864ED55-66A8-424E-B1B9-249F033816DE_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7429.88520.qm_at_web62007.mail.re1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 10:28:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI considers hosts differently than network links.
<br>
<p>So you should only list the actual hostname in the hostfile, with  
<br>
slots equal to the number of processors (4 in your case, I think?).
<br>
<p>Once the MPI processes are launched, they each look around on the host  
<br>
that they're running and find network paths to each of their peers.   
<br>
If they are multiple paths between pairs of peers, Open MPI will round- 
<br>
robin stripe messages across each of the links.  We don't really have  
<br>
an easy setting for each peer pair only using 1 link.  Indeed, since  
<br>
connectivity is bidirectional, the traffic patterns become less  
<br>
obvious if you want MPI_COMM_WORLD rank X to only use link Y -- what  
<br>
does that mean to the other 4 MPI processes on the other host (with  
<br>
whom you have assumedly assigned their own individual links as well)?
<br>
<p><p>On May 26, 2009, at 12:24 AM, shan axida wrote:
<br>
<p><span class="quotelev1">&gt; Hi everyone,
</span><br>
<span class="quotelev1">&gt; I want to ask how to use multiple links (multiple NICs) with OpenMPI.
</span><br>
<span class="quotelev1">&gt; For example, how can I assign a link to each process, if there are 4  
</span><br>
<span class="quotelev1">&gt; links
</span><br>
<span class="quotelev1">&gt; and 4 processors on each node in our cluster?
</span><br>
<span class="quotelev1">&gt; Is this a correct way?
</span><br>
<span class="quotelev1">&gt; hostfile:
</span><br>
<span class="quotelev1">&gt; ----------------------
</span><br>
<span class="quotelev1">&gt; host1-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host1-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host2-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; ...             ...
</span><br>
<span class="quotelev1">&gt; ...  		...
</span><br>
<span class="quotelev1">&gt; host16-eth0 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth1 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth2 slots=1
</span><br>
<span class="quotelev1">&gt; host16-eth3 slots=1
</span><br>
<span class="quotelev1">&gt; ------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9442.php">vasilis: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>Previous message:</strong> <a href="9440.php">Eugene Loh: "Re: [OMPI users] &quot;An error occurred in MPI_Recv&quot; with more than 2 CPU"</a>
<li><strong>In reply to:</strong> <a href="9420.php">shan axida: "[OMPI users] How to use Multiple links with OpenMPI? ?????????????????"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9462.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
<li><strong>Reply:</strong> <a href="9463.php">shan axida: "Re: [OMPI users] How to use Multiple links with OpenMPI??????????????????"</a>
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
