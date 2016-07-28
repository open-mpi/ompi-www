<?
$subject_val = "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 27 11:46:16 2007" -->
<!-- isoreceived="20071127164616" -->
<!-- sent="Tue, 27 Nov 2007 08:46:10 -0800" -->
<!-- isosent="20071127164610" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?" -->
<!-- id="df8c8a6d0711270846m3460468fg43c6e703530ed52d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2DBEBE18-71A9-4CCA-87B6-45D2E4B78C8A_at_umich.edu" -->
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
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-27 11:46:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4523.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So another question on this topic:
<br>
<p>I'm running on a 64-bit cluster.  Is it important/needed/useful to
<br>
maintain 32-bit and 64-bit versions of openmpi and such?  At the
<br>
moment, I'm using Rocks' default openmpi, which includes both 32 and
<br>
64-bit versions of the libraries.  Yet, so far, my attempt to build a
<br>
32-bit on the 64-bit system has proven very difficult, and I finally
<br>
resolved to just install a 32-bit build host to build the 32-bit
<br>
versions if required.
<br>
<p>Thanks!
<br>
<p>Oh, and I'd be very grateful for any samples and automation scripts to
<br>
help with the whole setup.  I'm pretty new to &quot;real cluster
<br>
management&quot; :)
<br>
<p>Thanks again!
<br>
<p>--Jim
<br>
<p>On 11/15/07, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Really modules is the only way to go, we use it to maintain no less
</span><br>
<span class="quotelev1">&gt; than 12 versions of openmpi compiled with pgi, gcc, nag, and intel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes as the other reply said just set LD_LIBRARY_PATH  you can use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd executable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to see which libraries the executable is going to use under the
</span><br>
<span class="quotelev1">&gt; current environment.  We also have uses submit to torque with
</span><br>
<span class="quotelev1">&gt; #PBS -V
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which copies the current environment with the job, this allows users
</span><br>
<span class="quotelev1">&gt; to submit and have multiple jobs running each with their own
</span><br>
<span class="quotelev1">&gt; environment.  If your using PBS or torque look at the qsub man page.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another addition we came up with was after we load a default set a
</span><br>
<span class="quotelev1">&gt; modules (pbs, a compiler , mpi library)  we look for a file in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $HOME/privatemodules/default
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which just has a list of module commands.  This allows users to
</span><br>
<span class="quotelev1">&gt; change their default modules for every login.
</span><br>
<span class="quotelev1">&gt; For example i have in my default file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; module load git
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Because i use git for managing files.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have done other hacks, our webpage of software is built out of
</span><br>
<span class="quotelev1">&gt; cron from the module files:
</span><br>
<span class="quotelev1">&gt; <a href="http://cac.engin.umich.edu/resources/systems/nyxV2/software.html">http://cac.engin.umich.edu/resources/systems/nyxV2/software.html</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So we dont maintain software lists online, we just generate it
</span><br>
<span class="quotelev1">&gt; dynamically.
</span><br>
<span class="quotelev1">&gt; Modules is the admins best friend.
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
<span class="quotelev1">&gt; On Nov 15, 2007, at 8:54 AM, Jim Kusznir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi all:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm trying to set up a cluster for a group of users with very
</span><br>
<span class="quotelev2">&gt; &gt; different needs.  So far, it looks like I need gcc, pgi, and intel to
</span><br>
<span class="quotelev2">&gt; &gt; work with openmpi and mpich, with each user able to control what
</span><br>
<span class="quotelev2">&gt; &gt; combination they get.  This is turning out to be much more difficult
</span><br>
<span class="quotelev2">&gt; &gt; than I expected.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Someone has pointed me to enviornment-modules (&quot;Modules&quot;), which looks
</span><br>
<span class="quotelev2">&gt; &gt; like it will be a critical part of the solution.  I even noticed that
</span><br>
<span class="quotelev2">&gt; &gt; the provided openmpi.spec file has some direct support for modules,
</span><br>
<span class="quotelev2">&gt; &gt; which makes me quite happy!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; However, I still have many questions about how to set things up.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; First, I get the impression that openmpi will need to be compiled with
</span><br>
<span class="quotelev2">&gt; &gt; each compiler that will use it.  If this is true, I'm not quite sure
</span><br>
<span class="quotelev2">&gt; &gt; how to go about it.  I could install in different directories for the
</span><br>
<span class="quotelev2">&gt; &gt; user commands, but what about the libraries?  I don't think I have a
</span><br>
<span class="quotelev2">&gt; &gt; feesable way of selecting which library to use on the fly on the
</span><br>
<span class="quotelev2">&gt; &gt; entire cluster for each user, so it seems like it would be better to
</span><br>
<span class="quotelev2">&gt; &gt; have all the libraries available.  In addition, I will need RPMs to
</span><br>
<span class="quotelev2">&gt; &gt; deploy efficiently on the cluster.  I suspect I can change the
</span><br>
<span class="quotelev2">&gt; &gt; versioning info and build with each compiler, but at this point, I
</span><br>
<span class="quotelev2">&gt; &gt; don't even know how to reliably select what compiler rpmbuild will use
</span><br>
<span class="quotelev2">&gt; &gt; (I've only succeeded in using gcc).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Finally, using modules, how do I set it up so that if a user changes
</span><br>
<span class="quotelev2">&gt; &gt; compilers, but stays with openmpi, it will load the correct openmpi
</span><br>
<span class="quotelev2">&gt; &gt; paths?  I know I can set up the openmpi module file to load after the
</span><br>
<span class="quotelev2">&gt; &gt; compiler module and based on that select different paths based on the
</span><br>
<span class="quotelev2">&gt; &gt; currently-loaded compiler module.  If the user changes the compiler
</span><br>
<span class="quotelev2">&gt; &gt; module, will that cause the mpi module to also be reloaded so the new
</span><br>
<span class="quotelev2">&gt; &gt; settings will be loaded?  Or do I need this at all?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for all your help!
</span><br>
<span class="quotelev2">&gt; &gt; --Jim
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<li><strong>Next message:</strong> <a href="4525.php">Brock Palen: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>Previous message:</strong> <a href="4523.php">Andrew Friedley: "Re: [OMPI users] OpenIB problems"</a>
<li><strong>In reply to:</strong> <a href="4482.php">Brock Palen: "Re: [OMPI users] Suggestions on multi-compiler/multi-mpi build?"</a>
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
