<?
$subject_val = "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 10:19:42 2011" -->
<!-- isoreceived="20110623141942" -->
<!-- sent="Thu, 23 Jun 2011 16:22:31 +0200" -->
<!-- isosent="20110623142231" -->
<!-- name="Mathieu Gontier" -->
<!-- email="mathieu.gontier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl" -->
<!-- id="4E034C27.2010408_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4FF029C-FA78-4DDF-B5A8-9E92AEA16279_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-06-23 10:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16752.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>In reply to:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16755.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16755.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your answer. It makes sense.
<br>
Sorry if my question seems silly, but what does QP mean? It is difficult 
<br>
to read the FAQ without knowing that!
<br>
<p>Thanks.
<br>
<p>On 06/23/2011 04:00 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; One possibility: if you increase the number of processes in the job, 
</span><br>
<span class="quotelev1">&gt; and they all interconnect, then the IB interface can (I believe) run 
</span><br>
<span class="quotelev1">&gt; out of memory at some point. IIRC, the answer was to reduce the size 
</span><br>
<span class="quotelev1">&gt; of the QPs so that you could support a larger number of them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You should find info about controlling QP size in the IB FAQ area on 
</span><br>
<span class="quotelev1">&gt; the OMPI web site, I believe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2011, at 7:56 AM, Mathieu Gontier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank for the answer.
</span><br>
<span class="quotelev2">&gt;&gt; I am testing with OpenMPI-1.4.3: my computation is queuing. But I did 
</span><br>
<span class="quotelev2">&gt;&gt; not read anything obvious related to my issue. Have you read 
</span><br>
<span class="quotelev2">&gt;&gt; something which could solve it?
</span><br>
<span class="quotelev2">&gt;&gt; I am going to submit my computation with --mca mpi_leave_pinned 0, 
</span><br>
<span class="quotelev2">&gt;&gt; but do you have any idea how it affect the performance? Compared to 
</span><br>
<span class="quotelev2">&gt;&gt; using Ethernet?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks for your support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 06/23/2011 03:01 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if this is related to memory pinning. Can you try turning off
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the leave pinned, and see if the problem persists (this may affect
</span><br>
<span class="quotelev3">&gt;&gt;&gt; performance, but should avoid the crash):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun ... --mca mpi_leave_pinned 0 ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also it looks like Smoky has a slightly newer version of the 1.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; branch that you should try to switch to if you can. The following
</span><br>
<span class="quotelev3">&gt;&gt;&gt; command will show you all of the available installs on that machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    shell$ module avail ompi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For a list of supported compilers for that version try the 'show' option:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell$ module show ompi/1.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /sw/smoky/modulefiles-centos/ompi/1.4.3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; module-whatis	 This module configures your environment to make Open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI 1.4.3 available.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Supported Compilers:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pathscale/3.2.99
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pathscale/3.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pgi/10.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       pgi/10.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       intel/11.1.072
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       gcc/4.4.4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       gcc/4.4.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if that helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jun 22, 2011 at 4:16 AM, Mathieu Gontier
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mathieu.gontier_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; First of all, all my apologies because I post this message to both the bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and user mailing list. But for the moment, I do not know if it is a bug!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am running a CFD structured flow solver at ORNL, and I have an access to a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; small cluster (Smoky) using OpenMPI-1.4.2 with Infiniband by default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Recently we increased the size of our models, and since that time we have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run into many infiniband related problems.  The most serious problem is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hard crash with the following error message:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [smoky45][[60998,1],32][/sw/sources/ompi/1.4.2/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If we force the solver to use ethernet (mpirun -mca btl ^openib) the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; computations works correctly, although very slowly (a single iteration take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ages). Do you have any idea what could be causing these problems?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it is due to a bug or a limitation into OpenMPI, do you think the version
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1.4.3, the coming 1.4.4 or any 1.5 version could solve the problem? I read
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the release notes, but I did not read any obvious patch which could fix my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problem. The system administrator is ready to compile a new package for us,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I do not want to ask to install to many of them.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Mathieu Gontier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; skype: mathieu_gontier
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; /
</span><br>
<span class="quotelev2">&gt;&gt; Mathieu Gontier
</span><br>
<span class="quotelev2">&gt;&gt; skype: mathieu_gontier /
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
/
Mathieu Gontier
skype: mathieu_gontier /
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16753/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16752.php">Christian Anonymous: "[OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>In reply to:</strong> <a href="16751.php">Ralph Castain: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16755.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Reply:</strong> <a href="16755.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
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
