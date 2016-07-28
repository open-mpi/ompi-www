<?
$subject_val = "Re: [OMPI users] about MPI communication complexity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 03:09:53 2015" -->
<!-- isoreceived="20150930070953" -->
<!-- sent="Wed, 30 Sep 2015 09:07:58 +0200" -->
<!-- isosent="20150930070758" -->
<!-- name="Marc-Andre Hermanns" -->
<!-- email="m.a.hermanns_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI communication complexity" -->
<!-- id="560B8A4E.3040403_at_grs-sim.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAKY4v99od12RoXN3mBA4fsUs1qMhHWAG7-5XqUa=9ytRkbws9g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] about MPI communication complexity<br>
<strong>From:</strong> Marc-Andre Hermanns (<em>m.a.hermanns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 03:07:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27719.php">XingFENG: "[OMPI users] about MPI communication complexity"</a>
<li><strong>In reply to:</strong> <a href="27719.php">XingFENG: "[OMPI users] about MPI communication complexity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>Reply:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Xing Feng,
<br>
<p>there are different algorithms to implement collective communication
<br>
patterns. Next to general Big-O complexity the concrete complexity
<br>
also depends on the network topology, message length, etc..
<br>
<p>Therefore many MPI implementations switch between different algorithms
<br>
depending on the concrete communication parameters in a call.
<br>
<p>A colleague of mine investigated some MPI implementations (though not
<br>
OpenMPI) [1]. There you can see how different MPI implementations
<br>
(IBM, ParaStation, Cray) scale differently for a selection of
<br>
collective calls. Maybe that helps a little in understanding the
<br>
performance of your application.
<br>
<p>Cheers,
<br>
Marc-Andre
<br>
<p>[1] <a href="http://dl.acm.org/citation.cfm?doid=2751205.2751216">http://dl.acm.org/citation.cfm?doid=2751205.2751216</a>
<br>
<p><p>On 30.09.15 07:53, XingFENG wrote:
<br>
<span class="quotelev1">&gt; Hi, every one,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am working with open-mpi. When I tried to analyse performance of my
</span><br>
<span class="quotelev1">&gt; programs, I find it is hard to understand the communication complexity
</span><br>
<span class="quotelev1">&gt; of MPI routines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have found some page on Internet such as
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/10625643/mpi-communication-complexity">http://stackoverflow.com/questions/10625643/mpi-communication-complexity</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This indicates that communication complexity of broadcasting an
</span><br>
<span class="quotelev1">&gt; integer is O(log P) where P is the number of processes. But is it
</span><br>
<span class="quotelev1">&gt; correct on different MPI implementations( OMPI, MPICH, etc.)? Is there
</span><br>
<span class="quotelev1">&gt; an official document discussing such complexity?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Best Regards.
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Xing FENG
</span><br>
<span class="quotelev1">&gt; PhD Candidate
</span><br>
<span class="quotelev1">&gt; Database Research Group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev1">&gt; University of New South Wales
</span><br>
<span class="quotelev1">&gt; NSW 2052, Sydney
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone: (+61) 413 857 288
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27719.php">http://www.open-mpi.org/community/lists/users/2015/09/27719.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Marc-Andre Hermanns
J&#252;lich Aachen Research Alliance,
High Performance Computing (JARA-HPC)
German Research School for Simulation Sciences GmbH
Schinkelstrasse 2
52062 Aachen
Germany
Phone: +49 2461 61 2509
Fax: +49 241 80 6 99753
www.grs-sim.de/parallel
email: m.a.hermanns_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27720/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27721.php">Diego Avesani: "Re: [OMPI users] send_request error with allocate"</a>
<li><strong>Previous message:</strong> <a href="27719.php">XingFENG: "[OMPI users] about MPI communication complexity"</a>
<li><strong>In reply to:</strong> <a href="27719.php">XingFENG: "[OMPI users] about MPI communication complexity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
<li><strong>Reply:</strong> <a href="27749.php">George Bosilca: "Re: [OMPI users] about MPI communication complexity"</a>
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
