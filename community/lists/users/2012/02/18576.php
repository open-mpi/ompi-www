<?
$subject_val = "[OMPI users] mpirun fails with no allocated resources";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 28 09:24:39 2012" -->
<!-- isoreceived="20120228142439" -->
<!-- sent="Tue, 28 Feb 2012 15:24:35 +0100 (CET)" -->
<!-- isosent="20120228142435" -->
<!-- name="Muhammad Wahaj Sethi" -->
<!-- email="hpcmseth_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun fails with no allocated resources" -->
<!-- id="23707914.115365.1330439075004.JavaMail.root_at_epsilon" -->
<!-- charset="utf-8" -->
<!-- inreplyto="6025811.115363.1330438807473.JavaMail.root_at_epsilon" -->
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
<strong>Subject:</strong> [OMPI users] mpirun fails with no allocated resources<br>
<strong>From:</strong> Muhammad Wahaj Sethi (<em>hpcmseth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-28 09:24:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18575.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am trying run following command using trunk version 1.7a1r25984.
<br>
<p>mpirun -np 2 -H localhost,localhost /bin/hostname
<br>
<p>It fails with following error message.
<br>
<p>--------------------------------------------------------------------------
<br>
There are no allocated resources for the application 
<br>
&nbsp;&nbsp;/bin/hostname
<br>
that match the requested mapping:
<br>
&nbsp;&nbsp;
<br>
<p>Verify that you have mapped the allocated resources properly using the 
<br>
--host or --hostfile specification.
<br>
--------------------------------------------------------------------------
<br>
<p>Every thing works fine if I use trunk version 1.5.5rc3r26063.
<br>
<p>Any ideas, how it can be fixed?
<br>
<p>regards,
<br>
Wahaj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Previous message:</strong> <a href="18575.php">Jeffrey Squyres: "Re: [OMPI users] Could not execute the executable &quot;/home/MET/hrm/bin/hostlist&quot;: Exec format error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
<li><strong>Reply:</strong> <a href="18577.php">Ralph Castain: "Re: [OMPI users] mpirun fails with no allocated resources"</a>
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
