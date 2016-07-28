<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 17:42:51 2008" -->
<!-- isoreceived="20080817214251" -->
<!-- sent="Sun, 17 Aug 2008 23:42:33 +0200" -->
<!-- isosent="20080817214233" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath" -->
<!-- id="590202A4-BD12-4F7F-BA68-4E825ACD2E0F_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="813061.14526.qm_at_web55407.mail.re4.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 17:42:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tom,
<br>
<p>I did the same modification as you on the osu_latency and the  
<br>
resulting application run to completion. I don't get any TRUNCATE  
<br>
error messages. I'm using the latest version of Open MPI (1.4a1r19313).
<br>
<p>There was a bug that might be related to your problem but our commit  
<br>
log shows it was fixed by commit 18830 on July 9.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 13, 2008, at 5:49 PM, Tom Riddle wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit more info wrt the question below. I have run other releases of  
</span><br>
<span class="quotelev1">&gt; OpenMPI and they seem to be fine. The reason I need to run the  
</span><br>
<span class="quotelev1">&gt; latest is because it supports valgrind fully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; openmpi-1.3ar18303
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA, Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 8/12/08, Tom Riddle &lt;rarebitusa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting a curious error on a simple communications test. I have  
</span><br>
<span class="quotelev1">&gt; altered the std mvapich osu_latency test to accept receives from any  
</span><br>
<span class="quotelev1">&gt; source and I get the following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the code change was...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Recv(r_buf, size, MPI_CHAR, MPI_ANY_SOURCE, 1, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; &amp;reqstat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command line I run was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 ./osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I run this on 2 types of host machine configurations. One that  
</span><br>
<span class="quotelev1">&gt; has Infinipath HCAs  installed and another that doesn't. I run both  
</span><br>
<span class="quotelev1">&gt; of these in shared memory mode ie: dual processes on the same node.  
</span><br>
<span class="quotelev1">&gt; I have verified that when I am on the host with Infinipath I am  
</span><br>
<span class="quotelev1">&gt; actually running the OpenMPI mpirun, not the mpi that comes with the  
</span><br>
<span class="quotelev1">&gt; HCA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI with psm support from a fairly recent svn pull  
</span><br>
<span class="quotelev1">&gt; and run the same bins on both host machines... The config was as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev2">&gt; &gt; $ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc CXX=g++
</span><br>
<span class="quotelev2">&gt; &gt; --disable-mpi-f77 --enable-debug --enable-memchecker
</span><br>
<span class="quotelev2">&gt; &gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4a1r18908
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error presents itself only on the host that does not have  
</span><br>
<span class="quotelev1">&gt; Infinipath installed. I have combed through the mca args to see if  
</span><br>
<span class="quotelev1">&gt; there is a setting I am missing but I cannot see anything obvious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any input would be appreciated. Thanks. Tom
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6372/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6373.php">George Bosilca: "Re: [OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>In reply to:</strong> <a href="6334.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6386.php">Tom Riddle: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
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
