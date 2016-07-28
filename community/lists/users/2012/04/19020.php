<?
$subject_val = "Re: [OMPI users] Sharing (not copying) data with OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 16 14:02:40 2012" -->
<!-- isoreceived="20120416180240" -->
<!-- sent="Mon, 16 Apr 2012 14:02:32 -0400" -->
<!-- isosent="20120416180232" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Sharing (not copying) data with OpenMPI?" -->
<!-- id="45329388-C9A3-4391-ABFF-9598F381E267_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAKbzMGdS31eMng2aaPX3hRYxAWb9291OsdmzRdRLTToY4vndEw_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-16 14:02:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19021.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="19015.php">jody: "[OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No currently there is no way in MPI (and subsequently in Open MPI) to achieve this. However, in the next version of the MPI standard there will be a function allowing processes to shared a memory segment (<a href="https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284">https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/284</a>).
<br>
<p>If you like living on the bleeding edge, you can try Brian's branch implementing the MPI 3.0 RMA operations (including the shared memory segment) from <a href="http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/">http://svn.open-mpi.org/svn/ompi/tmp-public/mpi3-onesided/</a>.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Apr 16, 2012, at 09:52 , jody wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In my application i have to generate a large block of data (several
</span><br>
<span class="quotelev1">&gt; gigs) which subsequently has to be accessed by all processes (read
</span><br>
<span class="quotelev1">&gt; only),
</span><br>
<span class="quotelev1">&gt; Because of its size, it would take quite some time to serialize and
</span><br>
<span class="quotelev1">&gt; send the data to the different processes. Furthermore, i risk
</span><br>
<span class="quotelev1">&gt; running out of memory if this data is instantiated more than once on
</span><br>
<span class="quotelev1">&gt; one machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OpenMPI offer some way of sharing data between processes (on the
</span><br>
<span class="quotelev1">&gt; same machine) without needing to send (and therefore copy) it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or would i have to do this by means of creating shared memory, writing
</span><br>
<span class="quotelev1">&gt; to it, and then make it accessible for reading by the processes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You
</span><br>
<span class="quotelev1">&gt;  Jody
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
<li><strong>Next message:</strong> <a href="19021.php">Shiqing Fan: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>Previous message:</strong> <a href="19019.php">Jeffrey Squyres: "Re: [OMPI users] configuration of openmpi-1.5.4 with visual studio"</a>
<li><strong>In reply to:</strong> <a href="19015.php">jody: "[OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="19023.php">Brian Austin: "Re: [OMPI users] Sharing (not copying) data with OpenMPI?"</a>
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
