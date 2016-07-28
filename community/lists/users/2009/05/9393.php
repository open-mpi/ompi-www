<?
$subject_val = "Re: [OMPI users] CP2K mpi hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 19 14:01:07 2009" -->
<!-- isoreceived="20090519180107" -->
<!-- sent="Tue, 19 May 2009 14:01:04 -0400" -->
<!-- isosent="20090519180104" -->
<!-- name="Noam Bernstein" -->
<!-- email="noam.bernstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] CP2K mpi hang" -->
<!-- id="C57B36C4-15D4-430C-8CAA-494004C8E40B_at_nrl.navy.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1242749582.26039.742.camel_at_localhost.localdomain" -->
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
<strong>Subject:</strong> Re: [OMPI users] CP2K mpi hang<br>
<strong>From:</strong> Noam Bernstein (<em>noam.bernstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-19 14:01:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9392.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 19, 2009, at 12:13 PM, Ashley Pittman wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That is indeed odd but it shouldn't be too hard to track down, how  
</span><br>
<span class="quotelev1">&gt; often
</span><br>
<span class="quotelev1">&gt; does the failure occur?  Presumably when you say you have three
</span><br>
<span class="quotelev1">&gt; invocations of the program they communicate via files, is the location
</span><br>
<span class="quotelev1">&gt; of these files changing?
</span><br>
<p>Yeay.  We have a winner.  The CP2K code doesn't do all I/O from
<br>
the head node.  For most of the input files it wants, it crashes if
<br>
it can't find them on the other nodes.  My script therefore copies
<br>
those the input files to each node.  However, there are two files that  
<br>
are
<br>
generated on the fly (output of one call as input for the next one) on  
<br>
the
<br>
head node.   With one of them, apparently, CP2K will silently go on if  
<br>
the
<br>
file is missing,  but then lock up in an MPI call (maybe it leaves some
<br>
variables  uninitialized, and then uses them in the call to the MPI  
<br>
function?).
<br>
If I copy that  file to each node, it seems to work fine.
<br>
<p>This interpretation is also confirmed by the observation that running
<br>
with '--mca btl ^openib' hangs in essentially the same place:
<br>
<p>#0  0x0000003b8daca3ff in poll () from /lib64/libc.so.6
<br>
#1  0x00002b3c817ab2c6 in poll_dispatch () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
<br>
#2  0x00002b3c817aa2a3 in opal_event_base_loop () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
<br>
#3  0x00002b3c8179fb2e in opal_progress () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libopen-pal.so.0
<br>
#4  0x00002b3c812d9e55 in ompi_request_default_wait_all () from /share/ 
<br>
apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#5  0x00002b3c866d007a in ompi_coll_tuned_alltoall_intra_basic_linear  
<br>
() from /share/apps/mpi/openmpi-1.3.2/intel-11.0.083/lib/openmpi/ 
<br>
mca_coll_tuned.so
<br>
#6  0x00002b3c812edb8f in PMPI_Alltoall () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi.so.0
<br>
#7  0x00002b3c81094af6 in pmpi_alltoall__ () from /share/apps/mpi/ 
<br>
openmpi-1.3.2/intel-11.0.083/lib/libmpi_f77.so.0
<br>
#8  0x000000000078ca5b in message_passing_mp_mp_alltoall_i_ ()
<br>
#9  0x000000000116e6ab in  
<br>
cp_sm_fm_interactions_mp_fm_reshuffle_create_layout_ ()
<br>
<p><p>Thank you all for your help, and I apologize for the red herring :)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Noam
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9394.php">John Boccio: "Re: [OMPI users] Openmpi -MacOSX-mpif90 won't compile"</a>
<li><strong>Previous message:</strong> <a href="9392.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.2 with PathScale 3.2"</a>
<li><strong>In reply to:</strong> <a href="9388.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
<li><strong>Reply:</strong> <a href="9396.php">Ashley Pittman: "Re: [OMPI users] CP2K mpi hang"</a>
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
