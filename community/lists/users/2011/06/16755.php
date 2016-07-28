<?
$subject_val = "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 10:34:12 2011" -->
<!-- isoreceived="20110623143412" -->
<!-- sent="Thu, 23 Jun 2011 08:34:07 -0600" -->
<!-- isosent="20110623143407" -->
<!-- name="Samuel K. Gutierrez" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl" -->
<!-- id="F614E972-B4FB-4C4A-BBA2-19E6AE96092D_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E034C27.2010408_at_gmail.com" -->
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
<strong>From:</strong> Samuel K. Gutierrez (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-23 10:34:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16756.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>In reply to:</strong> <a href="16753.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>QP = Queue Pair
<br>
<p>Here are a couple of nice FAQ entries that I find useful.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=openfabrics">http://www.open-mpi.org/faq/?category=openfabrics</a>
<br>
<p>And videos:
<br>
<p><a href="http://www.open-mpi.org/video/?category=openfabrics">http://www.open-mpi.org/video/?category=openfabrics</a>
<br>
<p><p><pre>
--
Samuel K. Gutierrez
Los Alamos National Laboratory
On Jun 23, 2011, at 8:22 AM, Mathieu Gontier wrote:
&gt; Hi,
&gt; 
&gt; Thanks for your answer. It makes sense. 
&gt; Sorry if my question seems silly, but what does QP mean? It is difficult to read the FAQ without knowing that!
&gt; 
&gt; Thanks. 
&gt; 
&gt; On 06/23/2011 04:00 PM, Ralph Castain wrote:
&gt;&gt; 
&gt;&gt; One possibility: if you increase the number of processes in the job, and they all interconnect, then the IB interface can (I believe) run out of memory at some point. IIRC, the answer was to reduce the size of the QPs so that you could support a larger number of them.
&gt;&gt; 
&gt;&gt; You should find info about controlling QP size in the IB FAQ area on the OMPI web site, I believe.
&gt;&gt; 
&gt;&gt; On Jun 23, 2011, at 7:56 AM, Mathieu Gontier wrote:
&gt;&gt; 
&gt;&gt;&gt; Hello, 
&gt;&gt;&gt; 
&gt;&gt;&gt; Thank for the answer.
&gt;&gt;&gt; I am testing with OpenMPI-1.4.3: my computation is queuing. But I did not read anything obvious related to my issue. Have you read something which could solve it? 
&gt;&gt;&gt; I am going to submit my computation with --mca mpi_leave_pinned 0, but do you have any idea how it affect the performance? Compared to using Ethernet? 
&gt;&gt;&gt; 
&gt;&gt;&gt; Many thanks for your support. 
&gt;&gt;&gt; 
&gt;&gt;&gt; On 06/23/2011 03:01 PM, Josh Hursey wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; I wonder if this is related to memory pinning. Can you try turning off
&gt;&gt;&gt;&gt; the leave pinned, and see if the problem persists (this may affect
&gt;&gt;&gt;&gt; performance, but should avoid the crash):
&gt;&gt;&gt;&gt;   mpirun ... --mca mpi_leave_pinned 0 ...
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Also it looks like Smoky has a slightly newer version of the 1.4
&gt;&gt;&gt;&gt; branch that you should try to switch to if you can. The following
&gt;&gt;&gt;&gt; command will show you all of the available installs on that machine:
&gt;&gt;&gt;&gt;   shell$ module avail ompi
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; For a list of supported compilers for that version try the 'show' option:
&gt;&gt;&gt;&gt; shell$ module show ompi/1.4.3
&gt;&gt;&gt;&gt; -------------------------------------------------------------------
&gt;&gt;&gt;&gt; /sw/smoky/modulefiles-centos/ompi/1.4.3:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; module-whatis	 This module configures your environment to make Open
&gt;&gt;&gt;&gt; MPI 1.4.3 available.
&gt;&gt;&gt;&gt; Supported Compilers:
&gt;&gt;&gt;&gt;      pathscale/3.2.99
&gt;&gt;&gt;&gt;      pathscale/3.2
&gt;&gt;&gt;&gt;      pgi/10.9
&gt;&gt;&gt;&gt;      pgi/10.4
&gt;&gt;&gt;&gt;      intel/11.1.072
&gt;&gt;&gt;&gt;      gcc/4.4.4
&gt;&gt;&gt;&gt;      gcc/4.4.3
&gt;&gt;&gt;&gt; -------------------------------------------------------------------
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Let me know if that helps.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Josh
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On Wed, Jun 22, 2011 at 4:16 AM, Mathieu Gontier
&gt;&gt;&gt;&gt; &lt;mathieu.gontier_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt; Dear all,
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; First of all, all my apologies because I post this message to both the bug
&gt;&gt;&gt;&gt;&gt; and user mailing list. But for the moment, I do not know if it is a bug!
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; I am running a CFD structured flow solver at ORNL, and I have an access to a
&gt;&gt;&gt;&gt;&gt; small cluster (Smoky) using OpenMPI-1.4.2 with Infiniband by default.
&gt;&gt;&gt;&gt;&gt; Recently we increased the size of our models, and since that time we have
&gt;&gt;&gt;&gt;&gt; run into many infiniband related problems.  The most serious problem is a
&gt;&gt;&gt;&gt;&gt; hard crash with the following error message:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; [smoky45][[60998,1],32][/sw/sources/ompi/1.4.2/ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
&gt;&gt;&gt;&gt;&gt; error creating qp errno says Cannot allocate memory
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; If we force the solver to use ethernet (mpirun -mca btl ^openib) the
&gt;&gt;&gt;&gt;&gt; computations works correctly, although very slowly (a single iteration take
&gt;&gt;&gt;&gt;&gt; ages). Do you have any idea what could be causing these problems?
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; If it is due to a bug or a limitation into OpenMPI, do you think the version
&gt;&gt;&gt;&gt;&gt; 1.4.3, the coming 1.4.4 or any 1.5 version could solve the problem? I read
&gt;&gt;&gt;&gt;&gt; the release notes, but I did not read any obvious patch which could fix my
&gt;&gt;&gt;&gt;&gt; problem. The system administrator is ready to compile a new package for us,
&gt;&gt;&gt;&gt;&gt; but I do not want to ask to install to many of them.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Thanks.
&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Mathieu Gontier
&gt;&gt;&gt;&gt;&gt; skype: mathieu_gontier
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; users mailing list
&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; -- 
&gt;&gt;&gt; 
&gt;&gt;&gt; Mathieu Gontier 
&gt;&gt;&gt; skype: mathieu_gontier
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; -- 
&gt; 
&gt; Mathieu Gontier 
&gt; skype: mathieu_gontier
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16755/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16756.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>Previous message:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<li><strong>In reply to:</strong> <a href="16753.php">Mathieu Gontier: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16754.php">Samuel K. Gutierrez: "Re: [OMPI users] [ompi-1.4.2] Infiniband issue on smoky @ ornl"</a>
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
