<?
$subject_val = "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 13:17:50 2009" -->
<!-- isoreceived="20090410171750" -->
<!-- sent="Fri, 10 Apr 2009 13:17:43 -0400" -->
<!-- isosent="20090410171743" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib" -->
<!-- id="F5D294F6-8570-41A3-A836-7A077FC55D8D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49DE73CB.6090703_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 13:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8867.php">Francesco Pietra: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8874.php">Gus Correa: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8874.php">Gus Correa: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 9, 2009, at 6:16 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; The configure scripts seem to have changed, and work different
</span><br>
<span class="quotelev1">&gt; than before, particularly w.r.t. additional libraries like numa,
</span><br>
<span class="quotelev1">&gt; torque, and openib.
</span><br>
<span class="quotelev1">&gt; The new behavior can be a bit unexpected and puzzled me,
</span><br>
<span class="quotelev1">&gt; although eventually I could build 1.3.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, we put in this new functionality due to user requests.  See below.
<br>
<p><span class="quotelev1">&gt; Here are my observations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) I used to configure OpenMPI 1.2.8 and 1.3.0 with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr/lib64 \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This worked fine for me on the same computer I am using for 1.3.1.
</span><br>
<span class="quotelev1">&gt; However, with 1.3.1 the same options fail.
</span><br>
<span class="quotelev1">&gt; Configure now tries to find the corresponding include
</span><br>
<span class="quotelev1">&gt; files on /usr/lib64/include, a directory that doesn't even exist.
</span><br>
<span class="quotelev1">&gt; The include files are actually in /usr/include
</span><br>
<span class="quotelev1">&gt; (as the old configure knew well).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>What happened in the 1.2.x configure was that OMPI was adding -L/usr/ 
<br>
lib64/lib and trying to find the relevant libraries.  But since /usr/ 
<br>
lib64 was already in your linker's default search path, the relevant  
<br>
libraries were found without any addition flags from OMPI.   
<br>
Additionally, OMPI was also adding -I/usr/lib64/include to the compile  
<br>
path, but the relevant header files were found because they were in  
<br>
your compiler's default search path (likely /usr/include).  So both  
<br>
the added -I and -L flags were meaningless -- albeit harmless.
<br>
<p><span class="quotelev1">&gt; 2) Therefore, I tried to configure with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-libnuma \
</span><br>
<span class="quotelev1">&gt; --with-tm \
</span><br>
<span class="quotelev1">&gt; --with-openib \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that no directory is being pointed to.
</span><br>
<span class="quotelev1">&gt; My hope was that configure would find the libraries and includes  in
</span><br>
<span class="quotelev1">&gt; standard places (and hopefully the correct libs, 64-bit, not 32-bit).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>This *should* be fine.
<br>
<p><span class="quotelev1">&gt; This way configure completes with no apparent error.
</span><br>
<span class="quotelev1">&gt; However, I get this funny error on the make phase:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /bin/sh ../../../../libtool --tag=CC   --mode=link gcc  -DNDEBUG
</span><br>
<span class="quotelev1">&gt; -march=amdfam10 -O3 -finline-functions -funroll-loops -mfpmath=sse
</span><br>
<span class="quotelev1">&gt; -fno-strict-aliasing -pthread -fvisibility=hidden -module -avoid- 
</span><br>
<span class="quotelev1">&gt; version
</span><br>
<span class="quotelev1">&gt; -Lyes/lib -export-dynamic   -o libmca_maffinity_libnuma.la
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_component.lo maffinity_libnuma_module.lo -lnuma  - 
</span><br>
<span class="quotelev1">&gt; lnsl
</span><br>
<span class="quotelev1">&gt; -lutil  -lm
</span><br>
<span class="quotelev1">&gt; ../../../../libtool: line 4998: cd: yes/lib: No such file or directory
</span><br>
<span class="quotelev1">&gt; libtool: link: cannot determine absolute directory name of `yes/lib'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmca_maffinity_libnuma.la] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Huh.  That's odd.
<br>
<p><span class="quotelev1">&gt; Note the &quot;yes/lib&quot; path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A little grep on config.log showed why the error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; %grep yes config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI_WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
</span><br>
<span class="quotelev1">&gt; OPAL_WRAPPER_EXTRA_LDFLAGS='-Lyes/lib  '
</span><br>
<span class="quotelev1">&gt; ORTE_WRAPPER_EXTRA_LDFLAGS=' -Lyes/lib  '
</span><br>
<span class="quotelev1">&gt; WRAPPER_EXTRA_LDFLAGS='  -Lyes/lib  '
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_CPPFLAGS=' -Iyes/include'
</span><br>
<span class="quotelev1">&gt; maffinity_libnuma_LDFLAGS=' -Lyes/lib'
</span><br>
<span class="quotelev1">&gt; #define WRAPPER_EXTRA_LDFLAGS &quot;  -Lyes/lib  &quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this an internal &quot;yes&quot; answer to configure that
</span><br>
<span class="quotelev1">&gt; is being inadvertently caught/interpreted as a directory name?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Ah, crud.  Probably so, yes.
<br>
<p>(/me double checks libnuma's m4 setup... crud; I can replicate the  
<br>
problem.  I'll try to commit a fix this afternoon so that it can be  
<br>
included in 1.3.2)
<br>
<p><span class="quotelev1">&gt; Since configure seems to have found the libraries and include files,
</span><br>
<span class="quotelev1">&gt; and completed without error,
</span><br>
<span class="quotelev1">&gt; shouldn't it also have reported the correct paths to config.log
</span><br>
<span class="quotelev1">&gt; and written them correctly to the Makefiles?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) Finally I tried this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --with-libnuma=/usr \
</span><br>
<span class="quotelev1">&gt; --with-tm=/usr \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This approach was suggested by Prentice Bisbal a few days ago,
</span><br>
<span class="quotelev1">&gt; when Francesco Pietra reported on this list
</span><br>
<span class="quotelev1">&gt; having a similar problem with libnuma.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to work fine, and OpenMPI 1.3.1 builds.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Good.  FWIW, you probably don't need to specify any of these.  More  
<br>
below.
<br>
<p>Generally, unless you specify --without-&lt;foo&gt;, OMPI will look for  
<br>
feature &lt;foo&gt; in the default paths.  If the feature is found, then  
<br>
OMPI uses it.  If the feature is not found, OMPI just skips it.   
<br>
Specifying --with-&lt;foo&gt; is supposed to indicate to OMPI's configure  
<br>
&quot;yes, I definitely want this feature&quot; (regardless of whether you  
<br>
specified a directory or not), meaning that if OMPI can't find that  
<br>
feature, configure will abort on the rationale that you specifically  
<br>
asked for something but we can't deliver it.  So abort and let a human  
<br>
figure it out.
<br>
<p><span class="quotelev1">&gt; However, I have more questions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Here's the general scheme that OMPI's configure uses:
<br>
<p>- if --without-&lt;foo&gt; is specified, OMPI's configure doesn't look for  
<br>
feature &lt;foo&gt; and just skips it
<br>
- if neither --with-&lt;foo&gt; nor --without-&lt;foo&gt; are specified, OMPI  
<br>
looks for feature &lt;foo&gt;.  If the feature is found, use it.  If not,  
<br>
skip it.
<br>
- if --with-&lt;foo&gt; is specified (with or without a directory), OMPI  
<br>
looks for feature &lt;foo&gt;.  If the feature is not found, abort configure  
<br>
on the rationale that you specifically asked for a feature that  
<br>
configure can't deliver, so abort and let a human figure it out.
<br>
- if --with-&lt;foo&gt; is specified (without a directory), OMPI should look  
<br>
for the feature in the default compiler/linker paths
<br>
- if --with-&lt;foo&gt;=directory is specified, OMPI should look for the  
<br>
feature in the specified compiler/linker paths, and abort if it can't  
<br>
find those paths
<br>
<p>The last part (&quot;abort if it can't find those paths&quot;) was added in v1.3  
<br>
because some users were specifying --with-&lt;foo&gt;=/some/nonexistent/path  
<br>
and still having configure succeed by accidentally using some system- 
<br>
default version of &lt;foo&gt; rather than a specific version of &lt;foo&gt; that  
<br>
was installed in a non-default location.  This caused no end of  
<br>
confusion until they realized that they had a typo in the directory  
<br>
name specified to --with-&lt;foo&gt;=&lt;dir&gt;.  Then OMPI got blamed.  :-)  So  
<br>
we added sanity checks to ensure that the directories that are  
<br>
specified and that we look for that are derived from the specified  
<br>
directories actually exist.
<br>
<p>Does that help?
<br>
<p><span class="quotelev1">&gt; A)Is the directory name mandatory or optional in the options above?
</span><br>
<span class="quotelev1">&gt; I.e. is &quot;--with-libnuma&quot; only OK, or do I have to use
</span><br>
<span class="quotelev1">&gt; &quot;--with-libnuma=/some/directory&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>It should be optional.
<br>
<p><span class="quotelev1">&gt; The results in 2) above suggest that configure finds the libraries and
</span><br>
<span class="quotelev1">&gt; includes correctly, but that it writes wrong Makefiles,
</span><br>
<span class="quotelev1">&gt; and doesn't report any error either.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>There's likely a bug in our --with-libnuma handling that is taking the  
<br>
default value from configure (&quot;yes&quot;) and treating it as a directory  
<br>
instead of just an indicator that you want libnuma support.  I'll fix  
<br>
it.
<br>
<p><span class="quotelev1">&gt; B) Is the syntax in 3) above the only correct possibility?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You should be able to leave off all those --with options, but then  
<br>
OMPI's configure will happily trundle through if it *doesn't* find  
<br>
those 3 features.  So option 3) is definitely safest because OMPI's  
<br>
configure will abort if it doesn't find them (leaving you with an  
<br>
unexpectedly feature-poor OMPI installation).
<br>
<p><span class="quotelev1">&gt; C) If it is, can I rest assured that configure and make
</span><br>
<span class="quotelev1">&gt; will find the right 64-bit libraries, not 32-bit libraries
</span><br>
<span class="quotelev1">&gt; of similar name?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>OMPI will only successfully link against the Right libraries for  
<br>
whatever flavor you're building.  If you have told your compiler to  
<br>
build 64 bit versions of OMPI (or your compiler simply defaults to 64  
<br>
bit), then the linker will only allow OMPI to link successfully  
<br>
against the 64 bit libraries (in Linux; in other OS's, it may be  
<br>
different -- such as OS X).
<br>
<p><span class="quotelev1">&gt; I ask because I have /usr/lib/libnuma.so.1 (32-bit ELF),
</span><br>
<span class="quotelev1">&gt; and /usr/lib64/libnuma.so.1 (64-bit ELF), and both are in the
</span><br>
<span class="quotelev1">&gt; same /usr directory that I gave to configure (--with-libnuma=/usr).
</span><br>
<span class="quotelev1">&gt; (Well, maybe this is deferred to the compiler to decide,
</span><br>
<span class="quotelev1">&gt; whether it is a 64- or 32-bit compiler, as somehow it seemed to work.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Yep, we try both &lt;dir&gt;/lib and &lt;dir&gt;/lib64 when directories are  
<br>
specified.  Also, both /usr/lib and /usr/lib64 are likely in your  
<br>
linker's default search path.  So even if you hadn't specified --with- 
<br>
libnuma=/usr, then the default linker search path would have found / 
<br>
usr/lib64/libnuma.so.1.
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
<li><strong>Next message:</strong> <a href="8867.php">Francesco Pietra: "Re: [OMPI users] Fwd: shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8865.php">Jeff Squyres: "Re: [OMPI users] mpirun: symbol lookup error:/usr/local/lib/openmpi/mca_plm_lsf.so: undefined symbol: ls b_init"</a>
<li><strong>In reply to:</strong> <a href="8853.php">Gus Correa: "[OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8874.php">Gus Correa: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
<li><strong>Reply:</strong> <a href="8874.php">Gus Correa: "Re: [OMPI users] Problems configuring OpenMPI 1.3.1 with numa, torque, and openib"</a>
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
