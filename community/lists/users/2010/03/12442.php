<?
$subject_val = "Re: [OMPI users] Question - OTF file";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 04:58:34 2010" -->
<!-- isoreceived="20100326085834" -->
<!-- sent="Fri, 26 Mar 2010 09:58:29 +0100" -->
<!-- isosent="20100326085829" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question - OTF file" -->
<!-- id="201003260958.30288.matthias.jurenz_at_tu-dresden.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Question - OTF file" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question - OTF file<br>
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 04:58:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12443.php">Jean Potsam: "[OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Arthur,
<br>
<p>the files which you obtained look good to me and you did the correct approach 
<br>
to get these files. Did you get any error message from Vampir?
<br>
Do the trace work with the OTF tools 'otfdump' or 'otfprofile'?
<br>
<p>Matthias
<br>
<p>On Thursday 25 March 2010 04:16:21 Arthur Trojanowski wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; My name is Arthur Trojanowski I just tested Vampir software.
</span><br>
<span class="quotelev1">&gt; I have installed the MPI version 1.4
</span><br>
<span class="quotelev1">&gt; I would like to know how to generate the correct OTF file in VampirTrace
</span><br>
<span class="quotelev1">&gt; I have written a small C program with support for MPI
</span><br>
<span class="quotelev1">&gt; To compile the program I use the command:
</span><br>
<span class="quotelev1">&gt; mpicc-vt -vt:inst gnu -vt:verbose -o new.out new.c
</span><br>
<span class="quotelev1">&gt; Generates a file new.out. When I start it up:
</span><br>
<span class="quotelev1">&gt; mpiexec -np 6 new.out
</span><br>
<span class="quotelev1">&gt; creates a small OTF file a.otf and several files a.0.def.z, 
</span><br>
<span class="quotelev1">&gt; a.1.events.z, a.2.events.z etc.
</span><br>
<span class="quotelev1">&gt; Vampir will not open this OTF file
</span><br>
<span class="quotelev1">&gt; Can you tell me what I am doing wrong.
</span><br>
<span class="quotelev1">&gt; If you need any additional information about this error, please contact 
</span><br>
<span class="quotelev1">&gt; with me
</span><br>
<span class="quotelev1">&gt; Greets
</span><br>
<span class="quotelev1">&gt; Arthur
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12443.php">Jean Potsam: "[OMPI users] Segmentation fault (11)"</a>
<li><strong>Previous message:</strong> <a href="12441.php">Reuti: "Re: [OMPI users] qsub/SGE and OpenMPI"</a>
<li><strong>Maybe in reply to:</strong> <a href="12424.php">Artur Trojanowski: "[OMPI users] Question - OTF file"</a>
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
