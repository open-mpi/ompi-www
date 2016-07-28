<?
$subject_val = "[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  2 06:23:52 2010" -->
<!-- isoreceived="20100202112352" -->
<!-- sent="Tue, 2 Feb 2010 11:23:46 -0000" -->
<!-- isosent="20100202112346" -->
<!-- name="Conboy, James" -->
<!-- email="Jim.Conboy_at_[hidden]" -->
<!-- subject="[OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0" -->
<!-- id="4663A30C7056FE4E8EBD7BD0AB9E6B8665D913_at_ntsrv-exch02.jetnet.jet.efda.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0<br>
<strong>From:</strong> Conboy, James (<em>Jim.Conboy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-02 06:23:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11960.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Previous message:</strong> <a href="11958.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure failed the VALGRIND_CHECK_MEM_IS_ADDRESSABLE test, for
<br>
openmpi-1.3.3 or -1.4 with Valgrind 3.5.0 -
<br>
<p>I ran configure with 
<br>
<p>! /bin/csh 
<br>
#!  run configure
<br>
#
<br>
../configure --prefix=/home/pshare/lib/lf95/openmpi-Vg-1.3.3         \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FC=`which lf95` F77=`which lf95`                        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-sge                                              \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-debug                                          \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--enable-memchecker                                     \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-valgrind=/home/pshare/lib/source/valgrind-3.5.0  \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none                              \
<br>
<span class="quotelev1">                                         &gt;&amp; configure.log 
</span><br>
<p>&amp; the log ( attached ) ends with 
<br>
<p>+++ Configuring MCA framework memchecker
<br>
checking for no configure components in framework memchecker... 
<br>
checking for m4 configure components in framework memchecker... valgrind
<br>
<p>--- MCA component memchecker:valgrind (m4 configuration macro)
<br>
checking for MCA component memchecker:valgrind compile mode... static
<br>
checking --with-valgrind value... sanity check ok
<br>
(/home/pshare/lib/source/valgrind-3.5.0)
<br>
checking valgrind/valgrind.h usability... yes
<br>
checking valgrind/valgrind.h presence... yes
<br>
checking for valgrind/valgrind.h... yes
<br>
checking for VALGRIND_CHECK_MEM_IS_ADDRESSABLE... no
<br>
configure: error: Need Valgrind version 3.2.0 or later. Can not build
<br>
component.
<br>
<p>----------------
<br>
<p>Some valgrind header files are not where configure expects to find them
<br>
; to get this far, I added some links ..
<br>
./valgrind-3.5.0/include/valgrind/valgrind.h -&gt; ../valgrind.h
<br>
./valgrind-3.5.0/memcheck.h -&gt; memcheck/memcheck.h
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;..  not a good omen, so no surprise it didn't work. 
<br>
<p>[ See valgrind-3.5.0/NEWS :- 
<br>
&nbsp;&nbsp;- The location of some install files has changed.  This should not
<br>
&nbsp;&nbsp;&nbsp;&nbsp;affect most users.  Those who might be affected:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;* For people who use Valgrind with MPI programs, the installed
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpiwrap.so library has moved from
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(INSTALL)/&lt;platform&gt;/libmpiwrap.so to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$(INSTALL)/libmpiwrap-&lt;platform&gt;.so.                             ]
<br>
<p><p>Configure tidies up in a very determined manner, so I don't have the
<br>
files it used for the failing test. In any case, its likely that the
<br>
problem is deeper than just some header files having moved around.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I also downloaded Valgrind 3.2.1 from their archive, but
<br>
couldn't configure this locally -
<br>
<p>checking the glibc version... unsupported version
<br>
configure: error: Valgrind requires glibc version 2.2, 2.3 or 2.4
<br>
<p>while
<br>
<span class="quotelev1">&gt;rpm -q glibc
</span><br>
glibc-2.9-3.i686
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Persuading sysadmin to roll back to glibc 2.4 is not an option,
<br>
so I'm stuck, for the time being. Are there other options I could use to
<br>
configure 1.3.n or 1.4 with the latest valgrind, or can the
<br>
--with-valgrind option be revived ??
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thanks -
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jim Conboy ( Culham Centre for Fusion Energy )
<br>
<p><p>&nbsp;&lt;&lt;configure_1.4.tgz&gt;&gt; 
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11959/configure_1.4.tgz">configure_1.4.tgz</a>
</ul>
<!-- attachment="configure_1.4.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11960.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<li><strong>Previous message:</strong> <a href="11958.php">Lionel Chailan: "[OMPI users] Uninterruptible processes on 2*4 multicore"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
<li><strong>Reply:</strong> <a href="11977.php">Jeff Squyres: "Re: [OMPI users] Configuring OpenMPI 1.3.3, 1.4  --with-valgrind 3.5.0"</a>
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
