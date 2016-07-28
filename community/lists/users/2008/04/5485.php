<?
$subject_val = "Re: [OMPI users] Message compression in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 08:26:46 2008" -->
<!-- isoreceived="20080424122646" -->
<!-- sent="Thu, 24 Apr 2008 15:26:35 +0300" -->
<!-- isosent="20080424122635" -->
<!-- name="Tomas Ukkonen" -->
<!-- email="tomas.ukkonen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Message compression in OpenMPI" -->
<!-- id="48107C7B.2070706_at_fgi.fi" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2F3EA1D2-6AD6-4B9E-9ADE-B63C19BB1D93_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tomas Ukkonen (<em>tomas.ukkonen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 08:26:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5486.php">Alberto Giannetti: "[OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; The paper you cited, while presenting a particular implementation
</span><br>
<span class="quotelev1">&gt; doesn't bring present any new ideas. The compression of the data was
</span><br>
<span class="quotelev1">&gt; studied for long time, and [unfortunately] it always came back to the
</span><br>
<span class="quotelev1">&gt; same result. In the general case, not worth the effort !
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now of course, if one limit itself to very regular applications (such
</span><br>
<span class="quotelev1">&gt; as the one presented in the paper), where the matrices involved in the
</span><br>
<span class="quotelev1">&gt; computation are well conditioned (such as in the paper), and if you
</span><br>
<span class="quotelev1">&gt; only use MPI_DOUBLE (\cite{same_paper}), and finally if you only
</span><br>
<span class="quotelev1">&gt; expect to run over slow Ethernet (1Gbs) (\cite{same_paper_again})...
</span><br>
<span class="quotelev1">&gt; then yes one might get some benefit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, you are probably right that its not worth the effort in general and
<br>
especially not in HPC environments where you have very fast network.
<br>
<p>But I can think of (rather important) special cases where it is important
<br>
<p>- non HPC environments with slow network: beowulf clusters and/or
<br>
&nbsp;&nbsp;internet + normal PCs where you use existing workstations and network
<br>
&nbsp;&nbsp;for computations.
<br>
- communication/io-bound computations where you transfer
<br>
&nbsp;&nbsp;large redundant datasets between nodes
<br>
<p>So it would be nice to be able to turn on the compression (for spefic
<br>
communicators and/or data transfers) when you need it.
<br>
<p><pre>
-- 
Tomas
&gt;   george.
&gt;
&gt; On Apr 22, 2008, at 9:03 AM, Tomas Ukkonen wrote:
&gt;
&gt;&gt; Hello
&gt;&gt;
&gt;&gt; I read from somewhere that OpenMPI supports
&gt;&gt; some kind of data compression but I couldn't find
&gt;&gt; any information about it.
&gt;&gt;
&gt;&gt; Is this true and how it can be used?
&gt;&gt;
&gt;&gt; Does anyone have any experiences about using it?
&gt;&gt;
&gt;&gt; Is it possible to use compression in just some
&gt;&gt; subset of communications (communicator
&gt;&gt; specific compression settings)?
&gt;&gt;
&gt;&gt; In our MPI application we are transferring large
&gt;&gt; amounts of sparse/redundant data that compresses
&gt;&gt; very well. Also my initial tests showed significant
&gt;&gt; improvements in performance.
&gt;&gt;
&gt;&gt; There are also articles that suggest that compression
&gt;&gt; should be used [1].
&gt;&gt;
&gt;&gt; [1] J. Ke, M. Burtcher and E. Speight.
&gt;&gt; Runtime Compression of MPI Messages to Improve the
&gt;&gt; Performance and Scalability of Parallel Applications.
&gt;&gt;
&gt;&gt;
&gt;&gt; Thanks in advance,
&gt;&gt; Tomas
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt; ------------------------------------------------------------------------
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5486.php">Alberto Giannetti: "[OMPI users] PubSub and MPI"</a>
<li><strong>Previous message:</strong> <a href="5484.php">Alberto Giannetti: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5452.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5487.php">Jeff Squyres: "Re: [OMPI users] Message compression in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5496.php">George Bosilca: "Re: [OMPI users] Message compression in OpenMPI"</a>
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
