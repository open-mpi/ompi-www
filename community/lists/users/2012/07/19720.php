<?
$subject_val = "Re: [OMPI users] fortran program with integer kind=8 using openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 15:45:14 2012" -->
<!-- isoreceived="20120703194514" -->
<!-- sent="Tue, 3 Jul 2012 15:45:09 -0400" -->
<!-- isosent="20120703194509" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fortran program with integer kind=8 using openmpi" -->
<!-- id="F5E91454-6CA7-4AFE-B502-3F58D3FF8E8A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="0DA854E5D5F4C8428ABC1701AE2621CD02AFDD29E5EF_at_INRSEXCH02.AD.INRS.CA" -->
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
<strong>Date:</strong> 2012-07-03 15:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19721.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<li><strong>Previous message:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19710.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: I think you'll probably run into issues with MPI attributes (e.g., MPI_COMM_ATTR_SET / GET).
<br>
<p>I'll file a ticket about those...
<br>
<p><p>On Jul 3, 2012, at 3:29 PM, Secretan Yves wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I applied the patch of ticket #3148 to my version of openmpi  1.6 and it does the job  .... at least for me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks'  for the prompt fix.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yves Secretan
</span><br>
<span class="quotelev1">&gt; Yves.Secretan_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Avant d'imprimer, pensez &#224; l'environnement 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Message d'origine-----
</span><br>
<span class="quotelev1">&gt; De : users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Envoy&#233; : 2 juillet 2012 15:55
</span><br>
<span class="quotelev1">&gt; &#192; : Open MPI Users
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI users] fortran program with integer kind=8 using openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Huh.  That's weird.  I'll file a ticket.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I think compiling OMPI with -i8 worked at one time, but it's probably little-used/little-tested.  It may have grown some bit-rot over time (like this case).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 30, 2012, at 12:34 PM, Secretan Yves wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With openmpi compiled with Fortran default integer*8, 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_TYPE_2INTEGER seem to have an incorrect size. The attached Fortran 
</span><br>
<span class="quotelev2">&gt;&gt; program shows it,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When run on openmpi with integer*8
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER is                     8
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER4 is                     4
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER8 is                     8
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_2INTEGER is                     8           &lt;-- Should be 16
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When run on &quot;normal&quot; openmpi 
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER is            4
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER4 is            4
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_INTEGER8 is            8
</span><br>
<span class="quotelev2">&gt;&gt; Size of MPI_2INTEGER is            8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yves Secretan
</span><br>
<span class="quotelev2">&gt;&gt; Yves.Secretan_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Avant d'imprimer, pensez &#224; l'environnement 
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; De : users-bounces_at_[hidden] [users-bounces_at_[hidden]] de la 
</span><br>
<span class="quotelev2">&gt;&gt; part de William Au [au_wai_chung_at_[hidden]] Date d'envoi : 29 juin 
</span><br>
<span class="quotelev2">&gt;&gt; 2012 19:15 &#192; : users_at_[hidden] Objet : Re: [OMPI users] fortran 
</span><br>
<span class="quotelev2">&gt;&gt; program with integer kind=8 using openmpi
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My concern is how do the C side know fortran integer using 8 bytes?
</span><br>
<span class="quotelev2">&gt;&gt; My valgrind check show something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ==8482== Invalid read of size 8
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    at 0x5F4A50E: ompi_op_base_minloc_2integer (op_base_functions.c:631)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0xBF70DD1: ompi_coll_tuned_allreduce_intra_recursivedoubling (op.h:498)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x412CB4: main (my_cExample_client.c:80)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==  Address 0x7369608 is 0 bytes after a block of size 8 alloc'd
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    at 0x4A0610C: malloc (vg_replace_malloc.c:195)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0xBF709B9: ompi_coll_tuned_allreduce_intra_recursivedoubling (coll_tuned_allreduce.c:158)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x5F031CB: PMPI_Allreduce (pallreduce.c:105)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x62E2F22: PMPI_ALLREDUCE (pallreduce_f.c:77)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x5C8934: mumps_276_ (mumps_part9.F:4667)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x54D89A: dmumps_ (dmumps_part1.F:157)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x43D358: dmumps_f77_ (dmumps_part3.F:6651)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x41420C: dmumps_c (mumps_c.c:422)
</span><br>
<span class="quotelev2">&gt;&gt; ==8482==    by 0x412CB4: main (my_cExample_client.c:80)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The fortran side:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     INTEGER IN( 2 ), OUT( 2 )
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     CALL MPI_ALLREDUCE( IN, OUT, 1, MPI_2INTEGER, MPI_MINLOC,
</span><br>
<span class="quotelev2">&gt;&gt;    &amp;                    COMM, IERR)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The compiler options will take care of IN be INTEGER*8, but will it do 
</span><br>
<span class="quotelev2">&gt;&gt; the same for MPI_2INTEGER in the C side
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; William
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Date: Fri, 29 Jun 2012 07:03:18 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] fortran program with integer kind=8 using
</span><br>
<span class="quotelev2">&gt;&gt;       openmpi
</span><br>
<span class="quotelev2">&gt;&gt; To: &lt;warren_at_[hidden]&gt;, Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;6FFEA644-3F39-4B6E-ADD6-3721F485525F_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 28, 2012, at 8:37 PM, David Warren wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You should not have to recompile openmpi, but you do have to use the correct type. You can check the size of integers in your fortrana nd use MPI_INTEGER4 or MPI_INTEGER8 depending on what you get.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you configure ompi with -fdefault-integer-8, then OMPI will assume that Fortran integers are always 8 bytes, so be sure to also compile all of your MPI applications the same way.  Indeed, you may want to configure OMPI with something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure FCFLAGS=-fdefault-integer-8 FFLAGS=-fdefault-integer-8 \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-wrapper-fflags=-fdefault-integer-8 \
</span><br>
<span class="quotelev2">&gt;&gt;  --with-wrapper-fcflags=-fdefault-integer-8
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will add -fdefault-integer-8 to the mpif77 and mpif90 command lines automatically so that you *can't* compile without that flag.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Be aware that 8-byte Fortran integers *should work* in Open MPI, but it is probably not well tested.  You may well run into some issues; be sure to let us know if you run into bugs.  Sending small test programs that show the problem are usually the best way to help us identify/fix the precise problem.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in gfortran use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integer i
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if(sizeof(i) .eq. 8) then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpi_int_type=MPI_INTEGER8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; else
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   mpi_int_type=MPI_INTEGER4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; endif
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't think that this should be necessary -- as long as you configured OMPI with the 8-byte-integer setting, then MPI_INTEGER should represent an 8 byte integer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;type_size.for&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19721.php">William Au: "[OMPI users] fortran program with integer kind=8 using openmpi&#254;"</a>
<li><strong>Previous message:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<li><strong>In reply to:</strong> <a href="19719.php">Secretan Yves: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19710.php">George Bosilca: "Re: [OMPI users] fortran program with integer kind=8 using openmpi"</a>
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
