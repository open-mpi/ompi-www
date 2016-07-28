<?
$subject_val = "Re: [OMPI users] Problem with WRF and pgi-7.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 16:50:49 2008" -->
<!-- isoreceived="20080723205049" -->
<!-- sent="Wed, 23 Jul 2008 16:50:40 -0400" -->
<!-- isosent="20080723205040" -->
<!-- name="Brian Dobbins" -->
<!-- email="bdobbins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with WRF and pgi-7.2" -->
<!-- id="2b5e0c120807231350s12a7d533mfc8a1f2c626e9d3d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7D84B76B-BD97-4BB0-89B6-89D777C5AEDD_at_umich.edu" -->
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
<strong>From:</strong> Brian Dobbins (<em>bdobbins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 16:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brock,
<br>
<p>&nbsp;&nbsp;Just to add my two cents now, I finally got around to building WRF with
<br>
PGI 7.2 as well.  I noticed that in the configure script there isn't an
<br>
option specifically for PGI (Fortran) + PGI (C), and when I try that
<br>
combination I do get the same error you have - I'm doing this on RHEL5.2,
<br>
with PGI 7.2-2.  There *is* a 7.2-3 out that I haven't tried yet, but they
<br>
don't mention anything about this particular error in the fixes section of
<br>
their documentation, so I'm guessing they haven't come across it yet.
<br>
<p>&nbsp;&nbsp;.. In the meantime, you *can* successfully build WRF with a PGI (Fortran)
<br>
+ GCC (C) OpenMPI install.  I just did that, and tested it with one case,
<br>
using OpenMPI-1.2.6, PGI 7.2-2 and GCC 4.1.2 on the same RHEL 5.2 system.
<br>
<p>&nbsp;&nbsp;In a nutshell, I'm pretty sure it's a PGI problem.  If you want to post it
<br>
in their forums, they're generally pretty responsive. (And if you don't, I
<br>
will, since it'd be nice to see it work without a hybrid MPI installation!)
<br>
<p>&nbsp;&nbsp;Cheers,
<br>
&nbsp;&nbsp;- Brian
<br>
<p><p>Brian Dobbins
<br>
Yale Engineering HPC
<br>
<p><p>On Wed, Jul 23, 2008 at 12:09 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Not yet, if you have no ideas I will open a ticket.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hmm; I haven't seen this kind of problem before.  Have you contacted PGI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 21, 2008, at 2:08 PM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Hi, When compiling WRF with PGI-7.2-1  with openmpi-1.2.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The file buf_for_proc.c  fails.  Nothing specail about this file sticks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out to me.  But older versions of PGI like it just fine.  The errors PGI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; complains about has to do with mpi.h though:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [brockp_at_nyx-login1 RSL_LITE]$ mpicc  -DFSEEKO64_OK  -w -O3 -DDM_PARALLEL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   -c buf_for_proc.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0036-Syntax error: Recovery attempted by inserting identifier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .Z0000 before '(' (/home/software/rhel4/openmpi-1.2.6/pgi-7.0/include/mpi.h:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 823)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0082-Function returning array not allowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/home/software/rhel4/openmpi-1.2.6/pgi-7.0/include/mpi.h: 823)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC-S-0043-Redefinition of symbol, MPI_Comm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (/home/software/rhel4/openmpi-1.2.6/pgi-7.0/include/mpi.h: 837)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PGC/x86-64 Linux 7.2-1: compilation completed with severe errors
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Has anyone else seen that kind of problem with mpi.h  and pgi?  Do I need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use -c89  ?  I know PGI changed the default with this a while back, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it does not appear to help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp &lt;<a href="http://www.umich.edu/%7Ebrockp">http://www.umich.edu/%7Ebrockp</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6117/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6118.php">Jeff Squyres: "Re: [OMPI users] Can't use tcp instead of openib/infinipath"</a>
<li><strong>Previous message:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>In reply to:</strong> <a href="6116.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
<li><strong>Reply:</strong> <a href="6129.php">Brock Palen: "Re: [OMPI users] Problem with WRF and pgi-7.2"</a>
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
