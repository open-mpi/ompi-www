<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 10 17:50:51 2007" -->
<!-- isoreceived="20070810215051" -->
<!-- sent="Fri, 10 Aug 2007 17:50:42 -0400" -->
<!-- isosent="20070810215042" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multiple threads synchronization with Openmpi" -->
<!-- id="A37B4BF3-7D48-4A59-AF8D-1A46BFD39112_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070810155757.82zc7w4hkww88gg0_at_webmail.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-10 17:50:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3841.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Yuan,  Huapeng: "[OMPI users] multiple threads synchronization with Openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI is process based and not thread based. So there is no way in MPI  
<br>
to synchronize several threads. Moreover, all threads in a process  
<br>
will return the same rank [as you noticed].
<br>
<p>Synchronizations internal to a process have to be done outside MPI.  
<br>
Any threading library, such as pthread library, is the way to go.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 10, 2007, at 3:57 PM, Yuan, Huapeng wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can I use openmpi API like MPI_Reduce or MPI_Gather to synchronize
</span><br>
<span class="quotelev1">&gt; multiple theads in a process?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my test in redhat linux, MPI_Comm_rank return 0 for all threads in
</span><br>
<span class="quotelev1">&gt; the same process. If I want to use the MPI functions like  
</span><br>
<span class="quotelev1">&gt; MPI_Reduce or
</span><br>
<span class="quotelev1">&gt; MPI_Gather, the  rank number shoule be different for each threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do you have any suggestions? Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hua
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3840/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3841.php">Don Kerr: "Re: [OMPI users] memory leaks on solaris"</a>
<li><strong>Previous message:</strong> <a href="3839.php">Tim Prins: "Re: [OMPI users] orterun mangling executable's &quot;-host&quot; argument"</a>
<li><strong>In reply to:</strong> <a href="3838.php">Yuan,  Huapeng: "[OMPI users] multiple threads synchronization with Openmpi"</a>
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
