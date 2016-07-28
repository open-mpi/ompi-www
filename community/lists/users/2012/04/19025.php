<?
$subject_val = "Re: [OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 17 02:27:01 2012" -->
<!-- isoreceived="20120417062701" -->
<!-- sent="Tue, 17 Apr 2012 08:26:57 +0200" -->
<!-- isosent="20120417062657" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="CAKbzMGcLcDOnKQLJNNG+f1EXyRcckxpv9_JRA6ZGaqW=D93oFA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAK8cxKQq2=KhwhaFeYKnHbbArH7hzrmySFCDSFQwUvU86DLvHQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Sharing (not copying) data with OpenMPI?<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-17 02:26:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
<li><strong>In reply to:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19035.php">Rayson Ho: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>Thank You all for your replies.
<br>
I'll certainly look into the MPI 3.0 RMA link (out of pure interest)
<br>
but i am afraid i can't go bleeding edge, because my application
<br>
will also have to run on an other machine.
<br>
<p>As to OpenMP: i already make use of OpenMP in some places (for
<br>
instance for the creation of the large data block),
<br>
but unfortunately my main application is not well suited for OpenMP
<br>
parallelization..
<br>
<p>I guess i'll have to take more detailed look at my problem to see if i
<br>
can restructure it in a good way...
<br>
<p>Thank You
<br>
&nbsp;&nbsp;Jody
<br>
<p><p>On Mon, Apr 16, 2012 at 11:16 PM, Brian Austin &lt;brianmaustin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Maybe you meant to search for OpenMP instead of Open-MPI.
</span><br>
<span class="quotelev1">&gt; You can achieve something close to what you want by using OpenMP for on-node
</span><br>
<span class="quotelev1">&gt; parallelism and MPI for inter-node communication.
</span><br>
<span class="quotelev1">&gt; -Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 16, 2012 at 11:02 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No currently there is no way in MPI (and subsequently in Open MPI) to
</span><br>
<span class="quotelev2">&gt;&gt; achieve this. However, in the next version of the MPI standard there will be
</span><br>
<span class="quotelev2">&gt;&gt; a function allowing processes to shared a memory segment
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284</a>).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you like living on the bleeding edge, you can try Brian's branch
</span><br>
<span class="quotelev2">&gt;&gt; implementing the MPI 3.0 RMA operations (including the shared memory
</span><br>
<span class="quotelev2">&gt;&gt; segment) from <a href="http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/">http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/</a>.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#160;george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 16, 2012, at 09:52 , jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In my application i have to generate a large block of data (several
</span><br>
<span class="quotelev3">&gt;&gt; &gt; gigs) which subsequently has to be accessed by all processes (read
</span><br>
<span class="quotelev3">&gt;&gt; &gt; only),
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Because of its size, it would take quite some time to serialize and
</span><br>
<span class="quotelev3">&gt;&gt; &gt; send the data to the different processes. Furthermore, i risk
</span><br>
<span class="quotelev3">&gt;&gt; &gt; running out of memory if this data is instantiated more than once on
</span><br>
<span class="quotelev3">&gt;&gt; &gt; one machine.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Does OpenMPI offer some way of sharing data between processes (on the
</span><br>
<span class="quotelev3">&gt;&gt; &gt; same machine) without needing to send (and therefore copy) it?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Or would i have to do this by means of creating shared memory, writing
</span><br>
<span class="quotelev3">&gt;&gt; &gt; to it, and then make it accessible for reading by the processes?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt; &gt; &#160;Jody
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19026.php">Rohan Deshpande: "[OMPI users] machine exited on signal 11 (Segmentation fault)."</a>
<li><strong>Previous message:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
<li><strong>In reply to:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19028.php">Sebastian Rettenberger: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19035.php">Rayson Ho: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
