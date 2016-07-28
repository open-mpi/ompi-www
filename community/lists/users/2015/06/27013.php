<?
$subject_val = "[OMPI users] Bug report: Message queues debugging not working";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 10:53:15 2015" -->
<!-- isoreceived="20150601145315" -->
<!-- sent="Mon, 01 Jun 2015 15:53:26 +0100" -->
<!-- isosent="20150601145326" -->
<!-- name="Alejandro" -->
<!-- email="alejandro_at_[hidden]" -->
<!-- subject="[OMPI users] Bug report: Message queues debugging not working" -->
<!-- id="556C71E6.9000203_at_allinea.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] Bug report: Message queues debugging not working<br>
<strong>From:</strong> Alejandro (<em>alejandro_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 10:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27014.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27012.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users/developers,
<br>
<p>We are experiencing a problem when debugging the message queues:
<br>
<p>Summary: Message queues debugging broken on recent OpenMPI versions.
<br>
<p>Affected OpenMPI versions: 1.8.3, 1.8.4 and 1.8.5 (at least).
<br>
The debug message queue library is not returning any pending messages. 
<br>
This does not happen with previous versions of OpenMPI, as some 
<br>
processes are blocked in MPI_Receive.
<br>
<p>The function resolution (which message queue we want) is selected by an 
<br>
enum 'mqs_op_class':
<br>
Values are: mqs_pending_sends, mqs_pending_receives and 
<br>
mqs_unexpected_messages.
<br>
<p>When setting the corresponding queue iterator (with 
<br>
&quot;mqs_setup_operation_iterator&quot;), the return value is zero (==mqs_ok), 
<br>
but when we try to read the list (with &quot;mqs_next_operation&quot;), the return 
<br>
value is always non-zero, so no pending messages are found.
<br>
<p><p>Should I raise a bug report for this?
<br>
<p>Thank you,
<br>
<p>Alejandro Palencia
<br>
Allinea Software
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27013/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27014.php">Ralph Castain: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27012.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Building OpenMPI on Raspberry Pi 2"</a>
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
