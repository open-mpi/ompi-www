<?
$subject_val = "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 16:16:49 2012" -->
<!-- isoreceived="20120523201649" -->
<!-- sent="Wed, 23 May 2012 20:16:43 +0000" -->
<!-- isosent="20120523201643" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release" -->
<!-- id="B0F9F4DB-BE68-4D00-9101-31FD6F120524_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C0EB92DE-F078-4626-842C-22F4A5B945AD_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 16:16:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think I have some understanding of what is happening. In version 1.6, the check for the platform file occurs after some basic compiler testing has already occured:
<br>
<p>(dog_at_tu-fe1 61%) ./configure --with-platform=non-existant
<br>
<p>============================================================================
<br>
== Configuring Open MPI
<br>
============================================================================
<br>
<p>*** Startup tests
<br>
checking build system type... x86_64-unknown-linux-gnu
<br>
checking host system type... x86_64-unknown-linux-gnu
<br>
checking target system type... x86_64-unknown-linux-gnu
<br>
checking for gcc... gcc
<br>
checking whether the C compiler works... yes
<br>
checking for C compiler default output file name... a.out
<br>
checking for suffix of executables... 
<br>
checking whether we are cross compiling... no
<br>
checking for suffix of object files... o
<br>
checking whether we are using the GNU C compiler... yes
<br>
checking whether gcc accepts -g... yes
<br>
checking for gcc option to accept ISO C89... none needed
<br>
checking how to run the C preprocessor... gcc -E
<br>
checking for grep that handles long lines and -e... /bin/grep
<br>
checking for egrep... /bin/grep -E
<br>
checking for ANSI C header files... yes
<br>
checking for sys/types.h... yes
<br>
checking for sys/stat.h... yes
<br>
checking for stdlib.h... yes
<br>
checking for string.h... yes
<br>
checking for memory.h... yes
<br>
checking for strings.h... yes
<br>
checking for inttypes.h... yes
<br>
checking for stdint.h... yes
<br>
checking for unistd.h... yes
<br>
checking minix/config.h usability... no
<br>
checking minix/config.h presence... no
<br>
checking for minix/config.h... no
<br>
checking whether it is safe to define __EXTENSIONS__... yes
<br>
configure: error: platform file non-existant not found
<br>
(dog_at_tu-fe1 62%) 
<br>
<p>For OMPI 1.4.5, the platform file check occurs right off:
<br>
<p>(dog_at_tu-fe1 13%) ./configure --with-platform=non-existant
<br>
configure: error: platform file non-existant not found
<br>
<p><p>As it is in the newer release, it will fail to work for the PGI compilers then.
<br>
<p>-david
<br>
<p><pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On May 23, 2012, at 12:21 PM, Gunter, David O wrote:
&gt; I thought the purpose of the platform file was to be equivalent to setting things on the command-line to configure. Still, it has always worked that way for us.
&gt; 
&gt; Here's what I'm seeing:
&gt; 
&gt; (dog_at_lo1-fe 297%) ./configure --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4 --with-platform=./optimized-panasas-pgi
&gt; 
&gt; ============================================================================
&gt; == Configuring Open MPI
&gt; ============================================================================
&gt; 
&gt; *** Startup tests
&gt; checking build system type... x86_64-unknown-linux-gnu
&gt; checking host system type... x86_64-unknown-linux-gnu
&gt; checking target system type... x86_64-unknown-linux-gnu
&gt; checking for gcc... /usr/projects/hpcsoft/lobo/pgi/linux86-64/12.4/bin/pgcc
&gt; checking whether the C compiler works... no
&gt; configure: error: in `/usr/projects/hpctools/dog/openmpi/openmpi-1.6':
&gt; configure: error: C compiler cannot create executables
&gt; See `config.log' for more details
&gt; 
&gt; 
&gt; The error happens because this particular compiler, pgi-12.4, needs two flags: -lnomp and -lnuma. Thus the reason for the LDFLAGS line in the platform file.
&gt; 
&gt; If I compile like this:
&gt; 
&gt; (dog_at_lo1-fe 297%) ./configure --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4 --with-platform=./optimized-panasas-pgi LDFLAGS=&quot;-nomp -lnuma&quot;
&gt; 
&gt; Then the configure proceeds normally.
&gt; 
&gt; -david
&gt; --
&gt; David Gunter
&gt; HPC-3: Infrastructure Team
&gt; Los Alamos National Laboratory
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On May 23, 2012, at 12:03 PM, Jeff Squyres (jsquyres) wrote:
&gt; 
&gt;&gt; Can you send some output showing that those flags aren't passed through, like some output from &quot;make V=1&quot; and or from config.log?
&gt;&gt; 
&gt;&gt; Offhand, I don't know if we ever formally supported setting env variables other than enable and with flag variables in the platform files...?
&gt;&gt; 
&gt;&gt; Sent from my phone. No type good. 
&gt;&gt; 
&gt;&gt; On May 23, 2012, at 12:49 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt;&gt; 
&gt;&gt;&gt; I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but the 1.6 release does not seem to pick these up.
&gt;&gt;&gt; 
&gt;&gt;&gt; Here's the tail end of one of our platform files, for building with the latest PGI compilers:
&gt;&gt;&gt; 
&gt;&gt;&gt; LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt;&gt; CFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt; CXXFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt; FCFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt; FFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt; CCASFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt;&gt; 
&gt;&gt;&gt; The same platform file will configure the 1.4.5 release just fine but does not work with 1.6. If I set these variables in my environment and then run configure, it works just fine - as expected.
&gt;&gt;&gt; 
&gt;&gt;&gt; Has anyone else noticed this behavior?
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
&gt;&gt;&gt; 
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Previous message:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>In reply to:</strong> <a href="11012.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
<li><strong>Reply:</strong> <a href="11014.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: Unable to set flags using platform files in the 1.6 release"</a>
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
