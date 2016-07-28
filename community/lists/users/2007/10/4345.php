<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 29 15:24:11 2007" -->
<!-- isoreceived="20071029192411" -->
<!-- sent="Mon, 29 Oct 2007 13:23:49 -0600" -->
<!-- isosent="20071029192349" -->
<!-- name="Damien Hocking" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MUMPS Linking Problems" -->
<!-- id="47263345.4050508_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="003901c81a5f$070718a0$0200a8c0_at_Timo" -->
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
<strong>From:</strong> Damien Hocking (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-29 15:23:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
<li><strong>In reply to:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This isn't a OpenMPI problem, it's a problem with the symbols from the 
<br>
Pord reordering library with Mumps.  The linker can't see the Pord 
<br>
symbols, which means you either didn't build the library, or you haven't 
<br>
linked it in.  I don't see it in your link command there.
<br>
<p>Damien
<br>
<p><p>Tim Reis wrote:
<br>
<span class="quotelev1">&gt; Dear Mailing list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to build my program that makes use of MUMPS but I keep 
</span><br>
<span class="quotelev1">&gt; getting the
</span><br>
<span class="quotelev1">&gt; following error messages:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x13b): In function `dmumps_pord':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `SPACE_ordering'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x209): In function `dmumps_pord':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `firstPostorder'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x2bd): In function `dmumps_pord':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `nextPostorder'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x2f8): In function `dmumps_pord':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `freeElimTree'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x4a4): In function `dmumps_pord_wnd':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `SPACE_ordering'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x577): In function `dmumps_pord_wnd':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `firstPostorder'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x623): In function `dmumps_pord_wnd':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `nextPostorder'
</span><br>
<span class="quotelev1">&gt; /snoopyhome/ucahhwi/MUMPS_4.5.4/lib/libdmumps.a(dmumps_orderings.o)
</span><br>
<span class="quotelev1">&gt; (.text+0x65e): In function `dmumps_pord_wnd':
</span><br>
<span class="quotelev1">&gt; : undefined reference to `freeElimTree'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The command line I'm using looks a little bit like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpif90 helentest.F link_to_MUMPS link_to_scalapack link_to_BLACS
</span><br>
<span class="quotelev1">&gt; link_to_lapack -o helentest
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help will be much appreciated.
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Tim
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4346.php">Neeraj Chourasia: "[OMPI users] OpenMP and OpenMPI Issue"</a>
<li><strong>Previous message:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
<li><strong>In reply to:</strong> <a href="4344.php">Tim Reis: "[OMPI users] MUMPS Linking Problems"</a>
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
