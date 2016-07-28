<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  9 10:24:11 2007" -->
<!-- isoreceived="20070709142411" -->
<!-- sent="Mon, 09 Jul 2007 10:24:09 -0400" -->
<!-- isosent="20070709142409" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI output over several ssh-hops?" -->
<!-- id="46924509.8070404_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9b0da5ce0706140018yae407b1l18132e35f35b3d94_at_mail.gmail.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-09 10:24:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jody,
<br>
<p>Sorry for the super long delay. I don't know how this one got lost...
<br>
<p>I run like this all the time. Unfortunately, it is not as simple as I 
<br>
would like. Here is what I do:
<br>
<p>1. Log into the machine using ssh -X
<br>
2. Run mpirun with the following parameters:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca pls rsh  (This makes sure that Open MPI uses the rsh/ssh launcher. 
<br>
It may not be necessary depending on your setup)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-mca pls_rsh_agent &quot;ssh -X&quot; (To make sure X information is forwarded. 
<br>
This might not be necessary if you have ssh setup to always forward X 
<br>
information)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--debug-daemons (This ensures that the ssh connections to the backed 
<br>
nodes are kept open. Otherwise, they are closed and X information cannot 
<br>
be forwarded. Unfortunately, this will also cause some debugging output 
<br>
to be printed, but right now there is no other way :( )
<br>
<p>So, the complete command is:
<br>
mpirun -np 4 -mca pls rsh -mca pls_rsh_agent &quot;ssh -X&quot; --debug-daemons 
<br>
xterm -e gdb my_prog
<br>
<p>I hope this helps. Let me know if you are still experiencing problems.
<br>
<p>Tim
<br>
<p><p>jody wrote:
<br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; For debugging i usually run each process in a separate X-window.
</span><br>
<span class="quotelev1">&gt; This works well if i set the DISPLAY variable to the computer
</span><br>
<span class="quotelev1">&gt; from which i am starting my OpenMPI application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This method fails however, if i log in (via ssh) to my workstation
</span><br>
<span class="quotelev1">&gt; from a third computer and then start my OpenMPI application,
</span><br>
<span class="quotelev1">&gt; only the processes running on the workstation i logged into can
</span><br>
<span class="quotelev1">&gt; open their windows on the third computers. The processes on
</span><br>
<span class="quotelev1">&gt; the other computers cant open their windows.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is how i start the processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun -np 4 -x DISPLAY run_gdb.sh ./TestApp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where run_gdb.sh looks like this
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; echo &quot;Running GDB on node `hostname`&quot;
</span><br>
<span class="quotelev1">&gt; xterm -e gdb $*
</span><br>
<span class="quotelev1">&gt; exit 0
</span><br>
<span class="quotelev1">&gt; -------------------------
</span><br>
<span class="quotelev1">&gt; The output from the processes on the other computer:
</span><br>
<span class="quotelev1">&gt;     xterm Xt error: Can't open display: localhost:12.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I there a way to tell OpenMPI to forward the X windows
</span><br>
<span class="quotelev1">&gt; over yet another ssh connection?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;   Jody
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
<li><strong>Next message:</strong> <a href="3604.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3602.php">Jeff Squyres: "Re: [OMPI users] Can't get TotalView to find main program"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/06/3493.php">jody: "[OMPI users] OpenMPI output over several ssh-hops?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3606.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
<li><strong>Reply:</strong> <a href="3608.php">jody: "Re: [OMPI users] OpenMPI output over several ssh-hops?"</a>
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
