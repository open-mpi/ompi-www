<?
$subject_val = "[OMPI users] knem support in ompi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  4 06:47:35 2013" -->
<!-- isoreceived="20130904104735" -->
<!-- sent="Wed, 4 Sep 2013 13:47:34 +0300" -->
<!-- isosent="20130904104734" -->
<!-- name="Alina Sklarevich" -->
<!-- email="alinas_at_[hidden]" -->
<!-- subject="[OMPI users] knem support in ompi" -->
<!-- id="CADGp0BRUXpxaCFwS0jvQTiSYzJgtMNKORFVmah8vD65pJcbmSw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] knem support in ompi<br>
<strong>From:</strong> Alina Sklarevich (<em>alinas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-04 06:47:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
<li><strong>Previous message:</strong> <a href="22602.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
<li><strong>Reply:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am building ompi v1.6 with knem support and I see that when knem is
<br>
enabed from the command line
<br>
it is used for all message sizes in SM btl. There is no threshold for when
<br>
to start using knem - starting
<br>
which message size.
<br>
This makes the performance of small messages worse since it also uses knem.
<br>
Maybe a certain &quot;knem threshold&quot; should be added to specify when to use SM
<br>
btl's send and when to start using knem.
<br>
<p>What do you think?
<br>
<p>Alina.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22603/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
<li><strong>Previous message:</strong> <a href="22602.php">Nathan Hjelm: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
<li><strong>Reply:</strong> <a href="22604.php">George Bosilca: "Re: [OMPI users] knem support in ompi"</a>
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
