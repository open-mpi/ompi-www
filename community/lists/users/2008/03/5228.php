<?
$subject_val = "Re: [OMPI users] Begginers question: why does this program";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 08:00:08 2008" -->
<!-- isoreceived="20080318120008" -->
<!-- sent="Tue, 18 Mar 2008 07:59:58 -0400" -->
<!-- isosent="20080318115958" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Begginers question: why does this program" -->
<!-- id="c84311bb0803180459v5446aabbu2708f151f526467c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Begginers question: why does this program" -->
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
<strong>Subject:</strong> Re: [OMPI users] Begginers question: why does this program<br>
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5227.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Reply:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Giovani:
<br>
<p>Which compiler are you using?
<br>
<p>Also, you didn't mention this, but does &quot;mpirun hostname&quot; give the
<br>
expected response?  I (also new) had a hang similar to what you are
<br>
describing due to ompi getting confused as to which of two network
<br>
interfaces to use - &quot;mpirun hostname&quot; would hang when started on
<br>
certain nodes.  This problem was resolved by telling ompi which
<br>
network interface to use (I forget the option needed to do this off
<br>
the top of my head, but it is in the FAQ somewhere).
<br>
<p>Good luck,
<br>
<p>Mark
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Previous message:</strong> <a href="5227.php">Andreas Sch&#228;fer: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
<li><strong>Reply:</strong> <a href="5229.php">Giovani Faccin: "Re: [OMPI users] Begginers question: why does this program"</a>
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
