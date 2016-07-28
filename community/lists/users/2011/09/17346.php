<?
$subject_val = "[OMPI users] MPI hangs on multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 20:48:09 2011" -->
<!-- isoreceived="20110920004809" -->
<!-- sent="Tue, 20 Sep 2011 07:48:04 +0700" -->
<!-- isosent="20110920004804" -->
<!-- name="Ole Nielsen" -->
<!-- email="ole.moller.nielsen_at_[hidden]" -->
<!-- subject="[OMPI users] MPI hangs on multiple nodes" -->
<!-- id="CALcLSfqsYwZR_yGmTpuGwcX7AbJKntCxfQrP2quX--S5tdQtOA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI hangs on multiple nodes<br>
<strong>From:</strong> Ole Nielsen (<em>ole.moller.nielsen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 20:48:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your suggestion Gus, we need a way of debugging what is going on.
<br>
I am pretty sure the problem lies with our cluster configuration. I know MPI
<br>
simply relies on the underlying network. However, we can ping and ssh to all
<br>
nodes (and in between and pair as well) so it is currently a mystery why MPI
<br>
doesn't communicate across nodes on our cluster.
<br>
Two further questions for the group
<br>
<p>&nbsp;&nbsp;&nbsp;1. I would love to run the test program connectivity.c, but cannot find
<br>
&nbsp;&nbsp;&nbsp;it anywhere. Can anyone help please?
<br>
&nbsp;&nbsp;&nbsp;2. After having left the job hanging over night we got the message
<br>
&nbsp;&nbsp;&nbsp;[node5][[9454,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
<br>
&nbsp;&nbsp;&nbsp;mca_btl_tcp_frag_recv: readv failed: Connection timed out (110). Does anyone
<br>
&nbsp;&nbsp;&nbsp;know what this means?
<br>
<p><p>Cheers and thanks
<br>
Ole
<br>
PS - I don't see how separate buffers would help. Recall that the test
<br>
program I use works fine on other installations and indeed when run on one
<br>
the cores of one Node.
<br>
<p><p><p><p>Message: 11
<br>
Date: Mon, 19 Sep 2011 10:37:02 -0400
<br>
From: Gus Correa &lt;gus_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] RE :  MPI hangs on multiple nodes
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;4E77538E.3070007_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=iso-8859-1; format=flowed
<br>
<p>Hi Ole
<br>
<p>You could try the examples/connectivity.c program in the
<br>
OpenMPI source tree, to test if everything is alright.
<br>
It also hints how to solve the buffer re-use issue
<br>
that Sebastien [rightfully] pointed out [i.e., declare separate
<br>
buffers for MPI_Send and MPI_Recv].
<br>
<p>Gus Correa
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17346/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17347.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17345.php">Blosch, Edwin L: "[OMPI users] How could OpenMPI (or MVAPICH) affect floating-point results?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Reply:</strong> <a href="17359.php">Gus Correa: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
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
