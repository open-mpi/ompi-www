<?
$subject_val = "Re: [OMPI users] OpenMPI on a LAN";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov 29 21:37:59 2008" -->
<!-- isoreceived="20081130023759" -->
<!-- sent="Sun, 30 Nov 2008 11:37:45 +0900" -->
<!-- isosent="20081130023745" -->
<!-- name="Raymond Wan" -->
<!-- email="rwan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on a LAN" -->
<!-- id="4931FC79.5090402_at_kuicr.kyoto-u.ac.jp" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="27329b10811290640n4a0bfd48u5f71fbca7bf48054_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on a LAN<br>
<strong>From:</strong> Raymond Wan (<em>rwan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-29 21:37:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7379.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>Previous message:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>In reply to:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7379.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Heitor,
<br>
<p><p>Heitor Florido wrote:
<br>
<span class="quotelev1">&gt; I have installed OpenMPI on both computers and my application works on on
</span><br>
<span class="quotelev1">&gt; both of them, but when I try to communicate between them, the method
</span><br>
<span class="quotelev1">&gt; MPI_Lookup_name can't resolve the name published by the other machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've tried to run the example from mpi-forum that uses MPI_Open_port too,
</span><br>
<span class="quotelev1">&gt; but it didn't work either.
</span><br>
<span class="quotelev1">&gt; After reading about it on some FAQs e some other threads from the forum, I
</span><br>
<span class="quotelev1">&gt; believe that I need to config my ssh options.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Honestly, when I installed Open MPI, I didn't perform any configuration 
<br>
of the ssh options, as far as I can remember.  I'm not sure if someone 
<br>
else can help you.  I can imagine networks being set up incorrectly, but 
<br>
I can't imagine what incorrect ssh option there would be to prevent one 
<br>
computer from finding another.  In addition to some FAQs, Gus suggested 
<br>
running a simple example called hello_c.c.  Have you tried that?
<br>
<p>It is hard to give any suggestions unless you give more information such 
<br>
as a shortened version of your source code and what is the command line 
<br>
that you ran mpirun with.  It might help if you ran some existing code 
<br>
(such as <a href="http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html">http://mpi.deino.net/mpi_functions/MPI_Lookup_name.html</a>), too.
<br>
<p>Ray
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7379.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>Previous message:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<li><strong>In reply to:</strong> <a href="7377.php">Heitor Florido: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/12/7379.php">Ralph Castain: "Re: [OMPI users] OpenMPI on a LAN (Raymond Wan)"</a>
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
