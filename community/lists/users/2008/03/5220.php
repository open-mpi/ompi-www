<?
$subject_val = "[OMPI users] Begginers question: why does this program hangs?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 17 20:36:00 2008" -->
<!-- isoreceived="20080318003600" -->
<!-- sent="Mon, 17 Mar 2008 21:35:27 -0300 (ART)" -->
<!-- isosent="20080318003527" -->
<!-- name="Giovani Faccin" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="[OMPI users] Begginers question: why does this program hangs?" -->
<!-- id="678253.85452.qm_at_web33107.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Begginers question: why does this program hangs?<br>
<strong>From:</strong> Giovani Faccin (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-17 20:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5219.php">Edgar Gabriel: "Re: [OMPI users] RE :  RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there!
<br>
<p>I'm learning MPI,  and got really puzzled... Please take a look at this very short code:
<br>
<p>#include &lt;iostream&gt;
<br>
#include &quot;mpicxx.h&quot;
<br>
using namespace std;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init();        
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;for (unsigned long t = 0; t &lt; 10000000; t++)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//If we are process 0:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if ( MPI::COMM_WORLD.Get_rank() == 0 )
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::Status mpi_status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long d = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long d2 = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(&amp;d, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE, MPI::ANY_TAG, mpi_status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Recv(&amp;d2, 1, MPI::UNSIGNED_LONG, MPI::ANY_SOURCE, MPI::ANY_TAG, mpi_status );
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cout &lt;&lt; &quot;Time = &quot; &lt;&lt; t &lt;&lt; &quot;; Node 0 received: &quot; &lt;&lt; d &lt;&lt; &quot; and &quot; &lt;&lt; d2 &lt;&lt; endl;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;//Else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unsigned long  d = MPI::COMM_WORLD.Get_rank();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send( &amp;d, 1, MPI::UNSIGNED_LONG, 0, 0);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
}
<br>
<p>Ok, so what I'm trying to do is to make a gather operation using point to point communication. In my real application instead of sending an unsigned long I'd be calling an object's send and receive methods, which in turn would call their inner object's similar methods and so on until all data is syncronized. I'm using this loop because the number of objects to be sent to process rank 0 varies depending on the sender.
<br>
<p>When running this test with 3 processes on a dual core, oversubscribed node, I get this output:
<br>
(skipped previous output)
<br>
Time = 5873; Node 0 received: 1 and 2
<br>
Time = 5874; Node 0 received: 1 and 2
<br>
Time = 5875; Node 0 received: 1 and 2
<br>
Time = 5876; Node 0 received: 1 and 2
<br>
<p>and then the application hangs, with processor usage at 100%. The exact time when this condition occurs varies on each run, but it usually happens quite fast.
<br>
<p>What would I have to modify, in this simple example, so that the application works as expected? Must I always use Gather, instead of point to point, to make a syncronization like this?
<br>
<p>Thank you very much!
<br>
<p>Giovani
<br>
<p><p><p><p><p><p><p>&nbsp;__________________________________________________
<br>
Fale com seus amigos  de gra&#231;a com o novo Yahoo! Messenger 
<br>
<a href="http://br.messenger.yahoo.com/">http://br.messenger.yahoo.com/</a> 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5220/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<li><strong>Previous message:</strong> <a href="5219.php">Edgar Gabriel: "Re: [OMPI users] RE :  RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Reply:</strong> <a href="5222.php">Andreas Schäfer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
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
