<?
$subject_val = "Re: [OMPI users] Re : Yet another stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 12:14:00 2009" -->
<!-- isoreceived="20091007161400" -->
<!-- sent="Wed, 7 Oct 2009 10:13:42 -0600" -->
<!-- isosent="20091007161342" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re : Yet another stdin problem" -->
<!-- id="439947C5-2D24-4C25-8B36-8E8887C178A0_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6eda6fa0910070842p2103998an9fe391f99da191a2_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re : Yet another stdin problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 12:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10893.php">Ashley Pittman: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: an upcoming version will have the ability for you to specify all  
<br>
ranks to receive stdin...but that's a little ways off.
<br>
<p>For now, only rank=0 does.
<br>
<p>On Oct 7, 2009, at 9:42 AM, Roman Cheplyaka wrote:
<br>
<p><span class="quotelev1">&gt; As a slight modification, you can write a wrapper script
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; my_exe &lt; inputs.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and pass it to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2009/10/7 Kilou Zelabia &lt;kilou_zellabia_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; Ok thanks!
</span><br>
<span class="quotelev2">&gt;&gt; That's a solution but i was wondering if there could exist a more  
</span><br>
<span class="quotelev2">&gt;&gt; elegant
</span><br>
<span class="quotelev2">&gt;&gt; one ? means without any modification at the source level
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; De : Roman Cheplyaka &lt;roman.cheplyaka_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#192; : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Envoy&#233; le : Mer 7 Octobre 2009, 17 h 06 min 55 s
</span><br>
<span class="quotelev2">&gt;&gt; Objet : Re: [OMPI users] Yet another stdin problem
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Why not modify your program to read inputs.txt instead of stdin?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2009/10/7 Kilou Zelabia &lt;kilou_zellabia_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to lunch an MPI program using the command
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 64 my_exe &lt; inputs.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inputs.txt actually contains the entries that  are read by all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however it seems that openmpi redirect the stdin only to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rank 0. with leads to a segmentation fault on the other processes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The option &quot;-stdin rank&quot; doesn't help since i need all processes  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; read the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; inputs.txt file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'v tested with openmpi 1.3 and 1.2 whitout success.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance for you help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Zellabia. S
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Roman I. Cheplyaka
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Roman I. Cheplyaka
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
<li><strong>Next message:</strong> <a href="10895.php">Bill Johnstone: "Re: [OMPI users] Making RPM from source that respects --prefix"</a>
<li><strong>Previous message:</strong> <a href="10893.php">Ashley Pittman: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10897.php">Kilou Zelabia: "[OMPI users] Re :  Re : Yet another stdin problem"</a>
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
