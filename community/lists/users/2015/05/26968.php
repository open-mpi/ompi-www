<?
$subject_val = "Re: [OMPI users] Openmpi compilation errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 28 13:34:34 2015" -->
<!-- isoreceived="20150528173434" -->
<!-- sent="Thu, 28 May 2015 19:34:31 +0200" -->
<!-- isosent="20150528173431" -->
<!-- name="Luis Kornblueh" -->
<!-- email="luis.kornblueh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi compilation errors" -->
<!-- id="556751A7.5020207_at_mpimet.mpg.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAOnd8MCS9ZzawOfEV_GujGb+JkUfJ1W2qj=HKR8jFN8fc+CNjA_at_mail.gmail.com" -->
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
<strong>From:</strong> Luis Kornblueh (<em>luis.kornblueh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-28 13:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26967.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26967.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Bruno,
<br>
just add a file
<br>
<p>$HOME/.mypgfortranrc
<br>
<p>with the following contents:
<br>
<p>switch -pthread is replace(-lpthread) positional(linker)
<br>
<p>That solve your problem.
<br>
<p>CHeerio,
<br>
Luis
<br>
<p><p>On 28/05/15 19:08, Bruno Queiros wrote:
<br>
<span class="quotelev1">&gt; Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I did get a configure successfull, but make fails with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pgf90-Error-Unknown switch: -pthread
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libmpi_usempi.la &lt;<a href="http://libmpi_usempi.la">http://libmpi_usempi.la</a>&gt;] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have tried and did a fake pgf90 has mentioned on the mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #! /bin/bash
</span><br>
<span class="quotelev1">&gt; newargs='echo $@ | sed s/-pthread//g -'
</span><br>
<span class="quotelev1">&gt; #echo &quot;/opt/pgi/linux86-64/10.4/bin/pgf90  $newargs&quot;
</span><br>
<span class="quotelev1">&gt; /opt/pgi/linux86-64/10.4/bin/pgf90  $newargs
</span><br>
<span class="quotelev1">&gt; exit
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for some reason this doesn't work, the make just stops.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you point me in the right direction?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Em qui, 28 de mai de 2015 &#224;s 14:10, Bruno Queiros &lt;bqueiros_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bqueiros_at_[hidden]&gt;&gt; escreveu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thank you very much Thomas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I will try this
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Em qui, 28 de mai de 2015 &#224;s 12:25, Thomas Jahns &lt;jahns_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:jahns_at_[hidden]&gt;&gt; escreveu:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 05/28/15 12:20, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;          &gt; Sounds like your pgcc compiler installation is busted.
</span><br>
<span class="quotelev1">&gt;         You'll need to get that fixed to compile/install Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         An alternative might be to use a system compiler (which is
</span><br>
<span class="quotelev1">&gt;         probably gcc or
</span><br>
<span class="quotelev1">&gt;         clang) for C and C++ and only use pgfortran for the Fortran
</span><br>
<span class="quotelev1">&gt;         parts of OpenMPI,
</span><br>
<span class="quotelev1">&gt;         i.e. try something like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ./configure CC=gcc CXX=g++ FC=pgf90 F77=pgf77 F90=pgf90
</span><br>
<span class="quotelev1">&gt;         --prefix=/opt/openmpi-1.8.5_pgf90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Regards, Thomas Jahns
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2015/05/26963.php">http://www.open-mpi.org/community/lists/users/2015/05/26963.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26967.php">http://www.open-mpi.org/community/lists/users/2015/05/26967.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>Previous message:</strong> <a href="26967.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<li><strong>In reply to:</strong> <a href="26967.php">Bruno Queiros: "Re: [OMPI users] Openmpi compilation errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26969.php">Luis Kornblueh: "Re: [OMPI users] Openmpi compilation errors"</a>
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
