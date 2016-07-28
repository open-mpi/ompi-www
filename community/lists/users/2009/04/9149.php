<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 05:33:33 2009" -->
<!-- isoreceived="20090430093333" -->
<!-- sent="Thu, 30 Apr 2009 17:33:07 +0800" -->
<!-- isosent="20090430093307" -->
<!-- name="jan" -->
<!-- email="jan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
<!-- id="004a01c9c976$ae351c90$0263a8c0_at_xx02" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] users Digest, Vol 1217, Issue 2, Message3" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3<br>
<strong>From:</strong> jan (<em>jan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 05:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<li><strong>Previous message:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank You Jeff Squyres. Could you suggest the method to run layer 0 
<br>
diagnostics to know that if the fabric is clean. I have contacted Dell 
<br>
local(Taiwan). I don't think they are familiar with Openmpi even the 
<br>
infiniband module. Does anyone have the IB stack hangs problem with Mellanox 
<br>
ConnectX product?
<br>
<p>Thank you again.
<br>
<p>Best Regards,
<br>
<p>Gloria Jan
<br>
Wavelink Technology Inc
<br>
<p><p><span class="quotelev2">&gt;&gt; I can confirm that I have exactly the same problem, also on Dell
</span><br>
<span class="quotelev2">&gt;&gt; system, even with latest openpmpi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Our system is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dell M905
</span><br>
<span class="quotelev2">&gt;&gt; OpenSUSE 11.1
</span><br>
<span class="quotelev2">&gt;&gt; kernel: 2.6.27.21-0.1-default
</span><br>
<span class="quotelev2">&gt;&gt; ofed-1.4-21.12 from SUSE repositories.
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI-1.3.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But what I can also add, it not only affect openmpi, if this messages
</span><br>
<span class="quotelev2">&gt;&gt; are triggered after mpirun:
</span><br>
<span class="quotelev2">&gt;&gt; [node032][[9340,1],11][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev2">&gt;&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Then IB stack hangs. You cannot even reload it, have to reboot node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something that severe should not be able to be caused by Open MPI.
</span><br>
<span class="quotelev1">&gt; Specifically: Open MPI should not be able to hang the OFED stack.
</span><br>
<span class="quotelev1">&gt; Have you run layer 0 diagnostics to know that your fabric is clean?
</span><br>
<span class="quotelev1">&gt; You might want to contact your IB vendor to find out how to do that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------
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
<span class="quotelev1">&gt; End of users Digest, Vol 1217, Issue 2
</span><br>
<span class="quotelev1">&gt; **************************************
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9150.php">Bouguerra mohamed slim: "[OMPI users] Problem with Filem"</a>
<li><strong>Previous message:</strong> <a href="9148.php">Jeff Squyres: "Re: [OMPI users] Bogus memcpy or bogus  valgrind record"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Reply:</strong> <a href="9151.php">Jeff Squyres: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9181.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9182.php">jan: "Re: [OMPI users] users Digest, Vol 1217, Issue 2, Message3"</a>
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
