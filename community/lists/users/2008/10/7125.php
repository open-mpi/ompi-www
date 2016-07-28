<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 10:48:49 2008" -->
<!-- isoreceived="20081029144849" -->
<!-- sent="Wed, 29 Oct 2008 10:48:33 -0400" -->
<!-- isosent="20081029144833" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="263CE4E1-CC4F-41F4-B5E3-2AB9935B4381_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f79359b60810280644s6fe045fctce43e8034cfc557e_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 10:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gustavo,
<br>
<p>I think we have a problem in the &quot;make dist&quot; for the 1.2. I just  
<br>
downloaded the latest 1.2.8, and the windows timer component header  
<br>
file is not in the tarball. This file is not automatically generated,  
<br>
and it is in the svn version.
<br>
<p>Anyway, the 1.3 is nearly ready to replace the 1.2 as the stable  
<br>
version. And it does have this file, so I strongly suggest to switch  
<br>
from the 1.2 to the 1.3 series.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 28, 2008, at 9:44 AM, Gustavo Seabra wrote:
<br>
<p><span class="quotelev1">&gt; On Tue, Oct 28, 2008 at 9:06 AM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It is complaining about a missing file. This is a file from the  
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; distribution, I wonder how it can be missing. Can you verify that  
</span><br>
<span class="quotelev2">&gt;&gt; the file
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/timer/windows/timer_windows_component.h is there ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, it's not. But I see a
</span><br>
<span class="quotelev1">&gt; opal/mca/timer/windows/timer_windows_component.c and a timer_windows.h
</span><br>
<span class="quotelev1">&gt; there. Should it have been generated at some point in the compilation?
</span><br>
<span class="quotelev1">&gt; The contents of that directory are only:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ ls $HOME/local/openmpi-1.2.7/opal/mca/timer/windows/
</span><br>
<span class="quotelev1">&gt; Makefile  Makefile.am  Makefile.in  configure.m4  timer_windows.h
</span><br>
<span class="quotelev1">&gt; timer_windows_component.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how relevant it is, but I downloaded the
</span><br>
<span class="quotelev1">&gt; &quot;openmpi-1.2.7.tar.bz2&quot; file (MD5SUM
</span><br>
<span class="quotelev1">&gt; b5ae3059fba71eba4a89a2923da8223f). Also, I'm trying to make a local
</span><br>
<span class="quotelev1">&gt; install, in $HOME/local/openmpi-1.2.7. Finally, as I may have
</span><br>
<span class="quotelev1">&gt; mentioned before, this installation is in Cygwin but, as far as I
</span><br>
<span class="quotelev1">&gt; understand, it shouldn't matter much since Cygwin these days can
</span><br>
<span class="quotelev1">&gt; reproduce a POSIX environment very well. Also, I don't quite
</span><br>
<span class="quotelev1">&gt; understand why is it looking for what it seems (to me) to be
</span><br>
<span class="quotelev1">&gt; windows-based function, since it is in a POSIX environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you very much. Please let me know if there is any other
</span><br>
<span class="quotelev1">&gt; information I can provide to help track this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Gustavo Seabra
</span><br>
<span class="quotelev1">&gt; Postdoctoral Associate
</span><br>
<span class="quotelev1">&gt; Quantum Theory Project - University of Florida
</span><br>
<span class="quotelev1">&gt; Gainesville - Florida - USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7125/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Previous message:</strong> <a href="7124.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7117.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7126.php">Jeff Squyres: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>Reply:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
