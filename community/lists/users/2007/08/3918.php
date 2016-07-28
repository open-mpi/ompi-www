<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 23 23:33:31 2007" -->
<!-- isoreceived="20070824033331" -->
<!-- sent="Thu, 23 Aug 2007 22:27:43 -0500" -->
<!-- isosent="20070824032743" -->
<!-- name="Jeff Pummill" -->
<!-- email="jpummil_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MVAPI Options on Job Submission" -->
<!-- id="46CE502F.2080407_at_uark.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1D680866-D489-410E-8E7B-ADCBF4BDAAE1_at_umich.edu" -->
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
<strong>From:</strong> Jeff Pummill (<em>jpummil_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-23 23:27:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>In reply to:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Brock,
<br>
<p>Nope, no error messages during the execution. Plus, there were no errors 
<br>
when I built Open MPI, so I guess I am good.
<br>
<p>Thanks for the info. I appreciate it.
<br>
<p><p><p>Jeff F. Pummill
<br>
University of Arkansas
<br>
Fayetteville, Arkansas 72701
<br>
(479) 575 - 4590
<br>
<a href="http://hpc.uark.edu">http://hpc.uark.edu</a>
<br>
<p><p><p><p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; You will know if it doesn't,  You will have a bunch of messages about  
</span><br>
<span class="quotelev1">&gt; not finding a ib card and that openMPI is falling back to another  
</span><br>
<span class="quotelev1">&gt; transport.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do all your nodes have infiniband?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 23, 2007, at 9:27 PM, Jeff Pummill wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully compiled Open MPI 1.2.3 against Intel 8.1 compiler
</span><br>
<span class="quotelev2">&gt;&gt; suite and old (3 years) mvapi stack using the following configure:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure --prefix=/nfsutil/openmpi-1.2.3
</span><br>
<span class="quotelev2">&gt;&gt; --with-mvapi=/usr/local/topspin/ CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I need to assign any particular flags to the command line  
</span><br>
<span class="quotelev2">&gt;&gt; submission
</span><br>
<span class="quotelev2">&gt;&gt; to ensure that it is using the IB network instead of the TCP? Or
</span><br>
<span class="quotelev2">&gt;&gt; possibly disable the Gig-E with ^tcp to see if it still runs  
</span><br>
<span class="quotelev2">&gt;&gt; successfully?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I just want to be sure that Open MPI is actually USING the IB network
</span><br>
<span class="quotelev2">&gt;&gt; and mvapi.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Pummill
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Previous message:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>In reply to:</strong> <a href="3917.php">Brock Palen: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
<li><strong>Reply:</strong> <a href="3919.php">Jeff Squyres: "Re: [OMPI users] MVAPI Options on Job Submission"</a>
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
