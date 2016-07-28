<?
$subject_val = "[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 30 06:18:19 2012" -->
<!-- isoreceived="20120730101819" -->
<!-- sent="Mon, 30 Jul 2012 10:18:13 +0000" -->
<!-- isosent="20120730101813" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="[OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC9030E682C_at_rz-mbx2.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1<br>
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-30 06:18:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>&nbsp;
<br>
<p>3 months ago I opened a ticket about an extra local data copy being made in
<br>
the pairwise alltoallv implementation in the &quot;tuned&quot; module that can hurt
<br>
performance in some cases:
<br>
<p>&nbsp;
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/3079">https://svn.open-mpi.org/trac/ompi/ticket/3079</a>
<br>
<p>&nbsp;
<br>
<p>As far as I can see the milestone was set to Open MPI 1.6.1 and although it
<br>
was quite trivial to fix (and I have submitted the appropriate patch with
<br>
the ticket), the defect is still present in the latest revision of the 1.6
<br>
branch and also in trunk. Given that in most cluster cases OMPI ends up
<br>
using &quot;tuned&quot; and that 1.6.1rc1 makes the pairwise algorithm the default,
<br>
shouldn't this defect have been fixed by now?
<br>
<p>&nbsp;
<br>
<p>Kind regards,
<br>
<p>Hristo Iliev
<br>
<p><pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241 80 24367 -- Fax/UMS: +49 241 80 624367
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11338/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11338/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11339.php">Ralph Castain: "Re: [OMPI devel] The hostfile option"</a>
<li><strong>Previous message:</strong> <a href="11337.php">George Bosilca: "Re: [OMPI devel] The hostfile option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/08/11358.php">Jeff Squyres: "Re: [OMPI devel] Defect from ticket #3079 still present in 1.6.1rc1"</a>
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
