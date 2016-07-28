<?
$subject_val = "Re: [OMPI users] MPI_CANCEL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 18 13:59:06 2008" -->
<!-- isoreceived="20080418175906" -->
<!-- sent="Fri, 18 Apr 2008 19:59:39 +0200" -->
<!-- isosent="20080418175939" -->
<!-- name="slimtimmy_at_[hidden]" -->
<!-- email="slimtimmy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_CANCEL" -->
<!-- id="4808E18B.70700_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OF0C3E8DC7.CCC20ECF-ON8525742D.000CEF91-8525742D.000F65B6_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_CANCEL<br>
<strong>From:</strong> <a href="mailto:slimtimmy_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_CANCEL"><em>slimtimmy_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-04-18 13:59:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5420.php">Andy Georgi: "[OMPI users] Decision map for MPI collective operations"</a>
<li><strong>Previous message:</strong> <a href="5418.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for your comments. I worked around the problem so I 
<br>
don't need MPI_Cancel anymore.
<br>
<p><span class="quotelev1">&gt; Hi slimtimmy
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been involved in several of the MPI Forum's discussions of how 
</span><br>
<span class="quotelev1">&gt; MPI_Cancel should work and I agree with your interpretation of the 
</span><br>
<span class="quotelev1">&gt; standard. By my reading of the standard, the MPI_Wait must not hang and 
</span><br>
<span class="quotelev1">&gt; the cancel must succeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making an MPI implementation work exactly as the standard describes may 
</span><br>
<span class="quotelev1">&gt; have performance implications and MPI_Cancel is rarely used so as a 
</span><br>
<span class="quotelev1">&gt; practical matter an MPI implementation may chose to fudge the letter of 
</span><br>
<span class="quotelev1">&gt; the law for better performance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There also may be people who would argue you and I have misread the 
</span><br>
<span class="quotelev1">&gt; standard and I am happy to follow up (off line if they wish) with anyone 
</span><br>
<span class="quotelev1">&gt; who interprets the standard differently. The MPI Forum is working on MPI 
</span><br>
<span class="quotelev1">&gt; 2.2 right now and if there is something that needs fixing in the MPI 
</span><br>
<span class="quotelev1">&gt; standard, now is the time to get a resolution.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards - Dick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dick Treumann - MPI Team/TCEM
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden] wrote on 04/15/2008 03:14:39 PM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; I encountered some problems when using MPI_CANCEL. I call
</span><br>
<span class="quotelev2">&gt;  &gt; Request::Cancel followed by Request::Wait to ensure that the request has
</span><br>
<span class="quotelev2">&gt;  &gt; been cancelled. However Request::Wait does not return when I send bigger
</span><br>
<span class="quotelev2">&gt;  &gt; messages. The following code should reproduce this behaviour:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev2">&gt;  &gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; using namespace std;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; enum Tags
</span><br>
<span class="quotelev2">&gt;  &gt; {
</span><br>
<span class="quotelev2">&gt;  &gt;      TAG_UNMATCHED1,
</span><br>
<span class="quotelev2">&gt;  &gt;      TAG_UNMATCHED2
</span><br>
<span class="quotelev2">&gt;  &gt; };
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; int main()
</span><br>
<span class="quotelev2">&gt;  &gt; {
</span><br>
<span class="quotelev2">&gt;  &gt;      MPI::Init();
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      const int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev2">&gt;  &gt;      const int numProcesses = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev2">&gt;  &gt;      const int masterRank = 0;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      if (rank == masterRank)
</span><br>
<span class="quotelev2">&gt;  &gt;      {
</span><br>
<span class="quotelev2">&gt;  &gt;          cout &lt;&lt; &quot;master&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;  &gt;          const int numSlaves = numProcesses - 1;
</span><br>
<span class="quotelev2">&gt;  &gt;          for(int i = 0; i &lt; numSlaves; ++i)
</span><br>
<span class="quotelev2">&gt;  &gt;          {
</span><br>
<span class="quotelev2">&gt;  &gt;              const int slaveRank = i + 1;
</span><br>
<span class="quotelev2">&gt;  &gt;              int buffer;
</span><br>
<span class="quotelev2">&gt;  &gt;              MPI::COMM_WORLD.Recv(&amp;buffer, 1, MPI::INT, slaveRank,
</span><br>
<span class="quotelev2">&gt;  &gt;                  TAG_UNMATCHED1);
</span><br>
<span class="quotelev2">&gt;  &gt;          }
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      }
</span><br>
<span class="quotelev2">&gt;  &gt;      else
</span><br>
<span class="quotelev2">&gt;  &gt;      {
</span><br>
<span class="quotelev2">&gt;  &gt;          cout &lt;&lt; &quot;slave &quot; &lt;&lt; rank &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;  &gt;          //const int size = 1;
</span><br>
<span class="quotelev2">&gt;  &gt;          const int size = 10000;
</span><br>
<span class="quotelev2">&gt;  &gt;          int buffer[size];
</span><br>
<span class="quotelev2">&gt;  &gt;          MPI::Request request = MPI::COMM_WORLD.Isend(buffer, size,
</span><br>
<span class="quotelev2">&gt;  &gt; MPI::INT,
</span><br>
<span class="quotelev2">&gt;  &gt;              masterRank, TAG_UNMATCHED2);
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): sent data&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;          request.Cancel();
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): cancel issued&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;          request.Wait();
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): finished&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev2">&gt;  &gt;      }
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      MPI::Finalize();
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;      return 0;
</span><br>
<span class="quotelev2">&gt;  &gt; }
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; If I set size to 1, everything works as expected, the slave process
</span><br>
<span class="quotelev2">&gt;  &gt; finishes execution. However if I use a bigger buffer (in this case
</span><br>
<span class="quotelev2">&gt;  &gt; 10000) the wait blocks forever. That's the output of the program when
</span><br>
<span class="quotelev2">&gt;  &gt; run with two processes:
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; master
</span><br>
<span class="quotelev2">&gt;  &gt; slave 1
</span><br>
<span class="quotelev2">&gt;  &gt; slave (1): sent data
</span><br>
<span class="quotelev2">&gt;  &gt; slave (1): cancel issued
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; Have I misinterpreted the standard? Or does Request::Wait block until
</span><br>
<span class="quotelev2">&gt;  &gt; the message is delievered?
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt;
</span><br>
<span class="quotelev2">&gt;  &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;  &gt; users mailing list
</span><br>
<span class="quotelev2">&gt;  &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;  &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5420.php">Andy Georgi: "[OMPI users] Decision map for MPI collective operations"</a>
<li><strong>Previous message:</strong> <a href="5418.php">Tamer: "Re: [OMPI users] How to restart a job twice"</a>
<li><strong>In reply to:</strong> <a href="5398.php">Richard Treumann: "Re: [OMPI users] MPI_CANCEL"</a>
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
