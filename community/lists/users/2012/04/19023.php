<?
$subject_val = "Re: [OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 17:17:09 2012" -->
<!-- isoreceived="20120416211709" -->
<!-- sent="Mon, 16 Apr 2012 14:16:45 -0700" -->
<!-- isosent="20120416211645" -->
<!-- name="Brian Austin" -->
<!-- email="brianmaustin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="CAK8cxKQq2=KhwhaFeYKnHbbArH7hzrmySFCDSFQwUvU86DLvHQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45329388-C9A3-4391-ABFF-9598F381E267_at_eecs.utk.edu" -->
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
<strong>From:</strong> Brian Austin (<em>brianmaustin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 17:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
<li><strong>Previous message:</strong> <a href="19022.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Maybe you meant to search for OpenMP instead of Open-MPI.
<br>
You can achieve something close to what you want by using OpenMP for
<br>
on-node parallelism and MPI for inter-node communication.
<br>
-Brian
<br>
<p><p>On Mon, Apr 16, 2012 at 11:02 AM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; No currently there is no way in MPI (and subsequently in Open MPI) to
</span><br>
<span class="quotelev1">&gt; achieve this. However, in the next version of the MPI standard there will
</span><br>
<span class="quotelev1">&gt; be a function allowing processes to shared a memory segment (
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284</a>).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you like living on the bleeding edge, you can try Brian's branch
</span><br>
<span class="quotelev1">&gt; implementing the MPI 3.0 RMA operations (including the shared memory
</span><br>
<span class="quotelev1">&gt; segment) from <a href="http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/">http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 16, 2012, at 09:52 , jody wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my application i have to generate a large block of data (several
</span><br>
<span class="quotelev2">&gt; &gt; gigs) which subsequently has to be accessed by all processes (read
</span><br>
<span class="quotelev2">&gt; &gt; only),
</span><br>
<span class="quotelev2">&gt; &gt; Because of its size, it would take quite some time to serialize and
</span><br>
<span class="quotelev2">&gt; &gt; send the data to the different processes. Furthermore, i risk
</span><br>
<span class="quotelev2">&gt; &gt; running out of memory if this data is instantiated more than once on
</span><br>
<span class="quotelev2">&gt; &gt; one machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does OpenMPI offer some way of sharing data between processes (on the
</span><br>
<span class="quotelev2">&gt; &gt; same machine) without needing to send (and therefore copy) it?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Or would i have to do this by means of creating shared memory, writing
</span><br>
<span class="quotelev2">&gt; &gt; to it, and then make it accessible for reading by the processes?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank You
</span><br>
<span class="quotelev2">&gt; &gt;  Jody
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19023/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19024.php">Rohan Deshpande: "[OMPI users] Open MPI 1.4.5 and CUDA support"</a>
<li><strong>Previous message:</strong> <a href="19022.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="19020.php">George Bosilca: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19025.php">jody: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
