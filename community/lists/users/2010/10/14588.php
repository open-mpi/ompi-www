<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 02:38:52 2010" -->
<!-- isoreceived="20101025063852" -->
<!-- sent="Mon, 25 Oct 2010 00:38:47 -0600" -->
<!-- isosent="20101025063847" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="SNT134-w61B5101A2C243C469A8415CB410_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTim1ybzyDCgcyqjkP_x4m7DOLdaJY6+_L=ReZd9a_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-10-25 02:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14587.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14586.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanksI found a problem: 
<br>
I used:          cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am before MPI_Finalize()&quot; &lt;&lt; endl;         MPI_Finalize(); 	cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am after MPI_Finalize()&quot; &lt;&lt; endl;         return 0;I can get the output &quot; I am rank 0 (1, 2, ....) I am before MPI_Finalize() &quot;. and 	       &quot; I am rank 0 I am after MPI_Finalize() &quot;But, other processes do not printed out &quot;I am rank ... I am after MPI_Finalize()&quot; .
<br>
It is weird. The process has reached the point just before MPI_Finalize(), why they are hanged there ? 
<br>
Are there other better ways to check this ? Any help is appreciated. thanksJackOct. 25 2010
<br>
From: solarbikedz_at_[hidden]
<br>
Date: Sun, 24 Oct 2010 19:47:54 -0700
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Open MPI program cannot complete
<br>
<p>how do you know all process call mpi_finalize?  did you have all of them print out something before they call mpi_finalize? I think what Gustavo is getting at is maybe you had some MPI calls within your snippets that hangs your program, thus some of your processes never called mpi_finalize.
<br>
<p><p><p>On Sun, Oct 24, 2010 at 6:59 PM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>Thanks, 
<br>
But, my code is too long to be posted. 
<br>
What are the common reasons of this kind of problems ? 
<br>
Any help is appreciated. 
<br>
<p><p>Jack
<br>
Oct. 24 2010
<br>
<span class="quotelev1">&gt; From: gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sun, 24 Oct 2010 18:09:52 -0400
</span><br>
<p><p><span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your code snippet is too terse, doesn't show the MPI calls.
</span><br>
<p><p><span class="quotelev1">&gt; It is hard to guess what is the problem this way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa 
</span><br>
<span class="quotelev1">&gt; On Oct 24, 2010, at 5:43 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply. 
</span><br>
<span class="quotelev2">&gt; &gt; But, I use mpi_waitall() to make sure that all MPI communications have been done before a process call MPI_Finalize() and returns. 
</span><br>
<p><p><span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jack
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oct. 24 2010
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; From: gus_at_[hidden]
</span><br>
<p><p><span class="quotelev3">&gt; &gt; &gt; Date: Sun, 24 Oct 2010 17:31:11 -0400
</span><br>
<span class="quotelev3">&gt; &gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<p><p><span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi Jack
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It may depend on &quot;do some things&quot;.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Does it involve MPI communication?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also, why not put MPI_Finalize();return 0 outside the ifs? 
</span><br>
<p><p><span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Oct 24, 2010, at 2:23 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I got a problem of open MPI.
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My program has 5 processes. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; All of them can run MPI_Finalize() and return 0. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; But, the whole program cannot be completed. 
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In the MPI cluster job queue, it is strill in running status. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If I use 1 process to run it, no problem.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; Why ? 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; My program:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; int main (int argc, char **argv) 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;mySize);
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Comm world;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; world = MPI_COMM_WORLD;
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<p><span class="quotelev4">&gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; do some things. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; if (myRank != 0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; do some things. 
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; return 0 ;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; return 0;
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; And, some output files get wrong codes, which can not be readible. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; In 1-process case, the program can print correct results to these output files . 
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jack
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Oct. 24 2010
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<p><p><span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<p><p><span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><span class="quotelev1">&gt; 
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
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><pre>
-- 
David Zhang
University of California, San Diego
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 		 	   		  
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14587.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14586.php">David Zhang: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14589.php">Terry Dontje: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
