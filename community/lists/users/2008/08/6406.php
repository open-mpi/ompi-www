<?
$subject_val = "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 22:53:18 2008" -->
<!-- isoreceived="20080822025318" -->
<!-- sent="Thu, 21 Aug 2008 19:53:14 -0700 (PDT)" -->
<!-- isosent="20080822025314" -->
<!-- name="Tom Riddle" -->
<!-- email="rarebitusa_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath" -->
<!-- id="389278.39153.qm_at_web55402.mail.re4.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5414F2CB-4BF8-4B54-9561-E31E7EE5D9D1_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2008-08-21 22:53:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6405.php">Francesco Iannone: "[OMPI users]  Memory allocation with PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George,
<br>
<p>Thank you for taking the time and composing the detailed explanation. This gives me a bit more understanding with respect to the underlying plumbing, which I appreciate.
<br>
<p>Bottom line the update to r19377 has appeared to have resolved the truncate problem. While I have tested in only a limited number of hosts, it seems to behave as expected.&#160; Thanks!! Tom
<br>
<p>--- On Mon, 8/18/08, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
From: George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath
<br>
To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
<br>
Cc: &quot;Tom Riddle&quot; &lt;rarebitusa_at_[hidden]&gt;
<br>
Date: Monday, August 18, 2008, 4:16 PM
<br>
<p>Tom,
<br>
<p>This make perfect sense. However, the fact that one of the network  
<br>
devices (BTL in Open MPi terms) is not available at runtime should not  
<br>
modify the behavior of the application. At least this is the theory :)  
<br>
Changing from named receives to unnamed one, definitively modify the  
<br>
signature (i.e. communication pattern) of the application, and might  
<br>
in most cases introduce mismatching if the same tag is used. However,  
<br>
with the osu_latency there are only two ranks involved in the  
<br>
communication (rank 0 and 1) so the communication pattern should stay  
<br>
the same whatever you use ANY_SOURCE or not, as the MPI standard  
<br>
enforce the message ordering.
<br>
<p>Now, let me explain a little bit of internal black magic behind of  
<br>
Open MPI. When we discover that a BTL is overcharged, we reroute the  
<br>
new messages into a local &quot;pending&quot; queue, until some space on the  
<br>
device became available. Once we start book-keeping messages, we still  
<br>
have to enforce the MPI logical ordering, so all new messages will  
<br>
follow into the &quot;pending&quot; queue, until the device is capable of  
<br>
sending data again, and then the messages will be delivered in-order  
<br>
to their respective destination. What might happens, and this is only  
<br>
speculation at this point, is that somehow a message bypass this  
<br>
&quot;pending&quot; queue and goes into the wire too early. As this message
<br>
will  
<br>
have the same tag, Open MPI might match it when the message arrive at  
<br>
the destination, and can generate a TRUNCATE error if this message  
<br>
belong to the next loop in the osu_latency benchmark. As you can see,  
<br>
there are many ifs in the previous paragraph, so let's assume by now  
<br>
that this is just pure speculation. Please upgrade to the latest  
<br>
version of Open MPI, and if you encounter the same problem then we  
<br>
will try to dig a little bit deeper into this &quot;speculation&quot;.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 19, 2008, at 12:36 AM, Tom Riddle wrote:
<br>
<p><span class="quotelev1">&gt; Thanks George, I will update and try the latest repo. However I'd  
</span><br>
<span class="quotelev1">&gt; like to describe our usage case a bit more to see if there is  
</span><br>
<span class="quotelev1">&gt; something that may not be proper in our development approach.  
</span><br>
<span class="quotelev1">&gt; Forgive me if this is repetitious...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have configured and built OpenMPI originally on a machine with  
</span><br>
<span class="quotelev1">&gt; Infinipath / PSM installed. Since we desire a flexible software  
</span><br>
<span class="quotelev1">&gt; development environment across a number of machines (most of them  
</span><br>
<span class="quotelev1">&gt; are without the Infinipath hw), we run these same OpenMPI bins in a  
</span><br>
<span class="quotelev1">&gt; shared user area. That means other developer's machines, which do  
</span><br>
<span class="quotelev1">&gt; not have Infinipath / PSM installed locally, will simulate the  
</span><br>
<span class="quotelev1">&gt; multiple machine communication by running in shared memory mode.   
</span><br>
<span class="quotelev1">&gt; But again these OpenMPI bins have been configured with Infinipath  
</span><br>
<span class="quotelev1">&gt; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we see the error when running in shared memory mode on machines  
</span><br>
<span class="quotelev1">&gt; that don't have Infinipath, so is there a way at runtime that you  
</span><br>
<span class="quotelev1">&gt; can force shared memory mode exclusively? We are wondering if  
</span><br>
<span class="quotelev1">&gt; designating MPI_ANY_SOURCE may then direct OpenMPI to look at every  
</span><br>
<span class="quotelev1">&gt; possible communications mode and that probably would cause conflicts  
</span><br>
<span class="quotelev1">&gt; if there wasn't psm libs present.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this makes sense, Tom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Things were working without issue until we went to the wildcard  
</span><br>
<span class="quotelev1">&gt; MPI_ANY_SOURCE on our receives but only on machines without . I  
</span><br>
<span class="quotelev1">&gt; guess I wonder what is the mechanism when in a wildcard mode.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- On Sun, 8/17/08, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without  
</span><br>
<span class="quotelev1">&gt; Infinipath
</span><br>
<span class="quotelev1">&gt; To: rarebitusa_at_[hidden], &quot;Open MPI Users&quot;
</span><br>
&lt;users_at_[hidden]&gt;
<br>
<span class="quotelev1">&gt; Date: Sunday, August 17, 2008, 2:42 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tom,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did the same modification as you on the osu_latency and the
</span><br>
<span class="quotelev1">&gt; resulting application run to completion. I don't get any TRUNCATE
</span><br>
<span class="quotelev1">&gt; error messages. I'm using the latest version of Open MPI  
</span><br>
<span class="quotelev1">&gt; (1.4a1r19313).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There was a bug that might be related to your problem but our commit
</span><br>
<span class="quotelev1">&gt; log shows it was fixed by commit 18830 on July 9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2008, at 5:49 PM, Tom Riddle wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A bit more info wrt the question below. I have run other releases of
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI and they seem to be fine. The reason I need to run the
</span><br>
<span class="quotelev2">&gt; &gt; latest is because it supports valgrind fully.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.2.4
</span><br>
<span class="quotelev2">&gt; &gt; openmpi-1.3ar18303
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; TIA, Tom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --- On Tue, 8/12/08, Tom Riddle &lt;rarebitusa_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am getting a curious error on a simple communications test. I have
</span><br>
<span class="quotelev2">&gt; &gt; altered the std
</span><br>
<span class="quotelev1">&gt;  mvapich osu_latency test to accept receives from any
</span><br>
<span class="quotelev2">&gt; &gt; source and I get the following error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; [d013.sc.net:15455] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; [d013.sc.net:15455] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [d013.sc.net:15455] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt; [d013.sc.net:15455] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the code change was...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  MPI_Recv(r_buf, size, MPI_CHAR, MPI_ANY_SOURCE, 1, MPI_COMM_WORLD,
</span><br>
<span class="quotelev2">&gt; &gt; &amp;reqstat);
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the command line I run was
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun -np 2 ./osu_latency
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Now I run this on 2 types of host machine configurations. One that
</span><br>
<span class="quotelev2">&gt; &gt; has Infinipath HCAs  installed and another that doesn't. I run
</span><br>
both
<br>
<span class="quotelev2">&gt; &gt; of these in shared memory mode ie: dual processes on the same node.
</span><br>
<span class="quotelev2">&gt; &gt; I have verified that when I am on the host with Infinipath I am
</span><br>
<span class="quotelev2">&gt; &gt; actually running the OpenMPI mpirun, not
</span><br>
<span class="quotelev1">&gt;  the mpi that comes with the
</span><br>
<span class="quotelev2">&gt; &gt; HCA.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have built OpenMPI with psm support from a fairly recent svn pull
</span><br>
<span class="quotelev2">&gt; &gt; and run the same bins on both host machines... The config was as
</span><br>
<span class="quotelev2">&gt; &gt; follows:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $ ../configure --prefix=/opt/wkspace/openmpi-1.3 CC=gcc CXX=g++
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --disable-mpi-f77 --enable-debug --enable-memchecker
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --with-psm=/usr/include --with-valgrind=/opt/wkspace/ 
</span><br>
<span class="quotelev1">&gt; valgrind-3.3.0/
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun --version
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.4a1r18908
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error presents itself only on the host that does not have
</span><br>
<span class="quotelev2">&gt; &gt; Infinipath installed. I have combed through the mca args to see if
</span><br>
<span class="quotelev2">&gt; &gt; there is a setting I am missing but I cannot see anything obvious.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any input would be appreciated. Thanks. Tom
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-6406/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6407.php">Camille Coti: "[OMPI users] problem when mpi_paffinity_alone is set to 1"</a>
<li><strong>Previous message:</strong> <a href="6405.php">Francesco Iannone: "[OMPI users]  Memory allocation with PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
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
