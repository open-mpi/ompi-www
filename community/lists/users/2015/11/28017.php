<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  6 19:52:10 2015" -->
<!-- isoreceived="20151107005210" -->
<!-- sent="Sat, 7 Nov 2015 09:52:02 +0900" -->
<!-- isosent="20151107005202" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="4AD68BF5-42B8-4BD1-8DB2-0263D7B56B7A_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkVEaSMCvydmhceeMEk-KU2zhtQun0TF-wq0wHtM2qDpjQ_at_mail.gmail.com" -->
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
<strong>From:</strong> ABE Hiroshi (<em>habe36_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-06 19:52:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>In reply to:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dr. Bosilca and All,
<br>
<p>Regarding my problem, MPI_Wait stall after MPI_Isend with large (over 4kbytes) messages has been resolved by Dr. Gouaillardet&#226;&#128;&#153;s suggestion :
<br>
<p>1 MPI_Isend in the master thread
<br>
2 Launch worker threads to receive the messages by MPI_Recv
<br>
3. MPI_Waitall in the master thread.
<br>
<p>Thank you so much, and I will try the Dr. Bosica&#226;&#128;&#153;s suggestion, it seems I would need some investigation to understand the suggestion. But it is interesting to me.
<br>
<p>Sincerely,
<br>
Hiroshi
<br>
<p>2015/11/05 9:58&#227;&#128;&#129;George Bosilca &lt;bosilca_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; Dear Abe,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI provides a simple way to validate your code against the eager problem, by forcing the library to use a 0 size eager (basically all messages are then matched). First, identify the networks used by your application and then set both btl_&lt;network&gt;_eager_limit and btl_&lt;network&gt;_rndv_eager_limit to 0 (via the MCA parameters or in the configuration file).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 4, 2015 at 7:30 PM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear Dr. Bosilca and Dr. Gouaillardet,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your kind mail. I believe I could configure the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As is described in Dr. Boslica&#226;&#128;&#153;s mail, this should be the eager problem. In order to avoid that we should take one of the methods which are suggested in Dr. Gouaillardet&#226;&#128;&#153;s mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also I suppose to try MPICH but our code should work on both of the most popular MPI implementations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, thank you very much for your kind helps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2015/11/05 0:36&#227;&#128;&#129;George Bosilca &lt;bosilca_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A reproducer without the receiver part limited usability. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1) Have you checked that your code doesn't suffer from the eager problem? It might happen that if your message size is under the eager limit, your perception is that the code works when in fact your message is just on the unexpected queue on the receiver, and will potentially never be matched. On the opposite, when the length of the message is larger than the eager size (which is network dependent), the code will stall obviously in MPI_Wait as the send is never matched. The latter is the expected and defined behavior based on the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) In order to rule this out add a lock around your sends to make sure that 1) a sequential version of the code is valid; and 2) that we are not facing some consistent thread interleaving issues. If this step successfully complete, then we can start looking deeper in the OMPI internals for a bug.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Nov 4, 2015 at 12:34 AM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Abe-san,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; you can be blocking on one side, and non blocking on the other side.
</span><br>
<span class="quotelev2">&gt;&gt; for example, one task can do MPI_Send, and the other MPI_Irecv and MPI_Wait.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; in order to avoid deadlock, your program should do
</span><br>
<span class="quotelev2">&gt;&gt; 1. master MPI_Isend and start the workers
</span><br>
<span class="quotelev2">&gt;&gt; 2. worker receive and process messages (in there is one recv per thread, you can do MPI_Recv e.g. blocking recv)
</span><br>
<span class="quotelev2">&gt;&gt; 3. master MPI_Wait the request used in MPI_Isend
</span><br>
<span class="quotelev2">&gt;&gt; 4. do simulation
</span><br>
<span class="quotelev2">&gt;&gt; I do not know if some kind of synchronization is required between master and workers.
</span><br>
<span class="quotelev2">&gt;&gt; the key point is you MPI_Wait after the workers have been started.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I do not know all the details of your program, but you might avoid using threads :
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
<span class="quotelev2">&gt;&gt; if you really want threads, an other option is to start the worker after MPI_Waitany/MPI_Waitsome
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; once again, I do not know your full program, so I can just guess.
</span><br>
<span class="quotelev2">&gt;&gt; you might also want to try an other MPI flavor (such as mpich), since your program could be correct and the deadlock might be open MPI specific.
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;Three Wells, JAPAN
<br>
&nbsp;<a href="http://www.3wells-computing.com/">http://www.3wells-computing.com/</a>
<br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28017/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="28016.php">Saurabh T: "Re: [OMPI users] Problems running 1.8.8 and compiling 1.10.1 on Redhat EL7"</a>
<li><strong>In reply to:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="28018.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_Wait stalls"</a>
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
