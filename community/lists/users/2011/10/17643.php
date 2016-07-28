<?
$subject_val = "Re: [OMPI users] Spawned process do not shut down...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 19:52:20 2011" -->
<!-- isoreceived="20111027235220" -->
<!-- sent="Thu, 27 Oct 2011 17:52:11 -0600" -->
<!-- isosent="20111027235211" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawned process do not shut down..." -->
<!-- id="0154212D-245D-421F-AA90-452B2035B26A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CADfEU00350Ry-HNE4d8ym6oUKWB+AmFOfqJ++UB7+k45mkwtwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Spawned process do not shut down...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 19:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
<li><strong>In reply to:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to send this to the MPICH mailing lists - this is for Open MPI issues.
<br>
<p>On Oct 27, 2011, at 4:59 PM, Jonathan Bishop wrote:
<br>
<p><span class="quotelev1">&gt; I am using MPI_Comm_spawn to dynamically run workers. However, when the workers exit they get hung up on MPI_Finalize. Here is a short program which shows the issue...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It responds to several commands...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; start
</span><br>
<span class="quotelev1">&gt; stop
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then check how many processes are running - it should be 1, not 2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using MPICH2 1.4.1-p1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jon
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;iostream&gt;
</span><br>
<span class="quotelev1">&gt; #include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; using namespace std;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;   MPI_Comm parent;
</span><br>
<span class="quotelev1">&gt;   MPI_Comm_get_parent(&amp;parent);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // Master
</span><br>
<span class="quotelev1">&gt;   if (parent == MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt;     cout &lt;&lt; getpid() &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     MPI_Comm intercom = MPI_COMM_NULL;
</span><br>
<span class="quotelev1">&gt;     while (1) {
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;Enter: &quot;;
</span><br>
<span class="quotelev1">&gt;       string s;
</span><br>
<span class="quotelev1">&gt;       cin &gt;&gt; s;
</span><br>
<span class="quotelev1">&gt;       if (s == &quot;start&quot;) {
</span><br>
<span class="quotelev1">&gt; 	if (intercom != MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; &quot;already started&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	  continue;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	MPI_Comm_spawn(argv[0], MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, MPI_COMM_SELF, &amp;intercom,  MPI_ERRCODES_IGNORE);
</span><br>
<span class="quotelev1">&gt; 	continue;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       if (s == &quot;stop&quot;) {
</span><br>
<span class="quotelev1">&gt; 	if (intercom == MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; &quot;worker not running&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	  continue;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0, intercom);
</span><br>
<span class="quotelev1">&gt; 	intercom = MPI_COMM_NULL;
</span><br>
<span class="quotelev1">&gt; //	MPI_Finalize();  // This will allow the workers to die, but then I can not restart them.
</span><br>
<span class="quotelev1">&gt; 	continue;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       if (s == &quot;exit&quot;) {
</span><br>
<span class="quotelev1">&gt; 	if (intercom != MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; 	  cout &lt;&lt; &quot;need to stop before exit&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	  continue;
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 	break;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       if (intercom == MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;need to start&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	continue;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0, intercom);
</span><br>
<span class="quotelev1">&gt;       char buf[1000];
</span><br>
<span class="quotelev1">&gt;       MPI_Status status;
</span><br>
<span class="quotelev1">&gt;       MPI_Recv(buf, 1000, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, intercom, &amp;status);
</span><br>
<span class="quotelev1">&gt;       int count;
</span><br>
<span class="quotelev1">&gt;       MPI_Get_count(&amp;status, MPI_CHAR, &amp;count);
</span><br>
<span class="quotelev1">&gt;       buf[count] = 0;
</span><br>
<span class="quotelev1">&gt;       string t = buf;
</span><br>
<span class="quotelev1">&gt;       cout &lt;&lt; &quot;worker returned &quot; &lt;&lt; t &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   // Worker
</span><br>
<span class="quotelev1">&gt;   if (parent != MPI_COMM_NULL) {
</span><br>
<span class="quotelev1">&gt;     while (1) {
</span><br>
<span class="quotelev1">&gt;       char buf[1000];
</span><br>
<span class="quotelev1">&gt;       MPI_Status status;
</span><br>
<span class="quotelev1">&gt;       MPI_Recv(buf, 1000, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, parent, &amp;status);
</span><br>
<span class="quotelev1">&gt;       int count;
</span><br>
<span class="quotelev1">&gt;       MPI_Get_count(&amp;status, MPI_CHAR, &amp;count);
</span><br>
<span class="quotelev1">&gt;       buf[count] = 0;
</span><br>
<span class="quotelev1">&gt;       string s = buf;
</span><br>
<span class="quotelev1">&gt;       if (s == &quot;stop&quot;) {
</span><br>
<span class="quotelev1">&gt; 	cout &lt;&lt; &quot;worker stopping&quot; &lt;&lt; endl;
</span><br>
<span class="quotelev1">&gt; 	break;
</span><br>
<span class="quotelev1">&gt;       }
</span><br>
<span class="quotelev1">&gt;       MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0, parent);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;   }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17643/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17644.php">Nguyen Toan: "Re: [OMPI users] Checkpoint from inside MPI program with OpenMPI 1.4.2 ?"</a>
<li><strong>Previous message:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
<li><strong>In reply to:</strong> <a href="17642.php">Jonathan Bishop: "[OMPI users] Spawned process do not shut down..."</a>
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
