<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 21 06:57:43 2007" -->
<!-- isoreceived="20070421105743" -->
<!-- sent="Sat, 21 Apr 2007 06:57:30 -0400" -->
<!-- isosent="20070421105730" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI and NPB3.2.1" -->
<!-- id="6B3D7BA2-ACC6-4216-9854-4AFF67CAE013_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY101-F18DEF6C0599A71DD871621F05A0_at_phx.gbl" -->
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
<strong>Date:</strong> 2007-04-21 06:57:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay in replying; this mail got lost in my inbox.  :-(
<br>
<p>Are you sure that this is the vanilla NPB BT benchmark?  I can find  
<br>
no reference to any MPI_FILE_* functions in NPB 2.3.
<br>
<p>The error message is coming from ROMIO -- the sub-package that  
<br>
implements the MPI-2 IO functionality in OMPI.  It looks like it's  
<br>
failing to find some files that it expects to find...?  It's hard to  
<br>
say without seeing the MPI app source.
<br>
<p><p>On Apr 8, 2007, at 1:45 AM, Nathan Graham wrote:
<br>
<p><span class="quotelev1">&gt; I have been trying to get NPB3.2.1 to run with OMPI version 1.2  
</span><br>
<span class="quotelev1">&gt; over several
</span><br>
<span class="quotelev1">&gt; nodes.  I have been running into the problem below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         - Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [ngraham_at_phoenix bin]$ mpirun -np 16 --hostfile MyHostFile --mca btl
</span><br>
<span class="quotelev1">&gt; self,sm,openib bt.B.16.mpi_io_full
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; NAS Parallel Benchmarks 3.2 -- BT Benchmark
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No input file inputbt.data. Using compiled defaults
</span><br>
<span class="quotelev1">&gt; Size: 102x102x102
</span><br>
<span class="quotelev1">&gt; Iterations: 200    dt:   0.000300
</span><br>
<span class="quotelev1">&gt; Number of active processes:    16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; BTIO -- FULL MPI-IO write interval:  5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN  
</span><br>
<span class="quotelev1">&gt; (line
</span><br>
<span class="quotelev1">&gt; 55): **filenoexist btio.full.outADIOI_NFS_OPEN (line 55):  
</span><br>
<span class="quotelev1">&gt; **filenoexist
</span><br>
<span class="quotelev1">&gt; btio.full.outADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN  
</span><br>
<span class="quotelev1">&gt; (line
</span><br>
<span class="quotelev1">&gt; 55): **filenoexist btio.full.outMPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outADIOI_NFS_OPEN  
</span><br>
<span class="quotelev1">&gt; (line
</span><br>
<span class="quotelev1">&gt; 55): **filenoexist btio.full.outMPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; ADIOI_NFS_OPEN (line 55): **filenoexist btio.full.outMPI_FILE_CLOSE  
</span><br>
<span class="quotelev1">&gt; (line
</span><br>
<span class="quotelev1">&gt; 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; Error opening file
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt; ADIO_OPEN (line 273): **oremote_fail
</span><br>
<span class="quotelev1">&gt; MPI_FILE_CLOSE (line 51): **iobadfh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _________________________________________________________________
</span><br>
<span class="quotelev1">&gt; The average US Credit Score is 675. The cost to see yours: $0 by  
</span><br>
<span class="quotelev1">&gt; Experian.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.freecreditreport.com/pm/default.aspx">http://www.freecreditreport.com/pm/default.aspx</a>? 
</span><br>
<span class="quotelev1">&gt; sc=660600&amp;bcd=EMAILFOOTERAVERAGE
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
<li><strong>Next message:</strong> <a href="3114.php">Jeff Squyres: "Re: [OMPI users] -prefix not working"</a>
<li><strong>Previous message:</strong> <a href="3112.php">Bas van der Vlies: "Re: [OMPI users] Problem with opal_wrapper version  1.2 rev 14435"</a>
<li><strong>In reply to:</strong> <a href="3044.php">Nathan Graham: "[OMPI users] OMPI and NPB3.2.1"</a>
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
