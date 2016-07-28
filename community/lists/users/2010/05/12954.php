<?
$subject_val = "[OMPI users] About the correct use of DIET_Finalize()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  7 00:56:54 2010" -->
<!-- isoreceived="20100507045654" -->
<!-- sent="Fri, 7 May 2010 06:54:20 +0200" -->
<!-- isosent="20100507045420" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="[OMPI users] About the correct use of DIET_Finalize()" -->
<!-- id="201005070654.20513.yves.caniou_at_ens-lyon.fr" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] About the correct use of DIET_Finalize()<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-07 00:54:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12953.php">Trent Creekmore: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Reply:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>My parallel application ends when each process receives a msg, done in an 
<br>
async way (but my question still arise if sync comm were used, see the ref to  
<br>
the manpage). Senders call MPI_Finalize() after a call to MPI_Wait() and 
<br>
receivers call MPI_Finalize() after having received the message.
<br>
<p>An execution gives me that all proc finish as planned but I obtain the 
<br>
following errors (times the number of processor used)
<br>
--------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With openMPI 1.4.2 compiled with gcc-4.5 on a Quad-Core AMD Opteron(tm) 
<br>
Processor 8356
<br>
*** The MPI_Finalize() function was called after MPI_FINALIZE was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
Abort after MPI_FINALIZE completed successfully; not able to guarantee that 
<br>
all other processes were killed!
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;With openMPI 1.4.1 (debian package), Intel(R) Core(TM)2 Duo CPU     P9600
<br>
*** An error occurred in MPI_Finalize
<br>
*** after MPI was finalized
<br>
*** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
Abort after MPI_FINALIZE completed successfully; not able to guarantee that 
<br>
all other processes were killed!
<br>
---------------------------------
<br>
<p>I think it comes from the fact that, as mentionned in the man of 
<br>
MPI_Finalize():
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;For  example,  a successful return from a blocking communication opera-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tion or from MPI_Wait or MPI_Test means that the communication is  com-
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pleted by the user and the buffer can be reused, but does not guarantee
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;that the local process has no more work to do.
<br>
<p>Nonetheless, if MPI_Finaliaze() is called before that the exchange of messages 
<br>
really takes place, receivers wouldn't call their MPI_Finalize(), but would 
<br>
just be issuing an abort thing, no?
<br>
<p>Well, I'm perplex. When do I know when my proc can make the call to 
<br>
MPI_Finalize() and obtain an execution without error messages?
<br>
<p>Thank you for any help.
<br>
<p>.Yves.
<br>
<p><pre>
-- 
Yves Caniou
Associate Professor at Universit&#195;&#169; Lyon 1,
Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
D&#195;&#169;l&#195;&#169;gation CNRS in Japan French Laboratory of Informatics (JFLI),
  * in Information Technology Center, The University of Tokyo,
    2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
    tel: +81-3-5841-0540
  * in National Institute of Informatics
    2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
    tel: +81-3-4212-2412 
<a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12955.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12953.php">Trent Creekmore: "Re: [OMPI users] Fortran support on Windows Open-MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
<li><strong>Reply:</strong> <a href="12964.php">Jeff Squyres: "Re: [OMPI users] About the correct use of DIET_Finalize()"</a>
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
