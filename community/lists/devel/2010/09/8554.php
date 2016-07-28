<?
$subject_val = "Re: [OMPI devel] Setting AUTOMAKE_JOBS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 23:56:39 2010" -->
<!-- isoreceived="20100925035639" -->
<!-- sent="Fri, 24 Sep 2010 23:55:22 -0400" -->
<!-- isosent="20100925035522" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Setting AUTOMAKE_JOBS" -->
<!-- id="777FE644-AFFB-469B-BA09-FC6A5C8E2412_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C9D67C7.7070102_at_lbl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 23:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would accept this behavior, at the condition that the threads are running at the lowest priority. This will give us the best of the two worlds, parallel build if the node is empty, and not a significant disturbance if I'm still busy around the computer.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>&quot;All the books in the world contain no more information than is broadcast as video in a single large American city in a single year. Not all bits have equal value.&quot;. -- Carl Sagan
<br>
<p>On Sep 24, 2010, at 23:08, &quot;Paul H. Hargrove&quot; &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I don't feel as strongly about this as Ralph, but do think the new behavior violates the &quot;principle of least surprise&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Been thinking about this more today, and I actually find this new &quot;feature&quot; disturbing. It bothers me that OMPI is now dictating that it will do a parallel build without my knowledge unless I specifically tell it not to. If it were technically possible, would we next force &quot;make -j4&quot;?? How would the developer community feel if the authors of &quot;make&quot; suddenly decided that it would run 4 parallel threads under the covers unless you specifically told it not to?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What bugs me here is that I now have to remember to set something in my environment to tell OMPI &quot;you don't get to hog all my processors&quot;. Maybe others twiddle their thumbs and leave the computer alone while OMPI builds, or maybe they rarely build - but I build frequently, and I am always multi-tasking my time (running Word, Powerpoint, etc.). So having OMPI default to running a parallel build is more than a little annoying - frankly, it pisses me off.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I really feel that this &quot;feature&quot; should be implemented as an option passed to autogen instead of a hidden forced behavior. If someone wants to run a parallel build, then by all means let them ask for it (ala &quot;make -j4&quot;). But don't just -do- it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Grrrr....
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 24, 2010 at 7:28 AM, Ralph Castain &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    I hope you'll understand if I don't run that test while on the
</span><br>
<span class="quotelev2">&gt;&gt;    road...one battery yank per week is my limit :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    On Fri, Sep 24, 2010 at 4:40 AM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev2">&gt;&gt;    &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        Also to clarify:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        - did autogen set am-jobs to 2 in your case?  (it should do
</span><br>
<span class="quotelev2">&gt;&gt;        that if lstopo is not found - it also limits itself to 4 at max)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        - in the same scenario, what happens if you manually set
</span><br>
<span class="quotelev2">&gt;&gt;        am-jobs to 1 and run autogen?  Ie do you get the same
</span><br>
<span class="quotelev2">&gt;&gt;        heat/sluggishness?  I have experienced vms causing this kind
</span><br>
<span class="quotelev2">&gt;&gt;        of behavior just because they are running - causing CPU and
</span><br>
<span class="quotelev2">&gt;&gt;        memory pressure. 
</span><br>
<span class="quotelev2">&gt;&gt;        Sent from my PDA. No type good. 
</span><br>
<span class="quotelev2">&gt;&gt;        On Sep 24, 2010, at 12:49 AM, &quot;Ralph Castain&quot;
</span><br>
<span class="quotelev2">&gt;&gt;        &lt;rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Sent to both for reference (see below)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Just to clarify. It wasn't a deadlock situation, but rather
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        that the machine was overloaded and running so hard that the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        response to keystrokes was multiple seconds. Thus, there was
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        no way to shut it down from the keyboard or screen. Even a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ctrl-c was just getting ignored for a very long time due to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        the overload.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        I was running vmware on my machine, and doing a heavy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        compile/build in it. On top of this, I had email, editor, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        browsers running - and then kicked off a fresh build in a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        terminal window. With Jeff's default settings, this latter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        build thought it would be running alone on the machine, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        promptly generated a number of threads equal to all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        processors. Since they were already loaded, this drove the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        machine into the ground.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        My point is just that it is unwise to assume that the OMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        build can utilize all available processors. I'm sure it's
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        fine for the MTT runs, especially on Jeff's machines as they
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        are dedicated to that purpose - just not a good general
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        assumption.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        HTH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ====================================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Output of &quot;perl -V&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Summary of my perl5 (revision 5 version 8 subversion 9)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        configuration:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Platform:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            osname=darwin, osvers=10.2.0, archname=darwin-2level
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            uname='darwin sjc-rcastain-87111.cisco.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;<a href="http://sjc-rcastain-87111.cisco.com">http://sjc-rcastain-87111.cisco.com</a>&gt; 10.2.0 darwin kernel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        version 10.2.0: tue nov 3 10:37:10 pst 2009;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        root:xnu-1486.2.11~1release_i386 i386 '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            config_args='-des -D prefix=/opt/local -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        scriptdir=/opt/local/bin -D cppflags=-I/opt/local/include -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ccflags=-O2 -arch x86_64 -D ldflags=-L/opt/local/lib -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        vendorprefix=/opt/local -D man1ext=1pm -D man3ext=3pm -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        cc=/usr/bin/gcc-4.2 -D ld=/usr/bin/gcc-4.2 -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        man1dir=/opt/local/share/man/man1p -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        man3dir=/opt/local/share/man/man3p -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        siteman1dir=/opt/local/share/man/man1 -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        siteman3dir=/opt/local/share/man/man3 -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        vendorman1dir=/opt/local/share/man/man1 -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        vendorman3dir=/opt/local/share/man/man3 -D
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        inc_version_list=5.8.8 5.8.8/darwin-2level -U i_bind -U
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        i_gdbm -U i_db'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            hint=recommended, useposix=true, d_sigaction=define
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            usethreads=undef use5005threads=undef useithreads=undef
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        usemultiplicity=undef
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            useperlio=define d_sfio=undef uselargefiles=define
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        usesocks=undef
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            use64bitint=define use64bitall=define uselongdouble=undef
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            usemymalloc=n, bincompat5005=undef
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Compiler:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            cc='/usr/bin/gcc-4.2', ccflags ='-O2 -arch x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -fno-common -DPERL_DARWIN -I/opt/local/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -no-cpp-precomp -fno-strict-aliasing -pipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -I/usr/local/include -I/opt/local/include',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            optimize='-O3',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            cppflags='-I/opt/local/include -no-cpp-precomp -O2 -arch
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        x86_64 -fno-common -DPERL_DARWIN -I/opt/local/include
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -no-cpp-precomp -fno-strict-aliasing -pipe
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -I/usr/local/include -I/opt/local/include'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ccversion='', gccversion='4.2.1 (Apple Inc. build 5646)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        (dot 1)', gccosandvers=''
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            intsize=4, longsize=8, ptrsize=8, doublesize=8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        byteorder=12345678
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            d_longlong=define, longlongsize=8, d_longdbl=define,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        longdblsize=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ivtype='long', ivsize=8, nvtype='double', nvsize=8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Off_t='off_t', lseeksize=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            alignbytes=8, prototype=define
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Linker and Libraries:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            ld='env MACOSX_DEPLOYMENT_TARGET=10.3 /usr/bin/gcc-4.2',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ldflags ='-L/opt/local/lib -L/usr/local/lib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            libpth=/usr/local/lib /opt/local/lib /usr/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            libs=-ldbm -ldl -lm -lutil -lc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            perllibs=-ldl -lm -lutil -lc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            libc=/usr/lib/libc.dylib, so=dylib, useshrplib=false,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        libperl=libperl.a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            gnulibc_version=''
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Dynamic Linking:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            dlsrc=dl_dlopen.xs, dlext=bundle, d_dlsymun=undef,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ccdlflags=' '
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            cccdlflags=' ', lddlflags='-L/opt/local/lib -bundle
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -undefined dynamic_lookup -L/usr/local/lib'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Characteristics of this binary (from libperl):           Compile-time options: PERL_MALLOC_WRAP USE_64_BIT_ALL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        USE_64_BIT_INT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                                USE_FAST_STDIO USE_LARGE_FILES USE_PERLIO
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Built under darwin
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Compiled at Feb 13 2010 13:19:33
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          @INC:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/site_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/site_perl/5.8.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/site_perl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/vendor_perl/5.8.9/darwin-2level
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/vendor_perl/5.8.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/vendor_perl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/5.8.9/darwin-2level
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            /opt/local/lib/perl5/5.8.9
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            .
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        On Thu, Sep 23, 2010 at 10:26 PM, Ralf Wildenhues
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;Ralf.Wildenhues_at_[hidden] &lt;mailto:Ralf.Wildenhues_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Hello Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            wow, that's not good to hear.  I knew the perl ithreads
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            implementation
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            wasn't all that efficient, but causing a deadlock sounds
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            like you have
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            more trouble than just perl; at least I hope so.  For
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            reference, can
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            you send 'perl -V' output (if you like, to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            bug-automake at gnu.org &lt;<a href="http://gnu.org">http://gnu.org</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            list).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            Ralf
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            * Ralph Castain wrote on Fri, Sep 24, 2010 at 03:12:16AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            CEST:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; I found one major negative to this change - it assumes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            that my build is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; being done in exclusion of anything else on my
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            computer. Unfortunately, this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; is never true.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; So my laptop hemorrhaged itself into frozen silence,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            overheated to the point
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; of being burning hot, and had to have its battery
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            yanked to stop the runaway
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; behavior. Not a really good thing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; I would suggest you default this &quot;heuristic&quot; out, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            let someone set it to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; use multiple runs if-and-only-if they want it. Hate to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            cite the lowest
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; common denominator, but this was a very nasty surprise.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt; On Wed, Sep 22, 2010 at 7:50 AM, Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;            &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; Some of you may be unaware that recent versions of
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            automake can run in
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; parallel.  That is, automake will run in parallel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            with a degree of (at most)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; $AUTOMAKE_JOBS.  This can speed up the execution time
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            of autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; quite
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; a bit on some platforms.  On my cluster at cisco,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            here's a few quick timings
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; of the entire autogen.pl &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; process
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            (of which, automake is the bottleneck):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; $AUTOMAKE_JOBS           Total wall time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; value                    of autogen.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; 8                        3:01.46
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; 4                        2:55.57
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; 2                        3:28.09
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; 1                        4:38.44
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; This is an older Xeon machine with 2 sockets, each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            with 2 cores.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; There's a nice performance jump from 1 to 2, and a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            smaller jump from 2 to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; 4.  4 and 8 are close enough to not matter.  YMMV.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; I just committed a heuristic to autogen.pl
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            &lt;<a href="http://autogen.pl">http://autogen.pl</a>&gt; to setenv AUTOMAKE_JOBS if it
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; is not already set
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            (<a href="https://svn.open-mpi.org/trac/ompi/changeset/23788">https://svn.open-mpi.org/trac/ompi/changeset/23788</a>):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; - If lstopo is found in your $PATH, runs it and count
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            how many PU's
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; (processing units) you have.  It'll set AUTOMAKE_JOBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            to that number, or a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; maximum of 4 (which is admittedly a further heuristic).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; - If lstopo is not found, it just sets AUTOMAKE_JOBS
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            to 2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; Enjoy.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;            &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;            <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;        _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;        devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;        devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Previous message:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>In reply to:</strong> <a href="8553.php">Paul H. Hargrove: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
<li><strong>Reply:</strong> <a href="8555.php">Jeff Squyres: "Re: [OMPI devel] Setting AUTOMAKE_JOBS"</a>
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
