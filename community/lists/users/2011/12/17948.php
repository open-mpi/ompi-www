<?
$subject_val = "Re: [OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 13 13:18:19 2011" -->
<!-- isoreceived="20111213181819" -->
<!-- sent="Tue, 13 Dec 2011 18:18:14 +0000" -->
<!-- isosent="20111213181814" -->
<!-- name="Brett Tully" -->
<!-- email="brett.tully_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allgather problem" -->
<!-- id="CAEK89dANOuHqDcCcjND7eXggPxRubNs7yDNQK3jgKvAiA0cXhQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CANQYCiaWpmXSwN9dEkM9bYg9Yz4Q+aq42M6y2oAHN1t8SuzEPg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brett Tully (<em>brett.tully_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-13 13:18:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17947.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, your output is what I was expecting. Actually, your output is what I
<br>
get if I compile the code I attached in my first email. However, our
<br>
application is actually doing some 'smart' stuff when you dynamically
<br>
allocate memory by putting headers around the memory block -- I am guessing
<br>
that this can interfere with MPI_Allgather(). What is strange is that this
<br>
problem doesn't surface on the other machine that we are working with
<br>
(OpenSUSE) nor does it appear if we run it with valgrind. This is probably
<br>
a dumb question, but if you were to see this problem, where is the first
<br>
place your gut would tell you to look?
<br>
Thanks,
<br>
Brett.
<br>
<p>On Fri, Dec 9, 2011 at 6:43 PM, teng ma &lt;tma_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I guess your output is from different ranks.   YOu can add rank infor
</span><br>
<span class="quotelev1">&gt; inside print to tell like follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (void) printf(&quot;rank %d: gathered[%d].node = %d\n&quot;, rank, i,
</span><br>
<span class="quotelev1">&gt; gathered[i].node);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From my side, I did not see anything wrong from your code in Open MPI
</span><br>
<span class="quotelev1">&gt; 1.4.3. after I add rank, the output is
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
<span class="quotelev1">&gt; On Fri, Dec 9, 2011 at 12:03 PM, Brett Tully &lt;brett.tully_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have not used OpenMPI much before, but am maintaining a large legacy
</span><br>
<span class="quotelev2">&gt;&gt; application. We noticed a bug to do with a call to MPI_Allgather as
</span><br>
<span class="quotelev2">&gt;&gt; summarised in this post to Stackoverflow:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results">http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the process of looking further into the problem, I noticed that the
</span><br>
<span class="quotelev2">&gt;&gt; following function results in strange behaviour.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void test_all_gather() {
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     struct _TEST_ALL_GATHER {
</span><br>
<span class="quotelev2">&gt;&gt;         int node;
</span><br>
<span class="quotelev2">&gt;&gt;     };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int ierr, size, rank;
</span><br>
<span class="quotelev2">&gt;&gt;     ierr = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
</span><br>
<span class="quotelev2">&gt;&gt;     ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     struct _TEST_ALL_GATHER local;
</span><br>
<span class="quotelev2">&gt;&gt;     struct _TEST_ALL_GATHER *gathered;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     gathered = (struct _TEST_ALL_GATHER*) malloc(size *
</span><br>
<span class="quotelev2">&gt;&gt; sizeof(*gathered));
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     local.node = rank;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     MPI_Allgather(&amp;local, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;&gt;         gathered, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     int i;
</span><br>
<span class="quotelev2">&gt;&gt;     for (i = 0; i &lt; numnodes; ++i) {
</span><br>
<span class="quotelev2">&gt;&gt;         (void) printf(&quot;gathered[%d].node = %d\n&quot;, i, gathered[i].node);
</span><br>
<span class="quotelev2">&gt;&gt;     }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     FREE(gathered);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At one point, this function printed the following:
</span><br>
<span class="quotelev2">&gt;&gt; gathered[0].node = 2
</span><br>
<span class="quotelev2">&gt;&gt; gathered[1].node = 3
</span><br>
<span class="quotelev2">&gt;&gt; gathered[2].node = 2
</span><br>
<span class="quotelev2">&gt;&gt; gathered[3].node = 3
</span><br>
<span class="quotelev2">&gt;&gt; gathered[4].node = 4
</span><br>
<span class="quotelev2">&gt;&gt; gathered[5].node = 5
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can anyone suggest a place to start looking into why this might be
</span><br>
<span class="quotelev2">&gt;&gt; happening? There is a section of the code that calls MPI_Comm_split, but I
</span><br>
<span class="quotelev2">&gt;&gt; am not sure if that is related...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running on Ubuntu 11.10 and a summary of ompi_info:
</span><br>
<span class="quotelev2">&gt;&gt; Package: Open MPI buildd_at_allspice Distribution
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;&gt; Open RTE release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;&gt; OPAL: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; OPAL SVN revision: r23834
</span><br>
<span class="quotelev2">&gt;&gt; OPAL release date: Oct 05, 2010
</span><br>
<span class="quotelev2">&gt;&gt; Ident string: 1.4.3
</span><br>
<span class="quotelev2">&gt;&gt; Prefix: /usr
</span><br>
<span class="quotelev2">&gt;&gt; Configured architecture: x86_64-pc-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; Configure host: allspice
</span><br>
<span class="quotelev2">&gt;&gt; Configured by: buildd
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; Brett
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
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17948/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17949.php">Joao Amaral: "[OMPI users] Open MPI 1.5.4 on windows g95 / mpif90 support"</a>
<li><strong>Previous message:</strong> <a href="17947.php">Erin Rasmussen: "Re: [OMPI users] Specifying GPU on mpi"</a>
<li><strong>In reply to:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18276.php">Brett Tully: "Re: [OMPI users] MPI_Allgather problem"</a>
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
