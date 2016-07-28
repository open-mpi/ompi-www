<?
$subject_val = "Re: [OMPI users] Setting RPATH for Open MPI libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 12 04:54:03 2012" -->
<!-- isoreceived="20121112095403" -->
<!-- sent="Mon, 12 Nov 2012 09:53:57 +0000" -->
<!-- isosent="20121112095357" -->
<!-- name="Iliev, Hristo" -->
<!-- email="iliev_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Setting RPATH for Open MPI libraries" -->
<!-- id="FDAA43115FAF4A4F88865097FC2C3CC903BF3343_at_rz-mbx1.win.rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FA55EAA3-E5AC-4736-849D-807284345156_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Iliev, Hristo (<em>iliev_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-12 04:53:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Reuti,
<br>
<p>Here is an informative article on dynamic libraries path in OS X:
<br>
<p><a href="https://blogs.oracle.com/dipol/entry/dynamic_libraries_rpath_and_mac">https://blogs.oracle.com/dipol/entry/dynamic_libraries_rpath_and_mac</a>
<br>
<p>The first comment is very informative too.
<br>
<p>Kind regards,
<br>
Hristo
<br>
<pre>
--
Hristo Iliev, Ph.D. -- High Performance Computing
RWTH Aachen University, Center for Computing and Communication
Rechen- und Kommunikationszentrum der RWTH Aachen
Seffenter Weg 23,  D 52074  Aachen (Germany)
&gt; -----Original Message-----
&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
&gt; On Behalf Of Reuti
&gt; Sent: Sunday, November 11, 2012 10:18 PM
&gt; To: Open MPI Users
&gt; Subject: Re: [OMPI users] Setting RPATH for Open MPI libraries
&gt; 
&gt; Hi,
&gt; 
&gt; Am 05.11.2012 um 04:41 schrieb Jed Brown:
&gt; 
&gt; &gt; Jeff, we are averaging a half dozen support threads per week on PETSc
&gt; lists/email caused by lack of RPATH in Open MPI for non-standard install
&gt; locations. Can you either make the necessary environment modification
&gt; more visible for novice users or implement the RPATH option?
&gt; 
&gt; For curiosity: on Mac OS X it finds the necessary library automatically,
by
&gt; which setting is this achieved? `otool -L &lt;file&gt;` lists the correct one,
which
&gt; was used during compilation.
&gt; 
&gt; -- Reuti
&gt; 
&gt; 
&gt; &gt;
&gt; &gt; On Wed, Sep 12, 2012 at 1:52 PM, Jed Brown &lt;jed_at_[hidden]&gt; wrote:
&gt; &gt; On Wed, Sep 12, 2012 at 10:20 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; wrote:
&gt; &gt; We have a long-standing philosophy that OMPI should add the bare
&gt; minimum number of preprocessor/compiler/linker flags to its wrapper
&gt; compilers, and let the user/administrator customize from there.
&gt; &gt;
&gt; &gt; In general, I agree with that philosophy.
&gt; &gt;
&gt; &gt;
&gt; &gt; That being said, a looong time ago, I started a patch to add a
--with-rpath
&gt; option to configure, but never finished it.  :-\  I can try to get it back
on my to-
&gt; do list.
&gt; &gt;
&gt; &gt; That would be perfect.
&gt; &gt;
&gt; &gt;
&gt; &gt; For the moment, you might want to try the configure --enable-mpirun-
&gt; prefix-by-default option, too.
&gt; &gt;
&gt; &gt; The downside is that we tend not to bother with the mpirun for configure
&gt; and it's a little annoying to &quot;mpirun ldd&quot; when hunting for other problems
&gt; (e.g. a missing shared lib unrelated to Open MPI).
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20703/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20704.php">Mark Bolstad: "Re: [OMPI users] Where to start with MPI on OSX?"</a>
<li><strong>Previous message:</strong> <a href="20702.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>In reply to:</strong> <a href="20701.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
<li><strong>Reply:</strong> <a href="20718.php">Reuti: "Re: [OMPI users] Setting RPATH for Open MPI libraries"</a>
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
