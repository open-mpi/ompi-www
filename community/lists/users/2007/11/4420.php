<?
$subject_val = "Re: [OMPI users] Slightly OT: mpi job terminates";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  6 21:57:29 2007" -->
<!-- isoreceived="20071107025729" -->
<!-- sent="Tue, 6 Nov 2007 21:57:09 -0500" -->
<!-- isosent="20071107025709" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Slightly OT: mpi job terminates" -->
<!-- id="117E3A5C-3198-4C65-9132-540F5AF6E836_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20071101185916.GA31984_at_dbmail.dk" -->
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
<strong>Date:</strong> 2007-11-06 21:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>Previous message:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4386.php">Karsten Bolding: "[OMPI users] Slightly OT: mpi job terminates"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You might want to run your app through a memory-checking debugger to  
<br>
see if anything obvious shows up.
<br>
<p>Also, check to see if your corelimit size is greater than zero (i.e.,  
<br>
make it &quot;unlimited&quot;).  Then run again and see if you can get corefiles  
<br>
to see if your app is silently dumping core, and these would give you  
<br>
a clue as to what is going on.
<br>
<p>These are the ares where I typically start with parallel debugging;  
<br>
hopefully this is at least somewhat helpful...
<br>
<p><p>On Nov 1, 2007, at 2:59 PM, Karsten Bolding wrote:
<br>
<p><span class="quotelev1">&gt; This is not OpenMPI specific - but maybe somebody on the list can  
</span><br>
<span class="quotelev1">&gt; give a
</span><br>
<span class="quotelev1">&gt; hint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I start a parallel job with:
</span><br>
<span class="quotelev1">&gt; mpirun -np 19 -nolocal -machinefile machinefile bin/getm_prod_IFORT. 
</span><br>
<span class="quotelev1">&gt; 0096x0096
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; everything starts OK and the simulation carries on 2+ hours of
</span><br>
<span class="quotelev1">&gt; wall clock time - then suddenly without a trace in the logfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    19:48:46.172 n=        1800
</span><br>
<span class="quotelev1">&gt;            2003-09-01 05:06:00: reading 2D boundary data ...
</span><br>
<span class="quotelev1">&gt;    19:49:21.710 n=        1900
</span><br>
<span class="quotelev1">&gt;    19:49:50.490 n=        2000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; or in any system logfiles the simulation stops and all related  
</span><br>
<span class="quotelev1">&gt; processes
</span><br>
<span class="quotelev1">&gt; on the nodes stops.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I re-run the simulation does not stop at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody have a clue where I shall search.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use a 4 machine/dual P/dual core cluster connected via GBit/s  
</span><br>
<span class="quotelev1">&gt; ethernet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Karsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: If I use MPICH I get the same problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Karsten Bolding                    Bolding &amp; Burchard Hydrodynamics
</span><br>
<span class="quotelev1">&gt; Strandgyden 25                     Phone: +45 64422058
</span><br>
<span class="quotelev1">&gt; DK-5466 Asperup                    Fax:   +45 64422068
</span><br>
<span class="quotelev1">&gt; Denmark                            Email: karsten_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.findvej.dk/Strandgyden25,5466,11,3">http://www.findvej.dk/Strandgyden25,5466,11,3</a>
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
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
<li><strong>Next message:</strong> <a href="4421.php">Jeff Squyres: "Re: [OMPI users] Node assignment using openmpi for multiple simulations in the same submission script in PBS (GROMACS)"</a>
<li><strong>Previous message:</strong> <a href="4419.php">Jeff Squyres: "Re: [OMPI users] machinefile and rank"</a>
<li><strong>In reply to:</strong> <a href="4386.php">Karsten Bolding: "[OMPI users] Slightly OT: mpi job terminates"</a>
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
