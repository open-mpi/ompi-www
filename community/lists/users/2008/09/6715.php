<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 08:48:35 2008" -->
<!-- isoreceived="20080924124835" -->
<!-- sent="Wed, 24 Sep 2008 14:48:33 +0200" -->
<!-- isosent="20080924124833" -->
<!-- name="Thomas Ropars" -->
<!-- email="tropars_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)" -->
<!-- id="48DA3721.5020801_at_irisa.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48DA31F6.9070400_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)<br>
<strong>From:</strong> Thomas Ropars (<em>tropars_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 08:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I works find with konsole.
<br>
Thank you for the advise.
<br>
<p>Thomas.
<br>
<p>Samuel Sarholz wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think the problem is that xterm (probably) has the userid bit set 
</span><br>
<span class="quotelev1">&gt; and thus deletes the LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; Try setting the path again before you start gdb, e.g:
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -x DISPLAY=:0.0 xterm -e LD_LIBRARY_PATH=&lt;mpi lib location&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or use the -Wl,-rpath=&lt;mpi lib location&gt; to compiler the search path 
</span><br>
<span class="quotelev1">&gt; into the executable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards,
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S.: This xterm behavior causes us a lot of problems as well. Other 
</span><br>
<span class="quotelev1">&gt; terminals like konsole don't have that problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thomas Ropars wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to use gdb and xterm with open mpi on my computer (Ubuntu 
</span><br>
<span class="quotelev2">&gt;&gt; 8.04).
</span><br>
<span class="quotelev2">&gt;&gt; When I run an application without gdb on my computer in works find 
</span><br>
<span class="quotelev2">&gt;&gt; but if I try to use gdb in xterm I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 2 -x DISPLAY=:0.0 xterm -e gdb ./ring.out
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) run
</span><br>
<span class="quotelev2">&gt;&gt; Starting program: /media/sda5/tempo/openmpi/tests/ring.out
</span><br>
<span class="quotelev2">&gt;&gt; /media/sda5/tempo/openmpi/tests/ring.out: error while loading shared 
</span><br>
<span class="quotelev2">&gt;&gt; libraries: libmpi.so.0: cannot open shared object file: No such file 
</span><br>
<span class="quotelev2">&gt;&gt; or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program exited with code 0177.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I try to use a shell script to launch gdb as mentioned bellow, I 
</span><br>
<span class="quotelev2">&gt;&gt; get the same error.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thomas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 7, 2008, at 10:07 AM, jody wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I wrote a little command called envliblist which consists of this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; printenv | grep PATH | gawk -F &quot;_PATH=&quot; '{ print $2 }' | gawk -F &quot;:&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; '{ print $1 }' | xargs ls -al
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When i do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 5 -hostfile testhosts -x DISPLAY xterm -hold -e ./ 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; envliblist
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all  xterms (local &amp; remote) display the contents of the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; openmpi/lib  directory.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, good.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Another strange result:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have a shell script for launching the debugger in an xterm:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [jody]:/mnt/data1/neander:$cat run_gdb.sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # save the program name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; export PROG=&quot;$1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # shift away program name (leaves program params)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shift
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # create a command file for gdb, to start it automatically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; echo run $*  &gt; gdb.cmd
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; # do the term
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; xterm -e gdb -x gdb.cmd $PROG
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exit 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When i run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  mpirun -np 5 --hostfile testhosts -x DISPLAY ./run_gdb.sh ./MPITest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it works!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just to compare
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e ./MPITest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does not work.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that if you launch shell scripts, things work.  But if you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; run xterm without a shell script, it does not work.  I do not think 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it  is a difference of -hold vs. no -hold.  Indeed, I can run both 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of  these commands just fine on my system:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm - 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hold -e gdb ~/mpi/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; % mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -e  gdb ~/mpi/hello
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that my setup is a little different than yours; I'm using a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mac  laptop and ssh'ing to a server where I'm invoking mpirun.  The  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hostfile &quot;h&quot; contains a 2nd server where xterm/gdb/hello are running.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I notice the only difference between the to above commands is that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in the run_gdb script xterm has no &quot;-hold&quot; parameter!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Indeed,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -e ./MPITest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does work. To actually see that it works (MPITest is simple Hello MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; app) i had to do
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;./MPITest &gt;&gt; output.txt&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and check output.txt.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does anybody have an explanation for this weird happening?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="6716.php">Shafagh Jafer: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>In reply to:</strong> <a href="6713.php">Samuel Sarholz: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
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
