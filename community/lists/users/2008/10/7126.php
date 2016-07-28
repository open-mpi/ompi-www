<?
$subject_val = "Re: [OMPI users] Fwd: Problems installing in Cygwin";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 11:59:43 2008" -->
<!-- isoreceived="20081029155943" -->
<!-- sent="Wed, 29 Oct 2008 11:59:09 -0400" -->
<!-- isosent="20081029155909" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Problems installing in Cygwin" -->
<!-- id="940A3E26-9247-4585-8F03-12DC653F76A9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="263CE4E1-CC4F-41F4-B5E3-2AB9935B4381_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-29 11:59:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George --
<br>
<p>Do you want to make a CMR for that fix for v1.2 anyway?  It's still up  
<br>
in the air as to whether there will be a 1.2.9 or not (let's hope not,  
<br>
but...).  If nothing else, we can have an unreleased 1.2.9 beta (or  
<br>
somesuch) with a handful of fixes like this to close out the 1.2 series.
<br>
<p><p>On Oct 29, 2008, at 10:48 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Gustavo,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think we have a problem in the &quot;make dist&quot; for the 1.2. I just  
</span><br>
<span class="quotelev1">&gt; downloaded the latest 1.2.8, and the windows timer component header  
</span><br>
<span class="quotelev1">&gt; file is not in the tarball. This file is not automatically  
</span><br>
<span class="quotelev1">&gt; generated, and it is in the svn version.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, the 1.3 is nearly ready to replace the 1.2 as the stable  
</span><br>
<span class="quotelev1">&gt; version. And it does have this file, so I strongly suggest to switch  
</span><br>
<span class="quotelev1">&gt; from the 1.2 to the 1.3 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks,
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 28, 2008, at 9:44 AM, Gustavo Seabra wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Oct 28, 2008 at 9:06 AM, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is complaining about a missing file. This is a file from the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; distribution, I wonder how it can be missing. Can you verify that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; opal/mca/timer/windows/timer_windows_component.h is there ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, it's not. But I see a
</span><br>
<span class="quotelev2">&gt;&gt; opal/mca/timer/windows/timer_windows_component.c and a  
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows.h
</span><br>
<span class="quotelev2">&gt;&gt; there. Should it have been generated at some point in the  
</span><br>
<span class="quotelev2">&gt;&gt; compilation?
</span><br>
<span class="quotelev2">&gt;&gt; The contents of that directory are only:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ls $HOME/local/openmpi-1.2.7/opal/mca/timer/windows/
</span><br>
<span class="quotelev2">&gt;&gt; Makefile  Makefile.am  Makefile.in  configure.m4  timer_windows.h
</span><br>
<span class="quotelev2">&gt;&gt; timer_windows_component.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how relevant it is, but I downloaded the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;openmpi-1.2.7.tar.bz2&quot; file (MD5SUM
</span><br>
<span class="quotelev2">&gt;&gt; b5ae3059fba71eba4a89a2923da8223f). Also, I'm trying to make a local
</span><br>
<span class="quotelev2">&gt;&gt; install, in $HOME/local/openmpi-1.2.7. Finally, as I may have
</span><br>
<span class="quotelev2">&gt;&gt; mentioned before, this installation is in Cygwin but, as far as I
</span><br>
<span class="quotelev2">&gt;&gt; understand, it shouldn't matter much since Cygwin these days can
</span><br>
<span class="quotelev2">&gt;&gt; reproduce a POSIX environment very well. Also, I don't quite
</span><br>
<span class="quotelev2">&gt;&gt; understand why is it looking for what it seems (to me) to be
</span><br>
<span class="quotelev2">&gt;&gt; windows-based function, since it is in a POSIX environment.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much. Please let me know if there is any other
</span><br>
<span class="quotelev2">&gt;&gt; information I can provide to help track this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All the best,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Gustavo Seabra
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Associate
</span><br>
<span class="quotelev2">&gt;&gt; Quantum Theory Project - University of Florida
</span><br>
<span class="quotelev2">&gt;&gt; Gainesville - Florida - USA
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7127.php">Gilbert Grosdidier: "Re: [OMPI users] Working with a CellBlade cluster"</a>
<li><strong>Previous message:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7125.php">George Bosilca: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7128.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
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
