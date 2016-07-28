<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 17:57:20 2006" -->
<!-- isoreceived="20060315225720" -->
<!-- sent="Wed, 15 Mar 2006 14:57:15 -0800" -->
<!-- isosent="20060315225715" -->
<!-- name="Davide Bergamasco" -->
<!-- email="bergamasco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation issue with OpenIB" -->
<!-- id="44189BCB.1010202_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="259600EE-9D7A-4153-8793-8F04C53908FB_at_lanl.gov" -->
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
<strong>From:</strong> Davide Bergamasco (<em>bergamasco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-15 17:57:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My shell is tcsh, so I can provide you with the output of &quot;limit&quot;:
<br>
<p>cputime      unlimited
<br>
filesize     unlimited
<br>
datasize     unlimited
<br>
stacksize    8192 kbytes
<br>
coredumpsize 0 kbytes
<br>
memoryuse    unlimited
<br>
vmemoryuse   unlimited
<br>
descriptors  1024
<br>
memorylocked unlimited
<br>
maxproc      16383
<br>
<p>Thanks
<br>
<p>Davide
<br>
<p><p>Galen M. Shipman wrote:
<br>
<span class="quotelev2">&gt;&gt; thank you for your prompt reply. Yep, I'm able to run my parallel  
</span><br>
<span class="quotelev2">&gt;&gt; app as
</span><br>
<span class="quotelev2">&gt;&gt; root.  The following is the command line i use to start the MPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since you are able to successfully run the app as root I would say we  
</span><br>
<span class="quotelev1">&gt; are dealing with a permissions issue. What does  &quot;ulimit -a&quot; report?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -v -d -hostfile hostfile -np 2 -prefix /usr/local mpi_test
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you so much for your help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Davide
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Galen M. Shipman wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Davide,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you able to run this as root? This would tell me if this is a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; permissions issue.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also what options are you specifying to mpirun?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Galen
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 15, 2006, at 1:41 PM, Davide Bergamasco wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm trying to run OpenMPI on top of OpenIB but I'm running into a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; weird memory allocation issue.  I already tried all the suggestions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; listed in the FAQs (i.e., increase the locked mem limit, etc.)  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I'm
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still having trouble.  After the initialization a get an infinite
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; string of messages like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [gridnode:27003] mca_mpool_openib_register: error registering openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; memory of size 2109440 errno says Cannot allocate memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It seems like OpenMPI has entered an infinite loop.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any help from the kind folks on this list will be greatly
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appreciated!!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Davide
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
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
