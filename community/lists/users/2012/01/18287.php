<?
$subject_val = "Re: [OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 26 17:05:40 2012" -->
<!-- isoreceived="20120126220540" -->
<!-- sent="Thu, 26 Jan 2012 17:05:35 -0500" -->
<!-- isosent="20120126220535" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather problem" -->
<!-- id="E2739C17-F1C3-4372-BF37-EC6DDBA16530_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAEK89dC94Hy=_UfBmDMROCtFpODDvHBXQui_0jXPTHouSS75MA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allgather problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-26 17:05:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What version did you upgrade to?  (we don't control the Ubuntu packaging)
<br>
<p>I see a bullet in the soon-to-be-released 1.4.5 release notes:
<br>
<p>- Fix obscure cases where MPI_ALLGATHER could crash.  Thanks to Andrew
<br>
&nbsp;&nbsp;Senin for reporting the problem.
<br>
<p>But that would be surprising if this is what fixed your issue, especially since it's not released yet.  :-)
<br>
<p><p><p>On Jan 26, 2012, at 5:24 AM, Brett Tully wrote:
<br>
<p><span class="quotelev1">&gt; As of two days ago, this problem has disappeared and the tests that I had written and run each night are now passing. Having looked through the update log of my machine (Ubuntu 11.10) it appears as though I got a new version of mpi-default-dev (0.6ubuntu1). I would like to understand this problem in more detail -- is it possible to see what changed in this update?
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Brett.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 9, 2011 at 6:43 PM, teng ma &lt;tma_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I guess your output is from different ranks.   YOu can add rank infor inside print to tell like follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (void) printf(&quot;rank %d: gathered[%d].node = %d\n&quot;, rank, i, gathered[i].node);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From my side, I did not see anything wrong from your code in Open MPI 1.4.3. after I add rank, the output is
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 5: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 3: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 1: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 0: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 4: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[0].node = 0
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[1].node = 1
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; rank 2: gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is that what you expected? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Dec 9, 2011 at 12:03 PM, Brett Tully &lt;brett.tully_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have not used OpenMPI much before, but am maintaining a large legacy application. We noticed a bug to do with a call to MPI_Allgather as summarised in this post to Stackoverflow: <a href="http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results">http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In the process of looking further into the problem, I noticed that the following function results in strange behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; void test_all_gather() {
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     struct _TEST_ALL_GATHER {
</span><br>
<span class="quotelev1">&gt;         int node;
</span><br>
<span class="quotelev1">&gt;     };
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int ierr, size, rank;
</span><br>
<span class="quotelev1">&gt;     ierr = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev1">&gt;     ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     struct _TEST_ALL_GATHER local;
</span><br>
<span class="quotelev1">&gt;     struct _TEST_ALL_GATHER *gathered;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     gathered = (struct _TEST_ALL_GATHER*) malloc(size * sizeof(*gathered));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     local.node = rank;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     MPI_Allgather(&amp;local, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE, 
</span><br>
<span class="quotelev1">&gt;         gathered, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     int i;
</span><br>
<span class="quotelev1">&gt;     for (i = 0; i &lt; numnodes; ++i) {
</span><br>
<span class="quotelev1">&gt;         (void) printf(&quot;gathered[%d].node = %d\n&quot;, i, gathered[i].node);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     FREE(gathered);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At one point, this function printed the following:
</span><br>
<span class="quotelev1">&gt; gathered[0].node = 2
</span><br>
<span class="quotelev1">&gt; gathered[1].node = 3
</span><br>
<span class="quotelev1">&gt; gathered[2].node = 2
</span><br>
<span class="quotelev1">&gt; gathered[3].node = 3
</span><br>
<span class="quotelev1">&gt; gathered[4].node = 4
</span><br>
<span class="quotelev1">&gt; gathered[5].node = 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone suggest a place to start looking into why this might be happening? There is a section of the code that calls MPI_Comm_split, but I am not sure if that is related...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running on Ubuntu 11.10 and a summary of ompi_info:
</span><br>
<span class="quotelev1">&gt; Package: Open MPI buildd_at_allspice Distribution
</span><br>
<span class="quotelev1">&gt; Open MPI: 1.4.3
</span><br>
<span class="quotelev1">&gt; Open MPI SVN revision: r23834
</span><br>
<span class="quotelev1">&gt; Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; Open RTE: 1.4.3
</span><br>
<span class="quotelev1">&gt; Open RTE SVN revision: r23834
</span><br>
<span class="quotelev1">&gt; Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; OPAL: 1.4.3
</span><br>
<span class="quotelev1">&gt; OPAL SVN revision: r23834
</span><br>
<span class="quotelev1">&gt; OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev1">&gt; Ident string: 1.4.3
</span><br>
<span class="quotelev1">&gt; Prefix: /usr
</span><br>
<span class="quotelev1">&gt; Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev1">&gt; Configure host: allspice
</span><br>
<span class="quotelev1">&gt; Configured by: buildd
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; Brett
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; | Teng Ma          Univ. of Tennessee |
</span><br>
<span class="quotelev1">&gt; | tma_at_[hidden]        Knoxville, TN |
</span><br>
<span class="quotelev1">&gt; | <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18288.php">Gabriele Fatigati: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>Previous message:</strong> <a href="18286.php">Jeff Squyres: "Re: [OMPI users] MPI_AllGather null terminator character"</a>
<li><strong>In reply to:</strong> <a href="18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="18290.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
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
