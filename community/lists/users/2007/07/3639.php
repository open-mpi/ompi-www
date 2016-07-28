<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 10:50:41 2007" -->
<!-- isoreceived="20070711145041" -->
<!-- sent="Wed, 11 Jul 2007 08:50:27 -0600" -->
<!-- isosent="20070711145027" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running openmpi under os x" -->
<!-- id="B6B1E0AD-88D7-4C96-BC4E-C11FA677DCF7_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="418CA39C-839C-40B7-B756-2356EACEA8E0_at_csiro.au" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 10:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Tim Cornwell: "[OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which version of Open MPI are you using?
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p>On Jul 11, 2007, at 3:32 AM, Tim Cornwell wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a problem running openmpi under OS 10.4.10. My program runs  
</span><br>
<span class="quotelev1">&gt; fine under debian x86_64 on an opteron but under OS X on a number  
</span><br>
<span class="quotelev1">&gt; of Mac Book and Mac Book Pros, I get the following immediately on  
</span><br>
<span class="quotelev1">&gt; startup. This smells like a common problem but I could find  
</span><br>
<span class="quotelev1">&gt; anything relevant anywhere. Can anyone provide a hint or better yet  
</span><br>
<span class="quotelev1">&gt; a solution?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal EXC_BAD_ACCESS, Could not access memory.
</span><br>
<span class="quotelev1">&gt; Reason: KERN_PROTECTION_FAILURE at address: 0x0000000c
</span><br>
<span class="quotelev1">&gt; 0x04510412 in free ()
</span><br>
<span class="quotelev1">&gt; (gdb) where
</span><br>
<span class="quotelev1">&gt; #0  0x04510412 in free ()
</span><br>
<span class="quotelev1">&gt; #1  0x05d24f80 in opal_install_dirs_expand (input=0x5d2a6b0 &quot;$ 
</span><br>
<span class="quotelev1">&gt; {prefix}&quot;) at base/installdirs_base_expand.c:67
</span><br>
<span class="quotelev1">&gt; #2  0x05d24584 in opal_installdirs_base_open () at base/ 
</span><br>
<span class="quotelev1">&gt; installdirs_base_components.c:94
</span><br>
<span class="quotelev1">&gt; #3  0x05d01a40 in opal_init_util () at runtime/opal_init.c:150
</span><br>
<span class="quotelev1">&gt; #4  0x05d01b24 in opal_init () at runtime/opal_init.c:200
</span><br>
<span class="quotelev1">&gt; #5  0x051fa5cd in ompi_mpi_init (argc=1, argv=0xbfffde74,  
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0xbfffd930) at runtime/ompi_mpi_init.c:219
</span><br>
<span class="quotelev1">&gt; #6  0x0523a8db in MPI_Init (argc=0xbfffd980, argv=0xbfffde14) at  
</span><br>
<span class="quotelev1">&gt; init.c:71
</span><br>
<span class="quotelev1">&gt; #7  0x0005a03d in conrad::cp::MPIConnection::initMPI (argc=1,  
</span><br>
<span class="quotelev1">&gt; argv=@0xbfffde14) at mwcommon/MPIConnection.cc:83
</span><br>
<span class="quotelev1">&gt; #8  0x00004163 in main (argc=1, argv=0xbfffde74) at apps/cimager.cc: 
</span><br>
<span class="quotelev1">&gt; 155
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt; Tim Cornwell,  Australia Telescope National Facility, CSIRO
</span><br>
<span class="quotelev1">&gt; Location: Cnr Pembroke &amp; Vimiera Rds, Marsfield, NSW, 2122, AUSTRALIA
</span><br>
<span class="quotelev1">&gt; Post:     PO Box 76, Epping, NSW 1710, AUSTRALIA
</span><br>
<span class="quotelev1">&gt; Phone:    +61 2 9372 4261   Fax:  +61 2 9372 4450 or 4310
</span><br>
<span class="quotelev1">&gt; Mobile:  +61 4 3366 5399
</span><br>
<span class="quotelev1">&gt; Email:    Tim.Cornwell_at_[hidden]
</span><br>
<span class="quotelev1">&gt; URL:      <a href="http://www.atnf.csiro.au/people/tim.cornwell">http://www.atnf.csiro.au/people/tim.cornwell</a>
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; -----------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Previous message:</strong> <a href="3638.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3637.php">Tim Cornwell: "[OMPI users] Problems running openmpi under os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
<li><strong>Reply:</strong> <a href="3647.php">Tim Cornwell: "Re: [OMPI users] Problems running openmpi under os x"</a>
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
