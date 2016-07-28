<?
$subject_val = "[OMPI users] RE : fortran program with integer kind=8 using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 30 12:34:32 2012" -->
<!-- isoreceived="20120630163432" -->
<!-- sent="Sat, 30 Jun 2012 12:34:23 -0400" -->
<!-- isosent="20120630163423" -->
<!-- name="Secretan Yves" -->
<!-- email="Yves.Secretan_at_[hidden]" -->
<!-- subject="[OMPI users] RE : fortran program with integer kind=8 using openmpi" -->
<!-- id="0DA854E5D5F4C8428ABC1701AE2621CD02AFDD6A713F_at_INRSEXCH02.AD.INRS.CA" -->
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
<strong>Subject:</strong> [OMPI users] RE : fortran program with integer kind=8 using openmpi<br>
<strong>From:</strong> Secretan Yves (<em>Yves.Secretan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-30 12:34:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well,
<br>
<p>With openmpi compiled with Fortran default integer*8, MPI_TYPE_2INTEGER seem to have an incorrect size. The attached Fortran program shows it,  
<br>
<p>When run on openmpi with integer*8
<br>
&nbsp;Size of MPI_INTEGER is                     8
<br>
&nbsp;Size of MPI_INTEGER4 is                     4
<br>
&nbsp;Size of MPI_INTEGER8 is                     8
<br>
&nbsp;Size of MPI_2INTEGER is                     8           &lt;-- Should be 16
<br>
<p>When run on &quot;normal&quot; openmpi 
<br>
&nbsp;Size of MPI_INTEGER is            4
<br>
&nbsp;Size of MPI_INTEGER4 is            4
<br>
&nbsp;Size of MPI_INTEGER8 is            8
<br>
&nbsp;Size of MPI_2INTEGER is            8
<br>
<p><p>Yves Secretan
<br>
Yves.Secretan_at_[hidden]
<br>
<p>Avant d'imprimer, pensez &#224; l'environnement
<br>
________________________________________
<br>
De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la part de William Au [au_wai_chung_at_[hidden]]
<br>
Date d'envoi : 29 juin 2012 19:15
<br>
&#192; : users_at_[hidden]
<br>
Objet : Re: [OMPI users] fortran program with integer kind=8 using openmpi
<br>
<p>My concern is how do the C side know fortran integer using 8 bytes?
<br>
My valgrind check show something like:
<br>
<p>==8482== Invalid read of size 8
<br>
==8482==    at 0x5F4A50E: ompi_op_base_minloc_2integer (op_base_functions.c:631)
<br>
==8482==    by 0xBF70DD1: ompi_coll_tuned_allreduce_intra_recursivedoubling (op.h:498)
<br>
==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
<br>
==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
<br>
==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
<br>
==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
<br>
==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
<br>
==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
<br>
==8482==    by 0x412CB4: main (my_cExample_client.c:80)
<br>
==8482==  Address 0x7369608 is 0 bytes after a block of size 8 alloc'd
<br>
==8482==    at 0x4A0610C: malloc (vg_replace_malloc.c:195)
<br>
==8482==    by 0xBF709B9: ompi_coll_tuned_allreduce_intra_recursivedoubling (coll_tuned_allreduce.c:158)
<br>
==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
<br>
==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
<br>
==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
<br>
==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
<br>
==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
<br>
==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
<br>
==8482==    by 0x412CB4: main (my_cExample_client.c:80)
<br>
<p><p>The fortran side:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER IN( 2 ), OUT( 2 )
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ALLREDUCE( IN, OUT, 1, MPI_2INTEGER, MPI_MINLOC,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;                    COMM, IERR)
<br>
<p>The compiler options will take care of IN be INTEGER*8, but will
<br>
it do the same for MPI_2INTEGER in the C side
<br>
<p>Thanks.
<br>
<p>Regards,
<br>
<p>William
<br>
<p><p><p>Date: Fri, 29 Jun 2012 07:03:18 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] fortran program with integer kind=8 using
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;openmpi
<br>
To: &lt;warren_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;6FFEA644-3F39-4B6E-ADD6-3721F485525F_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=iso-8859-1
<br>
<p>On Jun 28, 2012, at 8:37 PM, David Warren wrote:
<br>
<p><span class="quotelev1">&gt; You should not have to recompile openmpi, but you do have to use the correct type. You can check the size of integers in your fortrana nd use MPI_INTEGER4 or MPI_INTEGER8 depending on what you get.
</span><br>
<p>If you configure ompi with -fdefault-integer-8, then OMPI will assume that Fortran integers are always 8 bytes, so be sure to also compile all of your MPI applications the same way.  Indeed, you may want to configure OMPI with something like:
<br>
<p>./configure FCFLAGS=-fdefault-integer-8 FFLAGS=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fflags=-fdefault-integer-8 \
<br>
&nbsp;&nbsp;&nbsp;--with-wrapper-fcflags=-fdefault-integer-8
<br>
<p>This will add -fdefault-integer-8 to the mpif77 and mpif90 command lines automatically so that you *can't* compile without that flag.
<br>
<p>Be aware that 8-byte Fortran integers *should work* in Open MPI, but it is probably not well tested.  You may well run into some issues; be sure to let us know if you run into bugs.  Sending small test programs that show the problem are usually the best way to help us identify/fix the precise problem.
<br>
<p><span class="quotelev1">&gt; in gfortran use
</span><br>
<span class="quotelev1">&gt; integer i
</span><br>
<span class="quotelev1">&gt; if(sizeof(i) .eq. 8) then
</span><br>
<span class="quotelev1">&gt;     mpi_int_type=MPI_INTEGER8
</span><br>
<span class="quotelev1">&gt; else
</span><br>
<span class="quotelev1">&gt;     mpi_int_type=MPI_INTEGER4
</span><br>
<span class="quotelev1">&gt; endif
</span><br>
<p>I don't think that this should be necessary -- as long as you configured OMPI with the 8-byte-integer setting, then MPI_INTEGER should represent an 8 byte integer.
<br>
<p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>

</pre>
<hr>
<ul>
<li>text/x-fortran attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19718/type_size.for">type_size.for</a>
</ul>
<!-- attachment="type_size.for" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19719.php">Sébastien Boisvert: "Re: [OMPI users] Performance scaled messaging and random crashes"</a>
<li><strong>Previous message:</strong> <a href="19717.php">Ralph Castain: "Re: [OMPI users] Cannot build openmpi-1.6 on"</a>
<li><strong>In reply to:</strong> <a href="19715.php">William Au: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/07/19723.php">Jeff Squyres: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
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
