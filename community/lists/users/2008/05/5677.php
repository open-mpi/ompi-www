<?
$subject_val = "[OMPI users] Replace 1.2.3 with 1.2.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 05:06:14 2008" -->
<!-- isoreceived="20080516090614" -->
<!-- sent="Fri, 16 May 2008 02:06:03 -0700 (PDT)" -->
<!-- isosent="20080516090603" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="[OMPI users] Replace 1.2.3 with 1.2.6" -->
<!-- id="637641.82793.qm_at_web57611.mail.re1.yahoo.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Replace 1.2.3 with 1.2.6<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-16 05:06:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5678.php">Karsten Bolding: "[OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Having (as a non-expert) to compile new versions of applications (Amber10 primarily), I have taken the opportunity to upgrade Intel compilers to version 10.1 (and MKL libraries) and now I plan also to upgrade openmpi from 1.2.3 to 1.2.6. To this concern please see the answer by Tim Prins (tprins_at_[hidden])
<br>
Date: 2007-09-26 18:26:25
<br>
to my former general question about upgrading:
<br>
<p><span class="quotelev1">&gt;If you want to replace your current installation of Open MPI, you have 3 
</span><br>
<span class="quotelev1">&gt;options: 
</span><br>
<span class="quotelev1">&gt;1. Install the new version exactly as you did the old version, overwriting &gt;the old version. This should work, but can lead to problems if there are &gt;any stale files left over. Thus I would recommend not doing this and doing &gt;one of the following. 
</span><br>
<span class="quotelev1">&gt;2. If you still have the build tree you used to originally install Open &gt;MPI, go into the build tree and type 'make uninstall'. This should remove &gt;all the old Open MPI files and allow you to install the new version &gt;normally. 
</span><br>
<span class="quotelev1">&gt;3. If you installed Open MPI into a unique prefix, such as /opt/openmpi, &gt;just delete the directory and then install the new version of Open MPI. 
</span><br>
<span class="quotelev1">&gt;Personally, I think that one should always install Open MPI into a &gt;directory where nothing else is installed, as it makes management and &gt;upgrading significantly easier.
</span><br>
<p>I still have /usr/local/openmpi-1.2.3 which is
<br>
<p>4 drwxrwxrwx 10 10254 11000
<br>
<p>(the last two figures stand for me as user) from which I carried out the compilation. 
<br>
/usr/local/bin contains:
<br>
mpic++
<br>
mpicc
<br>
mpiCC
<br>
mpicxx
<br>
mpiexec
<br>
mpif77
<br>
mpif90
<br>
mpirun
<br>
ompi_info
<br>
orted
<br>
orterun
<br>
<p>are these overwritten during the new compilation, or some deletion is needed?
<br>
<p>Thanks
<br>
francesco pietra
<br>
If I understand, the above procedure (3) applies. Therefore, just delete /open.mpi-1.2.3 and start with decompressing the new release into
<br>
<p>/usr/local/openmpi-1.2.6
<br>
<p>and operate as before.
<br>
<p>What about libnuma,that I had also insalled 
<br>
apt-get install libnuma-dev, which installed
<br>
libnuma-dev libnuma.1
<br>
<p>This is a self-assembled, NUMA-type four sockets dual-opteron machine with Debian Linux amd64 lenny (the two raid1 HHD just moved to this mainboard from a previous mainbosrd with only two sockets. Everything OK with few adjustments).
<br>
<p>Thanks
<br>
francesco pietra
<br>
<p>I prefere to wait for advice about this post before damaging the system. 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5678.php">Karsten Bolding: "[OMPI users] compiling from source from svn"</a>
<li><strong>Previous message:</strong> <a href="5676.php">Jeff Squyres: "Re: [OMPI users] openmpi multi-lib torque support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
<li><strong>Reply:</strong> <a href="5683.php">Jeff Squyres: "Re: [OMPI users] Replace 1.2.3 with 1.2.6"</a>
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
