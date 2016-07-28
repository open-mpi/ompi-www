<?
$subject_val = "Re: [OMPI users] new to MPI+infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 19 12:27:49 2007" -->
<!-- isoreceived="20071219172749" -->
<!-- sent="Wed, 19 Dec 2007 09:27:41 -0800" -->
<!-- isosent="20071219172741" -->
<!-- name="Brian Budge" -->
<!-- email="brian.budge_at_[hidden]" -->
<!-- subject="Re: [OMPI users] new to MPI+infiniband" -->
<!-- id="5b7094580712190927g4e54ea5bl65b79412c5516ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C1F4C1C5-D47F-4A9C-8096-9D4754A5E6DF_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] new to MPI+infiniband<br>
<strong>From:</strong> Brian Budge (<em>brian.budge_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-19 12:27:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4743.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] Outage of the OSL services"</a>
<li><strong>Previous message:</strong> <a href="4741.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI users] new to MPI+infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Wow, I'm amazed... it just works &quot;out-of-the-box&quot; configured with
<br>
with-openib.  I guess the new kernel supplies everything I need.
<br>
<p>Thanks a bunch for the clues.
<br>
<p>&nbsp;&nbsp;Brian
<br>
<p>On Dec 19, 2007 5:55 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; In general, you need a functioning IB subsystem on your machines for
</span><br>
<span class="quotelev1">&gt; OMPI to build for and use IB.  This includes both the set of kernel
</span><br>
<span class="quotelev1">&gt; drivers and the userspace libraries.  In particular, Open MPI v1.2
</span><br>
<span class="quotelev1">&gt; uses the &quot;ibverbs&quot; library.  If OMPI can find the ibverbs library and
</span><br>
<span class="quotelev1">&gt; headers during its configure phase, it will build IB support and try
</span><br>
<span class="quotelev1">&gt; to use it at run time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see if OMPI finds what it needs in the stdout of configure --
</span><br>
<span class="quotelev1">&gt; search for the string &quot;openib&quot; and see where it configures the BTL
</span><br>
<span class="quotelev1">&gt; openib component.  If it ends with a message indicating that it will
</span><br>
<span class="quotelev1">&gt; compile the openib BTL component, then you're good.  If not, you'll
</span><br>
<span class="quotelev1">&gt; see some specific tests that fail that indicate why it won't include
</span><br>
<span class="quotelev1">&gt; that support (e.g., can't find the right header files or somesuch).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 19, 2007, at 8:49 AM, pat.o'bryant_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian,
</span><br>
<span class="quotelev2">&gt; &gt;    Here is how I do it:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ./configure --prefix /opt/openmpi-1.2.4 --with-openib=/usr/local/
</span><br>
<span class="quotelev2">&gt; &gt; ofed \
</span><br>
<span class="quotelev2">&gt; &gt; --without-tm CC=icc CXX=icpc F77=ifort FC=ifort \
</span><br>
<span class="quotelev2">&gt; &gt; --with-threads=posix --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; J.W. (Pat) O'Bryant,Jr.
</span><br>
<span class="quotelev2">&gt; &gt; Business Line Infrastructure
</span><br>
<span class="quotelev2">&gt; &gt; Technical Systems, HPC
</span><br>
<span class="quotelev2">&gt; &gt; Office: 713-431-7022
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             &quot;Brian Budge&quot;
</span><br>
<span class="quotelev2">&gt; &gt;             &lt;brian.budge_at_g
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mail.com&gt;                                                  To
</span><br>
<span class="quotelev2">&gt; &gt;             Sent by:                 &quot;Open MPI Users&quot;
</span><br>
<span class="quotelev2">&gt; &gt;             users-bounces@           &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;             open-
</span><br>
<span class="quotelev2">&gt; &gt; mpi.org                                               cc
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject
</span><br>
<span class="quotelev2">&gt; &gt;             12/19/07 12:35           [OMPI users] new to MPI
</span><br>
<span class="quotelev2">&gt; &gt; +infiniband
</span><br>
<span class="quotelev2">&gt; &gt;             AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;             Please respond
</span><br>
<span class="quotelev2">&gt; &gt;                   to
</span><br>
<span class="quotelev2">&gt; &gt;             Open MPI Users
</span><br>
<span class="quotelev2">&gt; &gt;             &lt;users_at_open-mp
</span><br>
<span class="quotelev2">&gt; &gt;                 i.org&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all -
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have been using OpenMPI for quite a while now, and its working out
</span><br>
<span class="quotelev2">&gt; &gt; great.
</span><br>
<span class="quotelev2">&gt; &gt; I was looking at the FAQ and trying to figure out how to configure
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; with infiniband.  It shows how to enable IB pointing to the OFED
</span><br>
<span class="quotelev2">&gt; &gt; directory.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have infiniband built into the kernel, along with IP over IB and
</span><br>
<span class="quotelev2">&gt; &gt; with the
</span><br>
<span class="quotelev2">&gt; &gt; Mellanox drivers.  What would I still need to install, and how would I
</span><br>
<span class="quotelev2">&gt; &gt; configure OpenMPI to work with this?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt;  Brian_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4742/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4743.php">Jeff Squyres: "[OMPI users] Fwd: [all-osl-users] Outage of the OSL services"</a>
<li><strong>Previous message:</strong> <a href="4741.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4728.php">Jeff Squyres: "Re: [OMPI users] new to MPI+infiniband"</a>
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
