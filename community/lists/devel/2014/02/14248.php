<?
$subject_val = "[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 12:32:12 2014" -->
<!-- isoreceived="20140227173212" -->
<!-- sent="Thu, 27 Feb 2014 18:32:10 +0100" -->
<!-- isosent="20140227173210" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?" -->
<!-- id="530F769A.30307_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 12:32:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Previous message:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Reply:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
<p><p>Please take a look at the attached 'program'.
<br>
<p>In this program, we try to catch signals send from outside, and &quot;handle&quot; them. 
<br>
In case of different signals different output has to be produced.
<br>
<p>When you start this file directly, or using 'mpiexec' from Intel MPI, and then 
<br>
abort it by Ctrl-C, the output &quot;SIGINT  received&quot; is written to file and to StdOut.
<br>
<p>When you start this file using Open MPI's 'mpiexec', the output is written to 
<br>
file, but *not* to StdOutput - 'mpiexec' seem to nick it.
<br>
<p>Is that behaviour intentionally? (it is quite uncomfortable, huh)
<br>
<p>Best
<br>
<p>Paul Kapinos
<br>
<p>P.S. Tested versions: 1.6.5, 1.7.4
<br>
<p><p><p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-python attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14248/testoutput.py">testoutput.py</a>
</ul>
<!-- attachment="testoutput.py" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14248/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Previous message:</strong> <a href="14247.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r30860 - in	trunk/ompi/mca: btl/usnic rte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
<li><strong>Reply:</strong> <a href="14249.php">Ralph Castain: "Re: [OMPI devel] Open MPI's 'mpiexec' trash output of program being aborted?"</a>
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
