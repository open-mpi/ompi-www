<?
$subject_val = "Re: [OMPI users] Problem with WRF and pgi-7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 15:08:42 2008" -->
<!-- isoreceived="20080724190842" -->
<!-- sent="Thu, 24 Jul 2008 15:07:36 -0400" -->
<!-- isosent="20080724190736" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with WRF and pgi-7.2" -->
<!-- id="77D32182-09BE-4981-A1A2-1DFC71F1DB99_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2b5e0c120807231350s12a7d533mfc8a1f2c626e9d3d_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-07-24 15:07:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6128.php">Tim Mattox: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks!  I will post a bug with PGI.
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
<p><p><p>On Jul 23, 2008, at 4:50 PM, Brian Dobbins wrote:
<br>
<p><span class="quotelev1">&gt; Hi Brock,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Just to add my two cents now, I finally got around to building  
</span><br>
<span class="quotelev1">&gt; WRF with PGI 7.2 as well.  I noticed that in the configure script  
</span><br>
<span class="quotelev1">&gt; there isn't an option specifically for PGI (Fortran) + PGI (C), and  
</span><br>
<span class="quotelev1">&gt; when I try that combination I do get the same error you have - I'm  
</span><br>
<span class="quotelev1">&gt; doing this on RHEL5.2, with PGI 7.2-2.  There is a 7.2-3 out that I  
</span><br>
<span class="quotelev1">&gt; haven't tried yet, but they don't mention anything about this  
</span><br>
<span class="quotelev1">&gt; particular error in the fixes section of their documentation, so  
</span><br>
<span class="quotelev1">&gt; I'm guessing they haven't come across it yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   .. In the meantime, you can successfully build WRF with a PGI  
</span><br>
<span class="quotelev1">&gt; (Fortran) + GCC (C) OpenMPI install.  I just did that, and tested  
</span><br>
<span class="quotelev1">&gt; it with one case, using OpenMPI-1.2.6, PGI 7.2-2 and GCC 4.1.2 on  
</span><br>
<span class="quotelev1">&gt; the same RHEL 5.2 system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   In a nutshell, I'm pretty sure it's a PGI problem.  If you want  
</span><br>
<span class="quotelev1">&gt; to post it in their forums, they're generally pretty responsive.  
</span><br>
<span class="quotelev1">&gt; (And if you don't, I will, since it'd be nice to see it work  
</span><br>
<span class="quotelev1">&gt; without a hybrid MPI installation!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Cheers,
</span><br>
<span class="quotelev1">&gt;   - Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian Dobbins
</span><br>
<span class="quotelev1">&gt; Yale Engineering HPC
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jul 23, 2008 at 12:09 PM, Brock Palen &lt;brockp_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Not yet, if you have no ideas I will open a ticket.
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
<span class="quotelev1">&gt; On Jul 23, 2008, at 12:05 PM, Jeff Squyres wrote:
</span><br>
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
<span class="quotelev1">&gt; Hi, When compiling WRF with PGI-7.2-1  with openmpi-1.2.6
</span><br>
<span class="quotelev1">&gt; The file buf_for_proc.c  fails.  Nothing specail about this file  
</span><br>
<span class="quotelev1">&gt; sticks out to me.  But older versions of PGI like it just fine.   
</span><br>
<span class="quotelev1">&gt; The errors PGI complains about has to do with mpi.h though:
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
<span class="quotelev1">&gt; Has anyone else seen that kind of problem with mpi.h  and pgi?  Do  
</span><br>
<span class="quotelev1">&gt; I need to use -c89  ?  I know PGI changed the default with this a  
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6129/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6130.php">Mark Borgerding: "[OMPI users] how to make a process start and then join a MPI group"</a>
<li><strong>Previous message:</strong> <a href="6128.php">Tim Mattox: "Re: [OMPI users] Object Send Doubt"</a>
<li><strong>In reply to:</strong> <a href="6117.php">Brian Dobbins: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
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
