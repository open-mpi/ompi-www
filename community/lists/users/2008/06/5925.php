<?
$subject_val = "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 18 09:56:29 2008" -->
<!-- isoreceived="20080618135629" -->
<!-- sent="Wed, 18 Jun 2008 09:56:23 -0400 (EDT)" -->
<!-- isosent="20080618135623" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] gfortran bindings apparently not built on mac os leopard" -->
<!-- id="Pine.LNX.4.64.0806180944020.21120_at_marvin.we-be-smart.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1E7B9588-BE2B-4975-956F-6ABE933F7D29_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] gfortran bindings apparently not built on mac os leopard<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-18 09:56:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5924.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5924.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for adding the section, but the information contained within is 
<br>
wrong (as was the information in this e-mail thread).  OS X essentially 
<br>
*always* adds a -rpath to both executables depending on libraries and 
<br>
libraries depending on other libraries.  There is no need to set 
<br>
LD_LIBRARY_PATH, which on OS X is only used by the linker at link time and 
<br>
by dlopen, but not the linker at run time.  Setting DYLD_LIBRARY_PATH is 
<br>
not only unnecessary, but considered harmful.  There are very few 
<br>
situations where one would need to set DYLD_LIBRARY_PATH, and they should 
<br>
never be part of a production environment.
<br>
<p>If you built Open MPI as a set of static libraries, there is a library 
<br>
search order problem (which neither of the two LIBRARY_PATH variables will 
<br>
solve) in that OS X searches the entire library path for a shared library 
<br>
of the specified name, then searches the entire library path again for a 
<br>
static library of the specified name.  Since /usr/lib/libmpi.dylib would 
<br>
then always be found before &lt;my install/lib/libmpi.a, you'd have a 
<br>
problem.  An easy workaround is to add -Wl,-search_paths_first to the link 
<br>
line when linking MPI applications.  I'd accomplish this by adding the 
<br>
following to OMPI's configure:
<br>
<p>&nbsp;&nbsp;&nbsp;--with-wrapper-ldflags=&quot;-Wl,-search_paths_first&quot;
<br>
<p>Getting back to the original problem, unless the user already has set 
<br>
DYLD_LIBRARY_PATH (which they shouldn't do), there is no need to modify 
<br>
DYLD_LIBRARY_PATH for OMPI to work properly (even with the system 
<br>
installed version in /usr/lib).  We should not mention DYLD_LIBRARY_PATH 
<br>
in the FAQ.  If we do mention it, it should only be to say that it should 
<br>
not be set.
<br>
<p>Brian
<br>
<p><p>On Wed, 18 Jun 2008, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I added this issue to the FAQ under the &quot;OS X&quot; section to make it a 
</span><br>
<span class="quotelev1">&gt; little easier to find.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 17, 2008, at 5:17 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry for not replying earlier -- glad you figured it out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, if you didn't also reset the LIBRARY_PATH, the &quot;wrong&quot; libmpi (and 
</span><br>
<span class="quotelev2">&gt;&gt; friends) will get picked up, and it will therefore use the hard-coded 
</span><br>
<span class="quotelev2">&gt;&gt; directory path in those &quot;wrong&quot; libraries to find the wrapper data text 
</span><br>
<span class="quotelev2">&gt;&gt; files (the ones without Fortran support).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 17, 2008, at 4:15 PM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Alright, I&#146;m an idiot. I didn&#146;t adjust my DYLD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry about that-
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 6/17/08 7:08 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is pretty odd.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What files do you see in $prefix/share/openmpi/mpi*txt?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What do you see from:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   grep required_file $prefix/share/openmpi/mpi*txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 16, 2008, at 2:12 PM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dave Gunter:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; According to ./configure &#151;help, by default  &#151;enable-mpi-f77 and &#151;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; enable-mpi-f90 are set. Also, ompi_info (see output in run_output in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the tarball) seems to indicate they are there. I rebuilt with them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just to be sure, and got the same results.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug Reeder:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my run_output file, you can see results of &#145;which mpif77&#146; that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; shows I am using the version I built. (current is a symlink to 1.2.6-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gcc4.0). In any case, I get the same results with the absolute path /
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usr/local/openmpi/1.2.6-4.0/bin/mpif77.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 6/16/08 11:04 AM, &quot;users-request_at_[hidden]&quot; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users-request_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         users-owner_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    1. Re: gfortran bindings apparently not built on mac os
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       (David Gunter)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    2. Re: gfortran bindings apparently not built on mac os
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       (Doug Reeder)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    3. Re: gfortran bindings apparently not built on mac os
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       (Doug Reeder)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    4. help me please, about Open MPI (Tony Smith)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    5. Re: help me please, about Open MPI (Andreas Sch?fer)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Mon, 16 Jun 2008 10:37:22 -0600
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: David Gunter &lt;dog_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mac os  leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;4683C284-4FEF-45CA-A2BC-8BE91A439485_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I believe you still must add &quot;--enable-f77&quot; and &quot;--enable-f90&quot; to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI configure line in addition to setting the FC and F77 env
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; variables.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -david
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; David Gunter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HPC-3: Parallel Tools Team
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 16, 2008, at 10:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx installed,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; but not fortran bindings, and I was careful to put the openmpi I
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; built first in the path.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; configure.log, make.out, make-install.out are in the attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Any clues?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &lt;dig.tar.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Mon, 16 Jun 2008 09:32:21 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mac os  leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;5047581C-F2E2-473B-8576-3E11F0D54DEA_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you use the absolute path names to run your mpif77 and mpif90 what
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; output do you get. In spite of the results from which mpif77, the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; outputs from mpif77 and mpif90 look suspiciously like the outputs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from the apple supplied versions in /usr/bin.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; installed, but not fortran bindings, and I was careful to put the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; openmpi I built first in the path.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; configure.log, make.out, make-install.out are in the attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Any clues?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &lt;dig.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Mon, 16 Jun 2008 09:42:55 -0700
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Doug Reeder &lt;dlr_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] gfortran bindings apparently not built on
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         mac os  leopard
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;08B5C06D-8B64-4189-ADAE-E9FBE6BE567F_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;; Format=&quot;flowed&quot;;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         DelSp=&quot;yes&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In your run_output file you don't appear to be using the openmpi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions that you built. From your make-install.out file it looks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; like your versions are in /usr/local/openmpi/1.2.6-gcc4.0/bin. You
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need to use that absolute path or prepend that path to your PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment variable.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 16, 2008, at 9:25 AM, Weirs, V Gregory wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I am having trouble building mpif77/mpif90 with gfortran on Mac OS
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; 10.5. Or maybe just running. The configure, make all, and make
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; install seemed to go just fine, finding my gfortran and apparently
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; using it, but the scripts mpif77 and mpif90 give the error that my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; openmpi was not built with fortran bindings. Mpicc and mpicxx don?t
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; give this error.  Ompi_info says the f77 and f90 bindings were
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; built.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I know that OS X 10.5 comes with openmpi mpicc and mpicxx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; installed, but not fortran bindings, and I was careful to put the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; openmpi I built first in the path.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Some run output (mpif77 ?version, ompi_info), config.log,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; configure.log, make.out, make-install.out are in the attached
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tarball.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Any clues?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Greg
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; V. Gregory Weirs
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; &lt;dig.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Mon, 16 Jun 2008 12:51:31 -0400
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Tony Smith &lt;dtustudy8_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;BAY104-W32BC5D00DA99730856FD48FDA90_at_phx.gbl&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;windows-1252&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Sir:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am trying to install Open MPI on a cluster that has been installed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with mpich-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gm  MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have followed the steps on your website.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can compile and run the Hello_c application correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But, how can I make sure that the application is run by Open MPI not
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; by mpich-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; gm MPI ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /ptmp/myname/openmpi123/ompi123_install/bin/ into PATH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=/ptmp/myname/openmpi123/ompi123_install/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And then, I got
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-3.00$ which mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /ptmp/myname/openmpi123/ompi123_install/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In my job script , I used
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;time mpirun -np 16  /ptmp/jxding/openmpi123/openmpi-1.2.3/examples/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hello_c&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Then I added &quot;which mpirun&quot; in my job script, and then submited my
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job to the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cluster , I got :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ====================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /opt/mpich-gm/bin/mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hello, world, I am 0 of 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 0.117u 0.165s 0:09.54 2.8%      0+0k 0+0io 0pf+0w
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ====================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So , it means that the application is still using MPICH-GM not Open
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Would you please help me with that ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tony
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; June 16  2008
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _________________________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now you can invite friends from Facebook and other groups to join
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you on Windows Live? Messenger. Add now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now">https://www.invite2messenger.net/im/?source=TXT_EML_WLH_AddNow_Now</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message: 5
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Mon, 16 Jun 2008 19:05:06 +0200
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Andreas Sch?fer &lt;gentryx_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] help me please, about Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Message-ID: &lt;20080616170506.GB7069_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Content-Type: text/plain; charset=&quot;iso-8859-1&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Mister Smith,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for installing Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 12:51 Mon 16 Jun     , Tony Smith wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I have changed PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Please be aware that you have to make those changes within your job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; script. Otherwise they will only affect your local shell.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; But, how can I make sure that the application is run by Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; not by mpich-
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You could enforce a certain mpirun by using its absolute path, e.g
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;/ptmp/myname/openmpi123/ompi123_install/bin/mpirun foo&quot; instead of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; just &quot;mpirun foo&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; I deleted /opt/mpich-gm/bin from PATH and added
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You should not need to delete, just add in front of MPICH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt; Would you please help me with that ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I utterly hope I just did.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Most sincerely yours ;-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Andreas
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Andreas Sch?fer
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Friedrich-Schiller-Universit?t Jena, Germany
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PGP/GPG key via keyserver
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm a bright... <a href="http://www.the-brights.net">http://www.the-brights.net</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ============================================
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (\___/)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (+'.'+)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (&quot;)_(&quot;)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is Bunny. Copy and paste Bunny into your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; signature to help him gain world domination!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------- next part --------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Name: not available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Type: application/pgp-signature
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Size: 197 bytes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Desc: not available
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; URL: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin">http://www.open-mpi.org/MailArchives/users/attachments/20080616/ab34ce85/attachment.bin</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; End of users Digest, Vol 923, Issue 4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *************************************
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; V. Gregory Weirs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; V. Gregory Weirs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sandia National Laboratories                vgweirs_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.O.Box 5800, MS 0378                        phone: 505 845 2032
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Albuquerque, NM 87185-0378              fax: 505 284 0154
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Previous message:</strong> <a href="5924.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>In reply to:</strong> <a href="5924.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
<li><strong>Reply:</strong> <a href="5926.php">Jeff Squyres: "Re: [OMPI users] gfortran bindings apparently not built on mac os leopard"</a>
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
