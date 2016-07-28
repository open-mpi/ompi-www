<?
$subject_val = "Re: [OMPI users] PATH settings";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 24 21:53:10 2011" -->
<!-- isoreceived="20110925015310" -->
<!-- sent="Sat, 24 Sep 2011 18:53:05 -0700" -->
<!-- isosent="20110925015305" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PATH settings" -->
<!-- id="20110925015305.GA25659_at_stikine.sfu.ca" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A941AC2B-2738-4129-A1CC-C86AD8A0FAD5_at_cisco.com" -->
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
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-24 21:53:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Jeff, for the details!
<br>
<p>On Sat, Sep 24, 2011 at 07:26:49AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Sep 22, 2011, at 11:06 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am trying to figure out how openmpi (1.4.3) sets its PATH
</span><br>
<span class="quotelev2">&gt; &gt; for executables. From the man page:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Locating Files
</span><br>
<span class="quotelev2">&gt; &gt;    If no relative or absolute path is specified for a file, Open MPI  will
</span><br>
<span class="quotelev2">&gt; &gt;    first  look  for  files  by  searching the directories specified by the
</span><br>
<span class="quotelev2">&gt; &gt;    --path option.  If there is no --path option set or if the file is  not
</span><br>
<span class="quotelev2">&gt; &gt;    found at the --path location, then Open MPI will search the user&#226;&#128;&#153;s PATH
</span><br>
<span class="quotelev2">&gt; &gt;    environment variable as defined on the source node(s).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oops -- it's not the source node, it's the running node.  That being said, sometimes they're the same thing, and sometimes the PATH is copied (by the underlying run-time environment) to the target node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This does not appear to be entirely correct - as far as I can tell
</span><br>
<span class="quotelev2">&gt; &gt; openmpi always prepends its own bin directory to the PATH before
</span><br>
<span class="quotelev2">&gt; &gt; searching for the executable. Can that be switched off?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should not be doing that unless you are specifying the full path name to mpirun, or using the --prefix option.
</span><br>
<p>By now I recognize that my tests where flawed in in several aspects:
<br>
1) the path settings depend on whether you specify the full path to
<br>
mpiexec (as you mention), i.e., &quot;/usr/local/openmpi/bin/mpiexec&quot; does things
<br>
differently than &quot;mpiexec&quot; even though the executable is the same.
<br>
2) it makes a difference whether mpiexec runs from a torque batch
<br>
job or interactively (as you say below as well).
<br>
<p>Nevertheless, I cannot avoid mpiexec prepending its own directory to the
<br>
PATH. This is what I tried:
<br>
<p>dev:~&gt; echo $PATH
<br>
/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin
<br>
# this is the default PATH on every node
<br>
dev:~&gt; cat /home/siegert/scratch/test/path-0.0.1/bin/path.sh
<br>
#!/bin/bash
<br>
echo &quot;`hostname`, $0:&quot;
<br>
echo $PATH
<br>
dev:~&gt; cat path.pbs
<br>
#!/bin/bash
<br>
#PBS -N path
<br>
#PBS -l walltime=1:00
<br>
#PBS -l nodes=2:ppn=1
<br>
<p>export PATH=/home/siegert/scratch/test/path-0.0.1/bin:$PATH
<br>
echo $PATH
<br>
mpiexec path.sh
<br>
dev:~&gt; qsub path.pbs
<br>
14.dev
<br>
dev:~&gt; cat path.o14
<br>
/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
b414, /home/siegert/scratch/test/path-0.0.1/bin/path.sh:
<br>
/usr/local/openmpi/bin:/usr/local/openmpi/bin:/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
b413, /home/siegert/scratch/test/path-0.0.1/bin/path.sh:
<br>
/usr/local/openmpi/bin:/usr/local/openmpi/bin:/usr/local/openmpi/bin:/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
<p>Thus, on the local node (where mpiexec is run) /usr/local/openmpi/bin is
<br>
prepended twice, on the remote node /usr/local/openmpi/bin is prepended
<br>
three times.
<br>
But, this is the first point where I tricked myself: our &quot;mpiexec&quot; is a
<br>
wrapper script (in /usr/local/bin) that calls /usr/local/openmpi/bin/mpiexec:
<br>
dev:~&gt; which mpiexec
<br>
/usr/local/bin/mpiexec
<br>
dev:~&gt; which orterun
<br>
/usr/local/openmpi/bin/orterun
<br>
<p>But, when I replace &quot;mpiexec&quot; in path.pbs with &quot;orterun&quot; the following
<br>
happens:
<br>
<p>dev:~&gt; cat path.pbs
<br>
#!/bin/bash
<br>
#PBS -N path
<br>
#PBS -l walltime=1:00
<br>
#PBS -l nodes=2:ppn=1
<br>
<p>export PATH=/home/siegert/scratch/test/path-0.0.1/bin:$PATH
<br>
echo $PATH
<br>
orterun path.sh
<br>
dev:~&gt; qsub path.pbs
<br>
15.dev
<br>
dev:~&gt; cat path.o15
<br>
/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
b414, /home/siegert/scratch/test/path-0.0.1/bin/path.sh:
<br>
/usr/local/openmpi-1.4.3/bin:/usr/local/openmpi-1.4.3/bin:/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
b413, /home/siegert/scratch/test/path-0.0.1/bin/path.sh:
<br>
/usr/local/openmpi-1.4.3/bin:/usr/local/openmpi-1.4.3/bin:/usr/local/openmpi-1.4.3/bin:/home/siegert/scratch/test/path-0.0.1/bin:/usr/local/bin:/usr/local/openmpi/bin:/usr/local/moab/bin:/usr/local/torque/bin:/bin:/usr/bin:/home/siegert/bin:/home/siegert/bin
<br>
<p>It appears that now &quot;orterun&quot; does something like &quot;readlink -f $0&quot;:
<br>
/usr/local/openmpi is actually a softlink to /usr/local/openmpi-1.4.3.
<br>
Anyway, again the directory where the orterun executable is located
<br>
gets prepended twice on the local and three times on the remote node.
<br>
Only adding the --noprefix option to orterun avoids the prepending
<br>
of the directory (when calling &quot;/usr/local/openmpi/bin/mpiexec --noprefix&quot;
<br>
the --noprefix flag has no effect).
<br>
<p>I guess, I could achieve what I want by using &quot;orterun --noprefix&quot; from the
<br>
wrapper script.
<br>
<p><span class="quotelev2">&gt; &gt; Furthermore, openmpi appears to use
</span><br>
<span class="quotelev2">&gt; &gt; a) the current value of PATH on the node where mpiexec is running;
</span><br>
<span class="quotelev2">&gt; &gt; b) whatever PATH is used by ssh on the remote nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun uses the $PATH local to where it is.  We don't ship the PATH to the remote node unless you tell mpirun to via the -x PATH option (as you noted below).  We've found that default shipping the PATH to remote nodes can cause unexpected problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, some run-time systems (e.g., SLURM, Torque) automatically ship the front-end PATH to the back-end machine(s) for you.  Open MPI just &quot;inherits&quot; this PATH on the remote node, so to speak.  ssh doesn't do this by default.
</span><br>
<p>Yup. That was the other way I tricked myself: trying to debug a bahaviour
<br>
when running under torque by running mpiexec interactively from the
<br>
head node. When &quot;path.sh&quot; is run interactively it fails because it is not
<br>
found on the remote node.
<br>
<p><span class="quotelev1">&gt; Here's an example with 1.4.3 running SLURM on my test cluster at Cisco.  This is in an SLURM allocation; I am running on the head node.  Note that I'm a tcsh user, so I use &quot;echo $path&quot;, not &quot;echo $PATH&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % hostname
</span><br>
<span class="quotelev1">&gt; svbu-mpi.cisco.com
</span><br>
<span class="quotelev1">&gt; # Note my original path
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % echo $path
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
</span><br>
<span class="quotelev1">&gt; # Since I'm in a SLURM allocation, mpirun sends jobs to a remote node
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt; svbu-mpi020
</span><br>
<span class="quotelev1">&gt; # Here's my test script
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % cat foo.csh
</span><br>
<span class="quotelev1">&gt; #!/bin/tcsh -f
</span><br>
<span class="quotelev1">&gt; echo $path
</span><br>
<span class="quotelev1">&gt; # When I run this script through mpirun, the $path is the same 
</span><br>
<span class="quotelev1">&gt; # as was displayed above
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % mpirun -np 1 foo.csh
</span><br>
<span class="quotelev1">&gt; /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
</span><br>
<span class="quotelev1">&gt; # Now if I use the full path name to mpirun, I get an extra bonus
</span><br>
<span class="quotelev1">&gt; # directory in the front of my $path -- the location of where
</span><br>
<span class="quotelev1">&gt; # mpirun is located.
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % /home/jsquyres/bogus/bin/mpirun -np 1 foo.csh
</span><br>
<span class="quotelev1">&gt; /home/jsquyres/bogus/bin /home/jsquyres/bogus/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /users/jsquyres/local/rhel5/bin /home/jsquyres/bogus/bin /users/jsquyres/local/bin /usr/local/bin /usr/kerberos/bin /usr/local/bin /bin /usr/bin /usr/X11R6/bin /opt/slurm/2.1.0/bin /data/home/ted/bin /data/home/ted/bin
</span><br>
<span class="quotelev1">&gt; [4:23] svbu-mpi:~ % 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Thus,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; export PATH=/path/to/special/bin:$PATH
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -n 2 -H n1,n2 special
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (n1 being the local node)
</span><br>
<span class="quotelev2">&gt; &gt; will usually fail even if the directory structure is identical on
</span><br>
<span class="quotelev2">&gt; &gt; the two nodes. For this to work
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The PATH you set will be available on n1, but it depends on the underlying run-time launcher if it is available on n2.  ssh will not copy your PATH to n2 by default, but others will (e.g., SLURM).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -n 2 -H n1,n2 -x PATH special
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That will work for ssh in this case, yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What I would like to see is a configure option that allows me to configure
</span><br>
<span class="quotelev2">&gt; &gt; openmpi such that the current PATH on the node where mpiexec is running
</span><br>
<span class="quotelev2">&gt; &gt; is used as the PATH on all nodes (by default). Or is there a reason why
</span><br>
<span class="quotelev2">&gt; &gt; that is a really bad idea?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If your nodes are not exactly the same, this can lead to all kinds of badness.  That's why we didn't do it by default.
</span><br>
<p>I totally understand that you do not want to do this by default.
<br>
However, it would be nice to have a configure option like
<br>
--disable-prepend-ompi-path
<br>
that would at least prevent the prepending of the openmpi bin directory.
<br>
For those of us who do have identical nodes it would be even nicer to
<br>
have a configure option
<br>
--enable-path-propagation
<br>
that would always do -x PATH and not prepend the openmpi bin directory.
<br>
<p>Cheers,
<br>
Martin
<br>
<p><pre>
-- 
Martin Siegert
Simon Fraser University
Burnaby, British Columbia
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17434.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17432.php">Jeff Squyres: "Re: [OMPI users] freezing in mpi_allreduce operation"</a>
<li><strong>In reply to:</strong> <a href="17422.php">Jeff Squyres: "Re: [OMPI users] PATH settings"</a>
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
