<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 20:28:15 2015" -->
<!-- isoreceived="20151107012815" -->
<!-- sent="Sat, 7 Nov 2015 10:28:11 +0900" -->
<!-- isosent="20151107012811" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="CAAkFZ5viRkF2WiXNuXpq2GwKWK4nUUa8BD=kSRo+ezE+kwfwQg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4AD68BF5-42B8-4BD1-8DB2-0263D7B56B7A_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Wait stalls<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 20:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28019.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abe-san,
<br>
<p>I am glad you were able to move forward.
<br>
<p>btw, George has a Ph.D, but Sheldon Cooper would say about me I am only an
<br>
engineer
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Saturday, November 7, 2015, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Dr. Bosilca and All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regarding my problem, MPI_Wait stall after MPI_Isend with large (over
</span><br>
<span class="quotelev1">&gt; 4kbytes) messages has been resolved by Dr. Gouaillardet&#226;&#128;&#153;s suggestion :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 MPI_Isend in the master thread
</span><br>
<span class="quotelev1">&gt; 2 Launch worker threads to receive the messages by MPI_Recv
</span><br>
<span class="quotelev1">&gt; 3. MPI_Waitall in the master thread.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you so much, and I will try the Dr. Bosica&#226;&#128;&#153;s suggestion, it seems I
</span><br>
<span class="quotelev1">&gt; would need some investigation to understand the suggestion. But it is
</span><br>
<span class="quotelev1">&gt; interesting to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sincerely,
</span><br>
<span class="quotelev1">&gt; Hiroshi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2015/11/05 9:58&#227;&#128;&#129;George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear Abe,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI provides a simple way to validate your code against the eager
</span><br>
<span class="quotelev1">&gt; problem, by forcing the library to use a 0 size eager (basically all
</span><br>
<span class="quotelev1">&gt; messages are then matched). First, identify the networks used by your
</span><br>
<span class="quotelev1">&gt; application and then set both btl_&lt;network&gt;_eager_limit
</span><br>
<span class="quotelev1">&gt; and btl_&lt;network&gt;_rndv_eager_limit to 0 (via the MCA parameters or in the
</span><br>
<span class="quotelev1">&gt; configuration file).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 4, 2015 at 7:30 PM, ABE Hiroshi &lt;habe36_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','habe36_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Dr. Bosilca and Dr. Gouaillardet,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your kind mail. I believe I could configure the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As is described in Dr. Boslica&#226;&#128;&#153;s mail, this should be the eager problem.
</span><br>
<span class="quotelev2">&gt;&gt; In order to avoid that we should take one of the methods which are
</span><br>
<span class="quotelev2">&gt;&gt; suggested in Dr. Gouaillardet&#226;&#128;&#153;s mail.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also I suppose to try MPICH but our code should work on both of the most
</span><br>
<span class="quotelev2">&gt;&gt; popular MPI implementations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Again, thank you very much for your kind helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2015/11/05 0:36&#227;&#128;&#129;George Bosilca &lt;bosilca_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','bosilca_at_[hidden]');&gt;&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A reproducer without the receiver part limited usability.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Have you checked that your code doesn't suffer from the eager problem?
</span><br>
<span class="quotelev2">&gt;&gt; It might happen that if your message size is under the eager limit, your
</span><br>
<span class="quotelev2">&gt;&gt; perception is that the code works when in fact your message is just on the
</span><br>
<span class="quotelev2">&gt;&gt; unexpected queue on the receiver, and will potentially never be matched. On
</span><br>
<span class="quotelev2">&gt;&gt; the opposite, when the length of the message is larger than the eager size
</span><br>
<span class="quotelev2">&gt;&gt; (which is network dependent), the code will stall obviously in MPI_Wait as
</span><br>
<span class="quotelev2">&gt;&gt; the send is never matched. The latter is the expected and defined behavior
</span><br>
<span class="quotelev2">&gt;&gt; based on the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) In order to rule this out add a lock around your sends to make sure
</span><br>
<span class="quotelev2">&gt;&gt; that 1) a sequential version of the code is valid; and 2) that we are not
</span><br>
<span class="quotelev2">&gt;&gt; facing some consistent thread interleaving issues. If this step
</span><br>
<span class="quotelev2">&gt;&gt; successfully complete, then we can start looking deeper in the OMPI
</span><br>
<span class="quotelev2">&gt;&gt; internals for a bug.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 4, 2015 at 12:34 AM, ABE Hiroshi &lt;habe36_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','habe36_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [snip]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Abe-san,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; you can be blocking on one side, and non blocking on the other side.
</span><br>
<span class="quotelev2">&gt;&gt; for example, one task can do MPI_Send, and the other MPI_Irecv and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Wait.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; in order to avoid deadlock, your program should do
</span><br>
<span class="quotelev2">&gt;&gt; 1. master MPI_Isend and start the workers
</span><br>
<span class="quotelev2">&gt;&gt; 2. worker receive and process messages (in there is one recv per thread,
</span><br>
<span class="quotelev2">&gt;&gt; you can do MPI_Recv e.g. blocking recv)
</span><br>
<span class="quotelev2">&gt;&gt; 3. master MPI_Wait the request used in MPI_Isend
</span><br>
<span class="quotelev2">&gt;&gt; 4. do simulation
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if some kind of synchronization is required between master
</span><br>
<span class="quotelev2">&gt;&gt; and workers.
</span><br>
<span class="quotelev2">&gt;&gt; the key point is you MPI_Wait after the workers have been started.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not know all the details of your program, but you might avoid using
</span><br>
<span class="quotelev2">&gt;&gt; threads :
</span><br>
<span class="quotelev2">&gt;&gt; 1. MPI_Isend
</span><br>
<span class="quotelev2">&gt;&gt; 2. several MPI_Irecv
</span><br>
<span class="quotelev2">&gt;&gt; 3. MPI_Waitall (or a loop with MPI_Waitany/MPI_Waitsome)
</span><br>
<span class="quotelev2">&gt;&gt; 4. do simulation
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; if you really want threads, an other option is to start the worker after
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Waitany/MPI_Waitsome
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; once again, I do not know your full program, so I can just guess.
</span><br>
<span class="quotelev2">&gt;&gt; you might also want to try an other MPI flavor (such as mpich), since
</span><br>
<span class="quotelev2">&gt;&gt; your program could be correct and the deadlock might be open MPI specific.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; ABE Hiroshi
</span><br>
<span class="quotelev1">&gt;  Three Wells, JAPAN
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.3wells-computing.com/">http://www.3wells-computing.com/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28019.php">Jeff Hammond: "[OMPI users] Ubuntu/Debian packages for recent version (for Travis CI support)"</a>
<li><strong>Previous message:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
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
