<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 10:08:06 2008" -->
<!-- isoreceived="20080207150806" -->
<!-- sent="Thu, 7 Feb 2008 16:07:54 +0100" -->
<!-- isosent="20080207150754" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)" -->
<!-- id="9b0da5ce0802070707h3cfac803j14364c3210f7780a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E15DDBC9-B263-435C-B681-56B483FA4488_at_cisco.com" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 10:07:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>In reply to:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p><span class="quotelev1">&gt; The results of these two commands do seem to contradict each other;
</span><br>
<span class="quotelev1">&gt; hmm.  Just to be absolutely sure, did you cut-n-paste the
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH directory output from printenv and try to &quot;ls&quot; it to
</span><br>
<span class="quotelev1">&gt; ensure that it's completely spelled right, etc.?  I suspect that it's
</span><br>
<span class="quotelev1">&gt; right since your other commands work, but at this point, it's worth
</span><br>
<span class="quotelev1">&gt; checking the &quot;obvious&quot; things as well...
</span><br>
<p>I wrote a little command called envliblist which consists of this line:
<br>
printenv | grep PATH | gawk -F &quot;_PATH=&quot; '{ print $2 }' | gawk -F &quot;:&quot;
<br>
'{ print $1 }' | xargs ls -al
<br>
<p>When i do
<br>
mpirun -np 5 -hostfile testhosts -x DISPLAY xterm -hold -e ./envliblist
<br>
all  xterms (local &amp; remote) display the contents of the openmpi/lib directory.
<br>
<p>Another strange result:
<br>
I have a shell script for launching the debugger in an xterm:
<br>
[jody]:/mnt/data1/neander:$cat run_gdb.sh
<br>
#!/bin/sh
<br>
#
<br>
# save the program name
<br>
export PROG=&quot;$1&quot;
<br>
# shift away program name (leaves program params)
<br>
shift
<br>
# create a command file for gdb, to start it automatically
<br>
echo run $*  &gt; gdb.cmd
<br>
# do the term
<br>
xterm -e gdb -x gdb.cmd $PROG
<br>
<p>exit 0
<br>
<p>When i run
<br>
&nbsp;&nbsp;mpirun -np 5 --hostfile testhosts -x DISPLAY ./run_gdb.sh ./MPITest
<br>
it works!
<br>
<p>Just to compare
<br>
&nbsp;mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e ./MPITest
<br>
does not work.
<br>
<p>I notice the only difference between the to above commands is that
<br>
in the run_gdb script xterm has no &quot;-hold&quot; parameter!
<br>
Indeed,
<br>
&nbsp;mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -e ./MPITest
<br>
does work. To actually see that it works (MPITest is simple Hello MPI
<br>
app) i had to do
<br>
&nbsp;mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e
<br>
&quot;./MPITest &gt;&gt; output.txt&quot;
<br>
and check output.txt.
<br>
<p>Does anybody have an explanation for this weird happening?
<br>
<p>Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Previous message:</strong> <a href="5002.php">Joe Landman: "Re: [OMPI users] Oversubscribing a subset of a machine's cores"</a>
<li><strong>In reply to:</strong> <a href="5000.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="5004.php">Jeff Squyres: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem solved; library problem still there)"</a>
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
