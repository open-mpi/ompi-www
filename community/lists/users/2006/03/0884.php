<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Mar 18 14:29:02 2006" -->
<!-- isoreceived="20060318192902" -->
<!-- sent="Sat, 18 Mar 2006 14:28:55 -0500" -->
<!-- isosent="20060318192855" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1" -->
<!-- id="DBC9813F-DC14-4AF0-B3E0-B8F08958F920_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="441BE3A5.8050304_at_fraka-mp.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-18 14:28:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0885.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2006, at 5:40 AM, Frank wrote:
<br>
<p><span class="quotelev1">&gt; XGRID_CONTROLLER_HOSTNAME and XGRID_CONTROLLER_PASSWORD are  
</span><br>
<span class="quotelev1">&gt; properly set
</span><br>
<span class="quotelev1">&gt; up, Open-MPI 1.0.1 is installed on all machines (with the same  
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; options). When configured with --prefix=/usr/local/openmpi my app is
</span><br>
<span class="quotelev1">&gt; supplied to the xgrid controller and I can see that copy's of my  
</span><br>
<span class="quotelev1">&gt; app are
</span><br>
<span class="quotelev1">&gt; &quot;supplied&quot; to the other machines, too - but the jobs hang, nothing
</span><br>
<span class="quotelev1">&gt; happens (user nobody has full access to the folder /usr/local/myapp
</span><br>
<span class="quotelev1">&gt; where my app is run). /usr/local/openmpi/bin and /usr/local/openmpi/ 
</span><br>
<span class="quotelev1">&gt; lib
</span><br>
<span class="quotelev1">&gt; are added to the variables PATH and DYLD_LIBRARY_PATH on every  
</span><br>
<span class="quotelev1">&gt; machine,
</span><br>
<span class="quotelev1">&gt; too. I'm running into this situation no matter from which machine  
</span><br>
<span class="quotelev1">&gt; my app
</span><br>
<span class="quotelev1">&gt; ist started. To the guys with openmpi and xgrid performing correct:
</span><br>
<span class="quotelev1">&gt; which configure options did you use? The firewall is told not block  
</span><br>
<span class="quotelev1">&gt; any
</span><br>
<span class="quotelev1">&gt; internal traffic on the subnet. When not using the xgrid my app  
</span><br>
<span class="quotelev1">&gt; performs
</span><br>
<span class="quotelev1">&gt; correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Has anyone any idea concerning this matter?
</span><br>
<p>My first guess was going to be the firewall issue, but if you can run  
<br>
without XGrid, that probably isn't the case.  Could you try an XGrid  
<br>
run with the -d option to mpirun?  That will enable some debugging  
<br>
output that should help determine what is going wrong.
<br>
<p>Thanks,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0885.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>Previous message:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<li><strong>In reply to:</strong> <a href="0883.php">Frank: "[OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0886.php">Frank: "Re: [OMPI users] Mac OS X 10.4.5 and XGrid, Open-MPI V1.0.1"</a>
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
