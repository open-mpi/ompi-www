<?
$subject_val = "Re: [OMPI users] heterogeneous startup";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 22 12:14:10 2007" -->
<!-- isoreceived="20071122171410" -->
<!-- sent="Thu, 22 Nov 2007 10:14:02 -0700" -->
<!-- isosent="20071122171402" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] heterogeneous startup" -->
<!-- id="2A5256D4-3156-424A-AC83-DC2E5C6C5753_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3edd3e5a0711220219u23dd65cj553c235c1bd47762_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] heterogeneous startup<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-22 12:14:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4513.php">Torsten Hoefler: "Re: [OMPI users] ETH BTL"</a>
<li><strong>Previous message:</strong> <a href="4511.php">Patrick Heckeler: "[OMPI users] heterogeneous startup"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Patrick Heckeler: "[OMPI users] heterogeneous startup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI support the full mpiexec command as described by the MPI  
<br>
standard. Here is an example on how to start a MPMD application  
<br>
(general case of heterogeneous application).
<br>
<p>mpirun -np 1 -host host_x86 &lt;path_x86&gt;/application_x86 : -np 1 -host  
<br>
host_sparc &lt;path_sparc&gt;/application_sparc
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 22, 2007, at 3:19 AM, Patrick Heckeler wrote:
<br>
<p><span class="quotelev1">&gt; hi everybody,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; i couldn't find any information about how to start a mpi application
</span><br>
<span class="quotelev1">&gt; (compiled for different architectures) in heterogeneous networks using
</span><br>
<span class="quotelev1">&gt; the mpirun command included in OpenMpi. Mpich1 supports starting
</span><br>
<span class="quotelev1">&gt; different binaries with the &quot;mpirun -arch&quot; command. How can I start
</span><br>
<span class="quotelev1">&gt; different binaries using OpenMpi?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Patrick Heckeler
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
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4512/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4513.php">Torsten Hoefler: "Re: [OMPI users] ETH BTL"</a>
<li><strong>Previous message:</strong> <a href="4511.php">Patrick Heckeler: "[OMPI users] heterogeneous startup"</a>
<li><strong>In reply to:</strong> <a href="4511.php">Patrick Heckeler: "[OMPI users] heterogeneous startup"</a>
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
