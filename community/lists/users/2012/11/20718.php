<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 14 13:04:41 2012" -->
<!-- isoreceived="20121114180441" -->
<!-- sent="Wed, 14 Nov 2012 19:04:31 +0100" -->
<!-- isosent="20121114180431" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="C6741E06-AB17-40F6-ABBB-54B8939DD88D_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FDAA43115FAF4A4F88865097FC2C3CC903BF3343_at_rz-mbx1.win.rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Setting RPATH for Open MPI libraries<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-14 13:04:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20719.php">Ifeanyi: "[OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>Previous message:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.11.2012 um 10:53 schrieb Iliev, Hristo:
<br>
<p><span class="quotelev1">&gt; Hi, Reuti,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is an informative article on dynamic libraries path in OS X:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://blogs.oracle.com/dipol/entry/dynamic_libraries_rpath_and_mac">https://blogs.oracle.com/dipol/entry/dynamic_libraries_rpath_and_mac</a>
</span><br>
<p>Thx. - Reuti
<br>
<p><p><span class="quotelev1">&gt; The first comment is very informative too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards,
</span><br>
<span class="quotelev1">&gt; Hristo
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Hristo Iliev, Ph.D. -- High Performance Computing
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Rechen- und Kommunikationszentrum der RWTH Aachen
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; On Behalf Of Reuti
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, November 11, 2012 10:18 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] Setting RPATH for Open MPI libraries
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 05.11.2012 um 04:41 schrieb Jed Brown:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff, we are averaging a half dozen support threads per week on PETSc
</span><br>
<span class="quotelev2">&gt;&gt; lists/email caused by lack of RPATH in Open MPI for non-standard install
</span><br>
<span class="quotelev2">&gt;&gt; locations. Can you either make the necessary environment modification
</span><br>
<span class="quotelev2">&gt;&gt; more visible for novice users or implement the RPATH option?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For curiosity: on Mac OS X it finds the necessary library automatically,
</span><br>
<span class="quotelev1">&gt; by
</span><br>
<span class="quotelev2">&gt;&gt; which setting is this achieved? `otool -L &lt;file&gt;` lists the correct one,
</span><br>
<span class="quotelev1">&gt; which
</span><br>
<span class="quotelev2">&gt;&gt; was used during compilation.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Sep 12, 2012 at 1:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Sep 12, 2012 at 10:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a long-standing philosophy that OMPI should add the bare
</span><br>
<span class="quotelev2">&gt;&gt; minimum number of preprocessor/compiler/linker flags to its wrapper
</span><br>
<span class="quotelev2">&gt;&gt; compilers, and let the user/administrator customize from there.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In general, I agree with that philosophy.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, a looong time ago, I started a patch to add a
</span><br>
<span class="quotelev1">&gt; --with-rpath
</span><br>
<span class="quotelev2">&gt;&gt; option to configure, but never finished it.  :-\  I can try to get it back
</span><br>
<span class="quotelev1">&gt; on my to-
</span><br>
<span class="quotelev2">&gt;&gt; do list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would be perfect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the moment, you might want to try the configure --enable-mpirun-
</span><br>
<span class="quotelev2">&gt;&gt; prefix-by-default option, too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The downside is that we tend not to bother with the mpirun for configure
</span><br>
<span class="quotelev2">&gt;&gt; and it's a little annoying to &quot;mpirun ldd&quot; when hunting for other problems
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. a missing shared lib unrelated to Open MPI).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="20719.php">Ifeanyi: "[OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>Previous message:</strong> <a href="20717.php">huaibao zhang: "Re: [OMPI users] What is the default install library for PATH and LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="20703.php">Iliev, Hristo: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
