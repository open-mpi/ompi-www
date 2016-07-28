<?
$subject_val = "Re: [OMPI users] communicating with the caller";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 25 11:06:50 2008" -->
<!-- isoreceived="20080325150650" -->
<!-- sent="Tue, 25 Mar 2008 11:06:44 -0400" -->
<!-- isosent="20080325150644" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] communicating with the caller" -->
<!-- id="BF91AE35-0B53-4D12-AFF5-00C93D9D659A_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47E90CF1.8070005_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] communicating with the caller<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-25 11:06:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5266.php">Andreas Schäfer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5264.php">George Bosilca: "Re: [OMPI users] 2 questions about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5263.php">slimtimmy_at_[hidden]: "[OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a chapter in the MPI standard about this. Usually, people  
<br>
will use comm accept/connect to do such kind of things. No need to  
<br>
have your own communication protocol.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 25, 2008, at 10:32 AM, slimtimmy_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; I'm new to OpenMPI and would like to know whether there is a common  
</span><br>
<span class="quotelev1">&gt; way
</span><br>
<span class="quotelev1">&gt; for a caller of mpirun to communicate with the mpi processes.  
</span><br>
<span class="quotelev1">&gt; Basically
</span><br>
<span class="quotelev1">&gt; I have a setup where one process is responsible for distributing jobs
</span><br>
<span class="quotelev1">&gt; to other mpi processes and collecting the respective results  
</span><br>
<span class="quotelev1">&gt; afterwards.
</span><br>
<span class="quotelev1">&gt; Now for example I want to enable communication between the master
</span><br>
<span class="quotelev1">&gt; process and a GUI application. The GUI should be notified by the  
</span><br>
<span class="quotelev1">&gt; master
</span><br>
<span class="quotelev1">&gt; about progress being made and it should also be possible for the GUI  
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt; send commands to the master (so the communication should be possible  
</span><br>
<span class="quotelev1">&gt; in
</span><br>
<span class="quotelev1">&gt; both ways)
</span><br>
<span class="quotelev1">&gt; Is stdin/stdout suitable? (is sending binary data a problem with this
</span><br>
<span class="quotelev1">&gt; type of communication?) I also read that the MPI specification does  
</span><br>
<span class="quotelev1">&gt; not
</span><br>
<span class="quotelev1">&gt; say anything about the use of stdin/stdout. Is it safe to assume that
</span><br>
<span class="quotelev1">&gt; most common MPI implementations support it?
</span><br>
<span class="quotelev1">&gt; Another way to deal with the problem would be to write some custom
</span><br>
<span class="quotelev1">&gt; network code that is used alongside the MPI communication. What is
</span><br>
<span class="quotelev1">&gt; commonly used in this situation?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Timm
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5265/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5266.php">Andreas Schäfer: "[OMPI users] [gentryx@gmx.de: Re:  2 questions about Open MPI]"</a>
<li><strong>Previous message:</strong> <a href="5264.php">George Bosilca: "Re: [OMPI users] 2 questions about Open MPI"</a>
<li><strong>In reply to:</strong> <a href="5263.php">slimtimmy_at_[hidden]: "[OMPI users] communicating with the caller"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5267.php">jody: "Re: [OMPI users] communicating with the caller"</a>
<li><strong>Reply:</strong> <a href="5277.php">slimtimmy_at_[hidden]: "Re: [OMPI users] communicating with the caller"</a>
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
