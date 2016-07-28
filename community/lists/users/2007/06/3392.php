<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  7 08:10:58 2007" -->
<!-- isoreceived="20070607121058" -->
<!-- sent="Thu, 7 Jun 2007 08:09:44 -0400" -->
<!-- isosent="20070607120944" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and OFED1.1" -->
<!-- id="CDAFAF69-C5B9-4F45-AF65-D7B4BD3F9438_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8d71b5680706061444i47b97ae6te120d7f3243d8a52_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-07 08:09:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 6, 2007, at 5:44 PM, Michael Edwards wrote:
<br>
<p><span class="quotelev1">&gt; I am runing open-mpi 1.1.1-1 compiled from OFED1.1 which I downloaded
</span><br>
<span class="quotelev1">&gt; from their website.
</span><br>
<p>You might want to upgrade your Open MPI installation; the current  
<br>
stable version is 1.2.2 (1.2.3 is pending shortly, fixing a few minor  
<br>
regressions that creeped into 1.2.2).  You can upgrade OMPI  
<br>
independent of OFED.  Use the &quot;--with-openib=/usr/local/ofed&quot; option  
<br>
to OMPI's configure to pick up the OFED 1.1 installation (or, if you  
<br>
used a different OFED prefix, use that as the value for the --with- 
<br>
openib flag).
<br>
<p><span class="quotelev1">&gt; I am using SGE installed via OSCAR 5.0 and when running under SGE I
</span><br>
<span class="quotelev1">&gt; get the &quot;mca_mpool_openib_register: ibv_reg_mr(0x590000,528384) failed
</span><br>
<span class="quotelev1">&gt; with error: Cannot allocate memory&quot; error discussed at length in your
</span><br>
<span class="quotelev1">&gt; FAQ.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I run from the command line using mpirun, I don't get the errors.
</span><br>
<span class="quotelev1">&gt;  Of course, I don't know how to tell if the code is actually using the
</span><br>
<span class="quotelev1">&gt; IB interface instead of the GigE network...
</span><br>
<p>You can tell in two ways:
<br>
<p>1. You can force the IB network to be used:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl openib,self ...
<br>
<p>Alternatively, you can force the use of the gigE network:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl tcp,self ...
<br>
<p>2. If you look at the bandwidth/latency of running any benchmark  
<br>
papplication, they should be obviously far better than the gigE  
<br>
network.  Here's running NetPIPE (<a href="http://www.scl.ameslab.gov/netpipe/">http://www.scl.ameslab.gov/netpipe/</a>):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 2 NPmpi
<br>
<p><span class="quotelev1">&gt; I tried the suggestions in the FAQ regarding setting the memlock
</span><br>
<span class="quotelev1">&gt; parameter in /etc/security/limits.conf: and all the nodes return
</span><br>
<span class="quotelev1">&gt; &quot;unlimited&quot; in response to &quot;ulimit -l&quot; after rebooting the nodes.  The
</span><br>
<span class="quotelev1">&gt; problem persists under SGE and still does not appear when simply using
</span><br>
<span class="quotelev1">&gt; mpirun.
</span><br>
<p>The problem is that the SGE daemons are not starting with these  
<br>
memory limits.  Therefore, processes that start under SGE inherit the  
<br>
low memory limits, and things go badly from there.
<br>
<p>I'm afraid I'm not familiar enough with SGE to know how to fix this.   
<br>
One Big Thing to check is that when the SGE daemons are started at  
<br>
init.d/boot time, they have the proper &quot;unlimited&quot; memory locked  
<br>
limits.  Then processes that start under SGE should inherit the  
<br>
&quot;unlimited&quot; value and be ok.  That being said, SGE may also  
<br>
specifically override the memory locked limits (some resource  
<br>
managers can do this based on site-wide policies).  Check to see if  
<br>
SGE is doing this.
<br>
<p><span class="quotelev1">&gt; I assumed it would work since openmpi 1.1.1 was included as working
</span><br>
<span class="quotelev1">&gt; with SGE in OSCAR 5.0, but I don't know how different that version and
</span><br>
<span class="quotelev1">&gt; the one included with OFED is.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any suggestions would be appreciated.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3393.php">Jeff Squyres: "Re: [OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>Previous message:</strong> <a href="3391.php">Code Master: "[OMPI users] making all library components static (questions about --enable-mcs-static)"</a>
<li><strong>In reply to:</strong> <a href="3390.php">Michael Edwards: "[OMPI users] SGE and OFED1.1"</a>
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
