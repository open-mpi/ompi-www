<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May  3 10:03:10 2006" -->
<!-- isoreceived="20060503140310" -->
<!-- sent="Wed, 03 May 2006 15:58:47 +0200" -->
<!-- isosent="20060503135847" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with MPI_Comm_split and intercomms" -->
<!-- id="4458B717.4080501_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-03 09:58:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Reply:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Reply:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello list,
<br>
<p>i get some erroneous results from calls to MPI_Comm_split with an
<br>
intercommunicator as communicator.
<br>
<p>this is a brokendown testcase, the source is attached:
<br>
<p>test_split.c:
<br>
<p>mpi_comm_spwan(world, &quot;test_split_client&quot;, 1, &amp;inter)
<br>
for i=1:np
<br>
&nbsp;&nbsp;if rank &lt; i
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_comm_split(inter, 0, 0, &amp;inter2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* print new rank and size */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_comm_free(&amp;inter2)
<br>
&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_comm_split(inter, MPI_UNDEFINED, 0, &amp;inter2)
<br>
<p>test_split_client.c:
<br>
<p>mpi_comm_get_parent(&amp;inter)
<br>
while true
<br>
&nbsp;&nbsp;mpi_comm_split(inter, 0, 0, &amp;inter2)
<br>
&nbsp;&nbsp;/* print new remote size */
<br>
&nbsp;&nbsp;mpi_comm_free(&amp;inter2)
<br>
mpi_comm_free(&amp;inter)
<br>
<p><p>first, my expected results:
<br>
np = 2:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_split:0     test_split:1     test_split_client:0
<br>
i = 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0                      new remote size = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 1
<br>
<p>i = 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0     new rank = 1     new remote size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 2     new size = 2
<br>
...
<br>
<p>now some actually results:
<br>
a)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_split:0     test_split:1     test_split_client:0
<br>
i = 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0                      new remote size = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 2
<br>
<p>i = 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0     new rank = 1     new remote size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 2     new size = 2
<br>
<p>b)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_split:0     test_split:1     test_split_client:0
<br>
i = 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0                      new remote size = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 1
<br>
<p>i = 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0     new rank = 1     new remote size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 1     new size = 2
<br>
<p>c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;test_split:0     test_split:1     test_split_client:0
<br>
i = 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0                      new remote size = 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 2
<br>
<p>i = 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new rank = 0     new rank = 1     new remote size = 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;new size = 1     new size = 2
<br>
<p>something with the new size in rank 0 is wrong or the remote size
<br>
<p>can someone please pointout if my code is wrong, or something with open-mpi?
<br>
<p>greatings
<br>
bert wesarg
<br>
<p>ps: these test were run on an dual smp machine and open-mpi 1.0.2
<br>
pps: i attached also an split test with intracommunicators, these results
<br>
are all expected
<br>
<p><p><p>


<br><hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1204/test_split.c">test_split.c</a>
</ul>
<!-- attachment="test_split.c" -->
<hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1204/test_split_client.c">test_split_client.c</a>
</ul>
<!-- attachment="test_split_client.c" -->
<hr>
<ul>
<li>text/x-c attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1204/test_split_intra.c">test_split_intra.c</a>
</ul>
<!-- attachment="test_split_intra.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1205.php">Edgar Gabriel: "Re: [OMPI users] MPI_Intercomm_merge broken"</a>
<li><strong>Previous message:</strong> <a href="1203.php">Michael Kluskens: "[OMPI users] MPI_Intercomm_merge broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Reply:</strong> <a href="1206.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
<li><strong>Reply:</strong> <a href="1209.php">Edgar Gabriel: "Re: [OMPI users] Problem with MPI_Comm_split and intercomms"</a>
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
