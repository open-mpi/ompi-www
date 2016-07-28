<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 05:33:11 2007" -->
<!-- isoreceived="20070711093311" -->
<!-- sent="Wed, 11 Jul 2007 19:32:45 +1000" -->
<!-- isosent="20070711093245" -->
<!-- name="Tim Cornwell" -->
<!-- email="tim.cornwell_at_[hidden]" -->
<!-- subject="[OMPI users] Problems running openmpi under os x" -->
<!-- id="418CA39C-839C-40B7-B756-2356EACEA8E0_at_csiro.au" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Tim Cornwell (<em>tim.cornwell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 05:32:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3636.php">Warner Yuen: "[OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3639.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3639.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a problem running openmpi under OS 10.4.10. My program runs  
<br>
fine under debian x86_64 on an opteron but under OS X on a number of  
<br>
Mac Book and Mac Book Pros, I get the following immediately on  
<br>
startup. This smells like a common problem but I could find anything  
<br>
relevant anywhere. Can anyone provide a hint or better yet a solution?
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p><p>Program received signal EXC_BAD_ACCESS, Could not access memory.
<br>
Reason: KERN_PROTECTION_FAILURE at address: 0x0000000c
<br>
0x04510412 in free ()
<br>
(gdb) where
<br>
#0  0x04510412 in free ()
<br>
#1  0x05d24f80 in opal_install_dirs_expand (input=0x5d2a6b0 &quot;$ 
<br>
{prefix}&quot;) at base/installdirs_base_expand.c:67
<br>
#2  0x05d24584 in opal_installdirs_base_open () at base/ 
<br>
installdirs_base_components.c:94
<br>
#3  0x05d01a40 in opal_init_util () at runtime/opal_init.c:150
<br>
#4  0x05d01b24 in opal_init () at runtime/opal_init.c:200
<br>
#5  0x051fa5cd in ompi_mpi_init (argc=1, argv=0xbfffde74,  
<br>
requested=0, provided=0xbfffd930) at runtime/ompi_mpi_init.c:219
<br>
#6  0x0523a8db in MPI_Init (argc=0xbfffd980, argv=0xbfffde14) at  
<br>
init.c:71
<br>
#7  0x0005a03d in conrad::cp::MPIConnection::initMPI (argc=1,  
<br>
argv=@0xbfffde14) at mwcommon/MPIConnection.cc:83
<br>
#8  0x00004163 in main (argc=1, argv=0xbfffde74) at apps/cimager.cc:155
<br>
<p><p>------------------------------------------------------------------------ 
<br>
--------
<br>
Tim Cornwell,  Australia Telescope National Facility, CSIRO
<br>
Location: Cnr Pembroke &amp; Vimiera Rds, Marsfield, NSW, 2122, AUSTRALIA
<br>
Post:     PO Box 76, Epping, NSW 1710, AUSTRALIA
<br>
Phone:    +61 2 9372 4261   Fax:  +61 2 9372 4450 or 4310
<br>
Mobile:  +61 4 3366 5399
<br>
Email:    Tim.Cornwell_at_[hidden]
<br>
URL:      <a href="http://www.atnf.csiro.au/people/tim.cornwell">http://www.atnf.csiro.au/people/tim.cornwell</a>
<br>
------------------------------------------------------------------------ 
<br>
---------
<br>
<p><p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3637/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3636.php">Warner Yuen: "[OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3639.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3639.php">Brian Barrett: "Re: [OMPI users] Problems running openmpi under os x"</a>
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
