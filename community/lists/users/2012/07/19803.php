<?
$subject_val = "[OMPI users] ft-enable-cr + vprotocol";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 22 03:09:46 2012" -->
<!-- isoreceived="20120722070946" -->
<!-- sent="Sun, 22 Jul 2012 09:09:41 +0200" -->
<!-- isosent="20120722070941" -->
<!-- name="tiago essex" -->
<!-- email="tiagoessex_at_[hidden]" -->
<!-- subject="[OMPI users] ft-enable-cr + vprotocol" -->
<!-- id="CAByYst9k_wf6fjBpZc5KmzjVDBUfjGGH+e30SO7CyrG8zn=JDw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] ft-enable-cr + vprotocol<br>
<strong>From:</strong> tiago essex (<em>tiagoessex_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-22 03:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19804.php">Geoffrey Irving: "[OMPI users] Efficient polling for both incoming messages and request completion"</a>
<li><strong>Previous message:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi,
<br>
<p>i was wondering if it's possible to simultaneous set the mca parameters for
<br>
both the coordinated checkpoint and the vprototocol at the same time like
<br>
this:
<br>
<p>mpirun -n 10 -am ft-enable-cr -mca vprotocol pessimist -mca crs blcr prog
<br>
<p>i have tried, but it seems that the vprotocol does not work with
<br>
ft-enable-cr. is there a way to overcome this?
<br>
<p><p>thank you.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19804.php">Geoffrey Irving: "[OMPI users] Efficient polling for both incoming messages and request completion"</a>
<li><strong>Previous message:</strong> <a href="19802.php">Priyesh Srivastava: "[OMPI users] issue with addresses"</a>
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
