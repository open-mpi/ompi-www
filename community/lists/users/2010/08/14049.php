<?
$subject_val = "Re: [OMPI users] A Problem with RAxML";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 16 18:41:56 2010" -->
<!-- isoreceived="20100816224156" -->
<!-- sent="Mon, 16 Aug 2010 18:40:16 -0400" -->
<!-- isosent="20100816224016" -->
<!-- name="Richard Walsh" -->
<!-- email="Richard.Walsh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] A Problem with RAxML" -->
<!-- id="5E9838FE224683419F586D9DF46A0E25B0498980BE_at_MBOX.FLAS.CSI.CUNY.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=M_=vK+umFcpp4sf50nM_3UD7Y2Z1EgUTMJj=o_at_mail.gmail.com" -->
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
<strong>From:</strong> Richard Walsh (<em>Richard.Walsh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-16 18:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14048.php">Ralph Castain: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>In reply to:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Gokhan,
<br>
<p>The following worked for me with OpenMPI 1.4.1 with the latest Intel compiler
<br>
(May release) although there have been reports that with full vectorization there
<br>
are some unexplained inflight failures:
<br>
<p>#
<br>
# Parallel Version
<br>
#
<br>
service0:/share/apps/raxml/7.0.4/build # make -f Makefile.MPI
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o axml.o axml.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o raxmlParsimony.o raxmlParsimony.c
<br>
mpicc -c -o rev_functions.o rev_functions.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o optimizeModel.o optimizeModel.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o multiple.o multiple.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o searchAlgo.o searchAlgo.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o topologies.o topologies.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o parsePartitions.o parsePartitions.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o treeIO.o treeIO.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o models.o models.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o bipartitionList.o bipartitionList.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o rapidBootstrap.o rapidBootstrap.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o evaluatePartialGeneric.o evaluatePartialGeneric.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o evaluateGeneric.o evaluateGeneric.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o newviewGeneric.o newviewGeneric.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o makenewzGeneric.o makenewzGeneric.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o evaluateGenericVector.o evaluateGenericVector.c
<br>
mpicc -O3 -DPARALLEL -fomit-frame-pointer -funroll-loops   -c -o categorizeGeneric.o categorizeGeneric.c
<br>
mpicc -o raxmlHPC-MPI axml.o raxmlParsimony.o rev_functions.o optimizeModel.o multiple.o searchAlgo.o topologies.o parsePartitions.o treeIO.o models.o bipartitionList.o rapidBootstrap.o evaluatePartialGeneric.o evaluateGeneric.o newviewGeneric.o makenewzGeneric.o  evaluateGenericVector.o categorizeGeneric.o  -lm
<br>
<p>The lastest PGI-built OpenMPI 1.4.1 release is said to behave correctly with the following
<br>
flags regardless of the level of optimization.  I have both versions installed.  Both compile
<br>
and link without error for me.  This is with and IB built OpenMPI.
<br>
<p>CC = /share/apps/openmpi-pgi/default/bin/mpicc
<br>
CFLAGS =  -O3 -DPARALLEL -Mnoframe -Munroll
<br>
<p>Hope this is useful ...
<br>
<p>rbw
<br>
<p>Richard Walsh
<br>
Parallel Applications and Systems Manager
<br>
CUNY HPC Center, Staten Island, NY
<br>
718-982-3319
<br>
612-382-4620
<br>
<p>Reason does give the heart pause;
<br>
As the heart gives reason fits.
<br>
<p>Yet, to live where reason always rules;
<br>
Is to kill one's heart with wits.
<br>
________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Gokhan Kir [gkir_at_[hidden]]
<br>
Sent: Monday, August 16, 2010 5:43 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] A Problem with RAxML
<br>
<p>Hi,
<br>
I am currently using RAxML 7.0, and recently I got a problem. Even though I Googled  it, I couldn't find a satisfying answer.
<br>
I got this message from BATCH_ERRORs file &quot; raxmlHPC-MPI: topologies.c:179: restoreTL: Assertion `n &gt;= 0 &amp;&amp; n &lt; rl-&gt;max' failed. &quot;
<br>
<p>Any help is appreciated,
<br>
<p>Thanks,
<br>
<p><pre>
--
Gokhan
Think green before you print this email.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14050.php">Richard Walsh: "[OMPI users] Does OpenMPI 1.4.1 support the MPI_IN_PLACE designation ..."</a>
<li><strong>Previous message:</strong> <a href="14048.php">Ralph Castain: "Re: [OMPI users] A Problem with RAxML"</a>
<li><strong>In reply to:</strong> <a href="14047.php">Gokhan Kir: "[OMPI users] A Problem with RAxML"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14051.php">Gokhan Kir: "Re: [OMPI users] A Problem with RAxML"</a>
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
