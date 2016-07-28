<?
$subject_val = "Re: [OMPI users] locked  memory problem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 18:14:47 2008" -->
<!-- isoreceived="20080616221447" -->
<!-- sent="Mon, 16 Jun 2008 18:12:53 -0400" -->
<!-- isosent="20080616221253" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked  memory problem" -->
<!-- id="0ED6AAA3-6E0E-4B9B-BE99-0F6F8F4F5788_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="OF4EC1F6C2.3F7C3F4F-ON85257465.00747B11-85257465.0078D1AE_at_goodyear.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked  memory problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-16 18:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5892.php">Davi Vercillo C. Garcia: "[OMPI users] OpenMPI and C++"</a>
<li><strong>Previous message:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you check to see what the locked memory limits are *inside of a  
<br>
job*?  This can be different than what they are if you login to the  
<br>
node independently / outside of an LSF job.
<br>
<p>For example, write a quickie script that runs &quot;ulimit -a&quot; and submit  
<br>
that through LSF and see what results you get.  Better yet, use  
<br>
something like this (typed off the top of my head -- not tested for  
<br>
correctness/typos at all):
<br>
<p>runme.csh:
<br>
<p>#!/bin/csh -f
<br>
set l=`limit -l`
<br>
echo `hostname`: limit $l
<br>
exit 0
<br>
<p>submitme.csh:
<br>
<p>#!/bin/csh -f
<br>
mpirun runme.csh
<br>
<p>That is, submit the submitme.csh script to LSF and have it mpirun the  
<br>
runme.csh script so that you can see the limits on all the nodes that  
<br>
you requested.
<br>
<p><p>On Jun 11, 2008, at 5:59 PM, twurgl_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I get the locked memory error as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt;    *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt;    *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;    [node10:10395] [0,0,0]-[0,1,6] mca_oob_tcp_msg_recv: readv  
</span><br>
<span class="quotelev1">&gt; failed: Connection reset by peer (104)
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    The OpenIB BTL failed to initialize while trying to allocate some
</span><br>
<span class="quotelev1">&gt;    locked memory.  This typically can indicate that the memlock limits
</span><br>
<span class="quotelev1">&gt;    are set too low.  For most HPC installations, the memlock limits
</span><br>
<span class="quotelev1">&gt;    should be set to &quot;unlimited&quot;.  The failure occured here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Host:          node10
</span><br>
<span class="quotelev1">&gt;        OMPI source:   btl_openib.c:830
</span><br>
<span class="quotelev1">&gt;        Function:      ibv_create_cq()
</span><br>
<span class="quotelev1">&gt;        Device:        mlx4_0
</span><br>
<span class="quotelev1">&gt;        Memlock limit: 32768
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt;    problem fixed.  This FAQ entry on the Open MPI web site may also be
</span><br>
<span class="quotelev1">&gt;    helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've read the above FAQ and still have problems.  Here is the  
</span><br>
<span class="quotelev1">&gt; scenario.  All cluster nodes are (supposed) to be the same.
</span><br>
<span class="quotelev1">&gt; I can run just fine on all except a few nodes. For testing, I have  
</span><br>
<span class="quotelev1">&gt; closed all the nodes, and when I submit the job, LSF puts the job in  
</span><br>
<span class="quotelev1">&gt; PENDING state.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brun -m &quot;node1 node10&quot; jobid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to release the job, it runs fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But if I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brun -m &quot;node10 node1&quot; jobid
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it fails with the above OPENMPI error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've checked the ulimit -a on all nodes, it is set to unlimited.   
</span><br>
<span class="quotelev1">&gt; I've added a .bashrc file and set the ulimit in there, as well as in  
</span><br>
<span class="quotelev1">&gt; my .cshrc file
</span><br>
<span class="quotelev1">&gt; (I start on a csh shell and the jobs run in sh).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've compared environment settings and everything else I can think  
</span><br>
<span class="quotelev1">&gt; of.  3 nodes have the (bad) behaviour if they happen to be the lead  
</span><br>
<span class="quotelev1">&gt; node and run
</span><br>
<span class="quotelev1">&gt; fine if
</span><br>
<span class="quotelev1">&gt; they are not, the rest of the nodes run fine in either position.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have any ideas about this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!
</span><br>
<span class="quotelev1">&gt; tom
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5892.php">Davi Vercillo C. Garcia: "[OMPI users] OpenMPI and C++"</a>
<li><strong>Previous message:</strong> <a href="5890.php">Weirs, V Gregory: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5862.php">twurgl_at_[hidden]: "[OMPI users] locked  memory problem"</a>
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
