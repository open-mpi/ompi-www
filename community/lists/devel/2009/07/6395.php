<?
$subject_val = "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 10 06:54:37 2009" -->
<!-- isoreceived="20090710105437" -->
<!-- sent="Fri, 10 Jul 2009 12:54:26 +0200" -->
<!-- isosent="20090710105426" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped" -->
<!-- id="200907101254.31260.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="565B6200-39E3-4E82-9151-DE0AA0FB2858_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-10 06:54:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 10 July 2009, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/">http://www.open-mpi.org/software/ompi/v1.3/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please test!
</span><br>
<p>Built and ran just like(*) 1.3.2 on my limited tests (that is, worked quite 
<br>
well)
<br>
<p>OS:CentOS-5.3.x86_64 with its own OFED
<br>
HW:ConnectX-DDR on a Nehalem dual-quad platform
<br>
Size:4 nodes
<br>
Compilers: Intel-11.0-074 (built with C/C++/F90, tested C and F90)
<br>
<p>(*) It seems to still have the problem reported in:
<br>
<p>&nbsp;[OMPI users] scaling problem with openmpi
<br>
&nbsp;From: Roman Martonak &lt;r.martonak_at_[hidden]&gt;
<br>
&nbsp;To: users_at_[hidden]
<br>
&nbsp;Date: 2009-05-16 00.20
<br>
<p>That is, it selects basic-linear for alltoall when it should have picked bruck 
<br>
and the result is suckish performance:
<br>
<p>as-shipped:
<br>
<p>&nbsp;$ mpirun -np 32 -host tbox13,tbox14,tbox15,tbox16 ./alltoall.openmpi133rc1 \ 
<br>
profile.short-small
<br>
&nbsp;running in profile-from-file mode
<br>
&nbsp;bw for   10000   x 0 B :   0.0 bytes/s   time was: 142.1 us
<br>
&nbsp;bw for   10000   x 1 B :   2.8 Mbytes/s          time was: 224.0 ms
<br>
&nbsp;bw for   10000   x 2 B :   5.5 Mbytes/s          time was: 225.5 ms
<br>
&nbsp;bw for   10000   x 4 B :  11.0 Mbytes/s          time was: 225.6 ms
<br>
&nbsp;bw for   10000   x 8 B :  23.6 Mbytes/s          time was: 210.2 ms
<br>
&nbsp;bw for   10000   x 16 B :  44.1 Mbytes/s         time was: 224.9 ms
<br>
&nbsp;bw for   10000   x 32 B :  79.2 Mbytes/s         time was: 250.7 ms
<br>
&nbsp;bw for   10000   x 64 B : 132.0 Mbytes/s         time was: 300.6 ms
<br>
&nbsp;bw for   10000   x 128 B : 195.7 Mbytes/s        time was: 405.4 ms
<br>
&nbsp;bw for   10000   x 256 B :  11.4 Mbytes/s        time was:  14.0 s
<br>
&nbsp;bw for   10000   x 512 B :  24.1 Mbytes/s        time was:  13.2 s
<br>
&nbsp;bw for   10000   x 1024 B :  53.6 Mbytes/s       time was:  11.9 s
<br>
&nbsp;totaltime was:  41.0 s
<br>
<p>forcing bruck:
<br>
<p>&nbsp;$ mpirun -np 32 -mca coll_tuned_alltoall_algorithm 3 -mca \ 
<br>
coll_tuned_use_dynamic_rules 1 -host \ 
<br>
tbox13,tbox14,tbox15,tbox16 ./alltoall.openmpi133rc1 profile.short-small
<br>
&nbsp;running in profile-from-file mode
<br>
&nbsp;bw for   10000   x 0 B :   0.0 bytes/s   time was: 142.1 us
<br>
&nbsp;bw for   10000   x 1 B :   3.5 Mbytes/s          time was: 176.8 ms
<br>
&nbsp;bw for   10000   x 2 B :   6.9 Mbytes/s          time was: 179.4 ms
<br>
&nbsp;bw for   10000   x 4 B :  13.4 Mbytes/s          time was: 184.5 ms
<br>
&nbsp;bw for   10000   x 8 B :  24.3 Mbytes/s          time was: 203.8 ms
<br>
&nbsp;bw for   10000   x 16 B :  45.3 Mbytes/s         time was: 219.0 ms
<br>
&nbsp;bw for   10000   x 32 B :  81.0 Mbytes/s         time was: 245.1 ms
<br>
&nbsp;bw for   10000   x 64 B : 134.1 Mbytes/s         time was: 295.9 ms
<br>
&nbsp;bw for   10000   x 128 B : 198.3 Mbytes/s        time was: 400.2 ms
<br>
&nbsp;bw for   10000   x 256 B : 233.8 Mbytes/s        time was: 679.0 ms
<br>
&nbsp;bw for   10000   x 512 B : 281.5 Mbytes/s        time was:   1.1 s
<br>
&nbsp;bw for   10000   x 1024 B : 292.1 Mbytes/s       time was:   2.2 s
<br>
&nbsp;totaltime was:   5.9 s
<br>
<p>I didn't follow up on this thinking it had been solved...
<br>
<p>/Peter
<br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6395/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Previous message:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>In reply to:</strong> <a href="6394.php">Jeff Squyres: "[OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
<li><strong>Reply:</strong> <a href="6396.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3.3rc1 has escaped"</a>
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
