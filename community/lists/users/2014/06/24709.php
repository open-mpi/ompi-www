<?
$subject_val = "[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 26 16:31:17 2014" -->
<!-- isoreceived="20140626203117" -->
<!-- sent="Thu, 26 Jun 2014 13:31:16 -0700" -->
<!-- isosent="20140626203116" -->
<!-- name="Adam Jundt" -->
<!-- email="adam.jundt_at_[hidden]" -->
<!-- subject="[OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC" -->
<!-- id="CABnrQwT0t_xoVa6HoZt4K-4JK9LuvpS4gDJmNGbKZGLpequn5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC<br>
<strong>From:</strong> Adam Jundt (<em>adam.jundt_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-26 16:31:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm currently working towards setting up a single node system with a
<br>
xeon phi card. We have intel compilers (v.13.1.3) installed and I was
<br>
able to get the standard openmpi (v1.6.5) to install.
<br>
<p>Right now, I am just hoping to run codes natively on the xeon phi.
<br>
When trying to compile a hello world code via &quot;mpicc -mmic hello.c&quot; it
<br>
results in the error:
<br>
<p>x86_64-k1om-linux-ld: skipping incompatible
<br>
/ssd/apps/openmpi-intel/lib/libmpi.so when searching for -lmpi
<br>
x86_64-k1om-linux-ld: cannot find -lmpi
<br>
<p><p>I'm guessing this is due to not having compiled openmpi with the
<br>
&quot;-mmic&quot; option. Although, attempting to configure openmpi with -mmic
<br>
will fail instantly as the configure attempts to test basic codes with
<br>
&quot;-mmic&quot; on the host processor.
<br>
<p>In a couple of threads it was mentioned that people have been able to
<br>
get this to work, but not much detail on how they built openmpi to
<br>
achieve this. Any help is appreciated.
<br>
<p>-Adam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Previous message:</strong> <a href="24708.php">Joshua Ladd: "Re: [OMPI users] poor performance using the openib btl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="24710.php">Ralph Castain: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
<li><strong>Reply:</strong> <a href="24711.php">Brice Goglin: "Re: [OMPI users] Compiling OpenMPI for Intel Xeon Phi/MIC"</a>
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
