<?
$subject_val = "Re: [OMPI users] Problem with WRF and pgi-7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 12:06:05 2008" -->
<!-- isoreceived="20080723160605" -->
<!-- sent="Wed, 23 Jul 2008 12:05:59 -0400" -->
<!-- isosent="20080723160559" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with WRF and pgi-7.2" -->
<!-- id="704FA0DE-D033-45D7-A772-B78BE7007CCB_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="B8399BDD-232F-40E3-9131-258E93DDFA5F_at_umich.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 12:05:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6101.php">Brock Palen: "[OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmm; I haven't seen this kind of problem before.  Have you contacted  
<br>
PGI?
<br>
<p><p>On Jul 21, 2008, at 2:08 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; Hi, When compiling WRF with PGI-7.2-1  with openmpi-1.2.6
</span><br>
<span class="quotelev1">&gt; The file buf_for_proc.c  fails.  Nothing specail about this file  
</span><br>
<span class="quotelev1">&gt; sticks out to me.  But older versions of PGI like it just fine.  The  
</span><br>
<span class="quotelev1">&gt; errors PGI complains about has to do with mpi.h though:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [brockp_at_nyx-login1 RSL_LITE]$ mpicc  -DFSEEKO64_OK  -w -O3 - 
</span><br>
<span class="quotelev1">&gt; DDM_PARALLEL   -c buf_for_proc.c
</span><br>
<span class="quotelev1">&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting  
</span><br>
<span class="quotelev1">&gt; identifier .Z0000 before '(' (/home/software/rhel4/openmpi-1.2.6/ 
</span><br>
<span class="quotelev1">&gt; pgi-7.0/include/mpi.h: 823)
</span><br>
<span class="quotelev1">&gt; PGC-S-0082-Function returning array not allowed (/home/software/ 
</span><br>
<span class="quotelev1">&gt; rhel4/openmpi-1.2.6/pgi-7.0/include/mpi.h: 823)
</span><br>
<span class="quotelev1">&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm (/home/software/rhel4/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.6/pgi-7.0/include/mpi.h: 837)
</span><br>
<span class="quotelev1">&gt; PGC/x86-64 Linux 7.2-1: compilation completed with severe errors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone else seen that kind of problem with mpi.h  and pgi?  Do I  
</span><br>
<span class="quotelev1">&gt; need to use -c89  ?  I know PGI changed the default with this a  
</span><br>
<span class="quotelev1">&gt; while back, but it does not appear to help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Previous message:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6101.php">Brock Palen: "[OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
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
