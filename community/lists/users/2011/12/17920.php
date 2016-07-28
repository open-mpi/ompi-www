<?
$subject_val = "[OMPI users] MPI_Allgather problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  9 12:03:07 2011" -->
<!-- isoreceived="20111209170307" -->
<!-- sent="Fri, 9 Dec 2011 17:03:01 +0000" -->
<!-- isosent="20111209170301" -->
<!-- name="Brett Tully" -->
<!-- email="brett.tully_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Allgather problem" -->
<!-- id="CAEK89dCR-GEwMsa8-DZW0jeLm1b=aTGitRzGf8nmePYXfs5Nrw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Allgather problem<br>
<strong>From:</strong> Brett Tully (<em>brett.tully_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-09 12:03:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="17919.php">Patrik Jonsson: "[OMPI users] mca_btl_sm_component_progress read an unknown type of header"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I have not used OpenMPI much before, but am maintaining a large legacy
<br>
application. We noticed a bug to do with a call to MPI_Allgather as
<br>
summarised in this post to Stackoverflow:
<br>
<a href="http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results">http://stackoverflow.com/questions/8445398/mpi-allgather-produces-inconsistent-results</a>
<br>
<p>In the process of looking further into the problem, I noticed that the
<br>
following function results in strange behaviour.
<br>
<p>void test_all_gather() {
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;struct _TEST_ALL_GATHER {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int node;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int ierr, size, rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_size(MPI_COMM_WORLD, &amp;size);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ierr = MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;struct _TEST_ALL_GATHER local;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;struct _TEST_ALL_GATHER *gathered;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gathered = (struct _TEST_ALL_GATHER*) malloc(size * sizeof(*gathered));
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;local.node = rank;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Allgather(&amp;local, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gathered, sizeof(struct _TEST_ALL_GATHER), MPI_BYTE,
<br>
MPI_COMM_WORLD);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;for (i = 0; i &lt; numnodes; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(void) printf(&quot;gathered[%d].node = %d\n&quot;, i, gathered[i].node);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;FREE(gathered);
<br>
}
<br>
<p>At one point, this function printed the following:
<br>
gathered[0].node = 2
<br>
gathered[1].node = 3
<br>
gathered[2].node = 2
<br>
gathered[3].node = 3
<br>
gathered[4].node = 4
<br>
gathered[5].node = 5
<br>
<p>Can anyone suggest a place to start looking into why this might be
<br>
happening? There is a section of the code that calls MPI_Comm_split, but I
<br>
am not sure if that is related...
<br>
<p>Running on Ubuntu 11.10 and a summary of ompi_info:
<br>
Package: Open MPI buildd_at_allspice Distribution
<br>
Open MPI: 1.4.3
<br>
Open MPI SVN revision: r23834
<br>
Open MPI release date: Oct 05, 2010
<br>
Open RTE: 1.4.3
<br>
Open RTE SVN revision: r23834
<br>
Open RTE release date: Oct 05, 2010
<br>
OPAL: 1.4.3
<br>
OPAL SVN revision: r23834
<br>
OPAL release date: Oct 05, 2010
<br>
Ident string: 1.4.3
<br>
Prefix: /usr
<br>
Configured architecture: x86_64-pc-linux-gnu
<br>
Configure host: allspice
<br>
Configured by: buildd
<br>
<p>Thanks!
<br>
Brett
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17920/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Previous message:</strong> <a href="17919.php">Patrik Jonsson: "[OMPI users] mca_btl_sm_component_progress read an unknown type of header"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
<li><strong>Reply:</strong> <a href="17921.php">teng ma: "Re: [OMPI users] MPI_Allgather problem"</a>
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
