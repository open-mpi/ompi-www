<?
$subject_val = "[OMPI users] Segmentation fault with plenty of RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 09:33:24 2010" -->
<!-- isoreceived="20100216143324" -->
<!-- sent="Tue, 16 Feb 2010 09:33:17 -0500" -->
<!-- isosent="20100216143317" -->
<!-- name="Christopher O'Brien" -->
<!-- email="cjobrien_at_[hidden]" -->
<!-- subject="[OMPI users] Segmentation fault with plenty of RAM" -->
<!-- id="9FE4B237-07AA-4DA1-A80E-16A7D832E559_at_unity.ncsu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Segmentation fault with plenty of RAM<br>
<strong>From:</strong> Christopher O'Brien (<em>cjobrien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 09:33:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Reply:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Maybe reply:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To all,
<br>
I am trying to start work with Quantum Espresso (www.quantum_espresso.org) on my MacBook Pro (running 10.6.2 with 64-bit kernel extensions enabled) using 2GB of ram and an Intel Core2 Duo. Keep in mind that I am not really an expert and I have a very bad track record in compiling applications.
<br>
<p>I received no errors when compiling the latest versions of FFTW, openmpi, and lapack (which were found by QE's configure program). I ran the basic Openmpi tests included with the distribution, and found no problems. I have modified my path to use the MPI compiler wrappers that I compiled, as Mac's built in openmpi does not have F90/F77 support.
<br>
<p>Someone reported a similar problem to the error reported below on this forum (<a href="http://www.open-mpi.org/community/lists/users/2008/08/6348.php">http://www.open-mpi.org/community/lists/users/2008/08/6348.php</a>) but it may or not be relevant. The problem does not seem to be in one executable of the package ('bands.x') exclusively, but libSystem.B.dylib always seems to be in the middle of things.  However, I tracked the memory usage but the example never used more than 40MB.
<br>
<p>The error message resulting from &quot;example01&quot; follows:
<br>
running the symmetry analysis for Si bands...[schrodingersdog:00322] *** Process received signal ***
<br>
[schrodingersdog:00322] Signal: Segmentation fault (11)
<br>
[schrodingersdog:00322] Signal code: Address not mapped (1)
<br>
[schrodingersdog:00322] Failing at address: 0x698d3230
<br>
[schrodingersdog:00322] [ 0] 2   libSystem.B.dylib                   0x00007fff87248eaa _sigtramp + 26
<br>
[schrodingersdog:00322] [ 1] 3   ???                                 0x00000001013fc080 0x0 + 4315922560
<br>
[schrodingersdog:00322] [ 2] 4   bands.x                             0x000000010003d3ed sym_band_ + 7597
<br>
[schrodingersdog:00322] [ 3] 5   bands.x                             0x00000001000014f5 MAIN__ + 1317
<br>
[schrodingersdog:00322] [ 4] 6   bands.x                             0x0000000100001a01 main + 33
<br>
[schrodingersdog:00322] [ 5] 7   bands.x                             0x0000000100000fa4 start + 52
<br>
[schrodingersdog:00322] [ 6] 8   ???                                 0x0000000000000001 0x0 + 1
<br>
[schrodingersdog:00322] *** End of error message ***
<br>
./run_example: line 77:   322 Segmentation fault      $BANDS_COMMAND &lt; si.bands.in &gt; si.bands.out
<br>
done
<br>
cleaning /Users/ChrisOBrien/tmp... done
<br>
<p>Thanks in advance,
<br>
Chris
<br>
<p>===================================================================
<br>
Christopher J. O'Brien
<br>
cjobrien_at_[hidden]
<br>
<a href="http://www4.ncsu.edu/~cjobrien/index.html">http://www4.ncsu.edu/~cjobrien/index.html</a>
<br>
See what I'm citing at <a href="http://www.citeulike.org/cjo123">http://www.citeulike.org/cjo123</a>
<br>
<p>Graduate Research Assistant
<br>
Computational Materials Group
<br>
Department of Materials Science &amp; Engineering
<br>
North Carolina State University
<br>
_______________________________________________________________________
<br>
Please send all attachments in PDF, HTML, RTF, TXT, ODF, DVI or PS. 
<br>
<p>For Word documents: Please use the 'Save as PDF' option before sending.
<br>
=======================================================================
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12090.php">Repsher, Stephen J: "Re: [OMPI users] Bad Infiniband latency with subounce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Reply:</strong> <a href="12092.php">Trent Creekmore: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Maybe reply:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
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
