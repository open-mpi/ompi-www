<?
$subject_val = "Re: [OMPI users] Re-locate OpenMPI installation on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 16 09:22:08 2013" -->
<!-- isoreceived="20130816132208" -->
<!-- sent="Fri, 16 Aug 2013 15:21:56 +0200" -->
<!-- isosent="20130816132156" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re-locate OpenMPI installation on OS X" -->
<!-- id="51924D05-E104-455A-AD7B-5F870AD354AA_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6C121AE5-6171-4E63-B90F-2A0DE946FE81_at_ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Re-locate OpenMPI installation on OS X<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-16 09:21:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Previous message:</strong> <a href="22496.php">Eric Heien: "[OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>In reply to:</strong> <a href="22496.php">Eric Heien: "[OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Reply:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 16.08.2013 um 01:33 schrieb Eric Heien:
<br>
<p><span class="quotelev1">&gt; I'm compiling OpenMPI 1.6.5 on a set of different machines with different operating systems.  I install OpenMPI in directory A, then later move it to directory B and compile my own code with mpicc or mpic++.  Of course I need to set the OPAL_PREFIX environment variable to point to directory B.  This works fine on all my platforms (RedHat, Ubuntu, Fedora, Debian, etc) but still fails on Mac OS X 10.7 and 10.8 with the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [xxx] ~ &gt; env | grep OPAL
</span><br>
<span class="quotelev1">&gt; OPAL_PREFIX=/Users/eheien/B/
</span><br>
<span class="quotelev1">&gt; [xxx] ~ &gt; mpicc
</span><br>
<span class="quotelev1">&gt; dyld: Library not loaded: /Users/eheien/A/lib/libopen-pal.4.dylib
</span><br>
<span class="quotelev1">&gt;  Referenced from: /Users/eheien/B/bin/mpicc
</span><br>
<p>Besides setting the OPAL_PREFIX, also the DYLD_LIBRARY_PATH needs to be adjusted to point to the new /Users/eheien/B/lib location.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt;  Reason: image not found
</span><br>
<span class="quotelev1">&gt; Trace/BPT trap: 5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It appears the libopen-pal path is hardcoded into the opal_wrapper on OS X (I can also find it in the binary).  Does this sound like correct behavior?  If so, is there a way to get this to work correctly with OPAL_PREFIX like it does on the other operating systems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Eric
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Previous message:</strong> <a href="22496.php">Eric Heien: "[OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>In reply to:</strong> <a href="22496.php">Eric Heien: "[OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Reply:</strong> <a href="22498.php">Nathan Hjelm: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
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
