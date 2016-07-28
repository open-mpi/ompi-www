<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 28 09:44:40 2008" -->
<!-- isoreceived="20081028134440" -->
<!-- sent="Tue, 28 Oct 2008 09:44:34 -0400" -->
<!-- isosent="20081028134434" -->
<!-- name="Gustavo Seabra" -->
<!-- email="gustavo.seabra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="f79359b60810280644s6fe045fctce43e8034cfc557e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D16405B3-70C7-402A-9551-AA1F847C7D96_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Problems installing in Cygwin<br>
<strong>From:</strong> Gustavo Seabra (<em>gustavo.seabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-28 09:44:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Oct 28, 2008 at 9:06 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt; It is complaining about a missing file. This is a file from the Open MPI
</span><br>
<span class="quotelev1">&gt; distribution, I wonder how it can be missing. Can you verify that the file
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/windows/timer_windows_component.h is there ?
</span><br>
<p>No, it's not. But I see a
<br>
opal/mca/timer/windows/timer_windows_component.c and a timer_windows.h
<br>
there. Should it have been generated at some point in the compilation?
<br>
The contents of that directory are only:
<br>
<p>$ ls $HOME/local/openmpi-1.2.7/opal/mca/timer/windows/
<br>
Makefile  Makefile.am  Makefile.in  configure.m4  timer_windows.h
<br>
timer_windows_component.c
<br>
<p>I don't know how relevant it is, but I downloaded the
<br>
&quot;openmpi-1.2.7.tar.bz2&quot; file (MD5SUM
<br>
b5ae3059fba71eba4a89a2923da8223f). Also, I'm trying to make a local
<br>
install, in $HOME/local/openmpi-1.2.7. Finally, as I may have
<br>
mentioned before, this installation is in Cygwin but, as far as I
<br>
understand, it shouldn't matter much since Cygwin these days can
<br>
reproduce a POSIX environment very well. Also, I don't quite
<br>
understand why is it looking for what it seems (to me) to be
<br>
windows-based function, since it is in a POSIX environment.
<br>
<p>Thank you very much. Please let me know if there is any other
<br>
information I can provide to help track this.
<br>
<p>All the best,
<br>
<p><pre>
-- 
Gustavo Seabra
Postdoctoral Associate
Quantum Theory Project - University of Florida
Gainesville - Florida - USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7118.php">Jeff Squyres: "Re: [OMPI users] C++ Exceptions"</a>
<li><strong>Previous message:</strong> <a href="7116.php">Gabriele Fatigati: "[OMPI users] C++ Exceptions"</a>
<li><strong>In reply to:</strong> <a href="7115.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
