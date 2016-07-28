<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 09:49:35 2007" -->
<!-- isoreceived="20070213144935" -->
<!-- sent="Tue, 13 Feb 2007 09:49:26 -0500" -->
<!-- isosent="20070213144926" -->
<!-- name="Nader Ahmadi" -->
<!-- email="a_nader_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Does Open MPI  &amp;quot;Really&amp;quot; support AIX?" -->
<!-- id="BAY102-DAV6D452F2E68EB9BE3B93488D900_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] Does Open MPI  &amp;quot;Really&amp;quot; support AIX?" -->
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
<strong>From:</strong> Nader Ahmadi (<em>a_nader_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 09:49:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2674.php">Simeon Walker: "[OMPI users] configure --with-tm fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>Thanks for clarifying that Open MPI at this point does not support  AIX. 
<br>
I think Open MPI has become the best implementation of MPI available in the market.
<br>
This achievement is due to hard work and dedication of all members of 
<br>
OMPI development groups.
<br>
As a user I wanted to say thank you for making this technology available for everyone.  
<br>
<p>As you know three major UNIX out in the market are IBM AIX, HPUX, 
<br>
and HP's Tru64( from Compaq/Digital). I was hoping that Open MPI could be
<br>
used as a common MPI across multiple UNIX, Linux  and RTOS such as VxWorks plat forms.
<br>
<p>A commitment (announced plan) from Open MPI group to make OMPI support available for major UNIX and RTOS,
<br>
will make the Open MPI the leader in the market, and could open new doors for R&amp;D grants.
<br>
<p>Ali,
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ralph H Castain &lt;rhc_at_[hidden]&gt; 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sent by: users-bounces_at_[hidden] 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;02/08/2007 08:40 AM Please respond to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;To &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot;  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cc  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subject Re: [OMPI users] Does Open MPI  &quot;Realy&quot; support AIX? 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<p><p><p><p>Hi Ali
<br>
<p>After conferring with my colleagues, it appears we don't have the cycles
<br>
right now to really support AIX. As you have noted, the problem is with the
<br>
io forwarding subsystem - a considerable issue.
<br>
<p>We will revise the web site to indicate this situation. We will provide an
<br>
announcement of any change in that status.
<br>
<p>Thanks
<br>
Ralph
<br>
<p><p><p>On 2/7/07 1:18 PM, &quot;Nader Ahmadi&quot; &lt;a_nader_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are in the process to decide, if we should use Open MPI in an AIX
</span><br>
<span class="quotelev1">&gt; environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our in-house testing indicates that OMPI (V 1.1.x and V 1.2.x) stdio is broken
</span><br>
<span class="quotelev1">&gt; under AIX. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At this point, I am trying to find out if there is a fix or work-around for
</span><br>
<span class="quotelev1">&gt; this problem. I have put another
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; posting (see attached). One recommendation was try pre-release of V 1.2, which
</span><br>
<span class="quotelev1">&gt; didn't make any difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am hoping that an OMPI developer or someone from IBM come up with a
</span><br>
<span class="quotelev1">&gt; solution.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Open MPI documentation, indicates that AIX is being supported, with limited
</span><br>
<span class="quotelev1">&gt; testing before each release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is limited testing? Does it mean, Configure, Install and running &quot;Hello
</span><br>
<span class="quotelev1">&gt; World&quot; on one node?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In short, we did configure and installed  V 1.1.x as well as V1.2.x, but
</span><br>
<span class="quotelev1">&gt; attempt to running
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a simple test such as &quot;mpirun -np 1 hostname&quot;, fails, see attached for more
</span><br>
<span class="quotelev1">&gt; details.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have eight  nodes IBM systems, I could run any test, to solve this problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your comments
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ali,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ---------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From Previous Posting on OMPI user's group
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ----------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed Open MPI 1.1.2  on IBM AIX 5.3 cluster. It looks like
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; terminal output is broken. There are a few entry in the OpenMPI archive for
</span><br>
<span class="quotelev1">&gt; this problem, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with no suggested solution or real work around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am putting this posting with hope to get some advise for a work around or
</span><br>
<span class="quotelev1">&gt; solution. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No out put, piping the command to &quot;cat&quot; or &quot;more&quot; generate no out put as well.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only way to get an output from this command is to add --debug-daemons
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #mpirun -np 1 --debug-daemons hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even this debug option is not working for a real application which generate
</span><br>
<span class="quotelev1">&gt; several output. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking forward for any comments.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
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
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
<li><strong>Previous message:</strong> <a href="2674.php">Simeon Walker: "[OMPI users] configure --with-tm fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
<li><strong>Reply:</strong> <a href="2676.php">Ralph H Castain: "Re: [OMPI users] Does Open MPI  &quot;Really&quot; support AIX?"</a>
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
