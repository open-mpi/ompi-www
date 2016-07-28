<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 30 15:59:28 2005" -->
<!-- isoreceived="20051230205928" -->
<!-- sent="Fri, 30 Dec 2005 16:01:47 -0500 (EST)" -->
<!-- isosent="20051230210147" -->
<!-- name="Michael L. Stokes" -->
<!-- email="mstokes_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] (no subject)" -->
<!-- id="59397.70.210.27.171.1135976507.squirrel_at_loginhost.osc.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F691AFD9-5B3E-4112-814A-52408FE31116_at_open-mpi.org" -->
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
<strong>From:</strong> Michael L. Stokes (<em>mstokes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-30 16:01:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0456.php">Jyh-Shyong Ho: "[O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Dec 30, 2005, at 1:05 PM, Michael L. Stokes wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled and installed OpenMPI on a SUSE based SGI PRISM (8
</span><br>
<span class="quotelev2">&gt;&gt; processor model).  I configured the build with --with-device=ch_shmem,
</span><br>
<span class="quotelev2">&gt;&gt; otherwise I took all the defaults. I installed as root using the
</span><br>
<span class="quotelev2">&gt;&gt; default
</span><br>
<span class="quotelev2">&gt;&gt; install prefix. SO good so far.  Then I compile my hello world project
</span><br>
<span class="quotelev2">&gt;&gt; using mpiCC, and again this looks good. I run ldd on the executable
</span><br>
<span class="quotelev2">&gt;&gt; and I
</span><br>
<span class="quotelev2">&gt;&gt; was convinced that is is using the OpenMPI libs and not the MPT libs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just so you know, the --with-device is not a valid configure option
</span><br>
<span class="quotelev1">&gt; for Open MPI (it looks like one for MPICH).
</span><br>
<p>opps!!
<br>
<p><span class="quotelev1">&gt; Configure happily
</span><br>
<span class="quotelev1">&gt; ignores flags it doesn't understand, so no harm was done.  Your build
</span><br>
<span class="quotelev1">&gt; most likely included support for our shared memory transport anyway,
</span><br>
<span class="quotelev1">&gt; as it is built on any platform that supports mmap().  You can confirm
</span><br>
<span class="quotelev1">&gt; this by running:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    ompi_info | grep btl
</span><br>
<p>It returns MCA btl: self, MCA btl : sm, and MCA btl: tcp so I would guess
<br>
the sm is for shared memory.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which will list all available btls (btl is our communication device
</span><br>
<span class="quotelev1">&gt; support layer).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, when I run it using mpirun -np 4 a.out, I get no output to
</span><br>
<span class="quotelev2">&gt;&gt; the
</span><br>
<span class="quotelev2">&gt;&gt; screen and top only reports that mpirun is there (no a.out's).  I
</span><br>
<span class="quotelev2">&gt;&gt; cannot
</span><br>
<span class="quotelev2">&gt;&gt; kill the process using a keyboard interrupt.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would appreciate any advise on either how to build, run, or debug
</span><br>
<span class="quotelev2">&gt;&gt; this app.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's unexpected.  Are you using a batch scheduler of any type?
</span><br>
<p>Nope.  it's running interactive.
<br>
<p><span class="quotelev1">&gt; Could you rerun mpirun with the -d flag to turn on debugging output
</span><br>
<span class="quotelev1">&gt; and send the result to the list?  That should hopefully give us some
</span><br>
<span class="quotelev1">&gt; useful information.  Also, if you could include the complete output
</span><br>
<span class="quotelev1">&gt; of &quot;ompi_info&quot;, that would be much appreciated.
</span><br>
<p>See attached, and many thanks. --Mike
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><p>---------------------------------------
<br>
Michael L. Stokes, Ph.D.
<br>
Integrated Modeling &amp; Test On-site Lead
<br>
RTTC/WST&amp;E Support
<br>
Room 27 Building 4500
<br>
Redstone Arsenal, AL 35898
<br>
<p>Ohio Supercomputer Center
<br>
1224 Kinnear Road
<br>
Columbus, OH 43212-1163
<br>
<p>256.876.5967 phone
<br>
256.876.7918 fax
<br>
mstokes_at_[hidden]
<br>

<br><p>
<p><p><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0455/output_lst">output_lst</a>
</ul>
<!-- attachment="output_lst" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0456.php">Jyh-Shyong Ho: "[O-MPI users] OpenMPI 1.0.1 with Torque 2.0"</a>
<li><strong>Previous message:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="0454.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0464.php">Brian Barrett: "Re: [O-MPI users] (no subject)"</a>
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
