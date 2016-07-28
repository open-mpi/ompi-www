<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 11:06:54 2008" -->
<!-- isoreceived="20080424150654" -->
<!-- sent="Thu, 24 Apr 2008 11:06:45 -0400" -->
<!-- isosent="20080424150645" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="853456DD-2491-4B47-A096-C375532E6993_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48107C7B.2070706_at_fgi.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Message compression in OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 11:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5495.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, even in this particular condition (over internet)1  
<br>
compression make sense only for very specific data. The problem is  
<br>
that usually the compression algorithm is very expensive if you want  
<br>
to really get a interesting factor of size reduction. And there is the  
<br>
tradeoff, what you save in terms of data transfer you lose in terms of  
<br>
compression time. In other terms, the compression became interesting  
<br>
in only 2 scenarios: you have a very congested network (really very  
<br>
very congested) or you have a network with a limited bandwidth.
<br>
<p>The algorithm use in the paper you cited is fast, but unfortunately  
<br>
very specific for MPI_DOUBLE and only works if the data exhibit the  
<br>
properties I cited in my previous email. The generic compression  
<br>
algorithms are at least one order of magnitude slower. And then again,  
<br>
one needs a very slow network in order to get any benefits from doing  
<br>
the compression ... And of course slow networks is not exactly the  
<br>
most common place where you will find MPI applications.
<br>
<p>But as Jeff stated in his email, contributions are always welcomed :)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Apr 24, 2008, at 8:26 AM, Tomas Ukkonen wrote:
<br>
<p><span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The paper you cited, while presenting a particular implementation  
</span><br>
<span class="quotelev2">&gt;&gt; doesn't bring present any new ideas. The compression of the data  
</span><br>
<span class="quotelev2">&gt;&gt; was studied for long time, and [unfortunately] it always came back  
</span><br>
<span class="quotelev2">&gt;&gt; to the same result. In the general case, not worth the effort !
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now of course, if one limit itself to very regular applications  
</span><br>
<span class="quotelev2">&gt;&gt; (such as the one presented in the paper), where the matrices  
</span><br>
<span class="quotelev2">&gt;&gt; involved in the computation are well conditioned (such as in the  
</span><br>
<span class="quotelev2">&gt;&gt; paper), and if you only use MPI_DOUBLE (\cite{same_paper}), and  
</span><br>
<span class="quotelev2">&gt;&gt; finally if you only expect to run over slow Ethernet (1Gbs)  
</span><br>
<span class="quotelev2">&gt;&gt; (\cite{same_paper_again})... then yes one might get some benefit.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, you are probably right that its not worth the effort in general  
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt; especially not in HPC environments where you have very fast network.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I can think of (rather important) special cases where it is  
</span><br>
<span class="quotelev1">&gt; important
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - non HPC environments with slow network: beowulf clusters and/or
</span><br>
<span class="quotelev1">&gt;   internet + normal PCs where you use existing workstations and  
</span><br>
<span class="quotelev1">&gt; network
</span><br>
<span class="quotelev1">&gt;   for computations.
</span><br>
<span class="quotelev1">&gt; - communication/io-bound computations where you transfer
</span><br>
<span class="quotelev1">&gt;   large redundant datasets between nodes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So it would be nice to be able to turn on the compression (for spefic
</span><br>
<span class="quotelev1">&gt; communicators and/or data transfers) when you need it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Tomas
</span><br>
<span class="quotelev2">&gt;&gt;   george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I read from somewhere that OpenMPI supports
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some kind of data compression but I couldn't find
</span><br>
<span class="quotelev3">&gt;&gt;&gt; any information about it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this true and how it can be used?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anyone have any experiences about using it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it possible to use compression in just some
</span><br>
<span class="quotelev3">&gt;&gt;&gt; subset of communications (communicator
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specific compression settings)?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In our MPI application we are transferring large
</span><br>
<span class="quotelev3">&gt;&gt;&gt; amounts of sparse/redundant data that compresses
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very well. Also my initial tests showed significant
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improvements in performance.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are also articles that suggest that compression
</span><br>
<span class="quotelev3">&gt;&gt;&gt; should be used [1].
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [1] J. Ke, M. Burtcher and E. Speight.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Runtime Compression of MPI Messages to Improve the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Performance and Scalability of Parallel Applications.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tomas
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5496/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5497.php">Doug Reeder: "Re: [OMPI users] install intel mac with Laopard"</a>
<li><strong>Previous message:</strong> <a href="5495.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5485.php">Tomas Ukkonen: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5513.php">Aurélien Bouteiller: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
