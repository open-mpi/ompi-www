<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 10:58:35 2008" -->
<!-- isoreceived="20080207155835" -->
<!-- sent="Thu, 7 Feb 2008 10:57:57 -0500" -->
<!-- isosent="20080207155757" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)" -->
<!-- id="99C18237-0A96-45A5-8C52-A217ED0B1A0F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0802070707h3cfac803j14364c3210f7780a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 10:57:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 7, 2008, at 10:07 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; I wrote a little command called envliblist which consists of this  
</span><br>
<span class="quotelev1">&gt; line:
</span><br>
<span class="quotelev1">&gt; printenv | grep PATH | gawk -F &quot;_PATH=&quot; '{ print $2 }' | gawk -F &quot;:&quot;
</span><br>
<span class="quotelev1">&gt; '{ print $1 }' | xargs ls -al
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i do
</span><br>
<span class="quotelev1">&gt; mpirun -np 5 -hostfile testhosts -x DISPLAY xterm -hold -e ./ 
</span><br>
<span class="quotelev1">&gt; envliblist
</span><br>
<span class="quotelev1">&gt; all  xterms (local &amp; remote) display the contents of the openmpi/lib  
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<p>Ok, good.
<br>
<p><span class="quotelev1">&gt; Another strange result:
</span><br>
<span class="quotelev1">&gt; I have a shell script for launching the debugger in an xterm:
</span><br>
<span class="quotelev1">&gt; [jody]:/mnt/data1/neander:$cat run_gdb.sh
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # save the program name
</span><br>
<span class="quotelev1">&gt; export PROG=&quot;$1&quot;
</span><br>
<span class="quotelev1">&gt; # shift away program name (leaves program params)
</span><br>
<span class="quotelev1">&gt; shift
</span><br>
<span class="quotelev1">&gt; # create a command file for gdb, to start it automatically
</span><br>
<span class="quotelev1">&gt; echo run $*  &gt; gdb.cmd
</span><br>
<span class="quotelev1">&gt; # do the term
</span><br>
<span class="quotelev1">&gt; xterm -e gdb -x gdb.cmd $PROG
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When i run
</span><br>
<span class="quotelev1">&gt;  mpirun -np 5 --hostfile testhosts -x DISPLAY ./run_gdb.sh ./MPITest
</span><br>
<span class="quotelev1">&gt; it works!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just to compare
</span><br>
<span class="quotelev1">&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e ./MPITest
</span><br>
<span class="quotelev1">&gt; does not work.
</span><br>
<p>It seems that if you launch shell scripts, things work.  But if you  
<br>
run xterm without a shell script, it does not work.  I do not think it  
<br>
is a difference of -hold vs. no -hold.  Indeed, I can run both of  
<br>
these commands just fine on my system:
<br>
<p>% mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm - 
<br>
hold -e gdb ~/mpi/hello
<br>
<p>% mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm  -e  
<br>
gdb ~/mpi/hello
<br>
<p>Note that my setup is a little different than yours; I'm using a Mac  
<br>
laptop and ssh'ing to a server where I'm invoking mpirun.  The  
<br>
hostfile &quot;h&quot; contains a 2nd server where xterm/gdb/hello are running.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I notice the only difference between the to above commands is that
</span><br>
<span class="quotelev1">&gt; in the run_gdb script xterm has no &quot;-hold&quot; parameter!
</span><br>
<span class="quotelev1">&gt; Indeed,
</span><br>
<span class="quotelev1">&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -e ./MPITest
</span><br>
<span class="quotelev1">&gt; does work. To actually see that it works (MPITest is simple Hello MPI
</span><br>
<span class="quotelev1">&gt; app) i had to do
</span><br>
<span class="quotelev1">&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e
</span><br>
<span class="quotelev1">&gt; &quot;./MPITest &gt;&gt; output.txt&quot;
</span><br>
<span class="quotelev1">&gt; and check output.txt.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have an explanation for this weird happening?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5005.php">Tim Prins: "Re: [OMPI users] bug in MPI_ACCUMULATE for window offsets &gt; 2**31 - 1 bytes? openmpi v1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>In reply to:</strong> <a href="5003.php">jody: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/09/6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
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
