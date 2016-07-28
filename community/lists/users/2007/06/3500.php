<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 19 09:13:02 2007" -->
<!-- isoreceived="20070619131302" -->
<!-- sent="Tue, 19 Jun 2007 14:12:57 +0100" -->
<!-- isosent="20070619131257" -->
<!-- name="Chris Reeves" -->
<!-- email="chris.reeves_at_[hidden]" -->
<!-- subject="[OMPI users] Processes stuck in MPI_BARRIER" -->
<!-- id="20070619131256.GA14843_at_defiant" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Chris Reeves (<em>chris.reeves_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-19 09:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3499.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.3-rc1 hangs at the end when nproc &gt;=16 (was Re: mpirun in openmpi-1.2.2 fails to exit after client program finishes)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi there,
<br>
<p>I've had a look through the FAQ and searched the list archives and can't find
<br>
any similar problems to this one.
<br>
<p>I'm running OpenMPI 1.2.2 on 10 Intel iMacs (Intel Core2 Duo CPU). I am
<br>
specifiying two slots per machine and starting my job with:
<br>
/Network/Guanine/csr201/local-i386/opt/openmpi/bin/mpirun -np 20 --hostfile
<br>
bhost.jobControl nice -19 /Network/Guanine/csr201/jobControl/run_torus.pl
<br>
/Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel
<br>
<p>The config.log and output of 'ompi_info --all' are attached.
<br>
<p>Also attached is a small patch that I wrote to work around some firewall
<br>
limitations on the nodes (I don't know if there's a better way to do this -
<br>
suggestions are welcome). The patch may or may not be relevant, but I'm not
<br>
ruling out network issues and a bit of peer review never goes amiss in case
<br>
I've done something very silly.
<br>
<p>The programme that I'm trying to run is fairly hefty, so I'm afraid that I
<br>
can't provide you with a simple test case to highlight the problem. The best I
<br>
can do it provide you with a description of where I'm at and then ask for some
<br>
advice/suggestions...
<br>
<p>The code itself has run in the past with various versions of MPI/LAM and
<br>
OpenMPI and hasn't, to my knowledge, undergone any significant changes
<br>
recently. I have noticed delays before, both on this system and on others,
<br>
when MPI_BARRIER is called but they don't always result in a permanent
<br>
'spinning' of the process.
<br>
<p>The 20-node job that I'm running right now is using 90-100% of every CPU, but
<br>
hasn't made any progress for around 14 hours. I've used GDB to attach to each
<br>
of these processes and verified that every single one of them is sitting
<br>
inside a call to MPI_BARRIER. My understanding is that once every process hits
<br>
the barrier, they should then move on to the next part of the code.
<br>
<p>Here's an example of what I see when I attach to one of these processes:
<br>
------------------------------------------------------------------------------
<br>
<p>Attaching to program: `/private/var/automount/Network/Guanine/csr201/models-gap/torus/torus.ompiosx-intel', process 29578.
<br>
Reading symbols for shared libraries ..+++++.................................................................... done
<br>
0x9000121c in sigprocmask ()
<br>
(gdb) where
<br>
#0  0x9000121c in sigprocmask ()
<br>
#1  0x01c46f96 in opal_evsignal_recalc ()
<br>
#2  0x01c458c2 in opal_event_base_loop ()
<br>
#3  0x01c45d32 in opal_event_loop ()
<br>
#4  0x01c3e6f2 in opal_progress ()
<br>
#5  0x01b6083e in ompi_request_wait_all ()
<br>
#6  0x01ec68d8 in ompi_coll_tuned_sendrecv_actual ()
<br>
#7  0x01ecbf64 in ompi_coll_tuned_barrier_intra_bruck ()
<br>
#8  0x01b75590 in MPI_Barrier ()
<br>
#9  0x01aec47a in mpi_barrier__ ()
<br>
#10 0x0011c66c in MAIN_ ()
<br>
#11 0x002870f9 in main (argc=1, argv=0xbfffe6ec)
<br>
(gdb) 
<br>
<p>------------------------------------------------------------------------------
<br>
<p>Does anyone have any suggestions as to what might be happening here? Is there
<br>
any way to 'tickle' the processes and get them to move on? What if some
<br>
packets went missing on the network? Surely TCP should take care of this an
<br>
resend? As implied by my line of questioning, my current thoughts are that
<br>
some messages between nodes have somehow gone missing. Could this happen? What
<br>
could cause this? All machines are on the same subnet.
<br>
<p>I'm sorry my question is so open, but I don't know much about the internals of
<br>
OpenMPI and how it passes messages and I'm looking for some ideas on where to
<br>
start searching!
<br>
<p>Thanks in advance for any help or suggestions that you can offer,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Chris
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3501.php">Chris Reeves: "[OMPI users] Processes stuck in MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="3499.php">Code Master: "[OMPI users] mpirun in openmpi-1.2.3-rc1 hangs at the end when nproc &gt;=16 (was Re: mpirun in openmpi-1.2.2 fails to exit after client program finishes)"</a>
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
