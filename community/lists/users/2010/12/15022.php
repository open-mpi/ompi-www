<?
$subject_val = "[OMPI users] Interaction with boost::asio";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  7 08:06:41 2010" -->
<!-- isoreceived="20101207130641" -->
<!-- sent="Tue, 7 Dec 2010 14:06:15 +0100" -->
<!-- isosent="20101207130615" -->
<!-- name="Hannes Brandst&#228;tter-M&#252;ller" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="[OMPI users] Interaction with boost::asio" -->
<!-- id="AANLkTi=ibuGkUv02M+aSwptXa-_yx2BRtCzD6FjTOCW7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Interaction with boost::asio<br>
<strong>From:</strong> Hannes Brandst&#228;tter-M&#252;ller (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-07 08:06:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
<li><strong>Reply:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
<p>I am using OpenMPI in combination with the boost libraries (especially
<br>
boost::asio) and came across a weird interaction. When I use asio to send a
<br>
message via TCP, some messages do not arrive at the server.
<br>
<p>The effect is exhibited when I send a message from the tcp client to the
<br>
server after calling MPI::Init();
<br>
If I remove this line, it works as intended.
<br>
<p>Is this interaction known? If so, is there a workaround or something I can
<br>
do to use this?
<br>
<p>Thanks,
<br>
Hannes
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15023.php">Grzegorz Maj: "Re: [OMPI users] Segmentation fault in mca_pml_ob1.so"</a>
<li><strong>Previous message:</strong> <a href="15021.php">Ralph Castain: "Re: [OMPI users] glut display 'occasionally' opens"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
<li><strong>Reply:</strong> <a href="15025.php">Ralph Castain: "Re: [OMPI users] Interaction with boost::asio"</a>
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
