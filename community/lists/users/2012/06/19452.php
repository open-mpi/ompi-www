<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  5 10:41:38 2012" -->
<!-- isoreceived="20120605144138" -->
<!-- sent="Tue, 5 Jun 2012 08:41:34 -0600" -->
<!-- isosent="20120605144134" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="CAPkgxcy1nvxv7dsUSt1XyW24KjhY=2wg0dSuLAGJgXK2Qd3Gtw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4FC93452.5020309_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] seg fault with intel compiler<br>
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-05 10:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Previous message:</strong> <a href="19451.php">TAY wee-beng: "[OMPI users] MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
First of all, thanks to everyone who took the trouble to offer suggests.
<br>
<p>The solution seems to be to upgrade the Intel compilers. However, I'm not
<br>
the cluster admin, so other crucial changes may have been implemented. For
<br>
example, I know that ssh was reconfigured over the weekend (but that
<br>
shouldn't impact OMPI in a Torque environment).
<br>
<p>In any case, I went from version 12.1.0.233 (Build 20110811) to 12.1.4.319
<br>
(Build 20120410), and rebuilt Open MPI 1.6. After that, all tests worked,
<br>
for any number of tasks.
<br>
<p><pre>
-- 
Edmund Sumbar
University of Alberta
+1 780 492 9360
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19452/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19453.php">TERRY DONTJE: "Re: [OMPI users] problem with sctp.h on Solaris"</a>
<li><strong>Previous message:</strong> <a href="19451.php">TAY wee-beng: "[OMPI users] MPI and gprof"</a>
<li><strong>In reply to:</strong> <a href="19434.php">Gus Correa: "Re: [OMPI users] seg fault with intel compiler"</a>
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
