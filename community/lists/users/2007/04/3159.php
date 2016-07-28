<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Apr 27 09:04:19 2007" -->
<!-- isoreceived="20070427130419" -->
<!-- sent="Fri, 27 Apr 2007 09:04:02 -0400" -->
<!-- isosent="20070427130402" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Compile WRFV2.2 with OpenMPI" -->
<!-- id="21671EA1-D284-4309-8792-E83056B324C9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="07423467-D1C9-4DE4-A08D-B01D299671F4_at_lbl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-27 09:04:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3160.php">Daniel Gruner: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is quite odd; we have tested OMPI 1.1.x with the intel compilers  
<br>
quite a bit.  In particular, it seems to be complaining about  
<br>
MPI_Fint and MPI_Comm, but these two types should have been  
<br>
typedef'ed earlier in mpi.h.
<br>
<p>Can you send along the information listed on the &quot;Getting Help&quot; page  
<br>
on the web site, and also include your mpi.h file?
<br>
<p>Thanks!
<br>
<p><p><p>On Apr 26, 2007, at 5:28 PM, Jiming Jin wrote:
<br>
<p><span class="quotelev1">&gt; Dear Users:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I have been trying to use the intel ifort and icc compilers to  
</span><br>
<span class="quotelev1">&gt; compile an atmospheric model called the Weather Research &amp;  
</span><br>
<span class="quotelev1">&gt; Forecasting model (WRFV2.2) on a Linux Cluster (x86_64) using Open- 
</span><br>
<span class="quotelev1">&gt; MPI v1.2 that were also compiled with INTEL ICC.   However, I got a  
</span><br>
<span class="quotelev1">&gt; lot of error messages as follows when compiling WRF.
</span><br>
<span class="quotelev1">&gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(788):  
</span><br>
<span class="quotelev1">&gt; error: expected an identifier
</span><br>
<span class="quotelev1">&gt;   OMPI_DECLSPEC  MPI_Fint MPI_Comm_c2f(MPI_Comm comm);
</span><br>
<span class="quotelev1">&gt;                           ^
</span><br>
<span class="quotelev1">&gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(802):  
</span><br>
<span class="quotelev1">&gt; error: &quot;MPI_Comm&quot; has already been declared in the current scope
</span><br>
<span class="quotelev1">&gt;   OMPI_DECLSPEC  MPI_Comm MPI_Comm_f2c(MPI_Fint comm);
</span><br>
<span class="quotelev1">&gt;                           ^
</span><br>
<span class="quotelev1">&gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(804):  
</span><br>
<span class="quotelev1">&gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev1">&gt;   OMPI_DECLSPEC  int MPI_Comm_free(MPI_Comm *comm);
</span><br>
<span class="quotelev1">&gt;                                    ^
</span><br>
<span class="quotelev1">&gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(805):  
</span><br>
<span class="quotelev1">&gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev1">&gt;   OMPI_DECLSPEC  int MPI_Comm_get_attr(MPI_Comm comm, int comm_keyval,
</span><br>
<span class="quotelev1">&gt;                                        ^
</span><br>
<span class="quotelev1">&gt; /data/software/x86_64/open-mpi/1.1.4-intel//include/mpi.h(807):  
</span><br>
<span class="quotelev1">&gt; error: function &quot;MPI_Comm&quot; is not a type name
</span><br>
<span class="quotelev1">&gt;   OMPI_DECLSPEC  int MPI_Comm_get_errhandler(MPI_Comm comm,  
</span><br>
<span class="quotelev1">&gt; MPI_Errhandler *erhandler);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would highly appreciate it if someone could give me suggestions  
</span><br>
<span class="quotelev1">&gt; on how to fix the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jiming
</span><br>
<span class="quotelev1">&gt; ------------------------------------------
</span><br>
<span class="quotelev1">&gt; Jiming Jin, PhD
</span><br>
<span class="quotelev1">&gt; Earth Sciences Division
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Lab
</span><br>
<span class="quotelev1">&gt; One Cyclotron Road, Mail-Stop 90-1116
</span><br>
<span class="quotelev1">&gt; Berkeley, CA 94720
</span><br>
<span class="quotelev1">&gt; Tel: 510-486-7551
</span><br>
<span class="quotelev1">&gt; Fax: 510-486-5686
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3160.php">Daniel Gruner: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3158.php">Jeff Squyres: "Re: [OMPI users] Compile WRFV2.2 with OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="3155.php">Jiming Jin: "[OMPI users] Compile WRFV2.2 with OpenMPI"</a>
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
