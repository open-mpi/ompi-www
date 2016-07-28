<?
$subject_val = "Re: [OMPI devel] 1.6.1rc1 posted";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 18:24:21 2012" -->
<!-- isoreceived="20120803222421" -->
<!-- sent="Sat, 04 Aug 2012 00:24:15 +0200" -->
<!-- isosent="20120803222415" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.6.1rc1 posted" -->
<!-- id="501C4F8F.40902_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAD12141-16FC-4F01-822E-C84129AA03BB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.6.1rc1 posted<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 18:24:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11371.php">Gutierrez, Samuel K: "[OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff, All,
<br>
<p>testing our well-known example of the registered memory problem (see 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/02/18565.php">http://www.open-mpi.org/community/lists/users/2012/02/18565.php</a>) on 
<br>
freshly-installed 1.6.1rc2, found out that &quot;Fall back to send/receive semantics&quot; 
<br>
did not work always it. However the behaviour has changed:
<br>
<p>1.5.3. and older: MPI processes hang and block the IB interface(s) forever
<br>
<p>1.6.1rc2: a) MPI processes run through (if the chunk size is less than 8Gb) with 
<br>
or without a warning; or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;b) MPI processes die  (if the chunk size is more than 8Gb)
<br>
Note that the same program which die in (b) run fine over IPoIB (-mca btl 
<br>
^openib). However, the performance is very bad in this case... some 1100 sec. 
<br>
instead of about a minute.
<br>
<p>Reproducing: compile attached file and let it run on nodes with &gt;=24GB with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_num_mtt     : 20
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;log_mtts_per_seg: 3
<br>
(=32Gb, our default values):
<br>
$ mpiexec ....&lt;one proc per node&gt; .... a.out 1080000000 1080000001
<br>
<p>Well, we know about the need to raise the values of one of these parameters, but 
<br>
I wanted to let you to know that your workaround for the problem is still not 
<br>
100% perfect but only 99%.
<br>
<p><p>Best,
<br>
Paul Kapinos
<br>
<p><p>P.S: A note about the informative warning:
<br>
--------------------------------------------------------------------------
<br>
WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
allow registering part of your physical memory.
<br>
....
<br>
&nbsp;&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;&nbsp;Total memory:            98293 MiB
<br>
--------------------------------------------------------------------------
<br>
On node with 24 GB this warning did not came around, although the max. size of 
<br>
registered memory (32GB) is only 1.5x of RAM, but in
<br>
<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
<br>
at least the 2x RAM size is recommended.
<br>
<p>Should this warning not came out in all cases when registered memory &lt; 2x RAM?
<br>
<p><p><p><p>On 07/28/12 04:20, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; - A bunch of changes to eliminate hangs on OpenFabrics-based networks.
</span><br>
<span class="quotelev1">&gt;    Users with Mellanox hardware are ***STRONGLY ENCOURAGED*** to check
</span><br>
<span class="quotelev1">&gt;    their registered memory kernel module settings to ensure that the OS
</span><br>
<span class="quotelev1">&gt;    will allow registering more than 8GB of memory.  See this FAQ item
</span><br>
<span class="quotelev1">&gt;    for details:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem">http://www.open-mpi.org/faq/?category=openfabrics#ib-low-reg-mem</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - Fall back to send/receive semantics if registered memory is
</span><br>
<span class="quotelev1">&gt;      unavilable for RDMA.
</span><br>
<p><p><pre>
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
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/DistributeField_4_PK2.cpp">DistributeField_4_PK2.cpp</a>
</ul>
<!-- attachment="DistributeField_4_PK2.cpp" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/MPI-L_chunks_OK_keine_Warnung.txt">MPI-L_chunks_OK_keine_Warnung.txt</a>
</ul>
<!-- attachment="MPI-L_chunks_OK_keine_Warnung.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/MPI-L_piece_Abbruch.txt">MPI-L_piece_Abbruch.txt</a>
</ul>
<!-- attachment="MPI-L_piece_Abbruch.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/MPI-L_piece_IPoIB_OK.txt">MPI-L_piece_IPoIB_OK.txt</a>
</ul>
<!-- attachment="MPI-L_piece_IPoIB_OK.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/MPI-S_chunks_OK_gute_Warnung.txt">MPI-S_chunks_OK_gute_Warnung.txt</a>
</ul>
<!-- attachment="MPI-S_chunks_OK_gute_Warnung.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/MPI-S_piece_Abbruch.txt">MPI-S_piece_Abbruch.txt</a>
</ul>
<!-- attachment="MPI-S_piece_Abbruch.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/text.txt">text.txt</a>
</ul>
<!-- attachment="text.txt" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11370/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11371.php">Gutierrez, Samuel K: "[OMPI devel] Configure Error - Anyone Else Seeing This?"</a>
<li><strong>Previous message:</strong> <a href="11369.php">P. Martin: "Re: [OMPI devel] Repeated -Xclang flags (was: 1.6.1rc2)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11335.php">Jeff Squyres: "[OMPI devel] 1.6.1rc1 posted"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
<li><strong>Reply:</strong> <a href="11388.php">Jeff Squyres: "Re: [OMPI devel] 1.6.1rc1 posted"</a>
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
