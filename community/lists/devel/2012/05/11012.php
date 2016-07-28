<?
$subject_val = "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 14:21:35 2012" -->
<!-- isoreceived="20120523182135" -->
<!-- sent="Wed, 23 May 2012 18:21:30 +0000" -->
<!-- isosent="20120523182130" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release" -->
<!-- id="C0EB92DE-F078-4626-842C-22F4A5B945AD_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="DB2ACE10-4117-4A40-9AD2-E11DB26AA088_at_cisco.com" -->
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
<strong>Date:</strong> 2012-05-23 14:21:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>In reply to:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought the purpose of the platform file was to be equivalent to setting things on the command-line to configure. Still, it has always worked that way for us.
<br>
<p>Here's what I'm seeing:
<br>
<p>(dog_at_lo1-fe 297%) ./configure --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4 --with-platform=./optimized-panasas-pgi
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
checking for gcc... /usr/projects/hpcsoft/lobo/pgi/linux86-64/12.4/bin/pgcc
<br>
checking whether the C compiler works... no
<br>
configure: error: in `/usr/projects/hpctools/dog/openmpi/openmpi-1.6':
<br>
configure: error: C compiler cannot create executables
<br>
See `config.log' for more details
<br>
<p><p>The error happens because this particular compiler, pgi-12.4, needs two flags: -lnomp and -lnuma. Thus the reason for the LDFLAGS line in the platform file.
<br>
<p>If I compile like this:
<br>
<p>(dog_at_lo1-fe 297%) ./configure --prefix=/usr/projects/hpcsoft/lobo/openmpi/1.6.0-pgi-12.4 --with-platform=./optimized-panasas-pgi LDFLAGS=&quot;-nomp -lnuma&quot;
<br>
<p>Then the configure proceeds normally.
<br>
<p>-david
<br>
<pre>
--
David Gunter
HPC-3: Infrastructure Team
Los Alamos National Laboratory
On May 23, 2012, at 12:03 PM, Jeff Squyres (jsquyres) wrote:
&gt; Can you send some output showing that those flags aren't passed through, like some output from &quot;make V=1&quot; and or from config.log?
&gt; 
&gt; Offhand, I don't know if we ever formally supported setting env variables other than enable and with flag variables in the platform files...?
&gt; 
&gt; Sent from my phone. No type good. 
&gt; 
&gt; On May 23, 2012, at 12:49 PM, &quot;Gunter, David O&quot; &lt;dog_at_[hidden]&gt; wrote:
&gt; 
&gt;&gt; I am trying to set LDFLAGS, CFLAGS, etc, in a platform file but the 1.6 release does not seem to pick these up.
&gt;&gt; 
&gt;&gt; Here's the tail end of one of our platform files, for building with the latest PGI compilers:
&gt;&gt; 
&gt;&gt; LDFLAGS=&quot;-nomp -lnuma&quot;
&gt;&gt; CFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt; CXXFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt; FCFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt; FFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt; CCASFLAGS=&quot;-I/opt/panfs/include&quot;
&gt;&gt; 
&gt;&gt; The same platform file will configure the 1.4.5 release just fine but does not work with 1.6. If I set these variables in my environment and then run configure, it works just fine - as expected.
&gt;&gt; 
&gt;&gt; Has anyone else noticed this behavior?
&gt;&gt; 
&gt;&gt; -david
&gt;&gt; --
&gt;&gt; David Gunter
&gt;&gt; HPC-3: Infrastructure Team
&gt;&gt; Los Alamos National Laboratory
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Previous message:</strong> <a href="11011.php">Ralph Castain: "Re: [OMPI devel] Modified files after autogen"</a>
<li><strong>In reply to:</strong> <a href="11009.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
<li><strong>Reply:</strong> <a href="11013.php">Gunter, David O: "Re: [OMPI devel] Unable to set flags using platform files in the 1.6	release"</a>
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
