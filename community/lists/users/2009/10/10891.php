<?
$subject_val = "[OMPI users] Re :  Yet another stdin problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  7 11:31:18 2009" -->
<!-- isoreceived="20091007153118" -->
<!-- sent="Wed, 7 Oct 2009 15:31:13 +0000 (GMT)" -->
<!-- isosent="20091007153113" -->
<!-- name="Kilou Zelabia" -->
<!-- email="kilou_zellabia_at_[hidden]" -->
<!-- subject="[OMPI users] Re :  Yet another stdin problem" -->
<!-- id="380076.70370.qm_at_web26504.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="6eda6fa0910070806p133c1b9bm2761c350fef1e934_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Re :  Yet another stdin problem<br>
<strong>From:</strong> Kilou Zelabia (<em>kilou_zellabia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-07 11:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok thanks!
That's a solution but i was wondering if there could exist a more elegant one ? means without any modification at the source level




________________________________
De : Roman Cheplyaka &lt;roman.cheplyaka_at_[hidden]&gt;
&#192; : Open MPI Users &lt;users_at_[hidden]&gt;
Envoy&#233; le : Mer 7 Octobre 2009, 17 h 06 min 55 s
Objet : Re: [OMPI users] Yet another stdin problem

Why not modify your program to read inputs.txt instead of stdin?

2009/10/7 Kilou Zelabia &lt;kilou_zellabia_at_[hidden]&gt;:
&gt; Dear all,
&gt;
&gt; I'm trying to lunch an MPI program using the command
&gt;
&gt; mpirun -np 64 my_exe &lt; inputs.txt
&gt;
&gt; inputs.txt actually contains the entries that  are read by all processes
&gt; however it seems that openmpi redirect the stdin only to the processes with
&gt; rank 0. with leads to a segmentation fault on the other processes.
&gt; The option &quot;-stdin rank&quot; doesn't help since i need all processes read the
&gt; inputs.txt file.
&gt;
&gt; I'v tested with openmpi 1.3 and 1.2 whitout success.
&gt;
&gt; Thanks in advance for you help.
&gt;
&gt; Zellabia. S
&gt;
&gt;
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;



-- 
Roman I. Cheplyaka

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10891/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Previous message:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<li><strong>In reply to:</strong> <a href="10890.php">Roman Cheplyaka: "Re: [OMPI users] Yet another stdin problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
<li><strong>Reply:</strong> <a href="10892.php">Roman Cheplyaka: "Re: [OMPI users] Re : Yet another stdin problem"</a>
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
