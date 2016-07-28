<?
$subject_val = "Re: [OMPI users] MPI-IO puzzlement";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 10 13:26:26 2012" -->
<!-- isoreceived="20120510172626" -->
<!-- sent="Thu, 10 May 2012 12:26:17 -0500" -->
<!-- isosent="20120510172617" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-IO puzzlement" -->
<!-- id="4FABFA39.4090202_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.2.00.1205101728330.12062_at_serodio" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-IO puzzlement<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-10 13:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19248.php">Ricardo Reis: "[OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19248.php">Ricardo Reis: "[OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
what is the communicator that you used to open the file? I am wondering
<br>
whether it differs from the communicator used in MPI_Barrier, and some
<br>
processes do not enter the Barrier at all...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>On 5/10/2012 12:22 PM, Ricardo Reis wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Hi all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  I'm trying to run my code in a cluster here with infiniband. It is in
</span><br>
<span class="quotelev1">&gt; Fortran 95/2003 and uses MPI-IO for output. I'm using openmpi 1.5.5. It
</span><br>
<span class="quotelev1">&gt; runs has been running fine but for a particular configuration, using all
</span><br>
<span class="quotelev1">&gt; of the cluster cores (128, divided in 4 boxes with 4 Octo-core Opterons
</span><br>
<span class="quotelev1">&gt; each), it hangs while calling MPI-IO.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  So what I am asking is help in debugging this. This is the relevant
</span><br>
<span class="quotelev1">&gt; part of the code
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CALL MPI_File_set_view(fh, disp, etype, filetype, &amp;
</span><br>
<span class="quotelev1">&gt;          TRIM(datarep),  MPI_INFO_NULL, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     IF(DEBGON)THEN
</span><br>
<span class="quotelev1">&gt;        IF(master)THEN
</span><br>
<span class="quotelev1">&gt;           WRITE(logfl,'(/,&quot;DBG: WriteMPI_IO going to write file.&quot;)')
</span><br>
<span class="quotelev1">&gt;           FLUSH(logfl)
</span><br>
<span class="quotelev1">&gt;        ENDIF
</span><br>
<span class="quotelev1">&gt;        CALL MPI_Barrier(world, ierr)
</span><br>
<span class="quotelev1">&gt;     ENDIF
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     CALL MPI_file_write_at_all(fh, offset, arr, dim, &amp;
</span><br>
<span class="quotelev1">&gt;          etype, status, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  And it hangs just after the flush, so apparently in the
</span><br>
<span class="quotelev1">&gt; MPI_write_at_all call.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Any ideas of what to do or where to look are welcomed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  PhD/MSc Mechanical Engineering | Lic. Aerospace Engineering
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.radiozero.pt">http://www.radiozero.pt</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.flickr.com/photos/rreis/">http://www.flickr.com/photos/rreis/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  contacts:  gtalk: kyriusan_at_[hidden]  skype: kyriusan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Institutional Address:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Ricardo J.N. dos Reis
</span><br>
<span class="quotelev1">&gt;  IDMEC, Instituto Superior T&#233;cnico, Technical University of Lisbon
</span><br>
<span class="quotelev1">&gt;  Av. Rovisco Pais
</span><br>
<span class="quotelev1">&gt;  1049-001 Lisboa
</span><br>
<span class="quotelev1">&gt;  Portugal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;                       - email sent with alpine 2.00 -
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
<p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19249/signature.asc">OpenPGP digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19248.php">Ricardo Reis: "[OMPI users] MPI-IO puzzlement"</a>
<li><strong>In reply to:</strong> <a href="19248.php">Ricardo Reis: "[OMPI users] MPI-IO puzzlement"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Reply:</strong> <a href="19250.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
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
