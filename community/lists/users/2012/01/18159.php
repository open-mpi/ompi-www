<?
$subject_val = "[OMPI users] Openmpi SGE and BLACS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 13 08:12:07 2012" -->
<!-- isoreceived="20120113131207" -->
<!-- sent="Fri, 13 Jan 2012 13:12:01 +0000 (GMT)" -->
<!-- isosent="20120113131201" -->
<!-- name="Conn ORourke" -->
<!-- email="conn.orourke_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi SGE and BLACS" -->
<!-- id="1326460321.20517.YahooMailNeo_at_web28507.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi SGE and BLACS<br>
<strong>From:</strong> Conn ORourke (<em>conn.orourke_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-13 08:12:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Reply:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Openmpi Users,

I am reserving several processors with SGE upon which I want to run a number of openmpi jobs, all of which individually (and combined) use 
less than the reserved number of processors. The code I am using uses 
BLACS, and when blacs_pinfo is called I get a seg fault. If the code doesn't call blacs_pinfo it runs fine being submitted in this manner. blacs_pinfo simply returns the number of available processors, so I suspect this is an issue with SGE and openmpi and the requested node number being different to that given to mpirun.


Can anyone explain why this would happen with openmpi jobs using BLACS&#160; on the SGE? And suggest maybe a way around it?


Many thanks

Conn


example submission script:
#!/bin/bash -f -l
#$ -V 
#$ -N test 
#$ -S /bin/bash
#$ -cwd
#$ -l vf=1800M
#$ -pe ib-ompi 12 
#$ -q infiniband.q


&#160; &#160; BIN=~/bin/program
&#160; &#160; fori inXPOL,YPOL,ZPOL;do
&#160; &#160; &#160; &#160;mkdir ${TMPDIR}/4ZP;
&#160; &#160; &#160; &#160;mkdir ${TMPDIR}/4ZP/$i;
&#160; &#160; &#160; &#160;cp ./4ZP/$i/*${TMPDIR}/4ZP/$i;
&#160; &#160; done

&#160; &#160; cd ${TMPDIR}/4ZP/XPOL;
&#160; &#160; mpirun -np 4-machinefile ${TMPDIR}/machines $BIN &gt;output &amp;
&#160; &#160; cd ${TMPDIR}/4ZP/YPOL;
&#160; &#160; mpirun -np 4-machinefile ${TMPDIR}/machines $BIN &gt;output &amp;
&#160; &#160; cd ${TMPDIR}/4ZP/ZPOL;
&#160; &#160; mpirun -np 4-machinefile ${TMPDIR}/machines $BIN &gt;output ;

&#160; &#160; fori in&#160;XPOL YPOL ZPOL &#160;;do
&#160; &#160; &#160;cp ${TMPDIR}/4ZP/$i/*${HOME}/4ZP/$i;
&#160; &#160; done


blacs_pinfo.c:
#include &quot;Bdef.h&quot;

#if (INTFACE == C_CALL)
void Cblacs_pinfo(int *mypnum,int *nprocs)
#else
F_VOID_FUNC blacs_pinfo_(int *mypnum,int *nprocs)
#endif
{
&#160; &#160;int ierr;
&#160; &#160;extern int BI_Iam,BI_Np;

/*
&#160;*Ifthis is our first call,will need to setup some stuff
&#160;*/
&#160; &#160;if(BI_F77_MPI_COMM_WORLD ==NULL)
&#160; &#160;{
/*
&#160;*&#160; &#160;TheBLACS always call f77's mpi_init. &#160;If the user is using C, he should
&#160;* &#160; &#160;explicitly call MPI_Init . . .
&#160;*/
&#160; &#160; &#160; MPI_Initialized(nprocs);
#ifdef MainInF77
&#160; &#160; &#160; if (!(*nprocs)) bi_f77_init_();
#else
&#160; &#160; &#160; if (!(*nprocs))
&#160; &#160; &#160; &#160; &#160;BI_BlacsErr(-1, -1, __FILE__,
&#160; &#160; &#160; &#160; &#160; &#160; &quot;Users with C main programs must explicitly call MPI_Init&quot;);
#endif
&#160; &#160; &#160; BI_F77_MPI_COMM_WORLD = (int *) malloc(sizeof(int));
#ifdef UseF77Mpi
&#160; &#160; &#160; BI_F77_MPI_CONSTANTS = (int *) malloc(23*sizeof(int));
&#160; &#160; &#160; ierr = 1;
&#160; &#160; &#160; bi_f77_get_constants_(BI_F77_MPI_COMM_WORLD, &amp;ierr, BI_F77_MPI_CONSTANTS);
#else
&#160; &#160; &#160; ierr = 0;
&#160; &#160; &#160; bi_f77_get_constants_(BI_F77_MPI_COMM_WORLD, &amp;ierr, nprocs);
#endif
&#160; &#160; &#160; BI_MPI_Comm_size(BI_MPI_COMM_WORLD, &amp;BI_Np, ierr);
&#160; &#160; &#160; BI_MPI_Comm_rank(BI_MPI_COMM_WORLD, &amp;BI_Iam, ierr);
&#160; &#160;}
&#160; &#160;*mypnum = BI_Iam;
&#160; &#160;*nprocs = BI_Np;
}

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18159/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Previous message:</strong> <a href="18158.php">Gabriele Fatigati: "[OMPI users] MPI_AllGather null terminator character"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
<li><strong>Reply:</strong> <a href="18160.php">TERRY DONTJE: "Re: [OMPI users] Openmpi SGE and BLACS"</a>
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
