<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Feb 13 13:13:19 2007" -->
<!-- isoreceived="20070213181319" -->
<!-- sent="Tue, 13 Feb 2007 11:13:15 -0700" -->
<!-- isosent="20070213181315" -->
<!-- name="David Gunter" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi with g95 and intel compilers" -->
<!-- id="C4B70318-EE19-49EE-B252-84086EB2B946_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="30507535.1171386192898.JavaMail.root_at_mswamui-thinleaf.atl.sa.earthlink.net" -->
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
<strong>From:</strong> David Gunter (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-13 13:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Previous message:</strong> <a href="2680.php">Brian Barrett: "Re: [OMPI users] configure --with-tm fails"</a>
<li><strong>In reply to:</strong> <a href="2678.php">Steven A. DuChene: "[OMPI users] openmpi with g95 and intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Reply:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We currently build 4 versions of Open-MPI for the various Fortran  
<br>
compilers: gfortran, Intel, Pathscale and PGI.
<br>
<p>We modify the build so that the compiler name is part of the rpm  
<br>
filename.  For the final install of the package we end up with the  
<br>
following:
<br>
<p>/opt/OpenMPI/openmpi-&lt;version&gt;-&lt;compiler&gt;/
<br>
<p>Users software environments are controlled via the Module package,  
<br>
thus a user will load her favorite flavor of compiler and Open-MPI  
<br>
module at login or some other time and LD_LIBRARY_PATH and PATH, etc,  
<br>
are set accordingly.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-4: HPC Environments: Parallel Tools Team
Los Alamos National Laboratory
On Feb 13, 2007, at 10:03 AM, Steven A. DuChene wrote:
&gt; If we need to have a g95 version of openmpi and a second version  
&gt; built with
&gt; intel compilers, how do others usually handle this? We would like  
&gt; to do this
&gt; via rpms so we can easily push any changes out to the compute nodes
&gt; and try to eliminate any versioning problems. I was thinking a  
&gt; different rpm name
&gt; and different locations and then users would have to adjust  
&gt; environment
&gt; variables to use a particular build.
&gt;
&gt; Is this how other sites have handled this?
&gt;
&gt; Any suggestions or hists around this issue would be most appreciated.
&gt; --
&gt; Steve
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Previous message:</strong> <a href="2680.php">Brian Barrett: "Re: [OMPI users] configure --with-tm fails"</a>
<li><strong>In reply to:</strong> <a href="2678.php">Steven A. DuChene: "[OMPI users] openmpi with g95 and intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
<li><strong>Reply:</strong> <a href="2682.php">Brock Palen: "Re: [OMPI users] openmpi with g95 and intel compilers"</a>
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
