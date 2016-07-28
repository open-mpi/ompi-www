<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 10 07:41:00 2006" -->
<!-- isoreceived="20061010114100" -->
<!-- sent="Tue, 10 Oct 2006 07:40:44 -0400" -->
<!-- isosent="20061010114044" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor" -->
<!-- id="C150FEFC.2A287%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20061009214526.92630.qmail_at_web7610.mail.in.yahoo.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-10 07:40:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1955.php">Vadivelan Ranjith: "[OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="1955.php">Vadivelan Ranjith: "[OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Note that p4_error messages are typically associated with the MPICH
<br>
implementation of MPI, which is a totally different code base and set of
<br>
developers.  We cannot answer questions about MPICH on this list; you
<br>
probably want to post your question to the MPICH support list.
<br>
<p>Good luck.
<br>
<p><p>On 10/9/06 5:45 PM, &quot;Vadivelan Ranjith&quot; &lt;achillesvelan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; I thank you for helping to all.
</span><br>
<span class="quotelev1">&gt; Today i got a error message by sumbitting job. First i
</span><br>
<span class="quotelev1">&gt; ran the code 
</span><br>
<span class="quotelev1">&gt; using explict method. I got result accurately, and no
</span><br>
<span class="quotelev1">&gt; problem occured when
</span><br>
<span class="quotelev1">&gt; i sumbit job. Now i changed my code to implict method.
</span><br>
<span class="quotelev1">&gt; I got error when 
</span><br>
<span class="quotelev1">&gt; i sumbit job.
</span><br>
<span class="quotelev1">&gt; I checked correctly, it reading all files and
</span><br>
<span class="quotelev1">&gt; iteration starts. after
</span><br>
<span class="quotelev1">&gt; one iteration it gives the following error. The same
</span><br>
<span class="quotelev1">&gt; code is running on
</span><br>
<span class="quotelev1">&gt; other machine, giving result correctly. So please help
</span><br>
<span class="quotelev1">&gt; me how to fix 
</span><br>
<span class="quotelev1">&gt; it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Advance thanks
</span><br>
<span class="quotelev1">&gt; Velan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; job.e file:
</span><br>
<span class="quotelev1">&gt;     p4_error: latest msg from perror: Bad file
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt;     p4_error: latest msg from perror: Bad file
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt;     p4_error: latest msg from perror: Bad file
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt;     p4_error: latest msg from perror: Bad file
</span><br>
<span class="quotelev1">&gt; descriptor
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; job.o file:
</span><br>
<span class="quotelev1">&gt; 3
</span><br>
<span class="quotelev1">&gt; node18.local
</span><br>
<span class="quotelev1">&gt; node19.local
</span><br>
<span class="quotelev1">&gt; node17.local
</span><br>
<span class="quotelev1">&gt; # Allocating   5 nodes to block  1
</span><br>
<span class="quotelev1">&gt; # Allocating   1 nodes to block  2
</span><br>
<span class="quotelev1">&gt; # Require mxb &gt;=   97
</span><br>
<span class="quotelev1">&gt; # Require mxa &gt;=   26 mya &gt;=   97 and mza &gt;=   75
</span><br>
<span class="quotelev1">&gt; # Maximum load imbalance =  71.69%
</span><br>
<span class="quotelev1">&gt; # Navier-Stokes Simulation
</span><br>
<span class="quotelev1">&gt; # Implicit Full Matrix DP-LUR
</span><br>
<span class="quotelev1">&gt; # Reading restart files...( 0.34 seconds)
</span><br>
<span class="quotelev1">&gt; # Freestream Mach Number =  6.50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  1   0.3670E+01   0.7803E+05   16   15    7    2
</span><br>
<span class="quotelev1">&gt; 0.1222E-08
</span><br>
<span class="quotelev1">&gt; p5_2609:  p4_error: interrupt SIGx: 13
</span><br>
<span class="quotelev1">&gt; bm_list_17559: (3.666982) wakeup_slave: unable to
</span><br>
<span class="quotelev1">&gt; interrupt slave 0 pid
</span><br>
<span class="quotelev1">&gt; 17542
</span><br>
<span class="quotelev1">&gt; rm_l_1_18696: (2.738297) net_send: could not write to
</span><br>
<span class="quotelev1">&gt; fd=6, errno = 9
</span><br>
<span class="quotelev1">&gt; rm_l_1_18696:  p4_error: net_send write: -1
</span><br>
<span class="quotelev1">&gt; rm_l_2_2605: (2.614927) net_send: could not write to
</span><br>
<span class="quotelev1">&gt; fd=6, errno = 9
</span><br>
<span class="quotelev1">&gt; rm_l_4_18718: (2.373120) net_send: could not write to
</span><br>
<span class="quotelev1">&gt; fd=6, errno = 9
</span><br>
<span class="quotelev1">&gt; rm_l_4_18718:  p4_error: net_send write: -1
</span><br>
<span class="quotelev1">&gt; rm_l_2_2605:  p4_error: net_send write: -1
</span><br>
<span class="quotelev1">&gt; rm_l_3_17584: (2.496277) net_send: could not write to
</span><br>
<span class="quotelev1">&gt; fd=6, errno = 9
</span><br>
<span class="quotelev1">&gt; rm_l_3_17584:  p4_error: net_send write: -1
</span><br>
<span class="quotelev1">&gt; rm_l_5_2626: (2.249144) net_send: could not write to
</span><br>
<span class="quotelev1">&gt; fd=5, errno = 32
</span><br>
<span class="quotelev1">&gt; p5_2609: (2.251356) net_send: could not write to fd=5,
</span><br>
<span class="quotelev1">&gt; errno = 32
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; job file:
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=3:ppn=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cd $PBS_O_WORKDIR
</span><br>
<span class="quotelev1">&gt; n=`/usr/local/bin/pbs.py $PBS_NODEFILE hosts`
</span><br>
<span class="quotelev1">&gt; echo $n
</span><br>
<span class="quotelev1">&gt; cat hosts
</span><br>
<span class="quotelev1">&gt; /opt/mpich/intel/bin/mpirun -nolocal -machinefile
</span><br>
<span class="quotelev1">&gt; hosts -np 6 pg3d.exe
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Machine configuration:
</span><br>
<span class="quotelev1">&gt;  CPU: Intel(R) Dual Processor Xeon(R) CPU 3.2GHz
</span><br>
<span class="quotelev1">&gt; Installation using rocks4.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________________________________________________________
</span><br>
<span class="quotelev1">&gt; Yahoo! India Answers: Share what you know. Learn something new
</span><br>
<span class="quotelev1">&gt; <a href="http://in.answers.yahoo.com/">http://in.answers.yahoo.com/</a>
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
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1957.php">Andrus, Mr. Brian \(Contractor\): "[OMPI users] Trouble with shared libraries"</a>
<li><strong>Previous message:</strong> <a href="1955.php">Vadivelan Ranjith: "[OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>In reply to:</strong> <a href="1955.php">Vadivelan Ranjith: "[OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
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
