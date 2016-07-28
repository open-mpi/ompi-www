<?
$subject_val = "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 12 13:09:49 2009" -->
<!-- isoreceived="20091012170949" -->
<!-- sent="Mon, 12 Oct 2009 12:09:52 -0500" -->
<!-- isosent="20091012170952" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband" -->
<!-- id="4AD362E0.5080701_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AD35EBD.10406_at_web.de" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-12 13:09:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Previous message:</strong> <a href="10912.php">Jovana Knezevic: "Re: [OMPI users] problems with mpexec/mpirun"</a>
<li><strong>In reply to:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Reply:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am wondering whether this is really due to the usage of 
<br>
File_write_all. We had a bug in in 1.3 series so far (which will be 
<br>
fixed in 1.3.4) where we lost message segments and thus had a deadlock 
<br>
in Comm_dup if there was communication occurring *right after* the 
<br>
Comm_dup. File_open executes a comm_dup internally.
<br>
<p>If you replace write_all by write, you are avoiding the communication. 
<br>
If you replace ib by tcp, your entire timing is different and you might 
<br>
accidentally not see the deadlock...
<br>
<p>Just my $0.02 ...
<br>
<p>Thanks
<br>
Edgar
<br>
<p>Dorian Krause wrote:
<br>
<span class="quotelev1">&gt; Dear list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the attached program deadlocks in MPI_File_write_all when run with 16 
</span><br>
<span class="quotelev1">&gt; processes on two 8 core nodes of an Infiniband cluster. It runs fine when I
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) use tcp
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; b) replace MPI_File_write_all by MPI_File_write
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using openmpi V. 1.3.2 (but I checked that the problem is also 
</span><br>
<span class="quotelev1">&gt; occurs with version 1.3.3). The OFED version is 1.4 (installed via 
</span><br>
<span class="quotelev1">&gt; Rocks). The Operating system is CentOS 5.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I compile with gcc-4.1.2. The openmpi configure flags are
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   ../../configure --prefix=/share/apps/openmpi/1.3.2/gcc-4.1.2/ 
</span><br>
<span class="quotelev1">&gt; --with-io-romio-flags=--with-file-system=nfs+ufs+pvfs2 
</span><br>
<span class="quotelev1">&gt; --with-wrapper-ldflags=-L/share/apps/pvfs2/lib 
</span><br>
<span class="quotelev1">&gt; CPPFLAGS=-I/share/apps/pvfs2/include/ LDFLAGS=-L/share/apps/pvfs2/lib 
</span><br>
<span class="quotelev1">&gt; LIBS=-lpvfs2 -lpthread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The user home directories are mounted via nfs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it a problem with the user code, the system or with openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10914.php">David Singleton: "[OMPI users] bug in MPI_Cart_create?"</a>
<li><strong>Previous message:</strong> <a href="10912.php">Jovana Knezevic: "Re: [OMPI users] problems with mpexec/mpirun"</a>
<li><strong>In reply to:</strong> <a href="10911.php">Dorian Krause: "[OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
<li><strong>Reply:</strong> <a href="10915.php">Dorian Krause: "Re: [OMPI users] Deadlock in MPI_File_write_all on Infiniband"</a>
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
