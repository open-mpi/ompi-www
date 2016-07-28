<?
$subject_val = "Re: [OMPI users] MPI_CANCEL";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 15 22:48:20 2008" -->
<!-- isoreceived="20080416024820" -->
<!-- sent="Tue, 15 Apr 2008 22:48:10 -0400" -->
<!-- isosent="20080416024810" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_CANCEL" -->
<!-- id="OF0C3E8DC7.CCC20ECF-ON8525742D.000CEF91-8525742D.000F65B6_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4804FE9F.2000105_at_gmx.de" -->
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
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-15 22:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>In reply to:</strong> <a href="5396.php">slimtimmy_at_[hidden]: "[OMPI users] MPI_CANCEL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5419.php">slimtimmy_at_[hidden]: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5419.php">slimtimmy_at_[hidden]: "Re: [OMPI users] MPI_CANCEL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi slimtimmy
<br>
<p>I have been involved in several of the MPI Forum's discussions of how
<br>
MPI_Cancel should work and I agree with your interpretation of the
<br>
standard. By my reading of the standard, the MPI_Wait must not hang and the
<br>
cancel must succeed.
<br>
<p>Making an MPI implementation work exactly as the standard describes may
<br>
have performance implications and MPI_Cancel is rarely used so as a
<br>
practical matter an MPI implementation may chose to fudge the letter of the
<br>
law for better performance.
<br>
<p>There also may be people who would argue you and I have misread the
<br>
standard and I am happy to follow up (off line if they wish) with anyone
<br>
who interprets the standard differently. The MPI Forum is working on MPI
<br>
2.2 right now and if there is something that needs fixing in the MPI
<br>
standard, now is the time to get a resolution.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regards - Dick
<br>
<p>Dick Treumann  -  MPI Team/TCEM
<br>
IBM Systems &amp; Technology Group
<br>
Dept 0lva / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 04/15/2008 03:14:39 PM:
<br>
<p><span class="quotelev1">&gt; I encountered some problems when using MPI_CANCEL. I call
</span><br>
<span class="quotelev1">&gt; Request::Cancel followed by Request::Wait to ensure that the request has
</span><br>
<span class="quotelev1">&gt; been cancelled. However Request::Wait does not return when I send bigger
</span><br>
<span class="quotelev1">&gt; messages. The following code should reproduce this behaviour:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; enum Tags
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      TAG_UNMATCHED1,
</span><br>
<span class="quotelev1">&gt;      TAG_UNMATCHED2
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main()
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;      MPI::Init();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      const int rank = MPI::COMM_WORLD.Get_rank();
</span><br>
<span class="quotelev1">&gt;      const int numProcesses = MPI::COMM_WORLD.Get_size();
</span><br>
<span class="quotelev1">&gt;      const int masterRank = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      if (rank == masterRank)
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;master&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;          const int numSlaves = numProcesses - 1;
</span><br>
<span class="quotelev1">&gt;          for(int i = 0; i &lt; numSlaves; ++i)
</span><br>
<span class="quotelev1">&gt;          {
</span><br>
<span class="quotelev1">&gt;              const int slaveRank = i + 1;
</span><br>
<span class="quotelev1">&gt;              int buffer;
</span><br>
<span class="quotelev1">&gt;              MPI::COMM_WORLD.Recv(&amp;buffer, 1, MPI::INT, slaveRank,
</span><br>
<span class="quotelev1">&gt;                  TAG_UNMATCHED1);
</span><br>
<span class="quotelev1">&gt;          }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;      else
</span><br>
<span class="quotelev1">&gt;      {
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;slave &quot; &lt;&lt; rank &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;          //const int size = 1;
</span><br>
<span class="quotelev1">&gt;          const int size = 10000;
</span><br>
<span class="quotelev1">&gt;          int buffer[size];
</span><br>
<span class="quotelev1">&gt;          MPI::Request request = MPI::COMM_WORLD.Isend(buffer, size,
</span><br>
<span class="quotelev1">&gt; MPI::INT,
</span><br>
<span class="quotelev1">&gt;              masterRank, TAG_UNMATCHED2);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): sent data&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          request.Cancel();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): cancel issued&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          request.Wait();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          cout &lt;&lt; &quot;slave (&quot;&lt;&lt; rank&lt;&lt;&quot;): finished&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      MPI::Finalize();
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I set size to 1, everything works as expected, the slave process
</span><br>
<span class="quotelev1">&gt; finishes execution. However if I use a bigger buffer (in this case
</span><br>
<span class="quotelev1">&gt; 10000) the wait blocks forever. That's the output of the program when
</span><br>
<span class="quotelev1">&gt; run with two processes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; master
</span><br>
<span class="quotelev1">&gt; slave 1
</span><br>
<span class="quotelev1">&gt; slave (1): sent data
</span><br>
<span class="quotelev1">&gt; slave (1): cancel issued
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have I misinterpreted the standard? Or does Request::Wait block until
</span><br>
<span class="quotelev1">&gt; the message is delievered?
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
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5398/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5399.php">Crni Gorac: "[OMPI users] mpicc -showme:compile output (possible bug report)"</a>
<li><strong>Previous message:</strong> <a href="5397.php">George Bosilca: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>In reply to:</strong> <a href="5396.php">slimtimmy_at_[hidden]: "[OMPI users] MPI_CANCEL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5419.php">slimtimmy_at_[hidden]: "Re: [OMPI users] MPI_CANCEL"</a>
<li><strong>Reply:</strong> <a href="5419.php">slimtimmy_at_[hidden]: "Re: [OMPI users] MPI_CANCEL"</a>
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
