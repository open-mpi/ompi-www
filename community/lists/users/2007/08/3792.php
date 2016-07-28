<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug  1 11:56:21 2007" -->
<!-- isoreceived="20070801155621" -->
<!-- sent="Wed, 1 Aug 2007 11:56:14 -0400" -->
<!-- isosent="20070801155614" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions" -->
<!-- id="DEE5A8A3-0084-400A-B7D0-1184FAD64FC7_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B823A70C-2913-4CA6-B18C-E59C50ABDAED_at_csiro.au" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-01 11:56:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3790.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Reply:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Juan,
<br>
<p>I have to check to see what's wrong there. We build Open MPI with  
<br>
full support for data transfer up to sizeof(size_t) bytes. so you  
<br>
case should be covered. However, there are some known problems with  
<br>
the MPI interface for data larger than sizeof(int). As an example the  
<br>
_count field in the MPI_Status structure will be truncated ...
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 30, 2007, at 1:47 AM, Juan Carlos Guzman wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anyone know the maximum buffer size I can use in MPI_Send()
</span><br>
<span class="quotelev1">&gt; (MPI_Recv) function?. I was doing some testing using two nodes on my
</span><br>
<span class="quotelev1">&gt; cluster to measure the point-to-point MPI message rate depending on
</span><br>
<span class="quotelev1">&gt; size. The test program exchanges MPI_FLOAT datatypes between two
</span><br>
<span class="quotelev1">&gt; nodes. I was able to send up to 4 GB of data (500 Mega MPI_FLOATs)
</span><br>
<span class="quotelev1">&gt; before the process crashed with a segmentation fault message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is the maximum size of the message limited by the sizeof(int) * sizeof
</span><br>
<span class="quotelev1">&gt; (MPI data type) used in the MPI_Send()/MPI_Recv() functions?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My cluster has openmpi 1.2.3 installed. Each node has 2 x dual core
</span><br>
<span class="quotelev1">&gt; AMD Opteron and 12 GB RAM.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt;    Juan-Carlos.
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
<li><strong>Next message:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Previous message:</strong> <a href="3791.php">S.Sundar Raman: "[OMPI users] unable to compile open mpi using pgf90 in AMD opteron system"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/07/3790.php">Juan Carlos Guzman: "[OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
<li><strong>Reply:</strong> <a href="3793.php">Jelena Pjesivac-Grbovic: "Re: [OMPI users] Maximum message size for MPI_Send()/MPI_Recv() functions"</a>
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
