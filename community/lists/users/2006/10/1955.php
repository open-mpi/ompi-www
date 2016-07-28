<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct  9 17:45:54 2006" -->
<!-- isoreceived="20061009214554" -->
<!-- sent="Mon, 9 Oct 2006 22:45:26 +0100 (BST)" -->
<!-- isosent="20061009214526" -->
<!-- name="Vadivelan Ranjith" -->
<!-- email="achillesvelan_at_[hidden]" -->
<!-- subject="[OMPI users] p4_error: latest msg from perror: Bad file descriptor" -->
<!-- id="20061009214526.92630.qmail_at_web7610.mail.in.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Vadivelan Ranjith (<em>achillesvelan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-09 17:45:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="1954.php">Cupp, Matthew R: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
I thank you for helping to all.
<br>
Today i got a error message by sumbitting job. First i
<br>
ran the code 
<br>
using explict method. I got result accurately, and no
<br>
problem occured when 
<br>
i sumbit job. Now i changed my code to implict method.
<br>
I got error when 
<br>
i sumbit job.
<br>
I checked correctly, it reading all files and
<br>
iteration starts. after 
<br>
one iteration it gives the following error. The same
<br>
code is running on 
<br>
other machine, giving result correctly. So please help
<br>
me how to fix 
<br>
it.
<br>
<p>Advance thanks
<br>
Velan
<br>
<p>----------------------------------------------------------------
<br>
job.e file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p4_error: latest msg from perror: Bad file
<br>
descriptor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p4_error: latest msg from perror: Bad file
<br>
descriptor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p4_error: latest msg from perror: Bad file
<br>
descriptor
<br>
&nbsp;&nbsp;&nbsp;&nbsp;p4_error: latest msg from perror: Bad file
<br>
descriptor
<br>
-----------------------------------------------------------------
<br>
job.o file:
<br>
3
<br>
node18.local
<br>
node19.local
<br>
node17.local
<br>
# Allocating   5 nodes to block  1
<br>
# Allocating   1 nodes to block  2
<br>
# Require mxb &gt;=   97
<br>
# Require mxa &gt;=   26 mya &gt;=   97 and mza &gt;=   75
<br>
# Maximum load imbalance =  71.69%
<br>
# Navier-Stokes Simulation
<br>
# Implicit Full Matrix DP-LUR
<br>
# Reading restart files...( 0.34 seconds)
<br>
# Freestream Mach Number =  6.50
<br>
<p>&nbsp;1   0.3670E+01   0.7803E+05   16   15    7    2  
<br>
0.1222E-08
<br>
p5_2609:  p4_error: interrupt SIGx: 13
<br>
bm_list_17559: (3.666982) wakeup_slave: unable to
<br>
interrupt slave 0 pid 
<br>
17542
<br>
rm_l_1_18696: (2.738297) net_send: could not write to
<br>
fd=6, errno = 9
<br>
rm_l_1_18696:  p4_error: net_send write: -1
<br>
rm_l_2_2605: (2.614927) net_send: could not write to
<br>
fd=6, errno = 9
<br>
rm_l_4_18718: (2.373120) net_send: could not write to
<br>
fd=6, errno = 9
<br>
rm_l_4_18718:  p4_error: net_send write: -1
<br>
rm_l_2_2605:  p4_error: net_send write: -1
<br>
rm_l_3_17584: (2.496277) net_send: could not write to
<br>
fd=6, errno = 9
<br>
rm_l_3_17584:  p4_error: net_send write: -1
<br>
rm_l_5_2626: (2.249144) net_send: could not write to
<br>
fd=5, errno = 32
<br>
p5_2609: (2.251356) net_send: could not write to fd=5,
<br>
errno = 32
<br>
-------------------------------------------------------------------
<br>
job file:
<br>
#!/bin/bash
<br>
#PBS -l nodes=3:ppn=1
<br>
<p>cd $PBS_O_WORKDIR
<br>
n=`/usr/local/bin/pbs.py $PBS_NODEFILE hosts`
<br>
echo $n
<br>
cat hosts
<br>
/opt/mpich/intel/bin/mpirun -nolocal -machinefile
<br>
hosts -np 6 pg3d.exe
<br>
-------------------------------------------------------------------
<br>
Machine configuration:
<br>
&nbsp;CPU: Intel(R) Dual Processor Xeon(R) CPU 3.2GHz
<br>
Installation using rocks4.1
<br>
<p><p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________________________________
<br>
Yahoo! India Answers: Share what you know. Learn something new
<br>
<a href="http://in.answers.yahoo.com/">http://in.answers.yahoo.com/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>Previous message:</strong> <a href="1954.php">Cupp, Matthew R: "[OMPI users] OpenMPI 1.1.1 with Multiple Thread Support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
<li><strong>Reply:</strong> <a href="1956.php">Jeff Squyres: "Re: [OMPI users] p4_error: latest msg from perror: Bad file descriptor"</a>
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
