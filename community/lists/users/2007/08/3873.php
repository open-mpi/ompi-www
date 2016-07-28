<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 16 11:27:22 2007" -->
<!-- isoreceived="20070816152722" -->
<!-- sent="Thu, 16 Aug 2007 11:27:12 -0400" -->
<!-- isosent="20070816152712" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split" -->
<!-- id="9B9ADE22-3649-4428-A108-53408E6B91A2_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1187271086.19138.173.camel_at_alpaca.lan" -->
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
<strong>Date:</strong> 2007-08-16 11:27:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3874.php">Daniel Spångberg: "[OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, finally someone discovered it :) I know about this problem for  
<br>
quite a while now, it pop up during our own valgrind test of the  
<br>
collective module in Open MPI. However, it never create any problems  
<br>
in the applications, at least not as far as I know. That's why I'm  
<br>
reticent to replace the memcpy by a memmove (where the arguments are  
<br>
allowed to overlap) as there is a performance penalty.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 16, 2007, at 9:31 AM, Allen Barnett wrote:
<br>
<p><span class="quotelev1">&gt; Hi:
</span><br>
<span class="quotelev1">&gt; I was running my OpenMPI 1.2.3 application under Valgrind and I  
</span><br>
<span class="quotelev1">&gt; observed
</span><br>
<span class="quotelev1">&gt; this error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==14322== Source and destination overlap in memcpy(0x41F5BD0,  
</span><br>
<span class="quotelev1">&gt; 0x41F5BD8,
</span><br>
<span class="quotelev1">&gt; 16)
</span><br>
<span class="quotelev1">&gt; ==14322==    at 0x49070AD: memcpy (mc_replace_strmem.c:116)
</span><br>
<span class="quotelev1">&gt; ==14322==    by 0x4A45CF4: ompi_ddt_copy_content_same_ddt
</span><br>
<span class="quotelev1">&gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14322==    by 0x7A6C386: ompi_coll_tuned_allgather_intra_bruck
</span><br>
<span class="quotelev1">&gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/openmpi/mca_coll_tuned.so)
</span><br>
<span class="quotelev1">&gt; ==14322==    by 0x4A29FFE: ompi_comm_split
</span><br>
<span class="quotelev1">&gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14322==    by 0x4A4E322: MPI_Comm_split
</span><br>
<span class="quotelev1">&gt; (in /home/scratch/DMP/RHEL4-GCC4/lib/libmpi.so.0.0.0)
</span><br>
<span class="quotelev1">&gt; ==14322==    by 0x400A26: main
</span><br>
<span class="quotelev1">&gt; (in /home/scratch/DMP/severian_tests/ompi/a.out)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a reduced code example. I run it like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 3 valgrind ./a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I only see this error if there are an odd number of processes! I don't
</span><br>
<span class="quotelev1">&gt; know if this is really a problem or not, though. My OMPI application
</span><br>
<span class="quotelev1">&gt; seems to work OK. However, the linux man page for memcpy says
</span><br>
<span class="quotelev1">&gt; overlapping range copying is undefined.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other details: x86_64 (one box, two dual-core opterons), RHEL 4.5,
</span><br>
<span class="quotelev1">&gt; OpenMPI-1.2.3 compiled with the RHEL-supplied GCC 4 (gcc4 (GCC) 4.1.1
</span><br>
<span class="quotelev1">&gt; 20070105 (Red Hat 4.1.1-53)), valgrind 3.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Allen
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Allen Barnett
</span><br>
<span class="quotelev1">&gt; Transpire, Inc.
</span><br>
<span class="quotelev1">&gt; e-mail: allen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Ph: 518-887-2930
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;main.c&gt;&lt;info.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="3874.php">Daniel Spångberg: "[OMPI users] Process termination problem"</a>
<li><strong>Previous message:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>In reply to:</strong> <a href="3872.php">Allen Barnett: "[OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
<li><strong>Reply:</strong> <a href="3887.php">Lisandro Dalcin: "Re: [OMPI users] Possible Memcpy bug in MPI_Comm_split"</a>
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
