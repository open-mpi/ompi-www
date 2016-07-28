<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 06:40:16 2010" -->
<!-- isoreceived="20100924104016" -->
<!-- sent="Fri, 24 Sep 2010 06:40:13 -0400" -->
<!-- isosent="20100924104013" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="DEFEC6F0-91AB-4370-9789-9DA501DB4CB0_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTimYY+qX+hUZ=s_OrZ1T9EgXsZb_i7xSLYpE_bxW_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Setting AUTOMAKE_JOBS<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 06:40:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Also to clarify:
<br>
<p>- did autogen set am-jobs to 2 in your case?  (it should do that if lstopo is not found - it also limits itself to 4 at max)
<br>
<p>- in the same scenario, what happens if you manually set am-jobs to 1 and run autogen?  Ie do you get the same heat/sluggishness?  I have experienced vms causing this kind of behavior just because they are running - causing CPU and memory pressure. 
<br>
<p>Sent from my PDA. No type good. 
<br>
<p>On Sep 24, 2010, at 12:49 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Sent to both for reference (see below)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just to clarify. It wasn't a deadlock situation, but rather that the machine was overloaded and running so hard that the response to keystrokes was multiple seconds. Thus, there was no way to shut it down from the keyboard or screen. Even a ctrl-c was just getting ignored for a very long time due to the overload.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was running vmware on my machine, and doing a heavy compile/build in it. On top of this, I had email, editor, and browsers running - and then kicked off a fresh build in a terminal window. With Jeff's default settings, this latter build thought it would be running alone on the machine, and promptly generated a number of threads equal to all the processors. Since they were already loaded, this drove the machine into the ground.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point is just that it is unwise to assume that the OMPI build can utilize all available processors. I'm sure it's fine for the MTT runs, especially on Jeff's machines as they are dedicated to that purpose - just not a good general assumption.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HTH
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ====================================
</span><br>
<span class="quotelev1">&gt; Output of &quot;perl -V&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Summary of my perl5 (revision 5 version 8 subversion 9) configuration:
</span><br>
<span class="quotelev1">&gt;   Platform:
</span><br>
<span class="quotelev1">&gt;     osname=darwin, osvers=10.2.0, archname=darwin-2level
</span><br>
<span class="quotelev1">&gt;     uname='darwin sjc-rcastain-87111.cisco.com 10.2.0 darwin kernel version 10.2.0: tue nov 3 10:37:10 pst 2009; root:xnu-1486.2.11~1release_i386 i386 '
</span><br>
<span class="quotelev1">&gt;     config_args='-des -D prefix=/opt/local -D scriptdir=/opt/local/bin -D cppflags=-I/opt/local/include -D ccflags=-O2 -arch x86_64 -D ldflags=-L/opt/local/lib -D vendorprefix=/opt/local -D man1ext=1pm -D man3ext=3pm -D cc=/usr/bin/gcc-4.2 -D ld=/usr/bin/gcc-4.2 -D man1dir=/opt/local/share/man/man1p -D man3dir=/opt/local/share/man/man3p -D siteman1dir=/opt/local/share/man/man1 -D siteman3dir=/opt/local/share/man/man3 -D vendorman1dir=/opt/local/share/man/man1 -D vendorman3dir=/opt/local/share/man/man3 -D inc_version_list=5.8.8 5.8.8/darwin-2level -U i_bind -U i_gdbm -U i_db'
</span><br>
<span class="quotelev1">&gt;     hint=recommended, useposix=true, d_sigaction=define
</span><br>
<span class="quotelev1">&gt;     usethreads=undef use5005threads=undef useithreads=undef usemultiplicity=undef
</span><br>
<span class="quotelev1">&gt;     useperlio=define d_sfio=undef uselargefiles=define usesocks=undef
</span><br>
<span class="quotelev1">&gt;     use64bitint=define use64bitall=define uselongdouble=undef
</span><br>
<span class="quotelev1">&gt;     usemymalloc=n, bincompat5005=undef
</span><br>
<span class="quotelev1">&gt;   Compiler:
</span><br>
<span class="quotelev1">&gt;     cc='/usr/bin/gcc-4.2', ccflags ='-O2 -arch x86_64 -fno-common -DPERL_DARWIN -I/opt/local/include -no-cpp-precomp -fno-strict-aliasing -pipe -I/usr/local/include -I/opt/local/include',
</span><br>
<span class="quotelev1">&gt;     optimize='-O3',
</span><br>
<span class="quotelev1">&gt;     cppflags='-I/opt/local/include -no-cpp-precomp -O2 -arch x86_64 -fno-common -DPERL_DARWIN -I/opt/local/include -no-cpp-precomp -fno-strict-aliasing -pipe -I/usr/local/include -I/opt/local/include'
</span><br>
<span class="quotelev1">&gt;     ccversion='', gccversion='4.2.1 (Apple Inc. build 5646) (dot 1)', gccosandvers=''
</span><br>
<span class="quotelev1">&gt;     intsize=4, longsize=8, ptrsize=8, doublesize=8, byteorder=12345678
</span><br>
<span class="quotelev1">&gt;     d_longlong=define, longlongsize=8, d_longdbl=define, longdblsize=16
</span><br>
<span class="quotelev1">&gt;     ivtype='long', ivsize=8, nvtype='double', nvsize=8, Off_t='off_t', lseeksize=8
</span><br>
<span class="quotelev1">&gt;     alignbytes=8, prototype=define
</span><br>
<span class="quotelev1">&gt;   Linker and Libraries:
</span><br>
<span class="quotelev1">&gt;     ld='env MACOSX_DEPLOYMENT_TARGET=10.3 /usr/bin/gcc-4.2', ldflags ='-L/opt/local/lib -L/usr/local/lib'
</span><br>
<span class="quotelev1">&gt;     libpth=/usr/local/lib /opt/local/lib /usr/lib
</span><br>
<span class="quotelev1">&gt;     libs=-ldbm -ldl -lm -lutil -lc
</span><br>
<span class="quotelev1">&gt;     perllibs=-ldl -lm -lutil -lc
</span><br>
<span class="quotelev1">&gt;     libc=/usr/lib/libc.dylib, so=dylib, useshrplib=false, libperl=libperl.a
</span><br>
<span class="quotelev1">&gt;     gnulibc_version=''
</span><br>
<span class="quotelev1">&gt;   Dynamic Linking:
</span><br>
<span class="quotelev1">&gt;     dlsrc=dl_dlopen.xs, dlext=bundle, d_dlsymun=undef, ccdlflags=' '
</span><br>
<span class="quotelev1">&gt;     cccdlflags=' ', lddlflags='-L/opt/local/lib -bundle -undefined dynamic_lookup -L/usr/local/lib'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Characteristics of this binary (from libperl): 
</span><br>
<span class="quotelev1">&gt;   Compile-time options: PERL_MALLOC_WRAP USE_64_BIT_ALL USE_64_BIT_INT
</span><br>
<span class="quotelev1">&gt;                         USE_FAST_STDIO USE_LARGE_FILES USE_PERLIO
</span><br>
<span class="quotelev1">&gt;   Built under darwin
</span><br>
<span class="quotelev1">&gt;   Compiled at Feb 13 2010 13:19:33
</span><br>
<span class="quotelev1">&gt;   @INC:
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/site_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/site_perl/5.8.9
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/site_perl
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/vendor_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/vendor_perl/5.8.9
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/vendor_perl
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/5.8.9/darwin-2level
</span><br>
<span class="quotelev1">&gt;     /opt/local/lib/perl5/5.8.9
</span><br>
<span class="quotelev1">&gt;     .
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Sep 23, 2010 at 10:26 PM, Ralf Wildenhues &lt;Ralf.Wildenhues_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; wow, that's not good to hear.  I knew the perl ithreads implementation
</span><br>
<span class="quotelev1">&gt; wasn't all that efficient, but causing a deadlock sounds like you have
</span><br>
<span class="quotelev1">&gt; more trouble than just perl; at least I hope so.  For reference, can
</span><br>
<span class="quotelev1">&gt; you send 'perl -V' output (if you like, to the bug-automake at gnu.org
</span><br>
<span class="quotelev1">&gt; list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Ralph Castain wrote on Fri, Sep 24, 2010 at 03:12:16AM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; I found one major negative to this change - it assumes that my build is
</span><br>
<span class="quotelev2">&gt; &gt; being done in exclusion of anything else on my computer. Unfortunately, this
</span><br>
<span class="quotelev2">&gt; &gt; is never true.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So my laptop hemorrhaged itself into frozen silence, overheated to the point
</span><br>
<span class="quotelev2">&gt; &gt; of being burning hot, and had to have its battery yanked to stop the runaway
</span><br>
<span class="quotelev2">&gt; &gt; behavior. Not a really good thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would suggest you default this &quot;heuristic&quot; out, and let someone set it to
</span><br>
<span class="quotelev2">&gt; &gt; use multiple runs if-and-only-if they want it. Hate to cite the lowest
</span><br>
<span class="quotelev2">&gt; &gt; common denominator, but this was a very nasty surprise.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Some of you may be unaware that recent versions of automake can run in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parallel.  That is, automake will run in parallel with a degree of (at most)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.pl quite
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a bit on some platforms.  On my cluster at cisco, here's a few quick timings
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of the entire autogen.pl process (of which, automake is the bottleneck):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev3">&gt; &gt; &gt; value                    of autogen.pl
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 8                        3:01.46
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4                        2:55.57
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2                        3:28.09
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1                        4:38.44
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; This is an older Xeon machine with 2 sockets, each with 2 cores.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There's a nice performance jump from 1 to 2, and a smaller jump from 2 to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS if it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is not already set (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - If lstopo is found in your $PATH, runs it and count how many PU's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (processing units) you have.  It'll set AUTOMAKE_JOBS to that number, or a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; maximum of 4 (which is admittedly a further heuristic).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - If lstopo is not found, it just sets AUTOMAKE_JOBS to 2.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Enjoy.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8546/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8547.php">Jeff Squyres: "Re: [OMPI devel] Autogen improvements: ready for blast off"</a>
<li><strong>Previous message:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8544.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
