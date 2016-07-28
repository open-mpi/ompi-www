<?
$subject_val = "Re: [OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 13:43:21 2011" -->
<!-- isoreceived="20111209184321" -->
<!-- sent="Fri, 9 Dec 2011 13:43:13 -0500" -->
<!-- isosent="20111209184313" -->
<!-- name="teng ma" -->
<!-- email="tma_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather problem" -->
<!-- id="CANQYCiaWpmXSwN9dEkM9bYg9Yz4Q+aq42M6y2oAHN1t8SuzEPg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAEK89dCR-GEwMsa8-DZW0jeLm1b=aTGitRzGf8nmePYXfs5Nrw_at_mail.gmail.com" -->
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
<strong>From:</strong> teng ma (<em>tma_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 13:43:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17948.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="17948.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I guess your output is from different ranks.   YOu can add rank infor
<br>
inside print to tell like follows:
<br>
<p>(void) printf(&quot;rank %d: gathered[%d].node = %d\n&quot;, rank, i,
<br>
gathered[i].node);
<br>
<p><span class="quotelev1">&gt;From my side, I did not see anything wrong from your code in Open MPI
</span><br>
1.4.3. after I add rank, the output is
<br>
rank 5: gathered[0].node = 0
<br>
rank 5: gathered[1].node = 1
<br>
rank 5: gathered[2].node = 2
<br>
rank 5: gathered[3].node = 3
<br>
rank 5: gathered[4].node = 4
<br>
rank 5: gathered[5].node = 5
<br>
rank 3: gathered[0].node = 0
<br>
rank 3: gathered[1].node = 1
<br>
rank 3: gathered[2].node = 2
<br>
rank 3: gathered[3].node = 3
<br>
rank 3: gathered[4].node = 4
<br>
rank 3: gathered[5].node = 5
<br>
rank 1: gathered[0].node = 0
<br>
rank 1: gathered[1].node = 1
<br>
rank 1: gathered[2].node = 2
<br>
rank 1: gathered[3].node = 3
<br>
rank 1: gathered[4].node = 4
<br>
rank 1: gathered[5].node = 5
<br>
rank 0: gathered[0].node = 0
<br>
rank 0: gathered[1].node = 1
<br>
rank 0: gathered[2].node = 2
<br>
rank 0: gathered[3].node = 3
<br>
rank 0: gathered[4].node = 4
<br>
rank 0: gathered[5].node = 5
<br>
rank 4: gathered[0].node = 0
<br>
rank 4: gathered[1].node = 1
<br>
rank 4: gathered[2].node = 2
<br>
rank 4: gathered[3].node = 3
<br>
rank 4: gathered[4].node = 4
<br>
rank 4: gathered[5].node = 5
<br>
rank 2: gathered[0].node = 0
<br>
rank 2: gathered[1].node = 1
<br>
rank 2: gathered[2].node = 2
<br>
rank 2: gathered[3].node = 3
<br>
rank 2: gathered[4].node = 4
<br>
rank 2: gathered[5].node = 5
<br>
<p>Is that what you expected?
<br>
<p>On Fri, Dec 9, 2011 at 12:03 PM, Brett Tully &lt;brett.tully_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have not used OpenMPI much before, but am maintaining a large legacy
</span><br>
<span class="quotelev1">&gt; application. We noticed a bug to do with a call to MPI_Allgather as
</span><br>
<span class="quotelev1">&gt; summarised in this post to Stackoverflow:
</span><br>
<span class="quotelev1">&gt; <a href="http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results">http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the process of looking further into the problem, I noticed that the
</span><br>
<span class="quotelev1">&gt; following function results in strange behaviour.
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
<span class="quotelev1">&gt;         gathered, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
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
<span class="quotelev1">&gt; Can anyone suggest a place to start looking into why this might be
</span><br>
<span class="quotelev1">&gt; happening? There is a section of the code that calls MPI_Comm_split, but I
</span><br>
<span class="quotelev1">&gt; am not sure if that is related...
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
<p><p><p><pre>
-- 
| Teng Ma          Univ. of Tennessee |
| tma_at_[hidden]        Knoxville, TN |
| <a href="http://web.eecs.utk.edu/~tma/">http://web.eecs.utk.edu/~tma/</a>       |
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17921/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17922.php">Gary Gorbet: "[OMPI users] MPI_COMM_split hanging"</a>
<li><strong>Previous message:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<li><strong>In reply to:</strong> <a href="17920.php">Brett Tully: "[OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17948.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="17948.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
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
