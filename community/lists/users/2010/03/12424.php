<?
$subject_val = "[OMPI users] Question - OTF file";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 04:17:54 2010" -->
<!-- isoreceived="20100325081754" -->
<!-- sent="Thu, 25 Mar 2010 09:16:21 +0100" -->
<!-- isosent="20100325081621" -->
<!-- name="Artur Trojanowski" -->
<!-- email="trojan_at_[hidden]" -->
<!-- subject="[OMPI users] Question - OTF file" -->
<!-- id="4BAB1BD5.7000502_at_man.poznan.pl" -->
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
<strong>Subject:</strong> [OMPI users] Question - OTF file<br>
<strong>From:</strong> Artur Trojanowski (<em>trojan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 04:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12425.php">Dmitry Kuzmin: "[OMPI users] Multi-rail support"</a>
<li><strong>Previous message:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Maybe reply:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Maybe reply:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
My name is Arthur Trojanowski I just tested Vampir software.
<br>
I have installed the MPI version 1.4
<br>
I would like to know how to generate the correct OTF file in VampirTrace
<br>
I have written a small C program with support for MPI
<br>
To compile the program I use the command:
<br>
mpicc-vt -vt:inst gnu -vt:verbose -o new.out new.c
<br>
Generates a file new.out. When I start it up:
<br>
mpiexec -np 6 new.out
<br>
creates a small OTF file a.otf and several files a.0.def.z, 
<br>
a.1.events.z, a.2.events.z etc.
<br>
Vampir will not open this OTF file
<br>
Can you tell me what I am doing wrong.
<br>
If you need any additional information about this error, please contact 
<br>
with me
<br>
Greets
<br>
Arthur
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12425.php">Dmitry Kuzmin: "[OMPI users] Multi-rail support"</a>
<li><strong>Previous message:</strong> <a href="12423.php">Trent Creekmore: "Re: [OMPI users] Non-root install; hang there running on multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Maybe reply:</strong> <a href="12438.php">Andreas Knüpfer: "Re: [OMPI users] Question - OTF file"</a>
<li><strong>Maybe reply:</strong> <a href="12442.php">Matthias Jurenz: "Re: [OMPI users] Question - OTF file"</a>
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
