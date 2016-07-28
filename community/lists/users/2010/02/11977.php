<?
$subject_val = "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 18:06:39 2010" -->
<!-- isoreceived="20100202230639" -->
<!-- sent="Tue, 2 Feb 2010 18:06:24 -0500" -->
<!-- isosent="20100202230624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0" -->
<!-- id="038DF3CD-85DE-4DA9-B8A5-115EFF8F412F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4663A30C7056FE4E8EBD7BD0AB9E6B8665D913_at_ntsrv-exch02.jetnet.jet.efda.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 18:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11959.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report!
<br>
<p>I puzzled over your text for a while before I figured out what I think the problem is -- I think the argument you've given to --with-valgrind is the *source* tree for Valgrind.  You actually want to give the *installation* directory as the argument to --with-valgrind.
<br>
<p>Indeed, I downloaded Valgrind 3.5.0 and installed it to /opt/valgrind/3.5.0 and was able to build Open MPI --with-valgrind=/opt/valgrind/3.5.0 --enable-memchecker with no problems.
<br>
<p>Can you could check that your --with-valgrind argument is actually the installation directory, not the source directory?
<br>
<p><p><p>On Feb 2, 2010, at 6:23 AM, Conboy, James wrote:
<br>
<p><span class="quotelev1">&gt; Hi - 
</span><br>
<span class="quotelev1">&gt;         configure failed the VALGRIND_CHECK_MEM_IS_ADDRESSABLE test, for openmpi-1.3.3 or -1.4 with Valgrind 3.5.0 -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ran configure with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ! /bin/csh 
</span><br>
<span class="quotelev1">&gt; #!  run configure 
</span><br>
<span class="quotelev1">&gt; # 
</span><br>
<span class="quotelev1">&gt; ../configure --prefix=/home/pshare/lib/lf95/openmpi-Vg-1.3.3         \ 
</span><br>
<span class="quotelev1">&gt;              FC=`which lf95` F77=`which lf95`                        \ 
</span><br>
<span class="quotelev1">&gt;              --with-sge                                              \ 
</span><br>
<span class="quotelev1">&gt;              --enable-debug                                          \ 
</span><br>
<span class="quotelev1">&gt;                --enable-memchecker                                     \ 
</span><br>
<span class="quotelev1">&gt;              --with-valgrind=/home/pshare/lib/source/valgrind-3.5.0  \ 
</span><br>
<span class="quotelev1">&gt;              --with-memory-manager=none                              \ 
</span><br>
<span class="quotelev2">&gt;                                          &gt;&amp; configure.log
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &amp; the log ( attached ) ends with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +++ Configuring MCA framework memchecker 
</span><br>
<span class="quotelev1">&gt; checking for no configure components in framework memchecker... 
</span><br>
<span class="quotelev1">&gt; checking for m4 configure components in framework memchecker... valgrind
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- MCA component memchecker:valgrind (m4 configuration macro) 
</span><br>
<span class="quotelev1">&gt; checking for MCA component memchecker:valgrind compile mode... static 
</span><br>
<span class="quotelev1">&gt; checking --with-valgrind value... sanity check ok (/home/pshare/lib/source/valgrind-3.5.0) 
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h usability... yes 
</span><br>
<span class="quotelev1">&gt; checking valgrind/valgrind.h presence... yes 
</span><br>
<span class="quotelev1">&gt; checking for valgrind/valgrind.h... yes 
</span><br>
<span class="quotelev1">&gt; checking for VALGRIND_CHECK_MEM_IS_ADDRESSABLE... no 
</span><br>
<span class="quotelev1">&gt; configure: error: Need Valgrind version 3.2.0 or later. Can not build component.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Some valgrind header files are not where configure expects to find them ; to get this far, I added some links .. 
</span><br>
<span class="quotelev1">&gt; ./valgrind-3.5.0/include/valgrind/valgrind.h -&gt; ../valgrind.h 
</span><br>
<span class="quotelev1">&gt; ./valgrind-3.5.0/memcheck.h -&gt; memcheck/memcheck.h 
</span><br>
<span class="quotelev1">&gt;         ..  not a good omen, so no surprise it didn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ See valgrind-3.5.0/NEWS :- 
</span><br>
<span class="quotelev1">&gt;   - The location of some install files has changed.  This should not 
</span><br>
<span class="quotelev1">&gt;     affect most users.  Those who might be affected:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     * For people who use Valgrind with MPI programs, the installed 
</span><br>
<span class="quotelev1">&gt;       libmpiwrap.so library has moved from 
</span><br>
<span class="quotelev1">&gt;       $(INSTALL)/&lt;platform&gt;/libmpiwrap.so to 
</span><br>
<span class="quotelev1">&gt;       $(INSTALL)/libmpiwrap-&lt;platform&gt;.so.                             ]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configure tidies up in a very determined manner, so I don't have the files it used for the failing test. In any case, its likely that the problem is deeper than just some header files having moved around.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I also downloaded Valgrind 3.2.1 from their archive, but couldn't configure this locally -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking the glibc version... unsupported version 
</span><br>
<span class="quotelev1">&gt; configure: error: Valgrind requires glibc version 2.2, 2.3 or 2.4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; while 
</span><br>
<span class="quotelev2">&gt; &gt;rpm -q glibc 
</span><br>
<span class="quotelev1">&gt; glibc-2.9-3.i686
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Persuading sysadmin to roll back to glibc 2.4 is not an option, so I'm stuck, for the time being. Are there other options I could use to configure 1.3.n or 1.4 with the latest valgrind, or can the --with-valgrind option be revived ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thanks - 
</span><br>
<span class="quotelev1">&gt;                         Jim Conboy ( Culham Centre for Fusion Energy )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;&lt;configure_1.4.tgz&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;configure_1.4.tgz&gt;_______________________________________________
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
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11978.php">Jeff Squyres: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>Previous message:</strong> <a href="11976.php">Nicolas Bock: "Re: [OMPI users] Parallel file write in fortran (+mpi)"</a>
<li><strong>In reply to:</strong> <a href="11959.php">Conboy, James: "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11989.php">Conboy, James: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
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
