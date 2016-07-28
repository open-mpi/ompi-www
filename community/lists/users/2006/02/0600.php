<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 03:30:04 2006" -->
<!-- isoreceived="20060208083004" -->
<!-- sent="Wed, 08 Feb 2006 09:29:51 +0100" -->
<!-- isosent="20060208082951" -->
<!-- name="Andreas Fladischer" -->
<!-- email="andreas.fladischer_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] mpirun with make" -->
<!-- id="43E9ABFF.5080600_at_ecofinance.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43E8A73C.4030101_at_open-mpi.org" -->
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
<strong>From:</strong> Andreas Fladischer (<em>andreas.fladischer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 03:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Previous message:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0591.php">Andrew Friedley: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>Reply:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested this example with hostname before and it worked well:
<br>
<p>the hostfile contains only 2 lines
<br>
pc86
<br>
pc92
<br>
<p>and the user wolf doesn't need a password when linking to the other 
<br>
pc.the user wolf have the same uid and gui on both pc.
<br>
<p>i have also another question: is it possible to use mpi to compile some 
<br>
programms without changing the source code of the program?
<br>
<p>Andrew Friedley wrote:
<br>
<p><span class="quotelev1">&gt;Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Can you give us more details on the problem?  The exact error message, 
</span><br>
<span class="quotelev1">&gt;as well as the contents of your hostfile will help.  You should check 
</span><br>
<span class="quotelev1">&gt;out our FAQ as well, as it likely will help you solve your problem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/faq/">http://www.open-mpi.org/faq/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Particularly the sections 'Running MPI jobs' and 'Running jobs under 
</span><br>
<span class="quotelev1">&gt;rsh/ssh'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Make is not a very good program to test with - try something simpler 
</span><br>
<span class="quotelev1">&gt;instead:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;mpirun -np 2 --hostfile /mnt/wolf/lamhosts hostname
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;The hostname of both nodes should be printed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Another note - are you just trying to run a parallel make?  If so, 
</span><br>
<span class="quotelev1">&gt;distcc and ccache are a better solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Andreas Fladischer wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;hi_at_all!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;i have a question to the parallel mpirun!i have a small cluster (for 
</span><br>
<span class="quotelev2">&gt;&gt;testing purpose one headnode and one node) which running fedora core 3! 
</span><br>
<span class="quotelev2">&gt;&gt;i installed openmpi on both nodes and created a user with the same uid 
</span><br>
<span class="quotelev2">&gt;&gt;on both nodes; now i try to build the glibc tools from the headnode but 
</span><br>
<span class="quotelev2">&gt;&gt;there couldn't be a connection to the second node;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;time mpirun -np 2 --hostfile /mnt/wolf/lamhosts make
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;i'm a newbee on the mpi tools and so i have no plan what i do wrong; in 
</span><br>
<span class="quotelev2">&gt;&gt;additional i couldn't find a good documentation exluding the faq's on 
</span><br>
<span class="quotelev2">&gt;&gt;the homepage; are there some howto's available?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;thanks in advance?
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;users mailing list
</span><br>
<span class="quotelev1">&gt;users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0601.php">Brian Barrett: "Re: [O-MPI users] mpirun sets umask to 0"</a>
<li><strong>Previous message:</strong> <a href="0599.php">Jeff Squyres: "Re: [O-MPI users] forrtl: severe (39): error during read, unit 5, file /dev/ptmx - OpenMPI 1.0.2"</a>
<li><strong>In reply to:</strong> <a href="0591.php">Andrew Friedley: "Re: [O-MPI users] mpirun with make"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
<li><strong>Reply:</strong> <a href="0640.php">Jeff Squyres: "Re: [OMPI users] [O-MPI users] mpirun with make"</a>
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
