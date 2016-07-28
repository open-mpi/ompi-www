<?
$subject_val = "Re: [OMPI users] how to make a process start and then join a MPI group";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 26 17:58:37 2008" -->
<!-- isoreceived="20080726215837" -->
<!-- sent="Sat, 26 Jul 2008 17:58:21 -0400" -->
<!-- isosent="20080726215821" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to make a process start and then join a MPI group" -->
<!-- id="E4A408FC-F269-42FD-97FD-25161D28CC74_at_eecs.utk.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="488B5D88.6000802_at_3dB-Labs.com" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-26 17:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6135.php">Amir Saad: "[OMPI users] How can I start building apps in Open MPI? any docs?"</a>
<li><strong>Previous message:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI_Intercomm_merge is what you are looking for.
<br>
<p>Aurelien
<br>
Le 26 juil. 08 &#224; 13:23, Mark Borgerding a &#233;crit :
<br>
<p><span class="quotelev1">&gt; Okay, so I've gotten a little bit closer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using MPI_Comm_spawn to start several children processes.  The  
</span><br>
<span class="quotelev1">&gt; problem is that the children are in their own group, separate from  
</span><br>
<span class="quotelev1">&gt; the parent (just the like the documentation says).  I want to merge  
</span><br>
<span class="quotelev1">&gt; the children's group with the parent group so I can efficiently Send/ 
</span><br>
<span class="quotelev1">&gt; Recv data between them..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Plan B: I guess if there is no elegant way to merge all those  
</span><br>
<span class="quotelev1">&gt; processes into one group, I can connect sockets and make intercomms  
</span><br>
<span class="quotelev1">&gt; to talk from the parent directly to each child.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Mark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mark Borgerding wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I am writing a code module that plugs into a larger application  
</span><br>
<span class="quotelev2">&gt;&gt; framework.  That framework loads my code module as a shared object.
</span><br>
<span class="quotelev2">&gt;&gt; So I do not control how the first process gets started, but I still  
</span><br>
<span class="quotelev2">&gt;&gt; want it to be able to start and participate in an MPI group.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here's roughly what I want to happen ( I think):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; framework app running (not under my control)
</span><br>
<span class="quotelev2">&gt;&gt;       -&gt; framework loads mycode.so shared object into its process
</span><br>
<span class="quotelev2">&gt;&gt;              -&gt; mycode.so starts mpi programs on several hosts  
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. via system call to mpiexec )
</span><br>
<span class="quotelev2">&gt;&gt;              -&gt; initial mycode.so process participates in the group  
</span><br>
<span class="quotelev2">&gt;&gt; he just started (e.g. he shows up in MPI_Comm_group, can use  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Send, MPI_Recv, etc. )
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can this be done?
</span><br>
<span class="quotelev2">&gt;&gt; I am running under Centos 5.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;   Mark
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
<li><strong>Next message:</strong> <a href="6135.php">Amir Saad: "[OMPI users] How can I start building apps in Open MPI? any docs?"</a>
<li><strong>Previous message:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>In reply to:</strong> <a href="6133.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Reply:</strong> <a href="6144.php">Mark Borgerding: "Re: [OMPI users] how to make a process start and then join a MPI group"</a>
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
