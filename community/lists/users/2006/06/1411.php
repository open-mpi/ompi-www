<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 13 16:37:57 2006" -->
<!-- isoreceived="20060613203757" -->
<!-- sent="Tue, 13 Jun 2006 16:37:51 -0400" -->
<!-- isosent="20060613203751" -->
<!-- name="Caird, Andrew J" -->
<!-- email="acaird_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI, debugging, and Portland Group's pgdbg" -->
<!-- id="34A2103EAA952D42A158D34F30AF14CF01365E8C_at_engin-mail5.engin.umich.edu" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Caird, Andrew J (<em>acaird_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-13 16:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1412.php">Ken Mighell: "[OMPI users] Where are the nightly tarballs?"</a>
<li><strong>Previous message:</strong> <a href="1410.php">Brian Barrett: "Re: [OMPI users] pnetcdf and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Maybe reply:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>I've read the thread &quot;OpenMPI debugging support&quot;
<br>
(<a href="http://www.open-mpi.org/community/lists/users/2005/11/0370.php">http://www.open-mpi.org/community/lists/users/2005/11/0370.php</a>) and it
<br>
looks like there is improved debugging support for debuggers other than
<br>
TV in the 1.1 series.
<br>
<p>I'd like to use Portland Groups pgdbg.  It's a parallel debugger,
<br>
there's more information at <a href="http://www.pgroup.com/resources/docs.htm">http://www.pgroup.com/resources/docs.htm</a>.
<br>
<p><span class="quotelev1">&gt;From the previous thread on this topic, it looks to me like the plan for
</span><br>
1.1 and forward is to support the ability to launch the debugger &quot;along
<br>
side&quot; the application.  I don't know enough about either pgdbg or
<br>
OpenMPI to know if this is the best plan, but assuming that it is, is
<br>
there a way to see if it is happening?
<br>
<p>I've tried this two ways, the first way doesn't seem to attach to
<br>
anything:
<br>
------------------------------------------------------------------------
<br>
<pre>
----
[acaird_at_nyx-login ~]$ ompi_info | head -2
                Open MPI: 1.1a9r10177
   Open MPI SVN revision: r10177
[acaird_at_nyx-login ~]$ mpirun --debugger pgdbg --debug  -np 2 cpi
PGDBG 6.1-3 x86-64 (Cluster, 64 CPU)
Copyright 1989-2000, The Portland Group, Inc. All Rights Reserved.
Copyright 2000-2005, STMicroelectronics, Inc. All Rights Reserved.
PGDBG cannot open a window; check the DISPLAY environment variable.
Entering text mode.
pgdbg&gt; list
ERROR: No current thread.
pgdbg&gt; quit
------------------------------------------------------------------------
----
and I've tried running the whole thing under pgdbg:
------------------------------------------------------------------------
----
[acaird_at_nyx-login ~]$ pgdbg mpirun -np 2 cpi -s pgdbgscript
  { lots of mca_* loaded by ld-linux messages }
pgserv 8726: attach : attach 8720 fails
ERROR: New Process (PID 8720, HOST localhost) ATTACH FAILED.
ERROR: New Process (PID 8720, HOST localhost) IGNORED.
ERROR: cannot read value at address 0x59BFE8.
ERROR: cannot read value at address 0x59BFF0.
ERROR: cannot read value at address 0x59BFF8.
ERROR: New Process (PID 0, HOST unknown) IGNORED.
ERROR: cannot read value at address 0x2A959BBEC8.
------------------------------------------------------------------------
----
and it hangs right there until I kill it.  The two variables in this
scenario are:
PGRSH=ssh and the contents of pgdbgscript are:
------------------------------------------------------------------------
----
pgienv exe force
pgienv mode process
ignore 12
run
------------------------------------------------------------------------
----
So, the short list of questions are:
1. Has anyone done this successfully before?
2. Am I making the right assumptions about how the debugger attaches to
the processes?
3. Is this the expected behavior for this set of options to mpirun?
4. Does anyone have any suggestions for other things I might try?
Thanks a lot.
--andy
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1412.php">Ken Mighell: "[OMPI users] Where are the nightly tarballs?"</a>
<li><strong>Previous message:</strong> <a href="1410.php">Brian Barrett: "Re: [OMPI users] pnetcdf and OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Maybe reply:</strong> <a href="1441.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1565.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI, debugging, and Portland Group's pgdbg"</a>
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
