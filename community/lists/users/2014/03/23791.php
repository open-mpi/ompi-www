<?
$subject_val = "Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 11 05:55:24 2014" -->
<!-- isoreceived="20140311095524" -->
<!-- sent="Tue, 11 Mar 2014 13:55:02 +0400" -->
<!-- isosent="20140311095502" -->
<!-- name="Alex A. Granovsky" -->
<!-- email="gran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode" -->
<!-- id="C6D7EDDED9D140788C36255FDF0ACB22_at_chem.msu.ru" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0D649A5DA694234CA6A7E3DBDCCDB8D9557069D2_at_rexma.intranet.epfl.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems with computation-communication overlap innon-blocking mode<br>
<strong>From:</strong> Alex A. Granovsky (<em>gran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-11 05:55:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23790.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23783.php">Velickovic Nikola: "[OMPI users] Problems with computation-communication overlap in non-blocking mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Nikola,
<br>
<p>you can check this presentation:
<br>
<p><a href="http://classic.chem.msu.su/gran/gamess/mp2par.pdf">http://classic.chem.msu.su/gran/gamess/mp2par.pdf</a>
<br>
<p>for the solution we have been using with Firefly (formerly PC GAMESS) for 
<br>
more than last ten years.
<br>
<p>Hope this helps.
<br>
<p>Kind regards,
<br>
Alex Granovsky
<br>
<p><p><p>-----Original Message----- 
<br>
From: Velickovic Nikola
<br>
Sent: Friday, March 07, 2014 6:49 PM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Problems with computation-communication overlap 
<br>
innon-blocking mode
<br>
<p>Dear all,
<br>
<p>I have a simple MPI program with two processes using non-blocking 
<br>
communication illustrated bellow:
<br>
<p>process 0:         process 1:
<br>
<p>MPI_Isend          MPI_Irecv
<br>
<p>compute stage  compute stage
<br>
<p>MPI_Wait           MPI_Wait
<br>
<p>Actual communication is performed by offloading it to another thread, or 
<br>
using DMA (KNEM module is used for this).
<br>
Ideally what should happen is that process 0 issues a non-blocking send, 
<br>
process 1 receives the data
<br>
and in the meantime (in parallel) the CPU cores where the processes run are 
<br>
doing the compute stage.
<br>
When compute stage is completed calling MPI_Wait wraps up the communication.
<br>
<p>When I profile my application it turns out that actual communication is 
<br>
initiated with MPI_Wait (significant amount of time is spent there) and 
<br>
hence disables overlapping
<br>
communication and computation since MPI_Wait is called after the compute 
<br>
stage.
<br>
Computation in my test case takes more time than communication so MPI_Wait 
<br>
should not be consuming significant amount of time since the communication 
<br>
should be over by then.
<br>
<p>This I confirmed also by using MPI_Test instead of MPI_Wait.
<br>
MPI_Test has the same effect as MPI_Wait (to the best of my knowledge) but 
<br>
is non-blocking.
<br>
When placing MPI_Test strategically in the compute stage it initiates the 
<br>
communication and a certain communication-computation overlap is achieved.
<br>
<p>Could you please shed some light for me if I am doing something wrong with 
<br>
the library?
<br>
Is it the way it should behave (MPI_Wait initiates the actual transfer)?
<br>
How to achieve communication-computation overlap?
<br>
<p><p>Best,
<br>
Nikola
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23792.php">raha khalili: "[OMPI users] ssh error"</a>
<li><strong>Previous message:</strong> <a href="23790.php">Saliya Ekanayake: "Re: [OMPI users] SIGSEV when running OMPI Java binding"</a>
<li><strong>In reply to:</strong> <a href="23783.php">Velickovic Nikola: "[OMPI users] Problems with computation-communication overlap in non-blocking mode"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23796.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problems with computation-communication overlap in	non-blocking mode"</a>
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
