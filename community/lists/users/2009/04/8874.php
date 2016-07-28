<?
$subject_val = "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 18:41:54 2009" -->
<!-- isoreceived="20090410224154" -->
<!-- sent="Fri, 10 Apr 2009 18:41:44 -0400" -->
<!-- isosent="20090410224144" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib" -->
<!-- id="49DFCB28.1020606_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F5D294F6-8570-41A3-A836-7A077FC55D8D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 18:41:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8875.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8873.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8877.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8877.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thank you very much for the thorough explanation.
<br>
The OpenMPI configure script rationale and design,
<br>
as you described them, are wise and clear.
<br>
They avoid tricking the user or making decisions
<br>
that he/she may not want, but make the right decisions
<br>
when the user defers them to OpenMPI.
<br>
<p>I would suggest that you cut and paste the part of your message
<br>
where you explain the way the OpenMPI configure script works,
<br>
and make it either a FAQ or part of the README file,
<br>
for better visibility, if this material is not yet there.
<br>
Your explanation is very helpful indeed,
<br>
and should benefit other users besides me.
<br>
<p>And yes/lib :), I could build 1.3.1 right,
<br>
with numa, torque, and openib!
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 9, 2009, at 6:16 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The configure scripts seem to have changed, and work different
</span><br>
<span class="quotelev2">&gt;&gt; than before, particularly w.r.t. additional libraries like numa,
</span><br>
<span class="quotelev2">&gt;&gt; torque, and openib.
</span><br>
<span class="quotelev2">&gt;&gt; The new behavior can be a bit unexpected and puzzled me,
</span><br>
<span class="quotelev2">&gt;&gt; although eventually I could build 1.3.1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, we put in this new functionality due to user requests.  See below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are my observations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I used to configure OpenMPI 1.2.8 and 1.3.0 with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/usr/lib64 \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This worked fine for me on the same computer I am using for 1.3.1.
</span><br>
<span class="quotelev2">&gt;&gt; However, with 1.3.1 the same options fail.
</span><br>
<span class="quotelev2">&gt;&gt; Configure now tries to find the corresponding include
</span><br>
<span class="quotelev2">&gt;&gt; files on /usr/lib64/include, a directory that doesn't even exist.
</span><br>
<span class="quotelev2">&gt;&gt; The include files are actually in /usr/include
</span><br>
<span class="quotelev2">&gt;&gt; (as the old configure knew well).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happened in the 1.2.x configure was that OMPI was adding 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib64/lib and trying to find the relevant libraries.  But since 
</span><br>
<span class="quotelev1">&gt; /usr/lib64 was already in your linker's default search path, the 
</span><br>
<span class="quotelev1">&gt; relevant libraries were found without any addition flags from OMPI.  
</span><br>
<span class="quotelev1">&gt; Additionally, OMPI was also adding -I/usr/lib64/include to the compile 
</span><br>
<span class="quotelev1">&gt; path, but the relevant header files were found because they were in your 
</span><br>
<span class="quotelev1">&gt; compiler's default search path (likely /usr/include).  So both the added 
</span><br>
<span class="quotelev1">&gt; -I and -L flags were meaningless -- albeit harmless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) Therefore, I tried to configure with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Note that no directory is being pointed to.
</span><br>
<span class="quotelev2">&gt;&gt; My hope was that configure would find the libraries and includes  in
</span><br>
<span class="quotelev2">&gt;&gt; standard places (and hopefully the correct libs, 64-bit, not 32-bit).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This *should* be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This way configure completes with no apparent error.
</span><br>
<span class="quotelev2">&gt;&gt; However, I get this funny error on the make phase:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -DNDEBUG
</span><br>
<span class="quotelev2">&gt;&gt; -march=amdfam10 -O3 -finline-functions -funroll-loops -mfpmath=sse
</span><br>
<span class="quotelev2">&gt;&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -module -avoid-version
</span><br>
<span class="quotelev2">&gt;&gt; -Lyes/lib -export-dynamic   -o libmca_maffinity_libnuma.la
</span><br>
<span class="quotelev2">&gt;&gt; maffinity_libnuma_component.lo maffinity_libnuma_module.lo -lnuma  -lnsl
</span><br>
<span class="quotelev2">&gt;&gt; -lutil  -lm
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../libtool: line 4998: cd: yes/lib: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt; libtool: link: cannot determine absolute directory name of `yes/lib'
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [libmca_maffinity_libnuma.la] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Huh.  That's odd.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note the &quot;yes/lib&quot; path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A little grep on config.log showed why the error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; %grep yes config.log
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_WRAPPER_EXTRA_LDFLAGS='-Lyes/lib  '
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_WRAPPER_EXTRA_LDFLAGS=' -Lyes/lib  '
</span><br>
<span class="quotelev2">&gt;&gt; WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
</span><br>
<span class="quotelev2">&gt;&gt; maffinity_libnuma_CPPFLAGS=' -Iyes/include'
</span><br>
<span class="quotelev2">&gt;&gt; maffinity_libnuma_LDFLAGS=' -Lyes/lib'
</span><br>
<span class="quotelev2">&gt;&gt; #define WRAPPER_EXTRA_LDFLAGS &quot;  -Lyes/lib  &quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this an internal &quot;yes&quot; answer to configure that
</span><br>
<span class="quotelev2">&gt;&gt; is being inadvertently caught/interpreted as a directory name?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, crud.  Probably so, yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (/me double checks libnuma's m4 setup... crud; I can replicate the 
</span><br>
<span class="quotelev1">&gt; problem.  I'll try to commit a fix this afternoon so that it can be 
</span><br>
<span class="quotelev1">&gt; included in 1.3.2)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Since configure seems to have found the libraries and include files,
</span><br>
<span class="quotelev2">&gt;&gt; and completed without error,
</span><br>
<span class="quotelev2">&gt;&gt; shouldn't it also have reported the correct paths to config.log
</span><br>
<span class="quotelev2">&gt;&gt; and written them correctly to the Makefiles?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Finally I tried this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --with-tm=/usr \
</span><br>
<span class="quotelev2">&gt;&gt; --with-openib=/usr \
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This approach was suggested by Prentice Bisbal a few days ago,
</span><br>
<span class="quotelev2">&gt;&gt; when Francesco Pietra reported on this list
</span><br>
<span class="quotelev2">&gt;&gt; having a similar problem with libnuma.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to work fine, and OpenMPI 1.3.1 builds.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good.  FWIW, you probably don't need to specify any of these.  More below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Generally, unless you specify --without-&lt;foo&gt;, OMPI will look for 
</span><br>
<span class="quotelev1">&gt; feature &lt;foo&gt; in the default paths.  If the feature is found, then OMPI 
</span><br>
<span class="quotelev1">&gt; uses it.  If the feature is not found, OMPI just skips it.  Specifying 
</span><br>
<span class="quotelev1">&gt; --with-&lt;foo&gt; is supposed to indicate to OMPI's configure &quot;yes, I 
</span><br>
<span class="quotelev1">&gt; definitely want this feature&quot; (regardless of whether you specified a 
</span><br>
<span class="quotelev1">&gt; directory or not), meaning that if OMPI can't find that feature, 
</span><br>
<span class="quotelev1">&gt; configure will abort on the rationale that you specifically asked for 
</span><br>
<span class="quotelev1">&gt; something but we can't deliver it.  So abort and let a human figure it out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, I have more questions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's the general scheme that OMPI's configure uses:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - if --without-&lt;foo&gt; is specified, OMPI's configure doesn't look for 
</span><br>
<span class="quotelev1">&gt; feature &lt;foo&gt; and just skips it
</span><br>
<span class="quotelev1">&gt; - if neither --with-&lt;foo&gt; nor --without-&lt;foo&gt; are specified, OMPI looks 
</span><br>
<span class="quotelev1">&gt; for feature &lt;foo&gt;.  If the feature is found, use it.  If not, skip it.
</span><br>
<span class="quotelev1">&gt; - if --with-&lt;foo&gt; is specified (with or without a directory), OMPI looks 
</span><br>
<span class="quotelev1">&gt; for feature &lt;foo&gt;.  If the feature is not found, abort configure on the 
</span><br>
<span class="quotelev1">&gt; rationale that you specifically asked for a feature that configure can't 
</span><br>
<span class="quotelev1">&gt; deliver, so abort and let a human figure it out.
</span><br>
<span class="quotelev1">&gt; - if --with-&lt;foo&gt; is specified (without a directory), OMPI should look 
</span><br>
<span class="quotelev1">&gt; for the feature in the default compiler/linker paths
</span><br>
<span class="quotelev1">&gt; - if --with-&lt;foo&gt;=directory is specified, OMPI should look for the 
</span><br>
<span class="quotelev1">&gt; feature in the specified compiler/linker paths, and abort if it can't 
</span><br>
<span class="quotelev1">&gt; find those paths
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The last part (&quot;abort if it can't find those paths&quot;) was added in v1.3 
</span><br>
<span class="quotelev1">&gt; because some users were specifying --with-&lt;foo&gt;=/some/nonexistent/path 
</span><br>
<span class="quotelev1">&gt; and still having configure succeed by accidentally using some 
</span><br>
<span class="quotelev1">&gt; system-default version of &lt;foo&gt; rather than a specific version of &lt;foo&gt; 
</span><br>
<span class="quotelev1">&gt; that was installed in a non-default location.  This caused no end of 
</span><br>
<span class="quotelev1">&gt; confusion until they realized that they had a typo in the directory name 
</span><br>
<span class="quotelev1">&gt; specified to --with-&lt;foo&gt;=&lt;dir&gt;.  Then OMPI got blamed.  :-)  So we 
</span><br>
<span class="quotelev1">&gt; added sanity checks to ensure that the directories that are specified 
</span><br>
<span class="quotelev1">&gt; and that we look for that are derived from the specified directories 
</span><br>
<span class="quotelev1">&gt; actually exist.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; A)Is the directory name mandatory or optional in the options above?
</span><br>
<span class="quotelev2">&gt;&gt; I.e. is &quot;--with-libnuma&quot; only OK, or do I have to use
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--with-libnuma=/some/directory&quot;?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be optional.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The results in 2) above suggest that configure finds the libraries and
</span><br>
<span class="quotelev2">&gt;&gt; includes correctly, but that it writes wrong Makefiles,
</span><br>
<span class="quotelev2">&gt;&gt; and doesn't report any error either.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's likely a bug in our --with-libnuma handling that is taking the 
</span><br>
<span class="quotelev1">&gt; default value from configure (&quot;yes&quot;) and treating it as a directory 
</span><br>
<span class="quotelev1">&gt; instead of just an indicator that you want libnuma support.  I'll fix it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; B) Is the syntax in 3) above the only correct possibility?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You should be able to leave off all those --with options, but then 
</span><br>
<span class="quotelev1">&gt; OMPI's configure will happily trundle through if it *doesn't* find those 
</span><br>
<span class="quotelev1">&gt; 3 features.  So option 3) is definitely safest because OMPI's configure 
</span><br>
<span class="quotelev1">&gt; will abort if it doesn't find them (leaving you with an unexpectedly 
</span><br>
<span class="quotelev1">&gt; feature-poor OMPI installation).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; C) If it is, can I rest assured that configure and make
</span><br>
<span class="quotelev2">&gt;&gt; will find the right 64-bit libraries, not 32-bit libraries
</span><br>
<span class="quotelev2">&gt;&gt; of similar name?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI will only successfully link against the Right libraries for 
</span><br>
<span class="quotelev1">&gt; whatever flavor you're building.  If you have told your compiler to 
</span><br>
<span class="quotelev1">&gt; build 64 bit versions of OMPI (or your compiler simply defaults to 64 
</span><br>
<span class="quotelev1">&gt; bit), then the linker will only allow OMPI to link successfully against 
</span><br>
<span class="quotelev1">&gt; the 64 bit libraries (in Linux; in other OS's, it may be different -- 
</span><br>
<span class="quotelev1">&gt; such as OS X).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask because I have /usr/lib/libnuma.so.1 (32-bit ELF),
</span><br>
<span class="quotelev2">&gt;&gt; and /usr/lib64/libnuma.so.1 (64-bit ELF), and both are in the
</span><br>
<span class="quotelev2">&gt;&gt; same /usr directory that I gave to configure (--with-libnuma=/usr).
</span><br>
<span class="quotelev2">&gt;&gt; (Well, maybe this is deferred to the compiler to decide,
</span><br>
<span class="quotelev2">&gt;&gt; whether it is a 64- or 32-bit compiler, as somehow it seemed to work.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yep, we try both &lt;dir&gt;/lib and &lt;dir&gt;/lib64 when directories are 
</span><br>
<span class="quotelev1">&gt; specified.  Also, both /usr/lib and /usr/lib64 are likely in your 
</span><br>
<span class="quotelev1">&gt; linker's default search path.  So even if you hadn't specified 
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr, then the default linker search path would have 
</span><br>
<span class="quotelev1">&gt; found /usr/lib64/libnuma.so.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8875.php">Ankush Kaul: "Re: [OMPI users] Problem with running openMPI program"</a>
<li><strong>Previous message:</strong> <a href="8873.php">Steve Kargl: "Re: [OMPI users] Factor of 10 loss in performance with 1.3.x"</a>
<li><strong>In reply to:</strong> <a href="8866.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8877.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8877.php">Jeff Squyres: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
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
