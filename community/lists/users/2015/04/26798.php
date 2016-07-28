<?
$subject_val = "Re: [OMPI users] Configure failure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 27 17:02:56 2015" -->
<!-- isoreceived="20150427210256" -->
<!-- sent="Mon, 27 Apr 2015 14:02:55 -0700" -->
<!-- isosent="20150427210255" -->
<!-- name="Walt Brainerd" -->
<!-- email="walt.brainerd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure failure" -->
<!-- id="CAPsJ1NZRGTEVZT_8r3PPWXG2mHSSPwo3=M6vxmG_rihGBudQUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="553E9836.40807_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure failure<br>
<strong>From:</strong> Walt Brainerd (<em>walt.brainerd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-27 17:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26799.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is the end of &quot;make all install&quot;. I understand this &quot;all-recursive&quot;
<br>
thing
<br>
is a problem with a GNU compiler. Is there a way around this? I can save
<br>
the whole response to the make script and submit it if you want it, but I
<br>
assume this is something known.
<br>
<p>&nbsp;&nbsp;PPFC     profile/pfile_write_shared_f08.lo
<br>
&nbsp;&nbsp;PPFC     profile/pregister_datarep_f08.lo
<br>
&nbsp;&nbsp;CC       constants.lo
<br>
In file included from ../../../../opal/include/opal_config_bottom.h:256:0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../opal/include/opal_config.h:2797,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from ../../../../ompi/include/ompi_config.h:27,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;from constants.c:10:
<br>
/usr/lib/gcc/x86_64-pc-cygwin/4.9.2/include/stdint.h:9:26: fatal error:
<br>
stdint.h
<br>
: No such file or directory
<br>
&nbsp;# include_next &lt;stdint.h&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
compilation terminated.
<br>
Makefile:4194: recipe for target 'constants.lo' failed
<br>
make[2]: *** [constants.lo] Error 1
<br>
make[2]: Leaving directory
<br>
'/cygdrive/c/walt/Software/Openmpi/openmpi-1.8.4/ompi
<br>
/mpi/fortran/use-mpi-f08'
<br>
Makefile:3126: recipe for target 'all-recursive' failed
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
'/cygdrive/c/walt/Software/Openmpi/openmpi-1.8.4/ompi
<br>
'
<br>
Makefile:1686: recipe for target 'all-recursive' failed
<br>
make: *** [all-recursive] Error 1
<br>
<p>On Mon, Apr 27, 2015 at 1:12 PM, Marco Atzeri &lt;marco.atzeri_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; On 4/27/2015 8:54 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Marco --
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you run into this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The m4 line in question that seems to be the problem is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      [AS_VAR_SET(type_var, [`cat conftestval`])]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does `cat foo` in cygwin result in a ^M in the resulting shell string?
</span><br>
<span class="quotelev2">&gt;&gt; If so, is there a standard way to get rid of it?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; On cygwin it works fine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; configure:33436: checking size of Fortran CHARACTER
</span><br>
<span class="quotelev1">&gt; configure:33504: gcc -std=gnu99 -DNDEBUG -ggdb -O2 -pipe
</span><br>
<span class="quotelev1">&gt; -Wimplicit-function-dec
</span><br>
<span class="quotelev1">&gt; laration
</span><br>
<span class="quotelev1">&gt; -fdebug-prefix-map=/pub/devel/openmpi/openmpi-1.8.5rc3-1.x86_64/build=/
</span><br>
<span class="quotelev1">&gt; usr/src/debug/openmpi-1.8.5rc3-1
</span><br>
<span class="quotelev1">&gt; -fdebug-prefix-map=/pub/devel/openmpi/openmpi-1
</span><br>
<span class="quotelev1">&gt; .8.5rc3-1.x86_64/src/openmpi-1.8.5rc3=/usr/src/debug/openmpi-1.8.5rc3-1
</span><br>
<span class="quotelev1">&gt; -finline
</span><br>
<span class="quotelev1">&gt; -functions -fno-strict-aliasing -fexceptions -I. -c conftest.c
</span><br>
<span class="quotelev1">&gt; configure:33511: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33521: gfortran -ggdb -O2 -pipe
</span><br>
<span class="quotelev1">&gt; -fdebug-prefix-map=/pub/devel/openmpi/
</span><br>
<span class="quotelev1">&gt; openmpi-1.8.5rc3-1.x86_64/build=/usr/src/debug/openmpi-1.8.5rc3-1
</span><br>
<span class="quotelev1">&gt; -fdebug-prefix
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -map=/pub/devel/openmpi/openmpi-1.8.5rc3-1.x86_64/src/openmpi-1.8.5rc3=/usr/src/
</span><br>
<span class="quotelev1">&gt; debug/openmpi-1.8.5rc3-1 -fexceptions  conftestf.f90 conftest.o -o
</span><br>
<span class="quotelev1">&gt; conftest  -fe
</span><br>
<span class="quotelev1">&gt; xceptions
</span><br>
<span class="quotelev1">&gt; configure:33528: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33572: ./conftest
</span><br>
<span class="quotelev1">&gt; configure:33579: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:33595: result: 1
</span><br>
<span class="quotelev1">&gt; configure:33618: checking for C type corresponding to CHARACTER
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26797.php">http://www.open-mpi.org/community/lists/users/2015/04/26797.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Walt Brainerd
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26798/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26799.php">Subhra Mazumdar: "Re: [OMPI users] MPI_THREAD_MULTIPLE and openib btl"</a>
<li><strong>Previous message:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<li><strong>In reply to:</strong> <a href="26797.php">Marco Atzeri: "Re: [OMPI users] Configure failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
<li><strong>Reply:</strong> <a href="26802.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Configure failure"</a>
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
