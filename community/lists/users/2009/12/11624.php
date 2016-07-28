<?
$subject_val = "Re: [OMPI users] man-files not installed";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 10:17:52 2009" -->
<!-- isoreceived="20091221151752" -->
<!-- sent="Mon, 21 Dec 2009 08:17:43 -0700" -->
<!-- isosent="20091221151743" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] man-files not installed" -->
<!-- id="C0DB0D08-7AF5-4874-A9F5-CF98288FB00F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9b0da5ce0912210644o363311d3n8e207d4cdfeb2eee_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] man-files not installed<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-21 10:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>Previous message:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
<li><strong>In reply to:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good catch - will correct it!
<br>
<p>Thanks
<br>
<p>On Dec 21, 2009, at 7:44 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Thanks, that did it!
</span><br>
<span class="quotelev1">&gt; BTW, in the man page for mpirun you should perhaps mention the &quot;!&quot;
</span><br>
<span class="quotelev1">&gt; option in xterm - the one that keeps the xterms open after the
</span><br>
<span class="quotelev1">&gt; application exits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Dec 21, 2009 at 3:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is your MANPATH set to point to /opt/openmpi/man? Check the order as well to make sure that is first - could be an older install (like the system default) is before it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 21, 2009, at 5:46 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I just installed open-mpi version 1.4,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and now i noticed that the man-files are not properly installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i do
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  man mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i get a different output than what is in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  openmpi/share/man/man1/mpirun.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I installed with this configuration:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  ./configure --prefix=/opt/openmpi-1.4 --disable-mpi-f77
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --disable-mpi-f90 --with-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and afterwards made a soft link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ln -s /opt/openmpi-1.4 /opt/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is on fedora fc8, but i have the same problem on my gentoo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines (2.6.29-gentoo-r5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody know how to get replace the old man files with the new ones?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank You
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Jody
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="11625.php">Sangamesh B: "[OMPI users] Is OpenMPI's orted = MPICH2's smpd?"</a>
<li><strong>Previous message:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
<li><strong>In reply to:</strong> <a href="11623.php">jody: "Re: [OMPI users] man-files not installed"</a>
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
