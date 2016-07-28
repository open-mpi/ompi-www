<?
$subject_val = "Re: [OMPI users] Problem in using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 18:27:13 2010" -->
<!-- isoreceived="20100312232713" -->
<!-- sent="Sat, 13 Mar 2010 00:27:07 +0100" -->
<!-- isosent="20100312232707" -->
<!-- name="Fabian H&#228;nsel" -->
<!-- email="fabtagon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem in using openmpi" -->
<!-- id="4B9ACDCB.6060409_at_gmx.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="f807a19d1003121232j58e147abte5ad52b53e4ca55b_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem in using openmpi<br>
<strong>From:</strong> Fabian H&#228;nsel (<em>fabtagon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 18:27:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hej vaibhav!
<br>
<p>Assuming you use the official Ubuntu packages:
<br>
<p><span class="quotelev1">&gt; mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
</span><br>
<span class="quotelev1">&gt; open shared object file: No such file or dir
</span><br>
<p>The library should exist under /usr/lib/libopen-pal.so.0 (which symlinks
<br>
to /usr/lib/libopen-pal.so.0.0.0 which symlinks to the real position
<br>
/usr/lib/openmpi/lib/libopen-pal.so.0.0.0).
<br>
<p>Is it there? If not, then you need to install the openMPI shared
<br>
libraries (the package is called libopenmpi1).
<br>
<p>Best regards
<br>
&nbsp;&nbsp;Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12342.php">Samuel K. Gutierrez: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>Previous message:</strong> <a href="12340.php">vaibhav dutt: "Re: [OMPI users] Problem in using openmpi"</a>
<li><strong>In reply to:</strong> <a href="12334.php">vaibhav dutt: "[OMPI users] Problem in using openmpi"</a>
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
