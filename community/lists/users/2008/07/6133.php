<?
$subject_val = "Re: [OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 13:24:56 2008" -->
<!-- isoreceived="20080726172456" -->
<!-- sent="Sat, 26 Jul 2008 13:23:20 -0400" -->
<!-- isosent="20080726172320" -->
<!-- name="Mark Borgerding" -->
<!-- email="markb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="488B5D88.6000802_at_3dB-Labs.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488A856B.8070502_at_3dB-Labs.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to make a process start and then join a MPI group<br>
<strong>From:</strong> Mark Borgerding (<em>markb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 13:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, so I've gotten a little bit closer.
<br>
<p>I'm using MPI_Comm_spawn to start several children processes.  The 
<br>
problem is that the children are in their own group, separate from the 
<br>
parent (just the like the documentation says).  I want to merge the 
<br>
children's group with the parent group so I can efficiently Send/Recv 
<br>
data between them..
<br>
<p>Is this possible?
<br>
<p>Plan B: I guess if there is no elegant way to merge all those processes 
<br>
into one group, I can connect sockets and make intercomms to talk from 
<br>
the parent directly to each child.
<br>
<p>-- Mark
<br>
<p><p><p>Mark Borgerding wrote:
<br>
<span class="quotelev1">&gt; I am writing a code module that plugs into a larger application 
</span><br>
<span class="quotelev1">&gt; framework.  That framework loads my code module as a shared object.
</span><br>
<span class="quotelev1">&gt; So I do not control how the first process gets started, but I still 
</span><br>
<span class="quotelev1">&gt; want it to be able to start and participate in an MPI group.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's roughly what I want to happen ( I think):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; framework app running (not under my control)
</span><br>
<span class="quotelev1">&gt;        -&gt; framework loads mycode.so shared object into its process
</span><br>
<span class="quotelev1">&gt;               -&gt; mycode.so starts mpi programs on several hosts (e.g. 
</span><br>
<span class="quotelev1">&gt; via system call to mpiexec )
</span><br>
<span class="quotelev1">&gt;               -&gt; initial mycode.so process participates in the group 
</span><br>
<span class="quotelev1">&gt; he just started (e.g. he shows up in MPI_Comm_group, can use MPI_Send, 
</span><br>
<span class="quotelev1">&gt; MPI_Recv, etc. )
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can this be done?
</span><br>
<span class="quotelev1">&gt; I am running under Centos 5.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    Mark
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
<li><strong>Next message:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6132.php">Brock Palen: "Re: [OMPI users] How to cease the process triggered by OPENMPI"</a>
<li><strong>In reply to:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6134.php">Aurélien Bouteiller: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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
