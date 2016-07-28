<?
$subject_val = "Re: [OMPI users] MPI_Intercomm_create hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan 28 08:19:53 2012" -->
<!-- isoreceived="20120128131953" -->
<!-- sent="Sat, 28 Jan 2012 08:19:48 -0500" -->
<!-- isosent="20120128131948" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Intercomm_create hangs" -->
<!-- id="EA0FF428-7CFE-4E4B-854B-9CA0E379906C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGcFBdeJQN8JiBUCrEbE3SR+EjMzYt6XwLHdJHKLdQFbLw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Intercomm_create hangs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-28 08:19:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>In reply to:</strong> <a href="18245.php">jody: "[OMPI users] MPI_Intercomm_create hangs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Strange -- this almost implies a race condition somewhere.
<br>
<p>I don't see anything wrong with your application (other than it doesn't free the communicators, but that's not an error).
<br>
<p>Edgar -- the intercomm code is yours.  Could you have a look?
<br>
<p><p><p>On Jan 23, 2012, at 11:03 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I've got a really strange problem:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've got an application which creates intercommunicators between a
</span><br>
<span class="quotelev1">&gt; master and some workers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When i run it on our cluster with 11  processes it works,
</span><br>
<span class="quotelev1">&gt; when i run it with 12 processes it hangs inside MPI_Intercomm_create().
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the hostfile:
</span><br>
<span class="quotelev1">&gt;  squid_0.uzh.ch  slots=3  max-slots=3
</span><br>
<span class="quotelev1">&gt;  squid_1.uzh.ch  slots=2  max-slots=2
</span><br>
<span class="quotelev1">&gt;  squid_2.uzh.ch  slots=1  max-slots=1
</span><br>
<span class="quotelev1">&gt;  squid_3.uzh.ch  slots=1  max-slots=1
</span><br>
<span class="quotelev1">&gt;  triops.uzh.ch   slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually all squid_X have 4 cores, but i managed to reduce the number of
</span><br>
<span class="quotelev1">&gt; processes needed for failure by making the above settings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So with all available squid cores and 3 triops cores it works,
</span><br>
<span class="quotelev1">&gt; but with 4 triops cores it hangs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the other hand, if i use all 16 squid cores (but no triops cores)
</span><br>
<span class="quotelev1">&gt; it works, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If i start the application not from triopps, but froim another workstation,
</span><br>
<span class="quotelev1">&gt; i have a similar pattern of Intercomm_create failures.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that with the above hostfile a simple HelloMPI works also with 14
</span><br>
<span class="quotelev1">&gt; or more processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The frustrating thing is that this exact same code has worked before!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anybody have an explanation?
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I managed to simplify the application:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int iArgC, char *apArgV[]) {
</span><br>
<span class="quotelev1">&gt;    int iResult = 0;
</span><br>
<span class="quotelev1">&gt;    int iNumProcs = 0;
</span><br>
<span class="quotelev1">&gt;    int iID = -1;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Init(&amp;iArgC, &amp;apArgV);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_size(MPI_COMM_WORLD, &amp;iNumProcs);
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(MPI_COMM_WORLD, &amp;iID);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int iKey;
</span><br>
<span class="quotelev1">&gt;    if (iID == 0) {
</span><br>
<span class="quotelev1">&gt;        iKey = 0;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    } else {
</span><br>
<span class="quotelev1">&gt;        iKey = 1;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm  commInter1;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm  commInter2;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm  commIntra;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_split(MPI_COMM_WORLD, iKey, iID, &amp;commIntra);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    int iRankM;
</span><br>
<span class="quotelev1">&gt;    MPI_Comm_rank(commIntra, &amp;iRankM);
</span><br>
<span class="quotelev1">&gt;    printf(&quot;Local rank: %d\n&quot;, iRankM);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    switch (iKey) {
</span><br>
<span class="quotelev1">&gt;    case 0:
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Creating intercomm 1 for Master (%d)\n&quot;, iID);
</span><br>
<span class="quotelev1">&gt;        MPI_Intercomm_create(commIntra, 0, MPI_COMM_WORLD, 1, 01, &amp;commInter2);
</span><br>
<span class="quotelev1">&gt;        break;
</span><br>
<span class="quotelev1">&gt;    case 1:
</span><br>
<span class="quotelev1">&gt;        printf(&quot;Creating intercomm 1 for FH (%d)\n&quot;, iID);
</span><br>
<span class="quotelev1">&gt;        MPI_Intercomm_create(commIntra, 0, MPI_COMM_WORLD, 0, 01, &amp;commInter1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    printf(&quot;finalizing\n&quot;);
</span><br>
<span class="quotelev1">&gt;    MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    printf(&quot;exiting with %d\n&quot;, iResult);
</span><br>
<span class="quotelev1">&gt;    return iResult;
</span><br>
<span class="quotelev1">&gt; }
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
<li><strong>Next message:</strong> <a href="18312.php">Jeff Squyres: "Re: [OMPI users] MPI_Barrier, again"</a>
<li><strong>Previous message:</strong> <a href="18310.php">Jeff Squyres: "Re: [OMPI users] Running osu benchmark test suite with open-mpi"</a>
<li><strong>In reply to:</strong> <a href="18245.php">jody: "[OMPI users] MPI_Intercomm_create hangs"</a>
<!-- nextthread="start" -->
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
