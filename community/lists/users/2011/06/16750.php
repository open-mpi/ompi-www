<?
$subject_val = "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 09:53:27 2011" -->
<!-- isoreceived="20110623135327" -->
<!-- sent="Thu, 23 Jun 2011 15:56:11 +0200" -->
<!-- isosent="20110623135611" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl" -->
<!-- id="4E0345FB.90304_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTin3fi=TjH4nDqbTtxL3ds9VAaBJig_at_mail.gmail.com" -->
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
<strong>From:</strong> Mathieu Gontier (<em>mathieu.gontier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 09:56:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>In reply to:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16756.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Thank for the answer.
<br>
I am testing with OpenMPI-1.4.3: my computation is queuing. But I did 
<br>
not read anything obvious related to my issue. Have you read something 
<br>
which could solve it?
<br>
I am going to submit my computation with --mca mpi_leave_pinned 0, but 
<br>
do you have any idea how it affect the performance? Compared to using 
<br>
Ethernet?
<br>
<p>Many thanks for your support.
<br>
<p>On 06/23/2011 03:01 PM, Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; I wonder if this is related to memory pinning. Can you try turning off
</span><br>
<span class="quotelev1">&gt; the leave pinned, and see if the problem persists (this may affect
</span><br>
<span class="quotelev1">&gt; performance, but should avoid the crash):
</span><br>
<span class="quotelev1">&gt;    mpirun ... --mca mpi_leave_pinned 0 ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also it looks like Smoky has a slightly newer version of the 1.4
</span><br>
<span class="quotelev1">&gt; branch that you should try to switch to if you can. The following
</span><br>
<span class="quotelev1">&gt; command will show you all of the available installs on that machine:
</span><br>
<span class="quotelev1">&gt;    shell$ module avail ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For a list of supported compilers for that version try the 'show' option:
</span><br>
<span class="quotelev1">&gt; shell$ module show ompi/1.4.3
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; /sw/smoky/modulefiles-centos/ompi/1.4.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module-whatis	 This module configures your environment to make Open
</span><br>
<span class="quotelev1">&gt; MPI 1.4.3 available.
</span><br>
<span class="quotelev1">&gt; Supported Compilers:
</span><br>
<span class="quotelev1">&gt;       pathscale/3.2.99
</span><br>
<span class="quotelev1">&gt;       pathscale/3.2
</span><br>
<span class="quotelev1">&gt;       pgi/10.9
</span><br>
<span class="quotelev1">&gt;       pgi/10.4
</span><br>
<span class="quotelev1">&gt;       intel/11.1.072
</span><br>
<span class="quotelev1">&gt;       gcc/4.4.4
</span><br>
<span class="quotelev1">&gt;       gcc/4.4.3
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me know if that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 22, 2011 at 4:16 AM, Mathieu Gontier
</span><br>
<span class="quotelev1">&gt; &lt;mathieu.gontier_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; First of all, all my apologies because I post this message to both the bug
</span><br>
<span class="quotelev2">&gt;&gt; and user mailing list. But for the moment, I do not know if it is a bug!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am running a CFD structured flow solver at ORNL, and I have an access to a
</span><br>
<span class="quotelev2">&gt;&gt; small cluster (Smoky) using OpenMPI-1.4.2 with Infiniband by default.
</span><br>
<span class="quotelev2">&gt;&gt; Recently we increased the size of our models, and since that time we have
</span><br>
<span class="quotelev2">&gt;&gt; run into many infiniband related problems.  The most serious problem is a
</span><br>
<span class="quotelev2">&gt;&gt; hard crash with the following error message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [smoky45][[60998,1],32][/sw/sources/ompi/1.4.2/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev2">&gt;&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we force the solver to use ethernet (mpirun -mca btl ^openib) the
</span><br>
<span class="quotelev2">&gt;&gt; computations works correctly, although very slowly (a single iteration take
</span><br>
<span class="quotelev2">&gt;&gt; ages). Do you have any idea what could be causing these problems?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If it is due to a bug or a limitation into OpenMPI, do you think the version
</span><br>
<span class="quotelev2">&gt;&gt; 1.4.3, the coming 1.4.4 or any 1.5 version could solve the problem? I read
</span><br>
<span class="quotelev2">&gt;&gt; the release notes, but I did not read any obvious patch which could fix my
</span><br>
<span class="quotelev2">&gt;&gt; problem. The system administrator is ready to compile a new package for us,
</span><br>
<span class="quotelev2">&gt;&gt; but I do not want to ask to install to many of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu Gontier
</span><br>
<span class="quotelev2">&gt;&gt; skype: mathieu_gontier
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
/
Mathieu Gontier
skype: mathieu_gontier /
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16750/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>In reply to:</strong> <a href="16749.php">Josh Hursey: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16756.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
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
