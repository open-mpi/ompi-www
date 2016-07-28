<?
$subject_val = "Re: [OMPI users] Open MPI program cannot complete";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 25 05:35:00 2010" -->
<!-- isoreceived="20101025093500" -->
<!-- sent="Mon, 25 Oct 2010 05:32:44 -0400" -->
<!-- isosent="20101025093244" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI program cannot complete" -->
<!-- id="4CC54EBC.1010601_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w61B5101A2C243C469A8415CB410_at_phx.gbl" -->
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
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-25 05:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14588.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14588.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;So what you are saying is *all* the ranks have entered MPI_Finalize 
<br>
and only a subset has exited per placing prints before and after 
<br>
MPI_Finalize.  Good.  So my guess is that the processes stuck in 
<br>
MPI_Finalize have a prior MPI request outstanding that for whatever 
<br>
reason is unable to complete.  So I would first look at all the MPI 
<br>
requests and make sure they completed.
<br>
<p>--td
<br>
<p>On 10/25/2010 02:38 AM, Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; I found a problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am before 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize()&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;          MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; cout &lt;&lt; &quot; I am rank &quot; &lt;&lt; rank &lt;&lt; &quot; I am after MPI_Finalize()&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;          return 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can get the output &quot; I am rank 0 (1, 2, ....) I am before 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize() &quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;        &quot; I am rank 0 I am after MPI_Finalize() &quot;
</span><br>
<span class="quotelev1">&gt; But, other processes do not printed out &quot;I am rank ... I am after 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize()&quot; .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is weird. The process has reached the point just before 
</span><br>
<span class="quotelev1">&gt; MPI_Finalize(), why they are hanged there ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there other better ways to check this ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Oct. 25 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; From: solarbikedz_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Sun, 24 Oct 2010 19:47:54 -0700
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; how do you know all process call mpi_finalize?  did you have all of 
</span><br>
<span class="quotelev1">&gt; them print out something before they call mpi_finalize? I think what 
</span><br>
<span class="quotelev1">&gt; Gustavo is getting at is maybe you had some MPI calls within your 
</span><br>
<span class="quotelev1">&gt; snippets that hangs your program, thus some of your processes never 
</span><br>
<span class="quotelev1">&gt; called mpi_finalize.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Oct 24, 2010 at 6:59 PM, Jack Bryan &lt;dtustudy68_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:dtustudy68_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     But, my code is too long to be posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What are the common reasons of this kind of problems ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Jack
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Oct. 24 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; From: gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Date: Sun, 24 Oct 2010 18:09:52 -0400
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Hi Jack
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Your code snippet is too terse, doesn't show the MPI calls.
</span><br>
<span class="quotelev2">&gt;     &gt; It is hard to guess what is the problem this way.
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;     &gt; On Oct 24, 2010, at 5:43 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Thanks for the reply.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; But, I use mpi_waitall() to make sure that all MPI
</span><br>
<span class="quotelev1">&gt;     communications have been done before a process call MPI_Finalize()
</span><br>
<span class="quotelev1">&gt;     and returns.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; thanks
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Jack
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; Oct. 24 2010
</span><br>
<span class="quotelev3">&gt;     &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; From: gus_at_[hidden] &lt;mailto:gus_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Date: Sun, 24 Oct 2010 17:31:11 -0400
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; To: users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Subject: Re: [OMPI users] Open MPI program cannot complete
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Hi Jack
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; It may depend on &quot;do some things&quot;.
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Does it involve MPI communication?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Also, why not put MPI_Finalize();return 0 outside the ifs?
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; On Oct 24, 2010, at 2:23 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; Hi
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; I got a problem of open MPI.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; My program has 5 processes.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; All of them can run MPI_Finalize() and return 0.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; But, the whole program cannot be completed.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; In the MPI cluster job queue, it is strill in running status.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; If I use 1 process to run it, no problem.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; Why ?
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; My program:
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; int main (int argc, char **argv)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myRank);
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;mySize);
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Comm world;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; world = MPI_COMM_WORLD;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; do some things.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; if (myRank != 0)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; do some things.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; return 0 ;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; if (myRank == 0)
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; {
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; return 0;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; }
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; And, some output files get wrong codes, which can not be
</span><br>
<span class="quotelev1">&gt;     readible.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; In 1-process case, the program can print correct results
</span><br>
<span class="quotelev1">&gt;     to these output files .
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; Any help is appreciated.
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; thanks
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; Jack
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; Oct. 24 2010
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;     &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;     &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;     &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle * - Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14589/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14588.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>In reply to:</strong> <a href="14588.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Reply:</strong> <a href="14590.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
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
