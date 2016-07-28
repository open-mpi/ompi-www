<?
$subject_val = "Re: [OMPI users] Problem with WRF and pgi-7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:10:47 2008" -->
<!-- isoreceived="20080723161047" -->
<!-- sent="Wed, 23 Jul 2008 12:09:40 -0400" -->
<!-- isosent="20080723160940" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with WRF and pgi-7.2" -->
<!-- id="7D84B76B-BD97-4BB0-89B6-89D777C5AEDD_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="704FA0DE-D033-45D7-A772-B78BE7007CCB_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with WRF and pgi-7.2<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not yet, if you have no ideas I will open a ticket.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Jul 23, 2008, at 12:05 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Hmm; I haven't seen this kind of problem before.  Have you  
</span><br>
<span class="quotelev1">&gt; contacted PGI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 21, 2008, at 2:08 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi, When compiling WRF with PGI-7.2-1  with openmpi-1.2.6
</span><br>
<span class="quotelev2">&gt;&gt; The file buf_for_proc.c  fails.  Nothing specail about this file  
</span><br>
<span class="quotelev2">&gt;&gt; sticks out to me.  But older versions of PGI like it just fine.   
</span><br>
<span class="quotelev2">&gt;&gt; The errors PGI complains about has to do with mpi.h though:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [brockp_at_nyx-login1 RSL_LITE]$ mpicc  -DFSEEKO64_OK  -w -O3 - 
</span><br>
<span class="quotelev2">&gt;&gt; DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev2">&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting  
</span><br>
<span class="quotelev2">&gt;&gt; identifier .Z0000 before '(' (/home/software/rhel4/openmpi-1.2.6/ 
</span><br>
<span class="quotelev2">&gt;&gt; pgi-7.0/include/mpi.h: 823)
</span><br>
<span class="quotelev2">&gt;&gt; PGC-S-0082-Function returning array not allowed (/home/software/ 
</span><br>
<span class="quotelev2">&gt;&gt; rhel4/openmpi-1.2.6/pgi-7.0/include/mpi.h: 823)
</span><br>
<span class="quotelev2">&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm (/home/software/rhel4/ 
</span><br>
<span class="quotelev2">&gt;&gt; openmpi-1.2.6/pgi-7.0/include/mpi.h: 837)
</span><br>
<span class="quotelev2">&gt;&gt; PGC/x86-64 Linux 7.2-1: compilation completed with severe errors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone else seen that kind of problem with mpi.h  and pgi?  Do  
</span><br>
<span class="quotelev2">&gt;&gt; I need to use -c89  ?  I know PGI changed the default with this a  
</span><br>
<span class="quotelev2">&gt;&gt; while back, but it does not appear to help.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6115.php">Jeff Squyres: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
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
