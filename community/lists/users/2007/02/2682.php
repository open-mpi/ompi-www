<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 13:28:36 2007" -->
<!-- isoreceived="20070213182836" -->
<!-- sent="Tue, 13 Feb 2007 13:27:23 -0500" -->
<!-- isosent="20070213182723" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi with g95 and intel compilers" -->
<!-- id="E9359825-EAC6-483C-AF14-7788825AE649_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4B70318-EE19-49EE-B252-84086EB2B946_at_lanl.gov" -->
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
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 13:27:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>In reply to:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2007, at 1:13 PM, David Gunter wrote:
<br>
<p><span class="quotelev1">&gt; We currently build 4 versions of Open-MPI for the various Fortran  
</span><br>
<span class="quotelev1">&gt; compilers: gfortran, Intel, Pathscale and PGI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We modify the build so that the compiler name is part of the rpm  
</span><br>
<span class="quotelev1">&gt; filename.  For the final install of the package we end up with the  
</span><br>
<span class="quotelev1">&gt; following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /opt/OpenMPI/openmpi-&lt;version&gt;-&lt;compiler&gt;/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Users software environments are controlled via the Module package,  
</span><br>
<span class="quotelev1">&gt; thus a user will load her favorite flavor of compiler and Open-MPI  
</span><br>
<span class="quotelev1">&gt; module at login or some other time and LD_LIBRARY_PATH and PATH,  
</span><br>
<span class="quotelev1">&gt; etc, are set accordingly.
</span><br>
<p>I second the modules package,  we run 10 versions OMPI via modules.
<br>
<p><a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>
<br>
<p>Brock
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -david
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Gunter
</span><br>
<span class="quotelev1">&gt; HPC-4: HPC Environments: Parallel Tools Team
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 13, 2007, at 10:03 AM, Steven A. DuChene wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If we need to have a g95 version of openmpi and a second version  
</span><br>
<span class="quotelev2">&gt;&gt; built with
</span><br>
<span class="quotelev2">&gt;&gt; intel compilers, how do others usually handle this? We would like  
</span><br>
<span class="quotelev2">&gt;&gt; to do this
</span><br>
<span class="quotelev2">&gt;&gt; via rpms so we can easily push any changes out to the compute nodes
</span><br>
<span class="quotelev2">&gt;&gt; and try to eliminate any versioning problems. I was thinking a  
</span><br>
<span class="quotelev2">&gt;&gt; different rpm name
</span><br>
<span class="quotelev2">&gt;&gt; and different locations and then users would have to adjust  
</span><br>
<span class="quotelev2">&gt;&gt; environment
</span><br>
<span class="quotelev2">&gt;&gt; variables to use a particular build.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this how other sites have handled this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions or hists around this issue would be most appreciated.
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Steve
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2682/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2683.php">Brock Palen: "Re: [OMPI users] Open MPI and PBS Pro 8"</a>
<li><strong>Previous message:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>In reply to:</strong> <a href="2681.php">David Gunter: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
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
