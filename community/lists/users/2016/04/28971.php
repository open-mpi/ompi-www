<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:20:44 2016" -->
<!-- isoreceived="20160419192044" -->
<!-- sent="Tue, 19 Apr 2016 21:20:43 +0200" -->
<!-- isosent="20160419192043" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="CAMJJpkXFsn=JWnhMQdZm8TRNmxG_PxBNuJ_4rnN9WCQk07yZqQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="37142D5FC373A846ACE4F75AA11EA84D4C9FCB7C_at_DITKA.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bcast implementations in OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 15:20:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry I forgot to add the link. [1] is not the paper Jeff mentioned.
<br>
<p>[1] Jelena Pjesivac-Grbovic, Graham E. Fagg, Thara Angskun, George Bosilca,
<br>
Jack J. Dongarra, MPI Collective Algorithm Selection and Quadtree
<br>
Encoding, 13th European PVM/MPI Users' Group Meeting (
<br>
<a href="https://www.open-mpi.org/papers/euro-pvmmpi-2006-collective-alg-selection/">https://www.open-mpi.org/papers/euro-pvmmpi-2006-collective-alg-selection/</a>)
<br>
<p><p>On Tue, Apr 19, 2016 at 9:11 PM, Dorier, Matthieu &lt;mdorier_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; George,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your answer. Is [1] the paper mentioned by Jeff in an
</span><br>
<span class="quotelev1">&gt; earlier message (ICS 2004)?
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu
</span><br>
<span class="quotelev1">&gt; ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of George Bosilca [
</span><br>
<span class="quotelev1">&gt; bosilca_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, April 19, 2016 2:03 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] MPI_Bcast implementations in OpenMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Matthieu,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are talking about how Open MPI selects between different broadcast
</span><br>
<span class="quotelev1">&gt; algorithms you might want to read [1]. We have implemented a dozen
</span><br>
<span class="quotelev1">&gt; different broadcast algorithms and have run a set of tests to measure their
</span><br>
<span class="quotelev1">&gt; performance. We then used a quad tree clasiffication algorithm to minimize
</span><br>
<span class="quotelev1">&gt; the number of switch points, and then generated the C code to dynamically
</span><br>
<span class="quotelev1">&gt; make the selection based on the message size and the number of
</span><br>
<span class="quotelev1">&gt; participants. Take a look at the function
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_bcast_intra_dec_fixed in
</span><br>
<span class="quotelev1">&gt; ompi/mca/coll/tuned/coll_tuned_decision_fixed.c.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2016 at 4:13 PM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 15, 2016, at 9:18 AM, Dorier, Matthieu &lt;mdorier_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'd like to know how OpenMPI implements MPI_Bcast. And if different
</span><br>
<span class="quotelev2">&gt;&gt; implementations are provided, how one is selected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a fairly complicated topic.  This old paper is the foundation for
</span><br>
<span class="quotelev2">&gt;&gt; how Open MPI works (it's a bit different these days, but the basic concepts
</span><br>
<span class="quotelev2">&gt;&gt; described in this paper are still mostly relevant):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="https://www.open-mpi.org/papers/ics-2004/">https://www.open-mpi.org/papers/ics-2004/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28967.php">http://www.open-mpi.org/community/lists/users/2016/04/28967.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/28970.php">http://www.open-mpi.org/community/lists/users/2016/04/28970.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28971/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28972.php">Josh Hursey: "Re: [OMPI users] Fw: LSF's LSB_PJL_TASK_GEOMETRY + OpenMPI 1.10.2"</a>
<li><strong>Previous message:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28970.php">Dorier, Matthieu: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28995.php">Dave Love: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
