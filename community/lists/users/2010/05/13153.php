<?
$subject_val = "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 00:03:24 2010" -->
<!-- isoreceived="20100525040324" -->
<!-- sent="Tue, 25 May 2010 06:03:11 +0200" -->
<!-- isosent="20100525040311" -->
<!-- name="Yves Caniou" -->
<!-- email="yves.caniou_at_[hidden]" -->
<!-- subject="[OMPI users] About the necessity of cancelation of pending communication and the use of buffer" -->
<!-- id="201005250603.11606.yves.caniou_at_ens-lyon.fr" -->
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
<strong>Subject:</strong> [OMPI users] About the necessity of cancelation of pending communication and the use of buffer<br>
<strong>From:</strong> Yves Caniou (<em>yves.caniou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 00:03:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13154.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Reply:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Reply:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I have 2 questions on the use of the MPI API:
<br>
<p>1 ** Do I have to cancel Irecv() and Isend() operations before calling 
<br>
MPI_Finalize() in the case of when MPI_Finalize() is called, I know for sure 
<br>
that the application has finished to compute the result, and must exit?
<br>
<p>A silly example would be an iterative code that Isends() a value given a 
<br>
proba, and checks if it receives a value given another proba. At the end, 
<br>
each prints a value. There's no synchronization. Do I have to track all 
<br>
Isend() and cancel them before calling MPI_Finalize()?
<br>
<p>2 ** When I use a Isend() operation, the manpage says that I can't use the 
<br>
buffer until the operation completes.
<br>
What happens if I use an Isend() operation in a function, with a buffer 
<br>
declared inside the function?
<br>
Do I have to Wait() for the communication to finish before returning, or to 
<br>
declare the buffer as a global variable?
<br>
<p>Thank you!
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
<li><strong>Next message:</strong> <a href="13154.php">Eloi Gaudry: "Re: [OMPI users] [sge::tight-integration] slot scheduling and resources handling"</a>
<li><strong>Previous message:</strong> <a href="13152.php">Ralph Castain: "Re: [OMPI users] fork / exec from an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Reply:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Reply:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
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
