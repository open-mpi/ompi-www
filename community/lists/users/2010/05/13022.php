<?
$subject_val = "Re: [OMPI users] Questions about MPI_Isend";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 11 16:54:12 2010" -->
<!-- isoreceived="20100511205412" -->
<!-- sent="Tue, 11 May 2010 22:54:04 +0200" -->
<!-- isosent="20100511205404" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Questions about MPI_Isend" -->
<!-- id="B7DFFBB2-B34B-4E0A-80A1-DABAA8754D25_at_gmail.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="36CE392E-8BC8-4FAC-BCFF-EA15624784B5_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Questions about MPI_Isend<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-11 16:54:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
<li><strong>Previous message:</strong> <a href="13021.php">Jeff Squyres: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 11, 2010, at 9:18 , Gijsbert Wiesenekker wrote:
<br>
<p><span class="quotelev1">&gt; An OpenMPI program of mine that uses MPI_Isend and MPI_Irecv crashes after some non-reproducible time my Fedora Linux kernel (invalid opcode), which makes it hard to debug (there is no trace, even with the debug kernel, and if I run it under valgrind it does not crash).
</span><br>
<span class="quotelev1">&gt; My guess is that the kernel crash is caused by OpenMPI running out if memory because too many MPI_Irecv messages have been sent but not been processed yet.
</span><br>
<span class="quotelev1">&gt; My questions are:
</span><br>
<span class="quotelev1">&gt; What does the OpenMPI specification say about the behaviour of MPI_Isend when many messages have been sent but have not been processed yet? Will it fail? Will it block until more memory becomes available (I hope not, because this would cause my program to deadlock)?
</span><br>
<span class="quotelev1">&gt; Ideally I would like to check how many MPI_Isend messages have not been processed yet, so that I can stop sending messages if there are 'too many' waiting. Is there a way to do this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Gijsbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I want to let you know that this crash (you get invalid opcode: 0000 [1] SMP painted on your screen) is specific for Fedora 12 kernel version 2.6.32.11-99.fc12.x86_64, OpenMPI 1.4.2, a lot of MPI_Isend and MPI_Irecv calls and perhaps my hardware. The same code on CentOS 5.4 kernel version 2.6.18-164.15.1.el5 runs fine.
<br>
<p>Gijsbert
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13023.php">ananda.mudar_at_[hidden]: "[OMPI users] ompi-checkpoint fails sometimes"</a>
<li><strong>Previous message:</strong> <a href="13021.php">Jeff Squyres: "Re: [OMPI users] PGI problems"</a>
<li><strong>In reply to:</strong> <a href="13007.php">Gijsbert Wiesenekker: "[OMPI users] Questions about MPI_Isend"</a>
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
