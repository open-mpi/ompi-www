<?
$subject_val = "Re: [OMPI users] How to join intercommunicators?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  4 18:00:32 2012" -->
<!-- isoreceived="20120204230032" -->
<!-- sent="Sat, 4 Feb 2012 16:00:23 -0700" -->
<!-- isosent="20120204230023" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to join intercommunicators?" -->
<!-- id="74F35F38-4840-4691-A14F-0E4FD01514AC_at_openmpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1328303520.89255.YahooMailClassic_at_web160703.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to join intercommunicators?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-04 18:00:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="18395.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>In reply to:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Look at MPI_Comm_join
<br>
<p>On Feb 3, 2012, at 2:12 PM, Mateus Augusto wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have a process that creates other processes at different times (using MPI_Comm_spawn). After, the initial process (creator of other processes) must receive mesagens of created processes. However, there are one intercommunicator for each created process. 
</span><br>
<span class="quotelev1">&gt; The question is: how to unite all the intercommunicator in a single  communicator and receive the mesagens from this single comunicator?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18397.php">Rashid, Z. (Zahid): "[OMPI users] Open MPI-1.5.4 --with-mpi-f90-size=large Compilation Error"</a>
<li><strong>Previous message:</strong> <a href="18395.php">Ralph Castain: "Re: [OMPI users] O-MPI Support for heterogeneous (Windows / Linux) clusters"</a>
<li><strong>In reply to:</strong> <a href="18388.php">Mateus Augusto: "[OMPI users] How to join intercommunicators?"</a>
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
