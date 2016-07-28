<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  1 13:48:33 2006" -->
<!-- isoreceived="20060801174833" -->
<!-- sent="Tue, 1 Aug 2006 13:48:28 -0400" -->
<!-- isosent="20060801174828" -->
<!-- name="Wen Long at UMCES/HPL" -->
<!-- email="wenlong_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI on Dual Core Laptop?" -->
<!-- id="001501c6b592$b53415a0$804210ac_at_wenlongvm" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="f869b68c0608011027h3b22d38cgfbdbf9cf005dfc2f_at_mail.gmail.com" -->
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
<strong>From:</strong> Wen Long at UMCES/HPL (<em>wenlong_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-01 13:48:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1710.php">Robert Cummins: "[OMPI users] How do I debug this?"</a>
<li><strong>Previous message:</strong> <a href="1708.php">Durga Choudhury: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>In reply to:</strong> <a href="1708.php">Durga Choudhury: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p><span class="quotelev1">&gt;  Do you want to use MPI to chain a bunch of such laptops together (e.g. via ethernet) or just for the cores to talk to each other? If the latter; you do not need &gt;MPI.   Your SMP operating system (e.g. Linux) will automatically utilize both cores. The Linux 2.6 kernel also supports processor affinity which will always &gt;schedule the kernel on a fixed core, avoiding cache invalidation and stuff like that.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;While, I have got a 20 node linux cluster for MPI runs of a large code.  Yet the code is kind of hard to debug because I don't have control over that cluster.  So  my motivation is to run the code using laptop which has two processors with MPI instead of SMP and use a fancy new debugging tool by IBM,,, if you visit <a href="http://www-128.ibm.com/developerworks/edu/os-dw-os-ecl-ptp.html">http://www-128.ibm.com/developerworks/edu/os-dw-os-ecl-ptp.html</a> .  It uses Eclipse visual development kit for debugging.  Eclipse is good for C/C++, but my code is Fortran with CPP wraps for preprocessor.   Now looks like that people have hooked up Eclipse with Fortran ( <a href="http://www.eclipse.org/photran/">http://www.eclipse.org/photran/</a>  ),,,, I want to give it a try.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If we combine Eclipse + FDT  + PTP  that will be great and we don't have to buy the TotalView from  <a href="http://www.etnus.com/">http://www.etnus.com/</a> . 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;All comments are welcome,,,,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Wen
<br>
&nbsp;&nbsp;----- Original Message ----- 
<br>
&nbsp;&nbsp;From: Durga Choudhury 
<br>
&nbsp;&nbsp;To: Open MPI Users 
<br>
&nbsp;&nbsp;Sent: Tuesday, August 01, 2006 1:27 PM
<br>
&nbsp;&nbsp;Subject: Re: [OMPI users] Open MPI on Dual Core Laptop?
<br>
<p><p>&nbsp;&nbsp;Do you want to use MPI to chain a bunch of such laptops together (e.g. via ethernet) or just for the cores to talk to each other? If the latter; you do not need MPI. Your SMP operating system (e.g. Linux) will automatically utilize both cores. The Linux 2.6 kernel also supports processor affinity which will always schedule the kernel on a fixed core, avoiding cache invalidation and stuff like that.
<br>
<p>&nbsp;&nbsp;Thanks
<br>
<p>&nbsp;&nbsp;Durga
<br>
<p>&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;On 8/1/06, Wen Long at UMCES/HPL &lt;wenlong_at_[hidden]&gt; wrote: 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Hi,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Any people have installed open MPI on a Dual Core desktop or laptop?  Such as Intel Centrino Duo ? or it is totally impossible? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks,,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wen
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p><p><p>&nbsp;&nbsp;-- 
<br>
&nbsp;&nbsp;Devil wanted omnipresence;
<br>
&nbsp;&nbsp;He therefore created communists. 
<br>
<p><p>------------------------------------------------------------------------------
<br>
<p><p>&nbsp;&nbsp;_______________________________________________
<br>
&nbsp;&nbsp;users mailing list
<br>
&nbsp;&nbsp;users_at_[hidden]
<br>
&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1710.php">Robert Cummins: "[OMPI users] How do I debug this?"</a>
<li><strong>Previous message:</strong> <a href="1708.php">Durga Choudhury: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
<li><strong>In reply to:</strong> <a href="1708.php">Durga Choudhury: "Re: [OMPI users] Open MPI on Dual Core Laptop?"</a>
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
