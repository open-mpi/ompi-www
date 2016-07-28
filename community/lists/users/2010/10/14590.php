<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 10:13:26 2010" -->
<!-- isoreceived="20101025141326" -->
<!-- sent="Mon, 25 Oct 2010 08:13:21 -0600" -->
<!-- isosent="20101025141321" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w10CCF9C0B211717E16776CCB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CC54EBC.1010601_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI program cannot complete<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 10:13:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, But, I have put a mpi_waitall(request) before
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am before MPI_Finalize()&quot; &lt;&lt; endl;
<br>
If the above sentence has been printed out, it means that all requests have been checked and finished. right ?  
<br>
What may be the possible reasons for that stuck ? 
<br>
Any help is appreciated. 
<br>
Jack
<br>
Oct. 25 2010 
<br>
<p>Date: Mon, 25 Oct 2010 05:32:44 -0400
<br>
From: terry.dontje_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI program cannot complete
<br>
<p><p><p>&nbsp;&nbsp;
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Message body
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;So what you are saying is *all* the ranks have entered MPI_Finalize
<br>
&nbsp;&nbsp;&nbsp;&nbsp;and only a subset has exited per placing prints before and after
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize.  Good.  So my guess is that the processes stuck in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize have a prior MPI request outstanding that for whatever
<br>
&nbsp;&nbsp;&nbsp;&nbsp;reason is unable to complete.  So I would first look at all the MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;requests and make sure they completed.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;--td
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;On 10/25/2010 02:38 AM, Jack Bryan wrote:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I found a problem: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I used: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am before MPI_Finalize()&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize(); 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am after
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize()&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I can get the output &quot; I
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;am rank 0 (1, 2, ....) I am before MPI_Finalize() &quot;. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot; I am rank 0 I am
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;after MPI_Finalize() &quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But, other processes do
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;not printed out &quot;I am rank ... I am after MPI_Finalize()&quot; .
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;It is weird. The process has reached the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;point just before MPI_Finalize(), why they are hanged there
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Are there other better
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ways to check this ? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any help is appreciated. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;thanks
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oct. 25 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;From:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;solarbikedz_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date: Sun,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24 Oct 2010 19:47:54 -0700
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject: Re:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[OMPI users] Open MPI program cannot complete
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;how do you
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;know all process call mpi_finalize?  did you have all of them
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print out something before they call mpi_finalize? I think
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;what Gustavo is getting at is maybe you had some MPI calls
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;within your snippets that hangs your program, thus some of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;your processes never called mpi_finalize.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;On Sun, Oct 24, 2010 at 6:59 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wrote:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But, my code is too long to be posted. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;What are the common reasons of this kind of problems ? 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any help is appreciated. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jack
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oct. 24 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><span class="quotelev1">                &gt; From: gus_at_[hidden]
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<span class="quotelev1">              &gt; Date: Sun, 24 Oct 2010 18:09:52 -0400
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><span class="quotelev1">                  &gt; To: users_at_[hidden]
</span><br>
<p><span class="quotelev1">                  &gt; Subject: Re: [OMPI users] Open MPI program cannot
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;complete
<br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev1">                  &gt; Hi Jack
</span><br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev1">                  &gt; Your code snippet is too terse, doesn't show the
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI calls.
<br>
<p><span class="quotelev1">                  &gt; It is hard to guess what is the problem this way.
</span><br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev1">                  &gt; Gus Correa 
</span><br>
<p><span class="quotelev1">                  &gt; On Oct 24, 2010, at 5:43 PM, Jack Bryan wrote:
</span><br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; Thanks for the reply. 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; But, I use mpi_waitall() to make sure that
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;all MPI communications have been done before a process
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_Finalize() and returns. 
<br>
<p><span class="quotelev2">                  &gt; &gt; 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; Any help is appreciated.
</span><br>
<p><span class="quotelev2">                  &gt; &gt; 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; thanks
</span><br>
<p><span class="quotelev2">                  &gt; &gt; 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; Jack
</span><br>
<p><span class="quotelev2">                  &gt; &gt; 
</span><br>
<p><span class="quotelev2">                  &gt; &gt; Oct. 24 2010
</span><br>
<p><span class="quotelev2">                  &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Date: Sun, 24 Oct 2010 17:31:11 -0400
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Subject: Re: [OMPI users] Open MPI
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;program cannot complete
<br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Hi Jack
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; It may depend on &quot;do some things&quot;.
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Does it involve MPI communication?
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Also, why not put MPI_Finalize();return
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0 outside the ifs? 
<br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; Gus Correa
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; On Oct 24, 2010, at 2:23 PM, Jack Bryan
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;wrote:
<br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; Hi 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; I got a problem of open MPI.
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; My program has 5 processes. 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; All of them can run MPI_Finalize()
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;and return 0. 
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; But, the whole program cannot be
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;completed. 
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; In the MPI cluster job queue, it
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;is strill in running status. 
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; If I use 1 process to run it, no
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;problem.
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; Why ? 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; My program:
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; int main (int argc, char **argv) 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; {
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD,
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;myRank);
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Comm_size(MPI_COMM_WORLD,
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mySize);
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Comm world;
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; world = MPI_COMM_WORLD;
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; {
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; do some things. 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; }
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; if (myRank != 0)
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; {
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; do some things. 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; return 0 ;
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; }
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; {
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; return 0;
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; }
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; }
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; And, some output files get wrong
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;codes, which can not be readible. 
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; In 1-process case, the program can
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print correct results to these output files . 
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; Any help is appreciated. 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; thanks
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; Jack
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; Oct. 24 2010
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev4">                  &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
<p><span class="quotelev3">                  &gt; &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev3">                  &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev2">                  &gt; &gt;
</span><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
<p><span class="quotelev2">                  &gt; &gt; users mailing list
</span><br>
<p><span class="quotelev2">                  &gt; &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev2">                  &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev1">                  &gt; 
</span><br>
<p><span class="quotelev1">                  &gt; _______________________________________________
</span><br>
<p><span class="quotelev1">                  &gt; users mailing list
</span><br>
<p><span class="quotelev1">                  &gt; users_at_[hidden]
</span><br>
<p><span class="quotelev1">                  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;David Zhang
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;University
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;of California, San Diego
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
users
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;-- 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terry D. Dontje | Principal Software Engineer
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Developer Tools
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Engineering | +1.781.442.2631
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Oracle  - Performance
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Technologies
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;95 Network Drive,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Burlington, MA 01803
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email terry.dontje_at_[hidden]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
<br>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14590/ATT00001" alt="ATT00001">
<!-- attachment="ATT00001" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14591.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
