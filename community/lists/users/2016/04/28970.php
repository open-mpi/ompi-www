<?
$subject_val = "Re: [OMPI users] MPI_Bcast implementations in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 15:11:16 2016" -->
<!-- isoreceived="20160419191116" -->
<!-- sent="Tue, 19 Apr 2016 19:11:14 +0000" -->
<!-- isosent="20160419191114" -->
<!-- name="Dorier, Matthieu" -->
<!-- email="mdorier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bcast implementations in OpenMPI" -->
<!-- id="37142D5FC373A846ACE4F75AA11EA84D4C9FCB7C_at_DITKA.anl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMJJpkXJ-zNTMjYOLWARjh0P=YYtJ6jrdeqhU+jqjLuCP9YT3g_at_mail.gmail.com" -->
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
<strong>From:</strong> Dorier, Matthieu (<em>mdorier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-19 15:11:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thank you for your answer. Is [1] the paper mentioned by Jeff in an earlier message (ICS 2004)?
<br>
Thanks
<br>
<p>Matthieu
<br>
________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of George Bosilca [bosilca_at_[hidden]]
<br>
Sent: Tuesday, April 19, 2016 2:03 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Bcast implementations in OpenMPI
<br>
<p>Matthieu,
<br>
<p>If you are talking about how Open MPI selects between different broadcast algorithms you might want to read [1]. We have implemented a dozen different broadcast algorithms and have run a set of tests to measure their performance. We then used a quad tree clasiffication algorithm to minimize the number of switch points, and then generated the C code to dynamically make the selection based on the message size and the number of participants. Take a look at the function ompi_coll_tuned_bcast_intra_dec_fixed in ompi/mca/coll/tuned/coll_tuned_decision_fixed.c.
<br>
<p>&nbsp;George.
<br>
<p><p><p>On Tue, Apr 19, 2016 at 4:13 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
<br>
On Apr 15, 2016, at 9:18 AM, Dorier, Matthieu &lt;mdorier_at_[hidden]&lt;mailto:mdorier_at_[hidden]&gt;&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to know how OpenMPI implements MPI_Bcast. And if different implementations are provided, how one is selected.
</span><br>
<p>This is a fairly complicated topic.  This old paper is the foundation for how Open MPI works (it's a bit different these days, but the basic concepts described in this paper are still mostly relevant):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://www.open-mpi.org/papers/ics-2004/">https://www.open-mpi.org/papers/ics-2004/</a>
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]&lt;mailto:jsquyres_at_[hidden]&gt;
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
_______________________________________________
users mailing list
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28967.php">http://www.open-mpi.org/community/lists/users/2016/04/28967.php</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28970/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="28969.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="28971.php">George Bosilca: "Re: [OMPI users] MPI_Bcast implementations in OpenMPI"</a>
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
