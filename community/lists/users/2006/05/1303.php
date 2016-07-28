<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 25 19:37:28 2006" -->
<!-- isoreceived="20060525233728" -->
<!-- sent="Thu, 25 May 2006 19:37:22 -0400" -->
<!-- isosent="20060525233722" -->
<!-- name="Paul" -->
<!-- email="paul.lundin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pallas assistance ?" -->
<!-- id="d2403b0605251637o3782a730t84a007f68c0d9a09_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF8FD59B_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>Date:</strong> 2006-05-25 19:37:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>In reply to:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Already done. I grabbed the rc5 this morning and rebuilt everything. I am
<br>
still having the same issue. I sent a message to the openib list about it. I
<br>
wont cross-spam this list with that message. I was wondering if you have
<br>
access to that list or not ? I can send you a copy if you need it. The
<br>
summary is that there are numerous apparent issues, though I have made a
<br>
little headway with regards to what the issues are, no gaurantees that I am
<br>
right in my guessing.
<br>
<p>Its not a problem. At the moment I have the resources to chase it. Just let
<br>
me know what needs to be done.
<br>
<p><p>On 5/25/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  In further discussions with other OMPI team members, I double checked
</span><br>
<span class="quotelev1">&gt; (should have checked this in the beginning, sorry): OFED 1.0rc4 does
</span><br>
<span class="quotelev1">&gt; not support 64 bit on PPC64 platforms; it only supports 32 bit on PPC64
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mellanox says that 1.0rc5 (cut this morning) supports 64 bit on PPC64
</span><br>
<span class="quotelev1">&gt; platforms.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you try upgrading?  Sorry for all the hassle.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] *On
</span><br>
<span class="quotelev1">&gt; Behalf Of *Paul
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, May 25, 2006 11:51 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] pallas assistance ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Okay, I rebuilt using those diffs. Currently I am still having issues with
</span><br>
<span class="quotelev1">&gt; pallas however. That being said I think my issue is more with
</span><br>
<span class="quotelev1">&gt; compiling/linking pallas. Here is my pallas make_$arch file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_HOME = /opt/ompi/
</span><br>
<span class="quotelev1">&gt; MPI_INCLUDE = $(MPI_HOME)/include
</span><br>
<span class="quotelev1">&gt; LIB_PATH =
</span><br>
<span class="quotelev1">&gt; LIBS =
</span><br>
<span class="quotelev1">&gt; CC = ${MPI_HOME}/bin/mpicc
</span><br>
<span class="quotelev1">&gt; OPTFLAGS = -O
</span><br>
<span class="quotelev1">&gt; CLINKER = ${CC}
</span><br>
<span class="quotelev1">&gt; LDFLAGS = -m64
</span><br>
<span class="quotelev1">&gt; CPPFLAGS = -m64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again ldd'ing the IMB-MPI1 file works fine, and the compilation completes
</span><br>
<span class="quotelev1">&gt; okay.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 5/25/06, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  Gleb just committed some fixes for the PPC64 issue last night (<a href="https://svn.open-mpi.org/trac/ompi/changeset/10059">https://svn.open-mpi.org/trac/ompi/changeset/10059</a>
</span><br>
<span class="quotelev2">&gt; &gt; ).  It should only affect the eager RDMA issues, but it would be a
</span><br>
<span class="quotelev2">&gt; &gt; worthwhile datapoint if you could test with (i.e., specify no MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameters on your mpirun command line, so it should use RDMA by default).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm waiting for my own PPC64 machine to be reconfigured so that I can
</span><br>
<span class="quotelev2">&gt; &gt; test again; can you try with r10059 or later?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;  *From:* users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
<span class="quotelev2">&gt; &gt; *On Behalf Of *Paul
</span><br>
<span class="quotelev2">&gt; &gt; *Sent:* Wednesday, May 24, 2006 9:35 PM
</span><br>
<span class="quotelev2">&gt; &gt; *To:* Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt; *Subject:* Re: [OMPI users] pallas assistance ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  It makes no difference on my end. Exact same error.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 5/24/06, Andrew Friedley &lt;afriedle_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Paul wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Somebody call orkin. ;-P
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Well I tried running it with things set as noted in the bug report.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; However it doesnt change anything on my end. I am willing to do any
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; verification you guys need (time permitting and all). Anything
</span><br>
<span class="quotelev3">&gt; &gt; &gt; special
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; needed to get mpi_latency to compile ? I can run that to verify that
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; things are actually working on my end.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_something ompi]#
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shouldn't the parameter be '--mca btl_openib_use_eager_rdma'?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; [root_at_something ompi]# /opt/ompi/bin/mpirun --mca
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl_openmpi_use_srq 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -np 2 -hostfile machine.list ./IMB-MPI1
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Same here - '--mca btl_openib_use_srq'
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Andrew
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1303/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1304.php">Terry Reeves: "Re: [OMPI users] Fortran support not installing"</a>
<li><strong>Previous message:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
<li><strong>In reply to:</strong> <a href="1302.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] pallas assistance ?"</a>
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
