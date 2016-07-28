<?
$subject_val = "[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 02:45:10 2014" -->
<!-- isoreceived="20140725064510" -->
<!-- sent="Fri, 25 Jul 2014 08:44:48 +0200 (CEST)" -->
<!-- isosent="20140725064448" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux" -->
<!-- id="201407250644.s6P6imrr029252_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] missing link option for openmpi-1.8.2rc2 on Linux<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 02:44:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24870.php">Siegmar Gross: "[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I installed openmpi-1.8.2rc2 on &quot;openSUSE Linux 12.1 x86_64&quot;
<br>
with Sun C 5.12 and get the following warning if I run a small
<br>
Java program. I get no warning for my gcc-4.9.0 version of
<br>
openmpi-1.8.2rc2.
<br>
<p><p>linpc1 java 109 mpiexec -np 1 java InitFinalizeMain
<br>
Java HotSpot(TM) 64-Bit Server VM warning: You have loaded library
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.8.2_64_cc/lib64/libmpi_java.so.1.2.0 which
<br>
&nbsp;&nbsp;might have disabled stack guard. The VM will try to fix the stack
<br>
&nbsp;&nbsp;guard now.
<br>
It's highly recommended that you fix the library with
<br>
&nbsp;&nbsp;'execstack -c &lt;libfile&gt;', or link it with '-z noexecstack'.
<br>
Hello!
<br>
linpc1 java 110 
<br>
<p><p>I would be grateful if somebody can add the link option
<br>
'-z noexecstack' to omit the warning. Thank you very much for
<br>
your help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24870.php">Siegmar Gross: "[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
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
