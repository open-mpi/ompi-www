<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 24 13:58:28 2006" -->
<!-- isoreceived="20061024175828" -->
<!-- sent="Tue, 24 Oct 2006 13:58:14 -0400" -->
<!-- isosent="20061024175814" -->
<!-- name="Tony Ladd" -->
<!-- email="ladd_at_[hidden]" -->
<!-- subject="[OMPI users] Dual Gigabit Ethernet Support" -->
<!-- id="021a01c6f795$fb700c50$ca79e30a_at_ladd02" -->
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
<strong>From:</strong> Tony Ladd (<em>ladd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-24 13:58:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2045.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga
<br>
<p>I guess we have strayed a bit from the original post. My personal opinion is
<br>
that a number of codes can run in HPC-like mode over Gigabit ethernet, not
<br>
just the trivially parallelizable. The hardware components are one key;
<br>
PCI-X, low hardware latency NIC (Intel PRO 1000 is 6.6 microsecs vs about 14
<br>
for the Bcom 5721), and a non-blocking (that's the key word) switch. Then
<br>
you need a good driver and a good MPI software layer. At present MPICH is
<br>
ahead of LAM/OpenMPI/MVAPICH in its implementation of optimized collectives.
<br>
At least that's how it seems to me (let me say that quickly, before I get
<br>
flamed). MPICH got a bad rap performance wise because its TCP driver was
<br>
mediocre (compared with LAM and OpenMPI). But MPICH + GAMMA is very fast.
<br>
MPIGAMMA even beats out our Infiniband cluster running OpenMPI on the
<br>
MPI_Allreduce; the test was with 64 cpus-32 nodes on the GAMMA cluster (Dual
<br>
core P4) and 16 nodes on the Infiniband (Dual Dual-core Opterons). The IB
<br>
cluster worked out at 24MBytes/sec (vector size/time) and the GigE +
<br>
MPIGAMMA was 39MBytes/sec. On the other hand, if I use my own optimized
<br>
AllReduce (a simplified version of the one in MPICH) on the IB cluster it
<br>
gets 108MByte/sec. So the tricky thing is all the components need to be in
<br>
place to get good application performance.
<br>
<p>GAMMA is not so easy to set up-I had considerable help from Giuseppe. It has
<br>
libraries to compile and the kernel needs to be recompiled. Once I got that
<br>
automated I can build and install a new version of GAMMA in about 5 mins.
<br>
The MPIGAMMA build is just like MPICH and MPIGAMMA works almost exactly the
<br>
same. So any application that will compile under MPICH should compile under
<br>
MPIGAMMA, just by changing the path. I have run half a dozen apps with
<br>
GAMMA. Netpipe, Netbench (my network tester-a simplified version of IMB),
<br>
Susp3D (my own code-a CFD like application), DLPOLY all compile out of the
<br>
box. Gromacs compiles but has a couple of &quot;bugs&quot; that crash on execution.
<br>
One is an archaic test for MPICH that prevents a clean exit-must have been a
<br>
bugfix for an earlier version of MPICH. The other seems to be an fclose of
<br>
an unassigned file pointer. It works OK in LAM but my guess is its illegal
<br>
strictly speaking. A student was supposed to check on that. VASP also
<br>
compiles out of the box if you can compile it with MPICH. But there is a
<br>
problem with the MPIGAMMA and the MPI_Alltoall function right now. It works
<br>
but it suffers from hangups and long delays. So GAMMA is not good for VASP
<br>
at this moment. You see the substantial performance improvements sometimes,
<br>
but other times its dreadfully slow. I can reproduce the problem with an
<br>
AlltoAll test code and Giuseppe is going to try to debug the problem.
<br>
<p>So GAMMA is not a pancea. In most circumstances it is stable and
<br>
predictable; much more reproducble than MPI over TCP. But there are still
<br>
may be one or two bugs and several issues.
<br>
1) Since GAMMA is tightly entwined in the kernel a crash frequently brings
<br>
the whole system down, which is a bit annoying; also it can crash other
<br>
nodes in the same GAMMA Virtual Machine.
<br>
2) NIC's are very buggy hardware-if you look at a TCP driver there are a
<br>
large number of hardware bugfixes in them. A number of GAMMA problems can be
<br>
traced to this. It's a lot of work to reprogram all the workarounds.
<br>
3) GAMMA nodes have to be preconfigured at boot. You can run more than one
<br>
job on a GAMMA virtual machine, but it's a little iffy; there can be
<br>
interactions between nodes on the same VM even if they are running different
<br>
jobs. Different GAMMA VM's need a different VLAN. So a multiuser environment
<br>
is still problematic.
<br>
4) Giuseppe said MPIGAMMA was a very difficult code to write-so I would
<br>
guess a port to OpenMPI would not be trivial. Also I would want to see
<br>
optimized collectives in OpenMPI before I switched from MPICH
<br>
<p>As far as I know GAMMA is the most advanced non TCP protocol. At core it
<br>
really works well, but it still needs a lot more testing and development.
<br>
Giuseppe is great to work with if anyone out there is interested. Go to the
<br>
MPIGAMMA website for more info
<br>
<a href="http://www.disi.unige.it/project/gamma/mpigamma/index.html">http://www.disi.unige.it/project/gamma/mpigamma/index.html</a>.
<br>
<p>Tony
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2045.php">Michael Kluskens: "[OMPI users] MPI_GATHER: missing f90 interfaces for mixed dimensions"</a>
<li><strong>Previous message:</strong> <a href="2043.php">Durga Choudhury: "Re: [OMPI users] Dual Gigabit ethernet support"</a>
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
