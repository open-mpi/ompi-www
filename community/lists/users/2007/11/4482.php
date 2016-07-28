<?
$subject_val = "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 15 13:10:38 2007" -->
<!-- isoreceived="20071115181038" -->
<!-- sent="Thu, 15 Nov 2007 10:09:25 -0800" -->
<!-- isosent="20071115180925" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="2DBEBE18-71A9-4CCA-87B6-45D2E4B78C8A_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0711150854o2e2d4249q304e328a406ed2cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-15 13:09:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4524.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4524.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Really modules is the only way to go, we use it to maintain no less  
<br>
than 12 versions of openmpi compiled with pgi, gcc, nag, and intel.
<br>
<p>Yes as the other reply said just set LD_LIBRARY_PATH  you can use
<br>
<p>ldd executable
<br>
<p>to see which libraries the executable is going to use under the  
<br>
current environment.  We also have uses submit to torque with
<br>
#PBS -V
<br>
<p>which copies the current environment with the job, this allows users  
<br>
to submit and have multiple jobs running each with their own  
<br>
environment.  If your using PBS or torque look at the qsub man page.
<br>
<p>Another addition we came up with was after we load a default set a  
<br>
modules (pbs, a compiler , mpi library)  we look for a file in
<br>
<p>$HOME/privatemodules/default
<br>
<p>which just has a list of module commands.  This allows users to  
<br>
change their default modules for every login.
<br>
For example i have in my default file
<br>
<p>module load git
<br>
<p>Because i use git for managing files.
<br>
<p>We have done other hacks, our webpage of software is built out of  
<br>
cron from the module files:
<br>
<a href="http://cac.engin.umich.edu/resources/systems/nyxV2/software.html">http://cac.engin.umich.edu/resources/systems/nyxV2/software.html</a>
<br>
<p>So we dont maintain software lists online, we just generate it  
<br>
dynamically.
<br>
Modules is the admins best friend.
<br>
<p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>On Nov 15, 2007, at 8:54 AM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; Hi all:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to set up a cluster for a group of users with very
</span><br>
<span class="quotelev1">&gt; different needs.  So far, it looks like I need gcc, pgi, and intel to
</span><br>
<span class="quotelev1">&gt; work with openmpi and mpich, with each user able to control what
</span><br>
<span class="quotelev1">&gt; combination they get.  This is turning out to be much more difficult
</span><br>
<span class="quotelev1">&gt; than I expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Someone has pointed me to enviornment-modules (&quot;Modules&quot;), which looks
</span><br>
<span class="quotelev1">&gt; like it will be a critical part of the solution.  I even noticed that
</span><br>
<span class="quotelev1">&gt; the provided openmpi.spec file has some direct support for modules,
</span><br>
<span class="quotelev1">&gt; which makes me quite happy!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, I still have many questions about how to set things up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, I get the impression that openmpi will need to be compiled with
</span><br>
<span class="quotelev1">&gt; each compiler that will use it.  If this is true, I'm not quite sure
</span><br>
<span class="quotelev1">&gt; how to go about it.  I could install in different directories for the
</span><br>
<span class="quotelev1">&gt; user commands, but what about the libraries?  I don't think I have a
</span><br>
<span class="quotelev1">&gt; feesable way of selecting which library to use on the fly on the
</span><br>
<span class="quotelev1">&gt; entire cluster for each user, so it seems like it would be better to
</span><br>
<span class="quotelev1">&gt; have all the libraries available.  In addition, I will need RPMs to
</span><br>
<span class="quotelev1">&gt; deploy efficiently on the cluster.  I suspect I can change the
</span><br>
<span class="quotelev1">&gt; versioning info and build with each compiler, but at this point, I
</span><br>
<span class="quotelev1">&gt; don't even know how to reliably select what compiler rpmbuild will use
</span><br>
<span class="quotelev1">&gt; (I've only succeeded in using gcc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Finally, using modules, how do I set it up so that if a user changes
</span><br>
<span class="quotelev1">&gt; compilers, but stays with openmpi, it will load the correct openmpi
</span><br>
<span class="quotelev1">&gt; paths?  I know I can set up the openmpi module file to load after the
</span><br>
<span class="quotelev1">&gt; compiler module and based on that select different paths based on the
</span><br>
<span class="quotelev1">&gt; currently-loaded compiler module.  If the user changes the compiler
</span><br>
<span class="quotelev1">&gt; module, will that cause the mpi module to also be reloaded so the new
</span><br>
<span class="quotelev1">&gt; settings will be loaded?  Or do I need this at all?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for all your help!
</span><br>
<span class="quotelev1">&gt; --Jim
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4483.php">Pak Lui: "Re: [OMPI users] Error on running large number of processes"</a>
<li><strong>Previous message:</strong> <a href="4481.php">Katherine Holcomb: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>In reply to:</strong> <a href="4480.php">Jim Kusznir: "[OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4524.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<li><strong>Reply:</strong> <a href="4524.php">Jim Kusznir: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
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
