<?
$subject_val = "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 23 14:33:14 2008" -->
<!-- isoreceived="20081223193314" -->
<!-- sent="Tue, 23 Dec 2008 14:33:07 -0500" -->
<!-- isosent="20081223193307" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX" -->
<!-- id="1114C40F-CD8D-4787-9BF2-49CB133AE6A2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081222174207.GA245_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-23 14:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, it works for me...  :-\
<br>
<p>With initial install dir of /home/jsquyres/bogus (in my $path and  
<br>
$LD_LIBRARY_PATH already):
<br>
<p>[11:30] svbu-mpi:~/mpi % mpicc hello.c -o hello
<br>
[11:30] svbu-mpi:~/mpi % mpirun -np 2 hello
<br>
stdout: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
<br>
stdout: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
<br>
stderr: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
<br>
stderr: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
<br>
<p>Now let's move it
<br>
<p>[11:30] svbu-mpi:~/mpi % cd
<br>
[11:31] svbu-mpi:~ % cd /home/jsquyres/
<br>
[11:31] svbu-mpi:/home/jsquyres % mv bogus bogus-bogus
<br>
[11:31] svbu-mpi:/home/jsquyres % set path = (/home/jsquyres/bogus- 
<br>
bogus/bin $path)
<br>
[11:31] svbu-mpi:/home/jsquyres % setenv LD_LIBRARY_PATH /home/ 
<br>
jsquyres/bogus-bogus/lib:$LD_LIBRARY_PATH
<br>
[11:31] svbu-mpi:/home/jsquyres % cd
<br>
<p>Confirm that it's broken:
<br>
<p>[11:31] svbu-mpi:~ % cd mpi
<br>
[11:31] svbu-mpi:~/mpi % !mpir
<br>
mpirun -np 2 hello
<br>
--------------------------------------------------------------------------
<br>
Sorry!  You were supposed to get help about:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_init:startup:internal-failure
<br>
from the file:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;help-opal-runtime.txt
<br>
But I couldn't find any file matching that name.  Sorry!
<br>
--------------------------------------------------------------------------
<br>
[svbu-mpi.cisco.com:23042] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
<br>
found in file runtime/orte_init.c at line 77
<br>
[svbu-mpi.cisco.com:23042] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
<br>
found in file orterun.c at line 493
<br>
<p>Now try with OPAL_PREFIX:
<br>
<p>[11:31] svbu-mpi:~/mpi % setenv OPAL_PREFIX /home/jsquyres/bogus-bogus
<br>
[11:31] svbu-mpi:~/mpi % mpirun -np 2 hello
<br>
stdout: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
<br>
stderr: Hello, world!  I am 0 of 2 (svbu-mpi.cisco.com)
<br>
stdout: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
<br>
stderr: Hello, world!  I am 1 of 2 (svbu-mpi.cisco.com)
<br>
[11:31] svbu-mpi:~/mpi %
<br>
<p>I don't know what you'd like from config.log -- I configured it with a  
<br>
simple:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$ ./configure --prefix=/home/jsquyres/bogus
<br>
<p><p><p>On Dec 22, 2008, at 12:42 PM, Ethan Mallove wrote:
<br>
<p><span class="quotelev1">&gt; Can anyone get OPAL_PREFIX to work on Linux? A simple test is to see
</span><br>
<span class="quotelev1">&gt; if the following works for any mpicc/mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  $ mv &lt;openmpi-installation&gt; /tmp/foo
</span><br>
<span class="quotelev1">&gt;  $ set OPAL_PREFIX /tmp/foo
</span><br>
<span class="quotelev1">&gt;  $ mpicc ...
</span><br>
<span class="quotelev1">&gt;  $ mpirun ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you are able to get the above to run successfully, I'm interested
</span><br>
<span class="quotelev1">&gt; in your config.log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec/18/2008 11:03:25AM, Ethan Mallove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The below FAQ lists instructions on how to use a relocated Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; installation:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  <a href="http://www.open-mpi.org/faq/?category=building#installdirs">http://www.open-mpi.org/faq/?category=building#installdirs</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Solaris, OPAL_PREFIX and friends (documented in the FAQ) work for
</span><br>
<span class="quotelev2">&gt;&gt; me with both MPI (hello_c) and non-MPI (hostname) programs. On Linux,
</span><br>
<span class="quotelev2">&gt;&gt; I can only get the non-MPI case to work. Here are the environment
</span><br>
<span class="quotelev2">&gt;&gt; variables I am setting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ cat setenv_opal_prefix.csh
</span><br>
<span class="quotelev2">&gt;&gt;  set opal_prefix = &quot;/opt/openmpi-relocated&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_PREFIX         $opal_prefix
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_BINDIR         $opal_prefix/bin
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_SBINDIR        $opal_prefix/sbin
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_DATAROOTDIR    $opal_prefix/share
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_SYSCONFDIR     $opal_prefix/etc
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_SHAREDSTATEDIR $opal_prefix/com
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_LOCALSTATEDIR  $opal_prefix/var
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_LIBDIR         $opal_prefix/lib
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_INCLUDEDIR     $opal_prefix/include
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_INFODIR        $opal_prefix/info
</span><br>
<span class="quotelev2">&gt;&gt;  setenv OPAL_MANDIR         $opal_prefix/man
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  setenv PATH $opal_prefix/bin:$PATH
</span><br>
<span class="quotelev2">&gt;&gt;  setenv LD_LIBRARY_PATH $opal_prefix/lib:$opal_prefix/lib/64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is the error I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  $ mpirun -np 2 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  It looks like opal_init failed for some reason; your parallel  
</span><br>
<span class="quotelev2">&gt;&gt; process is
</span><br>
<span class="quotelev2">&gt;&gt;  likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev2">&gt;&gt;  fail during opal_init; some of which are due to configuration or
</span><br>
<span class="quotelev2">&gt;&gt;  environment problems.  This failure appears to be an internal  
</span><br>
<span class="quotelev2">&gt;&gt; failure;
</span><br>
<span class="quotelev2">&gt;&gt;  here's some additional information (which may only be relevant to an
</span><br>
<span class="quotelev2">&gt;&gt;  Open MPI developer):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    opal_carto_base_select failed
</span><br>
<span class="quotelev2">&gt;&gt;    --&gt; Returned value -13 instead of OPAL_SUCCESS
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;  [burl-ct-v20z-0:27737] [[INVALID],INVALID] ORTE_ERROR_LOG: Not  
</span><br>
<span class="quotelev2">&gt;&gt; found in file runtime/orte_init.c at line 77
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas on what's going on?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7587.php">Win Than Aung: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>Previous message:</strong> <a href="7585.php">Jeff Squyres: "Re: [OMPI users] sending message to the source(0) from other processors"</a>
<li><strong>In reply to:</strong> <a href="7571.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using OPAL_PREFIX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
<li><strong>Reply:</strong> <a href="7589.php">Ethan Mallove: "Re: [OMPI users] Relocating an Open MPI installation using	OPAL_PREFIX"</a>
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
