<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 14 04:24:44 2005" -->
<!-- isoreceived="20051014092444" -->
<!-- sent="Mon, 10 Oct 2005 11:21:47 +0200" -->
<!-- isosent="20051010092147" -->
<!-- name="Joachim Worringen" -->
<!-- email="joachim_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] [Beowulf] MPI ABI" -->
<!-- id="1129282007.0000_at_hypermail.dummy" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="434A2D30.40706_at_fft.be" -->
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
<strong>From:</strong> Joachim Worringen (<em>joachim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-10 04:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>In reply to:</strong> <a href="0166.php">Toon Knapen: "[O-MPI users] MPI ABI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Toon Knapen wrote:
<br>
<span class="quotelev1">&gt; Thus AFAICT if my app uses the fortran interface of MPI I can link my
</span><br>
<span class="quotelev1">&gt; app with a dynamic library (say libmpi.so) which I can make point to
</span><br>
<span class="quotelev1">&gt; either e.g. an MPICH implementation or POE. right?
</span><br>
<p>Wrong - i.e., the value of MPI_COMM_WORLD is not defined in Fortran, either. 
<br>
This won't work if one MPI implementation sets MPI_COMM_WORLD to 35 and another 
<br>
expects 626.
<br>
<p>Of course, you are right for opaque datatypes like MPI_Group, but this is not 
<br>
sufficient for an ABI.
<br>
<p>&nbsp;&nbsp;Joachim
<br>
<p><pre>
-- 
Joachim Worringen - NEC C&amp;C research lab St.Augustin
fon +49-2241-9252.20 - fax .99 - <a href="http://www.ccrl-nece.de">http://www.ccrl-nece.de</a>
_______________________________________________
Beowulf mailing list, Beowulf_at_[hidden]
To change your subscription (digest mode or unsubscribe) visit <a href="http://www.beowulf.org/mailman/listinfo/beowulf">http://www.beowulf.org/mailman/listinfo/beowulf</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0198.php">Jeff Squyres: "Re: [O-MPI users] Building 1.0rc3 on Mac OSX Tiger with macosx-pkg/buildpackage.sh fails on Apple dual G5 tower"</a>
<li><strong>Previous message:</strong> <a href="0196.php">Allan Menezes: "[O-MPI users] Hpl Bench mark and Openmpi rc3"</a>
<li><strong>In reply to:</strong> <a href="0166.php">Toon Knapen: "[O-MPI users] MPI ABI"</a>
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
