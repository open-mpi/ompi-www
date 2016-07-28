<?
$subject_val = "[OMPI users] A beginer's question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 14:28:50 2008" -->
<!-- isoreceived="20080208192850" -->
<!-- sent="Fri, 8 Feb 2008 14:28:48 -0500" -->
<!-- isosent="20080208192848" -->
<!-- name="Hsieh, Pei-Ying (MED US)" -->
<!-- email="pei-ying.hsieh_at_[hidden]" -->
<!-- subject="[OMPI users] A beginer's question" -->
<!-- id="7AEC29D79CDD2646955922C34AFF197329D6F2_at_USMLVV1EXCTV06.ww005.siemens.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] A beginer's question<br>
<strong>From:</strong> Hsieh, Pei-Ying (MED US) (<em>pei-ying.hsieh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 14:28:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
<li><strong>Reply:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI group:
<br>
<p>I am sorry about this newbie question, but, I was not able to find the
<br>
answer so far.
<br>
<p>I compiled OpenMPI-1.2.5 from source on a OpenSUSE 10.3 64 bit OS.
<br>
Configure and installation seemed fine (using prefix=/usr/local).  I
<br>
installed openmpi as root.  But, when I ran a quick test program, I got
<br>
the following error:
<br>
<p>saturn:~/openmpi/openmpi-1.2.5 # mpicc -o hello_mpi.c hello_mpi.c
<br>
mpicc: error while loading shared libraries: libopen-pal.so.0: cannot
<br>
open shared object file: No such file or directory
<br>
saturn:~/openmpi/openmpi-1.2.5 # 
<br>
<p>But, I found libopen-pal.so.0 in /usr/local/lib.  How to get
<br>
mpicc/mpif90 wraper to find libopen-pal.so in the correct directoy?
<br>
<p>Also, on another workstation (OpenSUSE 10.2 64 bit OS), I installed the
<br>
openmpi-1.2.2 rpm (and openmpi-1.2.2-devel rpm).  Libopen-pal.so was
<br>
laced in /usr/lib64/mpi/gcc/openmpi/lib64.  I has the same problem when
<br>
executing mpicc/mpif90.
<br>
<p>Can someone shed some light on this?  Thanks!
<br>
<p>Pei
<br>
-------------------------------------
<br>
Pei-Ying Hsieh, Ph.D.
<br>
Staff Product Engineer 
<br>
Siemens Healthcare Diagnostics Inc.
<br>
511 Benedict Ave., MS 32
<br>
Tarrytown, NY 10591
<br>
USA
<br>
Phone: (914)524-3146
<br>
fax:   (914)524-2580
<br>
email: Pei-Ying.Hsieh_at_[hidden]
<br>
www.siemens.com/diagnostics
<br>
<p>----------------------------------------------------------------------------
<br>
This message and any included attachments are from Siemens Medical Solutions 
<br>
and are intended only for the addressee(s). 
<br>
The information contained herein may include trade secrets or privileged or 
<br>
otherwise confidential information. Unauthorized review, forwarding, printing, 
<br>
copying, distributing, or using such information is strictly prohibited and may 
<br>
be unlawful. If you received this message in error, or have reason to believe 
<br>
you are not authorized to receive it, please promptly delete this message and 
<br>
notify the sender by e-mail with a copy to Central.SecurityOffice_at_[hidden] 
<br>
<p>Thank you
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
<li><strong>Previous message:</strong> <a href="5011.php">Jeff Squyres: "Re: [OMPI users] Can't compile C++ program with extern	&quot;C&quot;	{	#include mpi.h }"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
<li><strong>Reply:</strong> <a href="5013.php">Aurélien Bouteiller: "Re: [OMPI users] A beginer's question"</a>
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
