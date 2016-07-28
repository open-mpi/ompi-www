<?
$subject_val = "[OMPI devel] MTT parameters vor really big nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 31 16:22:32 2012" -->
<!-- isoreceived="20121031202232" -->
<!-- sent="Wed, 31 Oct 2012 21:22:27 +0100" -->
<!-- isosent="20121031202227" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] MTT parameters vor really big nodes?" -->
<!-- id="50918883.9070705_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI devel] MTT parameters vor really big nodes?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-31 16:22:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Yevgeny, hello all,
<br>
<p>Yevgeny, first of all thanks for explaining what the MTT parameters do and why 
<br>
there are two of them! I mean this post:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2012/08/11417.php">http://www.open-mpi.org/community/lists/devel/2012/08/11417.php</a>
<br>
<p>Well, the official recommendation is &quot;twice the RAM amount&quot;.
<br>
<p>And here we are: we have 2 nodes with 2 TB (that with a 'tera') RAM and a couple 
<br>
of nodes with 1TB, each with 4x Mellanox IB adapters. Thus we should have raised 
<br>
the MTT parameters in order to make up to 4 TB memory registrable.
<br>
<p>I've tried to raise the MTT parameters in multiple combinations, but the maximum 
<br>
amount of registrable memory I was able to get was  one TB (23 / 5). All tries 
<br>
to get more (24/5, 23/6 for 2 TB) lead to not responding InfiniBand HCAs.
<br>
<p>Is there any another limits in the kernel have to be adjusted in order to be 
<br>
able to register that a bunch of memory?
<br>
<p>Best,
<br>
<p>Paul Kapinos
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11722/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11723.php">David Shrader: "[OMPI devel] running top-level autogen.sh breaks romio in 1.6.3 tarball"</a>
<li><strong>Previous message:</strong> <a href="11721.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Compile-time MPI_Datatype checking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/11/11741.php">Yevgeny Kliteynik: "Re: [OMPI devel] MTT parameters vor really big nodes?"</a>
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
