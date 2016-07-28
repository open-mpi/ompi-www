<?
$subject_val = "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 09:01:21 2011" -->
<!-- isoreceived="20110623130121" -->
<!-- sent="Thu, 23 Jun 2011 09:01:16 -0400" -->
<!-- isosent="20110623130116" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl" -->
<!-- id="BANLkTin3fi=TjH4nDqbTtxL3ds9VAaBJig_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E01A4E1.3090804_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 09:01:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16748.php">Vasiliy G Tolstov: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>In reply to:</strong> <a href="16734.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if this is related to memory pinning. Can you try turning off
<br>
the leave pinned, and see if the problem persists (this may affect
<br>
performance, but should avoid the crash):
<br>
&nbsp;&nbsp;mpirun ... --mca mpi_leave_pinned 0 ...
<br>
<p>Also it looks like Smoky has a slightly newer version of the 1.4
<br>
branch that you should try to switch to if you can. The following
<br>
command will show you all of the available installs on that machine:
<br>
&nbsp;&nbsp;shell$ module avail ompi
<br>
<p>For a list of supported compilers for that version try the 'show' option:
<br>
shell$ module show ompi/1.4.3
<br>
-------------------------------------------------------------------
<br>
/sw/smoky/modulefiles-centos/ompi/1.4.3:
<br>
<p>module-whatis	 This module configures your environment to make Open
<br>
MPI 1.4.3 available.
<br>
Supported Compilers:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pathscale/3.2.99
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pathscale/3.2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgi/10.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;pgi/10.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;intel/11.1.072
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc/4.4.4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;gcc/4.4.3
<br>
-------------------------------------------------------------------
<br>
<p>Let me know if that helps.
<br>
<p>Josh
<br>
<p><p>On Wed, Jun 22, 2011 at 4:16 AM, Mathieu Gontier
<br>
&lt;mathieu.gontier_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First of all, all my apologies because I post this message to both the bug
</span><br>
<span class="quotelev1">&gt; and user mailing list. But for the moment, I do not know if it is a bug!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running a CFD structured flow solver at ORNL, and I have an access to a
</span><br>
<span class="quotelev1">&gt; small cluster (Smoky) using OpenMPI-1.4.2 with Infiniband by default.
</span><br>
<span class="quotelev1">&gt; Recently we increased the size of our models, and since that time we have
</span><br>
<span class="quotelev1">&gt; run into many infiniband related problems.&#160; The most serious problem is a
</span><br>
<span class="quotelev1">&gt; hard crash with the following error message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [smoky45][[60998,1],32][/sw/sources/ompi/1.4.2/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev1">&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If we force the solver to use ethernet (mpirun -mca btl ^openib) the
</span><br>
<span class="quotelev1">&gt; computations works correctly, although very slowly (a single iteration take
</span><br>
<span class="quotelev1">&gt; ages). Do you have any idea what could be causing these problems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If it is due to a bug or a limitation into OpenMPI, do you think the version
</span><br>
<span class="quotelev1">&gt; 1.4.3, the coming 1.4.4 or any 1.5 version could solve the problem? I read
</span><br>
<span class="quotelev1">&gt; the release notes, but I did not read any obvious patch which could fix my
</span><br>
<span class="quotelev1">&gt; problem. The system administrator is ready to compile a new package for us,
</span><br>
<span class="quotelev1">&gt; but I do not want to ask to install to many of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; skype: mathieu_gontier
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
<p><p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16748.php">Vasiliy G Tolstov: "Re: [OMPI users] Need Source Code MPI"</a>
<li><strong>In reply to:</strong> <a href="16734.php">Mathieu Gontier: "[OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16750.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
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
