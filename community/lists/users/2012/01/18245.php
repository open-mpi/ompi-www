<?
$subject_val = "[OMPI users] MPI_Intercomm_create hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 23 11:04:00 2012" -->
<!-- isoreceived="20120123160400" -->
<!-- sent="Mon, 23 Jan 2012 17:03:56 +0100" -->
<!-- isosent="20120123160356" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Intercomm_create hangs" -->
<!-- id="CAKbzMGcFBdeJQN8JiBUCrEbE3SR+EjMzYt6XwLHdJHKLdQFbLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Intercomm_create hangs<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-23 11:03:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18246.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Reply:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I've got a really strange problem:
<br>
<p>I've got an application which creates intercommunicators between a
<br>
master and some workers.
<br>
<p>When i run it on our cluster with 11  processes it works,
<br>
when i run it with 12 processes it hangs inside MPI_Intercomm_create().
<br>
<p>This is the hostfile:
<br>
&nbsp;&nbsp;squid_0.uzh.ch  slots=3  max-slots=3
<br>
&nbsp;&nbsp;squid_1.uzh.ch  slots=2  max-slots=2
<br>
&nbsp;&nbsp;squid_2.uzh.ch  slots=1  max-slots=1
<br>
&nbsp;&nbsp;squid_3.uzh.ch  slots=1  max-slots=1
<br>
&nbsp;&nbsp;triops.uzh.ch   slots=8 max-slots=8
<br>
<p>Actually all squid_X have 4 cores, but i managed to reduce the number of
<br>
processes needed for failure by making the above settings.
<br>
<p>So with all available squid cores and 3 triops cores it works,
<br>
but with 4 triops cores it hangs.
<br>
<p>On the other hand, if i use all 16 squid cores (but no triops cores)
<br>
it works, too.
<br>
<p>If i start the application not from triopps, but froim another workstation,
<br>
i have a similar pattern of Intercomm_create failures.
<br>
<p>Note that with the above hostfile a simple HelloMPI works also with 14
<br>
or more processes.
<br>
<p>The frustrating thing is that this exact same code has worked before!
<br>
<p>Does anybody have an explanation?
<br>
Thank You
<br>
<p>I managed to simplify the application:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>int main(int iArgC, char *apArgV[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iResult = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iNumProcs = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int iID = -1;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;iArgC, &amp;apArgV);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;iNumProcs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;iID);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int iKey;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (iID == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iKey = 0;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;iKey = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm  commInter1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm  commInter2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm  commIntra;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_split(MPI_COMM_WORLD, iKey, iID, &amp;commIntra);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;int iRankM;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(commIntra, &amp;iRankM);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Local rank: %d\n&quot;, iRankM);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;switch (iKey) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case 0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Creating intercomm 1 for Master (%d)\n&quot;, iID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_create(commIntra, 0, MPI_COMM_WORLD, 1, 01, &amp;commInter2);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;case 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Creating intercomm 1 for FH (%d)\n&quot;, iID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Intercomm_create(commIntra, 0, MPI_COMM_WORLD, 0, 01, &amp;commInter1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;finalizing\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;exiting with %d\n&quot;, iResult);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return iResult;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18246.php">MM: "Re: [OMPI users] localhost only"</a>
<li><strong>Previous message:</strong> <a href="18244.php">Paul Kapinos: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
<li><strong>Reply:</strong> <a href="18311.php">Jeff Squyres: "Re: [OMPI users] MPI_Intercomm_create hangs"</a>
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
