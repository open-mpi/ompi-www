<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Sep 26 18:26:37 2007" -->
<!-- isoreceived="20070926222637" -->
<!-- sent="Wed, 26 Sep 2007 18:26:25 -0400" -->
<!-- isosent="20070926222625" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI v1.2.4 released" -->
<!-- id="200709261826.25787.tprins_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="586654.4137.qm_at_web57605.mail.re1.yahoo.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-26 18:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4065.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4065.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Francesco,
<br>
<p>I guess the first step would be to decide whether or not you want to upgrade. 
<br>
All of the changes are listed below, if none of them effect you and your 
<br>
current setup is working fine, I would not bother upgrading.
<br>
<p>Also, assuming you installed from a tarball, there is no way that I know of 
<br>
to 'upgrade' Open MPI in the strict sense of the word. Rather you have to 
<br>
reinstall it.
<br>
<p>That being said, if you do want to use the new version you have to decide 
<br>
whether or not you want to replace your current installation of Open MPI or 
<br>
to install the new version alongside the old version. 
<br>
<p>Replacing the old version with the new one is nice because it is simpler and 
<br>
there is less to keep track of. However, we make no guarantees about binary 
<br>
compatibility between releases (although we try to keep binary compatibility 
<br>
between minor releases). So if you replace your installation of Open MPI, the 
<br>
only completely safe thing to do would be to recompile all your applications 
<br>
with the the new version.
<br>
<p>So, if you have decided to keep your old version and add the new version, just 
<br>
install Open MPI normally, but install it to a different prefix than the 
<br>
other version. See <a href="http://www.open-mpi.org/faq/?category=building">http://www.open-mpi.org/faq/?category=building</a> for 
<br>
building instructions. You would then need to modify your PATH and 
<br>
LD_LIBRARY_PATH to point to the installation you want to use (as shown in 
<br>
<a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>). Alternatively you 
<br>
could use something like Modules (<a href="http://modules.sourceforge.net/">http://modules.sourceforge.net/</a>) or SoftEnv 
<br>
(<a href="http://www-unix.mcs.anl.gov/systems/software/msys/">http://www-unix.mcs.anl.gov/systems/software/msys/</a>) to manage multiple 
<br>
installations.
<br>
<p>If you want to replace your current installation of Open MPI, you have 3 
<br>
options:
<br>
1. Install the new version exactly as you did the old version, overwriting the 
<br>
old version. This should work, but can lead to problems if there are any 
<br>
stale files left over. Thus I would recommend not doing this and doing one of 
<br>
the following.
<br>
<p>2. If you sill have the build tree you used to originally install Open MPI, go 
<br>
into the build tree and type 'make uninstall'. This should remove all the old 
<br>
Open MPI files and allow you to install the new version normally.
<br>
<p>3. If you installed Open MPI into a unique prefix, such as /opt/openmpi, just 
<br>
delete the directory and then install the new version of Open MPI. 
<br>
Personally, I think that one should always install Open MPI into a directory 
<br>
where nothing else is installed, as it makes management and upgrading 
<br>
significantly easier.
<br>
<p>Whatever path you take, remember the new installation must be available on all 
<br>
the nodes in your cluster, and that different versions of Open MPI will 
<br>
probably not work together. That is, you can't use 1.2.4 on the head node and 
<br>
1.2.3 on the compute nodes.
<br>
<p>I hope this helps. Let me know if you have any problems,
<br>
<p>Tim
<br>
<p>On Wednesday 26 September 2007 04:37:16 pm Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; Are any detailed directions for upgrading (for common guys, not experts, I
</span><br>
<span class="quotelev1">&gt; mean)? My 1.2.3 version on Debian Linux amd64 runs perfectly.
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; francesco pietra
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- Tim Mattox &lt;timattox_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; The Open MPI Team, representing a consortium of research, academic,
</span><br>
<span class="quotelev2">&gt; &gt; and industry partners, is pleased to announce the release of Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; version 1.2.4. This release is mainly a bug fix release over the v1.2.3
</span><br>
<span class="quotelev2">&gt; &gt; release, but there are few new features.  We strongly recommend
</span><br>
<span class="quotelev2">&gt; &gt; that all users upgrade to version 1.2.4 if possible.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Version 1.2.4 can be downloaded from the main Open MPI web site or
</span><br>
<span class="quotelev2">&gt; &gt; any of its mirrors (mirrors will be updating shortly).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here are a list of changes in v1.2.4 as compared to v1.2.3:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Really added support for TotalView/DDT parallel debugger message queue
</span><br>
<span class="quotelev2">&gt; &gt;   debugging (it was mistakenly listed as &quot;added&quot; in the 1.2 release).
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a build issue with GNU/kFreeBSD. Thanks to Petr Salinger for
</span><br>
<span class="quotelev2">&gt; &gt;   the patch.
</span><br>
<span class="quotelev2">&gt; &gt; - Added missing MPI_FILE_NULL constant in Fortran.  Thanks to
</span><br>
<span class="quotelev2">&gt; &gt;   Bernd Schubert for bringing this to our attention.
</span><br>
<span class="quotelev2">&gt; &gt; - Change such that the UDAPL BTL is now only built in Linux when
</span><br>
<span class="quotelev2">&gt; &gt;   explicitly specified via the --with-udapl configure command line
</span><br>
<span class="quotelev2">&gt; &gt;   switch.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed an issue with umask not being propagated when using the TM
</span><br>
<span class="quotelev2">&gt; &gt;   launcher.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed behavior if number of slots is not the same on all bproc nodes.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a hang on systems without GPR support (ex. Cray XT3/4).
</span><br>
<span class="quotelev2">&gt; &gt; - Prevent users of 32-bit MPI apps from requesting &gt;= 2GB of shared
</span><br>
<span class="quotelev2">&gt; &gt;   memory.
</span><br>
<span class="quotelev2">&gt; &gt; - Added a Portals MTL.
</span><br>
<span class="quotelev2">&gt; &gt; - Fix 0 sized MPI_ALLOC_MEM requests.  Thanks to Lisandro Dalcin for
</span><br>
<span class="quotelev2">&gt; &gt;   pointing out the problem.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a segfault crash on large SMPs when doing collectives.
</span><br>
<span class="quotelev2">&gt; &gt; - A variety of fixes for Cray XT3/4 class of machines.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed which error handler is used when MPI_COMM_SELF is passed
</span><br>
<span class="quotelev2">&gt; &gt;   to MPI_COMM_FREE.  Thanks to Lisandro Dalcini for the bug report.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed compilation on platforms that don't have hton/ntoh.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a logic problem in the fortran binding for MPI_TYPE_MATCH_SIZE.
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks to Jeff Dusenberry for pointing out the problem and supplying
</span><br>
<span class="quotelev2">&gt; &gt;   the fix.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a problem with MPI_BOTTOM in various places of the f77-interface.
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks to Daniel Spangberg for bringing this up.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed problem where MPI-optional Fortran datatypes were not
</span><br>
<span class="quotelev2">&gt; &gt;   correctly initialized.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed several problems with stdin/stdout forwarding.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed overflow problems with the sm mpool MCA parameters on large SMPs.
</span><br>
<span class="quotelev2">&gt; &gt; - Added support for the DDT parallel debugger via orterun's --debug
</span><br>
<span class="quotelev2">&gt; &gt;   command line option.
</span><br>
<span class="quotelev2">&gt; &gt; - Added some sanity/error checks to the openib MCA parameter parsing
</span><br>
<span class="quotelev2">&gt; &gt;   code.
</span><br>
<span class="quotelev2">&gt; &gt; - Updated the udapl BTL to use RDMA capabilities.
</span><br>
<span class="quotelev2">&gt; &gt; - Allow use of the BProc head node if it was allocated to the user.
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks to Sean Kelly for reporting the problem and helping debug it.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a ROMIO problem where non-blocking I/O errors were not properly
</span><br>
<span class="quotelev2">&gt; &gt;   reported to the user.
</span><br>
<span class="quotelev2">&gt; &gt; - Made remote process launch check the $SHELL environment variable if
</span><br>
<span class="quotelev2">&gt; &gt;   a valid shell was not otherwise found for the user.
</span><br>
<span class="quotelev2">&gt; &gt;   Thanks to Alf Wachsmann for the bugreport and suggested fix.
</span><br>
<span class="quotelev2">&gt; &gt; - Added/updated some vendor IDs for a few openib HCAs.
</span><br>
<span class="quotelev2">&gt; &gt; - Fixed a couple of failures that could occur when specifying devices
</span><br>
<span class="quotelev2">&gt; &gt;   for use by the OOB.
</span><br>
<span class="quotelev2">&gt; &gt; - Removed dependency on sysfsutils from the openib BTL for
</span><br>
<span class="quotelev2">&gt; &gt;   libibverbs &gt;=v1.1 (i.e., OFED 1.2 and beyond).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Tim Mattox
</span><br>
<span class="quotelev2">&gt; &gt; Open Systems Lab
</span><br>
<span class="quotelev2">&gt; &gt; Indiana University
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ___________________________________________________________________________
</span><br>
<span class="quotelev1">&gt;_________ Be a better Globetrotter. Get better travel answers from someone
</span><br>
<span class="quotelev1">&gt; who knows. Yahoo! Answers - Check it out.
</span><br>
<span class="quotelev1">&gt; <a href="http://answers.yahoo.com/dir/?link=list&amp;sid=396545469">http://answers.yahoo.com/dir/?link=list&amp;sid=396545469</a>
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
<li><strong>Next message:</strong> <a href="4067.php">Richard Graham: "Re: [OMPI users] OpenMPI on Cray XT4 CNL"</a>
<li><strong>Previous message:</strong> <a href="4065.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<li><strong>In reply to:</strong> <a href="4065.php">Francesco Pietra: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4087.php">Dirk Eddelbuettel: "Re: [OMPI users] Open MPI v1.2.4 released"</a>
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
