<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 16 17:44:52 2007" -->
<!-- isoreceived="20070316214452" -->
<!-- sent="Fri, 16 Mar 2007 15:44:48 -0600" -->
<!-- isosent="20070316214448" -->
<!-- name="Mohammad Huwaidi" -->
<!-- email="mohammad_at_[hidden]" -->
<!-- subject="[OMPI users] Fault Tolerance" -->
<!-- id="45FB0FD0.4090506_at_kelman.com" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Mohammad Huwaidi (<em>mohammad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-16 17:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Previous message:</strong> <a href="2816.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The following code is my trial to write a fault-tolerant application on 
<br>
OpenMPI; however, it still does not trap exceptions:
<br>
<p>#include &lt;mpi.h&gt;
<br>
//#include &lt;mpi++.h&gt;
<br>
<p>#include &lt;iostream&gt;
<br>
#include &lt;unistd.h&gt;
<br>
#include &lt;cstdio&gt;
<br>
#include &lt;fstream&gt;
<br>
#include &lt;string&gt;
<br>
<p>#define BUFSIZE 100
<br>
<p>using namespace std;
<br>
using namespace MPI;
<br>
<p>static int nerr = 0;
<br>
static int iter = 0;
<br>
<p>static ofstream fout;
<br>
<p>void mpiErrorFunction( MPI::Comm &amp;comm, int *code, ... )
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Encountered an MPI error No. &quot; &lt;&lt; ++nerr &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;Encountered an MPI error No. &quot; &lt;&lt; ++nerr &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
}
<br>
<p><p>void errhandler()
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Encountered an MPI error No. &quot; &lt;&lt; ++nerr &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;Encountered an MPI error No. &quot; &lt;&lt; ++nerr &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
}
<br>
<p><p>int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Welcome to MPI error handling testing.&quot; &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int  buf[BUFSIZE];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char msg[BUFSIZE];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char fileName[100];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char buff[1000];
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Initializing MPI.&quot; &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init_thread(MPI::THREAD_MULTIPLE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI::Init(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;MPI Initialized.&quot; &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int myrank   = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int numprocs = MPI::COMM_WORLD.Get_size();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(fileName,&quot;MPItesting%i_%i.txt&quot;, myrank, numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.open(fileName);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buff, &quot;My task id is %d &amp; No. of procs is %i\n&quot;, myrank, 
<br>
numprocs);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (myrank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI::Errhandler errHandler =
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//    MPI::Comm::Create_errhandler (mpiErrorFunction);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI::COMM_WORLD.Set_errhandler(errHandler);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_RETURN);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Set_errhandler(MPI::ERRORS_THROW_EXCEPTIONS);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (nerr &lt; 20 &amp;&amp; iter++ &lt; 100) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i=1; i&lt;numprocs; i++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(msg,&quot;%3i Hello there No. %i.&quot;, iter, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buff, &quot;Message %i is being sent to %i\n&quot;, iter,  i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(msg, BUFSIZE, CHAR, i, 99);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch (MPI::Exception ex) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Could not send successfully to task No. &quot; &lt;&lt; i 
<br>
&lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;Could not send successfully to task No. &quot; &lt;&lt; i 
<br>
&lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sleep(1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;while (nerr &lt; 20 &amp;&amp; iter++ &lt; 100) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;try {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(msg, BUFSIZE, CHAR, 0, 99);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(buff,&quot;%3i Receiving message No. %s\n&quot;, iter, msg);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; buff &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;catch (MPI::Exception ex) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Could not receive successfully &quot;&lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;Could not receive successfully &quot;&lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//sleep(myrank);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Task no. &quot; &lt;&lt; myrank &lt;&lt; &quot; is existing now.&quot; &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout &lt;&lt; &quot;Task no. &quot; &lt;&lt; myrank &lt;&lt; &quot; is existing now.&quot; &lt;&lt; endl &lt;&lt; flush;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.flush();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fout.close();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();                // MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<pre>
-- 
Regards,
Mohammad Huwaidi
We can't resolve problems by using the same kind of thinking we used
when we created them.
                                                 --Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2818.php">Erik Deumens: "[OMPI users] OpenMPI 1.2 bug: segmentation violation in mpi_pack"</a>
<li><strong>Previous message:</strong> <a href="2816.php">David Bronke: "Re: [OMPI users] Signal 13"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
<li><strong>Reply:</strong> <a href="2821.php">Jeff Squyres: "Re: [OMPI users] Fault Tolerance"</a>
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
