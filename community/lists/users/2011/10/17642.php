<?
$subject_val = "[OMPI users] Spawned process do not shut down...";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 27 18:59:42 2011" -->
<!-- isoreceived="20111027225942" -->
<!-- sent="Thu, 27 Oct 2011 15:59:36 -0700" -->
<!-- isosent="20111027225936" -->
<!-- name="Jonathan Bishop" -->
<!-- email="jbishop.rwc_at_[hidden]" -->
<!-- subject="[OMPI users] Spawned process do not shut down..." -->
<!-- id="CADfEU00350Ry-HNE4d8ym6oUKWB+AmFOfqJ++UB7+k45mkwtwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Spawned process do not shut down...<br>
<strong>From:</strong> Jonathan Bishop (<em>jbishop.rwc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-27 18:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>Previous message:</strong> <a href="17641.php">Dmitry N. Mikushin: "Re: [OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>Reply:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am using MPI_Comm_spawn to dynamically run workers. However, when the
<br>
workers exit they get hung up on MPI_Finalize. Here is a short program which
<br>
shows the issue...
<br>
<p>It responds to several commands...
<br>
<p>Do
<br>
<p>start
<br>
stop
<br>
<p>and then check how many processes are running - it should be 1, not 2.
<br>
<p>I am using MPICH2 1.4.1-p1.
<br>
<p>Thanks,
<br>
<p>Jon
<br>
<p>#include &lt;sys/types.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;iostream&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>using namespace std;
<br>
<p><p>main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm parent;
<br>
&nbsp;&nbsp;MPI_Comm_get_parent(&amp;parent);
<br>
<p>&nbsp;&nbsp;// Master
<br>
&nbsp;&nbsp;if (parent == MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; getpid() &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm intercom = MPI_COMM_NULL;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Enter: &quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cin &gt;&gt; s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (s == &quot;start&quot;) {
<br>
if (intercom != MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;already started&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;continue;
<br>
}
<br>
MPI_Comm_spawn(argv[0], MPI_ARGV_NULL, 1, MPI_INFO_NULL, 0, MPI_COMM_SELF,
<br>
&amp;intercom,  MPI_ERRCODES_IGNORE);
<br>
continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (s == &quot;stop&quot;) {
<br>
if (intercom == MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;worker not running&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;continue;
<br>
}
<br>
MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0, intercom);
<br>
intercom = MPI_COMM_NULL;
<br>
// MPI_Finalize();  // This will allow the workers to die, but then I can
<br>
not restart them.
<br>
continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (s == &quot;exit&quot;) {
<br>
if (intercom != MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;cout &lt;&lt; &quot;need to stop before exit&quot; &lt;&lt; endl;
<br>
&nbsp;&nbsp;continue;
<br>
}
<br>
break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (intercom == MPI_COMM_NULL) {
<br>
cout &lt;&lt; &quot;need to start&quot; &lt;&lt; endl;
<br>
continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0,
<br>
intercom);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buf[1000];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 1000, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, intercom,
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_CHAR, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[count] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string t = buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;worker returned &quot; &lt;&lt; t &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;// Worker
<br>
&nbsp;&nbsp;if (parent != MPI_COMM_NULL) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;while (1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buf[1000];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buf, 1000, MPI_CHAR, MPI_ANY_SOURCE, MPI_ANY_TAG, parent,
<br>
&amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int count;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;status, MPI_CHAR, &amp;count);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf[count] = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;string s = buf;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (s == &quot;stop&quot;) {
<br>
cout &lt;&lt; &quot;worker stopping&quot; &lt;&lt; endl;
<br>
break;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(const_cast&lt;char*&gt;(s.c_str()), s.size(), MPI_CHAR, 0, 0,
<br>
parent);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>Previous message:</strong> <a href="17641.php">Dmitry N. Mikushin: "Re: [OMPI users] configure with cuda"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
<li><strong>Reply:</strong> <a href="17643.php">Ralph Castain: "Re: [OMPI users] Spawned process do not shut down..."</a>
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
