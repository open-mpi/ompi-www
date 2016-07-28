<?
$subject_val = "Re: [OMPI users] MPI_Wait stalls";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  4 19:30:38 2015" -->
<!-- isoreceived="20151105003038" -->
<!-- sent="Thu, 5 Nov 2015 09:30:30 +0900" -->
<!-- isosent="20151105003030" -->
<!-- name="ABE Hiroshi" -->
<!-- email="habe36_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Wait stalls" -->
<!-- id="CC9FA1DA-F962-427D-8538-EE18A3127B3D_at_gmail.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAMJJpkUuiSJ3g2JDgjsCEXOwPjGJBdnsU6iofpfSgouu6OMP1A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2015-11-04 19:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dr. Bosilca and Dr. Gouaillardet,
<br>
<p>Thank you for your kind mail. I believe I could configure the problem.
<br>
<p>As is described in Dr. Boslica&#226;&#128;&#153;s mail, this should be the eager problem. In order to avoid that we should take one of the methods which are suggested in Dr. Gouaillardet&#226;&#128;&#153;s mail.
<br>
<p>Also I suppose to try MPICH but our code should work on both of the most popular MPI implementations.
<br>
<p>Again, thank you very much for your kind helps.
<br>
<p>2015/11/05 0:36&#227;&#128;&#129;George Bosilca &lt;bosilca_at_[hidden]&gt; &#227;&#129;&#174;&#227;&#131;&#161;&#227;&#131;&#188;&#227;&#131;&#171;&#239;&#188;&#154;
<br>
<p><span class="quotelev1">&gt; A reproducer without the receiver part limited usability. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) Have you checked that your code doesn't suffer from the eager problem? It might happen that if your message size is under the eager limit, your perception is that the code works when in fact your message is just on the unexpected queue on the receiver, and will potentially never be matched. On the opposite, when the length of the message is larger than the eager size (which is network dependent), the code will stall obviously in MPI_Wait as the send is never matched. The latter is the expected and defined behavior based on the MPI standard.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2) In order to rule this out add a lock around your sends to make sure that 1) a sequential version of the code is valid; and 2) that we are not facing some consistent thread interleaving issues. If this step successfully complete, then we can start looking deeper in the OMPI internals for a bug.
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
[snip]
<br>
<p><span class="quotelev1">&gt; Abe-san,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; you can be blocking on one side, and non blocking on the other side.
</span><br>
<span class="quotelev1">&gt; for example, one task can do MPI_Send, and the other MPI_Irecv and MPI_Wait.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; in order to avoid deadlock, your program should do
</span><br>
<span class="quotelev1">&gt; 1. master MPI_Isend and start the workers
</span><br>
<span class="quotelev1">&gt; 2. worker receive and process messages (in there is one recv per thread, you can do MPI_Recv e.g. blocking recv)
</span><br>
<span class="quotelev1">&gt; 3. master MPI_Wait the request used in MPI_Isend
</span><br>
<span class="quotelev1">&gt; 4. do simulation
</span><br>
<span class="quotelev1">&gt; I do not know if some kind of synchronization is required between master and workers.
</span><br>
<span class="quotelev1">&gt; the key point is you MPI_Wait after the workers have been started.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I do not know all the details of your program, but you might avoid using threads :
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
<span class="quotelev1">&gt; if you really want threads, an other option is to start the worker after MPI_Waitany/MPI_Waitsome
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; once again, I do not know your full program, so I can just guess.
</span><br>
<span class="quotelev1">&gt; you might also want to try an other MPI flavor (such as mpich), since your program could be correct and the deadlock might be open MPI specific.
</span><br>
<p>ABE Hiroshi
<br>
&nbsp;Three Wells, JAPAN
<br>
&nbsp;<a href="http://www.3wells-computing.com/">http://www.3wells-computing.com/</a>
<br>
<p><p><p><p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27996/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Previous message:</strong> <a href="27995.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>In reply to:</strong> <a href="27990.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
<li><strong>Reply:</strong> <a href="27997.php">George Bosilca: "Re: [OMPI users] MPI_Wait stalls"</a>
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
