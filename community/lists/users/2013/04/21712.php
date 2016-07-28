<?
$subject_val = "Re: [OMPI users] Limitation of MPI_BCAST";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 11 18:19:19 2013" -->
<!-- isoreceived="20130411221919" -->
<!-- sent="Fri, 12 Apr 2013 00:19:12 +0200" -->
<!-- isosent="20130411221912" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Limitation of MPI_BCAST" -->
<!-- id="E677F091-9265-4136-9511-E666DC77EF47_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SNT134-W152840AE45CD9DDE8A60F2D3C00_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Limitation of MPI_BCAST<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-11 18:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21713.php">Ralph Castain: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>Previous message:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>In reply to:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21730.php">tmishima_at_[hidden]: "[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, but it is a little more tricky than calling MPI_Bcast.
<br>
<p>The prototype of MPI_Bcast as defined by the MPI standard is:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; int MPI_Bcast(void* buffer, int count, MPI_Datatype datatype, int root,
</span><br>
<span class="quotelev1">&gt;              MPI_Comm comm)
</span><br>
<p>This clearly prevents you from using a count larger than MAX_INT. However, you can build a datatype, by composing several types with counts under 1G and then use this datatype to do the bcast.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Apr 12, 2013, at 00:11 , William Au &lt;au_wai_chung_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using openmpi 1.6 and when I tried to send a large array through MPI_BCAST
</span><br>
<span class="quotelev1">&gt; in fortran. The number of count is larger than 3 billions. Although I compiled openmpi and
</span><br>
<span class="quotelev1">&gt; my code with the option to declare my fortran integer as 64 bit long in linux. I found out
</span><br>
<span class="quotelev1">&gt; that fortran pbcast_f.c will cast my *count to integer to call the c code MPI_Bcast
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   *ierr = OMPI_INT_2_FINT(MPI_Bcast(OMPI_F2C_BOTTOM(buffer),
</span><br>
<span class="quotelev1">&gt;                                             OMPI_FINT_2_INT(*count),
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So my question is, is it possible to bcast more than MAX_INT count of data_type in
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; William
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21712/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21713.php">Ralph Castain: "Re: [OMPI users] Greenplum's MR+"</a>
<li><strong>Previous message:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
<li><strong>In reply to:</strong> <a href="21711.php">William Au: "[OMPI users] Limitation of MPI_BCAST"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21730.php">tmishima_at_[hidden]: "[OMPI users] MPI_STATUS_SIZE in mpif-config.h for 64 bit integer"</a>
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
