<?
$subject_val = "[OMPI devel]  Porting OpenMPI to a new system";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 28 11:35:00 2010" -->
<!-- isoreceived="20100428153500" -->
<!-- sent="Wed, 28 Apr 2010 18:34:47 +0300" -->
<!-- isosent="20100428153447" -->
<!-- name="Ioannis E. Venetis" -->
<!-- email="venetis_at_[hidden]" -->
<!-- subject="[OMPI devel]  Porting OpenMPI to a new system" -->
<!-- id="4BD85597.7010008_at_capsl.udel.edu" -->
<!-- charset="iso-8859-7" -->
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
<strong>Subject:</strong> [OMPI devel]  Porting OpenMPI to a new system<br>
<strong>From:</strong> Ioannis E. Venetis (<em>venetis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-28 11:34:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7836.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc3"</a>
<li><strong>Previous message:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>In the past I have used OpenMPI to develop some (simple) applications. 
<br>
At this point, we need to port OpenMPI to a new system being developed. 
<br>
I need some help to understand where to start making changes in order to 
<br>
support this new system, as my search didn't reveal something quite useful.
<br>
<p>A few more details, regarding what we would like to do:
<br>
<p>1) We need to have support for both, a native and also a 
<br>
cross-compilation environment.
<br>
&nbsp;&nbsp;&nbsp;a) The native environment is a non-mainstream 64-bit processor
<br>
(specially designed for the system where it is being used). The OS
<br>
environment is Linux, the compiler is gcc and in general we have a quite
<br>
typical Linux/GNU environment, ported to that system.
<br>
<p>&nbsp;&nbsp;&nbsp;b) The cross-compilation environment should be run on a Linux x86_64
<br>
system. The cross-compiler, libraries, etc are already working, which
<br>
means that only OpenMPI needs to be ported right now. We use this
<br>
environment together with a simulator of the system, in order to
<br>
evaluate any changes in the architecture of the system. Using the
<br>
typical configure options of most applications, we would like to have
<br>
something like the following options in this case when building OpenMPI:
<br>
<p>--host=x86_64-linux-gnu --build=&lt;our system triplet&gt;
<br>
<p>Afterwards, the OpenMPI library should be linked together with our
<br>
applications and the final executable should be run on the simulator.
<br>
<p>I have started looking into the source code of OpenMPI, but I have not 
<br>
yet understood in which files I should start making changes. I would
<br>
appreciate any help you can provide, in order for me to start the port.
<br>
<p>Thank you in advance,
<br>
<p>Ioannis E. Venetis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7836.php">Ralph Castain: "[OMPI devel] OMPI 1.4.2rc3"</a>
<li><strong>Previous message:</strong> <a href="7834.php">Samuel K. Gutierrez: "Re: [OMPI devel] System V Shared Memory for Open MPI: Request for Community Input and Testing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7837.php">Ralf Wildenhues: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
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
