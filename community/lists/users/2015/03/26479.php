<?
$subject_val = "[OMPI users] Questions regarding xpmem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 16 12:32:34 2015" -->
<!-- isoreceived="20150316163234" -->
<!-- sent="Mon, 16 Mar 2015 17:32:26 +0100" -->
<!-- isosent="20150316163226" -->
<!-- name="Tobias Kloeffel" -->
<!-- email="tobias.kloeffel_at_[hidden]" -->
<!-- subject="[OMPI users] Questions regarding xpmem" -->
<!-- id="5507059A.8030007_at_fau.de" -->
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
<strong>Subject:</strong> [OMPI users] Questions regarding xpmem<br>
<strong>From:</strong> Tobias Kloeffel (<em>tobias.kloeffel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-16 12:32:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26478.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>currently I am benchmarking the different single copy mechanisms 
<br>
knem/cma/xpmem on a Xeon E5 V3 machine.
<br>
I am using openmpi 1.8.4 with the CMA patch for vader.
<br>
<p>While it turns out that xpmem is the clear winner (reproducing Nathan 
<br>
Hjelm's results) I always ran into a problem at the mpi finalizing step. 
<br>
At this step, at least one process hangs, and can't be killed anymore. 
<br>
To get rid of the hanging process, the server has to be rebooted.
<br>
<p>The applications finish successfully.
<br>
<p>Unfortunately, I can't find any further development of the xpmem module. 
<br>
Is this bug known to anyone? What kernel versions do you use?
<br>
<p>Any help would be appreciated.
<br>
<p>Tested kernel versions:
<br>
3.11.25-desktop (openSUSE)
<br>
3.18.9 (vanilla)
<br>
3.19.1 (vanilla)
<br>
<p><pre>
-- 
M.Sc. Tobias Kl&#195;&#182;ffel
=======================================================
Interdisciplinary Center for Molecular Materials (ICMM)
and Computer-Chemistry-Center (CCC)
Department Chemie und Pharmazie
Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg
N&#195;&#164;gelsbachstr. 25
D-91052 Erlangen, Germany
Room: 2.307
Phone: +49 (0) 9131 / 85 - 20421
Fax: +49 (0) 9131 / 85 - 26565
=======================================================
Department of Materials Science and Engineering
Institute I: General Materials Properties
Friedrich-Alexander-Universit&#195;&#164;t Erlangen-N&#195;&#188;rnberg
  
Martensstr. 5, D-91058 Erlangen, Germany
Office 3.40
Phone: (+49) 9131 85 27 -486
<a href="http://www.gmp.ww.uni-erlangen.de">http://www.gmp.ww.uni-erlangen.de</a>
E-mail: tobias.kloeffel_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Previous message:</strong> <a href="26478.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
<li><strong>Reply:</strong> <a href="26480.php">Nathan Hjelm: "Re: [OMPI users] Questions regarding xpmem"</a>
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
