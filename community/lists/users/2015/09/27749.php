<?
$subject_val = "Re: [OMPI users] about MPI communication complexity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 30 14:11:59 2015" -->
<!-- isoreceived="20150930181159" -->
<!-- sent="Wed, 30 Sep 2015 14:11:57 -0400" -->
<!-- isosent="20150930181157" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] about MPI communication complexity" -->
<!-- id="CAMJJpkUR6LuxyNcn2bhCU-bnbSKX+Ru0i4kVv=+7-ae6Yu+rrg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="560B8A4E.3040403_at_grs-sim.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-30 14:11:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27748.php">marcin.krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>In reply to:</strong> <a href="27720.php">Marc-Andre Hermanns: "Re: [OMPI users] about MPI communication complexity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Xing Feng,
<br>
<p>A more focused (and certainly more detailed) analysis of the cost of
<br>
different algorithms for collective communications can be found in [1], and
<br>
more recently in [2].
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>[1]
<br>
<a href="http://icl.cs.utk.edu/projectsfiles/rib/pubs/Pjesivac-Grbovic_PMEO-PDS05.pdf">http://icl.cs.utk.edu/projectsfiles/rib/pubs/Pjesivac-Grbovic_PMEO-PDS05.pdf</a>
<br>
[2] <a href="https://www.cs.utexas.edu/~echan/vpapers/CCPE2007.pdf">https://www.cs.utexas.edu/~echan/vpapers/CCPE2007.pdf</a>
<br>
<p><p>On Wed, Sep 30, 2015 at 3:07 AM, Marc-Andre Hermanns &lt;
<br>
m.a.hermanns_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Xing Feng,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; there are different algorithms to implement collective communication
</span><br>
<span class="quotelev1">&gt; patterns. Next to general Big-O complexity the concrete complexity
</span><br>
<span class="quotelev1">&gt; also depends on the network topology, message length, etc..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Therefore many MPI implementations switch between different algorithms
</span><br>
<span class="quotelev1">&gt; depending on the concrete communication parameters in a call.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A colleague of mine investigated some MPI implementations (though not
</span><br>
<span class="quotelev1">&gt; OpenMPI) [1]. There you can see how different MPI implementations
</span><br>
<span class="quotelev1">&gt; (IBM, ParaStation, Cray) scale differently for a selection of
</span><br>
<span class="quotelev1">&gt; collective calls. Maybe that helps a little in understanding the
</span><br>
<span class="quotelev1">&gt; performance of your application.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Marc-Andre
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1] <a href="http://dl.acm.org/citation.cfm?doid=2751205.2751216">http://dl.acm.org/citation.cfm?doid=2751205.2751216</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 30.09.15 07:53, XingFENG wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi, every one,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am working with open-mpi. When I tried to analyse performance of my
</span><br>
<span class="quotelev2">&gt; &gt; programs, I find it is hard to understand the communication complexity
</span><br>
<span class="quotelev2">&gt; &gt; of MPI routines.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have found some page on Internet such as
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://stackoverflow.com/questions/10625643/mpi-communication-complexity">http://stackoverflow.com/questions/10625643/mpi-communication-complexity</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This indicates that communication complexity of broadcasting an
</span><br>
<span class="quotelev2">&gt; &gt; integer is O(log P) where P is the number of processes. But is it
</span><br>
<span class="quotelev2">&gt; &gt; correct on different MPI implementations( OMPI, MPICH, etc.)? Is there
</span><br>
<span class="quotelev2">&gt; &gt; an official document discussing such complexity?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Best Regards.
</span><br>
<span class="quotelev2">&gt; &gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; Xing FENG
</span><br>
<span class="quotelev2">&gt; &gt; PhD Candidate
</span><br>
<span class="quotelev2">&gt; &gt; Database Research Group
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; School of Computer Science and Engineering
</span><br>
<span class="quotelev2">&gt; &gt; University of New South Wales
</span><br>
<span class="quotelev2">&gt; &gt; NSW 2052, Sydney
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Phone: (+61) 413 857 288
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27719.php">http://www.open-mpi.org/community/lists/users/2015/09/27719.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Marc-Andre Hermanns
</span><br>
<span class="quotelev1">&gt; J&#195;&#188;lich Aachen Research Alliance,
</span><br>
<span class="quotelev1">&gt; High Performance Computing (JARA-HPC)
</span><br>
<span class="quotelev1">&gt; German Research School for Simulation Sciences GmbH
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Schinkelstrasse 2
</span><br>
<span class="quotelev1">&gt; 52062 Aachen
</span><br>
<span class="quotelev1">&gt; Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +49 2461 61 2509
</span><br>
<span class="quotelev1">&gt; Fax: +49 241 80 6 99753
</span><br>
<span class="quotelev1">&gt; www.grs-sim.de/parallel
</span><br>
<span class="quotelev1">&gt; email: m.a.hermanns_at_[hidden]
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27720.php">http://www.open-mpi.org/community/lists/users/2015/09/27720.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27749/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27750.php">Howard Pritchard: "Re: [OMPI users] libfabric/usnic does not compile in 2.x"</a>
<li><strong>Previous message:</strong> <a href="27748.php">marcin.krotkiewski: "Re: [OMPI users] Using POSIX shared memory as send buffer"</a>
<li><strong>In reply to:</strong> <a href="27720.php">Marc-Andre Hermanns: "Re: [OMPI users] about MPI communication complexity"</a>
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
