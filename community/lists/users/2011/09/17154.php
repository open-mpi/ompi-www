<?
$subject_val = "Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 03:43:37 2011" -->
<!-- isoreceived="20110905074337" -->
<!-- sent="Mon, 5 Sep 2011 09:43:30 +0200" -->
<!-- isosent="20110905074330" -->
<!-- name="pascal.deveze_at_[hidden]" -->
<!-- email="pascal.deveze_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit..." -->
<!-- id="OF731BF2DE.137A0D77-ONC1257902.00276C61-C1257902.002A7B7F_at_fraz.bull.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E61EDC0.7000109_at_aei.mpg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with MPI-IO at filesizes greater then the 32	Bit limit...<br>
<strong>From:</strong> <a href="mailto:pascal.deveze_at_[hidden]?Subject=Re:%20[OMPI%20users]%20problem%20with%20MPI-IO%20at%20filesizes%20greater%20then%20the%2032	Bit%20limit..."><em>pascal.deveze_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-09-05 03:43:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
<li><strong>Previous message:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17147.php">alibeck: "[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit..."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am not sure I understand what you are doing.
<br>
<p><p>users-bounces_at_[hidden] a &#233;crit sur 03/09/2011 11:05:04 :
<br>
<p><span class="quotelev1">&gt; De : alibeck &lt;alexander.beck-ratzka_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 03/09/2011 11:05
</span><br>
<span class="quotelev1">&gt; Objet : [OMPI users] problem with MPI-IO at filesizes greater then
</span><br>
<span class="quotelev1">&gt; the 32 Bit limit...
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi Folks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a run on 256 PEs onot a lustre file system with the following
</span><br>
code:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;   integer :: mype,npe,pe_min,pe_max,pe_prev,pe_next,mpi_my_real, &amp;
</span><br>
<span class="quotelev1">&gt;              comm=mpi_comm_world,status(mpi_status_size),error, &amp;
</span><br>
<span class="quotelev1">&gt;              mpi_realsize, thefile
</span><br>
<span class="quotelev1">&gt;   integer (kind=MPI_OFFSET_KIND) disp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   logical :: pe0,prl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; !
</span><br>
*************************************************************************
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call mpi_init(error)
</span><br>
<span class="quotelev1">&gt;     call mpi_comm_rank(comm,mype,error)
</span><br>
<span class="quotelev1">&gt;     call mpi_comm_size(comm, npe,error)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     call mpi_type_extent(mpi_real, mpi_realsize, error);
</span><br>
<p>mpi_type_extent is deprecated, use mpi_type_get_extent instead.
<br>
(this will not solve your problem).
<br>
<p><span class="quotelev1">&gt;     call mpi_type_size(MPI_REAL8, mpi_realsize, error)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     pe0=mype==0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt; .
</span><br>
<span class="quotelev1">&gt;      disp = mype*lu*mpi_realsize
</span><br>
<p>So, disp=0
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(comm,error)
</span><br>
<span class="quotelev1">&gt;      call mpi_file_open(comm,'output-parallel/dump.dat',
</span><br>
<span class="quotelev1">&gt; MPI_MODE_RDONLY, mpi_info_null, thefile, error)
</span><br>
<p>You open the file with a &quot;read only&quot; flag
<br>
<p><span class="quotelev1">&gt;      call mpi_file_write_at(thefile, disp, u(1,nx1,ny1,nz1), lu,
</span><br>
<span class="quotelev1">&gt; MPI_REAL8, mpi_status_ignore, error)
</span><br>
<p>You write in your &quot;read only&quot; file ...
<br>
<p><p><span class="quotelev1">&gt;      call mpi_file_close(thefile, error)
</span><br>
<span class="quotelev1">&gt;      call mpi_barrier(comm,error)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where lu is an integer which does not extend the limit. If I am
</span><br>
<span class="quotelev1">&gt; exceeding the 32 Bit limit, which means that the size of my output file
</span><br>
<span class="quotelev1">&gt; is larger then 2**31 but (what rouhgly 2.4 Gbytes), I am getting only a
</span><br>
<span class="quotelev1">&gt; file with a size of 327 MBytey instead of expected 181 GByte for a
</span><br>
<span class="quotelev1">&gt; checkpoint. This leads of course to a segfault when restarting. I am
</span><br>
<span class="quotelev1">&gt; afraid this has something to do with the 32 Bit limit of my filesize,
</span><br>
<span class="quotelev1">&gt; which might be calculated wrong in my offset (which is disp in my code)
</span><br>
<span class="quotelev1">&gt; in mpi_file_write_at.
</span><br>
<p>I do not understand why you are expecting a size of 181 Gbytes.
<br>
<p>If lu becomes negative (this is the case when the 2**31 limit is reached),
<br>
the mpi_file_write_at routine should return an error. Do you check the
<br>
returned error ?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas on how I can enclose the reson of the errpr, or - even better
</span><br>
<span class="quotelev1">&gt; - on how to solve it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>With the information you send, it is difficult to give you a solution. I
<br>
can advise you to
<br>
simplify as far as possible your application (less than 100 lines wil be
<br>
OK), reproduce the
<br>
problem and send us the reproducer. I then could try to reproduce your
<br>
problem on my side.
<br>
<p><span class="quotelev1">&gt; Best wishes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alexander
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17155.php">Jai Dayal: "[OMPI users] error on malloc"</a>
<li><strong>Previous message:</strong> <a href="17153.php">Brice Goglin: "Re: [OMPI users] Bug in openmpi 1.5.4 in paffinity"</a>
<li><strong>In reply to:</strong> <a href="17147.php">alibeck: "[OMPI users] problem with MPI-IO at filesizes greater then the 32 Bit limit..."</a>
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
