<?
$subject_val = "Re: [OMPI users] A Problem with RAxML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 19:02:02 2010" -->
<!-- isoreceived="20100816230202" -->
<!-- sent="Mon, 16 Aug 2010 18:01:57 -0500" -->
<!-- isosent="20100816230157" -->
<!-- name="Gokhan Kir" -->
<!-- email="gkir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A Problem with RAxML" -->
<!-- id="AANLkTik5T6jTUJgL0EYrN4qnK3SUvU7RBWKcG_y3Mquf_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="21317_1281998537_o7GMgElF030370_5E9838FE224683419F586D9DF46A0E25B0498980BE_at_MBOX.FLAS.CSI.CUNY.EDU" -->
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
<strong>Subject:</strong> Re: [OMPI users] A Problem with RAxML<br>
<strong>From:</strong> Gokhan Kir (<em>gkir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 19:01:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Richard,
<br>
Actually I am not sure how to try the way you told in RAxML. I don't have
<br>
too much experience with these programs.
<br>
<p>Thanks again.
<br>
<p>On Mon, Aug 16, 2010 at 5:40 PM, Richard Walsh
<br>
&lt;Richard.Walsh_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hey Gokhan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following worked for me with OpenMPI 1.4.1 with the latest Intel
</span><br>
<span class="quotelev1">&gt; compiler
</span><br>
<span class="quotelev1">&gt; (May release) although there have been reports that with full vectorization
</span><br>
<span class="quotelev1">&gt; there
</span><br>
<span class="quotelev1">&gt; are some unexplained inflight failures:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Parallel Version
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; service0:/share/apps/raxml/7.0.4/build # make -f Makefile.MPI
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o axml.o
</span><br>
<span class="quotelev1">&gt; axml.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; raxmlParsimony.o raxmlParsimony.c
</span><br>
<span class="quotelev1">&gt; mpicc -c -o rev_functions.o rev_functions.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; optimizeModel.o optimizeModel.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o multiple.o
</span><br>
<span class="quotelev1">&gt; multiple.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; searchAlgo.o searchAlgo.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; topologies.o topologies.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; parsePartitions.o parsePartitions.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o treeIO.o
</span><br>
<span class="quotelev1">&gt; treeIO.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o models.o
</span><br>
<span class="quotelev1">&gt; models.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; bipartitionList.o bipartitionList.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; rapidBootstrap.o rapidBootstrap.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; evaluatePartialGeneric.o evaluatePartialGeneric.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; evaluateGeneric.o evaluateGeneric.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; newviewGeneric.o newviewGeneric.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; makenewzGeneric.o makenewzGeneric.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; evaluateGenericVector.o evaluateGenericVector.c
</span><br>
<span class="quotelev1">&gt; mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o
</span><br>
<span class="quotelev1">&gt; categorizeGeneric.o categorizeGeneric.c
</span><br>
<span class="quotelev1">&gt; mpicc -o raxmlHPC-MPI axml.o raxmlParsimony.o rev_functions.o
</span><br>
<span class="quotelev1">&gt; optimizeModel.o multiple.o searchAlgo.o topologies.o parsePartitions.o
</span><br>
<span class="quotelev1">&gt; treeIO.o models.o bipartitionList.o rapidBootstrap.o
</span><br>
<span class="quotelev1">&gt; evaluatePartialGeneric.o evaluateGeneric.o newviewGeneric.o
</span><br>
<span class="quotelev1">&gt; makenewzGeneric.o  evaluateGenericVector.o categorizeGeneric.o  -lm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The lastest PGI-built OpenMPI 1.4.1 release is said to behave correctly
</span><br>
<span class="quotelev1">&gt; with the following
</span><br>
<span class="quotelev1">&gt; flags regardless of the level of optimization.  I have both versions
</span><br>
<span class="quotelev1">&gt; installed.  Both compile
</span><br>
<span class="quotelev1">&gt; and link without error for me.  This is with and IB built OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CC = /share/apps/openmpi-pgi/default/bin/mpicc
</span><br>
<span class="quotelev1">&gt; CFLAGS =  -O3 -DPARALLEL -Mnoframe -Munroll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this is useful ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rbw
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Walsh
</span><br>
<span class="quotelev1">&gt; Parallel Applications and Systems Manager
</span><br>
<span class="quotelev1">&gt; CUNY HPC Center, Staten Island, NY
</span><br>
<span class="quotelev1">&gt; 718-982-3319
</span><br>
<span class="quotelev1">&gt; 612-382-4620
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Reason does give the heart pause;
</span><br>
<span class="quotelev1">&gt; As the heart gives reason fits.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yet, to live where reason always rules;
</span><br>
<span class="quotelev1">&gt; Is to kill one's heart with wits.
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of
</span><br>
<span class="quotelev1">&gt; Gokhan Kir [gkir_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 16, 2010 5:43 PM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] A Problem with RAxML
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I am currently using RAxML 7.0, and recently I got a problem. Even though I
</span><br>
<span class="quotelev1">&gt; Googled  it, I couldn't find a satisfying answer.
</span><br>
<span class="quotelev1">&gt; I got this message from BATCH_ERRORs file &quot; raxmlHPC-MPI: topologies.c:179:
</span><br>
<span class="quotelev1">&gt; restoreTL: Assertion `n &gt;= 0 &amp;&amp; n &lt; rl-&gt;max' failed. &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is appreciated,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Gokhan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Think green before you print this email.
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
<p><p><p><pre>
-- 
Gokhan Kir
Graduate Student
Program of Interdepartmental Genetics
Department of Genetics,Development and Cell Biology
2188 Molecular Biology Building
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14052.php">Jeff Squyres: "Re: [OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Maybe in reply to:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
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
