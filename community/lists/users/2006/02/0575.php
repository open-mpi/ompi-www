<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Feb  3 21:30:58 2006" -->
<!-- isoreceived="20060204023058" -->
<!-- sent="Fri, 3 Feb 2006 18:30:52 -0800" -->
<!-- isosent="20060204023052" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[O-MPI users] Xgrid and Open-MPI" -->
<!-- id="81EC03C7-F244-4C1A-8119-53D2EA6AF8F7_at_apple.com" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-03 21:30:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone:
<br>
<p>Thanks to Brian Barrett's help, I was able to get Open MPI working  
<br>
with Xgrid using two dual 2.5 GHz PowerMacs. I can submit HP Linpack  
<br>
jobs fine and get all four CPUs cranking, but I'm having problems  
<br>
with the applications that I really want to run, MrBayes and GROMACS  
<br>
(two very different programs...but both are MPI enabled)
<br>
<p>I can submit the MPI job to a single Xgrid agent and they run just  
<br>
fine, but if I try adding the second agent (the second PowerMac) the  
<br>
jobs abort after a few seconds. Running them without Xgrid but just  
<br>
OpenMPI, the applications run fine. Below is the output...not very  
<br>
informative, but if anyone has any ideas I'd appreciate it.
<br>
<p>For GROMACS I end up with the following:
<br>
<p>-------------------------------------------------------
<br>
Program mdrun_mpi, VERSION 3.3
<br>
Source code file: futil.c, line: 308
<br>
<p>File input/output error:
<br>
md0.log
<br>
-------------------------------------------------------
<br>
<p>For MrBayes I get the following:
<br>
<p>Overwriting file &quot;testdata.nex.run1.p&quot;
<br>
Could not open file &quot;testdata.nex.run1.p&quot;
<br>
Memory allocation error on at least one processor
<br>
Error in command &quot;Mcmc&quot;
<br>
There was an error on at least one processor
<br>
Error in command &quot;Execute&quot;
<br>
Will exit with signal 1 (error)
<br>
<p><p><p><p><p>Warner Yuen
<br>
Research Computing Consultant
<br>
Apple Computer
<br>
email: wyuen_at_[hidden]
<br>
Tel: 408.718.2859
<br>
Fax: 408.715.0133
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0575/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0576.php">Brian Granger: "Re: [O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
<li><strong>Previous message:</strong> <a href="0574.php">Xiaoning (David) Yang: "[O-MPI users] Configuring OPEN MPI 1.0.1 MAC OS X 10.4.4"</a>
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
