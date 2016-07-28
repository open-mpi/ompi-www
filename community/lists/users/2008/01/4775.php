<?
$subject_val = "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  2 16:57:22 2008" -->
<!-- isoreceived="20080102215722" -->
<!-- sent="Wed, 2 Jan 2008 16:56:59 -0500" -->
<!-- isosent="20080102215659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)" -->
<!-- id="575EFC94-AE16-4DC5-96B5-2FA1B15D5783_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0712302150k763389f6ue102a0ec7383d0a2_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-02 16:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 31, 2007, at 12:50 AM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; I have some questions, though.
</span><br>
<p>As you can probably tell, the multi-package stuff hasn't been tested  
<br>
in quite a while.  Thanks for taking it for a spin.  :-)
<br>
<p><span class="quotelev1">&gt; 1) am I correct in that OpenMPI needs to be complied with each
</span><br>
<span class="quotelev1">&gt; compiler that will be used with it?
</span><br>
<p>Short answer: yes.
<br>
<p>Longer answer: if you only care about the C bindings for MPI, then  
<br>
compiling Open MPI with any compiler should be fine.  The need for  
<br>
multiple compilations/installations largely stems from Fortran and C++  
<br>
support (because different compilers use different symbol mangling  
<br>
techniques).  We usually advocate using the same compiler to compile  
<br>
both Open MPI and the end-user application.  E.g., if you have an end- 
<br>
user MPI application that only works with compiler X, then have an  
<br>
OMPI installation that was built with compiler X as well.
<br>
<p><span class="quotelev1">&gt; I am currently trying to make rpms using the included .spec file
</span><br>
<span class="quotelev1">&gt; (contrib/dist/linux/openmpi.spec, IIRC).
</span><br>
<span class="quotelev1">&gt; 2) How do I use it to build against different compilers and end up
</span><br>
<span class="quotelev1">&gt; with non-colliding namespaces, etc?
</span><br>
<p>Open MPI's configure script takes the standard arguments to override  
<br>
compilers -- setting environment variables.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;./configure CC=icc CXX=icpc ...etc.
<br>
<p>It looks like you already noticed that you can pass in arguments to  
<br>
OMPI's configure script with the &quot;configure_options&quot; default.  So you  
<br>
can pass CC, CXX, etc. via this mechanism, too:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;rpmbuild ... --define 'configure_options CC=icc CXX=icpc ...' ...
<br>
<p><span class="quotelev1">&gt; I am currently concerned with differentiating same version compiled
</span><br>
<span class="quotelev1">&gt; with different compilers.  I origionally changed the name (--define
</span><br>
<span class="quotelev1">&gt; '_name openmpi-gcc'), but this broke the final phases of rpm building:
</span><br>
<span class="quotelev1">&gt; RPM build errors:
</span><br>
<span class="quotelev1">&gt;    File not found:
</span><br>
<span class="quotelev1">&gt; /var/tmp/openmpi-gcc-1.2.4-1-root/opt/openmpi-gcc/1.2.4/share/ 
</span><br>
<span class="quotelev1">&gt; openmpi-gcc
</span><br>
<span class="quotelev1">&gt; I tried changing the version with &quot;gcc&quot; appended, but that also broke,
</span><br>
<span class="quotelev1">&gt; and as I thought about it more, I thought that would likely induce
</span><br>
<span class="quotelev1">&gt; headaches later with rpm only letting one version installed, etc.
</span><br>
<p>Little known fact: RPM will allow as multiple installations of a  
<br>
single package as you want as long as none of the files overlap.
<br>
<p>But I agree that differing solely by version number may be a bit  
<br>
confusing.
<br>
<p>You sent me a few more notes about this off-list; I'll take the  
<br>
liberty of replying on-list so that the discussion is google-able:
<br>
<p><span class="quotelev1">&gt; The rpm build errored out near the end with a missing file.  It was  
</span><br>
<span class="quotelev1">&gt; trying to find /opt/openmpi-gcc/1.2.4/opt/share/openmpi-gcc (IIRC),  
</span><br>
<span class="quotelev1">&gt; but the last part was actually openmpi on disk.  I ended up  
</span><br>
<span class="quotelev1">&gt; correcting it by changing line 182 (configuration logic) to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %define _datadir /opt/%{name}/%{version}/share/%{name}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (I changed _pkgdatadir to _datadir).  Your later directive if  
</span><br>
<span class="quotelev1">&gt; _pkgdatadir is undefined took care of _pkgdatadir.  I must admit, I  
</span><br>
<span class="quotelev1">&gt; still don't fully understand where rpm was getting the idea to look  
</span><br>
<span class="quotelev1">&gt; for that file...I tried manually configuring _pkgdatadir to the path  
</span><br>
<span class="quotelev1">&gt; that existed, but that changed nothing.  If I didn't rename the  
</span><br>
<span class="quotelev1">&gt; package, it all worked fine.
</span><br>
<p>Hmm.  This is actually symptomatic of a larger problem -- Open MPI's  
<br>
configure/build process is apparently not getting the _pkgdatadir  
<br>
value, probably because there's no way to pass it on the configure  
<br>
command line (i.e., there's no standard AC --pkgdatadir option).   
<br>
Instead, the &quot;$datadir/openmpi&quot; location is hard-coded in the Open MPI  
<br>
code base (in opal/mca/installdirs/config, if you care).  As such,  
<br>
when you re-defined %{_name}, the specfile didn't agree with where  
<br>
OMPI actually installed the files, resulting in the error you saw.
<br>
<p>Yuck.
<br>
<p>Well, there are other reasons you can't have multiple OMPI  
<br>
installations share a single installation tree (e.g., they'll all try  
<br>
to install their own &quot;mpirun&quot; executable -- per a prior thread, the -- 
<br>
program-prefix/suffix stuff also doesn't work; see <a href="https://svn.open-mpi.org/trac/ompi/ticket/1168">https://svn.open-mpi.org/trac/ompi/ticket/1168</a> 
<br>
&nbsp;&nbsp;for details).  So this isn't making OMPI any worse than it already  
<br>
is.  :-\
<br>
<p>So I think the best solution for the moment is to just fix the  
<br>
specfile's %_pkgdatadir to use the hard-coded name &quot;openmpi&quot; instead  
<br>
of %{name}.
<br>
<p>I committed these changes (and some other small fixes for things I  
<br>
found while testing the _name and multi-package stuff) to the OMPI SVN  
<br>
trunk in r17036 (see <a href="https://svn.open-mpi.org/trac/ompi/changeset/">https://svn.open-mpi.org/trac/ompi/changeset/</a> 
<br>
17036) -- could you give it a whirl and see if it works for you?
<br>
<p>And another from an off-list mail:
<br>
<p><span class="quotelev1">&gt; In the preamble for the separate rpm files, the -devel and -docs  
</span><br>
<span class="quotelev1">&gt; reference openmpi-runtime statically rather than using %{name}- 
</span><br>
<span class="quotelev1">&gt; runtime, which breaks dependencies if you build under a different  
</span><br>
<span class="quotelev1">&gt; name as I am.
</span><br>
<p>Doh.  I tried replacing the Requires: with %{_name}-runtime, but then  
<br>
rpmbuild complained:
<br>
<p>error: line 300: Dependency tokens must begin with alpha-numeric, '_'  
<br>
or '/': Requires: %{_name}-runtime
<br>
<p>So it looks like Requires: will only take a hard-coded name, not a  
<br>
variable (I have no comments in the specfile about this issue, but  
<br>
perhaps that's why Greg/I hard-coded it in the first place...?).   
<br>
Yuck.  :-(
<br>
<p>This error occurred with rpmbuild v4.3.3 (the default on RHEL4U4), so  
<br>
I tried manually upgrading to v4.4.2.2 from rpm.org to see if this  
<br>
constraint had been relaxed, but I couldn't [easily] get it to build.   
<br>
I guess it wouldn't be attractive to use something that would only  
<br>
work with the newest version RPM, anyway.
<br>
<p>We'll unfortunately have to do something different, then.  :- 
<br>
(  Obvious but icky solutions include:
<br>
<p>- remove the Requires statements
<br>
- protect the Requires statements to only be used when %{_name} is  
<br>
&quot;openmpi&quot;
<br>
<p>Got any better ideas?
<br>
<p><span class="quotelev1">&gt; 3) Will the resulting -runtime .rpms (for the different compiler
</span><br>
<span class="quotelev1">&gt; versions) coexist peacefully without any special environment munging
</span><br>
<span class="quotelev1">&gt; on the compute nodes, or do I need modules, etc. on all the compute
</span><br>
<span class="quotelev1">&gt; nodes as well?
</span><br>
<p>They can co-exist peacefully out on the nodes because you should  
<br>
choose different --prefix values for each installation (e.g., /opt/ 
<br>
openmpi_gcc3.4.0/ or whatever naming convention you choose to use).   
<br>
That being said, you should ensure that whatever version of OMPI you  
<br>
use is consistent across an entire job.  E.g., if job X was compiled  
<br>
with the openmpi-gcc installation, then it should use the openmpi-gcc  
<br>
installation on all the nodes on which it runs.
<br>
<p>The easiest way to do that might be to use the --enable-mpirun-prefix- 
<br>
by-default option to configure.  This will cause OMPI to use mpirun's  
<br>
--prefix option by default (even if you don't specify it on the mpirun  
<br>
command line), which will effectively tell the remote node where OMPI  
<br>
lives on the remote nodes (assuming your installation paths are the  
<br>
same on all nodes -- e.g., /opt/openmpi-gcc).  Then you can use  
<br>
environment modules (or whatever) on your head node / the job's first  
<br>
node to select which OMPI installation you want, use mpicc/mpiCC/ 
<br>
mpif77/mpif90 to compile your job, and then mpirun will do the Right  
<br>
thing to select the appropriate OMPI installation on remote nodes,  
<br>
meaning that it will set the PATH and LD_LIBRARY_PATH on the remote  
<br>
node for you.
<br>
<p>Make sense?
<br>
<p>See:
<br>
<p><a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>
<br>
<a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>
<br>
<p>for a little more detail.
<br>
<p><span class="quotelev1">&gt; 4) I've never really used pgi or intel's compiler.  I saw notes in the
</span><br>
<span class="quotelev1">&gt; rpm about build flag problems and &quot;use your normal optimizations and
</span><br>
<span class="quotelev1">&gt; flags&quot;, etc.  As I have no concept of &quot;normal&quot; for these compilers,
</span><br>
<span class="quotelev1">&gt; are there any guides or examples I should/could use for this?
</span><br>
<p>You'll probably want to check the docs for those compilers.   
<br>
Generally, GCC-like -O options have similar definitions in these  
<br>
compilers (they try to be similar to GCC).  YMMV.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4776.php">Krishna Chaitanya: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>Previous message:</strong> <a href="4774.php">Jeff Squyres: "Re: [OMPI users] Tracing the library using gdb and xterm"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4758.php">Jim Kusznir: "[OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Reply:</strong> <a href="4780.php">Jim Kusznir: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
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
