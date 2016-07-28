<?
$subject_val = "[OMPI users] Multiple runs interaction";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 12 07:05:03 2014" -->
<!-- isoreceived="20140812110503" -->
<!-- sent="Tue, 12 Aug 2014 11:05:01 +0000" -->
<!-- isosent="20140812110501" -->
<!-- name="Antonio Rago" -->
<!-- email="antonio.rago_at_[hidden]" -->
<!-- subject="[OMPI users] Multiple runs interaction" -->
<!-- id="65F54D04-A0D6-45A3-8858-90E1DB4E0478_at_plymouth.ac.uk" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] Multiple runs interaction<br>
<strong>From:</strong> Antonio Rago (<em>antonio.rago_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-12 07:05:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24987.php">Timur Ismagilov: "[OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24991.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Reply:</strong> <a href="24991.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple runs interaction"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear mailing list
<br>
I&#146;m running into trouble in the configuration of the small cluster I&#146;m managing.
<br>
I&#146;ve installed openmpi-1.8.1 with gcc 4.7 on a Centos 6.5 with infiniband support.
<br>
Compile and installation were all ok and i can compile and actually run parallel jobs, both directly or by submitting them with the queue manager (gridengine).
<br>
My problem is that when two different subsets of two job end on the same node, they will not spread equally and use all the cores of the node but instead they will run on a common subset of cores leaving some other totally empty.
<br>
For example two 4 core jobs on a 8 core node will result in only 4 core running on the node (all of them being oversubscribed) and the other 4 cores being empty.
<br>
Clearly there must be an error in the way I&#146;ve configured stuffs but i cannot find any hint on how to solve the problem.
<br>
I&#146;ve tried to do different map (map by core or by slot) but I&#146;ve never succeeded.
<br>
Could you give a me suggestion on this issue?
<br>
Regards
<br>
Antonio
<br>
<p>________________________________
<br>
[<a href="http://www.plymouth.ac.uk/images/email_footer.gif">http://www.plymouth.ac.uk/images/email_footer.gif</a>]&lt;<a href="http://www.plymouth.ac.uk/worldclass">http://www.plymouth.ac.uk/worldclass</a>&gt;
<br>
<p>This email and any files with it are confidential and intended solely for the use of the recipient to whom it is addressed. If you are not the intended recipient then copying, distribution or other use of the information contained is strictly prohibited and you should not rely on it. If you have received this email in error please let the sender know immediately and delete it from your system(s). Internet emails are not necessarily secure. While we take every care, Plymouth University accepts no responsibility for viruses and it is your responsibility to scan emails and their attachments. Plymouth University does not accept responsibility for any changes made after it was sent. Nothing in this email or its attachments constitutes an order for goods or services unless accompanied by an official order form.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24987.php">Timur Ismagilov: "[OMPI users] ORTE daemon has unexpectedly failed after launch"</a>
<li><strong>Previous message:</strong> <a href="24985.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24991.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple runs interaction"</a>
<li><strong>Reply:</strong> <a href="24991.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Multiple runs interaction"</a>
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
