<?
$subject_val = "Re: [OMPI users] PATH settings";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 07:27:00 2011" -->
<!-- isoreceived="20110924112700" -->
<!-- sent="Sat, 24 Sep 2011 07:26:49 -0400" -->
<!-- isosent="20110924112649" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PATH settings" -->
<!-- id="A941AC2B-2738-4129-A1CC-C86AD8A0FAD5_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="20110923030634.GA13653_at_stikine.sfu.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] PATH settings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 07:26:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17423.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Reply:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2011, at 11:06 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to figure out how openmpi (1.4.3) sets its PATH
</span><br>
<span class="quotelev1">&gt; for executables. From the man page:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Locating Files
</span><br>
<span class="quotelev1">&gt;    If no relative or absolute path is specified for a file, Open MPI  will
</span><br>
<span class="quotelev1">&gt;    first  look  for  files  by  searching the directories specified by the
</span><br>
<span class="quotelev1">&gt;    --path option.  If there is no --path option set or if the file is  not
</span><br>
<span class="quotelev1">&gt;    found at the --path location, then Open MPI will search the user&#146;s PATH
</span><br>
<span class="quotelev1">&gt;    environment variable as defined on the source node(s).
</span><br>
<p>Oops -- it's not the source node, it's the running node.  That being said, sometimes they're the same thing, and sometimes the PATH is copied (by the underlying run-time environment) to the target node.
<br>
<p><span class="quotelev1">&gt; This does not appear to be entirely correct - as far as I can tell
</span><br>
<span class="quotelev1">&gt; openmpi always prepends its own bin directory to the PATH before
</span><br>
<span class="quotelev1">&gt; searching for the executable. Can that be switched off?
</span><br>
<p>It should not be doing that unless you are specifying the full path name to mpirun, or using the --prefix option.
<br>
<p><span class="quotelev1">&gt; Furthermore, openmpi appears to use
</span><br>
<span class="quotelev1">&gt; a) the current value of PATH on the node where mpiexec is running;
</span><br>
<span class="quotelev1">&gt; b) whatever PATH is used by ssh on the remote nodes.
</span><br>
<p>mpirun uses the $PATH local to where it is.  We don't ship the PATH to the remote node unless you tell mpirun to via the -x PATH option (as you noted below).  We've found that default shipping the PATH to remote nodes can cause unexpected problems.
<br>
<p>That being said, some run-time systems (e.g., SLURM, Torque) automatically ship the front-end PATH to the back-end machine(s) for you.  Open MPI just &quot;inherits&quot; this PATH on the remote node, so to speak.  ssh doesn't do this by default.
<br>
<p>Here's an example with 1.4.3 running SLURM on my test cluster at Cisco.  This is in an SLURM allocation; I am running on the head node.  Note that I'm a tcsh user, so I use &quot;echo $path&quot;, not &quot;echo $PATH&quot;:
<br>
<p>-----
<br>
[4:23] svbu-mpi:~ % hostname
<br>
svbu-mpi.cisco.com
<br>
# Note my original path
<br>
[4:23] svbu-mpi:~ % echo $path
<br>
/users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
<br>
# Since I'm in a SLURM allocation, mpirun sends jobs to a remote node
<br>
[4:23] svbu-mpi:~ % mpirun -np 1 hostname
<br>
svbu-mpi020
<br>
# Here's my test script
<br>
[4:23] svbu-mpi:~ % cat foo.csh
<br>
#!/bin/tcsh -f
<br>
echo $path
<br>
# When I run this script through mpirun, the $path is the same 
<br>
# as was displayed above
<br>
[4:23] svbu-mpi:~ % mpirun -np 1 foo.csh
<br>
/users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
<br>
# Now if I use the full path name to mpirun, I get an extra bonus
<br>
# directory in the front of my $path -- the location of where
<br>
# mpirun is located.
<br>
[4:23] svbu-mpi:~ % /home/jsquyres/bogus/bin/mpirun -np 1 foo.csh
<br>
/home/jsquyres/bogus/bin /home/jsquyres/bogus/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
<br>
[4:23] svbu-mpi:~ % 
<br>
-----
<br>
<p><span class="quotelev1">&gt; Thus,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export PATH=/path/to/special/bin:$PATH
</span><br>
<span class="quotelev1">&gt; mpiexec -n 2 -H n1,n2 special
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (n1 being the local node)
</span><br>
<span class="quotelev1">&gt; will usually fail even if the directory structure is identical on
</span><br>
<span class="quotelev1">&gt; the two nodes. For this to work
</span><br>
<p>The PATH you set will be available on n1, but it depends on the underlying run-time launcher if it is available on n2.  ssh will not copy your PATH to n2 by default, but others will (e.g., SLURM).
<br>
<p><span class="quotelev1">&gt; mpiexec -n 2 -H n1,n2 -x PATH special
</span><br>
<p>That will work for ssh in this case, yes.
<br>
<p><span class="quotelev1">&gt; What I would like to see is a configure option that allows me to configure
</span><br>
<span class="quotelev1">&gt; openmpi such that the current PATH on the node where mpiexec is running
</span><br>
<span class="quotelev1">&gt; is used as the PATH on all nodes (by default). Or is there a reason why
</span><br>
<span class="quotelev1">&gt; that is a really bad idea?
</span><br>
<p>If your nodes are not exactly the same, this can lead to all kinds of badness.  That's why we didn't do it by default.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17423.php">Jeff Squyres: "Re: [OMPI users] unresolvable R_X86_64_64 relocation against symbol `mpi_fortran_*"</a>
<li><strong>Previous message:</strong> <a href="17421.php">Jeff Squyres: "Re: [OMPI users] Segfault on any MPI communication on head node"</a>
<li><strong>In reply to:</strong> <a href="17402.php">Martin Siegert: "[OMPI users] PATH settings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
<li><strong>Reply:</strong> <a href="17433.php">Martin Siegert: "Re: [OMPI users] PATH settings"</a>
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
