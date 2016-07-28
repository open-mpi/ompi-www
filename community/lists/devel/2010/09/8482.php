<?
$subject_val = "[OMPI devel] How to add a schedule algorithm to the pml";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 14 21:56:52 2010" -->
<!-- isoreceived="20100915015652" -->
<!-- sent="Wed, 15 Sep 2010 09:56:48 +0800" -->
<!-- isosent="20100915015648" -->
<!-- name="&#213;&#197;&#190;&#167;" -->
<!-- email="iam.chilli_at_[hidden]" -->
<!-- subject="[OMPI devel] How to add a schedule algorithm to the pml" -->
<!-- id="AANLkTi=FmDdHsNpTTXLqM8vdg3D4s7st5tnoA2rP32e+_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimFb_QhjbfjqLUOS3FkoCKEF9H30qToTGaQ_g=N_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] How to add a schedule algorithm to the pml<br>
<strong>From:</strong> &#213;&#197;&#190;&#167; (<em>iam.chilli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-14 21:56:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8483.php">Lisandro Dalcin: "[OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Previous message:</strong> <a href="8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
I tried to add a schedule algorithm to the pml component ,ob1 etc. Poorly I
<br>
can only find a  paper named  &quot;Open MPI: A Flexible High Performance MPI&quot;
<br>
and some annotation in the source file.  From them , I know ob1 has
<br>
implemented   round-robin&amp; weighted distribution algorithm. But after
<br>
tracking the MPI_Send(),I cann't figure out
<br>
the location of these implement ,let alone to add a new schedule algorithm.
<br>
I have two questions :
<br>
1.The location of the schedule algorithm ?
<br>
2.There are five components :cm,crcpw ,csum ,ob1,V in the pml framework .
<br>
The function of these components?
<br>
Thank you !
<br>
Jing
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8482/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8483.php">Lisandro Dalcin: "[OMPI devel] Barrier() after Finalize() when a file handle is leaked."</a>
<li><strong>Previous message:</strong> <a href="8481.php">Matthias Jurenz: "Re: [OMPI devel] 1.5rc5: VT integration &quot;issue&quot; on Solaris/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
<li><strong>Reply:</strong> <a href="8519.php">Jeff Squyres: "Re: [OMPI devel] How to add a schedule algorithm to the pml"</a>
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
