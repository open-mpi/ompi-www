<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 18:36:48 2008" -->
<!-- isoreceived="20080818223648" -->
<!-- sent="Mon, 18 Aug 2008 15:36:41 -0700 (PDT)" -->
<!-- isosent="20080818223641" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath" -->
<!-- id="953820.25720.qm_at_web55401.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="590202A4-BD12-4F7F-BA68-4E825ACD2E0F_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath<br>
<strong>From:</strong> Tom Riddle (<em>rarebitusa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 18:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks George, I will update and try the latest repo. However I'd like to describe our usage case a bit more to see if there is something that may not be proper in our development approach. Forgive me if this is repetitious...
<br>
<p>We have configured and built OpenMPI originally on a machine with Infinipath / PSM installed. Since we desire a flexible software development environment across a number of machines (most of them are without the Infinipath hw), we run these same OpenMPI bins in a shared user area. That means other developer's machines, which do not have Infinipath / PSM installed locally, will simulate the multiple machine communication by running in shared memory mode.&#160; But again these OpenMPI bins have been configured with Infinipath support.
<br>
<p>So we see the error when running in shared memory mode on machines that don't have Infinipath, so is there a way at runtime that you can force shared memory mode exclusively? We are wondering if designating MPI_ANY_SOURCE may then direct OpenMPI to look at every possible communications mode and that probably would cause conflicts if there wasn't psm libs present.
<br>
<p>Hope this makes sense, Tom
<br>
<p><p><p>Things were working without issue until we went to the wildcard MPI_ANY_SOURCE on our receives but only on machines without . I guess I wonder what is the mechanism when in a wildcard mode. 
<br>
<p>--- On Sun, 8/17/08, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath
<br>
To: rarebitusa_at_[hidden], &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Date: Sunday, August 17, 2008, 2:42 PM
<br>
<p>Tom,
<br>
<p>I did the same modification as you on the osu_latency and the  
<br>
resulting application run to completion. I don't get any TRUNCATE  
<br>
error messages. I'm using the latest version of Open MPI (1.4a1r19313).
<br>
<p>There was a bug that might be related to your problem but our commit  
<br>
log shows it was fixed by commit 18830 on July 9.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 13, 2008, at 5:49 PM, Tom Riddle wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A bit more info wrt the question below. I have run other releases of  
</span><br>
<span class="quotelev1">&gt; OpenMPI and they seem to be fine. The reason I need to run the  
</span><br>
<span class="quotelev1">&gt; latest is because it supports valgrind fully.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.4
</span><br>
<span class="quotelev1">&gt; openmpi-1.3ar18303
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA, Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Tue, 8/12/08, Tom Riddle &lt;rarebitusa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am getting a curious error on a simple communications test. I have  
</span><br>
<span class="quotelev1">&gt; altered the std mvapich osu_latency test to accept receives from any  
</span><br>
<span class="quotelev1">&gt; source and I get the following error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [d013.sc.net:15455] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the code change was...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  MPI_Recv(r_buf, size, MPI_CHAR, MPI_ANY_SOURCE, 1, MPI_COMM_WORLD,  
</span><br>
<span class="quotelev1">&gt; &amp;reqstat);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the command line I run was
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 ./osu_latency
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now I run this on 2 types of host machine configurations. One that  
</span><br>
<span class="quotelev1">&gt; has Infinipath HCAs  installed and another that doesn't. I run both  
</span><br>
<span class="quotelev1">&gt; of these in shared memory mode ie: dual processes on the same node.  
</span><br>
<span class="quotelev1">&gt; I have verified that when I am on the host with Infinipath I am  
</span><br>
<span class="quotelev1">&gt; actually running the OpenMPI mpirun, not the mpi that comes with the  
</span><br>
<span class="quotelev1">&gt; HCA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have built OpenMPI with psm support from a fairly recent svn pull  
</span><br>
<span class="quotelev1">&gt; and run the same bins on both host machines... The config was as  
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev2">&gt; &gt; $ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc CXX=g++
</span><br>
<span class="quotelev2">&gt; &gt; --disable-mpi-f77 --enable-debug --enable-memchecker
</span><br>
<span class="quotelev2">&gt; &gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/valgrind-3.3.0/
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --version
</span><br>
<span class="quotelev1">&gt; mpirun (Open MPI) 1.4a1r18908
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The error presents itself only on the host that does not have  
</span><br>
<span class="quotelev1">&gt; Infinipath installed. I have combed through the mca args to see if  
</span><br>
<span class="quotelev1">&gt; there is a setting I am missing but I cannot see anything obvious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any input would be appreciated. Thanks. Tom
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Previous message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>In reply to:</strong> <a href="6372.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>Reply:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
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
