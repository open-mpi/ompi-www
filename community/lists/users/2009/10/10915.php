<?
$subject_val = "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 13 14:52:02 2009" -->
<!-- isoreceived="20091013185202" -->
<!-- sent="Tue, 13 Oct 2009 20:49:08 +0200" -->
<!-- isosent="20091013184908" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband" -->
<!-- id="4AD4CBA4.2060408_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AD362E0.5080701_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-13 14:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>In reply to:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Edgar,
<br>
<p>this sounds reasonable. Looking at the program with the debugger, I can 
<br>
see that 15/16 processes wait in PMPI_Allreduce whereas the other one is 
<br>
in PMPI_Wait.
<br>
<p>Also, the program works with mvapich and I guess the ADIO source tree is 
<br>
more or less the same (correct me if I'm wrong)?!
<br>
<p>So, I stick to MPI_File_write and wait for 1.3.4 ...
<br>
<p>Thanks,
<br>
Dorian
<br>
<p>Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I am wondering whether this is really due to the usage of 
</span><br>
<span class="quotelev1">&gt; File_write_all. We had a bug in in 1.3 series so far (which will be 
</span><br>
<span class="quotelev1">&gt; fixed in 1.3.4) where we lost message segments and thus had a deadlock 
</span><br>
<span class="quotelev1">&gt; in Comm_dup if there was communication occurring *right after* the 
</span><br>
<span class="quotelev1">&gt; Comm_dup. File_open executes a comm_dup internally.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you replace write_all by write, you are avoiding the communication. 
</span><br>
<span class="quotelev1">&gt; If you replace ib by tcp, your entire timing is different and you 
</span><br>
<span class="quotelev1">&gt; might accidentally not see the deadlock...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the attached program deadlocks in MPI_File_write_all when run with 16 
</span><br>
<span class="quotelev2">&gt;&gt; processes on two 8 core nodes of an Infiniband cluster. It runs fine 
</span><br>
<span class="quotelev2">&gt;&gt; when I
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; a) use tcp
</span><br>
<span class="quotelev2">&gt;&gt; or
</span><br>
<span class="quotelev2">&gt;&gt; b) replace MPI_File_write_all by MPI_File_write
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using openmpi V. 1.3.2 (but I checked that the problem is also 
</span><br>
<span class="quotelev2">&gt;&gt; occurs with version 1.3.3). The OFED version is 1.4 (installed via 
</span><br>
<span class="quotelev2">&gt;&gt; Rocks). The Operating system is CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I compile with gcc-4.1.2. The openmpi configure flags are
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   ../../configure --prefix=/share/apps/openmpi/1.3.2/gcc-4.1.2/ 
</span><br>
<span class="quotelev2">&gt;&gt; --with-io-romio-flags=--with-file-system=nfs+ufs+pvfs2 
</span><br>
<span class="quotelev2">&gt;&gt; --with-wrapper-ldflags=-L/share/apps/pvfs2/lib 
</span><br>
<span class="quotelev2">&gt;&gt; CPPFLAGS=-I/share/apps/pvfs2/include/ LDFLAGS=-L/share/apps/pvfs2/lib 
</span><br>
<span class="quotelev2">&gt;&gt; LIBS=-lpvfs2 -lpthread
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The user home directories are mounted via nfs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it a problem with the user code, the system or with openmpi?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Dorian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10916.php">Abhinav Vishnu: "[OMPI users] Compilation Failure on Franklin with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>In reply to:</strong> <a href="10913.php">Edgar Gabriel: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
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
