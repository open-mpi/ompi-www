<?
$subject_val = "[OMPI users] Onesided + derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 10 18:08:20 2008" -->
<!-- isoreceived="20081210230820" -->
<!-- sent="Thu, 11 Dec 2008 00:07:55 +0100" -->
<!-- isosent="20081210230755" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="[OMPI users] Onesided + derived datatypes" -->
<!-- id="49404BCB.4000704_at_web.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Onesided + derived datatypes<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-10 18:07:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>Previous message:</strong> <a href="7501.php">Jeff Squyres: "[OMPI users] Open MPI interview on FLOSS Weekly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Maybe reply:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Maybe reply:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi List,
<br>
<p>I have a MPI program which uses one sided communication with derived
<br>
datatypes (MPI_Type_create_indexed_block). I developed the code with
<br>
MPICH2 and unfortunately didn't thought about trying it out with
<br>
OpenMPI. Now that I'm &quot;porting&quot; the Application to OpenMPI I'm facing
<br>
some problems. On the most machines I get an SIGSEGV in MPI_Win_fence,
<br>
sometimes an invalid datatype shows up. I ran the program in Valgrind
<br>
and didn't get anything valuable. Since I can't see a reason for this
<br>
problem (at least if I understand the standard correctly), I wrote the
<br>
attached testprogram.
<br>
<p>Here are my experiences:
<br>
<p>* If I compile without ONESIDED defined, everything works and V1 and V2
<br>
give the same results
<br>
* If I compile with ONESIDED and V2 defined (MPI_Type_contiguous) it works.
<br>
* ONESIDED + V1 + O2: No errors but obviously nothing is send? (Am I in
<br>
assuming that V1+O2 and V2 should be equivalent?)
<br>
* ONESIDED + V1 + O1:
<br>
[m02:03115] *** An error occurred in MPI_Put
<br>
[m02:03115] *** on win
<br>
[m02:03115] *** MPI_ERR_TYPE: invalid datatype
<br>
[m02:03115] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
<p>I didn't get a segfault as in the &quot;real life example&quot; but if ompitest.cc
<br>
is correct it means that OpenMPI is buggy when it comes to onesided
<br>
communication and (some) derived datatypes, so that it is probably not
<br>
of problem in my code.
<br>
<p>I'm using OpenMPI-1.2.8 with the newest gcc 4.3.2 but the same behaviour
<br>
can be be seen with gcc-3.3.1 and intel 10.1.
<br>
<p>Please correct me if ompitest.cc contains errors. Otherwise I would be
<br>
glad to hear how I should report these problems to the develepors (if
<br>
they don't read this).
<br>
<p>Thanks + best regards
<br>
<p>Dorian
<br>
<p><p><p><p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7502/ompitest.tar.gz">ompitest.tar.gz</a>
</ul>
<!-- attachment="ompitest.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7503.php">Josh Hursey: "Re: [OMPI users] Checkpointing fails with BLCR 0.8.0b2"</a>
<li><strong>Previous message:</strong> <a href="7501.php">Jeff Squyres: "[OMPI users] Open MPI interview on FLOSS Weekly"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Reply:</strong> <a href="7512.php">George Bosilca: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Maybe reply:</strong> <a href="7514.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Maybe reply:</strong> <a href="7516.php">Dorian Krause: "Re: [OMPI users] Onesided + derived datatypes"</a>
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
