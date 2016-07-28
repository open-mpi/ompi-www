<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  1 07:38:46 2012" -->
<!-- isoreceived="20120701113846" -->
<!-- sent="Sun, 1 Jul 2012 12:38:37 +0100" -->
<!-- isosent="20120701113837" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi" -->
<!-- id="528607C2-D553-4FAC-9EF9-F20F34EEA323_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="SNT134-W2128036BE2177EAE672F5BD3E50_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] fortran program with integer kind=8 using openmpi<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-01 07:38:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19720.php">S&#233;bastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Based on the sizes reported by configure (in the opal_config.h file), we map the Fortran types to C types at runtime. Thus, if there is an identical C type (and this is the case for all integers), all Fortan types will have as a backend the corresponding int type.
<br>
<p>Can you send your opal_config.h and config.log please.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Jun 30, 2012, at 00:15 , William Au wrote:
<br>
<p><span class="quotelev1">&gt; My concern is how do the C side know fortran integer using 8 bytes?
</span><br>
<span class="quotelev1">&gt; My valgrind check show something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==8482== Invalid read of size 8
</span><br>
<span class="quotelev1">&gt; ==8482==    at 0x5F4A50E: ompi_op_base_minloc_2integer (op_base_functions.c:631)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0xBF70DD1: ompi_coll_tuned_allreduce_intra_recursivedoubling (op.h:498)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x412CB4: main (my_cExample_client.c:80)
</span><br>
<span class="quotelev1">&gt; ==8482==  Address 0x7369608 is 0 bytes after a block of size 8 alloc'd
</span><br>
<span class="quotelev1">&gt; ==8482==    at 0x4A0610C: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0xBF709B9: ompi_coll_tuned_allreduce_intra_recursivedoubling (coll_tuned_allreduce.c:158)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
</span><br>
<span class="quotelev1">&gt; ==8482==    by 0x412CB4: main (my_cExample_client.c:80)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fortran side:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       INTEGER IN( 2 ), OUT( 2 )
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;       CALL MPI_ALLREDUCE( IN, OUT, 1, MPI_2INTEGER, MPI_MINLOC,
</span><br>
<span class="quotelev1">&gt;      &amp;                    COMM, IERR)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compiler options will take care of IN be INTEGER*8, but will
</span><br>
<span class="quotelev1">&gt; it do the same for MPI_2INTEGER in the C side
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; William
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Date: Fri, 29 Jun 2012 07:03:18 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] fortran program with integer kind=8 using
</span><br>
<span class="quotelev1">&gt; 	openmpi
</span><br>
<span class="quotelev1">&gt; To: &lt;warren_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;6FFEA644-3F39-4B6E-ADD6-3721F485525F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Jun 28, 2012, at 8:37 PM, David Warren wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; You should not have to recompile openmpi, but you do have to use the correct type. You can check the size of integers in your fortrana nd use MPI_INTEGER4 or MPI_INTEGER8 depending on what you get.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; If you configure ompi with -fdefault-integer-8, then OMPI will assume that Fortran integers are always 8 bytes, so be sure to also compile all of your MPI applications the same way.  Indeed, you may want to configure OMPI with something like:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; ./configure FCFLAGS=-fdefault-integer-8 FFLAGS=-fdefault-integer-8 \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-fflags=-fdefault-integer-8 \
</span><br>
<span class="quotelev1">&gt;    --with-wrapper-fcflags=-fdefault-integer-8
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This will add -fdefault-integer-8 to the mpif77 and mpif90 command lines automatically so that you *can't* compile without that flag.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Be aware that 8-byte Fortran integers *should work* in Open MPI, but it is probably not well tested.  You may well run into some issues; be sure to let us know if you run into bugs.  Sending small test programs that show the problem are usually the best way to help us identify/fix the precise problem.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev2">&gt; &gt; in gfortran use
</span><br>
<span class="quotelev2">&gt; &gt; integer i
</span><br>
<span class="quotelev2">&gt; &gt; if(sizeof(i) .eq. 8) then
</span><br>
<span class="quotelev2">&gt; &gt;     mpi_int_type=MPI_INTEGER8
</span><br>
<span class="quotelev2">&gt; &gt; else
</span><br>
<span class="quotelev2">&gt; &gt;     mpi_int_type=MPI_INTEGER4
</span><br>
<span class="quotelev2">&gt; &gt; endif
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I don't think that this should be necessary -- as long as you configured OMPI with the 8-byte-integer setting, then MPI_INTEGER should represent an 8 byte integer.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19721/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19722.php">John R. Cary: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19720.php">S&#233;bastien Boisvert: "[OMPI users] About the Open-MPI point-to-point messaging layers"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/06/19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
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
