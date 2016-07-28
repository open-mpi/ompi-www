<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 16:37:46 2012" -->
<!-- isoreceived="20120523203746" -->
<!-- sent="Wed, 23 May 2012 20:37:38 +0000" -->
<!-- isosent="20120523203738" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release" -->
<!-- id="5B214621-20AB-41BC-B9B4-DEE3FFC363B7_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CBE2A309.ECB4%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 16:37:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>Previous message:</strong> <a href="11015.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>In reply to:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11018.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11018.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So perhaps I should stop calling them environment variables. Since one can always do something like
<br>
<p>$ ./configure CFLAGS=&quot;-I/usr/include/specialK&quot; ...
<br>
<p>a line such as 
<br>
<p>CFLAGS=&quot;-I/usr/include/specialK&quot;
<br>
<p>should be supported by the platform file reader.  No two systems are alike here and we need these platform files to manage the dozens of different OMPI builds. We have different paths for the IB libs, Panasas file system libs and includes, etc.  Essentially, we're not going to 1.6 at the moment.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On May 23, 2012, at 2:23 PM, Barrett, Brian W wrote:
&gt; David -
&gt; 
&gt; Where exactly the platform file gets evaluated depends on a number of
&gt; things that the OMPI developers don't have a lot of control over.  It was
&gt; never meant to be used to set environment variables, only command line
&gt; arguments.  It looks like something bad has happened with ordering; I'm
&gt; not sure when I'll be able to take a look, but we should be able to make
&gt; it evaluate sooner...
&gt; 
&gt; Brian
&gt; 
&gt; On 5/23/12 2:16 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I think I have some understanding of what is happening. In version 1.6,
&gt;&gt; the check for the platform file occurs after some basic compiler testing
&gt;&gt; has already occured:
&gt;&gt; 
&gt;&gt; (dog_at_tu-fe1 61%) ./configure --with-platform=non-existant
&gt;&gt; 
&gt;&gt; ==========================================================================
&gt;&gt; ==
&gt;&gt; == Configuring Open MPI
&gt;&gt; ==========================================================================
&gt;&gt; ==
&gt;&gt; 
&gt;&gt; *** Startup tests
&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
&gt;&gt; checking for gcc... gcc
&gt;&gt; checking whether the C compiler works... yes
&gt;&gt; checking for C compiler default output file name... a.out
&gt;&gt; checking for suffix of executables...
&gt;&gt; checking whether we are cross compiling... no
&gt;&gt; checking for suffix of object files... o
&gt;&gt; checking whether we are using the GNU C compiler... yes
&gt;&gt; checking whether gcc accepts -g... yes
&gt;&gt; checking for gcc option to accept ISO C89... none needed
&gt;&gt; checking how to run the C preprocessor... gcc -E
&gt;&gt; checking for grep that handles long lines and -e... /bin/grep
&gt;&gt; checking for egrep... /bin/grep -E
&gt;&gt; checking for ANSI C header files... yes
&gt;&gt; checking for sys/types.h... yes
&gt;&gt; checking for sys/stat.h... yes
&gt;&gt; checking for stdlib.h... yes
&gt;&gt; checking for string.h... yes
&gt;&gt; checking for memory.h... yes
&gt;&gt; checking for strings.h... yes
&gt;&gt; checking for inttypes.h... yes
&gt;&gt; checking for stdint.h... yes
&gt;&gt; checking for unistd.h... yes
&gt;&gt; checking minix/config.h usability... no
&gt;&gt; checking minix/config.h presence... no
&gt;&gt; checking for minix/config.h... no
&gt;&gt; checking whether it is safe to define __EXTENSIONS__... yes
&gt;&gt; configure: error: platform file non-existant not found
&gt;&gt; (dog_at_tu-fe1 62%) 
&gt;&gt; 
&gt;&gt; For OMPI 1.4.5, the platform file check occurs right off:
&gt;&gt; 
&gt;&gt; (dog_at_tu-fe1 13%) ./configure --with-platform=non-existant
&gt;&gt; configure: error: platform file non-existant not found
&gt;&gt; 
&gt;&gt; 
&gt;&gt; As it is in the newer release, it will fail to work for the PGI compilers
&gt;&gt; then.
&gt;&gt; 
&gt;&gt; -david
&gt;&gt; 
&gt;&gt; --
&gt;&gt; David Gunter
&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt; Los Alamos National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; On May 23, 2012, at 12:21 PM, Gunter, David O wrote:
&gt;&gt; 
&gt;&gt;&gt; I thought the purpose of the platform file was to be equivalent to
&gt;&gt;&gt; setting things on the command-line to configure. Still, it has always
&gt;&gt;&gt; worked that way for us.
&gt;&gt;&gt; 
&gt;&gt;&gt; Here's what I'm seeing:
&gt;&gt;&gt; 
&gt;&gt;&gt; (dog_at_lo1-fe 297%) ./configure
&gt;&gt;&gt; --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4
&gt;&gt;&gt; --with-platform=./optimized-panasas-pgi
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; =========================================================================
&gt;&gt;&gt; ===
&gt;&gt;&gt; == Configuring Open MPI
&gt;&gt;&gt; 
&gt;&gt;&gt; =========================================================================
&gt;&gt;&gt; ===
&gt;&gt;&gt; 
&gt;&gt;&gt; *** Startup tests
&gt;&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
&gt;&gt;&gt; checking for gcc...
&gt;&gt;&gt; /usr/projects/hpcsoft/lobo/pgi/linux86-64/12.4/bin/pgcc
&gt;&gt;&gt; checking whether the C compiler works... no
&gt;&gt;&gt; configure: error: in `/usr/projects/hpctools/dog/openmpi/openmpi-1.6':
&gt;&gt;&gt; configure: error: C compiler cannot create executables
&gt;&gt;&gt; See `config.log' for more details
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; The error happens because this particular compiler, pgi-12.4, needs two
&gt;&gt;&gt; flags: -lnomp and -lnuma. Thus the reason for the LDFLAGS line in the
&gt;&gt;&gt; platform file.
&gt;&gt;&gt; 
&gt;&gt;&gt; If I compile like this:
&gt;&gt;&gt; 
&gt;&gt;&gt; (dog_at_lo1-fe 297%) ./configure
&gt;&gt;&gt; --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4
&gt;&gt;&gt; --with-platform=./optimized-panasas-pgi LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt;&gt; 
&gt;&gt;&gt; Then the configure proceeds normally.
&gt;&gt;&gt; 
&gt;&gt;&gt; -david
&gt;&gt;&gt; --
&gt;&gt;&gt; David Gunter
&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; On May 23, 2012, at 12:03 PM, Jeff Squyres (jsquyres) wrote:
&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Can you send some output showing that those flags aren't passed
&gt;&gt;&gt;&gt; through, like some output from &quot;make V=1&quot; and or from config.log?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Offhand, I don't know if we ever formally supported setting env
&gt;&gt;&gt;&gt; variables other than enable and with flag variables in the platform
&gt;&gt;&gt;&gt; files...?
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; Sent from my phone. No type good.
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; On May 23, 2012, at 12:49 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but the
&gt;&gt;&gt;&gt;&gt; 1.6 release does not seem to pick these up.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Here's the tail end of one of our platform files, for building with
&gt;&gt;&gt;&gt;&gt; the latest PGI compilers:
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt;&gt;&gt;&gt; CFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt; CXXFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt; FCFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt; FFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt; CCASFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; The same platform file will configure the 1.4.5 release just fine but
&gt;&gt;&gt;&gt;&gt; does not work with 1.6. If I set these variables in my environment and
&gt;&gt;&gt;&gt;&gt; then run configure, it works just fine - as expected.
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; Has anyone else noticed this behavior?
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; -david
&gt;&gt;&gt;&gt;&gt; --
&gt;&gt;&gt;&gt;&gt; David Gunter
&gt;&gt;&gt;&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt;&gt;&gt;&gt; Los Alamos National Laboratory
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt; 
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt; 
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; 
&gt; 
&gt; 
&gt; -- 
&gt;  Brian W. Barrett
&gt;  Dept. 1423: Scalable System Software
&gt;  Sandia National Laboratories
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11017.php">Ralph Castain: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>Previous message:</strong> <a href="11015.php">Josh Hursey: "Re: [OMPI devel] Building Open MPI without Java"</a>
<li><strong>In reply to:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11018.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11018.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
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
