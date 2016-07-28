<?
$subject_val = "[OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 19 14:19:41 2010" -->
<!-- isoreceived="20100519181941" -->
<!-- sent="Wed, 19 May 2010 13:19:33 -0500" -->
<!-- isosent="20100519181933" -->
<!-- name="Michael E. Thomadakis" -->
<!-- email="miket7777_at_[hidden]" -->
<!-- subject="[OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="4BF42BB5.9050605_at_gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Michael E. Thomadakis (<em>miket7777_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-19 14:19:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Maybe reply:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I would like to build OMPI V1.4.2 and make it available to our users at the
<br>
Supercomputing Center at TAMU. Our system is a 2-socket, 4-core Nehalem
<br>
@2.8GHz, 24GiB DRAM / node, 324 nodes connected to 4xQDR Voltaire fabric,
<br>
CentOS/RHEL 5.4.
<br>
<p><p><p>I have been trying to find the following information :
<br>
<p>1) high-resolution timers: how do I specify the HRT linux timers in the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-timer=TYPE
<br>
&nbsp;&nbsp;line of ./configure ?
<br>
<p>2) I have installed blcr V0.8.2 but when I try to built OMPI and I point to the
<br>
full installation it complains it cannot find it. Note that I build BLCR with
<br>
GCC but I am building OMPI with Intel compilers (V11.1)
<br>
<p><p>3) Does OMPI by default use SHM for intra-node message IPC but revert to IB for
<br>
inter-node ?
<br>
<p>4) How could I select the high-speed transport, say DAPL or OFED IB verbs ? Is
<br>
there any preference as to the specific high-speed transport over QDR IB?
<br>
<p>5) When we launch MPI jobs via PBS/TORQUE do we have control on the task and
<br>
thread placement on nodes/cores ?
<br>
<p>6) Can we suspend/restart cleanly OMPI jobs with the above scheduler ? Any
<br>
caveats on suspension / resumption of OMPI jobs ?
<br>
<p>7) Do you have any performance data comparing OMPI vs say MVAPICVHv2 and
<br>
IntelMPI ? This is not a political issue since I am groing to be providing all
<br>
these MPI stacks to our users.
<br>
<p><p><p><p>Thank you so much for the great s/w ...
<br>
<p>best
<br>
Michael
<br>
<p><p><p>% -------------------------------------------------------------------- \
<br>
% Michael E. Thomadakis, Ph.D.  Senior Lead Supercomputer Engineer/Res \
<br>
% E-mail: miket AT tamu DOT edu                   Texas A&amp;M University \
<br>
% web:    <a href="http://alphamike.tamu.edu">http://alphamike.tamu.edu</a>              Supercomputing Center \
<br>
% Voice:  979-862-3931                    Teague Research Center, 104B \
<br>
% FAX:    979-847-8643                  College Station, TX 77843, USA \
<br>
% -------------------------------------------------------------------- \
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13091/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13092.php">Battalgazi YILDIRIM: "[OMPI users] Allgather in inter-communicator bug,"</a>
<li><strong>Previous message:</strong> <a href="13090.php">Jeff Squyres: "Re: [OMPI users] openmpi + share points"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13127.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13140.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Maybe reply:</strong> <a href="13160.php">Jeff Squyres: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
