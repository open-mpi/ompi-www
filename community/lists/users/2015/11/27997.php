<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:58:59 2015" -->
<!-- isoreceived="20151105005859" -->
<!-- sent="Wed, 4 Nov 2015 19:58:55 -0500" -->
<!-- isosent="20151105005855" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="CAMJJpkVEaSMCvydmhceeMEk-KU2zhtQun0TF-wq0wHtM2qDpjQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CC9FA1DA-F962-427D-8538-EE18A3127B3D_at_gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-04 19:58:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Abe,
<br>
<p>Open MPI provides a simple way to validate your code against the eager
<br>
problem, by forcing the library to use a 0 size eager (basically all
<br>
messages are then matched). First, identify the networks used by your
<br>
application and then set both btl_&lt;network&gt;_eager_limit
<br>
and btl_&lt;network&gt;_rndv_eager_limit to 0 (via the MCA parameters or in the
<br>
configuration file).
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Wed, Nov 4, 2015 at 7:30 PM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Dr. Bosilca and Dr. Gouaillardet,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your kind mail. I believe I could configure the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As is described in Dr. Boslica&#226;&#128;&#153;s mail, this should be the eager problem.
</span><br>
<span class="quotelev1">&gt; In order to avoid that we should take one of the methods which are
</span><br>
<span class="quotelev1">&gt; suggested in Dr. Gouaillardet&#226;&#128;&#153;s mail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also I suppose to try MPICH but our code should work on both of the most
</span><br>
<span class="quotelev1">&gt; popular MPI implementations.
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
<span class="quotelev1">&gt; A reproducer without the receiver part limited usability.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Have you checked that your code doesn't suffer from the eager problem?
</span><br>
<span class="quotelev1">&gt; It might happen that if your message size is under the eager limit, your
</span><br>
<span class="quotelev1">&gt; perception is that the code works when in fact your message is just on the
</span><br>
<span class="quotelev1">&gt; unexpected queue on the receiver, and will potentially never be matched. On
</span><br>
<span class="quotelev1">&gt; the opposite, when the length of the message is larger than the eager size
</span><br>
<span class="quotelev1">&gt; (which is network dependent), the code will stall obviously in MPI_Wait as
</span><br>
<span class="quotelev1">&gt; the send is never matched. The latter is the expected and defined behavior
</span><br>
<span class="quotelev1">&gt; based on the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) In order to rule this out add a lock around your sends to make sure
</span><br>
<span class="quotelev1">&gt; that 1) a sequential version of the code is valid; and 2) that we are not
</span><br>
<span class="quotelev1">&gt; facing some consistent thread interleaving issues. If this step
</span><br>
<span class="quotelev1">&gt; successfully complete, then we can start looking deeper in the OMPI
</span><br>
<span class="quotelev1">&gt; internals for a bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Nov 4, 2015 at 12:34 AM, ABE Hiroshi &lt;habe36_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abe-san,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you can be blocking on one side, and non blocking on the other side.
</span><br>
<span class="quotelev1">&gt; for example, one task can do MPI_Send, and the other MPI_Irecv and
</span><br>
<span class="quotelev1">&gt; MPI_Wait.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; in order to avoid deadlock, your program should do
</span><br>
<span class="quotelev1">&gt; 1. master MPI_Isend and start the workers
</span><br>
<span class="quotelev1">&gt; 2. worker receive and process messages (in there is one recv per thread,
</span><br>
<span class="quotelev1">&gt; you can do MPI_Recv e.g. blocking recv)
</span><br>
<span class="quotelev1">&gt; 3. master MPI_Wait the request used in MPI_Isend
</span><br>
<span class="quotelev1">&gt; 4. do simulation
</span><br>
<span class="quotelev1">&gt; I do not know if some kind of synchronization is required between master
</span><br>
<span class="quotelev1">&gt; and workers.
</span><br>
<span class="quotelev1">&gt; the key point is you MPI_Wait after the workers have been started.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not know all the details of your program, but you might avoid using
</span><br>
<span class="quotelev1">&gt; threads :
</span><br>
<span class="quotelev1">&gt; 1. MPI_Isend
</span><br>
<span class="quotelev1">&gt; 2. several MPI_Irecv
</span><br>
<span class="quotelev1">&gt; 3. MPI_Waitall (or a loop with MPI_Waitany/MPI_Waitsome)
</span><br>
<span class="quotelev1">&gt; 4. do simulation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if you really want threads, an other option is to start the worker after
</span><br>
<span class="quotelev1">&gt; MPI_Waitany/MPI_Waitsome
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; once again, I do not know your full program, so I can just guess.
</span><br>
<span class="quotelev1">&gt; you might also want to try an other MPI flavor (such as mpich), since your
</span><br>
<span class="quotelev1">&gt; program could be correct and the deadlock might be open MPI specific.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/11/27996.php">http://www.open-mpi.org/community/lists/users/2015/11/27996.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27997/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27998.php">Oliver: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Previous message:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>In reply to:</strong> <a href="27996.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="28017.php">ABE Hiroshi: "Re: [OMPI users] MPI_Wait stalls"</a>
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
