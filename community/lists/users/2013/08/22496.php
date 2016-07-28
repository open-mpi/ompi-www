<?
$subject_val = "[OMPI users] Re-locate OpenMPI installation on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 15 19:33:04 2013" -->
<!-- isoreceived="20130815233304" -->
<!-- sent="Thu, 15 Aug 2013 16:33:02 -0700" -->
<!-- isosent="20130815233302" -->
<!-- name="Eric Heien" -->
<!-- email="emheien_at_[hidden]" -->
<!-- subject="[OMPI users] Re-locate OpenMPI installation on OS X" -->
<!-- id="6C121AE5-6171-4E63-B90F-2A0DE946FE81_at_ucdavis.edu" -->
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
<strong>Subject:</strong> [OMPI users] Re-locate OpenMPI installation on OS X<br>
<strong>From:</strong> Eric Heien (<em>emheien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-15 19:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Previous message:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Reply:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm compiling OpenMPI 1.6.5 on a set of different machines with different operating systems.  I install OpenMPI in directory A, then later move it to directory B and compile my own code with mpicc or mpic++.  Of course I need to set the OPAL_PREFIX environment variable to point to directory B.  This works fine on all my platforms (RedHat, Ubuntu, Fedora, Debian, etc) but still fails on Mac OS X 10.7 and 10.8 with the following error:
<br>
<p>[xxx] ~ &gt; env | grep OPAL
<br>
OPAL_PREFIX=/Users/eheien/B/
<br>
[xxx] ~ &gt; mpicc
<br>
dyld: Library not loaded: /Users/eheien/A/lib/libopen-pal.4.dylib
<br>
&nbsp;&nbsp;Referenced from: /Users/eheien/B/bin/mpicc
<br>
&nbsp;&nbsp;Reason: image not found
<br>
Trace/BPT trap: 5
<br>
<p>It appears the libopen-pal path is hardcoded into the opal_wrapper on OS X (I can also find it in the binary).  Does this sound like correct behavior?  If so, is there a way to get this to work correctly with OPAL_PREFIX like it does on the other operating systems?
<br>
<p>Thank you for your help,
<br>
<p>-Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Previous message:</strong> <a href="22495.php">Rolf vandeVaart: "Re: [OMPI users] Trouble configuring 1.7.2 for Cuda 5.0.35"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>Reply:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
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
