<?
$subject_val = "[OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in 'hwlock&quot; ?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 31 13:28:32 2013" -->
<!-- isoreceived="20131031172832" -->
<!-- sent="Thu, 31 Oct 2013 18:28:27 +0100" -->
<!-- isosent="20131031172827" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in 'hwlock&amp;quot; ?" -->
<!-- id="5272933B.6020004_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in 'hwlock&quot; ?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-31 13:28:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22888.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>using 1.7.x (1.7.2 and 1.7.3 tested), we get SIGSEGV from somewhere in-deepth of 
<br>
'hwlock' library - see the attached screenshot.
<br>
<p>Because the error is strongly aligned to just one single node, which in turn is 
<br>
kinda special one (see output of 'lstopo -'), it smells like an error in the 
<br>
'hwlock' library.
<br>
<p>Is there a way to disable hwlock or to debug it in somehow way?
<br>
(besides to build a debug version of hwlock and OpenMPI)
<br>
<p>Best
<br>
<p>Paul
<br>
<p><p><p><p><p><p><p><pre>
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
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22887/lstopo_linuxitvc00.txt">lstopo_linuxitvc00.txt</a>
</ul>
<!-- attachment="lstopo_linuxitvc00.txt" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-22887/opal_hwlock_SIGSEGV.png" alt="opal_hwlock_SIGSEGV.png">
<!-- attachment="opal_hwlock_SIGSEGV.png" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22887/lstopo_linuxitvc00.xml">lstopo_linuxitvc00.xml</a>
</ul>
<!-- attachment="lstopo_linuxitvc00.xml" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22887/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22888.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="22886.php">Ralph Castain: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/11/22894.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV in opal_hwlock152_hwlock_bitmap_or.A // Bug in	'hwlock&quot; ?"</a>
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
