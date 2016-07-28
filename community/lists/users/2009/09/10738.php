<?
$subject_val = "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 23 08:46:29 2009" -->
<!-- isoreceived="20090923124629" -->
<!-- sent="Wed, 23 Sep 2009 08:46:15 -0400" -->
<!-- isosent="20090923124615" -->
<!-- name="Jonathan Dursi" -->
<!-- email="ljdursi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?" -->
<!-- id="216FF918-D4D7-47DA-A96E-E31F45E6F455_at_scinet.utoronto.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AB9AAC6.30105_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?<br>
<strong>From:</strong> Jonathan Dursi (<em>ljdursi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-23 08:46:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10737.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Eugene:
<br>
<p>If it continues to be a problem for people to reproduce this, I'll see  
<br>
what can be done about having an account made here for someone to poke  
<br>
around.  Alternately, any suggestions for tests that I can do to help  
<br>
diagnose/verify the problem, or figure out whats different about this  
<br>
setup would be greatly appreciated.
<br>
<p>As re the btl_sm_num_fifos thing, it could be a bit of a red herring,  
<br>
it's just something I started to use following one of the previous bug  
<br>
reports.   However, it changes the behaviour pretty markedly -  with  
<br>
the sample program I submitted (eg, the send recvs looping around),  
<br>
and with OpenMPI 1.3.2 (the version where I see the most extreme  
<br>
problems, eg things fail every run), this always works
<br>
<p>mpirun -np 6 -mca btl_sm_num_fifos 5 -mca btl sm,self ./diffusion-mpi
<br>
<p>and other larger numbers for num_fifos also seems to reliably work,  
<br>
but 4 or less
<br>
<p>mpirun -np 6 -mca btl_sm_num_fifos 4 -mca btl sm,self ./diffusion-mpi
<br>
<p>always hangs, as before - after some number of iterations, sometimes  
<br>
fewer, sometimes more, always somewhere in the MPI_Sendrecv:
<br>
(gdb) where
<br>
#0  0x00002b9b0a661e80 in opal_progress_at_plt () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#1  0x00002b9b0a67e345 in ompi_request_default_wait () from /scinet/ 
<br>
gpc/mpi/openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#2  0x00002b9b0a6a42c0 in PMPI_Sendrecv () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#3  0x00002b9b0a43c540 in pmpi_sendrecv__ () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi_f77.so.0
<br>
#4  0x0000000000400eab in MAIN__ ()
<br>
#5  0x0000000000400fda in main (argc=1, argv=0x7fffb92cc078)  
<br>
at ../../../gcc-4.4.0/libgfortran/fmain.c:21
<br>
<p>On the other hand, if I set the leftmost and rightmost neighbours to  
<br>
MPI_PROC_NULL as Jeff requested, the behaviour changes; any number  
<br>
greater than two works
<br>
<p>mpirun -np 6 -mca btl_sm_num_fifos 3 -mca btl sm,self ./diffusion-mpi
<br>
<p>But the btl_sm_num_fifos 2  always hangs, either in the Sendrecv or in  
<br>
the Finalize
<br>
<p>mpirun -np 6 -mca btl_sm_num_fifos 2 -mca btl sm,self ./diffusion-mpi
<br>
<p>And the default always hangs, usually in the Finalize but sometimes in  
<br>
the Sendrecv.
<br>
<p>mpirun -np 6 -mca btl sm,self ./diffusion-mpi
<br>
(gdb) where
<br>
#0  0x00002ad54846d51f in poll () from /lib64/libc.so.6
<br>
#1  0x00002ad54717a7c1 in poll_dispatch () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#2  0x00002ad547179659 in opal_event_base_loop () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#3  0x00002ad54716e189 in opal_progress () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libopen-pal.so.0
<br>
#4  0x00002ad54931ef15 in barrier () from /scinet/gpc/mpi/openmpi/ 
<br>
1.3.2-gcc-v4.4.0-ofed/lib/openmpi/mca_grpcomm_bad.so
<br>
#5  0x00002ad546ca358b in ompi_mpi_finalize () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi.so.0
<br>
#6  0x00002ad546a5d529 in pmpi_finalize__ () from /scinet/gpc/mpi/ 
<br>
openmpi/1.3.2-gcc-v4.4.0-ofed/lib/libmpi_f77.so.0
<br>
#7  0x0000000000400f99 in MAIN__ ()
<br>
<p><p>So to summarize:
<br>
<p>OpenMPI 1.3.2 + gcc4.4.0
<br>
<p>Test problem with periodic (left neighbour of proc 0 is proc N-1)  
<br>
Sendrecv()s:
<br>
&nbsp;&nbsp;Default always hangs in Sendrecv after random number of iterations
<br>
&nbsp;&nbsp;Turning off sm (-mca btl self,tcp) not observed to hang
<br>
&nbsp;&nbsp;Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
<br>
&nbsp;&nbsp;Using fewer than 5 fifos hangs in Sendrecv after random number of  
<br>
iterations or Finalize
<br>
<p>Test problem with non-periodic (left neighbour of proc 0 is  
<br>
MPI_PROC_NULL) Sendrecv()s:
<br>
&nbsp;&nbsp;Default always hangs, in Sendrecv after random number of iterations  
<br>
or at Finalize
<br>
&nbsp;&nbsp;Turning off sm (-mca btl self,tcp) not observed to hang
<br>
&nbsp;&nbsp;Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
<br>
&nbsp;&nbsp;Using fewer than 5 fifos but more than 2 not observed to hang
<br>
&nbsp;&nbsp;Using 2 fifos hangs in Finalize  or Sendrecv after random number of  
<br>
iterations
<br>
<p>OpenMPI 1.3.3 + gcc4.4.0
<br>
<p>Test problem with periodic (left neighbour of proc 0 is proc N-1)  
<br>
Sendrecv()s:
<br>
&nbsp;&nbsp;Default sometimes (~20% of time) hangs in Sendrecv after random  
<br>
number of iterations
<br>
&nbsp;&nbsp;Turning off sm (-mca btl self,tcp) not observed to hang
<br>
&nbsp;&nbsp;Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
<br>
&nbsp;&nbsp;Using fewer than 5 fifos but more than 2 not observed to hang
<br>
&nbsp;&nbsp;Using 2 fifos sometimes (~20% of time) hangs in Finalize  or  
<br>
Sendrecv after random number of iterations but sometimes completes
<br>
<p>Test problem with non-periodic (left neighbour of proc 0 is  
<br>
MPI_PROC_NULL) Sendrecv()s:
<br>
&nbsp;&nbsp;Default usually (~75% of time) hangs, in Finalize or in  Sendrecv  
<br>
after random number of iterations
<br>
&nbsp;&nbsp;Turning off sm (-mca btl self,tcp) not observed to hang
<br>
&nbsp;&nbsp;Using -mca btl_sm_num_fifos 5 (for a 6 task job) not observed to hang
<br>
&nbsp;&nbsp;Using fewer than 5 fifos but more than 2 not observed to hang
<br>
&nbsp;&nbsp;Using 2 fifos usually (~75% of time) hangs in Finalize  or Sendrecv  
<br>
after random number of iterations but sometimes completes
<br>
<p>OpenMPI 1.3.2 + intel 11.0 compilers
<br>
<p>We are seeing a problem which we believe to be related; ~1% of certain  
<br>
single-node jobs hang, turning off sm or setting num_fifos to NP-1  
<br>
eliminates this.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;- Jonathan
<br>
<pre>
-- 
Jonathan Dursi &lt;ljdursi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10739.php">Josh Hursey: "Re: [OMPI users] Changing location where checkpoints are saved"</a>
<li><strong>Previous message:</strong> <a href="10737.php">Joe Landman: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>In reply to:</strong> <a href="10736.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
<li><strong>Reply:</strong> <a href="10756.php">Eugene Loh: "Re: [OMPI users] Random hangs using btl sm with OpenMPI 1.3.2/1.3.3 + gcc4.4?"</a>
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
