<?
$subject_val = "Re: [OMPI users] Segmentation fault with plenty of RAM";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 16 17:23:47 2010" -->
<!-- isoreceived="20100216222347" -->
<!-- sent="Tue, 16 Feb 2010 16:23:42 -0600" -->
<!-- isosent="20100216222342" -->
<!-- name="Trent Creekmore" -->
<!-- email="mtcreekmore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault with plenty of RAM" -->
<!-- id="COL117-DS2067B73507D41807C7C9E1E9490_at_phx.gbl" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9FE4B237-07AA-4DA1-A80E-16A7D832E559_at_unity.ncsu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault with plenty of RAM<br>
<strong>From:</strong> Trent Creekmore (<em>mtcreekmore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-16 17:23:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>In reply to:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Christopher,
<br>
<p>Segmentation faults has nothing to do with amount of memory you have in your
<br>
system.
<br>
Rather is has to do with memory access. A segmentation fault occurs as a
<br>
result of the program trying to access outside the bounds of memory
<br>
locations that have been set aside for storage at compile time.
<br>
<p>These are usually caused by programmer error in the code. libSystem.B.dylib
<br>
could possibly have a bug in it, in which the developers of it either know
<br>
and about and have fixed it, in the process of fixing it, or need to know
<br>
about it. You may want to try to get the latest version of it before you
<br>
look further. Though I am new to OpenMPI myself and really have not had a
<br>
chance to really dig into it yet, the problem could be elsewhere besides in
<br>
libSystem.B.dylib.
<br>
<p>But hopefully someone else here has had similar experience and knows exactly
<br>
what to do. 
<br>
<p>If you had a shortage of memory, the OS would start doing more and page
<br>
swaps on the &quot;swap drive&quot; and you would notice this by the system getting
<br>
painfully slow.
<br>
<p><p>Trent
<br>
<p><p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Christopher O'Brien
<br>
Sent: Tuesday, February 16, 2010 8:33 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] Segmentation fault with plenty of RAM
<br>
<p>To all,
<br>
I am trying to start work with Quantum Espresso (www.quantum_espresso.org)
<br>
on my MacBook Pro (running 10.6.2 with 64-bit kernel extensions enabled)
<br>
using 2GB of ram and an Intel Core2 Duo. Keep in mind that I am not really
<br>
an expert and I have a very bad track record in compiling applications.
<br>
<p>I received no errors when compiling the latest versions of FFTW, openmpi,
<br>
and lapack (which were found by QE's configure program). I ran the basic
<br>
Openmpi tests included with the distribution, and found no problems. I have
<br>
modified my path to use the MPI compiler wrappers that I compiled, as Mac's
<br>
built in openmpi does not have F90/F77 support.
<br>
<p>Someone reported a similar problem to the error reported below on this forum
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2008/08/6348.php">http://www.open-mpi.org/community/lists/users/2008/08/6348.php</a>) but it may
<br>
or not be relevant. The problem does not seem to be in one executable of the
<br>
package ('bands.x') exclusively, but libSystem.B.dylib always seems to be in
<br>
the middle of things.  However, I tracked the memory usage but the example
<br>
never used more than 40MB.
<br>
<p>The error message resulting from &quot;example01&quot; follows:
<br>
running the symmetry analysis for Si bands...[schrodingersdog:00322] ***
<br>
Process received signal ***
<br>
[schrodingersdog:00322] Signal: Segmentation fault (11)
<br>
[schrodingersdog:00322] Signal code: Address not mapped (1)
<br>
[schrodingersdog:00322] Failing at address: 0x698d3230
<br>
[schrodingersdog:00322] [ 0] 2   libSystem.B.dylib
<br>
0x00007fff87248eaa _sigtramp + 26
<br>
[schrodingersdog:00322] [ 1] 3   ???
<br>
0x00000001013fc080 0x0 + 4315922560
<br>
[schrodingersdog:00322] [ 2] 4   bands.x
<br>
0x000000010003d3ed sym_band_ + 7597
<br>
[schrodingersdog:00322] [ 3] 5   bands.x
<br>
0x00000001000014f5 MAIN__ + 1317
<br>
[schrodingersdog:00322] [ 4] 6   bands.x
<br>
0x0000000100001a01 main + 33
<br>
[schrodingersdog:00322] [ 5] 7   bands.x
<br>
0x0000000100000fa4 start + 52
<br>
[schrodingersdog:00322] [ 6] 8   ???
<br>
0x0000000000000001 0x0 + 1
<br>
[schrodingersdog:00322] *** End of error message ***
<br>
./run_example: line 77:   322 Segmentation fault      $BANDS_COMMAND &lt;
<br>
si.bands.in &gt; si.bands.out
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
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>Previous message:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<li><strong>In reply to:</strong> <a href="12091.php">Christopher O'Brien: "[OMPI users] Segmentation fault with plenty of RAM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12093.php">Christopher O'Brien: "Re: [OMPI users] Segmentation fault with plenty of RAM"</a>
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
