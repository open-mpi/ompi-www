<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 11:51:17 2006" -->
<!-- isoreceived="20060525155117" -->
<!-- sent="Thu, 25 May 2006 11:51:15 -0400" -->
<!-- isosent="20060525155115" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="d2403b0605250851j2b155ed2jf0873939f71ff6fc_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8C4286_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Paul (<em>paul.lundin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-25 11:51:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I rebuilt using those diffs. Currently I am still having issues with
<br>
pallas however. That being said I think my issue is more with
<br>
compiling/linking pallas. Here is my pallas make_$arch file:
<br>
<p>MPI_HOME = /opt/ompi/
<br>
MPI_INCLUDE = $(MPI_HOME)/include
<br>
LIB_PATH =
<br>
LIBS =
<br>
CC = ${MPI_HOME}/bin/mpicc
<br>
OPTFLAGS = -O
<br>
CLINKER = ${CC}
<br>
LDFLAGS = -m64
<br>
CPPFLAGS = -m64
<br>
<p>Again ldd'ing the IMB-MPI1 file works fine, and the compilation completes
<br>
okay.
<br>
<p>On 5/25/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Gleb just committed some fixes for the PPC64 issue last night (
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/10059">https://svn.open-mpi.org/trac/ompi/changeset/10059</a>).  It should only
</span><br>
<span class="quotelev1">&gt; affect the eager RDMA issues, but it would be a worthwhile datapoint if you
</span><br>
<span class="quotelev1">&gt; could test with (i.e., specify no MCA parameters on your mpirun command
</span><br>
<span class="quotelev1">&gt; line, so it should use RDMA by default).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm waiting for my own PPC64 machine to be reconfigured so that I can test
</span><br>
<span class="quotelev1">&gt; again; can you try with r10059 or later?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Paul
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, May 24, 2006 9:35 PM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] pallas assistance ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It makes no difference on my end. Exact same error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/24/06, Andrew Friedley &lt;afriedle_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Somebody call orkin. ;-P
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Well I tried running it with things set as noted in the bug report.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However it doesnt change anything on my end. I am willing to do any
</span><br>
<span class="quotelev3">&gt; &gt; &gt; verification you guys need (time permitting and all). Anything special
</span><br>
<span class="quotelev3">&gt; &gt; &gt; needed to get mpi_latency to compile ? I can run that to verify that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; things are actually working on my end.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_something ompi]#
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't the parameter be '--mca btl_openib_use_eager_rdma'?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_something ompi]# /opt/ompi/bin/mpirun --mca btl_openmpi_use_srq
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -np 2 -hostfile machine.list ./IMB-MPI1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Same here - '--mca btl_openib_use_srq'
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Andrew
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1295.php">Brock Palen: "Re: [OMPI users] Problems with myirnet support on PPC"</a>
<li><strong>Previous message:</strong> <a href="1293.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>In reply to:</strong> <a href="1292.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
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
