<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 05:29:05 2015" -->
<!-- isoreceived="20150528092905" -->
<!-- sent="Thu, 28 May 2015 09:29:02 +0000" -->
<!-- isosent="20150528092902" -->
<!-- name="Bruno Queiros" -->
<!-- email="bqueiros_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="CAOnd8MBfmV6NHg_wXkHWoh8__9n2xQ_1E_1MG=RfjiOD7=p+Mg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5565FEB5.5090304_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi compilation errors<br>
<strong>From:</strong> Bruno Queiros (<em>bqueiros_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-28 05:29:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26960.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello David
<br>
<p>$&gt; pgf90 hello.f90
<br>
<p>Works OK.
<br>
<p>$&gt; pgcc hello.c
<br>
<p>Gives that license error:
<br>
<p>pgi-cc-lin64: LICENSE MANAGER PROBLEM: No such feature exists.
<br>
Feature:       pgi-cc-lin64
<br>
License path:  /opt/pgi/license.dat:
<br>
FLEXnet Licensing error:-5,357
<br>
For further information, refer to the FLEXnet Licensing documentation,
<br>
available at &quot;www.acresso.com&quot;.
<br>
<p><p>$&gt; pgCC hello.cpp
<br>
<p>Gives some weird compilation errors:
<br>
<p>&quot;/opt/pgi/linux86-64/10.4/include/bits/types.h&quot;, line 159: error: identifier
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;__SWBLK_T_TYPE&quot; is undefined
<br>
&nbsp;&nbsp;__STD_TYPE __SWBLK_T_TYPE __swblk_t; /* Type of a swap block maybe?  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>&quot;/usr/include/time.h&quot;, line 123: error: identifier &quot;__syscall_slong_t&quot; is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;__syscall_slong_t tv_nsec; /* Nanoseconds.  */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>2 errors detected in the compilation of &quot;hello.cpp&quot;.
<br>
<p><p><p><p>Em qua, 27 de mai de 2015 &#195;&#160;s 18:28, David Shrader &lt;dshrader_at_[hidden]&gt;
<br>
escreveu:
<br>
<p><span class="quotelev1">&gt;  Yes, exactly like that. Given your configure line, all of the Portland
</span><br>
<span class="quotelev1">&gt; Group's compilers need to work:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $&gt; pgf90 hello.f90
</span><br>
<span class="quotelev1">&gt; $&gt; pgcc hello.c
</span><br>
<span class="quotelev1">&gt; $&gt; pgCC hello.cpp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What of those commands work for you?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/27/2015 11:01 AM, Bruno Queiros wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Do you mean if Portland Fortran compiler works? Like pgf90 hello.f ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bruno
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Em qua, 27 de mai de 2015 &#195;&#160;s 17:40, David Shrader &lt;dshrader_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; escreveu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  Looking at the config.log, I see this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pgi-cc-lin64: LICENSE MANAGER PROBLEM: No such feature exists.
</span><br>
<span class="quotelev2">&gt;&gt; Feature:       pgi-cc-lin64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It looks like there is a problem with the PGI license. Does it work with
</span><br>
<span class="quotelev2">&gt;&gt; a regular file (e.g., hello_world)? If it does, how do you get it to work
</span><br>
<span class="quotelev2">&gt;&gt; (env variables, license file, etc.)?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 05/27/2015 10:25 AM, Bruno Queiros wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm trying to compile openmpi-1.8.5 with portland fortran 10.4 64bits
</span><br>
<span class="quotelev2">&gt;&gt; on a CentOS7 64bits.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  This is the output i get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  ./configure CC=pgcc CXX=pgCC FC=pgf90 F77=pgf77 F90=pgf90
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt; == Configuring Open MPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ============================================================================
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  *** Startup tests
</span><br>
<span class="quotelev2">&gt;&gt; checking build system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; checking host system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; checking target system type... x86_64-unknown-linux-gnu
</span><br>
<span class="quotelev2">&gt;&gt; checking for gcc... pgcc
</span><br>
<span class="quotelev2">&gt;&gt; checking whether the C compiler works... no
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: in `/root/TransferArea/openmpi-1.8.5':
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: C compiler cannot create executables
</span><br>
<span class="quotelev2">&gt;&gt; See `config.log' for more details
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  The config.log goes as an attachment
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26954.php">http://www.open-mpi.org/community/lists/users/2015/05/26954.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Shrader
</span><br>
<span class="quotelev2">&gt;&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev2">&gt;&gt; Los Alamos National Lab
</span><br>
<span class="quotelev2">&gt;&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26955.php">http://www.open-mpi.org/community/lists/users/2015/05/26955.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26957.php">http://www.open-mpi.org/community/lists/users/2015/05/26957.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Shrader
</span><br>
<span class="quotelev1">&gt; HPC-3 High Performance Computer Systems
</span><br>
<span class="quotelev1">&gt; Los Alamos National Lab
</span><br>
<span class="quotelev1">&gt; Email: dshrader &lt;at&gt; lanl.gov
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/05/26958.php">http://www.open-mpi.org/community/lists/users/2015/05/26958.php</a>
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26961/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26960.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26958.php">David Shrader: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Reply:</strong> <a href="26962.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Openmpi compilation errors"</a>
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
