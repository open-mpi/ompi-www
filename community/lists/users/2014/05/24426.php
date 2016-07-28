<?
$subject_val = "[OMPI users] Enable PMI build";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:31:23 2014" -->
<!-- isoreceived="20140516213123" -->
<!-- sent="Fri, 16 May 2014 17:31:18 -0400" -->
<!-- isosent="20140516213118" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] Enable PMI build" -->
<!-- id="824044AE-FC85-4BA7-ABEA-7380C8002C99_at_umich.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Enable PMI build<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Reply:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We are looking at enabling the use of OpenMPI on our Xeon Phis, 
<br>
<p>One comment, i'm not sure that most users will know that pmi means phi, 
<br>
&nbsp;&nbsp;--with-pmi(=DIR)        Build PMI support, optionally adding DIR to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;search path (default: no)
<br>
<p>how about:
<br>
&nbsp;&nbsp;--with-pmi(=DIR)        Build PMI support for the Xeon Phi/MIC, optionally adding DIR to the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;search path (default: no)
<br>
<p><p>Second, digging in my mpss install I am not finding pmi.h or anything like that that searching the mailing list shows. We recently found that Intel made a lot of changes to the MPSS stack and this Phi stuff is very infantile at the moment so minimal (decent) documentation,  does anyone know what current package provides PMI  for the Xeon Phi?
<br>
<p>Thanks!
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24426/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24425.php">John Cary: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
<li><strong>Reply:</strong> <a href="24428.php">Hjelm, Nathan T: "Re: [OMPI users] Enable PMI build"</a>
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
