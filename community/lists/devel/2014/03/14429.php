<?
$subject_val = "[OMPI devel] 1.7.5: OpenShmem symbols are not weak";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 31 04:14:21 2014" -->
<!-- isoreceived="20140331081421" -->
<!-- sent="Mon, 31 Mar 2014 10:14:19 +0200" -->
<!-- isosent="20140331081419" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.5: OpenShmem symbols are not weak" -->
<!-- id="533923DB.4060305_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.5: OpenShmem symbols are not weak<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-31 04:14:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14428.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>while working on support for OpenShmem in our next Score-P measurement 
<br>
[1] release, we noticed that the liboshmem.so library from Open MPI does 
<br>
not mark the symbols as weak as one would expect. Here is an output of 
<br>
liboshmem.so on my 64bit ubuntu system. Lets try shmem_init:
<br>
<p>$ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_init$'
<br>
&nbsp;&nbsp;&nbsp;1098: 000000000001dac2   141 FUNC    GLOBAL DEFAULT   11 shmem_init
<br>
&nbsp;&nbsp;&nbsp;1228: 000000000001c73a   236 FUNC    GLOBAL DEFAULT   11 
<br>
oshmem_shmem_init
<br>
<p>Oh, no pshmem_init. Maybe missing, but its legacy anyway. Lets try 
<br>
shmem_broadcast:
<br>
<p>$ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_broadcast$'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;555: 000000000002769a    92 FUNC    GLOBAL DEFAULT   11 pshmem_broadcast
<br>
&nbsp;&nbsp;&nbsp;&nbsp;577: 000000000001ed82    92 FUNC    GLOBAL DEFAULT   11 shmem_broadcast
<br>
<p>Ok, we see the pshmem_broadcast and the shmem_broadcast symbol, but the 
<br>
latter is not WEAK. Btw, this function is not in the standard. Thus 
<br>
(finally) take a symbol from the standard:
<br>
<p>$ readelf -W --dyn-syms  liboshmem.so.1.0.0 |grep 'shmem_barrier$'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;511: 000000000001d47e    24 FUNC    GLOBAL DEFAULT   11 
<br>
oshmem_shmem_barrier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;525: 000000000001f250   217 FUNC    GLOBAL DEFAULT   11 shmem_barrier
<br>
&nbsp;&nbsp;&nbsp;1099: 0000000000027b68   217 FUNC    GLOBAL DEFAULT   11 pshmem_barrier
<br>
<p>Again, no WEAK for shmem_barrier.
<br>
<p>For reference, the output for MPI_Init:
<br>
<p>$ readelf -W --dyn-syms  libmpi.so.1.4.0 |grep 'MPI_Init$'
<br>
&nbsp;&nbsp;&nbsp;1383: 00000000000841ff   484 FUNC    WEAK   DEFAULT   11 MPI_Init
<br>
&nbsp;&nbsp;&nbsp;2051: 00000000000841ff   484 FUNC    GLOBAL DEFAULT   11 PMPI_Init
<br>
<p>HTH,
<br>
Bert
<br>
<p>[1] <a href="http://www.vi-hps.org/projects/score-p">http://www.vi-hps.org/projects/score-p</a>
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#195;&#164;t Dresden
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_[hidden]

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14429/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Previous message:</strong> <a href="14428.php">tmishima_at_[hidden]: "Re: [OMPI devel] system call failed during shared	memory	initialization	with openmpi-1.8a1r31254"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
<li><strong>Reply:</strong> <a href="14430.php">Ralph Castain: "Re: [OMPI devel] 1.7.5: OpenShmem symbols are not weak"</a>
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
