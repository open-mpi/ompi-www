<?
$subject_val = "Re: [OMPI users] libnuma issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 15 14:06:59 2009" -->
<!-- isoreceived="20090415180659" -->
<!-- sent="Wed, 15 Apr 2009 20:06:54 +0200" -->
<!-- isosent="20090415180654" -->
<!-- name="Francesco Pietra" -->
<!-- email="chiendarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libnuma issue" -->
<!-- id="b87c422a0904151106v339af1cdv49da05a8e8fa8586_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="73E9DAFE-C849-495A-A113-045231EC46E9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libnuma issue<br>
<strong>From:</strong> Francesco Pietra (<em>chiendarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-15 14:06:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8935.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I used --with-libnuma=/usr since Prentice Bisbal's suggestion and it
<br>
worked. Unfortunately, I found no way to fix the failure in finding
<br>
libimf.so when compiling openmpi-1.3.1 with intels, as you have seen
<br>
in other e-mail from me. And gnu compilers (which work well with both
<br>
openmpi and the slower code of my application) are defeated by the
<br>
faster code of my application. With limited hardware resources, I must
<br>
rely on that 40% speeding up.
<br>
<p>My post how to implement the -rpath flag, which should fix the
<br>
libimf.so problem, has found no answer. And i found no help through
<br>
google. If you have a suggestion on that it would be great.
<br>
I was referring to the following notes: &quot;However, dynamic linkage is
<br>
also a headache in that the mechanisms
<br>
used to find shared libraries during dynamic loading are not all that robust
<br>
on Linux systems running MPICH or other MPI packages.  Typically the
<br>
LOAD_LIBRARY_PATH environment variable will be used to find shared libraries
<br>
during loading, but this variable is not reliably propagated to all processes.
<br>
For this reason, for the compilers that use compiler shared libraries (ifort,
<br>
pathscale), we use LD_LIBRARY_PATH during configuration to set an -rpath
<br>
linkage option, which is reliably available in the executable.  This works
<br>
well as long as you insure that the path is the same for all machines running
<br>
pmemd.  Earlier versions of ifort actually also set -rpath, but this was
<br>
dropped due to confusing error messages when ifort is executed without
<br>
arguments.&quot;
<br>
<p>thanks
<br>
francesco
<br>
<p><p><p><p>On Wed, Apr 15, 2009 at 1:04 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Apr 6, 2009, at 4:24 PM, Prentice Bisbal wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I would appreciate help in circumventing the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe you need
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the late reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, the above is correct -- you should use --with-libnuma=/usr, not
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr/lib.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please also note in this thread:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;<a href="http://www.open-mpi.org/community/lists/users/2009/04/8853.php">http://www.open-mpi.org/community/lists/users/2009/04/8853.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We found some obscure logic issues with the handling of --with-libnuma. &#194;&#160;I
</span><br>
<span class="quotelev1">&gt; doubt that those should affect you (since you're mentioning an explicit
</span><br>
<span class="quotelev1">&gt; directory for libnuma), but I mention it to be complete.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Previous message:</strong> <a href="8935.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8932.php">Jeff Squyres: "Re: [OMPI users] libnuma issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
<li><strong>Reply:</strong> <a href="8937.php">Prentice Bisbal: "Re: [OMPI users] libnuma issue"</a>
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
