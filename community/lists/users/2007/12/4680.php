<?
$subject_val = "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 16 17:55:25 2007" -->
<!-- isoreceived="20071216225525" -->
<!-- sent="Sun, 16 Dec 2007 20:55:21 -0200" -->
<!-- isosent="20071216225521" -->
<!-- name="Bruno Coutinho" -->
<!-- email="coutinho_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration" -->
<!-- id="a8d96dec0712161455if6b9e8ct2bdbdb525e0d9530_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AA57C47ACCD04E46B79317EA2CEEBE881F1763_at_fjldmail.fugro-jason.local" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration<br>
<strong>From:</strong> Bruno Coutinho (<em>coutinho_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-16 17:55:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try using the info parameter in MPI::Intracomm::Spawn().
<br>
In this structure, you can say in which hosts you want to spawn.
<br>
<p>Info parameters for MPI spawn:
<br>
<a href="http://www.mpi-forum.org/docs/mpi-20-html/node97.htm">http://www.mpi-forum.org/docs/mpi-20-html/node97.htm</a>
<br>
<p><p>2007/12/12, Elena Zhebel &lt;ezhebel_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on a MPI application where I'm using OpenMPI instead of MPICH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my &quot;master&quot; program I call the function MPI::Intracomm::Spawn which
</span><br>
<span class="quotelev1">&gt; spawns &quot;slave&quot; processes. It is not clear for me how to spawn the &quot;slave&quot;
</span><br>
<span class="quotelev1">&gt; processes over the network. Currently &quot;master&quot; creates &quot;slaves&quot; on the same
</span><br>
<span class="quotelev1">&gt; host.
</span><br>
<span class="quotelev1">&gt; If I use 'mpirun --hostfile openmpi.hosts' then processes are spawn over
</span><br>
<span class="quotelev1">&gt; the network as expected. But now I need to spawn processes over the network
</span><br>
<span class="quotelev1">&gt; from my own executable using MPI::Intracomm::Spawn, how can I achieve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance for any help.
</span><br>
<span class="quotelev1">&gt; Elena
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4681.php">Allan Menezes: "[OMPI users] Gigabit ethernet (PCI Express) and openmpi v1.2.4"</a>
<li><strong>Previous message:</strong> <a href="4679.php">Brian Barrett: "Re: [OMPI users] Compiling 1.2.4 using Intel Compiler 10.1.007 on Leopard"</a>
<li><strong>In reply to:</strong> <a href="4647.php">Elena Zhebel: "[OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4684.php">Ralph H Castain: "Re: [OMPI users] MPI::Intracomm::Spawn and cluster configuration"</a>
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
