<?
$subject_val = "Re: [OMPI users] Openmpi SGE and BLACS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 08:21:14 2012" -->
<!-- isoreceived="20120113132114" -->
<!-- sent="Fri, 13 Jan 2012 08:21:09 -0500" -->
<!-- isosent="20120113132109" -->
<!-- name="TERRY DONTJE" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi SGE and BLACS" -->
<!-- id="4F102FC5.3070406_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1326460321.20517.YahooMailNeo_at_web28507.mail.ukl.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi SGE and BLACS<br>
<strong>From:</strong> TERRY DONTJE (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 08:21:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Reply:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do you have a stack of where exactly things are seg faulting in 
<br>
blacs_pinfo?
<br>
<p>--td
<br>
<p>On 1/13/2012 8:12 AM, Conn ORourke wrote:
<br>
<span class="quotelev1">&gt; Dear Openmpi Users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am reserving several processors with SGE upon which I want to run a 
</span><br>
<span class="quotelev1">&gt; number of openmpi jobs, all of which individually (and combined) use 
</span><br>
<span class="quotelev1">&gt; less than the reserved number of processors. The code I am using uses 
</span><br>
<span class="quotelev1">&gt; BLACS, and when blacs_pinfo is called I get a seg fault. If the code 
</span><br>
<span class="quotelev1">&gt; doesn't call blacs_pinfo it runs fine being submitted in this manner. 
</span><br>
<span class="quotelev1">&gt; blacs_pinfo simply returns the number of available processors, so I 
</span><br>
<span class="quotelev1">&gt; suspect this is an issue with SGE and openmpi and the requested node 
</span><br>
<span class="quotelev1">&gt; number being different to that given to mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can anyone explain why this would happen with openmpi jobs using 
</span><br>
<span class="quotelev1">&gt; BLACS  on the SGE? And suggest maybe a way around it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Many thanks
</span><br>
<span class="quotelev1">&gt; Conn
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; example submission script:
</span><br>
<span class="quotelev1">&gt; |#!/bin/bash -f -l
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #$ -N test
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -l vf=1800M
</span><br>
<span class="quotelev1">&gt; #$ -pe ib-ompi 12
</span><br>
<span class="quotelev1">&gt; #$ -q infiniband.q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      BIN=~/bin/program
</span><br>
<span class="quotelev1">&gt;      for  iin  XPOL,YPOL,ZPOL;  do
</span><br>
<span class="quotelev1">&gt;         mkdir ${TMPDIR}/4ZP;
</span><br>
<span class="quotelev1">&gt;         mkdir ${TMPDIR}/4ZP/$i;
</span><br>
<span class="quotelev1">&gt;         cp./4ZP/$i/*  ${TMPDIR}/4ZP/$i;
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      cd ${TMPDIR}/4ZP/XPOL;
</span><br>
<span class="quotelev1">&gt;      mpirun-np4  -machinefile ${TMPDIR}/machines $BIN&gt;  output&amp;
</span><br>
<span class="quotelev1">&gt;      cd ${TMPDIR}/4ZP/YPOL;
</span><br>
<span class="quotelev1">&gt;      mpirun-np4  -machinefile ${TMPDIR}/machines $BIN&gt;  output&amp;
</span><br>
<span class="quotelev1">&gt;      cd ${TMPDIR}/4ZP/ZPOL;
</span><br>
<span class="quotelev1">&gt;      mpirun-np4  -machinefile ${TMPDIR}/machines $BIN&gt;  output;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      for  iin    XPOL YPOL ZPOL;  do
</span><br>
<span class="quotelev1">&gt;       cp ${TMPDIR}/4ZP/$i/*  ${HOME}/4ZP/$i;
</span><br>
<span class="quotelev1">&gt;      done
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; blacs_pinfo.c:
</span><br>
<span class="quotelev1">&gt; ||#include &quot;Bdef.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if (INTFACE == C_CALL)
</span><br>
<span class="quotelev1">&gt; voidCblacs_pinfo(int*mypnum,  int*nprocs)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt; F_VOID_FUNC blacs_pinfo_(int*mypnum,  int*nprocs)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     int ierr;
</span><br>
<span class="quotelev1">&gt;     extern int BI_Iam,  BI_Np;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;   *  If  this is our first call,  will need toset  up some stuff
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;     if  (BI_F77_MPI_COMM_WORLD==  NULL)
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt; /*
</span><br>
<span class="quotelev1">&gt;   *      The  BLACS always call f77's mpi_init.  If the user is using C, he should
</span><br>
<span class="quotelev1">&gt;   *    explicitly call MPI_Init . . .
</span><br>
<span class="quotelev1">&gt;   */
</span><br>
<span class="quotelev1">&gt;        MPI_Initialized(nprocs);
</span><br>
<span class="quotelev1">&gt; #ifdef MainInF77
</span><br>
<span class="quotelev1">&gt;        if (!(*nprocs)) bi_f77_init_();
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;        if (!(*nprocs))
</span><br>
<span class="quotelev1">&gt;           BI_BlacsErr(-1, -1, __FILE__,
</span><br>
<span class="quotelev1">&gt;              &quot;Users with C main programs must explicitly call MPI_Init&quot;);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;        BI_F77_MPI_COMM_WORLD = (int *) malloc(sizeof(int));
</span><br>
<span class="quotelev1">&gt; #ifdef UseF77Mpi
</span><br>
<span class="quotelev1">&gt;        BI_F77_MPI_CONSTANTS = (int *)
</span><br>
<span class="quotelev1">&gt;   malloc(23*sizeof(int));
</span><br>
<span class="quotelev1">&gt;        ierr = 1;
</span><br>
<span class="quotelev1">&gt;        bi_f77_get_constants_(BI_F77_MPI_COMM_WORLD,&amp;ierr, BI_F77_MPI_CONSTANTS);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;        ierr = 0;
</span><br>
<span class="quotelev1">&gt;        bi_f77_get_constants_(BI_F77_MPI_COMM_WORLD,&amp;ierr, nprocs);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;        BI_MPI_Comm_size(BI_MPI_COMM_WORLD,&amp;BI_Np, ierr);
</span><br>
<span class="quotelev1">&gt;        BI_MPI_Comm_rank(BI_MPI_COMM_WORLD,&amp;BI_Iam, ierr);
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     *mypnum = BI_Iam;
</span><br>
<span class="quotelev1">&gt;     *nprocs = BI_Np;
</span><br>
<span class="quotelev1">&gt; }|
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
<p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18160/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18160/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18161.php">Prentice Bisbal: "Re: [OMPI users] ompi + bash + GE + modules"</a>
<li><strong>Previous message:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>In reply to:</strong> <a href="18159.php">Conn ORourke: "[OMPI users] Openmpi SGE and BLACS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Reply:</strong> <a href="18164.php">Conn ORourke: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
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
