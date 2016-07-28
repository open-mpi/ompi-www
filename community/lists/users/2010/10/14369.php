<?
$subject_val = "Re: [OMPI users] STDIN";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct  3 17:48:49 2010" -->
<!-- isoreceived="20101003214849" -->
<!-- sent="Sun, 3 Oct 2010 23:48:31 +0200" -->
<!-- isosent="20101003214831" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] STDIN" -->
<!-- id="B26280BC-D904-47AB-A39C-A7553AF0658E_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTini7z6nnP024WxDTjc3O=nP1kJ-yEWL9VpxHR4U_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] STDIN<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-03 17:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14370.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14368.php">Andrei Fokau: "[OMPI users] STDIN"</a>
<li><strong>In reply to:</strong> <a href="14368.php">Andrei Fokau: "[OMPI users] STDIN"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 03.10.2010 um 18:25 schrieb Andrei Fokau:
<br>
<p><span class="quotelev1">&gt; We have a a program which is normally (running w/o MPI) controlled by Ctrl+C and then a number of options. Is it possible to set STDIN for a command executed via mpirun? The following page describes parameter -stdin, but it seems to be not supported by OMPI's mpirun.
</span><br>
<span class="quotelev1">&gt; <a href="http://w3.ualg.pt/~dubuf/calhau.txt">http://w3.ualg.pt/~dubuf/calhau.txt</a>
</span><br>
<p>did you try just to redirect it with &quot;&lt;&quot;? Only the first process will get the stdin though. Even Open MPI has an option -stdin, but it can only set the number of the rank whihc will get the input file, not the name of the input file (maybe the web page you mention describes MPICH(1)).
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Is there a solution for our problem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Andrei
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
<li><strong>Next message:</strong> <a href="14370.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Previous message:</strong> <a href="14368.php">Andrei Fokau: "[OMPI users] STDIN"</a>
<li><strong>In reply to:</strong> <a href="14368.php">Andrei Fokau: "[OMPI users] STDIN"</a>
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
