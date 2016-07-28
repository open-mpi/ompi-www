<?
$subject_val = "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  3 11:39:03 2008" -->
<!-- isoreceived="20080103163903" -->
<!-- sent="Thu, 3 Jan 2008 08:38:54 -0800" -->
<!-- isosent="20080103163854" -->
<!-- name="Jim Kusznir" -->
<!-- email="jkusznir_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)" -->
<!-- id="df8c8a6d0801030838q349f7e63n5eab13a474ad4ad6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="575EFC94-AE16-4DC5-96B5-2FA1B15D5783_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)<br>
<strong>From:</strong> Jim Kusznir (<em>jkusznir_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-03 11:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the detailed responces!  I've included some stuff inline below:
<br>
<p>On Jan 2, 2008 1:56 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Dec 31, 2007, at 12:50 AM, Jim Kusznir wrote:
</span><br>
<p><span class="quotelev2">&gt; &gt; The rpm build errored out near the end with a missing file.  It was
</span><br>
<span class="quotelev2">&gt; &gt; trying to find /opt/openmpi-gcc/1.2.4/opt/share/openmpi-gcc (IIRC),
</span><br>
<span class="quotelev2">&gt; &gt; but the last part was actually openmpi on disk.  I ended up
</span><br>
<span class="quotelev2">&gt; &gt; correcting it by changing line 182 (configuration logic) to:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; %define _datadir /opt/%{name}/%{version}/share/%{name}
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; (I changed _pkgdatadir to _datadir).  Your later directive if
</span><br>
<span class="quotelev2">&gt; &gt; _pkgdatadir is undefined took care of _pkgdatadir.  I must admit, I
</span><br>
<span class="quotelev2">&gt; &gt; still don't fully understand where rpm was getting the idea to look
</span><br>
<span class="quotelev2">&gt; &gt; for that file...I tried manually configuring _pkgdatadir to the path
</span><br>
<span class="quotelev2">&gt; &gt; that existed, but that changed nothing.  If I didn't rename the
</span><br>
<span class="quotelev2">&gt; &gt; package, it all worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hmm.  This is actually symptomatic of a larger problem -- Open MPI's
</span><br>
<span class="quotelev1">&gt; configure/build process is apparently not getting the _pkgdatadir
</span><br>
<span class="quotelev1">&gt; value, probably because there's no way to pass it on the configure
</span><br>
<span class="quotelev1">&gt; command line (i.e., there's no standard AC --pkgdatadir option).
</span><br>
<span class="quotelev1">&gt; Instead, the &quot;$datadir/openmpi&quot; location is hard-coded in the Open MPI
</span><br>
<span class="quotelev1">&gt; code base (in opal/mca/installdirs/config, if you care).  As such,
</span><br>
<span class="quotelev1">&gt; when you re-defined %{_name}, the specfile didn't agree with where
</span><br>
<span class="quotelev1">&gt; OMPI actually installed the files, resulting in the error you saw.
</span><br>
<p><span class="quotelev1">&gt; Yuck.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, there are other reasons you can't have multiple OMPI
</span><br>
<span class="quotelev1">&gt; installations share a single installation tree (e.g., they'll all try
</span><br>
<span class="quotelev1">&gt; to install their own &quot;mpirun&quot; executable -- per a prior thread, the --
</span><br>
<span class="quotelev1">&gt; program-prefix/suffix stuff also doesn't work; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1168">https://svn.open-mpi.org/trac/ompi/ticket/1168</a>
</span><br>
<span class="quotelev1">&gt;   for details).  So this isn't making OMPI any worse than it already
</span><br>
<span class="quotelev1">&gt; is.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think the best solution for the moment is to just fix the
</span><br>
<span class="quotelev1">&gt; specfile's %_pkgdatadir to use the hard-coded name &quot;openmpi&quot; instead
</span><br>
<span class="quotelev1">&gt; of %{name}.
</span><br>
<p>I actually tried this first, but it failed to accomplish anything (got
<br>
the same error).  However, now with defining %_datadir, it works with
<br>
the name directive just fine.
<br>
<p><span class="quotelev1">&gt; I committed these changes (and some other small fixes for things I
</span><br>
<span class="quotelev1">&gt; found while testing the _name and multi-package stuff) to the OMPI SVN
</span><br>
<span class="quotelev1">&gt; trunk in r17036 (see <a href="https://svn.open-mpi.org/trac/ompi/changeset/">https://svn.open-mpi.org/trac/ompi/changeset/</a>
</span><br>
<span class="quotelev1">&gt; 17036) -- could you give it a whirl and see if it works for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And another from an off-list mail:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the preamble for the separate rpm files, the -devel and -docs
</span><br>
<span class="quotelev2">&gt; &gt; reference openmpi-runtime statically rather than using %{name}-
</span><br>
<span class="quotelev2">&gt; &gt; runtime, which breaks dependencies if you build under a different
</span><br>
<span class="quotelev2">&gt; &gt; name as I am.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doh.  I tried replacing the Requires: with %{_name}-runtime, but then
</span><br>
<span class="quotelev1">&gt; rpmbuild complained:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; error: line 300: Dependency tokens must begin with alpha-numeric, '_'
</span><br>
<span class="quotelev1">&gt; or '/': Requires: %{_name}-runtime
</span><br>
<p>Huh..this is strange.  Here's the chunk from my spec file and rpm
<br>
version.  I've now built 3 sets of multi-rpm openmpi, each with a
<br>
different name, and its worked flawlessly:
<br>
<p>[root_at_aeolus ~]# rpmbuild --version
<br>
RPM version 4.3.3
<br>
[root_at_aeolus ~]# grep Requires /usr/src/redhat/SPECS/openmpi.spec
<br>
Requires: %{modules_rpm_name}
<br>
Requires: %{mpi_selector_rpm_name}
<br>
Requires: %{modules_rpm_name}
<br>
Requires: %{name}-runtime
<br>
Requires: %{name}-runtime
<br>
<p>Perhaps its the difference between _name and name.
<br>
<p><span class="quotelev1">&gt; So it looks like Requires: will only take a hard-coded name, not a
</span><br>
<span class="quotelev1">&gt; variable (I have no comments in the specfile about this issue, but
</span><br>
<span class="quotelev1">&gt; perhaps that's why Greg/I hard-coded it in the first place...?).
</span><br>
<span class="quotelev1">&gt; Yuck.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This error occurred with rpmbuild v4.3.3 (the default on RHEL4U4), so
</span><br>
<span class="quotelev1">&gt; I tried manually upgrading to v4.4.2.2 from rpm.org to see if this
</span><br>
<span class="quotelev1">&gt; constraint had been relaxed, but I couldn't [easily] get it to build.
</span><br>
<span class="quotelev1">&gt; I guess it wouldn't be attractive to use something that would only
</span><br>
<span class="quotelev1">&gt; work with the newest version RPM, anyway.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll unfortunately have to do something different, then.  :-
</span><br>
<span class="quotelev1">&gt; (  Obvious but icky solutions include:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - remove the Requires statements
</span><br>
<span class="quotelev1">&gt; - protect the Requires statements to only be used when %{_name} is
</span><br>
<span class="quotelev1">&gt; &quot;openmpi&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Got any better ideas?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 3) Will the resulting -runtime .rpms (for the different compiler
</span><br>
<span class="quotelev2">&gt; &gt; versions) coexist peacefully without any special environment munging
</span><br>
<span class="quotelev2">&gt; &gt; on the compute nodes, or do I need modules, etc. on all the compute
</span><br>
<span class="quotelev2">&gt; &gt; nodes as well?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; They can co-exist peacefully out on the nodes because you should
</span><br>
<span class="quotelev1">&gt; choose different --prefix values for each installation (e.g., /opt/
</span><br>
<span class="quotelev1">&gt; openmpi_gcc3.4.0/ or whatever naming convention you choose to use).
</span><br>
<span class="quotelev1">&gt; That being said, you should ensure that whatever version of OMPI you
</span><br>
<span class="quotelev1">&gt; use is consistent across an entire job.  E.g., if job X was compiled
</span><br>
<span class="quotelev1">&gt; with the openmpi-gcc installation, then it should use the openmpi-gcc
</span><br>
<span class="quotelev1">&gt; installation on all the nodes on which it runs.
</span><br>
<p>I currently have them all installed accross the cluster in the same
<br>
place, and had planned on requiring users to sumbit jobs with the
<br>
option to include their current enviornment, thus ensuring the PATHs
<br>
have only the path to the correct version of OpenMPI.  This would
<br>
simplify things; I'll include this in my next build.
<br>
<p><span class="quotelev1">&gt; The easiest way to do that might be to use the --enable-mpirun-prefix-
</span><br>
<span class="quotelev1">&gt; by-default option to configure.  This will cause OMPI to use mpirun's
</span><br>
<span class="quotelev1">&gt; --prefix option by default (even if you don't specify it on the mpirun
</span><br>
<span class="quotelev1">&gt; command line), which will effectively tell the remote node where OMPI
</span><br>
<span class="quotelev1">&gt; lives on the remote nodes (assuming your installation paths are the
</span><br>
<span class="quotelev1">&gt; same on all nodes -- e.g., /opt/openmpi-gcc).  Then you can use
</span><br>
<span class="quotelev1">&gt; environment modules (or whatever) on your head node / the job's first
</span><br>
<span class="quotelev1">&gt; node to select which OMPI installation you want, use mpicc/mpiCC/
</span><br>
<span class="quotelev1">&gt; mpif77/mpif90 to compile your job, and then mpirun will do the Right
</span><br>
<span class="quotelev1">&gt; thing to select the appropriate OMPI installation on remote nodes,
</span><br>
<span class="quotelev1">&gt; meaning that it will set the PATH and LD_LIBRARY_PATH on the remote
</span><br>
<span class="quotelev1">&gt; node for you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for a little more detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 4) I've never really used pgi or intel's compiler.  I saw notes in the
</span><br>
<span class="quotelev2">&gt; &gt; rpm about build flag problems and &quot;use your normal optimizations and
</span><br>
<span class="quotelev2">&gt; &gt; flags&quot;, etc.  As I have no concept of &quot;normal&quot; for these compilers,
</span><br>
<span class="quotelev2">&gt; &gt; are there any guides or examples I should/could use for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You'll probably want to check the docs for those compilers.
</span><br>
<span class="quotelev1">&gt; Generally, GCC-like -O options have similar definitions in these
</span><br>
<span class="quotelev1">&gt; compilers (they try to be similar to GCC).  YMMV.
</span><br>
<p>For the time being, I just ran with defaults.  for Intel, I was able
<br>
to use the post-munge defaults; with PGI, I had to disable the
<br>
optimization flags all together (the --define disable_rpm_opts_flags
<br>
or something like that).  I'll talk with the principal users in the
<br>
next day or two and get more details from them on how their apps
<br>
recommend compiling.
<br>
<p>Thanks for all the help and hard work on a .spec file!
<br>
<p>--Jim
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4781.php">Doug Reeder: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4779.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="4775.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
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
