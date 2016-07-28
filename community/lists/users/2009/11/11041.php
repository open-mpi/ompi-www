<?
$subject_val = "Re: [OMPI users] Checkpoint/Restart in OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 07:24:13 2009" -->
<!-- isoreceived="20091102122413" -->
<!-- sent="Mon, 2 Nov 2009 04:24:08 -0800 (PST)" -->
<!-- isosent="20091102122408" -->
<!-- name="Andreea m. \(Costea\)" -->
<!-- email="doodlie_snew_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Checkpoint/Restart in OpenMPI" -->
<!-- id="107392.23500.qm_at_web54306.mail.re2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4AEEBEA8.1040509_at_cesga.es" -->
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
<strong>Subject:</strong> Re: [OMPI users] Checkpoint/Restart in OpenMPI<br>
<strong>From:</strong> Andreea m. \(Costea\) (<em>doodlie_snew_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-02 07:24:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11040.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>In reply to:</strong> <a href="11040.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok...
<br>
Maybe someone can clear me :)
<br>
<p>I have BLCR sources in this directory :
<br>
/home/andreea/MPIrelated/BLCR/blcr-0.8.2
<br>
it's installation is in this directory:
<br>
/home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir
<br>
<p>OpenMPI:
<br>
sources: /home/andreea/MPIrelated/OpenMPI/SOURCES
<br>
installation: /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3
<br>
<p>I added to the variables (PATH, LD_LIBRARY_PATH) teh paths from the installation directories:
<br>
for PATH I added: /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/bin
<br>
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/bin
<br>
fro LD_LIBRARY_PATH: /home/andreea/MPIrelated/BLCR/blcr-0.8.2/builddir/lib
<br>
&#160; &#160; &#160; &#160; &#160; &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /home/andreea/MPIrelated/OpenMPI/openmpi_1.3.3/lib
<br>
<p>If I want to compile a c program, MPI based, I get errors of not finding the mpi.h (which is located in the OpenMPI/SOURCES/include directory). It can't also find the constants like: MPI_COMM_WORLD,MPI_INT, etc.
<br>
<p>Help, anyone?
<br>
Thanks,
<br>
Andreea
<br>
<p><p>--- On Mon, 11/2/09, Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt; wrote:
<br>
<p>From: Sergio D&#237;az &lt;sdiaz_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Monday, November 2, 2009, 1:12 PM
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
                  
                  
<br>
<p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p><p>_______________________________________________
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
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11041/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11041/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-11041/image002.jpg" alt="image002.jpg">
<!-- attachment="image002.jpg" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11040.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<li><strong>In reply to:</strong> <a href="11040.php">Sergio D&#237;az: "Re: [OMPI users] Checkpoint/Restart in OpenMPI for Sergio"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11042.php">Sergio Díaz: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
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
