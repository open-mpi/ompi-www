<?
$subject_val = "[OMPI users] Help: HPL Compile Problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 12 07:16:26 2009" -->
<!-- isoreceived="20090712111626" -->
<!-- sent="Sun, 12 Jul 2009 19:16:21 +0800" -->
<!-- isosent="20090712111621" -->
<!-- name="Lee Amy" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] Help: HPL Compile Problems" -->
<!-- id="289665360907120416j74162f5di2a9fe96b736d3dc1_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help: HPL Compile Problems<br>
<strong>From:</strong> Lee Amy (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-12 07:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9926.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Reply:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I use OpenMPI 1.3.2 and HPL-2.0 to measure clusters performance.
<br>
However I encountered a problem when I compile the HPL.
<br>
<p>I don't know how to fill up the MPlib variable item because the
<br>
default value is $(MPdir)/lib/libmpich.a. Obviously I have to choose a
<br>
file from OpenMPI to replace it.
<br>
<p>#
<br>
# ----------------------------------------------------------------------
<br>
# - Message Passing library (MPI) --------------------------------------
<br>
# ----------------------------------------------------------------------
<br>
# MPinc tells the  C  compiler where to find the Message Passing library
<br>
# header files,  MPlib  is defined  to be the name of  the library to be
<br>
# used. The variable MPdir is only used for defining MPinc and MPlib.
<br>
#
<br>
MPdir        = /usr/local/openmpi
<br>
MPinc        = -I$(MPdir)/include
<br>
MPlib        = $(MPdir)/lib/libmpich.a
<br>
<p>Could anyone tell me how to fix that problem?
<br>
<p>Thank you very much.
<br>
<p>Regards,
<br>
<p>Amy Lee
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Previous message:</strong> <a href="9926.php">Ralph Castain: "Re: [OMPI users] Xgrid and choosing agents..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
<li><strong>Reply:</strong> <a href="9928.php">Dorian Krause: "Re: [OMPI users] Help: HPL Compile Problems"</a>
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
