<?
$subject_val = "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 24 08:26:35 2008" -->
<!-- isoreceived="20080924122635" -->
<!-- sent="Wed, 24 Sep 2008 14:26:30 +0200" -->
<!-- isosent="20080924122630" -->
<!-- name="Samuel Sarholz" -->
<!-- email="sarholz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)" -->
<!-- id="48DA31F6.9070400_at_rz.rwth-aachen.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="48DA2E31.8040809_at_irisa.fr" -->
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
<strong>From:</strong> Samuel Sarholz (<em>sarholz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-24 08:26:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I think the problem is that xterm (probably) has the userid bit set and 
<br>
thus deletes the LD_LIBRARY_PATH.
<br>
Try setting the path again before you start gdb, e.g:
<br>
mpirun -n 2 -x DISPLAY=:0.0 xterm -e LD_LIBRARY_PATH=&lt;mpi lib location&gt;
<br>
<p>or use the -Wl,-rpath=&lt;mpi lib location&gt; to compiler the search path 
<br>
into the executable.
<br>
<p>best regards,
<br>
Samuel
<br>
<p>P.S.: This xterm behavior causes us a lot of problems as well. Other 
<br>
terminals like konsole don't have that problem.
<br>
<p>Thomas Ropars wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm trying to use gdb and xterm with open mpi on my computer (Ubuntu 8.04).
</span><br>
<span class="quotelev1">&gt; When I run an application without gdb on my computer in works find but 
</span><br>
<span class="quotelev1">&gt; if I try to use gdb in xterm I get the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 -x DISPLAY=:0.0 xterm -e gdb ./ring.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (gdb) run
</span><br>
<span class="quotelev1">&gt; Starting program: /media/sda5/tempo/openmpi/tests/ring.out
</span><br>
<span class="quotelev1">&gt; /media/sda5/tempo/openmpi/tests/ring.out: error while loading shared 
</span><br>
<span class="quotelev1">&gt; libraries: libmpi.so.0: cannot open shared object file: No such file or 
</span><br>
<span class="quotelev1">&gt; directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program exited with code 0177.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try to use a shell script to launch gdb as mentioned bellow, I 
</span><br>
<span class="quotelev1">&gt; get the same error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 7, 2008, at 10:07 AM, jody wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wrote a little command called envliblist which consists of this  line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; printenv | grep PATH | gawk -F &quot;_PATH=&quot; '{ print $2 }' | gawk -F &quot;:&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; '{ print $1 }' | xargs ls -al
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 5 -hostfile testhosts -x DISPLAY xterm -hold -e ./ envliblist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all  xterms (local &amp; remote) display the contents of the openmpi/lib  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directory.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ok, good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Another strange result:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a shell script for launching the debugger in an xterm:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [jody]:/mnt/data1/neander:$cat run_gdb.sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # save the program name
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PROG=&quot;$1&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # shift away program name (leaves program params)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shift
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # create a command file for gdb, to start it automatically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; echo run $*  &gt; gdb.cmd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; # do the term
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xterm -e gdb -x gdb.cmd $PROG
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  mpirun -np 5 --hostfile testhosts -x DISPLAY ./run_gdb.sh ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it works!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just to compare
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that if you launch shell scripts, things work.  But if you  
</span><br>
<span class="quotelev2">&gt;&gt; run xterm without a shell script, it does not work.  I do not think 
</span><br>
<span class="quotelev2">&gt;&gt; it  is a difference of -hold vs. no -hold.  Indeed, I can run both of  
</span><br>
<span class="quotelev2">&gt;&gt; these commands just fine on my system:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm - 
</span><br>
<span class="quotelev2">&gt;&gt; hold -e gdb ~/mpi/hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; % mpirun -np 1 --hostfile h -x DISPLAY=&lt;myhost&gt;.cisco.com:0 xterm  -e  
</span><br>
<span class="quotelev2">&gt;&gt; gdb ~/mpi/hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that my setup is a little different than yours; I'm using a Mac  
</span><br>
<span class="quotelev2">&gt;&gt; laptop and ssh'ing to a server where I'm invoking mpirun.  The  
</span><br>
<span class="quotelev2">&gt;&gt; hostfile &quot;h&quot; contains a 2nd server where xterm/gdb/hello are running.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I notice the only difference between the to above commands is that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in the run_gdb script xterm has no &quot;-hold&quot; parameter!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -e ./MPITest
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does work. To actually see that it works (MPITest is simple Hello MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; app) i had to do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 5 --hostfile testhosts -x DISPLAY xterm -hold -e
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;./MPITest &gt;&gt; output.txt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and check output.txt.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does anybody have an explanation for this weird happening?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
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
<p><p>
<br><hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6713/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6714.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_Send and MPI_Recv"</a>
<li><strong>Previous message:</strong> <a href="6712.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6711.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
<li><strong>Reply:</strong> <a href="6715.php">Thomas Ropars: "Re: [OMPI users] mpirun, paths and xterm again (xserver problem	solved; library problem still there)"</a>
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
