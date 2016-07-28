<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 27 09:11:10 2007" -->
<!-- isoreceived="20070427131110" -->
<!-- sent="Fri, 27 Apr 2007 09:11:06 -0400" -->
<!-- isosent="20070427131106" -->
<!-- name="Daniel Gruner" -->
<!-- email="dgruner_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile WRFV2.2 with OpenMPI" -->
<!-- id="20070427091106.A10001_at_tequila.chem.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D76847D9-19E0-4E49-9564-2A615FE303A3_at_cisco.com" -->
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
<strong>From:</strong> Daniel Gruner (<em>dgruner_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-27 09:11:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;From Jiming's error messages, it seems that he is using 1.1 libraries
</span><br>
and header files, while supposedly compiling for ompi 1.2, 
<br>
therefore causing undefined stuff.  Am I wrong in this assessment?
<br>
<p>Daniel
<br>
<p><p>On Fri, Apr 27, 2007 at 08:03:34AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; This is quite odd; we have tested OMPI 1.1.x with the intel compilers  
</span><br>
<span class="quotelev1">&gt; quite a bit.  In particular, it seems to be complaining about  
</span><br>
<span class="quotelev1">&gt; MPI_Fint and MPI_Comm, but these two types should have been  
</span><br>
<span class="quotelev1">&gt; typedef'ed earlier in mpi.h.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you send along the information listed on the &quot;Getting Help&quot; page  
</span><br>
<span class="quotelev1">&gt; on the web site, and also include your mpi.h file?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 26, 2007, at 5:28 PM, Jiming Jin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Dear Users:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  I have been trying to use the intel ifort and icc compilers to  
</span><br>
<span class="quotelev2">&gt; &gt; compile an atmospheric model called the Weather Research &amp;  
</span><br>
<span class="quotelev2">&gt; &gt; Forecasting model (WRFV2.2) on a Linux Cluster (x86_64) using Open- 
</span><br>
<span class="quotelev2">&gt; &gt; MPI v1.2 that were also compiled with INTEL ICC.   However, I got a  
</span><br>
<span class="quotelev2">&gt; &gt; lot of error messages as follows when compiling WRF.
</span><br>
<span class="quotelev2">&gt; &gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(788):  
</span><br>
<span class="quotelev2">&gt; &gt; error: expected an identifier
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI_DECLSPEC  MPI_Fint MPI_Comm_c2f(MPI_Comm comm);
</span><br>
<span class="quotelev2">&gt; &gt;                           ^
</span><br>
<span class="quotelev2">&gt; &gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(802):  
</span><br>
<span class="quotelev2">&gt; &gt; error: &quot;MPI_Comm&quot; has already been declared in the current scope
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI_DECLSPEC  MPI_Comm MPI_Comm_f2c(MPI_Fint comm);
</span><br>
<span class="quotelev2">&gt; &gt;                           ^
</span><br>
<span class="quotelev2">&gt; &gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(804):  
</span><br>
<span class="quotelev2">&gt; &gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI_DECLSPEC  int MPI_Comm_free(MPI_Comm *comm);
</span><br>
<span class="quotelev2">&gt; &gt;                                    ^
</span><br>
<span class="quotelev2">&gt; &gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(805):  
</span><br>
<span class="quotelev2">&gt; &gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI_DECLSPEC  int MPI_Comm_get_attr(MPI_Comm comm, int comm_keyval,
</span><br>
<span class="quotelev2">&gt; &gt;                                        ^
</span><br>
<span class="quotelev2">&gt; &gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(807):  
</span><br>
<span class="quotelev2">&gt; &gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev2">&gt; &gt;   OMPI_DECLSPEC  int MPI_Comm_get_errhandler(MPI_Comm comm,  
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Errhandler *erhandler);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would highly appreciate it if someone could give me suggestions  
</span><br>
<span class="quotelev2">&gt; &gt; on how to fix the problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jiming
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Jiming Jin, PhD
</span><br>
<span class="quotelev2">&gt; &gt; Earth Sciences Division
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Lab
</span><br>
<span class="quotelev2">&gt; &gt; One Cyclotron Road, Mail-Stop 90-1116
</span><br>
<span class="quotelev2">&gt; &gt; Berkeley, CA 94720
</span><br>
<span class="quotelev2">&gt; &gt; Tel: 510-486-7551
</span><br>
<span class="quotelev2">&gt; &gt; Fax: 510-486-5686
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><pre>
-- 
Dr. Daniel Gruner                        dgruner_at_[hidden]
Dept. of Chemistry                       daniel.gruner_at_[hidden]
University of Toronto                    phone:  (416)-978-8689
80 St. George Street                     fax:    (416)-978-5325
Toronto, ON  M5S 3H6, Canada             finger for PGP public key
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>Previous message:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3159.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
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
