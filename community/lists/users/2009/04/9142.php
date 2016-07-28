<?
$subject_val = "Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 07:07:03 2009" -->
<!-- isoreceived="20090429110703" -->
<!-- sent="Wed, 29 Apr 2009 07:06:58 -0400" -->
<!-- isosent="20090429110658" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb" -->
<!-- id="D5842A3B-B306-4798-A867-AFE6D224C53F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C4112669-231E-4C71-8CC9-A6FCC8236DE4_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 07:06:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9143.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9141.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9091.php">Anton Starikov: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 25, 2009, at 11:59 AM, Anton Starikov wrote:
<br>
<p><span class="quotelev1">&gt; I can confirm that I have exactly the same problem, also on Dell
</span><br>
<span class="quotelev1">&gt; system, even with latest openpmpi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Our system is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dell M905
</span><br>
<span class="quotelev1">&gt; OpenSUSE 11.1
</span><br>
<span class="quotelev1">&gt; kernel: 2.6.27.21-0.1-default
</span><br>
<span class="quotelev1">&gt; ofed-1.4-21.12 from SUSE repositories.
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.3.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But what I can also add, it not only affect openmpi, if this messages
</span><br>
<span class="quotelev1">&gt; are triggered after mpirun:
</span><br>
<span class="quotelev1">&gt; [node032][[9340,1],11][btl_openib_component.c:3002:poll_device] error
</span><br>
<span class="quotelev1">&gt; polling HP CQ with -2 errno says Success
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then IB stack hangs. You cannot even reload it, have to reboot node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Something that severe should not be able to be caused by Open MPI.   
<br>
Specifically: Open MPI should not be able to hang the OFED stack.   
<br>
Have you run layer 0 diagnostics to know that your fabric is clean?   
<br>
You might want to contact your IB vendor to find out how to do that.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9143.php">Gus Correa: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="9141.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>In reply to:</strong> <a href="9091.php">Anton Starikov: "[OMPI users] running problem on Dell blade server, confirm 2d21ce3ce8be64d8104b3ad71b8c59e2514a72eb"</a>
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
