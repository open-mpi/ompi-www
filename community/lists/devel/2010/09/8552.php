<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 22:00:36 2010" -->
<!-- isoreceived="20100925020036" -->
<!-- sent="Fri, 24 Sep 2010 20:00:30 -0600" -->
<!-- isosent="20100925020030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="AANLkTi=3AbV6mp=vHhLQBdi8PPzQJPKY5xVASj=t6se=_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimVO5k-cS5XejEB_EkGmFQnUtPOzAWpS2na3=zW_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-09-24 22:00:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Been thinking about this more today, and I actually find this new &quot;feature&quot;
<br>
disturbing. It bothers me that OMPI is now dictating that it will do a
<br>
parallel build without my knowledge unless I specifically tell it not to. If
<br>
it were technically possible, would we next force &quot;make -j4&quot;?? How would the
<br>
developer community feel if the authors of &quot;make&quot; suddenly decided that it
<br>
would run 4 parallel threads under the covers unless you specifically told
<br>
it not to?
<br>
<p>What bugs me here is that I now have to remember to set something in my
<br>
environment to tell OMPI &quot;you don't get to hog all my processors&quot;. Maybe
<br>
others twiddle their thumbs and leave the computer alone while OMPI builds,
<br>
or maybe they rarely build - but I build frequently, and I am always
<br>
multi-tasking my time (running Word, Powerpoint, etc.). So having OMPI
<br>
default to running a parallel build is more than a little annoying -
<br>
frankly, it pisses me off.
<br>
<p>I really feel that this &quot;feature&quot; should be implemented as an option passed
<br>
to autogen instead of a hidden forced behavior. If someone wants to run a
<br>
parallel build, then by all means let them ask for it (ala &quot;make -j4&quot;). But
<br>
don't just -do- it.
<br>
<p>Grrrr....
<br>
Ralph
<br>
<p><p>On Fri, Sep 24, 2010 at 7:28 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I hope you'll understand if I don't run that test while on the road...one
</span><br>
<span class="quotelev1">&gt; battery yank per week is my limit :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 24, 2010 at 4:40 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also to clarify:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - did autogen set am-jobs to 2 in your case?  (it should do that if lstopo
</span><br>
<span class="quotelev2">&gt;&gt; is not found - it also limits itself to 4 at max)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - in the same scenario, what happens if you manually set am-jobs to 1 and
</span><br>
<span class="quotelev2">&gt;&gt; run autogen?  Ie do you get the same heat/sluggishness?  I have experienced
</span><br>
<span class="quotelev2">&gt;&gt; vms causing this kind of behavior just because they are running - causing
</span><br>
<span class="quotelev2">&gt;&gt; CPU and memory pressure.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA. No type good.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 24, 2010, at 12:49 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent to both for reference (see below)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to clarify. It wasn't a deadlock situation, but rather that the
</span><br>
<span class="quotelev2">&gt;&gt; machine was overloaded and running so hard that the response to keystrokes
</span><br>
<span class="quotelev2">&gt;&gt; was multiple seconds. Thus, there was no way to shut it down from the
</span><br>
<span class="quotelev2">&gt;&gt; keyboard or screen. Even a ctrl-c was just getting ignored for a very long
</span><br>
<span class="quotelev2">&gt;&gt; time due to the overload.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was running vmware on my machine, and doing a heavy compile/build in it.
</span><br>
<span class="quotelev2">&gt;&gt; On top of this, I had email, editor, and browsers running - and then kicked
</span><br>
<span class="quotelev2">&gt;&gt; off a fresh build in a terminal window. With Jeff's default settings, this
</span><br>
<span class="quotelev2">&gt;&gt; latter build thought it would be running alone on the machine, and promptly
</span><br>
<span class="quotelev2">&gt;&gt; generated a number of threads equal to all the processors. Since they were
</span><br>
<span class="quotelev2">&gt;&gt; already loaded, this drove the machine into the ground.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My point is just that it is unwise to assume that the OMPI build can
</span><br>
<span class="quotelev2">&gt;&gt; utilize all available processors. I'm sure it's fine for the MTT runs,
</span><br>
<span class="quotelev2">&gt;&gt; especially on Jeff's machines as they are dedicated to that purpose - just
</span><br>
<span class="quotelev2">&gt;&gt; not a good general assumption.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; HTH
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ====================================
</span><br>
<span class="quotelev2">&gt;&gt; Output of &quot;perl -V&quot;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Summary of my perl5 (revision 5 version 8 subversion 9) configuration:
</span><br>
<span class="quotelev2">&gt;&gt;   Platform:
</span><br>
<span class="quotelev2">&gt;&gt;     osname=darwin, osvers=10.2.0, archname=darwin-2level
</span><br>
<span class="quotelev2">&gt;&gt;     uname='darwin &lt;<a href="http://sjc-rcastain-87111.cisco.com">http://sjc-rcastain-87111.cisco.com</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sjc-rcastain-87111.cisco.com 10.2.0 darwin kernel version 10.2.0: tue nov
</span><br>
<span class="quotelev2">&gt;&gt; 3 10:37:10 pst 2009; root:xnu-1486.2.11~1release_i386 i386 '
</span><br>
<span class="quotelev2">&gt;&gt;     config_args='-des -D prefix=/opt/local -D scriptdir=/opt/local/bin -D
</span><br>
<span class="quotelev2">&gt;&gt; cppflags=-I/opt/local/include -D ccflags=-O2 -arch x86_64 -D
</span><br>
<span class="quotelev2">&gt;&gt; ldflags=-L/opt/local/lib -D vendorprefix=/opt/local -D man1ext=1pm -D
</span><br>
<span class="quotelev2">&gt;&gt; man3ext=3pm -D cc=/usr/bin/gcc-4.2 -D ld=/usr/bin/gcc-4.2 -D
</span><br>
<span class="quotelev2">&gt;&gt; man1dir=/opt/local/share/man/man1p -D man3dir=/opt/local/share/man/man3p -D
</span><br>
<span class="quotelev2">&gt;&gt; siteman1dir=/opt/local/share/man/man1 -D
</span><br>
<span class="quotelev2">&gt;&gt; siteman3dir=/opt/local/share/man/man3 -D
</span><br>
<span class="quotelev2">&gt;&gt; vendorman1dir=/opt/local/share/man/man1 -D
</span><br>
<span class="quotelev2">&gt;&gt; vendorman3dir=/opt/local/share/man/man3 -D inc_version_list=5.8.8
</span><br>
<span class="quotelev2">&gt;&gt; 5.8.8/darwin-2level -U i_bind -U i_gdbm -U i_db'
</span><br>
<span class="quotelev2">&gt;&gt;     hint=recommended, useposix=true, d_sigaction=define
</span><br>
<span class="quotelev2">&gt;&gt;     usethreads=undef use5005threads=undef useithreads=undef
</span><br>
<span class="quotelev2">&gt;&gt; usemultiplicity=undef
</span><br>
<span class="quotelev2">&gt;&gt;     useperlio=define d_sfio=undef uselargefiles=define usesocks=undef
</span><br>
<span class="quotelev2">&gt;&gt;     use64bitint=define use64bitall=define uselongdouble=undef
</span><br>
<span class="quotelev2">&gt;&gt;     usemymalloc=n, bincompat5005=undef
</span><br>
<span class="quotelev2">&gt;&gt;   Compiler:
</span><br>
<span class="quotelev2">&gt;&gt;     cc='/usr/bin/gcc-4.2', ccflags ='-O2 -arch x86_64 -fno-common
</span><br>
<span class="quotelev2">&gt;&gt; -DPERL_DARWIN -I/opt/local/include -no-cpp-precomp -fno-strict-aliasing
</span><br>
<span class="quotelev2">&gt;&gt; -pipe -I/usr/local/include -I/opt/local/include',
</span><br>
<span class="quotelev2">&gt;&gt;     optimize='-O3',
</span><br>
<span class="quotelev2">&gt;&gt;     cppflags='-I/opt/local/include -no-cpp-precomp -O2 -arch x86_64
</span><br>
<span class="quotelev2">&gt;&gt; -fno-common -DPERL_DARWIN -I/opt/local/include -no-cpp-precomp
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pipe -I/usr/local/include -I/opt/local/include'
</span><br>
<span class="quotelev2">&gt;&gt;     ccversion='', gccversion='4.2.1 (Apple Inc. build 5646) (dot 1)',
</span><br>
<span class="quotelev2">&gt;&gt; gccosandvers=''
</span><br>
<span class="quotelev2">&gt;&gt;     intsize=4, longsize=8, ptrsize=8, doublesize=8, byteorder=12345678
</span><br>
<span class="quotelev2">&gt;&gt;     d_longlong=define, longlongsize=8, d_longdbl=define, longdblsize=16
</span><br>
<span class="quotelev2">&gt;&gt;     ivtype='long', ivsize=8, nvtype='double', nvsize=8, Off_t='off_t',
</span><br>
<span class="quotelev2">&gt;&gt; lseeksize=8
</span><br>
<span class="quotelev2">&gt;&gt;     alignbytes=8, prototype=define
</span><br>
<span class="quotelev2">&gt;&gt;   Linker and Libraries:
</span><br>
<span class="quotelev2">&gt;&gt;     ld='env MACOSX_DEPLOYMENT_TARGET=10.3 /usr/bin/gcc-4.2', ldflags
</span><br>
<span class="quotelev2">&gt;&gt; ='-L/opt/local/lib -L/usr/local/lib'
</span><br>
<span class="quotelev2">&gt;&gt;     libpth=/usr/local/lib /opt/local/lib /usr/lib
</span><br>
<span class="quotelev2">&gt;&gt;     libs=-ldbm -ldl -lm -lutil -lc
</span><br>
<span class="quotelev2">&gt;&gt;     perllibs=-ldl -lm -lutil -lc
</span><br>
<span class="quotelev2">&gt;&gt;     libc=/usr/lib/libc.dylib, so=dylib, useshrplib=false,
</span><br>
<span class="quotelev2">&gt;&gt; libperl=libperl.a
</span><br>
<span class="quotelev2">&gt;&gt;     gnulibc_version=''
</span><br>
<span class="quotelev2">&gt;&gt;   Dynamic Linking:
</span><br>
<span class="quotelev2">&gt;&gt;     dlsrc=dl_dlopen.xs, dlext=bundle, d_dlsymun=undef, ccdlflags=' '
</span><br>
<span class="quotelev2">&gt;&gt;     cccdlflags=' ', lddlflags='-L/opt/local/lib -bundle -undefined
</span><br>
<span class="quotelev2">&gt;&gt; dynamic_lookup -L/usr/local/lib'
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Characteristics of this binary (from libperl):
</span><br>
<span class="quotelev2">&gt;&gt;   Compile-time options: PERL_MALLOC_WRAP USE_64_BIT_ALL USE_64_BIT_INT
</span><br>
<span class="quotelev2">&gt;&gt;                         USE_FAST_STDIO USE_LARGE_FILES USE_PERLIO
</span><br>
<span class="quotelev2">&gt;&gt;   Built under darwin
</span><br>
<span class="quotelev2">&gt;&gt;   Compiled at Feb 13 2010 13:19:33
</span><br>
<span class="quotelev2">&gt;&gt;   @INC:
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/site_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/site_perl/5.8.9
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/site_perl
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/vendor_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/vendor_perl/5.8.9
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/vendor_perl
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/5.8.9/darwin-2level
</span><br>
<span class="quotelev2">&gt;&gt;     /opt/local/lib/perl5/5.8.9
</span><br>
<span class="quotelev2">&gt;&gt;     .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 23, 2010 at 10:26 PM, Ralf Wildenhues &lt;&lt;Ralf.Wildenhues_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralf.Wildenhues_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wow, that's not good to hear.  I knew the perl ithreads implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wasn't all that efficient, but causing a deadlock sounds like you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more trouble than just perl; at least I hope so.  For reference, can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you send 'perl -V' output (if you like, to the bug-automake at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://gnu.org">http://gnu.org</a>&gt;gnu.org
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralf
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; * Ralph Castain wrote on Fri, Sep 24, 2010 at 03:12:16AM CEST:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I found one major negative to this change - it assumes that my build is
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; being done in exclusion of anything else on my computer. Unfortunately,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; is never true.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; So my laptop hemorrhaged itself into frozen silence, overheated to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; point
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; of being burning hot, and had to have its battery yanked to stop the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runaway
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; behavior. Not a really good thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; I would suggest you default this &quot;heuristic&quot; out, and let someone set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it to
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; use multiple runs if-and-only-if they want it. Hate to cite the lowest
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; common denominator, but this was a very nasty surprise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres &lt; &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Some of you may be unaware that recent versions of automake can run
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; parallel.  That is, automake will run in parallel with a degree of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (at most)
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; $AUTOMAKE_JOBS.  This can speed up the execution time of autogen.plquite
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; a bit on some platforms.  On my cluster at cisco, here's a few quick
</span><br>
<span class="quotelev3">&gt;&gt;&gt; timings
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; of the entire autogen.pl process (of which, automake is the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bottleneck):
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; value                    of autogen.pl
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 8                        3:01.46
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 4                        2:55.57
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 2                        3:28.09
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 1                        4:38.44
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; This is an older Xeon machine with 2 sockets, each with 2 cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; There's a nice performance jump from 1 to 2, and a smaller jump from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I just committed a heuristic to autogen.pl to setenv AUTOMAKE_JOBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; is not already set (&lt;<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; - If lstopo is found in your $PATH, runs it and count how many PU's
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; (processing units) you have.  It'll set AUTOMAKE_JOBS to that number,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or a
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; maximum of 4 (which is admittedly a further heuristic).
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; - If lstopo is not found, it just sets AUTOMAKE_JOBS to 2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Enjoy.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; &lt;jsquyres_at_[hidden]&gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; &lt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;devel_at_[hidden]&gt;devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8552/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8551.php">Ralf Wildenhues: "Re: [OMPI devel] update configury for Autoconf 2.68"</a>
<li><strong>In reply to:</strong> <a href="8549.php">Ralph Castain: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
