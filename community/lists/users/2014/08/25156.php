<?
$subject_val = "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 12:17:47 2014" -->
<!-- isoreceived="20140826161747" -->
<!-- sent="Tue, 26 Aug 2014 21:17:47 +0500" -->
<!-- isosent="20140826161747" -->
<!-- name="Syed Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5" -->
<!-- id="CAMvdAs+ucKXexRi6oYuSMEcFnpy5gQ-xBweiGi=JVUoisNvLzw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="424675BF-044C-4A0A-BEBC-AF5167F2BC3B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5<br>
<strong>From:</strong> Syed Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 12:17:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25157.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>In reply to:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff and Ralph
<br>
<p>I could have figured out the issue but the problem was that I cannot find
<br>
the exact error line in config.log just as you identified. The shared
<br>
library libquadmath is present in lib64 directory. So, adding the path to
<br>
the environment removed the error.
<br>
<p>Thank you guys for helping me :)
<br>
<p><p><p>On Tue, Aug 26, 2014 at 7:29 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Just to elaborate: as the error message implies, this error message was
</span><br>
<span class="quotelev1">&gt; put there specifically to ensure that the Fortran compiler works before
</span><br>
<span class="quotelev1">&gt; continuing any further.  If the Fortran compiler is busted, configure exits
</span><br>
<span class="quotelev1">&gt; with this help message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can either fix your Fortran compiler, or use --disable-mpi-fortran to
</span><br>
<span class="quotelev1">&gt; disable all Fortran support from Open MPI (and therefore this &quot;test whether
</span><br>
<span class="quotelev1">&gt; the Fortran compiler works&quot; test will be skipped).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the specific log section showing the failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; configure:32389: checking if Fortran compiler works
</span><br>
<span class="quotelev1">&gt; configure:32418: gfortran -o conftest    conftest.f  &gt;&amp;5
</span><br>
<span class="quotelev1">&gt; configure:32418: $? = 0
</span><br>
<span class="quotelev1">&gt; configure:32418: ./conftest
</span><br>
<span class="quotelev1">&gt; ./conftest: error while loading shared libraries: libquadmath.so.0: wrong
</span><br>
<span class="quotelev1">&gt; ELF class: ELFCLASS32
</span><br>
<span class="quotelev1">&gt; configure:32418: $? = 127
</span><br>
<span class="quotelev1">&gt; configure: program exited with status 127
</span><br>
<span class="quotelev1">&gt; configure: failed program was:
</span><br>
<span class="quotelev1">&gt; |       program main
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; |       end
</span><br>
<span class="quotelev1">&gt; configure:32434: result: no
</span><br>
<span class="quotelev1">&gt; configure:32448: error: Could not run a simple Fortran program.  Aborting.
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 26, 2014, at 10:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Looks like there is something wrong with your gfortran install:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *** Fortran compiler
</span><br>
<span class="quotelev2">&gt; &gt; checking for gfortran... gfortran
</span><br>
<span class="quotelev2">&gt; &gt; checking whether we are using the GNU Fortran compiler... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether gfortran accepts -g... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking whether ln -s works... yes
</span><br>
<span class="quotelev2">&gt; &gt; checking if Fortran compiler works... no
</span><br>
<span class="quotelev2">&gt; &gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; * It appears that your Fortran compiler is unable to produce working
</span><br>
<span class="quotelev2">&gt; &gt; * executables.  A simple test application failed to properly
</span><br>
<span class="quotelev2">&gt; &gt; * execute.  Note that this is likely not a problem with Open MPI,
</span><br>
<span class="quotelev2">&gt; &gt; * but a problem with the local compiler installation.  More
</span><br>
<span class="quotelev2">&gt; &gt; * information (including exactly what command was given to the
</span><br>
<span class="quotelev2">&gt; &gt; * compiler and what error resulted when the command was executed) is
</span><br>
<span class="quotelev2">&gt; &gt; * available in the config.log file in the Open MPI build directory.
</span><br>
<span class="quotelev2">&gt; &gt; **********************************************************************
</span><br>
<span class="quotelev2">&gt; &gt; configure: error: Could not run a simple Fortran program.  Aborting.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; FWIW: I can compile and run on my CentOS6.5 system just fine. I have
</span><br>
<span class="quotelev1">&gt; gfortran 4.4.7 installed on it
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 26, 2014, at 2:59 AM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I have problems in compilation of openmpi-1.8.1 on Linux machine.
</span><br>
<span class="quotelev1">&gt; Kindly see the logs attached.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;configure.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25147.php">http://www.open-mpi.org/community/lists/users/2014/08/25147.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25150.php">http://www.open-mpi.org/community/lists/users/2014/08/25150.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/08/25151.php">http://www.open-mpi.org/community/lists/users/2014/08/25151.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25156/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25157.php">Ralph Castain: "Re: [OMPI users] long initialization"</a>
<li><strong>Previous message:</strong> <a href="25155.php">Pengcheng Wang: "Re: [OMPI users] A daemon on node cl231 failed to start as expected"</a>
<li><strong>In reply to:</strong> <a href="25151.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi-1.8.1 Unable to compile on CentOS6.5"</a>
<!-- nextthread="start" -->
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
