<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 00:35:50 2009" -->
<!-- isoreceived="20091102053550" -->
<!-- sent="Sun, 1 Nov 2009 21:35:46 -0800 (PST)" -->
<!-- isosent="20091102053546" -->
<!-- name="Andreea m. \(Costea\)" -->
<!-- email="doodlie_snew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio" -->
<!-- id="459219.52748.qm_at_web54304.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="545559.35975.qm_at_web54304.mail.re2.yahoo.com" -->
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
<strong>From:</strong> Andreea m. \(Costea\) (<em>doodlie_snew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 00:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11032.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11030.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11030.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>Reply:</strong> <a href="11034.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One more thing:
<br>
when you installed BLCR did you install it in the same directory with the sources or in a different one? And when you point to the blcr directory and the blcr library directory in openmpi configure command, do you point to the installation or to the sources directory?
<br>
<p>Regards,
<br>
Andreea
<br>
<p>--- On Mon, 11/2/09, Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]&gt; wrote:
<br>
<p>From: Andreea m. (Costea) &lt;doodlie_snew_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, November 2, 2009, 7:02 AM
<br>
<p>Hi again.
<br>
<p>I have installed BLCR, passed all the tests, and now I tried to install OpenMPI. This is the configuration call:
<br>
--------------------------------------------------------------------------------------------------
<br>
./configure --prefix=/home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/ --enable-ft-thread --with-ft=cr --enable-mpi-threads --with-blcr=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/ --with-blcr-libdir=/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
<br>
--------------------------------------------------------------------------------------------------
<br>
<p>In the output I got, among others, this warnings:
<br>
<p>configure: WARNING: no usable BFD found; using nm-output file for addr./symbol mapping
<br>
configure: WARNING: Unrecognized options: --enable-ft-thread, --with-ft, --enable-mpi-threads, --with-blcr,
 --with-blcr-libdir, --enable-ltdl-convenience
<br>
configure: WARNING: Unrecognized options: --enable-ft-thread, --with-ft, --enable-mpi-threads, --with-blcr, --with-blcr-libdir, --enable-ltdl-convenience
<br>
<p>Any ideas?
<br>
Thanks,
<br>
Andreea
<br>
--- On Fri, 10/30/09, Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt; wrote:
<br>
<p>From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Friday, October 30, 2009, 11:28 AM
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


<br>
<p><p><p><p><p><p><p><p><p><p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>-----Inline Attachment Follows-----
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


      
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-11031/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="../../att-11031/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11032.php">basant.lakhotiya_at_[hidden]: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11030.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11030.php">Andreea m. \(Costea\): "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11034.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>Reply:</strong> <a href="11034.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
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
