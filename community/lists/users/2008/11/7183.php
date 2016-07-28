<?
$subject_val = "Re: [OMPI users] problem running Open MPI on Cells";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  1 12:50:23 2008" -->
<!-- isoreceived="20081101165023" -->
<!-- sent="Sat, 1 Nov 2008 12:49:04 -0400" -->
<!-- isosent="20081101164904" -->
<!-- name="Hahn Kim" -->
<!-- email="hgk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem running Open MPI on Cells" -->
<!-- id="00703098-DB0E-4693-B56D-2DE18C377D13_at_ll.mit.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED488E92-D834-405D-917A-BF2019A5293E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem running Open MPI on Cells<br>
<strong>From:</strong> Hahn Kim (<em>hgk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-01 12:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7184.php">Mi Yan: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7182.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 1, 2008, at 7:39 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Oct 31, 2008, at 4:52 PM, Gilbert Grosdidier wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To monitor the environment from inside the application, it could be
</span><br>
<span class="quotelev2">&gt;&gt; useful to
</span><br>
<span class="quotelev2">&gt;&gt; issue a 'system(&quot;printenv&quot;)' call at the very beginning of the main
</span><br>
<span class="quotelev2">&gt;&gt; program,
</span><br>
<span class="quotelev2">&gt;&gt; even before (and after, btw) the MPI_Init call, when running in
</span><br>
<span class="quotelev2">&gt;&gt; serial job mode
</span><br>
<span class="quotelev2">&gt;&gt; with a single CAB, using mpirun.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that it may not be safe to call system(), depending on your
</span><br>
<span class="quotelev1">&gt; environment.  It might be better to getenv() to look for the specific
</span><br>
<span class="quotelev1">&gt; environment variable that you're looking for, or loop over environ to
</span><br>
<span class="quotelev1">&gt; show the entire environment.
</span><br>
<p>Thanks for the heads up about system().  It seems to be working for  
<br>
me, but I'll be sure to remember that tidbit for the future.
<br>
<p>I've tried printing out the environment variables from within the  
<br>
program and it appears to set the MCS_LICENSE_PATH environment  
<br>
variable correctly.
<br>
<p>One thing to note is that I once accidently set the variable to the  
<br>
wrong path.  When I tried running my program, it printed an error  
<br>
stating that the license file could not be found.  When I fixed the  
<br>
path to the correct location, it printed the error I described in my  
<br>
original post, i.e. invalid license.  This indicates to me that it is  
<br>
able to find and access the license file, but for some reason is  
<br>
interpreting the licenses contained in the file as invalid.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can also use the -x option to mpirun to export a specific
</span><br>
<span class="quotelev1">&gt; environment variable to all the MPI processes.  If you're using the
</span><br>
<span class="quotelev1">&gt; rsh/ssh launcher, OMPI won't automatically export mpirun's entire
</span><br>
<span class="quotelev1">&gt; environment to the MPI processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This is exactly what I'm doing, I'm using the -x option to set  
<br>
MCS_LICENSE_PATH on all the CABs.  In fact, I was the one who posted a  
<br>
few weeks about having a problem setting environment variables when  
<br>
launching onto a node that is running /bin/sh.  I saw that the fix for  
<br>
this is included in 1.2.8, but at this point, we're so close to our  
<br>
deadline I'm wary of spending the time to recompile OpenMPI for the  
<br>
CABs, which is, unfortunately, not a straightforward process.
<br>
<p>A quick update: I've fixed the whole problem by linking our  
<br>
application to the previous version of MCF, i.e. 1.0, which didn't use  
<br>
a runtime license.  We did most of our development on 1.0 and we're  
<br>
not using any new features in the current version, i.e. 2.0, so  
<br>
downgrading back to 1.0 doesn't really impact us.
<br>
<p>Thanks to everyone who responded.  At some point, I would like to  
<br>
figure out what's causing this problem.  To be honest, it may not even  
<br>
be a problem with OpenMPI.  It's possible that we have something  
<br>
misconfigured on our system that causing this problem.  When I get  
<br>
some free time (ha!), I may try to see if I can replicate this problem  
<br>
using MPICH2, if I can get MPICH2 to compile for the CABs.
<br>
<p>Hahn
<br>
<p><span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
Hahn Kim, hgk_at_[hidden]
MIT Lincoln Laboratory
244 Wood St., Lexington, MA 02420
Tel: 781-981-0940, Fax: 781-981-5255
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7184.php">Mi Yan: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>Previous message:</strong> <a href="7182.php">Jeff Squyres: "Re: [OMPI users] MPI + Mixed language coding(Fortran90 + C++)"</a>
<li><strong>In reply to:</strong> <a href="7181.php">Jeff Squyres: "Re: [OMPI users] problem running Open MPI on Cells"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/10/7178.php">Mi Yan: "Re: [OMPI users] problem running Open MPI on Cells"</a>
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
