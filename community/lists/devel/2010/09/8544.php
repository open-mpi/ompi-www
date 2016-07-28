<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 00:41:45 2010" -->
<!-- isoreceived="20100924044145" -->
<!-- sent="Thu, 23 Sep 2010 22:41:38 -0600" -->
<!-- isosent="20100924044138" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="AANLkTimYY+qX+hUZ=s_OrZ1T9EgXsZb_i7xSLYpE_bxW_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100924042605.GC24112_at_gmx.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 00:41:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8546.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sent to both for reference (see below)
<br>
<p>Just to clarify. It wasn't a deadlock situation, but rather that the machine
<br>
was overloaded and running so hard that the response to keystrokes was
<br>
multiple seconds. Thus, there was no way to shut it down from the keyboard
<br>
or screen. Even a ctrl-c was just getting ignored for a very long time due
<br>
to the overload.
<br>
<p>I was running vmware on my machine, and doing a heavy compile/build in it.
<br>
On top of this, I had email, editor, and browsers running - and then kicked
<br>
off a fresh build in a terminal window. With Jeff's default settings, this
<br>
latter build thought it would be running alone on the machine, and promptly
<br>
generated a number of threads equal to all the processors. Since they were
<br>
already loaded, this drove the machine into the ground.
<br>
<p>My point is just that it is unwise to assume that the OMPI build can utilize
<br>
all available processors. I'm sure it's fine for the MTT runs, especially on
<br>
Jeff's machines as they are dedicated to that purpose - just not a good
<br>
general assumption.
<br>
<p><p>HTH
<br>
Ralph
<br>
<p>====================================
<br>
Output of &quot;perl -V&quot;:
<br>
<p>Summary of my perl5 (revision 5 version 8 subversion 9) configuration:
<br>
&nbsp;&nbsp;Platform:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;osname=darwin, osvers=10.2.0, archname=darwin-2level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;uname='darwin sjc-rcastain-87111.cisco.com 10.2.0 darwin kernel version
<br>
10.2.0: tue nov 3 10:37:10 pst 2009; root:xnu-1486.2.11~1release_i386 i386 '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;config_args='-des -D prefix=/opt/local -D scriptdir=/opt/local/bin -D
<br>
cppflags=-I/opt/local/include -D ccflags=-O2 -arch x86_64 -D
<br>
ldflags=-L/opt/local/lib -D vendorprefix=/opt/local -D man1ext=1pm -D
<br>
man3ext=3pm -D cc=/usr/bin/gcc-4.2 -D ld=/usr/bin/gcc-4.2 -D
<br>
man1dir=/opt/local/share/man/man1p -D man3dir=/opt/local/share/man/man3p -D
<br>
siteman1dir=/opt/local/share/man/man1 -D
<br>
siteman3dir=/opt/local/share/man/man3 -D
<br>
vendorman1dir=/opt/local/share/man/man1 -D
<br>
vendorman3dir=/opt/local/share/man/man3 -D inc_version_list=5.8.8
<br>
5.8.8/darwin-2level -U i_bind -U i_gdbm -U i_db'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hint=recommended, useposix=true, d_sigaction=define
<br>
&nbsp;&nbsp;&nbsp;&nbsp;usethreads=undef use5005threads=undef useithreads=undef
<br>
usemultiplicity=undef
<br>
&nbsp;&nbsp;&nbsp;&nbsp;useperlio=define d_sfio=undef uselargefiles=define usesocks=undef
<br>
&nbsp;&nbsp;&nbsp;&nbsp;use64bitint=define use64bitall=define uselongdouble=undef
<br>
&nbsp;&nbsp;&nbsp;&nbsp;usemymalloc=n, bincompat5005=undef
<br>
&nbsp;&nbsp;Compiler:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cc='/usr/bin/gcc-4.2', ccflags ='-O2 -arch x86_64 -fno-common
<br>
-DPERL_DARWIN -I/opt/local/include -no-cpp-precomp -fno-strict-aliasing
<br>
-pipe -I/usr/local/include -I/opt/local/include',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;optimize='-O3',
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cppflags='-I/opt/local/include -no-cpp-precomp -O2 -arch x86_64
<br>
-fno-common -DPERL_DARWIN -I/opt/local/include -no-cpp-precomp
<br>
-fno-strict-aliasing -pipe -I/usr/local/include -I/opt/local/include'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ccversion='', gccversion='4.2.1 (Apple Inc. build 5646) (dot 1)',
<br>
gccosandvers=''
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intsize=4, longsize=8, ptrsize=8, doublesize=8, byteorder=12345678
<br>
&nbsp;&nbsp;&nbsp;&nbsp;d_longlong=define, longlongsize=8, d_longdbl=define, longdblsize=16
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ivtype='long', ivsize=8, nvtype='double', nvsize=8, Off_t='off_t',
<br>
lseeksize=8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;alignbytes=8, prototype=define
<br>
&nbsp;&nbsp;Linker and Libraries:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;ld='env MACOSX_DEPLOYMENT_TARGET=10.3 /usr/bin/gcc-4.2', ldflags
<br>
='-L/opt/local/lib -L/usr/local/lib'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpth=/usr/local/lib /opt/local/lib /usr/lib
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libs=-ldbm -ldl -lm -lutil -lc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perllibs=-ldl -lm -lutil -lc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc=/usr/lib/libc.dylib, so=dylib, useshrplib=false, libperl=libperl.a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;gnulibc_version=''
<br>
&nbsp;&nbsp;Dynamic Linking:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dlsrc=dl_dlopen.xs, dlext=bundle, d_dlsymun=undef, ccdlflags=' '
<br>
&nbsp;&nbsp;&nbsp;&nbsp;cccdlflags=' ', lddlflags='-L/opt/local/lib -bundle -undefined
<br>
dynamic_lookup -L/usr/local/lib'
<br>
<p><p>Characteristics of this binary (from libperl):
<br>
&nbsp;&nbsp;Compile-time options: PERL_MALLOC_WRAP USE_64_BIT_ALL USE_64_BIT_INT
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USE_FAST_STDIO USE_LARGE_FILES USE_PERLIO
<br>
&nbsp;&nbsp;Built under darwin
<br>
&nbsp;&nbsp;Compiled at Feb 13 2010 13:19:33
<br>
&nbsp;&nbsp;@INC:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/site_perl/5.8.9/darwin-2level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/site_perl/5.8.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/site_perl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/vendor_perl/5.8.9/darwin-2level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/vendor_perl/5.8.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/vendor_perl
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/5.8.9/darwin-2level
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/opt/local/lib/perl5/5.8.9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;.
<br>
<p>On Thu, Sep 23, 2010 at 10:26 PM, Ralf Wildenhues &lt;Ralf.Wildenhues_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
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
<span class="quotelev2">&gt; &gt; being done in exclusion of anything else on my computer. Unfortunately,
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev2">&gt; &gt; is never true.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So my laptop hemorrhaged itself into frozen silence, overheated to the
</span><br>
<span class="quotelev1">&gt; point
</span><br>
<span class="quotelev2">&gt; &gt; of being burning hot, and had to have its battery yanked to stop the
</span><br>
<span class="quotelev1">&gt; runaway
</span><br>
<span class="quotelev2">&gt; &gt; behavior. Not a really good thing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I would suggest you default this &quot;heuristic&quot; out, and let someone set it
</span><br>
<span class="quotelev1">&gt; to
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
<span class="quotelev2">&gt; &gt; On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Some of you may be unaware that recent versions of automake can run in
</span><br>
<span class="quotelev3">&gt; &gt; &gt; parallel.  That is, automake will run in parallel with a degree of (at
</span><br>
<span class="quotelev1">&gt; most)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.plquite
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a bit on some platforms.  On my cluster at cisco, here's a few quick
</span><br>
<span class="quotelev1">&gt; timings
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of the entire autogen.pl process (of which, automake is the
</span><br>
<span class="quotelev1">&gt; bottleneck):
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
<span class="quotelev3">&gt; &gt; &gt; There's a nice performance jump from 1 to 2, and a smaller jump from 2
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS if
</span><br>
<span class="quotelev1">&gt; it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is not already set (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>
</span><br>
<span class="quotelev1">&gt; ):
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; - If lstopo is found in your $PATH, runs it and count how many PU's
</span><br>
<span class="quotelev3">&gt; &gt; &gt; (processing units) you have.  It'll set AUTOMAKE_JOBS to that number,
</span><br>
<span class="quotelev1">&gt; or a
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8544/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8543.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8545.php">Ralf Wildenhues: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8546.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
