<?
$subject_val = "Re: [OMPI users] deadlock when calling MPI_gatherv";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 21:08:22 2010" -->
<!-- isoreceived="20100427010822" -->
<!-- sent="Mon, 26 Apr 2010 20:07:39 -0500" -->
<!-- isosent="20100427010739" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] deadlock when calling MPI_gatherv" -->
<!-- id="COL117-DS68872D76112048B82CA4BE9030_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="239D642D-6761-4321-92DD-00ACAA20EC6B_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] deadlock when calling MPI_gatherv<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 21:07:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Reply:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are going to have to debug and trace the program to find out where it is
<br>
stopping.
<br>
You may want to try using KDbg, a graphical front end for the command line
<br>
debugger dbg, which makes it a LOT easier, or use Eclipse.
<br>
<p><p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Teng Lin
<br>
Sent: Monday, April 26, 2010 6:49 PM
<br>
To: Open MPI Users
<br>
Subject: [OMPI users] deadlock when calling MPI_gatherv
<br>
<p>Hi,
<br>
<p>We recently ran into deadlock when calling MPI_gatherv with Open MPI 1.3.4.
<br>
It seems to have something to do with sm at first. However, it still hangs
<br>
even after turning off sm btl.
<br>
<p>Any idea how to track down the problem?
<br>
<p>Thanks,
<br>
Teng
<br>
<p>#################################################
<br>
Stack trace for master node
<br>
#################################################
<br>
mca_btl_sm_component_progress
<br>
opal_progress
<br>
opal_condition_wait
<br>
ompi_request_default_wait_all
<br>
ompi_coll_tuned_sendrecv_actual
<br>
ompi_coll_tuned_barrier_intra_two_procs
<br>
ompi_coll_tuned_barrier_intra_dec_fixed
<br>
mca_coll_sync_gatherv
<br>
PMPI_Gatherv
<br>
<p><p>#################################################
<br>
Stack trace for slave node
<br>
#################################################
<br>
mca_btl_sm_component_progress
<br>
opal_progress
<br>
opal_condition_wait
<br>
ompi_request_wait_completion
<br>
mca_pml_ob1_recv
<br>
mca_coll_basic_gatherv_intra
<br>
mca_coll_sync_gatherv
<br>
<p><p>#################################################
<br>
Message queue from totalview
<br>
################################################
<br>
MPI_COMM_WORLD
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI_COMM_SELF
<br>
Comm_size                1
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI_COMM_NULL
<br>
Comm_size                0
<br>
Comm_rank               -2
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 3 DUP FROM 0
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 4 SPLIT FROM 3
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 5 SPLIT FROM 4
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 6 SPLIT FROM 4
<br>
Comm_size                1
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 7 DUP FROM 4
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives   
<br>
[0]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x80b9000
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              7 (0x00000007)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xb06fa010 -&gt; 0x00000000 (0)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
[1]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x80b9200
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              5 (0x00000005)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xb0c2a010 -&gt; 0x00000000 (0)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
[2]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x80b9400
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           1 (orterun&lt;xxxx&gt;.1)
<br>
&nbsp;&nbsp;&nbsp;Tag              3 (0x00000003)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xb115a010 -&gt; 0xc0ef9e79 (-1058038151)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
[3]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x80b9600
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           1 (orterun&lt;xxxx&gt;.1)
<br>
&nbsp;&nbsp;&nbsp;Tag              1 (0x00000001)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xb168a010 -&gt; 0xc0c662aa (-1060740438)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
[4]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x82a2500
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              11 (0x0000000b)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xafc9a010 -&gt; 0x00000000 (0)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
[5]
<br>
&nbsp;&nbsp;&nbsp;Receive: 0x82a2700
<br>
&nbsp;&nbsp;&nbsp;Data: 1 * MPI_CHAR
<br>
&nbsp;&nbsp;&nbsp;Status           Pending
<br>
&nbsp;&nbsp;&nbsp;Source           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              9 (0x00000009)
<br>
&nbsp;&nbsp;&nbsp;User Buffer      0xb01ca010 -&gt; 0x00000000 (0)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    1359312 (0x0014bdd0)
<br>
<p>Unexpected messages : no information available Pending sends [0]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x80b8500
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              4 (0x00000004)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xb0846010 -&gt; 0x40544279 (1079263865)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    2548 (0x000009f4)
<br>
[1]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x80b8780
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              6 (0x00000006)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xb0d76010 -&gt; 0x41a756bf (1101485759)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    2992 (0x00000bb0)
<br>
[2]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x80b8a00
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           1 (orterun&lt;xxxx&gt;.1)
<br>
&nbsp;&nbsp;&nbsp;Tag              0 (0x00000000)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xb12a6010 -&gt; 0xbf94cfc4 (-1080766524)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    3856 (0x00000f10)
<br>
[3]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x80b8c80
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           1 (orterun&lt;xxxx&gt;.1)
<br>
&nbsp;&nbsp;&nbsp;Tag              2 (0x00000002)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xb17d6010 -&gt; 0x400a1a6c (1074403948)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    3952 (0x00000f70)
<br>
[4]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x831f080
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              8 (0x00000008)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xafde6010 -&gt; 0xc0de2c50 (-1059181488)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    3292 (0x00000cdc)
<br>
[5]
<br>
&nbsp;&nbsp;&nbsp;Send: 0x831f300
<br>
&nbsp;&nbsp;&nbsp;Data transfer completed
<br>
&nbsp;&nbsp;&nbsp;Status           Complete
<br>
&nbsp;&nbsp;&nbsp;Target           0 (orterun&lt;xxxx&gt;.0)
<br>
&nbsp;&nbsp;&nbsp;Tag              10 (0x0000000a)
<br>
&nbsp;&nbsp;&nbsp;Buffer           0xb0316010 -&gt; 0x41169ca7 (1092000935)
<br>
&nbsp;&nbsp;&nbsp;Buffer Length    3232 (0x00000ca0)
<br>
<p>MPI COMMUNICATOR 8 SPLIT FROM 5
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<p>MPI COMMUNICATOR 9 SPLIT FROM 5
<br>
Comm_size                2
<br>
Comm_rank                0
<br>
Pending receives    : none
<br>
Unexpected messages : no information available
<br>
Pending sends       : none
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>In reply to:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Reply:</strong> <a href="12813.php">Teng Lin: "Re: [OMPI users] deadlock when calling MPI_gatherv"</a>
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
