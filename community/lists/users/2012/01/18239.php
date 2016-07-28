<?
$subject_val = "[OMPI users] rankfiles on really big nodes broken?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 14:43:58 2012" -->
<!-- isoreceived="20120120194358" -->
<!-- sent="Fri, 20 Jan 2012 20:43:53 +0100" -->
<!-- isosent="20120120194353" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] rankfiles on really big nodes broken?" -->
<!-- id="4F19C3F9.9050606_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] rankfiles on really big nodes broken?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 14:43:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Reply:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Open MPI developer!
<br>
<p>Now, we have a really nice toy: 2 Tb RAM, 16 sockets, 128 cores.
<br>
(4x smaller Bull S6010 coupled by BCS chips to a single image machine)
<br>
<p>On a such big box, process pinning is vital.
<br>
<p>So we tried to use the Open MPI capabilities to pin te processes. But it 
<br>
seem that the rankfile infrastructure does not work properly: we always 
<br>
get &quot;Error: Invalid argument&quot; message on the 128-core node, also if the 
<br>
rankfile was OK.
<br>
On a smaller node (up to 32 cores/ 64 threads) the very same rankfile 
<br>
(with changed node name of course) works well.
<br>
<p>I believe, this computer dimension is a bit too big for the pinning 
<br>
infrasructure now. A bug?
<br>
<p>Best wishes,
<br>
<p>Paul Kapinos
<br>
<p>P.S. see the attached .tgz for some logzz
<br>
<p>------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Rankfiles
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rankfiles provide a means for specifying detailed information 
<br>
about how process ranks should  be  mapped  to nodes and how they should 
<br>
be bound.  Consider the following:
<br>
....
<br>
------------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open RTE: 1.5.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE SVN revision: r24532
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Open RTE release date: Mar 16, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL: 1.5.3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL SVN revision: r24532
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL release date: Mar 16, 2011
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ident string: 1.5.3
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>application/x-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18239/rankfiles128.tgz">rankfiles128.tgz</a>
</ul>
<!-- attachment="rankfiles128.tgz" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18239/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Previous message:</strong> <a href="18238.php">Ralph Castain: "Re: [OMPI users] OpenMPI failed when running across two mac machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
<li><strong>Reply:</strong> <a href="18240.php">Ralph Castain: "Re: [OMPI users] rankfiles on really big nodes broken?"</a>
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
