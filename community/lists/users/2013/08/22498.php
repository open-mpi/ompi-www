<?
$subject_val = "Re: [OMPI users] Re-locate OpenMPI installation on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 16 11:25:00 2013" -->
<!-- isoreceived="20130816152500" -->
<!-- sent="Fri, 16 Aug 2013 09:24:59 -0600" -->
<!-- isosent="20130816152459" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Re-locate OpenMPI installation on OS X" -->
<!-- id="20130816152459.GI76790_at_panthera.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51924D05-E104-455A-AD7B-5F870AD354AA_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-16 11:24:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>In reply to:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may also need to update where the binaries and libraries look. See
<br>
the man pages for otool and install_name_tool for more information. Here
<br>
is a basic example:
<br>
<p>bash-3.2# otool -L libmpi.dylib 
<br>
libmpi.dylib:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libmpi.1.dylib (compatibility version 3.0.0, current version 3.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libopen-rte.5.dylib (compatibility version 6.0.0, current version 6.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libopen-pal.5.dylib (compatibility version 6.0.0, current version 6.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 169.3.0)
<br>
<p>bash-3.2# install_name_tool -change /opt/local/lib/libopen-rte.5.dylib @loader_path/libopen-rte.5.dylib libmpi.dylib 
<br>
bash-3.2# install_name_tool -id /some/path/lib/libmpi.1.dylib libmpi.1.dylib
<br>
<p>bash-3.2# otool -L libmpi.dylib 
<br>
libmpi.dylib:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/some/path/lib/libmpi.1.dylib (compatibility version 3.0.0, current version 3.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;@loader_path/libopen-rte.5.dylib (compatibility version 6.0.0, current version 6.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/libopen-pal.5.dylib (compatibility version 6.0.0, current version 6.2.0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/usr/lib/libSystem.B.dylib (compatibility version 1.0.0, current version 169.3.0)
<br>
<p><p>@loader_path is a special token to look in directory containing the
<br>
library/binary. You can also set an rpath using install_name_tool -rpath
<br>
then use the @rpath token.
<br>
<p>-Nathan
<br>
<p>On Fri, Aug 16, 2013 at 03:21:56PM +0200, Reuti wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 16.08.2013 um 01:33 schrieb Eric Heien:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm compiling OpenMPI 1.6.5 on a set of different machines with different operating systems.  I install OpenMPI in directory A, then later move it to directory B and compile my own code with mpicc or mpic++.  Of course I need to set the OPAL_PREFIX environment variable to point to directory B.  This works fine on all my platforms (RedHat, Ubuntu, Fedora, Debian, etc) but still fails on Mac OS X 10.7 and 10.8 with the following error:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [xxx] ~ &gt; env | grep OPAL
</span><br>
<span class="quotelev2">&gt; &gt; OPAL_PREFIX=/Users/eheien/B/
</span><br>
<span class="quotelev2">&gt; &gt; [xxx] ~ &gt; mpicc
</span><br>
<span class="quotelev2">&gt; &gt; dyld: Library not loaded: /Users/eheien/A/lib/libopen-pal.4.dylib
</span><br>
<span class="quotelev2">&gt; &gt;  Referenced from: /Users/eheien/B/bin/mpicc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides setting the OPAL_PREFIX, also the DYLD_LIBRARY_PATH needs to be adjusted to point to the new /Users/eheien/B/lib location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Reason: image not found
</span><br>
<span class="quotelev2">&gt; &gt; Trace/BPT trap: 5
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It appears the libopen-pal path is hardcoded into the opal_wrapper on OS X (I can also find it in the binary).  Does this sound like correct behavior?  If so, is there a way to get this to work correctly with OPAL_PREFIX like it does on the other operating systems?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thank you for your help,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Eric
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22499.php">Siddhartha Jana: "[OMPI users] Mixing Linux's CPU-shielding with mpirun's bind-to-core"</a>
<li><strong>Previous message:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
<li><strong>In reply to:</strong> <a href="22497.php">Reuti: "Re: [OMPI users] Re-locate OpenMPI installation on OS X"</a>
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
