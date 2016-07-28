<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 15 17:21:57 2006" -->
<!-- isoreceived="20060315222157" -->
<!-- sent="Wed, 15 Mar 2006 14:21:53 -0800" -->
<!-- isosent="20060315222153" -->
<!-- name="Davide Bergamasco" -->
<!-- email="bergamasco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Memory allocation issue with OpenIB" -->
<!-- id="44189381.9020106_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="74EAC6D2-6797-4B58-A2CF-E41003714814_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-03-15 17:21:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0862.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Galen,
<br>
<p>thank you for your prompt reply. Yep, I'm able to run my parallel app as 
<br>
root.  The following is the command line i use to start the MPI:
<br>
<p>mpirun -v -d -hostfile hostfile -np 2 -prefix /usr/local mpi_test
<br>
<p>Thank you so much for your help!
<br>
<p>Davide
<br>
<p><p>Galen M. Shipman wrote:
<br>
<span class="quotelev1">&gt; Hi Davide,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you able to run this as root? This would tell me if this is a  
</span><br>
<span class="quotelev1">&gt; permissions issue.
</span><br>
<span class="quotelev1">&gt; Also what options are you specifying to mpirun?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Galen
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 15, 2006, at 1:41 PM, Davide Bergamasco wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run OpenMPI on top of OpenIB but I'm running into a
</span><br>
<span class="quotelev2">&gt;&gt; weird memory allocation issue.  I already tried all the suggestions
</span><br>
<span class="quotelev2">&gt;&gt; listed in the FAQs (i.e., increase the locked mem limit, etc.) but I'm
</span><br>
<span class="quotelev2">&gt;&gt; still having trouble.  After the initialization a get an infinite
</span><br>
<span class="quotelev2">&gt;&gt; string of messages like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [gridnode:27003] mca_mpool_openib_register: error registering openib
</span><br>
<span class="quotelev2">&gt;&gt; memory of size 2109440 errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems like OpenMPI has entered an infinite loop.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help from the kind folks on this list will be greatly  
</span><br>
<span class="quotelev2">&gt;&gt; appreciated!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Davide
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
<li><strong>Next message:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Previous message:</strong> <a href="0862.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>In reply to:</strong> <a href="0862.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0864.php">Galen M. Shipman: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
<li><strong>Reply:</strong> <a href="0866.php">Emanuel Ziegler: "Re: [OMPI users] Memory allocation issue with OpenIB"</a>
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
